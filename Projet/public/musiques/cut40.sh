#!/bin/sh

#Petit script en bash pour couper une musique
function cut ($musqiue)
{
	name=$musique
	timestamp=$(date +%s)
	ffmpeg -i $musique -ss 0 -to 40 $timestamp.mp3
	mv $timestamp.mp3 $musqiue
}

function lsMusqic ()
{
	cd ../public/musiques
	for fich in 
}
