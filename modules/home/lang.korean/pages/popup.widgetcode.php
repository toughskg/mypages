<div id="codebox">

	<div class="header">
		<h1>위젯코드</h1>
		<div class="guide">
		위젯코드를 사용하면 직접꾸미기 모드에서 위젯을 사용할 수 있습니다.<br />
		위젯코드를 복사하여 소스코드에 붙여넣기해 주세요.
		</div>
		<div class="clear"></div>
	</div>
	<div class="line1"></div>
	<div class="line2"></div>
	<div class="line3"></div>

	<div class="content">
		<textarea id="widgetCode"></textarea>
	</div>

	<div class="footer">
		<input type="button" value="창닫기" class="btngray" onclick="top.close();" />
	</div>
</div>


<script type="text/javascript">
//<![CDATA[
function pageSetting()
{
	getId('widgetCode').value = opener.RB_widgetCode;
	document.title = '위젯코드';
	top.resizeTo(630,330);
}
window.onload = pageSetting;
//]]>
</script>