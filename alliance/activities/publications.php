<?php

$title = "Globus: Alliance - Publications";

$section = "section-2";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
?>
<!--
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'alliance.inc'); ?>
</div>
-->

<div id="main">
<!-- content STARTS here -->

<h1>Publications from Globus Alliance Members</h1>

<p>Members of the Globus Alliance should consult these <b> <a href="bibliography.php"> guidelines for submitting bibliographic citations</a></b>.</p>
<p>Papers are generally available in Adobe Acrobat PDF format, for which a <a href="http://www.adobe.com/prodindex/acrobat/readstep.html">free reader is available</a>, or in <a href="http://www.gzip.org">GNU zipped</a> postscript (PS). They are listed in reverse chronological order within several subject areas.

<ol>
      <li><a href="#Overview Papers">Overviews</a> of the Globus Alliance and system.</li>
      <li><a href="#Data Grid Components">Data Grid components</a> (GridFTP, GASS, Replica services, Chimera, Pegasus, etc.)</li>
      <li><a href="#Resource Management Components">Resource Management Components</a> (GRAM, SNAP, GARA/QoS, etc)</li>
      <li><a href="#Information Services Components">Information Services Components</a> (MDS, monitoring, etc.)</li>
      <li><a href="#Security Components">Security Components</a> (GSI, CAS, etc.)</li>
      <!--<li> <a href="http://www.globus.org/wsrf/#relevant">Web Services</a></li>-->
      <li><a href="#Viz">Visualization</a></li>
      <li><a href="#Java Cog Kit">Java CoG Kit</a></li>
      <li><a href="#MPICH-G">MPICH-G2</a></li>
      <li><a href="#Nexus Section">Nexus</a></li>
      <li><a href="#Applications">Applications</a></li>
      <li><a href="#Other Globus-Related Research">Other Globus-related research</a></li>
</ol>

<p><a name="Overview Papers" class = "title">Overview Papers</a></p>

<p><strong><a name="anatomy" class="section">The Anatomy of the Grid: Enabling Scalable Virtual 
Organizations</a></strong>. I. Foster, C. Kesselman, S. Tuecke. <em>International 
J. Supercomputer Applications</em>, 15(3), 2001.
<br> Defines Grid computing and the associated research field, proposes a 
Grid architecture, and discusses the relationships between Grid technologies 
and other contemporary technologies.
<br>
	[<a href="#anatomy">Citation</a>, 
	<a href="papers/anatomy.pdf">PDF</a>]</p>

<p> <b><a name="OGSA" class="section">The Physiology of the Grid: An Open Grid Services 
Architecture for Distributed Systems Integration</a></b>.  I. Foster, C. 
Kesselman, J. Nick, S. Tuecke, Open Grid Service Infrastructure WG, Global 
Grid Forum, June 22, 2002. (extended version of <a href="#IEEE-CS-2">Grid 
Services for Distributed System Integration</a>)
<br>[<a href="#OGSA">Citation</a>, <a href="papers/ogsa.pdf">PDF</a>]</p>

<p> <b><a name="grid_definition" class="section">What is the Grid? A Three Point Checklist</a>
</b>.  I. Foster, GRIDToday, July 20, 2002.
<br>[<a href="http://www-fp.mcs.anl.gov/~foster/Articles/WhatIsTheGrid.pdf">
PDF</a>]</p>

<p> <b><a name="physics02" class="section">The Grid: A New Infrastructure for 21st Century 
Science</a></b>.  I. Foster. <em>Physics Today</em>, 55(2):42-47, 2002.
<br>[<a href="#physics02">Citation</a>]</p>

<p> <b>Grids: Top Ten Questions</b>. J.M. Schopf and B. Nitzberg, <i>
Scientific Programming, special issue on Grid Computing</i>, 10(2):103 - 111, 
August 2002.
<br> [<a href="papers/topten.final.pdf">PDF</a>]></p>

<p> <b>Modeling Stateful Resources with Web Services v. 1.1</b>.  I. Foster 
(ed), J. Frey (ed), S. Graham (ed), S. Tuecke (ed), K. Czajkowski, D.
 Ferguson, F. Leymann, M. Nally, I. Sedukhin, D. Snelling, T. Storey, W.
 Vambenepe, S. Weerawarana, March 5, 2004.
<br>
[<a href="http://www-106.ibm.com/developerworks/library/ws-resource/
ws-modelingresources.pdf">PDF</a>]</p>

<p> <b>From Open Grid Services Infrastructure to WS-Resource  Framework: 
Refactoring &amp; Evolution</b>. K. Czajkowski, D. Ferguson, I. Foster, J. 
Frey, S. Graham, T. Maguire, D. Snelling, S. Tuecke, March 5, 2004. 
<br>
[<a href="http://www-106.ibm.com/developerworks/library/ws-resource/ogsi_to_wsrf_1.0.pdf">PDF</a>]</font></p>

<p> <b><a name="GSSpec" class="section">Open Grid Services Infrastructure (OGSI) Version 1.0</a></b>.  
S. Tuecke, K. Czajkowski, I. Foster, J. Frey, S. Graham, C. 
Kesselman, T. Maguire, T. Sandholm, P. Vanderbilt, D. Snelling; Global Grid 
Forum Draft Recommendation,6/27/2003.
<br>
[<a href="#GSSpec">Citation</a>, <a href="papers/Final_OGSI_Specification_V1.0.pdf">PDF</a>]</p>

<p> <b><a name="IEEE-CS-2" class="section">Grid Services for Distributed System Integration
</a></b>.  I. Foster, C. Kesselman, J. Nick, S. Tuecke.	<em>Computer</em>, 
35(6), 2002.
<br>
[<a href="#IEEE-CS-2">Citation</a>, <a href="papers/ieee-cs-2.pdf">PDF</a>]</p>

<p> <b><a name="DG1" class="section">The Data Grid: Towards an Architecture for the 
Distributed Management and Analysis of Large Scientific Datasets</a></b>.
A. Chervenak, I. Foster, C. Kesselman, C. Salisbury, S. Tuecke. 
<em>Journal of Network and Computer Applications</em>, 23:187-200, 2001
based on conference publication from Proceedings of NetStore Conference
1999).
<br>
[<a href="#DG1">Citation</a>, 
<a href="papers/JNCApaper.ps">PS</a>, 
<a href="papersJNCApaper.pdf">PDF</a>]</p>

<p> <b><a name="chapter2" class="section">Computational Grids.</a></b>, I. Foster, C. 
Kesselman. <em>Chapter 2 of "The Grid: Blueprint for a New Computing 
Infrastructure"</em>, Morgan-Kaufman, 1999.
<br>
[<a href="#chapter2">Citation</a>, 
<a href="papers/chapter2.pdf">PDF</a>]</p>

<p> <b><a name="GlobusHCW98" class="section">The Globus Project: A Status Report</a></b>. 
I. Foster, C. Kesselman. <em>Proc. IPPS/SPDP '98 Heterogeneous Computing 
Workshop</em>, pp. 4-18, 1998.
<br>
Describes the status of the Globus system as of early 1998.
<br>
[<a href="#GlobusHCW98">Citation</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/globus-hcw98.ps.gz">PS</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/globus-hcw98.pdf">PDF</a>]</p>

<p><b><a name="Globus" class="section">Globus: A Metacomputing Infrastructure Toolkit</a></b>. 
I. Foster, C. Kesselman. <em>Intl J. Supercomputer Applications</em>, 
11(2):115-128, 1997.
<br>
Provides an overview of the Globus project and toolkit.
<br>
[<a href="#Globus">Citation</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/globus.ps.gz">PS</a>,
<a href="ftp://ftp.globus.org/pub/globus/papers/globus.pdf">PDF</a>]</p>

<p> <b><a name="isoftp" class="section">Software Infrastructure for the I-WAY High Performance
 Distributed Computing Experiment</a></b>.I. Foster, J. Geisler, W. Nickless, 
W. Smith, S. Tuecke. <em>Proc. 5th IEEE Symposium on High Performance 
Distributed Computing</em>, pp. 562-571, 1997.<br>
The I-WAY software infrastructure was a Globus precursor.<br>
[<a href="#isoftp">Citation</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/isoft.ps.gz">PS</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/isoft.pdf">PDF</a>]</p>

    
<p> <a name="Data Grid Components" class="title">Data Grid Components(GridFTP,
 GASS, Replica, Chimera, Pegasus, etc.)</a></p>

<p> <b>A Peer-to-Peer Replica Location Service Based on A Distributed Hash 
Table</b>. M. Cai, A. Chervenak, M. Frank. To appear in <em><i>Proceedings of 
the SC2004 Conference</i> (SC2004)</em>, November 2004.
<br>
[<a href="papers/sc2004v15.pdf">PDF</a>]</p>
    
<p> <b>Grid-Based Metadata Services</b>. E. Deelman,
    G. Singh, M.P. Atkinson, A. Chervenak, N.P. Chue Hong, C. Kesselman, S.
    Patil, L. Pearlman, and M. Su. <em>16th International Conference on
    Scientific and Statistical Database Management (SSDBM04)</em>, June 2004.
<br>
[<a href="papers/deelman3.pdf">PDF</a>]</p>
    
<p> <b>Artemis: Integrating Scientific Data on the Grid</b>.
      R. Tuchinda, S. Thakkar, Y. Gil, E. Deelman. <em>Proceedings of the
      Sixteenth Innovative Applications of Artificial Intelligence</em>, 
      July 2004.
<br>
    [<a href="http://www.isi.edu/~deelman/artemis_iaai04.pdf">PDF</a>]</p>

<p> <b>Reliable Data Transport: A Critical Service for the
    Grid</b>. W.E. Allcock, I. Foster, R. Madduri. <em>Building Service Based
    Grids Workshop, Global Grid Forum 11</em>, June 2004.
<br>
    [<a href="papers/GGF11_RFTV-Final.pdf">PDF</a>]</p>

<p> <b>Performance and Scalability of a Replica Location Service</b>. 
    A.L. Chervenak, N. Palavalli, S. Bharathi, C. Kesselman, R. Schwartzkopf. 
    <em>Proceedings of the International IEEE Symposium on High Performance
    Distributed Computing (HPDC-13)</em>, June 2004.<br>
    [<a href="papers/chervenakhpdc13.pdf">PDF</a>]</p>

<p> <b>Artificial Intelligence and Grids Workflow Planning and
    Beyond</b>. Y. Gil, E. Deelman, C. Kesselman, H. Tangmurarunkit. <em>IEEE
    Intelligent Systems</em>, January 2004.<br>
    [<a href="http://www.isi.edu/~deelman/ieee_is04.pdf">PDF</a>]</p>

<p> <b>Pegasus Mapping Scientific Workflows onto the Grid</b>.
    E. Deelman, J. Blythe, Y. Gil, C. Kesselman, G. Mehta, S. Patil, M. Su, K.
    Cahi, M. Livny. <em>Across Grids Conference</em>, 2004.<br>
    [<a href="http://pegasus.isi.edu/Pegasus/Pegasus_final.pdf">PDF</a>]</p>

<p> <b>Pegasus and the Pulsar Search: From Metadata to
    Execution on the Grid</b>. E. Deelman, J. Blythe, Y. Gil, C. Kesselman, S.
    Koranda, A. Lazzarini, G. Mehta, M. Papa, K. Vahi. <em>Applications Grid
    Workshop, PPAM 2003</em>, 2003.<br>
    [<a href="http://www.isi.edu/~deelman/agw_ppam2003.pdf">PDF</a>]</p>

<p> <b>Mapping Abstract Complex Workflows onto Grid  Environments</b>. E. 
    Deelman, J. Blythe, Y. Gil, C. Kesselman, G. Mehta, K. Vahi, K. Blackburn,
    A. Lazzarini, A. Arbree, R. Cavanaugh, S. Koranda. <em>Journal
    of Grid Computing</em>,<i> </i>1(1), 25-39<i>,</i> 2003.<br>
    [<a href="http://www.isi.edu/~deelman/Pegasus/jogc.pdf">PDF</a>]</p>

<p> <b>Transparent Grid Computing: A Knowledge-Based Approach</b>.
    J. Blythe, E. Deelman, Y. Gil, C. Kesselman. <em>IA AI 2003</em>, 2003.<br>
    [<a href="http://www.isi.edu/~deelman/Pegasus/iaai_2003.pdf">PDF</a>]</p>

<p> <b>The Role of Planning in Grid Computing</b>. J. Blythe,
    E. Deelman, Y. Gil, C. Kesselman, A. Agarwal, G. Mehta, K. Vahi. <em>ICAPS
    2003</em>, 2003.<br>
    [<a href="http://www.isi.edu/~deelman/Pegasus/icaps03.pdf">PDF</a>]</p>

<p> <b>Planning for Workflow Construction and Maintenance on
    the Grid</b>. J. Blythe, E. Deelman, Y. Gil. <em>ICAPS 2003 Workshop on
    Planning for Web Services</em>, 2003.<br>
    [<a href="http://www.isi.edu/~deelman/Pegasus/icaps_workshop.pdf">PDF</a>]
</p>

<p> <b><a name="metadata catalog" class="section">A Metadata Catalog Service for Data 
    Intensive Applications</a></b>. G. Singh, S. Bharathi, A. Chervenak,
    E. Deelman, C. Kesselman, M. Mahohar, S. Pail, L. Pearlman. <em>
    Proceedings of Supercomputing 2003 (SC2003)</em>, November 2003.<br>
    [<a href="#giggle">Citation</a>, 
    <a href="papers/mcs_sc2003.pdf">PDF</a>]</p>

<p> <b>Grid-Based Galaxy Morphology Analysis for the National
    Virtual Observatory</b>. E. Deelman, R. Plante, C. Kesselman, G. Singh, M.
    Su, G. Greene, R. Hanisch, N. Gaffney, A. Volpicelli, J. Annis, V. Sekhri,
    T. Budavari, M. Nieto-Santisteban, W. Mullane, D. Bohlender, T. McGlynn, A.
    Rots, O. Pevunova. <em>Proceedings of Supercomputing 2003 (SC2003)</em>, 
    November 2003.<br>
    [<a href="http://www.isi.edu/~deelman/Pegasus/galmorph_sc03.pdf">PDF</a>]
</p>

<p> <b><a name="use-VS03" class="section">Using Regression Techniques to Predict Large Data 
    Transfers</a></b>.S. Vazhkudai, J. Schopf.<em>The International Journal 
    of High Performance Computing Applications (IJHPCA)</em>,
    special issue on Grid Computing: Infrastructure and Applications, Vol 17,
    No. 3, August 2003.
<br>
[<a href="#use-VS03">Citation</a>, 
<a href="papers/Final-JHPCA.zip">.zip</a>]</p>

<p> <b><a name="giggle" class="section">Giggle: A Framework for Constructing Sclable Replica 
    Location Services</a></b>. A. Chervenak, E. Deelman, I. Foster,
    L. Guy, W. Hoschek, A. Iamnitchi, C. Kesselman, P. Kunst, M. Ripeanu, B,
    Schwartzkopf, H, Stockinger, K. Stockinger, B. Tierney.  
    <em>Proceedings of Supercomputing 2002 (SC2002)</em>, November 2002.<br>
[<a href="#giggle">Citation</a>, <a href="papers/giggle.pdf">PDF</a>]</p>
   
<p> <b><a name="PCdata3-2002" class="section">Data Management and Transfer in High 
    Performance Computational Grid Environments</a></b>. B. Allcock, J. 
    Bester, J. Bresnahan, A. L. Chervenak, I. Foster, C. Kesselman, S. Meder, 
    V. Nefedova, D. Quesnal, S. Tuecke.  
    <em>Parallel Computing Journal</em>, Vol. 28 (5), May 2002, pp. 749-771.
<br>
[<a href="#PCdata3-2002" class="section">Citation</a>, 
<a href="papers/dataMgmt.pdf">PDF</a>]</p>
   
<p> <b><a name="FileRepCluster02" class="section">File and Object Replication in Data Grids
    </a></b>. H. Stockinger, A. Samar, B. Allcock, I. Foster, K. Holtman, and 
    B. Tierney; <em>Journal of Cluster Computing</em>, 5(3)305-314,
    2002.<br>
[<a href="#PCdata3-2002" class="section">Citation</a>, 
<a href="papers/FileRepCluster02.pdf">PDF</a>]</p>

<p> <b><a name="HPDC11-AFR" class="section">A Decentralized, Adaptive, Replica
    Location Service</a></b>. M. Ripeanu, I. Foster;  
    <em>11th IEEE International Symposium on High Performance Distributed 
    Computing (HPDC-11)</em>Edinburgh, Scotland, July 24-16, 2002.<br>
[<a href="#HPDC11-AFR">Citation</a>, 
<a href="http://people.cs.uchicago.edu/~matei/PAPERS/hpdc-02.pdf">PDF</a>, 
<a href="http://people.cs.uchicago.edu/~matei/PAPERS/hpdc-02.ps">PS</a>]</p>
   
<p> <b><a name="pred-io" class="section">Using Disk Throughput Data in Predictions of End-to-
    End Grid Transfers</a>.</b> S. Vazhkudai, J. Schopf. <em>Proceedings of 
    the 3rd International Workshop on Grid Computing (GRID 2002)<i>, </i></em>
    Baltimore, MD, November 2002.<br>
[<a href="#pred-io">Citation</a>, 
<a href="papers/pred-io.pdf">PDF</a>]</p>
   
<p> <b><a name="GridftpSpec02" class="section">GridFTP Protocol Specification (Global Grid 
    Forum Recommendation GFD.20)</a>.</b>
    W. Allcock, editor. March 2003.<br>
[<a href="#GridftpSpec02">Citation</a>, 
<a href="papers/GFD-R.0201.pdf">PDF</a>]</p>

<p> <b><a name="GridFTP-Update-Jan2001" class="section">GridFTP Update January 2002</a>.</b>
    W. Allcock, J. Bresnahan, I. Foster, L. Liming, J. Link, P. Plaszczac.
    <em>Technical Report, January 2002</em>.<br>
[<a href="#GridFTP-Update-Jan2001">Citation</a>, 
<a href="papers/GridFTP-Overview-200201.pdf">PDF</a>]</p>

<p><b><a name="decoupling" class="section">Decoupling Computation and
      Data Scheduling in Distributed Data-Intensive Applications</a>.</b>
      K. Ranganathan and I. Foster. <i>Proceedings of 11th IEEE International
      Symposium on High Performance Distributed Computing (HPDC-11)</i>,
      Edinburgh, Scotland, July 2002.<br>
[<a href="#decoupling">Citation</a>, <a href="papers/decouple.pdf">PDF</a>]

<p> <b><a name="repmodel" class="section">Improving Data Availability through Dynamic Model-
      Driven Replication in Large Peer-to-Peer Communities</a>.</b>
      K. Ranganathan, Adriana Iamnitchi, and I. Foster. <i>Proceedings of 
      Global and Peer-to-Peer Computing on Large Scale Distributed Systems 
      Workshop, </i>Berlin, Germany, May 2002.<br>
<a href="#repmodel">Citation</a>, <a href="papers/repmodel.pdf">PDF</a>]</p>

<p><b><a name="VDS02" class="section">Chimera: A Virtual Data System for Representing, 
      Querying and Automating Data Derivation</a>.</b>I.Foster, J. Voeckler, 
      M. Wilde, and Y. Zhao. <i>Proceedings of the 14th Conference on 
      Scientific and Statistical Database Management, </i>Edinburgh,
      Scotland, July 2002.<br>
[<a href="#VDS02">Citation</a>, <a href="papers/VDS02.pdf">PDF</a>]

<p> <b><a name="SDSS-SC02" class="section">Applying Chimera Virtual Data Concepts to Cluster 
      Finding in the Sloan Sky Survey</a>.</b>J. Annis, Y, Zhao, J. Voeckler, 
      M. Wilde, S. Kent, and I. Foster. <i>Proceedings of
      Supercomputing 2002, </i>Baltimore, MD, November, 2002.<br>
[<a href="#repmodel">Citation</a>, <a href="papers/SDSS-SC02.pdf">PDF</a>]

<p> <b><a name="repstrat02" class="section">Identifying Dynamic
      Replication Strategies for High Performance Data Grids</a>.</b>
      K. Ranganathan and I. Foster. <i>Proceedings of International Workshop on
      Grid Computing</i>, Denver, CO, November 2002.<br>
[<a href="#repstrat02">Citation</a>, <a href="papers/repstrat02.pdf">PDF</a>]
</p>
<p> <b><a name="sysPatMar02" class="section">Locating Data in (Small-World?) Peer-to-Peer 
      Scientific Collaborations</a></b>. I. Foster, A. Iamnitchi, and M. 
      Ripeanu. 	<em>Workshop on Peer-to-Peer Systems, Cambridge, Massachusetts
      </em>, March, 2002.<br>
[<a href="#sysPatMar02">Citation</a>, 
<a href="papers/172.pdf">PDF</a>]</p>
<!-- http://www.cs.uchicago.edu/~anda/papers/172.pdf -->
   
 
<p> <b><a name="rep02" class="section">Improving Data Availability through Dynamic 
        Model-Driven Replication in Large Peer-to-Peer Communities</a></b>. 
	I. Foster, A. Iamnitchi, and K. Ranganathan. 
	<em> Global and Peer-to-Peer Computing on Large Scale Distributed 
	Systems Workshop, Berlin</em>, May, 2002.<br>
[<a href="#rep02">Citation</a>, 
<a href="papers/DynamicRMinP2P.ps">PS</a>]</p>
   
<p> <b><a name="HPDC-11-VS" class="section">Predicting Sporadic Grid Data Transfers</a></b>.
    J. M. Schopf, S. Vazhkudai. <em>11th IEEE International Symposium on High-
    Performance Distributed Computing (HPDC-11),</em> IEEE Press, Edinburg, 
    Scotland, July 2002.<br>
[<a href="#HPDC-11-VS">Citation</a>, 
<a href="papers/hpdc-prediction-final.pdf">PDF</a>]</p>

<p> <b><a name="IPDPS-VSF" class="section">Predicting the Performance of Wide Area Data 
    Transfers</a></b>. S. Vazhkudai, J. M. Schopf, I. Foster. <em>Proceedings 
    of the 16th International Parallel and Distributed Processing Symposium 
   (IPDPS 2002)</em>, April 2002.<br>
[<a href="#IPDPS-VSF">Citation</a>, 
<a href="papers/Prediction-Paper-249.pdf">PDF</a>]</p>

<p> <b><a name="GSSpec" class="section"><!--<a name="Globus.CHEP01">-->Globus Toolkit Support for
      Distributed Data-Intensive Science</a></b>. W. Allcock, A. Chervenak, I.
       Foster, L. Pearlman, V. Welch, M. Wilde. <i>Proceedings of Computing in
        High Energy Physics (CHEP '01)</i>, September 2001.<br>
[<a href="#GSSpec">Citation</a>, 
<a href="papers/Globus.CHEP01.pdf">PDF</a>]</p>

<p> <b><a name="bwChep01" class="section">Applied Techniques for High Bandwidth Data Transfers
       Across Wide Area Networks</a>.</b> J. Lee, D. Gunter, B. Tierney, B, 
       Allcock, J. Bester, J. Bresnahan, S. Tuecke. 
    <i>Proceedings of International Conference on Computing in High Energy 
    and Nuclear Physics</i>, Beijing, China, September 2001.<br>
[<a href="#bwChep01">Citation</a>, 
<a href="papers/dpss_and_gridftp.pdf">PDF</a>]</p>

<p> <b><a name="repChep01" class="section">Design and Evaluation of
    Dynamic Replication Strategies for High Performance Data Grids</a>.</b>
    K. Ranganathan and I. Foster. <i>Proceedings of International Conference on
    Computing in High Energy and Nuclear Physics</i>, Beijing, China, September
    2001.<br>
[<a href="#repChep01">Citation</a>, 
<a href="papers/repChep01.pdf">PDF</a>]</p>
    
<p> <b><a name="GDMP-HPDC" class="section">File and Object Replication in Data Grids</a></b>. 
    H. Stockinger, A. Samar, B. Allcock, I. Foster, K. Holtman, B. Tierney. 
    <em>Proceedings of the Tenth International Symposium on High Performance
    Distributed Computing (HPDC-10)</em>, IEEE Press, August 2001.<br>
[<a href="#GDMP-HPDC">Citation</a>, 
<a href="papers/gdmp_hpdc_final_version.pdf">PDF</a>]</p>
    
<p> <b><a name="repsel" class="section">Replica Selection in the Globus Data Grid</a></b>. 
    S. Vazhkudai, S. Tuecke, I. Foster.  <em>Proceedings of the First 
    IEEE/ACM International Conference on Cluster Computing and the Grid 
    (CCGRID 2001)</em>, pp. 106-113, IEEE Computer Society Press, May 2001.<br>
    Discusses a high-level replica selection service that uses information 
    regarding replica location and user preferences to guide selection from 
    among storage replica alternatives.<br>
[<a href="#repsel">Citation</a>, 
<a href="papers/repsel.pdf">PDF</a>]</p>

<p> <b><a name="DG1" class="section">The Data Grid: Towards an Architecture for the 
    Distributed Management and Analysis of Large Scientific Datasets</a></b>.
    A. Chervenak, I. Foster, C. Kesselman, C. Salisbury, S. Tuecke. 
    <em>Journal of Network and Computer Applications</em>, 23:187-200, 2001
    (based on conference publication from Proceedings of NetStore Conference
    1999).<br>
[<a href="#DG1">Citation</a>, 
<a href="papers/JNCApaper.ps">PS</a>, 
<a href="papers/JNCApaper.pdf">PDF</a>]</p>

<p> <b><a name="msc01" class="section">Secure, Efficient Data Transport and Replica Management
    for High-Performance Data-Intensive Computing</a></b>.  B. Allcock, J. 
    Bester, J. Bresnahan, A. Chervenak, I. Foster, C. Kesselman, S.
    Meder, V. Nefedova, D. Quesnel, S. Tuecke. 
    <em>IEEE Mass Storage Conference</em>, 2001.<br>
    Presents the design and performance characteristics of two fundamental 
    technologies for data management.<br>
[<a href="#msc01">Citation</a>,
<a href="papers/msc01.pdf">PDF</a>]</p>

<p> <b><a name="ACAT3" class="section">Protocols and Services for Distributed Data-Intensive 
    Science</a></b>. B. Allcock, S. Tuecke, I. Foster, A. Chervenak, and C. 
    Kesselman. <em>ACAT2000 Proceedings</em>, pp. 161-163, 2000.<br>
[<a href="#ACAT3">Citation</a>, 
<a href="papers/ACAT3.pdf">PDF</a>]</p>

<p> <b><a name="commserv" class="section">Communication Services for Advanced Network 
    Applications</a></b>. J. Bresnahan, I. Foster, J. Insley, S. Tuecke, B. 
    Toonen. <em>Proceedings of the International Conference on Parallel and 
    Distributed Processing Techniques and Applications 1999</em>,Las Vegas, 
    Nevada, June 28-July1, 1999. Volume IV, pp1861-1867.<br>
[<a href="#commserv">Citation</a>, 
<a href="papers/final.ps">PS</a>, 
<a href="papers/final.pdf">PDF</a>]</p>
    
<p> <b><a name="gass" class="section">GASS: A Data Movement and Access Service for Wide 
    Area Computing Systems</a></b>. J. Bester, I. Foster,C. Kesselman, J. 
    Tedesco, S. Tuecke. <em>Sixth Workshop on I/O in Parallel and Distributed 
    Systems</em>, May 5, 1999.<br> Describes techniques for managing data 
    movement in grid environments and describes their
    implementation in Globus.<br>
[<a href="#gass">Citation</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/gass.ps.gz">PS</a>,
<a href="ftp://ftp.globus.org/pub/globus/papers/gass.pdf">PDF</a>]</p>

<p> <b><a name="RIO97" class="section">Remote I/O: Fast Access to Distant Storage</a></b>. 
    I. Foster, D. Kohr, R. Krishnaiyer, J. Mogill. <em>Proc. Workshop on I/O 
    in Parallel and Distributed Systems (IOPADS)</em>, pp. 14-25, 1997.<br>
    Describes the Remote I/O (RIO) remote data access capability in Globus<br>
[<a href="#RIO97">Citation</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/rio.ps.gz">PS</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/rio.pdf">PDF</a>]</p>

<p><a name="Resource Management Components" class="title"> Resource Management Components (GRAM, SNAP, GARA/Qos, etc.)</a></p>


<p> <b>Grid Resource Management</b>. J. Nabrzyski, J.M. Schopf, J.
 Weglarz (Eds). Kluwer Publishing, Fall 2003.<br>
[<a href="http://www-unix.mcs.anl.gov/~schopf/Book/">Order</a>]</p>

<p> <b>Providing Data Transfer with QoS as
    Agreement-Based Service</b>. H. Zhang, K. Keahey, B. Allcock. <i>2004
    International Conference on Services Computing (SCC 2004)</i>, Shanghai,
    China, September 15 - 18, 2004.<br>
[<a href="papers/1568935481_zhang_h.pdf">PDF</a>]</p>

<p> <b><a name="end-to-end02" class="section">End-to-End Quality of
      Service for High-end Applications</a></b>. I. Foster, M. Fidler, A. 
    Roy, V, Sander, L. Winkler. <i>Computer Communications</i>, 
    27(14):1375-1388, 2004.<br>
[<a href="#end-to-end02">Citation</a>, 
<a href="papers/e2e.pdf">PDF</a>]</p>

<p> <b><a name="scheduling-sc" class="section">Conservative Scheduling:
    Using Predicted Variance to Improve Scheduling Decisions in Dynamic
    Environments</a></b>.L. Yang, J.M. Schopf, I. Foster. <em>Supercomputing
    2003</em>, November 2003.
<br>[<a href="#scheduling-sc">Citation</a>, 
<a href="papers/Scheduling_SC_CamraReady.pdf">PDF</a>]</p>

<p> <b><a name="ogsi-agreement" class="section">Agreement-based Grid
    Service Management (OGSI-Agreement) (Draft 0)</a></b>. K. Czajkowski,
    A. Dan, J. Rofrano, S. Tuecke, and M. Xu. <em>Global Grid Forum, GRAAP-WG
    Author Contribution</em>, 12 June 2003.
<br>[<a href="#ogsi-agreement">Citation</a>, 
<a href="papers/OGSI_Agreement_2003_06_12.pdf">PDF</a>]</p>

<p> <b><a name="fgAuth-KWLLM03" class="section">Fine-Grain Authorization Policies in the GRID:
        Design and Implementation</a></b>.
	K. Keahey, V. Welch, S. Lang, B. Liu, S. Meder. <em>1st International 
	Workshop on Middleware for Grid Computing</em>, 2003.
<br>[<a href="#fgAuth-KWLLM03">Citation</a>, 
<a href="papers/mgc_final.pdf">PDF</a>]</p>

<p> <b><a name="condorg" class="section">Condor-G: A Computation Management Agent for Multi-
        Institutional Grids</a></b>. J. Frey, T. Tannenbaum,  I. Foster,
	M. Livny, S. Tuecke.<em>Cluster Computing</em>, 5(3):237-246, 2002.<br>
[<a href="#condorg">Citation</a>]</p>

<p> <b><a name="SNAP-CFKST02" class="section">SNAP: A Protocol for negotiating service level agreements and coordinating resource management in distributed 
	systems</a></b>.  
	K. Czajkowski, I. Foster, C. Kesselman, V. Sander, and S. Tuecke.  
	<em>Lecture Notes in Computer Science</em>, 2537:153-183, 2002.
[<a href="#SNAP-CFKST02">Citation</a>, 
<a href="http://www.isi.edu/~karlcz/papers/snap-lncs-25370153.pdf">PDF</a>]</p>
      
<p> <b><a name="ngs-ipdps02" class="section">Toward a Framework for Preparing and Executing 
        Adaptive Grid Programs</a></b>. D. Angulo, R. Aydt, F. Berman, A. 
	Chien, K. Cooper, H. Dail, J. Dongarra, I. Foster,
	D. Gannon, L. Johnsson, K. Kennedy, C, Kesselman, M. Mazina, J. M
	ellor-Crummey, D. Reed, O. Sievert, L. Torczon, S. Vadhiyar, and R. 
	Wolski. <em>IPDPS, 2002</em>.<br>
[<a href="#ngs-ipdps02">Citation</a>, 
<a href="papers/ngs-ipdps02.pdf">PDF</a>,
<a href="papers/ngs-ipdps02.ps">PS</a>]</p>
      
<p> <b><a name="RS-hpdc" class="section">Design and Evaluation of a Resource Selection 
        Framework for Grid Applications</a></b>. 
	D. Angulo, I. Foster, C. Liu, and L. Yang. <i>Proceedings of IEEE
        International Symposium on High Performance Distributed Computing 
	(HPDC-11),</i> Edinburgh, Scotland, July 2002.<br>
[<a href="#RS-hpdc">Citation</a>, 
<a href="papers/RS-hpdc.pdf">PDF</a>]</p>
      
<p> <b><a name="GC2001" class="section">On Fully Decentralized
    Resource Discovery in Grid Environments</a></b>. A. Iamnitchi and I.
    Foster. <em>International Workshop on Grid Computing, Denver, CO, November
    2001</em><br>
[<a href="#GC2001">Citation</a>, 
<a href="papers/GC2001.pdf">PDF</a>,
<a href="papers/GC2001.ps">PS</a>]</p>
<!-- http://www.cs.uchicago.edu/~chliu/grads/doc/hpdc02-liu.pdf -->
 
<p> <b><a name="Condor-G-HPDC" class="section">Condor-G: A Computation Management Agent for 
     Multi-Institutional Grids</a></b>. J. Frey, T. Tannenbaum, M. Livny, 
     I. Foster, S. Tuecke. <em>Proceedings of the Tenth International 
     Symposium on High Performance Distributed Computing (HPDC-10)</em>, 
     IEEE Press, August 2001.<br>
[<a href="#Condor-G-HPDC">Citation</a>, 
<a href="papers/condorg-hpdc10.pdf">PDF</a>]</p>
    
<p> <b><a name="hpdc10-vizrm" class="section">Practical Resource
    Management for Grid-based Visual Exploration</a></b>. K. Czajkowski,
    A.K. Demir, C. Kesselman, M. Thiebaux. <em>Proceedings of the Tenth 
    International Symposium on High Performance Distributed Computing 
    (HPDC-10)</em>, IEEE Press, August 2001.
<br>[<a href="#hpdc10-vizrm">Citation</a>, 
<a href="papers/hpdc10-vizrm.pdf">PDF</a>]</p>

<p> <b><a name="QoSPolicy" class="section">End-to-End Provision of Policy Information for 
    Network QoS</a></b>. V. Sander, W. A. Adamson, I. Foster, A. Roy. 
    <em>Proceedings of the Tenth IEEE Symposium on High Performance 
    Distributed Computing (HPDC-10)</em>, IEEE Press, August 2001.<br>
[<a href="#QoSPolicy">Citation</a>, 
<a href="papers/QoSPolicy.pdf">PDF</a>]</p>

<p> <b><a name="BB-FT" class="section">A Problem-Specific
      Fault-Tolerance Mechanism for Asynchronous, Distributed Systems</a></b>.
      A. Iamnitchi and I. Foster. <em>Proceedings of the 2000 International
      Conference on Parallel Processing, 2000</em>.<br>
[<a href="#BB-FT">Citation</a>, 
<a href="papers/BB-FT.ps">PS</a>, 
<a href="papers/BB-FT.pdf">PDF</a>]</p>

<p> <b><a name="IWQoS8" class="section">A Quality of Service Architecture that Combines 
    Resource Reservation and Application Adaptation</a></b>. 
    I. Foster, A. Roy, V. Sander. 
    <em>8th International Workshop on Quality of Service</em>, 2000.<br>
[<a href="#IWQoS8">Citation</a>, 
<a href="papers/iwqos_adapt1.ps">PS</a>, 
<a href="papers/iwqos_adapt1.pdf">PDF</a>]</p>

<p> <b><a name="TERENA1" class="section">A Differentiated Services Implementation for 
    High-Performance TCP Flows</a></b>. V. Sander, I. Foster, A. Roy, L. 
    Winkler. <em>Proceedings of the TERENA Networking Conference</em>, 2000.
<br>
[<a href="#TERENA1">Citation</a>, 
<a href="papers/terena.ps">PS</a>, 
<a href="papers/incoming/terena.pdf">PDF</a>]</p>

<p> <b><a name="IPDPS00" class="section">Scheduling with Advanced Reservations</a></b>. 
    W. Smith, I. Foster, V. Taylor. 
    <em>Proceedings of the IPDPS Conference</em>, May 2000.<br>
[<a href="#IPDPS00">Citation</a>, 
<a href="papers/smith_376.ps">PS</a>, 
<a href="papers/smith_376.pdf">PDF</a>]
</p>

<p> <b><a name="Clouds4" class="section">Using Run-Time Predictions to Estimate Queue Wait Times and Improve Scheduler Performance</a></b>. 
    W. Smith, V. Taylor, I Foster. 
    <em>Proceedings of the IPPS/SPDP '99 Workshop on Job Scheduling Strategies for Parallel Processing</em>, 1999.<br>
    [<a href="#Clouds4">Citation</a>, 
    <a href="papers/p.ps">PS</a>, 
    <a href="papers/p.pdf">PDF</a>]</p>

    <p> <b><a name="duroc3" class="section">Resource Co-Allocation in Computational Grids</a></b>.
    K. Czajkowski, I. Foster, and C. Kesselman. 
    <em>Proceedings of the Eighth IEEE International Symposium on High Performance Distributed Computing (HPDC-8)</em>, pp. 219-228, 1999.<br>
    [<a href="#duroc3">Citation</a>, 
    <a href="papers/paper3.pdf">PDF</a>]</p>

    <p> <b><a name="IEEEQoS" class="section">End-to-End Quality of Service for High-End Applications</a></b>. 
    I. Foster, A. Roy, V. Sander, L. Winkler. 
    <em>Technical Report</em>, 1999.<br>
    [<a href="#IEEEQoS">Citation</a>, 
    <a href="papers/end_to_end.ps">PS</a>, 
    <a href="papers/end_to_end.pdf">PDF</a>]</p>

<p> <b><a name="IEEEQoS2" class="section">QoS as Middleware: Bandwidth Reservation System 
    Design</a></b>. 
    G. Hoo, W. Johnston, I. Foster, A. Roy. 
    <em>Proceedings of the 8th IEEE Symposium on High Performance Distributed 
    Computing</em>, pp. 345-346, 1999.<br>
[<a href="#IEEEQoS2">Citation</a>, 
<a href="papers/hoo.ps">PS</a>, 
<a href="papers/hoo.pdf">PDF</a>).</p>

<p> <b><a name="SC99gloperf" class="section">A Network Performance Tool for 
    Grid Computations</a></b>. C. Lee, R. Wolski, I. Foster, C. Kesselman, J. 
    Stepanek.<em> Supercomputing '99</em>, 1999.<br>
[<a href="#SC99gloperf">Citation</a>, 
<a href="papers/gloperf_sc99.ps.ps">PS</a>, 
<a href="papers/gloperf_sc99.pdf.pdf">PDF</a>]</p>

<p> <b><a name="gara" class="section">A Distributed Resource Management Architecture that 
    Supports Advance Reservations and Co-Allocation</a></b>. 
    I. Foster, C. Kesselman, C. Lee, R. Lindell, K. Nahrstedt, A. Roy. 
    <em>Intl Workshop on Quality of Service</em>, 1999.<br>
    Describes the new Globus Architecture for Reservation and Allocation, 
    which integrates CPU  and network QoS.<br>
[<a href="#gara">Citation</a>, 
<a href="papers/iwqos.ps">PS</a>, <a
href="papers/iwqos.pdf">PDF</a>]</p>

<p> <b><a name="IWQoS-98" class="section">The Quality of Service Component for the Globus 
    Metacomputing System</a></b>. 
    C. Lee, C. Kesselman, J. Stepanek, R. Lindell, S. Hwang, B. Scott Michel, 
    J. Bannister, I. Foster, A. Roy. 
    <em>Proc. IWQoS '98</em>, pp. 140-142, 1998.<br>
    Brief overview of an early Globus QoS effort.<br>
[<a href="#IWQoS-98">Citation</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/qualis_pp.ps.gz">PS</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/qualis_pp.pdf">PDF</a>]</p>

<p> <b><a name="GRAM97" class="section">A Resource Management Architecture for Metacomputing 
    Systems</a></b>. K. Czajkowski, I. Foster, N. Karonis, C. Kesselman, S. 
    Martin, W. Smith, S. Tuecke. <em>Proc. IPPS/SPDP '98 Workshop on Job 
    Scheduling Strategies for Parallel Processing</em>,
    pg. 62-82, 1998.<br>
    Describes the resource management architecture implemented as part of the Globus system.<br>
[<a href="#GRAM97">Citation</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/gram97.ps.gz">PS</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/gram97.pdf">PDF</a>]</p>

<p> <b><a name="Smith98" class="section">Predicting Application Run Times Using Historical 
    Information</a></b>. 
    W. Smith, I. Foster, V. Taylor. 
    <em>Proc. IPPS/SPDP '98 Workshop on Job Scheduling Strategies for Parallel Processing</em>, 1998.<br>
    Describes techniques for predicting application run times.<br>
[<a href="#Smith98">Citation</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/runtime.ps.gz">PS</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/runtime.pdf">PDF</a>]</p>
      
<p> <a name="Information Services Components" class="title">Information
      Services Components (MDS, monitoring, etc.)</a></p>

<p> <b>Performance Analysis of the Globus Toolkit Monitoring and Discovery 
      Service, MDS2</b>. X. Zhang and J. Schopf. <em>Proceedings of the 
      International Workshop on Middleware Performance (MP 2004), part of the 
      23rd International Performance Computing and Communications Workshop 
      (IPCCC)</em>, April 2004.
<br>[<a href="papers/xuehaiMP04.pdf">PDF</a>]</p>
    
<p> <b><a name="perf-ZFS03" class="section">A Performance Study of Monitoring and Information 
        Services for Distributed Systems</a></b>. 
	X. Zhang, J. Freschl, and J. Schopf. 
	<em>Proceedings of HPDC</em>, August 2003.
<br>[<a href="#perf-ZFS03">Citation</a>, 
<a href="http://www-unix.mcs.anl.gov/~schopf/Pubs/xuehaijeff-hpdc2003.pdf">PDF</a>]</p>
    
<p> <b><a name="MDS-HPDC" class="section">Grid Information Services for Distributed Resource 
    Sharing</a></b>. K. Czajkowski, S. Fitzgerald, I. Foster, C. Kesselman. 
    <em>Proceedings of the Tenth IEEE International Symposium on High-
    Performance Distributed Computing (HPDC-10)</em>, IEEE Press, August 2001.
    <br>
[<a href="#MDS-HPDC" class="section">Citation</a>, 
<a href="papers/MDS-HPDC.pdf">PDF</a>]</p>
    
<p> <b><a name="fault-detector" class="section">A Fault Detection Service for Wide Area 
    Distributed Computations</a></b>. P. Stelling, I. Foster, C. Kesselman, 
    C.Lee, G. von Laszewski. <em>Proc. 7th IEEE Symposium on High Performance 
    Distributed Computing</em>, pp. 268-278, 1998.<br>
    Describes a fault detection service based on unreliable fault detectors 
    and its implementation as the Globus Heartbeat Monitor.<br>
[<a href="#fault-detector">Citation</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/hbm.ps.gz">PS</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/hbm.pdf">PDF</a>,
<a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#las98hpdc"> bi btex]</a></p>

<p> <b><a name="LDAP-Usage" class="section">Usage of LDAP in Globus</a></b>. 
    I. Foster, G. von Laszewski.<br> This short note describes the use of 
    LDAP in the Globus toolkit. It answers three
    questions: What is LDAP? Where is it used? and Why is it used in Globus?<br>
[<a href="#LDAP-Usage">Citation</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/ldap_in_globus.ps.gz">PS</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/ldap_in_globus.pdf">PDF</a>]</p>

<p> <b><a name="mds97" class="section">A Directory Service for Configuring High-Performance 
    Distributed Computations</a></b>. 
    S. Fitzgerald, I. Foster, C. Kesselman, G. von Laszewski, W. Smith, S.
    Tuecke. <em>Proc. 6th IEEE Symposium on High-Performance Distributed 
    Computing</em>, pp. 365-375, 1997.<br>
    Describes the Metacomputing Directory Service used to maintain information
     about Globus components.<br>
[<a href="#mds97">Citation</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/hpdc97-mds.ps.gz">PS</a>, <a
href="ftp://ftp.globus.org/pub/globus/papers/hpdc97-mds.pdf">PDF</a>, 
<a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#las97hpdc"> bi btex</a> ]</p>

<p><a name="Security Components" class="title">Security Components (GSI, CAS, etc.)</a></p>

	
<p> <b><a name="GT3-WSFBCGKMPT03" class="section">X.509 Proxy Certificates for Dynamic 
    Delegation</a></b>. 
V. Welch, I. Foster, C. Kesselman, O. Mulmo, L. Pearlman, S. Tuecke, J.
Gawor, S. Meder, F. Siebenlist. <em>3rd Annual PKI R&amp;D Workshop</em>, 2004.<br>[<a href="http://www.globus.org/Security/papers/pki04-welch-proxy-cert-final.pdf">PDF</a>]</p>

<p> <b><a>Security for Grid Services</a></b>. 
	V. Welch, F. Siebenlist, I. Foster, J. Bresnahan, K. Czajkowski, 
	J. Gawor, C. Kesselman, S. Meder, L. Pearlman, S. Tuecke.
	<em>Twelfth International Symposium on High Performance Distributed 
	Computing (HPDC-12)</em>, IEEE Press, to appear June 2003.
<br>[<a href="#GT3-WSFBCGKMPT03">Citation</a>, 
<a href="papers/GT3-Security-HPDC.pdf">PDF</a>]</p>

<p> <b><a name="gauth02" class="section">Fine-Grain Authorization for Resource Management in 
      the Grid Environment</a></b>. K. Keahey, V. Welch.
      <i>Proceedings of Grid2002 Workshop</i>, 2002.<br>
[<a href="#gauth02">Citation</a>, 
<a href="papers/gauth02.pdf">PDF</a>]</p>

<p> <b><a name="CAS-2002" class="section">A Community Authorization Service for Group Collaboration</a></b>. 
    L. Pearlman, V. Welch, I. Foster, C. Kesselman, S. Tuecke. <em>Proceedings
      of the IEEE 3rd International Workshop on Policies for Distributed
       Systems and Networks</em>, 2002.<br>
[<a href="#CAS-2002">Citation</a>, 
<a href="papers/CAS_2002_Revised.pdf">PDF</a>]</p>

<p> <b><a name="MyProxy" class="section">An Online Credential Repository for the Grid: 
    MyProxy</a></b>. J. Novotny, S. Tuecke, V. Welch. 
    <em>Proceedings of the Tenth International Symposium on High Performance Distributed Computing (HPDC-10)</em>, IEEE Press, August 2001.<br>
[<a href="#MyProxy">Citation</a>, 
<a href="papers/myproxy.pdf">PDF</a>,
<a href="papers/myproxy.ps">PS</a>]</p>

<p> <b><a name="GSI1" class="section">A National-Scale Authentication Infrastructure</a></b>. 
    R. Butler, D. Engert, I. Foster, C. Kesselman, S. Tuecke, J. Volmer, V. 
    Welch. <em>IEEE Computer</em>, 33(12):60-66, 2000.<br>
    Describes our experience designing, developing, and deploying the Grid 
    Security Infrastructure.<br>
[<a href="#GSI1">Citation</a>, 
<a href=papers/butler.pdf">PDF</a>]</p>

<p> <b><a name="security-arch" class="section">A Security Architecture for Computational 
    Grids</a></b>. I. Foster, C. Kesselman, G. Tsudik, S. Tuecke. 
    <em>Proc. 5th ACM Conference on Computer and Communications Security 
    Conference</em>, pp. 83-92, 1998.<br>
    Describes techniques for authentication in wide area computing environments.<br>
[<a href="#security-arch" class="section">Citation</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/security.ps.gz">PS</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/security.pdf">PDF</a>]</p>

<p> <b><a name="cc-security" class="section">Managing Security in High-Performance Distributed
     Computing</a></b>. 
    I. Foster, N. T. Karonis, C. Kesselman, S. Tuecke. 
    <em>Cluster Computing</em>, 1(1):95-107, 1998.<br>
    Discusses use of Nexus transforms to integrate security.<br>
[<a href="#cc-security">Citation</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/cc-security.ps.gz">PS</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/cc-security.pdf">PDF</a>]</p>

<p><a name="Viz" class="title" class="section">Visualization</a></p>

<p> <b><a name="HiResRen03" class="section">High-Resolution Remote Rendering of Large Datasets
 in a Collaborative Environment</a></b>. N. Karonis, M. Papka, J. Binns, J. 
 Bresnahan, J. Insley, D. Jones, and J. Link.
 <em>Future Generation of Computer Systems (FGCS)</em>, 2003.<br>
[<a href="#HiResRen03">Citation</a>,
<a href="papers/HiResRen03.pdf">PDF</a>]</p>

<p> <b><a name="HPDC11-GM" class="section">GridMapper: A Tool for Visualizing the Behavior of 
      Large-Scale Distributed Systems</a>.</b> W. Allcock, J. Bester, J. 
      Bresna han, I. Foster, J. Gawor, J. A. Insley, J. M. Link, and M. E. 
      Papka. <em>11th IEEE International Symposium on High Performance 
      Distributed Computing (HPDC-11), </em>
      pp179-187, Edinburgh, Scotland, July 24-16, 2002.<br>
[<a href="#HPDC11-GM">Citation</a>, 
<a href="papers/GridMapper.pdf">PDF</a>, 
<a href="papers/GridMapper.ps">PS</a>]</p>

<p> <b><a name="distvis" class="section">Distance Visualization: Data Exploration on the 
    Grid</a></b>. 
    I. Foster, J. Insley, G. von Laszewski, C. Kesselman, M. Thiebaux.
    <em>IEEE Computer Magazine</em>, 32 (12):36-43, 1999.<br>
    [<a href="#distvis">Citation</a>,
<a href="papers/DataViz.PDF">PDF</a>, 
<a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#las99ieee">
bi btex</a>]</p>

<p><a name="Java Cog Kit" class="title">Java CoG Kit</a></p>

<p> <b><a name="infogram" class="section">InfoGram: A Grid Service that Supports Both 
Information Queries and Job Execution</a></b>. G. von Laszewski, I. Foster, 
J. Gawor, A. Schreiber, C. Pena. <em>Proceedings of the 11th IEEE 
International Symposium on High-Performance Distributed Computing (HPDC-11),
</em> IEEE Press, Edinburg, Scotland, July 2002.<br>
[<a href="#infogram">Citation</a>, 
<a href="papers/vonLaszewski--infogram.ps">PS</a>,
<a href="papers/vonLaszewski--infogram.pdf">PDF</a>,
<a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#las02infogram"> bibtex</a>]</p>
    
<p><b><a name="hiccs01" class="section">Designing Grid-based Problem Solving Environments
    </a></b>. G. von Laszewski, I. Foster, J. Gawor, P. Lane, N. Rehn, M. 
    Russell. <em>34th Hawai'i International Conference on System Science</em>,
     2001.<br>
[<a href="#hiccs01">Citation</a>,
<a href="papers/vonLaszewski--cog-pse-final.pdf">PDF</a>, 
<a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#las01pse"> bibtex</a>]</p>

<p> <b><a name="mutliparadigm" class="section">Multi-paradigm Communications in
    Java for Grid Computing</a></b>. V. Getov, G. von Laszewski, M. Philippsen,
  I. Foster. Communications of the ACM, 44(10):118-125, 2001.<br>
[<a href="#IPDPS00">Citation</a>,
<a href="http://www.globus.org/cog/documentation/papers/cacm-laszewski.pdf"></a>
<a href="http://www.globus.org/cog/documentation/papers/cacm-laszewski.pdf">PDF</a>,
<a href="http://www.globus.org/cog">Website</a>, 
<a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#las01acm"> bibtex</a> ]</p>
    
<p> <b><a name="Cog-01" class="section">A Java Commodity Grid Toolkit</a></b>.
    G, von Laszewski,  I. Foster, J. Gawor, P. Lane. <em>Concurrency: Practice
    and Experience</em>, 13, 2001.<br>
[<a href="#Cog-01">Citation</a>,
<a href="papers/vonLaszewski--cog-cpe-final.pdf">PDF</a>, 
<a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#las01cog-concurency"> bibtex</a>]</p>

<p> <b><a name="JavaGrande2000" class="section">CoG Kits: A Bridge between Commodity 
    Distributed Computing and High-Performance Grids</a></b>. 
    G. von Laszewski, I. Foster, J. Gawor, W. Smith, and S. Tuecke.
    CoG Kits: A Bridge between Commodity Distributed Computing and 
    High-Performance Grids. In <i>ACM Java Grande 2000 Conference,</i> 
    pages 97�106, San Francisco, CA, 3-5 June 2000. <br>
[<a href="#JavaGrande2000">Citation</a>, 
<a href="http://www-unix.mcs.anl.gov/~laszewsk/papers/cog-final.pdf">PDF</a>,
<a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#las00grande"> bibtex</a>]</p>

<p> <b><a name="moba00" class="section">Grid-based Asynchronous Migration of Execution Context
 in Java Virtual Machines</a></b>. 
G. von Laszewski, K. Shudo, Y. Muraoka. In A. Bode, T. Ludwig, W.
    Karl, and R. Wismuller, editors, <i>Proceedings of EuroPar 200</i>0, 
    volume 1900 of <i>Lecture Notes in Computer Science</i>, pages 22�34, 
    Munich, Germany, 29 August - 1 September 2000. Springer.<br>

[<a href="#moba00">Citation</a>, 
<a href="ftp://info.mcs.anl.gov/pub/tech_reports/reports/P823.ps.Z">PS</a>,
<a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#las00grande">]</p>

<p> <b><a name="portals" class="section">Grid Infrastructure to Support Science Portals for Large Scale Instruments</a></b>. 
Gregor von Laszewski and Ian Foster. 
    Grid Infrastructure to Support Science Portals for Large Scale
    Instruments. In Proceedings of the Workshop Distributed Computing 
    on the Web (DCW</i>), pages 1�16. University of Rostock, Germany, 21-23
     June 1999.<br>
[<a href="#portals">Citation</a>, 
<a href="http://www.mcs.anl.gov/~laszewsk/papers/laszewskiDCW.ps">PS</a>,
<a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#las99rostock">bibtex</a> ]</p>

<p><a name="MPICH-G" class="title">MPICH-G2</a></p>


<p> <b><a name="MPICH-gei03" class="section">MPICH-G2: A Grid-Enabled Implementation of the 
    Message Passing Interface</a></b>.
    N. Karonis, B. Toonen, and I. Foster. 
    <em>Journal of Parallel and Distributed Computing</em>, 2003.<br>
[<a href="#MPICH-gei03">Citation</a>,
<a href="papers/mpich-gei03.pdf">PDF</a>]</p>
 
<p> <b><a name="MPICH-QOS" class="section">MPICH-GQ: Quality-of-Service for 
    Message Passing Programs</a></b>.
    A. Roy, I. Foster, W. Gropp, N. Karonis, V. Sander, and B. Toonen. 
    <em>Proceedings of the IEEE/ACM SC2000 Conference</em>, November 4-10, 2000.<br>
[<a href="#MPICH-QOS">Citation</a>,
<a href="papers/mpi_qos.pdf">PDF</a>]</p>
    
<p> <b><a name="exploit" class="section">Exploiting Hierarchy in Parallel Computer Networks to
     Optimize Collective Operation Performance</a></b>. N. Karonis,
    B. de Supinski, I. Foster, W. Gropp, E. Lusk, J. Bresnahan. 
    <em>Proceedings of the 14th International Parallel Distributed Processing
    Symposium (IPDPS '00)</em>, pp 377-84, Cancun, Mexico, May 200.<br>
[<a href="#MPI-QOS">Citation</a>, 
<a href="papers/exploit.ps">PS</a>, 
<a href="papers/exploit.pdf">PDF</a>]</p>
    
<p> <b><a name="hpdc99" class="section">Accurately Measuring MPI Broadcasts in a Computational
 Grid</a></b>. 
    B. de Supinski, N. Karonis. 
    <em>Proc. 8th IEEE Symp. on High Performance Distributed Computing</em>, pp. 29-37, August 1999.<br>
[<a href="#hpdc99">Citation</a>, 
<a href="ftp://ftp.cs.niu.edu/pub/karonis/papers/hpdc8/desupinski.ps.gz">PS</a>]</p>

<p> <b><a name="mpich98" class="section">A Grid-Enabled MPI: Message Passing in Heterogeneous Distributed Computing Systems</a></b>.
   I. Foster, N. Karonis. 
    <em>Proc. 1998 SC Conference</em>, November, 1998.<br>
[<a href="#mpich98">Citation</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/mpichg98.ps.gz">PS</a>, 
<a href="papers/gempi.pdf">PDF</a>]</p>

<p> <b><a name="mpi-nexus-pc" class="section">Wide-Area Implementation of the Message Passing Interface</a></b>. 
    I. Foster, J. Geisler, W. Gropp, N. Karonis, E. Lusk, G. Thiruvathukal, S.
    Tuecke. 
    <em>Parallel Computing</em>, 24(12):1735-1749, 1998.<br>
[<a href="#mpi-nexus-pc">Citation</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/mpi-nexus-pc.ps.gz">PS</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/mpi-nexus-pc.pdf">PDF</a>]</p>

    
<p><a name="Nexus Section" class="title">Nexus</a></p>

 <p> <b><a name="Zipper" class="section">A Secure Communications Infrastructure for High-Performance Distributed Computing</a></b>. 
    I. Foster, N. Karonis, C. Kesselman, G. Koenig, S. Tuecke. 
    <em>6th IEEE Symp. on High-Performance Distributed Computing,</em> 
    pp. 125-136, 1997.<br>
    Describes the techniques used within Nexus to support the selective 
    application of message privacy and integrity mechanisms<br>
[<a href="#Zipper">Citation</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/hpdc97-security.ps.gz">PS</a>, 
<a href="papers/secure.pdf">PDF</a>]</p>

<p> <b><a name="MultiMethod" class="section">Managing Multiple Communication Methods in High-Performance Networked Computing Systems</a></b>. 
    I. Foster, J. Geisler, C. Kesselman, S. Tuecke. 
    <em>J. Parallel and Distributed Computing</em>, 40:35-48, 1997.<br>
    Describes mechanisms for multi-method communication and their 
    implementation in the Nexus  communication library.<br>
[<a href="#MultiMethod">Citation</a>, 
<a href="ftp://ftp.mcs.anl.gov/pub/nexus/reports/jpdc2.ps.Z">PS</a>,
<a href="ftp://ftp.globus.org/pub/globus/papers/jpdc2_ps.pdf">PDF</a>]</p>

<p> <b><a name="mpi-nexus" class="section">MPI on the I-WAY: A Wide-Area, Multimethod Implementation of the Message Passing Interface</a></b>. 
    I. Foster, J. Geisler, S. Tuecke. 
    <em>Proc. 1996 MPI Developers Conference</em>, 10-17, 1996.<br>
    Describes the Nexus-based implementation of MPI developed for the I-WAY experiment.<br>
[<a href="#mpi-nexus">Citation</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/mdc96_iway.ps.gz">PS</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/mdc96_iway.pdf">PDF</a>]</p>

<p> <b><a name="JPDCNexus" class="section">The Nexus Approach to Integrating Multithreading and Communication</a></b>. 
    I. Foster, C. Kesselman, S. Tuecke, J. 
    <em>Journal of Parallel and Distributed Computing</em>, 37:70--82, 1996.<br>
    Describes aspects of the Nexus multithreaded runtime system, the 
    communication component of Globus.<br>
[<a href="#JPDCNexus">Citation</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/jpdc.ps.gz">PS</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/jpdc.pdf">PDF</a>]</p>

<p> <b><a name="NexusJava" class="section">Enabling Technologies for Web-Based Ubiquitous Supercomputing</a></b>. 
    I. Foster, S. Tuecke. 
    <em>Proc. 5th IEEE Symp. on High Performance Distributed Computing</em>, 
    pp. 112-119, 1996.<br>
   Discusses the concept of ubiquitous supercomputing and a Java binding for
    Nexus that can    be used to implement it.<br>
[<a href="#NexusJava">Citation</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/hpdc_java.ps.gz">PS</a>,
<a href="ftp://ftp.globus.org/pub/globus/papers/hpdc_java.pdf">PDF</a>]</p>

<p> <b><a name="Nexus" class="section">The Nexus Task-Parallel Runtime System</a>.</b>.
    I. Foster, C. Kesselman, S. Tuecke. 
    <em>Proc. 1st Int'l Workshop on Parallel Processing</em>, pp. 457-462, 1994.<br>
    A brief introduction to Nexus concepts.<br>
[<a href="#Nexus">Citation</a>, 
<a href="ftp://ftp.globus.org/pub/nexus/india_paper_ps.gz">PS</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/india_paper_ps.pdf">PDF</a>]</p>

<p> <b><a name="nexus-runtime" class="section">Nexus: Runtime Support for Task-Parallel 
    Programming Languages</a></b>.  
<em>Technical Report: Mathematics and Computer Science Division, Argonne 
    National Laboratory</em>, 1994.<br>
A long version of the preceding paper that also describes how Nexus is used in 
    two parallel language compilers<br>
[<a href="#nexus-runtime">Citation</a>,
<a href="ftp://ftp.globus.org/pub/nexus/nexus_paper_ps.gz">PS</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/nexus_paper_ps.pdf">PDF</a>]</p>

<p> <b><a name="PORTS0" class="section">The PORTSO Interface</a></b>. 
<em>Technical Report: Mathematics and Computer Science Division, Argonne National Laboratory</em>, 1994; revised periodically.<br>
    Describes a portable thread interface defined by the PORTS consortium.<br>
[<a href="#PORTSO">Citation</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/ports0_spec_v0.3_ps.gz">PS</a>
<a href="ftp://ftp.globus.org/pub/globus/papers/ports0_spec_v0_3_ps.pdf">PDF</a>]</p>
    
    
<p><a name="Applications" class="title">Applications</a></p>

<p><b>Grids for Experimental Science The Virtual Control Room</b>, K.
      Keahey, M. E. Papka, Q. Peng, D. Schissel, G. Abla, T. Araki, J. Burruss,
      E. Feibush, P. Lane, S. Klasky, T. Leggett, D. McCune, L. Randerson, <i>
      in proceedings of the Challenges of Large Applications in Distributed
      Environments (CLADE)</i>, Honolulu, HI, June 07, 2004.<br>
[<a href="papers/clade_submitted_corrected.pdf">PDF</a>]</p>
      
<p><b>Agreement-Based Interactions for Experimental Science</b>, K. Keahey,
      T. Araki, and P. Lane. In Proceedings of <i>Europar</i>, August,
      2004.<br>
[<a href="papers/EuroPar2004.pdf">PDF</a>]</p>
    
<p><b>Dynamic Creation and Management of Runtime Environments in the
      Grid</b>. K. Keahey, M. Ripeanu, K. Doering, <i>Workshop on Designing
      and Building Grid Services</i>, GGF-9, October 8, 2003.<br>
[<a href="papers/dynamiccreation.pdf">PDF</a>]</p>
      
<p><b><a name=nees" class="section">NEESgrid: A Distributed Collaboratory for
      Advanced Earthquake Engineering Experiment and Simulation</a></b>
      B. Spencer Jr., T.A. Finholt, I. Foster, C. Kesselman, C. Beldica, J. Futrelle, S. Gullapalli, P. Hubbard,
      L. Liming, D. Marcusiu, L. Pearlman, C. Severance, G. Yang, <i>13th World
      Conference on Earthquake Engineering</i>, to appear, August 2004.<br>
[</a><a href="papers/13worldconferenceonEarthquakeEngineering-rad8A451.pdf">PDF</a>]</p>
      
<p><b><a name=nees&quote;" class="section">Distributed Hybrid Earthquake Engineering Experiments: 
      Experiences with a Ground-Shaking Grid Application</a></b>
      . L. Pearlman, C. Kesselman, S.
      Gullapalli, B.F. Spencer, Jr., J. Futrelle, K. Ricker, I. Foster, P.
      Hubbard and C. Severance, <i>Proceedings of the 13th IEEE Symposium on
      High Performance Distributed Computing</i>, to appear, June 2004.<br>
[</a><a href="#nees&quot;">Citation</a>, 
<a href="papers/nees-hpdc-final-non-ieee-formatting.pdf">PDF</a>]</p>
      
<p> <b><a name="fusion02" class="section">Computational Grids in Action: The
    National Fusion Collaboratory</a></b>. K. Keahey, T. Fredian, Q. Peng,
    D.P. Schissel, M. Thompson, I. Foster, M. Greenwald, and D. McCune, <i> 
    Future Generation Computer Systems</i>, 18:8, pg. 1005-1015, October 2002.
<br>
[<a href="#fusion02">Citation</a>, 
<a href="papers/fusion02.pdf">PDF</a>]</p>
   
<p> <b><a name="astro-cc02" class="section">The Astrophysics Simulation Collaboratory: 
A Science Portal Enabling Community Software Development</a></b>.
    M. Russel, G. Allen, G, Daues, I. Foster, E. Seidel, J. Novotny, J. Shalf,
    G, von Laszewski.
	<em>Cluster Computing</em>, 5(3):297-304, 2002.<br>
[<a href="#astro-cc02">Citation</a>,
 <a href="papers/astro-jcc.pdf">PDF</a>, 
 <a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#cactuscluster">bi btex]</a></p>

<p> <b><a name="Grads" class="section">The GrADS Project: Software Support for
    High-Level Grid Application Development</a></b>. F. Berman, A. Chien, K.
    Cooper, J. Dongarra,  I. Foster, D. Gannon, L. Johnson, K. Kennedy, C.
    Kesselman, J. Mellor-Crummey, D. Reed, L. Torczon, R. Wolski. 
    <em>International Journal of High-Performance Computing Applications</em>, 
    15(4), 2002.<br>
[<a href="#Grads">Citation</a>]</p>

<p> <b><a name="ijsa-cactus" class="section">The Cactus Worm:
      Experiments with Dynamic Resource Selection and Allocation in a Grid
      Environment</a></b>. 
	G. Allen, D. Angulo, I. Foster, G. Lanfermann, Chuang Liu, T. Radke, E. Seidel and
      J. Shalf. <em>International Journal of High-Performance Computing
      Applications</em>, Vol. 15 (4) 2001.<br>
[<a href="#sc01SEE">Citation</a>, 
<a href="papers/ijsa-cactus.pdf">PDF</a>]</p>
   
<p> <b><a name="ijsa-pred" class="section">Performance Predictions for
      a Numerical Relativity Package in Grid Environments</a></b>. M.
      Ripeanu, A. Iamnitchi, and I. Foster. <em>International Journal of
      High-Performance Computing Applications</em>, Vol. 15 (4) 2001.<br>
[<a href="#ijsa-pred">Citation</a>, 
<a href="papers/ijsa-pred.ps">PS</a>, 
<a href="papers/ijsa-pred.pdf">PDF</a>]</p>
   
<p> <b><a name="europar-cactus" class="section">Cactus Application:
      Performance Predictions in Grid Environments</a></b>. M. Ripeanu, A.
      Iamnitchi, and I. Foster. <em>EuroPar 2001</em>, Manchester, UK, August
      2001.<br>
[<a href="#europar-cactus">Citation</a>, 
<a href="papers/europar-cactus.ps">PS</a>,
<a href="papers/europar-cactus.pdf">PDF</a>]</p>
   
<p> <b><a name="astro-hpdc" class="section">The Astrophysics Simulation Collboratroy: 
      A Science Portal Enabling Community Software Development</a></b>.
      M. Russel, G. Allen, I. Foster, E. Seidel, J. Novotny, J. Shalf, G. von
      Laszewski, and G. Daues. <em>Proceedings of High-Performance Distributed
      Computing 10 (HPDC-10)</em>, pages 207�215, San Francisco, CA, 7-9 
      August 2001.<br>
[<a href="#astro-hpdc">Citation</a>,
<a href="papers/astro-hpdc10.pdf">PDF</a>, 
<a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#hpdc10cactus"> bibtex]</a></p>
   
<p> <b><a name="sc01SEE" class="section">Supporting Efficient Execution in Heterogeneous Distributed Computing Environments with Cactus and Globus</a></b>. 
	G. Allen, T. Dramlitsch, I. Foster, N. Karonis, M. Ripeanu, E. Seidel and B. Toonen. 
	<em>Proceedings of SC 2001</em>, November 10-16, 2001.<br>
[<a href="#sc01SEE">Citation</a>, 
	<!--.ps not in papers/ <a href="papers/SC2001ripeanu.ps">PS</a>, -->
<a href="papers/SC2001ripeanu.pdf">PDF</a>]</p>

<p> <b><a name="sc01ewa" class="section">High-Performance Remote Access to Climate Simulation Data: A Challenge Problem for Data Grid Technologies</a></b>. 
	B. Allcock, I. Foster, V. Nefedova, A. Chervenak, E. Deelman, C. Kesselman, J. Leigh, A. Sim, A. Shoshani, B. Drach, D. Williams. 
	<em>SC 2001</em>, November 2001.<br>
[<a href="#sc01ewa">Citation</a>, 
<a href="papers/sc01ewa_esg_chervenak_final.pdf">PDF</a>]</p>
        
<p> <b><a name="RSI01" class="section">A High-Throughput X-ray Microtomography System at the Advanced Photon Source</a></b>.
Y. Wang, F. De Carlo, D. Mancini, I. McNulty, B. Tieman, J. Bresnahan, I. 
Foster, J. Insley, P. Lane, G. von Laszewski, C. Kesselman, M.-H. Su, M. 
Thiebaux. <i>Review of Scientific Instrument</i>s, 72(4):2062�2068,  April 
2001.<br>
[<a href="#RSI01">Citation</a>, 
<a href="papers/RSI01.pdf">PDF</a>, 
<a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#las01cmt"> bibtex]</a></p>

<p> <b><a name="EDG2" class="section">The Earth System Grid II: Turning Climate Datasets Into 
Community Resources</a></b> I. Foster, E. Alpert, A. Chervenak, B. Drach, C. 
Kesselman, V. Nefedova, D. Middleton, A. Shoshani, A. Sim, D. Williams. <em>
Proceedings of the American Meterologcal Society Conference</em>, 2001.<br>
[<a href="#esg2">Citation</a>]</p>

<p> <b><a name="ocean-atmos" class="section">Computational Design
 and Performance of the Fast Ocean Atmosphere Model, Version One</a></b>. R.
 Jacob, C. Schafer, I. Foster, M. Tobis, J. Anderson. <em>2001 Intl
 Conference on Computational Science</em>, 2001.<br>
[<a href="#ocean-atmos">Citation</a>]</p>

<p> <b><a name="cactusG" class="section">The Cactus-G Toolkit: Supporting Efficient Execution 
     in Heterogeneous Distributed Computing  Environments</a></b>. 
	G. Allen, T. Dramlitsch, I. Foster, T. Goodale, N. Karonis, M. Ripeanu, E. Seidel,
      and B. Toonen. <em>Proceedings of the 4th Globus Retreat,</em> Pittsburg,
      PA, August 2000.<br>
[<a href="#cactusG">Citation</a>, 
<a href="papers/cactusG.ps">PS</a>, 
<a href="papers/cactusG.pdf">PDF</a>]</p>

<p> <b><a name="corba1" class="section">Using CORBA and Globus to Coordinate Multidisciplinary Aeroscience Applications</a></b>. 
    I. Lopez, G.J. Follen, R. Gutierrez, I. Foster, B. Ginsburg, O. Larsson, and S. Tuecke. 
    <em>Proceedings of the NASA HPCC/CAS Workshop</em>, February 15-17, 2000.<br>
[<a href="#corba1">Citation</a>, 
<a href="http://accl.lerc.nasa.gov/IPG/CORBA/">HTML</a>]</p>

<p> <b><a name="xray00" class="section">Using Computational Grid Capabilities to Enhance the 
        Ability of an X-ray Source for Structural Biology</a></b>. 
	G. von Laszewski, M. Westbrook,  I. Foster, E. Westbrook, C. Barnes. 
	<em>Cluster Computing</em>, 3(3):187-199, 2000.<br>
[<a href="#xray00">Citation</a>,
<a href="papers/vonLaszewski--dtrek.ps">PS</a>,
<a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#las00sbc">bibtex</a]</p>

<p> <b><a name="cave1" class="section">A Review of Tele-Immersive Applications in the CAVE Research Network</a></b>. 
    J. Leigh, A. Johnson, T. DeFanti, M. Brown, M. Ali,
    S. Bailey, A. Banerjee, P. Benerjee, J. Chen, K. Curry, J. Curtis, F. Dech, B. Dodds, I.
    Foster, S. Graser, K. Ganeshan, D. Glen, R. Grossman, R. Heiland, J. Hicks, A. Hudson, T.
    Imai, M. Khan, A. Kapoor, R. Kenyon, J. Kelso, R. Kriz, C. Lascara, X. Liu, Y. Lin, T.
    Mason, A. Millman, K. Nobuyuki, K. Park, B. Parod, P. Rajlich, M. Rasmussen, M. Rawlings,
    D. Robertson, S. Thongrong, R. Stein, K. Swartz, S. Tuecke, H. Wallach, H. Wong, G. Wheless. 
    <em>Proceedings of the IEEE Virtuality Reality 2000 International Conference (VR 2000)</em>, 1999.<br>
<a href="#cave1">Citation</a>, 
<a href="papers/ieeevr99.ps">PS</a>, 
<a href="papers/ieeevr99.pdf">PDF</a>]</p>

<p> <b><a name="sc99karonis" class="section">Multivariate Geographic Clustering in a Metacomputing Environment Using Globus</a></b>. 
    G. Mahinthakumar, F.M. Hoffman, W.W. Hargrove, N. Karonis. 
    <em>Proc. Supercomputing 99</em>, November 1999.<br>
[<a href="#sc99karonis">Citation</a>, 
<a href="ftp://ftp.cs.niu.edu/pub/karonis/papers/SC99/sc99.ps.gz">PS</a>]</p>

<p> <b><a name="Clouds" class="section">Numerical Relativity in a Distributed Environment</a></b>. 
    W. Benger, I. Foster, J. Novotny, E. Seidel, J. Shalf, W. Smith, P. Walker.
    <em>Ninth SIAM Conference on Parallel Processing for Scientific Computing</em>, April 1999.<br>
[<a href="#Clouds">Citation</a>, 
<a href="papers/bengerw.ps">PS</a>, <a
href="papers/bengerw.pdf">PDF</a>]</p>

<p> <b><a name="Clouds2" class="section">Large-Scale Distributed Computational Fluid Dynamics on the Information Power Grid using Globus</a></b>. 
    S. Barnard, R. Biswas, S. Saini, R. Van der Wijngaart, M. Yarrow, L. Zechter, I. Foster, O. Larsson.
    <i>Proc. of Frontiers '99,</i> 1999.<br>
[<a href="#Clouds2">Citation</a>, 
<a href="papers/paper1.ps">PS</a>, <a
href="papers/paper1.pdf">PDF</a>]</p>

<p> <b><a name="cmt99" class="section">The International Grid (iGrid): Empowering Global Research Community Networking Using High Performance International Internet Services</a></b>. 
    M. D. Brown, T. DeFanti, M. A. McRobbie, A. Verlo, D. Plepys, D. F. McMullen, K. Adams, J. Leigh, A. E. Johnson, I. Foster, C. Kesselman, A. Schmidt, S. N. Goldstein. 
    <em>iGrid</em>, April 1999.<br>
[<a href="#cmt99">Citation</a>, 
<a href="papers/inet99.ps">PS</a>, 
<a href="papers/inet99.pdf">PDF</a>]</p>

<p><a name="cmt99b" class="section">Real-Time Analysis, Visualization, and Steering of Microtomography Experiments at Photon Sources</a></b>.
 G. von Laszewski, M. Su, J. A. Insley, I. Foster, J. Bresnahan, C. Kesselman,
    M. Thiebaux,  M. L. Rivers, S. Wang, B. Tieman, I. McNulty. 
    <em>Ninth SIAM Conference on Parallel Processing for Scientific Computing
    </em>, April 1999.<br>
[<a href="#cmt99b">Citation</a>, 
<a href="papers/siamCmt99.ps">PS</a>, 
<a href="papers/siamCmt99.pdf">PDF</a>,
 <a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#las99siam"> bibtex]</a></p>

<p> <b><a name="hcw-sf-express" class="section">Implementing Distributed Synthetic Forces 
    Simulations in Metacomputing Environments</a></b>. 
    S. Brunett, D. Davis, T. Gottshalk, P. Messina, C. Kesselman. 
    <em>Proceedings of the Heterogeneous Computing Workshop</em>, Mar. 1998.
    <br>
[<a href="#hcw-sf-express">Citation</a>,
<a href="paper/sf-express.ps">PS</a>,
<a href="ftp://ftp.globus.org/pub/globus/papers/sf-express.pdf">PDF</a>]</p>

<p> <b><a name="globus-apps" class="section">Application Experiences with the Globus Toolkit
    </a></b>. 
    S. Brunett, K. Czajkowski, S. Fitzgerald, I. Foster, A. Johnson, C.
     Kesselman, J. Leigh, S. Tuecke.
    <em>Proceedings of 7th IEEE Symp. on High Performance Distributed 
    Computing</em>, July 1998.<br>
    A case study of two applications built using the Globus Toolkit.<br>
[<a href="#globus-apps">Citation</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/globus-apps.ps.Z">PS</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/globus-apps.pdf">PDF</a>]</p>

<p> <b><a name="I-WAY" class="section">Overview of the I-WAY: Wide Area Visual Supercomputing
    </a></b>.
    T. DeFanti, I. Foster, M. Papka, R. Stevens, T.Kuhfuss. 
    <em>International Journal of Supercomputer Applications</em>, 
    10(2):123-130, 1996.<br>
    Provides a brief introduction to the I-WAY experiment, the I-WAY network,
     and some I-WAY applications.<br>
[<a href="#I-WAY">Citation</a>, 
<a href="ftp://ftp.mcs.anl.gov/pub/nexus/reports/iway_overview.ps.gz">PS</a>,
<a href="papers/iway_overview.pdf">PDF</a>]</p>

<p> <b><a name="Clouds3" class="section">Near-real-time Satellite Image Processing: 
    Metacomputing in CC++</a></b>. 
    C. Lee, C. Kesselman, S. Schwab. 
    <em>Computer Graphics and Applications</em>, 16(4):79-84, 1996.<br>
    Describes an I-WAY application and the CC++ language used to develop it.
    <br>
[<a href="#Clouds3">Citation</a>, 
<a href="ftp://ftp.mcs.anl.gov/pub/nexus/reports/neph.ps.gz">PS</a>, 
<a href="ftp://ftp.globus.org/pub/globus/papers/neph.pdf">PDF</a>]</p>

<p><a name="Other Globus-Related Research" class="title">Other Globus-Related 
Research</a></p>

<p> <b>Run-time Prediction of Parallel Applications on
    Shared Environments</b>. B. Lee and J. Schopf. <em>Poster Paper,
    Proceedings of Cluster2003</em>, December 2003.
<br>[<a href="papers/byoungdaiCluster03.pdf">PDF</a>]</p>

<p> <b>Small-World File-Sharing Communities</b>. A.
    Iamnitchi, M. Ripeanu, and I. Foster. <em>INFOCOM 2004</em>, Hong Kong,
    March, 2004.<br>
[<a href="papers/smallworld.pdf">PDF</a>]</p>

<p> <b>Cache Replacement Policies Revisited The The Case
    of P2P Traffic</b>. A. Wierzbicki, N. Leibowitz, M. Ripeanu, and R.
    Wozniak. <em>4th GP2P Workshop</em>, Chicago, IL, April, 2004.<br>
[<a href="papers/cachedreplacement.pdf">PDF</a>]</p>

<p> <b>Deconstructing the Kazaa Network</b>. N.
    Leibowitz, M. Ripeanu, and A. Wierzbicki. <em>3rd IEEE Workshop on Internet
    Applications (WIAPP'03)</em>, June 23 - 24, 2003, San Jose, CA.<br>
[<a href="papers/kazaa.pdf">PDF</a>]</p>

<p> <b>The Grid2003 Production Grid: Principles and Practice</b><br>
    I. Foster, J. Gieraltowski, S. Gose, N. Maltsev, E. May, A.<br>
    Rodriguez, D. Sulakhe, A. Vaniachine, J. Shank, S. Youssef,<br>
    D. Adams, R. Baker, W. Deng, J. Smith, D. Yu, I. Legrand, S. Singh, C. 
    Steenberg, Y. Xia, A. Afaq, E. Berman, J. Annis, L.A.T. Bauerdick, 
    M. Ernst, I. Fisk, L. Giacchetti, G. Graham, A. Heavey, J. Kaiser,<br>
    N. Kuropatkin, R. Pordes, V. Sekhri, J. Weigand, Y. Wu, K. Baker, L.
    Sorrillo, J. Huth, M. Allen, L. Grundhoefer, J. Hicks, F. Luehring, S. 
    Peck,<br>
    R. Quick, S. Simms, G. Fekete, J. vandenBerg, K. Cho, K. Kwon, D. Son, 
    H. Park, S. Canon, K. Jackson, D.E. Konerding, J. Lee, D. Olson, I. 
    Sakrejda, B. Tierney, M. Green, R. Miller, J. Letts, T. Martin, D. Bury, 
    C. Dumitrescu, D. Engh, R. Gardner, M. Mambelli, Y. Smirnov, J. Voeckler, 
    M. Wilde, Y. Zhao, X. Zhao, P. Avery, R. Cavanaugh, B. Kim, C. Prescott, J.
    Rodriguez, A. Zahn, S. McKee, C. Jordan, J. Prewett, T. Thomas, H. 
    Severini, B. Clifford, E. Deelman, L. Flon, C. Kesselman, G. Mehta, N. 
    Olomu, K. Vahi, K. De, P. McGuigan, M. Sosebee, D. Bradley, P. Couvares, 
    A. De Smet, C. Kireyev, E. Paulson, A. Roy, S. Koranda, B. Moe. <i>13th 
    Proceedings of the International IEEE Symposium on High Performance 
    Distributed Computing</i>, to appear June 2004.<br>
[<a href="papers/HPDC13-Grid3-final.pdf">PDF</a>]</p>

<p> <b><a name="load-YFS03" class="section">Globus and PlanetLab</a>
    Resource Management Solutions Compared</b>. M. Ripeanu, M. Bowman, J.
    Chase, I. Foster, and M. Milenkovic. 13th <em>Proceedings of the
    International IEEE Symposium on High Performance Distributed 
    Computing</em>, to appear June 2004.
<br>[<a href="papers/hpdc-13-ripeanu.pdf">PDF</a>]</p>

<p> <b><a name="load-YFS03" class="section">Homeostatic and Tendency-based CPU Load 
Predictions</a></b>. 
	L. Yang, I. Foster, J. Schopf. 
	<em>Proceedings of IPDPS 2003</em>, April 2003.
	<br>
[<a href="#load-YFS03">Citation</a>, 
<a href="papers/predictionCameraReady.pdf">PDF</a>]</p>

<p> <b><a name="resArray" class="section">Disk Resident Arrays: An Array-Oriented I/O Library 
for Out-of-Core Computations, Services for Distributed System Integration
</a></b>.  
I. Foster, J. Nieplocha. <em>High-Performance Mass Storage and Parallel 
I/O</em>, 488-98, IEEE and Wiley Press, 2002.<br>
[<a href="#resArray">Citation</a>]</p>

<p> <b><a name="compnw02" class="section">Grids and Research Networks as
    Drivers and Enablers of Future Internet Architectures</a></b>. K.
    Baxevanidis, H. Davies,  I. Foster, F. Gagliardi.
	<em>Computer Networks</em>, 2002.<br>
[<a href="#compnw02">Citation</a>]</p>

<p> <b><a name="gnutella.iptps" class="section">Mapping the Gnutella Network:
 Properties of Large-Scale Peer-to-Peer Systems and Implications for System 
Design</a></b>. 
    M. Ripeanu, I. Foster and A. Iamnitchi. 
    <em>IEEE Internet Computing</em>, vol 6(1), January-February 2002.<br>
[<a href="#Clouds3">Citation</a>,
 <a href="papers/gnutella.iptps.pdf">PDF</a>]</p>

<p> <b><a name="gnutella.computing" class="section">Mapping the Gnutella Network: 
    Macroscopic Properties of Large-Scale Peer-to-Peer Systems</a></b>.
    M. Ripeanu, I. Foster. <em>1st International Workshop on Peer-to-Peer
    Systems (IPTPS'02))</em>, Cambridge, MA, March 2002.<br>
[<a href="#gnutella.computing">Citation</a>, 
<a href="papers/gnutella.computing.pdf">PDF</a>]</p>

<p><b><a name="ADASS" class="section">Grid Technologies &amp; Applications: Architecture &amp;
    Achievements</a></b>.
    I. Foster. <em>Intl Conference on Computing in High Energy and Nuclear
    Physics</em>, 2001 (reprinted in Astronomical Data Analysis Systems and
    Software (ADASS) 2002).<br>
[<a href="#ADASS">Citation</a>]</p>

<p><b><a name="GenComm" class="section">Generalized Communicators in the Message Passing 
    Interface</a></b>. 
E. Demaine,  I. Foster, C. Kesselman, M. Snir. <em>IEEE Trans. Parallel and
 Distributed Systems</em>, 12(6):610-616, 2001.<br>
[<a href="#GenComm">Citation</a>]</p>

<p> <b><a name="gnutella.01" class="section">Peer-to-Peer Architecture
    Case Study: Gnutella</a></b>. M. Ripeanu. <em>2001 International
    Conference on Peer-to-Peer Computing (P2P2001)</em>, Linkoping, Sweeden,
    August 2001.<br>
[<a href="#gnutella.01">Citation</a>, <a href="papers/gnutella.01.pdf">PDF</a>]</p>

<p><b><a name="model-coupling" class="section">The Model Coupling Toolkit</a></b>. J. Larson, 
    R. Jacob, I. Foster, J. Guo. <em>2001
    Intl Conference on Computational Science</em>, 2001.<br>
[<a href="#model-coupling">Citation</a>]</p>

<p> <b><a name="emergence" class="section">The Emergence of the Grid</a></b>.  I.
   Foster. <em>Nature Yearbook of Science and Technolgy</em>, Nature
      Publishing Group, 2001.<br>
[<a href="#emergence">Citation</a>]</p>

<p> <b><a name="Emerging" class="section">The Emerging Grid</a></b>.  I.
    Foster, C. Kesselman. <em>Computational Aerosciences in the 21st Century</em>,
    29-46, Kluwer Academic, 2000.<br>
[<a href="Emerging">Citation</a>]</p>

<p> <b><a name="acat" class="section">Grid Computing</a></b>. 
	I. Foster. <em>Advance</em>, 51-56, 2000.<br>
[<a href="#acat">Citation</a>]</p>

<p><b><a name="FaultDet" class="section">A Fault Detection Service for Wide Area Distributed 
Computations</a></b>. P.  Stelling, C. DeMatteis,  I. Foster, C. Kesselman, 
C. Lee, G. von Laszewski. <em>Cluster
    Computing</em>, 2:117-128, 1999.<br>
[<a href="#FaultDet">Citation</a>,
<a href="papers/stelling--hbm.pdf">PDF</a>, 
<a href="http://www-unix.mcs.anl.gov/~laszewsk/bib/vonLaszewski-bib.html#las98hpdc"> bibtex]</a></p>

<p> <b><a name="betagrid" class="section">The Beta Grid: A National Infrastructure for 
Computer Systems Research</a></b>. I. Foster. 
	<em>Proc. 1999 Extreme Linux Workshop</em>, also published in <i>Proc. NetStore Conference,</i> 1999.<br>
[<a href="#FaultDet">Citation</a>]</p>

<p> To download this list of citations or to submit a citation for inclusion here, visit our 
	<a href="bibliography.php">bibliography</a>.</p>

	<p></p>
    

</div>
<?php include($SITE_PATHS["SERV_INC"].'footer.inc'); ?>









