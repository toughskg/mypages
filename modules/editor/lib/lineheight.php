<style type="text/css">
body {padding:15px;}
.lmargin {padding-left : 10px;}
.lmargin1 {padding-left : 6px;}
.price {text-align:right;}
</style>


<table width="100%" cellspacing="0" cellpadding="0">
	<tr height="30">
		<td>
			<img src="<?php echo $g['img_module']?>/dot_01.gif" align="absmiddle" /> 
			<b>행간조절</b> 
		</td>
		<td align="right">

		</td>
	</tr>
	<tr><td colspan="2" height="1" background="<?php echo $g['img_module']?>/line_01.gif"></td></tr>
	<tr><td colspan="2" height="25"></td></tr>
</table>

<table width="100%" cellpadding="2" cellspacing="1" bgcolor="#dfdfdf"> 
	<tr bgcolor="#F5F5F5" height="200">
		<td bgcolor="#ffffff" colspan="3"> 
<div id="xpreview" style="width:377px;height:202px;overflow:auto;padding:5px 5px 5px 5px;">
줄간격 미리보기입니다<br />
줄간격 미리보기입니다<br />
줄간격 미리보기입니다<br />
줄간격 미리보기입니다<br />
줄간격 미리보기입니다<br />
</div>

		</td>
	</tr>
</table>

<br />




<table width="100%" cellpadding="2" cellspacing="1" bgcolor="#dfdfdf"> 
	<tr bgcolor="#F5F5F5" height="50">
		<td class="lmargin small_gray" colspan="2" style="line-height:140%;"> 

			에디터에 삽입된 행간박스의 점선은 공간을 보여주기 위한 것으로 자료등록 후 본문에서는 출력되지 않습니다. <br />
			행간박스는 에디터에 원하는 수 만큼 삽입할 수 있습니다.

		</td>
	</tr> 
	<tr bgcolor="#F5F5F5" height="35">
		<td width="90" nowrap="nowrap" class="lmargin">행간(줄간격)</td>
		<td width="100%" bgcolor="#ffffff" class="lmargin"> 

			<select id="lineheight" onchange="quotView();" style="width:60px;">
			<?php for($i = 100; $i < 310; $i=$i+10):?>
			<option value="<?php echo $i?>%"<?php if($i==140):?> selected<?php endif?>><?php echo $i?>%</option>
			<?php endfor?>
			</select>

		</td>
	</tr> 
</table>


<table width="100%" cellspacing="0" cellpadding="0">
	<tr><td height="15"></td></tr>
	<tr>
		<td height="30" align="center">

			<img src="<?php echo $g['img_module']?>/btn_aply.gif" hspace="5" style="cursor:pointer;" onclick="aplySrc()" />
			<img src="<?php echo $g['img_module']?>/btn_cancel.gif" style="cursor:pointer;" onclick="window.close();" />

		</td>
	</tr>
</table>
</form>



<script language="javascript">
//<![CDATA[
function quotView()
{
	var p = getId('xpreview');
	p.style.lineHeight = getId('lineheight').value;
}
function aplySrc()
{
	var rcode = '<table cellspacing="0" cellpadding="0" width="100%" class="dashline"><tr><td style="line-height:'+getId('lineheight').value+';">행간(줄간격) '+getId('lineheight').value+' 편집상자입니다. </td></tr></table>';
	opener.EditDrop(rcode);
	window.close(); 
}
quotView();
self.resizeTo(450,530);
//]]>
</script>