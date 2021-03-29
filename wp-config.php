<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'ca03044_1' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'ca03044_1' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'nrpZBU8C' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!c$EtA346V$bA)FZeTk~tC>v^T>N7`SjU>n}rDyj}dPm[fP`=*P~96+#XIJ]D1|R');
define('SECURE_AUTH_KEY',  'q2Jv/vgQm|Y|[,CKNr0]]|AtW-+&b_l+w]V3rDD>o*13#Rpa-Nb^;yRE9Df#=%}}');
define('LOGGED_IN_KEY',    '~>W}L {aD!3CEA=@L`nO!~4oy$|R-p|ry`kPRrjt2d-S/am-v&@#DdA`<+b]JFN|');
define('NONCE_KEY',        'rthQ$hLy sMkqM?x!dB+Y];yC96{m*cV-`R,x#8`p<2>Yn.,pQs76Jg_qe&MLk,m');
define('AUTH_SALT',        'l}+)?|0o;xZ:XO@=g,W^{NS3{l;@=LU|]}]tM&ziW./1%-MG*-c7Xt]a+8;KGG9W');
define('SECURE_AUTH_SALT', '#hC^_Hl^wr!(CtSI2A+Q{X=6uanO!z|f`H]DtmH,Fs;|}OHk*4L_jY]?5(s/l& j');
define('LOGGED_IN_SALT',   '/}S-9t&C*,u2;#L3wcgs-xv-6nx:)+u`N4*&$r:rAK4OFNg?~@=%:sXh_1<WR8ja');
define('NONCE_SALT',       'uL-(iJHKI-|%/LXL_$Ha]7[&xXpM-8&3b,i|EyGWrw {+Bd6!amM3gO3}$ }|x!f');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
