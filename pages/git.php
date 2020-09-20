<div class="card">
    <div class="card-header bg-primary text-white">
        Để lộ file Config Git
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
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Cách khắc phục</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    Ngày nay Git đã dần trở lên phổ biến với hầu hết các lập trình viên và quản trị hệ thống tuy nhiên với sự phổ biến đó khi không có sự quản trị chặt chẽ rất dễ bị hacker tấn công mất dữ liệu. mình cũng đã đi tìm lỗi này khá nhiều trên các dịch vụ và mình thấy nó khá phổ biến một lỗ hổng liên quan tới việc cấu hình của git trên server đang chạy.
                    <br>
                    Git là tên gọi của một Hệ thống quản lý phiên bản phân tán (Distributed Version Control System – DVCS) là một trong những hệ thống quản lý phiên bản phân tán phổ biến nhất hiện nay. DVCS nghĩa là hệ thống giúp mỗi máy tính có thể lưu trữ nhiều phiên bản khác nhau của một mã nguồn được nhân bản (clone) từ một kho chứa mã nguồn (repository), mỗi thay đổi vào mã nguồn trên máy tính sẽ có thể ủy thác (commit) rồi đưa lên máy chủ nơi đặt kho chứa chính. Và một máy tính khác (nếu họ có quyền truy cập) cũng có thể clone lại mã nguồn từ kho chứa hoặc clone lại một tập hợp các thay đổi mới nhất trên máy tính kia. Trong Git, thư mục làm việc trên máy tính gọi là Working Tree.
                    <br>
                    Ngoài ra, có một cách hiểu khác về Git đơn giản hơn đó là nó sẽ giúp bạn lưu lại các phiên bản của những lần thay đổi vào mã nguồn và có thể dễ dàng khôi phục lại dễ dàng mà không cần copy lại mã nguồn rồi cất vào đâu đó. Và một người khác có thể xem các thay đổi của bạn ở từng phiên bản, họ cũng có thể đối chiếu các thay đổi của bạn rồi gộp phiên bản của bạn vào phiên bản của họ. Cuối cùng là tất cả có thể đưa các thay đổi vào mã nguồn của mình lên một kho chứa mã nguồn.
                    <br>
                    Cơ chế lưu trữ phiên bản của Git là nó sẽ tạo ra một “ảnh chụp” (snapshot) trên mỗi tập tin và thư mục sau khi commit, từ đó nó có thể cho phép bạn tái sử dụng lại một ảnh chụp nào đó mà bạn có thể hiểu đó là một phiên bản. Đây cũng chính là lợi thế của Git so với các DVCS khác khi nó không “lưu cứng” dữ liệu mà sẽ lưu với dạng snapshot.
                    <br>
                    Từ trên các bạn có thể thấy git có thể dùng để update cũng như đọc các đoạn code của các bạn dẫn tới khi bạn để lộ cấu hình thì rất nguy hiểm.
                    <br>
                    Với cụm từ khóa intitle:"index of" ".git" chúng tôi tìm thấy gần 500 website đã dính lỗi lộ cấu hình của git dẫn tới việc bị mất code.
                </div>
                <div class="tab-pane fade" id="vidu" role="tabpanel" aria-labelledby="vidu-tab">
                    Tôi sẽ clone chính website này khi có được thông tin cấu hình git.
                    <br>
                    Đường dẫn lộ cấu hình: <a href="./.git/config"> .git/config </a>
                    <br>
                    Tải Git-Dumper.txt : <a href="./assets/tools/gitdumper.txt"> gitdumper.txt </a>
                    <br>
                    Đổi tên file thành gitdumper.sh sau đó chạy lệnh sau : ./gitdumper.sh http://locahost/.git/ test/
                    <br>
                    Kết quả : 
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    Tôi sẽ clone chính website này khi có được thông tin cấu hình git.
                    <br>
                    Đường dẫn lộ cấu hình: <a href="./.git/config"> .git/config </a>
                    <br>
                    Tải Git-Dumper.txt : <a href="./assets/tools/gitdumper.txt"> gitdumper.txt </a>
                    <br>
                    Đổi tên file thành gitdumper.sh sau đó chạy lệnh sau : ./gitdumper.sh http://locahost/.git/ test/
                    <br>
                    Kết quả : 
                </div>
            </div>
        </div>
    </div>
    
</div>