#!/bin/bash

# This file is a slightly less klugey example of curl + awk/sed/grep/tr to process
# a raw text file into csv format.
url='https://www.neverdrains.com/pinfest2016/playerIndex.php?disp=game&sel=Classics&game=130'
curl $url > /var/tmp/neverdrains.html

xsltproc --html ./html_table_to_csv.xslt /var/tmp/neverdrains.html > /var/tmp/scores.html

  
