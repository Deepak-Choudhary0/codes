// LABSET - 1A

/*
	W.A.P TO SEARCH FOR A GIVEN ELEMENT IN A LIST OF SIZE 'n' USING RECURSIVE BINARY SEARCH.
	COMPUTE THE TIME TAKEN FOR EXECUTING THIS PROGRAM
*/

#include <iostream>
#include <time.h>
#include <conio.h>
#include <stdlib.h>

using namespace std;

template <class T>
void bubblesort(T a[], int n)
{
	for (int i = n; i > 1; i--)
		for (int j = 0; j < i - 1; j++)
			if (a[j] > a[j + 1])
			{
				T temp;
				temp = a[j];
				a[j] = a[j + 1];
				a[j + 1] = temp;
			}
}

template <class T>
int bin(T a[], int low, int high, T key)
{
	int mid;
	if (low <= high)
	{
		mid = (low + high) / 2;
		if (a[mid] == key)
			return 1;
		else
		{
			if (a[mid] < key)
				return (bin(a, mid + 1, high, key));
			else
				return (bin(a, low, mid - 1, key));
		}
	}
	return 0;
}

int main()
{
	int a[30];
	int i, n, key, t;
	long int k;
	float start, end;
	float fin;
	cout << "enter the number of element:";
	cin >> n;
	cout << endl
		 << "THE ELEMENTS ENTERED RANDOMLY:\n ";

	for (i = 0; i < n; i++)
		cin >> a[i];

	a[i] = rand() % 500;

	for (int j = 0; j < n; j++)
		cout << a[j] << endl;

	bubblesort(a, n);
	cout << endl
		 << "ENTER THE KEY ELEMENT TO BE SEARCHED : ";
	cin >> key;
	cout << key;
	start = clock();
	t = bin(a, 0, n - 1, key);
	end = clock();
	fin = (end - start) / CLK_TCK;
	if (t == 1)
		cout << endl
			 << "SEARCH WAS A SUCCESS ";
	else
		cout << endl
			 << "SEARCH UNSUCCESSFUL ";
	cout << endl
		 << "THE TIME TAKEN FOR THE SEARCH IS : " << fin << " sec" << endl;
	getch();
	return 0;
}

// output
/*

THE ELEMENTS ENTERED RANDOMLY:
 346	130	482	90	156	117	95
 415	448	126	4	58	71	379
 492	360	412	221	463	47	119
 441	190	485	214

ENTER THE KEY ELEMENT TO BE SEARCHED : 4
SEARCH WAS A SUCCESS
THE TIME TAKEN FOR THE SEARCH IS : 0 sec

ENTER THE KEY ELEMENT TO BE SEARCHED : 456
SEARCH UNSUCCESSFUL
THE TIME TAKEN FOR THE SEARCH IS : 0 sec
/*======================================================================*/