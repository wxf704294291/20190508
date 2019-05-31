
<div class="shopCart-con dsc-cm">
    <a href="wholesale_flow.php">
        <i class="iconfont icon-carts"></i>
        <span>我的进货单</span>
        <em class="count cart_num"><?php echo $this->_var['str']; ?></em>
    </a>
</div>
<div class="dorpdown-layer" ectype="dorpdownLayer">
    <?php if ($this->_var['goods']): ?>
    <div class="settleup-content">
        <div class="mc">
            <ul>
                <?php $_from = $this->_var['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_87355100_1559289395');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_87355100_1559289395']):
        $this->_foreach['goods']['iteration']++;
?>
                <li>		
                    <div class="p-img"><a href="<?php echo $this->_var['goods_0_87355100_1559289395']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods_0_87355100_1559289395']['goods_thumb']; ?>" width="50" height="50" /></a></div>
                    <div class="p-lie">
                    	<div class="p-name"><a href="<?php echo $this->_var['goods_0_87355100_1559289395']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_0_87355100_1559289395']['goods_name']); ?>"><?php echo $this->_var['goods_0_87355100_1559289395']['goods_name']; ?></a></div>
                    	<div class="p-attr">
                            <?php $_from = $this->_var['goods_0_87355100_1559289395']['goods_attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');$this->_foreach['attr'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['attr']['total'] > 0):
    foreach ($_from AS $this->_var['attr']):
        $this->_foreach['attr']['iteration']++;
?>
                            <span class="specItem"><?php echo $this->_var['attr']['attr_name']; ?>:</span>
                            <span class="specItem lastItem"><?php echo $this->_var['attr']['attr_value']; ?></span>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </div>
                    </div>
                    <div class="p-price"><?php echo $this->_var['goods_0_87355100_1559289395']['goods_price']; ?>元&nbsp;×&nbsp;<?php echo $this->_var['goods_0_87355100_1559289395']['goods_number']; ?></div>
                    <div class="p-oper">
                        <a href="javascript:void(0);" onClick="deleteCartGoods(<?php echo $this->_var['goods_0_87355100_1559289395']['rec_id']; ?>,0)" class="remove"><?php echo $this->_var['lang']['drop']; ?></a>
                    </div>
                </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </div>
        <div class="mb">
            <a href="wholesale_flow.php" class="btn-cart">查看进货单</a>
        </div>
    </div>
    <?php else: ?>
    <div class="prompt"><div class="nogoods"><b></b><span><?php echo $this->_var['lang']['goods_null_cart']; ?></span></div></div>
    <?php endif; ?>
</div>

<script type="text/javascript">
function deleteCartGoods(rec_id,index)
{
    Ajax.call('delete_wholesale_cart_goods.php', 'id='+rec_id+'&index='+index, deleteCartGoodsResponse, 'POST', 'JSON');
}

/**
 * 接收返回的信息
 */
function deleteCartGoodsResponse(res)
{
  if (res.error)
  {
    pbDialog(res.err_msg,"",0);
  }
  else if(res.index==1)
  {
    Ajax.call('get_ajax_content.php?act=get_content', 'data_type=cart_list', return_cart_list, 'POST', 'JSON');
  }
  else
  {
        $("#ECS_WHOLESALE_CARTINFO").html(res.content);
        $(".cart_num").html(res.cart_num);
		location.reload();
  }
}

function return_cart_list(result)
{
    $(".cart_num").html(result.cart_num);
    $(".pop_panel").html(result.content);
	
}
</script>