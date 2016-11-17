<?php 
	class CityAction extends Action{
		public function _empty($name){
			$this->city($name);
		}

		protected function city($name){
			echo 'Current City is '.$name.'<br/>';
			echo C('URL_MODEL');
		}

	}

 ?>