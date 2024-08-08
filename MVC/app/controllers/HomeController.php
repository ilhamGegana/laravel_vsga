<?php
    class HomeController{
        private $userModel;

        public function _construct() {
            $this->userModel = new User();
        }
        public function index(){
            $user = $this->userModel->getAllUsers();
            require 'MVC\app\views\home.php';
        }
    }
?>