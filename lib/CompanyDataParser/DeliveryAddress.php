<?php
	namespace CompanyDataParser;
	
	class DeliveryAddress {
		private string $deliveryAddress;	
		private string $deliveryCity;	
		
		function __construct($deliveryAddress, $deliveryCity){
			$this->deliveryAddress = $deliveryAddress;
			$this->deliveryCity = $deliveryCity;
		}
		
		public function getDeliveryAddress(): string {
			return $this->deliveryAddress;
		}
		
		public function getDeliveryCity(): string {
			return $this->deliveryCity;
		}
	}