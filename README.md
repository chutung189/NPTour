# NPTour - Tour Booking Website

## 🌍 Overview
**NPTour** là một nền tảng đặt tour thân thiện với người dùng, được thiết kế để giúp việc lên kế hoạch du lịch trở nên dễ dàng. Với hệ thống đề xuất cá nhân hóa tích hợp, platform giúp người dùng tìm các tour phù hợp dựa trên sở thích và hoạt động của họ. Nền tảng cũng bao gồm các công cụ quản trị mạnh mẽ để quản lý tour, người dùng và phân tích.

---

## ✨ Features

### 🔹 User Features:
- **Tìm Tour**: Lọc tour theo từ khóa, điểm đến, thời lượng và nhiều tiêu chí khác.
- **Đặt Tour**: Quy trình đặt tour được đơn giản hóa, hỗ trợ cả người lớn và trẻ em.
- **Quản Lý Tài Khoản**:
  - Xem và quản lý lịch sử đặt tour
  - Thay đổi mật khẩu hoặc xóa tài khoản
- **Đăng Nhập An Toàn**:
  - Kích hoạt qua email để đảm bảo đăng ký tài khoản an toàn

## 🔧 Technologies Used

### Frontend:
- HTML, CSS, JavaScript, Bootstrap
- Datetimepicker để chọn ngày (chỉ chọn ngày)

### Backend:
- PHP với Laravel Framework
- MySQL cho quản lý cơ sở dữ liệu
- Xác thực an toàn với kích hoạt qua email

### Other Tools:
- jQuery cho các thành phần tương tác
- Blade templates để hiển thị nội dung động

---

## 🚀 Installation & Setup

### Prerequisites:
- PHP 8.x hoặc cao hơn
- Composer
- MySQL
- Node.js và npm (dùng để biên dịch tài sản frontend)

### Steps to Install:

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/chutung189/BookTour.git
   cd BookTour
   ```

2. **Install Backend Dependencies**:
   ```bash
   composer install
   ```

3. **Install Frontend Dependencies**:
   ```bash
   npm install
   npm run dev
   ```

4. **Set Up Environment Variables**:
   ```bash
   cp .env.example .env
   ```
   Cập nhật file `.env` với thông tin kết nối cơ sở dữ liệu và cấu hình máy chủ mail của bạn.

5. **Run Database Migrations and Seeders**:
   ```bash
   php artisan migrate --seed
   ```

6. **Start the Development Server**:
   ```bash
   php artisan serve
   ```
   Mở trình duyệt và truy cập `http://localhost:8000`.

---

## 🗂️ Project Structure

```
booktour/
├── app/               # Backend logic (Controllers, Models)
├── database/          # Migrations and seeds
├── public/            # Public assets (CSS, JS, Images)
├── resources/         # Views and Blade templates
├── routes/            # Application routes
├── storage/            # File storage
└── tests/             # Automated tests
```

---

## 📊 Database Tables

### Key Tables:
1. **User**: Lưu trữ thông tin người dùng
2. **Tour**: Lưu trữ thông tin tour
3. **Booking**: Quản lý các đặt chỗ của người dùng
4. **Review**: Ghi nhận đánh giá tour
5. **History**: Lưu nhật ký hoạt động người dùng
6. **Invoice**: Quản lý thông tin thanh toán

---

## 🔮 Future Enhancements
- Tích hợp cổng thanh toán (ví dụ: Stripe, PayPal).
- Áp dụng học máy nâng cao cho gợi ý cá nhân hóa.
- Hỗ trợ chat thời gian thực bằng WebSockets.
- Hỗ trợ đa ngôn ngữ cho người dùng toàn cầu.

---
=======
