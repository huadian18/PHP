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

            <!--<?php if(is_array($navList)): foreach($navList as $key=>$v): ?>-->
            <!--<li role="presentation">-->
            <!--<a href="javascript:void(0);">-->
            <!--<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span><?php echo ($v["name"]); ?>-->
            <!--</a>-->
            <!--<ul class="aside-menu">-->
            <!--<li>2017年经营计划</li>-->
            <!--<li>2017年修正计划</li>-->
            <!--<li>2017年指标对比</li>-->
            <!--</ul>-->
            <!--</li>-->
            <!--<?php endforeach; endif; ?>-->
        </ul>
        <!--右边主要内容-->
        <div class="main">
            <form>
                <div class="form-group col-md-2 col-sm-3">
                    <select class="form-control">
                        <option>年</option>
                        <option>季</option>
                        <option>月</option>
                        <option>周</option>
                    </select>
                </div>
                <div class="form-group col-md-2 col-sm-3">
                    <select class="form-control">
                        <option>同比</option>
                        <option>环比</option>
                    </select>
                </div>
            </form>
            <div class="container chartList">
                <div class="row">
                    <div class="charItem col-md-6" id="chart1"></div>
                    <div class="charItem col-md-6" id="chart2"></div>
                    <div class="charItem col-md-6" id="chart3"></div>
                    <div class="charItem col-md-6" id="chart4"></div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="/Public/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/static/js/echarts.common.min.js"></script>
    <script type="text/javascript" src="/Public/static/js/index.js"></script>
    <script type="text/javascript">
        $(function () {
            var com = {
                navList: function () {
                    $.ajax({
                        url: '<?php echo U("getNavlist");?>',
                        type: 'get',
                        dataType: 'json',
                        success: function (result) {
                            //加载数据
                            var asideNav = $("#asideNav"), nav;
                            $.each(result.data, function (i, n) {
                                nav = "<li role=\"presentation\">"
                                    + "<a href=\"javascript:void(0);\">"
                                    + "<span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span>"
                                    + n.name
                                    + "</a>"
                                    + "<ul class=\"aside-menu\">"
                                    + "<li data-department='" + n.id + "' data-type='1' data-year=" + result.year + ">" + result.year + "年经营计划</li>"
                                    + "<li data-department='" + n.id + "' data-type='2' data-year=" + result.year + ">" + result.year + "年修正计划</li>"
                                    + "<li data-department='" + n.id + "' data-type='3' data-year=" + result.year + ">" + result.year + "年指标对比</li>"
                                    + " </ul>"
                                    + " </li>";
                                asideNav.append(nav);
                            });
                        }
                    });
                },
                init: function () {
                    com.navList();
                }
            };

            com.init();


        });
    </script>

</body>
</html>