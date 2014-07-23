<?php 

require_once('EnigmaBase.class.php');

class EnigmaWidget extends EnigmaBase{

	public $widgetPath = '';
	public $widgetName = '';
	
	public function setWidgetPath( $widgetName ){
		
		$this->widgetPath = 'widgets/' . $widgetName . '/';
		$this->widgetName = $widgeName;
		
	}
	
	public function getWidgetPath(){
		
		return $this->widgetPath;
		
	}
	
	public function display(){
		
		echo "This will be default output of widgets if this function is not overrided by derived class";
	
	}
	
	public function run( $widgetName ){
		
		$this->setWidgetPath( $widgetName );
		$this->display();
		
	}




}




?>