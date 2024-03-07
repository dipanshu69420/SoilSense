import requests
import json

url = 'http://localhost:5000/'
data = {
    'N': 1,
    'P': 2,
    'K': 3,
    'pH': 0.4,
    'EC': ec,
    'OC': oc,
    'S': s,
    'Zn': zn,
    'Fe': fe,
    'Cu': cu,
    'Mn': mn,
    'B': b
}
headers = {'Content-Type': 'application/json'}

response = requests.post(url, data=json.dumps(data), headers=headers)
print(response.text)