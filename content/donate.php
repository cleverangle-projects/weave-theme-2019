<?php /* Template Name: Donation Form */ ?>





<meta charset="utf-8"><script type="text/javascript" src="https://bam.nr-data.net/1/1e390569c3?a=204175506&amp;v=1158.afc605b&amp;to=YQdTbENQXUFVAUxbDFhNZEpYHlVdRg9LHQpYBlRAH1lHX1g%3D&amp;rst=1804&amp;ref=https://aspeninstitute.wufoo.com/forms/&amp;ap=88&amp;be=674&amp;fe=1679&amp;dc=1295&amp;perf=%7B%22timing%22:%7B%22of%22:1580851789616,%22n%22:0,%22r%22:3,%22re%22:392,%22f%22:392,%22dn%22:392,%22dne%22:392,%22c%22:392,%22ce%22:392,%22rq%22:393,%22rp%22:638,%22rpe%22:639,%22dl%22:643,%22di%22:1295,%22ds%22:1295,%22de%22:1297,%22dc%22:1679,%22l%22:1679,%22le%22:1684%7D,%22navigation%22:%7B%22rc%22:1%7D%7D&amp;at=TUBQGgtKTk8%3D&amp;jsonp=NREUM.setToken"></script><script src="https://js-agent.newrelic.com/nr-1158.min.js"></script><script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/TYDIjJAqCk6g335bFk3AjlC3/recaptcha__en.js"></script><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={licenseKey:"1e390569c3",applicationID:"204175506"};window.NREUM||(NREUM={}),__nr_require=function(n,e,t){function r(t){if(!e[t]){var i=e[t]={exports:{}};n[t][0].call(i.exports,function(e){var i=n[t][1][e];return r(i||e)},i,i.exports)}return e[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<t.length;i++)r(t[i]);return r}({1:[function(n,e,t){function r(){}function i(n,e,t){return function(){return o(n,[u.now()].concat(f(arguments)),e?null:this,t),e?void 0:this}}var o=n("handle"),a=n(4),f=n(5),c=n("ee").get("tracer"),u=n("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(n,e){s[e]=i(d+e,!0,"api")}),s.addPageAction=i(d+"addPageAction",!0),s.setCurrentRouteName=i(d+"routeName",!0),e.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(n,e){var t={},r=this,i="function"==typeof e;return o(l+"tracer",[u.now(),n,t],r),function(){if(c.emit((i?"":"no-")+"fn-start",[u.now(),r,i],t),i)try{return e.apply(this,arguments)}catch(n){throw c.emit("fn-err",[arguments,this,n],t),n}finally{c.emit("fn-end",[u.now()],t)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(n,e){m[e]=i(l+e)}),newrelic.noticeError=function(n,e){"string"==typeof n&&(n=new Error(n)),o("err",[n,u.now(),!1,e])}},{}],2:[function(n,e,t){function r(n,e){var t=n.getEntries();t.forEach(function(n){"first-paint"===n.name?a("timing",["fp",Math.floor(n.startTime)]):"first-contentful-paint"===n.name&&a("timing",["fcp",Math.floor(n.startTime)])})}function i(n){if(n instanceof c&&!s){var e,t=Math.round(n.timeStamp);e=t>1e12?Date.now()-t:f.now()-t,s=!0,a("timing",["fi",t,{type:n.type,fid:e}])}}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var o,a=n("handle"),f=n("loader"),c=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){o=new PerformanceObserver(r);try{o.observe({entryTypes:["paint"]})}catch(u){}}if("addEventListener"in document){var s=!1,p=["click","keydown","mousedown","pointerdown","touchstart"];p.forEach(function(n){document.addEventListener(n,i,!1)})}}},{}],3:[function(n,e,t){function r(n,e){if(!i)return!1;if(n!==i)return!1;if(!e)return!0;if(!o)return!1;for(var t=o.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==t[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var f=navigator.userAgent,c=f.match(a);c&&f.indexOf("Chrome")===-1&&f.indexOf("Chromium")===-1&&(i="Safari",o=c[1])}e.exports={agent:i,version:o,match:r}},{}],4:[function(n,e,t){function r(n,e){var t=[],r="",o=0;for(r in n)i.call(n,r)&&(t[o]=e(r,n[r]),o+=1);return t}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],5:[function(n,e,t){function r(n,e,t){e||(e=0),"undefined"==typeof t&&(t=n?n.length:0);for(var r=-1,i=t-e||0,o=Array(i<0?0:i);++r<i;)o[r]=n[e+r];return o}e.exports=r},{}],6:[function(n,e,t){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(n,e,t){function r(){}function i(n){function e(n){return n&&n instanceof r?n:n?c(n,f,o):o()}function t(t,r,i,o){if(!d.aborted||o){n&&n(t,r,i);for(var a=e(i),f=v(t),c=f.length,u=0;u<c;u++)f[u].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(n,e){h[n]=v(n).concat(e)}function m(n,e){var t=h[n];if(t)for(var r=0;r<t.length;r++)t[r]===e&&t.splice(r,1)}function v(n){return h[n]||[]}function g(n){return p[n]=p[n]||i(t)}function w(n,e){u(n,function(n,t){e=e||"feature",y[t]=e,e in s||(s[e]=[])})}var h={},y={},b={on:l,addEventListener:l,removeEventListener:m,emit:t,get:g,listeners:v,context:e,buffer:w,abort:a,aborted:!1};return b}function o(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var f="nr@context",c=n("gos"),u=n(4),s={},p={},d=e.exports=i();d.backlog=s},{}],gos:[function(n,e,t){function r(n,e,t){if(i.call(n,e))return n[e];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(n,e,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return n[e]=r,r}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(n,e,t){function r(n,e,t,r){i.buffer([n],r),i.emit(n,e,t)}var i=n("ee").get("handle");e.exports=r,r.ee=i},{}],id:[function(n,e,t){function r(n){var e=typeof n;return!n||"object"!==e&&"function"!==e?-1:n===window?0:a(n,o,function(){return i++})}var i=1,o="nr@id",a=n("gos");e.exports=r},{}],loader:[function(n,e,t){function r(){if(!x++){var n=E.info=NREUM.info,e=l.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(n&&n.licenseKey&&n.applicationID&&e))return s.abort();u(y,function(e,t){n[e]||(n[e]=t)}),c("mark",["onload",a()+E.offset],null,"api");var t=l.createElement("script");t.src="https://"+n.agent,e.parentNode.insertBefore(t,e)}}function i(){"complete"===l.readyState&&o()}function o(){c("mark",["domContent",a()+E.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(f=Math.max((new Date).getTime(),f))-E.offset}var f=(new Date).getTime(),c=n("handle"),u=n(4),s=n("ee"),p=n(3),d=window,l=d.document,m="addEventListener",v="attachEvent",g=d.XMLHttpRequest,w=g&&g.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:g,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var h=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1158.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),E=e.exports={offset:f,now:a,origin:h,features:{},xhrWrappable:b,userAgent:p};n(1),n(2),l[m]?(l[m]("DOMContentLoaded",o,!1),d[m]("load",r,!1)):(l[v]("onreadystatechange",i),d[v]("onload",r)),c("mark",["firstbyte",f],null,"api");var x=0,O=n(6)},{}],"wrap-function":[function(n,e,t){function r(n){return!(n&&n instanceof Function&&n.apply&&!n[a])}var i=n("ee"),o=n(5),a="nr@original",f=Object.prototype.hasOwnProperty,c=!1;e.exports=function(n,e){function t(n,e,t,i){function nrWrapper(){var r,a,f,c;try{a=this,r=o(arguments),f="function"==typeof t?t(r,a):t||{}}catch(u){d([u,"",[r,a,i],f])}s(e+"start",[r,a,i],f);try{return c=n.apply(a,r)}catch(p){throw s(e+"err",[r,a,p],f),p}finally{s(e+"end",[r,a,c],f)}}return r(n)?n:(e||(e=""),nrWrapper[a]=n,p(n,nrWrapper),nrWrapper)}function u(n,e,i,o){i||(i="");var a,f,c,u="-"===i.charAt(0);for(c=0;c<e.length;c++)f=e[c],a=n[f],r(a)||(n[f]=t(a,u?f+i:i,o,f))}function s(t,r,i){if(!c||e){var o=c;c=!0;try{n.emit(t,r,i,e)}catch(a){d([a,t,r,i])}c=o}}function p(n,e){if(Object.defineProperty&&Object.keys)try{var t=Object.keys(n);return t.forEach(function(t){Object.defineProperty(e,t,{get:function(){return n[t]},set:function(e){return n[t]=e,e}})}),e}catch(r){d([r])}for(var i in n)f.call(n,i)&&(e[i]=n[i]);return e}function d(e){try{n.emit("internal-error",e)}catch(t){}}return n||(n=i),t.inPlace=u,t.flag=a,t}},{}]},{},["loader"]);</script>
<meta name="generator" content="Wufoo">
<meta name="robots" content="noindex, noarchive">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="canonical" href="https://aspeninstitute.wufoo/forms/zhtmrjk0yo56y7/">

<!-- CSS -->
<link href="https://static.wufoo.com/stylesheets/public/forms/css/index.0566.css" rel="stylesheet">
<link href="/css/custom/48/theme.css" rel="stylesheet">


<!--[if lt IE 10]>
<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->



<style>
  @-webkit-keyframes rotate {
    100% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg); } }

  @keyframes rotate {
    100% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg); } }

  @-webkit-keyframes loop {
    0% {
      stroke-dasharray: 20, 100;
      stroke-dashoffset: 30;
      -webkit-animation-timing-function: cubic-bezier(0.3, 0, 1, 1);
      animation-timing-function: cubic-bezier(0.3, 0, 1, 1); }
    40% {
      stroke-dasharray: 60, 70;
      stroke-dashoffset: -10;
      -webkit-animation-timing-function: cubic-bezier(0, 0, 0.9, 1);
      animation-timing-function: cubic-bezier(0, 0, 0.9, 1); }
    85% {
      stroke-dasharray: 20, 100; }
    100% {
      stroke-dashoffset: -90; } }

  @keyframes loop {
    0% {
      stroke-dasharray: 20, 100;
      stroke-dashoffset: 30;
      -webkit-animation-timing-function: cubic-bezier(0.3, 0, 1, 1);
      animation-timing-function: cubic-bezier(0.3, 0, 1, 1); }
    40% {
      stroke-dasharray: 60, 70;
      stroke-dashoffset: -10;
      -webkit-animation-timing-function: cubic-bezier(0, 0, 0.9, 1);
      animation-timing-function: cubic-bezier(0, 0, 0.9, 1); }
    85% {
      stroke-dasharray: 20, 100; }
    100% {
      stroke-dashoffset: -90; } }
</style>
</head>

<body id="public" class="noI" onorientationchange="window.scrollTo(0, 1)">





<div id="container" class="ltr ">
  <h1 id="logo">
    <a>Wufoo</a>
  </h1>


  <form id="form1882" name="form1882" class="wufoo topLabel page1" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate="" action="https://aspeninstitute.wufoo.com/forms/?formname=zhtmrjk0yo56y7&amp;embed=1&amp;embedKey=zhtmrjk0yo56y7394509&amp;entsource=&amp;referrer=http:wuslashwuslashweave-staging.hattaway.comwuslashwp-adminwuslashpost.php?post=3272&amp;action=edit#public">

    <header id="header" class="info">
      <h2 class="">Here’s how to donate to support Weave’s work.</h2>
      <div class=""></div>
    </header>


    <ul>


      <li id="fo1882li3" class="notranslate first section      ">
        <section>
          <h3 id="title3">
            <i>Billing Information</i>
          </h3>
        </section>
      </li>



      <li id="fo1882li140" data-wufoo-field="" data-field-type="text" class="notranslate      ">
        <label class="desc" id="title140" for="Field140">
          My First Name is:
          <span id="req_140" class="req">*</span>
        </label>
        <div>
          <input id="Field140" name="Field140" type="text" class="field text medium" value="" maxlength="255" tabindex="0" onkeyup="handleInput(this); " onchange="handleInput(this);" required="" placeholder="">
        </div>
      </li>



      <li id="fo1882li141" data-wufoo-field="" data-field-type="text" class="notranslate      ">
        <label class="desc" id="title141" for="Field141">
          My Last Name is:
          <span id="req_141" class="req">*</span>
        </label>
        <div>
          <input id="Field141" name="Field141" type="text" class="field text medium" value="" maxlength="255" tabindex="0" onkeyup="handleInput(this); " onchange="handleInput(this);" required="" placeholder="">
        </div>
      </li>



      <li id="fo1882li4" class="complex notranslate      ">
        <label class="desc" id="title4">
          Here is my billing address:
          <span id="req_4" class="req">*</span>
        </label>
        <div>
		<span class="full addr1">
		<input id="Field4" name="Field4" type="text" class="field text addr" value="" tabindex="0" onkeyup="handleInput(this);" onchange="handleInput(this);" placeholder="" required="">
		<label for="Field4">Street Address</label>
		</span>
          <span class="full addr2">
		<input id="Field5" name="Field5" type="text" class="field text addr" value="" tabindex="0" onkeyup="handleInput(this);" onchange="handleInput(this);" placeholder="">
		<label for="Field5">Address Line 2</label>
		</span>
          <span class="left city">
			<input id="Field6" name="Field6" type="text" class="field text addr" value="" tabindex="0" onkeyup="handleInput(this);" onchange="handleInput(this);" placeholder="" required="">
			<label for="Field6">City</label>
			</span>
          <span class="right state">
			<input id="Field7" name="Field7" type="text" class="field text addr" value="" tabindex="0" onkeyup="handleInput(this);" onchange="handleInput(this);" placeholder="" required="">
			<label for="Field7">State / Province / Region</label>
			</span>
          <span class="left zip">
			<input id="Field8" name="Field8" type="text" class="field text addr" value="" maxlength="15" tabindex="0" onkeyup="handleInput(this);" onchange="handleInput(this);" placeholder="" required="">
			<label for="Field8">Postal / Zip Code</label>
			</span>
          <span class="right country">
			<select id="Field9" name="Field9" class="field select addr" tabindex="0" onchange="handleInput(this);" onkeyup="handleInput(this);" data-wufoo-field="dropdown">
									<option value="" selected="selected"></option>
									<option value="United States">United States</option>
									<option value="United Kingdom">United Kingdom</option>
									<option value="Australia">Australia</option>
									<option value="Canada">Canada</option>
									<option value="France">France</option>
									<option value="New Zealand">New Zealand</option>
									<option value="India">India</option>
									<option value="Brazil">Brazil</option>
									<option value="----">----</option>
									<option value="Afghanistan">Afghanistan</option>
									<option value="Åland Islands">Åland Islands</option>
									<option value="Albania">Albania</option>
									<option value="Algeria">Algeria</option>
									<option value="American Samoa">American Samoa</option>
									<option value="Andorra">Andorra</option>
									<option value="Angola">Angola</option>
									<option value="Anguilla">Anguilla</option>
									<option value="Antarctica">Antarctica</option>
									<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
									<option value="Argentina">Argentina</option>
									<option value="Armenia">Armenia</option>
									<option value="Aruba">Aruba</option>
									<option value="Austria">Austria</option>
									<option value="Azerbaijan">Azerbaijan</option>
									<option value="Bahamas">Bahamas</option>
									<option value="Bahrain">Bahrain</option>
									<option value="Bangladesh">Bangladesh</option>
									<option value="Barbados">Barbados</option>
									<option value="Belarus">Belarus</option>
									<option value="Belgium">Belgium</option>
									<option value="Belize">Belize</option>
									<option value="Benin">Benin</option>
									<option value="Bermuda">Bermuda</option>
									<option value="Bhutan">Bhutan</option>
									<option value="Bolivia">Bolivia</option>
									<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
									<option value="Botswana">Botswana</option>
									<option value="Bouvet Island">Bouvet Island</option>
									<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
									<option value="British Virgin Islands">British Virgin Islands</option>
									<option value="Brunei">Brunei</option>
									<option value="Bulgaria">Bulgaria</option>
									<option value="Burkina Faso">Burkina Faso</option>
									<option value="Burundi">Burundi</option>
									<option value="Cambodia">Cambodia</option>
									<option value="Cameroon">Cameroon</option>
									<option value="Cape Verde">Cape Verde</option>
									<option value="Caribbean Netherlands">Caribbean Netherlands</option>
									<option value="Cayman Islands">Cayman Islands</option>
									<option value="Central African Republic">Central African Republic</option>
									<option value="Chad">Chad</option>
									<option value="Chile">Chile</option>
									<option value="China">China</option>
									<option value="Christmas Island">Christmas Island</option>
									<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
									<option value="Colombia">Colombia</option>
									<option value="Comoros">Comoros</option>
									<option value="Congo - Brazzaville">Congo - Brazzaville</option>
									<option value="Congo - Kinshasa">Congo - Kinshasa</option>
									<option value="Cook Islands">Cook Islands</option>
									<option value="Costa Rica">Costa Rica</option>
									<option value="Côte d’Ivoire">Côte d’Ivoire</option>
									<option value="Croatia">Croatia</option>
									<option value="Cuba">Cuba</option>
									<option value="Curaçao">Curaçao</option>
									<option value="Cyprus">Cyprus</option>
									<option value="Czechia">Czechia</option>
									<option value="Denmark">Denmark</option>
									<option value="Djibouti">Djibouti</option>
									<option value="Dominica">Dominica</option>
									<option value="Dominican Republic">Dominican Republic</option>
									<option value="Ecuador">Ecuador</option>
									<option value="Egypt">Egypt</option>
									<option value="El Salvador">El Salvador</option>
									<option value="Equatorial Guinea">Equatorial Guinea</option>
									<option value="Eritrea">Eritrea</option>
									<option value="Estonia">Estonia</option>
									<option value="Ethiopia">Ethiopia</option>
									<option value="Falkland Islands">Falkland Islands</option>
									<option value="Faroe Islands">Faroe Islands</option>
									<option value="Fiji">Fiji</option>
									<option value="Finland">Finland</option>
									<option value="French Guiana">French Guiana</option>
									<option value="French Polynesia">French Polynesia</option>
									<option value="French Southern Territories">French Southern Territories</option>
									<option value="Gabon">Gabon</option>
									<option value="Gambia">Gambia</option>
									<option value="Georgia">Georgia</option>
									<option value="Germany">Germany</option>
									<option value="Ghana">Ghana</option>
									<option value="Gibraltar">Gibraltar</option>
									<option value="Greece">Greece</option>
									<option value="Greenland">Greenland</option>
									<option value="Grenada">Grenada</option>
									<option value="Guadeloupe">Guadeloupe</option>
									<option value="Guam">Guam</option>
									<option value="Guatemala">Guatemala</option>
									<option value="Guernsey">Guernsey</option>
									<option value="Guinea">Guinea</option>
									<option value="Guinea-Bissau">Guinea-Bissau</option>
									<option value="Guyana">Guyana</option>
									<option value="Haiti">Haiti</option>
									<option value="Heard &amp; McDonald Islands">Heard &amp; McDonald Islands</option>
									<option value="Honduras">Honduras</option>
									<option value="Hong Kong SAR China">Hong Kong SAR China</option>
									<option value="Hungary">Hungary</option>
									<option value="Iceland">Iceland</option>
									<option value="Indonesia">Indonesia</option>
									<option value="Iran">Iran</option>
									<option value="Iraq">Iraq</option>
									<option value="Ireland">Ireland</option>
									<option value="Isle of Man">Isle of Man</option>
									<option value="Israel">Israel</option>
									<option value="Italy">Italy</option>
									<option value="Jamaica">Jamaica</option>
									<option value="Japan">Japan</option>
									<option value="Jersey">Jersey</option>
									<option value="Jordan">Jordan</option>
									<option value="Kazakhstan">Kazakhstan</option>
									<option value="Kenya">Kenya</option>
									<option value="Kiribati">Kiribati</option>
									<option value="Kosovo">Kosovo</option>
									<option value="Kuwait">Kuwait</option>
									<option value="Kyrgyzstan">Kyrgyzstan</option>
									<option value="Laos">Laos</option>
									<option value="Latvia">Latvia</option>
									<option value="Lebanon">Lebanon</option>
									<option value="Lesotho">Lesotho</option>
									<option value="Liberia">Liberia</option>
									<option value="Libya">Libya</option>
									<option value="Liechtenstein">Liechtenstein</option>
									<option value="Lithuania">Lithuania</option>
									<option value="Luxembourg">Luxembourg</option>
									<option value="Macau SAR China">Macau SAR China</option>
									<option value="Republic of North Macedonia">Republic of North Macedonia</option>
									<option value="Madagascar">Madagascar</option>
									<option value="Malawi">Malawi</option>
									<option value="Malaysia">Malaysia</option>
									<option value="Maldives">Maldives</option>
									<option value="Mali">Mali</option>
									<option value="Malta">Malta</option>
									<option value="Marshall Islands">Marshall Islands</option>
									<option value="Martinique">Martinique</option>
									<option value="Mauritania">Mauritania</option>
									<option value="Mauritius">Mauritius</option>
									<option value="Mayotte">Mayotte</option>
									<option value="Mexico">Mexico</option>
									<option value="Micronesia">Micronesia</option>
									<option value="Moldova">Moldova</option>
									<option value="Monaco">Monaco</option>
									<option value="Mongolia">Mongolia</option>
									<option value="Montenegro">Montenegro</option>
									<option value="Montserrat">Montserrat</option>
									<option value="Morocco">Morocco</option>
									<option value="Mozambique">Mozambique</option>
									<option value="Myanmar (Burma)">Myanmar (Burma)</option>
									<option value="Namibia">Namibia</option>
									<option value="Nauru">Nauru</option>
									<option value="Nepal">Nepal</option>
									<option value="Netherlands">Netherlands</option>
									<option value="New Caledonia">New Caledonia</option>
									<option value="Nicaragua">Nicaragua</option>
									<option value="Niger">Niger</option>
									<option value="Nigeria">Nigeria</option>
									<option value="Niue">Niue</option>
									<option value="Norfolk Island">Norfolk Island</option>
									<option value="North Korea">North Korea</option>
									<option value="Northern Mariana Islands">Northern Mariana Islands</option>
									<option value="Norway">Norway</option>
									<option value="Oman">Oman</option>
									<option value="Pakistan">Pakistan</option>
									<option value="Palau">Palau</option>
									<option value="Palestinian Territories">Palestinian Territories</option>
									<option value="Panama">Panama</option>
									<option value="Papua New Guinea">Papua New Guinea</option>
									<option value="Paraguay">Paraguay</option>
									<option value="Peru">Peru</option>
									<option value="Philippines">Philippines</option>
									<option value="Pitcairn Islands">Pitcairn Islands</option>
									<option value="Poland">Poland</option>
									<option value="Portugal">Portugal</option>
									<option value="Puerto Rico">Puerto Rico</option>
									<option value="Qatar">Qatar</option>
									<option value="Réunion">Réunion</option>
									<option value="Romania">Romania</option>
									<option value="Russia">Russia</option>
									<option value="Rwanda">Rwanda</option>
									<option value="Samoa">Samoa</option>
									<option value="San Marino">San Marino</option>
									<option value="São Tomé &amp; Príncipe">São Tomé &amp; Príncipe</option>
									<option value="Saudi Arabia">Saudi Arabia</option>
									<option value="Senegal">Senegal</option>
									<option value="Serbia">Serbia</option>
									<option value="Seychelles">Seychelles</option>
									<option value="Sierra Leone">Sierra Leone</option>
									<option value="Singapore">Singapore</option>
									<option value="Sint Maarten">Sint Maarten</option>
									<option value="Slovakia">Slovakia</option>
									<option value="Slovenia">Slovenia</option>
									<option value="Solomon Islands">Solomon Islands</option>
									<option value="Somalia">Somalia</option>
									<option value="South Africa">South Africa</option>
									<option value="South Georgia &amp; South Sandwich Islands">South Georgia &amp; South Sandwich Islands</option>
									<option value="South Korea">South Korea</option>
									<option value="South Sudan">South Sudan</option>
									<option value="Spain">Spain</option>
									<option value="Sri Lanka">Sri Lanka</option>
									<option value="St. Barthélemy">St. Barthélemy</option>
									<option value="St. Helena">St. Helena</option>
									<option value="St. Kitts &amp; Nevis">St. Kitts &amp; Nevis</option>
									<option value="St. Lucia">St. Lucia</option>
									<option value="St. Martin">St. Martin</option>
									<option value="St. Pierre &amp; Miquelon">St. Pierre &amp; Miquelon</option>
									<option value="St. Vincent &amp; Grenadines">St. Vincent &amp; Grenadines</option>
									<option value="Sudan">Sudan</option>
									<option value="Suriname">Suriname</option>
									<option value="Svalbard &amp; Jan Mayen">Svalbard &amp; Jan Mayen</option>
									<option value="Swaziland">Swaziland</option>
									<option value="Sweden">Sweden</option>
									<option value="Switzerland">Switzerland</option>
									<option value="Syria">Syria</option>
									<option value="Taiwan">Taiwan</option>
									<option value="Tajikistan">Tajikistan</option>
									<option value="Tanzania">Tanzania</option>
									<option value="Thailand">Thailand</option>
									<option value="Timor-Leste">Timor-Leste</option>
									<option value="Togo">Togo</option>
									<option value="Tokelau">Tokelau</option>
									<option value="Tonga">Tonga</option>
									<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
									<option value="Tunisia">Tunisia</option>
									<option value="Turkey">Turkey</option>
									<option value="Turkmenistan">Turkmenistan</option>
									<option value="Turks &amp; Caicos Islands">Turks &amp; Caicos Islands</option>
									<option value="Tuvalu">Tuvalu</option>
									<option value="U.S. Outlying Islands">U.S. Outlying Islands</option>
									<option value="U.S. Virgin Islands">U.S. Virgin Islands</option>
									<option value="Uganda">Uganda</option>
									<option value="Ukraine">Ukraine</option>
									<option value="United Arab Emirates">United Arab Emirates</option>
									<option value="Uruguay">Uruguay</option>
									<option value="Uzbekistan">Uzbekistan</option>
									<option value="Vanuatu">Vanuatu</option>
									<option value="Vatican City">Vatican City</option>
									<option value="Venezuela">Venezuela</option>
									<option value="Vietnam">Vietnam</option>
									<option value="Wallis &amp; Futuna">Wallis &amp; Futuna</option>
									<option value="Western Sahara">Western Sahara</option>
									<option value="Yemen">Yemen</option>
									<option value="Zambia">Zambia</option>
									<option value="Zimbabwe">Zimbabwe</option>
							</select>
			<label for="Field9">Country</label>
			</span>
        </div>
      </li>



      <li id="fo1882li11" class="notranslate      ">
        <label class="desc" id="title11" for="Field11">
          Please send any emails to this address:
          <span id="req_11" class="req">*</span>
        </label>
        <div>
          <input id="Field11" name="Field11" type="email" spellcheck="false" class="field text medium" value="" maxlength="255" tabindex="0" onkeyup="handleInput(this);" onchange="handleInput(this);" placeholder="" required="">
        </div>
      </li>



      <li id="fo1882li14" class="notranslate      ">
        <label class="desc" id="title14" for="Field14">
          Here’s the best number to reach me by:
        </label>
        <div>
          <input id="Field14" class="field text medium" name="Field14" tabindex="0" onkeyup="handleInput(this);" onchange="handleInput(this);" placeholder="" type="tel" maxlength="255" value="">
        </div>
      </li>


      <li id="fo1882li19" class="     ">
        <fieldset>
          <!--[if !IE | (gte IE 8)]-->
          <legend id="title19" class="desc notranslate">
            I’d like to give:
          </legend>
          <!--[endif]-->
          <!--[if lt IE 8]>
          <label id="title19" class="desc">
            I’d like to give:
          </label>
          <![endif]-->
          <div>
            <input id="radioDefault_19" name="Field19" type="hidden" value="">
            <span>
  <input id="Field19_0" name="Field19" type="radio" class="field radio" value="$50" tabindex="0" onchange="handleInput(this);" onmouseup="handleInput(this);">
  <label class="choice" for="Field19_0">
    <span class="choice__text notranslate">$50</span>
          <span class="choice__qty">
              </span>
  </label>
    </span>
            <span>
  <input id="Field19_1" name="Field19" type="radio" class="field radio" value="$100" tabindex="0" onchange="handleInput(this);" onmouseup="handleInput(this);">
  <label class="choice" for="Field19_1">
    <span class="choice__text notranslate">$100</span>
          <span class="choice__qty">
              </span>
  </label>
    </span>
            <span>
  <input id="Field19_2" name="Field19" type="radio" class="field radio" value="$250" tabindex="0" onchange="handleInput(this);" onmouseup="handleInput(this);">
  <label class="choice" for="Field19_2">
    <span class="choice__text notranslate">$250</span>
          <span class="choice__qty">
              </span>
  </label>
    </span>
          </div>
        </fieldset>
      </li>



      <li id="fo1882li17" class="notranslate      ">
        <label class="desc" id="title17">
          Other amount:
        </label>
        <span class="symbol">$</span>
        <span>
		<input id="Field17" name="Field17" type="text" class="field text currency nospin" value="" size="10" tabindex="0" onkeyup="handleInput(this);" onchange="handleInput(this);">
		<label for="Field17">Dollars</label>
	</span>
        <span class="symbol radix">.</span>
        <span class="cents">
		<input id="Field17-1" name="Field17-1" type="text" class="field text nospin" value="" size="2" maxlength="2" tabindex="0" onkeyup="handleInput(this);" onchange="handleInput(this);">
		<label for="Field17-1">Cents</label>
	</span>
      </li>


      <li id="fo1882li136" class="notranslate section      ">
        <section>
          <h3 id="title136">
            <i>Additional information:</i>
          </h3>
        </section>
      </li>



      <li id="fo1882li24" class="     ">
        <fieldset>
          <!--[if !IE | (gte IE 8)]-->
          <legend id="title24" class="desc notranslate">
            Would you like to receive Weave’s monthly newsletter?
            <span id="req_24" class="req">*</span>
          </legend>
          <!--[endif]-->
          <!--[if lt IE 8]>
          <label id="title24" class="desc">
            Would you like to receive Weave’s monthly newsletter?
            <span id="req_24" class="req">*</span>
          </label>
          <![endif]-->
          <div>
		<span class="subfield">
	<input id="Field24" name="Field24" type="checkbox" class="field checkbox" value="Yes" tabindex="0" onchange="handleInput(this);">
	<label class="choice" for="Field24">
		<span class="choice__text notranslate">Yes</span>
					<span class="choice__qty">
							</span>
	</label>
	</span>
            <span class="subfield">
	<input id="Field25" name="Field25" type="checkbox" class="field checkbox" value="No" tabindex="0" onchange="handleInput(this);">
	<label class="choice" for="Field25">
		<span class="choice__text notranslate">No</span>
					<span class="choice__qty">
							</span>
	</label>
	</span>
          </div>
        </fieldset>
      </li>


      <li id="fo1882li138" class="notranslate section      ">
        <section>
          <h3 id="title138">
          </h3>
          <div id="instruct138">Please select <strong>Continue to Payment</strong> and fill out the next page (required to process donation) </div>
        </section>
      </li>




      <li id="fo1882licaptcha" class="captcha notranslate">

        <label class="desc">
          Please check the box below.
          <span class="req">*</span>
        </label>

        <script src="https://www.google.com/recaptcha/api.js"></script>

        <noscript>
          <style type="text/css">

            form li.captcha label.desc{
              display:none;
            }
            form li.captcha{
              border-bottom:1px dotted #ccc;
              padding-bottom:1.2em;
            }

          </style>
        </noscript>
        <div class="g-recaptcha" data-sitekey="6Lds3D8UAAAAAPcAz2bYCfSuvZYffjOXi6bVvPhO"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lds3D8UAAAAAPcAz2bYCfSuvZYffjOXi6bVvPhO&amp;co=aHR0cHM6Ly9hc3Blbmluc3RpdHV0ZS53dWZvby5jb206NDQz&amp;hl=en&amp;v=TYDIjJAqCk6g335bFk3AjlC3&amp;size=normal&amp;cb=p5acgima4tkj" width="304" height="78" role="presentation" name="a-x31393wzha13" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div>
      </li>


      <li class="buttons ">
        <div>
          <input type="hidden" name="currentPage" id="currentPage" value="ZMewuslashbsnx6SYwuslash9vTwuslashRV83kREz27dlwuBeIDrk1d3jAVeQIs=">

          <input id="saveForm" name="saveForm" class="btTxt submit" type="submit" value="Continue to Payment" onmousedown="doSubmitEvents();">



        </div>
      </li>

      <li class="hide">
        <label for="comment">Do Not Fill This Out</label>
        <textarea name="comment" id="comment" rows="1" cols="1"></textarea>
        <input type="hidden" id="idstamp" name="idstamp" value="ts34lvqQTg6uImNVZ9El+A==">
        <input type="hidden" id="stats" name="stats" value="{&quot;errors&quot;:0,&quot;startTime&quot;:0,&quot;endTime&quot;:0,&quot;referer&quot;:&quot;http:\/\/weave-staging.hattaway.com\/hello-from-weave\/&quot;}">
        <input type="hidden" id="clickOrEnter" name="clickOrEnter" value="">
      </li>
    </ul>
  </form>


</div><!--container-->


<!-- JavaScript -->
<script src="https://static.wufoo.com/scripts/public/dynamic.0566.js?language=english"></script>

<script>
  __RULES = [];
  __ENTRY = [];
  __PRICES = {"ShowRunningTotal":false,"BasePrice":0,"Currency":"$","Decimals":2,"BasePriceName":"Base Price","TotalText":"Total","MerchantFields":[],"BasePriceText":"Base Price"};
  __FORM_LIMIT = 20;

  <!-- Google Analytics -->
  // This block is for the Google Analytics feature in form settings of Form Builder
  <!-- End of Google Analytics -->

</script>




<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"1e390569c3","applicationID":"204175506","transactionName":"YQdTbENQXUFVAUxbDFhNZEpYHlVdRg9LHQpYBlRAH1lHX1g=","queueTime":0,"applicationTime":88,"atts":"TUBQGgtKTk8=","errorBeacon":"bam.nr-data.net","agent":""}</script>

<script type="text/javascript">__EMBEDKEY = "zhtmrjk0yo56y7394509"</script><div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge" src="https://www.google.com/recaptcha/api2/bframe?hl=en&amp;v=TYDIjJAqCk6g335bFk3AjlC3&amp;k=6Lds3D8UAAAAAPcAz2bYCfSuvZYffjOXi6bVvPhO&amp;cb=g702do2wioo0" name="c-x31393wzha13" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe>
  </div>
</div>
</body>