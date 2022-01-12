decimal_accuracy = 7


def dtbconverter(num):  

    whole = []
    fractional = ['.']

    decimal = round(num % 1, decimal_accuracy)
    w_num = int(num)

    i = 0

    while (decimal != 1 and i < decimal_accuracy):
        decimal = decimal * 2
        fractional.append(int(decimal // 1))
        decimal = round(decimal % 1, decimal_accuracy)
        if (decimal == 0): break 
        i = i + 1


    while (w_num != 0):
        whole.append(w_num % 2)
        w_num = w_num // 2
    whole.reverse()

    return whole + fractional 


number = float(input("Digite um numero com base-10: "))
print("Binario: ", *dtbconverter(number))
print("c:")
