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
			<b>동영상 삽입하기</b> 
		</td>
		<td align="right" style="font-size:11px;font-family:dotum;color:#909090;">
			&lt;object&gt; 나 &lt;embed&gt; 태그를 직접 붙혀넣기 하실 경우 
			<a href="./?m=<?php echo $m?>&front=<?php echo $front?>&compo=html"><u>붙혀넣기</u></a>를 이용해 주세요.
		</td>
	</tr>
	<tr><td colspan="2" height="1" background="<?php echo $g['img_module']?>/line_01.gif"></td></tr>
	<tr><td colspan="2" height="25"></td></tr>
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
		<td width="90" class="lmargin">동영상경로</td>
		<td bgcolor="#ffffff" class="lmargin" colspan="3"> 

			<input type="text" id="subject" size="70" value="" onblur="FlashShow();" onfocus="FlashShow();" onchange="FlashShow();" />

		</td>
	</tr> 


	<tr bgcolor="#F5F5F5" height="35">
		<td width="90" class="lmargin">Width</td>
		<td bgcolor="#ffffff" class="lmargin" colspan="3"> 

			<input type="text" id="width" size="5" value="" onblur="FlashShow();" onfocus="FlashShow();" onchange="FlashShow();" />px

			&nbsp;&nbsp;
			Height

			<input type="text" id="height" size="5" value="" onblur="FlashShow();" onfocus="FlashShow();" onchange="FlashShow();" />px

		</td>
	</tr> 
	<tr bgcolor="#F5F5F5" height="35">
		<td width="90" class="lmargin">정렬</td>
		<td bgcolor="#ffffff" class="lmargin" colspan="3"> 

			<table>
				<tr style="padding: 15px 0 0 5px;">
					<td width="16" valign="top" style="padding-top:19px"><input type="radio" name="align" id="align" value="top" checked="checked" /></td>
					<td width="75"> <img src="<?php echo $g['img_module']?>/align_middle.gif"></td>
					<td width="16" valign="top" style="padding-top:19px"><input type="radio" name="align" id="align" value="bottom" /></td>
					<td width="75"> <img src="<?php echo $g['img_module']?>/align_bottom.gif"></td>
					<td width="16" valign="top" style="padding-top:19px"><input type="radio" name="align" id="align" value="left" /></td>
					<td width="75"> <img src="<?php echo $g['img_module']?>/align_left.gif"></td>
					<td width="16" valign="top" style="padding-top:19px"><input type="radio" name="align" id="align" value="right" /></td>	
					<td width="75"> <img src="<?php echo $g['img_module']?>/align_right.gif"></td>
				</tr>
				<tr style="padding: 10px 0 0 0;">
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

			<img src="<?php echo $g['img_module']?>/btn_aply.gif" hspace="5" style="cursor:pointer;" onclick="aplyFlash()" />
			<img src="<?php echo $g['img_module']?>/btn_cancel.gif" style="cursor:pointer;" onclick="window.close();" />

		</td>
	</tr>
</table>



<script type="text/javascript">
//<![CDATA[
var subject = document.getElementById('subject');
var align= document.getElementById('align');
var width= document.getElementById('width');
var height= document.getElementById('height');

function FlashShow()
{
	var insertcode = '';

	if(subject.value)
	{
		
		if (width.value != '' && height.value != '')
		{
			insertcode = "<embed src='"+subject.value+"' align="+align.value+" width='"+width.value+"' height='"+height.value+"'></embed>";
		}
		if (width.value != '' && height.value == '')
		{
			insertcode = "<embed src='"+subject.value+"' align="+align.value+" width='"+width.value+"'></embed>";
		}
		if (width.value == '' && height.value != '')
		{
			insertcode = "<embed src='"+subject.value+"' align="+align.value+" height='"+height.value+"'></embed>";
		}
		if (width.value == '' && height.value == '')
		{
			insertcode = "<embed src='"+subject.value+"' align="+align.value+"></embed>";
		}

		if(myagent == 'ie')
		{
			document.getElementById('xpreview').innerHTML = insertcode;
		}
		else {			
			var x = width.value ? width.value : 100;
			var y = height.value ? height.value : 100;
			document.getElementById('xpreview').innerHTML = "<table width=\""+x+"\" height=\""+y+"\" cellspacing=\"0\" cellpadding=\"2\" class=\"flashline\" align="+align.value+">"+insertcode+"</td></tr></table>";
		}
	}
}
function aplyFlash()
{
	var rcode = document.getElementById('xpreview').innerHTML;
	opener.EditDrop(rcode);
	window.close(); 
}
FlashShow();
self.resizeTo(600,570);
//]]>
</script>
