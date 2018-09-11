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
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', getenv('WORDPRESS_DB_NAME'));

/** MySQL データベースのユーザー名 */
define('DB_USER', getenv('WORDPRESS_DB_USER'));

/** MySQL データベースのパスワード */
define('DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD'));

/** MySQL のホスト名 */
define('DB_HOST', getenv('WORDPRESS_DB_HOST'));

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
define('AUTH_KEY',         ']s7v^n YHc#9dhgA-s?a^LT@}7pP=#Te^U!Pj?p]5=Y~?Z%gYTf@=<<n-!V<2t:B');
define('SECURE_AUTH_KEY',  'x6*bpH!Q:l}P^UKmvd:x>eAg&c=Rbgh|6.8)1~q;V%N_>G*m9K#7D!ZadwRo[g9o');
define('LOGGED_IN_KEY',    'oE7OA;%snD66ty$7=f&ksj&]Q<R5<4.ung!5@:gTNT[z;M4}*m6$a$? _wYY{Q9v');
define('NONCE_KEY',        'F#<-SAO>4mpVa}k#U8794h2n+XfdRn*(;]%KfovuEE>$7wS2,Cb5)_Mns3j!g>ph');
define('AUTH_SALT',        '-bv4J.wD[OV@>kLe}t_8%|Qsj*kb2DF=SiAQX5]]^;2v0`ZJ2 HG0?IQvcHVCcv|');
define('SECURE_AUTH_SALT', '3Hawo=+ZRr!+<z&b]C@#6C%DjWN(>z/)F:1~V{;_Qtt+dI[Zs*j%<qg_wiu#21,N');
define('LOGGED_IN_SALT',   '?{9fSCtlhuO{1mCvXu%vdPL?X>Zw#xXt]q!<Tl#<PN_#skNA5O8F8FXW1n4]E] t');
define('NONCE_SALT',       'cf<(i{~14~84Ed9kkf?|}s:`^^b-J3}ZciU)s-y@5JgJV#Pp1x{o^OrVh%HBc,^;');

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

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
