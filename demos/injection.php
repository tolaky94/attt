<?php require_once(__DIR__.'/../inc/header.php'); ?>
<?php
    $conn = connectMysql();
    if(isset($_GET['search'])) {
        $result = search($conn, $_GET['search']);
    }
?>
<div class="container mt-3 mb-3">
    <form method="GET">
    <div class="form-group">
        <label for="stored">Từ khóa</label>
        <input type="text" name="search" class="form-control" id="stored" aria-describedby="stored">
        <small id="stored" class="form-text text-muted">Nhập : <quote> <?php echo htmlspecialchars("anything' OR 'x'='x"); ?> </quote> để thử Injection</small>
    </div>
    <button type="submit" class="btn btn-primary">Tìm</button>
    </form>
    <?php
        if(isset($result->num_rows)) {
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "ID: " . $row["id"]."-".$row["name_post"]."-". htmlspecialchars($row["value_post"]). "<br>";
            }
            } else {
                echo "0 results";
            }
        }
    ?>
</div>

<b>Nội dung ví dụ</b>
<script src="https://gist-it.appspot.com/https://github.com/tolaky94/attt/blob/master/demos/injection.php"></script>
<?php require_once(__DIR__.'/../inc/footer.php'); ?>
