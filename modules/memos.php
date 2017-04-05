<?php

    class memos implements IteratorAggregate {
        private $memos = [];
        public function add(memo $memo) {
            $this->memos[] = $memo;
        }

        public function getIterator() {
            return new ArrayIterator($this->memos);
        }
    }
 ?>
