//LABSET--5(A)   DATE=25-11-02

/* GIVEN A KNAPSACK OF CAPACITY 'M' AND 'n' OBJECTS OF WEIGHTS(W1,W2,...Wn)
   WITH PROFITS(P1,P2,...,Pn), WRITE A PROGRAM TO IMPLEMENT GREEDY KNAPSACK
   THAT PROVIDES THE MAXIMUM PROFIT.*/

   #include<iostream.h>
   class nap
   {
	private:
		struct node
		{
			int w;
			int p;
			int e;
			int den;
			struct node *ptr;
		};
		typedef struct node node;
		node *head;
		int cap;
	public:
		nap();
		void getdata();
		void insert(node *);
		void method();
   };
   nap::nap()
   {
	cap=0;
	head=new node;
	head->w=head->den=head->e=head->p=0;
	head->ptr=NULL;
   }
   void nap::getdata()
   {
	int n,p,e,den,w;
	node *temp;
	cout<<endl<<"Enter the no. of elements:";
	cin>>n;cout<<n;
	cout<<endl<<"Enter the element no.,wt.& its profit"<<endl;
	cout<<"E    W    P"<<endl;
	for(int i=1;i<=n;i++)
	{
		cin>>e>>w>>p;
		den=p/w;
		temp=new node;
		temp->e=e;
		temp->w=w;
		temp->p=p;
		temp->den=den;
		insert(temp);
	}
	cout<<endl<<"Enter the total capacity:";
	cin>>cap;cout<<cap<<endl;
   }
   void nap::insert(node *temp)
   {
	node *cur,*prev;
	cur=head->ptr;
	prev=head;
	while(cur!=NULL)
	{
		if(temp->den>cur->den)
			break;
		if(temp->den==cur->den)
		{
			if(temp->w<cur->w)
				break;
		}
		prev=cur;
		cur=cur->ptr;
	}
	prev->ptr=temp;
	temp->ptr=cur;
   }
   void nap::method()
   {
	node *cur;
	int pro=0;
	cur=head->ptr;
	cout<<endl<<"E    W    P";
	while(cur!=NULL)
	{
		if(cur->w<cap)
		{
			cout<<endl<<cur->e<<"    "<<cur->w<<"    "<<cur->p;
			pro+=cur->p;
			cap-=cur->w;
		}
		else
		{
			cout<<endl<<(cur->w-cap)*100/cur->w<<" %OF ELEMENT "
			    <<cur->e<<" IS SELECTED WITH A PROFIT OF "
			    <<(cur->w-cap)*(cur->p)/cur->w;
			pro+=(cur->w-cap)*(cur->p)/cur->w;
			break;
		}
		cur=cur->ptr;
	}
	cout<<endl<<" THE TOTAL PROFIT IS: "<<pro;
   }
   main()
   {
	nap n;
	n.getdata();
	n.method();
	return 0;
   }

      //OUTPUT
/*

Enter the no. of elements:4
Enter the element no.,wt.& its profit
E    W    P
1    20   25
2    12   40
3    32   38
4    24   45

Enter the total capacity:42

E    W    P
2    12    40
1    20    25

58 %OF ELEMENT 4 IS SELECTED WITH A PROFIT OF 26

THE TOTAL PROFIT IS: 91

/*-------------------------------------------------------------------*/
 /*
Enter the no. of elements:3
Enter the element no.,wt.& its profit
E    W    P
1    20   20
2    12   32
3    23   35

Enter the total capacity:60

E    W    P
2    12    32
1    20    20
3    23    35

THE TOTAL PROFIT IS: 87

/*====================================================================*/
