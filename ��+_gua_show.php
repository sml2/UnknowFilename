<?php
//header("Content-type: text/html; charset=utf-8");

//var_dump(base64_encode('11535'));
$uid=$_REQUEST[username];
$uid=base64_decode($uid);
//var_dump($uid);
if(!(is_int($uid)||$uid)){
    exit('username error!');
}
$sDate=date("Y-m-d");
if($_REQUEST[start]){
    $sDate=$_REQUEST[start];
}
$re=file_get_contents("http://bitc.redu.com/gua_show.php?uid={$uid}&d={$sDate}");

$search_date=date("Y-m-d",time()-3600*24*10);
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>美女秀数据</title>
<script src="/javascript/wd/WdatePicker.js" type="text/javascript"></script>
</head>
<body>
<form action='/gua_show.php' method='post'>
<input type='hidden' name='username' value='<?php echo $_REQUEST[username];?>' /> 
日期查询:
<input name='start' type="text" id="start" class="textInput" size="12" onClick="WdatePicker({minDate:'<?php echo $search_date;?>'});" value="" />
<input type="submit" value="查 询" id="date_search">

<br /><br />
<?php 
echo "{$sDate}日数据##".$re;
?>
<br /><br /><font color="#FF0000">
数据每10分钟更新一次，结算以次日返回数据为准，
响应站长朋友的要求，现实时数据连同30%同时输出
给大家               <br />2014年1月3日</font>
</form>
</body>
</html>
