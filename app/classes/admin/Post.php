<?php


namespace App\classes\admin;


use App\classes\database\Database;

class Post extends Database
{
        private $con;
        private $title;
        private $category;
        private $image_one;
        private $description_one;
        private $image_two;
        private $description_two;
        private $post_type;
        private $tags;
        private $message;
        private $imageName;
        private $directory;
        private $imgUrlOne;
        private $imgUrlTwo;
        private $sql;
        private $result;
        private $row=[];

        public function __construct($data=null , $file=null)
        {
            $this->con=$this->connect();
            if ($data)
            {
                 $this->title=$data['title'];
                 $this->category=$data['category'];
                 $this->description_one=$data['description_one'];
                 $this->description_two=$data['description_two'];
                 $this->post_type=$data['post_type'];
                 $this->tags=$data['tags'];
            }
            if ($file)
            {
                $this->image_one=$file['image_one'];
                $this->image_two=$file['image_two'];
            }
            if (empty($this->title) || empty($this->category) || empty($this->image_one) || empty($this->description_one) || empty($this->image_two) || empty($this->description_two) || empty($this->post_type) || empty($this->tags))
            {
                $this->message='Field must not empty';
                return $this->message;
//                session_start();
//                $_SESSION['error']='Data Update successful';
//                header('Location:action.php?status=add-post');
            }

        }
        public function getImageUrlOne()
        {
            $this->imageName= $this->image_one['image']['name'];
            $this->directory='assets/images/'.$this->imageName;
            move_uploaded_file($this->$this->image_one['image']['tmp_name'] ,$this->directory);
            return $this->directory;
        }
        public function getImageUrlTwo()
        {
            $this->imageName= $this->image_two['image']['name'];
            $this->directory='assets/images/'.$this->imageName;
            move_uploaded_file($this->$this->image_two['image']['tmp_name'] ,$this->directory);
            return $this->directory;
        }
        public function addPost()
        {

             if (empty($this->image_one['image']['name']))
                {
                    $this->imgUrlOne='';
                }
                else
                {
                    $this->imgUrlOne=$this->getImageUrlOne();
                }
                if (empty($this->image_two['image']['name']))
                {
                    $this->imgUrlTwo='';
                }
                else
                {
                    $this->imgUrlTwo=$this->getImageUrlTwo();
                }
                $this->sql="INSERT INTO posts (title, category, image_one, description_one, image_two, description_two, post_type, tags) VALUES ('$this->title', '$this->category', '$this->imgUrlOne', '$this->description_one', '$this->imgUrlTwo', '$this->description_two', '$this->post_type', '$this->tags')";
                $this->result=mysqli_query($this->con , $this->sql);
                if ($this->result = true)
                {
                    session_start();
                    $_SESSION['message']='Data Update successful';
                    $_SESSION['message_code']='success';
                    header('Location:action.php?status=add-post');

                }
                else
                {
                    die('Query Error...!'.mysqli_error());
                }

        }
}