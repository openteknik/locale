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
	'admin:customfields' => '用户字段',
	'customfields:settings' => '用户字段设置',
	'customfield:yes' => '是',
	'customfield:no' => '否',
	'customfield:textbox' => '文本框',
	'customfield:dropdownbox' => '下拉框',
	'customfield:radio' => '单选按钮',
	'customfield:textarea' => '多行文本框',
	'customfield:name' => '字段名称（不得包含空格和特殊字符）',
	'customfield:title' => '字段标题',
	'customfield:options' => '字段选项（用于单选/下拉框），以逗号分隔。例如：选项1, 选项2, 选项3',
	'customfield:add' => '添加字段',
	'customfield:type' => '字段类型',
	'customfield:showsignup' => '在注册页面显示',
	'customfield:fieldrequired' => '此字段为必填项',
	'customfield:showlabel' => '显示标签（在注册表单上）',
	'customfield:showonabout' => '在“关于”页面显示',
	'customfield:aboutpage' => '关于页面',
	'customfield:showaboutpage' => '显示关于页面',
	'customfield:fields:required:a' => '请填写字段名称和类型',
	'customfield:fields:required:b' => '请填写字段选项',
	'customfield:fields:required:c' => '请仅使用字母指定字段名称',
	'customfield:fields:added' => '自定义字段已添加',
	'customfield:fields:add:failed' => '无法添加自定义字段',
	'customfield:edit' => '编辑',
	'customfield:fields:edited' => '字段已成功编辑',
	'customfield:fields:edit:failed' => '无法编辑字段',
	
	'customfield:list:name' => '名称',
	'customfield:list:title' => '标题',
	'customfield:list:type' => '类型',
	'customfield:list:onsignup' => '注册显示',
	'customfield:list:required' => '必填',
	'customfield:list:label' => '显示标签',
	'customfield:list:about' => '关于页面显示',
	'customfield:list:manage' => '管理',
	
	'customfield:fields:initlized' => '初始化自定义字段',
	'customfields:init' => '初始化',
	'customfield:abouser' => '关于',
	'customfield:fields:aboutsaved' => '关于页面设置已保存',
	'customfield:fields:aboutsave:error' => '无法保存关于页面设置',
	'customfields:note' => '* 您可以通过上下拖动来重新排列字段顺序。<br />* 您不能删除系统默认字段，只能调整它们的位置。<br />* 选择下拉框或单选类型时，需要添加以逗号分隔的选项。<br />* “显示标签”决定是否在注册/编辑表单的字段上方显示标题。<br />* 非必填字段不会显示在注册表单上。',
	
	'customfield:fields:deleted' => '字段已成功删除',
	'customfield:fields:delete:error' => '无法删除该字段',
	'customfield:disablecomponent' => '请确保您已禁用以下组件：<li>AboutUser</li> <li>Bio</li> <li>M_Country</li>',
	'customfields:basic:information' => '基本信息',	
);
ossn_register_languages('zh', $zh);