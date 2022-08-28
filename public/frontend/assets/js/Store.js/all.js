/*! Lazy Load 1.9.3 - MIT license - Copyright 2010-2013 Mika Tuupola */
!function(a,b,c,d){var e=a(b);a.fn.lazyload=function(f){function g(){var b=0;i.each(function(){var c=a(this);if(!j.skip_invisible||c.is(":visible"))if(a.abovethetop(this,j)||a.leftofbegin(this,j));else if(a.belowthefold(this,j)||a.rightoffold(this,j)){if(++b>j.failure_limit)return!1}else c.trigger("appear"),b=0})}var h,i=this,j={threshold:0,failure_limit:0,event:"scroll",effect:"show",container:b,data_attribute:"original",skip_invisible:!0,appear:null,load:null,placeholder:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"};return f&&(d!==f.failurelimit&&(f.failure_limit=f.failurelimit,delete f.failurelimit),d!==f.effectspeed&&(f.effect_speed=f.effectspeed,delete f.effectspeed),a.extend(j,f)),h=j.container===d||j.container===b?e:a(j.container),0===j.event.indexOf("scroll")&&h.bind(j.event,function(){return g()}),this.each(function(){var b=this,c=a(b);b.loaded=!1,(c.attr("src")===d||c.attr("src")===!1)&&c.is("img")&&c.attr("src",j.placeholder),c.one("appear",function(){if(!this.loaded){if(j.appear){var d=i.length;j.appear.call(b,d,j)}a("<img />").bind("load",function(){var d=c.attr("data-"+j.data_attribute);c.hide(),c.is("img")?c.attr("src",d):c.css("background-image","url('"+d+"')"),c[j.effect](j.effect_speed),b.loaded=!0;var e=a.grep(i,function(a){return!a.loaded});if(i=a(e),j.load){var f=i.length;j.load.call(b,f,j)}}).attr("src",c.attr("data-"+j.data_attribute))}}),0!==j.event.indexOf("scroll")&&c.bind(j.event,function(){b.loaded||c.trigger("appear")})}),e.bind("resize",function(){g()}),/(?:iphone|ipod|ipad).*os 5/gi.test(navigator.appVersion)&&e.bind("pageshow",function(b){b.originalEvent&&b.originalEvent.persisted&&i.each(function(){a(this).trigger("appear")})}),a(c).ready(function(){g()}),this},a.belowthefold=function(c,f){var g;return g=f.container===d||f.container===b?(b.innerHeight?b.innerHeight:e.height())+e.scrollTop():a(f.container).offset().top+a(f.container).height(),g<=a(c).offset().top-f.threshold},a.rightoffold=function(c,f){var g;return g=f.container===d||f.container===b?e.width()+e.scrollLeft():a(f.container).offset().left+a(f.container).width(),g<=a(c).offset().left-f.threshold},a.abovethetop=function(c,f){var g;return g=f.container===d||f.container===b?e.scrollTop():a(f.container).offset().top,g>=a(c).offset().top+f.threshold+a(c).height()},a.leftofbegin=function(c,f){var g;return g=f.container===d||f.container===b?e.scrollLeft():a(f.container).offset().left,g>=a(c).offset().left+f.threshold+a(c).width()},a.inviewport=function(b,c){return!(a.rightoffold(b,c)||a.leftofbegin(b,c)||a.belowthefold(b,c)||a.abovethetop(b,c))},a.extend(a.expr[":"],{"below-the-fold":function(b){return a.belowthefold(b,{threshold:0})},"above-the-top":function(b){return!a.belowthefold(b,{threshold:0})},"right-of-screen":function(b){return a.rightoffold(b,{threshold:0})},"left-of-screen":function(b){return!a.rightoffold(b,{threshold:0})},"in-viewport":function(b){return a.inviewport(b,{threshold:0})},"above-the-fold":function(b){return!a.belowthefold(b,{threshold:0})},"right-of-fold":function(b){return a.rightoffold(b,{threshold:0})},"left-of-fold":function(b){return!a.rightoffold(b,{threshold:0})}})}(jQuery,window,document);

LazyLoad=function(e){function u(t,n){var r=e.createElement(t),i;for(i in n){if(n.hasOwnProperty(i)){r.setAttribute(i,n[i])}}return r}function a(e){var t=r[e],n,o;if(t){n=t.callback;o=t.urls;o.shift();i=0;if(!o.length){n&&n.call(t.context,t.obj);r[e]=null;s[e].length&&l(e)}}}function f(){var n=navigator.userAgent;t={async:e.createElement("script").async===true};(t.webkit=/AppleWebKit\//.test(n))||(t.ie=/MSIE|Trident/.test(n))||(t.opera=/Opera/.test(n))||(t.gecko=/Gecko\//.test(n))||(t.unknown=true)}function l(i,o,l,p,d){var v=function(){a(i)},m=i==="css",g=[],y,b,w,E,S,x;t||f();if(o){o=typeof o==="string"?[o]:o.concat();if(m||t.async||t.gecko||t.opera){s[i].push({urls:o,callback:l,obj:p,context:d})}else{for(y=0,b=o.length;y<b;++y){s[i].push({urls:[o[y]],callback:y===b-1?l:null,obj:p,context:d})}}}if(r[i]||!(E=r[i]=s[i].shift())){return}n||(n=e.head||e.getElementsByTagName("head")[0]);S=E.urls.concat();for(y=0,b=S.length;y<b;++y){x=S[y];if(m){w=t.gecko?u("style"):u("link",{href:x,rel:"stylesheet"})}else{w=u("script",{src:x});w.async=false}w.className="lazyload";w.setAttribute("charset","utf-8");if(t.ie&&!m&&"onreadystatechange"in w&&!("draggable"in w)){w.onreadystatechange=function(){if(/loaded|complete/.test(w.readyState)){w.onreadystatechange=null;v()}}}else if(m&&(t.gecko||t.webkit)){if(t.webkit){E.urls[y]=w.href;h()}else{w.innerHTML='@import "'+x+'";';c(w)}}else{w.onload=w.onerror=v}g.push(w)}for(y=0,b=g.length;y<b;++y){n.appendChild(g[y])}}function c(e){var t;try{t=!!e.sheet.cssRules}catch(n){i+=1;if(i<200){setTimeout(function(){c(e)},50)}else{t&&a("css")}return}a("css")}function h(){var e=r.css,t;if(e){t=o.length;while(--t>=0){if(o[t].href===e.urls[0]){a("css");break}}i+=1;if(e){if(i<200){setTimeout(h,50)}else{a("css")}}}}var t,n,r={},i=0,s={css:[],js:[]},o=e.styleSheets;return{css:function(e,t,n,r){l("css",e,t,n,r)},js:function(e,t,n,r){l("js",e,t,n,r)}}}(this.document)
LazyLoad.css('https://use.fontawesome.com/releases/v5.1.0/css/all.css');

/* countdown timer */
!function(a){"use strict";"function"==typeof define&&define.amd?define(["jquery"],a):a(jQuery)}(function(a){"use strict";function b(a){if(a instanceof Date)return a;if(String(a).match(g))return String(a).match(/^[0-9]*$/)&&(a=Number(a)),String(a).match(/\-/)&&(a=String(a).replace(/\-/g,"/")),new Date(a);throw new Error("Couldn't cast `"+a+"` to a date object.")}function c(a){var b=a.toString().replace(/([.?*+^$[\]\\(){}|-])/g,"\\$1");return new RegExp(b)}function d(a){return function(b){var d=b.match(/%(-|!)?[A-Z]{1}(:[^;]+;)?/gi);if(d)for(var f=0,g=d.length;f<g;++f){var h=d[f].match(/%(-|!)?([a-zA-Z]{1})(:[^;]+;)?/),j=c(h[0]),k=h[1]||"",l=h[3]||"",m=null;h=h[2],i.hasOwnProperty(h)&&(m=i[h],m=Number(a[m])),null!==m&&("!"===k&&(m=e(l,m)),""===k&&m<10&&(m="0"+m.toString()),b=b.replace(j,m.toString()))}return b=b.replace(/%%/,"%")}}function e(a,b){var c="s",d="";return a&&(a=a.replace(/(:|;|\s)/gi,"").split(/\,/),1===a.length?c=a[0]:(d=a[0],c=a[1])),Math.abs(b)>1?c:d}var f=[],g=[],h={precision:100,elapse:!1,defer:!1};g.push(/^[0-9]*$/.source),g.push(/([0-9]{1,2}\/){2}[0-9]{4}( [0-9]{1,2}(:[0-9]{2}){2})?/.source),g.push(/[0-9]{4}([\/\-][0-9]{1,2}){2}( [0-9]{1,2}(:[0-9]{2}){2})?/.source),g=new RegExp(g.join("|"));var i={Y:"years",m:"months",n:"daysToMonth",d:"daysToWeek",w:"weeks",W:"weeksToMonth",H:"hours",M:"minutes",S:"seconds",D:"totalDays",I:"totalHours",N:"totalMinutes",T:"totalSeconds"},j=function(b,c,d){this.el=b,this.$el=a(b),this.interval=null,this.offset={},this.options=a.extend({},h),this.instanceNumber=f.length,f.push(this),this.$el.data("countdown-instance",this.instanceNumber),d&&("function"==typeof d?(this.$el.on("update.countdown",d),this.$el.on("stoped.countdown",d),this.$el.on("finish.countdown",d)):this.options=a.extend({},h,d)),this.setFinalDate(c),this.options.defer===!1&&this.start()};a.extend(j.prototype,{start:function(){null!==this.interval&&clearInterval(this.interval);var a=this;this.update(),this.interval=setInterval(function(){a.update.call(a)},this.options.precision)},stop:function(){clearInterval(this.interval),this.interval=null,this.dispatchEvent("stoped")},toggle:function(){this.interval?this.stop():this.start()},pause:function(){this.stop()},resume:function(){this.start()},remove:function(){this.stop.call(this),f[this.instanceNumber]=null,delete this.$el.data().countdownInstance},setFinalDate:function(a){this.finalDate=b(a)},update:function(){if(0===this.$el.closest("html").length)return void this.remove();var b,c=void 0!==a._data(this.el,"events"),d=new Date;b=this.finalDate.getTime()-d.getTime(),b=Math.ceil(b/1e3),b=!this.options.elapse&&b<0?0:Math.abs(b),this.totalSecsLeft!==b&&c&&(this.totalSecsLeft=b,this.elapsed=d>=this.finalDate,this.offset={seconds:this.totalSecsLeft%60,minutes:Math.floor(this.totalSecsLeft/60)%60,hours:Math.floor(this.totalSecsLeft/60/60)%24,days:Math.floor(this.totalSecsLeft/60/60/24)%7,daysToWeek:Math.floor(this.totalSecsLeft/60/60/24)%7,daysToMonth:Math.floor(this.totalSecsLeft/60/60/24%30.4368),weeks:Math.floor(this.totalSecsLeft/60/60/24/7),weeksToMonth:Math.floor(this.totalSecsLeft/60/60/24/7)%4,months:Math.floor(this.totalSecsLeft/60/60/24/30.4368),years:Math.abs(this.finalDate.getFullYear()-d.getFullYear()),totalDays:Math.floor(this.totalSecsLeft/60/60/24),totalHours:Math.floor(this.totalSecsLeft/60/60),totalMinutes:Math.floor(this.totalSecsLeft/60),totalSeconds:this.totalSecsLeft},this.options.elapse||0!==this.totalSecsLeft?this.dispatchEvent("update"):(this.stop(),this.dispatchEvent("finish")))},dispatchEvent:function(b){var c=a.Event(b+".countdown");c.finalDate=this.finalDate,c.elapsed=this.elapsed,c.offset=a.extend({},this.offset),c.strftime=d(this.offset),this.$el.trigger(c)}}),a.fn.countdown=function(){var b=Array.prototype.slice.call(arguments,0);return this.each(function(){var c=a(this).data("countdown-instance");if(void 0!==c){var d=f[c],e=b[0];j.prototype.hasOwnProperty(e)?d[e].apply(d,b.slice(1)):null===String(e).match(/^[$A-Z_][0-9A-Z_$]*$/i)?(d.setFinalDate.call(d,e),d.start()):a.error("Method %s does not exist on jQuery.countdown".replace(/\%s/gi,e))}else new j(this,b[0],b[1])})}});


/* mean menu 
(function($){"use strict";$.fn.meanmenu=function(options){var defaults={meanMenuTarget:jQuery(this),meanMenuContainer:'body',meanMenuClose:"X",meanMenuCloseSize:"18px",meanMenuOpen:"<span /><span /><span />",meanRevealPosition:"right",meanRevealPositionDistance:"0",meanRevealColour:"",meanScreenWidth:"600",meanNavPush:"",meanShowChildren:!0,meanExpandableChildren:!0,meanExpand:"+",meanContract:"-",meanRemoveAttrs:!1,onePage:!1,meanDisplay:"block",removeElements:""};options=$.extend(defaults,options);var currentWidth=window.innerWidth||document.documentElement.clientWidth;return this.each(function(){var meanMenu=options.meanMenuTarget;var meanContainer=options.meanMenuContainer;var meanMenuClose=options.meanMenuClose;var meanMenuCloseSize=options.meanMenuCloseSize;var meanMenuOpen=options.meanMenuOpen;var meanRevealPosition=options.meanRevealPosition;var meanRevealPositionDistance=options.meanRevealPositionDistance;var meanRevealColour=options.meanRevealColour;var meanScreenWidth=options.meanScreenWidth;var meanNavPush=options.meanNavPush;var meanRevealClass=".meanmenu-reveal";var meanShowChildren=options.meanShowChildren;var meanExpandableChildren=options.meanExpandableChildren;var meanExpand=options.meanExpand;var meanContract=options.meanContract;var meanRemoveAttrs=options.meanRemoveAttrs;var onePage=options.onePage;var meanDisplay=options.meanDisplay;var removeElements=options.removeElements;var isMobile=!1;if((navigator.userAgent.match(/iPhone/i))||(navigator.userAgent.match(/iPod/i))||(navigator.userAgent.match(/iPad/i))||(navigator.userAgent.match(/Android/i))||(navigator.userAgent.match(/Blackberry/i))||(navigator.userAgent.match(/Windows Phone/i))){isMobile=!0}
if((navigator.userAgent.match(/MSIE 8/i))||(navigator.userAgent.match(/MSIE 7/i))){jQuery('html').css("overflow-y","scroll")}
var meanRevealPos="";var meanCentered=function(){if(meanRevealPosition==="center"){var newWidth=window.innerWidth||document.documentElement.clientWidth;var meanCenter=((newWidth/2)-22)+"px";meanRevealPos="left:"+meanCenter+";right:auto;";if(!isMobile){jQuery('.meanmenu-reveal').css("left",meanCenter)}else{jQuery('.meanmenu-reveal').animate({left:meanCenter})}}};var menuOn=!1;var meanMenuExist=!1;if(meanRevealPosition==="right"){meanRevealPos="right:"+meanRevealPositionDistance+";left:auto;"}
if(meanRevealPosition==="left"){meanRevealPos="left:"+meanRevealPositionDistance+";right:auto;"}
meanCentered();var $navreveal="";var meanInner=function(){if(jQuery($navreveal).is(".meanmenu-reveal.meanclose")){$navreveal.html(meanMenuClose)}else{$navreveal.html(meanMenuOpen)}};var meanOriginal=function(){jQuery('.mean-bar,.mean-push').remove();jQuery(meanContainer).removeClass("mean-container");jQuery(meanMenu).css('display',meanDisplay);menuOn=!1;meanMenuExist=!1;jQuery(removeElements).removeClass('mean-remove')};var showMeanMenu=function(){var meanStyles="background:"+meanRevealColour+";color:"+meanRevealColour+";"+meanRevealPos;if(currentWidth<=meanScreenWidth){jQuery(removeElements).addClass('mean-remove');meanMenuExist=!0;jQuery(meanContainer).addClass("mean-container");jQuery('.mean-container').prepend('<div class="mean-bar"><a href="#nav" class="meanmenu-reveal" style="'+meanStyles+'">Show Navigation</a><nav class="mean-nav"></nav></div>');var meanMenuContents=jQuery(meanMenu).html();jQuery('.mean-nav').html(meanMenuContents);if(meanRemoveAttrs){jQuery('nav.mean-nav ul, nav.mean-nav ul *').not('.ampstart-sidebar-nav').each(function(){if(jQuery(this).is('.mean-remove')){jQuery(this).attr('class','mean-remove')}else{jQuery(this).removeAttr("class")}
jQuery(this).removeAttr("id")})}
jQuery(meanMenu).before('<div class="mean-push" />');jQuery('.mean-push').css("margin-top",meanNavPush);jQuery(meanMenu).hide();jQuery(".meanmenu-reveal").show();jQuery(meanRevealClass).html(meanMenuOpen);$navreveal=jQuery(meanRevealClass);jQuery('.mean-nav ul').hide();if(meanShowChildren){if(meanExpandableChildren){jQuery('.mean-nav ul ul').each(function(){if(jQuery(this).children().length){jQuery(this,'li:first').parent().append('<a class="mean-expand" href="#" style="font-size: '+meanMenuCloseSize+'">'+meanExpand+'</a>')}});jQuery('.mean-expand').on("click",function(e){e.preventDefault();if(jQuery(this).hasClass("mean-clicked")){jQuery(this).text(meanExpand);jQuery(this).prev('ul').slideUp(300,function(){})}else{jQuery(this).text(meanContract);jQuery(this).prev('ul').slideDown(300,function(){})}
jQuery(this).toggleClass("mean-clicked")})}else{jQuery('.mean-nav ul ul').show()}}else{jQuery('.mean-nav ul ul').hide()}
jQuery('.mean-nav ul li').last().addClass('mean-last');$navreveal.removeClass("meanclose");jQuery($navreveal).click(function(e){e.preventDefault();if(menuOn===!1){$navreveal.css("text-align","center");$navreveal.css("text-indent","0");$navreveal.css("font-size",meanMenuCloseSize);jQuery('.mean-nav ul:first').slideDown();menuOn=!0}else{jQuery('.mean-nav ul:first').slideUp();menuOn=!1}
$navreveal.toggleClass("meanclose");meanInner();jQuery(removeElements).addClass('mean-remove')});if(onePage){jQuery('.mean-nav ul > li > a:first-child').on("click",function(){jQuery('.mean-nav ul:first').slideUp();menuOn=!1;jQuery($navreveal).toggleClass("meanclose").html(meanMenuOpen)})}}else{meanOriginal()}};if(!isMobile){jQuery(window).resize(function(){currentWidth=window.innerWidth||document.documentElement.clientWidth;if(currentWidth>meanScreenWidth){meanOriginal()}else{meanOriginal()}
if(currentWidth<=meanScreenWidth){showMeanMenu();meanCentered()}else{meanOriginal()}})}
jQuery(window).resize(function(){currentWidth=window.innerWidth||document.documentElement.clientWidth;if(!isMobile){meanOriginal();if(currentWidth<=meanScreenWidth){showMeanMenu();meanCentered()}}else{meanCentered();if(currentWidth<=meanScreenWidth){if(meanMenuExist===!1){showMeanMenu()}}else{meanOriginal()}}});showMeanMenu()})}})(jQuery)
*/

/* jQuery meanMenu v2.0.6 @Copyright (C) 2012-2013 Chris Wharton (https://github.com/weare2ndfloor/meanMenu) 
!function(e){"use strict";e.fn.meanmenu=function(n){var a={meanMenuTarget:jQuery(this),meanMenuContainer:"body",meanMenuClose:"X",meanMenuCloseSize:"18px",meanMenuOpen:"<span /><span /><span />",meanRevealPosition:"right",meanRevealPositionDistance:"0",meanRevealColour:"",meanRevealHoverColour:"",meanScreenWidth:"750",meanNavPush:"",meanShowChildren:!0,meanExpandableChildren:!0,meanExpand:"+",meanContract:"-",meanRemoveAttrs:!1,onePage:!1,removeElements:""},n=e.extend(a,n),t=window.innerWidth||document.documentElement.clientWidth;return this.each(function(){function e(){if("center"==c){var e=window.innerWidth||document.documentElement.clientWidth,n=e/2-22+"px";P="left:"+n+";right:auto;",A?jQuery(".meanmenu-reveal").animate({left:n}):jQuery(".meanmenu-reveal").css("left",n)}}function a(){jQuery(W).is(".meanmenu-reveal.meanclose")?W.html(o):W.html(s)}function r(){jQuery(".mean-bar,.mean-push").remove(),jQuery(m).removeClass("mean-container"),jQuery(u).show(),E=!1,M=!1,jQuery(x).removeClass("mean-remove")}function i(){if(d>=t){jQuery(x).addClass("mean-remove"),M=!0,jQuery(m).addClass("mean-container"),jQuery(".mean-container").prepend('<div class="mean-bar"><a href="#nav" class="meanmenu-reveal" style="'+R+'">Show Navigation</a><nav class="mean-nav"></nav></div>');var e=jQuery(u).html();jQuery(".mean-nav").html(e),C&&jQuery("nav.mean-nav ul, nav.mean-nav ul *").each(function(){jQuery(this).removeAttr("class"),jQuery(this).removeAttr("id")}),jQuery(u).before('<div class="mean-push" />'),jQuery(".mean-push").css("margin-top",y),jQuery(u).hide(),jQuery(".meanmenu-reveal").show(),jQuery(j).html(s),W=jQuery(j),jQuery(".mean-nav ul").hide(),Q?f?(jQuery(".mean-nav ul ul").each(function(){jQuery(this).children().length&&jQuery(this,"li:first").parent().append('<a class="mean-expand" href="#" style="font-size: '+l+'">'+g+"</a>")}),jQuery(".mean-expand").on("click",function(e){e.preventDefault(),jQuery(this).hasClass("mean-clicked")?(jQuery(this).text(g),jQuery(this).prev("ul").slideUp(300,function(){})):(jQuery(this).text(p),jQuery(this).prev("ul").slideDown(300,function(){})),jQuery(this).toggleClass("mean-clicked")})):jQuery(".mean-nav ul ul").show():jQuery(".mean-nav ul ul").hide(),jQuery(".mean-nav ul li").last().addClass("mean-last"),W.removeClass("meanclose"),jQuery(W).click(function(e){e.preventDefault(),0==E?(W.css("text-align","center"),W.css("text-indent","0"),W.css("font-size",l),jQuery(".mean-nav ul:first").slideDown(),E=!0):(jQuery(".mean-nav ul:first").slideUp(),E=!1),W.toggleClass("meanclose"),a(),jQuery(x).addClass("mean-remove")}),w&&jQuery(".mean-nav ul > li > a:first-child").on("click",function(){jQuery(".mean-nav ul:first").slideUp(),E=!1,jQuery(W).toggleClass("meanclose").html(s)})}else r()}var u=n.meanMenuTarget,m=n.meanMenuContainer;n.meanReveal;var o=n.meanMenuClose,l=n.meanMenuCloseSize,s=n.meanMenuOpen,c=n.meanRevealPosition,v=n.meanRevealPositionDistance,h=n.meanRevealColour;n.meanRevealHoverColour;var d=n.meanScreenWidth,y=n.meanNavPush,j=".meanmenu-reveal",Q=n.meanShowChildren,f=n.meanExpandableChildren,g=n.meanExpand,p=n.meanContract,C=n.meanRemoveAttrs,w=n.onePage,x=n.removeElements;if(navigator.userAgent.match(/iPhone/i)||navigator.userAgent.match(/iPod/i)||navigator.userAgent.match(/iPad/i)||navigator.userAgent.match(/Android/i)||navigator.userAgent.match(/Blackberry/i)||navigator.userAgent.match(/Windows Phone/i))var A=!0;(navigator.userAgent.match(/MSIE 8/i)||navigator.userAgent.match(/MSIE 7/i))&&jQuery("html").css("overflow-y","scroll");var E=!1,M=!1;if("right"==c&&(P="right:"+v+";left:auto;"),"left"==c)var P="left:"+v+";right:auto;";e();var R="background:"+h+";color:"+h+";"+P,W="";A||jQuery(window).resize(function(){t=window.innerWidth||document.documentElement.clientWidth,t>d?r():r(),d>=t?(i(),e()):r()}),window.onorientationchange=function(){e(),t=window.innerWidth||document.documentElement.clientWidth,t>=d&&r(),d>=t&&0==M&&i()},i()})}}(jQuery);
*/


var currentDate = new Date();

jq('img[data-original]').lazyload({
    effect : 'fadeIn'
});	
jq(window).scroll();  // for lazyload

if (jq(window).width() < 998) {
	jq('#portal-column-content').after(jq('#portal-column-one'));
	jq('#portal-column-one').addClass('wide');
}

jq('.admin-new-order').click(function() {
	jq('#search-btn a').click();
	jq('input[name=SearchableText]').attr('placeholder', 'begin new order...').focus();
});

if (typeof RTA === 'undefined')
	RTA = {};


if (jq(window).width() <= 750) {
	setTimeout(function() { jq('.contest-countdown-wrapper').slideUp(); }, 4000);
}
jq('.contest-countdown').not('.bf-sale-countdown').countdown(jq('.contest-countdown').data('exp'), function(event) {
	jq(this).html(event.strftime('<span>%D</span> Day%!D <span>%H</span>:<span>%M</span>:<span>%S</span>'));
});	
/* adjust for next sale 
jq('.bf-sale-countdown').countdown(jq('.contest-countdown').data('exp'), function(event) {
	jq(this).html(event.strftime('<span>%H</span>:<span>%M</span>:<span>%S</span>'));
});	
*/


jq(window).scroll(function() {
	if (jq(window).width() < 1024)
		return;

	var wScroll = jq(window).scrollTop();
	
	if (wScroll > 100) {
		
		jq('.nav-new').addClass('reduced');
		if (jq('.topbar .search.reduced-only-inline').length === 0) {
			jq('.topbar').append('<li class="search reduced-only-inline"><a href="/search_form" class="noredir"><span class="fas fa-search"></span> Search</a><form action="/search" method="GET"><input name="SearchableText" type="search" placeholder="Search" aria-label="Search Website"><button type="submit" title="Submit"><span class="fas fa-search"></span></button></form></li>');
		}		
		
		
	}
	else {
		jq('.nav-new').removeClass('reduced');
	}
});


jq(window).keydown(function(e) {
	if(e.which === 116) {
		e.preventDefault();
		location.reload();
	}	
});

jq('#search-btn a').click(function() {
	jq('.search-container').slideToggle();
});
if (navigator.userAgent.indexOf('Mac') !== -1) {
	jq('.search-container input[type=submit]').css('top', '3px');
}

jq('.masterTooltip').hover(function(){
    // Hover over code
    var title = jq(this).attr('title');
    jq(this).data('tipText', title).removeAttr('title');
    jq('<p class="tooltip"></p>')
    .text(title)
    .appendTo('body')
    .fadeIn('slow');
}, function() {
    // Hover out code
    jq(this).attr('title', jq(this).data('tipText'));
    jq('.tooltip').remove();
}).mousemove(function(e) {
    var mousex = e.pageX - 48; //Get X coordinates
    var mousey = e.pageY + 10; //Get Y coordinates
    jq('.tooltip')
    .css({ top: mousey, left: mousex })
});


// lightbox images
jq('.title-colorbox').click(function() {
	var html = '<p>' + jq(this).attr('title') + '</p>';
	jq.colorbox({ html: html, width: 500, maxWidth: '90%', opacity: .5 });
});

jq(".empty-right-now, .lightbox").click(function() {
	if (typeof jq(this).attr('data-lightBoxWidth') !== 'undefined')
		return;
	
	if (jq(this).parent().get(0).tagName != 'A' && jq(this).get(0).tagName == 'IMG') {
		// if element is an image AND its' parent is not a link
		imageUrl = jq(this).attr('src') || jq(this).data('original');
		scalePos = imageUrl.indexOf('/image_');
		if (imageUrl.indexOf('/assets/') !== -1)
			jq.colorbox({ href: imageUrl, photo: true, opacity: .65, onComplete: function() { 	jq('img').bind("contextmenu",function(e){ return false; });  } });			
		else if (scalePos === -1)
			jq.colorbox({ href: imageUrl + '/image_large', photo: true, opacity: .65, onComplete: function() { 	jq('img').bind("contextmenu",function(e){ return false; });  } });
		else {
			url = imageUrl.substring(0,scalePos) + '/image_large';
			jq.colorbox({ href: url, photo: true, opacity: .65, onComplete: function() { 	jq('img').bind("contextmenu",function(e){ return false; });  } });
		}
	}
	else if (jq(this).get(0).tagName == 'A') {
		// element itself is a link			
		jq.colorbox({href: jq(this).attr('href'), photo: true, opacity: .65, onComplete: function() { 	jq('img').bind("contextmenu",function(e){ return false; });  } });
		return false;
	}
	else {
		//parent IS a link, element itself is not a link
		jq.colorbox({ href: jq(this).parent().attr('href'), photo: true, opacity: .65, onComplete: function() { 	jq('img').bind("contextmenu",function(e){ return false; });  } });
	}
});

jq('.addcart-button').click(function() {
	// require user to choose an option if options are available
	if (jq(this).siblings('.options-description').children('select').length) {
		if (jq(this).siblings('.options-description').children('select').val() == '') {
			alert('Please choose an option.');
			return false;			
		}
	}
	
	if (jq(this).siblings('.category-options-description').children('select').length) {
		var url = jq(this).siblings('.category-options-description').children('select').val();
		jq(this).parent().attr('action', url);  // set the form action to the current product url
	}		
});


RTA.testimonialPosition = 0;
RTA.lastTestimonialPosition = 0;
RTA.totalTestimonialSlides = 0;
RTA.testimonialTimeout = null;
RTA.testimonialTransition = function() {
	RTA.testimonialPosition++;
	RTA.lastTestimonialPosition = RTA.testimonialPosition - 1;
	if (RTA.testimonialPosition ==RTA.totalTestimonialSlides)
		RTA.testimonialPosition = 0;
	
	if (RTA.lastTestimonialPosition < 0)
		RTA.lastTestimonialPosition = RTA.totalTestimonialSlides - 1;
		
	jq('#cat-testimonial-wrapper .testimonial:eq(' + RTA.lastTestimonialPosition + ')').fadeOut('slow');
	jq('#cat-testimonial-wrapper .testimonial:eq(' + RTA.testimonialPosition + ')').fadeIn('slow');

	jq('#slide-position span').removeClass('current');
	jq('#slide-position span:eq(' + RTA.testimonialPosition + ')').addClass('current');
	
	RTA.testimonialTimeout = setTimeout(function() { RTA.testimonialTransition() }, 5000);		
}

RTA.setCookie = function (cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires + "; path=/";
}

RTA.getCookie = function (cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
}

//testimonials
RTA.totalTestimonialSlides = jq('#cat-testimonial-wrapper .testimonial').length;

if(RTA.totalTestimonialSlides > 1) {
	jq('#cat-testimonial-wrapper .testimonial').not(':first').hide();
	
	var maxTestHeight = 100;
	jq('#cat-testimonial-wrapper .testimonial').each(function() { 
		if(maxTestHeight < jq(this).height())
			maxTestHeight = jq(this).height();
	});

	jq('#cat-testimonial-wrapper .testimonial').css({'height': (maxTestHeight) + 'px', 'position': 'absolute'});
	jq('#cat-testimonial-wrapper').css({'height': (maxTestHeight + 45) + 'px', 'position': 'relative' })
								  .prepend('<div id="slide-position" />');
	
	
	for(i = 0; i < RTA.totalTestimonialSlides; i++)
		jq('#slide-position').append('<span id="slide-index-' + i + '"></span>');
	
	jq('#slide-position span').first().addClass('current');
	
	jq('#slide-position span').click(function() {
		var position = jq(this).attr('id').split('-').pop();
		RTA.testimonialPosition = position;
		clearTimeout(RTA.testimonialTimeout);

		jq('#cat-testimonial-wrapper .testimonial').hide();
		jq('#cat-testimonial-wrapper .testimonial:eq(' + RTA.testimonialPosition + ')').show();
	
		jq('#slide-position span').removeClass('current');
		jq('#slide-position span:eq(' + RTA.testimonialPosition + ')').addClass('current');		
	});
	
	RTA.testimonialTimeout = setTimeout(function() { 
		
		try {
			RTA.testimonialTransition();
		}
		catch(e) { }
		
	}, 5000);
}


(function($) {
	
	$('.viewOnly').show();
	
	$('.viewOnly input, .viewOnly textarea, .viewOnly select').prop('readonly', true).prop('disabled', true);
	
	$('.viewOnly a').each(function() {
		if ($(this).parents('.listing, .section-reports').length == 1) {
			return;
		}

		console.log('block');
		
		$(this).removeAttr('href');
	});

	$('input[name=sitemode]').click(function() {
		var url;
		if ($(this).val() == 'financing')
			url = '/financing_on';
		else
			url = '/financing_off';

		jq.ajax({
			url: url,
			dataType: 'json',
			data: { ajax: 1 },
			success: function(response) {
				location.reload(true);
			}
		});
	});
	
	$('#cotm-promo-message').each(function() {
		
		if (new Date($(this).data('exp')).valueOf() < new Date().valueOf())
			$(this).remove();
		
		var html = '<p style="margin-bottom: 0; line-height: 2em; font-size: 16px;"><span style="font-weight: bold;">Featured Collection</span>!<br><span style="color: rgb(128, 0, 0);">For <span>an <b>additional ' + $(this).data('promodiscountpercent') + '% off</b>, </span> use coupon code <b>' + $(this).data('promocode') + '</b> at checkout.</p>';
		//var html = '<p style="margin-bottom: 8px; line-height: 1.5em; font-size: 16px;"><span style="font-weight: bold;">Featured Collection</span>!<br><span style="color: rgb(128, 0, 0);"><span style="color: #3a7b08;">10% off</b> on all<br>' + $('h1').text().replace('Kitchen ', '') + ' purchased before April 30th!<br><span style="color: #888;">No promo code required.</span></span>';
		
		//if ($(this).data('promocode'))
		//	html += '<br>Use coupon code <b>' + $(this).data('promocode') + '</b> at checkout.';
		
		html += '</p>';
		$(this).prepend(html);
		
	});

	$('#cotm-promo-manual-message').each(function() {
		
		if (new Date($(this).data('exp')).valueOf() < new Date().valueOf())
			$(this).remove();
	});
	
		
		
	/* new nav 2021 */
	$('.nav-new').on('click', '.search a',  function(e) {
		e.preventDefault();
		$(this).hide();
		$(this).next('form').fadeIn().children('input').focus();
	});
	$('.nav-new .mobile-menu-toggle').on('click', function() {
		$('.mobile-nav-popout').before('<div class="mobile-nav-popout-overlay"></div>');
		$('.mobile-nav-popout').animate( { left: 0 } );
	});
	$('.nav-new .close').on('click', function() {
		$('.mobile-nav-popout-overlay').remove();
		$('.mobile-nav-popout').animate( { left: '-420px' } );
	});
	$('.nav-new .parent').addClass('inactive').on('click', function(e) {
		$(this).toggleClass('inactive');
	});
	
	if (typeof sessionStorage !== 'undefined') {
		if (sessionStorage.getItem('cart_qty')) {
			$('.nav-cart').append('<span class="cart-bubble">' + sessionStorage.getItem('cart_qty') + '</span>'); 
		}
	}
	$('.nav-new,.nav-original').on('click', 'a', function(e) {
	
		var eventParams = {
			'hitType': 'event',
			'eventCategory': 'Navigation',
			'eventAction': 'click',
			'eventLabel': $(this).text(),
			nonInteraction: true
		}
		
		e.preventDefault();
		var href = $(this).attr('href');
			
		if (!$(this).hasClass('noredir')) {
			eventParams['hitCallback'] = function() {
				location.href = href;
			}
			
			setTimeout(function() {
				location.href = href;  // in case event tracking fails
			}, 500);
		}
		
		if (typeof ga !== 'undefined')
			ga.getAll()[0].send(eventParams);	
	
	});
	
	
})(jq);




function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

/*
if (jq(window).width() >= 800 && location.href.indexOf('rtacabinetstore.com') !== -1 && location.href.indexOf('RTA') !== -1) {
	// reduce display to RTA site only and try to avoid checkout pages
	setTimeout(function() {
	  if (jq('.deals').length === 0) {
	    
	    if(RTA.getCookie("optinPopup") != "yes") {
	    
	     RTA.setCookie("optinPopup", "yes", 365);
	      
				jq.colorbox({ iframe: true, href: '/assets/html/pages/popup/popup.html', width: 710, height: 600, maxWidth: '90%', maxHeight: '90%', opacity: 0.5, className: 'deals', scrolling: false });
	      
	    }
	  }
	}, 30000);	
}
*/

jq(window).load(function() {

	jq('.chat').click(function() {
		Beacon("open");
	});
	
	if (getParameterByName('ukey')) {
		jq.ajax({
			url: '/assets/html/user-auth.php',
			data: { noredir: 1, userkey: getParameterByName('ukey') },
			dataType: 'json'
		});
	}
	
	/*
	if (jq('body.variation1').length) {

		jq('ul.navigation li').hover(function(){
			jq(this).find('.drop').stop(1,1).slideUp(100).delay(200).slideDown('fast'); 
		}, function(){
			jq(this).find('.drop').stop(1,1).slideUp('fast');
		});
		
	
		jq('.expand-activator').next().hide();
		jq('.expand-activator').prepend('<i ' + 'class="fa fa-plus-circle"><' + '/i> ');
		jq('.expand-activator').unbind().click(function() {
			jq(this).next().slideToggle();
			jq(this).children('i').toggleClass('fa-plus-circle').toggleClass('fa-minus-circle');
			jq(this).find('.expand-more').toggleClass('expanded');
			
			jq('.expand-activator').not(this).each(function() {
				jq(this).find('.expand-more').removeClass('expanded');
				jq(this).next().slideUp();
				jq(this).children('i').remove();
				jq(this).prepend('<i ' + 'class="fa fa-plus-circle"><' + '/i> ');
			});
		});
	
	
		jq('body').on('click', '#search-btn a', function() {
			if (!jq('.search-container').is(':visible'))
				jq('.search-container').slideDown();
			else {
				if (!(jq('body.home').length))
					jq('.search-container').slideUp();
			}
		});
		
		jq('body').on('click', '#banner', function() {			
			jq('.search-container').slideUp();
		});
	
		jq('body').on('submit', '.optin', function(e) {
			if (jq('input[name=list_name]:checked').length === 0) {
				e.preventDefault();
				jq(this).css('background', '#a00');
				jq('#optin-segment span.green').css('color', '#fff');
			}
		});
	
		if (navigator.userAgent.indexOf('Mac') !== -1) {
			jq('.search-container input[type=submit]').css('top', '3px');
		}
		
	}
	*/
});

if (location.href.indexOf('shipping-returns') !== -1 && location.search.indexOf('iframe') !== -1) {
    jq('.shipping-agree-button').before('<br><br>').addClass('rta-button-flat call').html('I have read and agree to the Shipping &amp; Returns Policy').click(function() {
       parent.jq('#disclaimer').prop('checked', true).prop('disabled', false);
       parent.jq.colorbox.close();
    });
}



if (jq('#bread-checkout-form').length) {
	bread.events.subscribe('onCustomerClose', function(err, custData) {
	  if (err !== null)
	    return;
	  
	  jq.ajax({
		 url: '/credit/ajax/capture.php',
		 data: { email: custData.email, state: custData.state, type: 'RTA' },
	  });
	  
	});
}


if (typeof Storage !== 'undefined') {
	var saveCartKey = 'save-cart-pop' + currentDate.getMonth() + currentDate.getFullYear();
	if (jq('body').data('cart_id') && jq('body').data('anon') == '1' && !(localStorage.getItem(saveCartKey))) {
		
		LazyLoad.js('//assets.rtacabinetstore.com/assets/js/glio-detect-exit.js', function() {
			
			glio.init([ 'top', function () {
				localStorage.setItem(saveCartKey, 1);
				jq.colorbox({ iframe: true, href: '/assets/html/pages/email-my-cart/?cart_id=' + jq('body').data('cart_id'),  width: 644, height: 280, maxWidth: '90%', maxHeight: '90%', scrolling: false, opacity: .5 });
				}]
			);
					
		});
		
	}
}


jq('.mobile-menu-toggle').on('click', function() {
	jq('.mean-nav ul').show();
	jq('.mean-nav').slideToggle();
});


/*
if (!jq('.mean-bar').length) {
	jq('nav').meanmenu();
	
	if (jq('#wrapper.manager').length) {
		setTimeout(function() {
			jq('nav.ampstart-nav').css({'visibility': 'visible', 'height': 'auto', 'overflow': 'visible'}).hide();
		}, 1);
	}
}
*/


