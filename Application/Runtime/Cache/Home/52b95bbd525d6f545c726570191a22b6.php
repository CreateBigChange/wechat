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
	textarea{
		border: 1px solid rgba(51,51,51,.5);
	    -webkit-border-radius: 10px;
	    -moz-border-radius: 10px;
	    border-radius: 10px;
	    padding: 5px;
	    line-height: 60px;
	    width: 100%;
	    font-family: 'Oleo Script', cursive;
	    text-align: left;
	    font-size: 50px;
	    height: 200px;
	}
	textarea::-webkit-input-placeholder{color:#E5E6E6;}
	textarea::-moz-placeholder{color:#E5E6E6;}
	textarea:-moz-placeholder{color:#E5E6E6;}
	.title-color{
		background: #54B6D1 !important;
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
			            5 stars
			        </h1>
			    </a>
			    <a href="#" class="list-group-item ">
			        <p class="list-group-item-text ">
			            Expert User. Has fully operational command of the language： appropriate，accurate and fluent with complete understanding.
			        </p>
			    </a>
			    			    <a href="#" class="list-group-item active title-color">
			        <h1 class="list-group-item-heading ">
			            4 stars
			        </h1>
			    </a>
			    <a href="#" class="list-group-item">
			        <p class="list-group-item-text">
			           	Good User. Has operational command of the language,though with occasional inaccuracies,inappropriacies and misunderstandings in some situations. Generally handles complex language well and understands detailed reasoning
			        </p>
			    </a>
			    			    <a href="#" class="list-group-item active title-color">
			        <h1 class="list-group-item-heading">
			            3 stars
			        </h1>
			    </a>
			    <a href="#" class="list-group-item">
			        <p class="list-group-item-text">
			            Competent User. Has generally effective command of the language despite some inaccuracies,inappropriacies and misunderstandings. Can use and understand fairly complex language,particularly in familiar situations.
			        </p>
			    </a>
			    			    <a href="#" class="list-group-item active title-color">
			        <h1 class="list-group-item-heading">
			            2 stars
			        </h1>
			    </a>
			    <a href="#" class="list-group-item">
			        <p class="list-group-item-text">
			            Limited User. Basic competence is limited to familiar situations. Has frequent problems in understanding and expression. Is not able to use complex language.
				
			        </p>
			    </a>
			    			    <a href="#" class="list-group-item active title-color">
			        <h1 class="list-group-item-heading">
			            1 stars
			        </h1>
			    </a>
			    <a href="#" class="list-group-item">
			        <p class="list-group-item-text">
			            Intermittent User. No real communication is possible except for the most basic information using isolated words or short formulae in familiar situations and to meet immediate needs. Has great difficulty understanding spoken and written Engli
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

				    <button type="button" id="getpit" class="btn btn-info" style="font-size:28px;float: right;margin-top:70px;">Get PIN</button>
				  
				  </div>

				 </form>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="font-size:28px;">Close</button>
                <a href="<?php echo U('Activity')?>"></a><button type="button" class="btn btn-primary" style="font-size:28px;">Confirm</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<!--modal-->


	<div class="lg-container" style="width:80%;" >
		<h1  class="BaseColor" style="font-size: 120px;margin-top:30px;"> Register </h1>
		<form action="" id="lg-form" name="lg-form" method="post">
			
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
			<img src="/wechat/Public/resouce/img/u=5599099874283859303&fm=21&gp=0.png" style="width:50px;float:left;margin-top:15px;margin-right: 10px;" data-toggle="modal" data-target="#direction"/>


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
				<label for="Interest">Intruduction:</label>
				<textarea type="text" name="Nation" id="password" placeholder="individual resume" ></textarea> 
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

			    $("#getpit").click(function(){
			    	$(this).attr("disable");
			    	var i=60;
			    	var s=setInterval(function(){

						$("#getpit").text(i);
						i=i-1;
						if(i==0){
							$("#getpit").text("Get PIN");
							clearInterval(s);
						}
			    	},1000)
			    })
			</script>

			<div style="overflow: auto; ">				
				
				<button type="button"  class="btn btn-default BaseColor" id="login" style="width:100%;"  >Finish</button>
				
					 		<input type="checkbox" style="float: left; margin-left:100px;width:30px;height:30px;margin-top:20px;" />
					    	<div style="float: left;font-size:28px;margin-top:15px;margin-left:10px;">Accept <a href="#">《Student in terms of Service》</a>
					    	<div>  
			</div>
		</form>
		<div id="message"></div>
	</div>
	<script type="text/javascript">
		
	$("#login").click(function(){

			window.location.href="<?php echo U('LaunchActivity')?>"
	})

	</script>
</body>
</html>