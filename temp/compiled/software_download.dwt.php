<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->_var['site_domain']; ?>themes/<?php echo $GLOBALS['_CFG']['template']; ?>/css/baochi.css" />
<?php echo $this->fetch('library/js_languages_new.lbi'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js')); ?>
</head>

<body class="merchants bg-ligtGary">
<?php echo $this->fetch('library/page_header_common.lbi'); ?>
<div class="container settled-container">
	<div class="w w1200">
        <div class="software_list">
        	<table cellpadding="10px" cellspacing="0" border="0">
				<thead  id="software_list_head">
					<tr class="software_list_item">
						<th>软件名称</th>
						<th>软件版本号</th>
						<th>软件大小</th>
						<th>创建时间</th>
						<th>详情</th>
						<th>下载</th>
					</tr>
				</thead>
				<tbody>
				   <?php $_from = $this->_var['software_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'software');if (count($_from)):
    foreach ($_from AS $this->_var['software']):
?>
                    <tr class="software_list_item">
					   <td width="16%"><?php echo $this->_var['software']['software_name']; ?></td>
					   <td width="16%"><?php echo $this->_var['software']['software_version']; ?></td>
					   <td width="16%"><?php echo $this->_var['software']['software_size']; ?></td>
					   <td width="16%"><?php echo $this->_var['software']['create_time']; ?></td>
					   <td width="17%">
						   <div>
						      <a href="javascript:void(0)" onclick="getHrefValue()">查看详情</a>
							  <input type="hidden" name="software_article_link" value="<?php echo $this->_var['software']['software_article_link']; ?>">
						   </div>
					   </td>
					   <td width="17%">
						   <div>
						      <a href="javascript:void(0)" onclick="getDownloadLink(event)">下载</a>  
							  <input type="hidden" name="software_download_link" value="<?php echo $this->_var['software']['software_id']; ?>">
						   </div>
					   </td>
					</tr>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</tbody>
			</table>
        </div>
    </div>
</div>	

<script type="text/javascript">

function getDownloadLink(evt){
    var url = $(this).data("url");
	var user_id = "<?php echo $this->_var['user_id']; ?>"
	if(user_id > 0){
		 var software_id=$(evt.target).next().val();
	     Ajax.call('software_download.php?act=getDownloadLink', 'software_id=' + software_id,getResult,'GET','JSON');
	}else{
		var back_url = "merchants.php";
		$.notLogin("get_ajax_content.php?act=get_login_dialog",back_url);
	}
}

function getResult(result){
	window.open(result.download_link);
}

</script>

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

