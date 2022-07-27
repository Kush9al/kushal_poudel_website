from tkinter import *
from tkinter import messagebox
import sqlite3
from PIL import ImageTk,Image
import os

root=Tk()

root.geometry("1650x1000")
root.title("Sighn up page")
root.config(bg="White")

my_Image=ImageTk.PhotoImage(Image.open("photo.png"))
myLabel=Label(root,image=my_Image)
myLabel.place(x=0,y=0)

conn=sqlite3.connect("new.db")
c=conn.cursor()
try:
    c.execute(""" CREATE TABLE User(
        first_name text,
        last_name text,
        email text,
        password text,
        confirm_password text

    )""")

    print("Data stored Succesfully")
except:
    pass


def submit():
    conn=sqlite3.connect("new.db")
    
    c=conn.cursor()
    
    c.execute("INSERT INTO User values(:first_name, :last_name, :email, :password, :confirm_password)",{
        "first_name":first_name.get(),
        "last_name":last_name.get(),
        "email":email_ent.get(),
        "password":password.get(),
        "confirm_password":confirm_password.get()
        
    })
   
    messagebox.showinfo("user" , "Data Saved successfully")
    conn.commit()
    conn.close()
    
    
def login():
    os.system()
    
    

first_name=Label(root,text="First Name",fg="Black",bg="White",font=("Times New Roman",20,"italic"))
first_name.place(x=600,y=100)

last_name=Label(root,text="Last Name",fg="Black",bg="White",font=("Times New Roman",20,"italic"))
last_name.place(x=600,y=150)

email=Label(root,text="Email",fg="Black",bg="White",font=("Times New Roman",20,"italic"))
email.place(x=600,y=200)

password=Label(root,text="Password",fg="Black",bg="White",font=("Times New Roman",20,"italic"))
password.place(x=600,y=250)

confirm_password=Label(root,text="Confirm Password",fg="Black",bg="White",font=("Times New Roman",20,"italic"))
confirm_password.place(x=600,y=300)

sighntext=Label(root,text="SIGN UP PAGE",fg="Black",bg="White",font=("Times New Roman",30,"italic"))
sighntext.place(x=750,y=0)

#Creating an empty label for input/entry for the labels.
first_name=Entry(root,width=30,bd=3)
first_name.place(x=830,y=100)

last_name=Entry(root,width=30,bd=3)
last_name.place(x=830,y=150)

email_ent=Entry(root,width=30,bd=3)
email_ent.place(x=830,y=200)

password=Entry(root,width=30,bd=3)
password.place(x=830,y=250)

confirm_password=Entry(root,width=30,bd=3)
confirm_password.place(x=830,y=300)

# Now Create buttons to login or for sighnup.
Sighnup=Button(root,text='Sign up',fg="Black",bg="White",command=submit)
Sighnup.place(x=860,y=360)

# Button to pass into login page
login_btn=Button(root,text="Login",bg="White",fg="Black",command=login)
login_btn.place(x=867,y=400)

conn.commit()
conn.close()

root.mainloop()