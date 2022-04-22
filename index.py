# Python3 program to find n-th number
# with sum of digits as 10.
import itertools
  
# function to find required number
def findNth(n):
  
    count = 0
  
    for curr in itertools.count():
        # Find sum of digits in current no.
        sum = 0
        x = curr
        while(x):
            sum = sum + x % 10
            x = x // 10
  
        # If sum is 10, we increment count
        if (sum == 10):
            count = count + 1
  
        # If count becomes n, we return current
        # number.
        if (count == n):
            return curr
  
    return -1
  
# Driver program
if __name__=='__main__':
    print(findNth(5))