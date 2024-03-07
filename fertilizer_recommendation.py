import numpy as np
from flask import Flask, request, jsonify, render_template
import pickle

app = Flask(__name__)
model = pickle.load(open('fertilizer_recommendation.pkl', 'rb'))


@app.route('/predictferti',methods=['POST'])
def predict():
    int_features=[]
    json = request.get_json()
    
    int_features.append(float(json['Temperature']))
    int_features.append(float(json['Humidity']))
    int_features.append(float(json['Moisture']))
    int_features.append(float(json['Soil Type']))
    int_features.append(float(json['Crop Type']))
    int_features.append(float(json['Nitrogen']))
    int_features.append(float(json['Potassium']))
    int_features.append(float(json['Phosphorous']))

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