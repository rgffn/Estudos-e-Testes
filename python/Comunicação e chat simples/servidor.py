import socket

s = socket.socket()

ip_address = socket.gethostbyname(socket.gethostname())

s.bind((ip_address, 12345))

s.listen(3)

print("Ip d Server:", ip_address)
while True:
    
    print('esperando a conexão')
    connection, client_address = s.accept()
    try:
       
        print('conectado com', client_address)
        
        connection.send(str("agora vc esta conectado").encode("utf-8"))


        while True:
            data = connection.recv(1024).decode("utf-8")
            if data:
          
                print(list(client_address)[0], end="")
                print(": %s" % data)
        
                new_data = str(input("Vc: ")).encode("utf-8")
                connection.send(new_data)
    finally:
   
        connection.close()
