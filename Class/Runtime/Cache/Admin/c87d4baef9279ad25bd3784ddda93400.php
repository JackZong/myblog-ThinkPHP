<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Blog</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
<meta name="author" content="Carmen"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="./Public/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="./Public/assets/global/css/me.css" rel="stylesheet" type="text/css"/>
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<!-- END PAGE STYLES -->
<link rel="shortcut icon" href="./Public/assets/global/img/favicon.ico"/>
<style>
#login-text,#login-box{

}
body{
   background: #888;

}
.container{
   width: 60%;
 }
#login-area{
   margin-top: 150px;

}
.bg-text img{
   margin-top: -110px;
   margin-left: -95px;
   z-index: -1;
}
.panel-login{
   height: 350px;
   position: relative;
   border: 2px solid #eee;
   border-radius:0;
}
.panel-login .headline{
     border-bottom: 1px solid #e2e2e2;
     height: 51px;
}
.panel-body{
  margin: 20px;
}
.input-group{
  margin: auto;

}
.input-group #input{
  border-radius:0;
  }
.input-group input[type=text]{
   border-radius: 2px;
  }
.input-group input[type=password]{
   border-radius: 2px;
  }
.input-group button[type*=submit]{
   width:30%;
  }
.friend-link{
  color: white;
  text-align: center;
}
.friend-link a{
  color: white;
  text-decoration: none;
}
</style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>
<!-- BEGIN PAGE-HEADER -->
<section class="page-header">
    <div class="background" id="bg" style="position: fixed;width: 100%;height: 100%;margin:0 auto;z-index: -1;">
	   <img class="background" id="bg" alt="" src="http://qzs.qq.com/qzone/v6/v6_config/upload/41b3a1041f210b0df7d06b67189ef217.jpg" style="width: 1474px; height: 1013px; top: -432px;">
	</div>

<div class="container">
<div class="row" id="login-area">
	<div class="col-md-6" id="login-text">
		<div class="bg-text">
			<img src="./Public/assets/global/img/博主中心.png">		
			<img src="./Public/assets/global/img/slogan.png">	
			</div>			
	</div>	
<div class="col-md-6">
         <div class="panel panel-login">
           <div class="headline">
            
           </div>

           <div class="panel-body">
           <div class="input-group input-group-lg">
              <form action="<?php echo U('Admin/Index/doLogin');?>" method="post">
               <input type="text" class="form-control" placeholder="用户名" name="user_name">
		      <br><br><br>
		       <input type="password" class="form-control" placeholder="密码" name="password">
		     <br><br><br>
		  
              <input type="text" name="verifyImg">
              <img id="verifyImg" src="<?php echo U('Admin/Index/verify');?>" onclick="fleshVerify()" />
              <button type="button submit" class="btn btn-success pull-left">登录</button>		     
		    <script language="JavaScript">
                function fleshVerify(){ 
                var time = new Date().getTime();
              document.getElementById('verifyImg').src="<?php echo U('Admin/Index/verify');?>"+time();
            </script> 
		       </form>
		   </div>
           </div>
    
     <div class="login-end">

     </div>
</div>
</div>
</div>
</div>
</section>
<!-- END PAGE-HEADER -->
<!-- BEGIN PAGE-BODY -->
<section class="page-body">
	
		 <div class="friend-link" style="width: 500px;margin: 90px auto;">
			  <p>
			  <a href="">返回主页</a> |
			   <a href="">博客</a> |
			    <a href="">优酷小站</a> |
			     <a href="">生活</a> |
			      <a href="">科技</a>
			  </p>
					
			 </div>
		

</section>
<!-- END PAGE-BODY -->
<!-- BEGIN PAGE-FOOTER -->

<!-- END PAGE-FOOTER -->
<!-- BEGIN JAVASCRIPTS -->
<!-- BEGIN CORE PLUGINS -->
<script src="./Public/assets/plugins/jquery/jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="./Public/assets/plugins/bootstrap/js/bootstrap.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN CORE SCRIPTS -->
<script src="./assets/global/js/me.js" type="text/javascript"></script>
<!-- END CORE SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<!-- END PAGE LEVEL SCRIPTS -->
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>