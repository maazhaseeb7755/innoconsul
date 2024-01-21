<?php
class  DBSQLi {
       
	   //private  $dbhost = "127.0.0.1";
       //private  $dbuser = "";
       //private  $dbpass = "";
       //private  $dbname = "";
	   //private  $conn = 0; 
	   
	   private  $dbhost = "localhost";
       private  $dbuser = "root";
       private  $dbpass = "mysql";
       private  $dbname = "mxzertinnocons";
	   private  $conn = 0; 
	   
	   
	   
	   //function __construct() {
       
      //  $this->getCon();
   // }

     //function __destruct() {
      //  print "Destroying DBSQLi\n";
	//	$this->close();
    //}
	   
	   
	   
	   
	   function getCon() {
	   $conn = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass,$this->dbname);
   
         if(! $conn ) {
               die('Could not connect: ' . mysqli_connect_error());
         }//else{
		 //echo "Connected Sueeccsfully";
		// }
		return $conn; 
	   }
	   
	   function close($conn){
	   mysqli_close($conn);
	   }
}