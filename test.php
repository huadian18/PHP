<?php
//$url = 'http://huobi2015.dev.kcdns.net/api/ctrip/exchangeSubmit';
//$url = 'http://huobi2015.test.kcdns.net/api/ctrip/exchangeSubmit';
//$jsonArr = '{"request":{"head":{"version":"v1.0.0","app_id":"ctrip","service_name":"exchangesubmit","request_time":'.time().'},"body":{"name":"\u8303\u6b23\u7136","mobile":"15000002222","certno":"330481198810159498","cardno":null,"check_time":"2017-08-19","store_no":"01000003","money_type":"325","dhlxcomment":{"325_0":"2019\u5e748\u6708","325_1":"","325_2":""},"m2":"USD","n2":"100","n1":"671.86","n3":"671.86","coupon_identification":"U389222","coupon_value":null,"outer_no":"10000010011","outer_user":null}},"sign":"rfyCERKKB5ARSK2rZAc1t+KcQsgAwr9idwtPdaNXOhEi7P3tvn1z5IrYbkuuog2f\/p2UszDPokTScRwlWPv0HX+DA22r1gl5X53Ka\/U7s\/PW\/wtbUwSECsdD65V93hU0qbMF4qBZhnIxdgbHsDXUdVfkK\/LyWV0A6KAbBqEKp5A="}';

//$url     = 'http://huobi2015.dev.kcdns.net/api/ctrip/exchangeCancel';
//$jsonArr = '{"request":{"head":{"version":"v1.0.0","app_id":"ctrip","service_name":"exchangecancel","request_time":'.time().'},"body":{"order_no":"WX1502093739","comment":" 汇率不满意 "}},"sign":"WiY\\\/nv2s6mnGnQEdyDudVvCBoHE85Yi+YBPQxG5GL7FHLKmPsz1AvBPEhOt9rk0imAfL3j\\\/Od3L4eWeGWrrcHP\\\/z\\\/n1CjqeBeNJRTzHHROd0lxX\\\/mZeKeDha+1bTMiQ5djwoJ5KeplhbCesEN3fYW8kNJ\\\/E+CY8qCsPfPhMulS1lFn7ODFkwtfjYAiUL3ck9WJpw1jbgYsvCYNg+36DygVofGUBP4DoUxFADCg0mJXz+8UqbF8Bu3BGQPvvZMGV1UQOZZ2e68JLZT8Ie2mRYSQ\\\/MezuYQ1p28a9qNnbiPKO0zhVQlhfgE0l6+PJzdxQ367ec4HPxBj6J\\\/Zu8W3HJaQ=="}';

//$url = 'https://apiproxy.fws.ctripqa.com/apiproxy/soa2/11517/VendorCurrencySync';
//$jsonArr = '{"RequestCommon":{"vendorCode":"unitedmoney","transID":"unitedmoney201708101840011001","reqTime":"20170810184001","vendorPassword":"ecee44f9df6dff6633a26607f53198d15c4eaa20a507e57c6ba0925bc297bcd518c2b4c44797780d6b4f4f13833a5eb7966be23d82030295ab1633346d3ab6f2"},"List":[{"CurrencyCode":"USD","SellRate":"675.57","BuyRate":"675.57","BranchCode":"1000003"},{"CurrencyCode":"USD","SellRate":"675.57","BuyRate":"675.57","BranchCode":"1000001"},{"CurrencyCode":"USD","SellRate":"675.57","BuyRate":"675.57","BranchCode":"1000002"},{"CurrencyCode":"GBP","SellRate":"890.1","BuyRate":"890.1","BranchCode":"1000001"},{"CurrencyCode":"GBP","SellRate":"890.1","BuyRate":"890.1","BranchCode":"1000002"},{"CurrencyCode":"CHF","SellRate":"706.04","BuyRate":"706.04","BranchCode":"1000004"},{"CurrencyCode":"CHF","SellRate":"707.04","BuyRate":"707.04","BranchCode":"1000001"},{"CurrencyCode":"CHF","SellRate":"706.04","BuyRate":"706.04","BranchCode":"1000002"},{"CurrencyCode":"SGD","SellRate":"498.78","BuyRate":"498.78","BranchCode":"1000001"},{"CurrencyCode":"SGD","SellRate":"498.78","BuyRate":"498.78","BranchCode":"1000002"},{"CurrencyCode":"SGD","SellRate":"498.78","BuyRate":"498.78","BranchCode":"2100004"},{"CurrencyCode":"DKK","SellRate":"110.27","BuyRate":"110.27","BranchCode":"1000004"},{"CurrencyCode":"DKK","SellRate":"110.27","BuyRate":"110.27","BranchCode":"1000001"},{"CurrencyCode":"DKK","SellRate":"110.27","BuyRate":"110.27","BranchCode":"1000002"},{"CurrencyCode":"HKD","SellRate":"86.68","BuyRate":"86.68","BranchCode":"1000001"},{"CurrencyCode":"HKD","SellRate":"86.68","BuyRate":"86.68","BranchCode":"1000002"}]}';
//
//$url = 'https://apiproxy.fws.ctripqa.com/apiproxy/soa2/11517/OrderStatusSync';
//$url = 'https://apiproxy.fws.ctripqa.com/apiproxy/soa2/11517/OrderStatusSync';
//$jsonArr = '{"RequestCommon":{"vendorCode":"unitedmoney","transID":"unitedmoney201708111746021004","reqTime":"20170811174602","vendorPassword":"ecee44f9df6dff6633a26607f53198d15c4eaa20a507e57c6ba0925bc297bcd518c2b4c44797780d6b4f4f13833a5eb7966be23d82030295ab1633346d3ab6f2"},"ctripOrderId":"3020592007","vendorReferId":"543309802","orderStatus":"4"}';

//$set_header = $set_header = array(
//    "content-type:application/json;charset=UTF-8"
//);
//$curl = curl_init(); // 启动一个CURL会话
//curl_setopt($curl, CURLOPT_URL, $url); // 要访问的地址
//curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
//curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0); // 从证书中检查SSL加密算法是否存在
//curl_setopt($curl, CURLOPT_USERAGENT,
//    'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2882.4 Safari/537.36 unitedmoney.com'); // 模拟用户使用的浏览器
//curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // 使用自动跳转
//curl_setopt($curl, CURLOPT_AUTOREFERER, 1); // 自动设置Referer
//curl_setopt($curl, CURLOPT_POST, 1); // 发送一个常规的Post请求
//curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonArr); // Post提交的数据包
//curl_setopt($curl, CURLOPT_TIMEOUT, 5); // 设置超时限制防止死循环
//curl_setopt($curl, CURLOPT_HEADER, 0); // 显示返回的Header区域内容
//curl_setopt($curl, CURLOPT_HTTPHEADER, $set_header);
//curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); // 获取的信息以文件流的形式返回
//$tmpInfo = curl_exec($curl); // 执行操作
//$error = curl_error($curl);
//curl_close($curl);
//
//var_dump($tmpInfo);

//echo date("Y-m-d",strtotime("+1 month"));

//var_dump('0.0' == 0);
//var_dump('0.0' == true);
//var_dump(0 == true);

//echo bcmul(2095.685,100);
//echo PHP_EOL;
//echo round(2095.68*100);


//$str = '412311235456';
//var_dump(strpos($str,1));//
//var_dump(strpos($str,'1'));//
//var_dump(strpos('abcdefghijklmnopqrstuvwxyz',626));//
//var_dump(strpos("asasA", 65));
//var_dump(chr(127));
//var_dump(chr(128));
//var_dump(chr(129));
//var_dump(chr(130));
//var_dump(chr(400));
//var_dump(ord('A'));

//class test
//{
//    private $a = 'a';
//    protected $s = 's';
//    public $d = 'd';
//    private function demo()
//    {
//        return __FUNCTION__;
//    }
//
//    protected function demo1()
//    {
//        return __FUNCTION__;
//    }
//
//    public function demo2()
//    {
//        return __FUNCTION__;
//    }
//
//    public function __sleep()
//    {
//        return ['a','s','d'];
//    }
//
//    public function __wakeup()
//    {
//        $this->ss = 'sss';
//    }
//
//}

//echo (int)(6.9631*300*100);
//echo floor(bcmul(696.9999999, 100, 1)).PHP_EOL;
//echo 2088.93*100,PHP_EOL;
//echo (string)696.99999999999;
//echo serialize(0.29);

$search1 = 'a';
$replace1 = 'aa';
$str1 = 'a s d f';
var_dump(str_replace($search1,$replace1,$str1));

$search1 = 'a';
$replace1 = 'aa';
$str1 = ['a','s','d','f'];
var_dump(str_replace($search1,$replace1,$str1));


$search2 = ['a','d'];
$replace2 = 'aa';
$str2 = 'a s d f';
var_dump(str_replace($search2,$replace2,$str2));

$search1 = ['a','d'];
$replace1 = 'aa';
$str1 = ['a','s','d','f'];
var_dump(str_replace($search1,$replace1,$str1));

$search3 = ['a','d'];
$replace3 = ['kk','hh'];
$str3 = 'a s d f';
var_dump(str_replace($search3,$replace3,$str3));



$search3 = ['a','d'];
$replace3 = ['kk','hh'];
$str3 = ['a','s','d','f'];
var_dump(str_replace($search3,$replace3,$str3));

//search replace subject
//str    str     str/array
//array  str/array  str/array



