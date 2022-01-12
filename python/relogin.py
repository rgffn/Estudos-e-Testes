import tkinter

from time import strftime

top = tkinter.Tk()

top.title('Relogin chave')

top.resizable(0,0)

def time(): 
    string = strftime('%H:%M:%S %p') 
    clockTime.config(text = string) 
    clockTime.after(1000, time)


clockTime = tkinter.Label(top, font = ('arial', 60, 'bold'), background = 'black', foreground = 'white')

clockTime.pack(anchor = 'center')
time() 


top.mainloop()
