<?php 

require_once('EnigmaBase.class.php');

class EnigmaApplication extends EnigmaBase{

	public function run(){
		if( isset( $_REQUEST['task'] ) ){
			$task = $_REQUEST['task'];
			switch( $task ){
				case 'addcontent':
					$this->addContent();
				break;
				
				case 'modifycontent':
					$this->modifyContent();
				break;
			
				default:
					$this->display();
				break;
				
			}
		
		}
		else{
			$this->display();
		}
	
	}
	
	public function addContent(){
		echo "This is the add content method.";
	
	}
	
	public function display(){
		echo "This is the view content method.";
	
	}
	
	public function modifyContent(){
		echo "This is the modify content method.";
	
	}
	
	public function deleteContent(){
		
	}
	




}


?>