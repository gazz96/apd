<?php 

class HomeController {

    public function index() {
        view('dashboard/header');
        view('dashboard/index');
        view('dashboard/footer');
    }

}