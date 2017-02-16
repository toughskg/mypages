<?php
function LIB_getContents($str,$html)
{
	global $d;
	// 20120709 타이니님 제공
	if ($html == 'HTML')
	{
		$pattern = array 
		(
			$d['admin']['secu_iframe'] ? '' : "'<iframe[^>]*?>'si",
			$d['admin']['secu_script'] ? '' : "'<script[^>]*?>'si",
			$d['admin']['secu_style'] ? '' : "'<style[^>]*?>'si",
			"'<meta[^>]*?>'si",
		);
		foreach ($pattern as $val) if ($val) $patterns[] = $val;
		
		$iframes = getIframes($str);
		$secuDomain = explode(',',$d['admin']['secu_domain']);
		foreach ($iframes as $im)
		{
			foreach ($secuDomain as $dm) 
			{
				if(stripos($im,$dm))
				{
					$str = str_replace($im,str_ireplace('iframe','@IFRAME@',$im),$str);
					break;
				}
			}
		}

		$str = str_replace('<A href=','<a target="_blank" href=',$str);
		$str = str_replace('<a href=','<a target="_blank" href=',$str);
		$str = str_replace('<a target="_blank" href="#','<a href="#',$str);
		$str = str_replace(' target="_blank">','>',$str);
		$str = str_replace('< param','<param',$str);
		$str = str_replace("\t",'&nbsp;&nbsp;&nbsp;&nbsp;',$str);
		$str = preg_replace($patterns,' ',$str);
		$str = str_replace('@IFRAME@','iframe',$str);

		$onAttributes = array('onabort', 'onactivate', 'onafterprint', 'onafterupdate', 'onbeforeactivate', 'onbeforecopy', 'onbeforecut', 'onbeforedeactivate', 'onbeforeeditfocus', 'onbeforepaste', 'onbeforeprint', 'onbeforeunload', 'onbeforeupdate', 'onblur', 'onbounce', 'oncellchange', 'onchange', 'onclick', 'oncontextmenu', 'oncontrolselect', 'oncopy', 'oncut', 'ondataavaible', 'ondatasetchanged', 'ondatasetcomplete', 'ondblclick', 'ondeactivate', 'ondrag', 'ondragdrop', 'ondragend', 'ondragenter', 'ondragleave', 'ondragover', 'ondragstart', 'ondrop', 'onerror', 'onerrorupdate', 'onfilterupdate', 'onfinish', 'onfocus', 'onfocusin', 'onfocusout', 'onhelp', 'onkeydown', 'onkeypress', 'onkeyup', 'onlayoutcomplete', 'onload', 'onlosecapture', 'onmousedown', 'onmouseenter', 'onmouseleave', 'onmousemove', 'onmoveout', 'onmouseover', 'onmouseup', 'onmousewheel', 'onmove', 'onmoveend', 'onmovestart', 'onpaste', 'onpropertychange', 'onreadystatechange', 'onreset', 'onresize', 'onresizeend', 'onresizestart', 'onrowexit', 'onrowsdelete', 'onrowsinserted', 'onscroll', 'onselect', 'onselectionchange', 'onselectstart', 'onstart', 'onstop', 'onsubmit', 'onunload');        
		$str = preg_replace('/<(.*?)>/ie', "'<' . preg_replace(array('/javascript:[^\"\']*/i', '/(" . implode('|', $onAttributes) . ")[ \\t\\n]*=/i', '/\s+/'), array('', '', ' '), stripslashes('\\1')) . '>'", $str);
		$str = str_replace('imgOrignWin(this.src)=""','onclick="imgOrignWin(this.src);"',$str);
		$str = str_replace('imgorignwin(this.src)=""','onclick="imgOrignWin(this.src);"',$str);
		if ($GLOBALS['my']['admin']&&!$d['admin']['secu_flash'])
		{
			$mat = '<div class="sysMsgBox"><img src="'.$GLOBALS['g']['img_core'].'/_public/ico_notice.gif" alt="" />'.$GLOBALS['lang']['sys']['sysmsg'].'</div>';
			$str = preg_replace("#(\<(embed|object)[^\>]*)\>(\<\/(embed|object)\>)?#i",$mat,$str);
		}

		$_atkParam = array(';a=','&a=','?a=','m=admin','system=');
		foreach($_atkParam as $_prm)
		{
			$str = str_replace($_prm,'',$str);
		}
	}
	else {
		$str = str_replace('<','&lt;',$str);
		$str = str_replace('>','&gt;',$str);
		$str = str_replace('&nbsp;','&amp;nbsp;',$str);
		$str = str_replace("\t",'&nbsp;&nbsp;&nbsp;&nbsp;',$str);
		$str = nl2br($str);
	}
	return $str;
}
function getIframes($str) 
{  
	preg_match_all("/<iframe[^>]*?>/si", $str, $mat);
	return $mat[0];
}
?>