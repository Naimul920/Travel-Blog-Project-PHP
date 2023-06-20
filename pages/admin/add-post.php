<?php
include 'include/header.php';
include 'include/sidebar.php';

?>
<?php

if (!isset($_SESSION['id']))
{
    header('Location:action.php?status=login');
}
?>

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="container py-5">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                Add Post
                            </div>
                            <div class="card-body">
                                <span class="text-center" style="font-size: 12px !important;">
                                        <?php if (isset($_SESSION['error'])) {?>
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <?php
                                            echo $_SESSION['error'];
                                            unset($_SESSION['error']);
                                            ?>

                                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                 </button>
                                            </div>
                                        <?php } ?>
                                    </span>
                                <div class="alert text-danger">
                                    <?php
                                    if (isset($message))
                                    {
                                        echo "<h4>".$message."</h4>";
                                        unset($message);
                                    }
                                    ?>
                                </div>
                                <form action="action.php" method="post" enctype="multipart/form-data">
                                    <div class="row mb-3">
                                        <label class="col-md-3">Post Title</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="title" >

                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Select Category</label>
                                        <div class="col-md-9">
                                            <select name="select_category" id="" class="form-select" >
                                                <option selected>Select Category</option>
                                                <option>Large Select</option>
                                                <option>Small Select</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Image One</label>
                                        <div class="col-md-9">
                                            <input type="file" class="form-control" name="image_one" >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Description One</label>
                                        <div class="col-md-9">
                                            <textarea id="classic-editor" name="description_one"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Image Two</label>
                                        <div class="col-md-9">
                                            <input type="file" class="form-control" name="image_one" >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Description Two</label>
                                        <div class="col-md-9">
                                            <textarea id="classic-editor_2" name="description_two"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Post Type</label>
                                        <div class="col-md-9">
                                            <select name="post_type" id="" class="form-select">
                                                <option selected>Select Post Type</option>
                                                <option>Large Select</option>
                                                <option>Small Select</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Tags</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="tags" >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3"></label>
                                        <div class="col-md-9">
                                            <input type="submit" class="btn btn-success" name="btn" value="Create new Post">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'include/footer.php'?>
