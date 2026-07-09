<?php
/**
 * Open Source Social Network
 *
 * @package   (openteknik.com).ossn
 * @author    OSSN Core Team <info@openteknik.com>
 * @copyright (C) OpenTeknik LLC
 * @license   OPENTEKNIK LLC, COMMERCIAL LICENSE v1.0 https://www.openteknik.com/license/commercial-license-v1
 * @link      https://www.openteknik.com
 */
$pt = array(
		'stories'                         => 'Histórias',
		'stories:title'                   => 'Título (Opcional)',
		'stories:story:add'               => 'Criar História',
		'stories:added'                   => 'As histórias foram salvas',
		'stories:add:failed'              => 'Não foi possível adicionar as histórias ao sistema',
		'stories:deleted:status'          => 'O status foi excluído',
		'stories:delete:failed'           => 'Não foi possível excluir as histórias',
		'stories:cron'                    => 'Peça ao seu provedor de hospedagem para adicionar a seguinte tarefa cron (cron job) para a sua conta de hospedagem. Isso excluirá as histórias antigas',
		'stories:type:photos'             => 'Criar uma História com Foto',
		'stories:type:video'              => 'Criar uma História com Vídeo',
		'stories:video:select'            => 'Selecionar Vídeo',
		'stories:photos:select'           => 'Selecionar fotos',
		'stories:create'                  => 'Criar uma História',
		'stories:title:placeholder'       => 'Adicione um título à sua história...',
		'stories:ffmpeg:path:empty'       => 'O caminho não pode estar vazio!',
		'stories:ffmpeg:path:saved'       => 'As configurações foram salvas!',
		'stories:ffmpeg:path:save:error'  => 'Não foi possível salvar as configurações!',
		'stories:cron:title'              => 'Motor de Tarefas Cron Automatizado',
		'stories:cron:click_copy'         => 'Clique dentro do bloco do campo para selecionar a string de comando completa.',
		'stories:ffmpeg:title'            => 'Configuração de Processamento de Vídeo (FFmpeg)',
		'stories:ffmpeg:path_label'       => 'Caminho Absoluto do Disco Binário',
		'stories:ffmpeg:path_help'        => 'Forneça a localização exata do diretório que aponta para o executável binário do contêiner do seu servidor (ex: /usr/bin/ffmpeg).',
		'stories:ffmpeg:not_found'        => 'Caminho do arquivo binário não encontrado ou inacessível pelos contextos de shell do sistema.',
		'stories:ffmpeg:active'           => 'Detalhes do FFmpeg!',
		'stories:ffmpeg:execution_failed' => 'O caminho de destino existe, mas a execução do binário apresentou falhas de rastreamento de erros.',
		'stories:type:text'               => 'Criar uma História com Texto',
		'stories:text:placeholder'        => 'Comece a digitar sua história...',
		'stories:text:background'         => 'Selecionar Fundo',
		'stories:video:process:error'     => 'Os envios de vídeo estão indisponíveis no momento. Por favor, tente mais tarde ou entre em contato com o administrador do site para obter assistência.',
		'stories:noviewers'               => 'Nenhum visualizador ainda!',
		'stories:viewers'                 => 'Visualizadores',
		'stories:please:wait'             => 'Por favor, aguarde...',
		'stories:selected'                => 'item(ns) selecionado(s)',
);
ossn_register_languages('pt', $pt);
