cd /var/www/giangtran.com.vn
sudo rm -rf ./*
sudo rm -rf .[^.]*  # Xóa các tệp ẩn
sudo git clone -b HuyHoang https://github.com/tranlehuyhoang/giangtran.com.vn.git ./ && \
sudo composer install && \
sudo cp .env.production .env && \
sudo chmod -R 777 . && \
sudo php artisan storage:link && \
sudo npm run build && \

# Xóa và tạo lại database
DB_NAME="giangtran"
DB_USER="giangtran"
DB_PASSWORD="giangtran"  # Thay đổi mật khẩu nếu cần

# Kết nối vào MySQL
sudo mysql -u root -p -e "
DROP DATABASE IF EXISTS $DB_NAME;
CREATE DATABASE $DB_NAME;
CREATE USER IF NOT EXISTS '$DB_USER'@'localhost' IDENTIFIED BY '$DB_PASSWORD';
GRANT ALL PRIVILEGES ON $DB_NAME.* TO '$DB_USER'@'localhost';
FLUSH PRIVILEGES;"

# Nhập dữ liệu từ file SQL
sudo mysql -u $DB_USER -p$DB_PASSWORD $DB_NAME < /var/www/giangtran.com.vn/giangtran.sql
