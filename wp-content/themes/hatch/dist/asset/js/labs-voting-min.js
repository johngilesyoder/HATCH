!function(t){var e={};function a(n){if(e[n])return e[n].exports;var i=e[n]={i:n,l:!1,exports:{}};return t[n].call(i.exports,i,i.exports,a),i.l=!0,i.exports}a.m=t,a.c=e,a.d=function(t,e,n){a.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:n})},a.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},a.t=function(t,e){if(1&e&&(t=a(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(a.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var i in t)a.d(n,i,function(e){return t[e]}.bind(null,i));return n},a.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return a.d(e,"a",e),e},a.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},a.p="",a(a.s=5)}({"./src/asset/js/labs-voting.js":function(t,e){var a;(a=jQuery)(function(){"use strict";a(".wrapper").readmore({collapsedHeight:300,lessLink:'<a href="#" class="btn-more">Read less</a>',moreLink:'<a href="#" class="btn-more">Read more</a>'}),a(document).on("change",".collaboration-input",function(){a(".collaboration-input").is(":checked")?a(this).closest(".collaboration-form").find(".collaboration-text").addClass("is--active"):a(this).closest(".collaboration-form").find(".collaboration-text").removeClass("is--active")}),a("#gform_wrapper_55"),a(document).on("input","textarea[data-input-id]",function(){a("#input_55_"+a(this).data("input-id")).text(a(this).val())}),a("#input-first-name").keyup(function(){var t=a(this).val();a("#input_55_1_3").attr("value",t)}).keyup(),a("#input-last-name").keyup(function(){var t=a(this).val();a("#input_55_1_6").attr("value",t)}).keyup(),a("#input-email").keyup(function(){var t=a(this).val();a("#input_55_2").attr("value",t)}).keyup(),a(document).on("click",'button[data-type="btn-upvote"]',function(){var t=a(this),e=t.data("project-title"),n=a("#input_55_4"),i=a("#input_55_5"),r=a("#input_55_6");if(t.hasClass("is-selected"))t.removeClass("is-selected"),n.val()===e?n.attr("value",""):i.val()===e?i.attr("value",""):r.val()===e&&r.attr("value","");else{if(a('button[data-type="btn-upvote"].is-selected').length>=3)return void alert("You can only upvote 3 Labs.");t.addClass("is-selected"),""===n.val()?n.attr("value",e):""===i.val()?i.attr("value",e):""===r.val()&&r.attr("value",e)}}),a(document).on("click",'button[data-type="btn-participate"]',function(){var t=a(this),e=t.data("project-title"),n=a("#input_55_3");if(t.hasClass("is-selected"))t.removeClass("is-selected"),n.attr("value","");else{if(a('button[data-type="btn-participate"].is-selected').length>=1)return void alert("You can only select one participation preference.");t.addClass("is-selected"),n.attr("value",e)}}),a(document).on("submit","#gform_55",function(t){var e=[];if(a("#input_55_1_3").val().trim()||e.push("First name is required."),a("#input_55_1_6").val().trim()||e.push("Last name is required."),a("#input_55_2").val().trim()||e.push("Email is required."),a('button[data-type="btn-participate"].is-selected').length<=0&&e.push("You must select a Lab you'd prefer to participate in."),a('button[data-type="btn-upvote"].is-selected').length<=0&&e.push("You must upvote at least one lab."),e.length>0){t.preventDefault();for(var n=a("<ul>"),i=0;i<e.length;i++)n.append(a("<li>",{text:e[i]}));a("#alert-container").html(n).show(),a("#gform_ajax_spinner_55").remove()}else a("#alert-container").hide()})})},5:function(t,e,a){t.exports=a("./src/asset/js/labs-voting.js")}});