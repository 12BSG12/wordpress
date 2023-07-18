<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', '4fpnipu_bd' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'SL%=GZuiK.G{duJa,1ObKNe|c%-S%q5|-_,lY[|ED8oU>kI3]zLKh0.~Cor6KUqQ' );
define( 'SECURE_AUTH_KEY',  'R4-+Z+Me$XAm:#jG@7s%5a(b48% ={et}CP5o$[?mELsL0=VpzO#wSD0vq)~}/cN' );
define( 'LOGGED_IN_KEY',    'U)ZHbng0& I9T%sK)xl7cQH[+CLRY)b6! =k2 ~D^K3lcFm.dBtK50cSf%O(L_Ot' );
define( 'NONCE_KEY',        'ObSF1M~48J%syBXD1e!%Z;.)Vg^zEgAZw{<MJx1h`O5ArBL)H%1/;[?HA?sy5)K4' );
define( 'AUTH_SALT',        '(k9>R/0TnUWw6/B),G?il<4*I.5e}S5jZ>%=Jvti CTPTF6>MqpR8uPBi6Wo+dLK' );
define( 'SECURE_AUTH_SALT', 'MbIUq_j(8@|/fx#7qpV%15(.x!HAzBQVxo[u5+]x!xNs-_/4.0+7Aw a(zRu:EeM' );
define( 'LOGGED_IN_SALT',   'V@=+>y^MWMbX`0jPC:;#?ymiT5,76yJ& Ce|d8|$b*tmq/tWD48t6&)/8)Oi@-^u' );
define( 'NONCE_SALT',       ':(vhmUmW]0bWU:xba&<vu}nyqq>21^..xy_.X{[x.[t9>__Y6 =+H@0]WgJc*{Q!' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
