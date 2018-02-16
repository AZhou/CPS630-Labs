<!DOCTYPE html>
<html>

    <head>
      <title> PHP is an Object-Oriented Programming Language </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
    </head>


<body>
      <p>
      <?php
        class Student {
            public $firstName;
            public $lastName;
            public $Id;
            
            public function __construct($firstname, $lastname, $id) 
            {
              $this->firstName = $firstname;
              $this->lastName = $lastname;
              $this->Id = $id;
            }
            
            public function newStudent() 
            {
              return " New Student is " . $this->firstName . " " . $this->lastName  ;
            }
			
			function set_fname($new_fname)
			{
				$this->firstName = $new_fname;
			
			}
			function get_fname()
			{
				return $this->firstName;
			}
			function set_lname($new_lname)
			{
				$this->lastName = $new_lname; 
			}
			function get_lname()
			{
				return $this->lastName;
			}
			function set_id($new_id)
			{
				$this->Id = $new_id;
			}
			private function get_id()
			{
				return $this->Id;
			}
          }
          
        $stobj = new Student('firstName1', 'lastName1', 100000);
      
		echo $stobj->newStudent();
		echo $stobj->set_fname('John');
		echo $stobj->set_lname('Doe');
		echo $stobj->set_id('2018');
		
	
		echo "<br />";
		echo $stobj->get_fname(). " "; 
		echo $stobj->get_lname(). " ";
		echo $stobj->get_id(). " ";
		
/*Output:

	firstName1	lastName1	100000
      */  
		?>
        </p>
    </body>
</html>


	