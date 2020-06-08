this.wc=this.wc||{},this.wc.onboardingProductNotice=function(t){var e={};function n(r){if(e[r])return e[r].exports;var o=e[r]={i:r,l:!1,exports:{}};return t[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}return n.m=t,n.c=e,n.d=function(t,e,r){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:r})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var o in t)n.d(r,o,function(e){return t[e]}.bind(null,o));return r},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=749)}({1:function(t,e){!function(){t.exports=this.wp.i18n}()},12:function(t,e,n){"use strict";var r={};n.r(r),n.d(r,"ADMIN_URL",(function(){return l})),n.d(r,"COUNTRIES",(function(){return p})),n.d(r,"CURRENCY",(function(){return y})),n.d(r,"LOCALE",(function(){return b})),n.d(r,"ORDER_STATUSES",(function(){return S})),n.d(r,"SITE_TITLE",(function(){return O})),n.d(r,"WC_ASSET_URL",(function(){return m})),n.d(r,"DEFAULT_DATE_RANGE",(function(){return g})),n.d(r,"getSetting",(function(){return _})),n.d(r,"setSetting",(function(){return v})),n.d(r,"getAdminLink",(function(){return E}));var o=n(48),c=n(13),u=n.n(c),i=n(49);function f(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(t);e&&(r=r.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),n.push.apply(n,r)}return n}function a(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{};e%2?f(Object(n),!0).forEach((function(e){u()(t,e,n[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):f(Object(n)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))}))}return t}var d={adminUrl:"",countries:[],currency:{code:"USD",precision:2,symbol:"$",symbolPosition:"left",decimalSeparator:".",priceFormat:"%1$s%2$s",thousandSeparator:","},defaultDateRange:"period=month&compare=previous_year",locale:{siteLocale:"en_US",userLocale:"en_US",weekdaysShort:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]},orderStatuses:[],siteTitle:"",wcAssetUrl:""},s=a({},d,{},"object"===("undefined"==typeof wcSettings?"undefined":n.n(i)()(wcSettings))?wcSettings:{});s.currency=a({},d.currency,{},s.currency),s.locale=a({},d.locale,{},s.locale);var l=s.adminUrl,p=s.countries,y=s.currency,b=s.locale,S=s.orderStatuses,O=s.siteTitle,m=s.wcAssetUrl,g=s.defaultDateRange;function _(t){var e=arguments.length>1&&void 0!==arguments[1]&&arguments[1],n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:function(t){return t},r=s.hasOwnProperty(t)?s[t]:e;return n(r,e)}function v(t,e){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:function(t){return t};s[t]=n(e)}function E(t){return(l||"")+t}n.d(e,"a",(function(){return j})),n.d(e,"b",(function(){return w})),n.d(e,"c",(function(){return h})),n.d(e,"d",(function(){return R})),n.d(e,"e",(function(){return U})),n.d(e,"g",(function(){return A})),n.d(e,"h",(function(){return D})),n.d(e,"f",(function(){return L}));var T=o&&void 0!==o.getSetting?o:r,j=T.ADMIN_URL,w=(T.COUNTRIES,T.CURRENCY),h=T.LOCALE,R=T.ORDER_STATUSES,U=(T.SITE_TITLE,T.WC_ASSET_URL),A=(T.DEFAULT_DATE_RANGE,T.getSetting),D=T.setSetting,L=T.getAdminLink||E},13:function(t,e){t.exports=function(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}},24:function(t,e){!function(){t.exports=this.wp.data}()},48:function(t,e){!function(){t.exports=this.wc.wcSettings}()},49:function(t,e){function n(e){return"function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?t.exports=n=function(t){return typeof t}:t.exports=n=function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},n(e)}t.exports=n},59:function(t,e,n){"use strict";function r(t){"complete"!==document.readyState&&"interactive"!==document.readyState?document.addEventListener("DOMContentLoaded",t):t()}n.d(e,"a",(function(){return r}))},749:function(t,e,n){"use strict";n.r(e);var r=n(1),o=n(24),c=n(59),u=n(12);Object(c.a)((function(){Object(o.dispatch)("core/notices").createSuccessNotice(Object(r.__)("🎉 Congrats on adding your first product!","woocommerce-admin"),{id:"WOOCOMMERCE_ONBOARDING_PRODUCT_NOTICE",actions:[{url:Object(u.f)("admin.php?page=wc-admin"),label:Object(r.__)("Continue setup.","woocommerce-admin")}]})}))}});