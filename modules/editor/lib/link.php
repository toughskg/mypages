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
			<b>하이퍼링크 삽입하기</b> 
		</td>
		<td align="right">

		</td>
	</tr>
	<tr><td colspan="2" height="1" background="<?php echo $g['img_module']?>/line_01.gif"></td></tr>
	<tr><td colspan="2" height="25"></td></tr>
</table>




<table width="100%" cellpadding="2" cellspacing="1" bgcolor="#dfdfdf"> 
	<tr bgcolor="#F5F5F5" height="140">
		<td bgcolor="#ffffff" class="lmargin" id="xpreview" colspan="4"> 



		</td>
	</tr>
	<tr bgcolor="#F5F5F5" height="35">
		<td width="90" class="lmargin">링크대상</td>
		<td bgcolor="#ffffff" class="lmargin" colspan="3"> 

			<input type="text" id="subject" size="70" value="" onblur="linkShow();" onfocus="linkShow();" onchange="linkShow();" />

		</td>
	</tr> 

	<tr bgcolor="#F5F5F5" height="35">
		<td width="90" class="lmargin">링크URL</td>
		<td bgcolor="#ffffff" class="lmargin" colspan="3"> 

			<select id="type" onchange="linkShow();">
			<option value="http://">http://</option>
			<option value="mailto:">mailto:</option>
			</select>
			<input type="text" id="url" size="47" value="" onblur="linkShow();" onfocus="linkShow();" onchange="linkShow();" />
			<select id="target" onchange="linkShow();">
			<option value="_blank">_blank</option>
			<option value="_self">_self</option>
			</select>
		</td>
	</tr> 

	<tr bgcolor="#F5F5F5" height="35">
		<td width="90" class="lmargin">타이틀</td>
		<td bgcolor="#ffffff" class="lmargin" colspan="3"> 

			<input type="text" id="title" size="70" value="" onblur="linkShow();" onfocus="linkShow();" onchange="linkShow();" />

		</td>
	</tr> 
	<tr bgcolor="#F5F5F5" height="27">
		<td width="90" class="lmargin">색상</td>
		<td bgcolor="#ffffff" class="lmargin" colspan="3"> 

			<input type="text" id="color" size="6" value="#197BFF" maxlength="7" onblur="linkShow();" onfocus="linkShow();" onchange="linkShow();" />

		</td>
	</tr>
	<tr bgcolor="#F5F5F5" height="27">
		<td width="90" class="lmargin">데코레이션</td>
		<td bgcolor="#ffffff" class="lmargin1" colspan="3"> 

			<input type="checkbox" id="bold" value="bold" onclick="linkShow();" />볼드처리
			<input type="checkbox" id="underline" value="underline" onclick="linkShow();" />언더라인

		</td>
	</tr>
	<tr bgcolor="#F5F5F5" height="27">
		<td width="90" class="lmargin">글씨체</td>
		<td bgcolor="#ffffff" class="lmargin" colspan="3"> 

			<select id="family" onchange="linkShow();" style="width:80px;">
			<option value="굴림">굴림</option>
			<option value="verdana">verdana</option>
			<option value="Tahoma">Tahoma</option>
			<option value="Arial">Arial</option>
			<option value="바탕">바탕</option>
			<option value="궁서">궁서</option>
			<option value="돋움">돋움</option>
			</select>

		</td>
	</tr>
	<tr bgcolor="#F5F5F5" height="27">
		<td width="90" class="lmargin">글자크기</td>
		<td bgcolor="#ffffff" class="lmargin" colspan="3"> 


			<select id="size" onchange="linkShow();" style="width:80px;">
			<option value="11px">11px</option>
			<option value="12px" selected>12px</option>
			<option value="15px">15px</option>
			<option value="18px">18px</option>
			<option value="28px">28px</option>
			<option value="32px">32px</option>
			<option value="40px">40px</option>
			</select>

		</td>
	</tr>
</table>




<table width="100%" cellspacing="0" cellpadding="0">
	<tr><td height="15"></td></tr>
	<tr>
		<td height="30" align="center">

			<img src="<?php echo $g['img_module']?>/btn_aply.gif" hspace="5" style="cursor:pointer;" onclick="aplyLink()" />
			<img src="<?php echo $g['img_module']?>/btn_cancel.gif" style="cursor:pointer;" onclick="window.close();" />

		</td>
	</tr>
</table>



<script type="text/javascript">
//<![CDATA[
function linkShow()
{
	var sbj = getId('subject');
	var title = getId('title');
	var type= getId('type');
	var target= getId('target');
	var url= getId('url');
	var color= getId('color');
	var bold= getId('bold').checked == true ? 'bold' : '';
	var family= getId('family');
	var size= getId('size');
	var underline = getId('underline').checked == true ? 'underline' : '';

	getId('xpreview').innerHTML = "<a href='"+type.value+url.value+"' target='"+target.value+"' title='"+title.value+"' style='color:"+color.value+";font-weight:"+bold+";font-family:"+family.value+";font-size:"+size.value+";text-decoration:"+underline+";line-height:"+size.value+";'>"+sbj.value+"</a>";
}
function aplyLink()
{
	var rcode = getId('xpreview').innerHTML;
	opener.EditDrop(rcode);
	window.close(); 
}
linkShow();
self.resizeTo(550,570);
//]]>
</script>
