<?php
	namespace CompanyDataParser;
	
	class TradeLicenseRegistration {
		private string $tradesLicensingOfficeCode;
		private string $tradesLicensingOfficeName;		
		private string $taxOfficeCode;
		private string $taxOfficeName;
		
		function __construct($tradesLicensingOfficeCode, $tradesLicensingOfficeName, $taxOfficeCode, $taxOfficeName){
			$this->$tradesLicensingOfficeCode = $tradesLicensingOfficeCode;
			$this->$tradesLicensingOfficeName = $tradesLicensingOfficeName;
			$this->taxOfficeCode = $taxOfficeCode;
			$this->taxOfficeName = $taxOfficeName;
		}
		
		public function getTradesLicensingOfficeCode(){
			return $this->tradesLicensingOfficeCode;
		}
		
		public function getTradesLicensingOfficeName(){
			return $this->tradesLicensingOfficeName;
		}
		
		public function getTaxOfficeCode(){
			return $this->taxOfficeCode;
		}
		
		public function getTaxOfficeName(){
			return $this->taxOfficeName;
		}
	}