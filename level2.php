<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="lev2.php">
    <title>Level_1</title>
</head>

<body>
<h2 align="center">Lets Play a game </h2><br><br>
<h2> <span "style=color:red">NOTE:</span>Enter the proper word for each word given, 2 points for every right guess and -1 point for every wrong guess, out of 5 words  </h2>
<br><br>
<?PHP
 $idiom = array('Good things come to those who wait', 'Get a taste of your own medicine', 'Go on a wild goose chase', 'Hit the sack', 'No pain,no gain');
 $usr=array();
 $score=0;
 
 for ($i=0; $i < 5; $i++) {

        
        $arr = explode(" ", $idiom[$i]);
  
        for ($j = 0; $j < count($arr); $j++)  {
          $arr[$j] = str_shuffle($arr[$j]);
        }
  
        $str = implode(" ", $arr);
        
        echo"Idiom_1:  $str . ";
        echo "<br><br>";
 }

 if (isset($_POST['submit'])) {
    $usr[0] = $_POST['user1'];
    $usr[1] = $_POST['user2']; 
    $usr[2] = $_POST['user3'];
    $usr[3] = $_POST['user4'];
    $usr[4] = $_POST['user5'];
  

   for ($n=0; $n <5; $n++) {
    if($usr[$n]==$idiom[$n]){
      $score=$score+5;
      }
      else{
      $score=$score-2;
      } }} 
 
?>

<form action="" method="post">
<h2>Enter Correct words for each</h2><br>
  <input name="user1" type="text" placeholder="Enter idiom 1"/><br><br>
  <input name="user2" type="text" placeholder="Enter idiom 2" /><br><br>
  <input name="user3" type="text" placeholder="Enter idiom 3"/><br><br>
  <input name="user4" type="text" placeholder="Enter idiom 4"/><br><br>
  <input name="user5" type="text" placeholder="Enter idiom 5"/><br><br>
  <input name="submit" id="Submit" type="submit" />
  <a href="level1animal.php">
                      <button>RESTART</button>
      </a>
</form>
<?PHP
echo"<h2> Score: $score  /25 </h2>";
?>
</body>
</html>