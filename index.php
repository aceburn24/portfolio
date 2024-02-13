<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Portfolio Homepage</title>
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>

        <section id="projects">
            <h2>Featured Projects</h2>
            <div class="project">
                <img src="https://via.placeholder.com/400x200" alt="Dynamic Data Dashboard" class="project-image-placeholder">
                <div class="project-description">
                    <h3>Dynamic Data Dashboard</h3>
                    <p>A web application that visualizes data in real-time. Utilizing D3.js for dynamic charting, the dashboard provides insights into market trends, user behavior, and performance metrics. Built with a responsive design to ensure accessibility on any device.</p>
                    <a href="#" class="project-link">View Project</a>
                </div>
            </div>
            <div class="project">
                <img src="https://via.placeholder.com/400x200" alt="Eco-Friendly E-commerce Site" class="project-image-placeholder">
                <div class="project-description">
                    <h3>Eco-Friendly E-commerce Site</h3>
                    <p>This project features an online store for eco-friendly products. Developed using Django, it includes a secure payment system, user authentication, and an admin panel for product management. It emphasizes sustainable online shopping.</p>
                    <a href="#" class="project-link">View Project</a>
                </div>
            </div>
        </section>

        <section id="skills">
            <h2>Professional Skills</h2>
            <div class="skills-container"> <!-- Enhance layout for skills -->
                <ul class="skills-list">
                    <li><i class="fas fa-code"></i> HTML, CSS, JavaScript - Expert</li>
                    <li><i class="fab fa-python"></i> Python, Django, Flask - Advanced</li>
                    <li><i class="fab fa-react"></i> React, Angular, Vue.js - Intermediate</li>
                    <li><i class="fas fa-cogs"></i> Git, GitHub, CI/CD Pipelines - Proficient</li>
                </ul>
            </div>
        </section>

        <section id="certifications">
    <h2>Certifications</h2>
    <div class="certifications-container">
        <div class="certification-card">
            <img src="https://via.placeholder.com/100x100" alt="Certified Web Developer" class="certification-badge">
            <div class="certification-info">
                <h3>Certified Web Developer</h3>
                <p>Accredited by the Web Development Institute, this certification validates advanced proficiency in HTML, CSS, and JavaScript, emphasizing modern web development practices and responsive design principles.</p>
            </div>
        </div>
        <div class="certification-card">
            <img src="https://via.placeholder.com/100x100" alt="Python Programming Specialist" class="certification-badge">
            <div class="certification-info">
                <h3>Python Programming Specialist</h3>
                <p>Granted by the Python Institute, it certifies deep understanding and practical skills in Python programming, including data structures, OOP, file operations, and error handling, enriching software development and data analysis capabilities.</p>
            </div>
        </div>
    </div>
</section>

    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
