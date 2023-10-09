# Custom_Music_Player
Customised music player developed using PHP and MySQL for playing Local music through User Interface and organising them based on artists. This mini project is developed as a custom music player that lets you ADD, SORT and PLAY your local music in an organised manner. You can also add your artist and sort your music based on your favourite artists. 

Features
•	Authentication
•	Add your local music
•	Add your cover picture
•	Sort based on Artists
•	Play on the web

Technologies Used
•	HTML – I used HTML default <audio> tag to play the audio on the browser
•	CSS – Styling is used for adding more UI to the Application
•	PHP – All the database backend communications are done using PHP
•	JavaScript – Condition based button generation for a form is implemented using JS
•	Mysql – SQL database is used for storing the information.

Database Schema
 - The Database schema can be seen at the '/database' folder of the repository
 - Create a Database named 'hrithify' and the import tha 'hrithify.sql' file from '/database' folder.

Test Data
- The test data for image covers, artist images are uploaded in the respective directories '/img' and '/artist_images'
- The .mp3 files are uploaded to a google drive and the link is given in the 'songs.txt' file under '/music'
- Download the folder from the drive and paste the .mp3 files inside '/music'

For screens and project structure refer 'Custom_Music_Player_Report.pdf'

USER MANUAL

1.	Go to the path: “localhost/hrithify”
2.	In Sign Up, Register yourself as new user
3.	You will be redirected to the Sign In page
4.	You will see the Home page that has all the Music files
5.	In the navigation bar, you can see the Artist page that holds the information about all the artists.
6.	When you click the image of the artist, you will see the songs that are composed by the respective artists.
7.	When you click the Hrithify button on the navigation bar, you will see the form for uploading local music and artist information.
8.	If the artist is new, you will be asked to add the artist information along with the song information.
9.	After you upload the form, you will see your song in the songs page
10.	 When you click the logout on the nav-bar, you can see your account logged out from the application.

