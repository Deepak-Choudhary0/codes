#program to perform airthmetic operation aka ASSIGNMERNT 1
c=1

def add(x,y):
    print("First Number:",x,"Second Number:",y,"Entered Choice","1:-Addition")
    print("\nThe Sum of",x,"and",y,"is:",x+y)

def sub(x,y):
    print("First Number:",x,"Second Number:",y,"Entered Choice","2:-Subtract")
    print("\nThe Subtraction of",x,"and",y,"is:",x-y)
    print("\nThe Subtraction of",y,"and",x,"is:",y-x)

def mul(x,y):
    print("First Number:",x,"Second Number:",y,"Entered Choice","3:-Multiply")
    print("\nThe Multiplication of",x,"and",y,"is:",x*y)

def div(x,y):
    print("First Number:",x,"Second Number:",y,"Entered Choice","4:-Division")
    print("\nThe Division of",x,"and",y,"is:",x/y)
    print("\nThe Division of",y,"and",x,"is:",y/x)

def rem(x,y):
    print("First Number:",x,"Second Number:",y,"Entered Choice","5:-Remainder")
    print("\nThe Remainder of",x,"and",y,"is:",x%y)
    print("\nThe Remainder of",y,"and",x,"is:",y%x)

while(c!=0):
    print("-"*14,"WELCOME,Here Are Choices Which You Can Choose From","-"*14)
    print("1 for Add.")
    print("2 for Subtract.")
    print("3 for Multiply.")
    print("4 for Divide.")
    print("5 for Remainder.")
    print("-"*80)
    x=float(input("Enter The First Number:"))
    y=float(input("Enter The Second Number:"))
    z=int(input("Enter The Choice here for Arithmetic Operation:"))
    print("-"*80)
    if(z==1):
        add(x,y)
    elif(z==2):
        sub(x,y)
    elif(z==3):
        mul(x,y)
    elif(z==4):
        div(x,y)
    elif(z==5):
        rem(x,y)
    else:
        print("Enter choice",z,"is not in option.... :(")
    c=int(input("\nWana try it again? Enter 0 for a No or Enter any else natural number for a Yes:"))
    if(c!=0):
        print("\nProgram Restarting....")
        print("Program Successfully Restarted ENJOY !!!!")
        print("")
    else:
        print("-"*80)
    
print("Programm Executed Succesfully........     :-)")
