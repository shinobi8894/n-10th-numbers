<?php
// Simple PHP program to find n-th 
// number with sum of digits as 10. 
function findNth($n) 
{ 
    $count = 0; 
  
    for ($curr = 1; ; $curr++)
    { 
  
        // Find sum of digits in 
        // current no. 
        $sum = 0; 
        for ($x = $curr;
             $x > 0; $x = $x / 10) 
            $sum = $sum + $x % 10; 
  
        // If sum is 10, we increment 
        // count 
        if ($sum == 10) 
            $count++; 
  
        // If count becomes n, we return 
        // current number. 
        if ($count == $n) 
            return $curr; 
    } 
    return -1; 
} 
  
// Driver Code
echo findNth(5); 
?>