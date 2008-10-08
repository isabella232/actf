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

<h2>ACTF Release Build</h2>
	<p>
	Interim Release 0.5 is now available.
	</p>

<!--<h2>ACTF Components</h2>-->
<div class="homeitem3col">
	<h3>Java Validation Componentry (Javaco)</h3>
	<p><a href="components/javaco/index.php">Javaco<img src="../images/go-bottom.png" alt=""></a> is a collection of components that can be leveraged by the Java developer from within the JDT to perform 
	accessibility compliance validations of Java applications.  These validations are dynamic, occuring as the application is being used so that accessibility 
	evaluation need not be a distinct part of the testing cycle.  Other components allow the developer to unit-test their GUI-based 
	applications for accessibility, correcting accessibility deficiencies right in the source code.</p>

    <h3>Web Validation Componentry (Webelo)</h3>
    <p><a href="components/webelo/index.php">Webelo<img src="../images/go-bottom.png" alt=""></a> is a collection of components that can be leveraged by the web content author 
    or web appplication developer from within the WTP, JEE, or JDT to perform 
    accessibility compliance validations of web content or applications.  These validations are dynamic, occuring as the application is being used so that accessibility 
    evaluation need not be a distinct part of the testing cycle.</p>

	<h3>Visualization SDK</h3>
	<p>ACTF Visualization SDK includes two types of extensible visualization engines 
	(Blind usability visualization engine and Lowvision simulation engine) and several reusable view components. 
	These components support providing a visual representation of the usability of content or applications for People with Disabilities (PwD).
	</p>
	<p>
	<b>Update Site: </b>
	<a href="http://download.eclipse.org/technology/actf/0.5/update-site/">http://download.eclipse.org/technology/actf/0.5/update-site/</a><br>
	<b>Other downloads: </b>
	<a href="http://www.eclipse.org/downloads/download.php?file=/technology/actf/sdk/visualization/0.5.0/actf-visualization-sdk-200810080000-incubation.zip">
	actf-visualization-sdk-200810080000-incubation.zip<img src="../images/go-bottom.png" alt=""></a>
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
	actf-ai-sdk-200810080000-incubation.zip<img src="../images/go-bottom.png" alt=""></a>
	</p>
	<p>
	(Please try <a href="tools/aiBrowser/index.php">ACTF aiBrowser</a>, too. aiBrowser is an exemplary tool developed on top of the Alternative Interface SDK.)
	</p>


</div>
	<hr class="clearer" />	
	<h2>ACTF Exemplary Tools</h2>
<div class="homeitem3col">
	<h3>Accessibility Probe (AccProbe)</h3>
	
	<p><a href="tools/accprobe/index.php">Accessibility Probe<img src="../images/go-bottom.png" alt=""></a> is a standalone, Eclipse Rich-Client Product (RCP) application that provides 
	a view of the accessible object hierarchy of a currently running application or rendered document and of the properties of the accessible objects of that application 
or document. It can also serve as an event monitor for tracking the events
fired by these accessible objects. It is meant to combine the functionality of a variety of accessibility testing tools 
(such as inspection and event-monitoring tools) into one easy-to-use application for accessibility testing and debugging.</p>

	<h3>aDesigner</h3>
	<p>The aDesigner is an Eclipse RCP application that helps designers ensure 
	that their content and applications are accessible and usable by the visually 
	impaired. aDesigner provides a visual representation of the visually impaired 
	users' usability of content. It helps users to learn about real accessibility 
	issues in their content and applications. Currently, aDesigner supports HTML, 
	ODF documents and Flash content. 
	It also has accessibility information (MSAA/IA2) inspection functions. 
	</p>
	<p><a href="tools/aDesigner/index.php">aDesigner download page<img src="../images/go-bottom.png" alt=""></a>

	<h3>Accessibility Internet Browser for Multimedia (aiBrowser)</h3>
	<p>aiBrowser is an Eclipse RCP application that allows screen reader users 
	to control embedded multimedia content, with commands to play, stop, or control 
	the volume for streaming video, by simply using predefined shortcut keys. 
	Users can customize the behavior of existing Web content by using metadata. 
	This tool also adds audio descriptions for Internet movies based on a simple text script. 
	</p>
	<p><a href="tools/aiBrowser/index.php">aiBrowser download page<img src="../images/go-bottom.png" alt=""></a>
	</p>
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
