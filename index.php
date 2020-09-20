<?php
include_once('./helper/function.php');
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ về các lỗi bảo mật ATTT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.2.0/build/styles/default.min.css">
    <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.2.0/build/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <style>
        .list-group .active a {
            color: #fff;
        }

        .tab-pane {
            line-height: 30px;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Các lỗi bảo mật ATTT</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </header>
    <div class="container-fluid wrapper flex-grow-1">
        <div class="row">
            <div class="col-md-3 col-sm-12 mt-5">
                <ul class="list-group">
                    <li class="list-group-item <?php render($page == 'weekpass' ? 'active' : ''); ?>"><a href="?page=weekpass">Mật khẩu yếu</a></li>
                    <li class="list-group-item <?php render($page == 'git' ? 'active' : ''); ?>"><a href="?page=git">Lộ các file .git, .env, file backup</a></li>
                    <li class="list-group-item <?php render($page == 'xss' ? 'active' : ''); ?>"><a href="?page=xss">Xss</a></li>
                    <li class="list-group-item <?php render($page == 'injection' ? 'active' : ''); ?>"><a href="?page=injection">Sql Injection</a></li>
                    <li class="list-group-item <?php render($page == 'upload' ? 'active' : ''); ?>"><a href="?page=upload">Upload Files</a></li>
                </ul>
            </div>
            <div class="col-md-9 col-sm-12 mt-5">
                <?php
                switch ($page) {
                    case 'git':
                        include_once('./pages/git.php');
                        break;
                    case 'xss':
                        include_once('./pages/xss.php');
                        break;
                    default:
                        include_once('./pages/home.php');
                        break;
                }
                ?>
            </div>
        </div>
    </div>
    <footer>
        <nav class="bg-light text-center p-3">
            <small>
                Phạm Cao Kỳ 2020
            </small>
        </nav>
    </footer>
</body>

</html>
<?php
