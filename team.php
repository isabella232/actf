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
	$pageTitle 		= "ACTF Team members";
	$pageKeywords	= "Accessibility Tools Framework, ACTF, Eclipse";
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
	
	<h1>ACTF Team Members</h1>
	
        <div class="homeitem">
	<h3>Project Leads</h3>
	<table cellpadding="2">
	<tr>
	   <td>Chieko Asakawa</td>
	   <td>IBM</td>
	</tr>
	<tr> 
	   <td>Mike Paciello</a></td>
	   <td>The Paciello Group</td>
	</tr>
	</table>
	<h3>Initial Committers</h3>
	<table cellpadding="2">
	<tr>
	   <td>Kentarou Fukuda</td>
	   <td>IBM</td>
	</tr>
	<tr> 
	   <td>Mike Squillace</td>
	   <td>IBM</td>
	</tr>
	<tr>  
	   <td>Hironobu Takagi</td>
	   <td>IBM</td>
	</tr>
	<tr>  
	   <td>Hisashi Miyashita</td>
	   <td>IBM</td>
	</tr>
	<tr>  
	   <td>Takashi Itoh</td>
	   <td>IBM</td>
	</tr>
	<tr>  
	   <td>Bill Carter</td>
	   <td>IBM</td>
	</tr>
	<tr>  
	   <td>Steve Faulkner</td>
	   <td>The Paciello Group</td>
	</tr>
	<tr>  
	   <td>Will Pearson</td>
	   <td>The Paciello Group</td>
	</tr>
	<tr>  
	   <td>Zeljko Obrenovic</td>
	   <td>Center for Mathematics and Computer Science</td> 
	</tr>
	<tr> 
	   <td>Roberto Scano</td>
	   <td>IWA/HWG</td> 
	</tr>
	<tr> 
	   <td>I.V. Ramakrishnan</td>
	   <td>State University of New York at Stony Brook</td>
	</tr>
	<tr>  
	   <td>Simon Harper</td>
	   <td>University of Manchester</td>
	</tr>
	<tr>  
	   <td>David Bolter</td>
	   <td>University of Toronto</td>
	</tr>
	<tr>  
	   <td>Simon Bates</td>
	   <td>University of Toronto</td>
	</tr>
	<tr>  
	   <td>Jeffrey Bigham</td>
	   <td>University of Washington</td>
	</tr>
	<tr>  
	   <td>Makoto Ueki</td>
	   <td>WAT-C</td>
	</tr>
	<tr>  
	</table>
	</div>
	
	<div class="homeitem">
	<h3>Mentors</h3>
	<table cellpadding="2">
	<tr>
	   <td>Ed Merks</td>
	   <td>IBM</td>
	</tr>
	<tr> 
	   <td>Naci Dai</a></td>
	   <td>Eteration</td>
	</tr>
	</table>
<!--	<h3>Contributors</h3>
	<table cellpadding="2">
        <tr>
          <td>List TBD</td>
          <td>TBD</td>
        </tr>    		
	</table>
-->
	</div>		
        <hr class="clearer" />
<h1>Interested parties</h1>
<p>The following parties have expressed interest in extending the platform and contributing ideas, 
guidance, and discussion. Key contacts listed.</p>
<ul>

  <li>Actuate Corporation, US (Dan Melcher)</li>

  <li>Adobe Systems Incorporated, US (Andrew Kirkpatrick)</li>

  <li>BIRT Project, Eclipse Foundation (Paul Clenahan)</li>

  <li>BrailleNet, France (Dominique Burger)</li>

  <li>Center for Mathematics and Computer Science, Netherlands (Zeljko Obrenovic)</li>

  <li>IBM Corporation, US (Chieko Asakawa)</li>

  <li>International Webmasters Association/HTML Writers Guild (IWA/HWG), US (Roberto Scano)</li>

  <li>Japan Braille Library, Japan (Tetsuji Tanaka)</li>

  <li>Mozilla foundation, US (Frank Hecker)</li>
   
  <li>National Center for Accessible Media (NCAM), Media Access Group at WGBH, US (Larry Goldberg)</li>

  <li>Royal National Institute of Blind People (RNIB), UK (Henny Swan)</li>

  <li>SAP AG, Germany (Michael Bernhardt)</li>

  <li>SAS Institute Inc., US (Lisa Pappas)</li>

  <li>SIG-Universal Access to the Internet (UAI), Internet Technology Research Committee (ITRC), Japan (Takayuki 

Watanabe)</li>

  <li>State University of New York at Stony Brook, US (I.V. Ramakrishnan)</li>

  <li>The Carroll Center for the Blind, US (Brian Charlson)</li>

  <li>The Paciello Group, US (Mike Paciello)</li>

  <li>Technosite (ONCE Foundation), Spain (Alan Chuter)</li>

  <li>Tokyo Institute of Technology, Japan (Ken Wakita)</li>

  <li>University of Manchester, UK (Simon Harper)</li>

  <li>University of Toronto, Canada (Jutta Treviranus)</li>

  <li>University of Washington, US (Jeffrey Bigham)</li>

  <li>Vision Australia, Australia (Andrew Arch)</li>

  <li>Web Accessibility Tools Consortium (WAT-C), (Makoto Ueki)</li>

</ul>                
     
        <hr class="clearer" />
     
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
