$(function(){
	/*侧边栏*/
	$("#asideNav").on("click",function(e){
		var target = e.target;
		if(target.nodeName === "A"){			
			$(target).next().toggle();
		}
	})
	

        // 指定图表的配置项和数据
        var option1 = {
            title: {
                text: '集团年产量同比（%）',
                textStyle:{
                	fontSize: 15
                }
            },
  			 legend: {
		        data: ['年度产量计划目标', '年度产量实际完成'],
		        right:0
		    },
            xAxis: {
                data: ["2014","2015","2016","2017"]
            },
            yAxis: {},
            series: [{
                name: '年度产量计划目标',
                type: 'bar',
                barGap: '-100%',
                barWidth: 30,
                data: [50, 30, 46, 50]
            },{
            	name: '年度产量实际完成',
                type: 'bar',
                barWidth: 30,
                data: [5, 20, 36, 10]
            }]
        };
        var option2 = {
            title: {
                text: '集团年产值同比（%）',
                textStyle:{
                	fontSize: 15
                }
            },
  			 legend: {
		        data: ['年度产量计划目标', '年度产量实际完成'],
		        right:0
		    },
            xAxis: {
                data: ["2014","2015","2016","2017"]
            },
            yAxis: {},
            series: [{
                name: '年度产量计划目标',
                type: 'bar',
                barGap: '-100%',
                barWidth: 30,
                data: [50, 30, 46, 50]
            },{
            	name: '年度产量实际完成',
                type: 'bar',
                barWidth: 30,
                data: [5, 20, 36, 10]
            }]
        };
        var option3 = {
            title: {
                text: '集团年利润同比（%）',
                textStyle:{
                	fontSize: 15
                }
            },
  			 legend: {
		        data: ['年度产量计划目标', '年度产量实际完成'],
		        right:0
		    },
            xAxis: {
                data: ["2014","2015","2016","2017"]
            },
            yAxis: {},
            series: [{
                name: '年度产量计划目标',
                type: 'bar',
                barGap: '-100%',
                barWidth: 30,
                data: [50, 30, 46, 50]
            },{
            	name: '年度产量实际完成',
                type: 'bar',
                barWidth: 30,
                data: [5, 20, 36, 10]
            }]
        };
        var option4 = {
            title: {
                text: '集团年回款同比（%）',
                textStyle:{
                	fontSize: 15
                }
            },
  			 legend: {
		        data: ['年度产量计划目标', '年度产量实际完成'],
		        right:0
		    },
            xAxis: {
                data: ["2014","2015","2016","2017"]
            },
            yAxis: {},
            series: [{
                name: '年度产量计划目标',
                type: 'bar',
                barGap: '-100%',
                barWidth: 30,
                data: [50, 30, 46, 50]
            },{
            	name: '年度产量实际完成',
                type: 'bar',
                barWidth: 30,
                data: [5, 20, 36, 10]
            }]
        };



        // 使用刚指定的配置项和数据显示图表。
        
        // 基于准备好的dom，初始化echarts实例
        var myChart1 = echarts.init(document.getElementById('chart1'));
        var myChart2 = echarts.init(document.getElementById('chart2'));
        var myChart3 = echarts.init(document.getElementById('chart3'));
        var myChart4 = echarts.init(document.getElementById('chart4'));
        myChart1.setOption(option1);
        myChart2.setOption(option2);
        myChart3.setOption(option3);
        myChart4.setOption(option4);
})