import paramiko
import time
import sys

#getting arguments
ip1 = sys.argv[1]
user1 = sys.argv[2]
pwd1 = sys.argv[3]

ip2 = sys.argv[4]
user2 = sys.argv[5]
pwd2 = sys.argv[6]

#for first configuration
ssh = paramiko.SSHClient()
ssh.set_missing_host_key_policy(paramiko.AutoAddPolicy())

#establish connection to router1 remotely using ssh (port 22) and userName1/pwd1 
ssh.connect(ip1, 22, user1, pwd1, look_for_keys=False)
remote = ssh.invoke_shell() #to open router shell
remote.send('term len 0\n') 
time.sleep(1) #giving the necessary time for execution of the latter command

remote.send(' %s \n' % 'conf t') #to enable configuration
time.sleep(2) #giving the necessary time for execution of the latter command

# Using readlines() to read from file1.txt (configuration file)
file1 = open('site1.txt', 'r')
Lines = file1.readlines()
#print(Lines)

#sending the present commands in the conf file
# Strips the newline character
for line in Lines:
    remote.send(' %s \n' % line)
    time.sleep(1)
    
    
#for second configuration
ssh = paramiko.SSHClient()
ssh.set_missing_host_key_policy(paramiko.AutoAddPolicy())

ssh.connect(ip2, 22, user2, pwd2, look_for_keys=False)
remote = ssh.invoke_shell()
remote.send('term len 0\n')
time.sleep(1)

remote.send(' %s \n' % 'conf t')
time.sleep(2)

# Using readlines()
file1 = open('site2.txt', 'r')
Lines = file1.readlines()
print(Lines)

# Strips the newline character
for line in Lines:
    remote.send(' %s \n' % line)
    time.sleep(1)