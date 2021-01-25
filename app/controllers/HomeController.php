<?php 

class HomeController {

    public function index() {
        view('dashboard/header');
        view('dashboard/index');
        view('dashboard/footer');
    }

    public function redirect() {
        header('location: ?pagename=login');
    }

}