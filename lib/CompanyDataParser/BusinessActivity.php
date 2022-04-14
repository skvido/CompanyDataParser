<?php
	namespace CompanyDataParser;
	
	class BusinessActivity {
		private string $source;
		private string $name;
		
		function __construct($source, $name){
			$this->source = $source;
			$this->name = $name;
		}
		
		public function getSource(): string {
			return $this->source;
		}
		
		public function getName(): string {
			return $this->name;
		}
	}