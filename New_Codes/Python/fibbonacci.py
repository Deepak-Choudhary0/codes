a=0
b=1
n=10000
print(1,'st element is :',a)
print(2,'st element is :',b)
for i in range(3,n+1):
    c=a+b
    print(i,' element is :',c)
    a=b
    b=c
print(b)