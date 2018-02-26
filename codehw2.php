<!DOCTYPE html>
<html>
<head>
<title> code homework 2: function</title>
</head>
<body>
       
<?php
    
/*   
echo "<h1>ISBN Validator</h1>"; 

Unsuccessful attemp
 
$isbn = array("a","b","c","d","e","f","g","h","i","j");
$validated_isbn = array();
    
    
    
for($times = 0; $times <= 10; $times++){
    
    
    foreach ($isbn as $number) {
        $number = $number* $times;
        
    

    
}
    
*/
    
   
echo "<h1>Coin Toss!</h1>";

function flipcoin () {

 $flip = mt_rand(0,1);

if ($flip == 0) {
    
echo '<img src="http://journalforemergingleaders.com/wp-content/uploads/2016/01/Penny-obverse.png" alt="head" height="100" width="100">';

} else {
echo '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/2005_Penny_Rev_Unc_D.png/170px-2005_Penny_Rev_Unc_D.png" alt="tail" height="95" width="95">';    
}
}

echo "<p> Flipping a coin 1 time </p>";
    
flipcoin ();

echo "<p> Flipping a coin 3 time </p>";
    
flipcoin ();flipcoin ();flipcoin ();
    
echo "<p> Flipping a coin 5 time </p>";
    
flipcoin ();flipcoin ();flipcoin (); flipcoin ();flipcoin ();
    
echo "<p> Flipping a coin 7 time </p>";
 
flipcoin ();flipcoin ();flipcoin (); flipcoin ();flipcoin ();flipcoin ();flipcoin ();

echo "<p> Flipping a coin 9 time </p>";
    
flipcoin ();flipcoin ();flipcoin ();flipcoin ();flipcoin ();flipcoin ();flipcoin ();flipcoin ();flipcoin ();

    
echo "<p> Now we will keep tossing the coin until we get 2 heads!</p>";
    
    $flipcount = 0;
    $head = 0;
    
    while ($head < 2) {
        
        $flip = mt_rand(0,1);
        $flipcount++;
        
        if ($flip == 0) {
            $head ++;
            echo '<img src="http://journalforemergingleaders.com/wp-content/uploads/2016/01/Penny-obverse.png" alt="head" height="100" width="100">';
        
        }
        
        else{
            $head == 0;
           echo '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/2005_Penny_Rev_Unc_D.png/170px-2005_Penny_Rev_Unc_D.png" alt="tail" height="95" width="95">';    
            
        }
        
        
    }
    
    echo "<p>It took $flipcount times to get 2 heads.</p>"
    
?>
    
</body>
</html>