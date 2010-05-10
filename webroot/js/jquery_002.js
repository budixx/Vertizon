/**
 * jQuery.ScrollTo - Easy element scrolling using jQuery.
 * Copyright (c) 2007 Ariel Flesler - aflesler(at)gmail(dot)com
 * Licensed under GPL license (http://www.opensource.org/licenses/gpl-license.php).
 * Date: 10/31/2007
 * @author Ariel Flesler
 * @version 1.2.3
 * Compatible with jQuery 1.2.1, tested on Firefox 2.0.0.7, and IE 6, both on Windows.
 **/
(function($){$.scrollTo=function(r,s){return $('html,body').scrollTo(r,s)};$.scrollTo.defaults={axis:'y',speed:1};$.fn.scrollTo=function(r,s){s=$.extend({},$.scrollTo.defaults,s);if(s.axis.length!=2)s.queue=false;if(s.queue)s.speed=Math.ceil(s.speed/2);return this.each(function(){var e=$(this),t=r,u,w,k={};switch(typeof t){case'string':if(/^([+-]=)?\d+(px)?$/.test(t))break;t=$(t,this);case'object':u=$(t).offset()}$.each(s.axis.split(''),o);animate(s.onAfter);function o(i,x){var h=x=='x'?'Left':'Top',n=h.toLowerCase(),z='scroll'+h;k[z]=u?u[n]+(e.is('html,body')?0:e[0][z]-e.offset()[n]):t;if(s.margin&&typeof t=='object')k[z]-=parseInt($(t).css('margin'+h))||0;if(!i&&s.queue){if(e[0][z]!=k[z])animate(s.onAfterFirst);delete k[z]}};function animate(j){e.animate(k,s.speed,s.easing,function(){if(j)j.call(this,e,k,t)})}})}})(jQuery);