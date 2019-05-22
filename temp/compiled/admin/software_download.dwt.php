<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>
 
<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
            <div class="flexilist">
                <div class="common-head">
                    <div class="fl">
                        <a href="<?php echo $this->_var['action_link']['href']; ?>"><div class="fbutton"><div class="add" title="新增软件"><span><i class="icon icon-plus"></i>新增软件</span></div></div></a>
                    </div>
                </div>
                <div class="common-content">
                	<div class="list-div" id="listDiv">
                        <?php endif; ?>
                    	<table cellpadding="0" cellspacing="0" border="0">
                        	<thead>
                            	<tr>
									<th width="3%"><div class="tDiv"><a href="javascript:listTable.sort('link_name');">序号</a></div></th>
                                    <th width="8%"><div class="tDiv"><a href="javascript:listTable.sort('link_url');">软件名称</a></div></th>
                                    <th width="8%"><div class="tDiv"><a href="javascript:listTable.sort('link_logo');">软件版本号</a></div></th>
                                    <th width="10%"><div class="tDiv"><a href="javascript:listTable.sort('show_order');">创建时间</a></div></th>
									<th width="15%"><div class="tDiv"><a href="javascript:listTable.sort('show_order');">下载链接</a></div></th>
									<th width="15%"><div class="tDiv"><a href="javascript:listTable.sort('show_order');">描述</a></div></th>
                                    <th width="10%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $_from = $this->_var['software_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'software');if (count($_from)):
    foreach ($_from AS $this->_var['software']):
?>
                            	<tr>
                                    <td><div class="tDiv"><?php echo htmlspecialchars($this->_var['software']['software_name']); ?></div></td>
                                   	<td>
                                        <div class="tDiv">
                                        	<a href="<?php echo $this->_var['software']['software_url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['link']['link_url']); ?></a>
                                        </div>
                                    </td>
                                    <td>
                                    	<div class="tDiv">
										<?php if ($this->_var['link']['link_logo']): ?>
											<span class="show">
                                                <a href="<?php echo $this->_var['link']['link_logo']; ?>" class="nyroModal"><i class="icon icon-picture" data-tooltipimg="<?php echo $this->_var['link']['link_logo']; ?>" ectype="tooltip" title="tooltip"></i></a>
                                            </span>
										<?php endif; ?>
                                        </div>
                                    </td>
                                    <td><div class="tDiv"><input name="sort_order" class="text w40" value="<?php echo $this->_var['link']['show_order']; ?>" onkeyup="listTable.editInput(this, 'edit_show_order',<?php echo $this->_var['link']['link_id']; ?> )" type="text"></div></td>
                                    <td class="handle">
                                        <div class="tDiv a2">
                                            <a href="friend_partner.php?act=edit&id=<?php echo $this->_var['link']['link_id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>" class="btn_edit"><i class="icon icon-edit"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['link']['link_id']; ?>, '<?php echo $this->_var['lang']['drop_confirm']; ?>')" title="<?php echo $this->_var['lang']['remove']; ?>" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; else: ?>
                                    <tr><td class="no-records" colspan="12"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
                                <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </tbody>
                            <tfoot>
                            	<tr>
                                    <td colspan="12">
                                    	<div class="list-page">
											<?php echo $this->fetch('library/page.lbi'); ?>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        <?php if ($this->_var['full_page']): ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
    
    <script type="text/javascript">
   //分页传值
	listTable.recordCount = <?php echo empty($this->_var['record_count']) ? '0' : $this->_var['record_count']; ?>;
	listTable.pageCount = <?php echo empty($this->_var['page_count']) ? '1' : $this->_var['page_count']; ?>;

	<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	
	$(function(){
		$(".nyroModal").nyroModal();
	});
    </script>
</body>
</html>
<?php endif; ?>
