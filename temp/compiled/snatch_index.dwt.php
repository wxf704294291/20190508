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
    	<div class="banner exchange-banner">
            <div class="w w1200 relative">
                <?php 
$k = array (
  'name' => 'get_adv_child',
  'ad_arr' => $this->_var['activity_top_banner'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
                <div class="snatch-firt">
                    <div class="snatch-f-name"><?php echo $this->_var['lang']['snatch']; ?></div>
                    <div class="snatch-f-info">
                        <div class="namber"><?php echo empty($this->_var['snatch_goods_num']) ? '0' : $this->_var['snatch_goods_num']; ?></div>
                        <span><?php echo $this->_var['lang']['snatch_goods_notic']; ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="snatch-main">
            <div class="w w1200">
                <div class="snatch-hot">
                    <div class="snatch-t"><h2><?php echo $this->_var['lang']['Popular_recommendation']; ?></h2></div>
                    <div class="snatch-hot-slide">
                        <div class="p-left"><a href="javascript:;" class="prev"></a></div>
                        <div class="p-right"><a href="javascript:;" class="next"></a></div>
                        <div class="bd">
                            <ul>
                                <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
                                <li>
                                    <a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" class="img"><img src="<?php if ($this->_var['goods']['goods_img']): ?><?php echo $this->_var['goods']['goods_img']; ?><?php else: ?><?php echo $this->_var['goods']['thumb']; ?><?php endif; ?>"></a>
                                    <a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" class="name"><?php echo $this->_var['goods']['name']; ?></a>
                                    <div class="info">
                                        <div class="info-item">
                                            <span><?php echo $this->_var['lang']['current_price']; ?>：</span>
                                            <span class="price"><?php echo $this->_var['goods']['formated_shop_price']; ?></span>
                                        </div>
                                        <div class="info-item">
                                            <span><?php echo $this->_var['lang']['bid_number']; ?>：</span>
                                            <span><?php echo $this->_var['goods']['price_list_count']; ?></span>
                                        </div>
                                        <div class="info-item lefttime" data-time="<?php echo $this->_var['goods']['end_time_date']; ?>">
                                            <span><?php echo $this->_var['lang']['residual_time']; ?>：</span>
                                            <span class="days">00</span>
                                            <em>:</em>
                                            <span class="hours">15</span>
                                            <em>:</em>
                                            <span class="minutes">40</span>
                                            <em>:</em>
                                            <span class="seconds">10</span>
                                        </div>
                                    </div>
                                    <a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" class="sn-btn"><?php echo $this->_var['lang']['me_bid']; ?></a>
                                </li>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="snatch-index-goods">
                    <div class="snatch-t"><h2><?php echo $this->_var['lang']['snatch']; ?></h2></div>
                    <div class="snatch-b">
                    	<div class="snatch-list">
                            <ul class="clearfix" ectype="items">
                                <?php $_from = $this->_var['snatch_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                <li class="mod-shadow-card">
                                    <a href="<?php echo $this->_var['list']['url']; ?>" class="img"><img src="<?php echo $this->_var['list']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['list']['snatch_name']); ?>"></a>
                                    <a href="<?php echo $this->_var['list']['url']; ?>" class="name"><?php echo htmlspecialchars($this->_var['list']['snatch_name']); ?></a>
                                    <div class="info">
                                        <p><em><?php echo $this->_var['lang']['current_price']; ?>：</em><span class="price"><?php echo $this->_var['list']['formated_shop_price']; ?></span></p>
                                        <p class="lefttime" data-time="<?php echo $this->_var['list']['snatch']['end_time_date']; ?>">
                                            <span><?php echo $this->_var['lang']['residual_time']; ?>：</span>
                                            <span class="days">00</span>
                                            <em>:</em>
                                            <span class="hours">15</span>
                                            <em>:</em>
                                            <span class="minutes">40</span>
                                            <em>:</em>
                                            <span class="seconds">10</span>
                                        </p>
                                        <p><em><?php echo $this->_var['lang']['bid_number']; ?>：</em><span><?php echo $this->_var['list']['price_list_count']; ?></span></p>
                                    </div>
                                    <?php if ($this->_var['list']['current_time'] < $this->_var['list']['end_time'] && $this->_var['list']['current_time'] > $this->_var['list']['start_time']): ?>
                                    <a href="<?php echo $this->_var['list']['url']; ?>" target="_blank" class="sn-btn"><em></em><?php echo $this->_var['lang']['me_bid']; ?><s></s></a>
                                    <?php elseif ($this->_var['list']['current_time'] >= $this->_var['list']['end_time']): ?>
                                    <a href="<?php echo $this->_var['list']['url']; ?>" target="_blank" class="sn-btn bid_end"><em></em><?php echo $this->_var['lang']['au_end']; ?><s></s></a>
                                    <?php else: ?>
                                    <a href="<?php echo $this->_var['list']['url']; ?>" target="_blank" class="sn-btn bid_wait"><em></em><?php echo $this->_var['lang']['Wait_au']; ?><s></s></a>
                                    <?php endif; ?>
                                </li>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </ul>
                        </div>
                        <a href="snatch.php?act=list" class="gb-btn-all"><?php echo $this->_var['lang']['all_snatch']; ?></a>
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
    
    <?php echo $this->smarty_insert_scripts(array('files'=>'jquery.SuperSlide.2.1.1.js,common.js,jquery.yomi.js,cart_common.js,cart_quick_links.js')); ?>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/dsc-common.js"></script>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.purebox.js"></script>
    <script type="text/javascript">
	$(function(){
		$(".snatch-hot-slide").slide({effect: "left",vis: 3,scroll: 1,autoPage: true,mainCell: ".bd ul"});
		
		//倒计时
		$(".lefttime").each(function(){
			$(this).yomi();
		});
	});
    </script>
</body>
</html>
