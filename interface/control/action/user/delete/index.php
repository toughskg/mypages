<?php
/// Copyright (c) 2004-2015, Needlworks  / Tatter Network Foundation
/// All rights reserved. Licensed under the GPL.
/// See the GNU General Public License for more details. (/documents/LICENSE, /documents/COPYRIGHT)
require ROOT . '/library/preprocessor.php';

$IV = array(
	'GET' => array(
		'userid' => array('id')
	) 
);
requireStrictRoute();

$result = User::remove($_GET['userid']);
if ($result===true) {
	Respond::PrintResult(array('error' => 0));
}
else {
	Respond::PrintResult(array('error' => -1 , 'result' =>$result));
}
?>
