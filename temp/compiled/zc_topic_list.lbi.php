<?php if ($this->_var['topic_list']): ?>
<?php $_from = $this->_var['topic_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'topic');if (count($_from)):
    foreach ($_from AS $this->_var['topic']):
?>
<div class="topicArea" id="topicArea">
	<div class="topicBlock clearfix" id="topicBlock_<?php echo $this->_var['topic']['topic_id']; ?>">
		<div class="head picPr">
			<img src="<?php if ($this->_var['topic']['user_picture']): ?><?php echo $this->_var['topic']['user_picture']; ?><?php else: ?>themes/<?php echo $GLOBALS['_CFG']['template']; ?>/images/no-img_mid_.jpg<?php endif; ?>" alt="" height="56" width="55">
			<em class="picPrem3"></em>
		</div>
		<div class="topicCont">
			<a name="topicAnchor_<?php echo $this->_var['topic']['topic_id']; ?>" id="topicAnchor_<?php echo $this->_var['topic']['topic_id']; ?>"></a>
			<h6><strong><?php echo $this->_var['topic']['user_name']; ?></strong><span class="time"><?php echo $this->_var['topic']['time_past']; ?></span></h6>
			<p><?php echo $this->_var['topic']['topic_content']; ?></p>
			<div class="commentArea">
				<div class="title">
					<a class="replay r-close" href="javascript:open_area(this,<?php echo $this->_var['topic']['topic_id']; ?>,1,<?php echo $this->_var['topic']['topic_id']; ?>);" id="replyBtn_<?php echo $this->_var['topic']['topic_id']; ?>"><?php echo $this->_var['lang']['message_type']['6']; ?>(<span><?php echo $this->_var['topic']['child_topic_num']; ?></span>)</a>
				</div>
				<div class="commentBlock" id="commentBlock__<?php echo $this->_var['topic']['topic_id']; ?>"></div>
				<div id="commentBlockPage__<?php echo $this->_var['topic']['topic_id']; ?>" class="topicmore" type="1" style="display:none;"><?php echo $this->_var['lang']['zc_see_content']; ?></div>
			</div>
		</div>
		<?php if ($this->_var['topic']['child_topic_num'] > 0): ?>
		<div class="topic-reply">
			<?php $_from = $this->_var['topic']['child_topic']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
			<div class="topic-reply-item">
				<div class="topic-reply-img">
					<img src="<?php if ($this->_var['child']['user_picture']): ?><?php echo $this->_var['child']['user_picture']; ?><?php else: ?>themes/<?php echo $GLOBALS['_CFG']['template']; ?>/images/no-img_mid_.jpg<?php endif; ?>"/>
				</div>
				<div class="topic-reply-content">
					<p><span class="topic-reply-sp1" id="topic_user_<?php echo $this->_var['child']['topic_id']; ?>"><?php echo $this->_var['child']['user_name']; ?><?php if ($this->_var['child']['reply_user']): ?> <?php echo $this->_var['lang']['reply_comment']; ?> <?php echo $this->_var['child']['reply_user']; ?><?php endif; ?>：</span><?php echo $this->_var['child']['topic_content']; ?></p>
					<p class="topic-reply-sp1"><?php echo $this->_var['child']['time_past']; ?><a href="javascript:open_area(this,<?php echo $this->_var['topic']['topic_id']; ?>,2,<?php echo $this->_var['child']['topic_id']; ?>);"><?php echo $this->_var['lang']['reply_comment']; ?></a></p>
				</div>
			</div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
		<?php endif; ?>
		<div class="topic-info-area" id="" data-topicid="<?php echo $this->_var['topic']['topic_id']; ?>" data-type="" data-parentid="">
			<textarea onkeyup="check_words_num(this,'checkReplyWord_<?php echo $this->_var['topic']['topic_id']; ?>')"></textarea>
			<p><?php echo $this->_var['lang']['input_number_desc']; ?><span id="checkReplyWord_<?php echo $this->_var['topic']['topic_id']; ?>">140</span><?php echo $this->_var['lang']['zi_zc']; ?></p>
			<input type="button" value="<?php echo $this->_var['lang']['submit_goods']; ?>" onclick="post_topic(this)"/>
		</div>
	</div>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<div class="zhoucou_page">
	<ul class="fr mr20">
		<?php if ($this->_var['pager']['page_prev']): ?><li class="up_page"><a href="javascript:get_topic_list(<?php echo $this->_var['zcid']; ?>,<?php echo $this->_var['prev_page']; ?>);"><?php echo $this->_var['lang']['page_prev']; ?></a></li><?php endif; ?>
		<?php if ($this->_var['pager']['page_count'] > $this->_var['prev_page']): ?><li class="page_cur"><a href="javascript:get_topic_list(<?php echo $this->_var['zcid']; ?>,<?php echo $this->_var['curr_page']; ?>);"><?php echo $this->_var['curr_page']; ?></a></li><?php endif; ?>
		<?php if ($this->_var['pager']['page_count'] > $this->_var['curr_page']): ?><li class="page_default"><a href="javascript:get_topic_list(<?php echo $this->_var['zcid']; ?>,<?php echo $this->_var['next_page']; ?>);"><?php echo $this->_var['next_page']; ?></a></li><?php endif; ?>
		<?php if ($this->_var['pager']['page_count'] > $this->_var['next_page']): ?><li class="page_default"><a href="javascript:get_topic_list(<?php echo $this->_var['zcid']; ?>,<?php echo $this->_var['third_page']; ?>);"><?php echo $this->_var['third_page']; ?></a></li><?php endif; ?>
		<?php if ($this->_var['pager']['page_next']): ?><li class="up_page"><a href="javascript:get_topic_list(<?php echo $this->_var['zcid']; ?>,<?php echo $this->_var['next_page']; ?>);"><?php echo $this->_var['lang']['page_next']; ?></a></li><?php endif; ?>
	</ul>
</div>
<?php endif; ?>