<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background-color: #f5f5f5;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #2c3e50;
            color: white;
            padding: 1rem 2rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .nav-links {
            display: flex;
            list-style: none;
        }
        .nav-links li {
            margin-left: 1.5rem;
        }
        .nav-links li:first-child {
            margin-left: 0;
        }
        .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 1.1rem;
            transition: color 0.3s;
        }
        .nav-links a:hover {
            color: #3498db;
        }
        .active {
            border-bottom: 2px solid #3498db;
        }
        .container {
            max-width: 1000px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .profile-header {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
        }
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 2rem;
            border: 5px solid #3498db;
        }
        .profile-info h1 {
            font-size: 2rem;
            margin-bottom: 0.5rem;
            color: #2c3e50;
        }
        .profile-info p {
            color: #7f8c8d;
            font-size: 1.1rem;
        }
        .profile-details {
            margin-top: 2rem;
        }
        .detail-item {
            display: flex;
            margin-bottom: 1rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #ecf0f1;
        }
        .detail-label {
            width: 150px;
            font-weight: bold;
            color: #2c3e50;
        }
        .detail-value {
            flex: 1;
            color: #34495e;
        }
        .section-title {
            margin: 2rem 0 1rem;
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 0.5rem;
        }
        @media (max-width: 768px) {
            .profile-header {
                flex-direction: column;
                text-align: center;
            }
            .profile-img {
                margin-right: 0;
                margin-bottom: 1rem;
            }
            .detail-item {
                flex-direction: column;
            }
            .detail-label {
                width: 100%;
                margin-bottom: 0.5rem;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">My Website</div>
        <ul class="nav-links">
            <li><a href="#" class="active">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#profile">Profile</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="profile-header">
            <img src="/api/placeholder/150/150" alt="Profile Picture" class="profile-img">
            <div class="profile-info">
                <h1>John Smith</h1>
                <p>Web Developer</p>
            </div>
        </div>

        <h2 class="section-title">Personal Information</h2>
        <div class="profile-details">
            <div class="detail-item">
                <div class="detail-label">Full Name:</div>
                <div class="detail-value">John Robert Smith</div>
            </div>
            <div class="detail-item">
                <div class="detail-label">Email:</div>
                <div class="detail-value">john@example.com</div>
            </div>
            <div class="detail-item">
                <div class="detail-label">Phone:</div>
                <div class="detail-value">+1 555 123 4567</div>
            </div>
            <div class="detail-item">
                <div class="detail-label">Address:</div>
                <div class="detail-value">New York, United States</div>
            </div>
            <div class="detail-item">
                <div class="detail-label">Date of Birth:</div>
                <div class="detail-value">April 15, 1990</div>
            </div>
        </div>

        <h2 class="section-title">Professional Experience</h2>
        <div class="profile-details">
            <div class="detail-item">
                <div class="detail-label">Current Position:</div>
                <div class="detail-value">Frontend Developer</div>
            </div>
            <div class="detail-item">
                <div class="detail-label">Company:</div>
                <div class="detail-value">Advanced Technology Inc.</div>
            </div>
            <div class="detail-item">
                <div class="detail-label">Years of Experience:</div>
                <div class="detail-value">5 years</div>
            </div>
        </div>
    </div>
</body>
</html>