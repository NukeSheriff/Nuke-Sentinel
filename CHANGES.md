NukeSentinel(tm)                                     
By: NukeScripts(tm) (http://www.nukescripts.86it.us)     
Copyright © 2000-2008 by NukeScripts(tm)             
See CREDITS.txt for ALL contributors                 

2.6.00 CHANGES (2008-06-30):
· Includes IP2Country 2008-06-27 updated imports.
  · Not in upgrade package.
· Minor code fixes.
· Reworked Harvester, Referer, and String list systems.
· New IP2Country updating system.
· Removed unused lang defines.
· Removed unused functions.
· Added page for setting default blocker page.
· Removed meta refresh tags and replaced with javascript
  refresh routines.
· Removed gz functions in favor of ZIP class.

2.5.19 CHANGES (2008-06-08):
· Includes IP2Country 2008-05-19 updated imports.
  · Not in upgrade package.
· Minor code fixes.
· XHTML compliance completion.

2.5.18 CHANGES (2008-05-23):
· Includes IP2Country 2008-05-19 updated imports.
  · Not in upgrade package.
· XHTML compliance updates. (99% compliant)
· Updated graphics.
· Updated many of the admin scripts.
· Renamed many files to better fit naming scheme.
· Improved paging in admin pages.
· Updated DB Maintaince functions.
· Added DB Backup function.
· Replaced <marquee> tags with javascripting for XHTML compliance.

2.5.17 CHANGES (2008-03-24):
· Includes IP2Country 2008-03-24 updated imports.
  · Not in upgrade package.
· HTML compliance updates
· SQL compliance updates

2.5.16 CHANGES (2008-02-03):
· Includes IP2Country 2008-02-03 updated imports.
  · Not in upgrade package.
· Removed auto version check code. Caused to many issues.
· Replaced most graphics with new look.
· Added checks to prevent reversed ranges from being added.
· Added Printer Friendly page for IP Search Results.
· Minor code updates for cleaner GUI.

2.5.15 CHANGES (2007-12-28):
· Includes IP2Country 2007-12-28 updated imports.
  · Not in upgrade package.
· Improved logic in includes file.
· Improved socket testing. (Thanks to Raven)
· Admin GUI updates.
· TegoNuke Mailer support added (Thanks to montego)

2.5.14 CHANGES (2007-11-03):
· Includes IP2Country 2007-11-03 updated imports.
  · Not in upgrade package.
· Maintainance updates.
· Compliance updates.

2.5.13 CHANGES (2007-09-28):
· Includes IP2Country 2007-09-28 updated imports.
  · Not in upgrade package.
· Serious security hole patched.

2.5.12 CHANGES (2007-09-25):
· Includes IP2Country 2007-09-21 updated imports.
  · Not in upgrade package.
· Addressed security risk in nsbypass file.
· Added security escaping on nukesentinel file.

2.5.11 CHANGES (2007-08-12):
· Includes IP2Country 2007-08-10 updated imports.
  · Not in upgrade package.
· Verified version compliance with PHP-Nuke 6.6 Patched 3.3 thru PHP-Nuke 8.1 Patched 3.3
· Minor bug fixes.

2.5.10 CHANGES (2007-06-01):
· Includes IP2Country 2007-06-01 updated imports.
  · Not in upgrade package.
· Added prevention of latest security issue (Thanks to Evaders99).

2.5.09 CHANGES (2007-05-25):
· Includes IP2Country 2007-05-25 updated imports.
  · Not in upgrade package.
· Added IP lookup link to Tracked Users IPs Page.
· Added IP lookup link to Tracked Refers IPs Page.
· Added IP lookup link to Tracked Agents IPs Page.
· Fixed sorting on Tracked Agents Page.
· Fixed sorting on Track Agents Pages page.
· Fixed Country name not showing on a few pages.
· Fixed flag image not showing on a couple of pages.

2.5.08 CHANGES (2007-05-06):
· Includes IP2Country 2007-05-04 updated imports.
  · Not in upgrade package.
· Updated Country table.
· Cleaned up some admin GUI. (More is planned)
· Fixed missing country in two pages.

2.5.07 CHANGES (2007-03-13):
· Includes IP2Country 2007-03-09 updated imports.
  · Both data and sql versions. (Not in upgrade package)
· Corrected a problem in regex for invalid ip testing.

2.5.06 CHANGES (2007-03-02):
· Includes IP2Country 2007-03-02 updated imports.
  · Both data and sql versions. (Not in upgrade package)
· Updated XSS filters for https:// and http://
· More html complaince changes
· Corrected a problem causing valid ip users to be tagged
  as invalid users
· Other minor code changes

2.5.05 CHANGES (2007-01-22):
· Includes IP2Country 2007-01-19 updated imports.
  · Both data and sql versions. (Not in upgrade package)
· Moved nsbypass.php into the includes directory (Per User Requests).
· Corrected admin displays for page numbering and sorting.
· HTML/XML compliance (Thanks to Raven).
· Updated Search to have IP Search and Range Search.
· Fixed glitch in version checking. Was storing wrong data.
· Additional HTML/XML compliance.

2.5.04 CHANGES (2006-12-22):
· Includes IP2Country 2006-12-22 updated imports.
  · Both data and sql versions. (Not in upgrade package)
· All new referer tracking admin system.
· Speed enhancements. (Thanks to Evaders99 & Technocrat)
· Bug repairs. (Thanks to Evaders99 & Technocrat)
· Added new display fields for templates. (se TEMPLATES.txt)
· Additional bug repairs reported by you.

2.5.03 CHANGES (2006-11-03):
· Includes IP2Country 2006-11-03 updated imports.
  · Both data and sql versions. (Not in upgrade package)
· Updated import function with javascript to cycle thru list.
· Updated Blocked IP Listing to open new window per ip.
· Updated to prevent admins getting banned checking links.
· Began XML compliance conversion.
· Began Tracked Refer addition.
· Corrected admin menu alignment issue. (Thanks to montego)
· Updated includes file to minimize PHP notice warnings. (Thanks to Evaders99)
· Reordered and added indexes to speed up tracked ip searching.

2.5.02 CHANGES (2006-08-16):
· Includes IP2Country 2006-08-11 updated imports.
  · Both data and sql versions. (Not in upgrade package)
· Updated scripting filters.
· Added an automated version checking system to help admins keep
  upto date protection. (checks once daily)
· Repaired Tracked Agents sorting bug.
· Removed country name from IP to Country table. (was redundant)
· Updated blocked clearing for a more correct clearing.
· Corrected bug affecting viewing the referers list in admin.

2.5.01 CHANGES (2006-08-04):
· Includes IP2Country 2006-08-03 updated imports.
  · Both data and sql versions. (Not in upgrade package)
· Corrected overlooked change in sql queries.

2.5.00 CHANGES (2006-07-10):
· Includes IP2Country 2006-07-09 updated imports.
  · Took , out of filenames.
· Checks for empty user agent.
· Re-added flood protection.
· Added template viewer resource in admin.
· Added template source viewer resource in admin.
· Added Tracked User Agents with ability to add agents to the harvester list.
· Added new setting so that old tracked ip's are cleared only once
  per day. (speed enhancement)
· Added new setting so that expired blocked ip's and ranges are
  cleared only once per day. (speed enhancement)
· Installer adds the installing admin's ip into the protected
  ip range table and the excluded ip range table.
· Added disable switch to allow for testing of interactions between
  NukeSentinel(tm) and other modules/addons.
· Upgraded OverLib 4.0.0 to OverLib 4.2.1 .
· Updated tracked and blocked ip's tables for better sorting by ip
  address.
· Removed unused lang defines.

2.4.2pl9 CHANGES (2006-06-09):
· CRITICAL UPDATE: phpBB & user injection update.
· Corrected lang define that caused poor display.
· Code corrections (Thanks to Technocrat).

2.4.2pl8 CHANGES (2006-06-05):
· CRITICAL UPDATE: phpBB injection update.
· Updated language file (Thanks to Raven).

2.4.2pl7 CHANGES (2006-05-31):
· Updated to compensate for register_globals being turned off.
· Improved POST and GET checking.
· Improved ENV variable pick up.

2.4.2pl6 CHANGES (2006-05-14):
· Added 6 requested countries.
· Updated admin list routines.
· Removed problematic Flood Blocker.
· Freed up released IANA Reserved ranges.
· Minor bug/code fixes.

2.4.2pl5 CHANGES (2006-04-04):
· Added alt and title to image tags for compliance.
· Updated the "Scan for New Admins" routine.
· Updated the main configuration routine.
· Updated XSS attack filters.

2.4.2pl4 CHANGES (2006-02-11):
· Includes IP2Country 2006-02-10 updated imports.
· Fix for Force NukeURL.
· Fix for Flood system.
  Thanks to technocrat for these fixes!

2.4.2pl3 CHANGES (2006-01-10):
· CGI Auth fix to correct the NukeSentinel(tm) username written to .staccess file.

2.4.2pl2 CHANGES (2005-12-16):
· Enhanced - NukeSentinel(tm) SQL Injection exploit fix

2.4.2pl1 CHANGES (2005-12-10):
· NukeSentinel(tm) SQL Injection exploit fix

2.4.2 CHANGES (2005-09-20):
· Includes IP2Country 2005-09-19 updated imports.
· Corrected save routines that were/are corrupted by the WYSIWYG editor.
· Removed extra block files.

2.4.1 CHANGES (2005-09-07):
· Includes IP2Country 2005-09-07 updated imports.
· Improved Scripting Attack filters.
· Repaired a couple of missing </form> tags in admin pages.
· A few other minor bugs fixed.

2.4.0b CHANGES (2005-08-31):
· Updated abuse folder files for 100% W3C HTML 4.01 Transitional Compliance.
· Updated database table indexing to improve performance.
· Added sorting options for Blocked Ranges.
· Added option to email new IP2Country ranges to NSN.
· Few minor bugs fixed.

2.4.0a CHANGES (2005-08-23):
· Updated for 100% W3C HTML 4.01 Transitional Compliance.
· Updated Blocks for titles and compliance.
· Moved "Country List" link to main menu.
· Few minor bugs fixed.

2.4.0 CHANGES (2005-08-11):
· Updated .staccess writing.
· Corrected problem in the blocked range check routine.
· Updated the Blocked Range Add routine.
· Updated the Excluded Range Add routine.
· Updated the Reserved Range Add routine.
· Updated the Protected Range Add routine.
· Moved Reserved Ranges into IP2Country table where they should be.
· Updated template pages to use browser default coloring. (abuse directory)
· Changed template logo image to a generic image. (abuse directory)

2.3.2 CHANGES (2005-07-19):
· Re-ordered the lang file to prevent Undefined error.
· ChatServ updates to replace $x == "" to empty($x) in many locations.
· Updated Edit Instructions (Includes updates by ChatServ for Patched 3.1).
· Moved import directory out of the admin directory structure so it can be deleted
  after importing data easier.
· Added routines to check range database table for overlaps.
· Updated import data (ip2country data from the NukeSecripts site).
· NEW Flood Protection on GET and POST requests. (Thanks to Manuel)
· Added global for SERVER_ADDR as $nsnst_const['server_ip'] . Can be usefull in
  other scripts for check if the request comes from yoru server or from a client.

2.3.1 CHANGES (2005-06-28):
· Changed the IP Tracking from a max number of lines to a max number of days.
· Added the gfx=gfx_little clause to prevent from being tracked and wasting db space.
· Removed unused code and language defines.
· Corrected a Serch Results error.

2.3.0 CHANGES (2005-06-13):
· Adapted for 7.7 WYSIWYG editor. (Thanks to WD-40)
· Enclosed table and field names with ` marks on sql queries.
· Improved the Add IP 2 Country Range failure report page.
· includes/nukesentinel.php checks for the $admin_file var and sets it if it isn't set.
· Added Country Listing page in IP 2 Country management. Now you can easily find the
  c2c codes.

2.2.1 CHANGES (2005-05-04):
· Adapted for 7.5/7.6.

2.2.0 pl4 CHANGES (2005-04-12):
· Code patches

2.2.0 pl3 CHANGES (2005-04-10):
· Code patches

2.2.0 pl2 CHANGES (2005-03-28):
· Code patches

2.2.0 pl1 CHANGES (2005-03-12):
· Code patches

2.2.0 CHANGES (2005-03-11):
· Recoded includes/nukesentinel.php to load and run faster.
· Rebuilt the Search function to search all ip areas at once and display the results.
· Added test switch for HTTPAuth and register_globals. Helps prevent admins being
  locked out of admin.php .
· Added switch for Santy Worm protection.
· NEW import system for adding IP 2 Country data and importing Blocked Ranges.
· Created master globals in includes/nukesentinel.php for easier and faster processing.
  · You can use the new master global by adding $nsnst_const to your global lines thruout
    PHP-Nuke.

2.1.3 CHANGES (2004-12-30):
· Corrected a bad case for IP2C Searching.
· Corrected the is_god function. Around line 800 you can allow superusers in but as
  default it requires GOD status.
· Corrected teh blockers error of an empty set.
· A couple of other minor code changes.
· Corrected a missing HELP define.
· Added Santy Worm protection (Thanks to NSN France)
· Added check box so you can return to the Add IP/Range screens faster

2.1.2c CHANGES (2004-12-26):
· Code patches

2.1.2b CHANGES (2004-12-24):
· Corrected a bad case for IP2C Searching.
· Corrected the is_god function. Around line 800 you can allow superusers in but as
  default it requires GOD status.
· Corrected teh blockers error of an empty set.
· A couple of other minor code changes.
· Corrected a missing HELP define.

2.1.2a CHANGES (2004-12-13):
· Code patches

2.1.2 CHANGES (2004-12-13):
· Code patches

2.1.1 CHANGES (2004-11-05):
· Database updates

2.1.0 CHANGES (2004-10-17):
· Corrected problem with sites pulling your backend.php news feed.
· Corrected minor code errors.
· Corrected minor code problems.
· Reordered blockers for better trapping of attacks.
· Added Blocked Ranges.
· Added Excluded Ranges.
· Added Protected Ranges.
· Added IP Tracking.

2.0.2 CHANGES (2004-09-05):
· Code patches

2.0.1 CHANGES (2004-08-07):
· Code patches

2.0.0 CHANGES (2004-08-04):
· Modified the mouseovers to mouseclicks for Help System.
· Added mouseclicks for Info System.
· Proxy Blocker.
· DOS Protection.
· Blocker specific write to htaccess file (if server supports it).
· Blocker specific forwarding.
· Protected admins (can only be setup by God admin)
· HTTPAuth now included (if server supports it).

1.2.0 CHANGES (2004-07-08):
· Blocker specific responses.
· Block settings to show ip lookup link and reason.
· Multiple email addresses. (may need work).
· Will match db stored ips of xxx.*.*.* or xxx.0.0.0 as global blocks.

1.1.0 CHANGES (2004-06-01):
· Repaired PC Killer loop problem.
· Reconfigured the nsnst_config table.
· Repaired lang file loading.
· Updated blockers to allow email only, block and email, and off.
· Updated the lang-english.php file.
· Repaired Edit Blocked IP routine.
· Repaired Sentinel(tm) Configuration.
· Now clears users sessions from both nuke and forums tables.
· Added block 2 that shows ip lookups to the public as well as to admins.

1.0.0 First release (2004-05-29):
· The admin can either have the default page display or forward the blocked ip
  user to a url.
· Writes to Apache server .htaccess file for increased security on blocking.
· Cleaned up coding and variables.
· Can remove blocked ip's from the .htaccess file while removing them from the db.
· Can alter blocked ip's in the .htaccess file while altering them in the db.
· Improved paging system in admin.
· Added Remote IP and User Agent to the blocked page display.
· Added CLIKE protection with on/off switch.
· Added UNION protection with on/off switch.
· Added on/off switch for Harvester protection.
· Improved speed on blocked ip checking.
· Added AUTHORS table protection with on/off switch.
· Added Page Sorting options for blocked ip pages.
· Added PC Killer option.
· Added "Last 10 Blocked IPs" block.
