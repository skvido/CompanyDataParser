<?php
	namespace CompanyDataParser;
	
	include_once('LegalForm.php');
	include_once('DeliveryAddress.php');
	include_once('Address.php');
	include_once('CommercialRegistration.php');
	include_once('TradeLicenseRegistration.php');
	
	// class stores all availible data about company
	class Company {
		private string $name;
		private string $registrationID;
		private string $taxID;
		private string $dateOfEstablishment;
		private LegalForm $legalForm;
		private DeliveryAddress $deliveryAddress;
		private Address $address;
		private string $flags;
		private CommercialRegistration $commercialRegistration;
		private TradeLicenseRegistration $tradeLicenseRegistration;
		private string $numberOfEmployeesCategory;
		private array $economicActivityClassificationCodes;
		private array $businessActivities;
		private array $economicActivityBranches;
		
		
		
		function __construct(
			$name, 
			$registrationID, 
			$taxID, 
			$dateOfEstablishment, 
			$legalFormCode, 
			$legalFormName,
			$deliveryAddress,
			$deliveryCity,
			$addressID,
			$countryID,
			$country,
			$cityName,
			$cityDistrict,
			$houseNumber,
			$houseNumberType,
			$postalCode,
			$flags,
			$courtCode,
			$courtName,
			$fileNumber,
			$status,
			$bankruptcy,
			$composition,
			$cancellation,
			$liquidation,
			$tradesLicensingOfficeCode,
			$tradesLicensingOfficeName,
			$taxOfficeCode,
			$taxOfficeName,
			$numberOfEmployeesCategory,
			$economicActivityClassificationCodes,
			$businessActivities,
			$economicActivityBranches			
		){			
			$this->name = $name;
			$this->registrationID = $registrationID;
			$this->taxID = $taxID;
			$this->dateOfEstablishment = $dateOfEstablishment;
			$this->legalForm = new LegalForm($legalFormCode, $legalFormName);
			$this->deliveryAddress = new DeliveryAddress($deliveryAddress, $deliveryCity);
			$this->address = new Address($addressID, $countryID, $country, $cityName, $cityDistrict, $houseNumber, $houseNumberType, $postalCode);
			$this->flags = $flags;
			$this->commercialRegistration = new CommercialRegistration($courtCode, $courtName, $fileNumber, $status, $bankruptcy, $composition, $cancellation, $liquidation);
			$this->tradeLicenseRegistration = new TradeLicenseRegistration($tradesLicensingOfficeCode, $tradesLicensingOfficeName, $taxOfficeCode, $taxOfficeName);
			$this->numberOfEmployeesCategory = $numberOfEmployeesCategory;
			$this->economicActivityClassificationCodes = $economicActivityClassificationCodes;
			$this->businessActivities = $businessActivities;
			$this->economicActivityBranches = $economicActivityBranches;
		}
		
		public function getName(): string {
			return $this->name;
		}
		
		public function getregistrationID(): string {
			return $this->registrationID;
		}
		
		public function getTaxID(): string {
			return $this->taxID;
		}
		
		public function getDateOfEstablishment(): string {
			return $this->dateOfEstablishment;
		}
		
		public function getLegalForm(): LegalForm{
			return $this->legalForm;
		}
		
		public function getDeliveryAddress(): DeliveryAddress{
			return $this->deliveryAddress;
		}
		
		public function getAddress(): Address{
			return $this->address;
		}
		
		public function getFlags(): string {
			return $this->flags;
		}
		
		public function getNumberOfEmployeesCategory(): string {
			return $this->numberOfEmployeesCategory;
		}
		
		public function getEconomicActivityClassificationCodes() : array{
			return $this->economicActivityClassificationCodes;
		}
		
		public function getBusinessSubjects() : array {
			return $this->businessActivities;
		}
		
		public function getEconomicActivityBranches() :array {
			return $this->economicActivityBranches;
		}	
	}