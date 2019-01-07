<?php
session_start(); //beginnen

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>numbermind the game</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="#.css" />
    <script src="#.js"></script>
</head>
<body>
  <style>
      body{
        margin: 0;
        padding: 0;
        width: 100%;
        background-color:#ddd;
        
      }
      p{  
          text-shadow: 1px 1px 6px black;
          font-size: 3vw;
          font-weight:800;
          letter-spacing: 100px;
          text-align:center;
          color:red;
      }

      .spelregels{
          margin-left:100px;
          align: center;
      }
      .form{
         
          align: right;
      }
      .vakje{
        border: 1px solid black;
        box-shadow: 1px 1px 6px black;
          margin-left: 100px;
          width: 50px;
          height: 50px;
          text-align: center;
          font-size: 3vw;
      }
      .vakje1{
        border: 1px solid black;
        box-shadow: 1px 1px 6px black;
          margin-left: 400px;
          width: 50px;
          height: 50px;
          
          text-align: center;
          font-size: 3vw;
      }
      .gaan{
            background-color: red;
            font-size: 2vw;
            color: white;
            text-shadow: 1px 1px 6px black;
            border: 1px solid white;
            border-radius: 5%;
            margin-left: 600px;
            margin-top: 60px;
            width: 100px;
            height: 50px;
            text-align: center;

      }
  </style>
  
  <p>Numbermind</p>
      <section class="spelregels"> 
      Spelregels: 
      <ul>
      <li>Zoek de juiste code</li>
      <li>Vul een getal in van 1 tot en met 4 </li>
      <li>Elk getal komt maar 1 keer voor</li>
      <li>Vul in elk vakje een getal in</li>
      <li>Succes!</li>
      </ul></section>

<form id="invoer" action="" method="post"> <!-- method "POST" noemen om straks naar website te sturen-->
        <input class="vakje1" name="inGetalOne" type="number" min="1" max="4" autofocus > <!-- ingevoerdeGetal = naam van getal dat verstuurd wordt-->
        <input class="vakje" name="inGetalTwo" type="number" min="1" max="4" autofocus>
        <input class="vakje" name="inGetalThree" type="number" min="1" max="4" autofocus>
        <input class="vakje" name="inGetalFour" type="number" min="1" max="4" autofocus><br><br>
        <button class="gaan" type="submit" name="submit">check</button> <!-- button om ingevoerdegetal te versturen-->
</form>
<ul id="list">
<li></li>
</ul>
<?php
$teRaden = array($teRadenGetal1 = "4", $teRadenGetal2 = "2", $teRadenGetal3 = "1", $teRadenGetal4 = "3");
      

$ingevoerd = array($ingevoerdeGetal1=>"ingetalOne", $ingevoerdeGetal2=> "ingetalTwo",
                    $ingevoerdeGetal3=> "ingetalThree", $ingevoerdeGetal4=> "ingetalFour");


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //voeg score toe
    if (!isset($_SESSION["score"]))
       $_SESSION["score"] = 0;
    //haal ingetypte getallen op
    if(isset($_POST['submit'])) {
        $ingevoerdeGetal1 = $_POST['inGetalOne'];
        $ingevoerdeGetal2 = $_POST['inGetalTwo'];
        $ingevoerdeGetal3 = $_POST['inGetalThree'];
        $ingevoerdeGetal4 = $_POST['inGetalFour'];
        
        
        echo $ingevoerdeGetal1;
        echo $ingevoerdeGetal2;
        echo $ingevoerdeGetal3;
        echo $ingevoerdeGetal4;
        
    if (($ingevoerdeGetal1 == $teRadenGetal1)&& ($ingevoerdeGetal2 == $teRadenGetal2)&& 
    ($ingevoerdeGetal3 == $teRadenGetal3)&& ($ingevoerdeGetal4 == $teRadenGetal4))
    {
        echo " Yeah, you guessed it!";
        $_SESSION["score"] += 5;//hou het aantal goed geraden cijfers bij
    } else {
        //echo " Try again";// mededeling bij fout getal
    }

    
    if ($ingevoerdeGetal1 == $teRadenGetal1){
        echo '<img src="vinkje.jpg" alt="icon" width="20px" height="20px" />';
        echo '<style>{color: green} </style>';
        $_SESSION["score"] += 1;
    }    
    if ($ingevoerdeGetal2 == $teRadenGetal2){
        echo '<img src="vinkje.jpg" alt="icon" width="20px" height="20px" />';
        
        $_SESSION["score"] += 1;
    } 

    if ($ingevoerdeGetal3 == $teRadenGetal3){
        echo '<img src="vinkje.jpg" alt="icon" width="20px" height="20px" />';
        $_SESSION["score"] += 1;
    } 

    if ($ingevoerdeGetal4 == $teRadenGetal4){
        echo '<img src="vinkje.jpg" alt="icon" width="20px" height="20px" />';
        $_SESSION["score"] += 1;
    } 

    if (($ingevoerdeGetal1 == $teRadenGetal2)||($ingevoerdeGetal1 == $teRadenGetal3)||
     ($ingevoerdeGetal1 == $teRadenGetal4)) {
        echo '<img src="blauwvinkje.jpg" alt="icon" width="20px" height="20px" />';
    }

    if (($ingevoerdeGetal2 == $teRadenGetal1)||($ingevoerdeGetal2 == $teRadenGetal3)||
        ($ingevoerdeGetal2 == $teRadenGetal4)){
        echo '<img src="blauwvinkje.jpg" alt="icon" width="20px" height="20px" />';
    }

    if (($ingevoerdeGetal3 == $teRadenGetal1)||($ingevoerdeGetal3 == $teRadenGetal2)||
    ($ingevoerdeGetal3 == $teRadenGetal4)){
    echo '<img src="blauwvinkje.jpg" alt="icon" width="20px" height="20px" />';
    }

    if (($ingevoerdeGetal4 == $teRadenGetal1)||($ingevoerdeGetal4 == $teRadenGetal2)||
    ($ingevoerdeGetal4 == $teRadenGetal3)){
    echo '<img src="blauwvinkje.jpg" alt="icon" width="20px" height="20px" />';
    }
    echo "<br>Score: " . $_SESSION["score"];//geef de score aan
}


}


?>

</body>
</html>