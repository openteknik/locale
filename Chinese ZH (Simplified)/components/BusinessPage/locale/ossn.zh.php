<?php
/**
 * Open Source Social Network
 *
 * @package Open Source Social Network
 * @author    OSSN Core Team <info@openteknik.com>
 * @copyright (C) OpenTeknik LLC
 * @license   OPENTEKNIK  LLC, COMMERCIAL LICENSE, COMMERCIAL LICENSE https://www.openteknik.com/license/commercial-license-v1
 * @link      https://www.opensource-socialnetwork.org/
 */
$zh = array(
		'bpage' => '业务主页',
		'bpage:cover:err1:detail' => '封面图片尺寸必须至少为 %s x %s 或更大。',
		'bpage:name' => '主页名称',
		'bpage:desc' => '描述',
		'bpage:phone' => '电话',
		'bpage:website' => '网站',
		'bpage:address' => '地址',
		'bpage:type' => '主页类型',
		'bpage:change:photo' => '更换照片',
		'bpage:reposition' => '调整位置',
		'bpage:save:position' => '保存位置',
		'bpage:change:cover' => '更换封面',
		
		'bpage:cat:business' => '商业',
		'bpage:cat:brand' => '品牌',
		'bpage:cat:product' => '产品',
		'bpage:cat:artist' => '艺术家',
		'bpage:cat:public:figure' => '公众人物',
		'bpage:cat:entertainment' => '娱乐',
		'bpage:cat:cause' => '公益/事业',
		'bpage:cat:community' => '社区',
		'bpage:cat:org' => '组织',
		
		'bpage:edited' => '主页已编辑',
		'bpage:edit:failed' => '无法编辑主页',
		'bpage:deleted' => '主页已删除',
		'bpage:delete:failed' => '无法删除主页',
		
		'bpage:edit' => '编辑主页',
		'bpage:delete' => '删除主页',
		
		'bpage:list' => '所有主页',
		'bpage:add' => '创建新主页',
		
		'bpage:cover:upload:error' => '无法添加封面',
		'ossn:notifications:comments:post:businesspage:wall' => '%s 评论了您的主页贴文',
		'ossn:notifications:like:post:businesspage:wall' =>  '%s 赞了您的主页贴文',
		
		'bpage:fileds:required' => "请确保您已输入名称、描述和类别",
		'bpage:added' => '主页已创建',
		'bpage:likedpages' => '赞过的主页',
		'bpage:mypages' => '我的主页',	
		'bpage:likes' => '%s 个赞',
		'bpage:about' => '关于',
		'bpage:delete:warning' => '删除操作将永久移除所有内容，包括相关贴文、评论、媒体和设置。此操作无法撤销，数据一旦删除将无法恢复。',
		'bpage:ownership' => '所有权变更！',
		'bpage:ownership:warning' => '您可以将主页所有权转让给其他用户，但该用户必须是您的好友。所有权一经转让，除非您的好友将其转回给您，否则无法撤回。',
		'bpage:select:friends' => '选择好友',
		'bpage:website:invalid' => '无效的网站网址。格式应类似于：https://yourwebsite.com',
		'bpage:username:note' => "请慎重选择您的用户名！您只能设置一次，且以后无法更改。设置完成后，您可以随时通过此地址访问您的主页：%s",
);
ossn_register_languages('zh', $zh);