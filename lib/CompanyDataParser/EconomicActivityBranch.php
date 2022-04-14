<?php
	namespace CompanyDataParser;
	
	class EconomicActivityBranch {
		private string $code;
		private string $name;
		
		function __construct($code, $name){
			$this->code = $code;
			$this->name = $name;
		}
		
		public function getCode(): string {
			return $this->code;
		}
		
		public function getName(): string {
			return $this->name;
		}
	}