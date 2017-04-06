<?php
 //require_once "../modules/db.php";

 $database_host     = "localhost";
 $database_name     = "db_memo";
 $database_charset  = "utf8";
 $database_user     = "memo_user";
 $database_passwd   = "memo!@#$";
 $pdo;

 $dsn ="mysql:host=$database_host;dbname=$database_name;charset=$database_charset";
 try{
     $pdo = new PDO($dsn,$database_user,$database_passwd);
     $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
     print ("접속하였습니다.");
 }catch (PDOException $exception) {
     die('오류:'.$exception->getMessage());

 }
 try{
     $pdo->beginTransaction();
     $sql = "INSERT INTO memo2 (title,name,passwd,memo,memo_link_url) value (? ,? ,? ,?,?)";
     $shtm = $pdo->prepare($sql);
     $shtm->bindValue(1,$_POST['memo_title'],PDO::PARAM_STR);
     $shtm->bindValue(2,$_POST['memo_name'],PDO::PARAM_STR);
     $shtm->bindValue(3,$_POST['memo_passwd'],PDO::PARAM_STR);
     $shtm->bindValue(4,$_POST['memo_text'],PDO::PARAM_STR);
     $shtm->bindValue(5,$_POST['memo_link_url'],PDO::PARAM_STR);
     $shtm->execute();
     $pdo->commit();
     print("성공하였습니다.");
 }catch (PDOException $exception) {
     $pdo->rollBack();
     print("오류:".$exception->getMessage());
 }




?>
