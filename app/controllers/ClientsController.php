<?php 

class ClientsController extends Controller
{
    public function index()
    {

        $this->view('common/header');
        $this->view('clients');
        $this->view('common/footer');
    }


}