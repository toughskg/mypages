
<div class="widget_tab01">
	<ul class="tab">
	<?php $unique=filterstr(microtime())?>
	<?php for($j=1;$j<=$wdgvar['tabnum'];$j++):?>
	<li id="tabtitle<?php echo $j?>_<?php echo $unique?>"<?php if($j==1):?> class="on"<?php endif?> onclick="tabClick(<?php echo $wdgvar['tabnum']?>,<?php echo $j?>,'<?php echo $unique?>');"><a><?php echo $wdgvar['title'.$j]?></a></li>
	<?php endfor?>
	</ul>

	<div class="tabpost">

	<?php for($j=1;$j<=$wdgvar['tabnum'];$j++):?>

	<ul id="tabpost<?php echo $j?>_<?php echo $unique?>"<?php if($j!=1):?> class="hide"<?php endif?>> 
	<?php $_RCD=getDbArray($table['bbsdata'],'bbs='.$wdgvar['bid'.$j].' and display=1 and site='.$_HS['uid'],'*','gid','asc',$wdgvar['limit'],1)?>
	<?php $ln=0;while($_R=db_fetch_array($_RCD)):?>
	<li>
		<span class="dot">ㆍ</span><a href="<?php echo getPostLink($_R)?>" title="<?php echo $_R[$_HS['nametype']]?>님"><?php echo getStrCut($_R['subject'],$wdgvar['sbjcut'],'')?></a>
		<?php if($_R['comment']):?><span class="comment">[<?php echo $_R['comment']?><?php if($_R['oneline']):?>+<?php echo $_R['oneline']?><?php endif?>]</span><?php endif?>
		<?php if(getNew($_R['d_regis'],24)):?><span class="new">new</span><?php endif?>
	</li> 
	<?php $ln++; endwhile?>
	<?php for($k=$ln;$k<$wdgvar['limit'];$k++):?><li></li><?php endfor?>
	<li class="more"><?php if($wdgvar['link'.$j]):?><a href="<?php echo $wdgvar['link'.$j]?>" title="더보기">more</a><?php endif?></li>
	</ul> 
	<?php endfor?>

	</div>
</div>
