<?php
/**
*
* [french]
*
* @package Support Toolkit - Fix Left/Right ID's
* @version $Id:	papicx	1.0.7	05/05/2013	16h07	$
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Translation phpBB-fr http://www.phpbb-fr.com
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
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'FIX_LEFT_RIGHT_IDS'			=> 'Réparer les ID de droite et de gauche',
	'FIX_LEFT_RIGHT_IDS_CONFIRM'	=> 'Êtes-vous sûr(e) de vouloir réparer les ID de droite et de gauche ?<br /><br /><strong>Veuillez sauvegarder votre base de données avant d’exécuter cet outil !</strong>',

	'LEFT_RIGHT_IDS_FIX_SUCCESS'	=> 'Les ID de droite et de gauche ont été réparés.',
	'LEFT_RIGHT_IDS_NO_CHANGE'		=> 'L’outil a terminé le balayage de toutes les ID de droite et de gauche et toutes les lignes sont déjà correctes. Aucune modification n’a donc été apportée.',
));
