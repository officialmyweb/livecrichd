import requests

# URL to access the JSON data
url = 'https://livecrichdstream.pages.dev/serve_json.php'

try:
    response = requests.get(url)
    if response.status_code == 200:
        data = response.json()
        print(data)
    else:
        print(f"Failed to access JSON file. Status code: {response.status_code}")
except Exception as e:
    print(f"An error occurred: {e}")
  
