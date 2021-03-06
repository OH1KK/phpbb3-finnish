<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS'			=> 'VigLink asetukset',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink on kolmannen osapuolen palvelu joka huomaamatta monetisoi foorumisi käyttäjien lähettämät linkit ilman että käyttäjäkokemus muuttuu. Kun käyttäjä klikkaa foorumilta pois vievää linkkiä tuotteisiin tai palveluihin ja ostaa jotain, kauppiaat maksavat VigLinkille palkkion josta osa lahjoitetaan phpBB-projektille. Ottamalla VigLinkin käyttöön ja lahjoittamalla tuotot phpBB-projektille, tuet avoimen lähdekoodin organisaatiotamme varmistamalla taloudellista turvaamme.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'Voit muuttaa näitä asetuksia milloin vain “<a href="%1$s">VigLink asetukset</a>” -sivulla.',
    'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> 'Sinua ei enää ohjata tälle sivulle, kun olet tallentanut valintasi alla, klikkaamalla Lähetä-painiketta.',
	'ACP_VIGLINK_ENABLE'			=> 'Käytä VigLinkiä',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Sallii VigLink-palveluiden käyttämisen.',
	'ACP_VIGLINK_EARNINGS'			=> 'Vaadi oma osuutesi (vapaaehtoinen)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'	=> 'Voit vaatia omat tuottosi kirjautumalla Viglink Convert -tilille.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'VigLink-palvelut ovat poissa käytöstä phpBB:n toimesta.',
	'ACP_VIGLINK_CLAIM'				=> 'Vaadi oma osuutesi',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'Voit vaatia foorumisi tuotot VigLinkin monetisoimista linkeistä sen sijaan että lahjoittaisit ne phpBB-projektille. Hallitaksesi tilisi asetuksia, luo “VigLink Convert” -tili valitsemalla “Convert-tili”.',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Convert-tili',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'VigLink convert -tilin linkkiä ei voitu hakea.',
));
