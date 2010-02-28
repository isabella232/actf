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
	$pageTitle 		= "ACTF - Java Validation Componentry (Javaco) (archive)";
	$pageKeywords	= "Accessibility Tools Framework, accessibility, ACTF, javaco, java validation, Eclipse";
	$pageAuthor		= "Mike Squillace";
	
include('../../../../projectNav.php');
		include('../../../../rightCol.php');
	include('../../basic_files/buildReleaseTable.php');
	
	$releaseTable = generateReleaseTable('components', 'javaco');
	
	# End: page-specific settings
	#
		
	#
		# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<div id="midcolumn">
	<h1>ACTF Java Validation Componentry (archive)</h1>
<p>This componentry is no longer actively developed or supported.</p>
<p><ul>
<li><a href="#overview">Overview</a></li>
<li><a href="#downloads">Javaco Releases</a></li>
<li><a href="#quickStart">Getting started</a></li>
<!-- <li><a href="#building">Building Javaco</a></li> -->
</ul></p>

<h2><a name="overview">Overview</a></h2>
<p><strong>ACTF Javaco</strong> is a collection of Eclipse plugins that allow Java Swing and Eclipse SWT developers to 
perform accessibility compliance validations of either the applications they are developing or fully deployed aplications.  Javaco uses 
<a href="http://www.eclipse.org/aspectj">aspect-oriented programming (AOP)</a> and the <a href="http://java.sun.com/docs/books/tutorial/reflect/">Java Reflection API</a> to perform 
dynamic, non-invasive, and fully configurable validations of your Java applications.  The 
componentry comes packaged with validation documents for assessing accessibility compliance against the <a href="http://www.ibm.com/able/guidelines/java/accessjava.html">IBM Java Accessibility Checklist</a> for Java Swing applications 
and the <a href="http://www.ibm.com/able/guidelines/software/accesssoftware.html">IBM Software Accessibility Checklist</a> for Eclipse SWT-based applications.  Documentation is available in the standard Eclipse help system.</p> 

	<h2><a name="downloads">Javaco Releases</a></h2>
	<p>Javaco releases come in two flavors, runtime and SDK releases.  Runtime releases provide all of the functionality to enable Java developers to 
	perform dynamic validations and accessibility compliance evaluations from within the JDT.  SDK builds provide all source code and an API 
	reference for those wishing to expand the functionality of Javaco or build their own rulebases or customize the validation engine.</p>
	
	$releaseTable
	
	<h2><a name="quickStart">Getting started</a></h2>
	<p>The best way to get started with Javaco is to read the provided documentation, accessed from within the help system.  There are 
	several tasks to review in order to familiarize yourself with the components.  Once becoming familiar with basic tasks, you can refer to more 
	detailed sections of the documentation.</p>

<!--	
	<h2><a name="building">Building Javaco</a></h2>
<p>Follow these steps from the workbench to build Javaco:</p>

<p><ul>
<li>obtain the source code:<ul>
	<li>if you have not done so before, <a href="../../../../contributors.php">establish a connection to the ACTF CVS repository</a></li>
	<li>checkout the following plugins from the org.eclipse.actf.common/plugins directory:<ul>
		<li>org.eclipse.actf.core</li>
		<li>org.eclipse.actf.model</li>
		<li>org.eclipse.actf.model.dom</li>
		<li>org.eclipse.actf.model.javapp</li>
		<li>org.eclipse.actf.accservice</li>
		<li>org.eclipse.actf.accservice.win32.ia2-fragment</li>
		<li>org.eclipse.actf.accservice.win32.msaa-fragment</li>
	</ul></li>
	<li>checkout the following features from the org.eclipse.actf.common/features directory:<ul>
		<li>org.eclipse.actf.model-feature</li>
		<li>org.eclipse.actf.accservice-feature</li>
	</ul></li>
	<li>checkout the following plugins from the org.eclipse.actf.validation/plugins directory:<ul>
		<li>org.eclipse.actf.validation</li>
		<li>org.eclipse.actf.validation.doc</li>
		<li>org.eclipse.actf.validation.ui</li>
		<li>org.eclipse.actf.validation.javapp</li>
		<li>org.eclipse.actf.validation.javapp.doc</li>
		<li>org.eclipse.actf.validation.javapp.ui</li>
	</ul></li>
	<li>checkout the following features from the org.eclipse.actf.validation/features directory:<ul>
		<li>org.eclipse.actf.validation-feature</li>
		<li>org.eclipse.actf.validation.javapp-feature</li>
	</ul></li>
	<li>checkout the SDK features as well if you wish to build the entire SDK release</li>
</ul></li>
<li>build the Javaco componentry:<ol>
    <li>Select the feature.xml file in either the org.eclipse.actf.validation.javapp-feature or org.eclipse.actf.validation.javapp.sdk-feature</li>
    <li>Select PDE Tools&gt;Create Ant Build Script</li>
    <li>Select the generated build.xml file and then right-click, selecting Run As...&gt;Ant Build</li>
</ol></li>
</ul></p>
	-->
</div>

$rightColumn

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
	