<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['11_system']; ?> - <?php echo $this->_var['ur_here']; ?></div>
            <div class="content">
            <div class="explanation" id="explanation">
            	<div class="ex_tit">
					<i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span>
                    <?php if ($this->_var['open'] == 1): ?>
                    <div class="view-case">
                    	<div class="view-case-tit"><i></i><?php echo $this->_var['lang']['view_tutorials']; ?></div>
                        <div class="view-case-info">
                        	<a href="http://help.flyobd.com/article-6899.html" target="_blank"><?php echo $this->_var['lang']['tutorials_bonus_list_one']; ?></a>
                        </div>
                    </div>
                    <?php endif; ?>
				</div>
                <ul>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['1']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['2']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="mian-info">
                    <div class="list-div">
                        <form method="post" action="captcha_manage.php" name="theForm" id="captcha_frm">
                            <table>
                                <tr>
                                	<th colspan="2"><div class="tDiv"><?php echo $this->_var['lang']['captcha_setting']; ?></div></th>
                                </tr>
                                <tr>
                                	<td width="60%">
                                        <div class="tDiv">
                                            <p><strong><?php echo $this->_var['lang']['captcha_turn_on']; ?></strong></p>
                                            <p class="blue mt5"><?php echo $this->_var['lang']['turn_on_note']; ?></p>
                                            <p class="mt5"><img src="../captcha_verify.php?code_config=1&width=<?php echo $this->_var['codeConfig']['width']; ?>&height=<?php echo $this->_var['codeConfig']['height']; ?>&font_size=<?php echo $this->_var['codeConfig']['font_size']; ?>&length=<?php echo $this->_var['codeConfig']['length']; ?>&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='../captcha_verify.php?code_config=1&width=<?php echo $this->_var['codeConfig']['width']; ?>&height=<?php echo $this->_var['codeConfig']['height']; ?>&font_size=<?php echo $this->_var['codeConfig']['font_size']; ?>&length=<?php echo $this->_var['codeConfig']['length']; ?>&'+Math.random()" /></p>
                                        </div>
									</td>
                                    <td>
                                        <div class="tDiv">
                                            <div class="checkbox_item"><input type="checkbox" name="captcha_register" value="1" id="captcha_register" class="ui-checkbox" <?php echo $this->_var['captcha']['register']; ?> /><label class="ui-label" for="captcha_register"><?php echo $this->_var['lang']['captcha_register']; ?></label></div>
                                            <div class="checkbox_item"><input type="checkbox" name="captcha_login" value="2" id="captcha_login" class="ui-checkbox" <?php echo $this->_var['captcha']['login']; ?> /><label class="ui-label" for="captcha_login"><?php echo $this->_var['lang']['captcha_login']; ?></label></div>
                                            <div class="checkbox_item"><input type="checkbox" name="captcha_comment" value="4" id="captcha_comment" class="ui-checkbox" <?php echo $this->_var['captcha']['comment']; ?> /><label class="ui-label" for="captcha_comment"><?php echo $this->_var['lang']['captcha_comment']; ?></label></div>
                                            <div class="checkbox_item"><input type="checkbox" name="captcha_admin" value="8" id="captcha_admin" class="ui-checkbox" <?php echo $this->_var['captcha']['admin']; ?> /><label class="ui-label" for="captcha_admin"><?php echo $this->_var['lang']['captcha_admin']; ?></label></div>
                                            <div class="checkbox_item"><input type="checkbox" name="captcha_message" value="32" id="captcha_message" class="ui-checkbox" <?php echo $this->_var['captcha']['message']; ?> /><label class="ui-label" for="captcha_message"><?php echo $this->_var['lang']['captcha_message']; ?></label></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="tDiv">
                                            <p><strong><?php echo $this->_var['lang']['captcha_login_fail']; ?></strong></p>
                                            <p class="blue mt5"><?php echo $this->_var['lang']['login_fail_note']; ?></p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tDiv">
                                            <div class="checkbox_items">
                                                <div class="checkbox_item">
                                                    <input type="radio" name="captcha_login_fail" value="32" class="ui-radio" id="captcha_login_fail32" <?php echo $this->_var['captcha']['login_fail_yes']; ?> /><label class="ui-radio-label" for="captcha_login_fail32"><?php echo $this->_var['lang']['yes']; ?></label>
                                                </div>
                                                <div class="checkbox_item">
                                                    <input type="radio" name="captcha_login_fail" value="0" class="ui-radio" id="captcha_login_fail0" <?php echo $this->_var['captcha']['login_fail_no']; ?> /><label class="ui-radio-label" for="captcha_login_fail0"><?php echo $this->_var['lang']['no']; ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="tDiv">
                                            <p><strong><?php echo $this->_var['lang']['captcha_width']; ?></strong></p>
                                            <p class="blue mt5"><?php echo $this->_var['lang']['width_note']; ?></p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tDiv">
                                            <input type="text" name="captcha_width" class="text w150" value="<?php echo $this->_var['code_config']['captcha_width']; ?>" />
                                            <div class="form_prompt"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="tDiv">
                                            <p><strong><?php echo $this->_var['lang']['captcha_height']; ?></strong></p>
                                            <p class="blue mt5"><?php echo $this->_var['lang']['height_note']; ?></p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tDiv">
                                            <input type="text" name="captcha_height" class="text w150" value="<?php echo $this->_var['code_config']['captcha_height']; ?>" />
                                            <div class="form_prompt"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="tDiv">
                                            <p><strong><?php echo $this->_var['lang']['captcha_font_size']; ?></strong></p>
                                            <p class="blue mt5"><?php echo $this->_var['lang']['comt_font_size']; ?></p>
                                        </div>
                                    </td>
                                    <td><div class="tDiv"><input type="text" name="captcha_font_size" class="text w150" value="<?php echo $this->_var['code_config']['captcha_font_size']; ?>" /></div></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="tDiv"><p><strong><?php echo $this->_var['lang']['captcha_length']; ?></strong></p></div>
                                    </td>
                                    <td><div class="tDiv"><input type="text" name="captcha_length" class="text w150" value="<?php echo $this->_var['code_config']['captcha_length']; ?>" /></div></td>
                                </tr>
        
                                <tr>
                                    <td colspan="2" class="info_btn pt20 pb20 tc">
                                        <input type="hidden" name="act" value="save_config" />
                                        <input type="submit" value="<?php echo $this->_var['lang']['save_setting']; ?>" class="button fn" id="submitBtn"/>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $this->fetch('library/pagefooter.lbi'); ?>
    <script type="text/javascript">
	$(function(){
		//表单验证
		$("#submitBtn").click(function(){
			if($("#captcha_frm").valid()){
				$("#captcha_frm").submit();
			}
		});
	
		$('#captcha_frm').validate({
			errorPlacement:function(error, element){
				var error_div = element.parents('div.tDiv').find('div.form_prompt');
				element.parents('div.tDiv').find(".notic").hide();
				error_div.append(error);
			},
			rules:{
				captcha_width :{
					digits : true,
					max:145,
					min:40
				},
                captcha_height :{
					digits : true,
					max:50,
					min:10
				}
			},
			messages:{
				captcha_width :{
					digits : '<i class="icon icon-exclamation-sign"></i>'+width_number,
					max : '<i class="icon icon-exclamation-sign"></i>'+proper_width,
					min : '<i class="icon icon-exclamation-sign"></i>'+proper_width
				},
                captcha_height :{
					digits : '<i class="icon icon-exclamation-sign"></i>'+height_number,
						max : '<i class="icon icon-exclamation-sign"></i>'+proper_height,
						min : '<i class="icon icon-exclamation-sign"></i>'+proper_height
				}
			}			
		});
	});
    </script>
</body>
</html>
