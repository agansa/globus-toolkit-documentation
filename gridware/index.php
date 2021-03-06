<?php

// 2004-10-13, robinett: changed links to *.php

$title = "The Grid Ecosystem";
$section = "section-4";
include_once( "../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>
<!--<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>
-->

<div id="main">
<!-- content STARTS here -->

	<h1 class="first">The Grid Ecosystem: Software Components for Grid Systems And Applications</h1>

    <p>Software is a vital part of Grid projects.  The open source community has produced a wide
    variety of Grid software components. Understanding the capabilities of each component, the strengths
    and weaknesses of each, and the types of problems that are currently covered (or not covered)
    by these components can be a bewildering challenge for new Grid projects.  Moreover, each new Grid 
    project has a unique set of requirements that must be met by a unique combination of software 
    components.</p>

    <p>GRIDS Center team members have gained experience with using software components in a number 
    of successful Grid projects.  This section of our website provides a description of the role 
    that software plays in Grid projects and descriptions of many of the software tools that GRIDS 
    Center members and our partners have used successfully in ambitious Grid applications.
    You may choose from the following areas, which are reflected in the navigational submenu to the left.</p>

    <blockquote><b><a href="ecology.php">An Ecosystem of Grid Components</a></b> describes the GRIDS Center's general 
    approach to using software components in Grid projects and applications.</blockquote>
    
    <blockquote><b><a href="role-of-gt.php">Role of the Globus Toolkit</a></b> explains the special role that the 
    Globus Toolkit<sup>&reg;</sup> plays in Grid projects and why the Globus Alliance uses it in this 
    way.</b></blockquote>

    <blockquote><b><a href="security/">Security</a></b> describes a number of useful software 
    tools for meeting the security requirements in Grid systems.</blockquote>
    
    <blockquote><b><a href="monitoring/">Monitoring and Discovery</a></b> describes software 
    components that can provide monitoring and discovery features in Grid systems.</blockquote>
    
    <blockquote><b><a href="computation/">Computation</a></b> describes software tools that can 
    be used to manage computational tasks in Grid applications.</blockquote>
    
    <blockquote><b><a href="data/">Data</a></b> describes software tools that can be used to 
    manage data and datasets in data-intensive applications.</blockquote>
    
    <blockquote><b><a href="collaboration/">Collaboration</a></b> describes software for 
    facilitating and encouraging collaboration in distributed projects.</blockquote>
    
    <blockquote><b><a href="packaging/">Packaging and Distribution</a></b> describes tools 
    for helping to create integrated software distributions for use in Grid projects.</b></blockquote>

<!-- content ENDS here -->

</div>
<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>
