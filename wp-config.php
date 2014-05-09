<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
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
define('DB_NAME', $_SERVER["DB_NAME"]);

/** MySQL データベースのユーザー名 */
define('DB_USER', $_SERVER["DB_USER"]);

/** MySQL データベースのパスワード */
define('DB_PASSWORD', $_SERVER["DB_PASS"]);

/** MySQL のホスト名 */
define('DB_HOST', $_SERVER["DB_HOST"]);

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '#J/SrU@)=IE,)Dv~SK#qwIHc<3BF@fDoUU)JuXoTJ,bh9E9*bAyNUXu(VQ%ps/@Y');
define('SECURE_AUTH_KEY',  'PR,2.juSAN!4uM8fR2su3_r${E~)y7-i(267jp4[_`fkJI6Y#i+7Ol+[|=<4+-ES');
define('LOGGED_IN_KEY',    '2=`+$d4R*7vggwbmPN-&4?yTa <+t0nx/k$?Kytvg<2wDaQCY%CMi^c$ 0]T3Uy6');
define('NONCE_KEY',        ';1*e_ya{rZE|bB?Z;(~FN-Bp*YC^pUSj ;<.xRX9(SJ$uKU^ZaUF%=>E(FBwq)EN');
define('AUTH_SALT',        'hN;uV.qy$o6_;*}Zo#q qpTp9qawYP1PW5SN4g7&gS*A/(S^=pOx4Z*}U!FjnEAM');
define('SECURE_AUTH_SALT', '$u)okWg!^S)#-H%h:yEK$8`)US+`~u&mFO-7Nwv}iP4y@QQ!8>)*(TUm?qvcC KH');
define('LOGGED_IN_SALT',   'VL4n+Xx*J`(tgep,2(i3}EO#3rq@cI;u`|wYTgb1=QGn-^Jv<NR,>-OaBrv]L7Aa');
define('NONCE_SALT',       ',j41t>zB+f@/6Ei)-(p,lBkPE4|a#H-u$U3.-23=lwJ,SFeSnmK-dMo;)|3?Nntq');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp2_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。たとえば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定すると、ドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
