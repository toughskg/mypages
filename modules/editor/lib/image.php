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
			<b>이미지 삽입하기</b> 
		</td>
		<td align="right" style="font-size:11px;font-family:dotum;color:#909090;">
			

		</td>
	</tr>
	<tr><td colspan="2" height="1" background="<?php echo $g['img_module']?>/line_01.gif"></td></tr>
	<tr><td colspan="2" height="15"></td></tr>
</table>


<div style="width:<?php echo $PreviewWidth?>px;height:170px;overflow:auto;">

	<table width="100%" cellpadding="2" cellspacing="1" bgcolor="#dfdfdf"> 
		<tr bgcolor="#F5F5F5" height="160">
			<td bgcolor="#ffffff" id="xpreview" align="center" class="lmargin"> 



			</td>
		</tr> 
	</table>

</div>

<table width="100%" cellpadding="2" cellspacing="1" bgcolor="#dfdfdf"> 
	<tr bgcolor="#F5F5F5" height="35">
		<td width="90" class="lmargin">이미지경로</td>
		<td bgcolor="#ffffff" class="lmargin" colspan="3"> 

			<input type="text" id="subject" size="70" value="" onblur="imgShow();" onfocus="imgShow();" onchange="imgShow();" />

		</td>
	</tr> 

	<tr bgcolor="#F5F5F5" height="35">
		<td width="90" class="lmargin">링크URL</td>
		<td bgcolor="#ffffff" class="lmargin" colspan="3"> 

			<input type="text" id="url" size="59" value="" onblur="imgShow();" onfocus="imgShow();" onchange="imgShow();" />
			<select id="target" onchange="imgShow();">
			<option value="_blank">_blank</option>
			<option value="_self">_self</option>
			</select>
		</td>
	</tr> 

	<tr bgcolor="#F5F5F5" height="35">
		<td width="90" class="lmargin">이미지설명</td>
		<td bgcolor="#ffffff" class="lmargin" colspan="3"> 

			<input type="text" id="title" size="70" value="" onblur="imgShow();" onfocus="imgShow();" onchange="imgShow();" />

		</td>
	</tr> 

	<tr bgcolor="#F5F5F5" height="35">
		<td width="90" class="lmargin">Hspace</td>
		<td bgcolor="#ffffff" class="lmargin" colspan="3"> 

			<select id="hspace" onchange="imgShow();">
			<?php for($i = 0; $i < 21; $i++):?>
			<option value="<?php echo $i?>"><?php echo $i?>px</option>
			<?php endfor?>
			</select>

			&nbsp;&nbsp;
			Vspace

			<select id="vspace" onchange="imgShow();">
			<?php for($i = 0; $i < 21; $i++):?>
			<option value="<?php echo $i?>"><?php echo $i?>px</option>
			<?php endfor?>
			</select>

		</td>
	</tr> 
	<tr bgcolor="#F5F5F5" height="35">
		<td width="90" class="lmargin">정렬</td>
		<td bgcolor="#ffffff" class="lmargin" colspan="3"> 

			<table>
				<tr style="padding: 15 0 0 5">
					<td width="16" valign="top" style="padding-top:19px"><input type="radio" name="align" id="align" value="top" checked="checked" /></td>
					<td width="75"> <img src="<?php echo $g['img_module']?>/align_middle.gif"></td>
					<td width="16" valign="top" style="padding-top:19px"><input type="radio" name="align" id="align" value="bottom" /></td>
					<td width="75"> <img src="<?php echo $g['img_module']?>/align_bottom.gif"></td>
					<td width="16" valign="top" style="padding-top:19px"><input type="radio" name="align" id="align" value="left" /></td>
					<td width="75"> <img src="<?php echo $g['img_module']?>/align_left.gif"></td>
					<td width="16" valign="top" style="padding-top:19px"><input type="radio" name="align" id="align" value="right" /></td>	
					<td width="75"> <img src="<?php echo $g['img_module']?>/align_right.gif"></td>
				</tr>
				<tr style="padding: 10 0 0 0">
					<td></td>
					<td style="padding-left:2px">&nbsp;<font style="font-size:11">맨위</font></td>
					<td></td>
					<td style="padding-left:2px">&nbsp;<font style="font-size:11">아래</font></td>
					<td></td>
					<td style="padding-left:2px">&nbsp;<font style="font-size:11">왼쪽</font></td>
					<td></td>
					<td nowrap><font style="font-size:11">오른쪽</font></td>
				</tr>
			</table>

		</td>
	</tr> 
</table>




<table width="100%" cellspacing="0" cellpadding="0">
	<tr><td height="15"></td></tr>
	<tr>
		<td height="30" align="center">

			<img src="<?php echo $g['img_module']?>/btn_aply.gif" hspace="5" style="cursor:pointer;" onclick="aplyImg()" />
			<img src="<?php echo $g['img_module']?>/btn_cancel.gif" style="cursor:pointer;" onclick="window.close();" />

		</td>
	</tr>
</table>



<script type="text/javascript">
//<![CDATA[
function imgShow()
{
	var sbj = document.getElementById('subject');
	var title = document.getElementById('title');
	var target= document.getElementById('target');
	var url= document.getElementById('url');
	var align= document.getElementById('align');
	var hspace= document.getElementById('hspace');
	var vspace= document.getElementById('vspace');
	
	if (sbj.value)
	{
		if(url.value)
		{
			document.getElementById('xpreview').innerHTML = "<a href='"+url.value+"' target='"+target.value+"'><img src='"+subject.value+"' alt='"+title.value+"' hspace='"+hspace.value+"' vspace='"+vspace.value+"' align="+align.value+" border='0'></a>";
		}
		else {
			document.getElementById('xpreview').innerHTML = "<img src='"+subject.value+"' alt='"+title.value+"' hspace='"+hspace.value+"' vspace='"+vspace.value+"' align="+align.value+" border='0'>";
		}
	}
}
function aplyImg()
{
	var rcode = document.getElementById('xpreview').innerHTML;
	opener.EditDrop(rcode);
	window.close(); 
}
imgShow();
self.resizeTo(600,570);
//]]>
</script>

