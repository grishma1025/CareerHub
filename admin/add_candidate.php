<?php
include("header.php");
include("connect.php");
?>

<?php
$count = 0;
if (isset($_POST['btn_submit'])) {
    $nm = $_POST['txt_name'];
    if ($nm == "") {
        $err_name = "Enter name";
        $count++;
    }

    $detail = $_POST['txt_detail'];
    if ($detail == "") {
        $err_detail = "Enter detail";
        $count++;
    }

    $pos = $_POST['txt_pos'];
    if ($pos == "") {
        $err_pos = "Enter position";
        $count++;
    }
}
?>

<?php
if (isset($_POST['btn_submit']) && $count == 0) {
    $ins = "INSERT INTO tbl_happycandidate VALUES('', '$nm', '$detail', '$pos', '1');";
    $q = mysqli_query($connection, $ins);
?>
    <script>
        alert("Candidate added successfully");
        window.location.href = "happy-candidates.php";
    </script>
<?php
}
?>

<body style="padding: 20px; font-family: Arial, sans-serif; background-color: #f8f9fa;">

    <h2 style="font-size: 24px; color: #333; margin-bottom: 20px;">
        <i class="glyphicon glyphicon-edit"></i> Add Happy Candidates
    </h2>

    <div class="box-content" style="background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <form name="frm_pro" enctype="multipart/form-data" method="post">

            <div class="form-group" style="margin-bottom: 15px;">
                <label style="font-weight: bold; display: block; margin-bottom: 5px;">Name</label>
                <input type="text" name="txt_name" class="form-control" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;" placeholder="Enter Name">
                <strong><span style="color: #FF0000;"><?php echo isset($err_name) ? $err_name : ''; ?></span></strong>
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label style="font-weight: bold; display: block; margin-bottom: 5px;">Details</label>
                <textarea class="form-control" name="txt_detail" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;" placeholder="Enter details"></textarea>
                <strong><span style="color: #FF0000;"><?php echo isset($err_detail) ? $err_detail : ''; ?></span></strong>
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label style="font-weight: bold; display: block; margin-bottom: 5px;">Position</label>
                <input type="text" class="form-control" name="txt_pos" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;" placeholder="Enter position">
                <strong><span style="color: #FF0000;"><?php echo isset($err_pos) ? $err_pos : ''; ?></span></strong>
            </div>

            <button class="btn btn-primary btn-sm" type="submit" name="btn_submit" style="background-color: #007bff; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">
                Add
            </button>
        </form>
    </div>
</body>
