<?php
if ( ! defined( 'ABSPATH' ) ){ exit; }
$site_name = get_bloginfo("name");
$theme_link = get_template_directory_uri();
?>
<!doctype html>
<!--[if lt IE 9]><html class="no-js no-svg ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 9]><html class="no-js no-svg ie ie9 lt-ie9 lt-ie8"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js no-svg"}> <!--<![endif]-->
<head>

<meta charset="UTF-8" />
<link rel="stylesheet" href="<?= $theme_link ?>/static/site.css?_<?= THEME_INC ?>" type="text/css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="author" href="<?= $theme_link ?>/humans.txt" />
<link rel="pingback" href="{{ site.pingback_url }}" />
<link rel='icon' type='image/x-icon' href='/favicon.png' />
<link rel="alternate" type="application/rss+xml" title="<?= esc_attr($site_name) ?>" href="/ru/feed" />
<link rel='https://api.w.org/' href='/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="/wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress" />

<!-- Begin Loader -->
<script type='text/javascript'>
/*!Load JS|Copyright (c) Licensed under the MIT license|Version: 3.0*/var ObjectAssign=function(to){for(let s = 1;s<arguments.length; s+=1){var f=arguments[s];for (var key in f){to[key]=f[key];}}return to;};function $loadEvent(){Object.assign(this,{ev:document.createDocumentFragment(),tk:Date.now(),log:true,st:{}})}Object.assign($loadEvent.prototype,{ism:function(a){return $load.is(this.st[a])&&this.st[a]==1},ismj:function(a){if(typeof a=="string"){a=[a]}for(var b=0,c=a.length;b<c;b++){if(!this.ism(a[b])){return false}}return true},_d:function(a,c){if(typeof c=="undefined"){c=this.log}var b=$load.debug;if($load.is(this.st[a])&&this.st[a]==1){return}this.st[a]=1;ms=Date.now()-this.tk;if(c&&b>=1){console.log("[deliver] "+((b==2)?(ms+"ms - "):"")+a)}setTimeout((function(d,e){return function(){e.ev.dispatchEvent(new Event(d))}})(a,this),1)},_s:function(a,d){if(typeof a=="string"){a=[a]}var c=true;for(var b=0,e=a.length;b<e;b++){if(!this.ism(a[b])){this.ev.addEventListener(a[b],(function(f,g,h){return function(){if(h.ismj(f)){g()}}})(a,d,this));c=false}}if(c){setTimeout(d,1)}}});function $loadObj(){Object.assign(this,{u1:[],u2:[],m:null,dft:null,log:$load.ev_m.log,af:[],st:0})}Object.assign($loadObj.prototype,{a:function(b){this.u1=[];this.u2=[];for(var c=0;c<b.length;c++){this.u1.push(b[c]);this.u2.push(b[c].split("?").shift())}},ld:function(){if(this.st){return}this.st=1;if(this.m!=null){$load.ev_m._d(this.m,this.log)}for(var a=0;a<this.af.length;a++){setTimeout(this.af[a],1)}},load:function(b,a,e){var c=$load(b,a,e,0);this.success((function(d){return function(){d.run()}})(c));return c},success:function(a){this.af.push(a);return this},deliver:function(a){if(this.m==null){this.m=a}else{this.success((function(b){return function(){$load.deliver(b)}})(a))}return this},run:function(){if(this.st){return}$l=$load;if(this.u2.length==0||$l.ev_u.ismj(this.u2)){this.ld();return}else{$l.ev_u._s(this.u2,(function(e){return function(){e.ld()}})(this))}var d=[];var c=this.dft;for(var g=0,m=this.u2.length;g<m;g++){var b=this.u1[g];var a=this.u2[g];if($l.is($load.ev_u.st[a])){continue}$load.ev_u.st[a]=0;var l=a.split(".").pop();var k=null;var h=function(e){k=document.createElement("script");k.type="text/javascript";k.src=e;return k};var j=function(e){k=document.createElement("link");k.rel="stylesheet";k.type="text/css";k.href=e;return k};if(l=="js"){k=h(b)}else{if(l=="css"){k=j(b)}else{if(c=="js"){k=h(b)}else{if(c=="css"){k=j(b)}}}}if(k){k.onload=(function(e,f){return function(){$load.ev_u._d(e)}})(a,this);k.onerror=(function(e,f){return function(){}})(a,this);d.push(k)}}for(var g=0,m=d.length;g<m;g++){$l.h.appendChild(d[g])}}});function $load(b,a,e,c){return $load.load(b,a,e,c)}ObjectAssign($load,{debug:0,h:document.getElementsByTagName("head")[0]||document.documentElement,inc:0,ev_u:new $loadEvent(),ev_m:new $loadEvent(),is:function(a){return(typeof a!="undefined")&&(a!==null)},als:{},alias:function(b,a,c){if(!this.is(this.als[b])||this.is(c)&&c==1){this.als[b]=a}},deliver:function(a){this.ev_m._d(a)},subscribe:function(a,b){var c=new $loadObj();if(this.is(b)){c.success(b)}$load.ev_m._s(a,(function(d){return function(){d.ld()}})(c));return c},onLoad:function(a,b){var c=new $loadObj();if(this.is(b)){c.success(b)}$load.ev_u._s(a,(function(d){return function(){d.ld()}})(c));return c},load:function(c,e,d,k){if(!this.is(e)){e=null}if(!this.is(d)){d="js"}if(!this.is(k)){k=1}var h=[];if(typeof c=="string"){c=[c]}for(var f=0,g=c.length;f<g;f++){var j=c[f];if(this.is(this.als[j])){h=h.concat(this.als[j])}else{h.push(j)}}var b=new $loadObj();b.a(h);b.m=e;b.dft=d;if(k==1){b.run()}return b},sload:function(e,b,c,f){return $load.subscribe(e).load(b,c,f)}});$load.ev_u.log=false;document.addEventListener("DOMContentLoaded",function(){$load.deliver("dom_ready")});function onJQueryLoaded(a){$load.subscribe("jquery_loaded",a)}function onScriptsLoaded(a){$load.subscribe("scripts_loaded",a)}function onDocumentLoaded(a){$load.subscribe("document_loaded",a)};ObjectAssign($load,{_rw:[],onReady:function(c,d){this._rw.push({s:c,f:d});var a=document.querySelectorAll(c);for(var b=0,e=a.length;b<e;b++){d(a[b])}},runReady:function(g){for(var c=0,f=this._rw.length;c<f;c++){var e=this._rw[c];var a=g.querySelectorAll(e.s);for(var b=0,d=a.length;b<d;b++){e.f(a[b])}}}});/*!End Load JS*/
$load.debug=1;
function bindCtx(func, context){return function() { return func.apply(context, arguments); }; }
function isset(val){ return (val != null) && ((typeof val) != "undefined"); }
function htmlEscape(s){ return (new String(s)).replace(/[&<>]/g, {"&": "&amp;","<":"&lt;",">": "&gt;"}); }
function getCookie(name) { var matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\/\+^])/g, "\$1") + "=([^;]*)"	));return matches ? decodeURIComponent(matches[1]) : null; }
var SITE_EVENTS = {};function subscribeSiteEvent(event_name, callback){if (!isset(SITE_EVENTS[event_name])) SITE_EVENTS[event_name] = [];SITE_EVENTS[event_name].push(callback);}function sendSiteEvent(event_name, data){if (!isset(SITE_EVENTS[event_name])) return;console.log("[event] " + event_name);for (var i=0; i<SITE_EVENTS[event_name].length; i++){SITE_EVENTS[event_name][i](event_name, data);}}
</script>
<!-- End Loader -->

<script type='text/javascript'>
$load
	.load(['<?= $theme_link ?>/static/jquery-1.11.3.min.js'])
	.deliver('jquery_loaded');
$load
	.subscribe(['jquery_loaded'])
	.load(['<?= $theme_link ?>/static/site.js?_<?= THEME_INC ?>'])
	.deliver('scripts_loaded');
</script>

</head>

<body>