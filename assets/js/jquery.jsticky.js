!function(o){"use strict";o.fn.jsticky=function(s){var e={item_offset:".jeg_header",wrapper:".jeg_navbar_wrapper",state_class:".jeg_sticky_nav",mode:"scroll",use_translate3d:!0,onScrollDown:!1,onScrollUp:!1,onStickyRemoved:!1,broadcast_position:!1};return s=s?o.extend(e,s):o.extend(e),o(this).each((function(){var e,t=1==jnewsoption.admin_bar?32:0,n=0,a=0,r=0,i=o(this),l=i.outerHeight(),d=0,c=0,p=0,_=function(){1==jnewsoption.admin_bar&&(t=o(window).width()<=782&&o(window).width()>600?46:o(window).width()<=600?0:32),e=o(".sticky_blankspace").offset().top};_();o(window).on("scroll",(function(){if("normal"!==s.mode){if(c=o(this).scrollTop(),p=Math.abs(c-a),i.hasClass(s.state_class)||i.addClass("notransition"),c>a){if("scroll"===s.mode){if(c<e+l)return}else if(c<e-t)return;i.addClass(s.state_class),"scroll"===s.mode?(d=r-p)<-l&&(d=-l):"pinned"===s.mode&&p>5&&c>l+t&&(d=-l),"function"==typeof s.onScrollDown&&s.onScrollDown()}else c>e-t?(i.removeClass("notransition"),"scroll"===s.mode&&(d=r+p),("pinned"===s.mode&&p>5||d>0)&&(d=0,i.removeClass("notransition"))):(i.removeClass(s.state_class),d=0,"function"==typeof s.onStickyRemoved&&s.onStickyRemoved()),"function"==typeof s.onScrollUp&&s.onScrollUp();n=c<e-t?0:d+t,i.hasClass(s.state_class)?s.use_translate3d?i.css({"-webkit-transform":"translate3d(0px, "+n+"px, 0px)",transform:"translate3d(0px, "+n+"px, 0px)","--offset":"translate3d(0px, "+t+"px, 0px)"}):i.css({top:n+"px"}):s.use_translate3d?i.css({"-webkit-transform":"",transform:""}):i.css({top:""}),s.broadcast_position&&o(window).trigger("jnews_additional_sticky_margin",l+n),r=d,a=c}})),o(window).on("load resize",(function(){setTimeout(_,200),o("body").hasClass("jeg_sidecontent")&&o(".jeg_header_sticky .jeg_header").hasClass("normal")&&o(".jeg_header.normal .jeg_stickybar.jeg_navbar.jeg_navbar_wrapper.jeg_navbar_normal").css({"max-width":o("body").width()-340+"px"})})),o(document).on("ready",_)}))}}(jQuery);