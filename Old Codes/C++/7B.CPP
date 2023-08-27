// LABSET 7B

/*
WRITE A PROGRAM TO PRINT ALL NODES THAT ARE REACHABLE FROM A GIVEN STARTING NODE IN A DIGRAPH USING DEPTH FIRST SEARCH
*/

#include <iostream.h>
class dfs
{
private:
	int **a;
	int n;

public:
	dfs() { n = 0; }
	void getdata();
	void check(int);
};
void dfs::getdata()
{
	int e, v1, v2, ver, r = 1;
	cout << endl
		 << "ENTER THE NO. OF VERTICES:";
	cin >> n;
	cout << n;
	a = new int *[n + 1];
	for (int i = 1; i <= n; i++)
		a[i] = new int[n + 1];
	for (i = 1; i <= n; i++)
		for (int j = 1; j <= n; j++)
			a[i][j] = 0;
	cout << endl
		 << "ENTER THE NO. OF EDGES:";
	cin >> e;
	cout << e << endl;
	cout << "ENTER THE EDGES:" << endl;
	for (i = 1; i <= e; i++)
	{
		cin >> v1 >> v2;
		cout << v1 << "----" << v2 << endl;
		a[v1][v2] = 1;
	}
	while (r)
	{
		cout << endl
			 << "ENTER THE STARTING VERTEX:";
		cin >> ver;
		cout << ver << endl;
		check(ver);
		cout << endl
			 << "TO CONTINUE PRESS 1" << endl;
		cin >> r;
		cout << r;
	}
}
void dfs::check(int v)
{
	cout << v << " ";
	for (int i = 1; i <= n; i++)
		if (a[v][i] == 1)
			check(i);
}
main()
{
	dfs d;
	d.getdata();
	return 0;
}

// OUTPUT
/*

ENTER THE NO. OF VERTICES:5
ENTER THE NO. OF EDGES:6
ENTER THE EDGES:
1----2
1----4
1----3
2----3
3----5
4----5

ENTER THE STARTING VERTEX:1
1 2 3 5 3 5 4 5
TO CONTINUE PRESS 1
1
ENTER THE STARTING VERTEX:2
2 3 5
TO CONTINUE PRESS 1
1
ENTER THE STARTING VERTEX:3
3 5
TO CONTINUE PRESS 1
1
ENTER THE STARTING VERTEX:4
4 5
TO CONTINUE PRESS 1
1
ENTER THE STARTING VERTEX:5
5
TO CONTINUE PRESS 1
0
/*-------------------------------------------------------------------------*/