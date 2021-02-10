<?php

require_once('./DB.php');
function connect()

{
  $host = DB_HOST;
  $db = DB_NAME;
  $user = DB_USER;
  $pass = DB_PASS;



  $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";


    try{
    $pdo = new PDO($dsn,$user,$pass,[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO :: FETCH_ASSOC
   ]);
    echo'接続しました';



  } catch(PDOException $e) {
  echo '接続できませんでした' . $e->getMessage();
  exit();
  }
}
echo connect();
