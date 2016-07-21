The afristory patch script replaces the index files with ones that link to .php files instead of folders for each category,
as well as placing these .php scripts in all the folders (as of Rachel 4.0 - the south african ones + english2, maa, and swahili).
The php scripts simply read the files in the category folders, and display links to the pdfs. This is faster than using the 
file browser and shouldn't have issues on iOS like the file browser can sometimes. 

The fileshare patch fixes the same iOS compatibility issue by using a php script to display the contents of the uploads folder.

You need to make the two patch files executable. This can be done via the GUI interface of an FTP program like WinSCP, by checking the 
box 'X' under properties. Alternatively, from command line, to make the script executable, run:

chmod u+x scriptname

e.g
chmod u+x patch_fileshare.sh

