from itertools import product


def findPassword(chars, function, show=50, format_="%s"):

    password = None
    attempts = 0
    size = 1
    stop = False

    while not stop:

        # testa todas as combinações possiveis c os dígitos d parametro "chars".
        for pw in product(chars, repeat=size):

            password = "".join(pw)

            # senha que será tentada.
            if attempts % show == 0:
                print(format_ % password)

            # ve se a senha é a correta.
            if function(password):
                stop = True
                break
            else:
                attempts += 1
        size += 1

    return password, attempts


def getChars():
    chars = []

    # bota à lista d todas as letras maiúsculas
    for id_ in range(ord("A"), ord("Z") + 1):
        chars.append(chr(id_))

    # bota à lista d todas as letras minúsculas
    for id_ in range(ord("a"), ord("z") + 1):
        chars.append(chr(id_))

    # boa a lista d todos os números
    for number in range(10):
        chars.append(str(number))

    return chars

if __name__ == "__main__":

    import datetime
    import time

    # Pede uma senha
    pw = input("\n Digite uma senha: ")
    print("\n")


    def testFunction(password):
        global pw
        if password == pw:
            return True
        else:
            return False


    chars = getChars()

    t = time.process_time()

    password, attempts = findPassword(chars, testFunction, show=1000, format_=" tentando %s")

    t = datetime.timedelta(seconds=int(time.process_time() - t))
    input("\n\n Senha encontrada: {}\n Tentativas: {}\n Tempo: {}\n".format(password, attempts, t))
