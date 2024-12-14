<?php 

	class SongBox{
		private $idSong;
		private $nameSong;
		private $nameSinger; // array
		private $nameComposer;
		private $imageSinger; // primary
		private $srcSong;

		public function __construct($idSong, $nameSong, $nameSinger, $nameComposer, $imageSinger, $srcSong){
			$this->idSong = $idSong;
			$this->nameSong = $nameSong;
			$this->nameSinger = $nameSinger;
			$this->nameComposer = $nameComposer;
			$this->imageSinger = $imageSinger;
			$this->srcSong = $srcSong;
		}

		public function getIdSong(){
			return $this->idSong;
		}

		public function getNameSong(){
			return $this->nameSong;
		}

		public function getNameSinger(){
			return $this->nameSinger;
		}

		public function getNameComposer(){
			return $this->nameComposer;
		}

		public function getImageSinger(){
			return $this->imageSinger;
		}

		public function getSrcSong(){
			return $this->srcSong;
		}
	}
 ?>