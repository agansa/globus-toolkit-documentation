<?php
$title = "Grid Solutions - Registering Users For ESG (Architecture)";
$section = "section-5";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>

<div id="main">

<h1 class="first">Registering Users for ESG - System Architecture</h1>

<p>
The PURSE system used by ESG uses the Grid Security Infrastructure (GSI) 
technology from the Globus Toolkit for authenticating users and services
within the ESG system. PURSE uses the Simple CA component for generating
new user certificates and the MyProxy component for managing user 
certificates.  The administrator interface, request tracking workflow, 
and user registration and login interfaces are provided by a set of 
server portlets that are intended to be customized for each application.
</p>

<img align="right" border=0 src="PURSE-1.jpg" style="float: right; margin-left: 0.3em" />

<p>
The figure to the right illustrates the high-level flow of control through
the system for a user registration request, registration approval and 
certificate generation, and a subsequent login request and authenticated use
of Grid services. Step 1 is the user filling out the registration form on the
ESG website. Step 2 includes the ESG administrator reviewing the request and
approving it, at which point a certificate request is given to the Simple CA
certificate authority software.  Step 3 is the newly generated certificate being
stored in the MyProxy server. (At this point, email will be sent to the user 
informing him/her that his/her account is now activated and ready for use.)  Once 
steps 1-3 have been completed, the user is registered and can begin using the 
ESG portal.
</p>

<p>
Step 4 is the user entering his/her login ID and password at the ESG website.
Step 5 is the web portal using this ID/password to obtain a proxy certificate 
for the user from the MyProxy server. Step 6 is the web portal using this proxy
to authenticate to ESG Grid services on the user's behalf in order to fulfill the
user's requests.
</p>
	
<h2>Simple CA</h2>

<p>
Simple CA is a set of software tools that generate certificates that can be
used with GSI-based software.  Using Simple CA, PURSE administrators can
generate certificates that are "signed" (certified) by the project or 
organization using PURSE. Most likely, these certificates will not be trusted
by other projects or organizations. (If necessary, trust relationships can be 
established through social channels and agreement on policies and procedures.)
They can be used within the project, however, wherever a Grid certficate is
required.
</p>


<h2>MyProxy</h2>

<p>
PURSE uses the MyProxy service to store user certificates in a central location.
MyProxy offers interfaces for importing certificates (in this case, certificates
generated by Simple CA) and for negotiating the creation of a proxy certificate
based on a user certificate stored in MyProxy. User certificates are secured in
MyProxy using a simple user ID and password. Once a user certificate is stored in
MyProxy, the user ID and password can be used to authorize creation of a shorter-
term proxy certificate on a remote system (a web server, for example) that can
be used to authenticate Grid service requests on behalf of the original user.
</p>

<p>
MyProxy uses the delegation feature of GSI to create a proxy certificate on the
web server. This means that the web server obtains only a short-lived proxy, not
the original long-term certificate. It also means that the original certificate 
is never passed over a network connection: not even via a secure channel. These
are both important security features.
</p>

<h2>Web Server Portlets</h2>

<p>
PURSE uses web server portlets for the login and registration interfaces that the
user sees, the administrative interface that the administrator sees and uses to
track and complete registration requests, and the MyProxy interface used to 
obtain proxy certificates when users log in to the portal. These portlets were
written to work with Apache Tomcat, and they are intended to be customized for
each portal application.
</p>

<h2>Database Support</h2>

<p>
PURSE uses a database to store registration information and to track the status of
registration requests. The public PURSE distribution requires the MySQL database.
</p>

</div>

<?  include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>
