<?php
/*******************************************************************************
 * Copyright (c) 2007 IBM Corporation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Michael Squillace - Initial Contribution
 *    Kentarou FUKUDA - add Menu Items
 *******************************************************************************/

	require_once($_SERVER['DOCUMENT_ROOT'] . "/actf/common/navUtil.class.php");
	$navUtil = new NavUtil("technology.actf");
 
	# PHP for Standard Left Menu
	$Nav->setLinkList( array() );
	$Nav->addCustomNav( "Information about ACTF", "/projects/project_summary.php?projectid=technology.actf", "", 1  );

	$Nav->addCustomNav("Developer Resources", 	$navUtil->contributorsurl, "", 1);
	$Nav->addCustomNav("Downloads",				$navUtil->downloadsurl, "", 1);
	$Nav->addCustomNav("Documentation",			$navUtil->documentationurl, "", 1);
	$Nav->addCustomNav("Project Wiki", 			$navUtil->wikiurl, "", 1);
	$Nav->addCustomNav("Team", 					"/actf/team.php", "", 1);
	$Nav->addCustomNav("Mailing Lists", 		$navUtil->mailinglists, "", 1);
	$Nav->addCustomNav("Bugs", 					$navUtil->bugzilla, "", 1);
	


	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	?>