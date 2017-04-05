<?php
    require_once "../modules/memo.php";
    require_once "../modules/memos.php";

    //__constructor($id,$title,$user,$passwd,$memos,$url)
    
    $iterator = $memos->getIterator();
    foreach ($iterator as $memo) {

        echo $memo->getId(). " ";
        echo $memo->getTitle(). " ";
        echo $memo->getUser(). " ";
        echo $memo->getPasswd();

    }

?>
