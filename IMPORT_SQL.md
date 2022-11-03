/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts(tm) (http://www.nukescripts.net)     */
/* Copyright © 2000-2008 by NukeScripts(tm)             */
/********************************************************/

DO NOT use the sql files if you use the import function found
in the nsnst.php file, doing so will corrupt your data table!

This package contains sql dump files that can be imported thru
your phpMyAdmin panel. You MUST start with the ip2country_1.sql
file and then continue with each one in turn. The first sql file
will empty the IP To Country data table and start loading the
fresh update. If you do not start with the first file you WILL
corrupt your IP To Country data table!

The $prefix is set to nuke as a default so if your site uses a
different $prefix you will have to do a global search and
replace.