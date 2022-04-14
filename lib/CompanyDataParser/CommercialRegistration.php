<?php
	namespace CompanyDataParser;
	
	class CommercialRegistration {
		private string $courtCode;
		private string $courtName;
		private string $fileNumber;
		private string $status;
		private string $bankruptcy;
		private string $composition;
		private string $cancellation;
		private string $liquidation;
		
		function __construct($courtCode, $courtName, $fileNumber, $status, $bankruptcy, $composition, $cancellation, $liquidation){
			$this->courtCode = $courtCode;
			$this->courtName = $courtName;
			$this->fileNumber = $fileNumber;
			$this->status = $status;
			$this->bankruptcy = $bankruptcy;
			$this->composition = $composition;
			$this->cancellation = $cancellation;
			$this->liquidation = $liquidation;
		}
		
		public function getCourtCode(){
			return $this->courtCode;
		}
		
		public function getCourtName(){
			return $this->courtName;
		}
		
		public function getFileNumber(){
			return $this->fileNumber;
		}
		
		public function getStatus(){
			return $this->status;
		}
		
		public function getBankruptcy(){
			return $this->bankruptcy;
		}
		
		public function getComposition(){
			return $this->composition;
		}
		
		public function getCancellation(){
			return $this->cancellation;
		}
		
		public function getLiquidation(){
			return $this->liquidation;
		}	
	}