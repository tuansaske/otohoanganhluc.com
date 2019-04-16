<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt,
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'otohoanganhluc.com' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Y<t-`9QwAT6BDC!QkGHuCGHY,!0qAdps.][qd/SC@A#aEXq sYyoLc!Gk9{o$^}z' );
define( 'SECURE_AUTH_KEY',  '#R0LRhD-*U`OKq?2R`,s5j%X;d++V=VG+hZkfSuWp.PtO3WI;)+yb|ui7Ud|H:B/' );
define( 'LOGGED_IN_KEY',    'H5y`A/G(E+Hg)/r^TE.X;*fE3h?;|O9{hs~1]>vmUR8.BMK}{a^tm!1I!zbO2A?D' );
define( 'NONCE_KEY',        ';o,z:(]$/vAb`&kh$~kA?q:3];v?<8j0lPi_D,YK_mD}2qB9zt%fJ1!*BZK+RSyW' );
define( 'AUTH_SALT',        'Ia k*z.aNOUO9}QIlp{;H^[%N!b_^=r>,h`1gH01J7dS$X:v=%2L}OIp05QEz.Hg' );
define( 'SECURE_AUTH_SALT', 'kM)Z%AOcj$M1.HeoIG?en1na:^-!b+Nv1)`9Ns/erQtOzv_|60xAd$5Otp[?5a=E' );
define( 'LOGGED_IN_SALT',   'U*3.V0uaZ:r:Q~r<*K5Y)fyL)D9CzYu1%/t/LWf0X/CQBI}s|KLF!<zxjsvxAnC%' );
define( 'NONCE_SALT',       'qSa.gg.dJ(f1oqlI/E_D9-+MOYoT1i3GtcDx=pWDB C{Z(L]e?04DxYZ,w?$0sh>' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
