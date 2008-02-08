<?php

	# PHP for Standard Left Menu
	$Nav->setLinkList( array() );
	$Nav->addCustomNav( "Information about ACTF", "/projects/project_summary.php?projectid=technology.actf", "", 1  );
	$Nav->addNavSeparator("ACTF Home", 		"/actf");
	$Nav->addCustomNav("Developer Resoruces", 	"/actf/contributors.php", "", 1);
	$Nav->addCustomNav("Downloads", 		"/actf/downloads.php", "", 1);
	$Nav->addCustomNav("Newsgroups", 	"http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.actf", "", 1);
	$Nav->addCustomNav("Bugs",			"https://bugs.eclipse.org/bugs/buglist.cgi?product=ACTF", "", 1);
	$Nav->addCustomNav("Mailing Lists",	"http://dev.eclipse.org/mhonarc/lists/actf-dev/maillist.html", "", 1);
	$Nav->addCustomNav("Plan", 			"/actf/plan.php", "", 1);
	$Nav->addCustomNav("Team", 			"/actf/team.php", "", 1);
	$Nav->addNavSeparator("Project Wiki", 	"http://wiki.eclipse.org/ACTF", "", 1);	

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	?>