<?php
include_once("lib/connect.php");

class Model {

	public function __construct()  
     {  
          $this->connect = new connection();
     }

     public function listUser($data =[]){
     	if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
			$id = $_POST["id"];
  			$username = $_POST["username"];
  			//$password = $_POST["password"];
  			//$hash = password_hash($password, PASSWORD_DEFAULT);
  			$password = password_hash($_POST['password'],PASSWORD_BCRYPT);
 			 $name = $_POST["name"];
  			$email = $_POST["email"];
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			  if ($username == "" || $password == "" || $name == "" || $email == "") {
				   echo "Bạn vui lòng nhập đầy đủ thông tin";
  				}else{	

					$sql = "INSERT INTO users(
				    					username,
				    					password,
				    					name,
									    email
				    					) VALUES (
				    					'$username',
				    					'$password',
									    '$name',
				    					'$email'
				    					)";
  				if(mysqli_query($this->connect->connect(),$sql)=="true" ){
					echo "Chúc mừng bạn đã đăng ký thành công";	
					}
				}
			}
		}
	}
	

	// public function add(){

	// }
	
	// public function edit($id){

	// }

	// public function delete($id){

	// }

?>