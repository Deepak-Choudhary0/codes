// LABSET 6B

/*
WRITE A PROGRAM TO SORT THE ELEMENTS OF AN ARRAY OF SIZE 'n' USING RECURSIVE QUICKSORT
*/

#include <iostream.h>
#include <conio.h>
template <class T>
void Quicksort(T a[], int low, int high)
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
			while (a[j] >= key && j > low)
				j--;
			if (i < j)
				swap(a[i], a[j]);
			else
				flag = 0;
		}
		swap(a[low], a[j]);
		Quicksort(a, low, j);
		Quicksort(a, j + 1, high);
	}
}
template <class T>
void swap(T &a, T &b)
{
	T temp;
	temp = a;
	a = b;
	b = temp;
}
main()
{
	int n;
	int *a;
	cout << endl
		 << "ENTER THE NO. OF ELEMENTS:";
	cin >> n;
	cout << n;
	a = new int[n];
	cout << endl
		 << "ENTER THE ELEMENTS:" << endl;
	for (int i = 0; i < n; i++)
		cin >> a[i];
	for (i = 0; i < n; i++)
		cout << a[i] << " ";
	Quicksort(a, 0, n - 1);
	cout << endl
		 << "THE SORTED LIST IS" << endl;
	for (i = 0; i < n; i++)
		cout << a[i] << " ";
	getch();
	return 0;
}

// OUTPUT

/*ENTER THE NO. OF ELEMENTS:6

ENTER THE ELEMENTS:
34 23 65 62 57 50

THE SORTED LIST IS
23 34 50 57 62 65
/*-----------------------------------------------------------------------*/

/*ENTER THE NO. OF ELEMENTS:5

ENTER THE ELEMENTS:
9 7 5 3 1

THE SORTED LIST IS
1 3 5 7 9
/*=======================================================================*/
/*ENTER THE NO. OF ELEMENTS:5

ENTER THE ELEMENTS:
-7 -4 -3 -8 -9

THE SORTED LIST IS
-9 -8 -7 -4 -3

/*=========================================================================*/