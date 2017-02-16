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
			<b>박스 삽입하기</b> 
		</td>
		<td align="right">

		</td>
	</tr>
	<tr><td colspan="2" height="1" background="<?php echo $g['img_module']?>/line_01.gif"></td></tr>
	<tr><td colspan="2" height="25"></td></tr>
</table>



<div id="xpreview">
<table cellspacing="0" cellpadding="0" id="preview_<?php echo $date['totime']?>">
<tr>
<td valign="top">박스 미리보기 입니다.<br>내용은 본문에 삽입한 후 편집해 주세요.</td>
</tr>
</table>
</div>

<br />
<br />

<table width="100%" cellpadding="2" cellspacing="1" bgcolor="#dfdfdf"> 
	<tr bgcolor="#F5F5F5" height="27">
		<td width="110" nowrap="nowrap" class="lmargin">표현양식</td>
		<td width="100%" bgcolor="#ffffff" class="lmargin1"> 

			<input type="radio" name="type[]" id="type" value="solid" onclick="quotView();" checked="checked" />실선
			<input type="radio" name="type[]" id="type" value="dashed" onclick="quotView();" />점선

		</td>
	</tr> 
	<tr bgcolor="#F5F5F5" height="27">
		<td width="110" class="lmargin">사이즈</td>
		<td bgcolor="#ffffff" class="lmargin"> 

			<input type="text" id="twidth" size="5" value="100" onblur="quotView();" onfocus="quotView();" onchange="quotView();">
			<select id="twidth_type" onchange="quotView();">
			<option value="%">%</option>
			<option value="">px</option>
			</select>

		</td>
	</tr>
	<tr bgcolor="#F5F5F5" height="27">
		<td width="110" class="lmargin">테두리두께</td>
		<td bgcolor="#ffffff" class="lmargin"> 

			<select id="g" onchange="quotView();" style="width:60px;">
			<?php for($i = 0; $i < 16; $i++):?>
			<option value="<?php echo $i?>px"<?php if($i==1):?> selected<?php endif?>><?php echo $i?>px</option>
			<?php endfor?>
			</select>

		</td>
	</tr>
	<tr bgcolor="#F5F5F5" height="27">
		<td width="110" class="lmargin">테두리색</td>
		<td bgcolor="#ffffff" class="lmargin"> 

			<input type="text" id="fcolor" size="6" value="#efefef" maxlength="7" onblur="quotView();" onfocus="quotView();" onchange="quotView();" />

		</td>
	</tr>
	<tr bgcolor="#F5F5F5" height="27">
		<td width="110" class="lmargin">배경색</td>
		<td bgcolor="#ffffff" class="lmargin"> 

			<input type="text" id="bcolor" size="6" value="#ffffff" maxlength="7" onblur="quotView();" onfocus="quotView();" onchange="quotView();" />

		</td>
	</tr>   
	<tr bgcolor="#F5F5F5" height="27">
		<td width="110" class="lmargin">내부여백</td>
		<td bgcolor="#ffffff" class="lmargin"> 

		<select id="padding" onchange="quotView();" style="width:60px;">
		<?php for($i = 0; $i < 16; $i++):?>
		<option value="<?php echo $i?>px"<?php if($i==5):?> selected<?php endif?>><?php echo $i?>px</option>
		<?php endfor?>
		</select>

		</td>
	</tr> 
	<tr bgcolor="#F5F5F5" height="27">
		<td width="110" class="lmargin">줄간격</td>
		<td bgcolor="#ffffff" class="lmargin"> 

			<select id="lineheight" onchange="quotView();" style="width:60px;">
			<?php for($i = 100; $i < 210; $i=$i+10):?>
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

			<img src="<?php echo $g['img_module']?>/btn_aply.gif" hspace="5" style="cursor:pointer;" onclick="quotAply()" />
			<img src="<?php echo $g['img_module']?>/btn_cancel.gif" style="cursor:pointer;" onclick="window.close();" />

		</td>
	</tr>
</table>



<script type="text/javascript">
//<![CDATA[
function quotView()
{
	var i;
	var l = document.getElementsByName('type[]');
	var s = l.length;
	var bordertype = "";
	var htags = "";
	var p = getId('preview_<?php echo $date['totime']?>');

	for (i = 0; i < s; i++)
	{
		if (l[i].checked == true)
		{
			bordertype = l[i].value;
		}
	}

	p.style.width = getId('twidth').value + getId('twidth_type').value;
	p.style.border = getId('fcolor').value + " " + bordertype + " " + getId('g').value;
	p.style.background = getId('bcolor').value;
	p.style.padding = getId('padding').value;
	p.style.lineHeight = getId('lineheight').value;
}
function quotAply()
{
	var rcode = getId('xpreview').innerHTML;
	opener.EditDrop(rcode);
	window.close(); 
}
quotView();
self.resizeTo(550,520);
//]]>
</script>