<?php
if(!defined('__KIMS__')) exit;

if (!$my['uid'])
{
	getLink('','','정상적인 접근이 아닙니다.','');
}

$pointType = $pointType ? $pointType : 'point';
if ($my['admin'])
{
	foreach($members as $val)
	{
		$P = getUidData($table['s_'.$pointType],$val);
		if (!$P['uid']) continue;
		
		getDbDelete($table['s_'.$pointType],'uid='.$P['uid']);
		//getDbUpdate($table['s_mbrdata'],$pointType.'='.$pointType.'-'.$P['price'],'memberuid='.$P['my_mbruid']);
	}
}
else {
	foreach($members as $val)
	{
		$P = getUidData($table['s_'.$pointType],$val);
		if (!$P['uid'] || $my['uid'] != $P['my_mbruid']) continue;

		getDbDelete($table['s_'.$pointType],'uid='.$R['uid'].' and my_mbruid='.$my['uid']);
		//getDbUpdate($table['s_mbrdata'],$pointType.'='.$pointType.'-'.$P['price'],'memberuid='.$my['uid']);
	}
}

getLink('reload','parent.','','');
?>