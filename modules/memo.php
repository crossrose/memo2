<?php
    class memo {
        private $title;
        private $user;
        private $passwd;
        private $memos;
        private $url;
        private $write_date;
        private $idx;

        /*
        *
        *
        */
        public function __constructor($id,$title,$user,$passwd,$memos,$url) {
            $this->setId($id);
            $this->setPasswd($passwd);
            $this->setTitle($title);
            $this->setUrl($url);
            $this->setMemo($memo);
        }

        public function setId($id) {
            $this->idx = $id;
        }

        public function getId() {
            return $this->idx;
        }

        public function setUser($user) {
            $this->user = $user;
        }

        public function getUser() {
            return $this->user;
        }

        public function setPasswd($passwd) {
            $this->passwd = $passwd;
        }

        public function getPasswd() {
            return $this->passwd;
        }

        public function setUrl($url) {
            $this->url = $url;
        }

        public function getUrl() {
            return $this->url;
        }

        public function setTitle($title) {
            $this->title = $title;
        }

        public function getTitle() {
            return $this->title;
        }

        public function setMemo($memo){
            $this->memo = $memo;
        }

        public function getMemo(){
            return $this->memo;
        }

        // 여기부터는 기능
        public function write_memo() {

        }

        public function delete_memo() {

        }

        public function update_memo() {

        }

        public function read_memo() {

        }

        public function passwd_check() {

        }
    }

 ?>
