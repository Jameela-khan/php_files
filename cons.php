<?php
    class Person {
        
        private $name;
        
        
        
        
        public function __construct($fname, $mname,$lname) {
            echo "~~Hello~~<br/>"; 
            $this->fname = $fname;
			$this->mname = $mname;
            $this->lname = $lname;
        }
        
        
        public function showName() {
            echo "My name is: " . $this->fname . " " . $this->mname." ". $this->lname; 
        }
    }
    
    
    $john = new Person("Jameela", "Ahmed" ,"Khan");
    $john->showName();
    
?>