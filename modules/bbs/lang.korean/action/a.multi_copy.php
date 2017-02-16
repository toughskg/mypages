<?php
if(!defined('__KIMS__')) exit;


checkAdmin(0);

include_once $g['path_module'].'upload/var/var.php';
$str_month = '';
$str_today = '';
$B = getUidData($table[$m.'list'],$bid);
sort($post_members);
reset($post_members);

foreach ($post_members as $val)
{

	$R = getUidData($table[$m.'data'],$val);
	if (!$R['uid']) continue;

	$mingid = getDbCnt($table[$m.'data'],'min(gid)','');
	$gid = $mingid ? $mingid-1 : 100000000.00;

	if (!$inc_comment)
	{
		$R['comment'] = 0;
		$R['oneline'] = 0;
	}
	if (!$inc_upload)
	{
		$R['upload'] = '';
	}

	$month = substr($R['d_regis'],0,6);
	$today = substr($R['d_regis'],0,8);

	//게시물복사
	$QKEY = "site,gid,bbs,bbsid,depth,parentmbr,display,hidden,notice,name,nic,mbruid,id,pw,category,subject,content,html,tag,";
	$QKEY.= "hit,down,comment,oneline,trackback,score1,score2,singo,point1,point2,point3,point4,d_regis,d_modify,d_comment,d_trackback,upload,ip,agent,sns,adddata";
	$QVAL = "'".$R['site']."','$gid','".$B['uid']."','".$B['id']."','".$R['depth']."','".$R['parentmbr']."','".$R['display']."','".$R['hidden']."','".$R['notice']."',";
	$QVAL.= "'".addslashes($R['name'])."','".addslashes($R['nic'])."','".$R['mbruid']."','".$R['id']."','".$R['pw']."','".addslashes($R['category'])."','".addslashes($R['subject'])."',";
	$QVAL.= "'".addslashes($R['content'])."','".$R['html']."','".addslashes($R['tag'])."',";
	$QVAL.= "'".$R['hit']."','".$R['down']."','".$R['comment']."','".$R['oneline']."','0','".$R['score1']."','".$R['score2']."','".$R['singo']."','0','".$R['point2']."','".$R['point3']."','".$R['point4']."',";
	$QVAL.= "'".$R['d_regis']."','".$R['d_modify']."','".$R['d_comment']."','".$R['d_trackback']."','".$R['upload']."','".$R['ip']."','".$R['agent']."','".$R['sns']."','".addslashes($R['adddata'])."'";
	getDbInsert($table[$m.'data'],$QKEY,$QVAL);
	getDbInsert($table[$m.'idx'],'site,notice,bbs,gid',"'".$R['site']."','".$R['notice']."','".$B['uid']."','$gid'");
	getDbUpdate($table[$m.'list'],"num_r=num_r+1",'uid='.$B['uid']);
	
	if(!strstr($str_month,'['.$month.']') && !getDbRows($table[$m.'month'],"date='".$month."' and site=".$R['site'].' and bbs='.$B['uid']))
	{
		getDbInsert($table[$m.'month'],'date,site,bbs,num',"'".$month."','".$R['site']."','".$B['uid']."','1'");
		$str_month .= '['.$month.']';
	}
	else {
		getDbUpdate($table[$m.'month'],'num=num+1',"date='".$month."' and site=".$R['site'].' and bbs='.$B['uid']);
	}

	if(!strstr($str_today,'['.$today.']') && !getDbRows($table[$m.'day'],"date='".$today."' and site=".$site.' and bbs='.$bbsuid))
	{
		getDbInsert($table[$m.'day'],'date,site,bbs,num',"'".$today."','".$R['site']."','".$B['uid']."','1'");
		$str_today .= '['.$today.']';
	}
	else {
		getDbUpdate($table[$m.'day'],'num=num+1',"date='".$today."' and site=".$R['site'].' and bbs='.$B['uid']);
	}

	$NOWUID = getDbCnt($table[$m.'data'],'max(uid)','');
	

	//댓글복사
	if ($inc_comment && $R['comment'])
	{

		$CCD = getDbArray($table['s_comment'],"parent='".$m.$R['uid']."'",'*','uid','desc',0,0);

		while($_C=db_fetch_array($CCD))
		{

			$comment_minuid = getDbCnt($table['s_comment'],'min(uid)','');
			$comment_uid = $comment_minuid ? $comment_minuid-1 : 100000000;
			$comment_cync = '['.$m.']['.$NOWUID.'][uid,comment,oneline,d_comment]['.$table[$m.'data'].']['.$_C['parentmbr'].'][m:'.$m.',bid:'.$B['id'].',uid:'.$NOWUID.']';


			$QKEY = "uid,site,parent,parentmbr,display,hidden,notice,name,nic,mbruid,id,pw,subject,content,html,";
			$QKEY.= "hit,down,oneline,score1,score2,singo,d_regis,d_modify,d_oneline,upload,ip,agent,cync,sns,adddata";
			$QVAL = "'$comment_uid','".$_C['site']."','".$m.$NOWUID."','".$_C['parentmbr']."','".$_C['display']."','".$_C['hidden']."','".$_C['notice']."','".addslashes($_C['name'])."','".addslashes($_C['nic'])."',";
			$QVAL.= "'".$_C['mbruid']."','".$_C['id']."','".$_C['pw']."','".addslashes($_C['subject'])."','".addslashes($_C['content'])."','".$_C['html']."',";
			$QVAL.= "'".$_C['hit']."','".$_C['down']."','".$_C['oneline']."','".$_C['score1']."','".$_C['score2']."','".$_C['singo']."','".$_C['d_regis']."','".$_C['d_modify']."','".$_C['d_oneline']."',";
			$QVAL.= "'".$_C['upload']."','".$_C['ip']."','".$_C['agent']."','$comment_cync','".$_C['sns']."','".addslashes($_C['adddata'])."'";
			getDbInsert($table['s_comment'],$QKEY,$QVAL);
			getDbUpdate($table['s_numinfo'],'comment=comment+1',"date='".substr($_C['d_regis'],0,8)."' and site=".$_C['site']);


			if ($_C['oneline'])
			{
				$_ONELINE = getDbSelect($table['s_oneline'],'parent='.$_C['uid'],'*');
				while($_O=db_fetch_array($_ONELINE))
				{
					$oneline_maxuid = getDbCnt($table['s_oneline'],'max(uid)','');
					$oneline_uid = $oneline_maxuid ? $oneline_maxuid+1 : 1;
					
					$QKEY = "uid,site,parent,parentmbr,hidden,name,nic,mbruid,id,content,html,singo,d_regis,d_modify,ip,agent,adddata";
					$QVAL = "'$oneline_uid','".$_O['site']."','$comment_uid','".$_O['parentmbr']."','".$_O['hidden']."','".addslashes($_O['name'])."','".addslashes($_O['nic'])."','".$_O['mbruid']."',";
					$QVAL.= "'".$_O['id']."','".addslashes($_O['content'])."','".$_O['html']."','".$_O['singo']."','".$_O['d_regis']."','".$_O['d_modify']."','".$_O['ip']."','".$_O['agent']."',";
					$QVAL.= "'".addslashes($_O['adddata'])."'";
					getDbInsert($table['s_oneline'],$QKEY,$QVAL);
					getDbUpdate($table['s_numinfo'],'oneline=oneline+1',"date='".substr($_O['d_regis'],0,8)."' and site=".$_O['site']);

				}
			}

			if ($inc_upload && $_C['upload'])
			{
				$UPFILES   = getArrayString($_C['upload']);
				$tmpupload = '';
				$_content  = $_C['content'];

				foreach($UPFILES['data'] as $_val)
				{
					$U = getUidData($table['s_upload'],$_val);
					if ($U['uid'])
					{
						$_tmpname = md5($U['tmpname']).'.'.getExt($U['tmpname']);
						$_thumbna = md5($U['thumbname']);

						if ($U['url']==$d['upload']['ftp_urlpath'])
						{
							$FTP_CONNECT = ftp_connect($d['upload']['ftp_host'],$d['upload']['ftp_port']); 
							$FTP_CRESULT = ftp_login($FTP_CONNECT,$d['upload']['ftp_user'],$d['upload']['ftp_pass']); 
							if (!$FTP_CONNECT) getLink('','','FTP서버 연결에 문제가 발생했습니다.','');
							if (!$FTP_CRESULT) getLink('','','FTP서버 아이디나 패스워드가 일치하지 않습니다.','');

							ftp_get($FTP_CONNECT,$g['path_tmp'].'session/'.$U['tmpname'],$d['upload']['ftp_folder'].$U['folder'].'/'.$U['tmpname'],FTP_BINARY);
							ftp_put($FTP_CONNECT,$d['upload']['ftp_folder'].$U['folder'].'/'.$_tmpname,$g['path_tmp'].'session/'.$U['tmpname'], FTP_BINARY);
							@unlink($g['path_tmp'].'session/'.$U['tmpname']);
							if($U['type']==2)
							{
								ftp_get($FTP_CONNECT,$g['path_tmp'].'session/'.$U['thumbname'],$d['upload']['ftp_folder'].$U['folder'].'/'.$U['thumbname'],FTP_BINARY);
								ftp_put($FTP_CONNECT,$d['upload']['ftp_folder'].$U['folder'].'/'.$_thumbna,$g['path_tmp'].'session/'.$U['thumbname'], FTP_BINARY);
								@unlink($g['path_tmp'].'session/'.$U['thumbname']);
							}

							ftp_close($FTP_CONNECT);
						}
						else {
							copy($g['path_file'].$U['folder'].'/'.$U['tmpname'],$g['path_file'].$U['folder'].'/'.$_tmpname);
							if($U['type']==2) copy($g['path_file'].$U['folder'].'/'.$U['thumbname'],$g['path_file'].$U['folder'].'/'.$_thumbna);
						}

						$upload_mingid = getDbCnt($table['s_upload'],'min(gid)','');
						$upload_gid = $upload_mingid ? $upload_mingid - 1 : 100000000;

						$QKEY = "gid,hidden,tmpcode,site,mbruid,type,ext,fserver,url,folder,name,tmpname,thumbname,size,width,heigth,caption,down,d_regis,d_update,cync";
						$QVAL = "'".$upload_gid."','".$U['hidden']."','','".$U['site']."','".$U['mbruid']."','".$U['type']."','".$U['ext']."','".$U['fserver']."','".$U['url']."','".$U['folder']."',";
						$QVAL.= "'".addslashes($U['name'])."','".$_tmpname."','".$_thumbna."','".$U['size']."','".$U['width']."','".$U['height']."','".addslashes($U['caption'])."',";
						$QVAL.= "'".$U['down']."','".$U['d_regis']."','".$U['d_update']."',''";
						getDbInsert($table['s_upload'],$QKEY,$QVAL);
						getDbUpdate($table['s_numinfo'],'upload=upload+1',"date='".substr($U['d_regis'],0,8)."' and site=".$U['site']);

						$tmpupload .= '['.getDbCnt($table['s_upload'],'max(uid)','').']';
						$_content = str_replace($U['tmpname'],$_tmpname,$_content);

					}
				}
				getDbUpdate($table['s_comment'],"content='".addslashes($_content)."',upload='".$tmpupload."'",'uid='.$comment_uid);
			}
		}
	}

	//첨부파일복사
	if ($inc_upload && $R['upload'])
	{

		$UPFILES   = getArrayString($R['upload']);
		$tmpupload = '';
		$_content1 = $R['content'];

		foreach($UPFILES['data'] as $_val)
		{
			$U = getUidData($table['s_upload'],$_val);
			if ($U['uid'])
			{
				$_tmpname = md5($U['tmpname']).'.'.getExt($U['tmpname']);
				$_thumbna = md5($U['thumbname']);

				if ($U['url']==$d['upload']['ftp_urlpath'])
				{
					$FTP_CONNECT = ftp_connect($d['upload']['ftp_host'],$d['upload']['ftp_port']); 
					$FTP_CRESULT = ftp_login($FTP_CONNECT,$d['upload']['ftp_user'],$d['upload']['ftp_pass']); 
					if (!$FTP_CONNECT) getLink('','','FTP서버 연결에 문제가 발생했습니다.','');
					if (!$FTP_CRESULT) getLink('','','FTP서버 아이디나 패스워드가 일치하지 않습니다.','');

					ftp_get($FTP_CONNECT,$g['path_tmp'].'session/'.$U['tmpname'],$d['upload']['ftp_folder'].$U['folder'].'/'.$U['tmpname'],FTP_BINARY);
					ftp_put($FTP_CONNECT,$d['upload']['ftp_folder'].$U['folder'].'/'.$_tmpname,$g['path_tmp'].'session/'.$U['tmpname'],FTP_BINARY);
					@unlink($g['path_tmp'].'session/'.$U['tmpname']);
					if($U['type']==2)
					{
						ftp_get($FTP_CONNECT,$g['path_tmp'].'session/'.$U['thumbname'],$d['upload']['ftp_folder'].$U['folder'].'/'.$U['thumbname'],FTP_BINARY);
						ftp_put($FTP_CONNECT,$d['upload']['ftp_folder'].$U['folder'].'/'.$_thumbna,$g['path_tmp'].'session/'.$U['thumbname'],FTP_BINARY);
						@unlink($g['path_tmp'].'session/'.$U['thumbname']);
					}
					ftp_close($FTP_CONNECT);
				}
				else {
					copy($g['path_file'].$U['folder'].'/'.$U['tmpname'],$g['path_file'].$U['folder'].'/'.$_tmpname);
					if($U['type']==2) copy($g['path_file'].$U['folder'].'/'.$U['thumbname'],$g['path_file'].$U['folder'].'/'.$_thumbna);
				}

				$upload_mingid = getDbCnt($table['s_upload'],'min(gid)','');
				$upload_gid = $upload_mingid ? $upload_mingid - 1 : 100000000;

				$QKEY = "gid,hidden,tmpcode,site,mbruid,type,ext,fserver,url,folder,name,tmpname,thumbname,size,width,height,caption,down,d_regis,d_update,cync";
				$QVAL = "'$upload_gid','".$U['hidden']."','','".$U['site']."','".$U['mbruid']."','".$U['type']."','".$U['ext']."','".$U['fserver']."','".$U['url']."',";
				$QVAL.= "'".$U['folder']."','".addslashes($U['name'])."','".$_tmpname."','".$_thumbna."','".$U['size']."','".$U['width']."','".$U['height']."',";
				$QVAL.= "'".addslashes($U['caption'])."','".$U['down']."','".$U['d_regis']."','".$U['d_update']."',''";
				getDbInsert($table['s_upload'],$QKEY,$QVAL);
				getDbUpdate($table['s_numinfo'],'upload=upload+1',"date='".substr($U['d_regis'],0,8)."' and site=".$U['site']);

				$tmpupload .= '['.getDbCnt($table['s_upload'],'max(uid)','').']';
				$_content1 = str_replace($U['tmpname'],$_tmpname,$_content1);
			}
		}
		getDbUpdate($table[$m.'data'],"content='".addslashes($_content1)."',upload='".$tmpupload."'",'uid='.$NOWUID);
	}

	$_SESSION['BbsPost'.$type] = str_replace('['.$R['uid'].']','',$_SESSION['BbsPost'.$type]);

}


$referer = $g['s'].'/?r='.$r.'&iframe=Y&m=admin&module='.$m.'&front=movecopy&type='.$type;

getLink($referer,'parent.','실행되었습니다.','');
?>