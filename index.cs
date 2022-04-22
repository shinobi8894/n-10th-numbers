// C# program to find n-th number
// with sum of digits as 10.
using System;
  
class GFG {
    public static int findNth(int n)
    {
        int count = 0;
        for (int curr = 1;; curr++) {
  
            // Find sum of digits in current no.
            int sum = 0;
            for (int x = curr; x > 0; x = x / 10)
                sum = sum + x % 10;
  
            // If sum is 10, we increment count
            if (sum == 10)
                count++;
  
            // If count becomes n, we
            // return current number.
            if (count == n)
                return curr;
        }
    }
  
    // Driver Code
    static public void Main()
    {
        Console.WriteLine(findNth(5));
    }
}