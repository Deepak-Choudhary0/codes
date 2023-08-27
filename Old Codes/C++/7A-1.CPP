// LABSET 7A

/*
WRITE A PROGRAM TO IMPLEMENT JOB SCHEDULING WITH DEADLINES PROBLEM USING GREEDY ALGORITHM


process 1
deadline1 >= 1
profit1 >= 0

we can have N number of jobs
each job will take unit time.
each job have deadline and profit
only one job can be processed at a time by the processor

profit is earned only if the job is executed on or before deadline


Schedule (S) = {1, 2, 3, 4, 5, 6, ...}

S(t) => job scheduled in slot 't'
Slot 't' has a span of t-1 to t

S(t) = 0, no job yet scheduled

Feasible schedule :-
	=> S(t) = i, t <= di
	=> each job scheduled maximum once only

*/

#include <iostream>

using namespace std;

class job
{
private:
	struct node
	{
		int ele;
		int dead;
		int pro;
		struct node *ptr;
	};
	typedef struct node node;
	node *head;
	int n, max;
	int *a, *b;

public:
	job();
	void getdata();
	void insert(node *);
	void method();
	void disp();
};
job::job()
{
	max = n = 0;
	head = new node;
	head->ele = head->pro = head->dead = 0;
	head->ptr = NULL;
}
void job::getdata()
{
	node *temp;
	int e, p, d;
	cout << endl
		 << "ENTER THE NO. OF JOBS:";
	cin >> n;
	cout << n;
	b = new int[n + 1];
	for (int i = 1; i <= n; i++)
		b[i] = 0;
	cout << endl
		 << "ENTER THE JOB , ITS DEADLINE & ITS PROFIT" << endl;
	cout << "J    D    P" << endl;
	for (int i = 0; i < n; i++)
	{
		cin >> e >> d >> p;
		cout << e << "    " << d << "    " << p << endl;
		temp = new node;
		temp->ele = e;
		temp->dead = d;
		temp->pro = p;
		if (d > max)
			max = d;
		insert(temp);
	}
}
void job::method()
{
	a = new int[max + 1];
	for (int i = 1; i <= max; i++)
		a[i] = 0;
	node *temp;
	temp = head->ptr;
	while (temp != NULL)
	{
		if (a[temp->dead] == 0)
		{
			a[temp->dead] = temp->ele;
			b[temp->ele] = temp->pro;
		}
		else
		{
			for (int j = temp->dead - 1; j > 0; j--)
			{
				if (a[j] == 0)
				{
					a[j] = temp->ele;
					b[temp->ele] = temp->pro;
					break;
				}
			}
		}
		temp = temp->ptr;
	}
}
void job::insert(node *temp)
{
	node *cur, *prev;
	cur = head->ptr;
	prev = head;
	while (cur != NULL)
	{
		if (temp->pro > cur->pro)
			break;
		prev = cur;
		cur = cur->ptr;
	}
	prev->ptr = temp;
	temp->ptr = cur;
}
void job::disp()
{
	cout << endl
		 << "JOB_NUMBER"
		 << "  PROFIT  " << endl;
	for (int i = 1; i <= max; i++)
		if (a[i] != 0)
			cout << endl
				 << "    " << a[i] << "         " << b[a[i]];
}
int main()
{
	job j;
	j.getdata();
	j.method();
	j.disp();
	return 0;
}

// OUTPUT
/*
ENTER THE NO. OF JOBS:9
ENTER THE JOB , ITS DEADLINE & ITS PROFIT

J    D    P

1    5    8
2    1    7
3    2    6
4    4    4
5    3    7
6    1    8
7    8    3
8    4    9
9    5    4

JOB_NUMBER  PROFIT

	6         8
	3         6
	5         7
	8         9
	1         8
	7         3

=========

ENTER THE NO. OF JOBS:4

ENTER THE JOB , ITS DEADLINE & ITS PROFIT

J    D    P

2    2    2
3    3    3
1    1    1
4    4    4

JOB_NUMBER  PROFIT

	1         1
	2         2
	3         3
	4         4

*/