<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<?php echo $this->fetch('library/js_languages_new.lbi'); ?>
<link rel="stylesheet" type="text/css" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/css/other/crowdfunding.css" />
<link rel="stylesheet" type="text/css" href="js/perfect-scrollbar/perfect-scrollbar.min.css" />
</head>
<body class="page-header">
<?php echo $this->fetch('library/page_header_common.lbi'); ?>
	
    <?php if ($this->_var['action'] == 'default'): ?>
    <div class="z_container">
        <div class="w_c banner_c">
            <div class="wrap_c">
				<?php 
$k = array (
  'name' => 'get_adv_child',
  'ad_arr' => $this->_var['zc_index_banner'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
            </div>
            <div class="ban_nav"><ul></ul></div>
            <a class="btn_Left" href="javascript:;"></a>
            <a class="btn_Right" href="javascript:;"></a>
        </div>
        <div class="z_main">
            <div class="z_mod_tit">
                <i class="icon"></i>
                <h2 class="font20"><?php echo $this->_var['lang']['Boutique_project']; ?></h2>
                <div class="search">
                    <div class="searchInput">
                        <input type="text" class="searchtext s-placeholder" id="w" placeholder="<?php echo $this->_var['lang']['Keyword_search']; ?>">
                        <a href="javascript:;" class="searchbtn" id='sousuo'><?php echo $this->_var['lang']['search']; ?></a>
                    </div>
                    <span class="line"></span>
                    <span class="pro-more">
                        <a target="_blank" href="crowdfunding.php?act=xm"><?php echo $this->_var['lang']['more_projects']; ?> &gt;</a>
                    </span>
                </div>
            </div>
            <div class="query-list">
                <div class="attr">
                    <div class="a-key"><?php echo $this->_var['lang']['category']; ?>：</div>
                    <div class="a-values">
                        <div class="v-option" style="display: none;">
                            <b></b><span><?php echo $this->_var['lang']['more']; ?></span>
                        </div>
                        <div class="v-fold v-list">
                            <ul class="f-list" id="parent_catagory">
                                <li class="current"><a name="parentId" href="javascript:;" code="0"><?php echo $this->_var['lang']['project_all']; ?></a></li>
                                <?php $_from = $this->_var['cate_one']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                <li><a name="parentId" href="javascript:;" code="<?php echo $this->_var['item']['cat_id']; ?>"><?php echo $this->_var['item']['cat_name']; ?></a></li>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </ul>
                        </div>
                        <div class="v-second-list">
                            <?php $_from = $this->_var['cate_two']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'res');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['res']):
?>
                                <ul class="s-list">
                                    <?php $_from = $this->_var['res']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <li><a name="category" parentid="<?php echo $this->_var['key']; ?>" code="<?php echo $this->_var['item']['cat_id']; ?>" href="javascript:;"><?php echo $this->_var['item']['cat_name']; ?></a></li>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </ul>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </div>
                    </div>
                </div>
                <div class="attr">
                    <div class="a-key"><?php echo $this->_var['lang']['sort']; ?>：</div>
                    <div class="a-values">
                        <div class="v-fold v-order">
                            <ul class="f-list" code="zhtj" id="sort">
                                <li class="current">
                                    <a name="sort" code="zhtj" href="javascript:;"><?php echo $this->_var['lang']['Comprehensive_rec']; ?></a>
                                </li>
                                <li>
                                    <a name="sort" code="zxsx" href="javascript:;"><?php echo $this->_var['lang']['on_line_new']; ?></a>
                                </li>
                                <li>
                                    <a name="sort" code="jezg" href="javascript:;"><?php echo $this->_var['lang']['Maximum_amount']; ?></a>
                                </li>
                                <li>
                                    <a name="sort" code="zczd" href="javascript:;"><?php echo $this->_var['lang']['Maximum_Support']; ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="data-list" id="projectlist">
            	<?php if ($this->_var['zc_arr']): ?>
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
                <?php else: ?>
               		<div class="no_records">
						<i class="no_icon_two"></i>
						<div class="no_info no_info_line">
							<h3><?php echo $this->_var['lang']['information_null']; ?></h3>
							<div class="no_btn">
								<a href="index.php" class="btn sc-redBg-btn"><?php echo $this->_var['lang']['back_home']; ?></a>
							</div>
						</div>
					</div>
            	<?php endif; ?>
            </div>
            
            
			<?php if ($this->_var['gengduo'] > 5): ?>
			<div class="data-more" id="data-more"><?php echo $this->_var['lang']['see_more']; ?><span class="sim"></span></div>
			<?php endif; ?>
        </div>
        <div class="z_sidebar w264 mt20">
            <div class="White_c">
                <div class="z_mod_tit">
                    <i class="icon"></i>
                    <h2 class="font18"><?php echo $this->_var['lang']['zx_Recommend']; ?></h2>
                </div>
                <div id="winners">
				  <?php $_from = $this->_var['sp_zc_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'one');if (count($_from)):
    foreach ($_from AS $this->_var['one']):
?>
				  <div class="sp-zc-info">					
					<img src="<?php echo $this->_var['one']['title_img']; ?>" width="250" style="margin:7px;">
                    <a href="crowdfunding.php?act=detail&id=<?php echo $this->_var['one']['id']; ?>" target="_blank"><?php echo $this->_var['one']['title']; ?></a>					
				  </div>	
				  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
            </div>
        </div>
    </div>
    <?php echo $this->smarty_insert_scripts(array('files'=>'jquery.SuperSlide.2.1.1.js,common.js,utils.js,compare.js,parabola.js,shopping_flow.js')); ?>
	<script type="text/javascript">
	$(".banner_c").slide({titCell:".ban_nav ul",mainCell:".wrap_c ul",effect:"left",autoPlay:false,autoPage:true,scroll:1,vis:1,prevCell:".btn_Left",nextCell:".btn_Right"});

    $('#parent_catagory li').on('click',function(){
        $('.s-list a').removeClass('curr');
        var code = $(this).find('a').attr('code');
        var wenzi = $.trim($('#w').val());
        if(code==0){
            $.post('crowdfunding.php?act=quanbu',{code:code,wenzi:wenzi},function(data){
                $('#projectlist').remove();
                $('#data-more').remove();
                $('.z_main').append(data);
            },'json');
        }else{
            $.post('crowdfunding.php?act=cate',{code:code,wenzi:wenzi},function(data){
                $('#projectlist').remove();
                $('#data-more').remove();
                $('.z_main').append(data);
            },'json');
        }
    });

    $('.s-list a').on('click',function(){
        var code = $(this).attr('code');
        var wenzi = $.trim($('#w').val());
        $(this).parent().siblings().find('a').removeClass('curr');
        $(this).addClass('curr');
        $.post('crowdfunding.php?act=cate_child',{code:code,wenzi:wenzi},function(data){
            $('#projectlist').remove();
            $('#data-more').remove();
            $('.z_main').append(data);
        },'json');
    })

    $('body').on('click','#data-more',function(){
        var wenzi = $.trim($('#w').val());
        var pid = $('#parent_catagory').find('li[class=current]').children('a').attr('code');
        var tid = $('.s-list').find('a[class=curr]').attr('code');
        var len = $('#projectlist').find('div[class=Module_c]').length;

        if(tid){
            $.post('crowdfunding.php?act=gengduo_tid',{id:tid,len:len,wenzi:wenzi},function(data){
                $('#projectlist').append(data);
                var zx_tig = $('#zx_tig').attr('zx_tig');
                if(zx_tig<=0){
                    $('#data-more').hide();
                }
                $('#zx_tig').remove();
            },'json');
        }else{
            if(pid==0){
                $.post('crowdfunding.php?act=gengduo_pid_zero',{id:pid,len:len,wenzi:wenzi},function(data){
                    $('#projectlist').append(data);
                    var zx_tig = $('#zx_tig').attr('zx_tig');
                    if(zx_tig<=0){
                        $('#data-more').hide();
                    }
                    $('#zx_tig').remove();
                },'json');
            }else{
                $.post('crowdfunding.php?act=gengduo_pid',{id:pid,len:len,wenzi:wenzi},function(data){
                    $('#projectlist').append(data);
                    var zx_tig = $('#zx_tig').attr('zx_tig');
                    if(zx_tig<=0){
                        $('#data-more').hide();
                    }
                    $('#zx_tig').remove();
                },'json');
            }
        }
    })

    $('body').on('click','#sort li',function(){
        var wenzi = $.trim($('#w').val());
        var sig = $(this).find('a').attr('code');
        var pid = $('#parent_catagory').find('li[class=current]').children('a').attr('code');
        var tid = $('.s-list').find('a[class=curr]').attr('code');
        var len = $('#projectlist').find('div[class=Module_c]').length;

        if(tid){
            $.post('crowdfunding.php?act=paixu_tid',{id:tid,len:len,sig:sig,wenzi:wenzi},function(data){
                $('#projectlist').remove();
                $('#data-more').remove();
                $('.z_main').append(data);
            },'json');
        }else{
            if(pid==0){
                $.post('crowdfunding.php?act=paixu_pid_zero',{id:pid,len:len,sig:sig,wenzi:wenzi},function(data){
                    $('#projectlist').remove();
                    $('#data-more').remove();
                    $('.z_main').append(data);
                },'json');
            }else{
                $.post('crowdfunding.php?act=paixu_pid',{id:pid,len:len,sig:sig,wenzi:wenzi},function(data){
                    $('#projectlist').remove();
                    $('#data-more').remove();
                    $('.z_main').append(data);
                },'json');
            }

        }
        
    })

    $('#sousuo').on('click',function(){
        var wenzi = $.trim($('#w').val());
        var sig = $('#sort').find('li[class=current]').find('a').attr('code');
        var pid = $('#parent_catagory').find('li[class=current]').children('a').attr('code');
        var tid = $('.s-list').find('a[class=curr]').attr('code');
        var len = $('#projectlist').find('div[class=Module_c]').length;
        if(tid){
            $.post('crowdfunding.php?act=paixu_tid',{id:tid,len:len,sig:sig,wenzi:wenzi},function(data){
                $('#projectlist').remove();
                $('#data-more').remove();
                $('.z_main').append(data);
            },'json');
        }else{
            if(pid==0){
                $.post('crowdfunding.php?act=paixu_pid_zero',{id:pid,len:len,sig:sig,wenzi:wenzi},function(data){
                    $('#projectlist').remove();
                    $('#data-more').remove();
                    $('.z_main').append(data);
                },'json');
            }else{
                $.post('crowdfunding.php?act=paixu_pid',{id:pid,len:len,sig:sig,wenzi:wenzi},function(data){
                    $('#projectlist').remove();
                    $('#data-more').remove();
                    $('.z_main').append(data);
                },'json');
            }
        }

    })
	</script>	
	<?php endif; ?>
	
	
	
    <?php if ($this->_var['action'] == 'detail'): ?>
    <div class="detail w1200 w">
        <div class="project clearfix">
        	<div class="project_wrap">
            	<div class="project-img"><i class="zc-icon <?php if ($this->_var['zhongchou']['result'] == 0): ?>zc-green-ing<?php elseif ($this->_var['zhongchou']['result'] == 1): ?>zc-grey-sb<?php elseif ($this->_var['zhongchou']['result'] == 2): ?>zc-violet-cg<?php endif; ?>"></i><img src="<?php echo $this->_var['zhongchou']['title_img']; ?>" width="790" height="400" /></div>
            	<div class="project-introduce">
                	<p class="p-title"><?php echo $this->_var['zhongchou']['title']; ?></p>
                    <p class="p-have"><?php echo $this->_var['lang']['Raise']; ?></p>
                    <p class="p-num"><span>￥</span><?php echo $this->_var['zhongchou']['join_money']; ?></p>
                    <div class="p-bar">
                        <div style="width:<?php if ($this->_var['zhongchou']['baifen_bi'] > 100): ?>100<?php else: ?><?php echo $this->_var['zhongchou']['baifen_bi']; ?><?php endif; ?>%" class="p-bar-green"></div>
                    </div>
                    <p class="p-progress">
                        <span class="fl green"><?php echo $this->_var['lang']['Current_progress']; ?><?php echo $this->_var['zhongchou']['baifen_bi']; ?>%</span><span class="fr"><?php echo $this->_var['zong_zhichi']; ?><?php echo $this->_var['lang']['Supporter']; ?></span>
                    </p>
                    <p class="p-target" id="projectMessage"><?php echo $this->_var['lang']['project_Prompt_one']; ?> <span class="f_red"><?php echo $this->_var['zhongchou']['zw_end_time']; ?> </span><?php echo $this->_var['lang']['project_Prompt_two']; ?> <span class="f_red"><i>￥</i><?php echo $this->_var['zhongchou']['amount']; ?></span><?php echo $this->_var['lang']['project_Prompt_three']; ?><?php if ($this->_var['zhongchou']['zc_status'] == 1): ?><?php echo $this->_var['lang']['remaining']; ?><span class="f_red"> <?php echo $this->_var['zhongchou']['shenyu_time']; ?></span><?php echo $this->_var['lang']['day']; ?>！<?php endif; ?></p>
                    <p class="p-btns">
                        <a id="a_focus" href="javascript:;" class="p-btn follow" onclick="hotClick(this,<?php echo $_GET['id']; ?>,1)" data-focus_status="<?php echo $this->_var['focus_status']; ?>"><span id="focus"><?php if ($this->_var['focus_status'] == 1): ?><?php echo $this->_var['lang']['already']; ?><?php endif; ?><?php echo $this->_var['lang']['follow']; ?></span><span class="num" id="focusCount">(<?php echo $this->_var['zhongchou']['focus_num']; ?>)</span></a>
                        <a id="a_prais" href="javascript:;" class="p-btn not-praise" onclick="hotClick(this,<?php echo $_GET['id']; ?>,2)" data-prais_status="<?php echo $this->_var['prais_status']; ?>"><span id="prais"><?php if ($this->_var['prais_status'] == 1): ?><?php echo $this->_var['lang']['already']; ?><?php endif; ?><?php echo $this->_var['lang']['Fabulous']; ?></span><span class="num" id="praisCount">(<?php echo $this->_var['zhongchou']['prais_num']; ?>)</span></a>
                    </p>
                    <p class="p-share"><?php echo $this->_var['lang']['Share_to']; ?></p>
                    <ul class="p-list">
                    	<li><a target="_blank" href="http://service.weibo.com/share/share.php?url=<?php echo $this->_var['share_url']; ?>&title=<?php echo $this->_var['share_title']; ?>&pic=<?php echo $this->_var['share_img']; ?>" class="i-sina"></a></li>
                    	<li><a target="_blank" href="http://share.v.t.qq.com/index.php?c=share&a=index&url=<?php echo $this->_var['share_url']; ?>&title=<?php echo $this->_var['share_title']; ?>&pics=<?php echo $this->_var['share_img']; ?>" class="i-weibo"></a></li>
                    	<li><a target="_blank" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php echo $this->_var['share_url']; ?>&title=<?php echo $this->_var['share_title']; ?>&pics=<?php echo $this->_var['share_img']; ?>" class="i-zoom"></a></li>
                        <li><a target="_blank" href="http://www.douban.com/share/service?image=<?php echo $this->_var['share_url']; ?>&href=<?php echo $this->_var['share_url']; ?>&text=<?php echo $this->_var['share_title']; ?>" class="i-dou"></a></li>
                        <li><a target="_blank" href="http://widget.renren.com/dialog/share?resourceUrl=<?php echo $this->_var['share_url']; ?>&images=<?php echo $this->_var['share_img']; ?>&title=<?php echo $this->_var['share_title']; ?>" class="i-renren"></a></li>
                        <li>
                        	<a class="i-wechart" href="javascript:void(0);"></a>
                            <div class="code" style="display: none;">
                                <span class="code-close"></span>
                                <img class="code-img" src="<?php echo $this->_var['weixin_img_url']; ?>">
                                <p class="code-p"><?php echo $this->_var['lang']['smfx_WeChat']; ?></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="wrap-details">
            	<div class="details-l">
                	<div class="tab-bg">
                    	<div class="tab-wrap" id="tabWrap">
                        	<div class="tab-name current-now"><?php echo $this->_var['lang']['Project_Home']; ?></div>
                            <div id="qaBtn" class="tab-name"><?php echo $this->_var['lang']['project_debriefing']; ?><span class="tab-bubble"><?php echo $this->_var['zc_evolve_list_num']; ?></span></div>
                            <div id="topicBtn" class="tab-name"><?php echo $this->_var['lang']['conversation']; ?><span class="tab-bubble"><?php echo $this->_var['topic_num']; ?></span></div>
                            <div id="supporterBtn" class="tab-name"><?php echo $this->_var['lang']['Supporter']; ?><span class="tab-bubble"><?php echo $this->_var['backer_num']; ?></span></div>
                            <div class="clear"></div>
                            <div class="tab-line"></div>
                        </div>
                    </div>
                    <div class="tab-body" id="menu_con">
                        <div class="tab_cont tab-current">
                            <div class="tab-img-group">
                            	<br>
                                <p>
                                	<?php if ($this->_var['zhongchou']['details']): ?>
                                    	<?php echo $this->_var['zhongchou']['details']; ?>
                                    <?php else: ?>
                                    	<?php if ($this->_var['zhongchou']['img']): ?>
                                        <?php $_from = $this->_var['zhongchou']['img']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'img');if (count($_from)):
    foreach ($_from AS $this->_var['img']):
?>
                                        	<img src="<?php echo $this->_var['img']; ?>" />
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                        <div class="tab_cont">
                            <div class="zc-dev-box" id="qaProgress" style="border-bottom: none;">
                                <div class="zc-d-a-tips"><?php echo $this->_var['lang']['project_Record']; ?></div>
                                <?php if ($this->_var['zc_evolve_list'] [ 0 ]): ?>
                                <div class="zc_evolve">
                                        <?php $_from = $this->_var['zc_evolve_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vo');if (count($_from)):
    foreach ($_from AS $this->_var['vo']):
?>
                                        <div class="zc_evolve_list">
                                            <div class="pro-detail">
                                                <span class="pro-point"></span>
                                                <?php if ($this->_var['vo'] [ 'pro-day' ] == 0): ?>
                                                <span class="pro-day"><?php echo $this->_var['lang']['Today']; ?></span>
                                                <?php else: ?>
                                                <span class="pro-day"><?php echo $this->_var['vo']['pro-day']; ?><?php echo $this->_var['lang']['Days_ago']; ?></span>
                                                <?php endif; ?>
                                                <p><?php echo $this->_var['vo']['progress']; ?></p>
                                            </div>
                                            <div class="pro-img">
                                                <ul class="pro-img-ul">
                                                    <li class="pro-img-li">
														<?php if ($this->_var['vo'] [ 'img' ]): ?>
                                                        <?php $_from = $this->_var['vo']['img']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vo_img');if (count($_from)):
    foreach ($_from AS $this->_var['vo_img']):
?>
                                                            <?php if ($this->_var['vo_img'] != './'): ?>
                                                                <img src="<?php echo $this->_var['vo_img']; ?>" alt="" width="80" height="80">
                                                            <?php endif; ?>
                                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
														<?php endif; ?>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                <?php else: ?>
                                <p style="font-size: 26px;color: #ccc;margin-top: 30px;"><?php echo $this->_var['lang']['Progress_null']; ?></p>
                                <?php endif; ?>
                                <div class="zc-d-c-more" id="zc-d-c-more" style="display: none;">
                                    <a href="#" clstag="jr|keycount|zc_detail|zc_zd_ckxq"><?php echo $this->_var['lang']['couponstype_view']; ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab_cont" id="topicList">
                            <div class="topicArea">
                                <div class="publishBlock">
                                    <div class="zc-s-q-tit"><?php echo $this->_var['lang']['on_input']; ?><span class="moreWord" id="topicMoreWord">140</span><?php echo $this->_var['lang']['word']; ?></div>
                                    <div class="zc-s-q-cont">
                                        <textarea name="zc-submitTextarea" class="zc-submitTextarea" node-type="zc-submitTextarea" id="publishTopic" onkeyup="check_words_num(this,'topicMoreWord')"></textarea>
                                    </div>
                                    <div class="zc-s-q-foot">
                                        <div class="zc-sq-oprate">
                                            <div class="zc-sqo-submit" style="display: block;" id="login">
                                                <input type="button" value="<?php echo $this->_var['lang']['lang_crowd']; ?>" class="common-btn" clstag="jr|keycount|zc_detail|zc_htfbht" data-url="crowdfunding.php?act=detail&id=<?php echo $this->_var['id']; ?>" id="repyTopBtn" style="cursor:pointer;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="topic_list">
                                <?php echo $this->_var['topic_list']; ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab_cont">
                            <div id="backer_list">
                            <?php if ($this->_var['backer_list']): ?>
                            	<?php echo $this->_var['backer_list']; ?>
                            <?php else: ?>
                            	<p style="font-size: 26px;color: #ccc;margin-top: 30px; padding-bottom: 30px;"><?php echo $this->_var['lang']['no_supporter']; ?></p>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="details-r">
                	<div class="box-promoters">
                    	<div class="common-title"><?php echo $this->_var['lang']['project_Promoter']; ?></div>
                        <div class="promoters clearfix">
                        	<div class="promoters-img"><img height="70" width="70" src="<?php echo $this->_var['init']['img']; ?>" alt=""></div>
                            <div class="promoters-detail">
                            	<div class="promoters-name">
                                	<span class="fl"><?php echo $this->_var['init']['name']; ?></span>
                                    <i class="ico-crown">
                                    	<div class="alt"></div>
                                        <?php $_from = $this->_var['init']['logo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'logo');if (count($_from)):
    foreach ($_from AS $this->_var['logo']):
?>
                                            <img src='<?php echo $this->_var['logo']['img']; ?>' title='<?php echo $this->_var['logo']['logo_name']; ?>'>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </i>
                                </div>
                                <div class="promoters-title"><?php echo $this->_var['init']['intro']; ?></div>
                                <div class="promoters-num">
                                    <div class="fl start"><span><?php echo $this->_var['lang']['Launch']; ?></span><span class="num"><?php echo $this->_var['init']['start_count']; ?></span></div>
                                    <div class="line"></div>
                                    <div class="fl"><span><?php echo $this->_var['lang']['Support']; ?></span><span class="num"><?php echo $this->_var['zong_zhichi']; ?></span></div>
                                </div>
                                <div class="promoters-btns">
                                	<!--<a href="javascript:;" id="msgBtn">发送私信</a>-->
                                    
                                    <?php if ($this->_var['shop_information']['is_dsc']): ?>
                                    <a id="IM" onclick="openWin(this)" href="javascript:;" goods_id="<?php echo $this->_var['goods']['goods_id']; ?>" class="seller-btn"><i class="icon"></i><?php echo $this->_var['lang']['Contact_us']; ?></a>
                                    <?php else: ?>
                                        <?php if ($this->_var['basic_info']['kf_type'] == 1): ?>
                                            <a href="http://www.taobao.com/webww/ww.php?ver=3&touid=<?php echo $this->_var['basic_info']['kf_ww']; ?>&siteid=cntaobao&status=1&charset=utf-8" class="seller-btn" target="_blank"><i class="icon"></i><?php echo $this->_var['lang']['con_cus_service']; ?></a>
                                        <?php else: ?>
                                            <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_var['basic_info']['kf_qq']; ?>&site=qq&menu=yes" class="seller-btn" target="_blank"><i class="icon"></i><?php echo $this->_var['lang']['con_cus_service']; ?></a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $_from = $this->_var['goods_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                    <div class="box-grade">
                    	<div class="common-title">
                        	<div class="t-price <?php if ($this->_var['item']['shenyu_ren'] == 0): ?>t-delete<?php endif; ?>">￥<span><?php echo $this->_var['item']['price']; ?></span></div>
							<?php if ($this->_var['item']['shenyu_ren'] == 0): ?>
                            <div class="t-full"></div>
                            <div class="t-arrow"></div>
							<?php endif; ?>
                            <div class="t-people"><span><?php echo $this->_var['item']['backer_num']; ?></span><?php echo $this->_var['lang']['bit_support']; ?></div>
                            <div class="clear"></div>
                        </div>
                        <div class="box-content" <?php if ($this->_var['item']['shenyu_ren'] == 0): ?>style="display:none;"<?php endif; ?>>
                        	
                        	<div class="box-limit">
							<?php if ($this->_var['item']['limit'] == '-1'): ?>
                                <span class="limit-num"><?php echo $this->_var['lang']['Infinite_amount']; ?></span>
							<?php else: ?>	
                                <span class="limit-num"><?php echo $this->_var['lang']['Quota']; ?> <span><?php echo $this->_var['item']['limit']; ?></span><?php echo $this->_var['lang']['bit']; ?> | <?php echo $this->_var['lang']['remaining']; ?> <span><?php echo $this->_var['item']['shenyu_ren']; ?></span><?php echo $this->_var['lang']['bit']; ?></span>
							<?php endif; ?>
							</div>
                            <p class="box-intro"><?php echo $this->_var['item']['content']; ?></p>
                            <div class="box-imglist">
                            	<ul>
                                	<li><img class="alertPic img-s" src="<?php echo $this->_var['item']['img']; ?>" width="80"></li>
                                </ul>
                            </div>
                            <p class="box-item"><?php echo $this->_var['lang']['shipping_fee']; ?>：<span class="font-b"><?php if ($this->_var['item']['shipping_fee'] == 0): ?><?php echo $this->_var['lang']['Free_shipping']; ?><?php else: ?>￥<?php echo $this->_var['item']['shipping_fee']; ?><?php endif; ?></span></p>
                            <p class="box-item"><?php echo $this->_var['lang']['zc_Prompt_one']; ?>：<span class="font-b"><?php echo $this->_var['lang']['zc_Prompt_two']; ?><span class="font-red"><?php echo $this->_var['item']['return_time']; ?></span><?php echo $this->_var['lang']['Days']; ?></span></p>
                            <p class="box-btn">
                            	<?php if ($this->_var['zhongchou']['zc_status'] == 0): ?>
                                <button type="button" class="common-btn" disabled="true"><?php echo $this->_var['lang']['Coming_soon']; ?></button>
                                <?php elseif ($this->_var['zhongchou']['zc_status'] == 1): ?>
									<?php if ($this->_var['item']['shenyu_ren'] > '0' || $this->_var['item']['limit'] == '-1'): ?>
									<button type="button" class="common-btn" onclick="zc_goods(this)" gid="<?php echo $this->_var['item']['id']; ?>"><?php echo $this->_var['lang']['Support']; ?>￥<?php echo $this->_var['item']['price']; ?></button>
									<?php else: ?>
									<button type="button" class="common-btn-unuse" onclick="" gid="<?php echo $this->_var['item']['id']; ?>"><?php echo $this->_var['lang']['Support']; ?>￥<?php echo $this->_var['item']['price']; ?></button>
									<?php endif; ?>
                                <?php else: ?>
                                <button type="button" class="common-btn-unuse" disabled="true"><?php echo $this->_var['lang']['project_end']; ?></button>
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    <div class="box-grade">
                    	<div class="common-title">
                            <div class="t-price"><?php echo $this->_var['lang']['Risk_description']; ?></div>
                        </div>
                        <div class="box-content">
                        	<p class="box-intro mt20 mb20"><?php echo $this->_var['zhongchou']['risk_instruction']; ?></p>
                        </div>
                    </div>
                    <div class="box-grade">
                    	<div class="common-title">
                            <div class="t-price"><?php echo $this->_var['lang']['history']; ?></div>
                            <div class="color-a5 t-hands"><a href="javascript:delete_zc_history()"><?php echo $this->_var['lang']['zc_clear']; ?></a></div>
                            <div class="clear"></div>
                        </div>
                        <div class="box-content">
                        	<ul class="box-recent-list">
							<?php $_from = $this->_var['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                            	<li><a href="crowdfunding.php?act=detail&id=<?php echo $this->_var['list']['id']; ?>"><div class="recent-img"><img src="<?php echo $this->_var['list']['title_img']; ?>" /></div><div class="recent-p"><p><?php echo $this->_var['list']['title']; ?></p></div></a></li>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <a href="javascript:void(0);" onclick="fn_prev()" class="goPages goPages-pre"></a>
    <a href="javascript:void(0);" onclick="fn_next()" class="goPages goPages-next"></a>
    <script type="text/javascript">
		var zc_goods = function(obj){
			var gid = $(obj).attr('gid');
			window.location.href = 'crowdfunding.php?act=checkout&gid='+gid;
		}
		
		//清空浏览历史 by wu
		function delete_zc_history()
		{
			$.ajax({
				type:'get',
				url:'crowdfunding.php',
				data:'act=delete_zc_history',
				dataType:'json',
				success:function(data){
					if(data.error == 1)
					{
						$(".box-recent-list").html('');
					}
				}				
			});
		}
		
		//字数验证 by wu
		function check_words_num(obj,select_jsId)
		{
			var words=$(obj).val();
			var num=words.length;
			if(num<=140)
			{
				$("#"+select_jsId).html(140-num);
			}
			else
			{
				$(obj).val(words.substr(0,140));
			}
		}
	
		//打开输入框 by wu
		function open_area(obj,topic_id,type,parent_id)
		{
			var area=$(".topic-info-area[data-topicid="+topic_id+"]");
			area.attr("data-type",type);
			area.attr("data-parentid",parent_id);
			area.toggle();
			if(type==2)
			{
				var user_name=$("#topic_user_"+parent_id).html().replace("：","");
				name_arr=user_name.split(json_languages.reply_comment);
				area.find("textarea").attr("placeholder",json_languages.reply_comment+name_arr[0]);
			}
			else
			{
				area.find("textarea").attr("placeholder","");
			}
		}
		
		//评论回复 by wu | type 0:众筹,1:话题,2:回复
		function post_topic(obj)
		{
			var topic_id=$(obj).parent("div").data("topicid");
			var type=$(obj).parent("div").data("type");
			var parent_id=$(obj).parent("div").data("parentid");
			var topic_content=$(obj).siblings("textarea").val();
			if(topic_content=="")
			{	
				pbDialog(json_languages.Pleas_content,"",0);
				return;
			}
			$.ajax({
				type:'get',
				url:'crowdfunding.php',
				data:'act=post_topic&topic_id='+topic_id+'&type='+type+'&parent_id='+parent_id+'&topic_content='+topic_content,
				dataType:'json',
				success:post_success				
			})	
		}
	
		//发布话题 by wu
		$("#repyTopBtn").click(function(){
			var topic_content=$("#publishTopic").val();
			if(topic_content=="")
			{	
				pbDialog(json_languages.Pleas_content,"",0);
				return;
			}
			else
			{
				$.ajax({
					type:'post',
					url:'crowdfunding.php',
					data:'act=submit_topic&zcid=<?php echo $_GET['id']; ?>&topic_content='+topic_content,
					dataType:'json',
					success:post_success
				})
			}
		})
		
		function post_success(data){
			if(data.error==9)
			{
				var back_url=$("#repyTopBtn").data("url");
				$.notLogin("get_ajax_content.php?act=get_login_dialog",back_url);	
				//刷新列表
				get_topic_list(<?php echo $_GET['id']; ?>,1);
				//数量更新
				//var topic_num=parseInt($("#topicBtn").find(".tab-bubble").html());
				$("#topicBtn").find(".tab-bubble").html(data.content.zc_topic_num);
			}
			if(data.error==1)
			{
				//alert(data.message);
				pbDialog(data.message,'',0,'','',135);
				//刷新列表
				get_topic_list(<?php echo $_GET['id']; ?>,1);
				//数量更新
				//var topic_num=parseInt($("#topicBtn").find(".tab-bubble").html());
				$("#topicBtn").find(".tab-bubble").html(data.content.zc_topic_num);
			}
			
			if(data.error==8)
			{
				//alert(data.message);
				pbDialog(data.message,'',0,'','',65);
				//刷新列表
				get_topic_list(<?php echo $_GET['id']; ?>,1);
			}			
		}
		
	
		//鼠标点击图片显示二维码 by wu
		$(".i-wechart").click(function(){
			$(this).next().show();
		});
		$(".code-close").click(function(){
			$(this).parents(".code").hide();
		});
		
		//关注点赞 by wu start
		function hotClick(obj,zcid,type)
		{
			var focus_status=$('#a_focus').data('focus_status'); //关注状态
			var prais_status=$('#a_prais').data('prais_status'); //点赞状态
			if((focus_status==0 && type==1) || (prais_status==0 && type==2))
			{
				$.ajax({
					type:'get',
					url:'crowdfunding.php',
					data:'act=statistical&zcid='+zcid+'&type='+type,
					dataType:'json',
					success:function(data){
						if(data.error>0)
						{
							//关注
							if(type==1)
							{
								//只有登陆用户才能关注
								if(data.error==9)
								{
									//alert(data.message);
									window.location.href = 'user.php';
								}
								if(data.error==2 || data.error==3)
								{
									focus_dialog();
									$(obj).find('span').first().html(json_languages.follow_yes);
									if(data.error==2)
									{
										var numObj=$(obj).find('span').eq(1);
										var numVal=numObj.html().match(/\d+/g);
										numObj.html(numObj.html().replace(/\d+/g,parseInt(numVal)+1));
										$('#a_focus').data('focus_status',1);
									}									
								}								
							}	
							//点赞							
							if(type==2)
							{				
								if(data.error==4 || data.error==5)
								{
									$(obj).find('span').first().html(json_languages.Fabulous_yes);
									if(data.error==4)
									{
										var numObj=$(obj).find('span').eq(1);
										var numVal=numObj.html().match(/\d+/g);
										numObj.html(numObj.html().replace(/\d+/g,parseInt(numVal)+1));
										$('#a_prais').data('prais_status',1);  
									}
								}
							}
						}
					}			
				})	
			}			
		}
		//关注点赞 by wu end
		
		//关注成功
		function focus_dialog()
		{		
			var result = json_languages.collect_zc_success;
			var content = '<div class="tip-box icon-box">' +'<span class="warn-icon m-icon"></span>' + '<div class="item-fore">' +'<h3 class="rem ftx-04">'+result+'</h3>' +'</div>' +'</div>';
			pb({
				id:'',
				title:json_languages.follow_zc,
				width:455,
				height:58,
				content:content, 	//调取内容
				drag:false,
				foot:false,
			});
		}
	
        $("#tabWrap .tab-name").click(function(){
			var index = $(this).index();
			var _this = $(this);
			_this.addClass("current-now").siblings(".tab-name").removeClass("current-now");
			_this.siblings(".tab-line").animate({"margin-left":(192*index)},300);
			
			$("#menu_con").find('.tab_cont').eq(index).addClass("tab-current").siblings(".tab_cont").removeClass("tab-current");
		});

        var d_id = "<?php echo $_GET['id']; ?>";
        var n_id = parseInt(d_id)+1;
        var p_id = parseInt(d_id)-1;
        var fn_next = function(){
            window.location.href = './crowdfunding.php?act=detail&id='+n_id;
        }

        var fn_prev = function(){
            window.location.href = './crowdfunding.php?act=detail&id='+p_id;
        }
		
		//展开收起
		$(".t-arrow").on("click",function(){
			if($(this).parents(".box-grade").hasClass("i-box")){
				$(this).parents(".box-grade").removeClass("i-box");
				$(this).parents(".box-grade").find(".box-content").hide();
			}else{
				$(this).parents(".box-grade").addClass("i-box");	
				$(this).parents(".box-grade").find(".box-content").show();
			}
		});
    </script>
	<?php endif; ?>
		
	
	
    <?php if ($this->_var['action'] == 'order'): ?>
    <div class="mt20">
    	<div class="z_container">
        	<div class="order_process">
                <ul>
                    <li class="active">
                        <?php echo $this->_var['lang']['zc_order_input']; ?>
                        <span class="order_behind_arrow order_arrow"></span>
                        <span class="order_ahead_arrow order_arrow"></span>
                    </li>
                    <li>
                        <?php echo $this->_var['lang']['zc_order_confirm']; ?>
                        <span class="order_behind_arrow order_arrow"></span>
                        <span class="order_ahead_arrow order_arrow"></span>
                    </li>
                    <li>
                        <?php echo $this->_var['lang']['payment']; ?>
                        <span class="order_behind_arrow order_arrow"></span>
                        <span class="order_ahead_arrow order_arrow"></span>
                    </li>
                    <li>
                        <?php echo $this->_var['lang']['complete']; ?>
                        <span class="order_behind_arrow order_arrow"></span>
                        <span class="order_ahead_arrow order_arrow"></span>
                    </li>
                </ul>
            </div>
            <div class="module_wrap mt20">
            	<div class="common_tit"><h1 class="common_tit_name"><?php echo $this->_var['g_title']; ?></h1></div>
                <div class="module_con">
                	<div>
                    	<div class="module_item">
                            <dl>
                                <dt><?php echo $this->_var['lang']['Support_amount']; ?>：</dt>
                                <dd><span class="f_red20"><?php echo $this->_var['goods_arr']['price']; ?></span></dd>
                            </dl>
                            <dl>
                                <dt><?php echo $this->_var['lang']['shipping_fee']; ?>：</dt>
                                <dd><?php if ($this->_var['goods_arr']['shipping_fee'] == '0'): ?><span><?php echo $this->_var['lang']['Free_shipping']; ?></span><?php else: ?><?php echo $this->_var['goods_arr']['shipping_fee']; ?><?php endif; ?></dd>
                            </dl>
                            <dl>
                                <dt><?php echo $this->_var['lang']['Return_content']; ?>：</dt>
                                <dd><?php echo $this->_var['goods_arr']['content']; ?></dd>
                            </dl>
                            <dl>
                                <dt><?php echo $this->_var['lang']['zc_invoice']; ?>：</dt>
                                <dd>
                                    <div class="bor_t_li">
                                        <input type="radio" name="invoiceFlag" id="if0" value="0" onclick="changeInvoiceFlag();" checked="checked"> <?php echo $this->_var['lang']['zc_invoice_not']; ?>
                                        <p>
                                            <input type="radio" name="invoiceFlag" id="if1" value="1" onclick="newInvoiceTitle();"> <?php echo $this->_var['lang']['zc_invoice_need']; ?>
                                        </p>
                                    </div>
                                    <div class="new_add pt10" style="display: none;" id="invoiceTitleDetail">
                                        <dl style="padding-left: 62px;">
                                            <dt><span class="f_red">*</span> <?php echo $this->_var['lang']['Invoice_header']; ?>：</dt>
                                            <dd><input name="invoiceTitle" id="_invoiceTitle" type="text" class="inp145" value="<?php echo $this->_var['lang']['personal']; ?>"></dd>
                                        </dl>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt><?php echo $this->_var['lang']['Remarks']; ?>：</dt>
                                <dd><input name="_remarks" id="_remarks" type="text" placeholder="<?php echo $this->_var['lang']['zc_placeholder']; ?>" class="inp_remark"></dd>
                            </dl>
                        </div>
                        <div class="module_item">
                            <dl>
                                <dt><?php echo $this->_var['lang']['Consignee']; ?>：</dt>
                                <dd>
                                    <div class="write_repeat" id="showAddress" style="display: block;"><p><?php echo $this->_var['consignee']['consignee']; ?> <?php if ($this->_var['consignee']['mobile']): ?> <?php echo $this->_var['consignee']['mobile']; ?> <?php else: ?> <?php echo $this->_var['consignee']['tel']; ?> <?php endif; ?> <span style="color: #ff0000;"><?php echo $this->_var['lang']['zc_Remarks_one']; ?></span></p><p><?php if ($this->_var['consignee']['address']): ?> <?php echo $this->_var['consignee']['address']; ?> <?php else: ?> <?php echo $this->_var['b']['province']; ?><?php echo $this->_var['lang']['province']; ?> <?php echo $this->_var['b']['city']; ?><?php echo $this->_var['lang']['city']; ?> <?php echo $this->_var['b']['district']; ?> <?php endif; ?> &nbsp;&nbsp;&nbsp;<a class="f_blue repeat" href="crowdfunding.php?act=consignee&gid=<?php echo $this->_var['goods_arr']['id']; ?>"><?php echo $this->_var['lang']['modify']; ?></a></p></div>
                                </dd>
                        	</dl>
                		</div>
                    </div>
                    <div class="risk_tips">
                        <?php echo $this->_var['lang']['zc_Remarks_two']; ?>
                    </div>
                    <div class="common_button">
                        <form action="crowdfunding.php?act=done" method="post">
                            <input type="hidden" name="country"  value="<?php echo $this->_var['consignee']['country']; ?>">
                            <input type="hidden" name="province" value="<?php echo $this->_var['consignee']['province']; ?>">
                            <input type="hidden" name="city" value="<?php echo $this->_var['consignee']['city']; ?>">
                            <input type="hidden" name="district" value="<?php echo $this->_var['consignee']['district']; ?>">
                            <input type="hidden" name="consignee" value="<?php echo $this->_var['consignee']['consignee']; ?>">
                            <input type="hidden" name="address" value="<?php echo $this->_var['consignee']['address']; ?>">
                            <input type="hidden" name="tel" value="<?php echo $this->_var['consignee']['tel']; ?>">
                            <input type="hidden" name="mobile" value="<?php echo $this->_var['consignee']['mobile']; ?>">
                            <input type="hidden" name="email" value="<?php echo $this->_var['consignee']['email']; ?>">
                            <input type="hidden" name="best_time" value="<?php echo $this->_var['consignee']['best_time']; ?>">
                            <input type="hidden" name="sign_building" value="<?php echo $this->_var['consignee']['sign_building']; ?>">
							<input type="hidden" id='inv_payee' name="inv_payee" value="">
                            <input type="hidden" id='liuyan' name="postscript" value="">
                            <input type="hidden" name="goods_amount" value="<?php echo $this->_var['goods_arr']['price']; ?>">
                            <input type="hidden" name="shipping_fee" value="<?php echo $this->_var['goods_arr']['yunfei']; ?>">
                            <input type="hidden" name="order_amount" value="<?php echo $this->_var['goods_arr']['price']; ?>">
                            <input type="hidden" name="huibao" value="<?php echo $this->_var['goods_arr']['content']; ?>">
                            <input type="hidden" name="g_title" value="<?php echo $this->_var['g_title']; ?>">
                            <input type="hidden" name="xm_id" value="<?php echo $this->_var['goods_arr']['goods_id']; ?>">
                            <input type="hidden" name="gid" value="<?php echo $_GET['gid']; ?>">
                            <input type="submit" id="btn_sub" value="<?php echo $this->_var['lang']['lang_crowd_next_step']; ?>">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<script>
		$('#_remarks').on('blur',function(){
			$('#liuyan').val($(this).val());
		})
		$('#_invoiceTitle').on('blur',function(){
			$('#inv_payee').val($(this).val());
		})		
	</script>
	<?php endif; ?>
		
	
	
    <?php if ($this->_var['action'] == 'checkout'): ?>	
    <div class="mt20">
    	<div class="z_container">
        	<div class="order_process">
                <ul>
                    <li class="active">
                        <?php echo $this->_var['lang']['zc_order_input']; ?>
                        <span class="order_behind_arrow order_arrow"></span>
                        <span class="order_ahead_arrow order_arrow"></span>
                    </li>
                    <li>
                        <?php echo $this->_var['lang']['zc_order_confirm']; ?>
                        <span class="order_behind_arrow order_arrow"></span>
                        <span class="order_ahead_arrow order_arrow"></span>
                    </li>
                    <li>
                        <?php echo $this->_var['lang']['payment']; ?>
                        <span class="order_behind_arrow order_arrow"></span>
                        <span class="order_ahead_arrow order_arrow"></span>
                    </li>
                    <li>
                        <?php echo $this->_var['lang']['complete']; ?>
                        <span class="order_behind_arrow order_arrow"></span>
                        <span class="order_ahead_arrow order_arrow"></span>
                    </li>
                </ul>
            </div>
            <div class="module_wrap mt20">
            	<div class="common_tit"><h1 class="common_tit_name"><?php echo $this->_var['g_title']; ?></h1></div>
                <div class="module_con">
                	<div>
                    	<div class="module_item">
                            <dl>
                                <dt><?php echo $this->_var['lang']['Support_amount']; ?>：</dt>
                                <dd><span class="f_red20">￥<?php echo $this->_var['goods_arr']['price']; ?></span></dd>
                            </dl>
                            <dl>
                                <dt><?php echo $this->_var['lang']['shipping_fee']; ?>：</dt>
                                <dd><?php if ($this->_var['goods_arr']['shipping_fee'] == '0'): ?><span><?php echo $this->_var['lang']['Free_shipping']; ?></span><?php else: ?><?php echo $this->_var['goods_arr']['shipping_fee']; ?><?php endif; ?></dd>
                            </dl>
                            <dl>
                                <dt><?php echo $this->_var['lang']['Return_content']; ?>：</dt>
                                <dd><?php echo $this->_var['goods_arr']['content']; ?></dd>
                            </dl>
                            <dl>
                                <dt><?php echo $this->_var['lang']['zc_invoice']; ?>：</dt>
                                <dd>
                                    <div class="ck-step-cont" id='inv_content'>
                                        <div class="invoice-warp">
                                            <div class="invoice-part">
                                                <span>
                                                    <em class="invoice_type"><?php echo $this->_var['lang']['Ordinary_invoice']; ?></em>
                                                    <em class="inv_payee"><?php echo $this->_var['lang']['personal']; ?></em>
                                                    <em class="inv_content"><?php echo $this->_var['inv_content']; ?></em>
                                                </span>
                                                <a href="javascript:void(0);" class="i-edit" ectype="invEdit" data-value='{"divid":"edit_invoice","url":"ajax_dialog.php?act=edit_invoice&from=crowfunding","title":"<?php echo $this->_var['lang']['Invoice_information']; ?>"}'><?php echo $this->_var['lang']['edit']; ?></a>
                                                <input type="hidden" name="inv_payee" value="<?php echo $this->_var['lang']['personal']; ?>">
                                                <input type="hidden" name="inv_content" value="<?php echo $this->_var['inv_content']; ?>">
                                                <input type="hidden" name="invoice_type" value="0">
												<input type="hidden" name="from" value="crowfunding">
                                                <input type="hidden" name="tax_id" value="">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </dd>
                            </dl>
                            <dl>
                                <dt><?php echo $this->_var['lang']['Remarks']; ?>：</dt>
                                <dd><input name="_remarks" id="_remarks" type="text" placeholder="<?php echo $this->_var['lang']['zc_placeholder']; ?>" class="inp_remark"></dd>
                            </dl>
                        </div>
                        <div class="module_item">
                            <dl>
                                <dt><?php echo $this->_var['lang']['Consignee']; ?>：</dt>
                                <dd>
                                    <div class="write_repeat" id="showAddress">
                                        <span><?php echo $this->_var['consignee']['consignee']; ?></span>
                                        <span><?php if ($this->_var['consignee']['address']): ?><?php echo $this->_var['consignee']['region']; ?>&nbsp;<?php echo $this->_var['consignee']['address']; ?><?php else: ?><?php echo $this->_var['lang']['address_null']; ?><?php endif; ?></span>
                                        <span><?php if ($this->_var['consignee']['mobile']): ?><?php echo $this->_var['consignee']['mobile']; ?><?php else: ?><?php echo $this->_var['consignee']['tel']; ?><?php endif; ?></span>
                                        <span><a class="f_blue repeat" href="javascript:void(0);" id="editRepeat"><?php if ($this->_var['consignee']['address']): ?><?php echo $this->_var['lang']['edit_address']; ?><?php else: ?><?php echo $this->_var['lang']['add_address']; ?><?php endif; ?></a></span>
                                    </div>
                                    <div id="consignee-addr" class="zc_address">
                                        <div class="consignee-addr">
                                            <div class="consignee-cont">
                                                <ul class="ui-switchable-panel-main">
                                                    <?php $_from = $this->_var['user_address']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'address');if (count($_from)):
    foreach ($_from AS $this->_var['address']):
?>
                                                    <li <?php if ($this->_var['consignee']['address_id'] == $this->_var['address']['address_id']): ?>class="item-selected"<?php endif; ?> data-addressid="<?php echo $this->_var['address']['address_id']; ?>">
                                                        <input type="radio" <?php if ($this->_var['consignee']['address_id'] == $this->_var['address']['address_id']): ?>checked="checked"<?php endif; ?> class="ui-radio" name="consignee_radio" value="<?php echo $this->_var['address']['address_id']; ?>" id="radio_<?php echo $this->_var['address']['address_id']; ?>" class="hookbox" />
                                                        <label class="ui-radio-label">
                                                            <div class="name"><?php echo $this->_var['address']['consignee']; ?></div>
                                                            <div class="tel"><?php echo $this->_var['address']['mobile']; ?></div>
                                                            <div class="address">&nbsp; <?php echo $this->_var['address']['region']; ?> &nbsp; <?php echo $this->_var['address']['address']; ?></div>
                                                        </label>
                                                        <div class="op-btns">
                                                            <?php if ($this->_var['user_id'] > 0): ?>
                                                                <a href="javascript:void(0);" class="ftx-05 del-consignee" data-dialog="edit_address" data-id="<?php echo $this->_var['address']['address_id']; ?>"><?php echo $this->_var['lang']['edit']; ?></a>
                                                                <a href="javascript:void(0);" class="ftx-05 del-consignee" data-dialog="del_address" data-id="<?php echo $this->_var['address']['address_id']; ?>" ><?php echo $this->_var['lang']['drop']; ?></a>
                                                            <?php else: ?>
                                                                <a href="javascript:void(0);" class="ftx-05 del-consignee" data-dialog="edit_address"><?php echo $this->_var['lang']['edit']; ?></a>
                                                            <?php endif; ?>
                                                        </div>
                                                    </li>
                                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="address-btns">
                                        	<input id="addNewAddress" class="btn-normal" type="button" value="<?php echo $this->_var['lang']['add_address_zc']; ?>">
                                            <input id="confirmAddress" class="btn-normal" type="button" value="<?php echo $this->_var['lang']['confirm_address_zc']; ?>">
                                        </div>
                                	</div>
                                </dd>
                        	</dl>
                		</div>
                        <div class="module_item">
                        	<dl class="order-prompt">
                            	<dt><?php echo $this->_var['lang']['Risk_description']; ?>：</dt>
                                <?php echo $this->_var['goods_arr']['risk_instruction']; ?>
                            </dl>
                        </div>
                    </div>
                    <div class="common_button" id="common_button" >
                        <form action="crowdfunding.php?act=done" method="post">
                            <input type="hidden" name="country"  value="<?php echo $this->_var['consignee']['country']; ?>">
                            <input type="hidden" name="province" value="<?php echo $this->_var['consignee']['province']; ?>">
                            <input type="hidden" name="city" value="<?php echo $this->_var['consignee']['city']; ?>">
                            <input type="hidden" name="district" value="<?php echo $this->_var['consignee']['district']; ?>">
                            <input type="hidden" name="consignee" value="<?php echo $this->_var['consignee']['consignee']; ?>">
                            <input type="hidden" name="address" value="<?php echo $this->_var['consignee']['address']; ?>">
                            <input type="hidden" name="tel" value="<?php echo $this->_var['consignee']['tel']; ?>">
                            <input type="hidden" name="mobile" value="<?php echo $this->_var['consignee']['mobile']; ?>">
                            <input type="hidden" name="email" value="<?php echo $this->_var['consignee']['email']; ?>">
                            <input type="hidden" name="best_time" value="<?php echo $this->_var['consignee']['best_time']; ?>">
                            <input type="hidden" name="sign_building" value="<?php echo $this->_var['consignee']['sign_building']; ?>">
                            <input type="hidden" id='inv_payee' name="inv_payee" value="">
                            <input type="hidden" id='liuyan' name="postscript" value="">
                            <input type="hidden" name="goods_amount" value="<?php echo $this->_var['goods_arr']['price']; ?>">
                            <input type="hidden" name="shipping_fee" value="<?php echo $this->_var['goods_arr']['yunfei']; ?>">
                            <input type="hidden" name="order_amount" value="<?php echo $this->_var['goods_arr']['price']; ?>">
                            <input type="hidden" name="huibao" value="<?php echo $this->_var['goods_arr']['content']; ?>">
                            <input type="hidden" name="g_title" value="<?php echo $this->_var['g_title']; ?>">
                            <input type="hidden" name="xm_id" value="<?php echo $this->_var['goods_arr']['goods_id']; ?>">
                            <input type="hidden" name="gid" value="<?php echo $_GET['gid']; ?>">
							
							<input type="hidden" name="inv_payee" value="<?php echo $this->_var['lang']['personal']; ?>">
							<input type="hidden" name="inv_content" value="<?php echo $this->_var['inv_content']; ?>">
							<input type="hidden" name="invoice_type" value="0">
							<input type="hidden" name="from" value="crowfunding">
							<input type="hidden" name="tax_id" value="">
							
                            <input type="submit" id="btn_sub" value="下一步">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<script>
		$('#_remarks').on('blur',function(){
			$('#liuyan').val($(this).val());
		});
		$('#_invoiceTitle').on('blur',function(){
			$('#inv_payee').val($(this).val());
		})		
		function newInvoiceTitle(){
			$("#invoiceTitleDetail").show();
			$("#invoiceFlag").val('1');
		}
		function changeInvoiceFlag(){
			$("#invoiceTitleDetail").hide();
			$("#invoiceFlag").val('0');
		}
		
		$(document).on("click",".consignee-cont li",function(){
			var address_id = $(this).data('addressid');
			$(this).addClass("item-selected").siblings().removeClass("item-selected");
			zc_Consignee(address_id);
		});
		
		function zc_Consignee(address_id){
			var consignee = document.getElementById('radio_' + address_id);
			if(consignee){
				consignee.checked = true;
			}
		}
		
		$(document).on("click","#editRepeat",function(){
			var zc_address = $(".zc_address");
			if(zc_address.is(":hidden")){
				zc_address.show();
			}else{
				zc_address.hide();
			}
		});
		
		$(document).on('click',"#confirmAddress",function(){
			var gid = <?php echo $_GET['gid']; ?>;
			var obj = document.getElementsByName("consignee_radio");
			for(var i=0; i<obj.length; i ++){
				if(obj[i].checked){
					Ajax.call('crowdfunding.php?act=confirmAddress','consignee_id= '+obj[i].value +'&gid=' + gid , confirmAddressResponse, 'POST','JSON');	
				}
			}
		});
		
		function confirmAddressResponse(result){
			if(result.error == 0){
				$("#showAddress").html(result.content);
				$("#common_button").html(result.common);
				$(".zc_address").css('display','none');
				
			}
		};
		
		$(document).on('click',"#addNewAddress",function(){
			var gid = <?php echo $_GET['gid']; ?>;
			Ajax.call('crowdfunding.php?act=add_Consignee','gid=' + gid , consigneeResponse, 'POST','JSON');	
		});
		 
		//编辑删除地址
		$(document).on('click',"*[data-dialog='edit_address']",function(){
			var id = $(this).data("id");
			Ajax.call('crowdfunding.php?act=add_Consignee','address_id='+id , consigneeResponse, 'POST','JSON');
		});

		function consigneeResponse(result){
			 pb({
				 id:"zcDig",
				 title:json_languages.edit_address_zc,
                 width:720,
                 height:200,
                 content:result.content,
                 drag:false,
                 foot:false
			 });
		 };		
		
		$(document).on('click',"*[data-dialog='del_address']",function(){
			var gid = <?php echo $_GET['gid']; ?>;
			var address_id = $(this).data("id");
			pb({
				 id:"zcdelDig",
				 title:json_languages.drop_address_zc,
                 width:310,
                 height:30,
                 content:json_languages.drop_address_zc,
                 drag:false,
				 ok_title: json_languages.determine,
				 cl_title: json_languages.cancel,
				 onOk:function(){
					Ajax.call('crowdfunding.php?act=delete_Consignee','address_id='+ address_id +'&gid=' + gid , del_ConsigneeResponse, 'POST','JSON'); 
				 }
			 });
		});
		
		function del_ConsigneeResponse(result){

		
			$('#consignee-addr').html(result.content);

			$('#common_button').html(result.common);
			
			$('#zcdelDig').remove();
			
			$('#pb-mask').remove();
		
			if(result.error == 2){
				
				window.location.href='crowdfunding.php?act=checkout&gid=' + result.gid;
				
			}
		}
	</script>
	<?php endif; ?>
			
	
	
    <?php if ($this->_var['action'] == 'done'): ?>	
    <div class="mt20">
    	<div class="z_container">
        	<div class="order_process">
                <ul>
                    <li class="active">
                        <?php echo $this->_var['lang']['zc_order_input']; ?>
                        <span class="order_behind_arrow order_arrow"></span>
                        <span class="order_ahead_arrow order_arrow"></span>
                    </li>
                    <li>
                        <?php echo $this->_var['lang']['zc_order_confirm']; ?>
                        <span class="order_behind_arrow order_arrow"></span>
                        <span class="order_ahead_arrow order_arrow"></span>
                    </li>
                    <li>
                        <?php echo $this->_var['lang']['payment']; ?>
                        <span class="order_behind_arrow order_arrow"></span>
                        <span class="order_ahead_arrow order_arrow"></span>
                    </li>
                    <li>
                        <?php echo $this->_var['lang']['complete']; ?>
                        <span class="order_behind_arrow order_arrow"></span>
                        <span class="order_ahead_arrow order_arrow"></span>
                    </li>
                </ul>
            </div>
            <div class="module_wrap mt20">
            	<div class="common_tit"><h1 class="common_tit_name icon_ok"><?php echo $this->_var['lang']['zc_order_success']; ?>：<?php echo $this->_var['g_title']; ?></h1></div>
                <div class="module_con">
                    <div class="module_item">
                        <dl>
                            <dt><?php echo $this->_var['lang']['order_number']; ?>：</dt>
                            <dd><?php echo $this->_var['order']['order_sn']; ?></dd>
                        </dl>
                        <dl>
                            <dt><?php echo $this->_var['lang']['Contacts']; ?>：</dt>
                            <dd><?php echo $this->_var['order']['consignee']; ?></dd>
                        </dl>
                        <dl>
                            <dt><?php echo $this->_var['lang']['Contact_information']; ?>：</dt>
                            <dd><?php if ($this->_var['order']['mobile']): ?> <?php echo $this->_var['order']['mobile']; ?> <?php else: ?> <?php echo $this->_var['order']['tel']; ?> <?php endif; ?></dd>
                        </dl>
                        <dl>
                            <dt><?php echo $this->_var['lang']['Remarks']; ?>：</dt>
                            <dd><?php echo $this->_var['order']['postscript']; ?></dd>
                        </dl>
                    </div>
                    <div class="module_item">
                        <dl>
                            <dt><?php echo $this->_var['lang']['consignee_info']; ?>：</dt>
                            <dd>
                                <div class="write_repeat">
                                    <span><?php echo $this->_var['order']['consignee']; ?></span>
                                    <span><?php if ($this->_var['order']['address']): ?><?php echo $this->_var['order']['address']; ?><?php else: ?><?php echo $this->_var['b']['province']; ?>省 <?php echo $this->_var['b']['city']; ?>市 <?php echo $this->_var['b']['district']; ?> <?php endif; ?></span>
                                    <span><?php if ($this->_var['order']['mobile']): ?><?php echo $this->_var['order']['mobile']; ?><?php else: ?><?php echo $this->_var['order']['tel']; ?><?php endif; ?></span>
                                </div>
                            </dd>
        
                        </dl>
                    </div>
                    <table border="0" cellspacing="0" cellpadding="0" class="table01 mt20">
                        <thead>
                        <tr><th><?php echo $this->_var['lang']['project_name']; ?></th>
                        <th><?php echo $this->_var['lang']['Return_content']; ?></th>
                        <th><?php echo $this->_var['lang']['Support_amount']; ?></th>
                        <th><?php echo $this->_var['lang']['shipping_fee']; ?></th>
                        </tr></thead>
                        <tbody>
                        <tr>
                            <td><a target="_blank" href="crowdfunding.php?act=detail&id=<?php echo $this->_var['xm_id']; ?>"><?php echo $this->_var['g_title']; ?></a></td>
                            <td>
                                <div class="default_txt pr">
                                    <div style="width:455px;"><?php echo $this->_var['huibao']; ?></div>
                                </div>
                            </td>
                            <td><span class="f_red">￥<?php echo $this->_var['order']['goods_amount']; ?></span></td>
                            <td>￥<?php echo $this->_var['order']['shipping_fee']; ?></td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="total930">
                        <strong class="f_gery14"><?php echo $this->_var['lang']['Amount_payable']; ?>：</strong><span class="f_red28">￥<?php echo $this->_var['order']['order_amount']; ?></span>
                    </div>
								
                    <div class="common_button" style="width:900px;margin:0 auto;">
                        
                        <div class="pay_more" style="width:900px;">
                            <ul>
                                <?php $_from = $this->_var['pay_online_button']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'vo');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['vo']):
?>
                                <li style="float: left;height:42px; overflow:hidden; margin:5px 10px" order_sn="<?php echo $this->_var['order']['order_sn']; ?>" flag="<?php echo $this->_var['key']; ?>"><?php echo $this->_var['vo']; ?></li>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </ul>
                        </div>
                        	
                    </div>
                </div>
            </div>
        </div>
    </div>
	<script>
		$('#zf').find('input').addClass('btn_zf');
		$('#zf').find('input').val("立即付款");
		
		
		$(function(){
			//微信支付定时查询订单状态 by wanglu
    		checkOrder();

			//微信扫码
			$("[data-type='wxpay']").on("click",function(){
				var content = $("#wxpay_dialog").html();
				pb({
					id: "scanCode",
					title: "",
					width: 716,
					content: content,
					drag: true,
					foot: false,
					cl_cBtn: false,
					cBtn: false
				});
			});
		});
		
		var timer;
		function checkOrder(){
			var pay_name = "<?php echo $this->_var['order']['pay_name']; ?>";
			var pay_status = "<?php echo $this->_var['order']['pay_status']; ?>";
			var url = "flow.php?step=checkorder&order_id=<?php echo $this->_var['order']['order_id']; ?>";
			if(pay_name == "在线支付" && pay_status == 0){
				$.get(url, {}, function(data){
					//已付款
					if(data.code > 0 && data.pay_code == 'wxpay'){
						clearTimeout(timer);
						location.href = "respond.php?code=" + data.pay_code + "&status=1";
					}
				},'json');
			}
			timer = setTimeout("checkOrder()", 5000);
		}
	</script>
	<?php endif; ?>
		

	
    <?php if ($this->_var['action'] == 'consignee'): ?>
	<?php echo $this->fetch('library/page_header_flow.lbi'); ?>
    <div class="flow_warp w">
    
    <script type="text/javascript">
      region.isAdmin = false;
      <?php $_from = $this->_var['lang']['flow_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

      
      onload = function() {
        if (!document.all)
        {
          document.forms['theForm'].reset();
        }
      }
      
    </script>
    
    <?php $_from = $this->_var['consignee_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'consignee');if (count($_from)):
    foreach ($_from AS $this->_var['sn'] => $this->_var['consignee']):
?>
    <form action="crowdfunding.php" method="post" name="theForm" id="theForm" onsubmit="return checkConsignee(this)">
    <?php echo $this->fetch('library/zc_consignee.lbi'); ?>
    </form>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
	<?php endif; ?>
			
	
	
    <?php if ($this->_var['action'] == 'xm'): ?>
    <div class="query-result">
        <div class="query-condition">
            <div class="searchNew">
                <input type="text" class="search-text" id="w" value="" placeholder="<?php echo $this->_var['lang']['Keyword_search_placeholder']; ?>">
                <a href="javascript:;" id="sousuo" class="searchNewbtn"><i class="iconfont icon-search"></i></a>
            </div>
            <div class="query-list">
                <div class="attr">
                    <div class="a-key"><i class="iconfont icon-sort"></i><?php echo $this->_var['lang']['category']; ?>：</div>
                    <div class="a-values">
                        <div class="v-fold v-list">
                            <ul class="f-list f-left" id="parent_catagory">
                                <li class="current"><a href="javascript:;" code="0"><?php echo $this->_var['lang']['all_attribute']; ?></a></li>
                                <?php $_from = $this->_var['cate_one']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <li><a href="javascript:;" code="<?php echo $this->_var['item']['cat_id']; ?>" ><?php echo $this->_var['item']['cat_name']; ?></a></li>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </ul>
                        </div>
                        <div class="v-second-list">
                            <?php $_from = $this->_var['cate_two']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'res');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['res']):
?>
                                <ul class="s-list">
                                    <?php $_from = $this->_var['res']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                    <li><a name="category" parentid="<?php echo $this->_var['key']; ?>" code="<?php echo $this->_var['item']['cat_id']; ?>" href="javascript:;"><?php echo $this->_var['item']['cat_name']; ?></a></li>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </ul>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </div>
                    </div>
                </div>
                <div class="attr">
                    <div class="a-key"><i class="iconfont icon-list"></i><?php echo $this->_var['lang']['sort']; ?>：</div>
                    <div class="a-values">
                        <div class="v-fold v-order">
                            <ul class="f-list" id="sort" code="zhtj">
                                <li class="current">
                                    <a href="javascript:;" code="zhtj"><?php echo $this->_var['lang']['Comprehensive_rec']; ?></a>
                                </li>
                                <li>
                                    <a href="javascript:;" code="zxsx"><?php echo $this->_var['lang']['on_line_new']; ?></a>
                                </li>
                                <li>
                                    <a href="javascript:;" code="jezg"><?php echo $this->_var['lang']['Maximum_amount']; ?></a>
                                </li>
                                <li>
                                    <a href="javascript:;" code="zczd"><?php echo $this->_var['lang']['Maximum_Support']; ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="query-result-outer">
            <?php if ($this->_var['zc_arr']): ?>
            <ul>
                <?php $_from = $this->_var['zc_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                    <li class="item-li">
                        <a target="_blank" href="crowdfunding.php?act=detail&id=<?php echo $this->_var['item']['id']; ?>" class="item-a"><img src="<?php echo $this->_var['item']['title_img']; ?>" width="280" height="220" class="item-img"></a>
                        <h3 class="item-title"><a target="_blank" href="crowdfunding.php?act=detail&id=<?php echo $this->_var['item']['id']; ?>"><?php echo $this->_var['item']['title']; ?></a></h3>
                        <div class="p-outer">
                            <div class="p-bar">
                                <div style="width: <?php echo $this->_var['item']['baifen_bi']; ?>%" class="p-bar-purple"></div>
                            </div>
                        </div>
                        <div class="p-i-infos">
                            <div class="fore1">
                                <p class="num"><?php echo $this->_var['lang']['reached']; ?><span><?php echo $this->_var['item']['baifen_bi']; ?>%</span></p>
                            </div>
                            <div class="fore2">
                                <p class="num"><span>￥<?php echo $this->_var['item']['join_money']; ?></span><?php echo $this->_var['lang']['Raise']; ?></p>
                            </div>
                            <div class="fore3">
                                <p class="num">剩余<span><?php echo $this->_var['item']['shenyu_time']; ?></span><?php echo $this->_var['lang']['day']; ?></p>
                            </div>
                        </div>
                    </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
            <?php else: ?>
            <div class="no_records">
				<i class="no_icon_two"></i>
				<div class="no_info no_info_line">
					<h3><?php echo $this->_var['lang']['information_null']; ?></h3>
					<div class="no_btn">
						<a href="index.php" class="btn sc-redBg-btn"><?php echo $this->_var['lang']['back_home']; ?></a>
					</div>
				</div>
			</div>
            <?php endif; ?>
        </div>
        <?php if ($this->_var['page_arr']): ?>
        <div id="page_div" class="zc_my_pages">
            <a href="javascript:void(0)" class="syy"><?php echo $this->_var['lang']['page_prev']; ?></a>
            <?php $_from = $this->_var['page_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
            <a href="javascript:;"<?php if ($this->_var['key'] == 0): ?> class="current"<?php endif; ?>><?php echo $this->_var['item']; ?></a>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <a href="javascript:;" class="xyy"><?php echo $this->_var['lang']['page_next']; ?></a>
        </div>
        <?php endif; ?>
    </div>
	<script type="text/javascript">
	$('#parent_catagory li').on('click',function(){
		$('.s-list a').removeClass('curr');
		var code = $(this).find('a').attr('code');
		var wenzi = $.trim($('#w').val());
		if(code==0){
			$.post('crowdfunding.php?act=search_quanbu',{code:code,wenzi:wenzi},function(data){
				$('.query-result-outer').remove();
				$('#page_div').remove();
				$('.query-result').append(data);
			},'json');
		}else{
			$.post('crowdfunding.php?act=search_cate',{code:code,wenzi:wenzi},function(data){
				$('.query-result-outer').remove();
				$('#page_div').remove();
				$('.query-result').append(data);
			},'json');
		}
	})

	$('.s-list a').on('click',function(){
		var code = $(this).attr('code');
		var wenzi = $.trim($('#w').val());
		$(this).parent().siblings().find('a').removeClass('curr');
		$(this).addClass('curr');
		$.post('crowdfunding.php?act=search_cate_child',{code:code,wenzi:wenzi},function(data){
			$('.query-result-outer').remove();
			$('#page_div').remove();
			$('.query-result').append(data);
		},'json');
	})

	$('body').on('click','#sort li',function(){
		var wenzi = $.trim($('#w').val());
		var sig = $(this).find('a').attr('code');
		var pid = $('#parent_catagory').find('li[class=current]').children('a').attr('code');
		var tid = $('.s-list').find('a[class=curr]').attr('code');

		if(tid){
			$.post('crowdfunding.php?act=search_paixu_tid',{id:tid,sig:sig,wenzi:wenzi},function(data){
				$('.query-result-outer').remove();
				$('#page_div').remove();
				$('.query-result').append(data);
			},'json');
		}else{
			if(pid==0){
				$.post('crowdfunding.php?act=search_paixu_pid_zero',{id:pid,sig:sig,wenzi:wenzi},function(data){
					$('.query-result-outer').remove();
					$('#page_div').remove();
					$('.query-result').append(data);
				},'json');
			}else{
				$.post('crowdfunding.php?act=search_paixu_pid',{id:pid,sig:sig,wenzi:wenzi},function(data){
					$('.query-result-outer').remove();
					$('#page_div').remove();
					$('.query-result').append(data);
				},'json');
			}
		}
	})


	$('#sousuo').on('click',function(){
		var wenzi = $.trim($('#w').val());
		var sig = $('#sort').find('li[class=current]').find('a').attr('code');
		var pid = $('#parent_catagory').find('li[class=current]').children('a').attr('code');
		var tid = $('.s-list').find('a[class=curr]').attr('code');

		if(tid){
			$.post('crowdfunding.php?act=search_paixu_tid',{id:tid,sig:sig,wenzi:wenzi},function(data){
				$('.query-result-outer').remove();
				$('#page_div').remove();
				$('.query-result').append(data);
			},'json');
		}else{
			if(pid==0){
				$.post('crowdfunding.php?act=search_paixu_pid_zero',{id:pid,sig:sig,wenzi:wenzi},function(data){
					$('.query-result-outer').remove();
					$('#page_div').remove();
					$('.query-result').append(data);
				},'json');
			}else{
				$.post('crowdfunding.php?act=search_paixu_pid',{id:pid,sig:sig,wenzi:wenzi},function(data){
					$('.query-result-outer').remove();
					$('#page_div').remove();
					$('.query-result').append(data);
				},'json');
			}
		}

	})

	$('body').on('click','#page_div a',function(){
		var page = $("#page_div a[class='current']").text();
		var last_page = $('#page_div a').last().prev().text();
		var val = $(this).text();
		var res_page = null;

		if(page==val){
			return false;
		}

		if(page==1 && val==page_prev){
			return false;
		}

		if(page==last_page && val==page_next){
			return false;
		}

		if(val==page_prev){
			res_page = parseInt(page)-1;
		}

		if(val==page_next){
			res_page = parseInt(page)+1;
		}

		if(val!=page_prev && val!=page_next){
			res_page = $(this).text();
		}

		var wenzi = $.trim($('#w').val());
		var sig = $('#sort').find('li[class=current]').find('a').attr('code');
		var pid = $('#parent_catagory').find('li[class=current]').children('a').attr('code');
		var tid = $('.s-list').find('a[class=curr]').attr('code');

		if(tid){
			$.post('crowdfunding.php?act=page_tid',{id:tid,sig:sig,wenzi:wenzi,page:res_page},function(data){
				$('.query-result-outer').remove();
				$('#page_div').remove();
				$('.query-result').append(data);
			},'json');
		}else{
			if(pid==0){
				$.post('crowdfunding.php?act=page_pid_zero',{id:pid,sig:sig,wenzi:wenzi,page:res_page},function(data){
					$('.query-result-outer').remove();
					$('#page_div').remove();
					$('.query-result').append(data);
				},'json');
			}else{
				$.post('crowdfunding.php?act=page_pid',{id:pid,sig:sig,wenzi:wenzi,page:res_page},function(data){
					$('.query-result-outer').remove();
					$('#page_div').remove();
					$('.query-result').append(data);
				},'json');
			}
		}
	});
	</script>

	<?php endif; ?>
		
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/dsc-common.js"></script>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/region.js"></script>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.purebox.js"></script>
	
	<?php echo $this->smarty_insert_scripts(array('files'=>'region.js,utils.js,shopping_flow.js,perfect-scrollbar/perfect-scrollbar.min.js,jquery.SuperSlide.2.1.1.js')); ?>
	<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
