<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="/wechat/Public/js/jquery-1.8.2.min.js"></script>

	<link href="/wechat/Public/Olive/css/bootstrap.min.css" rel="stylesheet"><!-- BOOTSTRAP CSS  -->
	<link href="/wechat/Public/Olive/css/bootstrap-reset.css" rel="stylesheet"><!-- BOOTSTRAP CSS  -->
	<style type="text/css">
		.logo{
			width: 100%;
		}
		.share_font{
			    font-size: 48px;
    			color: #000;
    			line-height: 1.5;
    			font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,STHeiti,"Microsoft Yahei",sans-serif;
		}
	</style>
</head>
<body>
		<center><img class="logo" src="/wechat/Public/resouce/img/share.jpg" /></center>

		<center class="share_font">送给朋友10元优惠xxxx</center>
		<center class='share_font' style="color:#9A9999"><a><奖励规则</a></center>


		<center style="margin-top: 200px;font-size:20px;">扫描二维码分享</center>
		
		<center >
			
			<img src="/wechat/Public/resouce/img/code/1492271192.png">
		</center>
		<center style="margin-top: 38px;font-size:35px;display: none" id="share">右上角分享给好友获取奖励</center>
		<center><button id="button" class="btn btn-info" style="width:80%;height: 60px;font-size:38px;margin-top: 30px;"> 分享给朋友</button></center>
<script type="text/javascript">
	$("#button").click(function(){

	$("#share").show()
	})
</script>
</body>
</html>