import numpy as np
from flask import Flask, request, jsonify, render_template
import pickle

app = Flask(__name__)
model1 = pickle.load(open('soil_analysis.pkl', 'rb'))
model2 = pickle.load(open('microbe.pkl', 'rb'))


@app.route('/predictsoil',methods=['POST'])
def predict():
    int_features=[]
    json = request.get_json()
    int_features.append(float(json['N']))
    int_features.append(float(json['P']))
    int_features.append(float(json['K']))
    int_features.append(float(json['pH']))
    int_features.append(float(json['EC']))
    int_features.append(float(json['OC']))
    int_features.append(float(json['S']))
    int_features.append(float(json['Zn']))
    int_features.append(float(json['Fe']))
    int_features.append(float(json['Cu']))
    int_features.append(float(json['Mn']))
    int_features.append(float(json['B']))
    
    final_features = [np.array(int_features)]
    prediction1 = model1.predict(final_features)
    prediction2 = model2.predict(final_features)
    output1 = prediction1[0]
    output2 = prediction2[0]
    obj = {
        "res":"Success",
        "output1":str(output1),
        "output2":str(output2)
    }
    return jsonify(obj)

if __name__ == "__main__":
    app.run(debug=True)