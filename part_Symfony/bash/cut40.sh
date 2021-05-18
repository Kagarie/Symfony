#!/bin/sh


#On decoupe la musique
function cut40
{
	timestamp=$(date +%s)
	ffmpeg -i $1 -ss 0 -to 40 $timestamp.mp3
	mv $timestamp.mp3 $1
}

cd public/musiques/
while true
do
	#On parcourt les .mp3 un par un
	for fich in *.mp3
	do
		#Si la musique a un poids superieur à 700 000 octets
		#alors elle fait plus de 40 secondes dans un format mp3
		if [ -f $fich -a $(stat -c%s "$fich") -gt 700000 ]
		then
				cut40 "$fich"
		fi
	done
	sleep 30
done

