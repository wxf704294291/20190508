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

<body>
    <?php echo $this->fetch('library/page_header_common.lbi'); ?>
    <div class="content">
        <div class="act-banner"><?php 
$k = array (
  'name' => 'get_adv_child',
  'ad_arr' => $this->_var['activity_top_banner'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
        <div class="gb-crazy">
            <div class="w w1200">
                <div class="crazy-hd">
                    <h2><?php echo $this->_var['lang']['insane_group_buy']; ?></h2>
                </div>
                <div class="crazy-bd">
                    <ul class="crazy-list clearfix">
                        <?php $_from = $this->_var['new_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group_buy');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['group_buy']):
        $this->_foreach['foo']['iteration']++;
?> 
                        <li class="mod-shadow-card">
                            <a href="<?php echo $this->_var['group_buy']['url']; ?>" target="_blank" class="img"><img src="<?php echo $this->_var['group_buy']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?>" title="<?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?>"></a>
                            <p class="price">¥<?php echo $this->_var['group_buy']['price_ladder']['0']['price']; ?></p>
                            <a href="<?php echo $this->_var['group_buy']['url']; ?>" target="_blank" class="name" title="<?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?>"><?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?></a>
                            <div class="lefttime" data-time='<?php echo $this->_var['group_buy']['formated_end_date']; ?>'>
                                <i class="iconfont icon-time"></i>
                                <span><?php echo $this->_var['lang']['residue_time']; ?></span>
                                <span class="days"></span>
                                <em>:</em>
                                <span class="hours"></span>
                                <em>:</em>
                                <span class="minutes"></span>
                                <em>:</em>
                                <span class="seconds"></span>
                            </div>
                            <?php if ($this->_var['group_buy']['is_end'] == 1): ?>
                            <a href="<?php echo $this->_var['group_buy']['url']; ?>" class="crazy-btn bid_end"><?php echo $this->_var['lang']['Group_purchase_end']; ?></a>
                            <?php else: ?>
                            <a href="<?php echo $this->_var['group_buy']['url']; ?>" class="crazy-btn"><?php echo $this->_var['lang']['Group_purchase_now']; ?></a>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="gb-index-main w w1200">
            <h2><?php echo $this->_var['lang']['hot_group_buy']; ?></h2>
            <div class="gb-index-list">
                <ul class="clearfix" ectype="items">
                    <?php $_from = $this->_var['hot_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group_buy');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['group_buy']):
        $this->_foreach['foo']['iteration']++;
?> 
                    <li class="mod-shadow-card">
                        <a href="<?php echo $this->_var['group_buy']['url']; ?>" target="_blank" class="img"><img src="<?php echo $this->_var['group_buy']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?>" title="<?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?>"></a>
                        <div class="clearfix">
                            <div class="price">¥<?php echo $this->_var['group_buy']['price_ladder']['0']['price']; ?></div>
                            <div class="man"><?php echo $this->_var['group_buy']['cur_amount']; ?><?php echo $this->_var['lang']['people_participate']; ?></div>
                        </div>
                        <a href="<?php echo $this->_var['group_buy']['url']; ?>" target="_blank" class="name" title="<?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?>"><?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?></a>
                        <div class="lefttime" data-time='<?php echo $this->_var['group_buy']['formated_end_date']; ?>'>
                            <i class="iconfont icon-time"></i>
                            <span><?php echo $this->_var['lang']['residue_time']; ?></span>
                            <span class="days"></span>
                            <em>:</em>
                            <span class="hours"></span>
                            <em>:</em>
                            <span class="minutes"></span>
                            <em>:</em>
                            <span class="seconds"></span>
                        </div>
                        <?php if ($this->_var['group_buy']['is_end'] == 1): ?>
                        <a href="<?php echo $this->_var['group_buy']['url']; ?>" class="gb-btn bid_end"><?php echo $this->_var['lang']['Group_purchase_end']; ?></a>
                        <?php else: ?>
                        <a href="<?php echo $this->_var['group_buy']['url']; ?>" class="gb-btn"><?php echo $this->_var['lang']['Group_purchase_now']; ?></a>
                        <?php endif; ?>
                    </li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
            </div>
            <a href="group_buy.php?act=list" class="gb-btn-all"><?php echo $this->_var['lang']['all_group_buy']; ?></a>
        </div>
    </div>
    <?php 
$k = array (
  'name' => 'user_menu_position',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
    <?php echo $this->fetch('library/page_footer.lbi'); ?>
    
    <?php echo $this->smarty_insert_scripts(array('files'=>'jquery.SuperSlide.2.1.1.js,common.js,jquery.yomi.js,parabola.js,cart_common.js,cart_quick_links.js')); ?>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/dsc-common.js"></script>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.purebox.js"></script>
    <script type="text/javascript">
	$(function(){
		//倒计时
		$(".lefttime").each(function(){
			$(this).yomi();
		});
	});    
    </script>
</body>
</html>
