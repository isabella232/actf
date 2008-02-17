<?php

	# PHP for Standard Left Menu
	$Nav->setLinkList( array() );
	$Nav->addCustomNav( "Information about ACTF", "/projects/project_summary.php?projectid=technology.actf", "", 1  );
	$Nav->addCustomNav("Downloads", 		"/actf/downloads/index.php", "", 1);
	$Nav->addCustomNav("Developer Resources", 	"/actf/contributors.php", "", 1);
	$Nav->addNavSeparator("Project Wiki", 	"http://wiki.eclipse.org/ACTF", "", 1);	

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	?>