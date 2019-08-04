<?php
/**
 *
 * Subject Check. An extension for the phpBB Forum Software package.
 * Brazilian Portuguese translation by eunaumtenhoid [2019][ver 1.0.5] (https://github.com/phpBBTraducoes)
 * @copyright (c) 2016, SiteSplat
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'SUBJECT_CHECK_SIMILAR_TOPIC'	=> array(
		1	=> 'O título do seu tópico é semelhante a um tópico existente. Por favor, confira e/ou responda lá em vez de criar um novo tópico.',
		2	=> 'O título do seu tópico é semelhante aos tópicos existentes. Por favor, verifique-os e/ou responda lá em vez de criar um novo tópico.',
	),
	'SUBJECT_CHECK_STRICT_TOPIC'	=> array(
		1	=> 'O título do seu tópico é semelhante a um tópico existente. Por favor, responda lá em vez de criar um novo tópico.',
		2	=> 'O título do seu tópico é semelhante aos tópicos existentes. Por favor, responda àquele que melhor corresponda à sua mensagem, em vez de criar um novo tópico.',
	),

	// One of these two strings will be appended to the above strings, so they need a leading space or some other separator.
	'SUBJECT_CHECK_NEW_WINDOW'			=> ' (Links serão abertos em uma nova janela.)',
	'SUBJECT_CHECK_SAME_WINDOW'			=> ' (Links <em>NÃO</em> serão abertos em uma nova janela.)',

	// AJAX
	'SUBJECT_CHECK_WORKING'				=> 'Verificando tópicos com títulos semelhantes...',
));
