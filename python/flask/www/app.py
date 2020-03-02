#import flask
from flask import Flask,render_template
app=Flask(__name__)

#create url and function mapping

@app.route('/')
def index():
    return 'Hello from flask'

@app.route('/tpl')
def tpl():
    #request.arg.get()
    data={'name':'uday','knows':['python','php','node']}




    return render_template('hello.html',data=data)

@app.route('/json')
def json():
    from flask import jsonify
    data = {'name': 'uday', 'knows': ['python', 'php', 'node']}
    return jsonify(data)


if __name__ == '__main__':
    app.run()




