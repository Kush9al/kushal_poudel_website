from tkinter import *
from tkinter import messagebox
import sqlite3
from PIL import ImageTk,Image
import os

root=Tk()

root.geometry("1650x1000")
root.title("Sign up page")
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


def check():
        a=email1_entry.get()
        b=password_entry.get()
        try:
            conn=sqlite3.connect('new.db')
            c=conn.cursor()

            c.execute("SELECT * from User")
            records=c.fetchall()
            i=len(records)-1
            while i>=0:
                if records[i][2]!=a or records[i][4]!=b:
                    i=i-1
                    if i==-1:
                        messagebox.showerror("Login","Invalid Credentials")
                        break
                else:
                    messagebox.showinfo("Login","Logged in Successfully")          
                    os.system("index.html")
                    break           
            conn.commit()
            conn.close()
        finally:
            pass


def login():
    root.destroy()
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

    login_entry = Button(roots,width=20,border=0,text="Login",bg="white",command=check)
    login_entry.place(x=757,y=401)
                                        
    tex=Label(roots,text="Don't have an account?",font="BOLD")
    tex.place(x=750,y=450)


    up_entry = Button(roots,border=0,text="Sign up",bg="dark orange")
    up_entry.place(x=935,y=454)

    roots.mainloop()



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