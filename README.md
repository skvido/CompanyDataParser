 CompanyDataParser
 =================
 
  A library for getting all availible data from endpoint http://wwwinfo.mfcr.cz/cgi-bin/ares/darv_bas.cgi?ico={bussinesID} and storing that data into object.
  
  Usage
  -----
  
  Parser
  
  A parser is used to store company data into Company object and return it.
  
  ```php
  $parser = new CompanyDataParser\Parser();
  $company = $parser->getCompanyData('07628285');
  ```
  
  A method 'getCompanyData' requires string value of valid registration ID of company.
  