#!/bin/bash
#set -e  # Exit immediately if any command fails
#set -x  # Show the commands we are running as they run

# This file is a suuuper klugey example of curl + awk/sed/grep/tr to process
# a raw text file into csv format.
url='http://neverdrains.com/pincrossing/playerIndex.php?disp=game&sel=League&game=104'
curl $url > pincrossing104.html

grep -E '(\<tr\>|\<td\>)' pincrossing104.html | \
    tr '\t' ' ' | \
    sed 's_^ *__' | \
    sed 's_</*a[^>]*>__g' | \
    tr -d '\n' | \
    sed 's_</tr>_\n_g' | \
    tr -d ',' | \
    sed 's_</td>_,_g' | \
    sed 's_<[^>]*>__g' | \
    sed 's_,$__'