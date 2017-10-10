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
			<div id="myAlert" class="alert alert-danger" style="display: none;">
				<a href="javascript:;" class="close go-plan" data-dismiss="alert"><strong>去添加计划</strong></a>
				<strong>提示！</strong>当前部门为添加对应的计划数据。
			</div>
			<div class="alert alert-warning" style="display: none;">失败！未作修改。</div>
			<h3 class="text-center"><?php echo ($departmentName); echo ($year); ?>年修正计划录入</h3>
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
								<td><input type="text" name="year[<?php echo ($year); ?>][0]"></td>
								<td><input type="text" name="year[<?php echo ($year); ?>][1]"></td>
								<td><input type="text" name="year[<?php echo ($year); ?>][2]"></td>
								<td><input type="text" name="year[<?php echo ($year); ?>][3]"></td>
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
								<td><input type="text" name="season[1][0]"></td>
								<td><input type="text" name="season[1][1]"></td>
								<td><input type="text" name="season[1][2]"></td>
								<td><input type="text" name="season[1][3]"></td>
							</tr>
							<!--<tr class="text-center">-->
							<!--<td>二</td>-->
							<!--<td><input type="text" name="season[2][]"></td>-->
							<!--<td><input type="text" name="season[2][]"></td>-->
							<!--<td><input type="text" name="season[2][]"></td>-->
							<!--<td><input type="text" name="season[2][]"></td>-->
							<!--</tr>-->
							<!--<tr class="text-center">-->
							<!--<td>三</td>-->
							<!--<td><input type="text" name="season[3][]"></td>-->
							<!--<td><input type="text" name="season[3][]"></td>-->
							<!--<td><input type="text" name="season[3][]"></td>-->
							<!--<td><input type="text" name="season[3][]"></td>-->
							<!--</tr>-->
							<!--<tr class="text-center">-->
							<!--<td>四</td>-->
							<!--<td><input type="text" name="season[4][]"></td>-->
							<!--<td><input type="text" name="season[4][]"></td>-->
							<!--<td><input type="text" name="season[4][]"></td>-->
							<!--<td><input type="text" name="season[4][]"></td>-->
							<!--</tr>-->
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
								<td><input type="text" name="month[1][0]"></td>
								<td><input type="text" name="month[1][1]"></td>
								<td><input type="text" name="month[1][2]"></td>
								<td><input type="text" name="month[1][3]"></td>
							</tr>
							<tr class="text-center">
								<td>二</td>
								<td><input type="text" name="month[2][0]"></td>
								<td><input type="text" name="month[2][1]"></td>
								<td><input type="text" name="month[2][2]"></td>
								<td><input type="text" name="month[2][3]"></td>
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
							<?php $__FOR_START_14725__=0;$__FOR_END_14725__=$weekNum;for($i=$__FOR_START_14725__;$i < $__FOR_END_14725__;$i+=1){ ?><tr class="text-center">
									<td><?php echo ($i+1); ?></td>
									<td><input type="text" name="week[<?php echo ($i+1); ?>][0]"></td>
									<td><input type="text" name="week[<?php echo ($i+1); ?>][1]"></td>
									<td><input type="text" name="week[<?php echo ($i+1); ?>][2]"></td>
									<td><input type="text" name="week[<?php echo ($i+1); ?>][3]"></td>
								</tr><?php } ?>
						</table>
					</div>
				</div>
				<div class="data-content text-right">
					<input type="hidden" name="department" value="<?php echo ($department); ?>">
					<button type="button" class="btn btn-primary">提交</button>
				</div>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="/Public/static/js/jquery.min.js"></script>
	<script type="text/javascript">
        $(function () {
            var info = {
                    list:'<?php echo (json_encode($list)); ?>',
                	isModified:0,
                };
            var common = {
                init: function () {
                    common.fill();
                },
                fill: function () {
                    var obj =  eval('(' + info.list + ')');
                    console.log(obj);
                    if (obj.length > 0) {
                        //遍历数据填入表中
                        $.each(obj, function (i, n) {
                            if (n.interval_type == '1') {
                                $("input[name='year[" + n.interval_value + "][0]']").val(n.output);
                                $("input[name='year[" + n.interval_value + "][1]']").val(n.output_value);
                                $("input[name='year[" + n.interval_value + "][2]']").val(n.profit);
                                $("input[name='year[" + n.interval_value + "][3]']").val(n.payment);
                            } else if (n.interval_type == '2') {
                                $("input[name='season[" + n.interval_value + "][0]']").val(n.output);
                                $("input[name='season[" + n.interval_value + "][1]']").val(n.output_value);
                                $("input[name='season[" + n.interval_value + "][2]']").val(n.profit);
                                $("input[name='season[" + n.interval_value + "][3]']").val(n.payment);

                            } else if (n.interval_type == '3') {
                                $("input[name='month[" + n.interval_value + "][0]']").val(n.output);
                                $("input[name='month[" + n.interval_value + "][1]']").val(n.output_value);
                                $("input[name='month[" + n.interval_value + "][2]']").val(n.profit);
                                $("input[name='month[" + n.interval_value + "][3]']").val(n.payment);
                            } else if (n.interval_type == '4') {
                                $("input[name='week[" + n.interval_value + "][0]']").val(n.output);
                                $("input[name='week[" + n.interval_value + "][1]']").val(n.output_value);
                                $("input[name='week[" + n.interval_value + "][2]']").val(n.profit);
                                $("input[name='week[" + n.interval_value + "][3]']").val(n.payment);
                            }
                        });
                    }else{
                        $("#myAlert").css('display','block');
                        $("input").attr('readonly','readonly');
                        $(".btn").attr('disabled',true);
					}
                },
                goPlan:function () {
                    var department = $("input[name='department']").val();
					window.location.href = '/home/operate/plan/department/'+department;
                }
            };

            //初始化
            common.init();
            
            $(".go-plan").on("click",function () {
				common.goPlan();
            });
            
            $("input").on('change',function () {
				info.isModified = 1;
                $(".alert-warning").css('display','none');
            });

            $(".btn-primary").on("click", function () {
                if(!info.isModified){
                    $(".alert-warning").css('display','block');
                    return;
				}
                var form = $("form").serialize();
                $.ajax({
                    url: '<?php echo U("reviseSave");?>',
                    type: 'post',
                    data: form,
                    dataType: 'json',
                    success: function (result) {
                        if (result.status) {
                            window.location.href = '/home/operate/index';
                        } else {
                            $(".alert-warning").css('display','block');
                        }
                    },
                    error: function () {
                        $(".alert-warning").css('display','block');
                    }
                });
            });
        })
	</script>

</body>
</html>