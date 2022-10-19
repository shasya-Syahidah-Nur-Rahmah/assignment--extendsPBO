<b>Syahidah Nur Rahmah <br>
XI RPL<br></b>

<?php 

class Animals {
	public $hewan1 ;
	public $hewan2 ;
	public $suara1 ;
	public $suara2 ;
	public $ekor1 ;
	public $ekor2 ;
	public $bulu1 ;
	public $bulu2 ;
}
 	class Hewan extends Animals{

 		public function hwn1() {
 			return ("Hewan Pertama = ").$this -> hewan1;
 		}

 		public function suaraCat() {
 			return ("Suara Kucing = ").$this -> suara1;
 		}

 		public function ekorCat () {
 			return ("Ekor Kucing = ").$this -> ekor1;
 		}

 		public function buluCat () {
 			return ("Bulu Kucing = ").$this -> bulu1;
 		}

 		public function hwn2() {
 			return ("Hewan Kedua = ").$this -> hewan2;
 		}

 		public function suaradog() {
 			return ("Suara Anjing = ").$this -> suara2;
 		}

 		public function ekordog() {
 			return ("Ekor Anjing = ").$this -> ekor2;
 		}

 		public function buludog() {
 			return ("Bulu Anjing = ").$this -> bulu2;
 		}
 	}


 	class JenisCat extends Hewan{
 		public $jenis_neko1;
 		public $jenis_neko2;
 		public $jenis_neko3;

 		public function neko1(){
 			return ("1. Jenis kucing ").$this -> jenis_neko1;
 		}

 		public function neko2(){
 			return ("2. Jenis Kucing ").$this -> jenis_neko2;
 		}

 		public function neko3(){
 			return ("3. Jenis Kucing ").$this -> jenis_neko3;
 		}
 	}

 	class JenisDog extends Hewan{
 		public $jenis_inu1;
 		public $jenis_inu2;


 		public function inu1() {
 			return ("1. Jenis Anjing ").$this -> jenis_inu1;
 		}

 		public function inu2(){
 			return ("2. Jenis Anjing ").$this -> jenis_inu2;
 		}
 	} 

 	$cat = new Hewan();
 	echo "=====================KUCING=========================<br>";
 	$cat -> hewan1 = "Kucing <br>";
 	echo $cat -> hwn1();
 	$cat -> suara1 = "Meoww <br>";
 	echo $cat -> suaraCat();
 	$cat -> ekor1 = "Panjang <br>";
 	echo $cat -> ekorCat();
 	$cat -> bulu1 = "Lembut <br>";

 	$j_cat = new JenisCat();
 	echo "<br> <br>";
 	$j_cat -> jenis_neko1 = "Persia <br>";
 	echo $j_cat -> neko1();
 	$j_cat -> jenis_neko2 = "Anggora <br>";
 	echo $j_cat -> neko2();
 	$j_cat -> jenis_neko3 = "Himalaya <br>";
 	echo $j_cat -> neko3();

 	$dog = new Hewan();
 	echo "=====================ANJING=========================<br>";
 	$dog -> hewan2 = "Anjing <br>";
 	echo $dog -> hwn2();
 	$dog -> suara2 = "Gug Gug <br>";
 	echo $dog -> suaraDog();
 	$dog -> ekor2 = "Pendek <br>";
 	echo $dog -> ekorDog();
 	$dog -> bulu2 = "Kasar <br>";
 	echo $dog -> buluDog();

 	$j_dog = new JenisDog();
 	echo "<br> <br>";
 	$j_dog -> jenis_inu1 = "Jermansherp <br>";
 	echo $j_dog -> inu1();
 	$j_dog -> jenis_inu2 = "Bulldog <br>";
 	echo $j_dog -> inu2();

 	?>

 	<p>PS = Real Ngerjain pakai Otak Sendiri!</p>