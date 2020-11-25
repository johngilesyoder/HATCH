<?php

get_header();
$summaryPhoto = get_field('summary_photo');

?>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div id="persistent-cta" class="persistent-cta">
	<div class="cta-info">
		<h1 class="cta-title"><?php the_title(); ?></h1>
		<span class="cta-date"><?php the_field('hero_dates'); ?></span>
	</div>
	<div class="cta-actions">
		<a href="#" class="btn btn-secondary btn-register">Register Now</a>
	</div>
</div>

	<main role="main">

		<!-- HERO -->
		<div class="reunion-hero">
			<div class="hero-bg" style="background-image:url('<?php the_post_thumbnail_url(); ?>');"></div>
			<div class="hero-content">
				<div class="container">
					<h1 class="hero-title"><?php the_title(); ?></h1>
					<span class="hero-date"><?php the_field('hero_dates'); ?></span>
					<a href="<?php the_field('hero_button_url'); ?>" class="btn btn-secondary btn-register"><?php the_field('hero_button_title'); ?></a>
				</div>
			</div>
		</div>

		<!-- SUMMARY -->
		<div class="reunion-summary">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; ?>
						<?php else: ?>
						<?php endif; ?>
					</div>
					<div class="col-md-4">
						<?php if( !empty($summaryPhoto) ): ?>
							<img class="summary-photo" src="<?php echo $summaryPhoto['url']; ?>" alt="<?php echo $summaryPhoto['alt']; ?>" />
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>

		<!-- DETAILS -->
		<div class="reunion-details">
			<div class="container">
				<h2 class="details-title"><span>Details</span></h2>
				<div class="row">
					<div class="col-md-6">
						<div class="detail">
							<i class="material-icons">today</i>
							<h3 class="detail-title">When</h3>
							<p><?php the_field('when'); ?></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="detail">
							<i class="material-icons">place</i>
							<h3 class="detail-title">Where</h3>
							<p><?php the_field('where'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- ACCOMMODATION -->
		<div class="reunion-accommodation">
			<div class="container">
				<h2 class="accommodation-title"><span>Host Hotel(s)</span></h2>

				<?php if( have_rows('hotel') ): ?>

					<?php while( have_rows('hotel') ): the_row();

						// vars
						$hotelName = get_sub_field('hotel_name');
						$hotelDescription = get_sub_field('hotel_description');
						$hotelPhoto = get_sub_field('hotel_photo');

						?>
						<div class="hotel">
							<div class="row">
								<div class="col-md-6">
									<img class="hotel-photo" src="<?php echo $hotelPhoto['url']; ?>">
								</div>
								<div class="col-md-6">
									<h3 class="hotel-title"><?php echo $hotelName; ?></h3>
									<?php echo $hotelDescription; ?>
								</div>
							</div>
						</div>

					<?php endwhile; ?>

				<?php endif; ?>

			</div>
		</div>

		<!-- GOOD TIMES -->
		<div class="reunion-good-times">
			<div class="container">
				<h2 class="good-times-title">Let the Good Times Roll</h2>
				<a href="#reunion-schedule" class="btn btn-light btn-view-schedule">View the Full Schedule &nbsp;&darr;</a>
			</div>
		</div>

		<!-- PLANNING TEAM -->
		<div class="reunion-planning-team">
			<div class="container">
				<h2 class="planning-team-title"><span>Planning Team</span></h2>

				<?php if( have_rows('planning_member') ): ?>

					<div class="people">
						<div class="row">

						<?php while( have_rows('planning_member') ): the_row();

							// vars
							$plannerName = get_sub_field('planner_name');
							$plannerPhoto = get_sub_field('planner_photo');
							$plannerRole = get_sub_field('planner_role');
							$plannerCredential = get_sub_field('planner_credential');

							?>

							<div class="col-md-3">
								<div class="person">
									<img class="person-photo" src="<?php echo $plannerPhoto['url']; ?>">
									<span class="person-name"><?php echo $plannerName; ?></span>
									<span class="person-role"><?php echo $plannerRole; ?></span>
									<span class="person-title"><?php echo $plannerCredential; ?></span>
								</div>
							</div>

						<?php endwhile; ?>

						</div>
					</div>

				<?php endif; ?>

			</div>
		</div>

		<!-- WHY -->
		<div class="reunion-why">
			<div class="hero-bg" style="background-image:url('https://d24wuq6o951i2g.cloudfront.net/img/events/id/273/2735410/assets/887.hatch-above.jpg');"></div>

			<!-- WHO -->
			<div class="reunion-who">
				<div class="container">
					<h2 class="who-title"><span>Who Should Attend?</span></h2>
					<?php the_field('who_should_attend'); ?>
				</div>
			</div>
			<!-- PURPOSE -->
			<div class="reunion-purpose">
				<div class="container">
					<h2 class="purpose-title"><span>Purpose</span></h2>
					<?php the_field('purpose'); ?>
				</div>
			</div>
		</div>

		<!-- WHAT TO EXPECT? -->
		<div class="reunion-expect">
			<div class="container">
				<h2 class="details-title"><span>What to expect</span></h2>
				<div class="row">
					<div class="col-md-4">
						<div class="detail">
							<span class="number">1</span>
							<h3 class="detail-title">Engage</h3>
							<?php the_field('engage'); ?>
						</div>
					</div>
					<div class="col-md-4">
						<div class="detail">
							<span class="number">2</span>
							<h3 class="detail-title">Experience</h3>
							<?php the_field('experience'); ?>
						</div>
					</div>
					<div class="col-md-4">
						<div class="detail">
							<span class="number">3</span>
							<h3 class="detail-title">HATCH</h3>
							<?php the_field('hatch'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- SPONSORSHIP -->
		<div class="reunion-sponsorship">
			<div class="sponsorship-content">
				<h2>Interested in sponsorship opportunities? Let's talk!</h2>
				<?php the_field('sponsorship_contact_method'); ?>
			</div>
		</div>

		<div id="reunion-schedule" class="reunion-schedule">
			<div class="container">

				<h2 class="schedule-title"><span>Reunion Schedule</span></h2>

				<?php // check if the flexible content field has rows of data ?>
				<?php if( have_rows('schedule') ): ?>

					<div class="table-responsive">
						<table class="schedule-table table">
							<thead>
								<tr>
									<th>Activity</th>
									<th>Starts</th>
									<th>Ends</th>
									<th>Location</th>
									<th>Notes</th>
								</tr>
							</thead>

					    <?php // loop through the rows of data ?>
					    <?php while ( have_rows('schedule') ) : the_row(); ?>

					        <?php if( get_row_layout() == 'date_break' ): ?>

					        	<tr class="date-break">
											<th colspan="5"><?php the_sub_field('schedule_date'); ?> (<?php the_sub_field('schedule_day'); ?>)</th>
										</tr>

					        <?php elseif( get_row_layout() == 'item' ): ?>

					        	<tr class="activity">
											<td class="activity-event"><?php the_sub_field('schedule_event'); ?></td>
											<td class="activity-start"><?php the_sub_field('schedule_start'); ?></td>
											<td class="activity-end"><?php the_sub_field('schedule_end'); ?></td>
											<td class="activity-location"><?php the_sub_field('schedule_location'); ?></td>
											<td class="activity-notes"><?php the_sub_field('schedule_notes'); ?></td>
										</tr>

					        <?php endif; ?>

					    <?php endwhile; ?>

						</table>
					</div>

				<?php else : ?>

				    // no layouts found

				<?php endif; ?>
			</div>
		</div>

	</main>

<?php get_footer(); ?>
