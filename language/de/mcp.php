<?php
/**
*
* mcp [Deutsch — Du]
*
* @package language
* @copyright (c) 2005 phpBB Group; 2006 phpBB.de
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
	'ACTION'				=> 'Vorgang',
	'ACTION_NOTE'			=> 'Vorgang/Hinweis',
	'ADD_FEEDBACK'			=> 'Feedback hinzufügen',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Wenn du hierzu eine Meldung hinzufügen möchtest, fülle bitte das folgende Formular aus. Verwende nur reinen Text; HTML, BBCode usw. sind nicht erlaubt.',
	'ADD_WARNING'			=> 'Verwarnung erteilen',
	'ADD_WARNING_EXPLAIN'	=> 'Um dem Benutzer eine Verwarnung zu erteilen, fülle bitte das folgende Formular aus. Verwende nur reinen Text; HTML, BBCode usw. sind nicht erlaubt.',
	'ALL_ENTRIES'			=> 'Alle Einträge',
	'ALL_NOTES_DELETED'		=> 'Alle Notizen wurden erfolgreich gelöscht.',
	'ALL_REPORTS'			=> 'Alle Meldungen',
	'ALREADY_REPORTED'		=> 'Dieser Beitrag wurde schon gemeldet.',
	'ALREADY_REPORTED_PM'	=> 'Diese Private Nachricht wurde schon gemeldet.',
	'ALREADY_WARNED'		=> 'Für diesen Beitrag wurde schon eine Verwarnung erteilt.',
	'APPROVE'				=> 'Freigeben',
	'APPROVE_POST'			=> 'Beitrag freigeben',
	'APPROVE_POST_CONFIRM'	=> 'Bist du dir sicher, dass du diesen Beitrag freigeben möchtest?',
	'APPROVE_POSTS'			=> 'Beiträge freigeben',
	'APPROVE_POSTS_CONFIRM'	=> 'Bist du dir sicher, dass du diese Beiträge freigeben möchtest?',
	'APPROVE_TOPIC'			=> '#Approve topic',
	'APPROVE_TOPIC_CONFIRM'	=> '#Are you sure you want to approve this topic?',
	'APPROVE_TOPICS'		=> '#Approve topics',
	'APPROVE_TOPICS_CONFIRM'=> '#Are you sure you want to approve the selected topics?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Du kannst ein Thema nicht in das Forum verschieben, in dem es sich befindet.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Du kannst keinen Gast verwarnen.',
	'CANNOT_WARN_SELF'		=> 'Du kannst dich nicht selbst verwarnen.',
	'CAN_LEAVE_BLANK'		=> 'Dieses Feld muss nicht ausgefüllt werden.',
	'CHANGE_POSTER'			=> 'Ändere Autor',
	'CLOSE_PM_REPORT'		=> 'PN-Meldung schließen',
	'CLOSE_PM_REPORT_CONFIRM'	=> 'Bist du dir sicher, dass du die ausgewählte Meldung zu einer Privaten Nachricht schließen möchtest?',
	'CLOSE_PM_REPORTS'		=> 'PN-Meldungen schließen',
	'CLOSE_PM_REPORTS_CONFIRM'	=> 'Bist du dir sicher, dass du die ausgewählten Meldungen zu Privaten Nachrichten schließen möchtest?',
	'CLOSE_REPORT'			=> 'Meldung schließen',
	'CLOSE_REPORT_CONFIRM'	=> 'Bist du dir sicher, dass du die ausgewählte Meldung schließen möchtest?',
	'CLOSE_REPORTS'			=> 'Meldungen schließen',
	'CLOSE_REPORTS_CONFIRM'	=> 'Bist du dir sicher, dass du die ausgewählten Meldungen schließen möchtest?',

	'DELETE_PM_REPORT'			=> 'PN-Meldung löschen',
	'DELETE_PM_REPORT_CONFIRM'	=> 'Bist du dir sicher, dass du die ausgewählte Meldung zu einer Privaten Nachricht löschen möchtest?',
	'DELETE_PM_REPORTS'			=> 'PN-Meldungen löschen',
	'DELETE_PM_REPORTS_CONFIRM'	=> 'Bist du dir sicher, dass du die ausgewählten Meldungen zu Privaten Nachrichten löschen möchtest?',
	'DELETE_POSTS'				=> 'Beiträge löschen',
	'DELETE_REPORT'				=> 'Meldung löschen',
	'DELETE_REPORT_CONFIRM'		=> 'Bist du dir sicher, dass du die ausgewählte Meldung löschen möchtest?',
	'DELETE_REPORTS'			=> 'Meldungen löschen',
	'DELETE_REPORTS_CONFIRM'	=> 'Bist du dir sicher, dass du die ausgewählten Meldungen löschen möchtest?',
	'DELETE_SHADOW_TOPIC'		=> 'Link zum verschobenen Thema löschen',
	'DELETE_TOPICS'				=> 'Ausgewählte Themen löschen',
	'DISAPPROVE'				=> 'Freigabe verweigern',
	'DISAPPROVE_REASON'			=> 'Grund für die Verweigerung der Freigabe',
	'DISAPPROVE_POST'			=> 'Freigabe des Beitrags verweigern',
	'DISAPPROVE_POST_CONFIRM'	=> 'Bist du dir sicher, dass du die Freigabe dieses Beitrags verweigern möchtest?',
	'DISAPPROVE_POSTS'			=> 'Freigabe der Beiträge verweigern',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Bist du dir sicher, dass du die Freigabe der ausgewählten Beiträge verweigern möchtest?',
	'DISPLAY_LOG'				=> 'Einträge der letzten Zeit anzeigen',
	'DISPLAY_OPTIONS'			=> 'Anzeige-Optionen',

	'EMPTY_REPORT'					=> 'Für diesen Grund musst du eine Beschreibung angeben.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Ein oder mehrere Themen wurden aus der Datenbank gelöscht, weil sie keine Beiträge mehr hatten.',

	'FEEDBACK'				=> 'Feedback',
	'FORK'					=> 'Duplizieren',
	'FORK_TOPIC'			=> 'Thema duplizieren',
	'FORK_TOPIC_CONFIRM'	=> 'Bist du dir sicher, dass du dieses Thema duplizieren möchtest?',
	'FORK_TOPICS'			=> 'Ausgewählte Themen duplizieren',
	'FORK_TOPICS_CONFIRM'	=> 'Bist du dir sicher, dass du die ausgewählten Themen duplizieren möchtest?',
	'FORUM_DESC'			=> 'Beschreibung',
	'FORUM_NAME'			=> 'Name des Forums',
	'FORUM_NOT_EXIST'		=> 'Das ausgewählte Forum existiert nicht.',
	'FORUM_NOT_POSTABLE'	=> 'In dem ausgewählten Forum können keine Beiträge erstellt werden.',
	'FORUM_STATUS'			=> 'Status des Forums',
	'FORUM_STYLE'			=> 'Forum-Style',

	'GLOBAL_ANNOUNCEMENT'	=> 'Globale Bekanntmachung',

	'IP_INFO'				=> 'IP-Informationen',
	'IPS_POSTED_FROM'		=> 'IP-Adressen, von denen aus dieser Benutzer Beiträge erstellt hat',

	'LATEST_LOGS'				=> 'Die letzten 5 protokollierten Aktionen',
	'LATEST_REPORTED'			=> 'Die letzten 5 gemeldeten Beiträge',
	'LATEST_REPORTED_PMS'		=> 'Die letzten 5 gemeldeten Privaten Nachrichten',
	'LATEST_UNAPPROVED'			=> 'Die letzten 5 Beiträge, die auf Freigabe warten',
	'LATEST_WARNING_TIME'		=> 'Letzte Verwarnung',
	'LATEST_WARNINGS'			=> 'Die letzten 5 Verwarnungen',
	'LEAVE_SHADOW'				=> 'Einen Link im alten Forum beibehalten',
	'LIST_REPORTS'				=> array(
		1	=> '1 Meldung',
		2	=> '%d Meldungen',
	),
	'LOCK'						=> 'Sperren',
	'LOCK_POST_POST'			=> 'Beitrag sperren',
	'LOCK_POST_POST_CONFIRM'	=> 'Bist du dir sicher, dass du Änderungen an diesem Beitrag unterbinden möchtest?',
	'LOCK_POST_POSTS'			=> 'Ausgewählte Beiträge sperren',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Bist du dir sicher, dass du Änderungen der ausgewählten Beiträge unterbinden möchtest?',
	'LOCK_TOPIC_CONFIRM'		=> 'Bist du dir sicher, dass du dieses Thema sperren möchtest?',
	'LOCK_TOPICS'				=> 'Ausgewählte Themen sperren',
	'LOCK_TOPICS_CONFIRM'		=> 'Bist du dir sicher, dass du alle ausgewählten Themen sperren möchtest?',
	'LOGS_CURRENT_TOPIC'		=> 'Moderations-Protokoll von Thema:',
	'LOGIN_EXPLAIN_MCP'			=> 'Um dieses Forum zu moderieren, musst du dich anmelden.',
	'LOGVIEW_VIEWTOPIC'			=> 'Thema anzeigen',
	'LOGVIEW_VIEWLOGS'			=> 'Themen-Protokoll anzeigen',
	'LOGVIEW_VIEWFORUM'			=> 'Forum anzeigen',
	'LOOKUP_ALL'				=> 'Alle IPs auflösen',
	'LOOKUP_IP'					=> 'IP auflösen',

	'MARKED_NOTES_DELETED'		=> 'Alle markierten Notizen wurden erfolgreich gelöscht.',

	'MCP_ADD'						=> 'Eine Verwarnung hinzufügen',

	'MCP_BAN'					=> 'Sperren',
	'MCP_BAN_EMAILS'			=> 'E-Mails sperren',
	'MCP_BAN_IPS'				=> 'IPs sperren',
	'MCP_BAN_USERNAMES'			=> 'Benutzernamen sperren',

	'MCP_LOGS'						=> 'Moderations-Protokoll',
	'MCP_LOGS_FRONT'				=> 'Übersicht',
	'MCP_LOGS_FORUM_VIEW'			=> 'Foren-Protokoll',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Themen-Protokoll',

	'MCP_MAIN'						=> 'Hauptbereich',
	'MCP_MAIN_FORUM_VIEW'			=> 'Forum anzeigen',
	'MCP_MAIN_FRONT'				=> 'Übersicht',
	'MCP_MAIN_POST_DETAILS'			=> 'Beitrags-Details',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Thema anzeigen',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'In Bekanntmachung umwandeln',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Bist du dir sicher, dass du dieses Thema in eine Bekanntmachung umwandeln möchtest?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'In Bekanntmachungen umwandeln',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Bist du dir sicher, dass du die ausgewählten Themen in Bekanntmachungen umwandeln möchtest?',
	'MCP_MAKE_GLOBAL'				=> 'In globale Bekanntmachung umwandeln',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Bist du dir sicher, dass du dieses Thema in eine globale Bekanntmachung umwandeln möchtest?',
	'MCP_MAKE_GLOBALS'				=> 'In globale Bekanntmachungen umwandeln',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Bist du dir sicher, dass du die ausgewählten Themen in globale Bekanntmachungen umwandeln möchtest?',
	'MCP_MAKE_STICKY'				=> 'In wichtiges Thema umwandeln',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Bist du dir sicher, dass du dieses Thema in ein wichtiges Thema umwandeln möchtest?',
	'MCP_MAKE_STICKIES'				=> 'In wichtige Themen umwandeln',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Bist du dir sicher, dass du die ausgewählten Themen in wichtige Themen umwandeln möchtest?',
	'MCP_MAKE_NORMAL'				=> 'In Standard-Thema umwandeln',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Bist du dir sicher, dass du dieses Thema in ein Standard-Thema umwandeln möchtest?',
	'MCP_MAKE_NORMALS'				=> 'In Standard-Themen umwandeln',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Bist du dir sicher, dass du die ausgewählten Themen in Standard-Themen umwandeln möchtest?',

	'MCP_NOTES'						=> 'Benutzer-Notizen',
	'MCP_NOTES_FRONT'				=> 'Übersicht',
	'MCP_NOTES_USER'				=> 'Benutzer-Details',

	'MCP_POST_REPORTS'				=> 'Es gibt Meldungen zu diesem Beitrag',

	'MCP_PM_REPORTS'				=> 'Gemeldete Private Nachrichten',
	'MCP_PM_REPORT_DETAILS'			=> 'Details der Meldung zu einer Privaten Nachricht',
	'MCP_PM_REPORTS_CLOSED'			=> 'Geschlossene Meldungen zu Privaten Nachrichten',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> 'Dies ist eine Liste aller Meldungen zu Privaten Nachrichten, die abgeschlossen wurden.',
	'MCP_PM_REPORTS_OPEN'			=> 'Offene Meldungen zu Privaten Nachrichten',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> 'Dies ist eine Liste aller Meldungen zu Privaten Nachrichten, die noch bearbeitet werden müssen.',

	'MCP_REPORTS'					=> 'Gemeldete Nachrichten',
	'MCP_REPORT_DETAILS'			=> 'Details der Meldung',
	'MCP_REPORTS_CLOSED'			=> 'Geschlossene Meldungen',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Dies ist eine Liste aller Meldungen zu Beiträgen, die abgeschlossen wurden.',
	'MCP_REPORTS_OPEN'				=> 'Offene Meldungen',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Dies ist eine Liste aller Meldungen zu Beiträgen, die noch bearbeitet werden müssen.',

	'MCP_QUEUE'								=> 'Moderations-Warteschlange',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Freigabe-Details',
	'MCP_QUEUE_DELETED_POSTS'				=> '#Deleted posts',
	'MCP_QUEUE_DELETED_POSTS_EXPLAIN'		=> '#This is a list of all soft deleted posts. You can restore or permanently delete the posts from this screen.',
	'MCP_QUEUE_DELETED_TOPICS'				=> '#Deleted topics',
	'MCP_QUEUE_DELETED_TOPICS_EXPLAIN'		=> '#This is a list of all soft deleted topics. You can restore or permanently delete the topics from this screen.',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Auf Freigabe wartende Beiträge',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Dies ist eine Liste aller Beiträge, die freigegeben werden müssen, bevor sie für die Benutzer sichtbar werden.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Auf Freigabe wartende Themen',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Dies ist eine Liste aller Themen, die freigegeben werden müssen, bevor sie für die Benutzer sichtbar werden.',

	'MCP_VIEW_USER'			=> 'Verwarnungen eines Benutzers anzeigen',

	'MCP_WARN'				=> 'Verwarnungen',
	'MCP_WARN_FRONT'		=> 'Übersicht',
	'MCP_WARN_LIST'			=> 'Verwarnungen anzeigen',
	'MCP_WARN_POST'			=> 'Für spezifischen Beitrag verwarnen',
	'MCP_WARN_USER'			=> 'Benutzer verwarnen',

	'MERGE_POSTS_CONFIRM'	=> 'Bist du dir sicher, dass du die ausgewählten Beiträge in das ausgewählte Thema verschieben möchtest?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Mit dem folgenden Formular kannst du Beiträge in ein anderes Thema verschieben. Die Beiträge werden aus diesem Thema entfernt und in das andere Thema integriert. Sie erscheinen dort zusammen mit den anderen Beiträgen in ihrer zeitlichen Abfolge.<br />Bitte gib die ID des Ziel-Themas an oder wähle mit „Thema auswählen“ ein Thema aus.',
	'MERGE_TOPIC_ID'		=> 'Primärschlüssel (ID) des Ziel-Themas',
	'MERGE_TOPICS'			=> 'Themen zusammenführen',
	'MERGE_TOPICS_CONFIRM'	=> 'Bist du dir sicher, dass du die ausgewählten Themen zusammenführen möchtest?',
	'MODERATE_FORUM'		=> 'Forum moderieren',
	'MODERATE_TOPIC'		=> 'Thema moderieren',
	'MODERATE_POST'			=> 'Beitrag moderieren',
	'MOD_OPTIONS'			=> 'Moderations-Optionen',
	'MORE_INFO'				=> 'Weitere Informationen',
	'MOST_WARNINGS'			=> 'Benutzer mit den meisten Verwarnungen',
	'MOVE_TOPIC_CONFIRM'	=> 'Bist du dir sicher, dass du das Thema in ein neues Forum verschieben möchtest?',
	'MOVE_TOPICS'			=> 'Ausgewählte Themen verschieben',
	'MOVE_TOPICS_CONFIRM'	=> 'Bist du dir sicher, dass du die ausgewählten Themen in ein neues Forum verschieben möchtest?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Benutzer über Freigabe informieren?',
	'NOTIFY_POSTER_DISAPPROVAL' 	=> 'Benutzer über Verweigerung der Freigabe informieren?',
	'NOTIFY_USER_WARN'				=> 'Benutzer über Verwarnung informieren?',
	'NOT_MODERATOR'					=> 'Du bist kein Moderator dieses Forums.',
	'NO_DESTINATION_FORUM'			=> 'Bitte wähle ein Ziel-Forum aus.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Es steht kein Ziel-Forum zur Verfügung.',
	'NO_ENTRIES'					=> 'Es existiert kein Protokoll-Eintrag für diesen Zeitraum.',
	'NO_FEEDBACK'					=> 'Es existiert noch kein Feedback zu diesem Benutzer.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Du musst ein Ziel-Thema auswählen, um die Beiträge mit einem anderen Thema zusammenzuführen.',
	'NO_MATCHES_FOUND'				=> 'Keine Treffer gefunden.',
	'NO_POST'						=> 'Du musst einen Beitrag auswählen, um einen Benutzer für einen Beitrag verwarnen zu können.',
	'NO_POST_REPORT'				=> 'Dieser Beitrag wurde nicht gemeldet.',
	'NO_POST_SELECTED'				=> 'Du musst mindestens einen Beitrag auswählen, um diese Aktion durchzuführen.',
	'NO_POSTS_DELETED'				=> '#There are no deleted posts.',
	'NO_POSTS_QUEUE'				=> '#There are no posts waiting for approval.',
	'NO_REASON_DISAPPROVAL'			=> 'Bitte gib eine Begründung für die Verweigerung der Freigabe an.',
	'NO_REPORT'						=> 'Keine Meldung gefunden',
	'NO_REPORTS'					=> 'Keine Meldungen gefunden',
	'NO_REPORT_SELECTED'			=> 'Du musst mindestens eine Meldung auswählen, um diese Aktion durchzuführen.',
	'NO_TOPIC_ICON'					=> 'Keines',
	'NO_TOPIC_SELECTED'				=> 'Du musst mindestens ein Thema auswählen, um diese Aktion durchzuführen.',
	'NO_TOPICS_DELETED'				=> '#There are no deleted topics.',
	'NO_TOPICS_QUEUE'				=> 'Es warten keine Themen auf Freigabe.',

	'ONLY_TOPIC'			=> 'Nur Thema „%s“',
	'OTHER_USERS'			=> 'Andere Benutzer, die von dieser IP Beiträge erstellt haben',

	'QUICKMOD_ACTION_NOT_ALLOWED' => '#%s not allowed as quickmod',

	'PM_REPORT_CLOSED_SUCCESS'	=> 'Die ausgewählte Meldung einer Privaten Nachricht wurde erfolgreich geschlossen.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'Die ausgewählte Meldung einer Privaten Nachricht wurde erfolgreich gelöscht.',
	'PM_REPORTED_SUCCESS'		=> 'Diese Private Nachricht wurde erfolgreich gemeldet.',
	'PM_REPORTS_CLOSED_SUCCESS'	=> 'Die ausgewählten Meldungen zu Privaten Nachrichten wurden erfolgreich geschlossen.',
	'PM_REPORTS_DELETED_SUCCESS'=> 'Die ausgewählten Meldungen zu Privaten Nachrichten wurden erfolgreich gelöscht.',
	'PM_REPORTS_TOTAL'			=> array(
		0	=> 'Es warten keine Meldungen zu Privaten Nachrichten auf Überprüfung.',
		1	=> 'Insgesamt wartet <strong>1</strong> Meldung zu einer Privaten Nachricht auf Überprüfung.',
		2	=> 'Insgesamt warten <strong>%d</strong> Meldungen zu Privaten Nachrichten auf Überprüfung.',
	),
	'PM_REPORT_DETAILS'			=> 'Details der Meldung zu einer Privaten Nachricht',
	'POSTER'					=> 'Autor',
	'POSTS_APPROVED_SUCCESS'	=> 'Die ausgewählten Beiträge wurden freigegeben.',
	'POSTS_DELETED_SUCCESS'		=> 'Die ausgewählten Beiträge wurden erfolgreich aus der Datenbank gelöscht.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Die Freigabe der ausgewählten Beiträge wurde verweigert.',
	'POSTS_LOCKED_SUCCESS'		=> 'Die ausgewählten Beiträge wurden erfolgreich gesperrt.',
	'POSTS_MERGED_SUCCESS'		=> 'Die ausgewählten Beiträge wurden zusammengeführt.',
	'POSTS_PER_PAGE'			=> 'Beiträge je Seite',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Mit 0 werden alle Beiträge angezeigt.)',
	'POSTS_RESTORED_SUCCESS'	=> '#The selected posts have been restored successfully.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'Die ausgewählten Beiträge wurden erfolgreich entsperrt.',
	'POST_APPROVED_SUCCESS'		=> 'Der ausgewählte Beitrag wurde freigegeben.',
	'POST_DELETED_SUCCESS'		=> 'Der ausgewählte Beitrag wurde erfolgreich aus der Datenbank gelöscht.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Die Freigabe des ausgewählten Beitrags wurde verweigert.',
	'POST_LOCKED_SUCCESS'		=> 'Der Beitrag wurde erfolgreich gesperrt.',
	'POST_NOT_EXIST'			=> 'Der angegebene Beitrag existiert nicht.',
	'POST_REPORTED_SUCCESS'		=> 'Dieser Beitrag wurde erfolgreich gemeldet.',
	'POST_RESTORED_SUCCESS'		=> '#This post has been restored successfully.',
	'POST_UNLOCKED_SUCCESS'		=> 'Der Beitrag wurde erfolgreich entsperrt.',

	'READ_USERNOTES'			=> 'Benutzer-Notizen',
	'READ_WARNINGS'				=> 'Verwarnungen des Benutzers',
	'REPORTER'					=> 'Meldender Benutzer',
	'REPORTED'					=> 'Gemeldet',
	'REPORTED_BY'				=> 'Gemeldet von',
	'REPORTED_ON_DATE'			=> 'am',
	'REPORTS_CLOSED_SUCCESS'	=> 'Die ausgewählten Meldungen wurden erfolgreich geschlossen.',
	'REPORTS_DELETED_SUCCESS'	=> 'Die ausgewählten Meldungen wurden erfolgreich gelöscht.',
	'REPORTS_TOTAL'				=> array(
		0	=> 'Es warten keine Meldungen auf Überprüfung.',
		1	=> 'Insgesamt wartet <strong>1</strong> Meldung auf Überprüfung.',
		2	=> 'Insgesamt warten <strong>%d</strong> Meldungen auf Überprüfung.',
	),
	'REPORT_CLOSED'				=> 'Diese Meldung wurde bereits geschlossen.',
	'REPORT_CLOSED_SUCCESS'		=> 'Die ausgewählte Meldung wurde erfolgreich geschlossen.',
	'REPORT_DELETED_SUCCESS'	=> 'Die ausgewählte Meldung wurde erfolgreich gelöscht.',
	'REPORT_DETAILS'			=> 'Details der Meldung',
	'REPORT_MESSAGE'			=> 'Diese Nachricht melden',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Benutze dieses Formular, um die ausgewählte Private Nachricht zu melden. Meldungen sollten nur erfolgen, wenn die Nachricht den Foren-Regeln widerspricht. <strong>Die Meldung einer Privaten Nachricht macht diese für alle Moderatoren sichtbar.</strong>',
	'REPORT_NOTIFY'				=> 'Benachrichtigung',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Informiert dich, wenn deine Meldung bearbeitet wurde.',
	'REPORT_POST_EXPLAIN'		=> 'Benutze dieses Formular, um den ausgewählten Beitrag zu melden. Meldungen sollten nur erfolgen, wenn der Beitrag den Foren-Regeln widerspricht.',
	'REPORT_REASON'				=> 'Grund der Meldung',
	'REPORT_TIME'				=> 'Zeitpunkt der Meldung',
	'RESTORE'					=> '#Restore',
	'RESTORE_POST'				=> '#Restore post',
	'RESTORE_POST_CONFIRM'		=> '#Are you sure you want to restore this post?',
	'RESTORE_POSTS'				=> '#Restore posts',
	'RESTORE_POSTS_CONFIRM'		=> '#Are you sure you want to restore the selected posts?',
	'RESTORE_TOPIC'				=> '#Restore topic',
	'RESTORE_TOPIC_CONFIRM'		=> '#Are you sure you want to restore this topic?',
	'RESTORE_TOPICS'			=> '#Restore topics',
	'RESTORE_TOPICS_CONFIRM'	=> '#Are you sure you want to restore the selected topics?',
	'RESYNC'					=> 'Resynchronisierung',
	'RETURN_MESSAGE'			=> '%sZurück zur Nachricht%s',
	'RETURN_NEW_FORUM'			=> '%sGehe in das neue Forum%s',
	'RETURN_NEW_TOPIC'			=> '%sGehe zum neuen Thema%s',
	'RETURN_PM'					=> '%sZurück zur Privaten Nachricht%s',
	'RETURN_POST'				=> '%sZurück zum Beitrag%s',
	'RETURN_QUEUE'				=> '%sZurück zur Warteschlange%s',
	'RETURN_REPORTS'			=> '%sZurück zu den Meldungen%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sZurück zum Thema%s',

	'SEARCH_POSTS_BY_USER'				=> 'Suche Beiträge von',
	'SELECT_ACTION'						=> 'Gewünschte Aktion auswählen',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Bitte wähle das Forum aus, in dem diese globale Bekanntmachung angezeigt werden soll.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Eine oder mehrere der ausgewählten Themen sind globale Bekanntmachungen. Bitte wähle ein Forum aus, in dem diese angezeigt werden sollen.',
	'SELECT_MERGE'						=> 'Zum Zusammenführen auswählen',
	'SELECT_TOPICS_FROM'				=> 'Themen auswählen',
	'SELECT_TOPIC'						=> 'Thema auswählen',
	'SELECT_USER'						=> 'Benutzer auswählen',
	'SORT_ACTION'						=> 'Vorgang',
	'SORT_DATE'							=> 'Datum',
	'SORT_IP'							=> 'IP-Adresse',
	'SORT_WARNINGS'						=> 'Verwarnungen',
	'SPLIT_AFTER'						=> 'Thema ab dem gewählten Beitrag teilen',
	'SPLIT_FORUM'						=> 'Forum für das neue Thema',
	'SPLIT_POSTS'						=> 'Gewählte Beiträge abtrennen',
	'SPLIT_SUBJECT'						=> 'Betreff des neuen Themas',
	'SPLIT_TOPIC_ALL'					=> 'Ausgewählte Beiträge abtrennen',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Bist du dir sicher, dass du dieses Thema teilen möchtest?',
	'SPLIT_TOPIC_BEYOND'				=> 'Ab dem ausgewählten Beitrag teilen',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Bist du dir sicher, dass du dieses Thema ab dem ausgewählten Beitrag teilen möchtest?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Mit dem folgenden Formular kannst du ein Thema in zwei aufteilen, indem du entweder die Beiträge einzeln auswählst oder ab einem bestimmten Beitrag teilst.',

	'THIS_PM_IP'				=> 'IP dieser Privaten Nachricht',
	'THIS_POST_IP'				=> 'IP dieses Beitrags',
	'TOPICS_APPROVED_SUCCESS'	=> 'Die ausgewählten Themen wurden freigegeben.',
	'TOPICS_DELETED_SUCCESS'	=> 'Die ausgewählten Themen wurden erfolgreich aus der Datenbank gelöscht.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'Die Freigabe der ausgewählten Themen wurde verweigert.',
	'TOPICS_FORKED_SUCCESS'		=> 'Die gewählten Themen wurden erfolgreich dupliziert.',
	'TOPICS_LOCKED_SUCCESS'		=> 'Die ausgewählten Themen wurden gesperrt.',
	'TOPICS_MOVED_SUCCESS'		=> 'Die ausgewählten Themen wurden erfolgreich verschoben.',
	'TOPICS_RESTORED_SUCCESS'	=> '#The selected topics have been restored successfully.',
	'TOPICS_RESYNC_SUCCESS'		=> 'Die ausgewählten Themen wurden resynchronisiert.',
	'TOPICS_TYPE_CHANGED'		=> 'Die Art der Themen wurde erfolgreich geändert.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Die ausgewählten Themen wurden entsperrt.',
	'TOPIC_APPROVED_SUCCESS'	=> 'Das ausgewählte Thema wurde freigegeben.',
	'TOPIC_DELETED_SUCCESS'		=> 'Das ausgewählte Thema wurde erfolgreich aus der Datenbank gelöscht.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Die Freigabe des ausgewählten Themas wurde verweigert.',
	'TOPIC_FORKED_SUCCESS'		=> 'Das ausgewählte Thema wurde erfolgreich dupliziert.',
	'TOPIC_LOCKED_SUCCESS'		=> 'Das ausgewählte Thema wurde gesperrt.',
	'TOPIC_MOVED_SUCCESS'		=> 'Das ausgewählte Thema wurde erfolgreich verschoben.',
	'TOPIC_NOT_EXIST'			=> 'Das ausgewählte Thema existiert nicht.',
	'TOPIC_RESTORED_SUCCESS'	=> '#The selected topic has been restored successfully.',
	'TOPIC_RESYNC_SUCCESS'		=> 'Das ausgewählte Thema wurde resynchronisiert.',
	'TOPIC_SPLIT_SUCCESS'		=> 'Das ausgewählte Thema wurde erfolgreich geteilt.',
	'TOPIC_TIME'				=> 'Erstellung des Themas',
	'TOPIC_TYPE_CHANGED'		=> 'Die Art des Themas wurde erfolgreich geändert.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Das ausgewählte Thema wurde entsperrt.',
	'TOTAL_WARNINGS'			=> 'Verwarnungen insgesamt',

	'UNAPPROVED_POSTS_TOTAL'		=> array(
		0	=> 'Es warten keine Beiträge auf Freigabe.',
		1	=> 'Insgesamt wartet <strong>1</strong> Beitrag auf Freigabe.',
		2	=> 'Insgesamt warten <strong>%d</strong> Beiträge auf Freigabe.',
	),
	'UNLOCK'						=> 'Entsperren',
	'UNLOCK_POST'					=> 'Beitrag entsperren',
	'UNLOCK_POST_EXPLAIN'			=> 'Änderungen erlauben',
	'UNLOCK_POST_POST'				=> 'Beitrag entsperren',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Bist du dir sicher, dass du Änderungen an diesem Beitrag zulassen möchtest?',
	'UNLOCK_POST_POSTS'				=> 'Ausgewählte Beiträge entsperren',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Bist du dir sicher, dass du Änderungen an den ausgewählten Beiträgen zulassen möchtest?',
	'UNLOCK_TOPIC'					=> 'Thema entsperren',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Bist du dir sicher, dass du dieses Thema entsperren möchtest?',
	'UNLOCK_TOPICS'					=> 'Ausgewählte Themen entsperren',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Bist du dir sicher, dass du alle ausgewählten Themen entsperren möchtest?',
	'USER_CANNOT_POST'				=> 'Du kannst keine Beiträge in diesem Forum erstellen.',
	'USER_CANNOT_REPORT'			=> 'Du kannst in diesem Forum keine Beiträge melden.',
	'USER_FEEDBACK_ADDED'			=> 'Feedback zu dem Benutzer erfolgreich hinzugefügt.',
	'USER_WARNING_ADDED'			=> 'Benutzer erfolgreich verwarnt.',

	'VIEW_DETAILS'			=> 'Details anzeigen',
	'VIEW_PM'				=> 'Private Nachricht anzeigen',
	'VIEW_POST'				=> 'Beitrag anzeigen',

	'WARNED_USERS'			=> 'Verwarnte Benutzer',
	'WARNED_USERS_EXPLAIN'	=> 'Dies ist eine Liste von Benutzern, die noch nicht abgelaufene Verwarnungen erhalten haben.',
	'WARNING_PM_BODY'		=> 'Dir wurde eine Verwarnung durch einen Administrator oder Moderator dieses Forums erteilt:[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Verwarnung erteilt.',
	'WARNING_POST_DEFAULT'	=> 'Dies ist eine Verwarnung wegen dieses von dir erstellten Beitrags: %s.',
	'NO_WARNINGS'			=> 'Es existieren keine Verwarnungen.',

	'YOU_SELECTED_TOPIC'	=> 'Du hast das Thema mit der ID %d ausgewählt: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Raubkopie/Warez',
			'SPAM'		=> 'Spam',
			'OFF_TOPIC'	=> 'Off-Topic',
			'OTHER'		=> 'Anderer',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Die gemeldete Nachricht enthält Links zu illegaler Software oder Raubkopien.',
			'SPAM'		=> 'Die gemeldete Nachricht hat nur zum Ziel, für eine Website oder ein anderes Produkt zu werben.',
			'OFF_TOPIC'	=> 'Die gemeldete Nachricht betrifft ein anderes Thema.',
			'OTHER'		=> 'Keine der genannten Kategorien. Bitte benutze „Weitere Informationen“ für deine Meldung.',
		)
	),
));
