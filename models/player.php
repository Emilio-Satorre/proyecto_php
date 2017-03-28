<?php
class Player{
	
	public $nick;

	function __construct($name) {
       $this->nick = $name;       
    }   
    public function getNick() {
        return $this->nick;
    }

    public function setNick($name){
 		$this->nick = $name; 
    }
}
