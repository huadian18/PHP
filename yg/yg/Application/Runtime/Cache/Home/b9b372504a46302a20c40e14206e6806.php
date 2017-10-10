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
		<h3 class="text-center">预制事业部2017年修正计划录入（录入后不可修改）</h3>
		<form action="">
			<div class="data-panel">
				<div class="data-title"><span>年计划</span></div>
				<div class="data-content">
					<table class="table table-bordered">
					 <tr>
					 	<th class="text-center">产量</th>
					 	<th class="text-center">产值</th>
					 	<th class="text-center">利润</th>
					 	<th class="text-center">回款</th>
					 </tr>
					 <tr class="text-center">
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 </tr>
					</table>
				</div>
			</div>
			<div class="data-panel">
				<div class="data-title"><span>季度计划</span></div>
				<div class="data-content">
					<table class="table table-bordered">
					 <tr>
					 	<th class="text-center">季度</th>
					 	<th class="text-center">产量</th>
					 	<th class="text-center">产值</th>
					 	<th class="text-center">利润</th>
					 	<th class="text-center">回款</th>
					 </tr>
					 <tr class="text-center">
					 	<td>一</td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 </tr>
					 <tr class="text-center">
					 	<td>二</td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 </tr>
					 <tr class="text-center">
					 	<td>三</td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 </tr>
					 <tr class="text-center">
					 	<td>四</td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 </tr>
					</table>
				</div>
			</div>
			<div class="data-panel">
				<div class="data-title"><span>月计划</span></div>
				<div class="data-content">
					<table class="table table-bordered">
					 <tr>
					 	<th class="text-center">月份</th>
					 	<th class="text-center">产量</th>
					 	<th class="text-center">产值</th>
					 	<th class="text-center">利润</th>
					 	<th class="text-center">回款</th>
					 </tr>
					 <tr class="text-center">
					 	<td>一</td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 </tr>
					 <tr class="text-center">
					 	<td>二</td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 </tr>
					 <tr class="text-center">
					 	<td>三</td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 </tr>
					 <tr class="text-center">
					 	<td>四</td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 </tr>
					 <tr class="text-center">
					 	<td>五</td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 </tr>
					 <tr class="text-center">
					 	<td>六</td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 </tr>
					 <tr class="text-center">
					 	<td>七</td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 </tr>
					 <tr class="text-center">
					 	<td>八</td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 </tr>
					 <tr class="text-center">
					 	<td>九</td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 </tr>
					 <tr class="text-center">
					 	<td>十</td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 </tr>
					 <tr class="text-center">
					 	<td>十一</td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 </tr>
					 <tr class="text-center">
					 	<td>十二</td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 	<td><input type="text"></td>
					 </tr>
					</table>
				</div>
			</div>
			<div class="data-panel">
					<div class="data-title"><span>周计划</span></div>
					<div class="data-content">
						<table class="table table-bordered">
						 <tr>
						 	<th class="text-center">周</th>
						 	<th class="text-center">产量</th>
						 	<th class="text-center">产值</th>
						 	<th class="text-center">利润</th>
						 	<th class="text-center">回款</th>
						 </tr>
						 <tr class="text-center">
						 	<td>一</td>
						 	<td><input type="text"></td>
						 	<td><input type="text"></td>
						 	<td><input type="text"></td>
						 	<td><input type="text"></td>
						 </tr>
						 <tr class="text-center">
						 	<td>二</td>
						 	<td><input type="text"></td>
						 	<td><input type="text"></td>
						 	<td><input type="text"></td>
						 	<td><input type="text"></td>
						 </tr>
						 <tr class="text-center">
						 	<td>三</td>
						 	<td><input type="text"></td>
						 	<td><input type="text"></td>
						 	<td><input type="text"></td>
						 	<td><input type="text"></td>
						 </tr>
						 <tr class="text-center">
						 	<td>四</td>
						 	<td><input type="text"></td>
						 	<td><input type="text"></td>
						 	<td><input type="text"></td>
						 	<td><input type="text"></td>
						 </tr>
						</table>
					</div>
			</div>
			<div class="data-content text-right">
				<button type="button" class="btn btn-primary">提交</button>
			</div>
		</form>
	</div>
</div>

</body>
</html>