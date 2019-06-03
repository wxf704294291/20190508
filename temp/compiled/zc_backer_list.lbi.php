<?php if ($this->_var['backer_list']): ?>
<div class="pro-support">
	<ul class="item-ul">
		<?php $_from = $this->_var['backer_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'backer');if (count($_from)):
    foreach ($_from AS $this->_var['backer']):
?>
		<li class="item-li">
			<div class="item-img">
				<img width="80" height="80" src="<?php if ($this->_var['backer']['user_picture']): ?><?php echo $this->_var['backer']['user_picture']; ?><?php else: ?>themes/<?php echo $GLOBALS['_CFG']['template']; ?>/images/no-img_mid_.jpg<?php endif; ?>">
				<em class="item-shadow"></em>
			</div>
			<div class="item-detail">
				<p class="item-name" title="<?php echo $this->_var['backer']['user_name']; ?>"><?php echo $this->_var['backer']['user_name']; ?></p>
				<p class="item-support"><?php echo $this->_var['lang']['Support_project']; ?><?php echo $this->_var['backer']['formated_price']; ?><?php echo $this->_var['lang']['yuan']; ?></p>
				<p class="item-num">
                   <!--<span><?php echo $this->_var['lang']['Launch']; ?>：</span>
				   <span class="num"><?php echo $this->_var['backer']['back_num']; ?></span>
                   <span class="line"></span>-->
                   <span><?php echo $this->_var['lang']['Support']; ?>：</span>
                   <span class="num"><?php echo $this->_var['backer']['back_num']; ?></span>
				</p>
			</div>
		</li>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</ul>
</div>
<div class="zhoucou_page">
	<ul class="fr mr20">
		<?php if ($this->_var['pager']['page_prev']): ?><li class="up_page"><a href="javascript:get_backer_list(<?php echo $this->_var['zcid']; ?>,<?php echo $this->_var['prev_page']; ?>);"><?php echo $this->_var['lang']['page_prev']; ?></a></li><?php endif; ?>
		<?php if ($this->_var['pager']['page_count'] > $this->_var['prev_page']): ?><li class="page_cur"><a href="javascript:get_backer_list(<?php echo $this->_var['zcid']; ?>,<?php echo $this->_var['curr_page']; ?>);"><?php echo $this->_var['curr_page']; ?></a></li><?php endif; ?>
		<?php if ($this->_var['pager']['page_count'] > $this->_var['curr_page']): ?><li class="page_default"><a href="javascript:get_backer_list(<?php echo $this->_var['zcid']; ?>,<?php echo $this->_var['next_page']; ?>);"><?php echo $this->_var['next_page']; ?></a></li><?php endif; ?>
		<?php if ($this->_var['pager']['page_count'] > $this->_var['next_page']): ?><li class="page_default"><a href="javascript:get_backer_list(<?php echo $this->_var['zcid']; ?>,<?php echo $this->_var['third_page']; ?>);"><?php echo $this->_var['third_page']; ?></a></li><?php endif; ?>
		<?php if ($this->_var['pager']['page_next']): ?><li class="up_page"><a href="javascript:get_backer_list(<?php echo $this->_var['zcid']; ?>,<?php echo $this->_var['next_page']; ?>);"><?php echo $this->_var['lang']['page_next']; ?></a></li><?php endif; ?>
	</ul>
</div>
<?php else: ?>
<p style="font-size: 26px;color: #ccc;margin-top: 30px;"><?php echo $this->_var['lang']['no_supporter']; ?></p>
<?php endif; ?>
