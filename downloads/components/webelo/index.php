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
	$pageTitle 		= "ACTF - Web Validation Componentry (Webelo)";
	$pageKeywords	= "Accessibility Tools Framework, accessibility, ACTF, webelo, web validation, Eclipse";
	$pageAuthor		= "Mike Squillace";
	
include('../../../projectNav.php');
		include('../../../rightCol.php');
	include('../../basic_files/buildReleaseTable.php');
	
	$releaseTable = generateReleaseTable('components', 'webelo');
	
	# End: page-specific settings
	#
		
	#
		# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<div id="midcolumn">
	<h1>ACTF Web Validation Componentry</h1>
<p><ul>
<li><a href="#overview">Overview</a></li>
<li><a href="#downloads">Webelo Releases</a></li>
<li><a href="#quickStart">Getting started</a></li>
<!-- <li><a href="#building">Building Webelo</a></li> -->
</ul></p>

<h2><a name="overview">Overview</a></h2>
<p><strong>ACTF Webelo</strong> is a collection of Eclipse plugins that allow web content authors and web application developers to 
perform accessibility compliance validations of their content or applications.  Webelo leverages both 
the new <a href="http://www.eclipsecon.com/swt/R3_3/new_and_noteworthy.html">SWT Mozilla browser widget</a> 
and the <a href="http://java.sun.com/docs/books/tutorial/reflect/">Java Reflection API</a> to perform 
dynamic, non-invasive, and fully configurable validations of your web content or applications.  Webelo is unique in that it 
performs validations against the runtime structures in the Document Object Model (DOM) rendered by the browser rather than on the markup from which that DOM was parsed.  The 
componentry comes packaged with a validation document for assessing accessibility compliance against  
the <a href="http://www.ibm.com/able/guidelines/web/accessweb.html">IBM Web Accessibility Checklist, v3.5</a>.  
Documentation is available in the standard Eclipse help system but is incomplete.</p> 

	<p>The initial release of Webelo, v0.1.0, can be used to validate only static web content that resides on the local machine or at a 
	specified URL.  "Static," here, means that the entirety of the DOM is created from the underlying HTML file and that no 
	modifications are made to the DOM once the initial page is loaded.  Future releases will contain 
	functionality for validating such modifications and more dynamic content.  Also note that, given the very early stage of this portion of ACTF, 
	API and UI components are likely to change without notice.</p>
	
	<h2><a name="downloads">Webelo Releases</a></h2>
	<p>Webelo releases come in two flavors, runtime and SDK releases.  Runtime releases provide all of the functionality 
	to enable web content authors and application developers to 
	perform dynamic validations and accessibility compliance evaluations from within the WTP, JEE, or other web-related perspectives.  SDK builds provide all source code and an API 
	reference for those wishing to expand the functionality of Webelo, build their own rulebases, or customize the validation engine.</p>
	
	$releaseTable
	
	<h2><a name="quickStart">Getting started</a></h2>
    <p><strong>Note</strong>: You must download and register <a href="http://developer.mozilla.org/en/docs/XULRunner">XULRunner, v1.8.1.3</a> in order 
    to use Webelo.  Follow the instructions on that page for downloading and installing XULRunner.</p>
    
    	<p>The best way to get started with Webelo is to read the provided documentation, accessed from within the help system.  There are 
	several tasks to review in order to familiarize yourself with the components.  Once becoming familiar with basic tasks, you can refer to more 
	detailed sections of the documentation.  You can also try right-clicking on any .htm, .html, or .xhtml file 
	and selecting Open with...&gt;ACTF Mozilla Browser.</p>

<!--	
	<h2><a name="building">Building Javaco</a></h2>
<p>Follow these steps from the workbench to build Javaco:</p>

<p><ul>
<li>obtain the source code:<ul>
	<li>if you have not done so before, <a href="../../../contributors.php">establish a connection to the ACTF CVS repository</a></li>
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
	