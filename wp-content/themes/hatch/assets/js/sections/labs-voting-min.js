!function(t,e,a){t(function(){"use strict";t(document).on("change",".collaboration-input",function(){t(".collaboration-input").is(":checked")?t(this).closest(".collaboration-form").find(".collaboration-text").addClass("is--active"):t(this).closest(".collaboration-form").find(".collaboration-text").removeClass("is--active")});var e=t("#gform_wrapper_55");t(document).on("input","textarea[data-input-id]",function(){t("#input_55_"+t(this).data("input-id")).text(t(this).val())}),t("#input-first-name").keyup(function(){var e=t(this).val();t("#input_55_1_3").attr("value",e)}).keyup(),t("#input-last-name").keyup(function(){var e=t(this).val();t("#input_55_1_6").attr("value",e)}).keyup(),t("#input-email").keyup(function(){var e=t(this).val();t("#input_55_2").attr("value",e)}).keyup(),t(document).on("click",'button[data-type="btn-upvote"]',function(){var e=t(this),a=e.data("project-title"),i=t("#input_55_4"),n=t("#input_55_5"),l=t("#input_55_6");if(e.hasClass("is-selected"))e.removeClass("is-selected"),i.val()===a?i.attr("value",""):n.val()===a?n.attr("value",""):l.val()===a&&l.attr("value","");else{if(t('button[data-type="btn-upvote"].is-selected').length>=3)return void alert("You can only upvote 3 Labs.");e.addClass("is-selected"),""===i.val()?i.attr("value",a):""===n.val()?n.attr("value",a):""===l.val()&&l.attr("value",a)}}),t(document).on("click",'button[data-type="btn-participate"]',function(){var e=t(this),a=e.data("project-title"),i=t("#input_55_3");if(e.hasClass("is-selected"))e.removeClass("is-selected"),i.attr("value","");else{if(t('button[data-type="btn-participate"].is-selected').length>=1)return void alert("You can only select one participation preference.");e.addClass("is-selected"),i.attr("value",a)}}),t(document).on("submit","#gform_55",function(e){var a=[];if(t("#input_55_1_3").val().trim()||a.push("First name is required."),t("#input_55_1_6").val().trim()||a.push("Last name is required."),t("#input_55_2").val().trim()||a.push("Email is required."),t('button[data-type="btn-participate"].is-selected').length<=0&&a.push("You must select a Lab you'd prefer to participate in."),t('button[data-type="btn-upvote"].is-selected').length<=0&&a.push("You must upvote at least one lab."),a.length>0){e.preventDefault();for(var i=t("<ul>"),n=0;n<a.length;n++)i.append(t("<li>",{text:a[n]}));t("#alert-container").html(i).show(),t("#gform_ajax_spinner_55").remove()}else t("#alert-container").hide()})})}(jQuery,this);