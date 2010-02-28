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
	$pageTitle 		= "ACTF Archived Downloads";
	$pageKeywords	= "Accessibility Tools Framework, accessibility, ACTF, Eclipse";
	$pageAuthor		= "ACTF Team";
	
include('../../projectNav.php');
		include('../../rightCol.php');
	
	# End: page-specific settings
	#
		
	#
		# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML


	<div id="midcolumn">
	<h1>ACTF Archived Downloads</h1>

<h2 id="release">ACTF Previous Release (0.5)</h2>

<div class="homeitem3col">
	<h3>Visualization SDK</h3>
	<p>ACTF Visualization SDK includes two types of extensible visualization engines 
	(Blind usability visualization engine and low-vision simulation engine) and several reusable view components. 
	These components support providing a visual representation of the usability of content or applications for People with Disabilities (PwD).
	</p>
	<p>
	<b>Update Site: </b>
	<a href="http://download.eclipse.org/technology/actf/0.5/update-site/">http://download.eclipse.org/technology/actf/0.5/update-site/</a><br>
	<b>Other downloads: </b>
	<a href="http://www.eclipse.org/downloads/download.php?file=/technology/actf/sdk/visualization/0.5.0/actf-visualization-sdk-200810080000-incubation.zip">
	actf-visualization-sdk-200810080000-incubation.zip<img src="../../images/go-bottom.png" alt=""></a>
	</p>
	<p>
	(Please try <a href="tools/aDesigner/index.php">ACTF aDesigner</a>, too. aDesigner is an exemplary tool developed on top of the Validation SDK.)
	</p>

	<h3>Alternative Interface SDK</h3>
	<p>ACTF Alternative Interface SDK provides middleware components to make multimedia content controllable via alternative input methods, to add audio descriptions or captions, and to transform user interfaces by using external metadata.	
	</p>
	<p>
	<b>Update Site: </b>
	<a href="http://download.eclipse.org/technology/actf/0.5/update-site/">http://download.eclipse.org/technology/actf/0.5/update-site/</a><br>
	<b>Other downloads: </b>
	<a href="http://www.eclipse.org/downloads/download.php?file=/technology/actf/sdk/ai/0.5.0/actf-ai-sdk-200810080000-incubation.zip">
	actf-ai-sdk-200810080000-incubation.zip<img src="../../images/go-bottom.png" alt=""></a>
	</p>
	<p>
	(Please try <a href="tools/aiBrowser/index.php">ACTF aiBrowser</a>, too. aiBrowser is an exemplary tool developed on top of the Alternative Interface SDK.)
	</p>


</div>

	<hr class="clearer" />	
	<h2 id="tools">ACTF Validation Components</h2>
	<div class="homeitem3col">
	<h3>Overview</h3>
	<p>
	ACTF Validation Components are now dormant and have no down stream dependencies or consumers of which we are aware. 
	ACTF community decided to remove it from the ACTF project (see <A href="http://dev.eclipse.org/mhonarc/lists/actf-dev/msg00286.html">ACTF developers list archive</a>).
	The entire source code and artifacts of Validation Components are archived and listed below.
	</p>

	<h3>Archived Source Files</h3>
	<p>
	The last snapshot of ACTF CVS that includes Validation Components is available from here.
	</p>

	<h3>Java Validation Componentry (Javaco)</h3>
	<p><a href="components/javaco/index.php">Javaco<img src="../../images/go-bottom.png" alt=""></a> is a collection of components that can be leveraged by the Java developer from within the JDT to perform 
	accessibility compliance validations of Java applications.  These validations are dynamic, occuring as the application is being used so that accessibility 
	evaluation need not be a distinct part of the testing cycle.  Other components allow the developer to unit-test their GUI-based 
	applications for accessibility, correcting accessibility deficiencies right in the source code.</p>

    <h3>Web Validation Componentry (Webelo)</h3>
    <p><a href="components/webelo/index.php">Webelo<img src="../../images/go-bottom.png" alt=""></a> is a collection of components that can be leveraged by the web content author 
    or web appplication developer from within the WTP, JEE, or JDT to perform 
    accessibility compliance validations of web content or applications.  These validations are dynamic, occuring as the application is being used so that accessibility 
    evaluation need not be a distinct part of the testing cycle.</p>

	
	<h3>Accessibility Probe (AccProbe)</h3>
	
	<p><a href="tools/accprobe/index.php">Accessibility Probe<img src="../../images/go-bottom.png" alt=""></a> is a standalone, Eclipse Rich-Client Product (RCP) application that provides 
	a view of the accessible object hierarchy of a currently running application or rendered document and of the properties of the accessible objects of that application 
or document. It can also serve as an event monitor for tracking the events
fired by these accessible objects. It is meant to combine the functionality of a variety of accessibility testing tools 
(such as inspection and event-monitoring tools) into one easy-to-use application for accessibility testing and debugging.</p>

	</div>

	<p>All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php" target="_blank">Eclipse 
          Foundation Software User Agreement</a> unless otherwise specified.</p>
	<hr class="clearer" />
	
</div>

$rightColumn

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
