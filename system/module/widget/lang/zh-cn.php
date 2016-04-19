<?php
/**
 * The zh-cn file of widget module of RanZhi.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Yidong Wang <yidong@cnezsoft.com>
 * @package     widget 
 * @version     $Id$
 * @link        http://www.ranzhico.com
 */
$lang->widget->common = '区块';
$lang->widget->title  = '区块名称';
$lang->widget->style  = '外观';
$lang->widget->type   = '类型';
$lang->widget->grid   = '宽度';
$lang->widget->color  = '颜色';
$lang->widget->status = '状态';

$lang->widget->create    = '创建区块';
$lang->widget->lblWidget = '区块';
$lang->widget->lblRss    = 'RSS地址';
$lang->widget->lblNum    = '条数';
$lang->widget->lblHtml   = 'HTML内容';

$lang->widget->params = new stdclass();
$lang->widget->params->name  = '参数名称';
$lang->widget->params->value = '参数值';

$lang->widget->createWidget        = '添加区块';
$lang->widget->editWidget          = '编辑区块';
$lang->widget->ordersSaved         = '排序已保存';
$lang->widget->confirmRemoveWidget = '确定移除区块【{0}】吗？';

$lang->widget->dynamic     = '最新动态';
$lang->widget->dynamicInfo = "%s, %s <em>%s</em> %s <a href='%s'>%s</a>。";

$lang->widget->default = array();
$lang->widget->default['1']['title'] = '最新订单';
$lang->widget->default['1']['type']  = 'latestOrder';
$lang->widget->default['1']['grid']  = 4;

$lang->widget->default['2']['title'] = '最新主题';
$lang->widget->default['2']['type']  = 'latestThread';
$lang->widget->default['2']['grid']  = 4;

$lang->widget->default['3']['title'] = '评论留言';
$lang->widget->default['3']['type']  = 'message';
$lang->widget->default['3']['grid']  = 4;

$lang->widget->moreLinkList = new stdclass();
$lang->widget->moreLinkList->latestOrder  = 'order|admin|';
$lang->widget->moreLinkList->latestThread = 'forum|amdin|';
$lang->widget->moreLinkList->message      = 'message|admin|type=message';

$lang->widget->typeList = new stdclass();
$lang->widget->typeList->latestOrder    = '最新订单';
$lang->widget->typeList->latestThread   = '最新帖子';
$lang->widget->typeList->message        = '评论留言';
$lang->widget->typeList->chanzhiDynamic = '蝉知动态';
$lang->widget->typeList->html           = '自定义';