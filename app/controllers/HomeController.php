<?php
class PagesController extends Controller
{
    public function __construct()
    {
        $this->postModel = $this->model('Post');
    }

    public function index()
    {
        $data = ['title' => 'Welcome to Sav MVC'];

        $posts = ['Post One', 'Post Two'];

        $this->view('pages/index', ['data' => $data, 'posts' => $posts]);
    }

    public function about()
    {
        $data = ['title' => 'About Us'];
        $this->view('pages/about', ['test' => $data]);
    }
}
