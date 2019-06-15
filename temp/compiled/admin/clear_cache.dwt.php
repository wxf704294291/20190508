<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['rec_size']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['clear_cache']['0']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-content">
                    <div class="mian-info">
                        <form method="POST" action="index.php" name="theFrom" onsubmit="return checkform()" id="theFrom">
                    	<div class="switch_info business_info" style="background:none;">
                            <div>
                                <div class="step">
                                    <div class="tit">
                                        <div class="checkbox_items">
                                            <div class="checkbox_item">
                                                <input type="checkbox" name="chkGroup" value="all" value="checkbox" class="ui-checkbox" id="chkGroup_1"/>
                                                <label for="chkGroup_1" class="ui-label blod"><?php echo $this->_var['lang']['stencil_cache']; ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="qx_items">
                                        <div class="qx_item">
                                            <div class="checkbox_items">
                                                <div class="checkbox_item">
                                                    <input type="checkbox" value="shop_config" name="action_code[]" class="ui-checkbox" id="shop_config" />
                                                	<label for="shop_config" class="ui-label"><?php echo $this->_var['lang']['shop_config_cache']; ?></label>
                                                </div>
                                                <div class="checkbox_item">
                                                    <input type="checkbox" value="category" name="action_code[]" class="ui-checkbox" id="category" />
                                                	<label for="category" class="ui-label"><?php echo $this->_var['lang']['03_category_manage']; ?></label>
                                                </div>
                                                <div class="checkbox_item">
                                                    <input type="checkbox" value="floor" name="action_code[]" class="ui-checkbox" id="floor" />
                                                	<label for="floor" class="ui-label"><?php echo $this->_var['lang']['floor']; ?></label>
                                                </div>
                                                
                                                <div class="checkbox_item">
                                                    <input type="checkbox" value="platform_temp" name="action_code[]" class="ui-checkbox" id="platform_temp" />
                                                	<label for="platform_temp" class="ui-label"><?php echo $this->_var['lang']['platform_temp']; ?></label>
                                                </div>
                                                <div class="checkbox_item">
                                                    <input type="checkbox" value="seller_temp" name="action_code[]" class="ui-checkbox" id="seller_temp" />
                                                	<label for="seller_temp" class="ui-label"><?php echo $this->_var['lang']['seller_temp']; ?></label>
                                                </div>
                                                <div class="checkbox_item">
                                                    <input type="checkbox" value="stores_temp" name="action_code[]" class="ui-checkbox" id="stores_temp" />
                                                	<label for="stores_temp" class="ui-label"><?php echo $this->_var['lang']['stores_temp']; ?></label>
                                                </div>
                                                <div class="checkbox_item">
                                                    <input type="checkbox" value="reception" name="action_code[]" class="ui-checkbox" id="reception" />
                                                	<label for="reception" class="ui-label"><?php echo $this->_var['lang']['reception']; ?></label>
                                                </div>
                                                
                                                <div class="checkbox_item">
                                                    <input type="checkbox" value="other" name="action_code[]" class="ui-checkbox" id="other" />
                                                	<label for="other" class="ui-label"><?php echo $this->_var['lang']['other']; ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="step">
                                    <div class="tit">
                                        <div class="checkbox_items">
                                            <div class="checkbox_item">
                                                <input type="checkbox" name="sessGroup" value="all" value="checkbox" class="ui-checkbox" id="sessGroup_1"/>
                                                <label for="sessGroup_1" class="ui-label blod">SESSION</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="qx_items">
                                        <div class="qx_item">
                                            <div class="checkbox_items">
                                            	<div class="checkbox_item">
                                                    <input type="checkbox" value="sessions" name="action_code[]" class="ui-checkbox" id="sessions" />
                                                    <label for="sessions" class="ui-label"><?php echo $this->_var['lang']['sessions']; ?></label>
                                                </div>
                                                <div class="checkbox_item">
                                                    <input type="checkbox" value="stats" name="action_code[]" class="ui-checkbox" id="stats" />
                                                    <label for="stats" class="ui-label"><?php echo $this->_var['lang']['access_log']; ?></label>
                                                </div>
                                            </div>
                                        </div>    
                                    </div>
                                </div>    
                                <div class="steplast">
                                    <div class="info_btn">
                                        <input type="submit" value="<?php echo $this->_var['lang']['clear']; ?>" class="button">
                                        <input type="hidden"   name="act"   value="<?php echo $this->_var['form_act']; ?>" />
                                    </div>
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
	<script language="javascript">
		function checkform(){
			var length2 =  $("#theFrom").find("input[name='action_code[]']:checked").length;
			if(length2 > 0){
				return true;
			}
			return false;
		}
		
		$("input[name='chkGroup']").click(function(){
			var checkbox = $(this).parents(".tit").next(".qx_items").find('input:checkbox[type="checkbox"]');
			if($(this).prop("checked") == true){
				checkbox.prop("checked",true);
			}else{
				checkbox.prop("checked",false);
			}
		});
		
		$("input[name='sessGroup']").click(function(){
			var checkbox = $(this).parents(".tit").next(".qx_items").find('input:checkbox[type="checkbox"]');
			if($(this).prop("checked") == true){
				checkbox.prop("checked",true);
			}else{
				checkbox.prop("checked",false);
			}
		});
		
		$("input[name='action_code[]']").click(function(){    
			var qx_items = $(this).parents(".qx_items");
			var length = qx_items.find("input[name='action_code[]']").length;
			var length2 =  qx_items.find("input[name='action_code[]']:checked").length;
			if(length == length2){
				qx_items.prev().find("input[name='chkGroup']").prop("checked",true);
			}else{
				qx_items.prev().find("input[name='chkGroup']").prop("checked",false);
			}
		});
		
		$(".qx_items").each(function(index, element) {
			var length = $(this).find("input[name='action_code[]']").length;
			var length2 = $(this).find("input[name='action_code[]']:checked").length;
			
			if(length == length2){
				$(this).prev().find("input[name='chkGroup']").prop("checked",true);
			}else{
				$(this).prev().find("input[name='chkGroup']").prop("checked",false);
			}
		});
    </script>
</body>
</html>
