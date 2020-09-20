<?php require_once(__DIR__.'/../inc/header.php'); ?>
<div class="container mt-3 mb-3">
    <form method="POST">
    <div class="form-group">
        <label for="stored">Nội dung</label>
        <input type="text" name="value" class="form-control" id="stored" aria-describedby="stored">
        <small id="stored" class="form-text text-muted">Thay nội dung param message trên url bằng <quote> <?php echo htmlspecialchars('<label>Gender</label><select class = "form-control" onchange="java_script_:show()"><option value="Male">Male</option><option value="Female">Female</option></select><script>function show(){alert("hacked");}</script>'); ?> </quote> để thử Dom Based Xss</small>
    </div>
    <?php render(isset($_GET['message']) ? $_GET['message'] : '') ?>
    <br>
    <br>
    <button type="submit" class="btn btn-primary">Gửi</button>
    </form>
</div>

<b>Nội dung ví dụ</b>
<script src="https://emgithub.com/embed.js?target=https%3A%2F%2Fgithub.com%2Ftolaky94%2Fattt%2Fblob%2Fmaster%2Fdemos%2Fdom.php&style=github&showBorder=on&showLineNumbers=on&showFileMeta=on"></script>
<?php require_once(__DIR__.'/../inc/footer.php'); ?>
