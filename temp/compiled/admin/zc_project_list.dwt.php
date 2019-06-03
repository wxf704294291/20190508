<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['09_crowdfunding']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">		
        	<div class="explanation" id="explanation">
            	<div class="ex_tit">
					<i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span>
                    <?php if ($this->_var['open'] == 1): ?>
                    <div class="view-case">
                    	<div class="view-case-tit"><i></i><?php echo $this->_var['lang']['view_tutorials']; ?></div>
                        <div class="view-case-info">
                        	<a href="http://help.flyobd.com/article-3926.html" target="_blank"><?php echo $this->_var['lang']['tutorials_bonus_list_one']; ?></a>
                        </div>
                    </div>			
                    <?php endif; ?>				
				</div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['zc_list']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['zc_list']['1']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
            	<!--商品列表-->
                <div class="common-head">
                    <div class="fl">
                    	<a href="zc_project.php?act=add"><div class="fbutton"><div class="add" title="<?php echo $this->_var['lang']['add_zc_project']; ?>"><span><i class="icon icon-plus"></i><?php echo $this->_var['lang']['add_zc_project']; ?></span></div></div></a>
                    </div>				
                    <div class="refresh">
                    	<div class="refresh_tit" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                    	<div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                    </div>
                    
                    <div class="search">
                    	<form action="javascript:;" name="searchForm" onSubmit="searchGoodsname(this);">
                        <div class="categorySelect fl mr10">
                            <div class="selection">
                                <input type="text" name="category_name" id="category_name" class="text w260 mr0 valid" value="<?php echo $this->_var['lang']['select_cat']; ?>" autocomplete="off" readonly data-filter="cat_name" />
                                <input type="hidden" name="cat_id" id="cat_id" value="0" data-filter="cat_id" />
                            </div>
                            <div class="select-container" style="width:290px; display:none;">
                                <?php echo $this->fetch('library/filter_category.lbi'); ?>
                            </div>
                        </div>
                        
                        <div class="input">
                            <input type="text" name="keyword" class="text nofocus" placeholder="关键词" autocomplete="off" />
                            <input type="submit" class="btn" name="secrch_btn" ectype="secrch_btn" value="" />
                        </div>
                        </form>
                    </div>
                </div>
                <div class="common-content">
                	<div class="list-div" id="listDiv">
						<?php endif; ?>
                    	<table cellpadding="0" cellspacing="0" border="0">
                        	<thead>
                            	<tr>
                                	<th width="5%"><div class="tDiv"><?php echo $this->_var['lang']['record_id']; ?></div></th>
                                    <th width="20%"><div class="tDiv"><?php echo $this->_var['lang']['zc_project_name']; ?></div></th>
                                    <th width="6%"><div class="tDiv"><?php echo $this->_var['lang']['zc_project_title_img']; ?></div></th>
                                    <th width="8%"><div class="tDiv"><?php echo $this->_var['lang']['start_time']; ?></div></th>
                                    <th width="8%"><div class="tDiv"><?php echo $this->_var['lang']['end_time']; ?></div></th>
									<th width="8%"><div class="tDiv"><?php echo $this->_var['lang']['zc_status']; ?></div></th>
                                    <th width="8%"><div class="tDiv"><?php echo $this->_var['lang']['zc_project_raise_money']; ?></div></th>
                                    <th width="8%"><div class="tDiv"><?php echo $this->_var['lang']['zc_project_join_money']; ?></div></th>
                                    <th width="6%"><div class="tDiv"><?php echo $this->_var['lang']['zc_goods_num']; ?></div></th>
                                    <!--<th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['zc_project_desc']; ?></div></th>-->
                                    <th width="8%"><div class="tDiv"><?php echo $this->_var['lang']['whether_recommend']; ?></div></th>
                                    <th width="15%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
								<?php $_from = $this->_var['arr_zc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                            	<tr>
                                    <td><div class="tDiv"><?php echo $this->_var['item']['id']; ?></div></td>
									<td><div class="tDiv"><?php echo $this->_var['item']['title']; ?></div></td>
									<td>
                                        <div class="tDiv">
                                            <span class="show">
                                                <a href="../<?php echo $this->_var['item']['title_img']; ?>" class="nyroModal"><i class="icon icon-picture" data-tooltipimg="../<?php echo $this->_var['item']['title_img']; ?>" ectype="tooltip" title="tooltip"></i></a>
                                            </span>
                                        </div>
                                    </td>
									<td><div class="tDiv"><?php echo $this->_var['item']['start_time']; ?></div></td>
									<td><div class="tDiv"><?php echo $this->_var['item']['end_time']; ?></div></td>
									<td><div class="tDiv"><?php echo $this->_var['item']['zc_status']; ?><?php if ($this->_var['item']['result'] == 1): ?><span class="green">（<?php echo $this->_var['lang']['success']; ?>）</span><?php elseif ($this->_var['item']['result'] == 2): ?><span class="red">（<?php echo $this->_var['lang']['fail']; ?>）</span><?php endif; ?></div></td>
									<td><div class="tDiv"><?php echo $this->_var['item']['amount']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['item']['join_money']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['item']['join_num']; ?></div></td>
                                    <!--<td><div class="tDiv"><?php echo $this->_var['item']['describe']; ?></div></td>-->
                                    <td>
                                        <div class="tDiv">
                                            <div class="switch <?php if ($this->_var['item']['is_best']): ?>active<?php endif; ?>" title="<?php if ($this->_var['item']['is_best']): ?><?php echo $this->_var['lang']['yes']; ?><?php else: ?><?php echo $this->_var['lang']['no']; ?><?php endif; ?>" onclick="listTable.switchBt(this, 'toggle_best', <?php echo $this->_var['item']['id']; ?>)">
                                                <div class="circle"></div>
                                            </div>
                                            <input type="hidden" value="0" name="">
                                        </div>
                                    </td>                               
                                    <td class="handle">
                                        <div class="tDiv a3_3 tl" style="height:auto;">
                                            <a href="zc_project.php?act=product_list&id=<?php echo $this->_var['item']['id']; ?>" class="btn_region"><i class="icon icon-cog"></i><?php echo $this->_var['lang']['zc_goods_manage']; ?></a>
                                            <a href="zc_project.php?act=progress&id=<?php echo $this->_var['item']['id']; ?>" class="btn_inst"><i class="icon icon-cog"></i><?php echo $this->_var['lang']['zc_progress_manage']; ?></a>
                                            <br>
                                            <a href="order.php?act=list&pid=<?php echo $this->_var['item']['id']; ?>&is_zc=1" class="btn_see"><i class="sc_icon sc_icon_see"></i><?php echo $this->_var['lang']['view_order']; ?></a>										
                                            <a href="zc_project.php?act=edit&id=<?php echo $this->_var['item']['id']; ?>" class="btn_edit"><i class="icon icon-edit"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href='javascript:void(0);' onclick="if(confirm('<?php echo $this->_var['lang']['drop_confirm']; ?>')){window.location.href='zc_project.php?act=del&id=<?php echo $this->_var['item']['id']; ?>'}" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>
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
		});
	</script>
	
</body>
</html>
<?php endif; ?>
