 <?php
 $tytul = $_POST['tytul'];
 $gatunek = $_POST['gatunek'];
 $rok = $_POST['rok'];
 $ocena = $_POST['ocena'];

 $conn = mysqli_connect('localhost', 'root', '', 'dane');

 if (empty($tytul) || empty($gatunek) || empty($rok) || empty($ocena)) {
     echo 'Są puste!';
 } elseif (isset($tytul) || isset($gatunek) || isset($rok) || isset($ocena)) {
     $sql = "INSERT INTO `filmy` (id, gatunki_id, tytul, rok, ocena) VALUES (NULL, '$gatunek', '$tytul', '$rok', '$ocena')";

     $result = mysqli_query($conn, $sql);

     echo 'Filmy ' . $result . ' został dodany do bazy!<br>';
 }
 mysqli_close($conn);


?>
