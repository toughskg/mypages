<?php
/// Copyright (c) 2004-2015, Needlworks  / Tatter Network Foundation
/// All rights reserved. Licensed under the GPL.
/// See the GNU General Public License for more details. (/documents/LICENSE, /documents/COPYRIGHT)
require ROOT . '/library/preprocessor.php';
if (!empty($_GET['name']) && setPrimaryDomain($blogid, $_GET['name']))
	Respond::ResultPage(0);
Respond::ResultPage( - 1);
?>
