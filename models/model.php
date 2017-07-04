<?php
include_once("lib/connect.php");
class Model {

	public function __construct()  
     {  
          $this->connect = new connection();
     }

     public function addUser($data =[]){
     	if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
			//$id = $_POST["id"];
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
  				mysqli_query($this->connect->connect(),$sql);
				echo "Chúc mừng bạn đã đăng ký thành công";	
				}
			}
		}

	

	public function listUser(){
	 

	        $sql= "SELECT * from users";
	       	return $rows = mysqli_query($this->connect->connect(), $sql);
	}
	function deleteSql(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$sql = "DELETE FROM users WHERE id ='$id'";
			if(mysqli_query($this->connect->connect(),$sql)){
				echo "Xoa thanh cong";
				//header("location:view/view.php");
			}
			else{
				echo "Xoa khong thanh cong, hay thu lai";
			}
		}
	}
	function setToUpdate(){

		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$sql = "SELECT * FROM users WHERE id='$id'";
			$result = mysqli_query($this->connect(),$sql);
			$arr = array();
			while($rows = mysqli_fetch_assoc($result)){
				$name = $rows['name'];
				echo "$name";die;
				$email = $rows['email'];
				$username = $rows['username'];
				$password= $rows['password'];
				$arr = $rows;
			}
			return $arr;
		}
		
		
	}

	function update(){
		if(isset($_POST['submit'])){
			$name= $_POST['name'];
			$email = $_POST['email'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$sql = "UPDATE users SET name ='$name',email ='$email',username ='$username',password = '$password'WHERE id = '$id'";
			 $result = mysqli_query($this->connect->connect(),$sql);
			 echo "Updated";

			}
	}
}
	
	// public function edit($id){

	// }

	// public function delete($id){

	// }

?>