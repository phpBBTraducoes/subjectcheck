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
	// ACP labels
	'ACP_SUBJECT_CHECK_TITLE'		=> 'Subject Check',
	'SUBJECT_CHECK_ENABLE'			=> 'Ativar subject check',
	'SUBJECT_CHECK_ENABLE_EXPLAIN'	=> 'Desligar este recurso irá desativá-lo para todos os fóruns.',
	'SUBJECT_CHECK_BYPASS'			=> 'Permitir ignorar',
	'SUBJECT_CHECK_BYPASS_EXPLAIN'	=> 'Ignorar permite que uma pessoa post seu tópico mesmo depois de ser apresentada uma lista de tópicos semelhantes.',
	'SUBJECT_CHECK_STRICT'			=> 'Ativar modo estrito',
	'SUBJECT_CHECK_STRICT_EXPLAIN'	=> 'Apenas verifica tópicos que tenham titulos idênticos.',
	'SUBJECT_CHECK_AJAX'			=> 'Ativar modo AJAX',
	'SUBJECT_CHECK_AJAX_EXPLAIN'	=> 'Exibir resultados sem exigir um carregamento de página separado.',
	'SUBJECT_CHECK_LOCKED'			=> 'Verificar tópicos bloqueados',
	'SUBJECT_CHECK_LOCKED_EXPLAIN'	=> 'Verifique os tópicos bloqueados ao verificar titulos.',
	'SUBJECT_CHECK_POP'				=> 'Abrir links de tópicos em uma nova janela',
	'SUBJECT_CHECK_POP_EXPLAIN'		=> 'Abre os links do tópico listado em uma nova janela do navegador.',
	'SUBJECT_CHECK_ADMIN'			=> 'Administrador passe livre',
	'SUBJECT_CHECK_ADMIN_EXPLAIN'	=> 'Permitir que os administradores post sem verificar os titulos.',
	'SUBJECT_CHECK_MOD'				=> 'Moderador passe livre',
	'SUBJECT_CHECK_MOD_EXPLAIN'		=> 'Permitir que os moderadores post sem verificar os titulos.',
	'SUBJECT_CHECK_COMMON'			=> 'Verifique palavras comuns',
	'SUBJECT_CHECK_COMMON_EXPLAIN'	=> 'Palavras comuns são normalmente ignoradas ao comparar titulos.',
	'SUBJECT_CHECK_FORUMS'			=> 'Verifique todos os fóruns',
	'SUBJECT_CHECK_FORUMS_EXPLAIN'	=> 'Verifique todos os fóruns em vez de apenas o que está sendo postado.',
	'SUBJECT_CHECK_FNAMES'			=> 'Exibir nomes de fóruns',
	'SUBJECT_CHECK_FNAMES_EXPLAIN'	=> 'Exibe os nomes dos fóruns na frente de cada tópico encontrado.',
	'SUBJECT_CHECK_LIMIT'			=> 'Número máximo de tópicos a serem exibidos',
	'SUBJECT_CHECK_LIMIT_EXPLAIN'	=> 'Defina como 0 para tópicos ilimitados.',
	'SUBJECT_CHECK_ACTIVE'			=> 'Verificar tópicos ativos nesses dias',
	'SUBJECT_CHECK_ACTIVE_EXPLAIN'	=> 'Verifique apenas os tópicos que viram atividade dentro desse número de dias. Defina como 0 para ilimitado.',
	'SUBJECT_CHECK_COUNT'			=> 'Quantidade de Post',
	'SUBJECT_CHECK_COUNT_EXPLAIN'	=> 'Os tópicos dos usuários acima desta quantidade de posts não serão verificados para tópicos semelhantes. Digite 0 para desativar.',
	'SUBJECT_CHECK_BYPASS_EXACT'	=> 'Se não houver correspondência exata',

	'ACP_SUBJECT_CHECK_SETTING_SAVED'	=> 'As configurações do Subject Check foram salvas.',
	
	'ACP_SUBCHECK_SETTINGS'		    => 'Configurações',
	'ACP_SUBCHECK'					=> 'Subject Check',
	'SS_HELPER_NOTY'	            => 'SiteSplat BBcore não existe!<br />Baixe o <a href="http://sitesplat.com" target="_blank">BBcore</a> e copie a pasta BBcore na sua pasta de extensão de sitesplat.',
	'SUBCHECK_NOTICE'	            => '<div class="phpinfo"><p>As configurações para esta extensão estão em <strong>%1$s &#187; %2$s &#187; %3$s</strong>. <br />Não se esqueça de verificar/definir a permissão para cada fórum, se necessário. <strong>ACP &#187; FORUMS &#187; Editar forum &#187; Ativar subject check</strong></p></div>',

	// ACP labels for individual forums
	'SUBJECT_CHECK_FORUM'			=> 'Ativar subject check',
	'SUBJECT_CHECK_FORUM_EXPLAIN'	=> 'Verifique titulos de novos tópicos contra tópicos existentes.',
));
