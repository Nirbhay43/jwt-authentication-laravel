#  JWT Authentication API (Laravel)

##  Description
This project is a secure authentication system built using Laravel and JWT (JSON Web Token). It provides user registration, login, and protected API routes using token-based authentication.

---

##  Features
- User Registration & Login  
- JWT Token Authentication  
- Protected Routes using Middleware  
- Token Validation & Expiry  

---

##  API Endpoints

- POST /api/register → Register new user  
- POST /api/login → Login user & get token  
- POST /api/logout → Logout user  
- GET /api/user → Get authenticated user  

---

##  Authentication
This project uses JWT for authentication.

Add token in header:
Authorization: Bearer {your_token}

---

##  Installation

1. Clone the repository  
2. Run: composer install  
3. Copy .env.example to .env  
4. Set database credentials  
5. Run: php artisan migrate  
6. Run: php artisan serve  

---

##  Tech Stack
- PHP  
- Laravel  
- JWT  
- MySQL  

---

##  Author
Nirbhay Jadav  
Email: nirbhayjadav07@gmail.com
