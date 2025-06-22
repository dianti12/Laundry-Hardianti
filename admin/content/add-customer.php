<?php
require_once 'admin/controller/koneksi.php';
include 'admin/controller/administrator-validation.php';

if (isset($_GET['delete'])) {
    $idDelete = $_GET['delete'];
    $query = mysqli_query($config, "DELETE FROM customer WHERE id='$idDelete'");
    header("Location: ?page=customer&delete=success");
    die;
} else if (isset($_GET['edit'])) {
    $idEdit = $_GET['edit'];
    $queryEdit = mysqli_query($config, "SELECT * FROM customer WHERE id='$idEdit'");
    $rowEdit = mysqli_fetch_assoc($queryEdit);
    if (isset($_POST['edit'])) {
        $customer = $_POST['customer'];
        $phone  = $_POST['phone'];
        $address = $_POST['address'];


        $queryEdit = mysqli_query($config, "UPDATE level SET customer = '$customer' WHERE id='$idEdit'");
        header("Location: ?page=customer&edit=success");
        die;
    }
} else if (isset($_POST['add'])) {
    $level_name = $_POST['customer'];
    $phone  = $_POST['phone'];
    $address = $_POST['address'];


    $queryAdd = mysqli_query($config, "INSERT INTO customer (level_name) VALUES ('$level_name')");
    header("Location: ?page=level&add=success");
    die;
}

$queryLevel = mysqli_query($config, "SELECT * FROM customer");
?>

<div class="card shadow">
    <div class="card-header">
        <h3><?= isset($_GET['edit']) ? 'Edit' : 'Add' ?> Customer</h3>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="row">
                <div class="col-sm-6 mb-3">
                    <label for="customer" class="form-label">Customer</label>
                    <select class="form-control" name="customer" id="">
                        <option value=""> -- Add Level -- </option>
                        <?php while ($rowLevel = mysqli_fetch_assoc($queryLevel)) : ?>
                            <option value="<?= $rowLevel['id'] ?>"
                                <?php isset($_GET['edit']) && ($rowLevel['customer'] == $rowEdit['customer']) ? 'selected' : '' ?>>
                                <?php $rowcustomer['customer'] ?></option>
                        <?php endwhile ?>
                    </select>
                </div>
            </div>
            <div class="" align="right">
                <a href="?page=customer" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-primary"
                    name="<?php echo isset($_GET['edit']) ? 'edit' : 'add' ?>">
                    <?php echo isset($_GET['edit']) ? 'Edit' : 'Add' ?>
                </button>
            </div>
        </form>
    </div>
</div>