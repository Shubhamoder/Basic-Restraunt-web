from flask import Flask,request,render_template,redirect,url_for

app=Flask(__name__)

#Home Page
@app.route('/')
def home():
    return render_template('main.html')

@app.route('/order')
def order():
    return render_template('order.html')

@app.route('/gen_bill',methods=["POST"])
def get_bill():
    name=request.form.get('name')
    d1=request.form.get('dish1')
    d2=request.form.get('dish2')
    list_l1=[]
    list_l1.append(name)
    list_l1.append(d1)
    list_l1.append(d2)
    return render_template('show.html',list_l1=list_l1)
app.run()

