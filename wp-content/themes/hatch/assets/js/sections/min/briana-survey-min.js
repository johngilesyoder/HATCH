!function($,t,i){$(function(){"use strict";var t=$("#gform_wrapper_7");$('input[type="range"]').rangeslider(),$(document).on("input","input[data-input-id]",function(){$("#input_7_"+$(this).data("input-id")).val($(this).val()),$(this).siblings("output").val($(this).val()),"0"===$(this).val()&&$(this).siblings("output").html("None")}),$("#input-first-name").keyup(function(){var t=$(this).val();$("#input_7_195_3").attr("value",t)}).keyup(),$("#input-last-name").keyup(function(){var t=$(this).val();$("#input_7_195_6").attr("value",t)}).keyup(),$("#input-email").keyup(function(){var t=$(this).val();$("#input_7_196").attr("value",t)}).keyup()})}(jQuery,this);