!function($,t,i){$(function(){"use strict";$(document).on("change",".collaboration-input",function(){$(".collaboration-input").is(":checked")?$(this).closest(".collaboration-form").find(".collaboration-text").addClass("is--active"):$(this).closest(".collaboration-form").find(".collaboration-text").removeClass("is--active")});var t=$("#gform_wrapper_9");$(document).on("input","textarea[data-input-id]",function(){$("#input_29_"+$(this).data("input-id")).text($(this).val())}),$("#input-first-name").keyup(function(){var t=$(this).val();$("#input_29_184_3").attr("value",t)}).keyup(),$("#input-last-name").keyup(function(){var t=$(this).val();$("#input_29_184_6").attr("value",t)}).keyup(),$("#input-email").keyup(function(){var t=$(this).val();$("#input_29_185").attr("value",t)}).keyup()})}(jQuery,this);