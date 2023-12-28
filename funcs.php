<?php
//共通に使う関数を記述
//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
  };


  // DB接続を関数化する
  function db_conn(){
    try {
      //ID:'root', Password: xamppは 空白 ''
      return new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
    } catch (PDOException $e) {
      return exit('DBConnectError:'.$e->getMessage());
    }
  }

  // session_idの有無を確認し、ログイン状態か否かを判別する
  function login_check(){
      if ( !isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"] !==session_id() ) {
        return exit("LOGIN ERROR");
      } else{
        session_regenerate_id(true);
        return $_SESSION["chk_ssid"]=session_id();
      }
  }