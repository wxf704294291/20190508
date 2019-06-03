<?php $_from = $this->_var['zc_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
<div class="Module_c">
	<a target="_blank" href="crowdfunding.php?act=detail&id=<?php echo $this->_var['item']['id']; ?>"><img src="<?php echo $this->_var['item']['title_img']; ?>" width="520" height="263" title="" alt=""></a>
	<div class="Module_text">
		<div class="Module_topic">
			<h3><a target="_blank" href="crowdfunding.php?act=detail&id=<?php echo $this->_var['item']['id']; ?>"><?php echo $this->_var['item']['title']; ?></a></h3>
			<p title=<?php echo $this->_var['item']['des']; ?>><?php echo $this->_var['item']['duan_des']; ?></p>
		</div>
		<div class="Module_progress">
			<span><i style="width:<?php if ($this->_var['item']['baifen_bi'] > 100): ?>100<?php else: ?><?php echo $this->_var['item']['baifen_bi']; ?><?php endif; ?>%"></i></span>
			<em class="ing"><?php echo $this->_var['item']['zc_status']; ?></em>
		</div>
		<div class="Module_op">
			<ul>
				<li><p><?php echo $this->_var['item']['baifen_bi']; ?>%</p><span><?php echo $this->_var['lang']['reached']; ?></span></li>
				<li class="gap" style="width:100px;"><p>￥<?php echo $this->_var['item']['join_money']; ?></p><span><?php echo $this->_var['lang']['Raise']; ?></span></li>
				<li class="gap"><p><?php echo $this->_var['item']['shenyu_time']; ?><?php echo $this->_var['lang']['day']; ?></p><span><?php echo $this->_var['lang']['residual_time']; ?></span></li>
			</ul>
		</div>
		<div class="Module_fav">
			<p><span style="margin-right:10px;"><?php echo $this->_var['lang']['Support']; ?>：<?php echo $this->_var['item']['join_num']; ?></span></p>
		</div>
	</div>
	<div class="Module_shadow_wrap">
		<div class="Module_shadow Module_shadow_top"></div>
		<div class="Module_shadow Module_shadow_bottom"></div>
	</div>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<div id='zx_tig' zx_tig="<?php echo $this->_var['zx_tig']; ?>"></div>
