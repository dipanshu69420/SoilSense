from flask import Flask,request,jsonify
import pickle 
import requests

app = Flask(__name__)

model = pickle.load(open("soil_analysis_1.pkl" , "rb"))


@app.route('/', methods=['POST'])

def predict():
    data=request.form
    prediction = model.predict(data['features'])
    result={'result':prediction.tolist()}
    return jsonify(result)


if __name__ == "__main__":
    app.run(debug=True)