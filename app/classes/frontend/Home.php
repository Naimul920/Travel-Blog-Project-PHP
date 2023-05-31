<?php


namespace App\classes\frontend;


class Home
{
    public function index()
    {
        header('Location:action.php?page=home');
    }
}