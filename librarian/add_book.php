<?php
require_once 'header.php';

if(isset($_POST['save_book'])){
    $book_name = $_POST['book_name'];
    $book_name = $_POST['book_name'];
    $book_name = $_POST['book_name'];
    $book_name = $_POST['book_name'];
    $book_name = $_POST['book_name'];
    $book_name = $_POST['book_name'];
}
?>

<!-- content HEADER -->
<!-- ========================================================= -->
<div class="content-header">
    <!-- leftside content header -->
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
            <li><a href="javascript:avoid(0)">Add books</a></li>
        </ul>
    </div>
</div>
<!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
<div class="row animated fadeInUp">
    <div class="col-sm-6 col-sm-offset-3">
        <div class="panel">
            <div class="panel-content">
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <h5 class="mb-lg">Add Book</h5>
                            <div class="form-group">
                                <label for="book_name" class="col-sm-4 control-label">Book Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="book_name" placeholder="Book Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="book_image" class="col-sm-4 control-label">Book Image</label>
                                <div class="col-sm-8">
                                    <input type="file" class="form-control" id="book_image" placeholder="Book Image">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="book_author_name" class="col-sm-4 control-label">Author Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="book_author_name" placeholder="Author Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="book_purchase_date" class="col-sm-4 control-label">Purchase Date</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="book_purchase_date" placeholder="Purchase Date ">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="book_price" class="col-sm-4 control-label">Book Price</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="book_price" placeholder="Book Price">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="book_qty" class="col-sm-4 control-label">Book Quantity</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="book_qty" placeholder="Book Quantity ">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for=" available_qty " class="col-sm-4 control-label">Available Quantity</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id=" available_qty " placeholder="Available Quantity">
                                </div>
                            </div>
                            

                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-8">
                                    <button type="submit" name="save_book" class="btn btn-primary"><i class=" fa fa-save"></i>Save Book</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <?php
    require_once 'footer.php';
    ?>