<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><a href="<?php echo $this->_var['action_link']['href']; ?>" class="s-back"><?php echo $this->_var['lang']['back']; ?></a><?php if ($this->_var['type'] == 1): ?><?php echo $this->_var['lang']['ectouch']; ?><?php else: ?><?php echo $this->_var['lang']['ad_type1']; ?><?php endif; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['info']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['info']['1']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content_common']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-content">
                    <div class="mian-info">
                        <form action="<?php if ($this->_var['type'] == 1): ?>touch_ad_position.php<?php else: ?>ad_position.php<?php endif; ?>" method="post" name="theForm" enctype="multipart/form-data" id="posit_arr_form" >
                            <div class="switch_info">
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['position_name']; ?>：</div>
                                    <div class="label_value">
                                        <input type="text" name="position_name" class="text" value="<?php echo $this->_var['posit_arr']['position_name']; ?>" id="position_name" autocomplete="off" />
                                        <div class="form_prompt"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['ad_width']; ?>：</div>
                                    <div class="label_value">
                                        <input type="text" name="ad_width" class="text" value="<?php echo $this->_var['posit_arr']['ad_width']; ?>" id="ad_width" autocomplete="off" /><div class="notic m20"><?php echo $this->_var['lang']['unit_px']; ?></div><div class="form_prompt"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['ad_height']; ?>：</div>
                                    <div class="label_value">
                                        <input type="text" name="ad_height" class="text" value="<?php echo $this->_var['posit_arr']['ad_height']; ?>" id="ad_height" autocomplete="off" /><div class="notic m20"><?php echo $this->_var['lang']['unit_px']; ?></div><div class="form_prompt"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['position_model']; ?>：</div>
                                    <div class="label_value">
                                        <input type="text" name="position_model" class="text" value="<?php echo $this->_var['posit_arr']['position_model']; ?>" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['position_desc']; ?>：</div>
                                    <div class="label_value">
                                        <input type="text" name="position_desc" class="text" value="<?php echo $this->_var['posit_arr']['position_desc']; ?>" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['posit_style']; ?>：</div>
                                    <div class="label_value">
                                        <textarea name="position_style" cols="60" rows="4" class="textarea" id="position_style"><?php echo $this->_var['posit_arr']['position_style']; ?></textarea>
                                        <div class="form_prompt"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['yes_or_no']; ?>：</div>
                                    <div class="label_value">
                                        <div class="checkbox_items">
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="is_public" id="sex_0" value="0" <?php if ($this->_var['posit_arr']['is_public'] == 0): ?>checked="checked"<?php endif; ?>  />
                                                <label for="sex_0" class="ui-radio-label"><?php echo $this->_var['lang']['no']; ?></label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="is_public" id="sex_1" value="1" <?php if ($this->_var['posit_arr']['is_public'] == 1): ?>checked="checked"<?php endif; ?>  />
                                                <label for="sex_1" class="ui-radio-label"><?php echo $this->_var['lang']['yes']; ?></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label">&nbsp;</div>
                                    <div class="label_value info_btn">
                                        <a href="javascript:;" class="button" id="submitBtn"><?php echo $this->_var['lang']['button_submit']; ?></a>
                                        <input type="hidden" name="act" value="<?php echo $this->_var['form_act']; ?>" />
                                        <input type="hidden" name="id" value="<?php echo $this->_var['posit_arr']['position_id']; ?>" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
		</div>
    </div>
	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
    <script type="text/javascript">
	//列表导航栏设置下路选项
	$(".ps-container").perfectScrollbar();

	$(function(){
		$("#submitBtn").click(function(){
			if($("#posit_arr_form").valid()){
				$("#posit_arr_form").submit();
			}
		});
	
		$('#posit_arr_form').validate({
			errorPlacement: function(error, element){
				var error_div = element.parents('div.label_value').find('div.form_prompt');
				error_div.siblings(".notic").hide();
				error_div.append(error);
			},
			rules : {
				position_name : {
					required : true
				},
				ad_width : {
					required : true,
					digits :true,
					min : 0,
					max : 2000
				},
				ad_height : {
					required : true,
					digits :true,
					min : 0,
					max : 2000
				},
				position_style : {
					required : true,
				}
			},
			messages : {
				position_name : {
					required : '<i class="icon icon-exclamation-sign"></i>'+posit_name_empty
				},
				ad_width : {
					required : '<i class="icon icon-exclamation-sign"></i>'+ad_width_empty,
					digits :  '<i class="icon icon-exclamation-sign"></i>'+ad_width_number,
					min : '<i class="icon icon-exclamation-sign"></i>'+width_value,
					max : '<i class="icon icon-exclamation-sign"></i>'+width_value
				},
				ad_height : {
					required : '<i class="icon icon-exclamation-sign"></i>'+ad_height_empty,
					digits :  '<i class="icon icon-exclamation-sign"></i>'+ad_height_number,
					min : '<i class="icon icon-exclamation-sign"></i>'+height_value,
					max : '<i class="icon icon-exclamation-sign"></i>'+height_value
				},
				position_style : {
					required : '<i class="icon icon-exclamation-sign"></i>'+empty_position_style
				}
			}
		});
	});
    </script>     
</body>
</html>
