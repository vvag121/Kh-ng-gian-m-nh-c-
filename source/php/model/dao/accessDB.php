<?php

	$dir = $_SERVER['DOCUMENT_ROOT']."/KhongGianAmNhac/source/php/model/bean/account.php";
	include($dir);
	include($_SERVER['DOCUMENT_ROOT']."/KhongGianAmNhac/source/php/model/bean/admin.php");
	include($_SERVER['DOCUMENT_ROOT']."/KhongGianAmNhac/source/php/model/bean/songFull.php");

	const DBNAME = "kgan";
	const USER = "root";
	const PASS = "";

	class ControlDB{
		private $dbName;
		private $user;
		private $pass;
		private $connect;

		public function __construct(){
			$this->dbName = DBNAME;
			$this->user = USER;
			$this->pass = PASS;
			try{
				$this->connect = new PDO("mysql:host=localhost;dbname=".DBNAME, USER, PASS);
				$this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch(Exception $e){}
		}

		public function query($query){
			try{
				$stmt = $this->connect->prepare($query);
				$stmt->execute();
				$row = $stmt;
				return $row;
			} catch (Exception $e){}
		}

		public function update($query, $value){
			try{
				$stmt = $this->connect->prepare($query);
				for($i = 1; $i <= count($value); $i++){
					$stmt->bindParam($i, $value[$i-1]);
				}
				$stmt->execute();
				return $stmt;
			} catch (Exception $e){}
		}

		public function getConnect(){
			return $this->connect;
		}
	}
	

	function query($sql){
		$db = new ControlDB();
		$row = $db->query($sql);
		return $row;
	}

	function update($sql, $val){
		$db = new ControlDB();
		$result = $db->update($sql, $val);
		return $result;
	}



	function checkLogin($account){
		$email = $account->getEmail();
		$pass = $account->getPassword();
		$data  = query("select email, password from account where email = '$email';");
		foreach($data as $row){
			if($row[0] == $email && $row[1] == $pass)
				return true;
		}
		return false;
	}

	function checkLoginAdmin($account){
		$email = $account->getEmail();
		$pass = $account->getPassword();
		$data  = query("select email, password from admin where email = '$email';");
		foreach($data as $row){
			if($row[0] == $email && $row[1] == $pass)
				return true;
		}
		return false;
	}

	function getAdminInfo($email){
		$data  = query("select * from adminInfo where email = '$email';");
		return $data;
	}

	function loadSong(){
		$sql = "select distinct nameSong, nameSinger, nameComposer, imageSinger, srcSong, numLike, numComment, numDownload from song inner join singer on song.emailSinger = singer.email inner join composer on song.emailComposer = composer.email;";
		$data = query($sql);
		return $data;
	}

	function search($str){
		// by name song
		$sql = "select nameSong, nameSinger, nameComposer, imageSinger, srcSong, numLike, numComment, numDownload from song inner join singer on song.emailSinger = singer.email inner join composer on song.emailComposer = composer.email where nameSong like '%$str%' or nameSinger like '%$str%';";
		$data = query($sql);
		return $data;
	}

	function updateAdmin($admin){
		$email = $admin->getEmail();
		$nameAdmin = $admin->getNameAdmin();
		$address = $admin->getAddress();
		$phone = $admin->getPhone();
		$sql = "update adminInfo set nameAdmin = '$nameAdmin', address = '$address', phone = '$phone' where email = '$email';";
		$data = query($sql);
	}

	function changePassAdmin($account){
		$email = $account->getEmail();
		$pass = $account->getPassword();
		$sql = "update admin set password = '$pass' where email = '$email';";
		$data = query($sql);
	}

	function getPassAdmin($email){
		$sql = "select password from admin where email = '$email';";
		$data = query($sql);
		return $data;
	}

	function getSongListAdmin(){
		$sql = "select distinct song.*, nameSinger, nameComposer from song inner join singer on song.emailSinger = singer.email inner join composer on song.emailComposer = composer.email;";
		$data = query($sql);
		return $data;
	}

	function getSingerList(){
		$sql = "select * from singer;";
		$data = query($sql);
		return $data;
	}

	function getComposerList(){
		$sql = "select * from composer;";
		$data = query($sql);
		return $data;
	}

	function getListenerList(){
		$sql = "select * from listener;";
		$data = query($sql);
		return $data;
	}

	function addSong($idSong, $nameSong, $emailSinger, $emailComposer, $releaseTime, $srcSong){
		$sql = "insert into song(idSong, nameSong, emailSinger, emailComposer, releaseTime, srcSong) value ('$idSong', '$nameSong', '$emailSinger', '$emailComposer', '$releaseTime', '$srcSong');";
		$data = query($sql);
		return $data;
	}

	function updateSong($idSong, $nameSong, $emailSinger, $emailComposer, $releaseTime, $srcSong){
		$sql = "update song set nameSong = '$nameSong', emailSinger = '$emailSinger', emailComposer = '$emailComposer', releaseTime = '$releaseTime', srcSong = '$srcSong' where idSong = '$idSong';";
		$data = query($sql);
		return $data;
	}

	function deleteSong($idSong){
		$sql = "delete from song where idSong = '$idSong';";
		$data = query($sql);
		return $data;
	}	
 
 	function addSinger($email, $nameSinger, $birthday, $address, $imageSinger){
 		$sql = "insert into singer(email, nameSinger, birthday, address, imageSinger) value ('$email', '$nameSinger', '$birthday', '$address', '$imageSinger');";
		$data = query($sql);
		return $data;
 	}

 	function updateSinger($email, $nameSinger, $birthday, $address, $imageSinger){
		$sql = "update singer set nameSinger = '$nameSinger', birthday = '$birthday', address = '$address', imageSinger = '$imageSinger' where email = '$email';";
		$data = query($sql);
		return $data;
	}

	function deleteSinger($email){
		$sql = "delete from singer where email = '$email';";
		$data = query($sql);
		return $data;
	}

	function addComposer($email, $nameComposer, $birthday, $address, $imageComposer){
 		$sql = "insert into composer(email, nameComposer, birthday, address, imageComposer) value ('$email', '$nameComposer', '$birthday', '$address', '$imageComposer');";
		$data = query($sql);
		return $data;
 	}

 	function updateComposer($email, $nameComposer, $birthday, $address, $imageComposer){
		$sql = "update composer set nameComposer = '$nameComposer', birthday = '$birthday', address = '$address', imageComposer = '$imageComposer' where email = '$email';";
		$data = query($sql);
		return $data;
	}

	function deleteComposer($email){
		$sql = "delete from composer where email = '$email';";
		$data = query($sql);
		return $data;
	}

	function addListener($email, $nameListener, $birthday, $address){
 		$sql = "insert into listener(email, nameListener, birthday, address) value ('$email', '$nameListener', '$birthday', '$address');";
		$data = query($sql);
		return $data;
 	}
	 function addAccount($email, $password) {
		// Câu lệnh SQL để chèn dữ liệu vào bảng account
		$sql = "INSERT INTO account (email, password) VALUES ('$email', '$password')";
	
		// Thực thi câu lệnh SQL
		$data = query($sql);
	
		// Trả về kết quả của câu lệnh (true nếu thành công, false nếu thất bại)
		return $data;
	}

 	function updateListener($email, $nameListener, $birthday, $address){
		$sql = "update listener set nameListener = '$nameListener', birthday = '$birthday', address = '$address' where email = '$email';";
		$data = query($sql);
		return $data;
	}

	function deleteListener($email){
		$sql = "delete from listener where email = '$email';";
		$data = query($sql);
		return $data;
	}

	// function register($email, $nameListener, $birthday, $address) {
	// 	// Giả sử bạn đã có một kết nối PDO
	// 	global $conn;  // Kết nối PDO của bạn
	
	// 	// Chuẩn bị câu lệnh SQL với tham số
	// 	$sql = "INSERT INTO listener (email, nameListener, birthday, address) 
	// 			VALUES (:email, :nameListener, :birthday, :address)";
		
	// 	// Chuẩn bị câu lệnh SQL
	// 	$stmt = $conn->prepare($sql);
		
	// 	// Liên kết các tham số
	// 	$stmt->bindParam(':email', $email);
	// 	$stmt->bindParam(':nameListener', $nameListener);
	// 	$stmt->bindParam(':birthday', $birthday);
	// 	$stmt->bindParam(':address', $address);
		
	// 	// Thực thi câu lệnh SQL
	// 	$result = $stmt->execute();
		
	// 	// Kiểm tra xem câu lệnh SQL có thành công hay không
	// 	if ($result) {
	// 		return true;
	// 	} else {
	// 		return false;
	

	
 ?>