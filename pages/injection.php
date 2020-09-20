<div class="card">
    <div class="card-header bg-primary text-white">
        Lỗ hổng bảo mật SQL Injection
    </div>
    <div class="card-body">
        <h5 class="card-title"></h5>
        <div class="card-text">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Định nghĩa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="vidu-tab" data-toggle="tab" href="#vidu" role="tab" aria-controls="vidu" aria-selected="false">Ví dụ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="khacphuc-tab" data-toggle="tab" href="#khacphuc" role="tab" aria-controls="khacphuc" aria-selected="false">Cách khắc phục</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                SQL injection – còn được gọi là SQLi – sử dụng những lỗ hổng trong các kênh đầu vào (input) của website để nhắm mục tiêu vào cơ sở dữ liệu nằm trong phần phụ trợ của ứng dụng web, nơi lưu giữ những thông tin nhạy cảm và có giá trị nhất.
                <br>
                Chúng có thể được kẻ tấn công sử dụng để ăn cắp hoặc xáo trộn dữ liệu, cản trở sự hoạt động của các ứng dụng, và, trong trường hợp xấu nhất, nó có thể chiếm được quyền truy cập quản trị vào máy chủ cơ sở dữ liệu.
                <br>
                </div>
                <div class="tab-pane fade" id="vidu" role="tabpanel" aria-labelledby="vidu-tab">
                Thử submit các field từ khóahoặc bằng anything' OR 'x'='x
                <br>
                Nếu thành công, thì có thể xem tất cả record trong table đó.
                <br>
                <img class="img-fluid" src="./assets/images/injection.png" />
                <br>
                <a href="./demos/injection.php">Demo Injection</a>
                <br>
                </div>
                <div class="tab-pane fade" id="khacphuc" role="tabpanel" aria-labelledby="khacphuc-tab">
                    <p>
                        - Hạn chế nối chuỗi khi sử dụng câu lệnh MySQl.
                        <br>
                        - Thực hiện kiểm tra tham số đầu vào trước khi sử dụng. (Validator, Escape, Ép kiểu).
                        <br>
                        - Không bao giờ tin tưởng tham số truyền từ client. Bất ký tham số nào cũng đều có nguy cơ bị khai thác.
                        <br>
                        - Sử dụng các hàm có sẵn của framework để lấy giá trị tham số. Hạn chế dùng $_GET, $_POST
                        <br>
                        - Đối với Quản lý dự án cần review kỹ lưỡng code trước khi triển khai, phổ biến coding convention lại cho người mới trước khi join dự án.
                    </p>
                </div>
            </div>
        </div>
    </div>
    
</div>