<?php
/**
*
* migrator [Deutsch — Du]
*
* @package language
* @copyright (c) 2013 phpBB Group; 2006-2014 phpBB.de
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Deutsche Übersetzung durch die Übersetzer-Gruppe von phpBB.de:
* siehe docs/AUTHORS und https://www.phpbb.de/go/ubersetzerteam
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

$lang = array_merge($lang, array(
	'CONFIG_NOT_EXIST'					=> 'Die Konfigurationseinstellung „%s“ existiert unerwarteterweise nicht.',

	'GROUP_NOT_EXIST'					=> 'Die Gruppe „%s“ existiert unerwarteterweise nicht.',

	'MIGRATION_DATA_DONE'				=> 'Daten eingerichtet: %1$s; Dauer: %2$.2f Sekunden',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Richte Daten ein: %1$s; Dauer: %2$.2f Sekunden',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Die Migration wurde bereits erfolgreich durchgeführt (übersprungen): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'Während der Anforderung ist etwas falsch gelaufen und eine Ausnahme ist aufgetreten. Die Änderungen, die vor dem Fehler durchgeführt wurden, wurden so weit wie möglich rückgängig gemacht. Du solltest dein Board jedoch nach möglichen Fehlern untersuchen.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Die Migration „%1$s“ kann nicht durchgeführt werden. Fehlender Migrations-Schritt: „%2$s“.',
	'MIGRATION_SCHEMA_DONE'				=> 'Installiertes Schema: %1$s; Dauer: %2$.2f Sekunden',

	'MODULE_ERROR'						=> 'Bei der Erstellung eines Moduls ist ein Fehler aufgetreten: %s',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Eine erforderliche Informationsdatei für ein Modul existiert nicht: %2$s',
	'MODULE_NOT_EXIST'					=> 'Ein erforderliches Modul existiert nicht: %s',

	'PERMISSION_NOT_EXIST'				=> 'Die Berechtigungs-Einstellung „%s“ existiert unerwarteterweise nicht.',

	'ROLE_NOT_EXIST'					=> 'Die Berechtigungs-Rolle „%s“ existiert unerwarteterweise nicht.',
));
