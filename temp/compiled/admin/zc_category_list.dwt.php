<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['09_crowdfunding']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">	
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['list']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['1']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-head">
                    <div class="fl">
                    	<?php if ($this->_var['parent_id'] > 0): ?>
                            <a href="zc_category.php?act=list&parent_id=<?php echo $this->_var['parent_id']; ?>&back_level=<?php echo $this->_var['level']; ?>"><div class="fbutton"><div class="add" title="<?php echo $this->_var['lang']['go_back_level']; ?>"><span><i class="icon icon-reply"></i><?php echo $this->_var['lang']['go_back_level']; ?></span></div></div></a>
                        <?php endif; ?>
                    	<a href="zc_category.php?act=add<?php if ($this->_var['parent_id']): ?>&parent_id=<?php echo $this->_var['parent_id']; ?><?php endif; ?>"><div class="fbutton"><div class="add" title="<?php echo $this->_var['lang']['add_zc_category']; ?>"><span><i class="icon icon-plus"></i><?php echo $this->_var['lang']['add_zc_category']; ?></span></div></div></a>
                    </div>
                    
                </div>
                <div class="common-content">
                	<div class="list-div" id="listDiv">
						<?php endif; ?>
                    	<table cellpadding="0" cellspacing="0" border="0">
                        	<thead>
                            	<tr>
                                	<th width="15%"></th>
                                	<th width="35%"><div class="tDiv"><?php echo $this->_var['lang']['category_name']; ?></div></th>
                                    <th width="25%"><div class="tDiv"><?php echo $this->_var['lang']['sort_order']; ?></div></th>
                                    <th width="25%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
								<?php $_from = $this->_var['cat_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
                            	<tr>
                                	<td>
                                    	<div class="tDiv first_setup">
                                        	<div class="setup_span">
                                            	<em><i class="icon icon-cog"></i><?php echo $this->_var['lang']['setup']; ?><i class="arrow"></i></em>
                                                <ul>
                                                	<li><a href="zc_category.php?act=add&parent_id=<?php echo $this->_var['cat']['cat_id']; ?>"><?php echo $this->_var['lang']['add_next_level']; ?></a></li>
                                                    <li><a href="zc_category.php?act=list&parent_id=<?php echo $this->_var['cat']['cat_id']; ?>&level=<?php echo $this->_var['level']; ?>"><?php echo $this->_var['lang']['view_next_level']; ?></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
									<td><div class="tDiv"><a href="zc_project.php?act=list&cat_id=<?php echo $this->_var['cat']['cat_id']; ?>" class="ftx-01"><?php echo $this->_var['cat']['cat_name']; ?></a></div></td>
                                    <td><div class="tDiv"><input type="text" name="sort_order" class="text w40" value="<?php echo $this->_var['cat']['sort_order']; ?>" autocomplete="off" onkeyup="listTable.editInput(this, 'edit_sort_order', <?php echo $this->_var['cat']['cat_id']; ?>)"/></div></td>
                                    <td class="handle">
                                        <div class="tDiv a2">
                                            <a href="zc_category.php?act=edit&amp;cat_id=<?php echo $this->_var['cat']['cat_id']; ?>" class="btn_edit"><i class="icon icon-edit"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['cat']['cat_id']; ?>, '<?php echo $this->_var['lang']['drop_confirm']; ?>')" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; else: ?>
                                    <tr><td class="no-records" colspan="12"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
                                <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </tbody>
                        </table>    
						<?php if ($this->_var['full_page']): ?>
                    </div>
                </div>
            </div>
		</div>
	</div>
    <?php echo $this->fetch('library/pagefooter.lbi'); ?>
</body>
</html>
<?php endif; ?>