import numpy as np
from flask import Flask, request, jsonify, render_template
import pickle

app = Flask(__name__)
model = pickle.load(open('soil_analysis_1.pkl', 'rb'))


@app.route('/predict',methods=['POST'])
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
    prediction = model.predict(final_features)
    output = prediction[0]
    obj = {
        "res":"Success",
        "output":str(output)
    }
    return jsonify(obj)

if __name__ == "__main__":
    app.run(debug=True)