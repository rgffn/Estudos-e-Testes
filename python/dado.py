import random



class Dice:
    def __init__(self):
        self.sideCount = 6

    def setSides(self, sides):
        if sides > 3:
            self.sides = sides
        else:
            print("travou")

    def roll(self):
        return random.randint(1, self.sides)


def checkInput(sides):
    try:
        if int(sides) != 0:
            if float(sides) % int(sides) == 0:  
                return int(sides)
        else:
            return int(sides)

    except:
        print("valor invalido")
        return None


def pickNumber(item, question_string, lower_limit):
    while True:
        item = input(question_string)
        item = checkInput(item)
        if type(item) == int:
            if item <= lower_limit:
                print("valor mt baixo")
                continue
            else:
                return item



def getDices():
    dices = []
    sides = None
    diceAmount = None
    sideLowerLimit = 3  
    diceLowerLimit = 1  

    sides = pickNumber(sides, "quants lados o dado tera?: ", sideLowerLimit)
    diceAmount = pickNumber(diceAmount, "quantos dados vc vai jogar?: ", diceLowerLimit)

    for i in range(0, diceAmount):
        d = Dice()
        d.setSides(sides)
        dices.append(d)

    return dices


def output():
    dices = getDices()
    input("voce quer jogar? aperte enter")
    cont = True
    while cont:
        rollOutput = ""
        for dice in dices:
            rollOutput = rollOutput + str(dice.roll()) + ", "
        rollOutput = rollOutput[:-2]
        print(rollOutput)

        print("quer jogar dnv?")
        ans = input('aperta enter para continuar, e [exit] para sair')
        if ans == 'exit':
            cont = False

if __name__ == "__main__":
    output()
