<?php

class Pages extends Controller {

    public function __construct() {
    }
    public function index() {

        $data = [
            'title' => "Home Page"
        ];
        // loading the index page view
        $this->view('pages/index', $data);
    }
}