<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<?php echo $this->fetch('library/js_languages_new.lbi'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_var['site_domain']; ?>themes/<?php echo $GLOBALS['_CFG']['template']; ?>/css/baochi.css" />
</head>

<body>
<?php echo $this->fetch('library/page_header_common.lbi'); ?>

<div class="warpper">
	<div class="bc-content-main">
		<?php $_from = $this->_var['articles_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
			<div id="ad_id_<?php echo $this->_var['article']['ad_id']; ?>" class="bc-content" style="background-image:url(data/afficheimg/<?php echo $this->_var['article']['ad_code']; ?>)" >
				  <div class="bc-article-title">
					   <div class="bc-title"><?php echo $this->_var['article']['title']; ?></div>
					   <i class="bc-i">—— ——</i>
					   <div class="bc-description"><?php echo $this->_var['article']['description']; ?></div>
				  </div>
				  <div class="bc-article-content"><?php echo $this->_var['article']['content']; ?></div>
			</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
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

