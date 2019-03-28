<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="language" content="es" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!-- blueprint CSS framework -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/estilos.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>assets/fonts/fontawesome-webfont.ttf" media="print" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/animation.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
<div id="wrapper">
	<div id="main">
		<div class="inner">
		<section>
		<?php // esto son las migas de pan
			$this->pageTitle=Yii::app()->name . ' - Galeria Personal';
			$this->breadcrumbs=array(
			'Galeria Personal',
			);
		?>

<div style="margin-top:2%;" class="col-lg-12">
<script>
(function(h,g,c,j,e,l,k){
new(function(){});
var f={wd:function(a){return-c.cos(a*c.PI)/2+.5},Ad:function(a){return a},be:function(a){return-a*(a-2)},ce:function(a){return a*a*a},de:function(a){return(a-=1)*a*a+1}},d={m:f.Ad,l:f.ce,hd:f.de};

var b=new function(){var d=this,Ab=/\S+/g,F=1,yb=2,fb=3,eb=4,jb=5,G,r=0,i=0,s=0,X=0,z=0,I=navigator,ob=I.appName,o=I.userAgent,p=parseFloat;

function Ib(){if(!G){G={jf:"ontouchstart"in h||"createTouch"in g};
var a;if(I.pointerEnabled||(a=I.msPointerEnabled))G.td=a?"msTouchAction":"touchAction"}return G}

function v(j){if(!r){r=-1;if(ob=="Microsoft Internet Explorer"&&!!h.attachEvent&&!!h.ActiveXObject){var e=o.indexOf("MSIE");r=F;s=p(o.substring(e+5,o.indexOf(";",e)));/*@cc_on X=@_jscript_version@*/;i=g.documentMode||s}else if(ob=="Netscape"&&!!h.addEventListener){var d=o.indexOf("Firefox"),b=o.indexOf("Safari"),f=o.indexOf("Chrome"),c=o.indexOf("AppleWebKit");if(d>=0){r=yb;i=p(o.substring(d+8))}else if(b>=0){var k=o.substring(0,b).lastIndexOf("/");r=f>=0?eb:fb;i=p(o.substring(k+1,b))}else{var a=/Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(o);if(a){r=F;i=s=p(a[1])}}if(c>=0)z=p(o.substring(c+12))}else{var a=/(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(o);if(a){r=jb;i=p(a[2])}}}return j==r}function q(){return v(F)}

function Q(){return q()&&(i<6||g.compatMode=="BackCompat")}
function db(){return v(fb)}
function ib(){return v(jb)}
function vb(){return db()&&z>534&&z<535}function J(){v();
	return z>537||i>42||r==F&&i>=11}

function O(){return q()&&i<9}function wb(a){var b,c;

	return function(f){if(!b){b=e;var d=a.substr(0,1).toUpperCase()+a.substr(1);n([a].concat(["WebKit","ms","Moz","O","webkit"]),

		function(g,e){var b=a;if(e)b=g+d;if(f.style[b]!=k)return c=b})}return c}}

function ub(b){var a;return function(c){a=a||wb(b)(c)||b;return a}}var K=ub("transform");

function nb(a){return{}.toString.call(a)}var kb={};n(["Boolean","Number","String","Function","Array","Date","RegExp","Object"],function(a){kb["[object "+a+"]"]=a.toLowerCase()});

function n(b,d){var a,c;if(nb(b)=="[object Array]"){for(a=0;a<b.length;a++)if(c=d(b[a],a,b))return c}else for(a in b)if(c=d(b[a],a,b))return c}

function C(a){return a==j?String(a):kb[nb(a)]||"object"}

function lb(a){for(var b in a)return e}

function A(a){try{return C(a)=="object"&&!a.nodeType&&a!=a.window&&(!a.constructor||{}.hasOwnProperty.call(a.constructor.prototype,"isPrototypeOf"))}catch(b){}}
function u(a,b){return{x:a,y:b}}

function rb(b,a){setTimeout(b,a||0)}

function H(b,d,c){var a=!b||b=="inherit"?"":b;n(d,function(c){var b=c.exec(a);if(b){var d=a.substr(0,b.index),e=a.substr(b.index+b[0].length+1,a.length-1);a=d+e}});a=c+(!a.indexOf(" ")?"":" ")+a;return a}function tb(b,a){if(i<9)b.style.filter=a}d.kf=Ib;d.id=q;d.of=db;d.od=ib;d.zf=J;d.rb=O;wb("transform");d.rd=function(){return i};d.ye=function(){v();return z};d.R=rb;

function Y(a){a.constructor===Y.caller&&a.vd&&a.vd.apply(a,Y.caller.arguments)}d.vd=Y;d.Jb=function(a){if(d.Ge(a))a=g.getElementById(a);return a};

function t(a){return a||h.event}d.yd=t;d.fc=function(b){b=t(b);var a=b.target||b.srcElement||g;if(a.nodeType==3)a=d.Bd(a);
	return a};d.Dd=function(a){a=t(a);return{x:a.pageX||a.clientX||0,y:a.pageY||a.clientY||0}};

function D(c,d,a){if(a!==k)c.style[d]=a==k?"":a;else{var b=c.currentStyle||c.style;a=b[d];if(a==""&&h.getComputedStyle){b=c.ownerDocument.defaultView.getComputedStyle(c,j);b&&(a=b.getPropertyValue(d)||b[d])}return a}}

function ab(b,c,a,d){if(a!==k){if(a==j)a="";else d&&(a+="px");D(b,c,a)}else return p(D(b,c))}function m(c,a){var d=a?ab:D,b;if(a&4)b=ub(c);

	return function(e,f){return d(e,b?b(e):c,f,a&2)}}
function Db(b){if(q()&&s<9){var a=/opacity=([^)]*)/.exec(b.style.filter||"");return a?p(a[1])/100:1}else return p(b.style.opacity||"1")}

function Fb(b,a,f){if(q()&&s<9){var h=b.style.filter||"",i=new RegExp(/[\s]*alpha\([^\)]*\)/g),e=c.round(100*a),d="";if(e<100||f)d="alpha(opacity="+e+") ";var g=H(h,[i],d);tb(b,g)}else b.style.opacity=a==1?"":c.round(a*100)/100}var L={S:["rotate"],fb:["rotateX"],kb:["rotateY"],Pb:["skewX"],Qb:["skewY"]};if(!J())L=B(L,{B:["scaleX",2],D:["scaleY",2],cb:["translateZ",1]});

function M(d,a){var c="";if(a){if(q()&&i&&i<10){delete a.fb;delete a.kb;delete a.cb}b.j(a,function(d,b){var a=L[b];if(a){var e=a[1]||0;if(N[b]!=d)c+=" "+a[0]+"("+d+(["deg","px",""])[e]+")"}});if(J()){if(a.qb||a.ob||a.cb)c+=" translate3d("+(a.qb||0)+"px,"+(a.ob||0)+"px,"+(a.cb||0)+"px)";if(a.B==k)a.B=1;if(a.D==k)a.D=1;if(a.B!=1||a.D!=1)c+=" scale3d("+a.B+", "+a.D+", 1)"}}d.style[K(d)]=c}d.Kc=m("transformOrigin",4);d.Ue=m("backfaceVisibility",4);d.Te=m("transformStyle",4);d.Se=m("perspective",6);d.Re=m("perspectiveOrigin",4);d.te=function(a,b){if(q()&&s<9||s<10&&Q())a.style.zoom=b==1?"":b;else{var c=K(a),f="scale("+b+")",e=a.style[c],g=new RegExp(/[\s]*scale\(.*?\)/g),d=H(e,[g],f);a.style[c]=d}};d.hc=function(b,a){return function(c){c=t(c);var f=c.type,e=c.relatedTarget||(f=="mouseout"?c.toElement:c.fromElement);(!e||e!==a&&!d.Pe(a,e))&&b(c)}};d.g=function(a,e,b,c){a=d.Jb(a);if(a.addEventListener){e=="mousewheel"&&a.addEventListener("DOMMouseScroll",b,c);a.addEventListener(e,b,c)}

else if(a.attachEvent){a.attachEvent("on"+e,b);c&&a.setCapture&&a.setCapture()}};d.V=function(a,c,e,b){a=d.Jb(a);if(a.removeEventListener){c=="mousewheel"&&a.removeEventListener("DOMMouseScroll",e,b);a.removeEventListener(c,e,b)}else if(a.detachEvent){a.detachEvent("on"+c,e);b&&a.releaseCapture&&a.releaseCapture()}};d.Xb=function(a){a=t(a);a.preventDefault&&a.preventDefault();a.cancel=e;a.returnValue=l};d.Ke=function(a){a=t(a);a.stopPropagation&&a.stopPropagation();a.cancelBubble=e};d.W=function(d,c){var a=[].slice.call(arguments,2),b=function(){var b=a.concat([].slice.call(arguments,0));return c.apply(d,b)};return b};d.Ie=function(a,b){if(b==k)return a.textContent||a.innerText;var c=g.createTextNode(b);d.ic(a);a.appendChild(c)};d.Yb=function(d,c){for(var b=[],a=d.firstChild;a;a=a.nextSibling)(c||a.nodeType==1)&&b.push(a);

return b};function mb(a,c,e,b){b=b||"u";for(a=a?a.firstChild:j;a;a=a.nextSibling)if(a.nodeType==1){if(U(a,b)==c)return a;if(!e){var d=mb(a,c,e,b);if(d)return d}}}d.E=mb;function S(a,d,f,b){b=b||"u";var c=[];for(a=a?a.firstChild:j;a;a=a.nextSibling)if(a.nodeType==1){U(a,b)==d&&c.push(a);if(!f){var e=S(a,d,f,b);if(e.length)c=c.concat(e)}}return c}d.ve=S;

function gb(a,c,d){for(a=a?a.firstChild:j;a;a=a.nextSibling)if(a.nodeType==1){if(a.tagName==c)return a;if(!d){var b=gb(a,c,d);if(b)return b}}}d.Je=gb;

function xb(a,c,e){var b=[];for(a=a?a.firstChild:j;a;a=a.nextSibling)if(a.nodeType==1){(!c||a.tagName==c)&&b.push(a);if(!e){var d=xb(a,c,e);if(d.length)b=b.concat(d)}}return b}d.lf=xb;d.yf=function(b,a){return b.getElementsByTagName(a)};

function B(){var e=arguments,d,c,b,a,g=1&e[0],f=1+g;d=e[f-1]||{};for(;f<e.length;f++)if(c=e[f])for(b in c){a=c[b];if(a!==k){a=c[b];var h=d[b];d[b]=g&&(A(h)||A(a))?B(g,{},h,a):a}}return d}d.H=B;

function Z(f,g){var d={},c,a,b;for(c in f){a=f[c];b=g[c];if(a!==b){var e;if(A(a)&&A(b)){a=Z(a,b);e=!lb(a)}!e&&(d[c]=a)}}return d}d.fd=function(a){return C(a)=="function"};d.Ge=function(a){return C(a)=="string"};d.Rc=function(a){return!isNaN(p(a))&&isFinite(a)};d.j=n;d.rf=A;

function R(a){return g.createElement(a)}d.Z=function(){return R("DIV")};d.Wc=function(){};function V(b,c,a){if(a==k)return b.getAttribute(c);b.setAttribute(c,a)}function U(a,b){return V(a,b)||V(a,"data-"+b)}d.N=V;d.p=U;function x(b,a){if(a==k)return b.className;b.className=a}d.Tc=x;function qb(b){var a={};n(b,function(b){a[b]=b});return a}

function sb(b,a){return b.match(a||Ab)}
function P(b,a){return qb(sb(b||"",a))}d.Af=sb;

function bb(b,c){var a="";n(c,function(c){a&&(a+=b);a+=c});return a}
function E(a,c,b){x(a,bb(" ",B(Z(P(x(a)),P(c)),P(b))))}d.Bd=function(a){return a.parentNode};d.U=function(a){d.lb(a,"none")};d.G=function(a,b){d.lb(a,b?"none":"")};d.ef=function(b,a){b.removeAttribute(a)};d.se=function(){return q()&&i<10};d.he=function(d,a){if(a)d.style.clip="rect("+c.round(a.f||a.J||0)+"px "+c.round(a.A)+"px "+c.round(a.v)+"px "+c.round(a.e||a.K||0)+"px)";else if(a!==k){var g=d.style.cssText,f=[new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i),new RegExp(/[\s]*cliptop: .*?[;]?/i),new RegExp(/[\s]*clipright: .*?[;]?/i),new RegExp(/[\s]*clipbottom: .*?[;]?/i),new RegExp(/[\s]*clipleft: .*?[;]?/i)],e=H(g,f,"");b.yb(d,e)}};d.Y=function(){return+new Date};d.L=function(b,a){b.appendChild(a)};d.Tb=function(b,a,c){(c||a.parentNode).insertBefore(b,a)};d.Ub=function(b,a){a=a||b.parentNode;a&&a.removeChild(b)};d.Md=function(a,b){n(a,function(a){d.Ub(a,b)})};d.ic=function(a){d.Md(d.Yb(a,e),a)};d.Pd=function(a,b){var c=d.Bd(a);b&1&&d.O(a,(d.q(c)-d.q(a))/2);b&2&&d.P(a,(d.s(c)-d.s(a))/2)};d.Rd=function(b,a){return parseInt(b,a||10)};d.Ld=p;d.Pe=function(b,a){var c=g.body;while(a&&b!==a&&c!==a)try{a=a.parentNode}catch(d){return l}return b===a};function W(e,c,b){var a=e.cloneNode(!c);!b&&d.ef(a,"id");return a}d.gb=W;d.Ib=function(f,g){var a=new Image;

function b(f,e){d.V(a,"load",b);d.V(a,"abort",c);d.V(a,"error",c);g&&g(a,e)}

function c(a){b(a,e)}if(ib()&&i<11.6||!f)b(!f);else{d.g(a,"load",b);d.g(a,"abort",c);d.g(a,"error",c);a.src=f}};d.Od=function(e,a,f){var c=e.length+1;

function b(b){c--;if(a&&b&&b.src==a.src)a=b;!c&&f&&f(a)}n(e,function(a){d.Ib(a.src,b)});b()};d.Nd=function(a,g,i,h){if(h)a=W(a);var c=S(a,g);if(!c.length)c=b.yf(a,g);for(var f=c.length-1;f>-1;f--){var d=c[f],e=W(i);x(e,x(d));b.yb(e,d.style.cssText);b.Tb(e,d);b.Ub(d)}return a};

function Gb(a){var l=this,p="",r=["av","pv","ds","dn"],f=[],q,j=0,h=0,e=0;
function i(){E(a,q,f[e||j||h&2||h]);b.ib(a,"pointer-events",e?"none":"")}
function c(){j=0;i();d.V(g,"mouseup",c);d.V(g,"touchend",c);d.V(g,"touchcancel",c)}
function o(a){if(e)d.Xb(a);else{j=4;i();d.g(g,"mouseup",c);d.g(g,"touchend",c);d.g(g,"touchcancel",c)}}l.Sd=function(a){if(a===k)return h;h=a&2||a&1;i()};l.ad=function(a){if(a===k)return!e;e=a?0:3;i()};l.jb=a=d.Jb(a);var m=b.Af(x(a));if(m)p=m.shift();n(r,function(a){f.push(p+a)});q=bb(" ",f);f.unshift("");d.g(a,"mousedown",o);d.g(a,"touchstart",o)}d.ec=function(a){return new Gb(a)};d.ib=D;d.sb=m("overflow");d.P=m("top",2);d.O=m("left",2);d.q=m("width",2);d.s=m("height",2);d.Vd=m("marginLeft",2);d.qe=m("marginTop",2);d.F=m("position");d.lb=m("display");d.Q=m("zIndex",1);d.Fb=function(b,a,c){if(a!=k)Fb(b,a,c);else return Db(b)};d.yb=function(a,b){if(b!=k)a.style.cssText=b;else return a.style.cssText};var T={a:d.Fb,f:d.P,e:d.O,db:d.q,nb:d.s,Eb:d.F,Kf:d.lb,X:d.Q};

function w(g,l){var f=O(),b=J(),e=vb(),h=K(g);

function i(b,d,a){var e=b.xb(u(-d/2,-a/2)),f=b.xb(u(d/2,-a/2)),g=b.xb(u(d/2,a/2)),h=b.xb(u(-d/2,a/2));b.xb(u(300,300));return u(c.min(e.x,f.x,g.x,h.x)+d/2,c.min(e.y,f.y,g.y,h.y)+a/2)}

function a(e,a){a=a||{};var g=a.cb||0,l=(a.fb||0)%360,m=(a.kb||0)%360,o=(a.S||0)%360,p=a.Lf;if(f){g=0;l=0;m=0;p=0}var c=new Cb(a.qb,a.ob,g);c.fb(l);c.kb(m);c.me(o);c.le(a.Pb,a.Qb);c.mc(a.B,a.D,p);if(b){c.tb(a.K,a.J);e.style[h]=c.ke()}else if(!X||X<9){var j="";if(o||a.B!=k&&a.B!=1||a.D!=k&&a.D!=1){var n=i(c,a.vb,a.ub);d.qe(e,n.y);d.Vd(e,n.x);j=c.je()}var r=e.style.filter,s=new RegExp(/[\s]*progid:DXImageTransform\.Microsoft\.Matrix\([^\)]*\)/g),q=H(r,[s],j);tb(e,q)}}w=function(f,c){c=c||{};var h=c.K,i=c.J,g;n(T,function(a,b){g=c[b];g!==k&&a(f,g)});d.he(f,c.c);if(!b){h!=k&&d.O(f,(c.Qc||0)+h);i!=k&&d.P(f,(c.Pc||0)+i)}if(c.Ud)if(e)rb(d.W(j,M,f,c));else a(f,c)};d.Ab=M;if(e)d.Ab=w;if(f)d.Ab=a;else if(!b)a=M;d.M=w;w(g,l)}d.Ab=w;d.M=w;

function Cb(i,l,p){var d=this,b=[1,0,0,0,0,1,0,0,0,0,1,0,i||0,l||0,p||0,1],h=c.sin,g=c.cos,m=c.tan;function f(a){return a*c.PI/180}

function o(a,b){return{x:a,y:b}}

function n(c,e,l,m,o,r,t,u,w,z,A,C,E,b,f,k,a,g,i,n,p,q,s,v,x,y,B,D,F,d,h,j){return[c*a+e*p+l*x+m*F,c*g+e*q+l*y+m*d,c*i+e*s+l*B+m*h,c*n+e*v+l*D+m*j,o*a+r*p+t*x+u*F,o*g+r*q+t*y+u*d,o*i+r*s+t*B+u*h,o*n+r*v+t*D+u*j,w*a+z*p+A*x+C*F,w*g+z*q+A*y+C*d,w*i+z*s+A*B+C*h,w*n+z*v+A*D+C*j,E*a+b*p+f*x+k*F,E*g+b*q+f*y+k*d,E*i+b*s+f*B+k*h,E*n+b*v+f*D+k*j]}function e(c,a){return n.apply(j,(a||b).concat(c))}d.mc=function(a,c,d){if(a==k)a=1;if(c==k)c=1;if(d==k)d=1;if(a!=1||c!=1||d!=1)b=e([a,0,0,0,0,c,0,0,0,0,d,0,0,0,0,1])};d.tb=function(a,c,d){b[12]+=a||0;b[13]+=c||0;b[14]+=d||0};d.fb=function(c){if(c){a=f(c);var d=g(a),i=h(a);b=e([1,0,0,0,0,d,i,0,0,-i,d,0,0,0,0,1])}};d.kb=function(c){if(c){a=f(c);var d=g(a),i=h(a);b=e([d,0,-i,0,0,1,0,0,i,0,d,0,0,0,0,1])}};d.me=function(c){if(c){a=f(c);var d=g(a),i=h(a);b=e([d,i,0,0,-i,d,0,0,0,0,1,0,0,0,0,1])}};d.le=function(a,c){if(a||c){i=f(a);l=f(c);b=e([1,m(l),0,0,m(i),1,0,0,0,0,1,0,0,0,0,1])}};d.xb=function(c){var a=e(b,[1,0,0,0,0,1,0,0,0,0,1,0,c.x,c.y,0,1]);return o(a[12],a[13])};d.ke=function(){return"matrix3d("+b.join(",")+")"};d.je=function(){return"progid:DXImageTransform.Microsoft.Matrix(M11="+b[0]+", M12="+b[4]+", M21="+b[1]+", M22="+b[5]+", SizingMethod='auto expand')"}}new function(){var a=this;

	function b(d,g){for(var j=d[0].length,i=d.length,h=g[0].length,f=[],c=0;c<i;c++)for(var k=f[c]=[],b=0;b<h;b++){for(var e=0,a=0;a<j;a++)e+=d[c][a]*g[a][b];k[b]=e}return f}a.B=function(b,c){return a.Jc(b,c,0)};a.D=function(b,c){return a.Jc(b,0,c)};a.Jc=function(a,c,d){return b(a,[[c,0],[0,d]])};a.xb=function(d,c){var a=b(d,[[c.x],[c.y]]);return u(a[0][0],a[1][0])}};var N={Qc:0,Pc:0,K:0,J:0,I:1,B:1,D:1,S:0,fb:0,kb:0,qb:0,ob:0,cb:0,Pb:0,Qb:0};d.Hc=function(a){var c=a||{};if(a)if(b.fd(a))c={nc:c};else if(b.fd(a.c))c.c={nc:a.c};return c};d.Fc=function(l,m,x,q,z,A,n){var a=m;if(l){a={};for(var g in m){var B=A[g]||1,w=z[g]||[0,1],d=(x-w[0])/w[1];d=c.min(c.max(d,0),1);d=d*B;var u=c.floor(d);if(d!=u)d-=u;var h=q.nc||f.wd,i,C=l[g],o=m[g];if(b.Rc(o)){h=q[g]||h;var y=h(d);i=C+o*y}else{i=b.H({Wb:{}},l[g]);var v=q[g]||{};b.j(o.Wb||o,function(e,a){h=v[a]||v.nc||h;var c=h(d),b=e*c;i.Wb[a]=b;i[a]+=b})}a[g]=i}var t=b.j(m,function(b,a){return N[a]!=k});t&&b.j(N,function(c,b){if(a[b]==k&&l[b]!==k)a[b]=l[b]});if(t){if(a.I)a.B=a.D=a.I;a.vb=n.vb;a.ub=n.ub;a.Ud=e}}if(m.c&&n.tb){var p=a.c.Wb,s=(p.f||0)+(p.v||0),r=(p.e||0)+(p.A||0);a.e=(a.e||0)+r;a.f=(a.f||0)+s;a.c.e-=r;a.c.A-=r;a.c.f-=s;a.c.v-=s}if(a.c&&b.se()&&!a.c.f&&!a.c.e&&!a.c.J&&!a.c.K&&a.c.A==n.vb&&a.c.v==n.ub)a.c=j;return a}};

	function n(){var a=this,d=[];
	function i(a,b){d.push({lc:a,cc:b})}
	function g(a,c){b.j(d,function(b,e){b.lc==a&&b.cc===c&&d.splice(e,1)})}a.Kb=a.addEventListener=i;a.removeEventListener=g;a.o=function(a){var c=[].slice.call(arguments,1);b.j(d,function(b){b.lc==a&&b.cc.apply(h,c)})}}var m=function(z,C,i,J,M,L){z=z||0;var a=this,q,n,o,u,A=0,G,H,F,B,y=0,g=0,m=0,D,k,f,d,p,w=[],x;

	function O(a){f+=a;d+=a;k+=a;g+=a;m+=a;y+=a}

	function t(o){var h=o;if(p&&(h>=d||h<=f))h=((h-f)%p+p)%p+f;if(!D||u||g!=h){var j=c.min(h,d);j=c.max(j,f);if(!D||u||j!=m){if(L){var l=(j-k)/(C||1);if(i.xd)l=1-l;var n=b.Fc(M,L,l,G,F,H,i);if(x)b.j(n,function(b,a){x[a]&&x[a](J,b)});else b.M(J,n)}a.kc(m-k,j-k);m=j;b.j(w,function(b,c){var a=o<g?w[w.length-c-1]:b;a.bb(m-y)});var r=g,q=m;g=h;D=e;a.Mb(r,q)}}}

	function E(a,b,e){b&&a.Rb(d);

	if(!e){f=c.min(f,a.ud()+y);d=c.max(d,a.jc()+y)}w.push(a)}var r=h.requestAnimationFrame||h.webkitRequestAnimationFrame||h.mozRequestAnimationFrame||h.msRequestAnimationFrame;if(b.of()&&b.rd()<7)r=j;r=r||function(a){b.R(a,i.hb)};

	function I(){if(q){var d=b.Y(),e=c.min(d-A,i.gd),a=g+e*o;A=d;if(a*o>=n*o)a=n;t(a);if(!u&&a*o>=n*o)K(B);else r(I)}}
	function s(h,i,j){if(!q){q=e;u=j;B=i;h=c.max(h,f);h=c.min(h,d);n=h;o=n<g?-1:1;a.pd();A=b.Y();r(I)}}

	function K(b){if(q){u=q=B=l;a.md();b&&b()}}a.ld=function(a,b,c){s(a?g+a:d,b,c)};a.kd=s;a.wb=K;a.Yd=function(a){s(a)};a.ab=function(){return g};a.nd=function(){return n};a.Gb=function(){return m};a.bb=t;a.tb=function(a){t(g+a)};a.zd=function(){return q};a.Wd=function(a){p=a};a.Rb=O;a.Oc=function(a,b){E(a,0,b)};a.oc=function(a){E(a,1)};a.ud=function(){return f};a.jc=function(){return d};a.Mb=a.pd=a.md=a.kc=b.Wc;a.dc=b.Y();i=b.H({hb:16,gd:50},i);p=i.sd;x=i.Xd;f=k=z;d=z+C;H=i.jd||{};F=i.C||{};G=b.Hc(i.i)};var p=new function(){var h=this;function g(b,a,c){c.push(a);b[a]=b[a]||[];b[a].push(c)}h.re=function(d){for(var e=[],a,b=0;b<d.u;b++)for(a=0;a<d.n;a++)g(e,c.ceil(1e5*c.random())%13,[b,a]);return e}},s=function(k,s,q,u,z){var d=this,v,g,a,y=0,x=u.Me,r,h=8;

	function t(a){if(a.f)a.J=a.f;if(a.e)a.K=a.e;b.j(a,function(a){b.rf(a)&&t(a)})}

	function i(g,d){var a={hb:d,k:1,R:0,n:1,u:1,a:0,I:0,c:0,tb:l,r:l,xd:l,nf:p.re,z:{mb:0,eb:0},i:f.wd,jd:{},ac:[],C:{}};b.H(a,g);t(a);a.i=b.Hc(a.i);a.vf=c.ceil(a.k/a.hb);a.uf=function(c,b){c/=a.n;b/=a.u;var f=c+"x"+b;if(!a.ac[f]){a.ac[f]={db:c,nb:b};

		for(var d=0;d<a.n;d++)

			for(var e=0;e<a.u;e++)a.ac[f][e+","+d]={f:e*b,A:d*c+c,v:e*b+b,e:d*c}}return a.ac[f]};if(a.gc){a.gc=i(a.gc,d);a.r=e}return a}

	function o(B,h,a,w,o,m){var z=this,u,v={},i={},n=[],f,d,s,q=a.z.mb||0,r=a.z.eb||0,g=a.uf(o,m),p=C(a),D=p.length-1,t=a.k+a.R*D,x=w+t,k=a.r,y;x+=50;

	function C(a){var b=a.nf(a);return a.xd?b.reverse():b}z.Sc=x;z.Zb=function(d){d-=w;var e=d<t;if(e||y){y=e;if(!k)d=t-d;var f=c.ceil(d/a.hb);b.j(i,function(a,e){var d=c.max(f,a.sf);d=c.min(d,a.length-1);if(a.Ec!=d){if(!a.Ec&&!k)b.G(n[e]);else d==a.ze&&k&&b.U(n[e]);a.Ec=d;b.M(n[e],a[d])}})}};h=b.gb(h);b.Ab(h,j);if(b.rb()){var E=!h["no-image"],A=b.lf(h);b.j(A,function(a){(E||a["jssor-slider"])&&b.Fb(a,b.Fb(a),e)})}b.j(p,function(h,j){b.j(h,function(G){var K=G[0],J=G[1],t=K+","+J,n=l,p=l,x=l;if(q&&J%2){if(q&3)n=!n;if(q&12)p=!p;

		if(q&16)x=!x}if(r&&K%2){if(r&3)n=!n;if(r&12)p=!p;
			if(r&16)x=!x}a.f=a.f||a.c&4;a.v=a.v||a.c&8;a.e=a.e||a.c&1;a.A=a.A||a.c&2;var E=p?a.v:a.f,B=p?a.f:a.v,D=n?a.A:a.e,C=n?a.e:a.A;a.c=E||B||D||C;s={};d={J:0,K:0,a:1,db:o,nb:m};f=b.H({},d);u=b.H({},g[t]);if(a.a)d.a=2-a.a;if(a.X){d.X=a.X;f.X=0}var I=a.n*a.u>1||a.c;
			if(a.I||a.S){var H=e;
				if(b.rb())
					if(a.n*a.u>1)H=l;
				else I=l;if(H){d.I=a.I?a.I-1:1;f.I=1;
					if(b.rb()||b.od())d.I=c.min(d.I,2);var N=a.S||0;d.S=N*360*(x?-1:1);f.S=0}}
					if(I){var h=u.Wb={};
					if(a.c){var w=a.If||1;if(E&&B){h.f=g.nb/2*w;h.v=-h.f}
					else if(E)h.v=-g.nb*w;
					else if(B)h.f=g.nb*w;if(D&&C){h.e=g.db/2*w;h.A=-h.e}
					else if(D)h.A=-g.db*w;
					else if(C)h.e=g.db*w}s.c=u;f.c=g[t]}var L=n?1:-1,M=p?1:-1;
					if(a.x)d.K+=o*a.x*L;if(a.y)d.J+=m*a.y*M;b.j(d,function(a,c){

						if(b.Rc(a))if(a!=f[c])s[c]=a-f[c]});v[t]=k?f:d;var F=a.vf,A=c.round(j*a.R/a.hb);i[t]=new Array(A);i[t].sf=A;i[t].ze=A+F-1;

					for(var z=0;z<=F;z++){var y=b.Fc(f,s,z/F,a.i,a.C,a.jd,{tb:a.tb,vb:o,ub:m});y.X=y.X||1;i[t].push(y)}})});p.reverse();b.j(p,function(a){b.j(a,function(c){var f=c[0],e=c[1],d=f+","+e,a=h;
						if(e||f)a=b.gb(h);b.M(a,v[d]);b.sb(a,"hidden");b.F(a,"absolute");B.Ce(a);n[d]=a;b.G(a,!k)})})}function w(){var b=this,c=0;m.call(b,0,v);b.Mb=function(d,b){
						if(b-c>h){c=b;a&&a.Zb(b);g&&g.Zb(b)}};b.bd=r}d.De=function(){var a=0,b=u.zb,d=b.length;if(x)a=y++%d;else a=c.floor(c.random()*d);b[a]&&(b[a].pb=a);

							return b[a]};d.Qe=function(w,x,l,m,b){r=b;b=i(b,h);var j=m.Fd,f=l.Fd;j["no-image"]=!m.Lb;f["no-image"]=!l.Lb;var n=j,p=f,u=b,e=b.gc||i({},h);if(!b.r){n=f;p=j}var t=e.Rb||0;g=new o(k,p,e,c.max(t-e.hb,0),s,q);a=new o(k,n,u,c.max(e.hb-t,0),s,q);g.Zb(0);a.Zb(0);v=c.max(g.Sc,a.Sc);d.pb=w};d.Cb=function(){k.Cb();g=j;a=j};d.Le=function(){var b=j;

								if(a)b=new w;
								return b};if(b.rb()||b.od()||z&&b.ye()<537)h=16;n.call(d);m.call(d,-1e7,1e7)},i=function(p,fc){var d=this;function Bc(){var a=this;m.call(a,-1e8,2e8);a.af=function(){var b=a.Gb(),d=c.floor(b),f=t(d),e=b-c.floor(b);
									return{pb:f,cf:d,Eb:e}};a.Mb=function(b,a){var f=c.floor(a);

										if(f!=a&&a>b)f++;Tb(f,e);d.o(i.tf,t(a),t(b),a,b)}}function Ac(){var a=this;m.call(a,0,0,{sd:q});b.j(C,function(b){D&1&&b.Wd(q);a.oc(b);b.Rb(kb/bc)})}function zc(){var a=this,b=Ub.jb;m.call(a,-1,2,{i:f.Ad,Xd:{Eb:Zb},sd:q},b,{Eb:1},{Eb:-2});a.Ob=b}
			function mc(o,n){var b=this,f,g,h,k,c;m.call(b,-1e8,2e8,{gd:100});b.pd=function(){M=e;R=j;d.o(i.mf,t(w.ab()),w.ab())};b.md=function(){M=l;k=l;var a=w.af();d.o(i.qf,t(w.ab()),w.ab());!a.Eb&&Dc(a.cf,s)};b.Mb=function(i,e){var b;if(k)b=c;else{b=g;if(h){var d=e/h;b=a.hf(d)*(g-f)+f}}w.bb(b)};b.Sb=function(a,d,c,e){f=a;g=d;h=c;w.bb(a);b.bb(0);b.kd(c,e)};b.gf=function(a){k=e;c=a;b.ld(a,j,e)};b.ff=function(a){c=a};w=new Bc;w.Oc(o);w.Oc(n)}function oc(){var c=this,a=Xb();b.Q(a,0);b.ib(a,"pointerEvents","none");c.jb=a;c.Ce=function(c){b.L(a,c);b.G(a)};c.Cb=function(){b.U(a);b.ic(a)}}function xc(o,g){var f=this,r,L,v,k,y=[],x,B,W,G,Q,F,h,w,p;m.call(f,-u,u+1,{});function E(a){r&&r.Ed();T(o,a,0);F=e;r=new I.T(o,I,b.Ld(b.p(o,"idle"))||lc);r.bb(0)}function Z(){r.dc<I.dc&&E()}function M(p,r,o){if(!G){G=e;if(k&&o){var h=o.width,c=o.height,n=h,m=c;if(h&&c&&a.Db){

			if(a.Db&3&&(!(a.Db&4)||h>K||c>J)){var j=l,q=K/J*c/h;
				if(a.Db&1)j=q>1;
				else if(a.Db&2)j=q<1;n=j?h*J/c:K;m=j?J:c*K/h}b.q(k,n);b.s(k,m);b.P(k,(J-m)/2);b.O(k,(K-n)/2)}b.F(k,"absolute");d.o(i.Kd,g)}}b.U(r);p&&p(f)}function Y(b,c,d,e){
					if(e==R&&s==g&&N)if(!Cc){var a=t(b);A.Qe(a,g,c,f,d);c.Td();U.Rb(a-U.ud()-1);U.bb(a);z.Sb(b,b,0)}}
			function bb(b){
				if(b==R&&s==g){
					if(!h){var a=j;
						if(A)
							if(A.pb==g)a=A.Le();
						else A.Cb();Z();h=new vc(o,g,a,r);h.Hd(p)}!h.zd()&&h.Cc()}}function S(d,e,l){
							if(d==g){
								if(d!=e)C[e]&&C[e].pf();
								else!l&&h&&h.wf();p&&p.ad();var m=R=b.Y();f.Ib(b.W(j,bb,m))}
						else{var k=c.min(g,d),i=c.max(g,d),o=c.min(i-k,k+q-i),n=u+a.Ae-1;(!Q||o<=n)&&f.Ib()}}function db(){
							if(s==g&&h){h.wb();p&&p.Fe();p&&p.He();h.Cd()}}function eb(){s==g&&h&&h.wb()}function ab(a){!P&&d.o(i.Oe,g,a)}function O(){p=w.pInstance;h&&h.Hd(p)}f.Ib=function(c,a){a=a||v;
								if(y.length&&!G){b.G(a);if(!W){W=e;d.o(i.bf,g);b.j(y,function(a){if(!b.N(a,"src")){a.src=b.p(a,"src2");b.lb(a,a["display-origin"])}})}b.Od(y,k,b.W(j,M,c,a))}else M(c,a)};f.we=function(){var h=g;
									if(a.qd<0)h-=q;var d=h+a.qd*tc;
									if(D&2)d=t(d);if(!(D&1)&&!ib)d=c.max(0,c.min(d,q-u));
									if(d!=g){if(A){var e=A.De(q);if(e){var i=R=b.Y(),f=C[t(d)];

										return f.Ib(b.W(j,Y,d,f,e,i),v)}}cb(d)}};f.pc=function(){S(g,g,e)};f.pf=function(){p&&p.Fe();p&&p.He();f.Vc();h&&h.Ye();h=j;E()};f.Td=function(){b.U(o)};f.Vc=function(){b.G(o)};f.Xe=function(){p&&p.ad()};function T(a,c,d){if(b.N(a,"jssor-slider"))return;
				if(!F){if(a.tagName=="IMG"){y.push(a);if(!b.N(a,"src")){Q=e;a["display-origin"]=b.lb(a);b.U(a)}}b.rb()&&b.Q(a,(b.Q(a)||0)+1)}var f=b.Yb(a);b.j(f,function(f){var h=f.tagName,i=b.p(f,"u");
					if(i=="player"&&!w){w=f;
						if(w.pInstance)O();
						else b.g(w,"dataavailable",O)}
				if(i=="caption"){
					if(c){b.Kc(f,b.p(f,"to"));b.Ue(f,b.p(f,"bf"));b.p(f,"3d")&&b.Te(f,"preserve-3d")}
					else if(!b.id()){var g=b.gb(f,l,e);b.Tb(g,f,a);b.Ub(f,a);f=g;c=e}}
					else if(!F&&!d&&!k){
						if(h=="A"){if(b.p(f,"u")=="image")k=b.Je(f,"IMG");
					else k=b.E(f,"image",e);
					if(k){x=f;b.lb(x,"block");b.M(x,V);B=b.gb(x,e);b.F(x,"relative");b.Fb(B,0);b.ib(B,"backgroundColor","#000")}}
					else if(h=="IMG"&&b.p(f,"u")=="image")k=f;
					if(k){k.border=0;b.M(k,V)}}T(f,c,d+1)})}f.kc=function(c,b){var a=u-b;Zb(L,a)};f.pb=g;n.call(f);b.Se(o,b.p(o,"p"));b.Re(o,b.p(o,"po"));var H=b.E(o,"thumb",e);
					if(H){f.We=b.gb(H);b.U(H)}b.G(o);v=b.gb(gb);b.Q(v,1e3);b.g(o,"click",ab);E(e);f.Lb=k;f.Ic=B;f.Fd=o;f.Ob=L=o;b.L(L,v);d.Kb(203,S);d.Kb(28,eb);d.Kb(24,db)}
		function vc(y,g,p,q){var a=this,n=0,u=0,h,j,f,c,k,t,r,o=C[g];m.call(a,0,0);
			function v(){b.ic(L);cc&&k&&o.Ic&&b.L(L,o.Ic);b.G(L,!k&&o.Lb)}
			function w(){a.Cc()}
			function x(b){r=b;a.wb();a.Cc()}a.Cc=function(){var b=a.Gb();
				if(!B&&!M&&!r&&s==g){
					if(!b){
					if(h&&!k){k=e;a.Cd(e);d.o(i.Ve,g,n,u,h,c)}v()}var l,p=i.dd;
				if(b!=c)
					if(b==f)l=c;
				else if(b==j)l=f;
				else if(!b)l=j;
				else l=a.nd();d.o(p,g,b,n,j,f,c);var m=N&&(!E||F);
				if(b==c)(f!=c&&!(E&12)||m)&&o.we();
				else(m||b!=f)&&a.kd(l,w)}};a.wf=function(){f==c&&f==a.Gb()&&a.bb(j)};a.Ye=function(){A&&A.pb==g&&A.Cb();var b=a.Gb();b<c&&d.o(i.dd,g,-b-1,n,j,f,c)};a.Cd=function(a){p&&b.sb(lb,a&&p.bd.Ff?"":"hidden")};a.kc=function(b,a){if(k&&a>=h){k=l;v();o.Vc();A.Cb();d.o(i.Ne,g,n,u,h,c)}d.o(i.Ze,g,a,n,j,f,c)};a.Hd=function(a){if(a&&!t){t=a;a.Kb($JssorPlayer$.ae,x)}};p&&a.oc(p);h=a.jc();a.oc(q);j=h+q.ed;f=h+q.Xc;c=a.jc()}
				function Kb(a,c,d){b.O(a,c);b.P(a,d)}
				function Zb(c,b){var a=x>0?x:fb,d=zb*b*(a&1),e=Ab*b*(a>>1&1);Kb(c,d,e)}
				function Pb(){qb=M;Ib=z.nd();G=w.ab()}
				function gc(){Pb();if(B||!F&&E&12){z.wb();d.o(i.Ee)}}
				function ec(f){if(!B&&(F||!(E&12))&&!z.zd()){var d=w.ab(),b=c.ceil(G);if(f&&c.abs(H)>=a.Zc){b=c.ceil(d);b+=jb}if(!(D&1))b=c.min(q-u,c.max(b,0));var e=c.abs(b-d);e=1-c.pow(1-e,5);if(!P&&qb)z.Yd(Ib);else if(d==b){tb.Xe();tb.pc()}else z.Sb(d,b,e*Vb)}}

				function Hb(a){!b.p(b.fc(a),"nodrag")&&b.Xb(a)}

				function rc(a){Yb(a,1)}function Yb(a,c){a=b.yd(a);var k=b.fc(a);if(!O&&!b.p(k,"nodrag")&&sc()&&(!c||a.touches.length==1)){B=e;yb=l;R=j;b.g(g,c?"touchmove":"mousemove",Bb);b.Y();P=0;gc();if(!qb)x=0;if(c){var h=a.touches[0];ub=h.clientX;vb=h.clientY}else{var f=b.Dd(a);ub=f.x;vb=f.y}H=0;hb=0;jb=0;d.o(i.Be,t(G),G,a)}}function Bb(d){if(B){d=b.yd(d);var f;if(d.type!="mousemove"){var l=d.touches[0];f={x:l.clientX,y:l.clientY}}else f=b.Dd(d);if(f){var j=f.x-ub,k=f.y-vb;if(c.floor(G)!=G)x=x||fb&O;if((j||k)&&!x){if(O==3)if(c.abs(k)>c.abs(j))x=2;else x=1;else x=O;if(ob&&x==1&&c.abs(k)-c.abs(j)>3)yb=e}if(x){var a=k,i=Ab;if(x==1){a=j;i=zb}if(!(D&1)){if(a>0){var g=i*s,h=a-g;if(h>0)a=g+c.sqrt(h)*5}if(a<0){var g=i*(q-u-s),h=-a-g;if(h>0)a=-g-c.sqrt(h)*5}}if(H-hb<-2)jb=0;else if(H-hb>2)jb=-1;hb=H;H=a;sb=G-H/i/(Y||1);if(H&&x&&!yb){b.Xb(d);if(!M)z.gf(sb);else z.ff(sb)}}}}}function bb(){qc();if(B){B=l;b.Y();b.V(g,"mousemove",Bb);b.V(g,"touchmove",Bb);P=H;z.wb();var a=w.ab();d.o(i.xe,t(a),a,t(G),G);E&12&&Pb();ec(e)}}

				function jc(c){if(P){b.Ke(c);var a=b.fc(c);while(a&&v!==a){a.tagName=="A"&&b.Xb(c);try{a=a.parentNode}catch(d){break}}}}function Jb(a){C[s];s=t(a);tb=C[s];Tb(a);return s}

				function Dc(a,b){x=0;Jb(a);d.o(i.ue,t(a),b)}function Tb(a,c){wb=a;b.j(S,function(b){b.Bc(t(a),a,c)})}

				function sc(){var b=i.Mc||0,a=X;if(ob)a&1&&(a&=1);i.Mc|=a;return O=a&~b}

				function qc(){if(O){i.Mc&=~X;O=0}}
				function Xb(){var a=b.Z();b.M(a,V);b.F(a,"absolute");return a}function t(a){return(a%q+q)%q}

				function kc(b,d){if(d)if(!D){b=c.min(c.max(b+wb,0),q-u);d=l}else if(D&2){b=t(b+wb);d=l}cb(b,a.zc,d)}function xb(){b.j(S,function(a){a.vc(a.bc.Jf<=F)})}

				function hc(){if(!F){F=1;xb();if(!B){E&12&&ec();E&3&&C[s].pc()}}}

				function Ec(){if(F){F=0;xb();B||!(E&12)||gc()}}

				function ic(){V={db:K,nb:J,f:0,e:0};b.j(T,function(a){b.M(a,V);b.F(a,"absolute");b.sb(a,"hidden");b.U(a)});b.M(gb,V)}function ab(b,a){cb(b,a,e)}

				function cb(g,f,j){if(Rb&&(!B&&(F||!(E&12))||a.Nc)){M=e;B=l;z.wb();if(f==k)f=Vb;var d=Cb.Gb(),b=g;if(j){b=d+g;if(g>0)b=c.ceil(b);else b=c.floor(b)}if(D&2)b=t(b);if(!(D&1))b=c.max(0,c.min(b,q-u));var i=(b-d)%q;b=d+i;var h=d==b?0:f*c.abs(i);h=c.min(h,f*u*1.5);z.Sb(d,b,h||1)}}d.xf=cb;d.ld=function(){if(!N){N=e;C[s]&&C[s].pc()}};d.Jd=function(){return P};

				function W(){return b.q(y||p)}

				function nb(){return b.s(y||p)}d.vb=W;d.ub=nb;

				function Eb(c,d){if(c==k)return b.q(p);

					if(!y){var a=b.Z(g);b.Tc(a,b.Tc(p));b.yb(a,b.yb(p));b.lb(a,"block");b.F(a,"relative");b.P(a,0);b.O(a,0);b.sb(a,"visible");y=b.Z(g);b.F(y,"absolute");b.P(y,0);b.O(y,0);b.q(y,b.q(p));b.s(y,b.s(p));b.Kc(y,"0 0");b.L(y,a);var h=b.Yb(p);b.L(p,y);b.ib(p,"backgroundImage","");b.j(h,function(c){b.L(b.p(c,"noscale")?p:a,c);b.p(c,"autocenter")&&Lb.push(c)})}Y=c/(d?b.s:b.q)(y);b.te(y,Y);var f=d?Y*W():c,e=d?c:Y*nb();b.q(p,f);b.s(p,e);b.j(Lb,function(a){var c=b.Rd(b.p(a,"autocenter"));b.Pd(a,c)})}d.Qd=Eb;d.Lc=function(a){var d=c.ceil(t(kb/bc)),b=t(a-s+d);
						if(b>u){

						if(a-s>q/2)a-=q;
						else if(a-s<=-q/2)a+=q}

				else a=s+b-d;return a};n.call(d);d.jb=p=b.Jb(p);var a=b.H({Db:0,Ae:1,sc:1,xc:0,Ac:l,Vb:1,Hb:e,Nc:e,qd:1,Gc:3e3,Uc:1,zc:500,hf:f.be,Zc:20,Yc:0,n:1,Dc:0,pe:1,yc:1,cd:1},fc);a.Hb=a.Hb&&b.zf();

				if(a.oe!=k)a.Gc=a.oe;if(a.ne!=k)a.Dc=a.ne;var fb=a.yc&3,tc=(a.yc&4)/-4||1,mb=a.df,I=b.H({T:r,Hb:a.Hb},a.Hf);I.zb=I.zb||I.Gf;var Fb=a.Df,Z=a.ie,eb=a.ge,Q=!a.pe,y,v=b.E(p,"slides",Q),gb=b.E(p,"loading",Q)||b.Z(g),Nb=b.E(p,"navigator",Q),dc=b.E(p,"arrowleft",Q),ac=b.E(p,"arrowright",Q),Mb=b.E(p,"thumbnavigator",Q),pc=b.q(v),nc=b.s(v),V,T=[],uc=b.Yb(v);b.j(uc,function(a){if(a.tagName=="DIV"&&!b.p(a,"u"))T.push(a);

					else b.rb()&&b.Q(a,(b.Q(a)||0)+1)});var s=-1,wb,tb,q=T.length,K=a.fe||pc,J=a.ee||nc,Wb=a.Yc,zb=K+Wb,Ab=J+Wb,bc=fb&1?zb:Ab,u=c.min(a.n,q),lb,x,O,yb,S=[],Qb,Sb,Ob,cc,Cc,N,E=a.Uc,lc=a.Gc,Vb=a.zc,rb,ib,kb,Rb=u<q,D=Rb?a.Vb:0,X,P,F=1,M,B,R,ub=0,vb=0,H,hb,jb,Cb,w,U,z,Ub=new oc,Y,Lb=[];if(q){if(a.Hb)Kb=function(a,c,d){b.Ab(a,{qb:c,ob:d})};N=a.Ac;d.bc=fc;ic();b.N(p,"jssor-slider",e);b.Q(v,b.Q(v)||0);b.F(v,"absolute");lb=b.gb(v,e);b.Tb(lb,v);if(mb){cc=mb.Ef;rb=mb.T;ib=u==1&&q>1&&rb&&(!b.id()||b.rd()>=8)}kb=ib||u>=q||!(D&1)?0:a.Dc;X=(u>1||kb?fb:-1)&a.cd;var Gb=v,C=[],A,L,Db=b.kf(),ob=Db.jf,G,qb,Ib,sb;Db.td&&b.ib(Gb,Db.td,([j,"pan-y","pan-x","none"])[X]||"");U=new zc;if(ib)A=new rb(Ub,K,J,mb,ob);b.L(lb,U.Ob);b.sb(v,"hidden");L=Xb();b.ib(L,"backgroundColor","#000");b.Fb(L,0);b.Tb(L,Gb.firstChild,Gb);

				for(var db=0;db<T.length;db++){var wc=T[db],yc=new xc(wc,db);C.push(yc)}b.U(gb);Cb=new Ac;z=new mc(Cb,U);

					if(X){b.g(v,"mousedown",Yb);b.g(v,"touchstart",rc);b.g(v,"dragstart",Hb);b.g(v,"selectstart",Hb);b.g(g,"mouseup",bb);b.g(g,"touchend",bb);b.g(g,"touchcancel",bb);b.g(h,"blur",bb)}E&=ob?10:5;

					if(Nb&&Fb){Qb=new Fb.T(Nb,Fb,W(),nb());S.push(Qb)}

					if(Z&&dc&&ac){Z.Vb=D;Z.n=u;Sb=new Z.T(dc,ac,Z,W(),nb());S.push(Sb)}if(Mb&&eb){eb.xc=a.xc;Ob=new eb.T(Mb,eb);S.push(Ob)}b.j(S,function(a){a.rc(q,C,gb);a.Kb(o.qc,kc)});b.ib(p,"visibility","visible");Eb(W());b.g(v,"click",jc,e);b.g(p,"mouseout",b.hc(hc,p));b.g(p,"mouseover",b.hc(Ec,p));xb();a.sc&&b.g(g,"keydown",function(b){if(b.keyCode==37)ab(-a.sc);else b.keyCode==39&&ab(a.sc)});var pb=a.xc;if(!(D&1))pb=c.max(0,c.min(pb,q-u));z.Sb(pb,pb,0)}};i.Oe=21;i.Be=22;i.xe=23;i.mf=24;i.qf=25;i.bf=26;i.Kd=27;i.Ee=28;i.tf=202;i.ue=203;i.Ve=206;i.Ne=207;i.Ze=208;i.dd=209;var o={qc:1};var t=function(a,g,h){var c=this;n.call(c);var r,q,d,f,i;b.q(a);b.s(a);function k(a){c.o(o.qc,a,e)}

					function p(c){b.G(a,c||!h.Vb&&d==0);b.G(g,c||!h.Vb&&d>=q-h.n);r=c}c.Bc=function(b,a,c){if(c)d=a;else{d=b;p(r)}};c.vc=p;var m;c.rc=function(c){q=c;d=0;if(!m){b.g(a,"click",b.W(j,k,-i));b.g(g,"click",b.W(j,k,i));b.ec(a);b.ec(g);m=e}};c.bc=f=b.H({Zd:1},h);i=f.Zd;if(f.mc==l){b.N(a,"noscale",e);b.N(g,"noscale",e)}if(f.Bb){b.N(a,"autocenter",f.Bb);b.N(g,"autocenter",f.Bb)}},q=function(g,B){var h=this,z,p,a,v=[],x,w,d,q,r,u,t,m,s,f,k;n.call(h);g=b.Jb(g);function A(n,f){var g=this,c,m,l;

						function q(){m.Sd(p==f)}function i(e){

							if(e||!s.Jd()){var a=d-f%d,b=s.Lc((f+a)/d-1),c=b*d+d-a;h.o(o.qc,c)}}g.pb=f;g.Id=q;l=n.We||n.Lb||b.Z();g.Ob=c=b.Nd(k,"thumbnailtemplate",l,e);m=b.ec(c);a.tc&1&&b.g(c,"click",b.W(j,i,0));a.tc&2&&b.g(c,"mouseover",b.hc(b.W(j,i,1),c))}h.Bc=function(b,e,f){var a=p;p=b;a!=-1&&v[a].Id();v[b].Id();!f&&s.xf(s.Lc(c.floor(e/d)))};h.vc=function(a){b.G(g,a)};var y;h.rc=function(D,C){

								if(!y){z=D;c.ceil(z/d);p=-1;m=c.min(m,C.length);var h=a.Nb&1,n=u+(u+q)*(d-1)*(1-h),k=t+(t+r)*(d-1)*h,B=n+(n+q)*(m-1)*h,o=k+(k+r)*(m-1)*(1-h);b.F(f,"absolute");b.sb(f,"hidden");a.Bb&1&&b.O(f,(x-B)/2);a.Bb&2&&b.P(f,(w-o)/2);b.q(f,B);b.s(f,o);

						var j=[];b.j(C,function(l,g){var i=new A(l,g),e=i.Ob,a=c.floor(g/d),k=g%d;b.O(e,(u+q)*k*(1-h));b.P(e,(t+r)*k*h);

							if(!j[a]){j[a]=b.Z();b.L(f,j[a])}b.L(j[a],e);v.push(i)});var E=b.H({Ac:l,Nc:l,fe:n,ee:k,Yc:q*h+r*(1-h),Zc:12,zc:200,Uc:1,yc:a.Nb,cd:a.Cf||a.Bf?0:a.Nb},a);s=new i(g,E);y=e}};h.bc=a=b.H({uc:0,wc:0,n:1,Nb:1,Bb:3,tc:1},B);x=b.q(g);w=b.s(g);f=b.E(g,"slides",e);k=b.E(f,"prototype");u=b.q(k);t=b.s(k);b.Ub(k,f);d=a.u||1;q=a.uc;r=a.wc;m=a.n;a.mc==l&&b.N(g,"noscale",e)};

				function r(e,d,c){var a=this;m.call(a,0,c);a.Ed=b.Wc;a.ed=0;a.Xc=c}jssor_1_slider_init=function(){var g=[{k:1200,x:.3,C:{e:[.3,.7]},i:{e:d.l,a:d.m},a:2},{k:1200,x:-.3,r:e,i:{e:d.l,a:d.m},a:2},{k:1200,x:-.3,C:{e:[.3,.7]},i:{e:d.l,a:d.m},a:2},{k:1200,x:.3,r:e,i:{e:d.l,a:d.m},a:2},{k:1200,y:.3,C:{f:[.3,.7]},i:{f:d.l,a:d.m},a:2},{k:1200,y:-.3,r:e,i:{f:d.l,a:d.m},a:2},{k:1200,y:-.3,C:{f:[.3,.7]},i:{f:d.l,a:d.m},a:2},{k:1200,y:.3,r:e,i:{f:d.l,a:d.m},a:2},{k:1200,x:.3,n:2,C:{e:[.3,.7]},z:{mb:3},i:{e:d.l,a:d.m},a:2},{k:1200,x:.3,n:2,r:e,z:{mb:3},i:{e:d.l,a:d.m},a:2},{k:1200,y:.3,u:2,C:{f:[.3,.7]},z:{eb:12},i:{f:d.l,a:d.m},a:2},{k:1200,y:.3,u:2,r:e,z:{eb:12},i:{f:d.l,a:d.m},a:2},{k:1200,y:.3,n:2,C:{f:[.3,.7]},z:{mb:12},i:{f:d.l,a:d.m},a:2},{k:1200,y:-.3,n:2,r:e,z:{mb:12},i:{f:d.l,a:d.m},a:2},{k:1200,x:.3,u:2,C:{e:[.3,.7]},z:{eb:3},i:{e:d.l,a:d.m},a:2},{k:1200,x:-.3,u:2,r:e,z:{eb:3},i:{e:d.l,a:d.m},a:2},{k:1200,x:.3,y:.3,n:2,u:2,C:{e:[.3,.7],f:[.3,.7]},z:{mb:3,eb:12},i:{e:d.l,f:d.l,a:d.m},a:2},{k:1200,x:.3,y:.3,n:2,u:2,C:{e:[.3,.7],f:[.3,.7]},r:e,z:{mb:3,eb:12},i:{e:d.l,f:d.l,a:d.m},a:2},{k:1200,R:20,c:3,i:{c:d.l,a:d.m},a:2},{k:1200,R:20,c:3,r:e,i:{c:d.hd,a:d.m},a:2},{k:1200,R:20,c:12,i:{c:d.l,a:d.m},a:2},{k:1200,R:20,c:12,r:e,i:{c:d.hd,a:d.m},a:2}],j={Ac:e,df:{T:s,zb:g,Me:1},ie:{T:t},ge:{T:q,n:10,uc:8,wc:8,Dc:360}},f=new i("jssor_1",j);

				function k(){var d=b.ve(f.jb,"slides");if(d){var c=d[1];if(c){var a=b.E(c,"ad");if(!a){a=b.Z();b.yb(a,"position:absolute;top:0px;right:0px;width:80px;height:20px;background-color:rgba(255,255,140,0.5);font-size: 12px;line-height: 20px;text-align:center;");b.Ie(a,"SION WEB");b.L(c,a)}}}}k();

				function a(){var b=f.jb.parentNode.clientWidth;if(b){b=c.min(b,800);f.Qd(b)}
				else h.setTimeout(a,30)}a();b.g(h,"load",a);b.g(h,"resize",a);b.g(h,"orientationchange",a)}})(window,document,Math,null,true,false)</script>

				<style>
				.jssora05l,.jssora05r{display:block;position:absolute;width:40px;height:40px;cursor:pointer;background:url('img/a17.png') no-repeat;overflow:hidden}.jssora05l{background-position:-10px -40px}.jssora05r{background-position:-70px -40px}.jssora05l:hover{background-position:-130px -40px}.jssora05r:hover{background-position:-190px -40px}.jssora05l.jssora05ldn{background-position:-250px -40px}.jssora05r.jssora05rdn{background-position:-310px -40px}.jssort01 .p{position:absolute;top:0;left:0;width:72px;height:72px}.jssort01 .t{position:absolute;top:0;left:0;width:100%;height:100%;border:none}.jssort01 .w{position:absolute;top:0;left:0;width:100%;height:100%}.jssort01 .c{position:absolute;top:0;left:0;width:68px;height:68px;border:#000 2px solid;box-sizing:content-box;background:url('img/t01.png') -800px -800px no-repeat;_background:none}.jssort01 .pav .c{top:2px;_top:0;left:2px;_left:0;width:68px;height:68px;border:#000 0 solid;_border:#fff 2px solid;background-position:50% 50%}.jssort01 .p:hover .c{top:0;left:0;width:70px;height:70px;border:#fff 1px solid;background-position:50% 50%}.jssort01 .p.pdn .c{background-position:50% 50%;width:68px;height:68px;border:#000 2px solid}* html .jssort01 .c,* html .jssort01 .pdn .c,* html .jssort01 .pav .c{width:72px;height:72px}</style>

				<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 800px; height: 500px; overflow: hidden; visibility: hidden; background-color: #24262e; border-radius: 5px;"><!-- Loading Screen -->
				<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
					<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;">
					</div>
					<div style="position:absolute;display:block;background:url('<?php echo Yii::app()->request->baseUrl; ?>img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;">
					</div>
				</div>

				<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 400px; overflow: hidden;">
				<div data-p="144.50" style="display: none;">
				<a href="img1.html">
					<img data-u="image" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/8.jpg" title="Entrada Usuarios"/></a>
					<img data-u="thumb" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/8.jpg"/></div>
					<div data-p="144.50" style="display: none;">
					<img data-u="image" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/4.jpg" title="Apartamentos"/>
					<img data-u="thumb" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/4.jpg" /></div>
					<div data-p="144.50" style="display: none;">
					<img data-u="image" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/5.jpg" title="Salida Vehicular"/>
					<img data-u="thumb" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/5.jpg" /></div>
					<div data-p="144.50" style="display: none;">
					<img data-u="image" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/7.jpg" title="Entrada Vehicular"/>
					<img data-u="thumb" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/7.jpg" /></div>
					<div data-p="144.50" style="display: none;">
					<img data-u="image" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/1.jpg" title="Exterior"/>
					<img data-u="thumb" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/1.jpg" /></div>
					<div data-p="144.50" style="display: none;">
					<img data-u="image" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/9.jpg" title="Personal"/>
					<img data-u="thumb" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/9.jpg" /></div>
					<div data-p="144.50" style="display: none;">
					<img data-u="image" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/10.jpg" title="Puntos de parqueo"/>
					<img data-u="thumb" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/10.jpg" /></div>
					<div data-p="144.50" style="display: none;">
					<img data-u="image" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/16.jpg" title="Sotano 1"/>
					<img data-u="thumb" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/16.jpg" /></div>
					<div data-p="144.50" style="display: none;">
					<img data-u="image" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/17.jpg" title="Sotano 2"/>
					<img data-u="thumb" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/17.jpg" /></div>
					<div data-p="144.50" style="display: none;">
					<img data-u="image" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/18.jpg" title="Sotano 3"/>
					<img data-u="thumb" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/18.jpg" /></div>
	</div>
<div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;" data-autocenter="1">
<div data-u="slides" style="cursor: default;">
<div data-u="prototype" class="p">
<div class="w">
<div data-u="thumbnailtemplate" class="t">
</div>
</div>
<div class="c">
</div>
</div>
</div>
</div>



<span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span><span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span></div>

<script>jssor_1_slider_init();</script>
</div>
				
				<h1 style=" text-align: center;"> Fotos</h1>
				
					<br>
					<div class="col-lg-4">
						<img style="width: 100%; height: 200px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/18.jpg">
						<label>parqueos</label>
					</div>
					<div class="col-lg-4">
						<img style="width: 100%; height: 200px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/18.jpg">
						<label>parqueos</label>
					</div>
					<div class="col-lg-4">
						<img style="width: 100%; height: 200px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/18.jpg">
						<label>parqueos</label>
					</div>					
			
				
					<br>
					<div class="col-lg-4">
						<img style="width: 100%; height: 200px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/18.jpg">
						<label>parqueos</label>
					</div>
					<div class="col-lg-4">
						<img style="width: 100%; height: 200px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/18.jpg">
						<label>parqueos</label>
					</div>
					<div class="col-lg-4">
						<img style="width: 100%; height: 200px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/18.jpg">
						<label>parqueos</label>
					</div>					
				
					<br>
					<div class="col-lg-4">
						<img style="width: 100%; height: 200px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/18.jpg">
						<label>parqueos</label>
					</div>
					<div class="col-lg-4">
						<img style="width: 100%; height: 200px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/18.jpg">
						<label>parqueos</label>
					</div>
					<div class="col-lg-4">
						<img style="width: 100%; height: 200px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/18.jpg">
						<label>parqueos</label>
					</div>					
				
					<br>
					<div class="col-lg-4">
						<img style="width: 100%; height: 200px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/18.jpg">
						<label>parqueos</label>
					</div>
					<div class="col-lg-4">
						<img style="width: 100%; height: 200px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/18.jpg">
						<label>parqueos</label>
					</div>
					<div class="col-lg-4">
						<img style="width: 100%; height: 200px; " src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/18.jpg">
						<label>parqueos</label>
					</div>					
				
					<br>
					<div class="col-lg-4">
						<img style="width: 100%; height: 200px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/18.jpg">
						<label>parqueos</label>
					</div>
					<div class="col-lg-4">
						<img style="width: 100%; height: 200px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/18.jpg">
						<label>parqueos</label>
					</div>
					<div class="col-lg-4">
						<img style="width: 100%; height: 200px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/imagen/18.jpg">
						<label>parqueos</label>
					</div>					
				

		</section>
		</div>
	</div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/java.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/skel.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/util.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>