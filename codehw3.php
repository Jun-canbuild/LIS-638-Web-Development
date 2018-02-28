<!DOCTYPE html>
<html>
<head>
<title>codehw3, arrray and function</title>
<link href="https://fonts.googleapis.com/css?family=Noto+Serif|Roboto:400,900" rel="stylesheet">
<style>
        
h1 {
    font-family: 'Noto Serif', serif;
    text-align: center;
    
}
    
table {
    font-family: 'Roboto', sans-serif;
    border-collapse: collapse;
    width: 100%;
    margin:1px;
}

td, th {
    border: 1px solid orange;
    text-align: center;
    padding: 15px;
}
        
th {
            
     font-weight: 400;       
}
        
td {
            
    background-color: bisque; 
    font-weight: 900;
        }
        
tr:nth-child(even) {
    background-color: cornsilk;
}
    
.total {
    border-radius: 25px;
    font-size: 20pt;
    font-family: 'Roboto', sans-serif;
    background-color: antiquewhite;
    text-align: center;
    padding: 50px;
    margin: 40px 280px;
    border: 1px solid orange;
        
}    
    
    
    
p {
    font-size: 18pt;
    font-family: 'Roboto', sans-serif;   
    text-align: center;
}
    
    
.booklist {
   border-bottom: dashed orange;
          
}    
    
</style>
</head>
    
<body>
    
    
<div class="booklist">
    <h1>Book List</h1>
<?php
    
$book = array(
	array("PHP and MySQL Web Development", "Luke", "Welling", 144, "Paperback", "31.63" ), 
	array("Web Design with HTML, CSS, JavaScript and jQuery", "Jon", "Duckett", 135, "Paperback", "41.23"),
	array("PHP Cookbook: Solutions & Examples for PHP Programmers", "David", "Sklar", 14, "Paperback", "40.88"),
	array("JavaScript and JQuery: Interactive Front-End Web Development","Jon", "Duckett", 251, "Paperback", "22.09"),
    array("Modern PHP: New Features and Good Practices", "Josh", "Lockhart", 7, "Paperback", "28.49"),
    array ("Programming PHP", "Kevin", "Tatroe", 26, "Paperback", "28.96")
);
    
    echo "<table>";
    echo "<tr>
            <td>Title</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Number of Pages</td>
            <td>Type</td>
            <td>Price</td>
        </tr>";
    
    /*
    
    echo "<br>";
    
    echo "<tr>";
    echo "<th>".$book[0][0]."</th>";
    echo "<th>".$book[0][1]."</th>";
    echo "<th>".$book[0][2]."</th>";
    echo "<th>".$book[0][3]."</th>";
    echo "<th>".$book[0][4]."</th>";
    echo "<th>".$book[0][5]."</th>";
    echo "</tr>";
    
    echo "<br>";
    
    echo "<tr>";
    echo "<th>".$book[1][0]."</th>";
    echo "<th>".$book[1][1]."</th>";
    echo "<th>".$book[1][2]."</th>";
    echo "<th>".$book[1][3]."</th>";
    echo "<th>".$book[1][4]."</th>";
    echo "<th>".$book[1][5]."</th>";
    echo "</tr>";


 */ 
  
    $totalprice=0;
    
    
   for ($i = 0; $i < count($book); $i++) {
        echo "<tr>";
	   for ($c = 0; $c < count($book[$i]); $c++) {
		print "<th>" . $book[$i][$c] . "</th>";   
    }
        echo "</tr>";
       $totalprice += $book[$i][5];
}
echo "</table>";

echo '<div class="total">'. "Your total price is: <b>$$totalprice</b> ". '</div>';
     
    
?>
    
</div>
   
    
    
<div class="cointoss">
    
    
<h1>Coin Toss!</h1>
    
<?php
    
    
function flipcoin () {
 $flip = mt_rand(0,1);
if ($flip == 0) {
    
echo '<img src="http://journalforemergingleaders.com/wp-content/uploads/2016/01/Penny-obverse.png" alt="head" height="100" width="100">';
} else {
echo '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/2005_Penny_Rev_Unc_D.png/170px-2005_Penny_Rev_Unc_D.png" alt="tail" height="95" width="95">';    
}
}

    
    
    
        
    
    
    
    
    function wantedhead() {
        
    $flipcount = 0;
    $head = 0;    
    $wantedhead = 5;
        
    echo "<p> Now we will keep tossing the coin until we get $wantedhead heads!</p>";
        
    while ($head < $wantedhead) {
        
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
        
        echo "<p>It took $flipcount times to get $wantedhead heads.</p>";
        
}
    
   wantedhead(); 
    
?>
    
</div>



</body>
</html>