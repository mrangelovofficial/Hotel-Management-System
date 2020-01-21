<?php 

class HomeController extends Controller
{
    public function index()
    {


        
        $this->view('common/header');
        $this->view('home');
        $this->view('common/footer');
    }


}