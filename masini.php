<?php

class Form extends InventarMasini {

//  function __construct() {
        //Stabilim un ID
//        $this->id = rand(10, 1000000);
        //Afisam ID-ul creat
//        echo $this->id . ' este ID-ul salvat. <br/>';
        //Incrementam nr. total de masini
//        Masina::$numar_total_masini++;
//    }

	public function getForm() {
		 $content_form = <<<EOD
     	<form method="POST" action="" >
		  <fieldset>
			<legend>Personal information:</legend>
			First name:<br>
			<input type="text" name="firstname" ><br>
			Last name:<br>
			<input type="text" name="lastname" ><br><br>
			<input type="submit" value="Submit">
		  </fieldset>
		</form>
	
EOD;
		

		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];

	$content2 = 'Prenumele este ' . $firstname . ' si numele ' . $lastname;
		
	$adunare = $firstname +  $lastname;
		
	echo $content_form;
	echo '<h4>Rezultate:</h4><h4>Rezultate:</h4>';
	echo $content2 . '<br>';
	echo '<h5>Iar adunarea lor este: <h5>' .  $adunare;
	
	//aplicare discount
	if ($adunare < 10) {
		$discount = 0;
	} else if (($adunare >= 10) && ($adunare <= 49)   ) {
		$discount = 5;
	} else if ($adunare > 49) {
		$discount = 'Contactati-ne pt. o oferta personalizata';
	}
	
	echo '<h4>Discount: <h4>' . $discount;
	

	echo '<h4>Array: <h4>' ;
	$produse = array('Un produs'=>100, 'Al doilea'=>200, 'Al treilea'=>300);
	$produse2 = array('Un produs'=>100, 'Al doilea'=>200, 'Al treilea'=>300);
	
	echo '<h4>Foreach: <h4>' ;
	foreach($produse as $produs=>$valoare) {echo $produs.' - '.$valoare.'<br/>';}

	echo '<h4>Teste: <h4>' ;
	if ($produse == $produse2) {
		echo 'True';
	}
	
	
	echo '<h4>Multidimensional Array: <h4>' ;
	$products = array(	array(	'Titlu produs'=>'Easy',
								'Descriere'=>'Best product in town',
								'Pret'=> 300
							),
						array(	'Titlu produs'=>'Fun',
								'Descriere'=>'Just for you',
								'Pret'=> 400
							),
						array(	'Titlu produs'=>'No escape',
								'Descriere'=>'Experience at the best',
								'Pret'=> 500
							),

				);



for($rand=0; $rand<3; $rand++) {
		echo ' | '.$products[$rand]['Easy'] . ' | ' . $products[$rand]['Descriere'] . ' | ' .  $products[$rand]['Pret']  ;
}







	echo '<h4>Array: <h4>' ;
	
	$produse = array('Un produs'=>100, 'Al doilea'=>200, 'Al treilea'=>300);
	echo $produse[0] . '<br/>';
	for ($i = 0; $i<3; $i++) {
		echo $produse[$i].'<br/>';
	}
	
	echo '<h4>Foreach: <h4>' ;
	foreach($produse as $produs=>$valoare) {echo $produs.' - '.$valoare.'<br/>';}
	
	
	echo '<h4>Comparatie/sortare Array : <h4>' ;
	$products = array(  array('TIR', 'Tires', 123),
						array('OIL', 'Oil', 209),
						array('SPK', 'Spark Plugs', 975),
						array('HOD', 'Hood', 1920),
						array('LHT', 'Lights', 328),
						array('BRK', 'Brakes', 309),
	);
	
	function compare($x, $y) {   //x este primul array, iar x[0], x[1], x[2] ar fi codul, descrierea, pretul.
		if ($x[2] == $y[2]) {	//pt urmatorul array avem y...
			return 0;	//prin urmare functia compara preturile 
		} else if ($x[2] < $y[2]) {
			return -1;
		} else {
			return 1;
		}
	}
	
	usort ($products, 'compare'); //user sort
	
	

	echo '<h4>Printf: <h4>';
	$comenzi = "20 comenzi";
	printf("Avem in total %s.", $comenzi);
	
	echo '<h4>"Formatare pt DB": <h4>';
	$feedback_client = "Ne-a spus ca 'sdasd' asdasda/asdasda";
	$noua_variabila = stripslashes($feedback_client);
	echo $feedback_client.'<br/>';
	echo $noua_variabila;
	
	
	echo '<h4>"Explode": <h4>';
	$adresa = "Strada Aurel Vlaicu, nr. 12, etaj 1, ap. 78, Bucuresti";
	$adresa_noua = explode(',', $adresa);// separam elementele de la virgula
	$arrlength = count($adresa_noua);//verificam lungimea matricei
	for($x = 0; $x < $arrlength; $x++) { //afisam rezultatele
    echo $adresa_noua[$x];
    echo "<br>";
}





	echo '<h4>"Cauta un cuv in string": <h4>';
	if (strstr($adresa, 'Vlaicu')) {
		echo 'Contine cuv Vlaicu';
	}
	strpos($adresa, "o"); //unde se afla litera o in string
	
	
	echo '<h4>"Inlocuieste un cuv in string": <h4>';
	$feedback="Cred ca programul este urat si de multe ori fals";
	$offcolor= array("urat", "fals"); //cuvintele care vor fi cenzurate, in array.
	$feedback= str_replace($offcolor, '-cenzurat-', $feedback);
	echo $feedback;
	
	
	
	
	echo '<h4>"Split function - important": <h4>';
	$email="antonio@gmail.com";
	$arr = split("\.|@", $email);
	while(list($key, $value) = each ($arr)) {
		echo "<br/>".$value;
	}  
	
	
	
	echo '<h4>"____": <h4>';
	function table_new($border=1, $cell=2) {
		echo "Afisam valorile: Border: " . $border . " Cell: " . $cell; 
	}
	table_new(3, 4);
	
	
	echo '<h4>"Passing by reference": <h4>';  //am adaugat & in fata parametrului. Altfel, variabila din parametru este o alta variabila decat cea din interiorul functiei (scoop).
	function increment(&$value, $amount=1) {
		$value = $value + $amount;
	}
	
	$value = 10;
	increment($value);
	echo $value;
	
	
	
	
	
	

//	echo '<h4>Write in a file <h4>';
//	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
//	//deschidem fisierul
//	$doc = fopen("$DOCUMENT_ROOT" . "/2/documents/orders.txt", 'ab');
//	//cream sablonul pe baza caruia scriem in fisier/o inregistrare pe rand
//	$text_de_adaugat = "Text"."\t"."Alt text\r\n";
//	//scriem in fisier
//	flock($doc, LOCK_EX);//blocam fisierul pt scriere
//	fwrite($doc, $text_de_adaugat);
//	flock($doc, LOCK_UN);//eliberam fisierul dupa scriere
//	//inchidem fisierul
//	fclose($doc);


//	echo '<h4>Read from a file <h4>';
	//accesam fisierul dorit pt citire/ @ ne ajuta sa suprimam erorile/notice-urile care ar afisa utilizatorului calea fisierelor.
//	@ $doc = fopen("$DOCUMENT_ROOT" . "/2/documents/orders.txt", 'rb');
//	if (!$doc) {
//		echo "Nu putem citi fisierul, reveniti mai tarziu.";
//		exit;
//	}
	//afisam rezultatele/ feof - citim fisierul pana la finalul sau/ fgets - cate un rand
//	while (!feof($doc)) {
//		$comanda = fgets($doc, 999);
//		echo $comanda . "<br/>";
//	}




//	echo '<h4>Teste while loop <h4>';
//	$numnames = 4;
//	for ($i=1; $i <=$numnames; $i++) {
//		$temp = "name$i";
//		echo $$temp.'<br/>';
//	}
	


//	$a = 2;
//	echo ++$a . '<br>';
	//Output:3 - incrementarea se produce inaintea de afisarea variabilei.
//	$b = 2;
//	echo $b++ . '<br>';
	//Output:2	 - incrementarea se produce dupa afisarea variabilei.
//	echo $b . '<br>';
	//Output:3	 - afisarea variabilei dupa ce anterior a fost incrementata.
		
//	echo '<h3>Test</h3>';
//	echo $x = 5 . '<br>';	
//	echo $y = &$x . '<br>';	//alias & ne ajuta sa cream o relatie intre cele 2 variabile, imprumutant mereu valoarea operatorului din stanga
//	echo $y . '<br>';	
//	echo $x = 7 . '<br>';		
//		echo $y . '<br>';	
		
//		echo 2<10 ? 'corect' : 'fals'  . '<br>'; //conditionare if
		
		
	}




 
 
 
}


?>



