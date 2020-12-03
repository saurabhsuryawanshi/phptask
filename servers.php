<!-- Problem Statement 1: 
There are a number of servers running our application. 
Given N servers, in 5 minutes interval, every minute, the load is checked and if load is less than 50%, the servers are either reduced to N/2 else they are increased to 2N + 1 
 -->
<?php
  echo"Enter the number of servers\t";
  $load=array();
  $a = (int)readline('Enter an integer: ');
  echo "Enter the load\t";
  for ($i = 0; $i < 5; $i++) {
       $b = (int)readline('Enter an integer: ');
       array_push($load,$b);
  }
  for ($i = 0; $i < 5; $i++)
  {
        if($load[$i]<50)
        {
            $a=floor($a/2);
        }
        else {
            $a=2*$a+1;
        }
  }
  echo "server in use after 5 min is \t" .$a;
?>