nums1=[1,2]
nums2=[3,4]
nums=nums1+nums2
nums.sort()
sum=0
m=len(nums1)
n=len(nums2)
half=(m+n)/2
print(m,n,half,nums)
if(half%1==0):
    half=int(half)
    print((nums[half]+nums[half-1])/2)
else:
    half+=0.5
    print(nums[int(half-1)])
