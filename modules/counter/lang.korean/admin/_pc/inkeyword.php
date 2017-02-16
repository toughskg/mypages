<?php 
$SITES = getDbArray($table['s_site'],'','*','gid','asc',0,1);
$year1	= $year1  ? $year1  : substr($date['today'],0,4);
$month1	= $month1 ? $month1 : substr($date['today'],4,2);
$day1	= $day1   ? $day1   : 1;
$year2	= $year2  ? $year2  : substr($date['today'],0,4);
$month2	= $month2 ? $month2 : substr($date['today'],4,2);
$day2	= $day2   ? $day2   : substr($date['today'],6,2);

$p		= $p ? $p : 1;
$recnum	= $recnum && $recnum < 200 ? $recnum : 20;
$sort	= $sort		? $sort		: 'hit';
$orderby= $orderby	? $orderby	: 'desc';

$accountQue = $account ? 'site='.$account.' and ':'';

$_WHERE1= $accountQue.'date >= '.$year1.sprintf('%02d',$month1).sprintf('%02d',$day1).' and date <= '.$year2.sprintf('%02d',$month2).sprintf('%02d',$day2);
$_WHERE2= 'keyword,sum(hit) as hit';
$RCD	= getDbSelect($table['s_inkey'],$_WHERE1.' group by keyword order by '.$sort.' '.$orderby.' limit 0,'.$recnum,$_WHERE2);
?> 



<form name="procForm" action="<?php echo $g['s']?>/" method="get">
<input type="hidden" name="r" value="<?php echo $r?>" />
<input type="hidden" name="m" value="<?php echo $m?>" />
<input type="hidden" name="module" value="<?php echo $module?>" />
<input type="hidden" name="front" value="<?php echo $front?>" />

<div class="sbox">
	<select name="account" class="account" onchange="this.form.submit();">
	<option value="">&nbsp;+ 전체사이트</option>
	<option value="">---------------------------</option>
	<?php while($S = db_fetch_array($SITES)):?>
	<option value="<?php echo $S['uid']?>"<?php if($account==$S['uid']):?> selected="selected"<?php endif?>>ㆍ<?php echo $S['name']?></option>
	<?php endwhile?>
	<?php if(!db_num_rows($SITES)):?>
	<option value="">등록된 사이트가 없습니다.</option>
	<?php endif?>
	</select>
	
	<div>
	<select name="year1">
	<?php for($i=$date['year'];$i>2009;$i--):?><option value="<?php echo $i?>"<?php if($year1==$i):?> selected="selected"<?php endif?>><?php echo $i?>년</option><?php endfor?>
	</select>
	<select name="month1">
	<?php for($i=1;$i<13;$i++):?><option value="<?php echo sprintf('%02d',$i)?>"<?php if($month1==$i):?> selected="selected"<?php endif?>><?php echo sprintf('%02d',$i)?>월</option><?php endfor?>
	</select>
	<select name="day1">
	<?php for($i=1;$i<32;$i++):?><option value="<?php echo sprintf('%02d',$i)?>"<?php if($day1==$i):?> selected="selected"<?php endif?>><?php echo sprintf('%02d',$i)?>일(<?php echo getWeekday(date('w',mktime(0,0,0,$month1,$i,$year1)))?>)</option><?php endfor?>
	</select> ~
	<select name="year2">
	<?php for($i=$date['year'];$i>2009;$i--):?><option value="<?php echo $i?>"<?php if($year2==$i):?> selected="selected"<?php endif?>><?php echo $i?>년</option><?php endfor?>
	</select>
	<select name="month2">
	<?php for($i=1;$i<13;$i++):?><option value="<?php echo sprintf('%02d',$i)?>"<?php if($month2==$i):?> selected="selected"<?php endif?>><?php echo sprintf('%02d',$i)?>월</option><?php endfor?>
	</select>
	<select name="day2">
	<?php for($i=1;$i<32;$i++):?><option value="<?php echo sprintf('%02d',$i)?>"<?php if($day2==$i):?> selected="selected"<?php endif?>><?php echo sprintf('%02d',$i)?>일(<?php echo getWeekday(date('w',mktime(0,0,0,$month2,$i,$year2)))?>)</option><?php endfor?>
	</select>

	<input type="button" class="btngray" value="기간적용" onclick="this.form.submit();" />
	<input type="button" class="btngray" value="어제" onclick="dropDate('<?php echo date('Ymd',mktime(0,0,0,substr($date['today'],4,2),substr($date['today'],6,2)-1,substr($date['today'],0,4)))?>','<?php echo date('Ymd',mktime(0,0,0,substr($date['today'],4,2),substr($date['today'],6,2)-1,substr($date['today'],0,4)))?>');" />
	<input type="button" class="btngray" value="오늘" onclick="dropDate('<?php echo $date['today']?>','<?php echo $date['today']?>');" />
	<input type="button" class="btngray" value="일주" onclick="dropDate('<?php echo date('Ymd',mktime(0,0,0,substr($date['today'],4,2),substr($date['today'],6,2)-7,substr($date['today'],0,4)))?>','<?php echo $date['today']?>');" />
	<input type="button" class="btngray" value="한달" onclick="dropDate('<?php echo date('Ymd',mktime(0,0,0,substr($date['today'],4,2)-1,substr($date['today'],6,2),substr($date['today'],0,4)))?>','<?php echo $date['today']?>');" />
	<input type="button" class="btngray" value="당월" onclick="dropDate('<?php echo substr($date['today'],0,6)?>01','<?php echo $date['today']?>');" />
	<input type="button" class="btngray" value="전월" onclick="dropDate('<?php echo date('Ym',mktime(0,0,0,substr($date['today'],4,2)-1,substr($date['today'],6,2),substr($date['today'],0,4)))?>01','<?php echo date('Ym',mktime(0,0,0,substr($date['today'],4,2)-1,substr($date['today'],6,2),substr($date['today'],0,4)))?>31');" />
	<input type="button" class="btngray" value="전체" onclick="dropDate('20090101','<?php echo $date['today']?>');" />
	</div>
	<div>
	<select name="recnum" onchange="this.form.submit();">
	<option value="50"<?php if($recnum==50):?> selected="selected"<?php endif?>>50개</option>
	<option value="100"<?php if($recnum==100):?> selected="selected"<?php endif?>>100개</option>
	<option value="150"<?php if($recnum==150):?> selected="selected"<?php endif?>>150개</option>
	<option value="200"<?php if($recnum==200):?> selected="selected"<?php endif?>>200개</option>
	</select>
	</div>
</div>
</form>


<div class="kbox">
<?php $j=0;while($G=db_fetch_array($RCD)):$j++?>

<div class="keywordarea">
<span class="num"><?php echo $j?>.</span> 
<a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;mod=search&amp;keyword=<?php echo urlencode($G['keyword'])?>" target="_blank" title="<?php echo $G['keyword']?>"><?php echo getStrCut($G['keyword'],6,'..')?></a> 
<span class="hit">(<?php echo $G['hit']?>건)</span>
</div>

<?php endwhile?>
<?php if(!$j):?>
	<div class="nodata"><img src="<?php echo $g['img_core']?>/_public/ico_notice.gif" alt="" /> 지정된 기간내에 기록된 키워드가 없습니다.</div>
<?php endif?>
<div class="clear"></div>
</div>


<script type="text/javascript">
//<![CDATA[
function dropDate(date1,date2)
{
	var f = document.procForm;
	f.year1.value = date1.substring(0,4);
	f.month1.value = date1.substring(4,6);
	f.day1.value = date1.substring(6,8);
	
	f.year2.value = date2.substring(0,4);
	f.month2.value = date2.substring(4,6);
	f.day2.value = date2.substring(6,8);

	f.submit();
}
//]]>
</script>
