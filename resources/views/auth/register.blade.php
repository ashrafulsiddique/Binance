<!DOCTYPE html>
<html ng-app="bnbApp" ng-cloak>
<head>
	<meta charset="utf-8" />
	<meta name="format-detection" content="telephone=no,email=no,address=no">
	<title ng-bind="('binancetitle')+' - '+webtitle"></title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	
	
	 <style>
	 body,html{height:100%;}
	 body{padding-bottom:0;}
	 
	 .verifyLayout{box-sizing:border-box;height:100%;min-height:608px;min-width:870px;background:#f7f7f7;padding-bottom:82px;position:relative;}
	 .verifyLayout .main{width:518px;padding:30px 30px 40px;background:#fff;position:absolute;left:50%;top:55%;text-align:center;
	 	-webkit-transform:translate(-50%,-50%);
	 	-moz-transform:translate(-50%,-50%);
	 	-ms-transform:translate(-50%,-50%);
	 	-o-transform:translate(-50%,-50%);
	 	transform:translate(-50%,-50%);
	 	margin-top:-41px;
	 }
	 .verifyLayout .main .logo{display:inline-block;height:64px;}
	 .verifyLayout .main .icon-logo{margin-bottom:24px;height:40px;}
	 .verifyLayout .main .messageBox{margin:0 auto 10px;}
	 .verifyLayout .main .alert{width:100%;text-align:left;box-sizing:border-box;background:none;font-size:12px;white-space:nowrap;padding:0;line-height:100%;margin-top:44px;}
	 .verifyBottom{padding:15px 0;text-align:center;width:100%;position:absolute;left:0;bottom:0;background:#f7f7f7}
	 .verifyBottom .item{font-size:14px;color:#999;margin-bottom:10px;}
	 .verifyBottom .item.lang span{cursor:pointer;}
	 .verifyBottom .item.lang span.black{color:#333;}
	 .verifyBottom .item.lang a,.verifyBottom .item.lang a:visited{color:#999;}
	 .verifyBottom .item.lang a:hover{color:#333;}
	 </style>
	
</head>
<body>
		

		<div class="verifyLayout" ng-controller="verifyLayoutCtr">
			<div class="logo-wrapper">
					<a href="https://www.binance.com" class="logo"><img src="./images/logo-en.jpg"  /></a>
				</div>

<div  ng-controller="loginCtr">
	
	<div class="f-prz formWrapLR">
		<form class="loginReg-form"  id="login-form">
			<h3 class="LRtitle"><span>Register</span></h3>
			<div class="importantInfo">
				<p><i class=""></i><strong> </strong></p>
				
			</div>
			
			<p class="f-nomargin Validform_checktip"></p>
			
			<div class="filed">
				<input  type="email" name="email" placeholder="Email Address" id="email"  class="ipt fillemail" datatype="e" errormsg="{{'Invalid email address'}}" nullmsg="{{'This field is required'}}"/>
			</div>
			
			<div class="filed">
				<input  type="password" placeholder="Password" id="pwd"  class="ipt pwd" datatype="*"  nullmsg="{{'This field is required'}}"/>
				<input type="text"  name="password" ng-model="loginParams.password" id="password" style="display:none;"/>
			</div>
	
	        <div class="filed">
				<input  type="password" name="password" placeholder="Confirm Password" id="pwd"  class="ipt pwd" datatype="e" errormsg="{{'Invalid password'}}" nullmsg="{{'This field is required'}}"/>
			</div>
	     
		 
		       <div class="filed">
				<input  type="password" name="password" placeholder="Referral ID (optional)" id="pwd"  class="ipt pwd" datatype="e" errormsg="{{'Invalid password'}}" nullmsg="{{'This field is required'}}"/>
			</div>
		 
		 
			<div class="filed">
				
				<input  type="submit" value="Register" id="login-btn"  class="btn btn-orange btn-block" ng-disabled="!loginParams.email || !loginParams.pwd" ng-show="!loadingGeetest"/>
			</div>
			
	
			<div class="filde">
				<p class="login-tip f-cb"><span class="f-fr" ng-if="notChinese">Al-ready register? <a href="{{ route('register') }}" class="yellow">Log In</a></span><a href="{{ route('login') }}" class="yellow f-fl"></a></p>
			</div>
			
		</form>
	
	</div>
</div>


			</div>
			<div class="verifyBottom">
				<div class="item lang">
                    <a href="/">Home</a>　<a ng-href="{{}}" target="blank">Support</a> | 
                    <span ng-click="switching('en')" ng-class="{true:'black',false:''}[cur_lang=='en']">English</span> &nbsp;&nbsp;<span ng-click="switching('cn')" ng-class="{true:'black',false:''}[cur_lang=='cn']"></span>
				</div>
				<div class="item">© 2017 - 2018 Binance.com. All rights reserved</div>
			</div>
		</div>
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109992029-1"></script>
		 <script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('config', 'UA-109992029-1');
		 </script>
		
		
		
</body>
</html>
