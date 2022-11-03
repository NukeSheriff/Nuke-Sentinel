<?php

/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts(tm) (http://www.nukescripts.net)     */
/* Copyright © 2000-2008 by NukeScripts(tm)             */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

if(!defined("NSNST_IS_LOADED")) { header("Location: ../nsnst.php"); }
$pagetitle = $pagename;
include("header.php");
title($pagetitle);
OpenTable();
echo '<table summary="" align="center" border="0" cellpadding="2" cellspacing="2">'."\n";
echo '<tr><td>This script will install, remove or upgrade the tables for the '.$pagename.'.</td></tr>'."\n";
echo '<tr><td align="center"><strong>Backup data tables before going on!</strong></td></tr>'."\n";
echo '<tr><td align="center"><form action="'.$_SERVER['PHP_SELF'].'" method="post">'."\n";
echo '<select multiple size="10" name="op">'."\n";
echo '<option value="" disabled="disabled">------ Install Options ------</option>'."\n";
echo '<option value="install"';
if($checkns) { echo ' disabled="disabled"'; }
echo '>'.$pagename.' First Time Install</option>'."\n";
echo '<option value="" disabled="disabled">------ Upgrade Options ------</option>'."\n";
echo '<option value="up25xx-26xx"';
if(!$checkns || $ab_config['version_number'] >= '2.6.00') { echo ' disabled="disabled"'; }
echo '>Upgrade '.$pagename.' 2.5.xx to 2.6.00 tables</option>'."\n";
echo '<option value="" disabled="disabled">------ Removal Options ------</option>'."\n";
echo '<option value="remove"';
if(!$checkns) { echo ' disabled="disabled"'; }
echo '>Remove '.$pagename.'</option>'."\n";
echo '<option value="" disabled="disabled">--- IP to Country Options ---</option>'."\n";
echo '<option value="ip2country_01"';
if(!$checkip || $ab_config['version_number'] < '2.6.00') { echo ' disabled="disabled"'; }
echo '>Upgrade IP to Country data</option>'."\n";
echo '</select><br /><input type="submit" value="COMMIT" />'."\n";
echo '</form></td></tr>'."\n";
echo '<tr><td align="center"><strong>Once you have finished with this script, delete it<br />';
echo 'and the <i>nsnst_installer</i> directory from your server!</strong></td></tr>'."\n";
echo '</table><br />'."\n";
echo '<table summary="" border="0" cellpadding="0" cellspacing="0" align="center">'."\n";
echo '<tr><td width="100%" align="center"><strong>Help Support NukeSentinel(tm)</strong></td></tr>'."\n";
echo '<tr><td width="100%" align="center"><a href="http://www.nukescripts.net/modules.php?name=Donations"><img src="https://www.paypal.com/en_US/i/btn/x-click-but21.gif" border="0" alt="Make donations with PayPal!" title="Make donations with PayPal!" /></a></td></tr>'."\n";
echo '</table>'."\n";
CloseTable();
include("footer.php");

?>