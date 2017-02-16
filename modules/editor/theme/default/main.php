

<div id="editbox">

	<div id="toolsbox" class="tools">
		<div id="editSizeBtn" class="hsizeBox">
		<div><img src="<?php echo $g['img_module']?>/f_minus.gif" title="높이줄이기" alt="" onclick="fieldSize('-');" /><br /><img src="<?php echo $g['img_module']?>/f_plus.gif" title="높이늘이기" alt="" onclick="fieldSize('+');" /></div>
		</div>

		<img src="<?php echo $g['img_module']?>/btn_editor.gif" id="editImage" title="편집형식변경" alt="" onclick="editselect();" />
		<img src="<?php echo $g['img_module']?>/btn_h.gif" id="JustEditBtn_19" title="형식" alt="" onclick="fonthead();" />
		<img src="<?php echo $g['img_module']?>/btn_font.gif" id="JustEditBtn_17" title="글꼴" alt="" onclick="fontfamily();" />
		<img src="<?php echo $g['img_module']?>/btn_size.gif" id="JustEditBtn_18" title="크기" alt="" onclick="fontsize();" />

		<img src="<?php echo $g['img_module']?>/b.gif" id="JustEditBtn_1" title="굵게 (Ctrl+B)" alt="" onclick="TagEdit('Bold');" /><img src="<?php echo $g['img_module']?>/i.gif" id="JustEditBtn_2" title="기울이기 (Ctrl+I)" alt="" onclick="TagEdit('Italic');" /><img src="<?php echo $g['img_module']?>/u.gif" id="JustEditBtn_3" title="밑줄 (Ctrl+U)" alt="" onclick="TagEdit('Underline');" /><img src="<?php echo $g['img_module']?>/s.gif" id="JustEditBtn_4" title="가운데줄" alt="" onclick="TagEdit('StrikeThrough');" /><img src="<?php echo $g['img_module']?>/textcolor.gif" id="JustEditBtn_5" title="글자색" alt="" onclick="fontcolor();" /><img src="<?php echo $g['img_module']?>/bgcolor.gif" id="JustEditBtn_6" title="글자배경색" alt="" onclick="fontbg();" />

		<img src="<?php echo $g['img_module']?>/left.gif" id="JustEditBtn_7" title="왼쪽정렬" alt="" onclick="TagEdit('JustifyLeft');" /><img src="<?php echo $g['img_module']?>/center.gif" id="JustEditBtn_8" alt="" title="중앙정렬" onclick="TagEdit('JustifyCenter');" /><img src="<?php echo $g['img_module']?>/right.gif" id="JustEditBtn_9" title="오른쪽정렬" alt="" onclick="TagEdit('JustifyRight');" /><img src="<?php echo $g['img_module']?>/normal.gif" id="JustEditBtn_10" title="양쪽맞춤" alt="" onclick="TagEdit('JustifyFull');" /><img src="<?php echo $g['img_module']?>/num.gif" id="JustEditBtn_11" title="번호붙힘" alt="" onclick="TagEdit('InsertOrderedList');" /><img src="<?php echo $g['img_module']?>/ul.gif" id="JustEditBtn_12" title="구분기호" alt="" onclick="TagEdit('InsertUnorderedList');" /><img src="<?php echo $g['img_module']?>/gleft.gif" id="JustEditBtn_13" title="왼쪽으로 밀기" alt="" onclick="TagEdit('Outdent');" /><img src="<?php echo $g['img_module']?>/gright.gif" id="JustEditBtn_14" title="오른쪽으로 밀기" alt="" onclick="TagEdit('Indent');" />

		<img src="<?php echo $g['img_module']?>/plugin.gif" id="JustEditBtn_16" title="확장요소" alt="" onclick="showCompo();" />

		<img src="<?php echo $g['img_module']?>/tag.gif" id="JustEditBtn_15" title="소스보기" alt="" onclick="SrcView();" />


	</div>
	
	<div id="EditLayer"></div>

	<div class="area">
		<textarea name="editAreaTextarea" id="editAreaTextarea"></textarea>
		<iframe name="editAreaIframe" id="editAreaIframe" frameborder="0"></iframe>
	</div>


	<div class="status">

	</div>

</div>


<div id="setIfrCode">
<iframe name="ColorArea" src="<?php echo $g['dir_module']?>lib/color.html" width="0" height="0" frameborder="0" scrolling="no"></iframe>
<iframe name="ColorBgArea" src="<?php echo $g['dir_module']?>lib/color_bg.html" width="0" height="0" frameborder="0" scrolling="no"></iframe>
</div>

<div id="setCssCode">
&lt;html&gt;
&lt;head&gt;
&lt;style type="text/css"&gt;
body{font-family:gulim;font-size:12px;line-height:1.5;margin:0;podding:0;}
h1,h2,h3,h4,h5,h6,p{line-height:1.5;margin:0px;padding:0px;}
img{border:0px;}
a:link{text-decoration:none;color:#000000;}
a:visited{text-decoration:none;color:#000000;}
a:hover{text-decoration:none;color:#3E8FFC;}
.dashline{border:#BBBBBB dashed 1px;}
&lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;&lt;/body&gt;
&lt;/html&gt;
</div>


<script type="text/javascript">
//<![CDATA[
var i;
var ismobile = '<?php echo $g['mobile']?>';
var iwidth = parseInt(screen.width);
var iheight= parseInt(screen.height);
var ltdsize= iwidth > iheight ? iwidth : iheight;
var EditForm;
var EditSelc;
var EditChck;
var EditRange = null;
var ThisFrame = frames.name;
var editSrcMode = false;

if (ltdsize < 961 || ismobile != '')
{
	var editParentHtml = 'TEXT';
	var editStartMode  = editParentHtml;
	var editAreaTool   = 'N';
	var editAreaHeight = 50;
}
else {
	var editParentHtml = parent.getId(ThisFrame+'Html');
	var editStartMode  = editParentHtml ? editParentHtml.value : 'HTML';
	var editAreaTool   = '<?php echo $toolbox?>';
	var editAreaHeight = ThisFrame ? parseInt(parent.getId(ThisFrame).height) : parseInt(screen.availHeight)-150;
}

function setEditMode()
{
	EditForm = frames.editAreaIframe;
	EditForm.document.designMode = 'on';
	EditForm.document.write(getId('setCssCode').innerHTML.replace(/&lt;/g,'<').replace(/&gt;/g,'>'));

	EditRange = EditForm.document.selection;
	if(navigator.userAgent.indexOf('Chrome') != -1 || navigator.userAgent.indexOf('Safari') != -1) frames.editAreaIframe.focus();

	if (!editParentHtml)
	{
		getId('editSizeBtn').style.display = 'none';
	}
	if (editAreaTool == 'N')
	{
		getId('toolsbox').style.display = 'none';
	}
	else {
		getId('toolsbox').style.display = 'block';
	}

	<?php if($reSize=='N'):?>
	getId('editSizeBtn').style.display = 'none';
	<?php endif?>

	getAreaSet(editStartMode,'start');
}

window.onload = setEditMode;
//]]>
</script>
