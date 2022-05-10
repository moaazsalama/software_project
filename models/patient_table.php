<?php
class PatientTable extends DatabaseController {
   private $name;
   function getData(){
        $this->openConnection;
       $data= mysqli_query($this->connection,"select * from Patient");
        

    }

}

?>