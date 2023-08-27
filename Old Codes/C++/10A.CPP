// LABSET 10A

/*
WRITE A PROGRAM TO FIND SHORTEST PATHS FROM A SINGLE VERTEX TO ALL OTHER NODES IN A DIGRAPH
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
		 << "ENTER THE NO. OF VERTICES: ";
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
		 << "ENTER THE NO. OF EDGES: ";
	cin >> e;
	cout << e;
	cout << endl
		 << "ENTER THE EDGES ALONG WITH THEIR WEIGHTS:"
		 << "\n";
	for (i = 1; i <= e; i++)
	{
		cin >> v1 >> v2 >> wt;
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
			 << "SHORTEST PATH BETWEEN " << i << " AND " << j << " IS: ";
		cout << i << " ";
		cal(i, j);
	}
}

void all::cal(int i, int j)
{
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
	int s;
	all l;
	l.getdata();
	l.compute();
	cout << endl
		 << "ENTER THE STARTING VERTEX: ";
	cin >> s;
	cout << s;
	for (int j = 1; j <= l.calln(); j++)
		l.outpath(s, j);
	return 0;
}
/*----------------------------------------------------------
ENTER THE NO. OF VERTICES:  5
ENTER THE NO. OF EDGES:5
ENTER THE EDGES ALONG WITH THEIR WEIGHTS
1  2  3
2  3  4
3  4  5
4  5  6
5  1  3
ENTER THE STARTING VERTEX: 1
SHORTEST PATH BETWEEN 1 AND 1 IS:1 2 3 4 5 1
SHORTEST PATH BETWEEN 1 AND 2 IS:1 2
SHORTEST PATH BETWEEN 1 AND 3 IS:1 2 3
SHORTEST PATH BETWEEN 1 AND 4 IS:1 2 3 4
SHORTEST PATH BETWEEN 1 AND 5 IS:1 2 3 4 5

ENTER THE NO. OF VERTICES:  5
ENTER THE NO. OF EDGES: 6
ENTER THE EDGES ALONG WITH THEIR WEIGHTS
1  2  3
1  3  4
2  3  5
3  4  6
3  5  7
4  5  8
ENTER THE STARTING VERTEX: 1
SHORTEST PATH BETWEEN 1 AND 1 IS:1 2 3 1
SHORTEST PATH BETWEEN 1 AND 2 IS:1 2
SHORTEST PATH BETWEEN 1 AND 3 IS:1  3
SHORTEST PATH BETWEEN 1 AND 4 IS:1  3 4
SHORTEST PATH BETWEEN 1 AND 5 IS:1  3 5
-------------------------------------------------------------------*/
