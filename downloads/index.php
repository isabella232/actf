<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "ACTF Downloads";
	$pageKeywords	= "Accessibility Tools Framework, accessibility, ACTF, Eclipse";
	$pageAuthor		= "ACTF Team";
	
include('../projectNav.php');
		include('../rightCol.php');
	
	# End: page-specific settings
	#
		
	#
		# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML


	<div id="midcolumn">
	<h1>ACTF Downloads</h1>
<p>Besides the all-in-one release build of ACTF, ACTF downloads are divided into three distinct categories:</p>
<p><ul>
<li>component runtimes - components (i.e. sets of features/plugins) to be used by developers or testers for performing accessibility-related activities
within the Eclipse environment including validation, visualization, and more</li>
<li>component SDKs - component runtimes + everything a developer needs to build on top of the framework including source and javadocs</li>
<li>exemplary tools - standalone, RCP applications related to accesibility</li>
</ul></p>

<div class="homeitem3col">
	<h2>ACTF Release Build</h2>
	<p>
	Status: Milestone Release 0.1 Target 2Q 2008
	</p>
</div>

<div class="homeitem3col">
	<h2>ACTF Components</h2>
	<br>
</div>

<div class="homeitem3col">
	<h2>ACTF Exemplary Tools</h2>
	<br>
	<h3><a href="tools/accprobe/index.php">Accessibility Probe (AccProbe)<img src="../images/go-bottom.png" alt=""></a></h3>
	
	<p>The Accessibility Probe is a standalone, Eclipse Rich-Client Product (RCP) application that provides 
	a view of the accessible object hierarchy of a currently running application or rendered document and of the properties of the accessible objects of that application 
or document. It can also serve as an event monitor for tracking the events
fired by these accessible objects. It is meant to combine the functionality of a variety of accessibility testing tools 
(such as inspection and event-monitoring tools) into one easy-to-use application for accessibility testing and debugging.</p>

	<h3>Accessibility Internet Browser for Multimedia (aiBrowser)</h3>
	<p>Coming soon!</p>
</div>

	<p>All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php" target="_blank">Eclipse 
          Foundation Software User Agreement</a> unless otherwise specified.</p>
	<hr class="clearer" />
	
	<h1>Other tools and runtimes on top of ACTF</h1>
	<div class="homeitem3col">
	 <h3>Links to external download sites</h3>
	 <h4><a href="http://www.alphaworks.ibm.com/tech/adesigner">aDesigner</a>  (IBM alphaWorks technology)</h4>
	 <p>The aDesigner is a tool that Web authors can use to ensure that the webpages they create are accessible to individuals who are blind or visually impaired. 
	 For more details about this tool, please visit <a href="http://www.alphaworks.ibm.com/tech/adesigner">aDesigner introduction page</a>. (Jump to IBM alphaWorks Web site).</p>
	 <h4><a href="http://www.alphaworks.ibm.com/tech/aibrowser">IBM Accessibility Internet Browser for Multimedia (aiBrowser)</a>  (IBM alphaWorks technology)</h4>
	 <p>The IBM Accessibility Internet Browser for Multimedia (aiBrowser) is an Internet browser for visually impaired users that provides multimedia control features and alternative user interfaces with external metadata. 
	 For more details about this tool, please visit <a href="http://www.alphaworks.ibm.com/tech/aibrowser">aiBrowser introduction page</a>. (Jump to IBM alphaWorks Web site).</p>
     <h4><a href="http://www.alphaworks.ibm.com/tech/raven">IBM Rule-based Accessibility Validation Environment (RAVEN)</a>  (IBM alphaWorks technology)</h4>
	 <p>A suite of Eclipse plug-ins used to inspect and validate the accessibility of Java-based, rich-client GUIs (Swing or SWT) and Eclipse plug-ins. 
	 For more details about this tool, please visit <a href="http://www.alphaworks.ibm.com/tech/raven">RAVEN introduction page</a>. (Jump to IBM alphaWorks Web site)</p>
	</div>		
</div>

$rightColumn

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
