# This script requires that the api_key file contain your API key.

import json
import requests

def main():
  api_key = ''
  with open('api_key', 'r') as api_key_file:
    api_key = api_key_file.read().strip()
  assert api_key  # Make sure the API key is at not empty.

  # https://www.ifpapinball.com/api/documentation/
  url_format = 'https://api.ifpapinball.com/v1/{query}?api_key={api_key}'
  query = 'player/1/history'  # History for player ID 1
  url = url_format.format(api_key=api_key, query=query)

  # We will not deal with logging library, but it is an option here.
  #print 'Requesting API url: {0}'.format(url)
  response = requests.get(url)
  #print 'Received response: {0}'.format(response)
  
  if response.ok:
    json_data = json.loads(response.content)
    for key, value in json_data.iteritems():
      print key, value


if __name__=='__main__':
  main()
