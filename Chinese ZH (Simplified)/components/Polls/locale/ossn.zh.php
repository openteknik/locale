<?php
/**
 * Open Source Social Network
 *
 * @package    Open Source Social Network
 * @author     OSSN Core Team <info@openteknik.com>
 * @copyright  (C) OpenTeknik LLC
 * @license    Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link       https://www.opensource-socialnetwork.org/
 */
$zh = array(
		'polls' => '投票',
		'polls:add' => '添加投票',
		'polls:poll' => '投票',
		'polls:title' => '投票标题',
		'polls:option:title' => '选项标题',
		'polls:add:option' => '添加选项',
		'polls:options' => '选项',
		'polls:publish' => "发布投票",
		'polls:error:created' => '无法创建投票',
		'polls:success:created' => '投票已成功发布到您的动态中',
		'polls:vote' => '投票',
		'polls:success:voted' => '您的投票已成功提交',
		'polls:failed:voted' => "无法保存您的投票",
		'polls:wall:created' => '发起了新投票',
		'polls:failed:end' => "无法结束此投票",
		'polls:success:end' => '投票已结束',
		'polls:end' => '结束',
		'polls:delete' => '删除',
		'polls:embed' => '嵌入',
		'polls:ended' => '投票已结束',
		
		'ossn:notifications:comments:entity:poll_entity' => "%s 评论了您的投票",
		'ossn:notifications:like:entity:poll_entity' => '%s 赞了您的投票',
		'polls:failed:delete' => '无法删除投票',
		'polls:success:delete' => '投票已删除',
		
		'polls:title' => '标题',
		'polls:time' => '创建时间',
		'polls:status' => '状态',
		'polls:status:ended' => '已结束',
		'polls:status:opened' => '进行中',
		'polls:all' => '所有投票',
		'polls:my'  => '我的投票',
		'polls:list' => '投票列表',
		
		'polls:group' => '群组',
		'polls:join:group' => '您需要加入群组才能查看投票',
		'polls:show:voters' => '显示投票人',
		'polls:voters' => '投票人',
		'polls:show:voters:note' => '允许用户查看谁投了票',
		'poll:yes' => '是',
		'poll:no' => '否',
		'polls:error:atleast2' => '投票至少需要 2 个选项！',
		'polls:error:duplicate:options' => '投票选项不能重复！', 
		
);
ossn_register_languages('zh', $zh);