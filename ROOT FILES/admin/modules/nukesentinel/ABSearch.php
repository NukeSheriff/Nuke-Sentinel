<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts(tm) (http://www.nukescripts.net)     */
/* Copyright ? 2000-2008 by NukeScripts(tm)             */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

if(!defined('NUKESENTINEL_ADMIN')) { header("Location: ../../../".$admin_file.".php"); }
$pagetitle = _AB_NUKESENTINEL.": "._AB_SEARCH;
include("header.php");
OpenTable();
OpenMenu(_AB_SEARCH);
mastermenu();
CarryMenu();
searchmenu();
CloseMenu();
CloseTable();
include("footer.php");

?>