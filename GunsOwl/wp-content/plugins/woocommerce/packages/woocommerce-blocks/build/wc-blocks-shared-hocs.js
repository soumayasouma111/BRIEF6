this.wc=this.wc||{},this.wc.wcBlocksSharedHocs=function(e){var t={};function r(n){if(t[n])return t[n].exports;var o=t[n]={i:n,l:!1,exports:{}};return e[n].call(o.exports,o,o.exports,r),o.l=!0,o.exports}return r.m=e,r.c=t,r.d=function(e,t,n){r.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},r.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},r.t=function(e,t){if(1&t&&(e=r(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(r.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)r.d(n,o,function(t){return e[t]}.bind(null,o));return n},r.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return r.d(t,"a",t),t},r.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},r.p="",r(r.s=140)}({0:function(e,t){e.exports=window.wp.element},10:function(e,t){function r(){return e.exports=r=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var r=arguments[t];for(var n in r)Object.prototype.hasOwnProperty.call(r,n)&&(e[n]=r[n])}return e},e.exports.__esModule=!0,e.exports.default=e.exports,r.apply(this,arguments)}e.exports=r,e.exports.__esModule=!0,e.exports.default=e.exports},11:function(e,t){e.exports=window.wp.apiFetch},140:function(e,t,r){"use strict";r.r(t),r.d(t,"withProductDataContext",(function(){return l})),r.d(t,"withFilteredAttributes",(function(){return f}));var n=r(10),o=r.n(n),c=r(0),u=r(11),a=r.n(u),s=r(21);const i=e=>{const{productId:t,OriginalComponent:r}=e,[n,o]=Object(c.useState)(null),[u,i]=Object(c.useState)(!0);return Object(c.useEffect)(()=>{e.product&&(o(e.product),i(!1))},[e.product]),Object(c.useEffect)(()=>{t>0&&(i(!0),a()({path:"/wc/store/v1/products/"+t}).then(e=>{o(e)}).catch(async()=>{o(null)}).finally(()=>{i(!1)}))},[t]),u||n?Object(c.createElement)(s.ProductDataContextProvider,{product:n,isLoading:u},Object(c.createElement)(r,e)):null},l=e=>t=>{const r=Object(s.useProductDataContext)();return t.product||!r.hasContext?Object(c.createElement)(i,o()({},t,{OriginalComponent:e})):Object(c.createElement)(e,t)},f=e=>t=>r=>{const n=((e,t)=>{const r=[];return Object.keys(e).forEach(n=>{if(void 0!==t[n])switch(e[n].type){case"boolean":r[n]="false"!==t[n]&&!1!==t[n];break;case"number":r[n]=parseInt(t[n],10);break;case"array":case"object":r[n]=JSON.parse(t[n]);break;default:r[n]=t[n]}else r[n]=e[n].default}),r})(e,r);return Object(c.createElement)(t,o()({},r,n))}},21:function(e,t){e.exports=window.wc.wcBlocksSharedContext}});