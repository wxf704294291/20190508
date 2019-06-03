<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['promotion']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="tabs_info">
            	<ul>
                    <li class="curr"><a href="value_card.php?act=list"><?php echo $this->_var['lang']['vc_type_list']; ?></a></li>
					<li><a href="value_card.php?act=vc_list"><?php echo $this->_var['lang']['value_card_list']; ?></a></li>
					<li><a href="pay_card.php?act=list"><?php echo $this->_var['lang']['pc_type_list']; ?></a></li>
                    <li><a href="pay_card.php?act=pc_list"><?php echo $this->_var['lang']['pay_card_list']; ?></a></li>
				</ul>
            </div>	
        	<div class="explanation" id="explanation">
            	<div class="ex_tit">
					<i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span>
                    <?php if ($this->_var['open'] == 1): ?>
                    <div class="view-case">
                    	<div class="view-case-tit"><i></i><?php echo $this->_var['lang']['view_tutorials']; ?></div>
                        <div class="view-case-info">
                        	<a href="http://help.flyobd.com/article-6549.html" target="_blank"><?php echo $this->_var['lang']['tutorials_bonus_list_one']; ?></a>
                        </div>
                    </div>			
                    <?php endif; ?>				
				</div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['list']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['1']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
            	<div class="common-head">
                	<div class="fl">
						<a href="<?php echo $this->_var['action_link']['href']; ?>"><div class="fbutton"><div class="add" title="<?php echo $this->_var['action_link']['text']; ?>"><span><i class="icon icon-plus"></i><?php echo $this->_var['action_link']['text']; ?></span></div></div></a>
					</div>
                    <div class="refresh">
                    	<div class="refresh_tit" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                    	<div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                    </div>
                </div>
                <div class="common-content">
				<form method="post" action="" name="listForm">
                	<div class="list-div" id="listDiv" >
						<?php endif; ?>
                    	<table cellpadding="1" cellspacing="1" >
                        	<thead>
                            	<tr>
									<th width="3%" class="sign"><div class="tDiv"><input type="checkbox" name="all_list" class="checkbox" id="all_list" /><label for="all_list" class="checkbox_stars"></label></div></th>
                                    <th width="5%"><div class="tDiv"><?php echo $this->_var['lang']['record_id']; ?></div></th>
                                	<th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['vc_name']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['vc_value']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['vc_dis']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['use_condition']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['indate']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['send_amount']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['use_amount']; ?></div></th>
									<th width="5%"><div class="tDiv"><?php echo $this->_var['lang']['is_rec']; ?></div></th>
                                    <th width="20%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
						    <?php $_from = $this->_var['value_card_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                            	<tr>
									<td class="sign">
                                        <div class="tDiv">
                                            <input type="checkbox" name="checkboxes[]" value="<?php echo $this->_var['list']['id']; ?>" class="checkbox" id="checkbox_<?php echo $this->_var['list']['id']; ?>" />
                                            <label for="checkbox_<?php echo $this->_var['list']['id']; ?>" class="checkbox_stars"></label>
                                        </div>
                                    </td>
                                    <td><div class="tDiv"><?php echo $this->_var['list']['id']; ?></div></td>
                                	<td><div class="tDiv"><?php echo $this->_var['list']['name']; ?></div></td>
                                	<td><div class="tDiv red"><?php echo $this->_var['list']['vc_value']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['list']['vc_dis']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['list']['use_condition']; ?></div></td>
									<td><div class="tDiv"><?php echo $this->_var['list']['vc_indate']; ?></div></td>		
									<td><div class="tDiv"><?php echo $this->_var['list']['send_amount']; ?></div></td>		
                                    <td><div class="tDiv"><?php echo $this->_var['list']['use_amount']; ?></div></td>
									<td><div class="tDiv"><img src="images/<?php if ($this->_var['list']['is_rec']): ?>yes<?php else: ?>no<?php endif; ?>.png" class="pl3" /></div></td>							
                                    <td class="handle">
										<div class="tDiv a3">
											<a href="value_card.php?act=send&id=<?php echo $this->_var['list']['id']; ?>" title="<?php echo $this->_var['lang']['view_detail']; ?>" class="btn_region"><i class="icon icon-screenshot"></i><?php echo $this->_var['lang']['send']; ?></a>
											<a href="value_card.php?act=vc_list&tid=<?php echo $this->_var['list']['id']; ?>" title="<?php echo $this->_var['lang']['view_detail']; ?>" class="btn_see"><i class="sc_icon sc_icon_see"></i><?php echo $this->_var['lang']['view']; ?></a>
											<a href="value_card.php?act=vc_type_edit&id=<?php echo $this->_var['list']['id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>" class="btn_edit"><i class="icon icon-edit"></i><?php echo $this->_var['lang']['edit']; ?></a>
											<a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['list']['id']; ?>, '<?php echo $this->_var['lang']['drop_confirm']; ?>')" title="<?php echo $this->_var['lang']['remove']; ?>" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>									
										</div>
									</td>
                                </tr>
							<?php endforeach; else: ?>
							<tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
							<?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </tbody>
                            <tfoot>
                            	<tr>
                                    <td colspan="12">
										<div class="tfoot_btninfo">
											<div class="shenhe">
												<input type="submit" name="drop" id="btnSubmit" value="<?php echo $this->_var['lang']['drop']; ?>" class="btn btn_disabled" disabled="true" ectype="btnSubmit" />
												<input type="hidden" name="act" value="batch_remove" />
											</div>										
										</div>
                                    	<div class="list-page">
											<?php echo $this->fetch('library/page.lbi'); ?>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
						<?php if ($this->_var['full_page']): ?>
                    </div>
				</form>
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
    </script>
</body>
</html>
<?php endif; ?>
