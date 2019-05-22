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

<body class="merchants bg-ligtGary">
<?php echo $this->fetch('library/page_header_common.lbi'); ?>
<div class="container settled-container">
    <?php 
$k = array (
  'name' => 'get_adv_child',
  'ad_arr' => $this->_var['merchants_index_top'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
    
	<div class="sett-section s-section-step">
        <div class="w w1200">
            <div class="sett-title">
                <div class="zw-tit">
                    <h3><?php echo $this->_var['lang']['merchants_step']; ?></h3>
                    <span class="line"></span>
                </div>
                <span class="yw-tit">WE WISH YOU ARE</span>
            </div>
            <div class="sett-warp">
                <div class="item item-one">
                    <div class="item-i"><i></i></div>
                    <div class="tit"><?php echo $this->_var['lang']['sett_step_one']; ?></div>
                    <span><?php echo $this->_var['lang']['sett_step_one_tit']; ?></span>
                    <span><?php echo $this->_var['lang']['sett_step_one_desc']; ?></span>
                </div>
                <!---<em class="item-jt"></em>---->
                <div class="item item-two">
                    <div class="item-i"><i></i></div>
                    <div class="tit"><?php echo $this->_var['lang']['sett_step_two']; ?></div>
                    <span><?php echo $this->_var['lang']['sett_step_two_tit']; ?></span>
                    <span><?php echo $this->_var['lang']['sett_step_two_desc']; ?></span>
                </div>
                <!---<em class="item-jt"></em>---->
                <div class="item item-three">
                    <div class="item-i"><i></i></div>
                    <div class="tit"><?php echo $this->_var['lang']['sett_step_three']; ?></div>
                    <span><?php echo $this->_var['lang']['sett_step_three_tit']; ?></span>
                    <span><?php echo $this->_var['lang']['sett_step_three_desc']; ?></span>
                </div>
                <!---<em class="item-jt"></em>---->
                <div class="item item-four">
                    <div class="item-i"><i></i></div>
                    <div class="tit"><?php echo $this->_var['lang']['sett_step_four']; ?></div>
                    <span><?php echo $this->_var['lang']['sett_step_four_tit']; ?></span>
                    <span><?php echo $this->_var['lang']['sett_step_four_desc']; ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="sett-section s-section-cate" >
        <div class="w w1200">
            <div class="sett-title">
                <div class="zw-tit">
                    <h3><?php echo $this->_var['lang']['hot_recruit']; ?></h3>
                    <span class="line"></span>
                </div>
                <span class="yw-tit">Product advantage</span>
            </div>
        </div>
    </div>
	<div class="sett-banner" style="background:url(data/afficheimg/1489978643396742470.jpg) center center no-repeat;">
       <div class="banner-auto">
           **********************************************
		   **********************************************
		   **********************************************
       </div>
    </div>
	
    <div class="sett-section s-section-case">
        <div class="w w1200">
            <div class="sett-title">
                <div class="zw-tit">
                    <h3><?php echo $this->_var['lang']['success_case']; ?></h3>
                    <span class="line"></span>
                </div>
                <span class="yw-tit">COOPERATIVE PARTNER</span>
            </div>
        </div>
    </div>
	<div class="sett-banner" style="background:url(data/afficheimg/1489978643396742470.jpg) center center no-repeat;">
       <div class="banner-auto">
           **********************************************
		   **********************************************
		   **********************************************
       </div>
    </div>
	
    <div class="sett-section s-section-help">
        <div class="w w1200">
            <div class="sett-title">
                <div class="zw-tit">
                    <h3><?php echo $this->_var['lang']['common_problem']; ?></h3>
                    <span class="line"></span>
                </div>
                <span class="yw-tit">COMMON PROBLEM</span>
            </div>
            <div class="sett-warp">
                <?php $_from = $this->_var['articles_imp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'art');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['art']):
        $this->_foreach['name']['iteration']++;
?>
                <div class="item item-<?php if ($this->_foreach['name']['iteration'] % 2 == 0): ?>left<?php else: ?>right<?php endif; ?>">
                    <div class="number">0<?php echo $this->_foreach['name']['iteration']; ?></div>
                    <div class="info">
                        <div class="name">
                            <div class="tit"><a href="article.php?id=<?php echo $this->_var['art']['article_id']; ?>" target="_blank"><?php echo $this->_var['art']['title']; ?></a></div>
                            <div class="desc"><?php echo $this->_var['art']['description']; ?></div>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
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
	
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/dsc-common.js"></script>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.purebox.js"></script>
</body>
</html>

