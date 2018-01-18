<?php
//session_start();
/**
* 
*/
class controlTicketing
{
	private $connection;
	function __construct(){
		$this ->connection = $this ->connect();	
	}


	public function connect(){
		$host = 'localhost';
		$username = 'root';
		$password = '';
		$dbname = 'ticketing';

		$connect = mysqli_connect($host,$username,$password,$dbname);	//database connection

		//To check for error in connection
		if(mysqli_connect_error()){
			echo "Database connection failed";
		}else{
			echo "connected to database ".$dbname;
		}
		return $connect;
	}
		
		public function userLogin(){
          if(isset($_POST["login"])){
             $username = $_POST["usernamee"];
             $pass = md5($_POST["loginPass"]);
             //: make sure username and password is not empty
             if(trim($username) == "" or $pass == ""){

               return "<span class = 'error'>Username or Password should not be empty!</span>";

             }else{
               //: connect to database to check the data
               $username = mysql_real_escape_string($username);

                //  die("select * from login where username = '$username' and password = '$pass' and login_as = '$loginas'");
            $res = mysqli_query($this->connection, "select * from login where username = '$username' and password = '$pass'");
            $resultset = mysqli_fetch_assoc($res);
             if( count($resultset)==0 ){
                 return "<br/><div style='padding-left:33%;text-align:center'><div style='padding-top:10px;margin:30px; width:45%; padding-text-align:center; background:white;color:red;border-radius:10px;padding-bottom:10px;'>
                     <b style='width:40%'>Login Unsuccessful!!!</b>
                   </div></div>";
                   
             }else{
             	// set session
             	$_SESSION["index"] = $resultset;
                       header("location:login.php");
                   }
        	}
        }
      }


        public function databaseinsert(){
        	if (isset($_POST['print'])) {
        		
			$a = $_POST['tt'];
			$b = $_POST['fn'];
			$c = $_POST['gender'];
			$d = $_POST['pn'];
			$e = $_POST['email'];
			$f = $_POST['date'];
			$g = $_POST['nk'];
			$h = $_POST['nkp'];
			$i = $_POST['conv'];
			$j = $_POST['locate'];
			$k = $_POST['dest'];
		

		$insert = "INSERT into client_info (title,name,gender,phone_number,email_address,dob,next_of_kin, kin_no, convenience, location, destination)
									values('{$a}','{$b}','{$c}','{$d}','{$e}','{$f}','{$g}','{$h}','{$i}','{$j}','{$k}')";

									echo $insert;
			if(mysqli_query($this->connection,$insert)){
				echo "SUCCESSFUL";
				header("Location:printout.php?id=".$d);
			}else{
				echo "UNSUCCESSFUL";
				die(mysqli_error($this->connection));
			}
		}
        
    }

    	public function signup(){
    		if (isset($_POST['signup'])){
    			$l = $_POST['usname'];
    			$m = md5($_POST['pword']);

    			if(trim($l) == "" or $m == ""){

               echo "<span class = 'error'>Username or Password should not be empty!</span>";

             }else{

    			$signup = "INSERT into login(username,password) values('$l','$m')";
    			if(mysqli_query($this->connection,$signup)){
    				header("Location:login.php");
					echo "SUCCESSFUL";
					}else{
						echo "USERNAME ALREADY EXIST, CHOOSE ANOTHER";
							}
						}
    			}
    }



    	public function databaseretrieve($d){
    		
    			//echo $d;
    			$retrieve = "SELECT * from client_info where phone_number=$d";

    			//echo $retrieve;
		$que = mysqli_query($this->connection,$retrieve);
		
		$req = array();
		 while ($res =  mysqli_fetch_assoc($que)) {
			array_push($req, $res);
			}return $req;
		

    }

    	public function logout(){
    		if(isset($_GET["logout"])){
          session_destroy();
         // exit("successful");
        echo "<strong style = 'color:green';>Logout Successful</strong>";
        }
    	}
 }

 $tick = new controlTicketing();


?>