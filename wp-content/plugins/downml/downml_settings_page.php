<div class="wrap">
<h2><?php print DML_PUGIN_NAME ." ". DML_CURRENT_VERSION; ?></h2>
<?php
/*  Copyright 2012  aneeskA  (email : contact@aneeska.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
/* creates a compressed zip file */
function create_zip($files = array(),$destination = '',$overwrite = false) {
	//if the zip file already exists and overwrite is false, return false
	if(file_exists($destination) && !$overwrite) { return false; }
	if(count($files)) {
		//create the archive
		$zip = new ZipArchive();
		if($zip->open($destination,$overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
			return "zip open failed. Exiting<br/>";
		}
		//add the files
		foreach($files as $file) {
			$zip->addFile($file,str_replace('/', '', strrchr($file, '/')));
		}
		//debug
		//echo 'The zip archive contains ',$zip->numFiles,' files with a status of ',$zip->status;
		
		//close the zip -- done!
		$zip->close();
		
		//check to make sure the file exists
		return (string)file_exists($destination);
	}
	else
	{
		return "No valid files found. Exiting<br/>";
	}
}

/* creates a compressed zip file */
function create_zip_Zip($files = array(),$destination = '') {
	if(count($files)) {
		//create the archive
		if (file_exists($destination))
			unlink($destination);
		$zip = new Zip();
		$zip->setZipFile($destination); 

		foreach ($files as $file) {
			$zip->addFile(file_get_contents($file), str_replace('/', '', strrchr($file, '/')));
		}
		$zip->finalize();
		$zip->setZipFile($destination); 

		//check to make sure the file exists
		return (string)file_exists($destination);
	}
	else
	{
		return "No valid files found. Exiting<br/>";
	}
}

function _format_bytes($a_bytes)
{
    if ($a_bytes < 1024) {
        return $a_bytes .' B';
    } elseif ($a_bytes < 1048576) {
        return round($a_bytes / 1024, 2) .' KiB';
    } elseif ($a_bytes < 1073741824) {
        return round($a_bytes / 1048576, 2) . ' MiB';
    } elseif ($a_bytes < 1099511627776) {
        return round($a_bytes / 1073741824, 2) . ' GiB';
    } elseif ($a_bytes < 1125899906842624) {
        return round($a_bytes / 1099511627776, 2) .' TiB';
    } elseif ($a_bytes < 1152921504606846976) {
        return round($a_bytes / 1125899906842624, 2) .' PiB';
    } elseif ($a_bytes < 1180591620717411303424) {
        return round($a_bytes / 1152921504606846976, 2) .' EiB';
    } elseif ($a_bytes < 1208925819614629174706176) {
        return round($a_bytes / 1180591620717411303424, 2) .' ZiB';
    } else {
        return round($a_bytes / 1208925819614629174706176, 2) .' YiB';
    }
}

$media_query = new WP_Query(
    array(
        'post_type' => 'attachment',
        'post_status' => 'inherit',
        'posts_per_page' => -1,
    )
);

$list = array();
$needle=get_site_url();
$total_file_size = 0;
$mllistfile = DML_LOGPATH."mllistfile.txt";
$handle = fopen($mllistfile, "w");

foreach ($media_query->posts as $post) {
	$attached_file = get_attached_file($post->ID);
	if (file_exists($attached_file)) {
		$list[] = $attached_file;
		$total_file_size += filesize($attached_file);
		fwrite ($handle, $attached_file."\n");
	}
	else {
		fwrite ($handle, "[FAIL]".$attached_file."\n");
	}
}
$line = "\nTotal File size = ".$total_file_size."\n";
fwrite($handle, $line);

echo "<br/>Media Library contains ".count($list)."</b> files in excess of "._format_bytes($total_file_size)."</br></br>";

if ($total_file_size > (100 * 1024 * 1024)) {
	echo "<b>Note : Creating a <font size='5'>huge</font> zip file. This page may <i>timeout</i> before zipping is complete.</b></br></br>";
}
echo "Creating compressed file ...";

ob_flush();

$targetfilepath = DML_LOGPATH;
$filename = DML_ZIP_FILE;
$targetfile = $targetfilepath.$filename;
require_once "Zip.php";
if (class_exists(ZipArchive)) {
	$before = time();
	$ret = create_zip ($list, $targetfile, true);
	$after = time();
	$difference = $after - $before;
	fwrite ($handle, "Compression time = ".$difference." seconds");
	$filetype = "Note&nbsp;:&nbsp;This file is of type zip and can be extracted using any unzip application";
}
else if (class_exists(Zip)) {
	$before = time();
	$ret = create_zip_Zip ($list, $targetfile, true);
	$after = time();
	$difference = $after - $before;
	fwrite ($handle, "Compression time = ".$difference." seconds");
	$filetype = "Note&nbsp;:&nbsp;This file is of type zip and can be extracted using any unzip application";
}
else {
	$ret = "Zip support not present in your server. Please contact your server administrator to <a target=\"_blank\"  href=\"http://www.php.net/manual/en/zip.installation.php\">install zip libraries</a>";
}
if ($ret == "1") {
	echo "done. <br/><br/>";
	echo "<b>Download File : <a href=".get_bloginfo('wpurl')."/wp-content".DML_LOG_FILE.$filename.">".str_replace('/', '', $filename)."</a></b>&nbsp;("._format_bytes(filesize ($targetfile)).")<br/><br/>";
	echo $filetype."<br/>";
}
else {
	echo "failed. <br/><br/>";
	echo "Sorry Sonny! Something went wrong. <b>Reason : ".$ret."</b><br/>";
}
echo '<br/><br/><table><tr bgcolor="#cec9c9"><td><b>&nbsp;&nbsp;&nbsp;Feel free to contact the author - <a href="http://aneeskA.com" target="_blank">aneeskA</a> - for any clarification at <i>contact(at)aneeskA(dot)com</i>&nbsp;&nbsp;</b></td></tr></table>';
fclose ($handle);
?>
</div>

