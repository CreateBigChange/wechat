<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Login PHP</title>
	<link  href="/wechat/Public/css/style.css" rel="stylesheet"/>
	<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
	<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.css" rel="stylesheet">



    <link href="/wechat/Public/Olive/css/bootstrap.min.css" rel="stylesheet"><!-- BOOTSTRAP CSS  -->
	<link href="/wechat/Public/Olive/css/bootstrap-reset.css" rel="stylesheet"><!-- BOOTSTRAP CSS  -->
    <link href="/wechat/Public/Olive/assets/font-awesome/css/font-awesome.css" rel="stylesheet"><!-- FONT AWESOME CSS  -->
    <link href="/wechat/Public/Olive/css/style.css" rel="stylesheet"><!-- THEME BASIC CSS  -->
    <link href="/wechat/Public/Olive/css/style-responsive.css" rel="stylesheet"><!-- THEME RESPONSIVE CSS  -->

	<script src="/wechat/Public/js/jquery-1.8.2.min.js"></script>
	<script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.js"></script>
		
	<style type="text/css">
		
	input{
		font-size: 50px;
		height: 100px;
	}
	button{
		font-size: 50px;
	}
	.BaseColor{
			color:#66D9EF;
	}
	</style>
</head>
<body>




<!-- 模态框（Modal） -->
<div class="modal fade" id="Follow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:50%;font-size:38px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                	<h4 class="modal-title" id="myModalLabel" style="font-size:38px;">Follow</h4>
                </center>
            </div>
            <div class="modal-body" >
            	<center>Press And Hold QR Code To Follow</center>
				<center><img src="/wechat/Public/resouce/img/qrcode_for_gh_34a285efdb20_430.jpg"></center>
           		
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="font-size:28px;">Close</button>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<!--modal-->

<!--关注微信公众号的模态框-->

<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:50%;font-size:38px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                	<h4 class="modal-title" id="myModalLabel" style="font-size:38px;">Verify</h4>
                </center>
            </div>
            <div class="modal-body" style="height: 250px;">
            

            
            	<form role="form">
				  <div class="form-group">
				    <span>
				    	<input type="text" class="form-control" placeholder="Phone Number" style="width:100%;height:80px;float: left;font-size:28px;">
				    	
				    </span>


				    
				  </div>


				  <div class="form-group">
				    <input type="text" class="form-control" placeholder="PIN" style="float:left;width:60%;height:80px;margin-top:50px;font-size:28px;">

				    <button class="btn btn-info" style="font-size:28px;float: right;margin-top:70px;">Get PIN</button>
				  
				  </div>

				 </form>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="font-size:28px;">Close</button>
                <button type="button" class="btn btn-primary" style="font-size:28px;">Confirm</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<!--modal-->



	<div class="lg-container" style="width:80%;" >
	<center>
<div style="border-radius:50%; overflow:hidden;width:270px;height:270px;margin-top:100px;border:20px solid #66D9EF;">
	<img src="/wechat/Public/Olive/img/profile-avatar.jpg" style="width: 200px;height:200px;border-radius: 0.5;"/>
	
</div>
<div style="font-size:38px;">你的好友分享给你东西啦啦啦</div>
</center>
		<h1  class="BaseColor" style="font-size: 120px;margin-top:30px;"> Register </h1>
		<form action="" id="lg-form" name="lg-form" method="post">
			
			<div>
				<input  type="text" name="username" id="username" placeholder="Phone num "/>
			</div>
			<div>
				<input  type="text" name="username" id="username" placeholder="Chinese Name"/>
			</div>

			<div>

				<input type="text" name="EnglishName" id="username" placeholder="English Name"/>
			</div>

			<div>
				
		    <!--语言的添加-->
			<div id="content">

			</div>
			<!--语言的添加-->
<button class="btn  btn-default BaseColor" id="more" type='button' style="float:right;margin-bottom: 30px;">+language</button>
<script type="text/javascript">
	
	$("#more").click(function(){

			var text='<input type="text" name="Language" id="username" placeholder="Language"/>';
				text+='<div class="panel-body"><span class="rating" style="font-size:80px;">';
				text+='<span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>';
                text+='</span></div>';
            
			$("#content").append(text);
	})


</script>
			

			</div>
			
			<div>
				<label for="Interest">Interest:</label>
				<input type="text" name="Interest" id="password" placeholder="Interest" />
			</div>
			<div>
				<label for="Interest">Major:</label>
				<input type="text" name="Interest" id="password" placeholder="Major" />
			</div>
			<div>
				<label for="Interest">Nation:</label>
				<input type="text" name="Nation" id="password" placeholder="Nation" />
			</div>
			<div>
				
				<button  data-toggle="modal" data-target="#myModal" class="btn btn-default" style="margin-top:10px;color:#66D9EF;">Message Verify</button>
			</div>
			<div id="img1" >				
				<button type="button" id="AddImg" class="btn btn-default BaseColor" style="float: left;">Upload Img</button>
				
				<img src="" style="width:300px;height:300px;margin-left: 40px;" id="imgsrc"/>
				

			</div>

			<input type="file" style="display:none;" name="" id="file"/>

			
			
			<script type="text/javascript">

				$("#AddImg").click(function(){

					$("#file").click();


				})

			    $("#file").change(function(){

			    	if($(".photos").length==1){
			    		return 0;
			    	}
			    	
			        img=document.getElementById("file").files[0]

			        var reader=new FileReader();

			        reader.readAsDataURL(img);

			        reader.onload=function(e){

			        	$("#imgsrc").attr("src", reader.result);
			            //$("#img1").append("<img   class='photos' style='width:300px;height: 300px;float: right'  src="+reader.result+" />");
			        	
			        }
			    })
			</script>

			<div>				
				<button type="button"  class="btn btn-default BaseColor"id="login" style="width:100%;" data-target="#Follow" data-toggle="modal">Finish</button>
			</div>
			


		</form>
		<div id="message"></div>
	</div>
</body>
</html>