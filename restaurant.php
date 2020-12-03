<!-- Everyday, the restaurant has a limited number of breads, vadas and samosas. The restaurant needs to optimise orders in a way that they can generate maximum profit. 
Vadapav needs two bread and a vada 
Samosapav needs two bread and a samosa 
 -->
<?php
    echo "enter the number of samosa\n";
    $samosa = (int)readline('enter the number of samosa');
    echo "enter the price of samosapav\n";
    $samosapav_price = (int)readline('enter the price of samosapav');
    echo "enter the number of vada\n";
    $vada = (int)readline('enter the number of vada');
    echo "enter the price of vada\n";
    $vadapav_price = (int)readline("enter the price ");
    echo "enter the number of breads\n";
    $bread = (int)readline("enter the number of breads");
    $sum=0;
    if($samosapav_price > $vadapav_price)
    {
        while($samosa!=0 && $bread>1)
        {
            $sum=$sum+$samosapav_price;
            $bread=$bread-2;
            $samosa=$samosa-1;
        }
        while($vada!=0 && $bread>1)
        {
            $sum=$sum+$vadapav_price;
            $bread=$bread-2;
            $vada=$vada-1;
        }
    }
    else
    {
        while($vada!=0 && $bread>1)
        {
            $sum=$sum+$vadapav_price;
            $bread=$bread-2;
            $vada=$vada-1;
        }
        while($samosa!=0 && $bread>1)
        {
            $sum=$sum+$samosapav_price;
            $bread=$bread-2;
            $samosa=$samosa-1;
        }    
    }
    echo "The max profit is:\t".$sum;
?>