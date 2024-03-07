import pickle
import json
import sys

# Load the model
with open('crop_recommendation.pkl', 'rb') as f:
    model = pickle.load(f)

# Load the JSON data
with open('form_data.json', 'r') as f:
    data = json.load(f)

# Make predictions
predictions = model.predict(data)
print(predictions.tolist())
