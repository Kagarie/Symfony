#!/bin/sh


#On decoupe la musique
function cut40
{
	timestamp=$(date +%s)
	ffmpeg -i $1 -ss 0 -to 40 $timestamp.mp3
	mv $timestamp.mp3 $1
}

cd ../public/musiques/
while true
do
	#On parcourt les elements du dossier un par un
	for fich in *.mp3
	do
	
		if [ -f $fich -a $(stat -c%s "$fich") -gt 600000 ]
		then
				cut40 "$fich"	
		fi
	done
	sleep 30
done

