#!/bin/bash
#cd /var/www/modules/en-afristory
cd langs
for i in $(ls)
do
	cp ${i} /var/www/modules/en-afristory/${i%%.txt}/lang.txt
	cp '../pages/First paragraphs.php' "/var/www/modules/en-afristory/${i%%.txt}/First paragraphs.php"
	cp '../pages/First sentences.php' "/var/www/modules/en-afristory/${i%%.txt}/First sentences.php"
	cp '../pages/First words.php' "/var/www/modules/en-afristory/${i%%.txt}/First words.php"
	cp '../pages/Longer paragraphs.php' "/var/www/modules/en-afristory/${i%%.txt}/Longer paragraphs.php"
	cp '../pages/Read aloud.php' "/var/www/modules/en-afristory/${i%%.txt}/Read aloud.php"

done

cd ../indexes
for i in $(ls)
do
	cp ${i} /var/www/modules/en-afristory
	#echo ${i}
done
