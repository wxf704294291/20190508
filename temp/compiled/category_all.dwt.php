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
            <div class="crumbs-nav">
                <div class="crumbs-nav-main clearfix">
                    <div class="crumbs-nav-item">
                        <?php echo $this->fetch('library/ur_here.lbi'); ?>
                    </div>
                </div>
            </div>
            <div class="catalog-main clearfix">
                <div class="catalog-side">
                    <div class="catalog-menu">
                        <ul class="menu-list">
                            <?php $_from = $this->_var['categories_pro']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'categories');$this->_foreach['nocat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nocat']['total'] > 0):
    foreach ($_from AS $this->_var['categories']):
        $this->_foreach['nocat']['iteration']++;
?>
                            <li <?php if (($this->_foreach['nocat']['iteration'] <= 1)): ?>class="current"<?php endif; ?>><a href="javascript:void(0);"><?php if ($this->_foreach['nocat']['iteration'] < 10): ?>0<?php endif; ?><?php echo $this->_foreach['nocat']['iteration']; ?> <?php echo $this->_var['categories']['nolinkname']; ?></a></li>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </ul>
                        <div class="back-top-wp">
                            <a href="javascript:;" class="back-top" ectype="returnTop"><?php echo $this->_var['lang']['returnTop']; ?></a>
                        </div>
                    </div>
                </div>
                <div class="catalog-detail">
                    <?php $_from = $this->_var['categories_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'categories');$this->_foreach['nocat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nocat']['total'] > 0):
    foreach ($_from AS $this->_var['categories']):
        $this->_foreach['nocat']['iteration']++;
?>
                    <div class="catalog-item">
                        <h2><a href="<?php echo $this->_var['categories']['url']; ?>" target="_blank"><?php if ($this->_foreach['nocat']['iteration'] < 10): ?>0<?php endif; ?><?php echo $this->_foreach['nocat']['iteration']; ?> <?php echo $this->_var['categories']['name']; ?></a></h2>
                        <?php $_from = $this->_var['categories']['child_tree']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['nochild'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nochild']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['nochild']['iteration']++;
?>
                        <h3><a href="<?php echo $this->_var['child']['url']; ?>" target="_blank"><?php echo $this->_var['child']['cat_name']; ?></a></h3>
                        <ul class="h4 clearfix">
                            <?php $_from = $this->_var['child']['child_tree']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['nocatid'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nocatid']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['nocatid']['iteration']++;
?>
                            <li><a href="<?php echo $this->_var['cat']['url']; ?>" target="_blank"><?php echo $this->_var['cat']['name']; ?></a></li>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </ul>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        <div class="catalog-item-ad clearfix">
                            <?php 
$k = array (
  'name' => 'get_adv_child',
  'ad_arr' => $this->_var['category_all_right'],
  'id' => $this->_var['categories']['id'],
  'ru_id' => $this->_var['ru_id'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
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
    <?php echo $this->smarty_insert_scripts(array('files'=>'cart_common.js,parabola.js,cart_quick_links.js')); ?>
	<script type="text/javascript">
        $(function(){
            var items = $(".catalog-menu");
            var top = parseInt(items.offset().top);
            var allFloor = $(".catalog-detail");
            var floors = allFloor.find(".catalog-item");
            var height = parseInt(items.height());
            var IE6 = navigator.userAgent.indexOf("MSIE 6.0")>0;
            var IE7 = navigator.userAgent.indexOf("MSIE 7.0")>0;
            
            $(window).on('scroll',function(){
                var scrollTop = $(window).scrollTop();
                if(scrollTop>top){
                    items.css({'position':'fixed','top':0});
                }else{
                    items.removeAttr("style");
                }
                
                for(var i=0;i<floors.length;i++){
                    var floorsTop = floors.eq(i).position().top;
                    if(IE6||IE7){
                        floorsTop = floorsTop.toString();
                        floorsTop = floorsTop.substring(0,floorsTop.length-2);
                    }
                    if(scrollTop>floorsTop){
                        items.find("li").eq(i).addClass("current").siblings().removeClass("current");
                        floors.eq(i).addClass("curr").siblings().removeClass("curr");
                    }
                }
            });
            
            $(".catalog-menu .menu-list li").on('click',function(){
                var index = $(this).index();
                var top = floors.eq(index).offset().top;
                $("body,html").stop().animate({scrollTop:top});
            });
        })
    </script>
</body>
</html>
