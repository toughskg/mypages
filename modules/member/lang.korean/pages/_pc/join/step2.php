
<div id="pages_join">


	<form name="procForm" action="<?php echo $g['s']?>/" method="post">
	<input type="hidden" name="r" value="<?php echo $r?>" />
	<input type="hidden" name="c" value="<?php echo $c?>" />
	<input type="hidden" name="m" value="<?php echo $_m?>" />
	<input type="hidden" name="front" value="<?php echo $front?>" />
	<input type="hidden" name="mod" value="<?php echo $_GET['mod']?>" />
	<input type="hidden" name="page" value="step3" />
	<input type="hidden" name="comp" value="0" />

	<h2>회원가입</h2>

	<div class="msg">
		반드시 본인의 이름(실명)과 주민등록번호를 입력해 주세요.
		<?php if($d['member']['form_age']):?>
		<div class="agebox">
		(만 14세 미만은 회원가입을 하실 수 없습니다)
		</div>
		<?php endif?>
	</div>

	<div class="mbox">
		<span>이름 <input type="text" name="regis_name" id="regis_name" class="input" size="13" /></span>
		주민등록번호 <input type="text" name="regis_jumin1" id="regis_jumin1" class="input" size="7" maxlength="6" onkeyup="zumpjumin(this)" />-<input type="text" name="regis_jumin2" id="regis_jumin2" class="input" size="7" maxlength="7" />
	</div>

	<div class="msg1">
		<span class="t1">잠깐! 본인의 실명과 주민등록번호를 입력했나요?</span><br />
		타인의 주민등록번호를 도용하여 가입할 경우, 다른 이용자 분들이 어려움을 겪을 뿐 아니라<br />
		도용이 밝혀지면 모든 가입정보(아이디,적립금등)가 삭제처리됩니다.<br /><br />
		주민등록번호는 개인의 중요한 정보이니, 반드시 본인의 주민등록번호로 가입해 주시기 바랍니다.<br /><br />
		<span class="t2">타인의 주민등록번호를 사용하거나 허위의 주민등록번호를 사용할 경우 주민등록법에 따라 3년이하의 징역 또는 1천만원 이하의 벌금에 처해질 수 있습니다.</span><br />
	</div>

	<div class="submitbox">
		<input type="button" value="가입취소" class="btngray" onclick="goHref('<?php echo $g['r']?>/');" />
		<?php if($d['member']['form_comp']):?>
		<input type="button" value="개인회원가입" class="btnblue" onclick="return check_jumin2(0);" />
		<input type="button" value="기업회원가입" class="btnblue" onclick="return check_jumin2(1);" />
		<?php else:?>
		<input type="button" value="다음단계로" class="btnblue" onclick="return check_jumin2(0);" />
		<?php endif?>
	</div>



	</form>
</div>


<script type="text/javascript">
//<![CDATA[
function zumpjumin(obj)
{
	var jumin2 = getId('regis_jumin2');
	if (obj.value.length == 6)
	{
		jumin2.focus();
	}
}
function check_jumin2(n)
{
	var f = document.procForm;
	var name = getId('regis_name');
	var jumin1 = getId('regis_jumin1');
	var jumin2 = getId('regis_jumin2');
 
	if (name.value == '')
	{
		alert('이름을 입력해 주세요.           ');
		name.focus();
		return false;
	}
 
	var yy		= jumin1.value.substr(0,2);
	var mm      = jumin1.value.substr(2,2);
	var dd		= jumin1.value.substr(4,2);
	var genda   = parseInt(jumin2.value.substr(0,1));
	var cc;
	var c_year	= "<?php echo substr($date['today'],0,4)?>";
	var c_month	= "<?php echo substr($date['today'],4,2)?>";
	var c_day	= "<?php echo substr($date['today'],6,2)?>";
	var c_yy	= genda < 3 ? 1900+parseInt(yy) : 2000+parseInt(yy);
	var not_age	= 14;
 
	if (!isNumeric(jumin1.value)) {
			alert("주민등록번호 앞자리를 숫자로 입력하세요.");
			jumin1.focus();
			return;
	}
	if (jumin1.value.length != 6) {
			alert("주민등록번호 앞자리를 다시 입력하세요.");
			jumin1.focus();
			return;
	}
	if (yy < "00" || yy > "99" ||
			mm < "01" || mm > "12" ||
			dd < "01" || dd > "31") {
			alert("주민등록번호 앞자리를 다시 입력하세요.");
			jumin1.focus();
			return;
	}
	if (!isNumeric(jumin2.value)) {
			alert("주민등록번호 뒷자리를 숫자로 입력하세요.");
			jumin2.focus();
			return;
	}
	if (jumin2.value.length != 7) {
			alert("주민등록번호 뒷자리를 다시 입력하세요.");
			jumin2.focus();
			return;
	}
	if (genda < 1 || genda > 4) {
			alert("주민등록번호 뒷자리를 다시 입력하세요.");
			jumin2.focus();
			return;
	}
	cc = (genda == 1 || genda == 2) ? 19 : 20;
	if (isYYYYMMDD(parseInt(cc+yy), parseInt(mm), parseInt(dd)) == false) {
			alert("주민등록번호 앞자리를 다시 입력하세요.");
			jumin1.focus();
			return;
	}
	if (!isSSN(jumin1.value, jumin2.value)) {
			alert("입력한 주민등록번호를 검토한 후, 다시 입력하세요.");
			jumin1.focus();
			return;
	}	
 
 <?php if($d['member']['form_age']):?>
	if(c_year-c_yy<not_age){
		alert('\n만 '+not_age+'세 미만은 가입할 수 없습니다.              \n');
		jumin1.value='';
		jumin2.value='';
		jumin1.focus();
		return;
	}
	else if((c_year-c_yy==not_age)&&(mm>c_month)){
		alert('\n만 '+not_age+'세 미만은 가입할 수 없습니다.              \n');
		jumin1.value='';
		jumin2.value='';
		jumin1.focus();
		return;
	}
	else if((c_year-c_yy==not_age)&&(mm==c_month)&&(dd>c_day)){
		alert('\n만 '+not_age+'세 미만은 가입할 수 없습니다.              \n');
		jumin1.value='';
		jumin2.value='';
		jumin1.focus();
		return;
	}
<?php endif?>
 
	f.comp.value = n;
	f.submit();
	return true;
}
 
function isYYYYMMDD(y, m, d) {
        switch (m) {
        case 2: 
			if (d > 29) return false;
			if (d == 29) 
			{
				if ((y % 4 != 0) || (y % 100 == 0) && (y % 400 != 0)) return false;
			}
			break;
        case 4 : 
        case 6 :
        case 9 :
        case 11:
            if (d == 31) return false;
        }
        return true;
}
function isNumeric(s) 
{
	for (i=0; i<s.length; i++) 
	{
		c = s.substr(i, 1);
		if (c < "0" || c > "9") return false;
	}
	return true;
}
function isLeapYear(y) 
{
	if (y < 100)
	y = y + 1900;
	if ( (y % 4 == 0) && (y % 100 != 0) || (y % 400 == 0) ) {
			return true;
	} else {
			return false;
	}
}
function getNumberOfDate(yy, mm) 
{
	month = new Array(29,31,28,31,30,31,30,31,31,30,31,30,31);
	if (mm == 2 && isLeapYear(yy)) mm = 0;
	return month[mm];
}
function isSSN(s1, s2) 
{
	n = 2;
	sum = 0;
	for (i=0; i<s1.length; i++)
			sum += parseInt(s1.substr(i, 1)) * n++;
	for (i=0; i<s2.length-1; i++) {
			sum += parseInt(s2.substr(i, 1)) * n++;
			if (n == 10) n = 2;
	}
	c = 11 - sum % 11;
	if (c == 11) c = 1;
	if (c == 10) c = 0;
	if (c != parseInt(s2.substr(6, 1))) return false;
	else return true;
}
//]]>
</script>