@extends('layouts.menu')
@section('title', 'Modifier votre profil')

@section('content')

<!--style unsplash-->
<style media="screen">
/*! CSS Used from: https://unsplash.com/assets/application-f75735f5491078c7be55e653e6bbd242c88aaf155bc1fc4559cce30f0bfa0d8c.css ; media=all */
@media all{
a:focus{outline:thin dotted;}
a:active,a:hover{outline:0;}
h1{font-size:2em;margin:0.67em 0;}
strong{font-weight:700;}
img{border:0;}
svg:not(:root){overflow:hidden;}
input,textarea{font-family:inherit;font-size:100%;margin:0;padding:0;}
input{line-height:normal;}
input[type="submit"]{-webkit-appearance:button;cursor:pointer;}
input[type="checkbox"]{box-sizing:border-box;padding:0;}
input::-moz-focus-inner{border:0;padding:0;}
textarea{overflow:auto;vertical-align:top;}
.row{margin-left:-12px;margin-right:-12px;}
.row:before,.row:after{content:" ";display:table;}
.row:after{clear:both;}
.row:before,.row:after{content:" ";display:table;}
.row:after{clear:both;}
.row:before{content:none;}
.row:after{content:'';}
.col-sm-4,.col-sm-6,.col-sm-8,.col-md-9,.col-xs-12{position:relative;min-height:1px;padding-left:12px;padding-right:12px;}
.col-xs-12{width:100%;}
@media (min-width: 768px){
.col-sm-4,.col-sm-6,.col-sm-8{float:left;}
.col-sm-8{width:66.66666667%;}
.col-sm-6{width:50%;}
.col-sm-4{width:33.33333333%;}
}
@media (min-width: 992px){
.col-md-9{float:left;}
.col-md-9{width:75%;}
}
.hide{display:none!important;}
.margin-bottom{margin-bottom:24px;}
*,*:before,*:after{box-sizing:border-box;}
input,textarea{font-family:inherit;font-size:inherit;line-height:inherit;letter-spacing:inherit;}
a{color:#767676;text-decoration:underline;-webkit-transition:color 0.1s ease-in-out, fill 0.1s ease-in-out, opacity 0.1s ease-in-out;transition:color 0.1s ease-in-out, fill 0.1s ease-in-out, opacity 0.1s ease-in-out;}
a:hover,a:focus{color:#111111;}
a:focus{outline:thin dotted #333;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.icon{display:inline-block;vertical-align:middle;fill:#111111;line-height:1;speak:none;text-decoration:inherit;width:18px;height:18px;-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;-webkit-transition:fill 0.1s ease-in-out;transition:fill 0.1s ease-in-out;}
a .icon{fill:#767676;text-decoration:none!important;-webkit-transition:fill 0.1s ease-in-out, opacity 0.1s ease-in-out;transition:fill 0.1s ease-in-out, opacity 0.1s ease-in-out;}
a:hover .icon,a:focus .icon{fill:#111111;}
img{vertical-align:middle;}
.upload-circular__image{display:block;width:100%;height:auto;}
.arch:before,.arch:after{content:" ";display:table;}
.arch:after{clear:both;}
.arch:before,.arch:after{content:" ";display:table;}
.arch:after{clear:both;}
.arch .arch-left{float:none;text-align:left;}
.arch .arch-right{float:none;text-align:left;}
@media (min-width: 768px){
.arch .arch-left{float:left!important;}
.arch .arch-right{float:right!important;text-align:right;}
}
label{display:-webkit-inline-box;display:-webkit-inline-flex;display:-ms-inline-flexbox;display:inline-flex;-webkit-box-align:baseline;-webkit-align-items:baseline;-ms-flex-align:baseline;align-items:baseline;max-width:100%;margin-bottom:6px;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;}
label span{margin-left:4px;margin-right:4px;}
input[type="checkbox"]{margin:5px 8px 0 0;margin-top:1px \9;line-height:normal;-webkit-transform:translateY(1px);-ms-transform:translateY(1px);transform:translateY(1px);}
input[type="file"]{display:block;}
input[type="file"]:focus,input[type="checkbox"]:focus{outline:thin dotted #333;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.form-control{display:block;width:100%;height:40px;padding:6px 12px;font-size:15px;line-height:1.6;color:#111111;background-color:transparent;background-image:none;border:1px solid #767676;border-radius:3px;-webkit-transition:border-color ease-in-out 0.15s;transition:border-color ease-in-out 0.15s;}
.form-control:focus{border-color:#111111;outline:0;}
.form-control::-moz-placeholder{color:#767676;opacity:1;}
.form-control:-ms-input-placeholder{color:#767676;}
.form-control::-webkit-input-placeholder{color:#767676;}
textarea.form-control{height:auto;resize:vertical;min-height:40px;}
.input-with-counter{position:relative;}
.input-with-counter textarea{resize:none;}
.input-with-counter .character-count{position:absolute;right:10px;font-size:12px;color:#767676;pointer-events:none;}
.input-with-counter .character-count--textarea{bottom:8px;}
.form-group{margin-bottom:24px;}
.form-group .input-group{display:inline-table;width:100%;}
.form-group .input-group .input-group-addon,.form-group .input-group .form-control{display:table-cell;}
.form-group .input-group .input-group-addon{text-align:center;border:1px solid #767676;border-right:0;border-top-left-radius:3px;border-bottom-left-radius:3px;}
.form-group .input-group .input-group-addon+input{border-top-left-radius:0;border-bottom-left-radius:0;}
.checkbox{position:relative;display:block;margin-bottom:16px;}
.checkbox label{min-height:18px;margin-bottom:0;font-weight:normal;cursor:pointer;line-height:1.5;}
.checkbox--with-helper{display:inline-block;margin-bottom:24px;}
.label__helper{margin-top:4px;margin-left:20px;font-size:13px;display:block;}
.help-block{display:block;color:currentColor;}
.help-block p{font-size:13px;line-height:1.6;margin-top:8px;}
h1,h6{font-size:22px;font-weight:400;margin:0 0 16px;padding:0;}
.delta{font-size:16px;}
@media (min-width: 768px){
.delta{font-size:18px;}
}
.zeta{font-size:13px;line-height:18px;}
p{font-size:15px;font-weight:400;line-height:1.6;margin:16px 0;}
.text-left{text-align:left!important;}
.text-center{text-align:center!important;}
.text-weight--bold{font-weight:700;}
.text-weight--medium{font-weight:500;}
.link--no-underline{text-decoration:none!important;}
.text-secondary{color:#767676;}
.btn{display:inline-block;margin-bottom:0;text-align:center;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;background-image:none;border:1px solid transparent;white-space:nowrap;text-decoration:none;box-shadow:0 1px 4px rgba(0,0,0,0.02),0 1px 1px rgba(0,0,0,0.06);padding:9px 18px;font-size:15px;line-height:1.6;border-radius:4px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-transition:background-color 0.1s ease-in-out, border-color 0.1s ease-in-out, color 0.1s ease-in-out;transition:background-color 0.1s ease-in-out, border-color 0.1s ease-in-out, color 0.1s ease-in-out;}
.btn:focus,.btn:active:focus{outline:thin dotted #333;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.btn:hover,.btn:focus{color:#ffffff;text-decoration:none;}
.btn:active{outline:0;background-image:none;}
.btn-default{color:#ffffff;background-color:#111111;}
.btn-default:hover,.btn-default:active{background-color:#111111;}
.btn-block-level{width:100%;}
.pill{height:24px;border-radius:24px;display:-webkit-inline-box;display:-webkit-inline-flex;display:-ms-inline-flexbox;display:inline-flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;font-size:13px;line-height:1;padding-right:12px;padding-left:12px;-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;text-decoration:none;background-color:#eaeaea;color:#767676;}
a .pill,a:hover .pill{text-decoration:none;}
.pill .icon{padding-right:3px;margin-left:-3px;fill:#767676;}
a .pill .icon,a:hover .pill .icon{fill:#767676;}
.pill--default{background-color:#5e5e5e;color:#ffffff;}
.pill--default .icon{fill:#ffffff;}
a .pill--default .icon,a:hover .pill--default .icon{fill:#ffffff;}
.tagsinput{overflow-y:auto;padding:6px 6px 1px;border:1px solid #767676;border-radius:3px;min-height:40px!important;}
.tagsinput:hover{cursor:text;}
.tagsinput input{width:80px;margin:0px;font-size:14px;border:1px solid transparent;background:transparent;color:#111111;outline:0px;margin-right:5px;}
.tagsinput div{display:block;float:left;}
.tags_clear{clear:both;width:100%;height:0px;}
.upload-circular-container{display:inline-block;}
.upload-circular{position:relative;border-radius:50%;width:128px;height:128px;margin:auto;overflow:hidden;}
.upload-circular__image--large{width:128px;height:128px;}
.upload-circular__progress{position:absolute;height:128px;top:0;width:0;background-color:#3cb46e;opacity:0.3;-webkit-transition:width 0.3s ease-in-out;transition:width 0.3s ease-in-out;}
.user-badges{margin-top:7px;}
.user-badges-container{position:relative;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;min-height:50px;}
.no-badge-message{margin-top:6px;margin-bottom:6px;}
.user-badges-list{margin:0;list-style:none;padding:0;background:#ffffff;border:1px solid #d1d1d1;border-radius:3px;box-shadow:2px 2px 6px rgba(0,0,0,0.12);position:absolute;width:100%;font-size:0;z-index:2;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;top:0;left:-8px;-webkit-transition:all 0.2s ease-in-out;transition:all 0.2s ease-in-out;opacity:1;-webkit-transform:scale(1) translate(0);-ms-transform:scale(1) translate(0);transform:scale(1) translate(0);visibility:visible;}
.user-badges-list--hidden{opacity:0;-webkit-transform:scale(0.8) translate(-5%, -5%);-ms-transform:scale(0.8) translate(-5%, -5%);transform:scale(0.8) translate(-5%, -5%);visibility:hidden;}
@media (max-width: 767px){
.user-badges-list--hidden{display:none;}
}
@media (max-width: 767px){
.user-badges-list{position:relative;}
}
.user-badges-list__item{display:inline-block;}
.user-badges-list__item a{display:inline-block;padding:8px;}
.user-badges-list__item a:hover{background-color:#eeeeee;}
.user-badges-list__item--text{font-size:12px;line-height:32px;}
}
</style>


<style media="screen">
.profile-bg-picture {
background: linear-gradient(rgba(34, 34, 34, 0.7), rgba(34, 34, 34, 0.7)), url(../img/blog/13.jpg) no-repeat center center fixed;
background-position: center center;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
background-attachment: scroll;
color: #fff;
height: 55vh;
display: flex;
align-items: center;
justify-content: center;
}
</style>

<!--user-section-->
<style media="screen">
/*! CSS Used from: http://www.themashabrand.com/templates/Masha/Medium/bower_components/bootstrap/dist/css/bootstrap.css */
section{display:block;}
small{font-size:80%;}
img{border-style:none;}
button{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button,html [type="button"]{-webkit-appearance:button;}
button::-moz-focus-inner,[type="button"]::-moz-focus-inner{border-style:none;padding:0;}
button:-moz-focusring,[type="button"]:-moz-focusring{outline:1px dotted ButtonText;}
@media print{
*,*::before,*::after,p::first-letter,div::first-letter,p::first-line,div::first-line{text-shadow:none!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
img{page-break-inside:avoid;}
p{orphans:3;widows:3;}
}
*,*::before,*::after{-webkit-box-sizing:inherit;box-sizing:inherit;}
h4{margin-top:0;margin-bottom:.5rem;}
p{margin-top:0;margin-bottom:1rem;}
img{vertical-align:middle;}
button{-ms-touch-action:manipulation;touch-action:manipulation;}
button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color;}
button{line-height:inherit;}
h4{margin-bottom:0.5rem;font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
h4{font-size:1.5rem;}
small{font-size:80%;font-weight:normal;}
.container{position:relative;margin-left:auto;margin-right:auto;padding-right:15px;padding-left:15px;}
@media (min-width: 576px){
.container{padding-right:15px;padding-left:15px;}
}
@media (min-width: 768px){
.container{padding-right:15px;padding-left:15px;}
}
@media (min-width: 992px){
.container{padding-right:15px;padding-left:15px;}
}
@media (min-width: 1200px){
.container{padding-right:15px;padding-left:15px;}
}
@media (min-width: 576px){
.container{width:540px;max-width:100%;}
}
@media (min-width: 768px){
.container{width:720px;max-width:100%;}
}
@media (min-width: 992px){
.container{width:960px;max-width:100%;}
}
@media (min-width: 1200px){
.container{width:1140px;max-width:100%;}
}
.row{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
@media (min-width: 576px){
.row{margin-right:-15px;margin-left:-15px;}
}
@media (min-width: 768px){
.row{margin-right:-15px;margin-left:-15px;}
}
@media (min-width: 992px){
.row{margin-right:-15px;margin-left:-15px;}
}
@media (min-width: 1200px){
.row{margin-right:-15px;margin-left:-15px;}
}
.col-sm-6{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width: 576px){
.col-sm-6{padding-right:15px;padding-left:15px;}
}
@media (min-width: 768px){
.col-sm-6{padding-right:15px;padding-left:15px;}
}
@media (min-width: 992px){
.col-sm-6{padding-right:15px;padding-left:15px;}
}
@media (min-width: 1200px){
.col-sm-6{padding-right:15px;padding-left:15px;}
}
@media (min-width: 576px){
.col-sm-6{-webkit-box-flex:0;-webkit-flex:0 0 50%;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
}
.btn{display:inline-block;font-weight:normal;line-height:1.25;text-align:center;white-space:nowrap;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;border:1px solid transparent;padding:0.5rem 1rem;font-size:1rem;border-radius:0.25rem;-webkit-transition:all 0.2s ease-in-out;-o-transition:all 0.2s ease-in-out;transition:all 0.2s ease-in-out;}
.btn:focus,.btn:hover{text-decoration:none;}
.btn:focus{outline:0;-webkit-box-shadow:0 0 0 2px rgba(2, 117, 216, 0.25);box-shadow:0 0 0 2px rgba(2, 117, 216, 0.25);}
.btn:disabled{cursor:not-allowed;opacity:.65;}
.btn:active{background-image:none;}
.btn-success{color:#fff;background-color:#5cb85c;border-color:#5cb85c;}
.btn-success:hover{color:#fff;background-color:#449d44;border-color:#419641;}
.btn-success:focus{-webkit-box-shadow:0 0 0 2px rgba(92, 184, 92, 0.5);box-shadow:0 0 0 2px rgba(92, 184, 92, 0.5);}
.btn-success:disabled{background-color:#5cb85c;border-color:#5cb85c;}
.btn-success:active{color:#fff;background-color:#449d44;background-image:none;border-color:#419641;}
.media-body{-webkit-box-flex:1;-webkit-flex:1 1 0%;-ms-flex:1 1 0%;flex:1 1 0%;}
.text-right{text-align:right!important;}
.text-muted{color:#636c72!important;}
/*! CSS Used from: http://www.themashabrand.com/templates/Masha/Medium/css/app.css */
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.pull-left{float:left;}
.fa-user:before{content:"\f007";}
div,span,h4,p,img,small,i,section{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
section{display:block;}
h4{font-family:'Montserrat', sans-serif;color:#2C3E50;letter-spacing:1px;}
h4{font-size:18px;line-height:36px;}
p{font-family:'Varela Round', sans-serif;line-height:24px;margin:0;font-size:14px;letter-spacing:1px;}
small{font-size:80%;}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}
.user-section .profile-user-box{background-color:#ffffff;padding:20px;border:1px solid #e2e2e2;position:relative;top:-50px;border-radius:5px;align-self:flex-end;}
.user-section .m-r-15{margin-right:15px!important;}
.user-section .pull-left{float:left!important;}
.user-section .thumb-lg{height:88px;width:88px;}
.user-section .media-body{display:table-cell;vertical-align:top;}
.user-section .media-body{width:10000px;}
.user-section .media-body h4{font-family:'Abhaya Libre', serif;font-size:23px!important;color:#1ab394;}
.user-section .media-body p{font-family:'Abhaya Libre', serif;}
.user-section .m-b-0{margin-bottom:0!important;}
.user-section .btn-success{font-family:'Abhaya Libre', serif;font-size:14px!important;background-color:#1ab394!important;border:1px solid #1ab394!important;}
.user-section .m-r-5{margin-right:5px!important;}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}

</style>



<!--onglets style-->
<style media="screen">
/*! CSS Used from: http://www.themashabrand.com/templates/Masha/Medium/bower_components/bootstrap/dist/css/bootstrap.css */
section{display:block;}
a{background-color:transparent;-webkit-text-decoration-skip:objects;}
a:active,a:hover{outline-width:0;}
img{border-style:none;}
@media print{
*,*::before,*::after,p::first-letter,div::first-letter,li::first-letter,p::first-line,div::first-line,li::first-line{text-shadow:none!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
img{page-break-inside:avoid;}
p{orphans:3;widows:3;}
}
*,*::before,*::after{-webkit-box-sizing:inherit;box-sizing:inherit;}
h4{margin-top:0;margin-bottom:.5rem;}
p{margin-top:0;margin-bottom:1rem;}
ul{margin-top:0;margin-bottom:1rem;}
a{color:#0275d8;text-decoration:none;}
a:focus,a:hover{color:#014c8c;text-decoration:underline;}
img{vertical-align:middle;}
a,label{-ms-touch-action:manipulation;touch-action:manipulation;}
label{display:inline-block;margin-bottom:.5rem;}
h4{margin-bottom:0.5rem;font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
h4{font-size:1.5rem;}
.container{position:relative;margin-left:auto;margin-right:auto;padding-right:15px;padding-left:15px;}
@media (min-width: 576px){
.container{padding-right:15px;padding-left:15px;}
}
@media (min-width: 768px){
.container{padding-right:15px;padding-left:15px;}
}
@media (min-width: 992px){
.container{padding-right:15px;padding-left:15px;}
}
@media (min-width: 1200px){
.container{padding-right:15px;padding-left:15px;}
}
@media (min-width: 576px){
.container{width:540px;max-width:100%;}
}
@media (min-width: 768px){
.container{width:720px;max-width:100%;}
}
@media (min-width: 992px){
.container{width:960px;max-width:100%;}
}
@media (min-width: 1200px){
.container{width:1140px;max-width:100%;}
}
.row{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
@media (min-width: 576px){
.row{margin-right:-15px;margin-left:-15px;}
}
@media (min-width: 768px){
.row{margin-right:-15px;margin-left:-15px;}
}
@media (min-width: 992px){
.row{margin-right:-15px;margin-left:-15px;}
}
@media (min-width: 1200px){
.row{margin-right:-15px;margin-left:-15px;}
}
.col-sm-4,.col-lg-12{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width: 576px){
.col-sm-4,.col-lg-12{padding-right:15px;padding-left:15px;}
}
@media (min-width: 768px){
.col-sm-4,.col-lg-12{padding-right:15px;padding-left:15px;}
}
@media (min-width: 992px){
.col-sm-4,.col-lg-12{padding-right:15px;padding-left:15px;}
}
@media (min-width: 1200px){
.col-sm-4,.col-lg-12{padding-right:15px;padding-left:15px;}
}
@media (min-width: 576px){
.col-sm-4{-webkit-box-flex:0;-webkit-flex:0 0 33.333333%;-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%;}
}
@media (min-width: 992px){
.col-lg-12{-webkit-box-flex:0;-webkit-flex:0 0 100%;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}
}
.fade{opacity:0;-webkit-transition:opacity 0.15s linear;-o-transition:opacity 0.15s linear;transition:opacity 0.15s linear;}
.nav{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;padding-left:0;margin-bottom:0;list-style:none;}
.nav-link{display:block;padding:0.5em 1em;}
.nav-link:focus,.nav-link:hover{text-decoration:none;}
.nav-tabs{border-bottom:1px solid #ddd;}
.nav-tabs .nav-item{margin-bottom:-1px;}
.nav-tabs .nav-link{border:1px solid transparent;border-top-right-radius:0.25rem;border-top-left-radius:0.25rem;}
.nav-tabs .nav-link:focus,.nav-tabs .nav-link:hover{border-color:#eceeef #eceeef #ddd;}
.nav-tabs .nav-link.active{color:#464a4c;background-color:#fff;border-color:#ddd #ddd #fff;}
.tab-content > .tab-pane{display:none;}
.tab-content > .active{display:block;}
.card{position:relative;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;background-color:#fff;border:1px solid rgba(0, 0, 0, 0.125);border-radius:0.25rem;}
.card-block{-webkit-box-flex:1;-webkit-flex:1 1 auto;-ms-flex:1 1 auto;flex:1 1 auto;padding:1.25rem;}
.media{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:start;-webkit-align-items:flex-start;-ms-flex-align:start;align-items:flex-start;}
.media-body{-webkit-box-flex:1;-webkit-flex:1 1 0%;-ms-flex:1 1 0%;flex:1 1 0%;}
.rounded-circle{border-radius:50%;}
/*! CSS Used from: http://www.themashabrand.com/templates/Masha/Medium/css/app.css */
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.fa-briefcase:before{content:"\f0b1";}
.fa-envelope:before{content:"\f0e0";}
.fa-ellipsis-v:before{content:"\f142";}
div,h4,p,a,img,i,section{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
section{display:block;}
h4{font-family:'Montserrat', sans-serif;color:#2C3E50;letter-spacing:1px;}
h4{font-size:18px;line-height:36px;}
p{font-family:'Varela Round', sans-serif;line-height:24px;margin:0;font-size:14px;letter-spacing:1px;}
a{color:#fff;text-decoration:none;outline:0;-webkit-transition:0.5s all ease;-moz-transition:0.5s all ease;-o-transition:0.5s all ease;-ms-transition:0.5s all ease;transition:0.5s all ease;}
a:hover,a:focus,a:active,a.active{text-decoration:none;outline:0;color:#16A085!important;-webkit-transition:0.5s all ease;-moz-transition:0.5s all ease;-o-transition:0.5s all ease;-ms-transition:0.5s all ease;transition:0.5s all ease;}
ul{margin:0;}
ul{list-style:none outside;}
li{line-height:24px;}
a{cursor:pointer;outline:0;}
a{cursor:pointer;outline:0;}
.posts-2{width:100%;background:#f2f2f2;padding-top:50px;padding-bottom:30px;}
.card{margin-bottom:30px;margin-right:10px;margin-left:10px;border-radius:10px!important;box-shadow:0 1px 5px rgba(49, 58, 70, 0.4);}
.card a{text-decoration:none!important;color:inherit;}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}
.nav-tabs .nav-link{font-family:'Abhaya Libre', serif;font-size:16px;color:#3b4354;}
.followers .card-profile .media{margin-top:0;}
.followers .card-profile .media .media-left{padding-right:15px;}
.followers .card-profile .media .media-object{width:48px;padding:2px;border:2px solid #eaecf0;}
.followers .media-object{display:block;}
.followers .media-body{display:table-cell;vertical-align:top;width:10000px;}
.followers .media-heading{font-family:'Abhaya Libre', serif;margin-top:5px;margin-bottom:2px;font-size:16px;font-weight:700;color:#3b4354;}
.followers .media-usermeta{font-family:'Abhaya Libre', serif;margin-top:4px;color:#909bb1;}
.followers .media-usermeta i{display:inline-block;margin-right:5px;vertical-align:baseline;}
.followers .card-options{position:absolute;top:15px;right:20px;padding:0;margin:0;}
.followers .card-options > li{display:block;float:left;list-style:none;}
.followers .card-options > li > a{color:#bdc3d1;-webkit-transition:all 0.2s ease-out 0s;-o-transition:all 0.2s ease-out 0s;transition:all 0.2s ease-out 0s;}
.followers .card-options > li > a > i{display:inline-block;vertical-align:middle;}
.followers .people-info .row{margin:0;}
.followers .people-info .col-sm-4{padding:0;font-size:12px;}
.followers .people-info .col-sm-4:first-child > .info-group{margin-left:0;}
.followers .people-info .info-group{font-family:'Abhaya Libre', serif;font-size:14px;padding:15px;background-color:#f9fafb;margin-left:1px;}
.followers .people-info .info-group label{display:block;margin-bottom:5px;text-transform:uppercase;font-family:'Abhaya Libre', serif;font-weight:700;font-size:11px;letter-spacing:.5px;color:#3b4354;}
.followers .people-info .row + .row{margin-top:1px;}
.followers .people-info h4{font-family:'Abhaya Libre', serif;margin:9px 0 8px;font-weight:500;color:#259dab;font-size:15px;}
.nav-tabs .nav-link{font-family:'Abhaya Libre', serif;font-size:16px;}

</style>

<header class="profile-bg-picture"></header>


<section class="user-section">
    <div class="container">
        <div class="profile-user-box">
            <div class="row">
                <div class="col-sm-6">
                    <span class="pull-left m-r-15"><img src="blob:https://beta.mindvalley.com/1cbb994b-9dca-4dea-86cd-057ec716788f" alt="" class="thumb-lg img-circle"></span>
                    <div class="media-body">
                        <h4 class="m-t-5 m-b-5 ellipsis">{{Auth::user()->name}}</h4>
                        <p class="font-13"> User Experience Specialist</p>
                        <p class="text-muted m-b-0"><small>California, United States</small></p>
                    </div><!-- /media-body -->
                </div><!-- /col-sm-6 -->
                <div class="col-sm-6">
                    <div class="text-right">
                        <button type="button" class="btn btn-success waves-effect waves-light">
                            <i class="fa fa-user m-r-5"></i> Modifier Profil
                        </button>
                    </div><!-- /text-right -->
                </div><!-- /col-sm-6 -->
            </div><!-- /row -->
        </div>
        <!--/ profile-user-box -->
    </div><!-- /container -->
</section>


<section style="margin: 5rem;">
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="arch">
                <div class="arch-left">
                    <h1 class="margin-bottom delta text-weight--bold">Edit profile</h1>
                </div> <!-- close .arch-left -->

                <div class="arch-right">
                    <a href="https://help.unsplash.com/en/articles/3314707-why-do-i-need-to-confirm-my-account" class="link--no-underline">
                        <span class="pill pill--default"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" enable-background="new 0 0 24 24" class="icon">
                                <style type="text/css">
                                    .st1 {
                                        display: inline;
                                    }

                                    .st2 {
                                        fill: none;
                                    }

                                    .st3 {
                                        fill-rule: evenodd;
                                        clip-rule: evenodd;
                                    }
                                </style>
                                <path d="M12 2c-5.5 0-10 4.5-10 10s4.5 10 10 10 10-4.5 10-10-4.5-10-10-10zm4.2 14.1l-5.2-3.1v-6h1v5.2l4.8 2.7-.6 1.2z" height="24"></path>
                            </svg>
                            Confirmation pending</span>
                    </a>
                </div> <!-- close .arch-right -->
            </div> <!-- close .arch -->



            <div class="form">
                <form class="edit_user" id="edit_user_4646744" action="/account" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="put"><input type="hidden" name="authenticity_token"
                      value="bbMpoxP1932DrraVaAHqotMDQPc9PUdxreNo+yo7XlbAHHleLhFJvhDoyb4j7eZwkYurin1SkD6zUWoZozEtDg==">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 text-center">
                            <a href="#" class="upload-circular-container profile-image-container js-general-uploader-pseudo-file-field">
                                <div class="upload-circular">
                                    <img ix-src="https://images.unsplash.com/profile-fb-1589371014-0a78edf93e74.jpg?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;h=128&amp;w=128" sizes="128px"
                                      class="upload-circular__image upload-circular__image--large js-general-uploader-new-upload-target"
                                      srcset="https://images.unsplash.com/profile-fb-1589371014-0a78edf93e74.jpg?ixlib=imgixjs-3.3.2&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;h=100&amp;w=100 100w, https://images.unsplash.com/profile-fb-1589371014-0a78edf93e74.jpg?ixlib=imgixjs-3.3.2&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;h=200&amp;w=200 200w, https://images.unsplash.com/profile-fb-1589371014-0a78edf93e74.jpg?ixlib=imgixjs-3.3.2&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;h=300&amp;w=300 300w, https://images.unsplash.com/profile-fb-1589371014-0a78edf93e74.jpg?ixlib=imgixjs-3.3.2&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;h=320&amp;w=320 320w, https://images.unsplash.com/profile-fb-1589371014-0a78edf93e74.jpg?ixlib=imgixjs-3.3.2&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;h=400&amp;w=400 400w, https://images.unsplash.com/profile-fb-1589371014-0a78edf93e74.jpg?ixlib=imgixjs-3.3.2&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;h=500&amp;w=500 500w, https://images.unsplash.com/profile-fb-1589371014-0a78edf93e74.jpg?ixlib=imgixjs-3.3.2&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;h=576&amp;w=576 576w, https://images.unsplash.com/profile-fb-1589371014-0a78edf93e74.jpg?ixlib=imgixjs-3.3.2&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;h=600&amp;w=600 600w, https://images.unsplash.com/profile-fb-1589371014-0a78edf93e74.jpg?ixlib=imgixjs-3.3.2&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;h=640&amp;w=640 640w, https://images.unsplash.com/profile-fb-1589371014-0a78edf93e74.jpg?ixlib=imgixjs-3.3.2&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;h=700&amp;w=700 700w, https://images.unsplash.com/profile-fb-1589371014-0a78edf93e74.jpg?ixlib=imgixjs-3.3.2&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;h=720&amp;w=720 720w, https://images.unsplash.com/profile-fb-1589371014-0a78edf93e74.jpg?ixlib=imgixjs-3.3.2&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;h=750&amp;w=750 750w, https://images.unsplash.com/profile-fb-1589371014-0a78edf93e74.jpg?ixlib=imgixjs-3.3.2&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;h=768&amp;w=768 768w, https://images.unsplash.com/profile-fb-1589371014-0a78edf93e74.jpg?ixlib=imgixjs-3.3.2&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;h=800&amp;w=800 800w, https://images.unsplash.com/profile-fb-1589371014-0a78edf93e74.jpg?ixlib=imgixjs-3.3.2&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;h=900&amp;w=900 900w, https://images.unsplash.com/profile-fb-1589371014-0a78edf93e74.jpg?ixlib=imgixjs-3.3.2&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;h=940&amp;w=940 940w, https://images.unsplash.com/profile-fb-1589371014-0a78edf93e74.jpg?ixlib=imgixjs-3.3.2&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;h=1000&amp;w=1000 1000w, https://images.unsplash.com/profile-fb-1589371014-0a78edf93e74.jpg?ixlib=imgixjs-3.3.2&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;h=1024&amp;w=1024 1024w, https://images.unsplash.com/profile-fb-1589371014-0a78edf93e74.jpg?ixlib=imgixjs-3.3.2&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;h=1080&amp;w=1080 1080w, https://images.unsplash.com/profile-fb-1589371014-0a78edf93e74.jpg?ixlib=imgixjs-3.3.2&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;h=1100&amp;w=1100 1100w, https://images.unsplash.com/profile-fb-1589371014-0a78edf93e74.jpg?ixlib=imgixjs-3.3.2&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;h=1140&amp;w=1140 1140w, https://images.unsplash.com/profile-fb-1589371014-0a78edf93e74.jpg?ixlib=imgixjs-3.3.2&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;h=1152&amp;w=1152 1152w, https://images.unsplash.com/profile-fb-1589371014-0a78edf93e74.jpg?ixlib=imgixjs-3.3.2&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;h=1200&amp;w=1200 1200w, https://images.unsplash.com/profile-fb-1589371014-0a78edf93e74.jpg?ixlib=imgixjs-3.3.2&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;h=1242&amp;w=1242 1242w, https://images.unsplash.com/profile-fb-1589371014-0a78edf93e74.jpg?ixlib=imgixjs-3.3.2&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;h=1300&amp;w=1300 1300w, https://images.unsplash.com/profile-fb-1589371014-0a78edf93e74.jpg?ixlib=imgixjs-3.3.2&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;h=1366&amp;w=1366 1366w"
                                      src="https://images.unsplash.com/profile-fb-1589371014-0a78edf93e74.jpg?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=faces&amp;cs=tinysrgb&amp;fit=crop&amp;h=128&amp;w=128" ix-initialized="ix-initialized">
                                    <div class="upload-circular__progress js-general-uploader-progress-target">
                                    </div> <!-- close .__progress -->
                                </div> <!-- close .upload-circular -->

                                <p class="text-center zeta js-edit-profile-image-trigger-text">Change profile image</p>
                            </a> <!-- close .js -->

                            <div class="user-badges text-left">

                                <label>Badge</label>
                                <div class="user-badges-container">
                                    <p class="zeta no-badge-message text-secondary">
                                        You don't have any badges yet :(
                                    </p>

                                    <ul class="user-badges-list user-badges-list--hidden js-other-badges">
                                        <li class="user-badges-list__item user-badges-list__item--text">
                                            <a id="qa-no-badge" data-remote="true" rel="nofollow" data-method="put" href="/account/badges/0">None</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="col-xs-12 col-sm-8">
                            <div class="form-group">
                                <label for="user_first_name">First name</label>
                                <input class="form-control" type="text" value="David" name="user[first_name]" id="user_first_name">

                            </div> <!-- close .form-group -->

                            <div class="form-group">
                                <label for="user_last_name">Last name</label>
                                <input class="form-control" type="text" value="Yao" name="user[last_name]" id="user_last_name">

                            </div> <!-- close .form-group -->

                            <div class="form-group">
                                <label for="user_email">
                                    Email address
                                </label>
                                <input class="form-control" type="email" value="yaodavidarmel@gmail.com" name="user[email]" id="user_email">

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->
                    </div> <!-- close .row -->

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="user_username">
                                    Username <span class="text-secondary">(only letters, numbers, and underscores)</span>
                                </label>
                                <input class="form-control" type="text" value="daviidy" name="user[username]" id="user_username">

                                <div class="help-block text-secondary">
                                    <p>https://unsplash.com/@<strong>daviidy</strong></p>
                                </div> <!-- close .help-block -->
                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Personal site/portfolio
                                </label>
                                <input class="form-control" placeholder="https://" type="text" name="user[url]" id="user_url">

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_location">Location</label>

                                <div class="input-group">
                                    <input class="form-control" type="text" name="user[location]" id="user_location">
                                </div>


                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_instagram_username">Instagram username</label>

                                <div class="input-group">
                                    <div class="input-group-addon">@</div>
                                    <input class="form-control" type="text" name="user[instagram_username]" id="user_instagram_username">
                                </div>



                                <div class="help-block text-secondary">
                                    <p>So that we can feature you on <a href="https://instagram.com/unsplash">@unsplash</a></p>
                                </div> <!-- close .help-block -->
                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="twitter_username">Twitter username</label>
                                <input type="hidden" name="user[twitter_account_attributes][id]" id="user_twitter_account_attributes_id">
                                <div class="input-group">
                                    <div class="input-group-addon">@</div>
                                    <input type="text" name="user[twitter_account_attributes][username]" id="twitter_username" class="form-control">
                                </div>

                                <div class="help-block text-secondary">
                                    <p>So that we can feature you on <a href="https://twitter.com/unsplash">@unsplash</a></p>
                                </div> <!-- close .help-block -->
                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_bio">Bio</label>

                                <div class="input-with-counter js-character-count-container">
                                    <textarea class="form-control" rows="4" data-character-count="250" name="user[bio]" id="user_bio"></textarea>
                                    <div class="character-count character-count--textarea js-character-count">250</div>
                                </div>


                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_interests">
                                    Interests <span class="text-secondary">(maximum 5)</span>
                                </label>
                                <input type="text" name="user[user_tags_set][custom_tags]" id="user_interests" value="" class="form-control" data-taggable="true" style="display: none;">
                                <div id="user_interests_tagsinput" class="tagsinput" style="width: 100%; min-height: 100%; height: 100%;">
                                    <div id="user_interests_addTag"><input id="user_interests_tag" value="" data-default="add a tag" placeholder="add a tag" class="ui-autocomplete-input" autocomplete="off" style="width: 200px;"></div>
                                    <div class="tags_clear"></div>
                                </div>
                                <div class="help-block text-secondary">
                                    <p>Your interests are generated from the types of photos you like, collect, and contribute.</p>
                                </div> <!-- close .help-block -->

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->
                    </div> <!-- close .row -->

                    <div class="row">
                        <div class="col-xs-12">
                            <h6 class="delta text-weight--medium">Messaging</h6>
                            <div class="form-group">
                                <div class="checkbox checkbox--with-helper">
                                    <label for="user_allow_messages">
                                        <input name="user[allow_messages]" type="hidden" value="0"><input type="checkbox" value="1" checked="checked" name="user[allow_messages]" id="user_allow_messages">
                                        Display a 'Message' button on your profile
                                    </label>
                                    <div class="label__helper">
                                        <span class="text-secondary">Messages will be sent to your email</span>
                                    </div>
                                </div> <!-- close .checkbox -->
                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->
                    </div> <!-- close .row -->

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <input type="submit" name="commit" value="Update account" class="btn btn-default btn-block-level" data-disable-with="···">
                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->
                    </div> <!-- close .row -->
                </form>
            </div> <!-- close .form -->

            <div class="hide">
                <form action="" class="js-general-uploader-s3-form js-edit-profile-image-s3-form" data-callback-method="POST" data-callback-param="file" enctype="multipart/form-data">
                    <input type="file" name="file" id="file" class="js-general-uploader-s3-file-field">
                </form>

                <form class="js-edit-profile-image-form" action="/account/profile_image" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="put"><input type="hidden"
                      name="authenticity_token" value="bbMpoxP1932DrraVaAHqotMDQPc9PUdxreNo+yo7XlbAHHleLhFJvhDoyb4j7eZwkYurin1SkD6zUWoZozEtDg==">

                    <div class="hide js-general-uploader-form">
                    </div>

                    <input type="submit" name="commit" value="Save" class="js-general-uploader-form-submit" data-disable-with="Save">
                </form>
            </div> <!-- close .hide -->

            <script class="js-general-uploader-form-template" type="text/x-tmpl">
                <input name="profile_image[url]" id="profile_image_url" type="text" value="<%= file.url %>">
          <input name="profile_image[filetype]" id="profile_image_filetype" type="text" value="<%= file.filetype %>">
          <input name="profile_image[filepath]" id="profile_image_filesize" type="text" value="<%= file.filepath %>">
          <input name="profile_image[filesize]" id="profile_image_filesize" type="text" value="<%= file.filesize %>">
        </script>


        </div>

    </div>
</section>




<section class="posts-2 followers">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <ul class="nav nav-tabs" role="tablist" id="myTabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#followers" role="tab" data-toggle="tab" aria-expanded="true">Followers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#following" role="tab" data-toggle="tab" aria-expanded="false">Following</a>
                    </li>
                </ul>
                <br><br>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active show" id="followers" aria-expanded="true">

                        <div class="card card-profile">
                            <div class="card-block">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object rounded-circle" src="https://oschoolelearning.com/images/courses/logos/1580161319.png" alt="">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Victoria Stephens</h4>
                                        <p class="media-usermeta"><i class="fa fa-briefcase"></i> Regional Finance Manager</p>
                                    </div>
                                </div><!-- media -->
                                <ul class="card-options">
                                    <li><a class="tooltips" href="" data-toggle="tooltip" title="" data-original-title="View Options">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </a></li>
                                </ul>

                                <div class="people-info">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="info-group">
                                                <label>Location</label>
                                                San Francisco, CA, USA
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="info-group">
                                                <label>Email</label>
                                                christina.hill@email.com
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="info-group">
                                                <label>Phone</label>
                                                386-7521860
                                            </div>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="info-group">
                                                <label>Followers</label>
                                                <h4>1,348</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="info-group">
                                                <label>Following</label>
                                                <h4>232</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                        </div>
                                    </div><!-- row -->
                                </div><!-- panel-info -->
                            </div><!-- card-block -->
                        </div><!-- card -->

                        <div class="card card-profile">
                            <div class="card-block">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object rounded-circle" src="https://oschoolelearning.com/images/courses/logos/1580161319.png" alt="">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Grace King</h4>
                                        <p class="media-usermeta"><i class="fa fa-briefcase"></i> Software Engineer</p>
                                    </div>
                                </div><!-- media -->
                                <ul class="card-options">
                                    <li><a class="tooltips" href="" data-toggle="tooltip" title="" data-original-title="View Options">
                                            <i class="fa fa-ellipsis-v"></i></a></li>
                                </ul>
                                <div class="people-info">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="info-group">
                                                <label>Location</label>
                                                Sydney, Australia
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="info-group">
                                                <label>Email</label>
                                                <i class="fa fa-envelope mr5"></i> floyd.romero@email.com
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="info-group">
                                                <label>Phone</label>
                                                (012) 345 6789
                                            </div>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="info-group">
                                                <label>Followers</label>
                                                <h4>1,348</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="info-group">
                                                <label>Following</label>
                                                <h4>232</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                        </div>
                                    </div><!-- row -->
                                </div><!-- panel-info -->
                            </div><!-- card-block -->
                        </div><!-- card -->

                    </div><!-- tabpanel -->
                    <div role="tabpanel" class="tab-pane fade" id="following" aria-expanded="false">

                        <div class="card card-profile">
                            <div class="card-block">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object rounded-circle" src="https://oschoolelearning.com/images/courses/logos/1580161319.png" alt="">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Danie Thames</h4>
                                        <p class="media-usermeta"><i class="fa fa-briefcase"></i> Interior Designer</p>
                                    </div>
                                </div><!-- media -->
                                <ul class="card-options">
                                    <li><a class="tooltips" href="" data-toggle="tooltip" title="" data-original-title="View Options">
                                            <i class="fa fa-ellipsis-v"></i></a></li>
                                </ul>

                                <div class="people-info">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="info-group">
                                                <label>Location</label>
                                                Cebu City, Philippines
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="info-group">
                                                <label>Email</label>
                                                nicholas.hinkle@email.com
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="info-group">
                                                <label>Phone</label>
                                                (012) 345 6789
                                            </div>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="info-group">
                                                <label>Followers</label>
                                                <h4>508</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="info-group">
                                                <label>Following</label>
                                                <h4>3, 800</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                        </div>
                                    </div><!-- row -->
                                </div><!-- panel-info -->
                            </div><!-- card-block -->
                        </div><!-- card -->

                    </div><!-- tabpanel -->
                </div>

            </div>
        </div>
        <!--/ row -->
    </div>
    <!--/ container -->
</section>



@endsection
