<style type="text/css">
body {padding:15px;}
</style>

<table width="100%" cellspacing="0" cellpadding="0">
	<tr height="30">
		<td>
			<img src="<?php echo $g['img_module']?>/dot_01.gif" align="absmiddle" /> <b>특수문자 삽입하기</b> 
		</td>
		<td align="right">
	
			<?php $type = $type ? $type : 1?>
			<a href="./?m=<?php echo $m?>&front=<?php echo $front?>&compo=<?php echo $compo?>&type=1"<?php if($type==1):?> style="font-weight:bold;"<?php endif?>>일반기호</a> | 
			<a href="./?m=<?php echo $m?>&front=<?php echo $front?>&compo=<?php echo $compo?>&type=2"<?php if($type==2):?> style="font-weight:bold;"<?php endif?>>숫자와 단위</a> | 
			<a href="./?m=<?php echo $m?>&front=<?php echo $front?>&compo=<?php echo $compo?>&type=3"<?php if($type==3):?> style="font-weight:bold;"<?php endif?>>원,괄호</a> | 
			<a href="./?m=<?php echo $m?>&front=<?php echo $front?>&compo=<?php echo $compo?>&type=4"<?php if($type==4):?> style="font-weight:bold;"<?php endif?>>한글</a> | 
			<a href="./?m=<?php echo $m?>&front=<?php echo $front?>&compo=<?php echo $compo?>&type=5"<?php if($type==5):?> style="font-weight:bold;"<?php endif?>>그리스,라틴어</a> | 
			<a href="./?m=<?php echo $m?>&front=<?php echo $front?>&compo=<?php echo $compo?>&type=6"<?php if($type==6):?> style="font-weight:bold;"<?php endif?>>일본어</a>

		</td>
	</tr>
	<tr><td colspan="2" height="1" background="<?php echo $g['img_module']?>/line_01.gif"></td></tr>
	<tr><td colspan="2" height="25"></td></tr>
</table>




<?php if($type == 1):?>
<table cellspacing="1" cellpadding="2" width="100%" bgcolor="#efefef">
<tbody>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
｛ </td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
｝</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
〔</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
〕</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
〈</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
〉</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
《</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
》</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
「</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
」</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
『</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
』</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
【</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
】</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
‘</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
’</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
“</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
”</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
、</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
。</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
·</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
‥</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
…</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
§</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
※</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
☆</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
★</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
○</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
●</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
◎</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
◇</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
◆</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
□</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
■</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
△</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
▲</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
▽</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
▼</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
◁</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
◀</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
▷</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
▶</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
♤</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
♠</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
♡</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
♥</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
♧</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
♣</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⊙</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
◈</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
▣</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
◐</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
◑</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
▒</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
▤</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
▥</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
▨</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
▧</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
▦</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
▩</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
±</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
×</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
÷</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
≠</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
≤</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
≥</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
∞</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
∴</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
°</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
′</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
″</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
∠</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⊥</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⌒</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
∂</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
≡</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
≒</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
≪</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
≫</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
√</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
∽</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
∝</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
∵</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
∫</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
∬</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
∈</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
∋</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⊆</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⊇</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⊂</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⊃</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
∪</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
∩</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
∧</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
∨</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
￢</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⇒</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⇔</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
∀</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
∃</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
´</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
～</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ˇ</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
˘</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
˝</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
˚</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
˙</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
¸</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
˛</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
¡</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
¿</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ː</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
∮</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
∑</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
∏</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
♭</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
♩</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
♪</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
♬</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㉿</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
→</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
←</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
↑</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
↓</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
↔</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
↕</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
↗</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
↙</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
↖</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
↘</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㈜</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
№</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㏇</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
™</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㏂</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㏘</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
℡</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
♨</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
☏</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
☎</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
☜</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
☞</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
¶</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
†</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
‡</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
®</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ª</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
º</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
♂</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
♀</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td></tr></tbody></table>
<?php endif?>

<?php if($type == 2):?>
<table cellspacing="1" cellpadding="2" width="100%" bgcolor="#efefef">
<tbody>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
½</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⅓</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⅔</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
¼</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
¾</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⅛</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⅜</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⅝</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⅞</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
¹</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
²</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
³</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⁴</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⁿ</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
₁</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
₂</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
₃</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
₄</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⅰ</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⅱ</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⅲ</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⅳ</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⅴ</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⅵ</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⅶ</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⅷ</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⅸ</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⅹ</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⅰ</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⅱ</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⅲ</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⅳ</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⅴ</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⅵ</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⅶ</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⅷ</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⅸ</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⅹ</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
￦</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
$</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
￥</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
￡</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
€</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
℃</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
Å</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
℉</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
￠</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
¤</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
‰</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎕</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎖</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎗</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ℓ</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎘</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㏄</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎣</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎤</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎥</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎦</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎙</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎚</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎛</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎜</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎝</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎞</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎟</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎠</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎡</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎢</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㏊</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎍</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎎</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎏</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㏏</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎈</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎉</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㏈</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎧</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎨</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎰</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎱</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎲</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎳</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎴</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎵</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎶</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎷</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎸</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎹</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎀</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎁</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎂</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎃</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎄</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎺</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎻</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎼</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎽</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎾</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎿</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎐</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎑</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎒</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎓</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎔</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
Ω</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㏀</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㏁</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎊</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎋</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎌</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㏖</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㏅</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎭</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎮</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎯</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㏛</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎩</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎪</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎫</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㎬</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㏝</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㏐</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㏓</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㏃</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㏉</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㏜</td>
<td style="cursor: pointer" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㏆</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td></tr></tbody></table>

<?php endif?>
<?php if($type == 3):?>
<table cellspacing="1" cellpadding="2" width="100%" bgcolor="#efefef">
<tbody>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㉠</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㉡</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㉢</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㉣</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㉤</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㉥</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㉦</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㉧</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㉨</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㉩</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㉪</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㉫</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㉬</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㉭</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㉮</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㉯</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㉰</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㉱</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㉲</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㉳</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㉴</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㉵</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㉶</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㉷</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㉸</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㉹</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㉺</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㉻</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⓐ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⓑ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⓒ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⓓ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⓔ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⓕ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⓖ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⓗ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⓘ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⓙ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⓚ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⓛ</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⓜ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⓝ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⓞ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⓟ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⓠ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⓡ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⓢ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⓣ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⓤ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⓥ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⓦ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⓧ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⓨ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ⓩ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
①</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
②</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
③</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
④</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⑤</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⑥</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⑦</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⑧</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⑨</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⑩</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⑪</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⑫</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⑬</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⑭</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⑮</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㈀</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㈁</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㈂</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㈃</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㈄</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㈅</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㈆</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㈇</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㈈</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㈉</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㈊</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㈋</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㈌</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㈍</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㈎</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㈏</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㈐</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㈑</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㈒</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㈓</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㈔</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㈕</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㈖</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㈗</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㈘</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㈙</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㈚</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
㈛</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⒜</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⒝</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⒞</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⒟</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⒠</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⒡</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⒢</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⒣</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⒤</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⒥</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⒦</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⒧</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⒨</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⒩</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⒪</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⒫</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⒬</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⒭</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⒮</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⒯</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⒰</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⒱</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⒲</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⒳</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⒴</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⒵</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⑴</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⑵</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⑶</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⑷</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⑸</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⑹</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⑺</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⑻</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⑼</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⑽</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⑾</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⑿</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⒀</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⒁</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
⒂</td>
<td>&nbsp;</td>
<td>&nbsp;</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td></tr></tbody></table>

<?php endif?>
<?php if($type == 4):?>
<table cellspacing="1" cellpadding="2" width="100%" bgcolor="#efefef">
<tbody>
<tr align="center" height="25" bgcolor="#ffffff">
<td></td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㄲ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㄳ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㄴ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㄵ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㄶ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㄷ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㄸ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㄹ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㄺ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㄻ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㄼ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㄽ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㄾ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㄿ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅀ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅁ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅂ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅃ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅄ</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅅ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅆ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅇ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅈ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅉ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅊ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅋ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅌ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅍ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅎ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅏ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅐ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅑ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅒ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅓ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅔ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅕ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅖ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅗ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅘ</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅙ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅚ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅛ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅜ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅝ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅞ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅟ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅠ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅡ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅢ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅣ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅥ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅦ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅧ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅨ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅩ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅪ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅫ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅬ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅭ</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅮ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅯ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅰ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅱ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅲ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅳ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅴ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅵ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅶ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅷ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅸ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅹ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅺ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅻ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅼ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅽ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅾ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㅿ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㆀ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㆁ</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㆂ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㆃ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㆄ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㆅ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㆆ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㆇ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㆈ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㆉ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㆊ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㆋ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㆌ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㆍ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ㆎ</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td></tr></tbody></table>
<?php endif?>
<?php if($type == 5):?>
<table cellspacing="1" cellpadding="2" width="100%" bgcolor="#efefef">
<tbody>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
α</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
β</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
γ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
δ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ε</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ζ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
η</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
θ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ι</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
κ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
λ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
μ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ν</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ξ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ο</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
π</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ρ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
σ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
τ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
υ</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
φ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
χ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ψ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ω</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
α</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
β</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
γ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
δ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ε</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ζ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
η</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
θ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ι</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
κ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
λ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
μ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ν</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ξ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ο</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
π</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ρ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
σ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
τ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
υ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
φ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
χ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ψ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ω</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
æ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ð</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ħ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ĳ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ŀ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ł</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ø</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
œ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
þ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ŧ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ŋ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
æ</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
đ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ð</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ħ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
i</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ĳ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ĸ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ŀ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ł</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ł</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
œ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ß</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
þ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ŧ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ŋ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ŉ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
б</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
г</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
д</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ё</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ж</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
з</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
и</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
й</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
л</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
п</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ц</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ч</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ш</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
щ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ъ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ы</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ь</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
э</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ю</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
я</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
б</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
в</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
г</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
д</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ё</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ж</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
з</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
и</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
й</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
л</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
п</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ф</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ц</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ч</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ш</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
щ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ъ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ы</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ь</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
э</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ю</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
я</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td></tr></tbody></table>
<?php endif?>
<?php if($type == 6):?>
<table cellspacing="1" cellpadding="2" width="100%" bgcolor="#efefef">
<tbody>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ぁ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
あ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ぃ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
い</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ぅ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
う</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ぇ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
え</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ぉ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
お</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
か</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
が</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
き</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ぎ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
く</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ぐ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
け</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
げ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
こ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ご</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
さ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ざ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
し</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
じ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
す</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ず</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
せ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ぜ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
そ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ぞ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
た</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
だ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ち</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ぢ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
っ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
つ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
づ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
て</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
で</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
と</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ど</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
な</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
に</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ぬ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ね</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
の</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
は</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ば</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ぱ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ひ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
び</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ぴ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ふ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ぶ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ぷ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
へ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
べ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ぺ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ほ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ぼ</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ぽ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ま</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
み</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
む</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
め</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
も</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ゃ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
や</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ゅ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ゆ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ょ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
よ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ら</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
り</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
る</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
れ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ろ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ゎ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
わ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ゐ</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ゑ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
を</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ん</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ァ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ア</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ィ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
イ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ゥ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ウ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ェ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
エ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ォ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
オ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
カ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ガ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
キ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ギ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ク</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
グ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ケ</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ゲ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
コ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ゴ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
サ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ザ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
シ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ジ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ス</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ズ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
セ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ゼ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ソ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ゾ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
タ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ダ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
チ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ヂ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ッ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ツ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ヅ</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
テ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
デ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ト</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ド</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ナ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ニ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ヌ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ネ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ノ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ハ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
バ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
パ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ヒ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ビ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ピ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
フ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ブ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
プ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ヘ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ベ</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ペ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ホ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ボ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ポ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
マ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ミ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ム</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
メ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
モ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ャ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ヤ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ュ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ユ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ョ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ヨ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ラ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
リ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ル</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
レ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ロ</td></tr>
<tr align="center" height="25" bgcolor="#ffffff">
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ヮ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ワ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ヰ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ヱ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ヲ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ン</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ヴ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ヵ</td>
<td style="cursor:pointer;" onclick="charAply(this.innerHTML)" onmouseover="this.style.background='#8AF4F8';" onmouseout="this.style.background='#ffffff';">
ヶ</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td></tr></tbody></table>
<?php endif?>



<script type="text/javascript">
//<![CDATA[
function charAply(c)
{
	opener.EditDrop(c);
	window.focus();
}
self.resizeTo(550,420);
//]]>
</script>
