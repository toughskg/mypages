<?php
if(!defined('__KIMS__')) exit;

include_once $g['dir_module'].'var/var.join.php';

if (!$my['uid'] || !$pw1 || !$pw2 || $pw1 != $pw2)
{
	getLink('','','정상적인 접근이 아닙니다.','');
}
if (md5($pw1) != $my['pw'])
{
	getLink('','','패스워드가 일치하지 않습니다.','');
}

if($d['member']['join_out']==1)
{
	getDbDelete($table['s_mbrsns'],'memberuid='.$my['uid']);
	getDbDelete($table['s_mbrid'],'uid='.$my['uid']);
	getDbDelete($table['s_mbrdata'],'memberuid='.$my['uid']);
	getDbDelete($table['s_mbrcomp'],'memberuid='.$my['uid']);
	getDbDelete($table['s_paper'],'my_mbruid='.$my['uid']);
	getDbDelete($table['s_point'],'my_mbruid='.$my['uid']);
	getDbDelete($table['s_scrap'],'mbruid='.$my['uid']);
	getDbDelete($table['s_simbol'],'mbruid='.$my['uid']);
	getDbDelete($table['s_friend'],'my_mbruid='.$my['uid'].' or by_mbruid='.$my['uid']);
	getDbUpdate($table['s_mbrlevel'],'num=num-1','uid='.$my['level']);
	getDbUpdate($table['s_mbrgroup'],'num=num-1','uid='.$my['sosok']);
	if (is_file($g['path_var'].'simbol/'.$my['photo']))
	{
		unlink($g['path_var'].'simbol/'.$my['photo']);
	}
	if (is_file($g['path_var'].'simbol/180.'.$my['photo']))
	{
		unlink($g['path_var'].'simbol/180.'.$my['photo']);
	}
	$fp = fopen($g['path_tmp'].'out/'.$my['id'].'.txt','w');
	fwrite($fp,$date['totime']);
	fclose($fp);
	@chmod($g['path_tmp'].'out/'.$my['id'].'.txt',0707);
}
else {
	getDbUpdate($table['s_mbrdata'],'auth=4','memberuid='.$my['uid']);
}

getDbUpdate($table['s_numinfo'],'mbrout=mbrout-1',"date='".$date['today']."' and site=".$s);

setcookie('svshop', '', 0, '/');
$_SESSION['mbr_uid'] = '';
$_SESSION['mbr_pw']  = '';


getLink(RW(0),'parent.','','');
?>