<?php
$_MH = getUidData($table['s_mbrid'],$uid);
$_MH = array_merge(getDbData($table['s_mbrdata'],"memberuid='".$_MH['uid']."'",'*'),$_MH);
?>




[RESULT:

<div onmousedown="showMemberLayer();">
<?php if($selPos=='r'):?>
<div style="width:1px;height:1px;position:absolute;"><img src="<?php echo $g['img_core']?>/_public/arr_left.gif" alt="" style="position:relative;width:8px;height:13px;top:30px;left:-8px;" /></div>
<?php else:?>
<div style="width:1px;height:1px;position:absolute;"><img src="<?php echo $g['img_core']?>/_public/arr_right.gif" alt="" style="position:relative;width:8px;height:13px;top:30px;left:310px;" /></div>
<?php endif?>
<div style="width:1px;height:1px;position:absolute;"><img src="<?php echo $g['img_core']?>/_public/ico_x_01.gif" alt="" title="닫기" style="marign:10px;cursor:pointer;position:relative;top:10px;left:285px;" onclick="mbrclick=false;closeMemberLayer();" /></div>
<div id="mbrlivebox">

	<div class="rnote">
		<div class="rbox">
		<div class="xl">
			<div><img src="<?php echo $g['s']?>/_var/simbol/180.<?php echo is_file($g['path_var'].'simbol/180.'.$_MH['photo'])?$_MH['photo']:'0.gif'?>" width="100" alt="" /></div>
		</div>
		<div class="xr">
			<div class="tt"><?php echo $_MH['nic']?>님</div>
			<div class="info">
			가입일 : <?php echo getDateFormat($_MH['d_regis'],'Y.m.d')?> (<?php echo -getRemainDate($_MH['d_regis'])?>일전)<br /> 
			마지막접속 : <?php echo getDateFormat($_MH['last_log'],'Y.m.d')?> (<?php echo -getRemainDate($_MH['last_log'])?>일전)<br />
			포인트 : <?php echo number_format($_MH['point'])?> , 레벨 : <?php echo $_MH['level']?>
			</div>

			<div class="btnbox">
			<?php if($my['uid']):?>
			<?php if($my['uid']==$_MH['uid']):?>
			<a class="btnGray01 plusBlue filter"><i><s>Follow</s></i></a>
			<?php else:?>
			<?php $ISF = getDbData($table['s_friend'],'my_mbruid='.$my['uid'].' and by_mbruid='.$_MH['uid'],'uid')?>
			<?php if($ISF['uid']):?>
			<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=member&amp;a=friend_unfollow&amp;fuid=<?php echo $ISF['uid']?>&amp;mbruid=<?php echo $_MH['uid']?>" class="btnGray01 plusBlue" onclick="return hrefCheck(this,true,'정말로 Unfollow 하시겠습니까?');"><i><s>Unfollow</s></i></a>
			<?php else:?>
			<?php $ISF = getDbData($table['s_friend'],'my_mbruid='.$_MH['uid'].' and by_mbruid='.$my['uid'],'uid')?>
			<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=member&amp;a=friend_follow&amp;fuid=<?php echo $ISF['uid']?>&amp;mbruid=<?php echo $_MH['uid']?>" class="btnGray01 plusBlue" onclick="return hrefCheck(this,true,'정말로 Follow 하시겠습니까?');"><i><s>Follow</s></i></a>
			<?php endif?>
			<?php endif?>

			<img src="<?php echo $g['img_core']?>/_public/btn_msg.gif" alt="메세지" class="hand" onclick="getLayerBox('<?php echo $g['s']?>/?r=<?php echo $r?>&system=popup.papersend&iframe=Y&type=send&rcvmbr=<?php echo $_MH['uid']?>','메세지 보내기',300,270,event,true,'b');" />
			<?php else:?>
			<a class="btnGray01 plusBlue filter"><i><s>Follow</s></i></a>
			<img src="<?php echo $g['img_core']?>/_public/btn_msg.gif" alt="메세지" class="filter" />
			<?php endif?>
			<img src="<?php echo $g['img_core']?>/_public/btn_tool.gif" alt="SNS" class="hand" onclick="getLayerBox('<?php echo $g['s']?>/?r=<?php echo $r?>&system=popup.sns&iframe=Y&rcvmbr=<?php echo $_MH['uid']?>','소셜 네트워크',300,150,event,true,'b');" />
		</div>


		</div>
		<div class="clear"></div>
		</div>
	</div>



	<ul id="mymbrlayertab" class="contTap">
	<li class="on ls" onclick="hubTab('post','mbrLayerBox','<?php echo $_MH['uid']?>',this);"><span>게시물</span></li>
	<li onclick="hubTab('comment','mbrLayerBox','<?php echo $_MH['uid']?>',this);"><span>댓글</span></li>
	</ul>
	<div class="clear"></div>
	
	<div id="mbrLayerBox" class="cont">

		<ul class="xrecent1">
		<?php $_RCD=getDbArray($table['bbsdata'],'site='.$s.' and mbruid='.$_MH['uid'],'*','gid','asc',10,1)?>
		<?php while($_R=db_fetch_array($_RCD)):?>
		<?php $_B=getUidData($table['bbslist'],$_R['bbs'])?>
		<?php $_L=getOverTime($date['totime'],$_R['d_regis'])?>
		<li>
		<a href="<?php echo getPostLink($_R)?>" class="sbj">
		<?php echo $_R['subject']?>
		<?php if($_R['comment']):?> <span class="comment">(<?php echo $_R['comment']?><?php if($_R['oneline']):?>+<?php echo $_R['oneline']?><?php endif?>)</span><?php endif?>
		</a>
		<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;m=bbs&amp;bid=<?php echo $_B['id']?>" class="link"><?php echo $_B['name']?></a>에서
		<?php echo $_L[1]<3?$_L[0].$lang['sys']['time'][$_L[1]].'전':getDateFormat($_R['d_regis'],'Y.m.d ')?>에 남김<?php if($_R['comment']):?><span class="comment"> , 댓글 <?php echo $_R['comment']?><?php if($_R['oneline']):?>+<?php echo $_R['oneline']?><?php endif?>개 있음</span><?php endif?>

		</li>
		<?php endwhile?>
		<?php if(!db_num_rows($_RCD)):?>
		<li class="none">작성한 게시글이 없습니다.</li>
		<?php endif?>
		</ul>

	</div>
</div>
</div>

<style type="text/css">
#mbrlivebox {overflow:hidden;padding:0 10px 10px 10px;}
#mbrlivebox .rnote {padding:10px 0 5px 0;}
#mbrlivebox .rnote .rbox {padding:0 0 10px 0;}
#mbrlivebox .rnote .rbox .xl {width:100px;float:left;}
#mbrlivebox .rnote .rbox .xl div {width:100px;height:100px;overflow:hidden;}
#mbrlivebox .rnote .rbox .xr {width:180px;float:left;margin-left:10px;color:#656565;font-size:11px;font-family:dotum;letter-spacing:-1px;}
#mbrlivebox .rnote .rbox .xr a {}
#mbrlivebox .rnote .rbox .xr .tt {color:#3A5A95;font-weight:bold;font-size:12px;padding-bottom:8px;display:inline-block;}
#mbrlivebox .rnote .rbox .xr .info {line-height:150%;}
#mbrlivebox .rnote .rbox .xr .btnbox {padding-top:5px}
#mbrlivebox .rnote .rbox .xr .btnbox .btnGray01 {width:90px;float:left;margin-right:5px;}

#mbrlivebox .memberpic {padding:10px 0 30px 0;}
#mbrlivebox .memberpic span {display:block;color:#c0c0c0;line-height:140%;font-size:11px;font-family:dotum;}

#mbrlivebox .contTap {list-style-type:none;margin:0;padding:0;width:292px;height:28px;border-bottom:#BFBFBF solid 1px;}
#mbrlivebox .contTap li {position:relative;top:-1px;float:left;text-align:center;height:27px;padding:0 10px 0 10px;margin:0 0 0 2px;background:#E1E5F1;border:#E1E5F1 solid 1px;cursor:pointer;}
#mbrlivebox .contTap li span {display:block;padding-top:8px;font-weight:bold;font-size:11px;font-family:dotum;color:#3B5995;}
#mbrlivebox .contTap .on {height:28px;border-top:#BFBFBF solid 1px;border-right:#BFBFBF solid 1px;border-bottom:#fff solid 1px;border-left:#BFBFBF solid 1px;background:#fff;}
#mbrlivebox .contTap .on span {color:#333;}
#mbrlivebox .contTap .ls {margin-left:0;}


#mbrLayerShowHide {height:7px;border-top:#c0c0c0 solid 1px;background:#F0F1F1;text-align:center;cursor:pointer;}
#mbrLayerShowHide img {margin-top:2px;}
#mbrLayerShowHide:hover {background:#dfdfdf;}

#mbrlivebox .cont {position:relative;margin:5px 0 0 0;height:280px;overflow-x:hidden;overflow-y:auto;}
#mbrlivebox .cont .xrecent1 {list-style-type:none;padding:10px 0 20px 0;margin:0;}
#mbrlivebox .cont .xrecent1 li {padding:4px 0 18px 18px;margin:0 0 0 5px;background:url('<?php echo $g['img_core']?>/_public/ico_doc.gif') left 4px no-repeat;line-height:130%;font-size:11px;font-family:;color:#999;}
#mbrlivebox .cont .xrecent1 li a {display:block;padding-bottom:5px;font-weight:bold;font-family:dotum;font-size:12px;color:#3C5899;}
#mbrlivebox .cont .xrecent1 li a .dsbj {margin-left:1px;}
#mbrlivebox .cont .xrecent1 li a .dpoint {display:inline-block;background:#F3574A;color:#ffffff;font-weight:normal;font-size:11px;font-family:dotum;padding:3px 2px 0 2px;margin-left:53px;}
#mbrlivebox .cont .xrecent1 li a .comment {color:#FF6F05;font-size:11px;font-family:arial;letter-spacing:-1px;}
#mbrlivebox .cont .xrecent1 li a:hover {text-decoration:underline;}
#mbrlivebox .cont .xrecent1 li .link {display:inline;font-weight:normal;font-size:11px;font-family:dotum;color:#999;}
#mbrlivebox .cont .xrecent1 li .link:hover {text-decoration:underline;}
#mbrlivebox .cont .xrecent1 li .product {display:inline;font-weight:normal;color:#999;font-family:;font-size:11px;}
#mbrlivebox .cont .xrecent1 li .product:hover {text-decoration:underline;}
#mbrlivebox .cont .xrecent1 .none {padding:10px 0 18px 0;margin:0;background:url('');line-height:130%;font-size:11px;font-family:dotum;color:#999;border-bottom:#efefef solid 1px;}
</style>
:RESULT]

