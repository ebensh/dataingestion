#!/bin/bash
#set -e  # Exit immediately if any command fails
#set -x  # Show the commands we are running as they run

# This file is a suuuper klugey example of curl + awk/sed/grep/tr to process
# a raw text file into csv format.
url='http://www.neverdrains.com/bpso2016/playerIndex.php?disp=game&sel=Main&game=128'
curl $url > buffalo128.html

grep -E '(\<tr\>|\<td\>)' buffalo128.html | \
    tr '\t' ' ' | \
    sed 's_^ *__' | \
    sed 's_</*a[^>]*>__g' | \
    tr -d '\n' | \
    sed 's_</tr>_\n_g' | \
    tr -d ',' | \
    sed 's_</td>_,_g' | \
    sed 's_<[^>]*>__g' | \
    sed 's_,$__'