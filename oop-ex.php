<?php
class students {  // new class
    public $id;
    public $name;   // proparites (null) or defult value
    public $email;
    public $mobile_number;

    public function __construct($id, $name, $email, $mobile_number) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->mobile = $mobile_number;
      }
      public function id(){
        echo  $this->id ;
   
        }
    
     public function name(){
     echo  $this->name ;

     }
   
    public function mobile(){
    echo  $this->mobile  ;
    }

    public function email(){
        echo  $this->email ;
        }
    
}

$students_1= new students("12345", "sara","sara@orange.com"," 079999999");
// $students_1->id();
// $students_1->name();
// $students_1->mobile();

$students_2= new students("34567", "batool","batool@orange.com"," 078888888");
// $students_2->name();
// $students_2->email();

class Teacher extends students {
      public $salary ;
      public $subjects;  
    public function __construct($id, $name, $email, $mobile_number,$salary,$subjects){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->mobile = $mobile_number;
        $this->salary =$salary  ;
        $this->subjects= $subjects;
    }
   
    
    public function salary(){
        echo  $this->salary ;
        }
        
    public function subjects(){
        echo  $this->subjects ;
        }
}
$Teacher1= new Teacher("12234", "batool","batool@orange.com"," 078888888", "1000", "[javascript, php, css]" );
echo'<pre>';
$Teacher1->id(); 
$Teacher1->name();
$Teacher1->salary();
$Teacher1->subjects();
echo'</pre>';