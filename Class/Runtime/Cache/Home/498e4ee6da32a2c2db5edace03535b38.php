<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Hello World</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
<meta name="author" content="JackZong"/>
<link href="/Blog2.0/Public/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="/Blog2.0/Public/assets/global/css/me.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="/Blog2.0/Public/assets/global/img/favicon.ico"/>
</head>
<body>
<!-- BEGIN PAGE-HEADER -->
<section class="page-header">
	<nav class="navbar navbar-default">
	  <div class="container">
	   <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	    	<!--屏幕分辨率变小后显示菜单按钮-->
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <!--结束屏幕分辨率变小后显示菜单按钮-->
	      <!-- <div class="navbar-brand"></div> --><!-- 头部动画暂不显示 -->
	    </div>
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="<?php echo U('Index/index');?>">首页 <span class="sr-only">(current)</span></a></li>
	      		<?php if(is_array($navs)): $i = 0; $__LIST__ = $navs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(empty($vo['children'])): ?><li><a href="<?php echo U('Article/category',array('id'=>$vo['id']));?>"><?php echo ($vo['name']); ?></a></li>
	      			<?php else: ?>
	      				 <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
				          		<?php echo ($vo['name']); ?><span class="caret"></span></a>
				          <ul class="dropdown-menu" role="menu">
				          	<?php if(is_array($vo['children'])): $i = 0; $__LIST__ = $vo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ch): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Article/category',array('id'=>$ch['id']));?>"><?php echo ($ch['name']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				          </ul>
				        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>      
	      </ul>
	      <form class="navbar-form navbar-right" role="search" action="<?php echo U('Index/query');?>" method="post">
	        <div class="form-group">
	          <input type="text" class="form-control" name="search" placeholder="Search" style="border:hidden;border-radius: 50px;">
	        </div>
	   <!--      <button type="submit" class="btn btn-default">Submit</button> -->
	      </form>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav> 
	
	<div class="banner">
		<!-- <div class="container">
			<h5 class="sub-title">真正的安全感，来自你对自己的信心，是你每个阶段性目标的实现，<br>
			而真正的归属感，在于你的内心深处，对自己命运的把控，<br>
			因为你最大的对手永远都是自己。</h5>
			<img class="avatar-img img-circle" src="/Blog2.0/Public/assets/global/img/avatar.jpg">
		</div> -->
	</div>
</section>
<!-- END PAGE-HEADER -->
<!-- BEGIN PAGE-BODY -->
<section class="page-body">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				
	<div class="headline">
     <h3>
     	<span class="section-head-label"></span>
		搜索结果<br><br><br><span class="glyphicon glyphicon-search" aria-hidden="true"></span>找到" <span style="color: #dd5862;font-size: 1.2em;"><?php echo ($keyword); ?></span>"相关内容 <span style="color: #dd5862;font-size: 1.2em;"><?php echo ($count); ?></span> 条
    </h3>
	</div>
	<div class="article-list">
	 <?php if(is_array($query)): $i = 0; $__LIST__ = $query;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$k): $mod = ($i % 2 );++$i;?><dl class="article">
			<div class="title_time">
			<div class="row">
			<div class="col-md-1" style="line-height:0;margin-top:4px;padding-left:0;">
			<span style="font-size: 60px; overflow:hidden;color:green;">9</span>
			</div>
			<div class="col-md-11">

			<a href="<?php echo U('Article/detail',array('id'=>$k['id']));?>" title="<?php echo ($k['title']); ?>"><?php echo ($k['title']); ?></a>
			<div class="artitle_time_date">5&nbsp小时前</div>
			</div>
			</div>
		</div> 	
		<dd class="article_image">
		<a href="<?php echo U('Article/detail',array('id'=>$k['id']));?>" title="<?php echo ($k['title']); ?>">	<img class="img" src="/Blog2.0/Public/assets/global/<?php echo ($k['img_file']); ?>" alt="图片已烧焦"></a>
		</dd>

		<dd>
			<div class="content">
				<p><?php echo (mb_substr($k['content'],0,200,'utf-8')); ?>...</p> 					
			</div>
		</dd>		
		<dd class="good">
			<div class="row">
				<div class="col-md-3">
					<i class="glyphicon glyphicon-folder-open"></i>&nbsp;&nbsp;<?php echo ($k['category_name']); ?>

				</div>
				<div class="col-md-9" style="float: right;">
					<i class="glyphicon glyphicon-heart" style="color: red;font-size: 1.2em;"></i><!-- <?php echo ($k['update_time']); ?> -->120
					<i class="glyphicon glyphicon-eye-open"></i>&nbsp;&nbsp;<?php echo ($k['hits']); ?>
				</div>
			</div>
		</dd>
		</dl><?php endforeach; endif; else: echo "" ;endif; ?> 
	 	</div>
		<div class="article-page">
			 <?php echo ($page); ?>
			<!-- <div> 
				<a class="prev" href="/ClassBlog/index.php?m=Home&c=Index&a=index&p=1">上一页</a> 
				<a class="num" href="/ClassBlog/index.php?m=Home&c=Index&a=index&p=1">1</a>
				<span class="current">2</span>
				<a class="num" href="/ClassBlog/index.php?m=Home&c=Index&a=index&p=3">3</a>
				<a class="next" href="/ClassBlog/index.php?m=Home&c=Index&a=index&p=3">下一页</a>  
				<span class="rows">共 12 条记录</span> 
			</div> -->
		</div>
	

			</div>
			



















		</div>
	</div>
</section>
<!-- END PAGE-BODY -->
<!-- BEGIN PAGE-FOOTER -->
<div class="jiandao"></div>
<section class="page-footer">
<div class="container">
	<div class="row">

		<div class="col-md-4">
		<div class="about-wrapper">
			<h4 class="foot-item-head">文章归档</h4>
			<ul>
			<?php if(is_array($month)): $i = 0; $__LIST__ = $month;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;?><li><a class="ln-about" href="<?php echo U('Index/month',array('month'=>$m));?>">2015年<?php echo ($m); ?>月</a></li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</div>
	<div class="col-md-4">
		<h4 class="foot-item-head">友情链接</h4>
		<?php if(is_array($friendLink)): $i = 0; $__LIST__ = $friendLink;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$f): $mod = ($i % 2 );++$i;?><a href="<?php echo ($f['url']); ?>"><div><?php echo ($f['name']); ?></div></a><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
	<div class="col-md-4">
			<h4 class="foot-item-head">关注作者</h4>
		<a target="_blank" href="http://sighttp.qq.com/authd?IDKEY=336567eb346023870e32c21c531a5e99b5b4687bfee0ebec"><img border="0" src="http://3gimg.qq.com/qq_product_operations/im/2015/logo_w.png" alt="点击这里给我发消息" title="点击这里给我发消息"></a>
		</div>
	</div>

</div>
</div>
	</div>
</div>

</section>
<!-- END PAGE-FOOTER -->
<!-- BEGIN JAVASCRIPTS -->
<!-- BEGIN CORE PLUGINS -->
<script src="/Blog2.0/Public/assets/plugins/jquery/jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="/Blog2.0/Public/assets/plugins/bootstrap/js/bootstrap.js" type="text/javascript"></script>

<!-- END CORE PLUGINS -->
<!-- BEGIN CORE SCRIPTS -->
<script src="/Blog2.0/Public/assets/global/js/me.js" type="text/javascript"></script> 
<!-- END CORE SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<!-- END PAGE LEVEL SCRIPTS -->
<!-- END JAVASCRIPTS -->

 <script type="text/javascript">
$(document).ready(function() {
	$("li").click(function(){
	
		$(this).addClass("active");
	
		
	});
	
});
$(document).ready(function(){
	$('.jiandao').on('click',function(){
		

	})
	
	
})
</script> 

</body>
<!-- END BODY -->
</html>