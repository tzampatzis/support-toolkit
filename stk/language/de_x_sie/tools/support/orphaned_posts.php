<?php
/**
*
* @package Support Toolkit - Orphaned posts/topics
* @version $Id$
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'AUTHOR'					=> 'Autor',
	'FORUM_NAME'				=> 'Name des Forums',
	'NEW_TOPIC_ID'				=> 'Neues Thema-ID',
	'POST_ID'					=> 'Beitrags-ID',
	'TOPIC_ID'					=> 'Thema-ID',

	'DELETE_EMPTY_TOPICS'		=> 'Per Klick werden alle ausgewählten Themen gelöscht. (Kann nicht rückgängig gemacht werden!)',
	'EMPTY_TOPICS'				=> 'Leere Themen',
	'EMPTY_TOPICS_EXPLAIN'		=> 'Das sind Themen, denen keine Beiträge zugeordnet sind.',
	'NO_EMPTY_TOPICS'			=> 'Keine leeren Themen gefunden',
	'NO_TOPICS_SELECTED'		=> 'Keine Themen ausgewählt',

	'ORPHANED_POSTS'			=> 'Verwaiste Beiträge',
	'ORPHANED_POSTS_EXPLAIN'	=> 'Das sind Beiträge, die keinem Themen zugeordnet sind.  Geben Sie eine neue Themen-ID ein um diese Beiträge mit dem Thema zu verbinden.',
	'NO_ORPHANED_POSTS'			=> 'Keine verwaisten Beiträge gefunden',
	'NO_TOPIC_IDS'				=> 'Keine Themen-ID angegeben',
	'NONEXISTENT_TOPIC_IDS'		=> 'Die folgenden Ziel Themen-IDs existieren nicht: %s.<br />Bitte überprüfen Sie die angegeben Themen-IDs.',
	'REASSIGN'					=> 'Neu zuordnen',

	'DELETE_SHADOWS'			=> 'Per Klick werden alle ausgewählten Links zu verschobenen Themen gelöscht. (Kann nicht rückgängig gemacht werden!)',
	'ORPHANED_SHADOWS'			=> 'Verwaiste Links zu verschobenen Themen',
	'ORPHANED_SHADOWS_EXPLAIN'	=> 'Das sind Links zu verschobenen Themen, die nicht mehr existieren.',
	'NO_ORPHANED_SHADOWS'		=> 'Keine verwaisten Links zu verschobenen Themen gefunden',

	'POSTS_DELETED'				=> '%d Beiträge gelöscht',
	'POSTS_REASSIGNED'			=> '%d Beiträge neu zugeordnet',
	'TOPICS_DELETED'			=> '%d Themen gelöscht',
));
