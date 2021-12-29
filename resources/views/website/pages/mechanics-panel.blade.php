@extends('website.master')
@section('content')

<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
  {{-- <script nonce="1xUqELd47XSxKRbtnie3CQ==">
//<![CDATA[
    var rollbarEnvironment =  "production"

//]]>
</script>  <script src="https://public-assets.envato-static.com/assets/market/core/rollbar-3c248f4294282dd80bd25d1b4d0ab4b91bcb8b39e3498e23405502c454cc7cca.js" nonce="1xUqELd47XSxKRbtnie3CQ=="></script> --}}



<meta content="origin-when-cross-origin" name="referrer" />

<link rel="dns-prefetch" href="//s3.envato.com" />


{{-- <script type="text/javascript" nonce="1xUqELd47XSxKRbtnie3CQ==">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam-cell.nr-data.net","errorBeacon":"bam-cell.nr-data.net","licenseKey":"NRBR-281af528f2b1e2422b5","applicationID":"13909","transactionName":"NTU0DRQNDwshOmISBA8zNB5JAQsCJyMiBQVZPz4QEj0TBj0lKB4FKTc/DQ4NBw==","queueTime":1,"applicationTime":95,"agent":"","atts":"DXgvW1wZQRQtPChSS1QOMhwLByUINi0+BFNaeCgcEAsQDismb0pTRj9tSV5VUFNmNTA="}</script>
<script type="text/javascript" nonce="1xUqELd47XSxKRbtnie3CQ==">(window.NREUM||(NREUM={})).init={ajax:{deny_list:["bam-cell.nr-data.net"]}};(window.NREUM||(NREUM={})).loader_config={licenseKey:"NRBR-281af528f2b1e2422b5",applicationID:"13909"};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var i=e[n]={exports:{}};t[n][0].call(i.exports,function(e){var i=t[n][1][e];return r(i||e)},i,i.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<n.length;i++)r(n[i]);return r}({1:[function(t,e,n){function r(){}function i(t,e,n,r){return function(){return s.recordSupportability("API/"+e+"/called"),o(t+e,[u.now()].concat(c(arguments)),n?null:this,r),n?void 0:this}}var o=t("handle"),a=t(10),c=t(11),f=t("ee").get("tracer"),u=t("loader"),s=t(4),d=NREUM;"undefined"==typeof window.newrelic&&(newrelic=d);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",v=l+"ixn-";a(p,function(t,e){d[e]=i(l,e,!0,"api")}),d.addPageAction=i(l,"addPageAction",!0),d.setCurrentRouteName=i(l,"routeName",!0),e.exports=newrelic,d.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(t,e){var n={},r=this,i="function"==typeof e;return o(v+"tracer",[u.now(),t,n],r),function(){if(f.emit((i?"":"no-")+"fn-start",[u.now(),r,i],n),i)try{return e.apply(this,arguments)}catch(t){throw f.emit("fn-err",[arguments,this,t],n),t}finally{f.emit("fn-end",[u.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){m[e]=i(v,e)}),newrelic.noticeError=function(t,e){"string"==typeof t&&(t=new Error(t)),s.recordSupportability("API/noticeError/called"),o("err",[t,u.now(),!1,e])}},{}],2:[function(t,e,n){function r(t){if(NREUM.init){for(var e=NREUM.init,n=t.split("."),r=0;r<n.length-1;r++)if(e=e[n[r]],"object"!=typeof e)return;return e=e[n[n.length-1]]}}e.exports={getConfiguration:r}},{}],3:[function(t,e,n){var r=!1;try{var i=Object.defineProperty({},"passive",{get:function(){r=!0}});window.addEventListener("testPassive",null,i),window.removeEventListener("testPassive",null,i)}catch(o){}e.exports=function(t){return r?{passive:!0,capture:!!t}:!!t}},{}],4:[function(t,e,n){function r(t,e){var n=[a,t,{name:t},e];return o("storeMetric",n,null,"api"),n}function i(t,e){var n=[c,t,{name:t},e];return o("storeEventMetrics",n,null,"api"),n}var o=t("handle"),a="sm",c="cm";e.exports={constants:{SUPPORTABILITY_METRIC:a,CUSTOM_METRIC:c},recordSupportability:r,recordCustom:i}},{}],5:[function(t,e,n){function r(){return c.exists&&performance.now?Math.round(performance.now()):(o=Math.max((new Date).getTime(),o))-a}function i(){return o}var o=(new Date).getTime(),a=o,c=t(12);e.exports=r,e.exports.offset=a,e.exports.getLastTimestamp=i},{}],6:[function(t,e,n){function r(t){return!(!t||!t.protocol||"file:"===t.protocol)}e.exports=r},{}],7:[function(t,e,n){function r(t,e){var n=t.getEntries();n.forEach(function(t){"first-paint"===t.name?p("timing",["fp",Math.floor(t.startTime)]):"first-contentful-paint"===t.name&&p("timing",["fcp",Math.floor(t.startTime)])})}function i(t,e){var n=t.getEntries();if(n.length>0){var r=n[n.length-1];if(f&&f<r.startTime)return;p("lcp",[r])}}function o(t){t.getEntries().forEach(function(t){t.hadRecentInput||p("cls",[t])})}function a(t){if(t instanceof g&&!y){var e=Math.round(t.timeStamp),n={type:t.type};e<=l.now()?n.fid=l.now()-e:e>l.offset&&e<=Date.now()?(e-=l.offset,n.fid=l.now()-e):e=l.now(),y=!0,p("timing",["fi",e,n])}}function c(t){"hidden"===t&&(f=l.now(),p("pageHide",[f]))}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var f,u,s,d,p=t("handle"),l=t("loader"),v=t(9),m=t(3),g=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){u=new PerformanceObserver(r);try{u.observe({entryTypes:["paint"]})}catch(h){}s=new PerformanceObserver(i);try{s.observe({entryTypes:["largest-contentful-paint"]})}catch(h){}d=new PerformanceObserver(o);try{d.observe({type:"layout-shift",buffered:!0})}catch(h){}}if("addEventListener"in document){var y=!1,w=["click","keydown","mousedown","pointerdown","touchstart"];w.forEach(function(t){document.addEventListener(t,a,m(!1))})}v(c)}},{}],8:[function(t,e,n){function r(t,e){if(!i)return!1;if(t!==i)return!1;if(!e)return!0;if(!o)return!1;for(var n=o.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var c=navigator.userAgent,f=c.match(a);f&&c.indexOf("Chrome")===-1&&c.indexOf("Chromium")===-1&&(i="Safari",o=f[1])}e.exports={agent:i,version:o,match:r}},{}],9:[function(t,e,n){function r(t){function e(){t(c&&document[c]?document[c]:document[o]?"hidden":"visible")}"addEventListener"in document&&a&&document.addEventListener(a,e,i(!1))}var i=t(3);e.exports=r;var o,a,c;"undefined"!=typeof document.hidden?(o="hidden",a="visibilitychange",c="visibilityState"):"undefined"!=typeof document.msHidden?(o="msHidden",a="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(o="webkitHidden",a="webkitvisibilitychange",c="webkitVisibilityState")},{}],10:[function(t,e,n){function r(t,e){var n=[],r="",o=0;for(r in t)i.call(t,r)&&(n[o]=e(r,t[r]),o+=1);return n}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],11:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,i=n-e||0,o=Array(i<0?0:i);++r<i;)o[r]=t[e+r];return o}e.exports=r},{}],12:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(t,e,n){function r(){}function i(t){function e(t){return t&&t instanceof r?t:t?u(t,f,a):a()}function n(n,r,i,o,a){if(a!==!1&&(a=!0),!l.aborted||o){t&&a&&t(n,r,i);for(var c=e(i),f=m(n),u=f.length,s=0;s<u;s++)f[s].apply(c,r);var p=d[w[n]];return p&&p.push([b,n,r,c]),c}}function o(t,e){y[t]=m(t).concat(e)}function v(t,e){var n=y[t];if(n)for(var r=0;r<n.length;r++)n[r]===e&&n.splice(r,1)}function m(t){return y[t]||[]}function g(t){return p[t]=p[t]||i(n)}function h(t,e){l.aborted||s(t,function(t,n){e=e||"feature",w[n]=e,e in d||(d[e]=[])})}var y={},w={},b={on:o,addEventListener:o,removeEventListener:v,emit:n,get:g,listeners:m,context:e,buffer:h,abort:c,aborted:!1};return b}function o(t){return u(t,f,a)}function a(){return new r}function c(){(d.api||d.feature)&&(l.aborted=!0,d=l.backlog={})}var f="nr@context",u=t("gos"),s=t(10),d={},p={},l=e.exports=i();e.exports.getOrSetContext=o,l.backlog=d},{}],gos:[function(t,e,n){function r(t,e,n){if(i.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return t[e]=r,r}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){i.buffer([t],r),i.emit(t,e,n)}var i=t("ee").get("handle");e.exports=r,r.ee=i},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,o,function(){return i++})}var i=1,o="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!T++){var t=P.info=NREUM.info,e=g.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return u.abort();f(O,function(e,n){t[e]||(t[e]=n)});var n=a();c("mark",["onload",n+P.offset],null,"api"),c("timing",["load",n]);var r=g.createElement("script");0===t.agent.indexOf("http://")||0===t.agent.indexOf("https://")?r.src=t.agent:r.src=v+"://"+t.agent,e.parentNode.insertBefore(r,e)}}function i(){"complete"===g.readyState&&o()}function o(){c("mark",["domContent",a()+P.offset],null,"api")}var a=t(5),c=t("handle"),f=t(10),u=t("ee"),s=t(8),d=t(6),p=t(2),l=t(3),v=p.getConfiguration("ssl")===!1?"http":"https",m=window,g=m.document,h="addEventListener",y="attachEvent",w=m.XMLHttpRequest,b=w&&w.prototype,E=!d(m.location);NREUM.o={ST:setTimeout,SI:m.setImmediate,CT:clearTimeout,XHR:w,REQ:m.Request,EV:m.Event,PR:m.Promise,MO:m.MutationObserver};var x=""+location,O={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1212.min.js"},M=w&&b&&b[h]&&!/CriOS/.test(navigator.userAgent),P=e.exports={offset:a.getLastTimestamp(),now:a,origin:x,features:{},xhrWrappable:M,userAgent:s,disabled:E};if(!E){t(1),t(7),g[h]?(g[h]("DOMContentLoaded",o,l(!1)),m[h]("load",r,l(!1))):(g[y]("onreadystatechange",i),m[y]("onload",r)),c("mark",["firstbyte",a.getLastTimestamp()],null,"api");var T=0}},{}],"wrap-function":[function(t,e,n){function r(t,e){function n(e,n,r,f,u){function nrWrapper(){var o,a,s,p;try{a=this,o=d(arguments),s="function"==typeof r?r(o,a):r||{}}catch(l){i([l,"",[o,a,f],s],t)}c(n+"start",[o,a,f],s,u);try{return p=e.apply(a,o)}catch(v){throw c(n+"err",[o,a,v],s,u),v}finally{c(n+"end",[o,a,p],s,u)}}return a(e)?e:(n||(n=""),nrWrapper[p]=e,o(e,nrWrapper,t),nrWrapper)}function r(t,e,r,i,o){r||(r="");var c,f,u,s="-"===r.charAt(0);for(u=0;u<e.length;u++)f=e[u],c=t[f],a(c)||(t[f]=n(c,s?f+r:r,i,f,o))}function c(n,r,o,a){if(!v||e){var c=v;v=!0;try{t.emit(n,r,o,e,a)}catch(f){i([f,n,r,o],t)}v=c}}return t||(t=s),n.inPlace=r,n.flag=p,n}function i(t,e){e||(e=s);try{e.emit("internal-error",t)}catch(n){}}function o(t,e,n){if(Object.defineProperty&&Object.keys)try{var r=Object.keys(t);return r.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(o){i([o],n)}for(var a in t)l.call(t,a)&&(e[a]=t[a]);return e}function a(t){return!(t&&t instanceof Function&&t.apply&&!t[p])}function c(t,e){var n=e(t);return n[p]=t,o(t,n,s),n}function f(t,e,n){var r=t[e];t[e]=c(r,n)}function u(){for(var t=arguments.length,e=new Array(t),n=0;n<t;++n)e[n]=arguments[n];return e}var s=t("ee"),d=t(11),p="nr@original",l=Object.prototype.hasOwnProperty,v=!1;e.exports=r,e.exports.wrapFunction=c,e.exports.wrapInPlace=f,e.exports.argsToArray=u},{}]},{},["loader"]);</script> --}}

<title>Secure Checkout | ThemeForest</title>

<meta name="description" content="The #1 marketplace for premium website templates, including themes for WordPress, Magento, Drupal, Joomla, and more.  Create a website, fast." />

  <meta name="viewport" content="width=device-width,initial-scale=1">

  <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://public-assets.envato-static.com/icons/themeforest.net/apple-touch-icon-72x72-precomposed.png" sizes="72x72" />
  <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://public-assets.envato-static.com/icons/themeforest.net/apple-touch-icon-114x114-precomposed.png" sizes="114x114" />
  <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://public-assets.envato-static.com/icons/themeforest.net/apple-touch-icon-144x144-precomposed.png" sizes="144x144" />
<link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://public-assets.envato-static.com/icons/themeforest.net/apple-touch-icon-precomposed.png" />

  <link rel="stylesheet" media="all" href="https://public-assets.envato-static.com/assets/market/core/index-842a30ebf5fabb8f8ad31c6516a2006031f46affeeffe754b2454901c45f1258.css" />
  <link rel="stylesheet" media="all" href="https://public-assets.envato-static.com/assets/market/pages/buying/index-33137dc43ad914f85dacbd5d47778b7dd0225ad0a0863e18aa0fa7ca64197f0f.css" />


<meta name="theme-color" content="#333333">

  <meta name="yandex-verification" content="58faa6ff34c071e6" />
  <meta name="baidu-site-verification" content="x0xoFSsC7y" />

<link rel="canonical" href="https://themeforest.net/checkout/82676600/payment_method" />

{{-- <script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "name": "ThemeForest",
  "url": "https://themeforest.net"
}
</script> --}}






{{-- <script nonce="1xUqELd47XSxKRbtnie3CQ==">
//<![CDATA[
  window.dataLayer = window.dataLayer || [];

//]]>
</script> --}}

      <meta property="og:title" content="Secure Checkout | ThemeForest" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://themeforest.net/checkout/82676600/payment_method" />
  <meta property="og:image" content="https://public-assets.envato-static.com/assets/logos/marketplaces/200px/ThemeForest-a69be706cef628b7c666639b9885f469255dc2d9eedd392f0b328a79e60508bc.png" />
  <meta property="og:description" content="The #1 marketplace for premium website templates, including themes for WordPress, Magento, Drupal, Joomla, and more.  Create a website, fast." />
  <meta property="og:site_name" content="ThemeForest" />
  <meta property="fb:admins" content="580836304" />


<meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="6+kW5OYIUb/t/TAe/NgkLPEkuhS/uHgKGYlTgFWpcExMEPtmyYaV/DO8R7Bd4nRU+Ca8NYcPoq0obqP3VBmi3g==" />

<meta name="turbo-visit-control" content="reload">


    {{-- <script src="https://public-assets.envato-static.com/assets/market/core/head-df4183f2f1b84caa8ad6707c533e562f18a9eaae2b2e4d2081cf439c23343ad3.js" nonce="1xUqELd47XSxKRbtnie3CQ=="></script> --}}
  </head>
  <body id="" class=" " data-view="app" data-responsive="true" data-user-signed-in="true" >
    
    <!--[if lte IE 8]>
  <div style="color:#fff;background:#f00;padding:20px;text-align:center;">
    ThemeForest no longer actively supports this version of Internet Explorer. We suggest that you <a href="https://windows.microsoft.com/en-us/internet-explorer/download-ie" style="color:#fff;text-decoration:underline;">upgrade to a newer version</a> or <a href="https://browsehappy.com/" style="color:#fff;text-decoration:underline;">try a different browser</a>.
  </div>
<![endif]-->


    <div class="page">
        <div class="page__off-canvas--left overthrow">
          <div class="off-canvas-left js-off-canvas-left" data-view="offCanvasLeft">
  <div class="off-canvas-left__top">
    <a href="https://themeforest.net">Envato Market</a>
  </div>

  <div class="off-canvas-left__current-site -color-themeforest">
  <span class="off-canvas-left__site-title">
    Web Themes &amp; Templates
  </span>

  <a class="off-canvas-left__current-site-toggle -white-arrow -color-themeforest" data-view="dropdown" data-dropdown-target=".off-canvas-left__sites" href="#"></a>
</div>

<div class="off-canvas-left__sites is-hidden" id="off-canvas-sites">
    <a class="off-canvas-left__site" href="https://codecanyon.net/?auto_signin=true">
      <span class="off-canvas-left__site-title">
        Code
      </span>
      <i class="e-icon -icon-right-open"></i>
</a>    <a class="off-canvas-left__site" href="https://videohive.net/?auto_signin=true">
      <span class="off-canvas-left__site-title">
        Video
      </span>
      <i class="e-icon -icon-right-open"></i>
</a>    <a class="off-canvas-left__site" href="https://audiojungle.net/?auto_signin=true">
      <span class="off-canvas-left__site-title">
        Audio
      </span>
      <i class="e-icon -icon-right-open"></i>
</a>    <a class="off-canvas-left__site" href="https://graphicriver.net/?auto_signin=true">
      <span class="off-canvas-left__site-title">
        Graphics
      </span>
      <i class="e-icon -icon-right-open"></i>
</a>    <a class="off-canvas-left__site" href="https://photodune.net/?auto_signin=true">
      <span class="off-canvas-left__site-title">
        Photos
      </span>
      <i class="e-icon -icon-right-open"></i>
</a>    <a class="off-canvas-left__site" href="https://3docean.net/?auto_signin=true">
      <span class="off-canvas-left__site-title">
        3D Files
      </span>
      <i class="e-icon -icon-right-open"></i>
</a></div>

  <div class="off-canvas-left__search">
  <form id="search" action="/category/all" accept-charset="UTF-8" method="get">
    <div class="search-field -border-none">
      <div class="search-field__input">
        <input id="term" name="term" type="search" placeholder="Search" class="search-field__input-field" />
      </div>
      <button class="search-field__button" type="submit">
        <i class="e-icon -icon-search"><span class="e-icon__alt">Search</span></i>
      </button>
    </div>
</form></div>

  <ul>
    <li>
        <a class="off-canvas-category-link" data-view="dropdown" data-dropdown-target="#off-canvas-all-items" href="/category/all">
          All Items
</a>
        <ul class="is-hidden" id="off-canvas-all-items">
            <li>
              <a class="off-canvas-category-link--sub" href="/top-sellers">Popular Files</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/feature">Featured Files</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/all?date=this-month&amp;sort=sales">Top New Files</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/follow_feed">Follow Feed</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/authors/top">Top Authors</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/page/top_new_sellers">Top New Authors</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/collections">Public Collections</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category">View All Categories</a>
            </li>
        </ul>

    </li>
    <li>
        <a class="off-canvas-category-link" data-view="dropdown" data-dropdown-target="#off-canvas-wordpress" href="/category/wordpress">
          WordPress
</a>
        <ul class="is-hidden" id="off-canvas-wordpress">
            <li>
              <a class="off-canvas-category-link--sub" href="/category/wordpress">Show all WordPress</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/popular_item/by_category?category=wordpress">Popular Items</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/wordpress/blog-magazine">Blog / Magazine</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/wordpress/buddypress">BuddyPress</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/wordpress/corporate">Corporate</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/wordpress/creative">Creative</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/wordpress/corporate/directory-listings">Directory &amp; Listings</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/wordpress/ecommerce">eCommerce</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/wordpress/education">Education</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/attributes/compatible-with/elementor">Elementor</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/wordpress/entertainment">Entertainment</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/wordpress/mobile">Mobile</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/wordpress/nonprofit">Nonprofit</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/wordpress/real-estate">Real Estate</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/wordpress/retail">Retail</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/wordpress/technology">Technology</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/wordpress/wedding">Wedding</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/wordpress/miscellaneous">Miscellaneous</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="https://codecanyon.net/category/wordpress">WordPress Plugins</a>
            </li>
        </ul>

    </li>
    <li>
        <a class="off-canvas-category-link" data-view="dropdown" data-dropdown-target="#off-canvas-elementor" href="/elementor">
          Elementor
</a>
        <ul class="is-hidden" id="off-canvas-elementor">
            <li>
              <a class="off-canvas-category-link--sub" href="/category/template-kits/elementor?sort=trending">Template Kits</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="https://codecanyon.net/category/wordpress?compatible_with=Elementor&amp;sort=trending&amp;tags=elementor">Plugins</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/tags/elementor?compatible_with=Elementor&amp;sort=trending">Themes</a>
            </li>
        </ul>

    </li>
    <li>

        <a class="off-canvas-category-link--empty" href="/wordpress-hosting">
          Hosting
</a>
    </li>
    <li>
        <a class="off-canvas-category-link" data-view="dropdown" data-dropdown-target="#off-canvas-html" href="/category/site-templates">
          HTML
</a>
        <ul class="is-hidden" id="off-canvas-html">
            <li>
              <a class="off-canvas-category-link--sub" href="/category/site-templates">Show all HTML</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/popular_item/by_category?category=site-templates">Popular Items</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/site-templates/admin-templates">Admin Templates</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/site-templates/corporate">Corporate</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/site-templates/creative">Creative</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/site-templates/entertainment">Entertainment</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/site-templates/mobile">Mobile</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/site-templates/nonprofit">Nonprofit</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/site-templates/personal">Personal</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/site-templates/retail">Retail</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/site-templates/specialty-pages">Specialty Pages</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/site-templates/technology">Technology</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/site-templates/wedding">Wedding</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/site-templates/miscellaneous">Miscellaneous</a>
            </li>
        </ul>

    </li>
    <li>
        <a class="off-canvas-category-link" data-view="dropdown" data-dropdown-target="#off-canvas-marketing" href="/category/marketing">
          Marketing
</a>
        <ul class="is-hidden" id="off-canvas-marketing">
            <li>
              <a class="off-canvas-category-link--sub" href="/category/marketing">Show all Marketing</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/popular_item/by_category?category=marketing">Popular Items</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/marketing/email-templates">Email Templates</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/marketing/landing-pages">Landing Pages</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/marketing/unbounce-landing-pages">Unbounce Landing Pages</a>
            </li>
        </ul>

    </li>
    <li>
        <a class="off-canvas-category-link" data-view="dropdown" data-dropdown-target="#off-canvas-cms" href="/category/cms-themes">
          CMS
</a>
        <ul class="is-hidden" id="off-canvas-cms">
            <li>
              <a class="off-canvas-category-link--sub" href="/category/cms-themes">Show all CMS</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/popular_item/by_category?category=cms-themes">Popular Items</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/cms-themes/concrete5">Concrete5</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/cms-themes/drupal">Drupal</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/cms-themes/hubspot-cms-hub">HubSpot CMS Hub</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/cms-themes/joomla">Joomla</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/cms-themes/modx-themes">MODX Themes</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/cms-themes/moodle">Moodle</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/cms-themes/webflow">Webflow</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/cms-themes/weebly">Weebly</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/cms-themes/miscellaneous">Miscellaneous</a>
            </li>
        </ul>

    </li>
    <li>
        <a class="off-canvas-category-link" data-view="dropdown" data-dropdown-target="#off-canvas-ecommerce" href="/category/ecommerce">
          eCommerce
</a>
        <ul class="is-hidden" id="off-canvas-ecommerce">
            <li>
              <a class="off-canvas-category-link--sub" href="/category/ecommerce">Show all eCommerce</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/popular_item/by_category?category=ecommerce">Popular Items</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/wordpress/ecommerce/woocommerce">WooCommerce</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/ecommerce/bigcommerce">BigCommerce</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/attributes/compatible-with/Drupal Commerce?sort=date">Drupal Commerce</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/search?compatible_with=Easy+Digital+Downloads">Easy Digital Downloads</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/attributes/themeforest-files-included/ecwid%20css%20files">Ecwid</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/ecommerce/magento">Magento</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/ecommerce/opencart">OpenCart</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/ecommerce/prestashop">PrestaShop</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/ecommerce/shopify">Shopify</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/attributes/compatible-with/Ubercart?sort=date">Ubercart</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/cms-themes/joomla/virtuemart">VirtueMart</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/ecommerce/zen-cart">Zen Cart</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/ecommerce/miscellaneous">Miscellaneous</a>
            </li>
        </ul>

    </li>
    <li>
        <a class="off-canvas-category-link" data-view="dropdown" data-dropdown-target="#off-canvas-ui-templates" href="/category/ui-templates">
          UI Templates
</a>
        <ul class="is-hidden" id="off-canvas-ui-templates">
            <li>
              <a class="off-canvas-category-link--sub" href="/popular_item/by_category?category=ui-templates">Popular Items</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/ui-templates/figma">Figma</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/ui-templates/adobe-xd">Adobe XD</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/ui-templates/photoshop">Photoshop</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/ui-templates/sketch">Sketch</a>
            </li>
        </ul>

    </li>
    <li>

        <a class="off-canvas-category-link--empty" href="https://codecanyon.net/category/wordpress">
          Plugins
</a>
    </li>
    <li>
        <a class="off-canvas-category-link" data-view="dropdown" data-dropdown-target="#off-canvas-logo-maker" href="https://placeit.net/logo-maker?utm_source=envatomarket&amp;utm_medium=promos&amp;utm_campaign=placeit_mkt-menu-logo&amp;utm_content=logo-maker">
          Logo Maker
</a>
        <ul class="is-hidden" id="off-canvas-logo-maker">
            <li>
              <a class="off-canvas-category-link--sub" href="https://placeit.net/business-logo-maker?utm_source=envatomarket&amp;utm_medium=promos&amp;utm_campaign=placeit_mkt-menu-logo&amp;utm_content=business-logo-maker">Business Logo Maker</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="https://placeit.net/make-a-gaming-logo?utm_source=envatomarket&amp;utm_medium=promos&amp;utm_campaign=placeit_mkt-menu-logo&amp;utm_content=gaming-logo-maker">Gaming Logo Maker</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="https://placeit.net/twitch-logo-maker?utm_source=envatomarket&amp;utm_medium=promos&amp;utm_campaign=placeit_mkt-menu-logo&amp;utm_content=twitch-logo-maker">Twitch Logo Maker</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="https://placeit.net/make-your-own-sports-logo-design?utm_source=envatomarket&amp;utm_medium=promos&amp;utm_campaign=placeit_mkt-menu-logo&amp;utm_content=sports-logo-maker">Sports Logo Maker</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="https://placeit.net/real-estate-logo-maker?utm_source=envatomarket&amp;utm_medium=promos&amp;utm_campaign=placeit_mkt-menu-logo&amp;utm_content=real-estate-logo-maker">Real Estate Logo Maker</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="https://placeit.net/make-a-medical-logo?utm_source=envatomarket&amp;utm_medium=promos&amp;utm_campaign=placeit_mkt-menu-logo&amp;utm_content=medical-logo-maker">Medical Logo Maker</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="https://placeit.net/service-logo-maker?utm_source=envatomarket&amp;utm_medium=promos&amp;utm_campaign=placeit_mkt-menu-logo&amp;utm_content=service-logo-maker">Service Logo Maker</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="https://placeit.net/fitness-logo-maker?utm_source=envatomarket&amp;utm_medium=promos&amp;utm_campaign=placeit_mkt-menu-logo&amp;utm_content=fitness-brand-logo-maker">Fitness Brand Logo Maker</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="https://placeit.net/clothing-logo-maker?utm_source=envatomarket&amp;utm_medium=promos&amp;utm_campaign=placeit_mkt-menu-logo&amp;utm_content=clothing-logo-maker">Clothing Logo Maker</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="https://placeit.net/restaurant-logo-maker?utm_source=envatomarket&amp;utm_medium=promos&amp;utm_campaign=placeit_mkt-menu-logo&amp;utm_content=restaurant-logo-maker">Restaurant Logo Maker</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="https://placeit.net/bar-logo-maker?utm_source=envatomarket&amp;utm_medium=promos&amp;utm_campaign=placeit_mkt-menu-logo&amp;utm_content=bar-logo-maker">Bar Logo Maker</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="https://placeit.net/beauty-logo-maker?utm_source=envatomarket&amp;utm_medium=promos&amp;utm_campaign=placeit_mkt-menu-logo&amp;utm_content=beauty-logo-maker">Beauty Logo Maker</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="https://placeit.net/bakery-logo-maker?utm_source=envatomarket&amp;utm_medium=promos&amp;utm_campaign=placeit_mkt-menu-logo&amp;utm_content=bakery-logo-maker">Bakery Logo Maker</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="https://placeit.net/youtube-logo-maker?utm_source=envatomarket&amp;utm_medium=promos&amp;utm_campaign=placeit_mkt-menu-logo&amp;utm_content=youtube-logo-maker">YouTube Logo Maker</a>
            </li>
        </ul>

    </li>
    <li>
        <a class="off-canvas-category-link" data-view="dropdown" data-dropdown-target="#off-canvas-more" href="/category">
          More
</a>
        <ul class="is-hidden" id="off-canvas-more">
            <li>
              <a class="off-canvas-category-link--sub" href="/category/blogging">Blogging</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/courses">Courses</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/attributes/compatible-with/facebook">Facebook Templates</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="https://elements.envato.com/extensions/wordpress">Free Elementor Templates</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/forums">Forums</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/blogging/ghost-themes">Ghost Themes</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/static-site-generators/jekyll">Jekyll</a>
            </li>
            <li>
              <a class="off-canvas-category-link--sub" href="/category/blogging/tumblr">Tumblr</a>
            </li>
        </ul>

    </li>
</ul>

</div>

        </div>

        <div class="page__off-canvas--right overthrow">
          <div class="off-canvas-right">
    <div class="off-canvas-right__top">
  <div class="media">
    <a class="media__item" href="https://themeforest.net/user/jannat_shathi">
        <img alt="jannat_shathi" class="off-canvas-right__avatar" src="https://public-assets.envato-static.com/assets/common/icons-buttons/default-user-2962fd43ee315eafee8bfc08f02fee84687beb0499de44e5ab2873399944b0fe.jpg" />

</a>
    <div class="media__body">
      <a class="off-canvas-right__username" href="https://themeforest.net/user/jannat_shathi">jannat_shathi</a>
      <br>
      <span class="off-canvas-right__balance">
        $0.00
      </span>
    </div>
  </div>

  <div class="off-canvas-right__cart">
    <a href="/cart">
      <div class="shopping-cart-summary is-empty" data-view="cartCount">
        <i class="e-icon -icon-cart"></i>
        <span class="js-cart-summary-count shopping-cart-summary__count">0</span>
      </div>
</a>  </div>
</div>


  <strong class="off-canvas-right__section-heading">account</strong>
  <ul>
      <li>
        <a class="off-canvas-right__link" href="https://themeforest.net/user/jannat_shathi">
          Profile
          <i class="e-icon -icon-person -size-medium -color-grey-dark"></i>
</a>      </li>
      <li>
        <a class="off-canvas-right__link" href="https://account.envato.com">
          Envato Account
          <i class="e-icon -icon-envato -size-medium -color-grey-dark"></i>
</a>      </li>
      <li>
        <a class="off-canvas-right__link" href="https://themeforest.net/user/jannat_shathi/personal_information/edit">
          Settings
          <i class="e-icon -icon-cog -size-medium -color-grey-dark"></i>
</a>      </li>
      <li>
        <a class="off-canvas-right__link" href="https://themeforest.net/downloads">
          Downloads
          <i class="e-icon -icon-download -size-medium -color-grey-dark"></i>
</a>      </li>
      <li>
        <a class="off-canvas-right__link" href="https://themeforest.net/favorites">
          Favorites
          <i class="e-icon -icon-favorite -size-medium -color-grey-dark"></i>
</a>      </li>
      <li>
        <a class="off-canvas-right__link" href="https://themeforest.net/collections/manage">
          Collections
          <i class="e-icon -icon-folder-open -size-medium -color-grey-dark"></i>
</a>      </li>
      <li>
        <a class="off-canvas-right__link" href="https://themeforest.net/follow_feed">
          Follow Feed
          <i class="e-icon -icon-people -size-medium -color-grey-dark"></i>
</a>      </li>
      <li>
        <a class="off-canvas-right__link" href="https://themeforest.net/user/jannat_shathi/statement">
          Statement
          <i class="e-icon -icon-document-filled -size-medium -color-grey-dark"></i>
</a>      </li>
  </ul>
  <strong class="off-canvas-right__section-heading">author</strong>
  <ul>
      <li>
        <a class="off-canvas-right__link" href="https://themeforest.net/become-an-author">
          Become an Author
          <i class="e-icon -icon-moneybag -size-medium -color-grey-dark"></i>
</a>      </li>
  </ul>
<ul>
  <li>
    <a class="off-canvas-right__link--logout" data-method="post" href="https://account.envato.com/sign_out?to=themeforest">
      Sign out
      <i class="e-icon -icon-logout -size-medium -color-white"></i>
</a>  </li>
</ul>

</div>

        </div>

      <div class="page__canvas">
        <div class="canvas">
          <div class="canvas__header">
            

            <header class="site-header">
                <div class="site-header__mini is-hidden-desktop">
                  <div data-view="headerMini" class="header-mini">
  <div class="header-mini__button--cart">
    <a class="js-header-mini-cart btn btn--square" href="/cart">
              <svg width="14px"
             height="14px"
             viewBox="0 0 14 14"
             class="header-mini__button-cart-icon"
             xmlns="http://www.w3.org/2000/svg"
             aria-labelledby="title"
             role="img">
          <title>Cart</title>
          <path d="M 0.009 1.349 C 0.009 1.753 0.347 2.086 0.765 2.086 C 0.765 2.086 0.766 2.086 0.767 2.086 L 0.767 2.09 L 2.289 2.09 L 5.029 7.698 L 4.001 9.507 C 3.88 9.714 3.812 9.958 3.812 10.217 C 3.812 11.028 4.496 11.694 5.335 11.694 L 14.469 11.694 L 14.469 11.694 C 14.886 11.693 15.227 11.36 15.227 10.957 C 15.227 10.552 14.886 10.221 14.469 10.219 L 14.469 10.217 L 5.653 10.217 C 5.547 10.217 5.463 10.135 5.463 10.031 L 5.487 9.943 L 6.171 8.738 L 11.842 8.738 C 12.415 8.738 12.917 8.436 13.175 7.978 L 15.901 3.183 C 15.96 3.08 15.991 2.954 15.991 2.828 C 15.991 2.422 15.65 2.09 15.23 2.09 L 3.972 2.09 L 3.481 1.077 L 3.466 1.043 C 3.343 0.79 3.084 0.612 2.778 0.612 C 2.777 0.612 0.765 0.612 0.765 0.612 C 0.347 0.612 0.009 0.943 0.009 1.349 Z M 3.819 13.911 C 3.819 14.724 4.496 15.389 5.335 15.389 C 6.171 15.389 6.857 14.724 6.857 13.911 C 6.857 13.097 6.171 12.434 5.335 12.434 C 4.496 12.434 3.819 13.097 3.819 13.911 Z M 11.431 13.911 C 11.431 14.724 12.11 15.389 12.946 15.389 C 13.784 15.389 14.469 14.724 14.469 13.911 C 14.469 13.097 13.784 12.434 12.946 12.434 C 12.11 12.434 11.431 13.097 11.431 13.911 Z"></path>

        </svg>


      <span class="is-hidden">Cart</span>
      <span class="header-mini__button-cart-cart-amount is-hidden">
        0
      </span>
</a>  </div>
  <div class="header-mini__button--account">
    <a class="btn btn--square" data-view="offCanvasNavToggle" data-off-canvas="right" href="#account">
      <i class="e-icon -icon-person"></i>
      <span class="is-hidden">Account</span>
</a>  </div>


  <div class="header-mini__logo">
  <a href="https://themeforest.net/?auto_signin=true">
    <img alt="ThemeForest" class="header-mini__logo--themeforest" src="https://public-assets.envato-static.com/assets/common/transparent-1px-93ae7d494fad0fb30cbf3ae746a39c4bc7a0f8bbf87fbb587a3f3c01f3c5ce20.png" />
</a></div>


</div>

                </div>

              <div class="site-header__logo-and-account--minimal is-hidden-tablet-and-below">
                <div class="header-logo-account">
  <div class="grid-container -layout-wide">
    <div class="header-logo-account__container">
      {{-- <a class="header-logo-account__logo" href="https://themeforest.net">
        <span>Envato Market</span>
      </a> --}}
      <nav class="header-logo-account__right">
        <ul class="header-logo-account__sundry">
        </ul>

        <div class="header-logo-account__user-nav">
            <div class="header-logo-account__user-nav-item">
  <a class="header-logo-account__user-nav-main-link--alpha-with-dropdown" data-view="touchOnlyDropdown" data-dropdown-target="#user-nav-dropdown" href="https://themeforest.net/user/jannat_shathi">
    <span id="spec-user-username">jannat_shathi</span>
    <strong class="header-logo-account__balance">$0.00</strong>
</a>
  <div class="header-logo-account__user-nav-dropdown" id="user-nav-dropdown">
      <ul class="header-dropdown">
          <li>
            <a href="https://themeforest.net/user/jannat_shathi">
              Profile
              <i class="e-icon -icon-person"></i>
</a>          </li>
          <li>
            <a href="https://account.envato.com">
              Envato Account
              <i class="e-icon -icon-envato"></i>
</a>          </li>
          <li>
            <a href="https://themeforest.net/user/jannat_shathi/personal_information/edit">
              Settings
              <i class="e-icon -icon-cog"></i>
</a>          </li>
          <li>
            <a href="https://themeforest.net/downloads">
              Downloads
              <i class="e-icon -icon-download"></i>
</a>          </li>
          <li>
            <a href="https://themeforest.net/favorites">
              Favorites
              <i class="e-icon -icon-favorite"></i>
</a>          </li>
          <li>
            <a href="https://themeforest.net/collections/manage">
              Collections
              <i class="e-icon -icon-folder-open"></i>
</a>          </li>
          <li>
            <a href="https://themeforest.net/follow_feed">
              Follow Feed
              <i class="e-icon -icon-people"></i>
</a>          </li>
          <li>
            <a href="https://themeforest.net/user/jannat_shathi/statement">
              Statement
              <i class="e-icon -icon-document-filled"></i>
</a>          </li>
      </ul>
      <ul class="header-dropdown">
          <li>
            <a href="https://themeforest.net/become-an-author">
              Become an Author
              <i class="e-icon -icon-moneybag"></i>
</a>          </li>
      </ul>
  </div>
</div>

<div class="header-logo-account__user-nav-item">
  <a class="header-logo-account__user-nav-main-link--cart" rel="nofollow" href="//themeforest.net/cart">
    <div class="shopping-cart-summary is-empty" data-view="cartCount">
      <i class="e-icon -icon-cart"></i>
      <span class="js-cart-summary-count shopping-cart-summary__count">0</span>
    </div>
</a></div>


<div class="header-logo-account__user-nav-item">
  <a class="header-logo-account__user-nav-main-link--omega" id="sign-out-button" data-method="post" href="https://account.envato.com/sign_out?to=themeforest">Sign Out</a>
</div>

        </div>
      </nav>
    </div>
  </div>
</div>

              </div>
            </header>
          </div>

          <div class="js-canvas__body canvas__body">
                  

              <div class="grid-container">
</div>


            <div class="content-main--basic" id="content">
              
              <div class="">
                
<div data-view="CheckoutPagePaymentMethod">
<section class="page-section -size-compact -color-white js-adi-data-wrapper js-author-ga adi-variant-2" data-view="pjax" data-pjax-fragments="[&quot;#billing-details&quot;, &quot;#payment-method&quot;, &quot;#order-summary&quot;]" data-pjax-override-popstate="">
  <div class="grid-container" data-view="checkoutPage" data-props="{&quot;just_initiated_checkout&quot;:false,&quot;just_authenticated&quot;:false,&quot;current_step&quot;:&quot;payment_method&quot;}" data-google-analytics-payload="{&quot;actionData&quot;:null,&quot;productsArray&quot;:[{&quot;id&quot;:30183671,&quot;name&quot;:&quot;Cardan - Car Repair Services HTML Template&quot;,&quot;variant&quot;:&quot;regular&quot;,&quot;category&quot;:&quot;themeforest.net/category/site-templates/corporate/business&quot;,&quot;brand&quot;:&quot;Templines&quot;,&quot;price&quot;:&quot;19.00&quot;,&quot;quantity&quot;:&quot;1&quot;,&quot;dimension14&quot;:&quot;bundle_6month&quot;}],&quot;timestamp&quot;:1640751308}">
    
    <div class="js-checkout layout -sidebar-right">
      <div class="js-checkout__main-content layout__main-content">
            <div class="e-fieldset">
  <header class="e-fieldset__header ">
    <div class="e-fieldset__title">
      <h3 class="t-heading -size-s h-m0">
        Create Account
      </h3>
    </div>
  </header>
    <div class="e-fieldset__body">
      <p class="t-body">
        Jannat shathi (jannat_shathi)<br>
        ja.shathi1@gmail.com
      </p>
    </div>
</div>


            <div class="e-fieldset" id="billing-details">
  <header class="e-fieldset__header">
    <div class="e-fieldset__title">
      <h3 class="t-heading -size-s h-m0">
        Billing Details

      </h3>
    </div>
      <div class="e-fieldset__action">
        <a class="js-checkout__billing-details-edit e-btn -color-light -size-xs" data-pjax="{&quot;fragments&quot;:&quot;[&#39;#billing-details&#39;, &#39;#payment-method&#39;]&quot;}" href="/checkout/82676600/billing_details#billing-details">Edit</a>
      </div>
  </header>
        <div class="e-fieldset__body">

    <div am-grid>
      <div am-grid-col="l:6" am-grid-row="l:start">
        <p class="t-body">
            Jannat shathi <br>
            uttara, uttara <br>
            dhaka <br>
            Bangladesh <br>
        </p>
      </div>

    </div>
</div>

</div>


            <div id="payment-method" data-view="paymentMethod">

  <div class="e-fieldset -border-radius-top ">

    <header class="e-fieldset__header ">
      {{-- <div class="e-fieldset__title">
        <h3 class="t-heading -size-s h-m0">Select Payment Method</h3>
      </div> --}}
</header>
       
</div></div>
      </div>

      <aside class="js-checkout__floating-sidebar layout__sidebar is-hidden-tablet-and-below">
        <div class="e-fieldset -color-dark" id="order-summary">
  <header class="e-fieldset__header -divider-bottom">
    <div class="e-fieldset__title">
      <h3 class="t-heading -size-xs h-m0">Order Summary</h3>
    </div>
  </header>

  <div class="e-fieldset__body">
    <div class="order-summary">
      <div class="order-summary__group">
            <div class="order-summary__entry">
              <div class="order-summary__description h-text-truncate" title="Cardan - Car Repair Services HTML Template">
                Cardan - Car Repair Services HTML Template
              </div>
              <div class="order-summary__price">$19.00</div>
            </div>
      </div>
      <div class="order-summary__group -divider-top">
        <div class="order-summary__entry">
          <div class="order-summary__description h-text-truncate">
            Handling Fee:
          </div>
          <div class="order-summary__price">$0.00</div>
        </div>
      </div>

      <div class="order-summary__group -divider-top">
        <div class="order-summary__entry h-m0">
          <div class="order-summary__description h-text-truncate">
            <h4 class="t-heading -size-xs h-m0">Total:</h4>
          </div>
          <div class="order-summary__total">
            <h4 class="t-heading -size-xs h-m0">
              US$ 19.00
            </h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="secure-checkout-banner__container h-text-align-center">
  <span class="secure-checkout-banner__body -size-m">
  <i class="e-icon -icon-lock"></i>
  Secure checkout
</span>

</div>

      </aside>
    </div>
</div></section></div>  <script src="https://www.google.com/recaptcha/api.js?render=explicit" async="async" defer="defer" nonce="1xUqELd47XSxKRbtnie3CQ=="></script>


              </div>
            </div>


            {{-- <footer class="site-footer">
  <div class="grid-container">
    <p class="t-body h-m0"><small>&copy; 2021 Envato Pty Ltd. Trademarks and brands are the property of their respective owners.</small></p>
  </div>
</footer> --}}

          </div>

          <div class="is-hidden-phone">
            <div id="tooltip-magnifier" class="magnifier">
  <strong></strong>
  <div class="info">
    <div class="author-category">
      by <span class="author"></span>
    </div>
    <div class="price">
      <span class="cost"></span>
    </div>
  </div>
  <div class="footer">
    <span class="category"></span>
      <span class="currency-tax-notice">Price is in US dollars and excludes tax</span>
  </div>
</div>

            <div id="landscape-image-magnifier" class="magnifier">
    <div class="size-limiter">
    </div>
  <strong></strong>
  <div class="info">
    <div class="author-category">
      by <span class="author"></span>
    </div>
    <div class="price">
      <span class="cost"></span>
    </div>
  </div>
  <div class="footer">
    <span class="category"></span>
      <span class="currency-tax-notice">Price is in US dollars and excludes tax</span>
  </div>
</div>

            <div id="portrait-image-magnifier" class="magnifier">
    <div class="size-limiter">
    </div>
  <strong></strong>
  <div class="info">
    <div class="author-category">
      by <span class="author"></span>
    </div>
    <div class="price">
      <span class="cost"></span>
    </div>
  </div>
  <div class="footer">
    <span class="category"></span>
      <span class="currency-tax-notice">Price is in US dollars and excludes tax</span>
  </div>
</div>

            <div id="square-image-magnifier" class="magnifier">
    <div class="size-limiter">
    </div>
  <strong></strong>
  <div class="info">
    <div class="author-category">
      by <span class="author"></span>
    </div>
    <div class="price">
      <span class="cost"></span>
    </div>
  </div>
  <div class="footer">
    <span class="category"></span>
      <span class="currency-tax-notice">Price is in US dollars and excludes tax</span>
  </div>
</div>

            <div id="smart-image-magnifier" class="magnifier">
    <div class="size-limiter">
    </div>
  <strong></strong>
  <div class="info">
    <div class="author-category">
      by <span class="author"></span>
    </div>
    <div class="price">
      <span class="cost"></span>
    </div>
  </div>
  <div class="footer">
    <span class="category"></span>
      <span class="currency-tax-notice">Price is in US dollars and excludes tax</span>
  </div>
</div>

            <div id="video-magnifier" class="magnifier">
    <div class="size-limiter">
    </div>
  <strong></strong>
  <div class="info">
    <div class="author-category">
      by <span class="author"></span>
    </div>
    <div class="price">
      <span class="cost"></span>
    </div>
  </div>
  <div class="footer">
    <span class="category"></span>
      <span class="currency-tax-notice">Price is in US dollars and excludes tax</span>
  </div>
</div>
          </div>
        </div>
  </body>
</html>

    
@endsection