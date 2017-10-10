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
		<h3 class="text-center"><?php echo ($departmentName); ?>每周计划完成录入</h3>
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
						 	<td><?php echo ($maxWeek+1); ?></td>
						 	<td><span class="insertInput">--</span></td>
						 	<td><span class="insertInput">--</span></td>
						 	<td><span class="insertInput">--</span></td>
						 	<td><span class="insertInput">--</span></td>
						 	<td id="insertWeek" style="cursor: pointer;">插入当前周</td>
						</tr>
						<?php if(is_array($list)): foreach($list as $key=>$v): ?><tr class="text-center">
								<td><?php echo ($v["interval_value"]); ?></td>
								<td><?php echo ($v["output"]); ?></td>
								<td><?php echo ($v["output_value"]); ?></td>
								<td><?php echo ($v["profit"]); ?></td>
								<td><?php echo ($v["payment"]); ?></td>
								<td>无</td>
							</tr><?php endforeach; endif; ?>

					</table>
					<ul class="pagination">
						<?php
 $prePage = $page > 1 ? $page : 1; $nextPage = $page >= $maxPage ? $maxPage : $page+1; ?>
						<li ><a href="<?php echo U('Operate/complete',array('department'=>$department,'p'=>$prePage));?>">&laquo;</a></li>
						<?php if(is_array($pageList)): foreach($pageList as $key=>$v): $active=($page==$v) ? "active" : "";?>
							<li class="<?php echo ($active); ?>"><a href="<?php echo U('Operate/complete',array('department'=>$department,'p'=>$v));?>"><?php echo ($v); ?></a></li><?php endforeach; endif; ?>
						<li><a href="<?php echo U('Operate/complete',array('department'=>$department,'p'=>$nextPage));?>">&raquo;</a></li>
					</ul>
				</div>
			</div>
			<div class="data-content text-right" style="display:none;float:right;" id="submitBtn">
				<input type="hidden" id="department" name="department" value="<?php echo ($department); ?>">
				<input type="hidden" id="weekNum" name="weekNum" value="<?php echo ($maxWeek+1); ?>">
				<button type="button" class="btn btn-primary">提交</button>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript" src="/Public/static/js/jquery.min.js"></script>
<script type="text/javascript">
	$(function(){

	    $(".btn").on("click",function () {
			//检查数据是否为空
			var $input = $("input[name^='week']"),
				flag=true,
				data = [],
				department=$("#department").val();
            	weekNum=$("#weekNum").val();

            $input.each(function (i) {
                if(!$(this).val()){
                    flag = false;
                    return false;
				}
				data.push($(this).val());
            });
            if(!flag){
                alert('不可为空');
                return false;
			}
			//提交
			console.log(JSON.stringify(data));
            $.ajax({
                url: '<?php echo U("completeSave");?>',
                type: 'post',
                data: {week:data,department:department,weekNum:weekNum},
                dataType: 'json',
                success: function (result) {
                    if (result.status) {
                        alert(result.message);
                        window.location.reload();
                    } else {
                        alert(result.message);
                    }
                },
                error: function () {
                    alert('no');
                }
            });
        });

		$("#insertWeek").on("click",function(){
			if(this.innerHTML == "取消"){
				$(".insertInput").html("--");
				$(this).html("插入当前周");
				$("#submitBtn").css("display","none");
			}else{
//				$(".insertInput").html("<input type='text'>");
				$(".insertInput").html(function (i) {
					return "<input type='text' name='week["+i+"]'>";
                });
				$(this).html("取消");
				$("#submitBtn").css("display","inline-block");
			}
		})
	})
</script>

</body>
</html>