<?php
if(!defined('__KIMS__')) exit;

checkAdmin(0);

$name = trim($name);
$name = str_replace('http://','',$name);
$name = str_replace('/','',$name);

if ($cat && !$vtype)
{

	$R = getDbData($table['s_domain'],"uid<>".$cat." and name='".$name."'",'*');
	if ($R['uid'])
	{
		getLink('','','이미 등록된 도메인입니다.','');
	}

	getDbUpdate($table['s_domain'],"name='$name',site='$site'",'uid='.$cat);

	getLink('reload','parent.','','');
}
else {

	$R = getDbData($table['s_domain'],"name='".$name."'",'*');
	if ($R['uid'])
	{
		getLink('','','이미 등록된 도메인입니다.','');
	}

	$MAXC = getDbCnt($table['s_domain'],'max(gid)','depth='.($depth+1).' and parent='.$parent);

	$gid	= $MAXC+1;
	$xdepth	= $depth+1;

	getDbInsert($table['s_domain'],"gid,isson,parent,depth,name,site","'$gid','0','$parent','$xdepth','$name','$site'");

	if ($parent)
	{
		getDbUpdate($table['s_domain'],'isson=1','uid='.$parent);
	}

	db_query("OPTIMIZE TABLE ".$table['s_domain'],$DB_CONNECT); 

	getLink($g['s'].'/?r='.$r.'&m=admin&module='.$m.($parent?'&cat='.$parent:''),'parent.','','');
}
?>