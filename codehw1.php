<!DOCTYPE html>
<html>
<body>
    
 <h1>
   Challenge: Correct Change 
</h1>
    
<?php
    
    /* I know there's gotta be a better way to do this, but I'm not sure how. The following code is my try to complete the first challange. */    
    
    $change= 100;
    
    // this section is for change that would contain at least one dollar.
    
    //this part was confusing because first I thought if ($change > 100 or $change = 100) would work
    
    if ($change >= 100) {
        
        $x = $change % 100;
        $y= $change - $x;
        $z = $y/100;
        
        $a= $x % 25;
        $b= $x - $a;
        $c= $b / 25;
        
        $d = $a % 10;
        $e = $a - $d;
        $f = $e / 10;
        
        $g = $d % 5;
        $h = $d - $g;
        $i = $h / 5;
        
        
    }
    
    // this section is for change that would contain no dollar but at least one quater.
    
    if ($change < 100 && $change >= 25 ) {
        
        $z = 0;
        
        $a= $change % 25;
        $b= $change - $a;
        $c= $b / 25;
        
        $d = $a % 10;
        $e = $a - $d;
        $f = $e / 10;
        
        $g = $d % 5;
        $h = $d - $g;
        $i = $h / 5;
        
        
    }
    
    //this section is for change that would contain no dollar and no quater, but at least one dime.
    
    if ($change >= 10 && $change < 25) {
        
        $z = 0;
        $c = 0;
        
        $d = $change % 10;
        $e = $change - $d;
        $f = $e / 10;
        
        $g = $d % 5;
        $h = $d - $g;
        $i = $h / 5;
    }
    
    //this section is for change that would contain nickle(s) and cent(s) only.
    
     if ($change >= 5 && $change < 10) {
        
        $z = 0;
        $c = 0;
        $f = 0;
        
        $g = $change % 5;
        $h = $change - $g;
        $i = $h / 5;
    }
    
    // this section is for change that would contain cent(s) only.
    
    if ($change < 5) {
        
        $z = 0;
        $c = 0;
        $f = 0;
        $i = 0;
        
        $g = $change;
    }
   
        
        
    
        echo " Your due back is $change cent(s) in total. <br> Your change is: $z dollar(s), $c quater(s), $f dime(s) $i nickle(s) and $g cent(s).";
            
            


    
    

   /* $change = 250;
    if ($change >100){
        
        $cent = $change % 100;
        $dollar = $cent / $dollar;
        
        $dollar = ($change - $cent) / 100;
       
       }
    
    elseif ($change > 25 && $change < 100){
        
        $cent = $change % 25;
        
        $q=($change - $cent)/100;
        
        $q = ($cent / 25) - ($cent_1 / 100);
        
    
    }
    
    else { echo "this is great";}

     
        
        echo "You are due back $dollar dollar(s), $q quater(s).";
        
        This try wasn't so successful, nevermind
        
        my question is what is the correct flow that would keep go through the next condition if the previous condition is true, so the result would keep processing till the end? My understanding for if... elseif... else... is that the task would only pick one of the three, but not all three.
    
    */
    
    
?>
    
<h1>
   Challenge: 99 Bottles of Beer 
</h1>


<?php
    $beer_count = 7;    
    
    do {
        echo "$beer_count bottles of beer on the wall, $beer_count bottles of beer. Take one down, pass it around,";
            
        $beer_now = -- $beer_count;
        
        echo "$beer_now bottles of beer on the wall. <br>";
        
        $beer_count--;
    }
    
    while ($beer_count > 0);
    

        
?>
    
    


</body>
</html>