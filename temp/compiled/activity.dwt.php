<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" /> 
<?php echo $this->fetch('library/js_languages_new.lbi'); ?>
</head>

<body class="bg-ligtGary">
    <?php echo $this->fetch('library/page_header_common.lbi'); ?>
    <div class="content">
        <div class="activity-index-main">
            <div class="w w1200">
                <div class="activity-index-filter" ectype="actFilter">
                    <a href="javascript:;" data-acttype="-1" class="curr"><?php echo $this->_var['lang']['all_activity']; ?></a>
                    <a href="javascript:;" data-acttype="0"><?php echo $this->_var['lang']['activity_gift']; ?></a>
                    <a href="javascript:;" data-acttype="1"><?php echo $this->_var['lang']['activity_reduction']; ?></a>
                    <a href="javascript:;" data-acttype="2"><?php echo $this->_var['lang']['activity_discount']; ?></a>
                </div>
                <ul class="activity-index-list clearfix" ectype="actList">
					<?php $_from = $this->_var['activity_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['list']):
?>
						<?php $_from = $this->_var['list']['activity_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('akey', 'activity');$this->_foreach['noactivity'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['noactivity']['total'] > 0):
    foreach ($_from AS $this->_var['akey'] => $this->_var['activity']):
        $this->_foreach['noactivity']['iteration']++;
?>
						<li class="mod-shadow-card" data-acttype="<?php echo $this->_var['activity']['actType']; ?>">
							<span class="tag <?php if ($this->_var['activity']['actType'] == 0): ?>tag-zp<?php elseif ($this->_var['activity']['actType'] == 1): ?>tag-jm<?php elseif ($this->_var['activity']['actType'] == 2): ?>tag-zk<?php endif; ?>"><?php echo $this->_var['list']['activity_name']; ?></span>
                            <div class="img">
                                <a href="activity.php?act=view&act_id=<?php echo $this->_var['activity']['act_id']; ?>">
                                    <img src="<?php if ($this->_var['activity']['activity_thumb']): ?><?php echo $this->_var['activity']['activity_thumb']; ?><?php else: ?>images/noactivity.png<?php endif; ?>" alt="">
                                </a>
                            </div>
							<div class="title"><?php echo $this->_var['activity']['act_name']; ?></div>
							<div class="time"><?php echo $this->_var['activity']['start_time']; ?> ~ <?php echo $this->_var['activity']['end_time']; ?></div>
							<div class="discount"><?php echo $this->_var['lang']['consume']; ?><span class="red"><?php echo $this->_var['activity']['min_amount']; ?></span><?php echo $this->_var['activity']['act_type']; ?><?php if ($this->_var['activity']['actType'] != 0): ?><span class="red"><?php echo $this->_var['activity']['act_type_ext']; ?></span><?php endif; ?></div>
							<a href="activity.php?act=view&act_id=<?php echo $this->_var['activity']['act_id']; ?>" class="acti-btn"><?php echo $this->_var['lang']['special_field']; ?><i class="iconfont icon-right"></i></a>
						</li>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
                <div class="no_records" style="display:none">
                    <i class="no_icon_two"></i>
                    <div class="no_info no_info_line">
                        <h3><?php echo $this->_var['lang']['information_null']; ?></h3>
                        <div class="no_btn">
                            <a href="index.php" class="btn sc-redBg-btn"><?php echo $this->_var['lang']['back_home']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
$k = array (
  'name' => 'user_menu_position',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
    <?php echo $this->fetch('library/page_footer.lbi'); ?>
    
    <?php echo $this->smarty_insert_scripts(array('files'=>'parabola.js,cart_common.js,cart_quick_links.js')); ?>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/dsc-common.js"></script>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.purebox.js"></script>
</body>
</html>
