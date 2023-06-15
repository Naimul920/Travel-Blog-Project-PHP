<?php
require_once 'vendor/autoload.php';
use App\classes\frontend\Home;
use App\classes\admin\Register;
use App\classes\admin\Auth;
use App\classes\admin\ResetPassword;
use App\classes\admin\UpdateResetPassword;
use App\classes\admin\Catagory;

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
    elseif ($_GET['status']=='reset-password')
    {
        include 'pages/admin/reset-password.php';
    }
    elseif ($_GET['status']=='add-catagory')
    {
        include 'pages/admin/add-catagory.php';
    }
    elseif ($_GET['status']=='manage-category')
    {
        $catagory= new Catagory();
        $categories=$catagory->manage();

        include 'pages/admin/manage-category.php';
    }
    elseif ($_GET['status']=='edit')
    {
        $id= $_GET['id'];
        $id=base64_decode($id);

        $category= new Catagory();
        $category=$category->getCategoryInfo($id);

        include 'pages/admin/edit.php';
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
    elseif ($_POST['btn']=='reset')
    {
        $reset = new ResetPassword($_POST);
        $reset->ResetPassword();
    }
    elseif ($_POST['btn']=='reset-pass')
    {
        $UpdateResetPassword = new UpdateResetPassword($_POST);
        $message = $UpdateResetPassword->updatePassword();

    }
    elseif ($_POST['btn']=='Create new catagory')
    {
        $catagory = new Catagory($_POST);
        $catagory->create();

    }
    elseif ($_POST['btn']=='Update Category')
    {
        $id=$_POST['id'];
        $catagory = new Catagory($_POST);
        $categories=$catagory->manage();
        $catagory->updateCategoryById($id);
    }
}