from flask import Flask , request
from flask_restful import Resource, Api

app = Flask(__name__)
api = Api(app)

class Gravitatie(Resource):
        def get(self, planeet): #Moet get noemen
                if planeet == "aarde":
                        return 9.81
                elif planeet == "maan":
                        return 6
                else:
                        return 0

api.add_resource(Gravitatie, "/gravitatie/<string:planeet>")

@app.route('/')
def hello_world():
        return "Hello World"

@app.route('/hallo')
def hello_world2():
        return "Hello World2"

if __name__ == '__main__':
        app.run()

