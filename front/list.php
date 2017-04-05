<?php
    require_once "../modules/memo.php";
    require_once "../modules/memos.php";

    //__constructor($id,$title,$user,$passwd,$memos,$url)
    $memo1 = new memo(1,"제목","등록자","passwd","memos","URLS");
    $memos = new memos;

    $memos->add($memo1);

    $iterator = $memos->getIterator();

    foreach ($iterator as $memo) {
        print $memo->getId(). " ";
        print $memo->getTitle(). " ";
        print $memo->getUser(). " ";
        
        # code...
    }

?>
