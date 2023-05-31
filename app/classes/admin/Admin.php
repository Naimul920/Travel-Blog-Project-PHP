<?php


namespace App\classes\admin;


class Admin
{
    public function index()
    {
        header('Location:action.php?status=login');
    }
}
