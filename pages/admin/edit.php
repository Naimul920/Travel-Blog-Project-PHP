<?php
include 'include/header.php';
include 'include/sidebar.php';

?>
<?php
session_start();
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
                                Edit Catagory
                            </div>
                            <div class="card-body">
                                <span class="text-center" style="font-size: 12px !important;">
                                        <?php if (isset($_SESSION['message'])) {?>
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <?php
                                            echo $_SESSION['message'];
                                            unset($_SESSION['message']);
                                            ?>

                                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                 </button>
                                            </div>
                                        <?php } ?>
                                    </span>
                                <div class="alert">
                                    <?php
                                    if (isset($_GET['message']))
                                    {
                                        echo "<h4>".$_GET['message']."</h4>";
                                        unset($_GET['message']);
                                    }
                                    ?>
                                </div>
                                <form action="action.php" method="post" >
                                    <div class="row mb-3">
                                        <label class="col-md-3"></label>
                                        <div class="col-md-9">
                                            <input type="hidden" class="form-control" name="id" value="<?php echo isset($category) ? $category['id']:''?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3">Catagory Name</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="name" value="<?php echo isset($category) ? $category['name']:''?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-md-3"></label>
                                        <div class="col-md-9">
                                            <input type="submit" class="btn btn-success" name="btn" value="Update Category">
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
