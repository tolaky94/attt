<?php require_once(dirname( __FILE__ ).'/inc/header.php'); ?>
    <div class="container-fluid wrapper flex-grow-1">
        <div class="row">
            <div class="col-md-3 col-sm-12 mt-5">
                <ul class="list-group">
                    <li class="list-group-item <?php render($page == 'weekpw' ? 'active' : ''); ?>"><a href="?page=weekpw">Lỗi bảo mật hệ thống</a></li>
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
                        require_once('./pages/git.php');
                        break;
                    case 'weekpw':
                        require_once('./pages/weekpw.php');
                        break;
                    case 'xss':
                        require_once('./pages/xss.php');
                        break;
                    case 'injection':
                        require_once('./pages/injection.php');
                        break;
                    default:
                        require_once('./pages/home.php');
                        break;
                }
                ?>
            </div>
        </div>
    </div>
<?php require_once(dirname( __FILE__ ).'/inc/footer.php'); ?>
