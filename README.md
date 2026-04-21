#  JWT Authentication API (Laravel)

##  Description
This project is a secure authentication system built using Laravel and JWT (JSON Web Token). It includes user registration, login, forgot password, and protected API routes using token-based authentication. It also supports refresh tokens for maintaining user sessions securely.



##  Features
- User Registration & Login  
- JWT Token Authentication  
- Forgot Password (Reset Password Flow)  
- Refresh Token Implementation  
- Protected Routes using Middleware  
- Token Validation & Expiry  



##  API Endpoints

- POST /api/register → Register new user  
- POST /api/login → Login user & get token  
- POST /api/logout → Logout user  
- GET /api/user → Get authenticated user  
- POST /api/forgot-password → Send reset password request  
- POST /api/reset-password → Reset user password  
- POST /api/refresh → Refresh JWT token  



##  Authentication
This project uses JWT for authentication.

Add token in header:  
Authorization: Bearer {your_token}



##  Installation

1. Clone the repository  
2. Run: composer install  
3. Copy .env.example to .env  
4. Set database credentials  
5. Run: php artisan key:generate  
6. Run: php artisan migrate  
7. Run: php artisan serve  



##  Tech Stack
- PHP  
- Laravel  
- JWT  
- MySQL  



##  Author
Nirbhay Jadav  
Email: nirbhayjadav07@gmail.com
