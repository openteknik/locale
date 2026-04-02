<?php
/**
 * Open Source Social Network
 *
 * @package Open Source Social Network
 * @author    OSSN Core Team <info@openteknik.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
$zh = array(
	'videos' => '视频',
	'video:com' => '视频',
	'video:com:fields:requred' => '请填写所有字段',
	'video:com:title' => '标题',
	'video:com:description' => '描述',
	'video:com:file' => '选择文件',
	'video:com:save' => '保存',
	'video:com:add' => '添加视频',
	'video:com:uploaded' => '视频已保存',
	'video:com:upload:failed' => '视频上传失败', 
	'video:com:invalid' => '无效的视频',
	'video:com:deleted' => '视频已删除',
	'video:com:delete:fail' => '视频删除失败',
	'video:com:delete' => '删除',
	'video:com:edit' => '编辑',
	'video:com:saved' => '视频已保存',
	'video:com:save:failed' => '保存视频失败',
	'video:com:wall:added' => '发布了新视频 %s',
	'video:com:all' => '所有视频',
	'video:com:mine' => '我的视频',
	'video:com:users:videos' => "%s 的视频",
	
	'video:com:ffmpeg:path' => 'FFMPEG 工具路径',
	'video:com:ffmpeg:path:note' => '如果您使用的是 Linux 服务器，ffmpeg 工具通常位于 /usr/bin/ 目录中。只需输入 ffmpeg 二进制文件所在的目录即可。',
	'video:ffmpeg:input:empty' => '请填写所有字段',
	'video:ffmpeg:path:saved' => '路径保存成功',
	'video:ffmpeg:path:save:error' => '无法保存路径，似乎发生了内部错误。',
	
	'video:com:ffmpeg:found' => '在 %s 找到了 FFMPEG 二进制文件',
	'video:com:ffmpeg:notfound' => '未找到 FFMPEG 二进制文件',
	
	'video:com:ffmpeg:status' => 'FFMPEG 状态',
	'video:com:mp4:files' => '不支持您的视频格式',
	
	'video:com:upload:conversion:failed' => '视频转换失败',
	'video:com:uploading' => '上传中：',
	'video:com:converting' => '转换中：',
	'video:group' => '群组',
	'video:com:upgrade:note' => '请点击下方按钮升级您的视频组件',
	'ossn:notifications:comments:entity:file:video' => '%s 评论了您的视频',
	'ossn:notifications:like:entity:file:video' => '%s 赞了您的视频',	
	
	'video:com:ffmpeg:compression:value' => '压缩值（默认 35）',
	'video:com:ffmpeg:compress:text' => '取值范围 1-50，较低的值意味着更好的视频质量和较大的文件体积。建议保持默认值以减少系统内存开销。',
	'video:com:ffmpeg:time:value' => '最大视频时长（默认 30秒）',
	'video:com:ffmpeg:time:text' => '视频最大时长限制（秒），最小 10 秒。建议尽可能保持较短时长。视频越长，RAM 占用越高，会导致网站变慢。建议不要超过 120 秒。',
	'video:com:maxfilesize' => '最大限制 %s MB',
	'video:com:formats' => '允许的格式 (.mov, .mp4)',
	'video:com:uploadtime' => '视频将被裁剪至最多 %s 秒',
	'video:com:converion:cron:failed' => '此视频的转换已失败！',
	'video:com:converion:cron:process' => '此视频正在转换中！',
	'video:com:converion:cron:pending' => '此视频正在等待转换队列中！在转换队列期间，您无法编辑或删除视频。',
	'video:com:pending' => '待处理',
	'video:com:cronjob' => '视频转换定时任务 (CRON Job)',
	'video:com:cronjob:text' => '后端转换视频需要设置定时任务 (CRON Job)。您可以要求您的托管提供商在您的托管账户中添加定时任务。您可以将 /usr/bin/php 替换为实际的 PHP 二进制路径。',
);
ossn_register_languages('zh', $zh);