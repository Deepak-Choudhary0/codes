import random
x=random.randint(0,5)
y=random.randint(0,2)
z=random.randint(0,3)
e=random.randint(0,3)
k=0
a=['HCL','H2SO4','HNO3','H2SO4','HNO3','HCL']
b=['molarity','molality','density']
c=[0.01,0.05,0.1,0.5]
d=[1.1,1.85,1.2,1.5]
f=[100,1000,500,200]
g=a[x]
h=b[y]
if(y==0):
   i=c[z]
   j='molality and density'
elif(y==1):
   i=c[z]
   j='molarity and density'
else:
   i=d[z]
   k=f[e]
   j='molarity and molality'
if(k==0):
   print("if the",h,"of",g,"solution")
   print(" is",i,"then find the mass of it")
else:   
   print("if the",h,"of",g,"solution")
   print("is",i,"for",k,"ml then find")
   print(" the mass of it")
print("(a)",20)
print()
print("(b)",30)
print()
print("(c)",40)
print()
print("(d)",10)
if(x==0 or x==5):
   g=36.5
elif(x==1 or x==3):
   g=98

else:
   g=63
if(k==0):
   as=i*g
else:
   as=i*k

