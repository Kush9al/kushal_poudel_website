from tkinter import *
from tkinter import messagebox
import sqlite3
from PIL import ImageTk,Image
import os

def login():
    roots=Tk()
    global email1_entry
    global password_entry

    roots.title("Login")
    roots.geometry("1650x1000")

    my_mage=ImageTk.PhotoImage(Image.open("picture.png"))
    myLabel=Label(roots,image=my_mage)
    myLabel.place(x=0,y=0)

    logo=Label(roots,text="Welcome to login",bg="dark orange", font="Inter""50""BOLD")
    logo.place(x=610,y=0)

    log=Label(roots,text="LOGIN TO OUR PAGE",font="Inter""50")
    log.place(x=750,y=0)

    #labeling
    email1=Label(roots,text="Email:",font="36")
    email1.place(x=610,y=200)

    password=Label(roots,text="Password:",font="36")
    password.place(x=610,y=300)

    #entry
    email1_label=Label(roots,border=0)
    email1_label.place(x=710,y=200)

    email1_entry = Entry(roots,border=0,font="20")
    email1_entry.place(x=717,y=206)

    password_label=Label(roots,border=0)
    password_label.place(x=710,y=300)

    password_entry = Entry(roots,border=0,font="20")
    password_entry.place(x=717,y=306)

    #login button
    login_label=Label(roots,border=0)
    login_label.place(x=750,y=400)

    login_entry = Button(roots,width=20,border=0,text="Login",bg="white")
    login_entry.place(x=757,y=401)
                                        
    tex=Label(roots,text="Don't have an account?",font="BOLD")
    tex.place(x=750,y=450)


    up_entry = Button(roots,border=0,text="Sign up",bg="dark orange")
    up_entry.place(x=935,y=454)

    roots.mainloop()