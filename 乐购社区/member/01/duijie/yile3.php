 <?
  $duijiekey1='value1';
  $duijiekey2='value2';
  $duijiekey3='value3';
  $duijiekey4='value4'; 
 $timestamp=strtotime('now');
  
 $params =  array(
  'api_token' => $loginname, //账户
  'timestamp' => $timestamp,//密码
  'gid' => $s_duijiesid,//商品ID
  'num' => $_POST['num'],//下单数量
  $duijiekey1 => $_POST[$key1],
  $duijiekey2 => $_POST[$key2],
  $duijiekey3 => $_POST[$key3],
  $duijiekey4 => $_POST[$key4],
);
$key = $loginpassword;
$sign = getSign($params, $key);


 $post_data = array(
  'api_token' => $loginname, //账户
  'timestamp' => $timestamp,//密码
  'sign' =>$sign,//
  'gid' => $s_duijiesid,//商品ID
  'num' => $_POST['num'],//下单数量
  $duijiekey1 => $_POST[$key1],
  $duijiekey2 => $_POST[$key2],
  $duijiekey3 => $_POST[$key3],
  $duijiekey4 => $_POST[$key4],
 
 
 );
 

  
 
  $jg=  yilepost('http://'.$duijieurl.'.api.94sq.cn/api/order', $post_data);
 	if ($query = json_decode($jg, true)) {$s_duijiezt= $query['message'];$duijiefanhuizt= $query['message'];
 	}
 
 
 
 


 ?>