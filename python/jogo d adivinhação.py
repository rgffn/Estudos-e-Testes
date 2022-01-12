import random

a = comGuess = random.randint(0, 100)

while True:
    userGuess = int(input("Digite um numero entre 0-100:"))
    if userGuess < comGuess:
        print("Numero mais alto")
        comGuess = random.randint(a, 100)
        a += 1

    elif userGuess > comGuess:
        comGuess = random.randint(0, a)
        a += 1

    else:
        print("Numero correto")
        break
