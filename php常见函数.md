#php 常见函数

###is_a()
    如果对象属于该类或该类是此对象的父类则返回 TRUE
    instanceof() 比较
###in_array()
    bool in_array ( mixed $needle , array $haystack [, bool $strict = FALSE ] )
    $needle 区分大小写
    严格模式 比较类型 同array_search()
    非严格模式:
`$arr = ['a','b'];var_dump(in_array(0,$arr));var_dump(in_array(true,$arr));`

###htmlspecialchars() && htmlspecialchars_decode()

###url_encode() && rawurlencode()
    同：对除·-_.·之外所有非字母数字字符替换为%后跟两位十六制数
    异：url_encode 将空格转化为·+·
    
###json_encode() && serialize()
    `$demo = [
         'demo'=>0.1
     ];
     
     var_dump(json_encode($demo));//string(12) "{"demo":0.1}"
     var_dump(serialize($demo));`//string(77) "a:1:{s:4:"demo";d:0.1000000000000000055511151231257827021181583404541015625;}"
