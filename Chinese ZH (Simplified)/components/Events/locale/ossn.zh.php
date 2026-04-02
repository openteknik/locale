<?php
/**
 * Open Source Social Network
 *
 * @package Open Source Social Network
 * @author    OSSN Core Team <info@openteknik.com>
 * @copyright (C) OPENTEKNIK  LLC, COMMERCIAL LICENSE
 * @license   OPENTEKNIK  LLC, COMMERCIAL LICENSE, COMMERCIAL LICENSE https://www.openteknik.com/license/commercial-license-v1
 * @link      http://www.opensource-socialnetwork.org/licence
 */
$zh = array(
	'event' => '活动',
	'events' => '活动',
	'event:wall:button' => '活动',
	'event:fields:required:title:info' => '请确保您已填写所有字段。',
	'event:creation:succes' => '活动已成功创建',
	'event:creation:failed' => '无法创建活动',
	'event:creation:succes:saved' => '活动已成功保存',
	'event:save:failed' => '无法保存活动',
	'event:edit' => '编辑活动',
	'event:edited' => '活动已成功编辑',
	'event:edit:failed' => '无法编辑活动',
	
	'event:decision:event:saved' => "您已成功保存决定",
	'event:created:by' => "<strong>创建者：</strong> %s",
	'event:going' => '参加',
	'event:interested' => '感兴趣',
	'event:nointerested' => '不感兴趣',
	
	'event:start:time' => '开始时间',
	'event:end:time' => '结束时间',
	'event:price' => '价格',
	'event:location' => '地点',
	'event:country' => '国家',
	'event:date' => '日期',
	'event:price:any' => '价格（如有）',
	'event:image' => '图片',
	'event:allow:comments' => '允许评论和点赞',

	'event:browse' => '浏览',
	'event:all' => '所有活动',
	'event:mine' => '我的活动', 
	'event:add' => '添加活动',
	'event:list' => '活动列表',
	
	'event:no:result' => '未找到结果',
	'event:delete:failed' => '无法删除活动',
	'event:deleted' => '活动删除失败',

	'ossn:notifications:event:relation:going' => '%s 准备参加您的活动',
	'ossn:notifications:event:relation:interested' => '%s 对您的活动感兴趣',
	'ossn:notifications:event:relation:nointerested' => '%s 对您的活动不感兴趣',
	
	'events:comments:allowed:select' => '',
	'events:comments:allowed' => '允许',
	'events:comments:notallowed' => '不允许',
	'event:wall:item:created' => '创建了新活动',
	'ossn:notifications:comments:entity:event:wall' => '%s 评论了活动',
	'ossn:notifications:like:entity:event:wall' => '%s 赞了您的活动',
	
	'event:title' => '活动标题',
	'event:description' => '活动描述',
	'event:delete:makesure' => '您确定要删除这个活动吗？',
	'event:isended' => '关闭活动？（已结束）',
	'event:finished:no' => '否',
	'event:finished:yes' => '是',
	'event:finished' => '活动已结束！',
	
	'event:nothing:to:show' => '没有可显示的内容！',
	
	//cal
	'event:cal:close' => '关闭',
	'event:cal:month' => '月',
	'event:cal:list' => '列表',
	'event:cal:resources' => '资源',
	'event:cal:timeline' => '时间轴',
	'event:cal:day' => '日',
	'event:cal:week' => '周',
	'event:cal:today' => '今天',
	'event:cal:next' => '下个',
	'event:cal:previous' => '上个',
	'event:calendar' => '日历',
);
ossn_register_languages('zh', $zh);