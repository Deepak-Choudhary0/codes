// LABSET 10B

/*
WRITE A PROGRAM TO OBTAIN THE TOPOLOGICAL ORDERING OF VERTICES IN A DIGRAPH
*/

#include <iostream.h>
#define max 20

class stack
{
private:
	int a[max];
	int top;

public:
	stack();
	void push(int);
	int pop();
	int empty();
};

stack::stack()
{
	for (int i = 0; i < max; i++)
		a[i] = 0;
	top = -1;
}

void stack::push(int x)
{
	a[++top] = x;
}

int stack::pop()
{
	return (a[top--]);
}

int stack::empty()
{
	if (a[top] == 0 || top == -1)
		return 1;
	return 0;
}

class topo : public stack
{
private:
	int **a;
	int *indeg;
	int *v;
	int n, index;

public:
	topo();
	void getdata();
	void setindeg();
	void adindeg(int);
	void checkindeg();
	void display();
};

topo::topo()
{
	n = 0, index = 0;
}

void topo::getdata()
{
	cout << endl
		 << "ENTER THE NO. OF VERTICES: ";
	cin >> n;
	cout << n;
	indeg = new int[n + 1];
	for (int i = 1; i <= n; i++)
		indeg[i] = 0;
	v = new int[n + 1];
	for (i = 0; i <= n; i++)
		v[i] = 0;
	a = new int *[n + 1];
	for (i = 1; i <= n; i++)
		a[i] = new int[n + 1];
	cout << endl
		 << "ENTER THE ADJACENCY MATRIX" << endl;
	for (i = 1; i <= n; i++)
		for (int j = 1; j <= n; j++)
			cin >> a[i][j];
}

void topo::setindeg()
{
	for (int i = 1; i <= n; i++)
		for (int j = 1; j <= n; j++)
		{
			if (a[j][i] == 1)
				indeg[i]++;
		}
}

void topo::adindeg(int ver)
{
	for (int i = 1; i <= n; i++)
		if (a[ver][i] == 1)
			indeg[i]--;
}

void topo::checkindeg()
{
	int x;
	for (int i = 1; i <= n; i++)
	{
		if (indeg[i] == 0)
		{
			indeg[i] = 100;
			push(i);
		}
	}
	if (!empty())
	{
		x = pop();
		v[index++] = x;
		adindeg(x);
		checkindeg();
	}
}

void topo::display()
{
	if (index == n)
	{
		cout << "THE TOPOLOGICAL ORDER IS:" << endl;
		for (int i = 0; i < n; i++)
			cout << " " << v[i];
	}
	else
		cout << "TOPOLOGICAL SEQUENCE DOES NOT EXIST" << endl;
}

main()
{
	topo t;
	t.getdata();
	t.setindeg();
	t.checkindeg();
	t.display();
	return 0;
}

/*------------------------------OUTPUT-------------------------------
ENTER THE NO. OF VERTICES: 4
ENTER THE ADJACENCY MATRIX
0 1 0 0
0 0 0 1
1 0 0 0
0 0 0 0
THE MINIMAL COST TOUR IS
3 1 2 4

ENTER THE NO. OF VERTICES:4
ENTER THE ADJACENCY MATRIX
1 0 0 1
0 0 1 1
1 0 0 0
0 0 0 1
THE MINIMAL COST TOUR IS
TOPOLOGICAL SEQUENCE DOES NOT EXIST
------------------------------------------------------------------*/
