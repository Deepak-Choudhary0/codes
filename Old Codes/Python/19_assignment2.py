#Python program to perform arithmetic operation on any two given numbers based on the user input.
#program to perform maintain database aka ASSIGNMERNT 2
roll=[1,2,3,4,5,6,7]
name=["Deepak","Om","Miriam","Imma","Jona","Dipak","Atul"]
gender=["m","m","f","m","m","m","m"]
age=[19,21,24,21,24,21,22]
dept=["IT","IT","IT","IT","CE","IT","IT"]
c=2
while(c!=0):
    print("-"*82)
    print("^"*35+"Student Database"+"^"*31)
    print("-"*82)
    print("Student's Roll no:   ",roll)
    print("Student's Name:      ",name)
    print("Student's Gender:    ",gender)
    print("Student's Age:       ",age)
    print("Student's Department:",dept)
    print("-"*82)
    print("^"*35+"CHOICES"+"^"*40)
    print("-"*82)
    print("Enter 1 for Adding a new Student.")
    print("Enter 2 for Viewing the Students info by roll no.")
    print("Enter 3 for Deleting the Students info by roll no.")
    print("-"*82)
    print("^"*35+"Interactive Console"+"^"*28)
    print("-"*82)
    z=int(input("Enter The Input (Choice from above) here for Maintaining Student database:"))
    length=len(roll)
    if(z==1):
        found=0
        new=int(input("Enter the roll no of new Student:"))
        for i in range(length):
            if(roll[i]==new):
                found=1
                break
            else:
                continue
        if(found==0):
            roll.append(new)
            name1=input("Enter the name of new Student:")
            name.append(name1)
            new=input("Enter the gender of new Student:")
            gender.append(new)
            new=int(input("Enter the age of new Student:"))
            age.append(new)
            new=input("Enter the department of new Student:")
            dept.append(new)
            print(name1,"was added in Student Database successfully....  |")
        else:
            print(roll[i],"This roll no already exists in our Student Database....\nStudent Name :-",name[i])
    elif(z==2):
        flag=0
        found=0
        rol=int(input("Enter the roll no of the student which you want info:"))
        for i in range(length):
            if(rol==roll[i]):
                print("Student Found Successfully...")
                found=i
                flag=1
                break
            else:
                continue
        if(flag==0):
            print("Student Not Found - ERROR 404 ." * 2)
        else:
            print("Student Roll no:",roll[found])
            print("Student Name:",name[found])
            print("Student Gender:",gender[found])
            print("Student Age:",age[found])
            print("Student Dept:",dept[found])
    elif(z==3):
        flag=0
        found=0
        rol=int(input("Enter the roll no of the student which you want Delete:"))
        for i in range(length):
            if(rol==roll[i]):
                print("Student Found:")
                flag=1
                found=i
                break
            else:
                continue
        if(flag==0):
            print("Student Not Found - ERROR 404 ." * 2)
        else:
            print(name[found],"was Deleted successfully!....")
            c=roll.pop(found)
            c=name.pop(found)
            c=gender.pop(found)
            c=age.pop(found)
            c=dept.pop(found)
    else:
        print("Entered choice",z,"is not in option.... :(")
    print("*"*82)
    c=int(input("Wanna try it again?? Enter 0 for a No or Enter anything else for a Yes."))
    if(c!=0):
        print("\nProgram Restarting....")
        print("Program Successfully Restarted ENJOY !!!!")
        print("")
    else:
        print("-"*80)
print("-"*82)
print("Programm Executed Succesfully........     :-)")
