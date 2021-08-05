<?php

/* Local configuration for Roundcube Webmail */

// ----------------------------------
// SQL DATABASE
// ----------------------------------
// Database connection string (DSN) for read+write operations
// Format (compatible with PEAR MDB2): db_provider://user:password@host/database
// Currently supported db_providers: mysql, pgsql, sqlite, mssql or sqlsrv
// For examples see http://pear.php.net/manual/en/package.database.mdb2.intro-dsn.php
// NOTE: for SQLite use absolute path: 'sqlite:////full/path/to/sqlite.db?mode=0646'
$config['db_dsnw'] = 'sqlite:////data/roundcube/roundcube.db';

// ----------------------------------
// IMAP
// ----------------------------------
// The mail host chosen to perform the log-in.
// Leave blank to show a textbox at login, give a list of hosts
// to display a pulldown menu or set one host as string.
// To use SSL/TLS connection, enter hostname with prefix ssl:// or tls://
// Supported replacement variables:
// %n - hostname ($_SERVER['SERVER_NAME'])
// %t - hostname without the first part
// %d - domain (http hostname $_SERVER['HTTP_HOST'] without the first part)
// %s - domain name after the '@' from e-mail address provided at login screen
// For example %n = mail.domain.tld, %t = domain.tld
// WARNING: After hostname change update of mail_host column in users table is
//          required to match old user data records with the new host.
$config['default_host'] = 'ssl://%n';

// local signed certificates are failing
$config['imap_conn_options'] = array(
    'ssl' => array(
        'verify_peer'       => false,
        'verify_peer_name'  => false
    ),
);
$config['smtp_conn_options'] = array(
    'ssl'         => array(
        'verify_peer'      => false,
        'verify_peer_name' => false
    ),
);

// SMTP username (if required) if you use %u as the username Roundcube
// will use the current username for login
$config['smtp_user'] = '%u';

// SMTP password (if required) if you use %p as the password Roundcube
// will use the current user's password for login
$config['smtp_pass'] = '%p';

// SMTP server just like IMAP server

$config['smtp_server'] = 'tls://127.0.0.1:587';

// provide an URL where a user can get support for this Roundcube installation
// PLEASE DO NOT LINK TO THE ROUNDCUBE.NET WEBSITE HERE!
$config['support_url'] = '../../../../admin/install/instructions';

// use this folder to store log files (must be writeable for apache user)
// This is used by the 'file' log driver.
$config['log_dir'] = '/data/var/log';

// use this folder to store temp files (must be writeable for apache user)
$config['temp_dir'] = '/tmp';

// this key is used to encrypt the users imap password which is stored
// in the session record (and the client cookie if remember password is enabled).
// please provide a string of exactly 24 chars.
$config['des_key'] = hex2bin('8830dc845f002bf781ecfdf2f525c40f2f2b448a994f3aea');

$data = parse_ini_file("/data/server.ini");

// Name your service. This is displayed on the login screen and in the window title
$config['product_name'] = !empty($data['brand_name']) ? $data['brand_name'] : 'Poste.io';

// ----------------------------------
// PLUGINS
// ----------------------------------
// List of active plugins (in plugins/ directory)
$config['plugins'] = array(
    'archive',
    'attachment_reminder',
    'emoticons',
    'enigma',
    'identity_select',
    'newmail_notifier',
    'managesieve',
    'vcard_attachments',
    'zipdownload',
    'dovecot_ident'
);

$config['plugins'] = array('xframework');
$config['plugins'] = array('xskin');

// the default locale setting (leave empty for auto-detection)
// RFC1766 formatted language name like en_US, de_DE, de_CH, fr_FR, pt_BR
$config['language'] = '';
$config['skin'] = 'elastic';


$config['mail_domain'] = '';

$config['mail_domain'] = '';

$config['mail_domain'] = '';

$config['license_key'] = 'RCP-exJB8eIQx3jy';


$config['mail_domain'] = '';

$config['mail_domain'] = '';


$config['mail_domain'] = '';

$config['mail_domain'] = '';

$config['mail_domain'] = '';

$config['mail_domain'] = '';

$config['mail_domain'] = '';

$config['mail_domain'] = '';

$config['mail_domain'] = '';

$config['mail_domain'] = '';