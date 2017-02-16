<?php
include_once $g['dir_module_skin'].'_menu.php';

$type	= $type ? $type : 'point';
$sort	= $sort ? $sort : 'uid';
$orderby= $orderby ? $orderby : 'desc';
$recnum	= $recnum && $recnum < 200 ? $recnum : 20;

$sqlque = 'my_mbruid='.$my['uid'];
if ($price == '1') $sqlque .= ' and price > 0';
if ($price == '2') $sqlque .= ' and price < 0';
if ($where && $keyword)
{
	$sqlque .= getSearchSql($where,$keyword,$ikeyword,'or');
}
$RCD = getDbArray($table['s_'.$type],$sqlque,'*',$sort,$orderby,$recnum,$p);
$NUM = getDbRows($table['s_'.$type],$sqlque);
$TPG = getTotalPage($NUM,$recnum);

?>



<div id="pointlist">

	<div class="info">

		<div class="article">
			<span class="tx">
			<a class="<?php if($type=='point'):?>b <?php endif?>hand" onclick="document.hideForm.type.value='point';document.hideForm.submit();">포인트</a> |
			<a class="<?php if($type=='cash'):?>b <?php endif?>hand" onclick="document.hideForm.type.value='cash';document.hideForm.submit();">적립금</a> |
			<a class="<?php if($type=='money'):?>b <?php endif?>hand" onclick="document.hideForm.type.value='money';document.hideForm.submit();">예치금</a>
			</span>
			<?php echo number_format($my[$type])?><?php echo $type=='point'?'P':'원'?>
		</div>
		<div class="category">

			<form name="hideForm" action="<?php echo $g['s']?>/" method="get">
			<input type="hidden" name="r" value="<?php echo $r?>" />
			<input type="hidden" name="m" value="<?php echo $m?>" />
			<input type="hidden" name="iframe" value="<?php echo $iframe?>" />
			<input type="hidden" name="front" value="<?php echo $front?>" />
			<input type="hidden" name="page" value="<?php echo $page?>" />
			<input type="hidden" name="type" value="<?php echo $type?>" />
			<select name="price" onchange="this.form.submit();">
			<option value="">&nbsp;+ 전체</option>
			<option value="">-----</option>
			<option value="1"<?php if($price=='1'):?> selected="selected"<?php endif?>>획득</option>
			<option value="2"<?php if($price=='2'):?> selected="selected"<?php endif?>>사용</option>
			</select>
			</form>

		</div>
		<div class="clear"></div>
	</div>

	<form name="procForm" action="<?php echo $g['s']?>/" method="post" target="_action_frame_<?php echo $m?>" onsubmit="return submitCheck(this);">
	<input type="hidden" name="r" value="<?php echo $r?>" />
	<input type="hidden" name="m" value="<?php echo $m?>" />
	<input type="hidden" name="front" value="<?php echo $front?>" />
	<input type="hidden" name="a" value="" />
	<input type="hidden" name="pointType" value="<?php echo $type?>" />

	<table summary="포인트 리스트입니다.">
	<caption>포인트</caption> 
	<colgroup> 
	<col width="30"> 
	<col width="50"> 
	<col> 
	<col width="60"> 
	</colgroup> 
	<thead>
	<tr>
	<th scope="col" class="side1"><img src="<?php echo $g['img_core']?>/_public/ico_check_01.gif" class="hand" alt="" onclick="chkFlag('members[]');" /></th>
	<th scope="col">금액</th>
	<th scope="col">내역</th>
	<th scope="col" class="side2">날짜</th>
	</tr>
	</thead>
	<tbody>

	<?php while($R=db_fetch_array($RCD)):?>
	<tr>
	<td><input type="checkbox" name="members[]" value="<?php echo $R['uid']?>" /></td>
	<td class="cat"><?php echo ($R['price']>0?'+':'').number_format($R['price'])?></td>
	<td class="sbj">
		<?php echo $R['content']?>
		<?php if(getNew($R['d_regis'],24)):?><span class="new">new</span><?php endif?>
	</td>
	<td><?php echo getDateFormat($R['d_regis'],'Y.m.d')?></td>
	</tr> 
	<?php endwhile?> 

	<?php if(!$NUM):?>
	<tr>
	<td><input type="checkbox" disabled="disabled" /></td>
	<td class="cat">-</td>
	<td class="sbj1">내역이 없습니다.</td>
	<td><?php echo getDateFormat($date['totime'],'Y.m.d')?></td>
	</tr> 
	<?php endif?>

	</tbody>
	</table>
	

	<div class="pagebox01">
	<script type="text/javascript">getPageLink(10,<?php echo $p?>,<?php echo $TPG?>,'<?php echo $g['img_core']?>/page/default');</script>
	</div>

	<input type="text" name="category" id="iCategory" value="" class="input none" />
	<input type="button" value="내역정리" class="btngray" onclick="actCheck('point_sum');" />
	<input type="button" value="삭제" class="btngray" onclick="actCheck('point_delete');" />

	</form>
	

</div>


<script type="text/javascript">
//<![CDATA[
function submitCheck(f)
{
	if (f.a.value == '')
	{
		return false;
	}
}
function actCheck(act)
{
	var f = document.procForm;
    var l = document.getElementsByName('members[]');
    var n = l.length;
	var j = 0;
    var i;

    for (i = 0; i < n; i++)
	{
		if(l[i].checked == true)
		{
			j++;	
		}
	}
	if (!j)
	{
		alert('선택된 항목이 없습니다.      ');
		return false;
	}
	
	if(confirm('정말로 실행하시겠습니까?    '))
	{
		f.a.value = act;
		f.submit();
	}
}
//]]>
</script>


