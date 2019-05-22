<?php
               
class up_v2_3
{
	/**
     * 本升级包中SQL文件存放的位置（相对于升级包所在的路径）。每个版本类必须有该属性。
     */
	public $sql_files = array(
		'structure' => 'structure.sql',
		'data'      => array('zh_cn_utf-8' => 'data_zh_cn_utf-8.sql')
		);
	/**
     * 本升级包是否进行智能化的查询操作。每个版本类必须有该属性。
     */
	public $auto_match = true;

	public function __construct()
	{
	}

	public function up_v2_3()
	{
	}

	public function update_database_optionally()
	{
		global $db;
		global $ecs;
		include_once ROOT_PATH . 'includes/inc_constant.php';
		$sql = 'CREATE TABLE IF NOT EXISTS ' . $GLOBALS['ecs']->table('goods_lib') . ' (
		  `goods_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
		  `cat_id` smallint(5) unsigned NOT NULL DEFAULT \'0\',
		  `lib_cat_id` smallint(5) NOT NULL COMMENT \'商品库分类ID\',
		  `goods_sn` varchar(60) NOT NULL DEFAULT \'\',
		  `bar_code` varchar(60) NOT NULL,
		  `goods_name` varchar(120) NOT NULL DEFAULT \'\',
		  `goods_name_style` varchar(60) NOT NULL DEFAULT \'+\',
		  `brand_id` smallint(5) unsigned NOT NULL DEFAULT \'0\',
		  `goods_weight` decimal(10,3) unsigned NOT NULL DEFAULT \'0.000\',
		  `market_price` decimal(10,2) unsigned NOT NULL DEFAULT \'0.00\',
		  `cost_price` decimal(10,2) NOT NULL DEFAULT \'0.00\' COMMENT \'成本价\',
		  `shop_price` decimal(10,2) unsigned NOT NULL DEFAULT \'0.00\',
		  `keywords` varchar(255) NOT NULL DEFAULT \'\',
		  `goods_brief` varchar(255) NOT NULL DEFAULT \'\',
		  `goods_desc` text NOT NULL,
		  `desc_mobile` text NOT NULL,
		  `goods_thumb` varchar(255) NOT NULL DEFAULT \'\',
		  `goods_img` varchar(255) NOT NULL DEFAULT \'\',
		  `original_img` varchar(255) NOT NULL DEFAULT \'\',
		  `is_real` tinyint(3) unsigned NOT NULL DEFAULT \'1\',
		  `extension_code` varchar(30) NOT NULL DEFAULT \'\',
		  `add_time` int(10) unsigned NOT NULL DEFAULT \'0\',
		  `sort_order` smallint(4) unsigned NOT NULL DEFAULT \'100\',
		  `last_update` int(10) unsigned NOT NULL DEFAULT \'0\',
		  `goods_type` smallint(5) unsigned NOT NULL DEFAULT \'0\',
		  `is_check` tinyint(1) unsigned DEFAULT NULL,
		  `largest_amount` decimal(10,2) unsigned NOT NULL DEFAULT \'0.00\',
		  `pinyin_keyword` text,
		  `lib_goods_id` mediumint(8) unsigned NOT NULL COMMENT \'商品库商品ID\',
		  `is_on_sale` tinyint(1) NOT NULL COMMENT \'上下架\',
		  PRIMARY KEY (`goods_id`),
		  KEY `goods_sn` (`goods_sn`),
		  KEY `cat_id` (`cat_id`),
		  KEY `last_update` (`last_update`),
		  KEY `brand_id` (`brand_id`),
		  KEY `goods_weight` (`goods_weight`),
		  KEY `sort_order` (`sort_order`)
		) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;';
		$GLOBALS['db']->query($sql);
		$sql = 'CREATE TABLE IF NOT EXISTS ' . $GLOBALS['ecs']->table('goods_lib_cat') . ' (
		  `cat_id` mediumint(8) NOT NULL AUTO_INCREMENT COMMENT \'自增ID号\',
		  `parent_id` mediumint(8) NOT NULL COMMENT \'父类ID号\',
		  `cat_name` varchar(50) NOT NULL COMMENT \'商品库商品分类名称\',
		  `is_show` tinyint(1) NOT NULL COMMENT \'是否显示\',
		  `sort_order` tinyint(3) NOT NULL COMMENT \'排序\',
		  PRIMARY KEY (`cat_id`)
		) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;';
		$GLOBALS['db']->query($sql);
		$sql = 'CREATE TABLE IF NOT EXISTS ' . $GLOBALS['ecs']->table('goods_lib_gallery') . ' (
		  `img_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
		  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT \'0\',
		  `img_url` varchar(255) NOT NULL DEFAULT \'\',
		  `img_desc` varchar(255) NOT NULL DEFAULT \'\',
		  `thumb_url` varchar(255) NOT NULL DEFAULT \'\',
		  `img_original` varchar(255) NOT NULL DEFAULT \'\',
		  `single_id` mediumint(8) DEFAULT NULL,
		  PRIMARY KEY (`img_id`),
		  KEY `goods_id` (`goods_id`)
		) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;';
		$GLOBALS['db']->query($sql);
		$sql = 'ALTER TABLE ' . $GLOBALS['ecs']->table('brand') . ' ADD  `brand_bg` VARCHAR( 80 ) NOT NULL AFTER  `index_img`;';
		$GLOBALS['db']->query($sql);
		$sql = 'ALTER TABLE ' . $GLOBALS['ecs']->table('gallery_album') . ' ADD `parent_album_id` int(10) unsigned NOT NULL DEFAULT \'0\' AFTER  `album_id`;';
		$GLOBALS['db']->query($sql);
		$sql = 'CREATE TABLE IF NOT EXISTS ' . $GLOBALS['ecs']->table('seller_template_apply') . ' (
		  `apply_id` int(10) NOT NULL AUTO_INCREMENT,
		  `apply_sn` varchar(20) NOT NULL DEFAULT \'0\',
		  `ru_id` int(10) unsigned NOT NULL DEFAULT \'0\',
		  `temp_id` smallint(8) unsigned NOT NULL DEFAULT \'0\',
		  `temp_code` varchar(60) NOT NULL,
		  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT \'0\',
		  `apply_status` tinyint(1) unsigned NOT NULL DEFAULT \'0\',
		  `total_amount` decimal(10,2) NOT NULL DEFAULT \'0.00\',
		  `pay_fee` decimal(10,2) NOT NULL DEFAULT \'0.00\',
		  `add_time` int(10) unsigned NOT NULL DEFAULT \'0\',
		  `pay_time` int(10) unsigned NOT NULL DEFAULT \'0\',
		  `pay_id` tinyint(3) unsigned NOT NULL DEFAULT \'0\',
		  PRIMARY KEY (`apply_id`)
		) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;';
		$GLOBALS['db']->query($sql);
		$sql = 'CREATE TABLE IF NOT EXISTS ' . $GLOBALS['ecs']->table('template_mall') . ' (
		  `temp_id` int(10) NOT NULL AUTO_INCREMENT,
		  `temp_file` varchar(255) NOT NULL,
		  `temp_mode` tinyint(1) NOT NULL DEFAULT \'0\',
		  `temp_cost` decimal(10,2) NOT NULL DEFAULT \'0.00\',
		  `temp_code` varchar(60) NOT NULL,
		  `add_time` int(10) NOT NULL DEFAULT \'0\',
		  `sales_volume` int(10) NOT NULL DEFAULT \'0\',
		  PRIMARY KEY (`temp_id`)
		) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;';
		$GLOBALS['db']->query($sql);
		$sql = 'CREATE TABLE IF NOT EXISTS ' . $GLOBALS['ecs']->table('mass_sms_template') . ' (
		  `id` smallint(5) NOT NULL AUTO_INCREMENT,
		  `temp_id` varchar(255) NOT NULL COMMENT \'模板ID\',
		  `temp_content` varchar(255) NOT NULL COMMENT \'模板内容\',
		  `content` varchar(255) NOT NULL COMMENT \'自定义内容\',
		  `add_time` int(15) NOT NULL COMMENT \'添加时间\',
		  `set_sign` varchar(255) NOT NULL COMMENT \'签名\',
		  `signature` tinyint(1) NOT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;';
		$GLOBALS['db']->query($sql);
		$sql = 'CREATE TABLE IF NOT EXISTS ' . $GLOBALS['ecs']->table('mass_sms_log') . ' (
		  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
		  `template_id` int(10) unsigned NOT NULL DEFAULT \'0\',
		  `user_id` int(10) unsigned NOT NULL DEFAULT \'0\',
		  `send_status` tinyint(1) unsigned NOT NULL DEFAULT \'0\' COMMENT \'0:未发送,1:已发送,2:发送失败\',
		  `last_send` int(10) unsigned NOT NULL DEFAULT \'0\',
		  PRIMARY KEY (`id`),
		  KEY `template_id` (`template_id`),
		  KEY `user_id` (`user_id`)
		) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;';
		$GLOBALS['db']->query($sql);
		$sql = 'ALTER TABLE ' . $GLOBALS['ecs']->table('goods_lib') . ' ADD `from_seller` int(11) NOT NULL DEFAULT \'0\';';
		$GLOBALS['db']->query($sql);
		$sql = 'ALTER TABLE ' . $GLOBALS['ecs']->table('goods') . ' ADD `from_seller` int(11) NOT NULL DEFAULT \'0\';';
		$GLOBALS['db']->query($sql);
		$sql = 'ALTER TABLE ' . $GLOBALS['ecs']->table('user_account') . ' ADD `deposit_fee` DECIMAL( 10, 2 ) NOT NULL DEFAULT \'0.00\' AFTER `amount` ;';
		$GLOBALS['db']->query($sql);
		$sql = 'ALTER TABLE ' . $GLOBALS['ecs']->table('account_log') . ' ADD `deposit_fee` DECIMAL( 10, 2 ) NOT NULL DEFAULT \'0.00\' AFTER `user_money`;';
		$GLOBALS['db']->query($sql);
		$sql = 'ALTER TABLE ' . $GLOBALS['ecs']->table('order_return') . ' ADD `refund_type` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT \'1\';';
		$GLOBALS['db']->query($sql);
		$sql = 'ALTER TABLE ' . $GLOBALS['ecs']->table('order_return') . ' ADD `activation_number` TINYINT( 3 ) NOT NULL DEFAULT \'0\' AFTER `chargeoff_status`;';
		$GLOBALS['db']->query($sql);
		$sql = 'ALTER TABLE ' . $GLOBALS['ecs']->table('order_info') . ' ADD `return_amount` DECIMAL( 10, 2 ) UNSIGNED NOT NULL DEFAULT \'0.00\' COMMENT \'订单整站退款金额\' AFTER `order_amount` ;';
		$GLOBALS['db']->query($sql);
		$sql = 'ALTER TABLE ' . $GLOBALS['ecs']->table('user_account') . ' ADD `pay_id` SMALLINT( 8 ) UNSIGNED NOT NULL DEFAULT \'0\' COMMENT \'支付ID\' AFTER `payment` ,
		ADD INDEX ( `pay_id` ) ;';
		$GLOBALS['db']->query($sql);
		$sql = 'ALTER TABLE ' . $GLOBALS['ecs']->table('user_account') . ' ADD `complaint_imges` VARCHAR( 255 ) NOT NULL COMMENT \'申诉照片\' AFTER `is_paid` ,
		ADD `complaint_time` INT( 10 ) UNSIGNED NOT NULL COMMENT \'申诉时间\' AFTER `complaint_imges` ;';
		$GLOBALS['db']->query($sql);
		$sql = 'ALTER TABLE ' . $GLOBALS['ecs']->table('user_account') . ' ADD `complaint_details` VARCHAR( 500 ) NOT NULL DEFAULT \'\' COMMENT \'申诉内容\' AFTER `is_paid` ;';
		$GLOBALS['db']->query($sql);
		$sql = 'ALTER TABLE ' . $GLOBALS['ecs']->table('region_warehouse') . ' ADD `region_code` VARCHAR( 255 ) NOT NULL DEFAULT \'\' AFTER `region_name` ,
		ADD INDEX ( `region_code` ) ;';
		$GLOBALS['db']->query($sql);
		$sql = 'INSERT INTO ' . $GLOBALS['ecs']->table('admin_action') . ' (`parent_id`, `action_code`, `relevance`) VALUES (\'0\', \'goods_lib\', \'\');';
		$GLOBALS['db']->query($sql);
		$sql = 'SELECT action_id FROM ' . $GLOBALS['ecs']->table('admin_action') . ' WHERE action_code = \'goods_lib\'';
		$action_id = $GLOBALS['db']->getOne($sql, true);
		$sql = 'INSERT INTO ' . $GLOBALS['ecs']->table('admin_action') . ' (`action_id`, `parent_id`, `action_code`, `relevance`) VALUES (NULL, \'' . $action_id . '\', \'goods_lib_list\', \'\');';
		$GLOBALS['db']->query($sql);
		$sql = 'INSERT INTO ' . $GLOBALS['ecs']->table('admin_action') . ' (`action_id`, `parent_id`, `action_code`, `relevance`) VALUES (NULL, \'' . $action_id . '\', \'goods_lib_cat\', \'\');';
		$GLOBALS['db']->query($sql);
		$sql = 'SELECT action_id FROM ' . $GLOBALS['ecs']->table('admin_action') . ' WHERE action_code = \'users_manage\'';
		$action_id = $GLOBALS['db']->getOne($sql, true);
		$sql = 'INSERT INTO ' . $GLOBALS['ecs']->table('admin_action') . ' (`action_id`, `parent_id`, `action_code`, `relevance`, `seller_show`) VALUES (NULL, \'' . $action_id . '\', \'mass_sms\', \'\', \'0\');';
		$GLOBALS['db']->query($sql);
		$sql = 'SELECT action_id FROM ' . $GLOBALS['ecs']->table('admin_action') . ' WHERE action_code = \'goods\'';
		$action_id = $GLOBALS['db']->getOne($sql, true);
		$sql = 'INSERT INTO ' . $GLOBALS['ecs']->table('admin_action') . ' (`action_id`, `parent_id`, `action_code`, `relevance`, `seller_show`) VALUES (NULL, \'' . $action_id . '\', \'commission_setting\', \'\', \'1\');';
		$GLOBALS['db']->query($sql);
		$sql = 'SELECT id FROM ' . $GLOBALS['ecs']->table('shop_config') . ' WHERE code = \'extend_basic\'';
		$config_id = $GLOBALS['db']->getOne($sql, true);
		$sql = 'INSERT INTO ' . $GLOBALS['ecs']->table('shop_config') . ' (`parent_id` ,`code` ,`type`) VALUES (\'' . $config_id . '\',  \'deposit_fee\',  \'text\');';
		$GLOBALS['db']->query($sql);
		$sql = 'INSERT INTO ' . $GLOBALS['ecs']->table('shop_config') . ' ( `parent_id` , `code` , `type` , `store_range` , `value` , `sort_order` , `shop_group` ) VALUES ( \'' . $config_id . '\', \'template_pay_type\', \'select\', \'0,1\', \'0\', 2, \'seller\' ) ;';
		$GLOBALS['db']->query($sql);
		$sql = 'INSERT INTO ' . $GLOBALS['ecs']->table('template_mall') . ' ( `temp_code` ) VALUES (\'store_tpl_1\');';
		$GLOBALS['db']->query($sql);
		$sql = 'UPDATE ' . $GLOBALS['ecs']->table('seller_shopinfo') . ' SET `templates_mode` = 1 WHERE 1;';
		$GLOBALS['db']->query($sql);
		$sql = 'INSERT INTO ' . $GLOBALS['ecs']->table('shop_config') . ' ( `parent_id` , `code` , `type` , `value` , `sort_order` ) VALUES ( 4, \'activation_number_type\', \'text\', 2, 2 ) ;';
		$GLOBALS['db']->query($sql);
		$sql = 'INSERT INTO ' . $GLOBALS['ecs']->table('shop_config') . ' (`id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order`, `shop_group`) VALUES (NULL, \'' . $config_id . '\', \'wholesale_user_rank\', \'select\', \'1,0\', \'\', \'1\', \'1\', \'\');';
		$GLOBALS['db']->query($sql);
		$sql = 'INSERT INTO ' . $GLOBALS['ecs']->table('shop_config') . ' ( `parent_id` , `code` , `type` , `store_range` , `value` , `sort_order` , `shop_group` ) VALUES ( \'' . $config_id . '\', \'is_illegal\', \'select\', \'0,1\', \'0\', 1, \'\' ) ;';
		$GLOBALS['db']->query($sql);
		$sql = 'UPDATE ' . $GLOBALS['ecs']->table('payment') . ' SET `is_online` = \'0\' WHERE `pay_code` = \'balance\';';
		$GLOBALS['db']->query($sql);
	}

	public function update_files()
	{
		$result = file_mode_info(ROOT_PATH . 'data/');

		if ($result < 2) {
			exit('ERROR, ' . ROOT_PATH . 'data/ isn\'t a writeable directory.');
		}

		if (!file_exists(ROOT_PATH . 'data/config.php')) {
			if (file_exists(ROOT_PATH . 'includes/config.php')) {
				copy(ROOT_PATH . 'includes/config.php', ROOT_PATH . 'data/config.php');
			}
			else {
				exit('ERROR, can\'t find config.php.');
			}
		}

		if (!file_exists(ROOT_PATH . 'data/install.lock.php')) {
			if (file_exists(ROOT_PATH . 'includes/install.lock.php')) {
				copy(ROOT_PATH . 'includes/install.lock.php', ROOT_PATH . 'data/install.lock.php');
			}
			else {
				exit('ERROR, can\'t find install.lock.php.');
			}
		}
	}
}


?>
