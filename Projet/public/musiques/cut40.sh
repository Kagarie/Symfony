#!/bin/sh

#Petit script en bash pour couper une musique
name=$1
timestamp=$(date +%s)
ffmpeg -i $1 -ss 0 -to 40 $timestamp.mp3
mv $timestamp.mp3 $1

