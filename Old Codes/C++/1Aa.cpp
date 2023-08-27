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
	
	int i, n, key,max, t;
	long int k;
    struct timespec begin,end,gbegin,gend; 
	
	cout<<" Enter the size of array:";
        cin>>n;
        cout<<endl;
         int a[n];
	max = 1000000;
    srand(time(0));
	for (i = 0; i < n; i++)
		a[i] = rand()%max;
		cout<< "The numbers are: "<<endl;	
     
        cout<<"Element No: "<<i-1<<"::"<<a[i-1]<<endl;
		cout<<"Element No: "<<i-12<<"::"<<a[i-2]<<endl;
        cout<<"Element No: "<<i-10<<"::"<<a[i-10]<<endl;
		cout<<"Element No: "<<i-50<<"::"<<a[i-50]<<endl;

	bubblesort(a, n);
	cout << endl
		 << "ENTER THE KEY ELEMENT TO BE SEARCHED : ";
	cin >> key;
	cout << key;
	gettimeofday(CLOCK_REALTIME, &begin);
	t = bin(a, 0, n - 1, key);
	gettimeofday(CLOCK_REALTIME, &end);
    long seconds = end.tv_sec - begin.tv_sec;
    long nanoseconds = end.tv_nsec - begin.tv_nsec;
    double elapsed = seconds+nanoseconds*1e-9;
	if (t == 1)
		cout << endl
			 << "SEARCH WAS A SUCCESS ";
	else
		cout << endl
			 << "SEARCH UNSUCCESSFUL ";
	cout << endl
		 << "THE TIME TAKEN FOR THE SEARCH IS : " << seconds << " sec" << endl;
         cout <<nanoseconds<< " nanoseconds" << endl;
	getch();
}
	
