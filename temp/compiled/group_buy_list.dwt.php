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
                        <div class="s-l-tit"><span><?php echo $this->_var['lang']['category']; ?>：</span></div>
                        <div class="s-l-value">
                            <div class="s-l-v-list">
                                <ul>
                                    <li <?php if ($this->_var['cat_id'] == 0): ?>class="curr"<?php endif; ?>><a href="group_buy.php?act=list"><?php echo $this->_var['lang']['all_attribute']; ?></a></li>
                                    <?php $_from = $this->_var['categories_pro']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
                                    <li <?php if ($this->_var['cat_id'] == $this->_var['cat']['id']): ?>class="curr"<?php endif; ?>><a href="group_buy.php?act=list&sort=<?php echo $this->_var['pager']['search']['sort']; ?>&cat_id=<?php echo $this->_var['cat']['id']; ?>#group_buy_list"><?php echo $this->_var['cat']['cat_alias_name']; ?></a></li>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mod-list-sort">
                <form method="GET" class="sort" name="listform">
                    <div class="sort-l fl">
                    	<div class="sort-t"><?php echo $this->_var['lang']['sort']; ?>：</div>
                        <a href="group_buy.php?act=list&cat_id=<?php echo $this->_var['cat_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=act_id&order=<?php if ($this->_var['pager']['search']['sort'] == 'act_id' && $this->_var['pager']['search']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>" class="sort-item <?php if ($this->_var['pager']['search']['sort'] == 'act_id'): ?>curr<?php endif; ?>"><?php echo $this->_var['lang']['default']; ?><i class="iconfont <?php if ($this->_var['pager']['search']['sort'] == 'act_id' && $this->_var['pager']['search']['order'] == 'DESC'): ?>icon-down1<?php else: ?>icon-up1<?php endif; ?>"></i></a>
                        <a href="group_buy.php?act=list&cat_id=<?php echo $this->_var['cat_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=start_time&order=<?php if ($this->_var['pager']['search']['sort'] == 'start_time' && $this->_var['pager']['search']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>" class="sort-item <?php if ($this->_var['pager']['search']['sort'] == 'start_time'): ?>curr<?php endif; ?>"><?php echo $this->_var['lang']['Newest']; ?><i class="iconfont <?php if ($this->_var['pager']['search']['sort'] == 'start_time' && $this->_var['pager']['search']['order'] == 'DESC'): ?>icon-down1<?php else: ?>icon-up1<?php endif; ?>"></i></a>
                        <a href="group_buy.php?act=list&cat_id=<?php echo $this->_var['cat_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&page=<?php echo $this->_var['pager']['search']['page']; ?>&sort=comments_number&order=<?php if ($this->_var['pager']['search']['sort'] == 'comments_number' && $this->_var['pager']['search']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>" class="sort-item <?php if ($this->_var['pager']['search']['sort'] == 'comments_number'): ?>curr<?php endif; ?>"><?php echo $this->_var['lang']['Comment_number']; ?><i class="iconfont <?php if ($this->_var['pager']['search']['sort'] == 'comments_number' && $this->_var['pager']['search']['order'] == 'DESC'): ?>icon-down1<?php else: ?>icon-up1<?php endif; ?>"></i></a>
                    </div>
                    <div class="f-search">
                        <input name="keywords" type="text" class="text" value="<?php echo $this->_var['pager']['search']['keywords']; ?>" placeholder="<?php echo $this->_var['lang']['Activity_name']; ?>" />
                        <a href="javascript:void(0);" class="btn sc-redBg-btn ui-btn-submit"><?php echo $this->_var['lang']['assign']; ?></a>
                    </div>
                    <input type="hidden" name="act" value="list">
                    <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
                    <input type="hidden" name="sort" value="<?php echo $this->_var['pager']['search']['sort']; ?>" />
                    <input type="hidden" name="order" value="<?php echo $this->_var['pager']['search']['order']; ?>" />
                </form>
            </div>
            <?php if ($this->_var['gb_list']): ?>
            <div class="gb-index-list">
                <ul class="clearfix" ectype="items">
                    <?php $_from = $this->_var['gb_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group_buy');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
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
            
            <?php if ($this->_var['category_load_type']): ?>
            <div class="floor-loading goods-floor-loading" ectype="floor-loading"><div class="floor-loading-warp"><img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/images/load/loading.gif"></div></div>
            <?php else: ?>
            <?php echo $this->fetch('library/pages.lbi'); ?>
            <?php endif; ?>
            
            <?php else: ?>
            <div class="no_records no_records_tc">
                <i class="no_icon_two"></i>
                <div class="no_info">
                    <h3><?php echo $this->_var['lang']['information_null']; ?></h3>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <?php 
$k = array (
  'name' => 'user_menu_position',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
    <?php echo $this->fetch('library/page_footer.lbi'); ?>
    
    <?php echo $this->smarty_insert_scripts(array('files'=>'jquery.SuperSlide.2.1.1.js,jquery.yomi.js,parabola.js,cart_common.js,cart_quick_links.js')); ?>
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
		
		<?php if ($this->_var['category_load_type']): ?>
		var query_string = '<?php echo $this->_var['query_string']; ?>';
		$.itemLoad('.gb-index-list','','',query_string,0);
		<?php endif; ?>
	});
    </script>
</body>
</html>
