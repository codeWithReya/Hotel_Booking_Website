# 🌆 City Skyline - Hotel Booking & Rental Website

**City Skyline** is a full-stack hotel booking and rental web application that allows users to explore and book various types of accommodations, rent cars, subscribe for updates, and share feedback. The project demonstrates the integration of frontend, backend, and database technologies to create a complete booking platform.

---

## 🚀 Features

### 🏨 Accommodation Booking

Users can explore and book different types of accommodations, including:

* Resorts
* Villas
* Apartments
* Houseboats

### 🚗 Car Rental System

Users can browse and rent cars directly through the website.

### 📅 Booking Management

* View booking details
* Store booking information securely in the database

### 📩 Subscription System

Users can subscribe using their email address to receive updates and notifications.

### 💬 Feedback System

Users can submit feedback to share their experience and suggestions.

### 🔐 User Authentication

* User registration system
* Session-based login functionality
* Secure user session management

### 📊 Dynamic Data Handling

Booking information and user data are dynamically fetched and managed using PHP and MySQL.

---

## 🛠️ Tech Stack

### Frontend

* HTML
* CSS
* JavaScript

### Backend

* PHP

### Database

* MySQL

### Development Tools

* XAMPP
* Visual Studio Code (VS Code)

---

## 🗂️ Database Structure

### 1. `users`

| Field    | Description   |
| -------- | ------------- |
| user_id  | User ID       |
| name     | User name     |
| email    | User email    |
| password | User password |
| dob      | Date of birth |

### 2. `bookings`

| Field         |
| ------------- |
| id            |
| booking_id    |
| name          |
| phone         |
| email         |
| request       |
| checkin       |
| checkout      |
| country       |
| state         |
| accommodation |
| booking_date  |

### 3. `goa_bookings`

| Field        |
| ------------ |
| id           |
| booking_id   |
| name         |
| phone        |
| email        |
| request      |
| checkin      |
| checkout     |
| state        |
| city         |
| booking_date |

### 4. `subscribe`

| Field     |
| --------- |
| id        |
| full_name |
| email     |

### 5. `user_feedback`

| Field      |
| ---------- |
| id         |
| feedback   |
| created_at |

---

## 🔑 How It Works

1. User registers on the website.
2. A session is created after successful login.
3. Users can:

   * Book accommodations
   * Rent cars
   * View booking details
   * Submit feedback
   * Subscribe for updates
4. All data is stored in the MySQL database.
5. Booking and user information are fetched dynamically using PHP.

---

## ▶️ How to Run Locally

### 1. Install XAMPP

Download and install XAMPP.

### 2. Start Services

Start:

* Apache
* MySQL

### 3. Move Project Files

Copy the project folder into:

```bash
xampp/htdocs/
```

### 4. Import Database

Import the SQL database file using phpMyAdmin.

### 5. Run the Project

Open your browser and visit:

```text
http://localhost/hotel_website
```

---

## 📌 Future Improvements

* Separate login and logout authentication system
* Payment gateway integration
* Admin dashboard
* Booking cancellation feature
* Email notifications
* User profile management

---

## 🙋‍♀️ Author

**Shreya Sharma**

---

## ⭐ Note

This is my first fully functional full-stack web project that integrates frontend, backend, and database technologies. It helped me gain practical experience in PHP, MySQL, session management, and dynamic web development.
