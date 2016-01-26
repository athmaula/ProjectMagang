<?php 
	class proses
	{	
		private $db;
		function __construct($DB_con)
		{
			$this -> db =$DB_con;
		}
		//action form
		public function input ($tk,$sd,$smp,$sma,$pt){
			try{
				$stmt = $this->db->prepare("INSERT INTO tabel_pendidikan(TK,SD,SMP,SMA,Perguruan Tinggi)VALUES(:tk,:sd,:smp,:sma,:pt)");
				$stmt -> bindparam(":tk",$tk);
				$stmt -> bindparam(":sd",$sd);
				$stmt -> bindparam(":smp",$smp);
				$stmt -> bindparam(":sma",$sma);
				$stmt -> bindparam(":pt",$pt);
				$stmt -> execute();
				return true;
			}catch(PDOException $ex){
				echo $ex->getMessage();
				return false;
			}
		}
	}	
 ?>