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
        klas[j] = rows[0]
        j = j + 1

    db.close()

    return render_template('index.html', klas1=klas[0], klas2=klas[1], klas3=klas[2], klas4=klas[3])

@app.route('/klas1')
def klas1():
    try:
        db = MySQLdb.connect(host="localhost",
                             user="root",
                             passwd="",
                             db="schoolproject")
        cur = db.cursor()

        dag = []
        beginuur = []
        einduur = []

        cur.execute("SELECT dag FROM uurrooster WHERE klas='Master EA-ICT'")
        dagen = cur.fetchall()
        for d in dagen:
            dag.append(d[0])

        cur.execute("SELECT beginuur FROM uurrooster WHERE klas='Master EA-ICT'")
        beginuren  = cur.fetchall()
        for b in beginuren:
            beginuur.append(b[0])

        cur.execute("SELECT einduur FROM uurrooster WHERE klas='Master EA-ICT'")
        einduren = cur.fetchall()
        for e in einduren:
            einduur.append(e[0])

        db.close()
    except:
        dag = 0
        beginuur = 0
        einduur = 0

    return render_template('klas.html', **locals())

@app.route('/klas2')
def klas2():
    try:
        db = MySQLdb.connect(host="localhost",
                             user="root",
                             passwd="",
                             db="schoolproject")
        cur = db.cursor()

        dag = []
        beginuur = []
        einduur = []

        cur.execute("SELECT dag FROM uurrooster WHERE klas='Master Bouw'")
        dagen = cur.fetchall()
        for d in dagen:
            dag.append(d[0])

        cur.execute("SELECT beginuur FROM uurrooster WHERE klas='Master Bouw'")
        beginuren  = cur.fetchall()
        for b in beginuren:
            beginuur.append(b[0])

        cur.execute("SELECT einduur FROM uurrooster WHERE klas='Master Bouw'")
        einduren = cur.fetchall()
        for e in einduren:
            einduur.append(e[0])

        db.close()
    except:
        dag = 0
        beginuur = 0
        einduur = 0

    return render_template('klas.html', **locals())

@app.route('/klas3')
def klas3():
    try:
        db = MySQLdb.connect(host="localhost",
                             user="root",
                             passwd="",
                             db="schoolproject")
        cur = db.cursor()

        dag = []
        beginuur = []
        einduur = []

        cur.execute("SELECT dag FROM uurrooster WHERE klas='Bachelor EA-ICT'")
        dagen = cur.fetchall()
        for d in dagen:
            dag.append(d[0])

        cur.execute("SELECT beginuur FROM uurrooster WHERE klas='Bachelor EA-ICT'")
        beginuren  = cur.fetchall()
        for b in beginuren:
            beginuur.append(b[0])

        cur.execute("SELECT einduur FROM uurrooster WHERE klas='Bachelor EA-ICT'")
        einduren = cur.fetchall()
        for e in einduren:
            einduur.append(e[0])

        db.close()
    except:
        dag = 0
        beginuur = 0
        einduur = 0

    return render_template('klas.html', **locals())

@app.route('/klas4')
def klas4():
    try:
        db = MySQLdb.connect(host="localhost",
                             user="root",
                             passwd="",
                             db="schoolproject")
        cur = db.cursor()

        dag = []
        beginuur = []
        einduur = []

        cur.execute("SELECT dag FROM uurrooster WHERE klas='Master EM'")
        dagen = cur.fetchall()
        for d in dagen:
            dag.append(d[0])

        cur.execute("SELECT beginuur FROM uurrooster WHERE klas='Master EM'")
        beginuren  = cur.fetchall()
        for b in beginuren:
            beginuur.append(b[0])

        cur.execute("SELECT einduur FROM uurrooster WHERE klas='Master EM'")
        einduren = cur.fetchall()
        for e in einduren:
            einduur.append(e[0])

        db.close()
    except:
        dag = 0
        beginuur = 0
        einduur = 0

    return render_template('klas.html', **locals())

@app.route('/kaart')
def kaart():
    return render_template('kaart.html')

# @app.route('/RouteBerekning')
# def routeBerekening():
#     return render_template('routeBerekening.html')

if __name__ == '__main__':
    app.run(debug=True)

