import argparse
import json
import sys

def main():
  parser = argparse.ArgumentParser(
    description='Query IFPA API, outputting user history as json file')
  parser.add_argument('infile', nargs='?', type=argparse.FileType('r'),
                      default=sys.stdin)
  parser.add_argument('outfile', nargs='?', type=argparse.FileType('w'),
                      default=sys.stdout)
  args = parser.parse_args()
  
  user_history = json.load(args.infile)
  args.outfile.write('rating_date,rating\n')  # Column headers
  for entry in user_history['rating_history']:
    args.outfile.write('{0},{1}\n'.format(entry['rating_date'], entry['rating']))

if __name__=='__main__':
  main()
