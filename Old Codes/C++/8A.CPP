// LABSET 8A

/*
WRITE A PROGRAM TO IMPLEMENT 'n'- GREENS PROBLEM
*/

#include <iostream.h>
#include <math.h>
#include <stdio.h>
#include <conio.h>
class queen
{
private:
	int n;
	int *x;
	int **a;

public:
	queen();
	void check();
	int place(int);
	void disp();
};
queen::queen()
{
	cout << endl
		 << "ENTER THE VALUE FOR N:";
	cin >> n;
	cout << n << endl;
	x = new int[n + 1];
	for (int i = 1; i <= n; i++)
		x[i] = 0;
	a = new int *[n + 1];
	for (i = 1; i <= n; i++)
		a[i] = new int[n + 1];
	for (i = 1; i <= n; i++)
		for (int j = 1; j <= n; j++)
			a[i][j] = 0;
}
void queen::check()
{
	int k = 1;
	while (k > 0)
	{
		x[k] = x[k] + 1;
		while (x[k] <= n && place(k) == 0)
			x[k] = x[k] + 1;
		if (x[k] <= n)
		{
			if (k == n)
				break;
			k = k + 1;
			x[k] = 0;
		}
		else
			k = k - 1;
	}
	for (int i = 1; i <= n; i++)
		a[i][x[i]] = 99;
}
void queen::disp()
{
	for (int i = 1; i <= n; i++)
	{
		for (int j = 1; j <= n; j++)
			cout << a[i][j] << "\t";
		cout << endl;
	}
}
int queen::place(int k)
{
	for (int i = 1; i < k; i++)
		if (x[i] == x[k] || abs(x[i] - x[k]) == abs(i - k))
			return 0;
	return 1;
}
main()
{
	queen q;
	clrscr();
	q.check();
	q.disp();
	return 0;
}

//     OUTPUT
/*
ENTER THE VALUE FOR N:3
0	0	0
0	0	0
0	0	0

ENTER THE VALUE FOR N:4
0	99	0	0
0	0	0	99
99	0	0	0
0	0	99	0

ENTER THE VALUE FOR N:5
99	0	0	0	0
0	0	99	0	0
0	0	0	0	99
0	99	0	0	0
0	0	0	99	0

/*========================================================================*/