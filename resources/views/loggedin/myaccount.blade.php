@extends('layouts.app')

@section('content')

<head>
	<meta charset="utf-8" />
	<meta name="format-detection" content="telephone=no,email=no,address=no">
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body ng-controller="usercenterCtr" ng-cloak>	
<div class="container">

<style>

/* reset */
html,body,fieldset,images,iframe,abbr{border:0;}
i,cite,em,var,address,dfn{font-style:normal;}
[hidefocus],summary{outline:0;}
li{list-style:none;}
h1,h2,h3,h4,h5,h6,small{font-size:100%;}
sup,sub{font-size:83%;}
pre,code,kbd,samp{font-family:inherit;}
q:before,q:after{content:none;}
textarea{overflow:auto;resize:none;}
label,summary{cursor:default;}
a,button{cursor:pointer;}
h1,h2,h3,h4,h5,h6,em,strong,b{font-weight:bold;}
del,ins,u,s,a,a:hover{text-decoration:none;}
body,textarea,input,button,select,keygen,legend{outline:0;}
html{height:100%;}
body{background:#fff;font-family:'Arial',"Microsoft YaHei", sans-serif;line-height:100%;position:relative;min-height:100%;box-sizing:border-box;padding-bottom: 124px;}

/* function */
.f-cb:after,.f-cbli li:after{display:block;clear:both;visibility:hidden;height:0;overflow:hidden;content:".";}
.f-cb,.f-cbli li{zoom:1;}
.f-ib{display:inline-block;*display:inline;*zoom:1;}
.f-dn{display:none;}
.f-db{display:block;}
.f-fl{float:left;}
.f-fr{float:right;}

/**/
.btn{display:inline-block;cursor:pointer;font-size:14px;color:#666;padding:9px 12px;border:1px solid #d4d4d4;line-height:100%;background:#f5f5f5;}
.btn:disabled{cursor:default;}
.btn-block{padding:9px 0;width:100%;text-align:center;}


/*table*/
.table{width:100%;border:1px solid #e6e6e6;}
.table th,.table td{padding:11px 15px;line-height:100%;font-size:12px;color:#999;text-align:center;border-top:1px solid #e6e6e6;}
.table th{color:#999;background:#fafafa;;border:none;}
.table td{color:#666;}
.table.table-stri th,.table.table-stri td{padding:0 10px;height:29px;line-height:29px;}


/*panel*/
.panel{width:100%;border:1px solid #e6e6e6;margin-bottom:15px;background:#fff;}
.nodata{text-align:center;margin:20px;}
.nodata img{width:60px;}


.basicInfo {
	padding: 30px 0 40px;
	border: 1px solid #e6e6e6;
	position: relative;
	line-height: 100%;
	margin: 15px 0;
}


.switch {
	display: inline-block;
	vertical-align: middle;
	cursor: pointer;
}

.switch input {
	display: none;
}

.switch span {
	display: inline-block;
	padding: 0 6px;
	width: 37px;
	height: 20px;
	line-height: 20px;
	border-radius: 11px;
	background: #d4d4d4;
	position: relative;
	color: #fff;
	font-size: 12px;
	text-align: right;
}

.switch span:after {
	content: "OFF";
	line-height: 22px;
}

.switch span i {
	display: inline-block;
	width: 18px;
	height: 18px;
	border-radius: 100%;
	background: #fff;
	position: absolute;
	left: 0;
	top: 1px;
	box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-ms-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}


.loginHistory {
	border: 1px solid #d4d4d4;
}

.SecurityCenter>.f-fl, .SecurityCenter>.f-fr {
	width: 550px;
}

.SecurityCenter>.f-fl .panel:last-of-type, .SecurityCenter>.f-fr .panel:last-of-type
	{
	margin-bottom: 0;
}

.SecurityCenter .imgicon {
	display: inline-block;
	width: 38px;
	height: 38px;
	vertical-align: middle;
	background: url("images/icons.png") no-repeat center;
}

.SecurityCenter .img-email {
	background-position: 0 0;
}

.SecurityCenter .img-mobile {
	background-position: 0 -45px;
}

.SecurityCenter .img-password {
	background-position: 0 -97px;
}

.SecurityCenter .img-api {
	background-position: 0 -193px;
}

.SecurityCenter .img-google {
	background-position: 0 -144px;
}

.SecurityCenter .img-address {
	background-position: 0 -241px;
	top: -5px !important;
}

.SecurityCenter .item {
	padding: 0 130px 0 54px;
	position: relative;
}

.SecurityCenter .item+.item {
	padding-top: 57px;
	padding-bottom: 14px;
	margin-top: 50px;
	border-top: 1px solid #d4d4d4;
}

.SecurityCenter .item .imgicon {
	position: absolute;
	left: 8px;
	top: 0;
}

.SecurityCenter .item .imgicon.img-api {
	top: 24px;
}

.SecurityCenter .item .btn {
	padding: 0;
	width: 104px;
	height: 32px;
	text-align: center;
	line-height: 32px;
	position: absolute;
	right: 0;
	top: 3px;
	background: #fff;
	color: #666;
	border-color: #d4d4d4;
}

.SecurityCenter .item .btn:hover {
	background: #e8b342;
	color: #fff;
	border-color: #e8b342;
}

.SecurityCenter .item .switch {
	position: absolute;
	right: 24px;
	top: 10px;
}

.SecurityCenter .item+.item .imgicon {
	top: 62px;
}

.SecurityCenter .item+.item .btn {
	top: 62px;
}

.SecurityCenter .item h4, .SecurityCenter .item p {
	font-size: 14px;
	color: #666;
	line-height: 1.3;
}

.SecurityCenter .item h4 {
	margin-bottom: 4px;
}

.SecurityCenter .item h4 .status {
	color: #e8b342;
	margin-left: 12px;
}

.SecurityCenter .item p a {
	color: #e8b342;
	text-decoration: underline;
}


.itemBox .itemTitle {
	height: 46px;
	line-height: 46px;
	margin-top: 30px;
	font-size: 16px;
}

.itemBox .itemTitle p.desc {
	font-size: 12px;
	color: #999;
}

.itemBox .itemTitle a {
	top: 20px;
}

.safeTip {
	width: 488px;
	text-align: center;
	background: #fff
}


.yzChoose .imgicon {
	display: inline-block;
	width: 36px;
	height: 36px;
	vertical-align: middle;
	background: url(images/yzchoose.png) no-repeat center;
	position: absolute;
}

.showContent {
	height: auto;
	overflow: hidden;
	border-left: 1px solid #f8ebcf;
	border-right: 1px solid #f8ebcf;
	border-bottom: 1px solid #f8ebcf;
	padding: 15px 20px 10px 20px;
	font-size: 12px;
	color: #454545;
	display: none;
}


.whiteLists-switch .iconfont>.tip {
	font-size: 12px;
	color: #333;
	line-height: 20px;
	padding: 10px 16px;
	box-shadow: 0 0 10px rgba(0, 0, 0, .3);
	width: 208px;
	position: absolute;
	z-index: 999;
	background: #fff;
	display: none;
	right: -50px;
	font-family: 'Arial', "Microsoft YaHei", sans-serif;
}



.SecurityCenter.addressMana .imgicon, .SecurityCenter.addressMana .btn {
	top: 50% !important;
	-webkit-transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	-o-transform: translateY(-50%);
	transform: translateY(-50%);
}

.SecurityCenter.addressMana .imgicon {
	height: 28px;
}

.SecurityCenter.addressMana .btn {
	width: 145px;
}

.imgiconfishma {
	position: absolute;
	left: 5px;
	top: 0;
	display: inline-block;
	width: 38px;
	height: 38px;
	vertical-align: middle;
	background: url(images/fishma.jpg) no-repeat center;
}

</style>
		<div class="myAccount itemBox" ng-controller="myAccountCtr">
			<div class="basicInfo f-cb">
				<div class="f-fl left">
					<img src="images/img-user.png" class="usertx"/>
				</div>
			</div>
			<div class="SecurityCenter f-cb">
				<div class="f-fl">
					<div class="panel">
					
						<div class="panel-body" style="padding: 12px 15px;height: 63px">
							<div class="item" style="padding-top: 11px">
								<span class="imgicon img-password"  img src="images/img-user.png"></span>
								<h4>Login Password</h4>
								
								<a href="#" class="btn">Change</a>
							</div>
						</div>
					</div>
	
						<div class="panel">
				
				<div class="panel-body" style="padding: 22px 15px">
					<div class="item">
						<span class="imgiconfishma"></span>
						
						<h4 ng-if="fishflag">Anti-Phishing Code<span class="diaoyuma"></span></h4>
						<p>By verifying your Anti-Phishing Code, you will be able to prevent phishing attempts from fake Binance websites or email addresses.</p>
						<a ng-if="fishflag"  href="#" class="btn">Change</a>
						<a ng-if="!fishflag" href="#" class="btn">Setting</a>
					</div>
				</div>
			</div>
			
			<div class="panel">
				
				<div class="panel-body" style="padding: 25px 15px">
					<div class="item">
						<span class="imgicon img-api"></span>
						<h4>API</h4>
						<p ng-if="cur_lang=='en'">Creating an API private key provides access to markets and real-time trading services on Binance via a third-party site or application. View <a href="https://github.com/binance-exchange/binance-official-api-docs" Target="_blank">API documentation</a></p>
						<a style="top: 22px" href="#" class="btn btn-orange" ng-if="!user.apiCount">Enable</a>
						<a style="top: 22px"  href="#" class= "btn btnAPI ng-binding">API Setting</a>
					</div>
				</div>
			</div>
		</div>
		
		<div class="f-fr">
			<div class="panel">
			
				<div class="panel-body">
					<div class="item">
						<span class="imgicon img-mobile"></span>
						<h4>SMS Authentication<span>user.mobileNo</span></h4>
						<p>phoneOperate</p>
						 <a href="#" class="btn btn-orange" ng-if="user.userData&&user.mobileNo==null">Enable</a>
						 <a href="#" class="btn" ng-if="user.mobileNo!=null">Disable</a>
						
				
					</div>
					<div class="item">
						<span style="left: 2px" class="imgicon img-google"></span>
						<h4>Google Authentication<span class="status" ng-if="user.gauth" style="display:none;">Enable</span></h4>
						<p>googleOperate</p>
						<a href="#" class="btn btn-orange" ng-if="user.userData && !user.gauth">Enable</a>
						<a href="#" class="btn" ng-if="user.gauth">Disable</a>
					</div>
				</div>
			</div>
		</div>
	</div>
 	<div class="SecurityCenter addressMana" style="margin-top:15px;">
		<div class="panel">
			<div class="panel-title f-cb">
				<div class="f-fr whiteLists-switch">
					<label class="switch" ng-click="safeTip()">
						<input type="checkbox" ng-change="switchWhiteList()" ng-disabled="!user.gauth && !user.mobileSecurity"/>
						<span><i></i></span>
					</label>
					<span ng-if="user.withdrawWhiteStatus">Whitelist On</span>
					<span ng-if="!user.withdrawWhiteStatus">Whitelist Off</span>
					<span class="iconfont icon-warn" style="vertical-align: top;">
					 
					  <div class="tip" ng-if="cur_lang!='tw' && cur_lang!='cn' && cur_lang!='pl'">
					  	When this function is turned on, your account will only be able to withdraw to whitelisted withdrawal addresses. 
						When this function is turned off, your account is able to withdraw to any withdrawal address.
					  </div>
					</span>
				</div>
				Withdrawal Address Management
			</div>
			<div class="panel-body">
				<div class="item" style="padding: 0 170px 0 54px; ">
					<span class="imgicon img-address"></span>
					<p ng-if="cur_lang=='cn'"></p>
					<p ng-if="cur_lang=='tw'"></p>
					<p ng-if="cur_lang!='cn' && cur_lang!='tw' && cur_lang!='nl'&& cur_lang!='pt'&& cur_lang!='kr'&& cur_lang!='it'&& cur_lang!='pl'">Address Management allows you to save and write memos for each of your withdrawal addresses. The optional Whitelist function helps protect your funds by only allowing withdrawals to whitelisted addresses.</p>
					<a href="#" class="btn btn-orange" style="top:-7px;">Address Management</a>
				</div>
			</div>
		</div>
	</div>


	<div class="deviceList" ng-if="deviceSwitch">
		<div class="itemTitle">
		Device Management
		</div>
		<table class="table table-stri table-thBorder">
			<colgroup style="width:250px;"></colgroup>
			<colgroup style="width:250px;"></colgroup>
			<colgroup style="width:250px;"></colgroup>
			<colgroup style="width:250px;"></colgroup>
			<colgroup style="width:198px;"></colgroup>
			<tr>
				<th class="f-left">Device</th>
				<th class="f-left">Location</th>
				<th class="f-left">Recent activity</th>
				<th class="f-left">IP Address</th>
				
			</tr>

			<tr ng-repeat="d in deviceList">
				<td colspan="5" class="row">
					<table class="table table-stri" style="border:none;">
						<colgroup style="width:250px;"></colgroup>
						<colgroup style="width:250px;"></colgroup>
						<colgroup style="width:250px;"></colgroup>
						<colgroup style="width:250px;"></colgroup>
						<colgroup style="width:198px;"></colgroup>
						<tr>
							<td class="f-left">DeviceName</td>
							<td class="f-left">LocationCity</td>
							<td class="f-left">LoginTime</td>
							<td class="f-left">LoginIp </td>
							<td class="f-right">
								
							

							</td>
						</tr>
					</table>
					<table class="table table-stri historyDetail" style="border:none;display:none;">
						<colgroup style="width:250px;"></colgroup>
						<colgroup style="width:250px;"></colgroup>
						<colgroup style="width:250px;"></colgroup>
						<colgroup style="width:250px;"></colgroup>
						<colgroup style="width:198px;"></colgroup>
						<tr ng-repeat="h in historyList | limitTo:6" ng-hide="$index ==0">
							<td class="f-left"></td>
							<td class="f-left">Ip Location </td>
							<td class="f-left">OperateTime </td>
							<td class="f-left">ip</td>
							<td class="f-right">
								<a ng-if="$index == 5" >view more</a>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>

		<div ng-if="deviceList==undefined" style="text-align: center;margin: 30px 0"><img alt="" src="images/loading-0.gif"></div>
		<div class="nodata" ng-if="deviceList.length==0">
			<img src="images/zups.png"/>
			<p>You have no device history</p>
		</div>
	</div>
	
	
	<div class="itemTitle">Distribution History</div>
	<table class="table table-stri table-thBorder">
		<colgroup style="width:150px;"></colgroup>
		<colgroup></colgroup>
		<colgroup></colgroup>
		<colgroup></colgroup>
		<colgroup style="width:400px;"></colgroup>
		<tr>
			<th>Time</th>
			<th>Type</th>
			<th>Coin</th>
			<th>Amount</th>
			<th>Note</th>
		</tr>
		<tr ng-repeat="d in dividends">
			<td>operate Time</td>
			<td>Distribution</td>
			<td>Asset</td>
			<td>Amount</td>
			<td>Info</td>
		</tr>
	</table>
<div ng-if="loadingFlag" style="text-align: center;margin: 30px 0"><img alt="" src="images/loading-0.gif"></div>
	<div class="nodata" ng-if="!dontshow">
		<img src="images/zups.png"/>
		<p>You have no distribution history</p>
	</div>

	
	
	<div class="itemTitle">Last login</div>
	<table class="table table-stri table-thBorder">
		<colgroup style="width:150px;"></colgroup>
		<colgroup></colgroup>
		<colgroup style="width:150px;"></colgroup>
		<tr>
			<th>Login Time</th>
			<th>IP Address</th>
			<th width="30%">Location</th>
		</tr>
		<tr ng-repeat="log in logs">
			<td>log.loginTime</td>
			<td>log.ipAddress</td>
			<td width="30%">log.ipLocation</td>
		</tr>
	</table>
	
	
	<div id="safeTip"  style="display: none" >
		<div class="safeTip" >
			<img class="jgimg" alt="" src="images/jgicon.png">
			<div class="decp">
			<p>We strongly recommend you to enable 2FA on your account </p>
		    <p>Please choose how you wish to receive 2FA code</p>
			</div>
			<div class="yzChoose">
			<a href="#" class="btgoogle" ><span class="imgicon img-google1"></span><p >Google Authentication</p></a>
			<a ng-show="user.mobileNo!=null" onclick="layer.closeAll()"   class="btphone"><span class="imgicon img-phone"></span><p>SMS Authentication</p></a>
			<a ng-show="user.mobileNo==null" href="#"   class="btphone"><span class="imgicon img-phone"></span><p>SMS Authentication</p></a>
			</div>
			<div class="smalltip"><span>I understand the risks for not enabling 2FA</span><a style="    font-size: 12px;padding: 8px 12px;" onclick="layer.closeAll()" class="btn btn-orange">Skip for now</a></div>
	       
	</div>
	</div>
	
	
	
	<div class="verify" id="verify" style="display:none;">
			
				<form class="verify-form" action="1" method="post" id="googleVerify-form" ng-if="user.gauth && !user.mobileSecurity" >
					<div class="verify-title">Google Authentication Code</div>
					<input type="hidden" name="operationType" id="operationType" value="google"/>
					<div class="filed">
						<input type="text" id="password" name="verifyCode"  class="ipt" datatype="*"  nullmsg="This field is required" autofocus ng-keyup="autoSubmit($event)"/>
						<p class="Validform_checktip f-nomargin f-left"></p>
					</div>
					<div class="filed">
						<input type="submit" value="submit"  class="btn btn-orange btn-block" id="googleVerify-btn"/>
					</div>
				</form>
				
				
			
				<form class="verify-form" action="1" method="post" id="mobile-form" ng-if="!user.gauth && user.mobileSecurity">
					<div class="verify-title">SMS Authentication Code</div>
					<input type="hidden" name="operationType" id="operationType" value="mobile"/>
					<div class="filed">
						<input type="text" name="mobile"  readonly class="ipt" ng-model="user.mobileNo" autofocus />
						<p class="Validform_checktip f-nomargin"></p>
					</div>
					<div class="filed">
						<input style="width:183px;" type="text" id="verifyCode" name="verifyCode"  class="ipt" datatype="*"  nullmsg="This field is required" ng-keyup="autoSubmit($event)"/>
						<span id="sendBtn" class="btn btn-grey" ng-click="send(user.mobileNo)">Send SMS</span>
						<p class="Validform_checktip f-nomargin f-left"></p>
					</div>
					<div class="filed">
						<input type="submit" value="Submit"  class="btn btn-orange btn-block" id="mobile-btn"/>
					</div>
				</form>
				
			
			<div ng-if="user.gauth && user.mobileSecurity" >
				<div class="btns" ng-init="type=1">
					<span class="btn" ng-class="{true:'cur',false:''}[type==1]" ng-click="type=1;">Google Authentication</span><span class="btn" ng-class="{true:'cur',false:''}[type==2]" ng-click="type=2;">SMS Authentication</span>
				</div>
				<form class="verify-form" action="1" method="post" id="both-form">
					<div class="label f-left" ng-if="type==1">Google Authentication Code</div>
					<div class="label f-left" ng-if='type==2'>SMS Authentication Code</div>
					<div class="filed" ng-if="type==1">
					<input type="hidden" name="operationType" id="operationType" value="google"/>
						<input type="text" name="verifyCode"  class="ipt" datatype="*"  nullmsg="This field is required" autofocus ng-keyup="autoSubmit($event)" />
						<p class="Validform_checktip f-nomargin f-left"></p>
					</div>
					<div ng-if='type==2'>
						<div class="filed">
						<input type="hidden" name="operationType" id="operationType" value="mobile"/>
							<input type="text" name="mobile" readonly id="mobile" readonly class="ipt" ng-model="user.mobileNo"/>
							<p class="Validform_checktip f-nomargin"></p>
						</div>
						<div class="filed">
							<input style="width:183px;" type="text" id="password" name="verifyCode"  class="ipt" datatype="*"  nullmsg="This field is required" autofocus ng-keyup="autoSubmit($event)" />
							<span id="sendBtn" class="btn btn-grey" ng-click="send()">Send SMS</span>
							<p class="Validform_checktip f-nomargin f-left"></p>
						</div>
					</div>
					<div class="filed">
						<input type="submit" value="Submit}"  class="btn btn-orange btn-block" id="both-btn"/>
					</div>
				</form>
				
			 </div>
		</div>	
</div>


			</div>
		</div>

</body>
@endsection
