<?php

class Pages extends Controller {

    public function __construct() {
    }
    public function index() {
        // loading the index page view
        $this->view('pages/index');
    }
}