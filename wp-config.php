<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Ten plik zawiera konfiguracje: ustawień MySQL-a, prefiksu tabel
 * w bazie danych, tajnych kluczy, używanej lokalizacji WordPressa
 * i ABSPATH. Więćej informacji znajduje się na stronie
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Kodeksu. Ustawienia MySQL-a możesz zdobyć
 * od administratora Twojego serwera.
 *
 * Ten plik jest używany przez skrypt automatycznie tworzący plik
 * wp-config.php podczas instalacji. Nie musisz korzystać z tego
 * skryptu, możesz po prostu skopiować ten plik, nazwać go
 * "wp-config.php" i wprowadzić do niego odpowiednie wartości.
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'akces_18');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'akces_18');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', 'H@sl0t2D@taB@s3');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'sql.akces.nazwa.pl:3307');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Rc9e4mA-UP7N`(X*v=VuV%sfD**|+/[oxY?N0$B^&ky>$5+xCy8/+-4V5Z6+2rA5');
define('SECURE_AUTH_KEY',  '~@*M4-;nQh8K(~hyW>)AzyA/gOukr(^h1k-nYsu6sHBPE>>e^Q^|i/xDW8_5+Q+B');
define('LOGGED_IN_KEY',    'Ysb.gWD~Vh>V<j]8E&f[b^s,Lji^}-~XQm-CfJCstH{00ft7~[N>ja-Ml>oZAa]l');
define('NONCE_KEY',        'PY`IH( x[W+n_)h>>-35%{Gj&-vo2pTf-$+C)2fYwYl:-|!J}*}w,*[a-GBXuy8M');
define('AUTH_SALT',        '[@|=g5$UAb!jK- !xLv9-s+b{Sz>=5xUPCc*hLF51%D(YXv#AnhRIa43:1rH])hm');
define('SECURE_AUTH_SALT', ' Xc0gM~9RCb+oAqiy-Y3A-8EJP5c|xk2vmUz+#NvIs8AJ:Xyc`s=GAGPXaj%Id$$');
define('LOGGED_IN_SALT',   '7m6P{7CK&4vR!@=KdSPj+Ct:Eejw4m]1e|wf|061bqI]R|ieKV}&~B.(D38-G[QA');
define('NONCE_SALT',       '_faxME#ch5Gbu<zbS(ZZm_3uQ -9K;Sqn[k=5+K(i]/p&0~JB_iq1T|r^mZHd9;)');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'aa_';

/**
 * Kod lokalizacji WordPressa, domyślnie: angielska.
 *
 * Zmień to ustawienie, aby włączyć tłumaczenie WordPressa.
 * Odpowiedni plik MO z tłumaczeniem na wybrany język musi
 * zostać zainstalowany do katalogu wp-content/languages.
 * Na przykład: zainstaluj plik de_DE.mo do katalogu
 * wp-content/languages i ustaw WPLANG na 'de_DE', aby aktywować
 * obsługę języka niemieckiego.
 */
define('WPLANG', 'pl_PL');

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie ostrzeżeń
 * podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG w miejscach pracy nad nimi.
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
