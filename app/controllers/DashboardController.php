<?php 

class DashboardController {

    public function index() {
        view('dashboard/header');
        view('dashboard/index');
        view('dashboard/footer');
    }

}