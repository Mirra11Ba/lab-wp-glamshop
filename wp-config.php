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
define( 'DB_NAME', 'localhost' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'd:#)? TV@SM2]9gMj7A`.D.OdIof_>O(NCyfU}m{xSMc @8x/?expw>L&$HZ[0bb' );
define( 'SECURE_AUTH_KEY',  'S<s-4KNA!<tsSOyp|U*RkXJZ;KErn`mZ-1#8Hb%:=tj-$DAEDL%Z%qLc4:iJ19Iv' );
define( 'LOGGED_IN_KEY',    'G!UI7@5?Bls>0y{BF6Xv,(K7I,D2q1zBQVItw]!d!f/>|Y=Lrb=69-fe&RxT`ATw' );
define( 'NONCE_KEY',        ']H1uBvf4b$y>naZ5_uS3?5~=Hd)e?>6^n;3E3N)?d1@1#>PFvZr(6Y2W7)$f2wcO' );
define( 'AUTH_SALT',        '.z1g.icYT7eI$Ru5;8E2_wb0*ezd?RpKY/d;*_ofOUSe8Hg)&yHemg4S3IT9LY^E' );
define( 'SECURE_AUTH_SALT', '^-P-sJ!D2!qM|80t[s;L@OR*Ss/%wL-%M<PvI>a0ToP&nD5^Oxu],-EtJg*%Fu$[' );
define( 'LOGGED_IN_SALT',   '&x5TcP?Bq&n{Q&3T{% V>#YXZr<@O(hO6*oi[N^o?F4eU;@o{TiZ:F&K@UH=3!SC' );
define( 'NONCE_SALT',       'F)OA3*`W:;P)>v86suIiI.gi)BN66kd*5qmK.#}B$-,B%<#^03`s}v)?rK4)!%S:' );

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
