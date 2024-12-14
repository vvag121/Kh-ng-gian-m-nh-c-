<?php 

	class Song{
		private $idSong;
		private $nameSong;
		private $emailSinger;
		private $emailComposer;
		private $releaseTime;
		private $srcSong;
		private $numLike;
		private $numComment;
		private $numDownload;

		public function __construct($idSong, $nameSong, $emailSinger, $emailComposer, $releaseTime, $srcSong, $numLike, $numComment, $numDownload){
			$this->idSong = $idSong;
			$this->nameSong = $nameSong;
			$this->emailSinger = $emailSinger;
			$this->emailComposer = $emailComposer;
			$this->releaseTime = $releaseTime;
			$this->srcSong = $srcSong;
			$this->numLike = $numLike;
			$this->numComment = $numComment;
			$this->numDownload = $numDownload;
		}

		public function getIdSong(){
			return $this->idSong;
		}

		public function getNameSong(){
			return $this->nameSong;
		}

		public function getEmailSinger(){
			return $this->emailSinger;
		}

		public function getEmailComposer(){
			return $this->emailComposer;
		}

		public function gerReleaseTime(){
			return $this->releaseTime;
		}

		public function getSrcSong(){
			return $this->srcSong;
		}

		public function getNumLike(){
			return $this->numLike;
		}

		public function getNumComment(){
			return $this->numComment;
		}

		public function getNumDownload(){
			return $this->numDownload;
		}
	}
 ?>