<?php
include 'include/header.php';
include 'include/sidebar.php';

?>
<?php
//session_start();
//if (!isset($_SESSION['id']))
//{
//    header('Location:action.php?status=login');
//}
//?>
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
                                    <div class="row">
                                        <div class="col-md-12 mx-auto">
                                            <table class="table table-bordered table-hover text-center ">
                                                <thead>
                                                    <tr class="table-danger">
                                                        <th>SL</th>
                                                        <th>Name</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <?php foreach ($categories as $category)  { extract($category) ?>
                                                    <tbody>
                                                        <tr>
                                                            <td><?php echo $id;?></td>
                                                            <td><?php echo $name;?></td>
                                                            <td >
                                                                <a href="" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                                <a href="" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                                <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
