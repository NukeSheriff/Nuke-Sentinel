Template names must be in the form of abuse_xxxx.tpl for blocker templates or admin_xxxx.tpl
for administrative templates. NukeSentinel then picks them up and displays them in the option
list without abuse_, admin_, and .tpl .

With NukeSentinel(tm) 2.0.0 + we have introduced a template system for the blocker response
pages. This now means you are no longer forced to use the pre-written response page.
This also means you may add any type of java script or html coding to these response
pages you wish to add. You can also have a template for each blocker type so that the
response presented to the attacked is geared towards that type of attack.

There are two strains of template files. One type is prefixed with admin_ for the Proxy
Blocker and DOS Protector. The other type is prefixed with abuse_ and is for the remaining
blocker types

Below are the PRESETS that the script will search for and replace with the correct
value. Where ever you place them in your template is where they will appear in the
rendered response page. New PRESETS maybe added later on as they are found to be needed.

__MATCH__ = Displays the string it has matched against. (Harvest and Referer Blockers)
__SITENAME__ = sitename stored in the config db table
__REMOTEPORT__ = Remote port used
__REQUESTMETHOD__ = Request Method used. i.e. POST GET
__SCRIPTNAME__ = script name
__HTTPHOST__ = srever name
__USERAGENT__ = User Agent string
__CLIENTIP__ = Client IP - in case of proxy
__FORWARDEDFOR__ = HTTP Forwarded IP - incase of proxy
__REMOTEADDR__ = Remote IP - not always the same as REMOTEIP
__REMOTEIP__ = Offending ip address
__TIMEDATE__ = Time and Date of page display
__QUERYSTRING__ = Contents of the Query string
__GETSTRING__ = Contents of the GET string - similar to Query
__POSTSTRING__ = Contents of the POST string - similar to Query
__REFERER__ = Refering page
__BANTIME__ = Time of report
__BANUSERID__ = User's id number
__BANUSERNAME__ = User's username
__REMOTELONG__ = Offending ip in long format

This is a sample template:
<html>
<head>
<title>__SITENAME__: IP Blocked</title>
</head>
<body>
<p align="center">You have been blocked from entering this site.</p>
<p align="center">All of the following information has been gathered to assist the webmaster should this need to be report to local or federal officers.</p>
<p>User Agent = __USERAGENT__<br />
Remote Address = __REMOTEADDR__<br />
Client IP = __CLIENTIP__<br />
Forwarded For = __FORWARDEDFOR__<br />
Time/Date = __TIMEDATE__</p>
</body>
</html>
