

<div id="mjointbox">

	<div class="title">
		회원관리 모듈은 <span class="b">회원가입/로그인/마이페이지</span>를 포함하고 있습니다.<br />
		연결할 페이지를 선택해 주세요.
	</div>

	<input type="button" value="회원가입" class="btnblue" onclick="dropJoint('<?php echo $g['s']?>/?r=<?php echo $r?>&m=<?php echo $smodule?>&front=join');" />
	<input type="button" value="로그인" class="btnblue" onclick="dropJoint('<?php echo $g['s']?>/?r=<?php echo $r?>&m=<?php echo $smodule?>&front=login');" />
	<input type="button" value="마이페이지" class="btnblue" onclick="dropJoint('<?php echo $g['s']?>/?r=<?php echo $r?>&m=<?php echo $smodule?>&front=mypage');" />

</div>

<style type="text/css">
#mjointbox {}
#mjointbox .title {border-bottom:#dfdfdf dashed 1px;padding:0 0 10px 0;margin:0 0 20px 0;line-height:150%;}
</style>




