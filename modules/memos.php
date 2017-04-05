<?php

    class memos implements IteratorAggregate {
        private $memos = [];
        public function add(memo $memo) {
            $this->memos[] = $memo;
        }

        // 메모 객체를 전달
        public function getIterator() {
            return new ArrayIterator($this->memos);
        }
    }
 ?>
