from flask import Flask, request, render_template, url_for
from flask_sqlalchemy import SQLAlchemy
from flask_restful import Resource, Api
import MySQLdb

app = Flask(__name__)
api = Api(app)

@app.route('/')
def index():
    db = MySQLdb.connect(host="localhost",
                         user="root",
                         passwd="",
                         db="schoolproject")
    cur = db.cursor()
    cur.execute("SELECT klas FROM klas")

    klassen = cur.fetchall()

    klas = []
    for i in range(len(klassen)):
        klas.append(0)

    j = 0
    for rows in klassen:
        klas[j] = rows
        j = j + 1

    db.close()

    return render_template('index.html', klas1 = klas[0], klas2 = klas[1], klas3 = klas[2], klas4 = klas[3])

@app.route('/klas1')
def klas1():
    db = MySQLdb.connect(host="localhost",
                         user="root",
                         passwd="",
                         db="schoolproject")
    cur = db.cursor()
    cur.execute("SELECT * FROM klas WHERE id='1'")

    data = cur.fetchall()
    db.close()

    return render_template('klas.html', data=data)

@app.route('/klas2')
def klas2():
    db = MySQLdb.connect(host="localhost",
                         user="root",
                         passwd="",
                         db="schoolproject")
    cur = db.cursor()
    cur.execute("SELECT * FROM klas WHERE id='2'")

    data = cur.fetchall()
    db.close()

    return render_template('klas.html', data=data)

@app.route('/klas3')
def klas3():
    db = MySQLdb.connect(host="localhost",
                         user="root",
                         passwd="",
                         db="schoolproject")
    cur = db.cursor()
    cur.execute("SELECT * FROM klas WHERE id='3'")

    data = cur.fetchall()
    db.close()

    return render_template('klas.html', data=data)

@app.route('/klas4')
def klas4():
    db = MySQLdb.connect(host="localhost",
                         user="root",
                         passwd="",
                         db="schoolproject")
    cur = db.cursor()
    cur.execute("SELECT * FROM klas WHERE id='4'")

    data = cur.fetchall()
    db.close()

    return render_template('klas.html', data=data)

if __name__ == '__main__':
    app.run(debug=True)

