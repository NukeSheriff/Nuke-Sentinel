<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts(tm) (http://www.nukescripts.net)     */
/* Copyright © 2000-2008 by NukeScripts(tm)             */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

if(!defined("NSNST_IS_LOADED")) { header("Location: ../nsnst.php"); }
$pagetitle = $pagename.": ERROR";
include("header.php");
title($pagetitle);
OpenTable();
echo "<center><strong>Sorry, ONLY super admins may run this script</strong><center>\n";
CloseTable();
include("footer.php");

?>