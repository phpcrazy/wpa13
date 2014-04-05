<?php
  define('DD', __DIR__.'/../');

  require DD."app/config/app.php";
  require DD."src/loader/ConfigLoader.php";
  require DD."src/loader/ViewLoader.php";
  require DD."app/controller/HomeController.php";
  require DD."app/controller/AboutController.php";
  require DD."app/controller/AdminController.php";
  require DD."app/controller/SaleController.php";
  require DD."app/controller/LoginController.php";
  require DD."app/controller/RegisterController.php";
  require DD."app/controller/Page404Controller.php";

  $uri = $_SERVER['REQUEST_URI'];
  $scriptName = $_SERVER['SCRIPT_NAME'];

  $uriArray = explode("/",$uri);
  $scriptNameArray = explode("/",$scriptName);

  $page_array=array_diff($uriArray,$scriptNameArray);//substract the uri request value

  $page_array=array_values($page_array);//rearrange array value
 
  $rules=array(
                      "home"      =>    array(
                                              "controller"  =>  "HomeController@actionIndex"
                                      ),
                      "about"     =>   array(
                                              "controller"  =>  "AboutController@actionIndex"
                                      ) ,
                      "admin"     =>   array(
                                              "controller"  =>  "AdminController@actionIndex"
                                      ) ,
                      "sale"      =>    array(
                                              "controller"  =>  "SaleController@actionIndex"
                                      ) ,
                      "login"     =>  array(
                                              "controller"  =>  "LoginController@actionIndex"
                                      ),
                      "register"  =>  array(
                                              "controller"  =>  "RegisterController@actionIndex"
                                      ) 
          );

  if(empty($page_array))
  {
      HomeController::actionIndex();
  }
  elseif (array_key_exists($page_array[0],$rules)) {

      $controller = $rules[$page_array[0]];
      $controller = explode("@",$controller["controller"]);
      call_user_func_array(array($controller[0],$controller[1]),array());
  }
  else{
      http_response_code(404);
      call_user_func_array(array("Page404Controller","actionIndex"),array());
  }

?>