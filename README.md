**NukeSentinel by NukeScripts.Net™**
(http://www.nukescripts.86it.us)     
Copyright © 2000-2008 by NukeScripts.Net™             
See CREDITS for ALL contributors

Official support forums are at: http://ravenphpscripts.com/forum61.html
If you want to use this version with Patched 2.8 or below read the post
at: http://ravenphpscripts.com/postt4951.html or read the included
PATCHED file.

SPECIAL NOTES:
From version 2.9 and forward, filenames have been changed from sentinel.xxx to
nukesentinel.xxx for clarity. For this reason you will need to remove all old
NukeSentinel(tm) files once you install and link the new NukeSentinel(tm) files.

Within the 4 block files you will note the line at the beginning:
if(!defined('NUKE_FILE') && !defined('BLOCK_FILE')) { die("You can't access this file directly..."); }

For Patched 2.8 & below this can be changed to:
if(stristr($_SERVER['SCRIPT_NAME'], "NAMEOFBLOCKFILEHERE.php")) { die("You can't access this file directly..."); }

For Patched 2.9 this can be shortened to:
if(!defined('NUKE_FILE')) { die("You can't access this file directly..."); }

For Patched 3.0 this can be shortened to:
if(!defined('BLOCK_FILE')) { die("You can't access this file directly..."); }

Sections:
1 - Copyright Notice
2 - Requirements & Latest Features
3 - Installation
4 - Upgrading
5 - Uninstallation / Deinstall
6 - Fixing the Your_Account Module Bug
7 - Core File Modifications

Section 1: Copyright Notice:
----------------------------
- Translations are permitted, not renaming.
- This package MAY NOT be ported without written permission.
- This package MAY NOT be mirrored without written permission.
- The following are the only project licenses granted at this time (These projects
  may reproduce and/or include this script).
  1) OFFICIAL NSN Regional sites
  2) Raven's PHP Scripts - http://ravenphpscripts.com
  3) ScriptHeaven - http://www.scriptheaven.net
  4) NukeResources - http://www.nukeresources.com
  5) NukeFixes - http://www.nukefixes.com
  6) NukeSecurity - http://www.nukesecurity.com
  7) 3 Geeky Guys - http://3geekyguys.com/
  8) Nukeum Online - http://nukeum66.us
  9) 64 Bit - http://64bit.us
 10) Ultra Digital - http://www.ultradigital.it

Section 2: Requirements & Latest Features:
------------------------------------------
REQUIREMENTS:
- While NukeSentinel(tm) runs with PHP-Nuke 6.6/8.1 it is recommended that you
  use 7.1 to 7.6 due to the many security issues introduced in 7.7 thru 8.1 .
- NukeSentinel(tm) requires PHP-Nuke Patched 3.3+. If you are not using Patched
  3.3 you can still use it, but you will need to make several modifications. If
  you are using v6.5, you should upgrade to 7.1 Patched 3.3 or greater.

See FEATURES.txt for a current list of features:
See CHANGES.txt for a list of the latest changes:

Section 3: DAT VS SQL:
----------------------
The simple way of updating the IP2Country data is to use the selection found
in the menu of nsnst.php . This function has been designed to complete in 9
steps. The reasoning behind making it a 9 step process is so you do not have
script time outs that would prevent all data from being imported.

The alternative means of updating your IP2Country tables is to run the SQL files
that are provided in the SQL directory directly within PHPmyadmin. See the
IMPORT_SQL.txt file for further information.

Section 4: Installation:
------------------------
Extract archive to temp dir and copy included as noted below (and chmod if shown):
(root/ means your nuke root directory)
---------------------------------------------------------------------------------
CHANGES.txt (do not upload, NukeSentinel(tm) Changes)
CREDITS.txt (do not upload, NukeSentinel(tm) Contributors)
FEATURES.txt (do not upload, NukeSentinel(tm) Features)
IMPORT.txt (do not upload, Notes about ip2country importing)
LICENSE.txt (do not upload, NukeSentinel(tm) License)
PATCHED.txt (do not upload, Instructions for patches versions)
README.txt (do not upload, your reading it)
TEMPLATES.txt (do not upload, instructions for template files)
Edits_For_Core_Files --> Instructions for core file edits
                         ALWAYS compare the edits to your files in case something
                         has changed from a previous verison!!

sample.htaccess, sample.htaccess, and sample.staccess are samples of the CGIAuth system.
In the sample.htaccess file you will see a sample of the code needed to use CGIAuth and
the sample.staccess, while empty, if renamed to .staccess, uploaded to your server then
chmoded to 666 will store the CGIAuth AID's and Passwords. ONLY ADD the CGIAuth sample
.htaccess code after setting up the rest of NukeSentinel(tm), otherwise you will be
locked out of your sites admin section. The sample.ftaccess when renamed as .ftaccess,
uploaded to your server and CHMODed to 666 will allow the flood protection to track
possible flood attacks.

Only on Apache servers -------------> root/.ftaccess (CHMOD 666)
                                                     This file should be empty to begin.
Only on Apache servers -------------> root/.htaccess (CHMOD 666)
                                                     Be sure your .htaccess file
                                                     has at least one blank line at
                                                     the end of it.
Only on Apache servers -------------> root/.staccess (CHMOD 666)
                                                     This file should be empty to begin.

Uploading Files:
----------------
NukeSentinel(tm) Files in Directories:            FTP Upload to:
html/abuse/*.*               ----------------> root/abuse/*.*
html/admin/*.*               ----------------> root/admin/*.*
html/blocks/*.*              ----------------> root/blocks/*.*
html/cache/                  ----------------> root/cache/      <--- CHMOD to 777
html/images/*.*              ----------------> root/images/*.*
html/includes/*.*            ----------------> root/includes/*.*
html/language/*.*            ----------------> root/language/*.*
html/modules/*.*             ----------------> root/modules/*.*
html/nsnst_installer/*.*     ----------------> root/nsnst_installer/*.*
html/nsnst.php               ----------------> root/nsnst.php
sql/*.*                      ----------------> do not upload, See IMPORT_SQL.txt for info.
* root = the root directory of your site.

Installation or Updating Existing NukeSentinel(tm) To Latest Version After Uploading Files:
----------------------------------------------------------------------------------------

Running the nsnst.php file:
---------------------------
1) After uploading the files, Login to your PHP-Nuke admin.php screen:
                For example:   http://www.YOURDOMAIN.com/admin.php
2) Then, in the address line of your browser, erase the admin.php and replace it with nsnst.php
                For example:   http://www.YOURDOMAIN.com/nsnst.php
This will install, upgrade, or uninstall NukeSentinel(tm) database tables.

File Edits:
=====================
See the text files found in the Edits_For_Core_Files directory of this package.
