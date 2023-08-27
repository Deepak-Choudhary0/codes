strs=["a","b"]
length=len(strs)
leng=len(strs[0])
count=0
for i in range(leng):
  new=''
  old=''
  for j in range(length):
    old+=strs[j][i]
  new=''.join(sorted(old))
  print(old,new)
  if(old!=new):
    count+=1
print(count)