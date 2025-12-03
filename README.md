# 🏆 Sports Event Management System (SEMS)

### 🔗 **Live Demo:**  
👉 **https://sems-dzgi6dd4d-rpgholaps-projects.vercel.app**

A complete **web-based sports management portal** that simplifies event creation, team registration, scheduling, user authentication, and result tracking. Designed for organizers, participants, and administrators to manage sports activities efficiently.

---

## 📚 Table of Contents
- Overview
- Features
- Technologies Used
- Folder Structure
- Database Setup
- Installation
- Project Preview
- Future Scope
- Contributing
- Contact

---

## 📌 Overview

The **Sports Event Management System (SEMS)** is developed to streamline the entire sports event lifecycle—from registration to match results.  
It features user authentication, admin dashboard, event management tools, secure verification, and a responsive interface.

This project is deployed and fully live on Vercel.

---

## 🚀 Features

### 🔐 Authentication
- User Login & Registration  
- Email Verification  
- OTP Verification  
- Forgot Password & Reset Password  
- Secure Logout System  

### 🏆 Event & Match Management
- Create, edit, delete events  
- Team and player registration  
- Match scheduling  
- Result management  

### 🛠️ Admin Dashboard
- Manage users  
- Manage events  
- Track match schedules  
- View and respond to feedback  

### 📢 Additional Modules
- Blog & News page  
- Contact form with backend  
- Team information section  
- About us module  

---

## 🛠️ Technologies Used

### 🌐 Frontend
- HTML5  
- CSS3  
- JavaScript  

### 🔙 Backend
- PHP  
- MySQL  

### 🗄️ Database
MySQL stores:
- Users  
- Events  
- Teams & Players  
- Match data  
- Feedback  
- OTP & email verification tokens  

### 🌍 Deployment
- Vercel (Live Hosting)

---

## 🗄️ Database Setup

### 1️⃣ Import Database  
Use the provided `database.sql` file.

```
mysql -u root -p sems < database.sql
```

### 2️⃣ Configure Database  
Edit **connection.php**:

```
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sems";
```

---

## 🧰 Installation

### 1️⃣ Clone the Repository
```
git clone https://github.com/rpgholap/SEMS.git
cd SEMS
```

### 2️⃣ Setup Local Server  
Use **XAMPP** or **WAMP**  
Place project inside:

```
htdocs/   (for XAMPP)
www/      (for WAMP)
```

### 3️⃣ Start Services
- Apache  
- MySQL  

### 4️⃣ Open in Browser
```
http://localhost/SEMS/index.html
```

---

🎬 **Demo Video:**  
https://github.com/rpgholap/SEMS/blob/d02bb38a961dabdf946d50d5a97035463aaaa313/SEMS.mp4

---

## Future Scope

- Mobile App Development  
- AI-Based Match Prediction  
- AI Auto Scheduling  
- Blockchain-based Result Verification  
- Multi-language Support  
- Modern UI/UX Redesign  
- Third-party API Support  

---

## 🤝 Contributing

1. Fork the repository  
2. Create a new feature branch  
3. Commit changes  
4. Submit a pull request  

---

## Contact

📧 Email: gholaprutuja9@gmail.com  
🌐 GitHub: https://github.com/rpgholap  
