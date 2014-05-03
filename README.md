GPS-Tracking-System
===================

Location Tracking System for Android Platform .

This application is designed to send periodic GPS updates to the server from an android application and retrieve the same by another android application by plotting the coordinates on the GOOGLE Maps.

GPS-Tracker-master- This contains the source code for the android application that sends gps coordinates at minimum 30 seconds interval to the server. The application takes two parameters i.e name- the name of the user, and server url- which is hardcoded in GPSTrackerActivity.java file at line no. 34.

LocationTracker- This contains the source code for android application that fetches the user locations from the server and displays it on a google map in webview.
The application takes only one parameter i.e server url which is hardcoded in MainActivity.java file at line no.-33 and line no.-47.

SampleApks- This contains the sample apk files to test run on the android smartphone.

Server-Side-Scripts- This contains the php scripts to be stored on the server and whos urls has to be called by the corresponding apks.
It contains two scripts-

gps.php- This script's url has to be hardcoded in the GPS-Tracket-master source code to send the gps coordinates to the server. This script fetches those coordinates and stores them in gps-logs directory in name.txt file where 'name' is the name entered by the user in the apk.

map.php- This script's url has to be hardcoded in the LocationTracker source code. This Script is responsible for parsing all the .txt files in the gps-logs directory and plotting them on the Google Maps. If you will click on the corresponding markers n the Map, It will show the user name associated with it.


