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
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['info']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['info']['1']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
            	<!--商品列表-->
                <div class="common-head">
                    <div class="refresh ml0">
                    	<div class="refresh_tit" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                    	<div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                    </div>
                    
                    <div class="search">
                    	<form action="javascript:;" name="searchForm" onSubmit="searchGoodsname(this);">
                        <div class="input">
                            <input type="text" name="keyword" class="text nofocus" placeholder="<?php echo $this->_var['lang']['zc_topic_keyword']; ?>" autocomplete="off" />
                            <input type="submit" class="btn" name="secrch_btn" ectype="secrch_btn" value="" />
                        </div>
                        </form>
                    </div>
                </div>
                <div class="common-content">
                    <form method="POST" action="zc_topic.php" name="listForm" onsubmit="return confirm('<?php echo $this->_var['lang']['zc_topic_confirm']; ?>')">
                	<div class="list-div" id="listDiv">
						<?php endif; ?>
                    	<table cellpadding="0" cellspacing="0" border="0">
                        	<thead>
                            	<tr>
                                	<th width="3%" class="sign"><div class="tDiv"><input type="checkbox" name="all_list" class="checkbox" id="all_list" /><label for="all_list" class="checkbox_stars"></label></div></th>
                                	<th width="5%"><div class="tDiv"><?php echo $this->_var['lang']['record_id']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['user_name']; ?></div></th>
									<th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['nickname']; ?></div></th>
                                    <th width="20%"><div class="tDiv"><?php echo $this->_var['lang']['zc_project_name']; ?></div></th>
                                    <th width="28%"><div class="tDiv"><?php echo $this->_var['lang']['zc_topic_content']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['whether_display']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['add_time']; ?></div></th>
                                    <th width="14%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
								<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                            	<tr>
                                    <td class="sign"><div class="tDiv"><input type="checkbox" name="checkboxes[]" class="checkbox" value="<?php echo $this->_var['item']['topic_id']; ?>" id="checkbox_<?php echo $this->_var['item']['topic_id']; ?>" /><label for="checkbox_<?php echo $this->_var['item']['topic_id']; ?>" class="checkbox_stars"></label></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['item']['topic_id']; ?></div></td>
									<td><div class="tDiv"><?php echo $this->_var['item']['user_name']; ?></div></td>
									<td><div class="tDiv"><?php echo $this->_var['item']['nick_name']; ?></div></td>
									<td><div class="tDiv"><?php echo $this->_var['item']['title']; ?></div></td>
									<td><div class="tDiv"><?php echo $this->_var['item']['topic_content']; ?></div></td>
									<td>
                                        <div class="tDiv">
                                            <div class="switch <?php if ($this->_var['item']['topic_status']): ?>active<?php endif; ?>" title="<?php if ($this->_var['item']['topic_status']): ?><?php echo $this->_var['lang']['yew']; ?><?php else: ?><?php echo $this->_var['lang']['no']; ?><?php endif; ?>" onclick="listTable.switchBt(this, 'toggle_display', <?php echo $this->_var['item']['topic_id']; ?>)">
                                                <div class="circle"></div>
                                            </div>
                                            <input type="hidden" value="0" name="">
                                        </div>
                                    </td>
									<td><div class="tDiv"><?php echo $this->_var['item']['add_time']; ?></div></td>
                                    <td class="handle">
                                        <div class="tDiv a2">
                                            <a href="zc_topic.php?act=list&parent_id=<?php echo $this->_var['item']['topic_id']; ?>" class="btn_see"><i class="sc_icon sc_icon_see"></i><?php echo $this->_var['lang']['zc_child_topic']; ?></a>
                                            <a href='javascript:void(0);' onclick="if(confirm('<?php echo $this->_var['lang']['drop_confirm']; ?>')){window.location.href='zc_topic.php?act=del&id=<?php echo $this->_var['item']['topic_id']; ?>'}" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>										
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
                                        <div class="tDiv">
                                            <div class="tfoot_btninfo">
                                                <div class="item">
                                                    <div class="label_value">
                                                        <div  class="imitate_select select_w120">
                                                          <div class="cite"><?php echo $this->_var['lang']['select_please']; ?></div>
                                                          <ul>
                                                             <li><a href="javascript:;" data-value="" class="ftx-01"><?php echo $this->_var['lang']['select_please']; ?></a></li>
                                                             <li><a href="javascript:;" data-value="remove" class="ftx-01"><?php echo $this->_var['lang']['delete']; ?></a></li>
                                                             <li><a href="javascript:;" data-value="allow" class="ftx-01"><?php echo $this->_var['lang']['allow']; ?></a></li>
                                                             <li><a href="javascript:;" data-value="deny" class="ftx-01"><?php echo $this->_var['lang']['forbid']; ?></a></li>
                                                          </ul>
                                                          <input name="sel_action" type="hidden" value="" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="act" value="batch" />
                                                <input type="submit" value="<?php echo $this->_var['lang']['button_submit_alt']; ?>" name="remove" ectype="btnSubmit" class="btn btn_disabled" disabled="">
                                            </div>
                                            <div class="list-page">
                                               <?php echo $this->fetch('library/page.lbi'); ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
						<?php if ($this->_var['full_page']): ?>
                    </div>
                    </form>
                </div>
                <!--商品列表end-->
            </div>
		</div>
	</div>
 	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
	<script type="text/javascript" language="JavaScript">
		listTable.recordCount = <?php echo empty($this->_var['record_count']) ? '0' : $this->_var['record_count']; ?>;
		listTable.pageCount = <?php echo empty($this->_var['page_count']) ? '1' : $this->_var['page_count']; ?>;
		
		<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
		listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		
		$(function(){
			$('.nyroModal').nyroModal();
		})
	</script>
</body>
</html>
<?php endif; ?>
