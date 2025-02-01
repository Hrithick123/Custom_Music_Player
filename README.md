# Custom Music Player - Hrithify

A customized music player built using **PHP and MySQL** for playing local music through a user-friendly interface and organizing tracks based on artists.  

This mini-project allows users to **ADD, SORT, and PLAY** their local music in an organized manner. Users can also add artists and sort music based on their favorite artists.  

---

## Features

- **User Authentication** – Register and log in securely  
- **Add Local Music** – Upload and organize your own music  
- **Add Cover Pictures** – Upload album covers for a better UI experience  
- **Sort by Artists** – View music categorized by artists  
- **Web-Based Playback** – Play songs directly in the browser  

---

## Technologies Used

- **HTML** – Default audio tag for in-browser playback  
- **CSS** – Enhances UI styling for a better experience  
- **PHP** – Handles backend database communications  
- **JavaScript** – Implements dynamic button generation for forms  
- **MySQL** – Stores user, artist, and song data  

---

## Database Setup

1. **Create a database** named `hrithify`.  
2. **Import** the `hrithify.sql` file from the `/database` folder.  

---

## Test Data Setup

- Cover images and artist images are stored in `/img` and `/artist_images`.  
- **MP3 files**:  
  1. The `.mp3` files are uploaded to a Google Drive.  
  2. The download link is available in `songs.txt` under `/music`.  
  3. Download the files and place them inside the `/music` folder.  

---

## User Manual

1. **Run the project** by visiting: `localhost/hrithify`.  
2. **Sign Up** to create a new account.  
3. **Log In** to access the home page, where all uploaded songs are displayed.  
4. **Navigation Bar**:  
   - `Artists Page` – View all artists and their songs.  
   - `Hrithify Button` – Upload new songs and artist information.  
   - `Logout` – Securely log out of the application.  
5. **Upload Process**:  
   - If the artist is **new**, you will be prompted to add artist details.  
   - Once uploaded, the song will appear on the **songs page**.  
6. **Sorting**: Click on an artist’s image to filter and view their songs.  

---

## Project Structure

- **Database Schema** – Found in the `/database` folder.  
- **Screens & Documentation** – Refer to `Custom_Music_Player_Report.pdf`.  

---

## Get Started  

Clone this repository and follow the **database setup** instructions to start using Hrithify!  

```bash
git clone https://github.com/your-username/Custom_Music_Player.git
