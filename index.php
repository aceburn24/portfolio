<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Portfolio</title>
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>

        <section id="projects">
        <h2>My First Projects</h2>
        <div class="project">
            <img src="./images/chart.png" alt="Simple Data Visualizer" class="project-image-placeholder">
            <div class="project-description">
                <h3>Simple Random Month Data Visualizer</h3>
                <p>My very first web project that attempts to display random months data using basic charts. It's a straightforward application that uses basic JavaScript. This project is my stepping stone into understanding how data can be presented on the web.</p>
                <a href="https://drive.google.com/drive/folders/1UlcvQmuX4K3VZOg53Adncb18a3TJ3LVR?usp=sharing" class="project-link" target="_blank">Get the Source Code</a>
            </div>
        </div>
        <div class="project">
            <img src="./images/ecoblog.png" alt="My Eco-Blog" class="project-image-placeholder">
            <div class="project-description">
                <h3>My Eco-Blog</h3>
                <p>This is a simple blog I created to share my journey into eco-friendly living. It's built with basic HTML and CSS, and I'm learning how to make it more interactive using JavaScript. It's a small step towards sustainable living online.</p>
                <a href="https://drive.google.com/drive/folders/1x0bzLC26GJ4yyIs0xMx_Sp3gPoShLquM?usp=sharing" class="project-link" target="_blank">Get the Source Code</a>
            </div>
        </div>
    </section>


        <section id="skills">
            <h2>Skills I'm Learning</h2>
            <div class="skills-container">
                <ul class="skills-list">
                    <li><i class="fas fa-code"></i> HTML, CSS, JavaScript - Beginner</li>
                    <li><i class="fab fa-python"></i> Python - Learning Basics</li>
                    <li><i class="fab fa-react"></i> React - Just Starting</li>
                    <li><i class="fas fa-cogs"></i> Version Control (Git) - Introductory</li>
                </ul>
            </div>
        </section>

        <section id="certifications">
            <h2>My Learning Milestones</h2>
            <div class="certifications-container">
                <div class="certification-card">
                      <img src="./images/cert.jpg" alt="Intro to Web Development" class="certification-badge">
                    <div class="certification-info">
                        <h3>Intro to Web Development</h3>
                        <p>A beginner's certificate that marks my introduction to HTML, CSS, and JavaScript. It represents my first step into understanding the basics of web development.</p>
                    </div>
                </div>
                <div class="certification-card">
                     <img src="./images/cert.jpg" alt="Python Basics" class="certification-badge">
                    <div class="certification-info">
                        <h3>Python Basics</h3>
                        <p>A certificate acknowledging my understanding of Python fundamentals. It covers basic syntax, simple data structures, and introductory programming concepts.</p>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
