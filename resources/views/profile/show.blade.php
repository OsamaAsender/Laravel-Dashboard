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
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 1rem 0;
            text-align: center;
        }

        .profile-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-top: 2rem;
        }

        .profile-header {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .profile-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #3498db;
            margin-bottom: 1rem;
        }

        .profile-name {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        .profile-title {
            color: #7f8c8d;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .profile-stats {
            display: flex;
            justify-content: space-around;
            width: 100%;
            margin-top: 1rem;
        }

        .stat {
            text-align: center;
            padding: 0.5rem;
        }

        .stat-value {
            font-size: 1.5rem;
            font-weight: bold;
            color: #3498db;
        }

        .stat-label {
            font-size: 0.9rem;
            color: #7f8c8d;
        }

        .profile-content {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .profile-about,
        .profile-skills,
        .profile-experience {
            background-color: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            font-size: 1.5rem;
            color: #2c3e50;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid #3498db;
        }

        .skills-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .skill-item {
            background-color: #3498db;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
        }

        .experience-item {
            margin-bottom: 1.5rem;
        }

        .experience-title {
            font-weight: bold;
            font-size: 1.1rem;
        }

        .experience-company {
            color: #3498db;
            margin-bottom: 0.5rem;
        }

        .experience-date {
            font-size: 0.9rem;
            color: #7f8c8d;
            margin-bottom: 0.5rem;
        }

        footer {
            text-align: center;
            margin-top: 2rem;
            padding: 1rem;
            background-color: #2c3e50;
            color: white;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 1rem;
        }

        .social-link {
            color: white;
            font-size: 1.5rem;
            text-decoration: none;
        }

        /* Responsive design */
        @media (min-width: 768px) {
            .profile-header {
                flex-direction: row;
                text-align: left;
            }

            .profile-photo {
                margin-right: 2rem;
                margin-bottom: 0;
            }

            .profile-info {
                flex: 1;
            }

            .profile-content {
                grid-template-columns: 1fr 1fr;
            }

            .profile-about {
                grid-column: span 2;
            }
        }

        @media (min-width: 1024px) {
            .profile-content {
                grid-template-columns: 1fr 1fr 1fr;
            }

            .profile-about {
                grid-column: span 3;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <h1>{{ $user->name }}</h1>
        </div>
    </header>

    <div class="container">
        <div class="profile-container">
            <div class="profile-header">
                <img src="{{ asset('storage/images/' . $user->profile_img) }}" alt="Profile Photo" class="profile-photo">
                <div class="profile-info">
                    <h2 class="profile-name">{{ $user->name }}</h2>
                    <p class="profile-title">{{ $user->job_title }}</p>
                    <p>{{ $user->address }}</p>
                    <p>{{ $user->bio }}
                    </p>
                    <p>{{ $user->phone }}</p>
                    <div class="profile-stats">
                        <div class="stat">
                            <div class="stat-value">127</div>
                            <div class="stat-label">Projects</div>
                        </div>
                        <div class="stat">
                            <div class="stat-value">15K</div>
                            <div class="stat-label">Followers</div>
                        </div>
                        <div class="stat">
                            <div class="stat-value">92</div>
                            <div class="stat-label">Clients</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="profile-content">
                <div class="profile-about">
                    <h3 class="section-title">About Me</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Suspendisse potenti. Sed
                        rutrum enim eu ligula sagittis, eu scelerisque magna efficitur. Proin accumsan libero vel quam
                        ullamcorper, nec convallis lorem eleifend. Integer non odio in lorem vehicula pharetra vel vel
                        odio. Quisque dignissim justo sit amet blandit dignissim.</p>
                    <p>Vivamus quis ultricies mauris. Sed tincidunt rhoncus eros, ut efficitur metus ultrices non.
                        Vivamus accumsan, magna at aliquam feugiat, augue justo feugiat elit, eget ultrices augue ipsum
                        ac elit.</p>
                </div>

                <div class="profile-skills">
                    <h3 class="section-title">Skills</h3>
                    <div class="skills-list">
                        <span class="skill-item">HTML5</span>
                        <span class="skill-item">CSS3</span>
                        <span class="skill-item">JavaScript</span>
                        <span class="skill-item">React</span>
                        <span class="skill-item">Vue.js</span>
                        <span class="skill-item">Node.js</span>
                        <span class="skill-item">MongoDB</span>
                        <span class="skill-item">Responsive Design</span>
                        <span class="skill-item">UX/UI</span>
                    </div>
                </div>

                <div class="profile-experience">
                    <h3 class="section-title">Experience</h3>

                    <div class="experience-item">
                        <div class="experience-title">Senior Web Developer</div>
                        <div class="experience-company">TechCorp Inc.</div>
                        <div class="experience-date">2021 - Present</div>
                        <p>Leading a team of developers in creating responsive web applications for various clients.</p>
                    </div>

                    <div class="experience-item">
                        <div class="experience-title">Front-end Developer</div>
                        <div class="experience-company">WebSolutions Ltd.</div>
                        <div class="experience-date">2018 - 2021</div>
                        <p>Developed user interfaces for web applications using modern JavaScript frameworks.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2025 Alex Johnson. All rights reserved.</p>
            <div class="social-links">
                <a href="#" class="social-link">LinkedIn</a>
                <a href="#" class="social-link">GitHub</a>
                <a href="#" class="social-link">Twitter</a>
            </div>
        </div>
    </footer>
</body>

</html>
