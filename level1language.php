<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lev1language.php">
    <title>Level_1</title>
</head>

<body>
<h2 align="center">Lets Play a game </h2><br><br>
<h2> <span "style=color:red">NOTE:</span>Enter the proper word for each word given, 2 points for every right guess and -1 point for every wrong guess, out of 5 words  </h2>
<br><br>
<?PHP
 $arr = array('C++', 'Javascript', 'OOPS', 'Python', 'Arduino');
 $score=0;
 $shuf=array();
 $usr=array();
 for ($i=0; $i < 5; $i++) {
$shuf[$i]=str_shuffle($arr[$i]);
 }

 $k=1;
 for ($j=0; $j <5; $j++) { 
  echo "Word_$k: $shuf[$j] ";
  echo "<br><br>";
  $k++;
   }

   if (isset($_POST['submit'])) {
    $usr[0] = $_POST['user1'];
    $usr[1] = $_POST['user2']; 
    $usr[2] = $_POST['user3'];
    $usr[3] = $_POST['user4'];
    $usr[4] = $_POST['user5'];
  

   for ($n=0; $n <5; $n++) {
    if($usr[$n]==$arr[$n]){
      $score=$score+2;
      }
      else{
      $score=$score-1;
      } }}  
?>

<form action="" method="post">
<h2>Enter Correct words for each</h2><br>
  <input name="user1" type="text" placeholder="Enter Word_1"/><br><br>
  <input name="user2" type="text" placeholder="Enter Word_2" /><br><br>
  <input name="user3" type="text" placeholder="Enter Word_3"/><br><br>
  <input name="user4" type="text" placeholder="Enter Word_4"/><br><br>
  <input name="user5" type="text" placeholder="Enter Word_5"/><br><br>
  <input name="submit" id="Submit" type="submit" />
  <a href="level1animal.php">
                      <button>RESTART</button>
      </a>
</form>
<?PHP
echo"<h2> Score: $score  /10 </h2>";
?>
</body>
</html>