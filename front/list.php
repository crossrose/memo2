<html>
<head>
  <title> php 테스트 </title>
</head>
<body>
  <?php

  $database_host     = "localhost";
  $database_name     = "db_memo";
  $database_charset  = "utf8";
  $database_user     = "memo_user";
  $database_passwd   = "memo!@#$";

  $dsn ="mysql:host=$database_host;dbname=$database_name;charset=$database_charset";
  try{
      $pdo = new PDO($dsn,$database_user,$database_passwd);
      $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
      echo  "접속하였습니다.";
  }catch (PDOException $exception) {
      die('오류:'.$exception->getMessage());

  }

  $search_key = '%'.$_POST['search_key'].'%';
  try {
    $sql = "SELECT * FROM memo WHERE user like :user_name ";
    $stmh = $pdo->prepare($sql);
    $stmh->bindValue(':user_name',$search_key,PDO:PARAM_STR);
    $stmh->execute();
    $count = $stmh->rowCount();
    echo "검색 결과는 ".$count." 건 입니다. <BR>";
  }catch(PDOException $exception) {
    echo "오류".$exception->getMessage();
  }

  if ($count < 1 ) {
    echo "검색 결과가 없습니다.";
  }else {
  ?>
  <table width="450" border="1" cellspacing="0" cellpadding="8">
    <tbody>
      <tr>
        <th> 번호 </th>
        <th> 작성자 </th>
      </tr>
      <?php
      while($row= $stmh->fetch(PDO::FETCH_ASSOC)) {
      ?>
      <tr>
        <td align="center"><?=htmlspecialchars($row['idx'])?></td>
        <td align="center"><?=htmlspecialchars($row['name'])?></td>
      </tr>
    <? } ?>
</body>
</html>
