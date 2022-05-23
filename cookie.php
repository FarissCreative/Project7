<html>
  <head>
<style>
body {
  background-color: #31403F;
  color: white;
  max-width: 500px;
  margin: auto;
  margin-top: 250px;
}

</style>
</head>
<body>
  <h1>Hotel Villa Gulla </h1>
  <hr>

  <?php
$returning_visitor = false;
//makes a cookie user ( with a limit in a week calculated in seconds)
if (!isset($_COOKIE['bruger'])) {
	setcookie('bruger', 'examtest', time() + 7 * 86400);
    //chance the key and value to get different greating respondses. 
} else {
	$returning_visitor = true;
}
?>


<h2> 
 <?php
 //display the greeting message based on the value of the $returning_visitor variable.
//when you request a new the page for the first time, you’ll see the following messages.
echo $returning_visitor ? 'Byder dig velkommen tilbage!, klar til at book endnu et ophold?'  : 'Byder dig velkommen til Hotel Villa Gulle, klar til ferie?';
?>
</h2>

<p><strong>Note:</strong> Du skal muligvis genindlaese siden for at display velkomst teksten basseret paa om man er foerstegang besøgende paa siden eller har besoegt foe.</p>

<hr>
<p><strong>Watch demo:</strong> http://fariss.dk/cookies.php</p>


</body>
</html>