s/^<?php include(.*//
s/^<?php//g
s/\$title=".*";//
s/^include_once(.*//
s/^?>//
s/<h1><?php echo $title; ?><\/h1>//
s/<p>/<para>/g
s/<\/p>/<\/para>/g
s/<p \/>/<para>/g
s/<p style="color:green">/<para>/g
s/<p style="color:red">/<para>/g
s/<font color="purple">//g
s/<font color="red">//g
s/<font color="green">//g
s/<\/font>//g
s/ol>/orderedlist>/g
s/ul>/itemizedlist>/g
s/<li>/<listitem><simpara>/g
s/<\/li>/<\/simpara><\/listitem>/g
s/<table .*>/<table><title>TITLE<\/title>\n<tgroup><tbody>/g
s/<\/table>/<\/tbody><\/tgroup>\n<\/table>/g
s/<tr>/<row>/g
s/<tr style="text-align:center">/<row>/g
s/<tr style="text-align:left">/<row>/g
s/<tr style="text-align:right">/<row>/g
s/<tr style="text-align: center">/<row>/g
s/<tr style="text-align: left">/<row>/g
s/<tr style="text-align: right">/<row>/g
s/<\/tr>/<\/row>/g
s/<td>/<entry>/g
s/<td style="text-align: center">/<entry>/g
s/<td style="color:green">/<entry>/g
s/<td style="color:red">/<entry>/g
s/<td style="color:red;text-align:center">/<entry>/g
s/<td bgcolor=".......">/<entry>/g
s/<td bgcolor="......." class="matrix">/<entry>/g
s/<div align="center">//g
s/<div style="text-align:right">//g
s/<\/div>//g
s/<\/td>/<\/entry>/g
s/<b>/<emphasis>/g
s/<\/b>/<\/emphasis>/g
s/<i>/<emphasis>/g
s/<\/i>/<\/emphasis>/g
s/<em>/<emphasis>/g
s/<\/em>/<\/emphasis>/g
s/strong>/emphasis>/g
s/<h.><a name="\(.*\)"><\/a>/<\/section>\n<section id="\1"><title>/
s/<a /<ulink /g
s/href=/url=/g
s/<\/a>/<\/ulink>/g
s/pre>/screen>/g
s/<h.>/<\/section>\n<section><title>/g
s/<\/h.>/<\/title>/g
s/<br>//g
s/<br \/>//g
s/<dl>/<table><title>TITLE<\/title>\n<tgroup cols="2"><tbody>/g
s/<dl class="command-option">/<table><title>TITLE<\/title>\n<tgroup cols="2"><tbody>/g
s/<\/dl>/<\/tbody><\/tgroup>\n<\/table>/g
s/<dt>/<row><entry>/g
s/<\/dt>/<\/entry>/g
s/<dd>/<entry>/g
s/<\/dd>/<\/entry>\n<\/row>/g
