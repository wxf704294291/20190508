<!doctype html>
<html>
<head>
<?php echo $this->fetch('library/admin_html_head.lbi'); ?>
</head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><a href="<?php echo $this->_var['action_link']['href']; ?>" class="s-back"><?php echo $this->_var['lang']['back']; ?></a><?php echo $this->_var['lang']['goods_alt']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content_common']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['info']['0']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-content">
                    <div class="mian-info">
                        <form action="category.php" method="post" name="theForm" enctype="multipart/form-data" id="category_info_form">
                            <div class="switch_info">
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['cat_name']; ?>：</div>
                                    <div class="label_value">
									  <?php if ($this->_var['form_act'] == 'insert'): ?>
									  <textarea name="cat_name" cols="48" rows="3" class="textarea"><?php echo htmlspecialchars($this->_var['cat_info']['cat_name']); ?></textarea>
									  <div class="notic bf100"><?php echo $this->_var['lang']['category_name_notic']; ?></div>
									  <?php else: ?>
									  <input type='text' class="text" name='cat_name' maxlength="20" value='<?php echo htmlspecialchars($this->_var['cat_info']['cat_name']); ?>' size='27' />
									  <?php endif; ?>
                                      <div class="form_prompt"></div>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['cat_name_alias']; ?>：</div>
                                    <div class="label_value">
                                        <input type='text' name='cat_alias_name' class="text" id="cat_alias_name" maxlength="20" value='<?php if ($this->_var['cat_info']['parent_id'] == 0): ?><?php echo htmlspecialchars($this->_var['cat_info']['cat_alias_name']); ?><?php endif; ?>' size='27' <?php if ($this->_var['parent_id'] != 0): ?>disabled="true"<?php endif; ?> />
                                        <div class="notic"><?php echo $this->_var['lang']['cat_name_alias_notic']; ?></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['phone_icon']; ?>：</div>
                                    <div class="label_value">
                                        <div class="type-file-box">
                                            <input type="button" name="button" id="button" class="type-file-button" value="" />
                                            <input type="file" class="type-file-file" id="ad_img" name="touch_icon" data-state="imgfile" size="30" hidefocus="true" value="" />
                                            <?php if ($this->_var['cat_info']['touch_icon']): ?>
                                            <span class="show">
                                                <a href="../<?php echo $this->_var['cat_info']['touch_icon']; ?>" target="_blank" class="nyroModal"><i class="icon icon-picture" data-tooltipimg="../<?php echo $this->_var['cat_info']['touch_icon']; ?>" ectype="tooltip" title="tooltip"></i></a>
                                            </span>
                                            <?php endif; ?>
                                            <input type="text" name="textfile" class="type-file-text" <?php if ($this->_var['cat_info']['touch_icon']): ?><?php echo $this->_var['cat_info']['touch_icon']; ?><?php endif; ?> id="textfield" autocomplete="off" readonly />
                                        </div>
                                        <div class="form_prompt"></div>
                                        <div class="notic m20" id="AdCodeImg"><?php echo $this->_var['lang']['phone_icon_notic']; ?></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['parent_id']; ?>：</div>
                                    <div class="label_value">
										<div class="search_select">
											<div class="categorySelect">
												<div class="selection">
													<input type="text" name="category_name" id="category_name" class="text w290 valid" value="<?php if ($this->_var['parent_category']): ?><?php echo $this->_var['parent_category']; ?><?php else: ?><?php echo $this->_var['lang']['cat_top']; ?><?php endif; ?>" autocomplete="off" readonly data-filter="cat_name" />
													<input type="hidden" name="parent_id" id="category_id" value="<?php echo empty($this->_var['parent_id']) ? '0' : $this->_var['parent_id']; ?>" data-filter="cat_id" />
												</div>
												<div class="select-container w319" style="display:none;">
													<?php echo $this->fetch('library/filter_category.lbi'); ?>
												</div>
											</div>
										</div>
                                        <div class="notic"><?php echo $this->_var['lang']['parent_id_notic']; ?></div>
                                    </div>
                                </div>								
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['measure_unit']; ?>：</div>
                                    <div class="label_value">
										<input type="text" class="text text_4" name='measure_unit' value='<?php echo $this->_var['cat_info']['measure_unit']; ?>' size="12" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['sort_order']; ?>：</div>
                                    <div class="label_value">
										<input type="text" class="text text_4" name='sort_order' <?php if ($this->_var['cat_info']['sort_order']): ?>value='<?php echo $this->_var['cat_info']['sort_order']; ?>'<?php else: ?> value="50"<?php endif; ?> size="15" autocomplete="off" />
                                    </div>
                                </div>	
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['commission_rate']; ?>：</div>
                                    <div class="label_value">
										<input type="text" class="text text_2" name='commission_rate' value='<?php echo $this->_var['cat_info']['commission_rate']; ?>' size="12" autocomplete="off" />
										<div class="notic">% <?php echo $this->_var['lang']['commission_rate_notic']; ?></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['is_show']; ?>：</div>
                                    <div class="label_value">
                                        <div class="checkbox_items">
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="is_show" id="is_show_1" value="1" <?php if ($this->_var['cat_info']['is_show'] != 0): ?> checked="true" <?php endif; ?>  />
                                                <label for="is_show_1" class="ui-radio-label"><?php echo $this->_var['lang']['yes']; ?></label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="is_show" id="is_show_0" value="0" <?php if ($this->_var['cat_info']['is_show'] == 0): ?> checked="true" <?php endif; ?>  />
                                                <label for="is_show_0" class="ui-radio-label"><?php echo $this->_var['lang']['no']; ?></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item hide">
                                    <div class="label"><?php echo $this->_var['lang']['show_in_nav']; ?>：</div>
                                    <div class="label_value">
                                        <div class="checkbox_items">
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="show_in_nav" id="show_in_nav_1" value="1" <?php if ($this->_var['cat_info']['show_in_nav'] != 0): ?> checked="true" <?php endif; ?>  />
                                                <label for="show_in_nav_1" class="ui-radio-label"><?php echo $this->_var['lang']['yes']; ?></label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="show_in_nav" id="show_in_nav_0" value="0" <?php if ($this->_var['cat_info']['show_in_nav'] == 0): ?> checked="true" <?php endif; ?>  />
                                                <label for="show_in_nav_0" class="ui-radio-label"><?php echo $this->_var['lang']['no']; ?></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>	
								<?php if ($this->_var['cat_info']['parent_id'] != 0): ?>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['show_category_top']; ?>：</div>
                                    <div class="label_value">
                                        <div class="checkbox_items">
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="is_top_show" id="is_top_show_1" value="1" <?php if ($this->_var['cat_info']['is_top_show'] != 0): ?> checked="true" <?php endif; ?>  />
                                                <label for="is_top_show_1" class="ui-radio-label"><?php echo $this->_var['lang']['yes']; ?></label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="is_top_show" id="is_top_show_0" value="0" <?php if ($this->_var['cat_info']['is_top_show'] == 0): ?> checked="true" <?php endif; ?>  />
                                                <label for="is_top_show_0" class="ui-radio-label"><?php echo $this->_var['lang']['no']; ?></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>	
								<?php endif; ?>
								<?php if ($this->_var['cat_info']['parent_id'] == 0): ?>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['show_category_top_css']; ?>：</div>
                                    <div class="label_value">
                                        <div class="checkbox_items">
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="is_top_style" id="is_top_style_1" value="1" <?php if ($this->_var['cat_info']['is_top_style'] != 0): ?> checked="true" <?php endif; ?>  />
                                                <label for="is_top_style_1" class="ui-radio-label"><?php echo $this->_var['lang']['yes']; ?></label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="is_top_style" id="is_top_style_0" value="0" <?php if ($this->_var['cat_info']['is_top_style'] == 0): ?> checked="true" <?php endif; ?>  />
                                                <label for="is_top_style_0" class="ui-radio-label"><?php echo $this->_var['lang']['no']; ?></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item" <?php if ($this->_var['cat_info']['is_top_style'] == 0): ?>style="display:none"<?php endif; ?>>
                                    <div class="label"><?php echo $this->_var['lang']['top_category_mode']; ?>：</div>
                                    <div class="label_value">
                                      	<div class="imitate_select select_w120">
                                            <div class="cite"><?php echo $this->_var['lang']['top_category_mode_0']; ?></div>
                                            <ul style="display: none;">
                                                <li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['top_category_mode_0']; ?></a></li>
                                                <li><a href="javascript:;" data-value="1" class="ftx-01"><?php echo $this->_var['lang']['top_category_mode_1']; ?></a></li>
                                                <li><a href="javascript:;" data-value="2" class="ftx-01"><?php echo $this->_var['lang']['top_category_mode_2']; ?></a></li>
                                                <li><a href="javascript:;" data-value="3" class="ftx-01"><?php echo $this->_var['lang']['top_category_mode_3']; ?></a></li>
                                            </ul>
                                            <input name="top_style_tpl" type="hidden" value="<?php echo $this->_var['cat_info']['top_style_tpl']; ?>">
                                        </div>
                                    </div>
                                </div>							
								<?php endif; ?>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['category_icon']; ?>：</div>
                                    <div class="label_value">
                                    	<div class="checkbox-items checkbox-cateicon-items" ectype="style_icon">
											<?php $_from = $this->_var['lang']['icon']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'icon');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['icon']):
?>
                                        	<div class="checkbox-item">
                                            	<input type="radio" name="style_icon" class="ui-radio" id="radio_<?php echo $this->_var['key']; ?>" data-name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['key']; ?>" <?php if ($this->_var['cat_info']['style_icon'] == $this->_var['key']): ?>checked<?php endif; ?> />
                                                <label class="ui-radio-label" for="radio_<?php echo $this->_var['key']; ?>"><span></span><i class="iconfont icon-<?php echo $this->_var['key']; ?>"></i></label>
                                            </div>
											<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                            <div class="checkbox-other">
                                                <div class="checkbox-item">
                                                    <input type="radio" name="style_icon" class="ui-radio" id="radio_other" data-name="other" value="other" <?php if ($this->_var['cat_info']['style_icon'] == 'other'): ?>checked<?php endif; ?> />
                                                    <label class="ui-radio-label" for="radio_other"><span><?php echo $this->_var['lang']['custom']; ?></span></label>
                                                </div>
                                                <div class="type-file-box ml10 <?php if ($this->_var['cat_info']['style_icon'] != 'other'): ?>hide<?php endif; ?>" ectype="cat_icon">
                                                    <input type="button" name="button" id="button" class="type-file-button" value="" />
                                                    <input type="file" class="type-file-file" id="cat_icon" name="cat_icon" size="30" data-state="imgfile" hidefocus="true" value="" />
                                                    <?php if ($this->_var['cat_info']['cat_icon']): ?>
                                                    <span class="show">
                                                        <a href="../<?php echo $this->_var['cat_info']['cat_icon']; ?>" target="_blank" class="nyroModal"><i class="icon icon-picture" data-tooltipimg="../<?php echo $this->_var['cat_info']['cat_icon']; ?>" ectype="tooltip" title="tooltip"></i></a>
                                                    </span>
                                                    <?php endif; ?>
                                                    <input type="text" name="textfile" class="type-file-text" id="textfield" readonly />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notic"><?php echo $this->_var['lang']['category_icon_notic']; ?></div>
                                    </div>
                                </div>	
                                <div class="item" <?php if (! $this->_var['cat_name_arr']): ?>style="display:none"<?php endif; ?>>
                                    <div class="label"><?php echo $this->_var['lang']['category_herf']; ?>：</div>
                                    <div class="label_value">
                                        <textarea name='category_links' rows="6" cols="48" class="textarea"><?php echo $this->_var['cat_info']['category_links']; ?></textarea>
                                        <div class="notic"><?php echo $this->_var['lang']['category_herf_notic']; ?></div>
                                    </div>
                                </div>
                                <div class="item" <?php if ($this->_var['parent_id'] != 0 || $this->_var['form_act'] == 'insert'): ?>style=" display:none"<?php endif; ?>>
                                    <div class="label"><?php echo $this->_var['lang']['category_top_mode_content']; ?>：</div>
                                    <div class="label_value">
                                        <textarea name='category_topic' rows="6" cols="48" class="textarea"><?php echo $this->_var['cat_info']['category_topic']; ?></textarea>
                                        <div class="notic"><?php echo $this->_var['lang']['category_top_mode_content_notic']; ?></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['filter_attr']; ?>：</div>
                                    <div class="label_value">
										<div class="lv-item" ectype="item">
                                            <div class="value_select" ectype="type_cat">
                                                <div id="parent_id1" class="imitate_select select_w145" ectype="typeCatSelect">
                                                    <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                                    <ul>
                                                        <li><a href="javascript:;" data-value="0" data-level='1' data-cat='1' class="ftx-01"><?php echo $this->_var['lang']['please_select']; ?></a></li>
                                                        <?php $_from = $this->_var['type_level']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
                                                        <li><a href="javascript:;" data-value="<?php echo $this->_var['cat']['cat_id']; ?>" data-level="<?php echo $this->_var['cat']['level']; ?>"  data-cat='1' class="ftx-01"><?php echo $this->_var['cat']['cat_name']; ?></a></li>
                                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                                    </ul>
                                                    <input type="hidden" value="<?php echo empty($this->_var['cat_tree1']['checked_id']) ? '0' : $this->_var['cat_tree1']['checked_id']; ?>" id="parent_id_val1" ectype="typeCatVal">
                                                </div>
                                                <?php if ($this->_var['cat_tree1']['arr']): ?>
                                                <div id="parent_id2" class="imitate_select select_w145" ectype="typeCatSelect">
                                                    <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                                    <ul>
                                                        <li><a href="javascript:;" data-value="0" data-level='2' data-cat='1' class="ftx-01"><?php echo $this->_var['lang']['please_select']; ?></a></li>
                                                        <?php $_from = $this->_var['cat_tree1']['arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
                                                        <li><a href="javascript:;" data-value="<?php echo $this->_var['cat']['cat_id']; ?>" data-level="<?php echo $this->_var['cat']['level']; ?>" data-cat='1' class="ftx-01"><?php echo $this->_var['cat']['cat_name']; ?></a></li>
                                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                                    </ul>
                                                    <input type="hidden" value="<?php echo empty($this->_var['cat_tree']['checked_id']) ? '0' : $this->_var['cat_tree']['checked_id']; ?>" id="parent_id_val2" ectype="typeCatVal">
                                                </div>
                                                <?php endif; ?>
                                                <?php if ($this->_var['cat_tree']['arr']): ?>
                                                <div id="parent_id<?php if ($this->_var['cat_tree1']['arr']): ?>3<?php else: ?>2<?php endif; ?>" class="imitate_select select_w145" ectype="typeCatSelect">
                                                    <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                                    <ul>
                                                        <li><a href="javascript:;" data-value="0" data-level='<?php if ($this->_var['cat_tree1']['arr']): ?>3<?php else: ?>2<?php endif; ?>' data-cat='1' class="ftx-01"><?php echo $this->_var['lang']['please_select']; ?></a></li>
                                                        <?php $_from = $this->_var['cat_tree']['arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
                                                        <li><a href="javascript:;" data-value="<?php echo $this->_var['cat']['cat_id']; ?>" data-level="<?php echo $this->_var['cat']['level']; ?>" data-cat='1' class="ftx-01"><?php echo $this->_var['cat']['cat_name']; ?></a></li>
                                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                                    </ul>
                                                    <input type="hidden" value="<?php echo empty($this->_var['type_c_id']) ? '0' : $this->_var['type_c_id']; ?>" id="parent_id_val<?php if ($this->_var['cat_tree1']['arr']): ?>3<?php else: ?>2<?php endif; ?>" ectype="typeCatVal">
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="imitate_select select_w170" ectype="attrTypeSelect">
                                                <div class="cite"><?php echo $this->_var['lang']['sel_goods_type']; ?></div>
                                                <ul style="display: none;">
                                                    <?php echo $this->_var['goods_type_list']; ?>
                                                </ul>
                                                <input name="goods_type" type="hidden" value="0">
                                            </div>
                                            <div class="imitate_select select_w120">
                                                <div class="cite"><?php echo $this->_var['lang']['sel_goods_type']; ?></div>
                                                <ul style="display: none;">
                                                    <li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['sel_filter_attr']; ?></a></li>
                                                </ul>
                                                <input name="filter_attr[]" type="hidden" value="0">
                                            </div>
                                            <a href="javascript:;" onclick="addFilterAttr(this)" class="fl mr10" ectype="operation">[+]</a>
										</div>         
										<?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr');$this->_foreach['filter_attr_tab'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['filter_attr_tab']['total'] > 0):
    foreach ($_from AS $this->_var['filter_attr']):
        $this->_foreach['filter_attr_tab']['iteration']++;
?>
										<div class="lv-item" ectype="item">
                                            <div class="imitate_select select_w170">
                                                <div class="cite"><?php echo $this->_var['lang']['sel_goods_type']; ?></div>
                                                <ul style="display: none;">
                                                    <?php echo $this->_var['goods_type_list']; ?>
                                                </ul>
                                                <input name="goods_type" type="hidden" value="<?php echo $this->_var['filter_attr']['goods_type']; ?>">
                                            </div>
                                            <div class="imitate_select select_w120">
                                                <div class="cite"><?php echo $this->_var['lang']['sel_goods_type']; ?></div>
                                                <ul style="display: none;">
                                                    <li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['sel_filter_attr']; ?></a></li>
                                                    <?php $_from = $this->_var['filter_attr']['option']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
                                                    <li><a href="javascript:;" data-value="<?php echo $this->_var['key']; ?>" class="ftx-01"><?php echo $this->_var['item']; ?></a></li>
                                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                                </ul>
                                                <input name="filter_attr[]" type="hidden" value="<?php echo $this->_var['filter_attr']['filter_attr']; ?>">
                                            </div>
                                            <a href="javascript:;" onclick="removeFilterAttr(this)" class="fl mr10" ectype="operation">[-]&nbsp;</a>
                                        </div>
										<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    	<input name="attr_parent_id" type="hidden" value="<?php echo empty($this->_var['type_c_id']) ? '0' : $this->_var['type_c_id']; ?>">
                                	</div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['grade']; ?>：</div>
                                    <div class="label_value">					
									  <input type="text" name="grade" value="<?php echo empty($this->_var['cat_info']['grade']) ? '0' : $this->_var['cat_info']['grade']; ?>" size="40" class="text mr10" autocomplete="off" />
									  <div class="form_prompt"></div>
                                      <div class="notic"><?php echo $this->_var['lang']['notice_grade']; ?></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['cat_style']; ?>：</div>
                                    <div class="label_value">					
									  <input type="text" name="style" value="<?php echo htmlspecialchars($this->_var['cat_info']['style']); ?>" size="40" class="text mr10" autocomplete="off" />
									  <div class="notic"><?php echo $this->_var['lang']['notice_style']; ?></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['keywords']; ?>：</div>
                                    <div class="label_value">					
										<input type="text" name="keywords" value='<?php echo $this->_var['cat_info']['keywords']; ?>' size="50" class="text mr10" autocomplete="off" />										
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['cat_desc']; ?>：</div>
                                    <div class="label_value">					
										<textarea name='cat_desc' rows="6" cols="48" class="textarea"><?php echo $this->_var['cat_info']['cat_desc']; ?></textarea>							
                                    </div>
                                </div>
								<?php if ($this->_var['cat_info']['parent_id'] == 0 && $this->_var['form_act'] == 'update'): ?>								
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['categoryFile']; ?>：</div>
                                    <div class="label_value">					
									  <table width="100%" align="center" id="documentTitle_table" style="border:none; padding:0px;">
										<?php if ($this->_var['form_act'] == 'update' && $this->_var['title_list']): ?>
										<tr>
										  <td>
												<a href="category.php?act=titleFileView&cat_id=<?php echo $this->_var['cat_id']; ?>"><?php echo $this->_var['lang']['see_zj_list']; ?></a>
										  </td>
										</tr>  	
										<?php else: ?>
											<tr>
											  <td>
												  <a onclick="addCategoryFile(this)" href="javascript:;" class="fl mr10 w20 tc">[+]</a>
												  <?php echo $this->_var['lang']['document_title']; ?> <input type="hidden" value="0" size="40" name="dt_id[]"><input type="text" value="" size="40" name="document_title[]" class="text" autocomplete="off" />
											  </td>
											</tr> 
											<?php if ($this->_var['title_list']): ?>
											<?php $_from = $this->_var['title_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'title');if (count($_from)):
    foreach ($_from AS $this->_var['title']):
?>
											<tr>
											  <td>
												  <a onclick="removeCategoryFile(this,<?php echo $this->_var['title']['dt_id']; ?>)" href="javascript:;" class="fl mr10 w20 tc">[-]</a>
												  <?php echo $this->_var['lang']['document_title']; ?> <input type="hidden" value="0" size="40" name="dt_id[]"><input type="text" value="<?php echo $this->_var['title']['dt_title']; ?>" size="40" name="document_title[]" class="text" autocomplete="off" />
											  </td>
											</tr>
											 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
											 <?php endif; ?>
										 <?php endif; ?>         
									  </table>																			
                                    </div>
                                </div>
								<?php elseif ($this->_var['form_act'] == 'insert'): ?>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['categoryFile']; ?>：</div>
                                    <div class="label_value">					
									  <table width="100%" align="center" id="documentTitle_table" style="border:none">
										<tr>
										  <td>
											  <a onclick="addCategoryFile(this)" href="javascript:;" class="fl mr10 w20 tc">[+]</a>
											  <label class="fl lh mr10"><?php echo $this->_var['lang']['document_title']; ?></label>
											  <input type="text" value="" size="40" name="document_title[]" class="text" autocomplete="off" />
											  <input type="hidden" value="0" size="40" name="dt_id[]">
										  </td>
										</tr>        
									  </table>																			
                                    </div>
                                </div>								
								<?php endif; ?>								
                                <div class="item">
                                    <div class="label">&nbsp;</div>
                                    <div class="label_value info_btn">
										<input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" id="submitBtn" />
										<input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button button_reset" />
										<input type="hidden" name="act" value="<?php echo $this->_var['form_act']; ?>" />
										<input type="hidden" name="old_cat_name" value="<?php echo $this->_var['cat_info']['cat_name']; ?>" />
										<input type="hidden" name="cat_id" value="<?php echo $this->_var['cat_info']['cat_id']; ?>" />
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
	$(function(){
		//自定义图标
		$("*[ectype=style_icon] input:radio").click(function(){
			if($(this).val() == 'other'){
				$("*[ectype=cat_icon]").removeClass('hide');
			}else{
				$("*[ectype=cat_icon]").addClass('hide');
			}
		})
	
		//表单验证
		$("#submitBtn").click(function(){
			if($("#category_info_form").valid()){
				$("#category_info_form").submit();
			}
		});
		
		jQuery.validator.addMethod("specialchar", function(value, element) {

		  return this.optional(element) || !/[@'\\"#$%&\^*]/.test(value);   
		},("不能包含特殊字符"));
		
		$('#category_info_form').validate({
			errorPlacement:function(error, element){
				var error_div = element.parents('div.label_value').find('div.form_prompt');
				element.parents('div.label_value').find(".notic").hide();
				error_div.append(error);
			},
			rules:{
				cat_name :{
					required : true,
					specialchar:""
				},
				grade :{
					min : 0,
					max : 10
				}
			},
			messages:{
				cat_name:{
					 required : '<i class="icon icon-exclamation-sign"></i>'+catname_empty
				},
				grade:{
					 min : '<i class="icon icon-exclamation-sign"></i>' + grade_min_0,
					 max : '<i class="icon icon-exclamation-sign"></i>' + grade_max_10
				}
			}			
		});
	});
    
    /**
     * 新增一个筛选属性
     */
    function addFilterAttr(obj)
	{
		var obj = $(obj);
		var parent = obj.parents("*[ectype='item']");
		var clone = parent.clone();
		clone.find("[ectype='operation']")
		.attr("onclick",'removeFilterAttr(this)')
		.html("[-]");

		parent.after(clone);
	}

    
    /**
     * 删除一个筛选属性
     */
    function removeFilterAttr(obj)
	{
		var obj = $(obj);
		var parent = obj.parents("*[ectype='item']");
		parent.remove();
	}
    
    //ecmoban模板堂 --zhuo start
    
    //判断选择的分类是否是顶级分类，如果是则可用 类目证件
    function get_cat_parent_val(f,lev){
        var cat_alias_name = document.getElementById("cat_alias_name");
        var title_list = document.getElementsByName("document_title[]");
        var cat_parent_id = f + "_" + Number(lev - 1);
        
        var arr = new Array();
        var str = new String(cat_parent_id);
        var arr = str.split("_");
        var sf = Number(arr[0]);
        var slevel = Number(arr[1]);
    
        catList(sf, lev);
    
        for(i=0; i<title_list.length; i++){
            if(sf != 0){
                title_list[i].disabled = true;
                title_list[i].value = '';
                cat_alias_name.disabled = true;
                cat_alias_name.value = '';
                
            }else{
				//顶级分类为0
                title_list[i].disabled = false;
                cat_alias_name.disabled = false;
            }	
        }
    }
    /**
       * 添加类目证件
       */
      function addCategoryFile(obj)
      {  
         var title_list = document.getElementsByName("document_title[]");
         var catParent = document.getElementById('category_id').value; 
    
         if(catParent != 0){
             alert(category_top_use_null);
    
             for(i=0; i<title_list.length; i++){
                 title_list[i].value = '';
             }
             
             return false;
        }
          
        var src      = obj.parentNode.parentNode;
        var tbl      = document.getElementById('documentTitle_table');
    
        var row  = tbl.insertRow(tbl.rows.length);
        var cell = row.insertCell(-1);
        cell.innerHTML = src.cells[0].innerHTML.replace(/(.*)(addCategoryFile)(.*)(\[)(\+)/i, "$1removeCategoryFile$3$4-");
    
        title_list[title_list.length-1].value = "";
      }
    
      /**
       * 删除类目证件
       */
      function removeCategoryFile(obj,dt_id)
      {
          if(dt_id > 0){
           if (confirm(is_delete_info)){
               <?php if ($this->_var['cat_id'] > 0): ?>
               location.href = 'category.php?act=title_remove&dt_id=' + dt_id + '&cat_id=' + <?php echo $this->_var['cat_id']; ?>;  
               <?php endif; ?>
           }
          }else{
              var row = rowindex(obj.parentNode.parentNode);
              var tbl = document.getElementById('documentTitle_table');
        
              tbl.deleteRow(row);
          }
      }
    //ecmoban模板堂 --zhuo end
    
    //-->
    
    //顶级分类页模板 by wu
    $(document).ready(function(){
        $("[name='is_top_style']").click(function(){
            if($(this).attr('value')==1)
            {
                $("[name='top_style_tpl']").parents('.item').show();
                //$("[name='cat_icon']").parents('.item').show();
            }
            else
            {
                $("[name='top_style_tpl']").parents('.item').hide();
                //$("[name='cat_icon']").parents('.item').hide();
            }
        })
    })
    
    function delete_icon(cat_id)
    {
        $.ajax({
            type:'get',
            url:'category.php',
            data:'act=delete_icon&cat_id='+cat_id,
            dataType:'json',
            success:function(data){
                if(data.error==1)
                {	
                    location.reload();
                }
                if(data.error==0)
                {	
                    alert(delete_fail);
                }			
            }
        })
    }
    
    // 分类分级 by qin
    function catList(val, level)
    {
        var cat_parent_id = val;
        Ajax.call('goods.php?is_ajax=1&act=sel_cat', 'cat_id='+cat_parent_id+'&cat_level='+level, catListResponse, 'GET', 'JSON');
    }
    
    function catListResponse(result)
    {
        document.getElementById('cat_parent_id').value = result.parent_id + "_" + Number(result.cat_level - 1);  
        if (result.error == '1' && result.message != '')
        {
            alert(result.message);
            return;
        }
        var response = result.content;
        var cat_level = result.cat_level; // 分类级别， 1为顶级分类
        for(var i=cat_level;i<10;i++)
        {
            $("#cat_list"+Number(i+1)).remove();
        }
        if(response)
        {
            $("#cat_list"+cat_level).after(response);
        }
        return;
    }
	
	
	var arr = new Array();
	var sel_filter_attr = "<?php echo $this->_var['lang']['sel_filter_attr']; ?>";
	<?php $_from = $this->_var['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('att_cat_id', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['att_cat_id'] => $this->_var['val']):
?>
		arr[<?php echo $this->_var['att_cat_id']; ?>] = new Array();
		<?php $_from = $this->_var['val']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('i', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['i'] => $this->_var['item']):
?>
		  <?php $_from = $this->_var['item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('attr_id', 'attr_val');if (count($_from)):
    foreach ($_from AS $this->_var['attr_id'] => $this->_var['attr_val']):
?>
			arr[<?php echo $this->_var['att_cat_id']; ?>][<?php echo $this->_var['i']; ?>] = ["<?php echo $this->_var['attr_val']; ?>", <?php echo $this->_var['attr_id']; ?>];
		  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	
	//修改 by wu
	function changeCat(obj)
	{
		var obj = $(obj);
		var key = obj.data('value');
		
		if(arr[key]){
			var tArr = arr[key];
			var target = obj.parents(".imitate_select").next().find("ul");
			target.find("li:gt(0)").remove();
			for(var i=0; i<tArr.length; i++){
				var line = "<li><a href='javascript:;' data-value='"+tArr[i][1]+"' class='ftx-01'>"+tArr[i][0]+"</a></li>";
				target.append(line);
			}
		}
	}
	
	//属性分类筛选出属性类型
	$.divselect("*[ectype='typeCatSelect']","*[ectype='typeCatVal']",function(obj){
		var level = obj.data('level'),
            cat = obj.data("cat"),
			val = obj.data("value");

		get_childcat(obj,2);
	});
    </script>
	
</body>
</html>
