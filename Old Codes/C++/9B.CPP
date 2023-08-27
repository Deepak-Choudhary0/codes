// LABSET 9B

/*
WRITE A PROGRAM TO IMPLEMENT TRAVELLING SALESPERSON PROBLEM, USING DYNAMIC PROGRAMMING, FOR MINIMUM COST TOUR
*/

#include <iostream.h>
#include <conio.h>
#define max 32767

class digraph
{
private:
	float **a;
	int vert;

public:
	digraph();
	void do_tsp();
	float tsp(int, int rest_city[], int, int path[]);
	int indeg(int);
	int outdeg(int);
};

digraph::digraph()
{
	int e, v1, v2, n;
	float wt;
	cout << endl
		 << "ENTER THE NO. OF VERTICES:";
	cin >> n;
	cout << n;
	vert = n;
	a = new float *[n + 1];
	for (int i = 1; i <= n; i++)
		a[i] = new float[n + 1];
	for (i = 1; i <= n; i++)
		for (int j = 1; j <= n; j++)
			if (i != j)
				a[i][j] = max;
			else
				a[i][j] = 0;
	cout << endl
		 << "ENTER THE NO. OF EDGES:";
	cin >> e;
	cout << e;
	cout << "\nEnter The City-nos. & The Distance Between Them\nC1 C2 Dist \n";
	for (i = 1; i <= e; i++)
	{
		cin >> v1 >> v2 >> wt;
		a[v1][v2] = wt;
	}
}

int digraph::indeg(int x)
{
	int d = 0;
	for (int i = 1; i <= vert; i++)
		if (a[i][x] != max && a[i][x] != 0)
			d++;
	return d;
}

int digraph::outdeg(int x)
{
	int d = 0;
	for (int i = 1; i <= vert; i++)
		if (a[x][i] != max && a[x][i] != 0)
			d++;
	return d;
}

void digraph::do_tsp()
{
	int n = vert;
	int *rest_city, *path;
	for (int i = 1; i <= vert; i++)
	{
		if (!indeg(i))
		{
			cout << endl
				 << "NO PATH INTO CITY " << i;
			return;
		}
		if (!outdeg(i))
		{
			cout << endl
				 << "NO PATH FROM CITY " << i;
			return;
		}
	}
	rest_city = new int[n];
	path = new int[n + 1];
	for (i = 1; i <= n - 1; i++)
		rest_city[i] = i + 1;
	float res = tsp(1, rest_city, n - 1, path);
	cout << endl
		 << "THE MINIMAL COST TOUR IS " << endl;
	for (i = 1; i <= vert; i++)
		cout << path[i] << " ";
	cout << endl
		 << "THE COST OF THE TOUR IS:" << res;
	delete rest_city;
	delete path;
}

float digraph::tsp(int cur_city, int rest_city[], int n, int path[])
{
	int k = 1;
	float min, weight;
	if (n == 0)
	{
		path[1] = cur_city;
		return a[cur_city][1];
	}
	int *next_city = new int[n];
	int *next_path = new int[n + 1];
	path[1] = cur_city;
	for (int i = 1; i <= n - 1; i++)
		next_city[i] = rest_city[i + 1];
	min = a[cur_city][rest_city[1]] + tsp(rest_city[1], next_city, n - 1,
										  next_path);
	for (i = 1; i <= n; i++)
		path[i + 1] = next_path[i];
	for (i = 2; i <= n; i++)
	{
		for (int j = 1; j <= n; j++)
		{
			if (j != i)
				next_city[k++] = rest_city[j];
			weight = a[cur_city][rest_city[i]] + tsp(rest_city[i],
													 next_city, n - 1, next_path);
		}
		if (min > weight)
		{
			min = weight;
			for (i = 1; i <= n; i++)
				path[i + 1] = next_path[i];
		}
	}
	delete next_city;
	delete next_path;
	return min;
}
main()
{
	digraph t;
	t.do_tsp();
	getch();
	return 0;
}
/*------------------------OUTPUT--------------------------------
ENTER THE NO. OF VERTICES:4
ENTER THE NO. OF EDGES:6
Enter the City Nos. and the distance between them
C1 C2 dist
1 2 3
2 3 4
3 4 5
4 1 6
1 3 7
2 4 8
THE MINIMAL COST TOUR IS:1 2 3 4
THE COST OF THE TOUR IS:18
---------------------------------------------------------------*/
