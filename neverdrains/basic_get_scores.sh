#!/bin/bash
set -e  # Exit immediately if any command fails
set -x  # Show the commands we are running as they run

# This file is a suuuper klugey example of curl + awk/sed/grep/tr to process
# a raw text file into csv format.
url='https://www.neverdrains.com/pinfest2016/playerIndex.php?disp=game&sel=Classics&game=130'
curl $url > /var/tmp/neverdrains.html

egrep '(\<tr\>|\<td\>)' /var/tmp/neverdrains.html | \
    tr '\t' ' ' | \
    sed 's_^ *__' | \
    sed 's_</*a[^>]*>__g' | \
    tr -d '\n' | \
    sed 's_</tr>_\n_g' | \
    tr -d ',' | \
    sed 's_</td>_,_g' | \
    sed 's_<[^>]*>__g' | \
    sed 's_,$__'
  


  
