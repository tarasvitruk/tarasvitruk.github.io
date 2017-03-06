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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'template');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9%&tGW2.Oe|y!@b-fahMUc|/_!{~Ai_=XH4t|^X59}xJSMfUHc(u+s3z|>q>Xo;G');
define('SECURE_AUTH_KEY',  '%;kB,j#L@[a1,s{jMa{fW7UQ)h[,{nZ~V,W-KSc0:(Ue%~jRvj985 <(WGPhd 1F');
define('LOGGED_IN_KEY',    '+C-_BlgLxFy7!7w]n3`w5,(>Q$ak`/04XAAM ;eRP->ek6wLej4KjH9|nmuK]rO>');
define('NONCE_KEY',        '8B2`nhsHP6pqA5$[P2-[vk_(|sU%R6<I>#dAUMk%?uWHPY&/$e4-],l1}8hr{c*>');
define('AUTH_SALT',        'GAtp)_)qj.GN_FHolAeU(}DmrOo@(8d[n5)mkb,v7!A0+P+g}]3(RR4]xZ>w(V/L');
define('SECURE_AUTH_SALT', 'ir;XpOnr^1a(o:nBOFFCu<2P.4mSrQ-KDUZY0Nh]U:Gj!{:N?J2t5X_Nrc^<6Swg');
define('LOGGED_IN_SALT',   'CvLl5F|w9p$0P-R?+o kl}?[np.Sqf;?e`cor_%Y1RN:1 L9*)V.$ab@u>LTIij8');
define('NONCE_SALT',       '_F1UdmNGwLAW^-c>`c|L,Tg%::#z!hcE/qNe@K+qPWf8TkudmXN>4_$h~#8NTO[K');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
