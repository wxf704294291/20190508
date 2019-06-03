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
        <div class="w w1200">
            <?php echo $this->fetch('library/ur_here.lbi'); ?>
            <div class="selector gb-selector">
                <div class="s-line">
                    <div class="s-l-wrap">
                        <form method="GET"  class="sort" name="listform">
                            <div class="s-l-tit"><span><?php echo $this->_var['lang']['sort']; ?>：</span></div>
                            <div class="s-l-value">
                                <div class="mod-list-sort">
                                    <div class="sort-l">
                                        <a href="snatch.php?act=list&sort=snatch_id&order=<?php if ($this->_var['pager']['search']['sort'] == 'snatch_id' && $this->_var['pager']['search']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>" class="sort-item <!-- <?php if ($this->_var['pager']['search']['sort'] == 'snatch_id'): ?>curr<?php endif; ?>"><?php echo $this->_var['lang']['default']; ?><i class="iconfont <?php if ($this->_var['pager']['search']['sort'] == 'snatch_id' && $this->_var['pager']['search']['order'] == 'DESC'): ?>icon-down1<?php else: ?>icon-up1<?php endif; ?>"></i></a>
                                        <a href="snatch.php?act=list&sort=start_time&order=<?php if ($this->_var['pager']['search']['sort'] == 'start_time' && $this->_var['pager']['search']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>" class="sort-item <!-- <?php if ($this->_var['pager']['search']['sort'] == 'start_time'): ?>curr<?php endif; ?>"><?php echo $this->_var['lang']['start_time']; ?><i class="iconfont <?php if ($this->_var['pager']['search']['sort'] == 'start_time' && $this->_var['pager']['search']['order'] == 'DESC'): ?>icon-down1<?php else: ?>icon-up1<?php endif; ?>"></i></a>
                                        <a href="snatch.php?act=list&sort=end_time&order=<?php if ($this->_var['pager']['search']['sort'] == 'end_time' && $this->_var['pager']['search']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>" class="sort-item <!-- <?php if ($this->_var['pager']['search']['sort'] == 'end_time'): ?>curr<?php endif; ?>"><?php echo $this->_var['lang']['coming_end']; ?><i class="iconfont <?php if ($this->_var['pager']['search']['sort'] == 'end_time' && $this->_var['pager']['search']['order'] == 'DESC'): ?>icon-down1<?php else: ?>icon-up1<?php endif; ?>"></i></a>
                                    </div>
                                    <div class="f-search mr10">
                                        <input name="keywords" type="text" class="text" value="<?php echo $this->_var['pager']['search']['keywords']; ?>" placeholder="<?php echo $this->_var['lang']['goods_name']; ?>" />
                                        <a href="javascript:void(0);" class="btn sc-redBg-btn ui-btn-submit"><?php echo $this->_var['lang']['assign']; ?></a>
                                    </div>
                                    <input type="hidden" name="act" value="list" />
                                    <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
                                    <input type="hidden" name="sort" value="<?php echo $this->_var['pager']['search']['sort']; ?>" />
                                    <input type="hidden" name="order" value="<?php echo $this->_var['pager']['search']['order']; ?>" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="snatch-list-main">
                <?php if ($this->_var['snatch_list']): ?>
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
                <?php if ($this->_var['category_load_type']): ?>
                <div class="floor-loading goods-floor-loading" ectype="floor-loading"><div class="floor-loading-warp"><img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/images/load/loading.gif"></div></div>
                <?php else: ?>
                <?php echo $this->fetch('library/pages.lbi'); ?>
                <?php endif; ?>
                <?php else: ?>
                <div class="no_records">
                    <i class="no_icon_two"></i>
                    <div class="no_info">
                        <h3><?php echo $this->_var['lang']['information_null']; ?></h3>
                    </div>
                </div>
                <?php endif; ?>
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
    
    <?php echo $this->smarty_insert_scripts(array('files'=>'jquery.SuperSlide.2.1.1.js,common.js,jquery.yomi.js,parabola.js,cart_common.js,cart_quick_links.js')); ?>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/dsc-common.js"></script>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.purebox.js"></script>
    <?php if ($this->_var['category_load_type']): ?><script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/asyLoadfloor.js"></script><?php endif; ?>
    <script type="text/javascript">
	$(function(){
		//倒计时
		$.goodsAjaxLoadType = function(){
			$(".lefttime").each(function(){
				$(this).yomi();
			});
		}
		$.goodsAjaxLoadType();
		
		$(".snatch-hot-slide").slide({
			effect: "leftLoop",
			vis: 3,
			scroll: 1,
			autoPage: true,
			mainCell: ".bd ul"
		});
		
		<?php if ($this->_var['category_load_type']): ?>
		var query_string = '<?php echo $this->_var['query_string']; ?>';
		$.itemLoad('.snatch-list','','',query_string,0);
		<?php endif; ?>
	});
    </script>
</body>
</html>
