<?php
$title = "Grid Solutions - Registering Users for ESG";
$section = "section-5";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include_once($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>

<div id="main">

<h1 class="first">Registering Users For The Earth System Grid</h1>

<p>
The Earth System Grid (ESG) provides climate studies scientists 
with access to large datasets that are important for their work. 
These datasets are generated by computational models of the Earth's 
climate, and they require massive computational power to produce. 
They are highly-valuable community resources. Most scientists work 
with portions ("subsets") of this data at any given time, and their 
analysis work requires them to obtain local copies of subsets drawn 
from the massive storage systems that contain the complete datasets.
</p>

<div id="solutions-sidebar" style="float: right; margin-right: 1em">
<h2>More Information</h2>
<ul>
<li><a href="https://www.earthsystemgrid.org/about/overviewPage.do">About ESG</a></li>
<li><a href="architecture.php">System Architecture</a></li>
<li><a href="resources.php">Software Availability</a></li>
<?php if (!$SITE_CONTENT["GRIDS"]) { ?>
<li><a href="http://www.grids-center.org/solutions/purse/">PURSE at the GRIDS Center</a></li>
<?php } ?>
</ul>
</div>

<p>
The ESG data is housed in data centers operated by national 
organizations. ESG users register with a Web portal 
(www.earthsystemgrid.org) and can then use that portal to discover, 
browse, and request subsets of datasets. The requested data is 
retrieved from appropriate storage systems and downloaded to the 
user's workstation.
</p>

<p>
The ESG infrastructure is a distributed system made up of physical 
devices and software services, including:
</p>

<ul>
<li>Archival storage systems and disk storage systems at several sites
<li>Storage resource managers (SRMs) and GridFTP servers that provide access to the storage systems
<li>Metadata catalog services that contain descriptive information about the data
<li>Replica location services that keep track of copies of datasets when they're made
<li>The Web portal that provides the user interface to the system 
</ul>

<p>
These components are integrated to allow ESG users to find and 
download the data they need based on queries that use terms 
familiar to them. 
</p>

<img src="worldmap.jpg" width=454 height=229 alt="Earth System Grid"
     style="float: right; margin-left: 10px;">

<p>
Because ESG is a distributed system and includes services at multiple
institutions, it uses Grid security (GSI) for authenticating users and
services.
</p>

<h2>The Challenge</h2>

<p>
Because ESG uses Grid security for authenticating users, a Grid certificate
must be created for every user. This certificate must be used whenever the
user requests data from the system or requests analysis that requires 
significant processing. ESG intends to support a large community of users,
so thousands of certificates must be created. The work required to keep track
of and respond to registration requests (tasks performed by ESG 
administrators) must be minimized.
</p>

<p>
ESG uses a web portal interface, so most users have no ESG software on their
local system other than a standard web browser. Users do not need to install
any ESG or Grid software.
</p>

<p>
The challenge for ESG, therefor, is to provide a system that allows users to 
register with the ESG web portal that results in a Grid certificate being 
created for them.  The system must also store that certificate in such a way 
that it is available to the web portal when the users logs into the portal 
and requests Grid services such as data retrieval or data analysis. 
</p>

<h2>The Solution</h2>

<p>
PURSE is an "integrated solution" that provides an easy-to-use web interface for 
potential users of an application to "register" themselves and request sign-in 
credentials. Administrators receive requests and decide whether to grant them or not. 
When a user is registered, a Grid credential is created on his behalf and used 
"behind the scenes" whenever he uses the application.
</p>

<p>
PURSE combines the <a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."security/simple-ca.php"; ?>">Simple CA</a> 
and <a href="<?=$SITE_PATHS["WEB_SOFTWARE"]."security/myproxy.php"; ?>">MyProxy</a> components with a 
back-end database (e.g., MySQL) and a web portal to automate user registration requests. The 
registration interface solicits basic data from user, including a desired ID/password combination.  
Requests are forwarded by email to an administrator and the data from the requests are stored in a 
database.  The administrator uses administrative functions in the web portal to process requests. 
Users receive email notification when their accounts are ready for use.
</p>

<p>
When an account is created, the portal generates a credential for that account automatically using the Simple CA component.  This credential is issued by the application administrator, so it is most likely only "valid" for use with the specific application and no others.  The credential is stored in the MyProxy service and secured using the requested ID/password combination.
</p>

<p>
When a user logs into the application, the application obtains a Grid proxy certificate from the MyProxy service using the user's ID/password, and the application can then use this proxy to authenticate to any other Grid service that recognizes credentials issued by the application administrator.
</p>


<p>Key benefits:</p>

<ul>
<li>Users never have to see or manage their Grid credentials.</li>
<li>The MyProxy service is automatically populated with user credentials which can be retrieved either from web portal interfaces or from desktop systems using the MyProxy client tools.</li>
<li>A database is automatically populated with basic information about all application users.</li>
<li>The registration service, user credentials, and MyProxy service can be re-used in other applications.</li>
</ul>

<h2>Results</h2>

<p>
ESG has been using PURSE since 2004 and has registered several hundred users. ESG
users can register with the system, create a simpel login ID/password combination,
and then log into the ESG web portal and make requests that utilize services at
several different institutions--all authenticated with Grid security--without ever
seeing or having to personally manage their Grid certificates. This significantly
lower the "barrier to entry" for new ESG users and makes the system much easier to
use on a regular basis without being any less secure. ESG administrators can
receive, track, and process registration requests using a web interface as well.
ESG knows who its users are (based on registration data and use logs), and is now
on its way to being able to define specialized authorization rules that give
different users different permissions within the system based on their Grid 
identities.
</p>

<p>
To see an example of PURSE in use, visit the 
<a href="http://www.earthsystemgrid.org/">Earth System Grid</a> Web site and click 
the Login link. The registration form will ask you for a purpose for your use of
ESG; enter "I'm interested in seeing PURSE in action," and the ESG administrators
will provide you with a login that will allow you to log in to the system but 
with limited access to the ESG Grid services. When you log in to the system, look
at the bottom of the web page and you will see that the web portal has created a
Grid proxy certificate and is using it on your behalf to request Grid services.
</p>

<p>
The NSF Middleware Initiative's GRIDS Center team has adopted the PURSE software
developed by ESG and produced a 
<a href="http://www.grids-center.org/solutions/purse/">public version</a> that can 
be reused in other Grid projects. The GRIDS Center conducted security and code 
reviews and usability reviews of the software prior to the public release and made 
signficant improvements and feature additions during this work.
</p>

<h2>More Information</h2>
<ul>
<?php if (!$SITE_CONTENT["GRIDS"]) { ?>
<li><a href="http://www.grids-center.org/solutions/purse/">PURSE at the GRIDS Center</a></li>
<?php } ?>
<li><a href="architecture.php">PURSE System Architecture</a></li>
<li><a href="resources.php">Software Availability</a></li>
<li><a href="https://www.earthsystemgrid.org/about/overviewPage.do">The Earth System Grid</a></li>
</ul>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
