<?php
require_once 'header.php';
?>

<!-- content HEADER -->
<!-- ========================================================= -->
<div class="content-header">
    <!-- leftside content header -->
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Dashboard</a></li>
            <li><a href="javascript:avoid(0)">Manage books</a></li>
        </ul>
    </div>
</div>
<!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
<div class="row animated fadeInUp">
    <div class="col-sm-12">
        <h4 class="section-subtitle"><b>Boos</b></h4>
        <div class="panel">
            <div class="panel-content">
                <div class="table-responsive">
                    <table id="basic-table" class="data-table table table-striped nowrap table-hover table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Book-Name </th>
                                <th>Book Image</th>
                                <th>Publication Name</th>
                                <th>Author Name</th>
                                <th>Purchase Date</th>
                                <th>Book Price</th>
                                <th>Book Quantity</th>
                                <th>Available Quantity</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $result = mysqli_query($con, "SELECT * FROM `books`");
                            while ($row = mysqli_fetch_assoc($result)) {

                            ?>
                                <tr>
                                    <td><?= $row['book_name'] ?></td>
                                    <td><img src="../images/books/<?= $row['book_image'] ?>" width="100px" alt=""></td>
                                    <td><?= $row['book_author_name'] ?></td>
                                    <td><?= $row['book_publication_name'] ?></td>
                                    <td><?= date('d-M-Y', strtotime($row['book_purchase_date'])) ?></td>
                                    <td><?= $row['book_price'] ?></td>
                                    <td><?= $row['book_qty'] ?></td>
                                    <td><?= $row['available_qty'] ?></td>
                                    <td>

                                        <a class="btn btn-info" data-toggle="modal" data-target="#book-<?= $row['id'] ?>"><i class="fa fa-eye"></i></a>
                                        <a class="btn btn-warning" data-toggle="modal" data-target="#book_update<?= $row['id'] ?>"> <i class="fa fa-pencil"></i> </a>
                                        <a href="delete.php?bookdelete=<?= base64_encode($row['id']) ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-trash-o"></i></a>
                                    </td>


                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
$result = mysqli_query($con, "SELECT * FROM `books`");
while ($row = mysqli_fetch_assoc($result)) {

?>
    <div class="modal fade" id="book-<?= $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="modal-info-label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header state modal-info">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal-info-label"><i class="fa fa-book"></i> Book Info </h4>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Book-Name </th>
                            <td><?= $row['book_name'] ?></td>

                        </tr>
                        <tr>
                            <th>Book Image</th>
                            <td><img src="../images/books/<?= $row['book_image'] ?>" width="100px" alt=""></td>

                        </tr>
                        <tr>
                            <th>Publication Name</th>
                            <td><?= $row['book_publication_name'] ?></td>

                        </tr>
                        <tr>
                            <th>Author Name</th>
                            <td><?= $row['book_author_name'] ?></td>

                        </tr>
                        <tr>
                            <th>Purchase Date</th>
                            <td><?= date('d-M-Y', strtotime($row['book_purchase_date'])) ?></td>

                        </tr>
                        <tr>
                            <th>Book Price</th>
                            <td><?= $row['book_price'] ?></td>

                        </tr>
                        <tr>
                            <th>Book Quantity</th>
                            <td><?= $row['book_qty'] ?></td>

                        </tr>
                        <tr>
                            <th>Available Quantity</th>
                            <td><?= $row['available_qty'] ?></td>

                        </tr>
                    </table>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

<?php

}
?>

<?php
$result = mysqli_query($con, "SELECT * FROM `books`");
while ($row = mysqli_fetch_assoc($result)) {

    $id = $row['id'];
    $book_info = mysqli_query($con, "SELECT * FROM `books` WHERE `id` = '$id' ");
    $book_info_row = mysqli_fetch_assoc($book_info);


?>

    <div class="modal fade" id="book_update<?= $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="modal-info-label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header state modal-info">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modal-info-label"><i class="fa fa-book"></i>update Book </h4>
                </div>

                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="book_name" class="col-sm-4 control-label">Book Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="book_name" name="book_name" value="<?= $book_info_row['book_name'] ?>" placeholder="Book Name" required>
                                <input type="text" class="form-control"  name="id" value="<?= $book_info_row['id'] ?>"  required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="book_publication_name" class="col-sm-4 control-label">Publication Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="book_publication_name" name="book_publication_name" value="<?= $book_info_row['book_publication_name'] ?>" placeholder="Publication Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="book_author_name" class="col-sm-4 control-label">Author Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="book_author_name" name="book_author_name" value="<?= $book_info_row['book_author_name'] ?>" placeholder="Author Name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="book_purchase_date" class="col-sm-4 control-label">Purchase Date</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="book_purchase_date" name="book_purchase_date" value="<?= $book_info_row['book_purchase_date'] ?>" placeholder="Purchase Date" required>
                            </div>
                        </div>

                    `      <div class="form-group">
                            <label for="book_price" class="col-sm-4 control-label">Book Price</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="book_price" name="book_price" value="<?= $book_info_row['book_price'] ?>" placeholder="book_price" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="book_qty" class="col-sm-4 control-label">Book Quantity</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="book_qty" name="book_qty" value="<?= $book_info_row['book_qty'] ?>" placeholder="book_qty" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for=" available_qty " class="col-sm-4 control-label">Available Quantity</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="available_qty" name="available_qty" value="<?= $book_info_row['available_qty'] ?>" placeholder="Available Quantity" required>
                            </div>
                        </div>
                        <button type="submit" name="update_book" class="btn btn-primary"><i class="fa fa-save"></i>update</button>
                    </form>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

<?php
}


?>
<?php
if (isset($_POST['update_book'])) {
  

    $id = $_POST['id'];
    $book_name = $_POST['book_name'];
    $book_author_name = $_POST['book_author_name'];
    $book_publication_name = $_POST['book_publication_name'];
    $book_purchase_date = $_POST['book_purchase_date'];
    $book_price = $_POST['book_price'];
    $book_qty = $_POST['book_qty'];
    $available_qty = $_POST['available_qty'];
    $libraian_username = $_SESSION['libraian_username'];
    

    $result = mysqli_query($con, "UPDATE `books` SET `book_name`='$book_name',`book_author_name`='$book_author_name',
    `book_publication_name`='$book_publication_name ',`book_purchase_date`='$book_purchase_date',`book_price`='$book_price',
    `book_qty`='$book_qty',`available_qty`='$available_qty', `libraian_username`= '$libraian_username' WHERE `id`= '$id' ");

    
}

?>

<?php
require_once 'footer.php';
?>