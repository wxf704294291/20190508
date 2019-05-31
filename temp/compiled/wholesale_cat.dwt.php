<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<?php echo $this->fetch('library/js_languages_new.lbi'); ?>
<link rel="stylesheet" type="text/css" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/css/wholesale_new.css" />
</head>

<body>
<?php echo $this->fetch('library/page_header_business.lbi'); ?>
<div class="content b2b-content">
    <div class="w w1200">
        <div class="crumbs-nav">
            <div class="crumbs-nav-main clearfix">
                <?php if ($this->_var['cat_name']): ?>
                 <span><a href="wholesale.php">首页</a></span><span class="arrow">&gt;</span> <span class="finish"><?php echo $this->_var['cat_name']; ?></span>
                <?php endif; ?>
            </div>
        </div>
			
        <div class="selector gb-selector">
            <div class="s-line">
                <div class="s-l-wrap">
                    <div class="s-l-tit"><span>分类：</span></div>
                    <div class="s-l-value">
                        <div class="s-l-v-list">
                            <ul>
                                <li <?php if (! $this->_var['cat_name']): ?>class="curr"<?php endif; ?>><a href="wholesale_cat.php">全部分类</a></li>
                                <?php $_from = $this->_var['wholesale_cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['wholesale_cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['wholesale_cat']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['wholesale_cat']['iteration']++;
?>
                                <?php if (($this->_foreach['wholesale_cat']['iteration'] - 1) < 10): ?>
                                <li <?php if ($this->_var['cat_name'] == $this->_var['cat']['name']): ?>class="curr"<?php endif; ?>><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></li>
                                <?php endif; ?>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        <div class="b2b-view">
            <div class="b2b-goods-list">
                <?php if ($this->_var['goods_list']): ?>
                <ul>
                    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['cat']['iteration']++;
?>
                    <?php if ($this->_var['goods']['goods_id']): ?>
                    <li>
                        <div class="p-img"><a href="<?php echo $this->_var['goods']['goods_url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>"></a></div>
                        <div class="p-lie mt15">
                            <?php if ($this->_var['goods']['price_model'] == 0): ?>
                            <div class="p-price fl"><?php echo $this->_var['goods']['goods_price']; ?><span>/件</span></div>
                            <div class="fr"><span class="label">起批量：</span><em class="org"><?php echo $this->_var['goods']['moq']; ?></em></div>
                            <?php else: ?>
                            <div class="p-price fl"><?php echo $this->_var['goods']['volume_price']; ?><span>/件</span></div>
                            <div class="fr"><span class="label">起批量：</span><em class="org"><?php echo $this->_var['goods']['volume_number']; ?></em></div>
                            <?php endif; ?>
                        </div>
                        <div class="p-name"><a href="<?php echo $this->_var['goods']['goods_url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" target="_blank"><?php echo $this->_var['goods']['goods_name']; ?></a></div>
                        <div class="p-lie"><span class="label">成交量：</span><em><?php echo empty($this->_var['goods']['goods_sale']) ? '0' : $this->_var['goods']['goods_sale']; ?></em></div>
                        <div class="p-lie p-store">
                            <a href="<?php echo $this->_var['goods']['store_url']; ?>" title="<?php echo $this->_var['goods']['rz_shopName']; ?>" class="store" target="_blank"><?php echo $this->_var['goods']['rz_shopName']; ?></a>
                            <?php if ($this->_var['goods']['is_IM'] == 1 || $this->_var['goods']['is_dsc']): ?>
                            <a href="javascript:;" id="IM" onclick="openWin(this)" goods_id="<?php echo $this->_var['goods']['goods_id']; ?>" class="p-kefu<?php if ($this->_var['goods']['user_id'] == 0): ?> p-c-violet<?php endif; ?> p-c-org" target="_blank"><i class="iconfont icon-kefu"></i></a>
                            <?php else: ?>
                                <?php if ($this->_var['goods']['kf_type'] == 1): ?>
                                <a href="http://www.taobao.com/webww/ww.php?ver=3&touid=<?php echo $this->_var['goods']['kf_ww']; ?>&siteid=cntaobao&status=1&charset=utf-8" class="p-kefu<?php if ($this->_var['goods']['user_id'] == 0): ?> p-c-violet<?php endif; ?> p-c-org" target="_blank"><i class="iconfont icon-kefu"></i></a>
                                <?php else: ?>
                                <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_var['goods']['kf_qq']; ?>&site=qq&menu=yes" class="p-kefu<?php if ($this->_var['goods']['user_id'] == 0): ?> p-c-violet<?php endif; ?> p-c-org" target="_blank"><i class="iconfont icon-kefu"></i></a>
                                <?php endif; ?>
                            <?php endif; ?>                                                      
                        </div>
                        <div class="p-lie p-tiy">
                            <?php if ($this->_var['goods']['goods_extend']['is_delivery']): ?><a class="goods-icons">48</a><?php endif; ?>
                            <?php if ($this->_var['goods']['goods_extend']['is_free']): ?><a class="goods-icons">邮</a><?php endif; ?>
                            <?php if ($this->_var['goods']['goods_extend']['is_return']): ?><a class="goods-icons">退</a><?php endif; ?>
                        </div>
                    </li>
                    <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
                <?php else: ?>
                <div class="no_records no_records_1200">
                    <i class="no_icon_two"></i>
                    <div class="no_info no_info_line">
                        <h3><?php echo $this->_var['lang']['information_null']; ?></h3>
                        <div class="no_btn">
                            <a href="wholesale.php" class="btn sc-redBg-btn">返回首页</a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="clear"></div>
                <?php if ($this->_var['pager']['page_count'] > 1): ?>
                <div class="tc">
                    <form name="selectPageForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
                        <div class="pages" id="pager">
                            <ul>
                                <?php if ($this->_var['pager']['page_first']): ?><div class="item prev" style="display:none;"><a href="<?php echo $this->_var['pager']['page_first']; ?>"><span><?php echo $this->_var['lang']['home']; ?></span></a></a></div><?php endif; ?>
                                <div class="item prev"><a href="<?php if ($this->_var['pager']['page_prev']): ?><?php echo $this->_var['pager']['page_prev']; ?><?php else: ?>#none<?php endif; ?>"><i class="iconfont icon-left"></i></a></div>
                                <?php if ($this->_var['pager']['page_count'] != 1): ?>
                                <?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
                                <?php if ($this->_var['pager']['page'] == $this->_var['key']): ?>
                                <div class="item cur"><a href="#none"><?php echo $this->_var['key']; ?></a></div>
                                <?php else: ?>
                                <div class="item"><a href="<?php echo $this->_var['item']; ?>"><?php echo $this->_var['key']; ?></a></div>
                                <?php endif; ?>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                <?php endif; ?>
                                <div class="item next"><a href="<?php if ($this->_var['pager']['page_next']): ?><?php echo $this->_var['pager']['page_next']; ?><?php else: ?>#none<?php endif; ?>"><i class="iconfont icon-right"></i></a></div>
                                <?php if ($this->_var['pager']['page_last']): ?><div class="item next" style="display:none"><a href="<?php echo $this->_var['pager']['page_last']; ?>"><span><?php echo $this->_var['lang']['page_last_new']; ?></span></a></div><?php endif; ?>
                            </ul>
                        </div>
                    </form>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/dsc-common.js"></script>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.purebox.js"></script>
</body>
</html>
