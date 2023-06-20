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
            <section class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="card">
                                <div class="card-header">
                                    <span class="">Manage Category</span>
                                </div>
                                <div class="card-body">
<!--                                    <span class="text-center" style="font-size: 12px !important;">-->
<!--                                        --><?php //if (isset($_SESSION['message'])) {?>
<!--                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">-->
<!--                                            --><?php
//                                            echo $_SESSION['message'];
//                                            unset($_SESSION['message']);
//                                            ?>
<!---->
<!--                                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">-->
<!--                                                    <span aria-hidden="true">&times;</span>-->
<!--                                                 </button>-->
<!--                                            </div>-->
<!--                                        --><?php //} ?>
<!--                                    </span>-->
                                    <div class="row">
                                        <div class="col-md-12 mx-auto">
                                            <table class="table table-bordered table-hover text-center ">
                                                <thead>
                                                    <tr class="table-danger">
                                                        <th>SL</th>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <?php $i=1; ?>
                                                <?php foreach ($categories as $category)  { extract($category) ?>
                                                    <tbody>
                                                        <tr>
                                                            <td><?php echo $i; $i++?></td>
                                                            <td><?php echo $id;?></td>
                                                            <td><?php echo $name;?></td>
                                                            <td >
                                                                <a href="action.php?status=edit&id=<?php echo base64_encode($id);?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
<!--                                                                <a href="" class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>-->
                                                                <a href="action.php?status=delete&id=<?php echo base64_encode($id);?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete <?php echo $name?>...?')"><i class="fa fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                <?php }?>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>


<?php include 'include/footer.php'?>
