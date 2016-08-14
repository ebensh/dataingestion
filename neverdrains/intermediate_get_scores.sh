#!/bin/bash
set -e  # Exit immediately if any command fails
set -x  # Show the commands we are running as they run

# This file is a slightly less klugey example of curl + awk/sed/grep/tr to process
# a raw text file into csv format.
url='https://www.neverdrains.com/pinfest2016/playerIndex.php?disp=game&sel=Classics&game=130'
curl $url > /var/tmp/neverdrains.html

xsltproc --html ./html_table_to_csv.xslt /var/tmp/neverdrains.html 2>/dev/null >/var/tmp/scores.csv
