<?php


class Dashboard extends Controller
{
   
    public function index()
    {
        
       
        require 'application/views/dashboard/index.php';
    }

    public function login()
    {
       
        require 'application/views/dashboard/login.php';
    }

    public function logout()
    {
        require 'application/views/dashboard/logout.php';
    }
    // public function exampleTwo()
    // {
        
    //     require 'application/views/_templates/header.php';
    //     require 'application/views/home/example_two.php';
    //     require 'application/views/_templates/footer.php';
    // }
}
