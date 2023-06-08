<?php
require_once 'vendor/autoload.php';
use App\classes\frontend\Home;
use App\classes\admin\Register;
use App\classes\admin\Auth;

//Frontend route

if (isset($_GET['page']))
{
    if ($_GET['page']=='home')
    {
        include 'pages/frontend/home.php';
    }
    elseif ($_GET['page']=='about')
    {
        include 'pages/frontend/about.php';
    }
    elseif ($_GET['page']=='contact')
    {
        include 'pages/frontend/contact.php';
    }
    elseif ($_GET['page']=='category')
    {
        include 'pages/frontend/category.php';
    }
    elseif ($_GET['page']=='blog-single')
    {
        include 'pages/frontend/blog-single.php';
    }
}





//Backend route
elseif (isset($_GET['status']))
{
    if ($_GET['status']=='login')
    {
        include 'pages/admin/login.php';
    }
    elseif ($_GET['status']=='home')
    {
        include 'pages/admin/home.php';
    }
    elseif ($_GET['status']=='register')
    {
        include 'pages/admin/register.php';
    }
    elseif ($_GET['status']=='verify-email')
    {
        $token = $_GET['token'];
        $register= new Register();
        $register->emailVerifi($token);

    }
    elseif ($_GET['status']=='password-recovery')
    {
        include 'pages/admin/password-recovery.php';
    }
    elseif ($_GET['status']=='sign-out')
    {
        $auth= new Auth();
        $auth->signOut();
    }



}





//Post route

elseif (isset($_POST['btn']))
{
    if ($_POST['btn']=='submit')
    {
        $auth = new Auth($_POST);
        $auth->login();
    }
    elseif ($_POST['btn']=='register')
    {
        $register= new Register($_POST);
        $register->add();

    }
}