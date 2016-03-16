<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'word_press');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'wp_user');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'shirokuma3');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9w{W$EglcUppkGn3Qm}9e<dqF2|6lhw-r-l^*@<A)5lU-.$8~hb#FRUTq_kqhMHZ');
define('SECURE_AUTH_KEY',  '_rTM|^PA]cP,N)+7^5mz#&r>-/E|N|~B#5jfxe_lvmP/c TKiv}x).-5nfNs1@&6');
define('LOGGED_IN_KEY',    'gpH`Yl;5Kfeqg/:r;Kv0v1aR|8$*z]oMOy$-BaF=md}aBZeCdz-<y1b-a.a|wkag');
define('NONCE_KEY',        'F0fGhnFSH#gei$FS(a*j]+~aeI&Qou,a]p}z{hLCNM{91m;W83{N)bb$W/B.S`M1');
define('AUTH_SALT',        'j&`0qjw-|R|PJBPsY<ohLZM$hD?q322,tVCD8`J(2M{>?@f|us{obA$ TNOB6t5Q');
define('SECURE_AUTH_SALT', '-)^9L[{h.KyFthTlg45vaam=,Y-YW_*1[s|3G.gZ$cCRP!CMAh1Rf%N;hR,D^Y{~');
define('LOGGED_IN_SALT',   'FxrSR]7&3|aeOF[GWJC(I{%B3/N%eylt@xI1A4D=h[n~TEI^+Mu|=(H`t_!bE+YV');
define('NONCE_SALT',       '8,y)lygyBm +7KX<l#D=U8:5/[Ai+D4E__O<34Tpzq0VP~N^[J7<R*`VXFa-lX!2');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);
define('FS_METHOD', direct);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
