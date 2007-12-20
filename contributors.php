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
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "ACTF contributors page";
	$pageKeywords		= "Accessibility Tools Framework, ACTF, Eclipse";
	$pageAuthor		= "ACTF team";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML


<div id="midcolumn">
<h1>CVS Repository</h1>
<p>The source code of the ACTF project can be found in the CVS
Repository.</p>
<ol>
  <li>Switch to the 'CVS Repository Exploring' perspective. Go to 
  Window&gt;Open Perspective&gt;Other... and select 'CVS Repository Exploring'.</li> 
  <li>Create a new repository location by right-clicking in the 'CVS Repositories' 
  View and selecting New&gt;Repository Location...: 
  <dl>
    <dt>Committers 
    <dd><tt>extssh://XXXXXXX@dev.eclipse.org/cvsroot/technology/</tt> 
    <br>- where XXXXXXX is your Eclipse Foundation user id 
    <dt>Contributors 
    <dd><tt>pserver://anonymous@dev.eclipse.org/cvsroot/technology/</tt> </dd>
  </dl>
  <li>Open the <tt>org.eclipse.actf</tt> directory.</li>
  <li>Browse and check-out plugins/features from the CVS repository. You can find the directory structure 
	of the CVS repository in the <a href="#dir">Directory Structure</a> section.</li>
</ol>
<p>For more details about CVS, please visit <a href="http://wiki.eclipse.org/index.php/CVS_Howto">CVS Howto</a> page.</p>

<h1>Development Guidelines</h1>
<h2>1. Naming Conventions</h2>
<p>Naming Conventions in the ACTF project follow the <a href="http://wiki.eclipse.org/Naming_Conventions">Eclipse Naming 
Conventions</a> except for Java packages containing 'internal', 'tests', or 'examples'.</p>

<h3 name="package" id="package">Java Packages</h3>
<p>One of the main goals of this naming convention is to make it easy to find the component to which any given class belongs. 
The general form of java package names is as follows:</p>
<ul>
<li>org.eclipse.actf.&lt;component&gt;[.*]</li>
</ul>
<p name="group" id="group">
Currently, ACTF includes the components listed below. This table also shows the subcomponents within each ACTF component. The 
<a href="#dir">directory structure of the CVS repository</a> is defined based on this grouping.</p>
<table border="1">
<tr>
  <th>Group</th>
  <th>Component name</th>
  <th>Description</th>
</tr>
<tr>
  <th rowspan="6">common</th>
  <td>accservice	</td>
  <td>includes components for accessing native accessibility architectures and APIs</td>
</tr>
<tr>
  <td>core</td>
  <td><i>is reserved for future use</i></td>
</tr>
<tr><td>model</td>
  <td>includes components to support access to runtime properties of GUI components, document elements, and other runtime structures. It also includes typical application plugins as Editor Extensions.</td>
</tr>
<tr>
  <td>mediator</td>
  <td>includes mediator services.</td>
</tr>
<tr>
  <td>repository</td>
  <td>includes repository services.</td>
</tr>
<tr>
  <td>util</td>
  <td>includes common utilities for other ACTF components.</td>
</tr>
<tr>
  <th>ai</th>
  <td>ai</td>
  <td>includes components for adaptive interfaces.</td>
</tr>
<tr>
  <th>examples</th>
  <td>examples</td>
  <td>includes exemplary applications.</td>
</tr>
<tr>
  <th>validation</th>
  <td>validation</td>
  <td>includes validation engine, rulebase manager, interfaces for and base implementations of rulesets and rules and so on.</td>
</tr>
<tr>
  <th rowspan="2">visualization</th>
  <td>report</td>
  <td>includes report generators.</td>
</tr>
<tr>
  <td>visualization</td>
  <td>includes accessibility/usability visualization engines.</td>
</tr>
</table>

<p>In the ACTF project, the reserved words 'internal', 'tests', or 'examples' may appear after the component name. For example, 
<tt>org.eclipse.actf.validation.tests</tt> indicates test cases that are used for the validation component. The prefered usage is 
to put the reserved names in the fifth position, leaving the fourth position for the component name. In addition to 
this, each component has its own ui components in the ACTF project. So, the word "ui" may appear after the component name as well.</p>

<p>The names of internal/tests/examples/ui packages in ACTF will be:</p>
<ul>
   <li>org.eclipse.actf.&lt;component&gt;.internal[.*] - internal packages of &lt;component&gt;</li>
   <li>org.eclipse.actf.&lt;component&gt;.tests[.*] - test packages of &lt;component&gt; </li>
   <li>org.eclipse.actf.&lt;component&gt;.examples[.*] - examples of &lt;component&gt;</li>
   <li>org.eclipse.actf.&lt;component&gt;.ui[.*] - ui components of &lt;component&gt;</li>
</ul>

<h2 name="dir" id="dir">2. Directory structure</h2>
<p>We will ask you to organize your files as described below. Basically you will need to create the following directory 
structure for each subdirectory you own under the <a href="#group">ACTF component group</a>:</p>

<table cellpadding="2" cellspacing="2" border="1">
  <tr>
    <td colspan="1"><b style="color:darkgreen">Directory structure</b></td>
  </tr>
<tr valign="top"><td>
<pre>/cvsroot/technology/
  org.eclipse.actf/org.eclipse.actf.<i>[group]</i>/
    plugins
    doc
    tests
    features
</pre>
</td></tr>
<tr valign="top"><td colspan="1">
<ol><li> plugins: 
<ul><li> the plugins that provide the function
</li></ul>
</li><li> doc:
<ul><li> the doc plugins
</li></ul>
</li><li> tests:
<ul><li> the test plugins
</li></ul>
</li><li> features:
<ul><li> the SDK feature (to generate a bundle that includes source + the plugins) and fragments
</li><li> all main, source, test, doc, and example features and fragments
</li></ul>
</li></ol>
</td></tr></table>

<p>The projects containing features and fragments must be suffixed by <i>-feature</i> and <i>-fragment</i> respectively.</p>


<h2>3. Coding conventions</h2>
<p>The ACTF project uses the built-in Java-convention in Eclipse.</p>

<h2>4. Namespace URI conventions</h2>
<p>To avoid unexpected propagation, namespace URIs in ACTF project will be defined as follows:</p>
<ul>
<li>http://www.eclipse.org/projects/actf/&lt;component&gt;[/*]</li>
</ul>
<p>
If you need to create new namespaces, please submit a request to the newsgroup.
</p>

<h2>5. Others</h2>
<p>
For more details about development conventions and guidelines, please visit  
<a href="http://wiki.eclipse.org/Development_Conventions_and_Guidelines">Eclipse development guidelines</a> page.
</p>	
</div>
<div id="rightcolumn">
    <div class="sideitem">
	<h6>Related links</h6>
	<ul>
	  <li><a href="http://www.eclipse.org/proposals/actf">Project proposal</a> 
  	<li><a href="http://www.eclipse.org/proposals/actf/ACTF_CreationReview.pdf">
  	Creation Review Slides </a></li>
	</ul>
    </div>	    
    <div class="sideitem">
	<h6>Incubation</h6>
              <div align="center"><a href="http://www.eclipse.org/projects/gazoo.php">
                 <img align="center" src="http://www.eclipse.org/images/egg-incubation.png" border="0" /></a>
              </div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
