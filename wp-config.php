<?php
/**
 * Konfigurasi dasar WordPress.
 *
 * Berkas ini berisi konfigurasi-konfigurasi berikut: Pengaturan MySQL, Awalan Tabel,
 * Kunci Rahasia, Bahasa WordPress, dan ABSPATH. Anda dapat menemukan informasi lebih
 * lanjut dengan mengunjungi Halaman Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Menyunting wp-config.php}. Anda dapat memperoleh pengaturan MySQL dari web host Anda.
 *
 * Berkas ini digunakan oleh skrip penciptaan wp-config.php selama proses instalasi.
 * Anda tidak perlu menggunakan situs web, Anda dapat langsung menyalin berkas ini ke
 * "wp-config.php" dan mengisi nilai-nilainya.
 *
 * @package WordPress
 */

// ** Pengaturan MySQL - Anda dapat memperoleh informasi ini dari web host Anda ** //
/** Nama basis data untuk WordPress */
define( 'DB_NAME', 'db_travel' );

/** Nama pengguna basis data MySQL */
define( 'DB_USER', 'root' );

/** Kata sandi basis data MySQL */
define( 'DB_PASSWORD', '' );

/** Nama host MySQL */
define( 'DB_HOST', 'localhost' );

/** Set Karakter Basis Data yang digunakan untuk menciptakan tabel basis data. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Jenis Collate Basis Data. Jangan ubah ini jika ragu. */
define('DB_COLLATE', '');

/**#@+
 * Kunci Otentifikasi Unik dan Garam.
 *
 * Ubah baris berikut menjadi frase unik!
 * Anda dapat menciptakan frase-frase ini menggunakan {@link https://api.wordpress.org/secret-key/1.1/salt/ Layanan kunci-rahasia WordPress.org}
 * Anda dapat mengubah baris-baris berikut kapanpun untuk mencabut validasi seluruh cookies. Hal ini akan memaksa seluruh pengguna untuk masuk log ulang.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L(Sq5E~%<xp;1V:iX2Mg)y9|:Yf@bzyq-ivnr-N+61vCZpbDbY<h*`&~]&QN/WuK' );
define( 'SECURE_AUTH_KEY',  '}Oz<xkGw}TU>Y%2(m3w;jSj@ZQFuis`YI(vr^c-16fgZkM`)d?:vMLgvdx!rtYFR' );
define( 'LOGGED_IN_KEY',    'Lt-41=IB[Qdc.i6-%O@#tgr|Y4<qgLj~ZdD(UCU|>q`<z}995li&Kb/gydjd.!QP' );
define( 'NONCE_KEY',        '9}<UT/(tv@v@%R4^au8yElM%EZ1`WM>=M>zDWvy|oY (7K9)s#ek~ofejeJW)7Ku' );
define( 'AUTH_SALT',        'XI]JNBXow`1V*Qc%f0>*iUw@*KK=0VMUrf3cZ=Z}[VLrc9m`z4]6bp`Fym<.heA%' );
define( 'SECURE_AUTH_SALT', 'X k=U%a>ag4w9;fet[_}Nb)/u`NvyR+S9ev@5#N4@HEZE+KI@RqU?EYZpIU{t$WT' );
define( 'LOGGED_IN_SALT',   'J,?FPJ@eFm/SDuu(<p3ct`FSc5D7p#!^Zl/1Mg6TO`X,bgK3Y,kP+vi i?%BWRm}' );
define( 'NONCE_SALT',       '8R3lLb+8Uz)TR0))aAe* i*|tr{@x;#KK>T(,O`{-@Oq[l3e75-jKg->q<nQ$aS$' );

/**#@-*/

/**
 * Awalan Tabel Basis Data WordPress.
 *
 * Anda dapat memiliki beberapa instalasi di dalam satu basis data jika Anda memberikan awalan unik
 * kepada masing-masing tabel. Harap hanya masukkan angka, huruf, dan garis bawah!
 */
$table_prefix = 'wp_';

/**
 * Untuk pengembang: Moda pengawakutuan WordPress.
 *
 * Ubah ini menjadi "true" untuk mengaktifkan tampilan peringatan selama pengembangan.
 * Sangat disarankan agar pengembang plugin dan tema menggunakan WP_DEBUG
 * di lingkungan pengembangan mereka.
 */
define('WP_DEBUG', false);

/* Cukup, berhenti menyunting! Selamat ngeblog. */

/** Lokasi absolut direktori WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Menentukan variabel-variabel WordPress berkas-berkas yang disertakan. */
require_once(ABSPATH . 'wp-settings.php');
