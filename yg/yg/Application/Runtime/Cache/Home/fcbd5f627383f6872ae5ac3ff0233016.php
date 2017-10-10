<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo ($title); ?></title>
	<link rel="stylesheet" href="/Public/static/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Public/static/css/index.css">
</head>
<body>
<nav class="navbar-default navbar-blue">
  <div class="container">
    <!-- logo -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#">brand</a>
    </div>
    <!-- 用户名 -->
    <ul class="nav navbar-nav navbar-right">
       <li><a href="<?php echo U('operate/index');?>" class="btn-menu">Admin</a></li>
    </ul>
  </div>
</nav>

<div class="wrapper container">
	<!--侧边导航栏-->
	<ul class="aside-nav" id="asideNav">
	<li role="presentation">
		<a href="/">
			<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>首页
		</a>
	</li>
	<li role="presentation">
		<a href="javascript:void(0);">
			<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>年计划录入
		</a>
		<ul class="aside-menu-add">
			<?php if(is_array($departmentList)): foreach($departmentList as $k=>$v): ?><li><a href="<?php echo U('Operate/plan',array('department'=>$v['id']));?>"><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; ?>
		</ul>
	</li>
	<li role="presentation">
		<a href="javascript:void(0);">
			<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>年修正录入
		</a>
		<ul class="aside-menu-add">
			<?php if(is_array($departmentList)): foreach($departmentList as $k=>$v): ?><li><a href="<?php echo U('Operate/revise',array('department'=>$v['id']));?>"><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; ?>
		</ul>
	</li>
	<li role="presentation">
		<a href="javascript:void(0);">
			<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>当周计划录入
		</a>
		<ul class="aside-menu-add">
			<?php if(is_array($departmentList)): foreach($departmentList as $k=>$v): ?><li><a href="<?php echo U('Operate/complete',array('department'=>$v['id']));?>"><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; ?>
		</ul>
	</li>
</ul>
	<!--侧边导航栏-->
	<!--右边主要内容-->
	<div class="main">
		<div class="panel panel-default panel-notic">
		  <div class="panel-body">
		  	<?php echo ($showContent); ?>
		  </div>
		</div>
	</div>
</div>

</body>
</html>