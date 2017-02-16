<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);

$i = 0;
$j = 0;
$MEMBERS = array();
if($price) $price = $how == '+' ? $price : -$price;
$html = $act == 'send_paper' ? 'TEXT' : $html;
$subject = trim($subject);
$content = trim($content);
$comment = trim($comment);
$memo = trim($memo);
$send_time = $year1.$month1.$day1.$hour1.$min1.'00';

if ($act == 'send_email')
{
	include_once $g['path_core'].'function/email.func.php';
}

if ($all)
{
	$RCD = getDbArray($table['s_mbrdata'],stripslashes($_WHERE),'*','memberuid','desc',0,1);
	while($M2 = db_fetch_array($RCD))
	{
		$M1 = getUidData($table['s_mbrid'],$M2['memberuid']);
		$MEMBERS[] = array_merge($M1,$M2);
	}
}
else {
	foreach ($mbrmembers as $val)
	{
		$M1 = getUidData($table['s_mbrid'],$val);
		$M2 = getDbData($table['s_mbrdata'],'memberuid='.$M1['uid'],'*');
		if (!$M2['memberuid']) continue;
		$MEMBERS[] = array_merge($M1,$M2);
	}
}

if (substr($act,0,4) == 'dump')
{
	header( "Content-type: application/vnd.ms-excel;" ); 
	header( "Content-Disposition: attachment; filename=members_".str_replace('dump_','',$act)."_".$date['today'].".xls" ); 
	header( "Content-Description: PHP4 Generated Data" );

	echo '<meta http-equiv="content-type" content="text/html; charset=utf-8" />';
	echo '<table border="1">';
	if ($act == 'dump_alldata')
	{
		echo '<tr>';
		echo '<td>Id</td>';
		echo '<td>Name</td>';
		echo '<td>Nicname</td>';
		echo '<td>Email</td>';
		echo '<td>Homepage</td>';
		echo '<td>Sex</td>';
		echo '<td>Birthday</td>';
		echo '<td>Birthtype</td>';
		echo '<td>Tel1</td>';
		echo '<td>Tel2</td>';
		echo '<td>Zipcode</td>';
		echo '<td>Address</td>';
		echo '<td>Job</td>';
		echo '<td>Marrday</td>';
		echo '<td>Point</td>';
		echo '<td>UsePoint</td>';
		echo '<td>Date</td>';
		echo '</tr>';
	}
}

foreach ($MEMBERS as $M)
{
	//회원인증
	if ($act == 'tool_auth')
	{
		getDbUpdate($table['s_mbrdata'],'auth='.$auth,'memberuid='.$M['memberuid']);
	}
	//회원그룹
	if ($act == 'tool_sosok')
	{
		if ($sosok != $M['sosok'])
		{
			getDbUpdate($table['s_mbrdata'],'sosok='.$sosok,'memberuid='.$M['memberuid']);
			getDbUpdate($table['s_mbrgroup'],'num=num-1','uid='.$M['sosok']);
			getDbUpdate($table['s_mbrgroup'],'num=num+1','uid='.$sosok);
		}
	}
	//회원등급
	if ($act == 'tool_level')
	{
		if ($level != $M['level'])
		{
			getDbUpdate($table['s_mbrdata'],'level='.$level,'memberuid='.$M['memberuid']);
			getDbUpdate($table['s_mbrlevel'],'num=num-1','uid='.$M['level']);
			getDbUpdate($table['s_mbrlevel'],'num=num+1','uid='.$level);
		}
	}
	//회원삭제
	if ($act == 'tool_delete')
	{
		getDbDelete($table['s_mbrsns'],'memberuid='.$M['memberuid']);
		getDbDelete($table['s_mbrid'],'uid='.$M['memberuid']);
		getDbDelete($table['s_mbrdata'],'memberuid='.$M['memberuid']);
		getDbDelete($table['s_mbrcomp'],'memberuid='.$M['memberuid']);
		getDbDelete($table['s_paper'],'my_mbruid='.$M['memberuid']);
		getDbDelete($table['s_point'],'my_mbruid='.$M['memberuid']);
		getDbDelete($table['s_scrap'],'mbruid='.$M['memberuid']);
		getDbDelete($table['s_simbol'],'mbruid='.$M['memberuid']);
		getDbDelete($table['s_friend'],'my_mbruid='.$M['memberuid'].' or by_mbruid='.$M['memberuid']);
		getDbUpdate($table['s_mbrlevel'],'num=num-1','uid='.$M['level']);
		getDbUpdate($table['s_mbrgroup'],'num=num-1','uid='.$M['sosok']);


		if (is_file($g['path_var'].'simbol/'.$M['photo']))
		{
			unlink($g['path_var'].'simbol/'.$M['photo']);
		}
		if (is_file($g['path_var'].'simbol/180.'.$M['photo']))
		{
			unlink($g['path_var'].'simbol/180.'.$M['photo']);
		}
		$fp = fopen($g['path_tmp'].'out/'.$M['id'].'.txt','w');
		fwrite($fp,$date['totime']);
		fclose($fp);
		@chmod($g['path_tmp'].'out/'.$M['id'].'.txt',0707);
	}
	//회원탈퇴
	if ($act == 'tool_out')
	{
		getDbUpdate($table['s_mbrdata'],'auth=4','memberuid='.$M['memberuid']);
	}
	//포인트지급
	if ($act == 'give_point')
	{
		getDbUpdate($table['s_mbrdata'],$pointType.'='.$pointType.'+'.$price,'memberuid='.$M['memberuid']);
		getDbInsert($table['s_'.$pointType],'my_mbruid,by_mbruid,price,content,d_regis',"'".$M['memberuid']."','0','".$price."','".$comment."','".$date['totime']."'");	
	}
	//쪽지전송
	if ($act == 'send_paper')
	{
		$QKEY = 'parent,my_mbruid,by_mbruid,inbox,content,html,upload,d_regis,d_read';
		$QVAL = "'0','".$M['memberuid']."','".$my['uid']."','1','".$memo."','$html','$upload','".$send_time."',''";
		getDbInsert($table['s_paper'],$QKEY,$QVAL);
		getDbUpdate($table['s_mbrdata'],'is_paper=1','memberuid='.$M['memberuid']);
	}
	//메일전송
	if ($act == 'send_email')
	{
		if ($mailing && !$M['mailing']) continue;

		$subjectX = str_replace('{NAME}',$M['name'],$subject);
		$subjectX = str_replace('{NICK}',$M['nic'],$subjectX);
		$subjectX = str_replace('{ID}',$M['id'],$subjectX);
		$subjectX = str_replace('{EMAIL}',$M['email'],$subjectX);

		$contentX = str_replace('{NAME}',$M['name'],$content);
		$contentX = str_replace('{NICK}',$M['nic'],$contentX);
		$contentX = str_replace('{ID}',$M['id'],$contentX);
		$contentX = str_replace('{EMAIL}',$M['email'],$contentX);


		if (!getSendMail($M['email'].'|'.$M['name'], $my['email'].'|'.$my['name'], $subjectX, $contentX, $html))
		{
			getDbUpdate($table['s_mbrdata'],'smail=1','memberuid='.$M['memberuid']);
			$j++;
		}
		$i++;
	}
	//이메일추출
	if ($act == 'dump_email')
	{
		echo '<tr>';
		echo '<td>'.$M['name'].'</td>';
		echo '<td>'.$M['email'].'</td>';
		echo '<td>"'.$M['name'].'" <'.$R['id'].'></td>';
		echo '</tr>';
	}
	//연락처추출
	if ($act == 'dump_tel')
	{
		echo '<tr>';
		echo '<td>'.$M['name'].'</td>';
		echo '<td>'.$M['tel1'].'</td>';
		echo '<td>'.$M['tel2'].'</td>';
		echo '</tr>';
	}
	//DM추출
	if ($act == 'dump_address')
	{
		echo '<tr>';
		echo '<td>'.$M['name'].'</td>';
		echo '<td>'.substr($M['zip'],0,3).'-'.substr($M['zip'],3,3).'</td>';
		echo '<td>'.$M['addr1'].' '.$M['addr2'].'</td>';
		echo '</tr>';
	}
	//전체데이터추출
	if ($act == 'dump_alldata')
	{
		echo '<tr>';
		echo '<td>'.$M['id'].'</td>';
		echo '<td>'.$M['name'].'</td>';
		echo '<td>'.$M['nic'].'</td>';
		echo '<td>'.$M['email'].'</td>';
		echo '<td>'.$M['home'].'</td>';
		echo '<td>'.($M['sex']==1?'남':'여').'</td>';
		echo '<td>'.$M['birth1'].$M['birth2'].'</td>';
		echo '<td>'.($M['birthtype']?'음':'양').'</td>';
		echo '<td>'.$M['tel1'].'</td>';
		echo '<td>'.$M['tel2'].'</td>';
		echo '<td>'.substr($M['zip'],0,3).'-'.substr($M['zip'],3,3).'</td>';
		echo '<td>'.$M['addr1'].' '.$M['addr2'].'</td>';
		echo '<td>'.$M['job'].'</td>';
		echo '<td>'.$M['marr1'].$M['marr2'].'</td>';
		echo '<td>'.$M['point'].'</td>';
		echo '<td>'.$M['usepoint'].'</td>';
		echo '<td>'.substr($M['d_regis'],0,8).'</td>';
		echo '</tr>';
	}

}

if (substr($act,0,4) == 'dump')
{
	echo '</table>';
	exit;
}

if ($act == 'send_email')
{
	getLink('reload','parent.','총 '.$i.'명중 '.($i-$j).'명에게 전송되었습니다.','');
}
else if($act == 'send_paper')
{
	getLink('reload','parent.','전송이 완료되었습니다.','');
}
else {
	getLink('reload','parent.','','');
}
?>