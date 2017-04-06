<?php
    require_once "../modules/memo.php";
    require_once "../modules/memos.php";

    //__constructor($id,$title,$user,$passwd,$memos,$url)
    $memo1 = new memo(1,"subject","reg","passwd","memos","URLS");
    $memos = new memos;

    $memos->add($memo1);

    $iterator = $memos->getIterator();
    foreach ($iterator as $memo) {

        echo $memo->getId(). " ";
        echo $memo->getTitle(). " ";
        echo $memo->getUser(). " ";
        echo $memo->getPasswd();

    }

?>
