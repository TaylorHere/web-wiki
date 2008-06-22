<?php
/*
 * Dokuwiki's Main Configuration File - Local Settings
 * Auto-generated by config plugin
 * Run for user: lsmith2
 * Date: Thu, 06 Mar 2008 20:30:50 +0000
 */

umask(0775);

$conf['useacl'] = 1;
$conf['superuser'] = '@admin';
$conf['manager'] = '@phpcvs';
$conf['registernotify'] = 'lsmith@php.net';
$conf['spellchecker'] = 1;
$conf['userewrite'] = '1';
$conf['useslash'] = 1;
$conf['mailfrom'] = 'php-webmaster@php.net';
$conf['send404'] = 1;
$conf['plugin']['hcalendar']['locale'] = 'en_US';
$conf['updatecheck'] = 0;
$conf['rss_content'] = 'htmldiff';
$conf['title']       = 'PHP Wiki';
$conf['template']    = 'phpwiki';
$conf['authtype']    = 'phpcvs';

@include(DOKU_CONF.'local.protected.php');

// end auto-generated content
