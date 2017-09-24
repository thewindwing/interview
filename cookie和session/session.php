<?php 

  // 关于session（一般用户登录成功后会开启session、退出时会注销session）
  // session开启之后会生成一个sessionid，然后以响应头的形式返回给浏览器，后续浏览器所有的请求都会以请求头的方式携带该sessionid

  // session与cookie的关系：session可以依赖于cookie，也可以不依赖cookie（URL重写-把sessionid以参数的形式添加得到URL中）

  // 开启session
  $uname = $_GET['uname'];
  $pw = $_GET['pw'];

  if($uname == 'admin' && $pw == '123'){
    // 登录成功
    session_start();

    $_SESSION['uname'] = $uname;
    $num = $_SESSION['num'];
    if($num){
      $_SESSION['num'] = $_SESSION['num'] + 1;
    }else{
      $_SESSION['num'] = 1;
    }

  }
  
  


 ?>