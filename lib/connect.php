<?php
class connection {

	public function connect()
	{
		$conn = mysqli_connect("localhost","root","","dangnhap");
		return $conn;
	}	
}