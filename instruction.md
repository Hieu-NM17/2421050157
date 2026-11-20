# TufBlog --- Tài liệu mô tả dự án

> **Loại dự án:** Website blog\
> **Tên dự án:** TufBlog\
> **Mục tiêu:** Xây dựng website blog phục vụ bài tập/dự án môn Phát
> triển Web, cho phép người dùng đọc bài viết và tài khoản quản trị quản
> lý nội dung.\
> **Công nghệ dự kiến:** HTML, CSS, JavaScript, PHP (MySQLi) và MySQL.

------------------------------------------------------------------------

## 1. Tổng quan dự án

TufBlog là một website blog có hệ thống tài khoản và phân quyền cơ bản.
Người dùng có thể truy cập website để xem danh sách bài viết, đọc nội
dung chi tiết và sử dụng các chức năng dành cho tài khoản đã đăng nhập.
Quản trị viên có quyền quản lý bài viết và các dữ liệu nội dung của
website.

Dự án được định hướng theo mô hình ứng dụng web PHP truyền thống, sử
dụng PHP (thông qua extension MySQLi) để xử lý phía máy chủ và tương tác
với MySQL, HTML để xây dựng cấu trúc giao diện, CSS để trình bày và
JavaScript để bổ sung tương tác phía trình duyệt.

TufBlog ưu tiên:
- Cấu trúc mã nguồn rõ ràng, dễ hiểu và phù hợp với dự án học tập.
- Tách biệt phần giao diện, xử lý nghiệp vụ và truy cập cơ sở dữ liệu ở mức hợp lý.
- Tái sử dụng các thành phần giao diện dùng chung.
- Viết CSS theo quy ước BEM để hạn chế xung đột tên class.
- Quản lý mã nguồn bằng Git và GitHub, sử dụng nhánh tính năng và Pull Request.

## 2. Mục tiêu

### 2.1. Mục tiêu chính

1. Xây dựng một website blog có giao diện hoàn chỉnh.
2. Hiển thị danh sách bài viết và trang chi tiết bài viết.
3. Xây dựng chức năng đăng nhập và đăng ký tài khoản.
4. Phân biệt quyền hạn giữa người dùng thông thường và quản trị viên.
5. Cho phép quản trị viên thực hiện các thao tác quản lý bài viết.
6. Lưu trữ thông tin tài khoản và bài viết trong MySQL.
7. Áp dụng kiến thức HTML, CSS, JavaScript, PHP (MySQLi), MySQL và quy trình Git trong một dự án thực tế.

### 2.2. Phạm vi phiên bản đầu tiên

Phiên bản đầu tiên nên tập trung vào luồng hoạt động cốt lõi:

- Khách truy cập xem danh sách bài viết.
- Khách truy cập mở trang chi tiết bài viết.
- Người dùng đăng ký và đăng nhập.
- Hệ thống duy trì trạng thái đăng nhập bằng PHP Session.
- Người dùng đăng xuất.
- Quản trị viên tạo, xem, sửa và xóa bài viết.

Các tính năng như bình luận, tìm kiếm nâng cao, phân loại nhiều cấp,
thông báo, theo dõi tác giả hoặc trình soạn thảo nội dung nâng cao có
thể được cân nhắc ở các phiên bản sau. Không nên xem các tính năng này
là yêu cầu bắt buộc nếu chưa được thống nhất trong phạm vi môn học.

## 3. Đối tượng và vai trò

### 3.1. Khách truy cập (Guest)

Là người chưa đăng nhập.

Quyền dự kiến:
- Truy cập trang chủ.
- Xem danh sách bài viết đã được công khai.
- Xem nội dung chi tiết bài viết.
- Mở trang đăng nhập.
- Mở trang đăng ký.

Khách không được truy cập các trang yêu cầu xác thực hoặc thực hiện thao tác quản trị.

### 3.2. Người dùng (User)

Là người đã đăng ký và đăng nhập thành công.

Quyền cơ bản:
- Thực hiện các quyền xem nội dung công khai như khách truy cập.
- Đăng xuất khỏi hệ thống.

Nếu dự án bổ sung chức năng tương tác, người dùng có thể được cấp thêm
quyền bình luận hoặc quản lý thông tin cá nhân. Những quyền này cần được
kiểm tra ở cả giao diện và phía máy chủ.

### 3.3. Quản trị viên (Admin)

Là tài khoản có quyền quản lý nội dung website.

Quyền dự kiến:
- Truy cập khu vực quản trị.
- Xem danh sách bài viết.
- Tạo bài viết mới.
- Chỉnh sửa bài viết.
- Xóa bài viết.
- Quản lý trạng thái hiển thị của bài viết nếu chức năng này được triển khai.

Việc phân quyền phải được kiểm tra ở phía PHP. Không được chỉ ẩn nút
quản trị trên giao diện rồi xem đó là biện pháp bảo mật.

## 4. Chức năng hệ thống

### 4.1. Trang chủ

Mục đích: giới thiệu nội dung blog và cung cấp lối truy cập đến các bài viết.

Thành phần giao diện dự kiến:
- Header: logo hoặc tên TufBlog và các thành phần nhận diện.
- Navbar: điều hướng đến các khu vực chính.
- Khu vực nội dung nổi bật hoặc bài viết mới.
- Danh sách bài viết.
- Footer: thông tin bổ sung và liên kết cần thiết.

Yêu cầu:
- Chỉ hiển thị các bài viết được phép công khai.
- Có liên kết đến trang chi tiết của từng bài viết.
- Giao diện có thể sử dụng lại header, navbar và footer ở các trang khác.

### 4.2. Danh sách bài viết

Mỗi bài viết có thể hiển thị:
- Tiêu đề.
- Ảnh đại diện (nếu có).
- Tóm tắt nội dung.
- Tác giả.
- Ngày đăng.
- Liên kết xem chi tiết.

Khi số lượng bài viết tăng, có thể bổ sung phân trang để tránh tải toàn bộ dữ liệu trong một lần.

### 4.3. Chi tiết bài viết

Trang chi tiết hiển thị đầy đủ nội dung của một bài viết.

Thông tin dự kiến:
- Tiêu đề.
- Nội dung.
- Ảnh đại diện hoặc ảnh trong bài viết (nếu có).
- Tác giả.
- Thời gian đăng.
- Thời gian cập nhật (nếu có).

Hệ thống cần kiểm tra bài viết tồn tại và có trạng thái được phép xem.
Không nên đưa trực tiếp dữ liệu đầu vào từ URL vào câu truy vấn SQL.

### 4.4. Đăng ký

Trang đăng ký cho phép khách tạo tài khoản.

Thông tin tối thiểu có thể gồm:
- Tên đăng nhập.
- Mật khẩu.
- Xác nhận mật khẩu.

Quy tắc:
- Các trường bắt buộc không được để trống.
- Tên đăng nhập phải tuân thủ quy tắc hợp lệ và không bị trùng.
- Mật khẩu và xác nhận mật khẩu phải khớp.
- Mật khẩu phải được băm trước khi lưu vào cơ sở dữ liệu.
- Không lưu mật khẩu dạng văn bản thuần.

Nếu cần email hoặc xác minh email, phải bổ sung thành yêu cầu riêng;
không mặc định chức năng này có trong phiên bản đầu tiên.

### 4.5. Đăng nhập

Trang đăng nhập cho phép người dùng xác thực bằng thông tin tài khoản.

Luồng xử lý đề xuất:

1. Người dùng nhập tên đăng nhập và mật khẩu.
2. PHP nhận dữ liệu từ biểu mẫu.
3. Máy chủ kiểm tra dữ liệu đầu vào.
4. Truy vấn tài khoản bằng câu lệnh có tham số (Prepared Statement của MySQLi).
5. Kiểm tra mật khẩu bằng `password_verify()` nếu mật khẩu được lưu bằng `password_hash()`.
6. Nếu hợp lệ, tái tạo session ID bằng `session_regenerate_id(true)`.
7. Lưu thông tin định danh cần thiết vào `$_SESSION`.
8. Điều hướng người dùng đến trang phù hợp với quyền hạn.

Ví dụ cấu trúc session có thể sử dụng:

```php
$_SESSION['user_id'] = $user['id'];
$_SESSION['username'] = $user['username'];
$_SESSION['role'] = $user['role'];
```

Không nên dùng một giá trị tùy ý như `$_SESSION['dangnhap'] = 1` làm cơ
chế phân quyền duy nhất. Có thể dùng một biến đánh dấu trạng thái đăng
nhập, nhưng hệ thống vẫn cần lưu định danh người dùng và vai trò để kiểm
tra quyền truy cập.

### 4.6. Đăng xuất

Khi người dùng chọn đăng xuất:
- Xóa dữ liệu session phía máy chủ.
- Hủy session hiện tại.
- Chuyển người dùng về trang công khai hoặc trang đăng nhập.

### 4.7. Quản lý bài viết

Khu vực quản trị cung cấp các thao tác CRUD:

| Thao tác | Mô tả |
| :--- | :--- |
| Create | Tạo bài viết mới |
| Read | Xem danh sách và nội dung bài viết |
| Update | Chỉnh sửa bài viết |
| Delete | Xóa bài viết |

Các trường dữ liệu bài viết dự kiến:
- Tiêu đề.
- Nội dung.
- Tóm tắt.
- Ảnh đại diện.
- Trạng thái.
- Tác giả tạo bài.
- Thời gian tạo và cập nhật.

Chỉ Admin được phép thực hiện các thao tác quản trị. Các thao tác thay
đổi dữ liệu nên sử dụng phương thức POST và có cơ chế chống CSRF.

## 5. Kiến trúc và công nghệ

### 5.1. Công nghệ

| Thành phần | Công nghệ | Vai trò |
| :--- | :--- | :--- |
| Cấu trúc giao diện | HTML5 | Xây dựng nội dung trang |
| Trình bày | CSS3 | Bố cục, màu sắc, responsive |
| Tương tác phía trình duyệt | JavaScript | Kiểm tra giao diện và tương tác |
| Backend | PHP (MySQLi) | Xử lý request, session, nghiệp vụ và truy vấn DB |
| Database | MySQL | Lưu tài khoản và bài viết |
| Môi trường phát triển | Laragon | Chạy PHP và MySQL trên máy cá nhân |
| Quản lý mã nguồn | Git, GitHub | Theo dõi thay đổi và phối hợp nhóm |

### 5.2. Mô hình hoạt động

TufBlog sử dụng mô hình client-server:

1. Trình duyệt gửi HTTP request đến máy chủ.
2. PHP tiếp nhận request và kiểm tra dữ liệu.
3. PHP thực hiện nghiệp vụ cần thiết.
4. Khi cần, PHP truy vấn hoặc cập nhật MySQL thông qua MySQLi.
5. PHP tạo nội dung HTML trả về trình duyệt.
6. Trình duyệt hiển thị trang và thực thi JavaScript.

### 5.3. Nguyên tắc tổ chức mã nguồn

- Tách các thành phần giao diện dùng chung vào thư mục layouts.
- Tách các trang theo nhóm chức năng.
- Tách phần kết nối cơ sở dữ liệu (`MySQLi`) khỏi phần giao diện.
- Thống nhất sử dụng cú pháp **MySQLi** (khuyến khích dùng kiểu hướng đối tượng `$conn->prepare()`, `$conn->query()`) xuyên suốt toàn bộ dự án, không trộn lẫn với `PDO`.
- Thiết lập bảng mã `utf8mb4` ngay sau khi khởi tạo kết nối MySQLi để đảm bảo hiển thị tiếng Việt chính xác.
- Không viết thông tin đăng nhập database trực tiếp ở nhiều file.
- Không trộn quá nhiều câu truy vấn SQL vào template giao diện.
- Dùng `require_once` hoặc `include` với đường dẫn được tính từ `__DIR__` để tránh phụ thuộc thư mục làm việc hiện tại.
- Kiểm tra dữ liệu ở phía máy chủ, kể cả khi đã kiểm tra bằng JavaScript.

## 6. Cấu trúc thư mục đề xuất

Cấu trúc dưới đây phát triển từ cấu trúc đã được định hướng cho TufBlog.
Có thể điều chỉnh theo mã nguồn thực tế khi dự án mở rộng.

```text
TufBlog/
│
├── app/
│   ├── config/
│   │   └── database.php
│   │
│   ├── controllers/
│   │   ├── AuthController.php
│   │   └── PostController.php
│   │
│   ├── models/
│   │   ├── User.php
│   │   └── Post.php
│   │
│   └── views/
│       ├── layouts/
│       │   ├── header.php
│       │   ├── navbar.php
│       │   └── footer.php
│       │
│       ├── posts/
│       │   ├── index.php
│       │   └── detail.php
│       │
│       ├── auth/
│       │   ├── login.php
│       │   └── register.php
│       │
│       └── admin/
│           └── posts/
│               ├── index.php
│               ├── create.php
│               └── edit.php
│
├── public/
│   ├── index.php
│   ├── login.php
│   ├── register.php
│   ├── logout.php
│   │
│   └── assets/
│       ├── css/
│       │   ├── base.css
│       │   ├── components.css
│       │   └── pages/
│       │       ├── login.css
│       │       └── home.css
│       │
│       ├── js/
│       │   └── main.js
│       │
│       └── images/
│
├── database/
│   └── tufblog.sql
│
├── .gitignore
└── README.md
```

**Lưu ý:** Đây là cấu trúc mục tiêu được đề xuất, không khẳng định tất
cả file và thư mục đã tồn tại trong repository. Có thể bắt đầu với cấu
trúc đơn giản hơn rồi bổ sung `controllers`, `models` và các khu vực
quản trị khi cần.

## 7. Quy ước giao diện và CSS

### 7.1. Tái sử dụng layout

Các file layout có nhiệm vụ cung cấp thành phần giao diện chung:

- `header.php`: khai báo phần đầu tài liệu HTML, metadata, tiêu đề trang và liên kết CSS cần thiết.
- `navbar.php`: hiển thị thanh điều hướng và trạng thái tài khoản.
- `footer.php`: hiển thị phần chân trang và đóng các cấu trúc HTML tương ứng.

Các trang cần dùng layout nên include đúng thứ tự và dùng đường dẫn rõ
ràng. Ví dụ, từ file nằm trong `app/views/auth/`, đường dẫn đến
`app/views/layouts/header.php` có thể được tính bằng:

```php
require_once __DIR__ . '/../layouts/header.php';
```

Đường dẫn chính xác phụ thuộc vị trí file hiện tại. Cần tính đường dẫn
tương đối từ chính file đang gọi `require_once`, không ghép lặp lại thư
mục `app/views`.

### 7.2. Quy ước BEM

Dự án sử dụng BEM (Block, Element, Modifier) để đặt tên class CSS.

Cấu trúc:
- `block`: thành phần độc lập.
- `block__element`: thành phần con thuộc block.
- `block--modifier`: biến thể của block.
- `block__element--modifier`: biến thể của element.

Ví dụ:

```html
<header class="site-header">
    <a class="site-header__logo" href="/">TufBlog</a>
    <nav class="site-header__nav">
        <a class="site-header__link site-header__link--active" href="/">Trang chủ</a>
    </nav>
</header>
```

Nguyên tắc:
- Dùng tên class có ý nghĩa.
- Không đặt tên class theo hình thức trình bày như `red-text` nếu đó không phải mục đích của class.
- Hạn chế selector quá sâu.
- Tránh sử dụng một class chung cho nhiều thành phần không liên quan.
- Dùng modifier cho trạng thái hoặc biến thể.

### 7.3. CSS nền tảng

`base.css` nên chứa:
- CSS reset hoặc normalize cơ bản.
- Biến CSS cho màu sắc, font, khoảng cách và bán kính bo góc.
- Thiết lập font mặc định.
- Kiểu chữ cơ bản.
- Quy tắc box-sizing.
- Các tiện ích nền tảng thực sự dùng chung.

CSS riêng của từng trang nên đặt trong file tương ứng để tránh `base.css` trở nên quá lớn.

### 7.4. Responsive

Giao diện nên hoạt động tốt trên:
- Máy tính để bàn.
- Máy tính bảng.
- Điện thoại.

Ưu tiên bố cục linh hoạt, kích thước theo tỷ lệ phù hợp và media query tại các điểm gãy cần thiết.

## 8. Thiết kế cơ sở dữ liệu dự kiến

Thiết kế tối thiểu có thể gồm hai bảng chính: `users` và `posts`.

### 8.1. Bảng `users`

| Cột | Kiểu dữ liệu gợi ý | Ý nghĩa |
| :--- | :--- | :--- |
| id | INT, PK, AUTO_INCREMENT | Mã người dùng |
| username | VARCHAR(50), UNIQUE | Tên đăng nhập |
| password | VARCHAR(255) | Mật khẩu đã băm |
| display_name | VARCHAR(100), NULL | Tên hiển thị |
| email | VARCHAR(100), UNIQUE, NULL | Địa chỉ email |
| avatar | VARCHAR(255), NULL | Đường dẫn ảnh đại diện |
| role | ENUM('user', 'admin') | Vai trò: user hoặc admin |
| created_at | DATETIME | Thời điểm tạo tài khoản |
| updated_at | DATETIME, NULL | Thời điểm cập nhật |

### 8.2. Bảng `posts`

| Cột | Kiểu dữ liệu gợi ý | Ý nghĩa |
| :--- | :--- | :--- |
| id | INT, PK, AUTO_INCREMENT | Mã bài viết |
| user_id | INT, FK | Tác giả tạo bài |
| title | VARCHAR(255) | Tiêu đề |
| slug | VARCHAR(255), UNIQUE | Đường dẫn thân thiện |
| summary | TEXT, NULL | Nội dung tóm tắt |
| content | LONGTEXT | Nội dung bài viết |
| thumbnail | VARCHAR(255), NULL | Đường dẫn ảnh đại diện |
| status | ENUM('draft', 'published') | Trạng thái bài viết |
| created_at | DATETIME | Thời điểm tạo |
| updated_at | DATETIME, NULL | Thời điểm cập nhật |

Quan hệ:
- Một người dùng có thể tạo nhiều bài viết.
- Mỗi bài viết thuộc về một người dùng.
- `posts.user_id` tham chiếu `users.id`.

## 9. Quy tắc bảo mật cơ bản

Dù là dự án học tập, TufBlog vẫn cần tuân thủ các nguyên tắc bảo mật quan trọng:

1. **Mật khẩu:** dùng `password_hash()` để lưu và `password_verify()` để xác thực.
2. **SQL Injection:** sử dụng prepared statements của **MySQLi** (`$stmt = $conn->prepare(...)` và `$stmt->bind_param(...)`) cho tất cả các câu truy vấn có chứa dữ liệu đầu vào từ người dùng. Tuyệt đối không nối chuỗi biến trực tiếp vào câu lệnh SQL.
3. **XSS:** escape dữ liệu khi hiển thị HTML, ví dụ dùng `htmlspecialchars()` cho nội dung văn bản thông thường.
4. **Session:** gọi `session_start()` trước khi sử dụng session; tái tạo session ID sau khi đăng nhập.
5. **Phân quyền:** kiểm tra đăng nhập và role ở phía máy chủ trên mọi trang/chức năng cần bảo vệ.
6. **CSRF:** dùng token cho các biểu mẫu thực hiện thao tác thay đổi dữ liệu.
7. **Upload file:** nếu cho phép tải ảnh lên, kiểm tra MIME type, phần mở rộng, kích thước và tên file; không tin tưởng tên file do người dùng gửi.
8. **Thông tin cấu hình:** không commit mật khẩu database hoặc thông tin bí mật lên GitHub.
9. **Lỗi hệ thống:** không hiển thị thông tin nhạy cảm như đường dẫn máy chủ, câu truy vấn hoặc thông tin kết nối database cho người dùng cuối.

## 10. Quy trình Git và phối hợp nhóm

Dự án sử dụng GitHub để quản lý mã nguồn. Với quy mô nhỏ, có thể áp dụng quy trình đơn giản:

- `main`: nhánh ổn định, chứa phiên bản đã được kiểm tra.
- `feature/<ten-tinh-nang>`: nhánh phát triển từng tính năng.
- Người thực hiện không push trực tiếp lên `main`.
- Mỗi tính năng được phát triển trên nhánh riêng.
- Sau khi hoàn thành, tạo Pull Request vào `main`.
- Người phụ trách kiểm tra thay đổi trước khi merge.

Ví dụ tên nhánh:
- `feature/login`
- `feature/register`
- `feature/post-list`
- `feature/post-detail`
- `feature/admin-post-management`
- `fix/login-validation`

Quy trình đề xuất:

1. Cập nhật `main`.
2. Tạo nhánh tính năng từ `main`.
3. Phát triển và kiểm tra chức năng.
4. Commit với nội dung mô tả rõ ràng.
5. Push nhánh lên GitHub.
6. Tạo Pull Request.
7. Kiểm tra code và xử lý góp ý.
8. Merge vào `main` khi đạt yêu cầu.

Ví dụ:

```bash
git switch main
git pull origin main
git switch -c feature/login

git add .
git commit -m "feat: implement login page"
git push -u origin feature/login
```

Nên dùng các tiền tố commit nhất quán như `feat`, `fix`, `docs`, `style`, `refactor` và `test`.

## 11. Kế hoạch phát triển đề xuất

Có thể triển khai theo thứ tự sau để giảm phụ thuộc giữa các chức năng.

| Giai đoạn | Công việc | Kết quả |
| :--- | :--- | :--- |
| 1. Khởi tạo | Tạo repository, cấu trúc thư mục, cấu hình Laragon | Dự án chạy được |
| 2. Layout | Hoàn thiện header, navbar, footer, CSS nền tảng | Khung giao diện dùng chung |
| 3. Database | Tạo database và bảng users, posts | Có cấu trúc lưu trữ |
| 4. Authentication | Đăng ký, đăng nhập, đăng xuất, session | Quản lý tài khoản |
| 5. Blog public | Trang chủ, danh sách và chi tiết bài viết | Đọc nội dung blog |
| 6. Admin | CRUD bài viết và kiểm tra quyền | Quản lý nội dung |
| 7. Hoàn thiện | Responsive, kiểm thử, sửa lỗi và tài liệu | Bản MVP hoàn chỉnh |

## 12. Tiêu chí nghiệm thu MVP

MVP có thể được xem là đạt yêu cầu khi:

- [ ] Website chạy được trên môi trường phát triển đã thống nhất.
- [ ] Các trang sử dụng layout chung nhất quán.
- [ ] Người dùng có thể đăng ký tài khoản.
- [ ] Người dùng có thể đăng nhập bằng thông tin hợp lệ.
- [ ] Đăng nhập sai hiển thị thông báo phù hợp.
- [ ] Người dùng có thể đăng xuất.
- [ ] Trạng thái đăng nhập được duy trì bằng session.
- [ ] Khách có thể xem danh sách bài viết công khai.
- [ ] Khách có thể xem chi tiết bài viết công khai.
- [ ] Admin có thể tạo, sửa và xóa bài viết.
- [ ] User không thể truy cập chức năng dành riêng cho Admin.
- [ ] Dữ liệu được lưu trong MySQL.
- [ ] Các truy vấn có dữ liệu đầu vào sử dụng prepared statements của MySQLi.
- [ ] Mật khẩu không được lưu dạng văn bản thuần.
- [ ] Giao diện sử dụng được trên màn hình nhỏ.
- [ ] Mã nguồn được quản lý trên GitHub theo quy trình đã thống nhất.

## 13. Những điểm cần thống nhất khi phát triển tiếp

Một số chi tiết chưa được xác định đầy đủ trong phạm vi mô tả hiện tại
và cần chốt trước khi triển khai tương ứng:

- Người dùng thông thường có được bình luận bài viết hay không?
- Có cần trang hồ sơ cá nhân hay đổi mật khẩu không?
- Bài viết có danh mục/tag hay chỉ cần danh sách đơn giản?
- Có cần tìm kiếm và phân trang trong MVP không?
- Admin có cần quản lý tài khoản người dùng không?
- Ảnh bài viết được upload lên máy chủ hay chỉ lưu URL?
- Bài viết có các trạng thái nháp, công khai và ẩn hay không?
- Có yêu cầu xác minh email hoặc khôi phục mật khẩu không?

Không nên tự động mở rộng phạm vi MVP trước khi các yêu cầu này được thống nhất.

## 14. Kết luận

TufBlog là dự án website blog quy mô nhỏ, phù hợp để thực hành phát
triển web với HTML, CSS, JavaScript, PHP (MySQLi) và MySQL. Phiên bản đầu tiên
nên ưu tiên hoàn thiện các luồng nền tảng: giao diện dùng chung, tài
khoản và session, hiển thị bài viết, cùng chức năng quản trị bài viết.

Việc tổ chức mã nguồn rõ ràng, áp dụng BEM, kiểm tra quyền ở phía máy
chủ và sử dụng GitHub theo nhánh tính năng sẽ giúp dự án dễ bảo trì, dễ
mở rộng và thuận lợi cho việc phối hợp nhóm.