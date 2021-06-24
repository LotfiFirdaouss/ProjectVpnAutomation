
# Using readlines()
file1 = open('site1.txt', 'r')
Lines = file1.readlines()
print(Lines)



count = 0
# Strips the newline character
for line in Lines:
    count += 1
    
    print("Line{}: {}".format(count, line.strip()))