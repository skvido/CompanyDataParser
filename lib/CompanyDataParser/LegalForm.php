<?php
	namespace CompanyDataParser;
	
	class LegalForm {
		private string $id;
		private string $name;
		
		function __construct($id, $name){
			$this->id = $id;
			$this->name = $name;
		}
		
		public function getID(): string {
			return $this->id;
		}
		
		public function getName(): string {
			return $this->name;
		}
	}