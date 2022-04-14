<?php
	namespace CompanyDataParser;
	
	include_once('BusinessActivity.php');
	include_once('EconomicActivityBranch.php');
	include_once('Company.php');
	
	class Parser{
		
		/* 
		 * This method handles response from endpoint based on registration ID and stores all company data 
		 * into Company object that is returned after its done.
		 */
		 
		public function getCompanyData(string $registrationID): Company{
			// endpoint with all the data
			$url = 'http://wwwinfo.mfcr.cz/cgi-bin/ares/darv_bas.cgi?ico=' . $registrationID;
			
			// loading data as XML
			$xml = simplexml_load_file($url);	
			
			// contains all the namespaces used in XML
			$namespaces = $xml->getDocNamespaces();
			
			// if this element exists, there is a problem with input
			$requestStatus = $xml->children($namespaces['are'])->children($namespaces['D'])->E->ET;
			
			// checking if input is correct
			if (isset($requestStatus)){
				die('Registration ID <b>' . $registrationID . '</b> not found!');
			}
			
			// all company data are in this element 
			$data = $xml->children($namespaces['are'])->children($namespaces['D'])->VBAS;
			
			// companies usualy have more than one economic/business activity so they are parsed from XML and stored in arrays
			$economicActivityClassificationCodes = [];
			for ($i = 0 ; $i < sizeof($data->Nace->NACE) ; $i++){
				array_push($economicActivityClassificationCodes, (string)$data->Nace->NACE[$i]);
			}
			
			$businessActivities = [];
			for ($i = 0 ; $i < sizeof($data->PPI) ; $i++){
				for ($j = 0 ; $j < sizeof($data->PPI->PP[$i]->T) ; $j++){
					array_push($businessActivities, new BusinessActivity((string)$data->PPI->PP[$i]->attributes()->zdroj, (string)$data->PPI->PP[$i]->T[$j]));
				}
			}
			
			$economicActivityBranches = [];
			for ($i = 0 ; $i < sizeof($data->Obory_cinnosti->Obor_cinnosti) ; $i++){
				$economicActivityBranch = $data->Obory_cinnosti->Obor_cinnosti[$i];
				array_push($economicActivityBranches, new EconomicActivityBranch((string)$economicActivityBranch->K, (string)$economicActivityBranch->T));
			}
			
			// creating Company object that contains all data
			$company = new Company(
								$data->OF, 
								$data->ICO, 
								$data->DIC, 
								$data->DV, 
								$data->PF->KPF, 
								$data->PF->NPF,
								$data->AD->UC,
								$data->AD->PB,
								$data->AA->IDA,
								$data->AA->KS,
								$data->AA->NS,
								$data->AA->N,
								$data->AA->NCO,
								$data->AA->CD,
								$data->AA->TCD,
								$data->AA->PSC,
								$data->PSU,
								$data->ROR->SZ->SD->K,
								$data->ROR->SZ->SD->T,
								$data->ROR->SZ->OV,
								$data->ROR->SOR->SSU,
								$data->ROR->SOR->KKZ->K,
								$data->ROR->SOR->VY->K,
								$data->ROR->SOR->ZAM->K,
								$data->ROR->SOR->LI->K,
								$data->RRZ->ZU->KZU,
								$data->RRZ->ZU->NZU,
								$data->RRZ->FU->KFU,
								$data->RRZ->FU->NFU,
								$data->KPP,
								$economicActivityClassificationCodes,
								$businessActivities,
								$economicActivityBranches
							);
			

			return $company;
		}	
	}