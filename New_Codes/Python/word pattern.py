pattern="aaa"
s="aa aa aa aa"
splited=s.split(" ")
print(pattern)
print(splited)
flag=0
leng=len(pattern)
# if(len(set(pattern))==len(set(splited))):
#   for i in range(leng):
#     if(i==leng-1):
#       break
#     elif(pattern[i]!=pattern[i+1] and splited[i]!=splited[i+1]):
#       flag=1
#       print(flag)
#       for j in range(i+1,leng):
#         if(pattern[i]==pattern[j]):
#           print(i,j)
#           if(splited[i]==splited[j]):
#             flag=1
#           else:
#             flag=0
#       if(flag==0):
#         break
if(len(set(pattern))==len(set(splited)) and len(pattern)==len(splited)):
  if(len(pattern)==1):
    flag=1
  else:
    for i in range(leng-1):
      if(pattern[i]==pattern[i+1]):
        if(splited[i]==splited[i+1]):
          flag=1
        else:
          flag=0
          break
      elif(pattern[i]!=pattern[i+1]):
        if(splited[i]!=splited[i+1]):
          flag=1
        else:
          flag=0
          break
if(flag>0):
  print("True")
elif(flag==0):
  print("False")