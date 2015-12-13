<?php
session_start(); //First thing to do is the start the session...
/**
This is a simple TicTacToe game single page implementation with session variables.
Feel free to copy and modify the code
**/
 
$win=-1;
 
if(isset($_POST['res'])) //This is for resetting the game. 
{
session_destroy();
print<<<HERE
Session destroyed. Start <a href="">a new game</a>;
HERE;
 
 
 
}
 
 
print <<<HERE
<form action="" method="post">
<table width="100"><tr>\n
HERE;
 
 
$who = $_SESSION['who']; //get who is playing right now
if(is_null($who)) //means that session is not initialized, so initialize the session.
{
 
$who=0; // 0 means player X, 1 means  player O
$_SESSION['oyun'] = "222222222"; // string to keep our game data. 2 empty cell, 1 -> player O, 0->player X
$_SESSION['win'] = -1;
}
 
 
 
 
$endd = $_SESSION['win'];
 
if($endd==-1) // if there is no winner yet
{
 
 
$oyun= $_SESSION['oyun'];
 
$data = $_POST['val']; //get submitted button 
 
if(!is_null($data))
{
 
 
 
$hamle = $data[0]; // get the actual button clicked. 0 to 8 correspond to a respective cell
 
$oyun[$hamle]=$who; // set our game's data with player mark
 
 
 
$who=($who+1)%2; // switch the player turn
}
 
if($who)
{
print "O is playing<br>";
 
}
else
print "X is playing<br>";
 
 
for($i=0; $i<9; $i++) // print the game field in a table in a loop
{
$val = $i;
 
if(($i)%3==0)
print "</tr><tr>";
 
if($oyun[$i]==2)
{
// a single button if cell is 2, namely blank
print <<<HERE
<td><center><input type="submit" name="val[]" value="$i"></center></td> 
 
HERE;
 
 
}
if($oyun[$i]==0) // Player X's mark
{
print "<td><center>X</center></td>";
}
if($oyun[$i]==1)  // Player O's mark
{
print "<td><center>O</center></td>";
}
 
}
print "</table></form></br>";
 
 
//Check the game logic here and decide who won if there is such a case...
for($j=0;$j<3;$j++) // check rows
{
if(substr($oyun,3*$j,3)=="000") 
{
print "X wins<br>";
$win=0;
}
if(substr($oyun,3*$j,3)=="111")
{
print "0 wins<br>";
$win=1;
}
 
}
for($j=0;$j<3;$j++)//check columns
{
if($oyun[$j]==$oyun[$j+3] && $oyun[$j+3]==$oyun[$j+6]  && $oyun[$j+6]=='0')
{
print "X wins<br>";
$win=0;
}
if($oyun[$j]==$oyun[$j+3] && $oyun[$j+3]==$oyun[$j+6]  && $oyun[$j+6]=='1')
{
print "0 wins<br>";
$win=1;
}
 
}
 
if($oyun[0]==$oyun[4] && $oyun[4]==$oyun[8]  && $oyun[8]=='0') // check first diagonal
{
print "X wins<br>";
$win=0;
}
if($oyun[0]==$oyun[4] && $oyun[4]==$oyun[8]  && $oyun[8]=='1')
{
print "O wins<br>";
$win=1;
}
 
 
if($oyun[2]==$oyun[4] && $oyun[4]==$oyun[6]  && $oyun[6]=='0') //check second diagonal
{
print "X wins<br>";
$win=0;
}
if($oyun[2]==$oyun[4] && $oyun[4]==$oyun[6]  && $oyun[6]=='1')
{
print "O wins<br>";
$win=1;
}
 
 
//update the session variables so we can access it next time with current game info...
$_SESSION['oyun'] = $oyun;
$_SESSION['who']=$who;
$_SESSION['win']=$win;
 
 
 
 
 
}
else
{
print "Game already ended. Reset the game<br>";
}
 
 
 
 
//Button to reset the game..
 
print <<<HERE
<form action="" method="post">
<input type="submit" name="res" value="reset">
</form>
HERE;
 
 
 
 
//Thanks... I hope you enjoyed it. Feel free to comment on this post.
 
//by elasolova
 
 
?>