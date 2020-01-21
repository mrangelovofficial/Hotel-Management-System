<?php 

class ReservationsController extends Controller
{
    public function index()
    {

        $this->view('common/header');
        $this->view('reservations');
        $this->view('common/footer');
    }


}