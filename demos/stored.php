<?php require_once(__DIR__.'/../inc/header.php'); ?>
<?php
    $conn = connectMysql();
    if(isset($_POST['value'])) {
        insert($_POST['value'], $conn);
    }
    $result = get($conn);
?>
<div class="container mt-3 mb-3">
    <form method="POST">
    <div class="form-group">
        <label for="stored">Nội dung</label>
        <input type="text" name="value" class="form-control" id="stored" aria-describedby="stored">
        <small id="stored" class="form-text text-muted">Nhập : <quote> <?php echo htmlspecialchars('<script>alert(document.cookie)</script>'); ?> </quote> để thử Stored Xss</small>
    </div>
    <button type="submit" class="btn btn-primary">Gửi</button>
    </form>
    <?php
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . $row["value_post"]. " - " . htmlspecialchars($row["value_post"]). "<br>";
        }
        } else {
            echo "0 results";
        }
    ?>
</div>

<b>Nội dung ví dụ</b>
<script src="http://gist-it.appspot.com/https://github.com/tolaky94/attt/blob/master/demos/stored.php"></script>
<?php require_once(__DIR__.'/../inc/footer.php'); ?>