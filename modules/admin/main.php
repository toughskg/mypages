<?php
if(!defined('__KIMS__')) exit;
if(!file_exists($g['path_var'].'db.info.php'))
{
	$g['switch_1'] = array();
	$g['switch_2'] = array();
	$g['switch_3'] = array();
	$g['switch_4'] = array();
	$mod = 'install';
}
if ($mod == 'install')
{
	if (file_exists('./wpi.var.php'))
	{
		include_once $g['path_core'].'function/sys.func.php';
		getLink('./?m=admin&a=install','','','');
	}
	else {
		$g['browtitle'] = 'kimsQ-Rb Installer';
		$g['s'] = '.';
		$g['img_core'] = $g['s'].'/_core/image';
		$g['img_install'] = $g['s'].'/modules/'.$m.'/_install/image';
		$g['dir_module'] = $g['path_module'].$m.'/';
		$g['url_module'] = $g['s'].'/modules/'.$m;
		$g['dir_module_mode'] = $g['dir_module'].'_install/main';
		$g['url_module_mode'] = $g['url_module'].'/_install/main';
		$g['main'] = $g['dir_module'].'_install/main.php';
	}
}
else {


	if (!$my['admin'])
	{
		$g['browtitle'] = 'kimsQ-Rb Administration Login';
		$mod = 'login';
	}

	if(!$mod) $mod = 'front';

	$module = $module ? $module : 'admin';
	$front  = $front  ? $front  : 'main';
	$MD = getDbData($table['s_module'],"id='".$module."'",'*');
	if (!$MD['id']) getLink($g['s'].'/?r='.$r.'&m=admin&module=admin','','등록되지 않는 모듈입니다.','');
	if ($MD['id']!='admin'&&strpos('_'.$my['adm_view'],'['.$MD['id'].']')) getLink($g['s'].'/?r='.$r.'&m=admin&module=admin','','접근권한이 없습니다.','');

	if (!is_dir($g['path_module'].$module.'/lang.'.$_HS['lang'])) $_HS['lang']=$g['sys_lang'];

	if ($g['mobile']&&$_SESSION['pcmode']!='Y')
	{
		$d['module']['skin'] = $d['admin']['thememobile'];
		$g['dir_module_skin'] = $g['dir_module'].'lang.'.$_HS['lang'].'/theme/_mobile/'.$d['module']['skin'].'/';
		$g['url_module_skin'] = $g['url_module'].'/lang.'.$_HS['lang'].'/theme/_mobile/'.$d['module']['skin'];

		if (is_dir($g['path_module'].$module.'/lang.'.$_HS['lang']))
		{
			$g['dir_module_admin'] = $g['path_module'].$module.'/lang.'.$_HS['lang'].'/admin/_mobile/'.$front;
			$g['url_module_admin'] = $g['s'].'/modules/'.$module.'/lang.'.$_HS['lang'].'/admin/_mobile/'.$front;
			$g['img_module_admin'] = $g['s'].'/modules/'.$module.'/lang.'.$_HS['lang'].'/admin/_mobile/image';
			$g['adm_module_varmenu'] = $g['path_module'].$module.'/lang.'.$_HS['lang'].'/admin/_mobile/var/var.menu.php';
		}
		else {
			$g['dir_module_admin'] = $g['path_module'].$module.'/admin/_mobile/'.$front;
			$g['url_module_admin'] = $g['s'].'/modules/'.$module.'/admin/_mobile/'.$front;
			$g['img_module_admin'] = $g['s'].'/modules/'.$module.'/admin/_mobile/image';
			$g['adm_module_varmenu'] = $g['path_module'].$module.'/admin/_mobile/var/var.menu.php';
		}
	}
	else {
		$d['module']['skin'] = $d['admin']['themepc'];
		$g['dir_module_skin'] = $g['dir_module'].'lang.'.$_HS['lang'].'/theme/_pc/'.$d['module']['skin'].'/';
		$g['url_module_skin'] = $g['url_module'].'/lang.'.$_HS['lang'].'/theme/_pc/'.$d['module']['skin'];

		if (is_dir($g['path_module'].$module.'/lang.'.$_HS['lang']))
		{
			$g['dir_module_admin'] = $g['path_module'].$module.'/lang.'.$_HS['lang'].'/admin/_pc/'.$front;
			$g['url_module_admin'] = $g['s'].'/modules/'.$module.'/lang.'.$_HS['lang'].'/admin/_pc/'.$front;
			$g['img_module_admin'] = $g['s'].'/modules/'.$module.'/lang.'.$_HS['lang'].'/admin/_pc/image';
			$g['adm_module_varmenu'] = $g['path_module'].$module.'/lang.'.$_HS['lang'].'/admin/_pc/var/var.menu.php';
		}
		else {
			$g['dir_module_admin'] = $g['path_module'].$module.'/admin/_pc/'.$front;
			$g['url_module_admin'] = $g['s'].'/modules/'.$module.'/admin/_pc/'.$front;
			$g['img_module_admin'] = $g['s'].'/modules/'.$module.'/admin/_pc/image';
			$g['adm_module_varmenu'] = $g['path_module'].$module.'/admin/_pc/var/var.menu.php';
		}
	}
	
	$g['adm_module']	  = $g['path_module'].$module.'/admin.php';
	$g['img_module_skin'] = $g['url_module_skin'].'/image';
	$g['dir_module_mode'] = $g['dir_module_skin'].$mod;
	$g['url_module_mode'] = $g['url_module_skin'].'/'.$mod;
	$g['browtitle']		  = 'kimsQ-Rb Administration Mode';
	$g['adm_href']		  = $g['s'].'/?r='.$r.'&amp;m='.$m.'&amp;module='.$module.'&amp;front='.$front;

	if (is_file($g['adm_module_varmenu']))
	{
		$d['amenu'] = array();
		include_once $g['adm_module_varmenu'];
	}
	$g['main'] = $my['admin'] && $iframe == 'Y' ? $g['adm_module'] : $g['dir_module_mode'].'.php';
}
?>