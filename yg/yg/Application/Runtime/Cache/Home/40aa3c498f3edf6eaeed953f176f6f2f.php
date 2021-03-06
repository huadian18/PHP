<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
		    <li><a href="#" class="btn-menu">Admin</a></li>
		</ul>
	</div>
</nav>
<div class="wrapper container">
	<!--侧边导航栏-->
	<ul class="aside-nav" id="asideNav">
	  <li role="presentation">
		<a href="index.html">
		   <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>首页
		</a>
	  </li>
	  <li role="presentation">
	  	<a href="javascript:void(0);">
	  		<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>年计划录入
	  	</a>
	  	<ul class="aside-menu-add">
	  		<li>预制事业部</li>
	  		<li>预办事业部</li>
	  		<li>河北榆构</li>
	  		<li>北京诚丰</li>
	  		<li>榆构模板</li>
	  	</ul>
	  </li>
	  <li role="presentation">
	  	<a href="javascript:void(0);">
	  		<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>年修正录入
	  	</a>
	  	<ul class="aside-menu-add">
	  		<li>预制事业部</li>
	  		<li>预办事业部</li>
	  		<li>河北榆构</li>
	  		<li>北京诚丰</li>
	  		<li>榆构模板</li>
	  	</ul>
	  </li>
	  <li role="presentation">
	  	<a href="javascript:void(0);">
	  		<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>当周计划录入
	  	</a>
	  	<ul class="aside-menu-add">
	  		<li>预制事业部</li>
	  		<li>预办事业部</li>
	  		<li>河北榆构</li>
	  		<li>北京诚丰</li>
	  		<li>榆构模板</li>
	  	</ul>
	  </li>
	</ul>
	<!--右边主要内容-->
	<div class="main">
		<h3 class="text-center">预制事业部每周计划完成录入</h3>
		<form action="">
			<div class="data-panel">
				<div class="data-content">
					<table class="table table-bordered">
						<tr>
						 	<th class="text-center">周</th>
						 	<th class="text-center">产量</th>
						 	<th class="text-center">产值</th>
						 	<th class="text-center">利润</th>
						 	<th class="text-center">回款</th>
						 	<th class="text-center">操作</th>
						</tr>
						<tr class="text-center">
						 	<td>6</td>
						 	<td><span class="insertInput">--</span></td>
						 	<td><span class="insertInput">--</span></td>
						 	<td><span class="insertInput">--</span></td>
						 	<td><span class="insertInput">--</span></td>
						 	<td id="insertWeek" style="cursor: pointer;">插入当前周</td>
						</tr>
						<tr class="text-center">
						 	<td>5</td>
						 	<td>111</td>
						 	<td>222</td>
						 	<td>333</td>
						 	<td>444</td>
						 	<td>无</td>
						</tr>
						<tr class="text-center">
						 	<td>4</td>
						 	<td>111</td>
						 	<td>222</td>
						 	<td>333</td>
						 	<td>444</td>
						 	<td>无</td>
						</tr>
						<tr class="text-center">
						 	<td>3</td>
						 	<td>111</td>
						 	<td>222</td>
						 	<td>333</td>
						 	<td>444</td>
						 	<td>无</td>
						</tr>
						<tr class="text-center">
						 	<td>2</td>
						 	<td>111</td>
						 	<td>222</td>
						 	<td>333</td>
						 	<td>444</td>
						 	<td>无</td>
						</tr>
						<tr class="text-center">
						 	<td>1</td>
						 	<td>111</td>
						 	<td>222</td>
						 	<td>333</td>
						 	<td>444</td>
						 	<td>无</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="data-content text-right" style="display:none;float:right;" id="submitBtn">
				<button type="button" class="btn btn-primary">提交</button>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript" src="/Public/static/js/jquery.min.js"></script>
<script type="text/javascript">
	$(function(){
		$("#insertWeek").on("click",function(){
			if(this.innerHTML == "取消"){
				$(".insertInput").html("--");
				$(this).html("插入当前周");
				$("#submitBtn").css("display","none");
			}else{
				$(".insertInput").html("<input type='text'>");
				$(this).html("取消");
				$("#submitBtn").css("display","inline-block");
			}
		})
	})
</script>
</body>
</html>