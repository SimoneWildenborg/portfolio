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
          width: 40%;
          margin-left:100px;
          align: center;
      }
      #register{
          
        width: 40%;
        margin-top: 30%;
      }
      .registerName{
        margin: 5px;
        }
      .registerMail{
        margin: 5px;
      }
      .registerSend{
        margin: 5px;
      }

      .form{
         
          align: right;
      }
      .vakje{
        border: 1px solid black;
        box-shadow: 1px 1px 6px black;
          margin-left: 10px;
          width: 50px;
          height: 50px;
          text-align: center;
          font-size: 3vw;
      }
      .vakje1{
        border: 1px solid black;
        box-shadow: 1px 1px 6px black;
          margin-left: 10px;
          margin-top: 200px;
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
            margin-left: 10px;
            margin-top: 60px;
            width: 100px;
            height: 50px;
            text-align: center;
      }
      .one{
          width: 40%;
        float: left;
      }
      .two{
        width: 30%;
        float: right;
        
      }
      .three{
        float: center;
      }
      
  </style>
  
<div class="one">
  <p>Numbermind</p>
      <section class="spelregels"> 
        Spelregels: 
        <ul>
        <li>Zoek de juiste code</li>
        <li>Vul een getal in van 1 tot en met 4 </li>
        <li>Elk getal komt maar 1 keer voor</li>
        <li>Vul in elk vakje een getal in</li>
        <li>Succes!</li>
        </ul>
      </section>
</div>
<div class="two">
<form id="register" action="" method="POST">
        <input class="registerName" type="text" name="nickname" placeholder="(Nick)name" autofocus><br>
        <input action="" class="registerMail" type="email" name="mail" placeholder="mail" autofocus>
        <input type="submit" class="registerSend" name="registerSend" ><br>
        
    </form>
</div>
<br>
<br>
<div class="three">
<form id="invoerRand" action="numbermind.php" method="POST"> <!-- method "POST" noemen om straks naar website te sturen-->
        <input class="vakje1" name="raad1" type="number" min="1" max="4" autofocus > <!-- ingevoerdeGetal = naam van getal dat verstuurd wordt-->
        <input class="vakje" name="raad2" type="number" min="1" max="4" autofocus>
        <input class="vakje" name="raad3" type="number" min="1" max="4" autofocus>
        <input class="vakje" name="raad4" type="number" min="1" max="4" autofocus><br><br>
        <button class="go" type="submit" name="random">GO</button>
</form>
</div>
<div class="four">
<form id="invoer" action="numbermind.php" method="POST"> <!-- method "POST" noemen om straks naar website te sturen-->
        <input class="vakje1" name="inGetalOne" type="number" min="1" max="4" autofocus Required> <!-- ingevoerdeGetal = naam van getal dat verstuurd wordt-->
        <input class="vakje" name="inGetalTwo" type="number" min="1" max="4" autofocus Required>
        <input class="vakje" name="inGetalThree" type="number" min="1" max="4" autofocus Required>
        <input class="vakje" name="inGetalFour" type="number" min="1" max="4" autofocus Required>
        <button class="gaan" type="submit" name="submit">check</button> <!-- button om ingevoerdegetal te versturen-->
</form>
</div>
<?php


function randomGetal(){
    $_SESSION['teRadenGetal1'] = (rand (1,4));
    $_SESSION['teRadenGetal2']  = (rand (1,4));
    $_SESSION['teRadenGetal3']  = (rand (1,4));
    $_SESSION['teRadenGetal4']  = (rand (1,4));

    echo $_SESSION['teRadenGetal1'] . " " . $_SESSION['teRadenGetal2'] . " " . $_SESSION['teRadenGetal3'] . " " . $_SESSION['teRadenGetal4'];
   $_SESSION['score'] = 0;
}
      

$ingevoerd = array($ingevoerdeGetal1=>"ingetalOne", $ingevoerdeGetal2=> "ingetalTwo",
                    $ingevoerdeGetal3=> "ingetalThree", $ingevoerdeGetal4=> "ingetalFour");


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //voeg score toe
    if (!isset($_SESSION["score"]))
       $_SESSION["score"] = 0;
   
    if (isset($_POST['random'])){
        randomGetal();
    }

    if(isset($_POST['registerSend'])){
    $naam = $_POST['nickname'];
    $mail= $_POST['mail'];
    }
        echo $naam;
        echo $mail;


    
    if(isset($_POST['submit'])) {


        $ingevoerdeGetal1 = ($_POST['inGetalOne']);
        $ingevoerdeGetal2 = ($_POST['inGetalTwo']);
        $ingevoerdeGetal3 = ($_POST['inGetalThree']);
        $ingevoerdeGetal4 = ($_POST['inGetalFour']);
        
        if ( (!empty($ingevoerdeGetal1)) && (!empty($ingevoerdeGetal2)) && (!empty($ingevoerdeGetal3)) && (!empty($ingevoerdeGetal4)) ){
            if (($ingevoerdeGetal1 == $_SESSION['teRadenGetal1']) && ($ingevoerdeGetal2 == $_SESSION['teRadenGetal2'])&& 
                ($ingevoerdeGetal3 == $_SESSION['teRadenGetal3'])&& ($ingevoerdeGetal4 == $_SESSION['teRadenGetal4']))
                 {
                echo " Yeah, you guessed it!";
                $_SESSION["score"] += 5;//allevakjes goed geraden, 5 punten erbij
        
                } else {
                    echo "Try again :-)";
                }
        } else {
            echo "niet alles is vol";
        }
        echo $ingevoerdeGetal1;
        echo $ingevoerdeGetal2;
        echo $ingevoerdeGetal3;
        echo $ingevoerdeGetal4;
   

    
    
    echo "<br>Score: " . $_SESSION["score"];//geef de score aan
}


}

?>
</body>
</html>