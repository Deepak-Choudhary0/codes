// LABSET--5(B)     DATE=25-11-02

/* WRITE A PROGRAM TO PRINT ALL NODES THAT ARE REACHABLE FROM A GIVEN
   STARTING NODE IN A DIGRAPH USING BREADTH FIRST SEARCH */

#include<iostream.h>
class bfs
{
	private:
		struct node
		{
			int ver;
			struct node *ptr;
		};
		typedef struct node node;
		node *head;
		int n;
		int **a;
		int *b;
		int index;
	public:
		bfs();
		void getdata();
		void insert(int);
		void get();
		void disp();
		int notinb(int);
		void reset();
};
bfs::bfs()
{
	n=index=0;
	head=new node;
	head->ver=0;
	head->ptr=NULL;
}
void bfs::getdata()
{
	int e,v1,v2,s,r;
	cout<<endl<<"ENTER THE NO. OF VERTICES:";
	cin>>n;cout<<n;
	a=new int *[n+1];
	for(int i=1;i<=n;i++)
		a[i]=new int[n+1];
	b=new int[n+1];
	for(i=1;i<=n;i++)
		for(int j=1;j<=n;j++)
			a[i][j]=b[i]=0;
	cout<<endl<<"ENTER THE NO. OF EDGES:";
	cin>>e;cout<<e;
	cout<<endl<<"ENTER THE EDGES:"<<endl;
	for(i=1;i<=e;i++)
	{
		cin>>v1>>v2;
		cout<<v1<<"----"<<v2<<endl;
		a[v1][v2]=1;
	}
	cout<<endl<<"TO CONTINUE PRESS 1"<<endl;
	cin>>r;cout<<r;
	while(r==1)
	{
		cout<<endl<<"ENTER THE VERTEX TO START FROM:";
		cin>>s;cout<<s;
		b[index++]=s;
		for(i=1;i<=n;i++)
		{
			if(a[s][i]!=0)
			{
				b[index++]=i;
				insert(i);
			}
		}
		get();
		disp();
		reset();
		cout<<endl<<"TO CONTINUE PRESS 1"<<endl;
		cin>>r;cout<<r;
	}
}
void bfs::insert(int x)
{
	node *temp,*cur,*prev;
	temp=new node;
	temp->ver=x;
	cur=head->ptr;
	prev=head;
	while(cur!=NULL)
	{
		prev=cur;
		cur=cur->ptr;
	}
	prev->ptr=temp;
	temp->ptr=NULL;
}
void bfs::reset()
{
	index=0;
	for(int i=0;i<n;i++)
		b[i]=0;
	head->ptr=NULL;
}
void bfs::get()
{
	node *cur;
	int x;
	cur=head->ptr;
	while(cur!=NULL)
	{
		x=cur->ver;
		for(int i=1;i<=n;i++)
		{
			if(a[x][i]!=0 && notinb(i)==0)
			{
				b[index++]=i;
				insert(i);
			}
		}
		cur=cur->ptr;
	}
}
int bfs::notinb(int x)
{
	for(int i=0;i<index;i++)
	{
		if(b[i]==x)
			return 1;
	}
	return 0;
}
void bfs::disp()
{
	cout<<endl<<"THE NODES THAT ARE REACHABLE FROM "<<b[0]<<" ARE"<<endl;
	for(int i=0;i<index;i++)
		cout<<b[i]<<" ";
	cout<<endl;
}
main()
{
	bfs b;
	b.getdata();
	return 0;
}


 /*	// OUTPUT

ENTER THE NO. OF VERTICES:5
ENTER THE NO. OF EDGES:7
ENTER THE EDGES:
1----2
1----4
4----2
2----3
3----4
2----5
3----5

TO CONTINUE PRESS 1
1
ENTER THE VERTEX TO START FROM:1
THE NODES THAT ARE REACHABLE FROM 1 ARE
1 2 4 3 5

TO CONTINUE PRESS 1
1
ENTER THE VERTEX TO START FROM:2
THE NODES THAT ARE REACHABLE FROM 2 ARE
2 3 5 4

TO CONTINUE PRESS 1
1
ENTER THE VERTEX TO START FROM:3
THE NODES THAT ARE REACHABLE FROM 3 ARE
3 4 5 2

TO CONTINUE PRESS 1
1
ENTER THE VERTEX TO START FROM:4
THE NODES THAT ARE REACHABLE FROM 4 ARE
4 2 3 5

TO CONTINUE PRESS 1
1
ENTER THE VERTEX TO START FROM:5
THE NODES THAT ARE REACHABLE FROM 5 ARE
5

TO CONTINUE PRESS 1
0
/*------------------------------------------------------------------------*/
 /*
ENTER THE NO. OF VERTICES:4
ENTER THE NO. OF EDGES:5
ENTER THE EDGES:
1----2
1----3
2----4
2----3
4----1

TO CONTINUE PRESS 1
1
ENTER THE VERTEX TO START FROM:1
THE NODES THAT ARE REACHABLE FROM 1 ARE
1 2 3 4

TO CONTINUE PRESS 1
1
ENTER THE VERTEX TO START FROM:2
THE NODES THAT ARE REACHABLE FROM 2 ARE
2 3 4 1

TO CONTINUE PRESS 1
1
ENTER THE VERTEX TO START FROM:3
THE NODES THAT ARE REACHABLE FROM 3 ARE
3

TO CONTINUE PRESS 1
1
ENTER THE VERTEX TO START FROM:4
THE NODES THAT ARE REACHABLE FROM 4 ARE
4 1 2 3

TO CONTINUE PRESS 1
2

/*=======================================================================*/