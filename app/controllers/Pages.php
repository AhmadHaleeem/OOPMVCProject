<?php
    class Pages extends Controller {
        public function __construct()
        {

        }
        public function index() {
            if (isLoggedIn()) {
                redirect('posts');
            }
            $data = ['title' => 'SharePosts', 'description' => 'Simple Social Network built on the TraversyMVC php Framework'];
            $this->view('pages/index', $data);
        }

        public function about() {
            $data = ['title' => 'About', 'description' => 'Simple Social Network built on the TraversyMVC php Framework'];
            $this->view('pages/about', $data);
        }
    }