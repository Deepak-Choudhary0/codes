// LABSET 8B

/*
WRITE A PROGRAM TO IMPLEMENT ALL PAIRS SHORTEST PATH PROBLEM,USING DYNAMIC PROGRAMMING
*/

#include <iostream.h>
class all
{
private:
	int **a, **c, **k;
	int n;

public:
	all() { n = 0; }
	void getdata();
	void compute();
	void outpath(int, int);
	void cal(int, int);
	int calln();
};
void all::getdata()
{
	int e, v1, v2, wt;
	cout << endl
		 << "ENTER THE NO. OF VERTICES:";
	cin >> n;
	cout << n;
	a = new int *[n + 1];
	for (int i = 1; i <= n; i++)
		a[i] = new int[n + 1];
	c = new int *[n + 1];
	for (i = 1; i <= n; i++)
		c[i] = new int[n + 1];
	k = new int *[n + 1];
	for (i = 1; i <= n; i++)
		k[i] = new int[n + 1];
	for (i = 1; i <= n; i++)
		for (int j = 1; j <= n; j++)
			a[i][j] = c[i][j] = k[i][j] = 0;
	cout << endl
		 << "ENTER THE NO. OF EDGES:";
	cin >> e;
	cout << e << endl;
	cout << "ENTER THE EDGE AND ITS WEIGHT" << endl;
	cout << "edge"
		 << "      "
		 << "wt" << endl;
	for (i = 1; i <= e; i++)
	{
		cin >> v1 >> v2 >> wt;
		cout << v1 << "---" << v2 << "    " << wt << endl;
		a[v1][v2] = c[v1][v2] = wt;
	}
	for (i = 1; i <= n; i++)
		c[i][i] = 0;
}
void all::compute()
{
	int t1, t2, t3;
	for (int m = 1; m <= n; m++)
	{
		for (int i = 1; i <= n; i++)
		{
			for (int j = 1; j <= n; j++)
			{
				t1 = c[i][m];
				t2 = c[m][j];
				t3 = c[i][j];
				if (t1 != 0 && t2 != 0 && (t3 == 0 || t1 + t2 < t3))
				{
					c[i][j] = t1 + t2;
					k[i][j] = m;
				}
			}
		}
	}
}
void all::outpath(int i, int j)
{
	if (c[i][j] == 0)
		cout << endl
			 << "NO PATH EXISTS BETWEEN " << i << " AND " << j;
	else
	{
		cout << endl
			 << "SHORTEST PATH BETWEEN " << i << " AND " << j << " IS:";
		cout << i << " ";
		cal(i, j);
	}
}
void all::cal(int i, int j)
{
	if (i == j)
		return;
	if (k[i][j] == 0)
	{
		cout << j << " ";
		return;
	}
	else
	{
		cal(i, k[i][j]);
		cal(k[i][j], j);
	}
}
int all::calln()
{
	return n;
}
main()
{
	int r = 1, s;
	all l;
	l.getdata();
	l.compute();
	for (int i = 1; i <= l.calln(); i++)
	{
		while (r == 1)
		{
			cout << endl
				 << "ENTER THE STARTING VERTEX:";
			cin >> s;
			cout << s << endl;
			for (int j = 1; j <= l.calln(); j++)
				l.outpath(s, j);
			cout << endl
				 << "TO CONTINUE PRESS 1" << endl;
			cin >> r;
			cout << r << endl;
		}
	}
	return 0;
}

// OUTPUT
/*
ENTER THE NO. OF VERTICES:5
ENTER THE NO. OF EDGES:6
ENTER THE EDGE AND ITS WEIGHT
edge      wt
1---2    10
2---3    20
1---4    13
4---3    24
5---4    32
3---5    26

ENTER THE STARTING VERTEX:1

NO PATH EXISTS BETWEEN 1 AND 1
SHORTEST PATH BETWEEN 1 AND 2 IS:1 2
SHORTEST PATH BETWEEN 1 AND 3 IS:1 2 3
SHORTEST PATH BETWEEN 1 AND 4 IS:1 4
SHORTEST PATH BETWEEN 1 AND 5 IS:1 2 3 5
TO CONTINUE PRESS 1
1

ENTER THE STARTING VERTEX:2

NO PATH EXISTS BETWEEN 2 AND 1
NO PATH EXISTS BETWEEN 2 AND 2
SHORTEST PATH BETWEEN 2 AND 3 IS:2 3
SHORTEST PATH BETWEEN 2 AND 4 IS:2 3 5 4
SHORTEST PATH BETWEEN 2 AND 5 IS:2 3 5
TO CONTINUE PRESS 1
1

ENTER THE STARTING VERTEX:3

NO PATH EXISTS BETWEEN 3 AND 1
NO PATH EXISTS BETWEEN 3 AND 2
SHORTEST PATH BETWEEN 3 AND 3 IS:3
SHORTEST PATH BETWEEN 3 AND 4 IS:3 5 4
SHORTEST PATH BETWEEN 3 AND 5 IS:3 5
TO CONTINUE PRESS 1
1

ENTER THE STARTING VERTEX:4

NO PATH EXISTS BETWEEN 4 AND 1
NO PATH EXISTS BETWEEN 4 AND 2
SHORTEST PATH BETWEEN 4 AND 3 IS:4 3
SHORTEST PATH BETWEEN 4 AND 4 IS:4
SHORTEST PATH BETWEEN 4 AND 5 IS:4 3 5
TO CONTINUE PRESS 1
1

ENTER THE STARTING VERTEX:5

NO PATH EXISTS BETWEEN 5 AND 1
NO PATH EXISTS BETWEEN 5 AND 2
SHORTEST PATH BETWEEN 5 AND 3 IS:5 4 3
SHORTEST PATH BETWEEN 5 AND 4 IS:5 4
SHORTEST PATH BETWEEN 5 AND 5 IS:5
TO CONTINUE PRESS 1
0

/*=======================================================================*/