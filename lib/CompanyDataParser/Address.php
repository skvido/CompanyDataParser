<?php
	namespace CompanyDataParser;
	
	class Address {
		private string $addressID;
		private string $countryID;
		private string $country;
		private string $cityName;	
		private string $cityDistrict;	
		private string $houseNumber;	
		private string $houseNumberType;	
		private string $postalCode;	
		
		function __construct($addressID, $countryID, $country, $cityName, $cityDistrict, $houseNumber, $houseNumberType, $postalCode){
			$this->addressID = $addressID;
			$this->countryID = $countryID;
			$this->country = $country;
			$this->cityName = $cityName;
			$this->cityDistrict = $cityDistrict;
			$this->houseNumber = $houseNumber;
			$this->houseNumberType = $houseNumberType;
			$this->postalCode = $postalCode;
		}
		
		public function getAddressID(): string {
			return $this->addressID;
		}
		
		public function getCountryID(): string {
			return $this->countryID;
		}
		
		public function getCountry(): string {
			return $this->country;
		}
		
		public function getCityName(): string {
			return $this->cityName;
		}
		
		public function getCityDistrict(): string {
			return $this->cityDistrict;
		}
		
		public function getHouseNumber(): string {
			return $this->houseNumber;
		}
		
		public function getHouseNumberType(): string {
			return $this->houseNumberType;
		}
		
		public function getPostalCode(): string {
			return $this->postalCode;
		}
	}