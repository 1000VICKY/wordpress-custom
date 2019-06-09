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
define( 'DB_NAME', 'wordpress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'senbiki' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'SenbikiAkifumi@10574318@1209' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'j^wXe9_tz/$(vz[6JX;1ZaKi`U*Mek6gu0UJF=H!5[u,Mtu:Ycnr[e$5h)1a^T:H' );
define( 'SECURE_AUTH_KEY',  '1U+#Hd%_-gp&kJEEk<f3e6z<;(vhFhepMc[(BE+_CSTpG*r_t9I#8LT>2;7:Lodd' );
define( 'LOGGED_IN_KEY',    'AhICuxA-DwY(,5Tx[Bxdi(pa81Z7K2iHX[eE*9>K@NO#Jp(O,^3+e! YigF/&+,T' );
define( 'NONCE_KEY',        'hauh.e=k:!!$o9##,NvD4AI cavVX!>T@T[QA6wr#78HA}|d2Jqsl=i(|Yo2^|Nf' );
define( 'AUTH_SALT',        'PkbvX:vQ7uU;={agv>IkBn+]#<3><8;z%q|bE.uK{aY1:Z{i4U42IvxosF^R`1*#' );
define( 'SECURE_AUTH_SALT', 'bt 9@G6IV o^6Pnnj?paZY60zAW*]s>)S{Q5Lc~H|cm^zDj??;` bv`@Ej+>Dm:+' );
define( 'LOGGED_IN_SALT',   '[ecp:>&w/!3vQUD~7G7Q/7}_,mFV]@4)S0:..&C|6)2~YO]I${-$MLwMf.pxR +?' );
define( 'NONCE_SALT',       'EiFlgW~lzq8.pCc*>qrC eA-E?Bu:TiC$-?`43h0W{Eg_/z};nI:=%,-L9@{^!+Y' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

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

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
