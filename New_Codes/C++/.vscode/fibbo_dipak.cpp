// Fibonacci Series using Recursion
#include <bits/stdc++.h>
using namespace std;

long long fib(long long n)
{
	if (n <= 1)
		return n;
	return fib(n - 1) + fib(n - 2);
}

int main()
{
	long long n ;

	cout << fib(10);
	getchar();
	return 0;
}