<?
$title = "Grid Ecosystem - Security";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>

<!--<div id="left">
<? include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>
-->

<div id="main">

<h1 class="first">Components for Grid Security</h1>

<p><strong>Sections</strong></p>

<ol>
<li><a href="#mechanisms">Basic Security Mechanisms</a></li>
<li><a href="#generation">Components for Credential Generation</a></li>
<li><a href="#credmgmt">Components for Credential Management</a></li>
<li><a href="#authorization">Components for Access Control and Authorization</a></li>
</ol>

<p>
Managing the certificates used by Grid applications is simple in principle, but can be challenging in practice. The Grid community has developed certificate management tools for generating credentials for users and services, for getting users "signed up" to use a Grid, and for getting users' Grid credentials to wherever they're needed in a system.
</p>

<p>
Beyond verifying the identities of users and services, basic Grid security mechanisms leave access control decisions to services. The Grid community has developed authorization and access control tools for storing and providing access to system-wide authorization information and for creating a central data store for supporting decentralized control mechanisms.
</p>

<p><strong>Related Solutions:</strong>
The <strong><a href="<?=$SITE_PATHS["WEB_SOLUTIONS"]; ?>">Solutions</a></strong> section of this website
provides examples of these components being used in scientific projects. See especially the
<strong><a href="<?=$SITE_PATHS["WEB_SOLUTIONS"]."purse/"; ?>">PURSE</a></strong> (Portal-based User 
Registration Service) and <strong><a href="<?=$SITE_PATHS["WEB_SOLUTIONS"]."vomrs/"; ?>">VOMRS</a></strong> 
(Virtual Organization Management Registration Service) solutions.
</p>

<p><strong><a name="mechanisms" class="title">Basic Security Mechanisms</a></strong></p>

<p>
The Globus Toolkit's Authentication and Authorization components provide the <em>de facto</em> standard for the "core" security software in Grid systems and applications. These software development kits (SDKs) provide programming libraries, Java classes, and essential tools for a PKI, certificate-based authentication system with single sign-on and delegation features, in either Web Services or non-Web Services frameworks. ("Delegation" means that once someone accesses a remote system, he can give the remote system permission to use his credentials to access others systems on his behalf.)
</p>

<ul>
<li><strong><a href="pre-ws-aa.php">Pre-Web Services Authentication and Authorization</a></strong> - A non-Web services implementation of the Grid Security Infrastructure (GSI), containing the core libraries and tools needed to secure applications using GSI mechanisms</li>
<li><strong><a href="ws-aa.php">Web Services Authentication and Authorization</a></strong> - A Web services implementation of the Grid Security Infrastructure (GSI), containing the core libraries and tools needed to secure applications using GSI mechanisms</li>
</ul>

<p><strong><a name="generation" class="title">Components for Credential Generation</a></strong></p>

<p>
When Grid security methods are used in a system or application, users and services must provide credentials to prove their identities. Grid credentials contain data generated by cryptographic methods, so they must be produced by software programs. The following tools and services provide several ways to generate certificates for use in Grid systems and applications.
</p>

<ul>
<li><strong><a href="globus-cert-service.php">Globus Certificate Service</a></strong> - An online service that issues low-quality GSI certificates to users who want to experiment with Grid software but don't have any other means to acquire certificates</li>
<li><strong><a href="simple-ca.php">Simple CA</a></strong> - A convenient method of issuing certificates for users and services that work with GSI and WS-Security</li>
</ul>

<p><strong><a name="credmgmt" class="title">Components for Credential Management</a></strong></p>

<p>
Experience in many early Grid projects has demonstrated that it is difficult for users of Grid applications and systems to manage their own credentials. Overcoming this difficulty is a requirement for successful application deployment. The following components provide ways to avoid (or simplify) the need for users to manage their own credentials.
</p>

<ul>
<li><strong><a href="myproxy.php">MyProxy</a></strong> - A network service that stores user credentials so they can be accessed from other systems on the network</li>
<li><strong><a href="kx509-and-kca.php">KX.509 and KCA</a></strong> - A system for providing Kerberos users with Grid credentials without operating a conventional Certificate Authority</li>
<li><strong><a href="pkinit.php">PKINIT</a></strong> - A mechanism that allows a Kerberos ticket to be obtained using a Grid credential rather than a Kerberos passphrase</li>
</ul>

<p><strong><a name="authorization" class="title">Components for Access Control and Authorization</a></strong></p>

<p>
Beyond verifying the identities of users and services, basic Grid security mechanisms leave access control decisions to services. The Grid community has developed authorization and access control tools for storing and providing access to system-wide authorization information and for creating a central data store for supporting decentralized control mechanisms.
</p>

<ul>
<li><strong><a href="shibboleth.php">Shibboleth</a></strong> - A set of services that leverage existing
user authentication and authorization systems at "home institutions" to give remote services the information they
need to make authorization decisions</li>
<li><strong><a href="cas.php">Community Authorization Service (CAS)</a></strong> - A service that allows resource providers to specify course-grained access control policies in terms of communities as a whole, delegating fine-grained access control policy management to the community itself</li>
<li><strong><a href="voms.php">VOMS</a></strong> - A database-driven mechanism for central management of user role and capability data</li>
</ul>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
