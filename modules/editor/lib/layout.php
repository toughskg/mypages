<style type="text/css">
body {padding:15px;}
</style>


<table width="100%" cellspacing="0" cellpadding="0">
	<tr height="30">
		<td>
			<img src="<?php echo $g['img_module']?>/dot_01.gif" align="absmiddle" /> 
			<b>레이아웃 삽입하기</b> 
		</td>
		<td align="right">

		</td>
	</tr>
	<tr><td colspan="2" height="1" background="<?php echo $g['img_module']?>/line_01.gif"></td></tr>
	<tr><td colspan="2" height="25"></td></tr>
</table>



<table width="100%" cellspacing="0" cellpadding="0">
	<tr align="center" height="60">
		<td><img src="<?php echo $g['img_module']?>/layout_01.gif" id="lay_01" style="border:#ffffff solid 3px;cursor:pointer;" onclick="layoutClick(1)" /></td>
		<td><img src="<?php echo $g['img_module']?>/layout_02.gif" id="lay_02" style="border:#ffffff solid 3px;cursor:pointer;" onclick="layoutClick(2)" /></td>
		<td><img src="<?php echo $g['img_module']?>/layout_03.gif" id="lay_03" style="border:#ffffff solid 3px;cursor:pointer;" onclick="layoutClick(3)" /></td>
	</tr>
	<tr align="center" height="60">
		<td><img src="<?php echo $g['img_module']?>/layout_04.gif" id="lay_04" style="border:#ffffff solid 3px;cursor:pointer;" onclick="layoutClick(4)" /></td>
		<td><img src="<?php echo $g['img_module']?>/layout_05.gif" id="lay_05" style="border:#ffffff solid 3px;cursor:pointer;" onclick="layoutClick(5)" /></td>
		<td><img src="<?php echo $g['img_module']?>/layout_06.gif" id="lay_06" style="border:#ffffff solid 3px;cursor:pointer;" onclick="layoutClick(6)" /></td>
	</tr>
	<tr align="center" height="60">
		<td><img src="<?php echo $g['img_module']?>/layout_07.gif" id="lay_07" style="border:#ffffff solid 3px;cursor:pointer;" onclick="layoutClick(7)" /></td>
		<td><img src="<?php echo $g['img_module']?>/layout_08.gif" id="lay_08" style="border:#ffffff solid 3px;cursor:pointer;" onclick="layoutClick(8)" /></td>
		<td><img src="<?php echo $g['img_module']?>/layout_09.gif" id="lay_09" style="border:#ffffff solid 3px;cursor:pointer;" onclick="layoutClick(9)" /></td>
	</tr>
</table>



<table width="100%" cellspacing="0" cellpadding="0">
	<tr><td height="15"></td></tr>
	<tr><td height="1" bgcolor="#efefef"></td></tr>
	<tr><td height="15"></td></tr>
	<tr><td height="30" style="line-height:150%;font-size:11px;font-family:dotum;color:#c0c0c0;">테이블의 점선은 공간을 보여주기 위한 것으로 자료등록 후 본문에서는 출력되지 않습니다.</td></tr>
</table>


<table width="100%" cellspacing="0" cellpadding="0">
	<tr><td height="15"></td></tr>
	<tr><td height="1" bgcolor="#efefef"></td></tr>
	<tr><td height="15"></td></tr>
	<tr>
		<td height="30" align="center">

			<img src="<?php echo $g['img_module']?>/btn_aply.gif" hspace="5" style="cursor:pointer;" onclick="layoutAply()" />
			<img src="<?php echo $g['img_module']?>/btn_cancel.gif" style="cursor:pointer;" onclick="window.close();" />

		</td>
	</tr>
</table>


<script type="text/javascript">
//<![CDATA[
var lset = 0;
function layoutClick(n)
{
	var i;
	lset = n;
	for (i = 1; i < 10; i++)
	{
		document.getElementById('lay_0'+i).style.border = "#ffffff solid 3px;";
	}
	document.getElementById('lay_0'+n).style.border = "#2FCAFD solid 3px;";
}
function layoutAply()
{
	if(lset == 0)
	{
		alert('적용하실 레이아웃을 선택해 주세요.      ');
		return false;
	}
	location.href = "./?m=<?php echo $m?>&front=<?php echo $front?>&compo=<?php echo $compo?>&fixlayout=0" + lset;
}

self.resizeTo(400,470);
//]]>
</script>

<?php if($fixlayout):?>
<div id="layout_div" class="hide">
<?php include_once $g['dir_module'].'lib/layout/'.$fixlayout.'.txt'?>
</div>


<script type="text/javascript">
//]]>
function ResultCode()
{
	opener.EditDrop(document.getElementById('layout_div').innerHTML);
	window.close(); 
}
setTimeout("ResultCode()",100);
//]]>
</script>
<?php endif?>