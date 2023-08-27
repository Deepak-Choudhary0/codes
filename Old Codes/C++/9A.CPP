// LABSET 9A
/*
WRITE A PROGRAM TO SORT THE ELEMENTS OF A LIST OF SIZE 'n' USING SELECTION SORT THAT USES PARTITION METHOD OF HOARE
*/

#include <iostream.h>
#include <conio.h>
template <class T>
int partition(T a[], int low, int high)
{
	int i, j;
	T key;
	int flag = 1;
	if (low < high)
	{
		key = a[low];
		i = low + 1;
		j = high;
		while (flag == 1)
		{
			while (a[i] < key)
				i++;
			while (a[j] > key)
				j--;
			if (i < j)
				swap(a[i], a[j]);
			else
				flag = 0;
		}
		swap(a[low], a[j]);
		return j;
	}
	return low;
}
template <class T>
void swap(T &a, T &b)
{
	T temp;
	temp = a;
	a = b;
	b = temp;
}
template <class T>
void selectionsort(T a[], int low, int high, int k)
{
	int j;
	if (low <= high)
	{
		j = partition(a, low, high);
		if (k == j)
			return;
		if (low < j)
			high = j - 1;
		else
			low = j + 1;
	}
}
template <class T>
void select(T a[], int n)
{
	for (int i = 0; i <= n; i++)
	{
		selectionsort(a, i, n, i);
		for (int j = 0; j < n + 1; j++)
			cout << a[j] << "  ";
		cout << endl;
	}
}
main()
{
	int p;
	int *a;
	clrscr();
	cout << endl
		 << "ENTER THE NO. OF ELEMENTS:";
	cin >> p;
	a = new int[p];
	cout << endl
		 << "ENTER THE ELEMENTS" << endl;
	for (int i = 0; i < p; i++)
		cin >> a[i];
	select(a, p - 1);
	cout << endl
		 << "THE SORTED LIST IS" << endl;
	for (int j = 0; j < p; j++)
		cout << a[j] << "  ";
	getch();
	return 0;
}
/*-------------------------output--------------------------------
ENTER THE NO. OF ELEMENTS: 6
ENTER THE ELEMENTS
1  4  2  6  3  5
1  3  2  4  6  5
1  3  2  4  6  5
1  3  2  4  6  5
1  3  2  4  5  6
1  3  2  4  5  6

THE SORTED LIST IS
1  3  2  4  5  6
----------------------------------------------------------------*/