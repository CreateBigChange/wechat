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

<!--modal-->


<!-- 模态框（Modal） -->
<div class="modal fade" id="direction" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:5px;font-size:38px;">
    <div class="modal-dialog" style="width:95%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                	<h4 class="modal-title" id="myModalLabel" style="font-size:38px;">Direction</h4>
                </center>
            </div>
            <div class="modal-body" >
            
			<div class="list-group">
			    <a href="#" class="list-group-item active title-color">
			        <h1 class="list-group-item-heading ">
			            5 星
			        </h1>
			    </a>
			    <a href="#" class="list-group-item ">
			        <p class="list-group-item-text ">
			            母语使用者
			        </p>
			    </a>
			    			    <a href="#" class="list-group-item active title-color">
			        <h1 class="list-group-item-heading ">
			            4 星
			        </h1>
			    </a>
			    <a href="#" class="list-group-item">
			        <p class="list-group-item-text">
			           流利，准确，偶有错误
						能有效运用英语,虽然偶尔出现不准确、不适当和误解。大致可将复杂的英语掌握的不错，也能理解详细的推理。
			        </p>
			    </a>
			    			    <a href="#" class="list-group-item active title-color">
			        <h1 class="list-group-item-heading">
			            3 星
			        </h1>
			    </a>
			    <a href="#" class="list-group-item">
			        <p class="list-group-item-text">
			            能够较流利使用英语 
						大致能有效运用英语，虽然有不准确、不适当和误解发生但能使用并理解比较复杂的英语，特别是在熟悉的语境下。
			        </p>
			    </a>
			    			    <a href="#" class="list-group-item active title-color">
			        <h1 class="list-group-item-heading">
			            2 星
			        </h1>
			    </a>
			    <a href="#" class="list-group-item">
			        <p class="list-group-item-text">
			            能够较流利使用英语 
						大致能有效运用英语，虽然有不准确、不适当和误解发生但能使用并理解比较复杂的英语，特别是在熟悉的语境下。
				
			        </p>
			    </a>
			    			    <a href="#" class="list-group-item active title-color">
			        <h1 class="list-group-item-heading">
			            1 星
			        </h1>
			    </a>
			    <a href="#" class="list-group-item">
			        <p class="list-group-item-text">
			            掌握简单词组 
						除非在熟悉的语境下，几乎只能使用孤立单词或短句表达最基本的信息，不能达成有效沟通。难以听懂或者看懂英语。
			        </p>
			    </a>
	
			</div> 
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
                	<h4 class="modal-title" id="myModalLabel" style="font-size:38px;">验证</h4>
                </center>
            </div>
            <div class="modal-body" style="height: 250px;">
            

            
            	<form role="form">
				  <div class="form-group">
				    <span>
				    	<input type="text" class="form-control" placeholder="电话号码" style="width:100%;height:80px;float: left;font-size:28px;">
				    	
				    </span>


				    
				  </div>


				  <div class="form-group">
				    <input type="text" class="form-control" placeholder="验证码" style="float:left;width:60%;height:80px;margin-top:50px;font-size:28px;">

				    <button type="button" class="btn btn-info" id="getpit" style="font-size:28px;float: right;margin-top:70px;">获取验证码</button>
				  
				  </div>

				 </form>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="font-size:28px;">关闭</button>
                <button type="button" class="btn btn-primary" style="font-size:28px;">确认</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<!--modal-->


	<div class="lg-container" style="width:80%;" >
		<h1  class="BaseColor" style="font-size: 120px;margin-top:30px;"> 注册 </h1>
		<form action="" id="lg-form" name="lg-form" method="post">
			
			<div>

				<input  type="text" name="username" id="username" placeholder="中文名"/>
			</div>

			<div>

				<input type="text" name="EnglishName" id="username" placeholder="英文名"/>
			</div>

			<div>
				
		    <!--语言的添加-->
			<div id="content">

			</div>
			<!--语言的添加-->
<button class="btn  btn-default BaseColor" id="more" type='button' style="float:right;margin-bottom: 30px;">+语言</button>
<img src="/wechat/Public/resouce/img/u=5599099874283859303&fm=21&gp=0.png" style="width:50px;float:left;margin-top:15px;margin-right: 30px;" data-toggle="modal" data-target="#direction"/>

<script type="text/javascript">
	
	$("#more").click(function(){

			var text='<input type="text" name="Language" id="username" placeholder="语言"/>';
				text+='<div class="panel-body"><span class="rating" style="font-size:80px;">';
				text+='<span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>';
                text+='</span></div>';
            
			$("#content").append(text);
	})


</script>
			

			</div>
			<div>
				<label for="Interest">兴趣:</label>
				<input type="text" name="Interest" id="password" placeholder="兴趣" />
			</div>
			<div>
				<label for="Interest">专业:</label>
				<input type="text" name="Interest" id="password" placeholder="专业" />
			</div>


			<div>
				
				<button   data-toggle="modal" data-target="#myModal" class="btn btn-default" style="margin-top:10px;color:#66D9EF;">短信验证</button>
			</div>


			<div id="img1" >				
				<button type="button" id="AddImg" class="btn btn-default BaseColor" style="float: left;">上传图片</button>
				
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


			     $("#getpit").click(function(){
			    	$(this).attr("disable");
			    	var i=60;
			    	var s=setInterval(function(){

						$("#getpit").text(i);
						i=i-1;
						if(i==0){
							$("#getpit").text("获取验证码");
							clearInterval(s);
						}
			    	},1000)
			    })
			</script>

			<div style="overflow: auto; ">				
				<a href="<?php echo U('Find') ?>"><button type="button"  class="btn btn-default BaseColor" id="login" style="width:100%;"  >完成</button>
				</a>
				
					 		<input type="checkbox" style="float: left; margin-left:100px;width:30px;height:30px;margin-top:20px;" />
					    	<div style="float: left;font-size:28px;margin-top:15px;margin-left:10px;">接受 <a href="#">《Student in terms of Service》</a>
					    	<div>  
				
		 		
			</div>
			


		</form>
		<div id="message"></div>
	</div>
</body>
</html>