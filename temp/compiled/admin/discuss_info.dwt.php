<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><a href="<?php echo $this->_var['action_link']['href']; ?>" class="s-back"><?php echo $this->_var['lang']['back']; ?></a><?php echo $this->_var['lang']['goods_alt']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content_common']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['1']; ?></li>
                </ul>
            </div>
            <!--直接引用 start-->
            <?php $_from = $this->_var['single_img']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'img');if (count($_from)):
    foreach ($_from AS $this->_var['img']):
?>
            <img style="overflow:hidden; word-break:break-all;" src="<?php echo $this->_var['img']['thumb_url']; ?>" alt="" title=""/>
            <div style="display:none; margin: auto;  position: absolute;  top: 0; left: 0; bottom: 0; right: 0;"><img src='<?php echo $this->_var['img']['img_url']; ?>' /></div>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

            <?php if ($this->_var['reply_info']['content']): ?>
            <!-- reply content list -->
            <div class="info_warp">
              <table width="100%">
                <tr>
                  <td>
                  <?php echo $this->_var['lang']['admin_user_name']; ?>&nbsp;<a href="mailto:<?php echo $this->_var['msg']['email']; ?>"><b><?php echo $this->_var['reply_info']['user_name']; ?></b></a>&nbsp;<?php echo $this->_var['lang']['from']; ?>
                  &nbsp;<?php echo $this->_var['reply_info']['add_time']; ?>&nbsp;<?php echo $this->_var['lang']['reply']; ?>
                </td>
                </tr>
                <tr>
                  <td><hr color="#dadada" size="1"></td>
                </tr>
                <tr>
                  <td>
                    <div style="overflow:hidden; word-break:break-all;"><?php echo $this->_var['reply_info']['content']; ?></div>
                    <div align="right"><b><?php echo $this->_var['lang']['ip_address']; ?></b>: <?php echo $this->_var['reply_info']['ip_address']; ?></div>
                  </td>
                </tr>

              </table>
            </div>
            <?php endif; ?>

            <?php if ($this->_var['send_fail']): ?>
            <ul style="padding:0; margin: 0; list-style-type:none; color: #CC0000;">
            <li style="border: 1px solid #CC0000; background: #FFFFCC; padding: 10px; margin-bottom: 5px;" ><?php echo $this->_var['lang']['mail_send_fail']; ?></li>
            </ul>
            <?php endif; ?>
            <!--直接引用 end-->

            <div class="flexilist">
                <div class="common-content">
                    <div class="mian-info">
                        <form action="discuss_circle.php" method="post" name="theForm" enctype="multipart/form-data" id="discuss_circle_form">
                            <div class="switch_info">
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['discuss_circle_type']; ?>：</div>
                                    <div class="label_value">
                                        <?php if ($this->_var['action'] == 'relpy'): ?>
                                        <div class="checkbox_items">
                                            <?php if ($this->_var['msg']['dis_type'] == 1): ?>
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="discuss_type" id="discuss_type_1" value="1" <?php if ($this->_var['msg']['dis_type'] == 1): ?>checked="checked"<?php endif; ?> />
                                                <label for="discuss_type_1" class="ui-radio-label"><?php echo $this->_var['lang']['forum']['1']; ?></label>
                                            </div>
                                            <?php endif; ?>
                                            <?php if ($this->_var['msg']['dis_type'] == 2): ?>
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="discuss_type" id="discuss_type_2" value="2" <?php if ($this->_var['msg']['dis_type'] == 2): ?>checked="checked"<?php endif; ?> />
                                                <label for="discuss_type_2" class="ui-radio-label"><?php echo $this->_var['lang']['forum']['2']; ?></label>
                                            </div>
                                            <?php endif; ?>
                                            <?php if ($this->_var['msg']['dis_type'] == 3): ?>
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="discuss_type" id="discuss_type_3" value="3" <?php if ($this->_var['msg']['dis_type'] == 3): ?>checked="checked"<?php endif; ?> />
                                                <label for="discuss_type_3" class="ui-radio-label"><?php echo $this->_var['lang']['forum']['3']; ?></label>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                        <?php else: ?>
                                        <div class="checkbox_items">
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="discuss_type" id="discuss_type_1" value="1" <?php if ($this->_var['msg']['dis_type'] == 1): ?>checked="checked"<?php endif; ?> />
                                                <label for="discuss_type_1" class="ui-radio-label"><?php echo $this->_var['lang']['forum']['1']; ?></label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="discuss_type" id="discuss_type_2" value="2" <?php if ($this->_var['msg']['dis_type'] == 2): ?>checked="checked"<?php endif; ?> />
                                                <label for="discuss_type_2" class="ui-radio-label"><?php echo $this->_var['lang']['forum']['2']; ?></label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="discuss_type" id="discuss_type_3" value="3" <?php if ($this->_var['msg']['dis_type'] == 3): ?>checked="checked"<?php endif; ?> />
                                                <label for="discuss_type_3" class="ui-radio-label"><?php echo $this->_var['lang']['forum']['3']; ?></label>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
								<?php if ($this->_var['act'] != 'update'): ?>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['search_goods']; ?>：</div>
                                    <div class="label_value">
										<input name="keyword" type="text" id="keyword" class="text" autocomplete="off" />
										<input name="search" type="button" id="search" value="<?php echo $this->_var['lang']['button_search']; ?>" class="btn btn30 red_btn" onclick="searchGoods()" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['goods_name']; ?>：</div>
                                    <div class="label_value">
                                        <div class="imitate_select select_w320" id="goods_id">
                                          <div class="cite"><?php echo $this->_var['lang']['please']; ?><?php echo $this->_var['lang']['search_goods']; ?></div>
                                          <ul>
                                             <li><a href="javascript:;" data-value="<?php echo $this->_var['tag']['goods_id']; ?>" class="ftx-01"><?php echo $this->_var['lang']['please']; ?><?php echo $this->_var['lang']['search_goods']; ?></a></li>
                                          </ul>
                                          <input name="goods_id" type="hidden" value="" id="goods_id_val">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['discuss_user']; ?>：</div>
                                    <div class="label_value">
										<input name="user_name" type="text" id="user_name" class="text">
                                    </div>
                                </div>
								<?php else: ?>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['discuss_goods']; ?>：</div>
                                    <div class="label_value">
                                        <a href="../<?php echo $this->_var['msg']['original_img']; ?>" class="nyroModal"><i class="icon icon-picture" data-tooltipimg="../<?php echo $this->_var['msg']['original_img']; ?>" ectype="tooltip" title="tooltip"></i></a>
                                        <a href="../goods.php?id=<?php echo $this->_var['msg']['goods_id']; ?>" target="_blank"><?php echo $this->_var['msg']['goods_name']; ?></a>
                                    </div>
                                </div>
								<?php endif; ?>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['discuss_title']; ?>：</div>
                                    <div class="label_value">
										<input id="dis_title" class="text" <?php if ($this->_var['action'] == 'relpy'): ?> readonly <?php endif; ?> type="text" name="dis_title" value="<?php echo $this->_var['msg']['dis_title']; ?>" size="60" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['discuss_text']; ?>：</div>
                                    <div class="label_value">
										<textarea name="content" id="content" <?php if ($this->_var['action'] == 'relpy'): ?> readonly <?php endif; ?> class="textarea h200" ><?php echo $this->_var['msg']['dis_text']; ?></textarea>
										<!-- <iframe src="templates/editor/editor.html?id=content" frameborder="0" scrolling="no" width="693" height="320"></iframe> -->
                                    </div>
                                </div>
                                <?php if ($this->_var['act'] == 'update'): ?>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['adopt_status']; ?>：</div>
                                    <div class="label_value">
                                        <div class="checkbox_items" ectype="general_audit_status">
                                            <div class="checkbox_item">
                                                <input name="review_status" type="radio" class="ui-radio" value="1" id="review_status_1" <?php if ($this->_var['msg']['review_status'] == 1): ?>checked="checked"<?php endif; ?> />
                                                <label for="review_status_1" class="ui-radio-label"><?php echo $this->_var['lang']['not_audited']; ?></label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input name="review_status" type="radio" class="ui-radio" value="2" id="review_status_2" <?php if ($this->_var['msg']['review_status'] == 2): ?>checked="checked"<?php endif; ?> />
                                                <label for="review_status_2" class="ui-radio-label"><?php echo $this->_var['lang']['audited_not_adopt']; ?></label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input name="review_status" type="radio" class="ui-radio" value="3" id="review_status_3" <?php if ($this->_var['msg']['review_status'] == 3): ?>checked="checked"<?php endif; ?> />
                                                <label for="review_status_3" class="ui-radio-label"><?php echo $this->_var['lang']['audited_yes_adopt']; ?></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item <?php if ($this->_var['bonus_arr']['review_status'] != 2): ?>hide<?php endif; ?>" id="review_content">
                                    <div class="label"><?php echo $this->_var['lang']['adopt_reply']; ?>：</div>
                                    <div class="value">
                                        <textarea name="review_content" class="textarea h100"><?php echo $this->_var['bonus_arr']['review_content']; ?></textarea>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <div class="item">
                                    <div class="label">&nbsp;</div>
                                    <div class="label_value info_btn">
										<input name="submit" type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" id="submitBtn">
										<input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button button_reset">
										<?php if ($this->_var['reply_info']['content']): ?><input type="submit" name="remail" value="<?php echo $this->_var['lang']['remail']; ?>" class="button"><?php endif; ?>
										<input type="hidden" name="dis_id" value="<?php echo $this->_var['msg']['dis_id']; ?>">
										<input type="hidden" name="dis_type" value="<?php echo $this->_var['msg']['dis_type']; ?>">
										<input type="hidden" name="act" value="<?php echo $this->_var['act']; ?>">
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
	function add_integ(obj, act, id, goods_id, user_id)
	{
		var integ = document.getElementById('add_integration').value;
		location.href='comment_manage.php?act=single_check&check=' + act + '&id=' + id + '&integ=' + integ + '&goods_id=' + goods_id + '&user_id=' + user_id;
	}

	function searchGoods()
	{
	  var filter = new Object;
	  filter.keyword  = document.forms['theForm'].elements['keyword'].value;

	  Ajax.call('tag_manage.php?is_ajax=1&act=search_goods', filter, searchGoodsResponse, 'GET', 'JSON');
	}

	function searchGoodsResponse(result)
	{
	  if (result.error == '1' && result.message != '')
	  {
		alert(result.message);
		return;
	  }

	  $('#goods_id').find('li').remove();

	  var goods = result.content;

	  if(goods){
		  for (i=0; i<goods.length;i++){
			  $('#goods_id').find('ul').append('<li><a href="javascript:;" data-value="'+goods[i].goods_id+'" class="ftx-01">'+goods[i].goods_name+'</a></li>');
		  }
	  }

	  return;
	}

	/**
	 * 新增一个图片
	 */
	function addImg(obj)
	{
		var src  = obj.parentNode.parentNode;
		var idx  = rowindex(src);
		var tbl  = document.getElementById('gallery-table');
		var tr = tbl.getElementsByTagName('tr');

		if(tr.length == 10)
		{
			alert("<?php echo $this->_var['lang']['max_ten_img']; ?>");
			return false;
		}

		var row  = tbl.insertRow(idx + 1);
		var cell = row.insertCell(-1);
		cell.innerHTML = src.cells[0].innerHTML.replace(/(.*)(addImg)(.*)(\[)(\+)/i, "$1removeImg$3$4-");
	}

	/**
	 * 删除图片上传
	 */
	function removeImg(obj)
	{
		var row = rowindex(obj.parentNode.parentNode);
		var tbl = document.getElementById('gallery-table');

		tbl.deleteRow(row);
	}

	/**
	 * 删除图片
	 */
	function dropImg(imgId)
	{
	  Ajax.call('goods.php?is_ajax=1&act=drop_image', "img_id="+imgId, dropImgResponse, "GET", "JSON");
	}

	function dropImgResponse(result)
	{
		if (result.error == 0)
		{
			document.getElementById('gallery_' + result.content).style.display = 'none';
		}
	}
	</script>
</body>
</html>
