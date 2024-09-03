College Review System
Welcome to the College Review System! This project is designed to allow students to review and rate colleges based on various criteria such as academics, facilities, faculty, and more.

Table of Contents
About the Project
Features
Technologies Used
Installation
Usage
Database Structure
Contributing
License
Contact
About the Project
The College Review System is a web application where students can:

Register and log in.
Write reviews for their colleges.
Rate colleges based on different criteria.
Browse and read reviews written by other students.
Filter and search for colleges based on ratings and reviews.
Features
User Authentication: Secure login and registration system.
Review System: Users can post, edit, and delete their reviews.
Rating System: Users can rate colleges on different aspects.
Search & Filter: Easily search and filter colleges based on ratings and reviews.
Admin Panel: Manage users, reviews, and college data.
Technologies Used
Frontend:
HTML/CSS
JavaScript (Optional: jQuery or other JS libraries)
Backend:
PHP
MySQL
Additional Libraries/Tools:
Bootstrap (for responsive design)
PHPMailer (for email notifications)
Summernote (for rich text editing in reviews)
FontAwesome (for icons)
Installation
To get a local copy up and running, follow these steps:

Prerequisites
XAMPP/WAMP: You need to have a local server environment installed (XAMPP, WAMP, or similar).
Composer: Optional if using dependencies like PHPMailer.
Steps
Clone the Repository:

bash
Copy code
git clone [https://github.com/Nihalbagul/collegereview]
Move to Project Directory:

bash
Copy code
cd college-review-system
Database Setup:

Create a MySQL database named college_reviews.
Import the provided SQL file (database/college_reviews.sql) into your database.
Configure the Database:

Open the config.php file.
Update the database credentials:
php
Copy code
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'college_reviews');
Run the Application:

Place the project folder in your server's htdocs (for XAMPP) or www (for WAMP) directory.
Open your browser and navigate to http://localhost/college-review-system.
Usage
User Registration/Login: Users can sign up and log in to the system.
Add Reviews: Registered users can add reviews for colleges.
Browse Reviews: Users can view, search, and filter reviews.
Admin Panel: Admins can manage users, reviews, and colleges from the admin dashboard.
Database Structure
Users Table: Stores user information (ID, username, email, password, role).
Colleges Table: Stores college information (ID, name, location, courses offered).
Reviews Table: Stores reviews (ID, user_id, college_id, rating, review_text).
Ratings Table: Stores ratings for different aspects (ID, review_id, rating_category, rating_value).
Contributing
Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are greatly appreciated.

Fork the Project.
Create your Feature Branch (git checkout -b feature/AmazingFeature).
Commit your Changes (git commit -m 'Add some AmazingFeature').
Push to the Branch (git push origin feature/AmazingFeature).
Open a Pull Request.
License
Distributed under the MIT License. See LICENSE for more information.
