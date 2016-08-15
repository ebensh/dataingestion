# This script requires that the api_key file contain your API key.

import argparse
import json
import requests
import sys

def main():
  parser = argparse.ArgumentParser(
    description='Query IFPA API, outputting user history as json file')
  parser.add_argument('api_key_file')
  parser.add_argument('user_id', type=int)
  parser.add_argument('outfile', nargs='?', type=argparse.FileType('w'),
                      default=sys.stdout)
  args = parser.parse_args()

  api_key = ''
  with open(args.api_key_file, 'r') as api_key_file:
    api_key = api_key_file.read().strip()
  assert api_key  # Make sure the API key is at not empty.

  # https://www.ifpapinball.com/api/documentation/
  url_format = 'https://api.ifpapinball.com/v1/{query}?api_key={api_key}'
  query = 'player/{user_id}/history'.format(user_id=args.user_id)
  url = url_format.format(api_key=api_key, query=query)

  # We will not deal with logging library, but it is an option here.
  #print 'Requesting API url: {0}'.format(url)
  response = requests.get(url)
  #print 'Received response: {0}'.format(response)
  
  if response.ok:
    json.dump(json.loads(response.content), args.outfile)


if __name__=='__main__':
  main()
