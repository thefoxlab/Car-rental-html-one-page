<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Front_Controller
{

    public function index()
    {
        $this->load_view('home');
    }
}
