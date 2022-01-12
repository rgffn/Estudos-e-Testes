import socket

s = socket.socket()

server = input("Ip do servidor: ")
 
s.connect((server, 12345))

data = s.recv(1024).decode("utf-8")
print(server + ": " + data)

while True:

    new_data = str(input("Vc: ")).encode("utf-8")
    s.sendall(new_data)

    data = s.recv(1024).decode("utf-8")
    print(server + ": " + data)

s.close()
