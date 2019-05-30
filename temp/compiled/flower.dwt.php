<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>测试的</title>
 
<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js')); ?>
<script type="text/javascript">
function textaaa()
{
	if(document.getElementById('test')){
		var rec_id=document.getElementById('test').value;
        Ajax.call('flower.php?act=ajax', 'rec_id=' + rec_id, textres, 'GET','JSON'); 
	}
}
 
function textres(result){
	alert(result.content);
}
</script>
</head>
<body>
<input type="text" id="test" value="1688" />
<input type="button" value="按钮"  onclick="textaaa()"/>
</body>
 
</html
