<style type="text/css">
body {padding:15px;}
.lmargin {padding-left : 10px;}
.lmargin1 {padding-left : 6px;}
.price {text-align:right;}
.dashline { border:#BBBBBB dashed 1px; }
</style>

<table width="100%" cellspacing="0" cellpadding="0">
	<tr height="30">
		<td>
			<img src="<?php echo $g['img_module']?>/dot_01.gif" align="absmiddle" /> 
			<b>테이블(TABLE) 삽입하기</b> 
		</td>
		<td align="right">

		</td>
	</tr>
	<tr><td colspan="2" height="1" background="<?php echo $g['img_module']?>/line_01.gif"></td></tr>
	<tr><td colspan="2" height="25"></td></tr>
</table>


<div style="width:<?php echo $PreviewWidth?>px;height:230px;overflow:auto;">

	<table width="100%" cellpadding="0" cellspacing="0"> 
		<tr height="220">
			<td id="xpreview" valign="top"> 

			</td>
		</tr> 
	</table>

</div>


<table width="100%" cellpadding="2" cellspacing="1" bgcolor="#dfdfdf"> 
	<tr bgcolor="#F5F5F5" height="30">
		<td style="padding-left:10px;line-height:150%;font-size:11px;font-family:dotum;color:#c0c0c0;" colspan="6"> 

			스타일형식에서 테이블의 점선은 공간을 보여주기 위한 것으로 자료등록 후 본문에서는 출력되지 않습니다. 

		</td>
	</tr> 

	<tr bgcolor="#F5F5F5" height="35">
		<td width="80" class="lmargin">가로열수</td>
		<td bgcolor="#ffffff" class="lmargin"> 

			<select id="num1" onchange="tableShow();">
			<?php for($i = 1; $i < 16; $i++):?>
			<option value="<?php echo $i?>"<?php if($i==4):?> selected<?php endif?>><?php echo $i?>개</option>
			<?php endfor?>
			</select>

		</td>
		<td width="80" class="lmargin">세로열수</td>
		<td bgcolor="#ffffff" class="lmargin"> 

			<select id="num2" onchange="tableShow();">
			<?php for($i = 1; $i < 16; $i++):?>
			<option value="<?php echo $i?>"<?php if($i==6):?> selected<?php endif?>><?php echo $i?>개</option>
			<?php endfor?>
			</select>

		</td>
		<td width="80" class="lmargin">사이즈</td>
		<td bgcolor="#ffffff" class="lmargin"> 

			<input type="text" id="twidth" size="5" value="100" onblur="tableShow();" onfocus="tableShow();" onchange="tableShow();">
			<select id="twidth_type" onchange="tableShow();">
			<option value="%">%</option>
			<option value="">px</option>
			</select>

		</td>
	</tr> 

	<tr bgcolor="#F5F5F5" height="35">
		<td width="80" class="lmargin">border</td>
		<td bgcolor="#ffffff" class="lmargin"> 

			<select id="border" onchange="tableShow();">
			<?php for($i = 0; $i < 6; $i++):?>
			<option value="<?php echo $i?>"><?php echo $i?></option>
			<?php endfor?>
			</select>

		</td>
		<td width="80" class="lmargin">cellspacing</td>
		<td bgcolor="#ffffff" class="lmargin"> 

			<select id="cellspacing" onchange="tableShow();">
			<?php for($i = 0; $i < 6; $i++):?>
			<option value="<?php echo $i?>"<?php if($i==1):?> selected<?php endif?>><?php echo $i?></option>
			<?php endfor?>
			</select>

		</td>
		<td width="80" class="lmargin">cellpadding</td>
		<td bgcolor="#ffffff" class="lmargin"> 

			<select id="cellpadding" onchange="tableShow();">
			<?php for($i = 0; $i < 16; $i++):?>
			<option value="<?php echo $i?>"<?php if($i==1):?> selected<?php endif?>><?php echo $i?></option>
			<?php endfor?>
			</select>

		</td>
	</tr> 

	<tr bgcolor="#F5F5F5" height="35">

		<td width="80" class="lmargin">형식</td>
		<td bgcolor="#ffffff" class="lmargin"> 

			<select id="type" onchange="tableShow();">
			<option value="2">일반</option>
			<option value="1">스타일</option>
			</select>

		</td>

		<td width="80" class="lmargin">틀색상</td>
		<td bgcolor="#ffffff" class="lmargin"> 

			<input type="text" id="bordercolor" size="6" value="#efefef" maxlength="7" onblur="tableShow();" onfocus="tableShow();" onchange="tableShow();" />

		</td>
		<td width="80" class="lmargin">배경색</td>
		<td bgcolor="#ffffff" class="lmargin"> 

			<input type="text" id="bgcolor" size="6" value="#ffffff" maxlength="7" onblur="tableShow();" onfocus="tableShow();" onchange="tableShow();" />


		</td>
	</tr> 

</table>



<table width="100%" cellspacing="0" cellpadding="0">
	<tr><td height="15"></td></tr>
	<tr>
		<td height="30" align="center">

			<img src="<?php echo $g['img_module']?>/btn_aply.gif" hspace="5" style="cursor:pointer;" onclick="tableAply()" />
			<img src="<?php echo $g['img_module']?>/btn_cancel.gif" style="cursor:pointer;" onclick="window.close();" />

		</td>
	</tr>
</table>


<script type="text/javascript">
//<![CDATA[
function tableShow()
{
	var i,j;
	var rtag = "";
	var s = document.getElementById('xpreview');

	var cols = parseInt(document.getElementById('num2').value);
	var rows = parseInt(document.getElementById('num1').value);
	var width = document.getElementById('twidth');
	var width_type = document.getElementById('twidth_type');
	var border = document.getElementById('border');
	var cellspacing = document.getElementById('cellspacing');
	var cellpadding = document.getElementById('cellpadding');
	var bordercolor = document.getElementById('bordercolor');
	var bgcolor = document.getElementById('bgcolor');
	var type = document.getElementById('type');

	if (type.value == "1")
	{
		rtag += "<table width='"+width.value+width_type.value+"' cellspacing='1' cellpadding='1' style='border:"+bordercolor.value+" solid "+border.value+"px;' bgcolor='"+bgcolor.value+"'>";

		for(i = 0; i < cols; i++)
		{
			rtag += "<tr>";
			
			for(j = 0; j < rows; j++)
			{
				rtag += "<td valign='top' height='30' class='dashline' padding:"+cellpadding.value+"px "+cellpadding.value+"px "+cellpadding.value+"px "+cellpadding.value+"px;>&nbsp;</td>";
			}

			rtag += "</tr>";
		}

		rtag += "</table>";
	}
	else {
		rtag += "<table width='"+width.value+width_type.value+"' border='"+border.value+"' cellspacing='"+cellspacing.value+"' cellpadding='"+cellpadding.value+"' bgcolor='"+bordercolor.value+"'>";

		for(i = 0; i < cols; i++)
		{
			rtag += "<tr bgcolor='"+bgcolor.value+"'>";
			
			for(j = 0; j < rows; j++)
			{
				rtag += "<td valign='top' height='30'></td>";
			}

			rtag += "</tr>";
		}

		rtag += "</table>";
	}

	s.innerHTML = rtag;
}
function tableAply()
{
	var rcode = document.getElementById('xpreview').innerHTML;

	opener.EditDrop(rcode);
	window.close(); 
}
tableShow();
self.resizeTo(600,570);
//]]>
</script>