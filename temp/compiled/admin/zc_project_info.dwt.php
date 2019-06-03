<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><a href="<?php echo $this->_var['action_link']['href']; ?>" class="s-back"><?php echo $this->_var['lang']['back']; ?></a><?php echo $this->_var['lang']['09_crowdfunding']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="tabs_info">
            	<ul>
                	<li id="linklist-tab" data-tab="info" class="curr"><a href="javascript:;"><?php echo $this->_var['lang']['zc_info']; ?></a></li>
					<li id="linklist-tab" data-tab="project_details"><a href="javascript:;"><?php echo $this->_var['lang']['project_details']; ?></a></li>
                	<li id="linklist-tab" data-tab="project_desc"><a href="javascript:;"><?php echo $this->_var['lang']['project_desc']; ?></a></li>
                	<li id="linklist-tab" data-tab="risk_instruction"><a href="javascript:;"><?php echo $this->_var['lang']['risk_instruction']; ?></a></li>
                </ul>
            </div>		
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content_common']; ?></li>
                </ul>
            </div>
			<form action="zc_project.php?act=<?php echo $this->_var['state']; ?>" method="post" name="theForm" enctype="multipart/form-data" id="zc_project_form">
            <div class="flexilist" data-table="info">
                <div class="common-content">
                    <div class="mian-info">
						<!--基本信息 start-->
						<div class="switch_info">
							<div class="item">
								<div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['zc_project_name']; ?>：</div>
								<div class="label_value">
									<input type='text' size="50" class="text" name='title' value='<?php echo $this->_var['info']['title']; ?>' />
									<div class="form_prompt"></div>
								</div>
							</div>
							<div class="item">
								<div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['initiator_name']; ?>：</div>
								<div class="label_value">										
									<div class="imitate_select select_w320" id="initiator_div">
										<div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
										<ul>
											<?php $_from = $this->_var['initiator']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['val']):
?>
											<li><a href="javascript:void(0);" data-value="<?php echo $this->_var['val']['id']; ?>"><?php echo $this->_var['val']['name']; ?></a></li>
											<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
										</ul>
										<input name="initiator" type="hidden" value="<?php echo $this->_var['info']['init_id']; ?>" id="initiator_val">
									</div>
									<div class="form_prompt"></div>
								</div>
							</div>								
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['category_name']; ?>：</div>
                                <div class="label_value">
                                    <div class="search_select">
                                        <div class="categorySelect">
                                            <div class="selection">
                                                <input type="text" name="category_name" id="category_name" class="text w290 valid" value="<?php if ($this->_var['parent_category']): ?><?php echo $this->_var['parent_category']; ?><?php else: ?><?php echo $this->_var['lang']['zc_top_cat']; ?><?php endif; ?>" autocomplete="off" readonly data-filter="cat_name" />
                                                <input type="hidden" name="cat_id" id="category_id" value="<?php echo empty($this->_var['info']['cat_id']) ? '0' : $this->_var['info']['cat_id']; ?>" data-filter="cat_id" />
                                            </div>
                                            <div class="select-container w319" style="display:none;">
                                                <?php echo $this->fetch('library/filter_category.lbi'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="notic"><?php echo $this->_var['lang']['select_top_cat_notic']; ?></div>
                                </div>
                            </div>
							<div class="item">
								<div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['zc_project_raise_money']; ?>：</div>
								<div class="label_value">
									<input type='text' size="10" name='money' value='<?php echo $this->_var['info']['amount']; ?>' class="text" />
									<div class="form_prompt"></div>
								</div>
							</div>								
							<div class="item">
								<div class="label"><?php echo $this->_var['lang']['zc_project_title_img']; ?>：</div>
								<div class="label_value">
									<div class="type-file-box">
										<input type="button" name="button" id="button" class="type-file-button" value="" />
										<input type="file" class="type-file-file" id="tit_img" name="tit_img" data-state="imgfile" size="30" hidefocus="true" value="" />
										<?php if ($this->_var['info']): ?>
										<span class="show">
											<a href="../<?php echo $this->_var['info']['title_img']; ?>" target="_blank" class="nyroModal"><i class="icon icon-picture" data-tooltipimg="../<?php echo $this->_var['info']['title_img']; ?>" ectype="tooltip" title="tooltip"></i></a>
										</span>
										<?php endif; ?>
										<input type="text" name="textfile" class="type-file-text" value="<?php if ($this->_var['info']): ?>../<?php echo $this->_var['info']['title_img']; ?><?php endif; ?>" id="textfield" autocomplete="off" readonly />
									</div>
									<label class="bf100 fl"><?php echo $this->_var['lang']['zc_project_title_img_notic']; ?></label>
									<div class="form_prompt"></div>
								</div>
							</div>	
							<div class="item">
								<div class="label"><?php echo $this->_var['lang']['act_time']; ?>：</div>
								<div class="label_value">
									<div class="text_time" id="text_time1">
										<input type="text" name="promote_start_date" value="<?php if ($this->_var['info']): ?><?php echo $this->_var['info']['start_time']; ?><?php else: ?><?php echo $this->_var['start_date']; ?><?php endif; ?>" id="promote_start_date" class="text mr0" readonly />
									</div>
									<span class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
									<div class="text_time" id="text_time2">
										<input type="text" name="promote_end_date" value="<?php if ($this->_var['info']): ?><?php echo $this->_var['info']['end_time']; ?><?php else: ?><?php echo $this->_var['end_date']; ?><?php endif; ?>" id="promote_end_date" class="text" readonly />
									</div>										
								</div>
							</div>
							<div class="item">
								<div class="label"><?php echo $this->_var['lang']['whether_recommend']; ?>：</div>
								<div class="label_value">
									<div class="checkbox_items">
										<div class="checkbox_item">
											<input type="radio" class="ui-radio" name="is_best" id="is_best_1" value="1" <?php if ($this->_var['info']['is_best'] == 1): ?> checked="true" <?php endif; ?>  />
											<label for="is_best_1" class="ui-radio-label"><?php echo $this->_var['lang']['yes']; ?></label>
										</div>
										<div class="checkbox_item">
											<input type="radio" class="ui-radio" name="is_best" id="is_best_0" value="0" <?php if ($this->_var['info']['is_best'] == 0): ?> checked="true" <?php endif; ?>  />
											<label for="is_best_0" class="ui-radio-label"><?php echo $this->_var['lang']['no']; ?></label>
										</div>
									</div>
								</div>
							</div>												
						</div> 
						<!--基本信息 end-->
						<!--众筹详情 start-->
						<div class="switch_info" data-table="project_details" style="display:none;">
							<?php echo $this->_var['details']; ?>
						</div> 
						<!--众筹详情 end-->	
						<!--众筹说明 start-->
						<div class="switch_info" data-table="project_desc" style="display:none;">
							<?php echo $this->_var['describe']; ?>
						</div> 
						<!--众筹说明 end-->	
						<!--风险说明 start-->
						<div class="switch_info" data-table="risk_instruction" style="display:none;">
							<?php echo $this->_var['risk_instruction']; ?>
						</div> 
						<!--风险说明 end-->
                        <div class="info_btn info_btn_bf100 button-info-item0" id="info_btn_bf100">
                            <div class="label">&nbsp;</div>
                            <div class="value font0">
                                <input type="submit" class='button mr10' value="<?php echo $this->_var['lang']['button_submit']; ?>" id="submitBtn" />
                                <input type="reset" class='button button_reset' value="<?php echo $this->_var['lang']['button_reset']; ?>" />
                                <input type='hidden' name='item_id' value='<?php echo $this->_var['item_id']; ?>' />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			</form>
		</div>
    </div>
    <style type="text/css">
		.button-info-item0,.button-info-item3{text-align:left;}
    	.button-info-item0 .label,.button-info-item3 .label{width:30%; padding-right:9px;}
    </style>
 	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
    
	<script type="text/javascript">
	//切换标签
	$(".tabs_info li").click(function(){
		var this_tab = $(this).data('tab');
		$(".flexilist[data-table="+this_tab+"]").show();
		$(".flexilist[data-table="+this_tab+"]").siblings(".flexilist").hide();
	});
	
	$(function(){
		//表单验证
		$("#submitBtn").click(function(){
			if($("#zc_project_form").valid()){
				$("#zc_project_form").submit();
			}
		});
	
		$('#zc_project_form').validate({
			errorPlacement:function(error, element){
				var error_div = element.parents('div.label_value').find('div.form_prompt');
				element.parents('div.label_value').find(".notic").hide();
				error_div.append(error);
			},
			rules:{
				title :{
					required : true
				},
				initiator :{
					required : true
				},
				money :{
					required : true,
					number:true
				},
				textfile:{
					required : true
				}
			},
			messages:{
				title:{
					 required : '<i class="icon icon-exclamation-sign"></i><?php echo $this->_var['lang']['zc_project_name']; ?><?php echo $this->_var['lang']['empty']; ?>'
				},
				initiator :{
					required : '<i class="icon icon-exclamation-sign"></i><?php echo $this->_var['lang']['initiator_name']; ?><?php echo $this->_var['lang']['empty']; ?>'
				},
				money :{
					required : '<i class="icon icon-exclamation-sign"></i><?php echo $this->_var['lang']['zc_project_raise_money']; ?><?php echo $this->_var['lang']['empty']; ?>',
					digits : '<i class="icon icon-exclamation-sign"></i>'+zc_money_digits
				},
				textfile:{
					required : '<i class="icon icon-exclamation-sign"></i>'+zc_textfile_null
				}
			}			
		});
		$('.nyroModal').nyroModal();
	});
	
	var opts1 = {
		'targetId':'promote_start_date',
		'triggerId':['promote_start_date'],
		'alignId':'text_time1',
		'format':'-',
		'hms':'off'
	},opts2 = {
		'targetId':'promote_end_date',
		'triggerId':['promote_end_date'],
		'alignId':'text_time2',
		'format':'-',
		'hms':'off'
	}
	xvDate(opts1);
	xvDate(opts2);
	</script>
</body>
</html>
