<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<?php echo $this->fetch('library/js_languages_new.lbi'); ?>
<link rel="stylesheet" type="text/css" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/css/other/gift.css" />
</head>
<body>
<?php echo $this->fetch('library/page_header_common.lbi'); ?>
<div class="ecsc-breadcrumb w1200 w">
    <?php echo $this->fetch('library/ur_here.lbi'); ?>
</div>
<div class="w1200 w">
    <div class="usBox clearfix">
        <div class="usBox_1 fl">
            <form name="formGift" action="gift_gard.php" method="post" id="gift_gard_form">
                <div class="items">
                	<div class="item">
                    	<div class="label"><?php echo $this->_var['lang']['gift_gard_number']; ?>：</div>
                        <div class="value"><input name="gift_card" id="gift_card" type="text" size="20" class="text" /><div class="form_prompt"></div></div>
                    </div>
                    <div class="item">
                    	<div class="label"><?php echo $this->_var['lang']['gift_gard_password']; ?>：</div>
                        <div class="value"><input type="password" style="display:none"/><input name="gift_pwd" id="gift_pwd" type="password" size="20" class="text"/><div class="form_prompt"></div></div>
                    </div>
                    <?php if ($this->_var['enabled_captcha']): ?>
                    <div class="item">
                    	<div class="label"><?php echo $this->_var['lang']['comment_captcha']; ?>：</div>
                        <div class="value">
                        	<div class="captcha_input">
                            	<input name="captcha" id="captcha" type="text" size="20" class="text" />
                            	<img src="captcha_verify.php?captcha=is_common&<?php echo $this->_var['rand']; ?>" alt="captcha" class="captcha_img" onClick="this.src='captcha_verify.php?captcha=is_common&'+Math.random()" data-key="captcha_common" />
                            </div>
                            <div class="form_prompt"></div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="item">
                    	<div class="label">&nbsp;</div>
                        <div class="value">
                        	<input type="hidden" name="act" value="check_gift" />
                            <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
                            <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="us_Submit" ectype="submitBtn"/>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="usTxt"><img src="themes/ecmoban_dsc2017/images/gift_gard.png" width="360"/></div>
    </div>
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.validation.min.js')); ?>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/dsc-common.js"></script>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.purebox.js"></script>
<script type="text/javascript">
	$(function(){
		$("*[ectype='submitBtn']").click(function(){
			var user_id = '<?php echo $this->_var['user_id']; ?>';
			
			//判断用户是否登录
			if(user_id > 0){
				if($("#gift_gard_form").valid()){
					$("#gift_gard_form").submit();
				}
			}else{
				var back_url = "gift_gard.php";
				$.notLogin("get_ajax_content.php?act=get_login_dialog",back_url);
				return false;
			}
		});
		
		$('#gift_gard_form').validate({
			errorPlacement:function(error, element){
				var error_div = element.parents('div.value').find('div.form_prompt');
				error_div.html("").append(error);
			},
			rules : {
				gift_card : {
					required : true
				},
				gift_pwd:{
					required : true
				}
				<?php if ($this->_var['enabled_captcha']): ?>
				,captcha:{
					required : true,
					maxlength : 4,
					remote : {
						cache: false,
						async:false,
						type:'POST',
						url:'ajax_dialog.php?act=ajax_captcha&seKey='+$("input[name='captcha']").siblings(".captcha_img").data("key"),
						data:{
							captcha:function(){
								return $("input[name='captcha']").val();
							}
						},
						dataFilter:function(data,type){
							if(data == "false"){
								$("input[name='captcha']").siblings(".captcha_img").click();
							}
							return data;
						}
					}
				}
				<?php endif; ?>
			},
			messages : {
				gift_card : {
					required : json_languages.gift_gard_number_null
				},
				gift_pwd : {
					required : json_languages.gift_gard_password_null
				}
				<?php if ($this->_var['enabled_captcha']): ?>
				,captcha:{
					required : json_languages.captcha_not,
					maxlength: json_languages.captcha_xz,
					remote : json_languages.captcha_cw
				}
				<?php endif; ?>
			},
			success:function(label){
				label.removeClass().addClass("succeed").html("<i></i>");
			},
			onkeyup:function(element,event){
				var name = $(element).attr("name");
				if(name == "captcha"){
					//不可去除，当是验证码输入必须失去焦点才可以验证（错误刷新验证码）
					return true;
				}else{
					$(element).valid();
				}
			}
		});
	});
</script>
</body>
</html>


