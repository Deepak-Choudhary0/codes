// LABSET 6A
/*
PRGM TO IMPLEMENT 0/1 KNAPSACK PROBLEM USING DYNAMIC PROGRAMMOMG
*/

#include <stdio.h>
#include <iostream.h>

class kobject
{
private:
  int *p;
  int *w;
  int n;
  int m;
  int max(int, int);

public:
  int knap(int, int);
  int knapsack();
  void readdata(int);
  ~kobject()
  {
    delete[] p;
    delete[] w;
  }
};
void kobject::readdata(int num)
{
  n = num;
  p = new int[n + 1];
  w = new int[n + 1];
  cout << "enter the weight:\n";
  for (int i = 1; i <= n; i++)
    cin >> w[i];
  cout << "enter the profit:\n";
  for (i = 1; i <= n; i++)
    cin >> p[i];
  cout << "enter the knapsack capacity:";
  cin >> m;
}
int kobject::knapsack()
{

  return knap(1, m);
}
int kobject::knap(int i, int m)
{
  if (i == n)
    return (m < w[n]) ? 0 : p[n];
  if (m < w[i])
    return knap(i + 1, m);
  return max(knap(i + 1, m), knap(i + 1, m - w[i]) + p[i]);
}
int kobject::max(int a, int b)
{
  if (a > b)
    return a;
  else
    return b;
}
void main()
{
  kobject obj01;
  int optsoln;
  int n;
  cout << "enter the number of object;";
  cin >> n;
  obj01.readdata(n);
  optsoln = obj01.knapsack();
  cout << "optimal solution=" << optsoln << endl;
}
/*
OUTPUT

enter the number of object;
3 enter the weight : 100 14 10 enter the profit : 20 18 15 enter the knapsack capacity : 116 optimal solution = 38
*/
