<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="./assets/about.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <h1>Get to know me!</h1>
        <section class="about-me-section">
            <div class="biography">
                <!-- Adding a placeholder image for headshot -->
                <img src="https://via.placeholder.com/150" alt="Your Headshot" class="headshot">
                <p>Hello! I'm [Your Name], a passionate and dedicated web developer with a deep love for creating seamless, user-friendly digital experiences. With a background in [Your Background], I've honed my skills in front-end and back-end technologies, including HTML, CSS, JavaScript, Python, and frameworks like React and Django.</p>
                <p>Throughout my career, I've had the opportunity to work on a variety of projects, from small business websites to complex web applications, always with a focus on clean, efficient code and responsive design. My journey in tech started from [a brief story about how you got into tech], and it's been an exciting ride ever since.</p>
                <p>When I'm not coding, you might find me [Your Hobbies], exploring the latest tech trends, or contributing to open-source projects. I'm always eager to learn new technologies and methodologies to better myself as a developer and to contribute to the tech community.</p>
                <p>I'm looking to [Your Career Goals], and I'm excited about the opportunities to collaborate on innovative projects with like-minded individuals.</p>
                <a href="resume.pdf" download="YourName_Resume.pdf" class="resume-button">Download My Resume</a>
            </div>
        </section>
        <section id="skills-interests" class="skills-interests-section">
            <h2>Skills & Interests</h2>
            <div class="skills">
                <h3>Professional Skills</h3>
                <ul>
                    <li>Front-End Development (HTML, CSS, JavaScript, React)</li>
                    <li>Back-End Development (Python, Django, Node.js)</li>
                    <li>Version Control (Git, GitHub)</li>
                    <li>Responsive Web Design</li>
                    <!-- Add more skills as needed -->
                </ul>
            </div>
            <div class="interests">
                <h3>Personal Interests</h3>
                <ul>
                    <li>Coding and Learning New Technologies</li>
                    <li>Outdoor Activities</li>
                    <li>Reading and Writing Tech Blogs</li>
                    <li>Traveling and Exploring New Cultures</li>
                    <!-- Add more interests as needed -->
                </ul>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
