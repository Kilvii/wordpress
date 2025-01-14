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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'g &=PAt3i@~EgpwozPEF|f@*ZK32+Jbq)apd7O(HwS30+CKZ)@OQPMo_0{@i(vRQ' );
define( 'SECURE_AUTH_KEY',  'w-!MH*_yVwl #V[DuhrD[eP_]JmA,,&^9g9y[+cF/!R*aHai~@dd[{7eK@Bv{Ba1' );
define( 'LOGGED_IN_KEY',    'M:i,f-k0HcG.NCJ~q [$dV@rfoY8xUowocNC%9NK`5} 965?FkXzxruZ?A-}Bxm#' );
define( 'NONCE_KEY',        'mhXiNkml+K: TB@n1Od~qfQ2[+y2`KCJy;lcgL[|#SdXOEA.<|P;uR^{n:sVjC1f' );
define( 'AUTH_SALT',        '^kO0f/LScMR?b[j %C|:%m].G&3@bfxi>qhXI+]/_/0RwdUsr5{=>=9~uC~v`t[P' );
define( 'SECURE_AUTH_SALT', 'UMs@B1!pe6q? )@4+SOm .&;-p=pu42z 8E-_b@{KFTB#ED6`4-eWcy]MaSZK+B:' );
define( 'LOGGED_IN_SALT',   '_`3+d*WJprQ+j3<O*3^xf%gp*fDgtGn6C52:ZZ|W#H|wzKMSziAoo3r X,db:*+L' );
define( 'NONCE_SALT',       'Y5#p8>E>`fKjXv,x,~^psh! @pHh(QHv=ep-.!DKJ[WRk0PG;fCutMNCLQ*Q7kmF' );

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
