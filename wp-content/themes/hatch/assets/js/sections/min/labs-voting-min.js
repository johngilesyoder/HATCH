!function(t,i,a){t(function(){"use strict";t(document).on("change",".collaboration-input",function(){t(".collaboration-input").is(":checked")?t(this).closest(".collaboration-form").find(".collaboration-text").addClass("is--active"):t(this).closest(".collaboration-form").find(".collaboration-text").removeClass("is--active")});var i=t("#gform_wrapper_9");t(document).on("input","textarea[data-input-id]",function(){t("#input_40_"+t(this).data("input-id")).text(t(this).val())}),t("#input-first-name").keyup(function(){var i=t(this).val();t("#input_40_1_3").attr("value",i)}).keyup(),t("#input-last-name").keyup(function(){var i=t(this).val();t("#input_40_1_6").attr("value",i)}).keyup(),t("#input-email").keyup(function(){var i=t(this).val();t("#input_40_2").attr("value",i)}).keyup()})}(jQuery,this);