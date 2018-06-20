/**
 * File form.js.
 *
 * Theme functions.
 */

 /*! modernizr 3.6.0 (Custom Build) | MIT *
 * https://modernizr.com/download/?-formattribute-formvalidation-inputformaction-inputformtarget-inputtypes-requestautocomplete-setclasses !*/
!function(e,t,n){function r(e,t){return typeof e===t}function i(){var e,t,n,i,o,a,s;for(var l in C)if(C.hasOwnProperty(l)){if(e=[],t=C[l],t.name&&(e.push(t.name.toLowerCase()),t.options&&t.options.aliases&&t.options.aliases.length))for(n=0;n<t.options.aliases.length;n++)e.push(t.options.aliases[n].toLowerCase());for(i=r(t.fn,"function")?t.fn():t.fn,o=0;o<e.length;o++)a=e[o],s=a.split("."),1===s.length?Modernizr[s[0]]=i:(!Modernizr[s[0]]||Modernizr[s[0]]instanceof Boolean||(Modernizr[s[0]]=new Boolean(Modernizr[s[0]])),Modernizr[s[0]][s[1]]=i),h.push((i?"":"no-")+s.join("-"))}}function o(e){var t=S.className,n=Modernizr._config.classPrefix||"";if(w&&(t=t.baseVal),Modernizr._config.enableJSClass){var r=new RegExp("(^|\\s)"+n+"no-js(\\s|$)");t=t.replace(r,"$1"+n+"js$2")}Modernizr._config.enableClasses&&(t+=" "+n+e.join(" "+n),w?S.className.baseVal=t:S.className=t)}function a(){return"function"!=typeof t.createElement?t.createElement(arguments[0]):w?t.createElementNS.call(t,"http://www.w3.org/2000/svg",arguments[0]):t.createElement.apply(t,arguments)}function s(e){return e.replace(/([a-z])-([a-z])/g,function(e,t,n){return t+n.toUpperCase()}).replace(/^-/,"")}function l(){var e=t.body;return e||(e=a(w?"svg":"body"),e.fake=!0),e}function u(e,n,r,i){var o,s,u,f,d="modernizr",p=a("div"),c=l();if(parseInt(r,10))for(;r--;)u=a("div"),u.id=i?i[r]:d+(r+1),p.appendChild(u);return o=a("style"),o.type="text/css",o.id="s"+d,(c.fake?c:p).appendChild(o),c.appendChild(p),o.styleSheet?o.styleSheet.cssText=e:o.appendChild(t.createTextNode(e)),p.id=d,c.fake&&(c.style.background="",c.style.overflow="hidden",f=S.style.overflow,S.style.overflow="hidden",S.appendChild(c)),s=n(p,e),c.fake?(c.parentNode.removeChild(c),S.style.overflow=f,S.offsetHeight):p.parentNode.removeChild(p),!!s}function f(e,t){return!!~(""+e).indexOf(t)}function d(e,t){return function(){return e.apply(t,arguments)}}function p(e,t,n){var i;for(var o in e)if(e[o]in t)return n===!1?e[o]:(i=t[e[o]],r(i,"function")?d(i,n||t):i);return!1}function c(e){return e.replace(/([A-Z])/g,function(e,t){return"-"+t.toLowerCase()}).replace(/^ms-/,"-ms-")}function m(t,n,r){var i;if("getComputedStyle"in e){i=getComputedStyle.call(e,t,n);var o=e.console;if(null!==i)r&&(i=i.getPropertyValue(r));else if(o){var a=o.error?"error":"log";o[a].call(o,"getComputedStyle returning null, its possible modernizr test results are inaccurate")}}else i=!n&&t.currentStyle&&t.currentStyle[r];return i}function v(t,r){var i=t.length;if("CSS"in e&&"supports"in e.CSS){for(;i--;)if(e.CSS.supports(c(t[i]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var o=[];i--;)o.push("("+c(t[i])+":"+r+")");return o=o.join(" or "),u("@supports ("+o+") { #modernizr { position: absolute; } }",function(e){return"absolute"==m(e,null,"position")})}return n}function g(e,t,i,o){function l(){d&&(delete L.style,delete L.modElem)}if(o=r(o,"undefined")?!1:o,!r(i,"undefined")){var u=v(e,i);if(!r(u,"undefined"))return u}for(var d,p,c,m,g,y=["modernizr","tspan","samp"];!L.style&&y.length;)d=!0,L.modElem=a(y.shift()),L.style=L.modElem.style;for(c=e.length,p=0;c>p;p++)if(m=e[p],g=L.style[m],f(m,"-")&&(m=s(m)),L.style[m]!==n){if(o||r(i,"undefined"))return l(),"pfx"==t?m:!0;try{L.style[m]=i}catch(h){}if(L.style[m]!=g)return l(),"pfx"==t?m:!0}return l(),!1}function y(e,t,n,i,o){var a=e.charAt(0).toUpperCase()+e.slice(1),s=(e+" "+k.join(a+" ")+a).split(" ");return r(t,"string")||r(t,"undefined")?g(s,t,i,o):(s=(e+" "+P.join(a+" ")+a).split(" "),p(s,t,n))}var h=[],C=[],b={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,t){var n=this;setTimeout(function(){t(n[e])},0)},addTest:function(e,t,n){C.push({name:e,fn:t,options:n})},addAsyncTest:function(e){C.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=b,Modernizr=new Modernizr;var S=t.documentElement,w="svg"===S.nodeName.toLowerCase();Modernizr.addTest("formattribute",function(){var e,n=a("form"),r=a("input"),i=a("div"),o="formtest"+(new Date).getTime(),s=!1;n.id=o;try{r.setAttribute("form",o)}catch(l){t.createAttribute&&(e=t.createAttribute("form"),e.nodeValue=o,r.setAttributeNode(e))}return i.appendChild(n),i.appendChild(r),S.appendChild(i),s=n.elements&&1===n.elements.length&&r.form==n,i.parentNode.removeChild(i),s});var x=a("input"),_="search tel url email datetime date month week time datetime-local number range color".split(" "),T={};Modernizr.inputtypes=function(e){for(var r,i,o,a=e.length,s="1)",l=0;a>l;l++)x.setAttribute("type",r=e[l]),o="text"!==x.type&&"style"in x,o&&(x.value=s,x.style.cssText="position:absolute;visibility:hidden;",/^range$/.test(r)&&x.style.WebkitAppearance!==n?(S.appendChild(x),i=t.defaultView,o=i.getComputedStyle&&"textfield"!==i.getComputedStyle(x,null).WebkitAppearance&&0!==x.offsetHeight,S.removeChild(x)):/^(search|tel)$/.test(r)||(o=/^(url|email)$/.test(r)?x.checkValidity&&x.checkValidity()===!1:x.value!=s)),T[e[l]]=!!o;return T}(_);var E=b.testStyles=u;Modernizr.addTest("formvalidation",function(){var t=a("form");if(!("checkValidity"in t&&"addEventListener"in t))return!1;if("reportValidity"in t)return!0;var n,r=!1;return Modernizr.formvalidationapi=!0,t.addEventListener("submit",function(t){(!e.opera||e.operamini)&&t.preventDefault(),t.stopPropagation()},!1),t.innerHTML='<input name="modTest" required="required" /><button></button>',E("#modernizr form{position:absolute;top:-99999em}",function(e){e.appendChild(t),n=t.getElementsByTagName("input")[0],n.addEventListener("invalid",function(e){r=!0,e.preventDefault(),e.stopPropagation()},!1),Modernizr.formvalidationmessage=!!n.validationMessage,t.getElementsByTagName("button")[0].click()}),r});var A="Moz O ms Webkit",k=b._config.usePrefixes?A.split(" "):[];b._cssomPrefixes=k;var N=function(t){var r,i=prefixes.length,o=e.CSSRule;if("undefined"==typeof o)return n;if(!t)return!1;if(t=t.replace(/^@/,""),r=t.replace(/-/g,"_").toUpperCase()+"_RULE",r in o)return"@"+t;for(var a=0;i>a;a++){var s=prefixes[a],l=s.toUpperCase()+"_"+r;if(l in o)return"@-"+s.toLowerCase()+"-"+t}return!1};b.atRule=N;var P=b._config.usePrefixes?A.toLowerCase().split(" "):[];b._domPrefixes=P;var z={elem:a("modernizr")};Modernizr._q.push(function(){delete z.elem});var L={style:z.elem.style};Modernizr._q.unshift(function(){delete L.style}),b.testAllProps=y;var V=b.prefixed=function(e,t,n){return 0===e.indexOf("@")?N(e):(-1!=e.indexOf("-")&&(e=s(e)),t?y(e,t,n):y(e,"pfx"))};Modernizr.addTest("requestautocomplete",!!V("requestAutocomplete",a("form"))),Modernizr.addTest("inputformaction",!!("formAction"in a("input")),{aliases:["input-formaction"]}),Modernizr.addTest("inputformtarget",!!("formtarget"in a("input")),{aliases:["input-formtarget"]}),i(),o(h),delete b.addTest,delete b.addAsyncTest;for(var q=0;q<Modernizr._q.length;q++)Modernizr._q[q]();e.Modernizr=Modernizr}(window,document);

/*!
 * classie - class helper functions
 * from bonzo https://github.com/ded/bonzo
 * 
 * classie.has( elem, 'my-class' ) -> true/false
 * classie.add( elem, 'my-new-class' )
 * classie.remove( elem, 'my-unwanted-class' )
 * classie.toggle( elem, 'my-class' )
 */
!function(s){"use strict";function e(s){return new RegExp("(^|\\s+)"+s+"(\\s+|$)")}function n(s,e){(a(s,e)?c:t)(s,e)}var a,t,c;"classList"in document.documentElement?(a=function(s,e){return s.classList.contains(e)},t=function(s,e){s.classList.add(e)},c=function(s,e){s.classList.remove(e)}):(a=function(s,n){return e(n).test(s.className)},t=function(s,e){a(s,e)||(s.className=s.className+" "+e)},c=function(s,n){s.className=s.className.replace(e(n)," ")});var i={hasClass:a,addClass:t,removeClass:c,toggleClass:n,has:a,add:t,remove:c,toggle:n};"function"==typeof define&&define.amd?define(i):s.classie=i}(window);

/**
 * selectFx.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2014, Codrops
 * http://www.codrops.com
 */
 !function(e){"use strict";function t(e,t){if(!e)return!1;for(var s=e.target||e.srcElement||e||!1;s&&s!=t;)s=s.parentNode||!1;return!1!==s}function s(e,t){for(var s in t)t.hasOwnProperty(s)&&(e[s]=t[s]);return e}function l(e,t){this.el=e,this.options=s({},this.options),s(this.options,t),this._init()}l.prototype.options={newTab:!0,stickyPlaceholder:!0,onChange:function(e){return!1}},l.prototype._init=function(){var e=this.el.querySelector("option[selected]");this.hasDefaultPlaceholder=e&&e.disabled,this.selectedOpt=e||this.el.querySelector("option"),this._createSelectEl(),this.selOpts=[].slice.call(this.selEl.querySelectorAll("li[data-option]")),this.selOptsCount=this.selOpts.length,this.current=this.selOpts.indexOf(this.selEl.querySelector("li.cs-selected"))||-1,this.selPlaceholder=this.selEl.querySelector("span.cs-placeholder"),this._initEvents()},l.prototype._createSelectEl=function(){var e=this,t="",s=function(e){var t="",s="",l="";return!e.selectedOpt||this.foundSelected||this.hasDefaultPlaceholder||(s+="cs-selected ",this.foundSelected=!0),e.getAttribute("data-class")&&(s+=e.getAttribute("data-class")),e.getAttribute("data-link")&&(l="data-link="+e.getAttribute("data-link")),""!==s&&(t='class="'+s+'" '),"<li "+t+l+' data-option data-value="'+e.value+'"><span>'+e.textContent+"</span></li>"};[].slice.call(this.el.children).forEach(function(e){if(!e.disabled){var l=e.tagName.toLowerCase();"option"===l?t+=s(e):"optgroup"===l&&(t+='<li class="cs-optgroup"><span>'+e.label+"</span><ul>",[].slice.call(e.children).forEach(function(e){t+=s(e)}),t+="</ul></li>")}});var l='<div class="cs-options"><ul>'+t+"</ul></div>";this.selEl=document.createElement("div"),this.selEl.className=this.el.className,this.selEl.tabIndex=this.el.tabIndex,this.selEl.innerHTML='<span class="cs-placeholder">'+this.selectedOpt.textContent+"</span>"+l,this.el.parentNode.appendChild(this.selEl),this.selEl.appendChild(this.el)},l.prototype._initEvents=function(){var e=this;this.selPlaceholder.addEventListener("click",function(){e._toggleSelect()}),this.selOpts.forEach(function(t,s){t.addEventListener("click",function(){e.current=s,e._changeOption(),e._toggleSelect()})}),document.addEventListener("click",function(s){var l=s.target;e._isOpen()&&l!==e.selEl&&!t(l,e.selEl)&&e._toggleSelect()}),this.selEl.addEventListener("keydown",function(t){switch(t.keyCode||t.which){case 38:t.preventDefault(),e._navigateOpts("prev");break;case 40:t.preventDefault(),e._navigateOpts("next");break;case 32:t.preventDefault(),e._isOpen()&&void 0!==e.preSelCurrent&&-1!==e.preSelCurrent&&e._changeOption(),e._toggleSelect();break;case 13:t.stopPropagation(),t.preventDefault(),e._isOpen()&&void 0!==e.preSelCurrent&&-1!==e.preSelCurrent&&(e._changeOption(),e._toggleSelect());break;case 27:t.preventDefault(),e._isOpen()&&e._toggleSelect();break}})},l.prototype._navigateOpts=function(e){this._isOpen()||this._toggleSelect();var t=void 0!==this.preSelCurrent&&-1!==this.preSelCurrent?this.preSelCurrent:this.current;("prev"===e&&t>0||"next"===e&&t<this.selOptsCount-1)&&(this.preSelCurrent="next"===e?t+1:t-1,this._removeFocus(),classie.add(this.selOpts[this.preSelCurrent],"cs-focus"))},l.prototype._toggleSelect=function(){this._removeFocus(),this._isOpen()?(-1!==this.current&&(this.selPlaceholder.textContent=this.selOpts[this.current].textContent),classie.remove(this.selEl,"cs-active")):(this.hasDefaultPlaceholder&&this.options.stickyPlaceholder&&(this.selPlaceholder.textContent=this.selectedOpt.textContent),classie.add(this.selEl,"cs-active"))},l.prototype._changeOption=function(){void 0!==this.preSelCurrent&&-1!==this.preSelCurrent&&(this.current=this.preSelCurrent,this.preSelCurrent=-1);var t=this.selOpts[this.current];this.selPlaceholder.textContent=t.textContent,this.el.value=t.getAttribute("data-value");var s=this.selEl.querySelector("li.cs-selected");s&&classie.remove(s,"cs-selected"),classie.add(t,"cs-selected"),t.getAttribute("data-link")&&(this.options.newTab?e.open(t.getAttribute("data-link"),"_blank"):e.location=t.getAttribute("data-link")),this.options.onChange(this.el.value)},l.prototype._isOpen=function(e){return classie.has(this.selEl,"cs-active")},l.prototype._removeFocus=function(e){var t=this.selEl.querySelector("li.cs-focus");t&&classie.remove(t,"cs-focus")},e.SelectFx=l}(window);

/**
 * fullscreenForm.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2014, Codrops
 * http://www.codrops.com
 */
!function(t){"use strict";function e(t,e){for(var s in e)e.hasOwnProperty(s)&&(t[s]=e[s]);return t}function s(t,e){var s=document.createElement(t);return e&&(e.cName&&(s.className=e.cName),e.inner&&(s.innerHTML=e.inner),e.appendTo&&e.appendTo.appendChild(s)),s}function i(t,s){this.el=t,this.options=e({},this.options),e(this.options,s),this._init()}var r={animations:Modernizr.cssanimations},n={WebkitAnimation:"webkitAnimationEnd",OAnimation:"oAnimationEnd",msAnimation:"MSAnimationEnd",animation:"animationend"},o=n[Modernizr.prefixed("animation")];i.prototype.options={ctrlProgress:!0,ctrlNavDots:!0,ctrlNavPosition:!0,onReview:function(){return!1}},i.prototype._init=function(){this.formEl=this.el.querySelector("form"),this.fieldsList=this.formEl.querySelector(".gform_fields"),this.current=0,this.fields=[].slice.call(this.fieldsList.children),this.fieldsCount=this.fields.length,classie.add(this.fields[this.current],"fs-current"),this._addControls(),this._addErrorMsg(),this._initEvents()},i.prototype._addControls=function(){if(this.ctrls=s("div",{cName:"fs-controls",appendTo:this.el}),this.ctrlContinue=s("button",{cName:"fs-continue",inner:"Continue",appendTo:this.ctrls}),this._showCtrl(this.ctrlContinue),this.options.ctrlNavDots){this.ctrlNav=s("nav",{cName:"fs-nav-dots",appendTo:this.ctrls});for(var t="",e=0;e<this.fieldsCount;++e)t+=e===this.current?'<button class="fs-dot-current"></button>':"<button disabled></button>";this.ctrlNav.innerHTML=t,this._showCtrl(this.ctrlNav),this.ctrlNavDots=[].slice.call(this.ctrlNav.children)}this.options.ctrlNavPosition&&(this.ctrlFldStatus=s("span",{cName:"fs-numbers",appendTo:this.ctrls}),this.ctrlFldStatusCurr=s("span",{cName:"fs-number-current",inner:Number(this.current+1)}),this.ctrlFldStatus.appendChild(this.ctrlFldStatusCurr),this.ctrlFldStatusTotal=s("span",{cName:"fs-number-total",inner:this.fieldsCount}),this.ctrlFldStatus.appendChild(this.ctrlFldStatusTotal),this._showCtrl(this.ctrlFldStatus)),this.options.ctrlProgress&&(this.ctrlProgress=s("div",{cName:"fs-progress",appendTo:this.ctrls}),this._showCtrl(this.ctrlProgress))},i.prototype._addErrorMsg=function(){this.msgError=s("span",{cName:"fs-message-error",appendTo:this.el})},i.prototype._initEvents=function(){var t=this;this.ctrlContinue.addEventListener("click",function(){t._nextField()}),this.options.ctrlNavDots&&this.ctrlNavDots.forEach(function(e,s){e.addEventListener("click",function(){t._showField(s)})}),this.fields.forEach(function(e){if(e.hasAttribute("data-input-trigger")){var s=e.querySelector('input[type="radio"]')||e.querySelector("select");if(!s)return;switch(s.tagName.toLowerCase()){case"select":s.addEventListener("change",function(){t._nextField()});break;case"input":[].slice.call(e.querySelectorAll('input[type="radio"]')).forEach(function(e){e.addEventListener("change",function(e){t._nextField()})});break}}}),document.addEventListener("keydown",function(e){if(!t.isLastStep&&"textarea"!==e.target.tagName.toLowerCase()){13===(e.keyCode||e.which)&&(e.preventDefault(),t._nextField())}})},i.prototype._nextField=function(t){if(this.isLastStep||!this._validade()||this.isAnimating)return!1;this.isAnimating=!0,this.isLastStep=this.current===this.fieldsCount-1&&void 0===t,this._clearError();var e=this.fields[this.current];if(this.navdir=void 0!==t&&t<this.current?"prev":"next",this.current=void 0!==t?t:this.current+1,void 0===t&&(this._progress(),this.farthest=this.current),classie.add(this.fieldsList,"fs-display-"+this.navdir),classie.remove(e,"fs-current"),classie.add(e,"fs-hide"),!this.isLastStep){this._updateNav(),this._updateFieldNumber();var s=this.fields[this.current];classie.add(s,"fs-current"),classie.add(s,"fs-show")}var i=this,n=function(t){r.animations&&this.removeEventListener(o,n),classie.remove(i.fieldsList,"fs-display-"+i.navdir),classie.remove(e,"fs-hide"),i.isLastStep?(i._hideCtrl(i.ctrlNav),i._hideCtrl(i.ctrlProgress),i._hideCtrl(i.ctrlContinue),i._hideCtrl(i.ctrlFldStatus),classie.remove(i.formEl,"fs-form-full"),classie.add(i.formEl,"fs-form-overview"),classie.add(i.formEl,"fs-show"),i.options.onReview()):(classie.remove(s,"fs-show"),i.options.ctrlNavPosition&&(i.ctrlFldStatusCurr.innerHTML=i.ctrlFldStatusNew.innerHTML,i.ctrlFldStatus.removeChild(i.ctrlFldStatusNew),classie.remove(i.ctrlFldStatus,"fs-show-"+i.navdir))),i.isAnimating=!1};r.animations?"next"===this.navdir?this.isLastStep?e.querySelector(".fs-anim-upper").addEventListener(o,n):s.querySelector(".fs-anim-lower").addEventListener(o,n):s.querySelector(".fs-anim-upper").addEventListener(o,n):n()},i.prototype._showField=function(t){if(t===this.current||t<0||t>this.fieldsCount-1)return!1;this._nextField(t)},i.prototype._updateFieldNumber=function(){if(this.options.ctrlNavPosition){this.ctrlFldStatusNew=document.createElement("span"),this.ctrlFldStatusNew.className="fs-number-new",this.ctrlFldStatusNew.innerHTML=Number(this.current+1),this.ctrlFldStatus.appendChild(this.ctrlFldStatusNew);var t=this;setTimeout(function(){classie.add(t.ctrlFldStatus,"next"===t.navdir?"fs-show-next":"fs-show-prev")},25)}},i.prototype._progress=function(){this.options.ctrlProgress&&(this.ctrlProgress.style.width=this.current*(100/this.fieldsCount)+"%")},i.prototype._updateNav=function(){this.options.ctrlNavDots&&(classie.remove(this.ctrlNav.querySelector("button.fs-dot-current"),"fs-dot-current"),classie.add(this.ctrlNavDots[this.current],"fs-dot-current"),this.ctrlNavDots[this.current].disabled=!1)},i.prototype._showCtrl=function(t){classie.add(t,"fs-show")},i.prototype._hideCtrl=function(t){classie.remove(t,"fs-show")},i.prototype._validade=function(){var t=this.fields[this.current],e=t.querySelector("input[required]")||t.querySelector("textarea[required]")||t.querySelector("select[required]"),s;if(!e)return!0;switch(e.tagName.toLowerCase()){case"input":if("radio"===e.type||"checkbox"===e.type){var i=0;[].slice.call(t.querySelectorAll('input[type="'+e.type+'"]')).forEach(function(t){t.checked&&++i}),i||(s="NOVAL")}else""===e.value&&(s="NOVAL");break;case"select":""!==e.value&&"-1"!==e.value||(s="NOVAL");break;case"textarea":""===e.value&&(s="NOVAL");break}return void 0==s||(this._showError(s),!1)},i.prototype._showError=function(t){var e="";switch(t){case"NOVAL":e="Please fill the field before continuing";break;case"INVALIDEMAIL":e="Please fill a valid email address";break}this.msgError.innerHTML=e,this._showCtrl(this.msgError)},i.prototype._clearError=function(){this._hideCtrl(this.msgError)},t.FForm=i}(window);


/*===============================
=            FORM            =
===============================*/

(function($) {

    // $(window).scroll( function() {
        
    //  var wrapBottom = $('.pfolio .site-main').position().top+$('.pfolio .site-main').outerHeight(true),
    //      scrollPos = $(window).scrollTop();

    //      console.log(wrapBottom);
    //      console.log(scrollPos);

    //  if( scrollPos > wrapBottom ) {
    //      $('.single-portfolio .entry-content').css( {'position':'absolute','bottom':0+'px'});
    //  } else {
    //      $('.single-portfolio .entry-content').css( {'position':'fixed'});
    //  }
    // });

    // $('.single-portfolio .entry-content').followTo('#buffer');

    (function() {
        var formWrap = document.getElementById( 'fs-form-wrap' );

        [].slice.call( document.querySelectorAll( 'select' ) ).forEach( function(el) {    
            new SelectFx( el, {
                stickyPlaceholder: false,
                onChange: function(val){
                    document.querySelector('span.cs-placeholder').style.backgroundColor = val;
                }
            });
        } );

        new FForm( formWrap, {
            onReview : function() {
                classie.add( document.body, 'overview' ); // for demo purposes only
            }
        } );
    })();

    var frm = $('.apply form');
    
     $('.work-with-us').parent().addClass('ffs');

    $(frm).addClass('fs-form fs-form-full');

    frm.submit(function (e) {

        e.preventDefault();

        $.ajax({
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: frm.serialize(),
            success: function (data) {
                console.log('Submission was successful.');
                console.log(data);
            },
            error: function (data) {
                console.log('An error occurred.');
                console.log(data);
            },
        });
    });

})(jQuery);