<?php
	require ('lib/CompanyDataParser/Parser.php');
	
	// create instance of company data parser	
	$parser = new CompanyDataParser\Parser();
	
	// call method that get data about company represented by registration ID and returns Company object
	$company = $parser->getCompanyData('07628285');
	
	print($company->getName());