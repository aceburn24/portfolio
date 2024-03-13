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

    <?php
        $firstname = 'Marinette';
        $lastname = 'Fernandez';
    ?>

    <main>
        <h1>Get to know me!</h1>
        <section class="about-me-section">
            <div class="biography">
                <img src="./images/profile.jpg" alt="Profile picture of <?php echo $firstname . ' ' . $lastname; ?>" class="headshot">
                <p>Hello! I'm <?php echo $firstname . ' ' . $lastname; ?>, an emerging web developer with a keen interest in learning and growing in the tech space. I'm at the beginning of my journey, with a curiosity-driven approach to front-end and back-end technologies, starting with the basics like HTML, CSS, and JavaScript, and dipping my toes into Python and frameworks such as React.</p>
                <p>My adventure into tech began [a brief story about how you got into tech], fueled by a desire to understand how digital solutions enhance our lives. Every project I tackle, no matter the scale, is an exciting opportunity to learn and apply my growing knowledge.</p>
                <p>Being an extrovert, I thrive on interaction and collaboration, spending much of my free time with friends and family. I'm passionate about exchanging ideas and experiences, whether I'm coding, exploring the outdoors, or diving into the latest tech innovations.</p>
                <p>As I continue to explore this dynamic field, my goal is to continuously expand my skillsets, particularly in environments that value teamwork and open communication. I'm eager to connect with others who share my enthusiasm for technology and personal growth.</p>
                <a href="resume.pdf" download="<?php echo $firstname . '_' . $lastname; ?>_Resume.pdf" class="resume-button">Download My Resume</a>
            </div>
        </section>
        <section id="skills-interests" class="skills-interests-section">
            <h2>Skills & Interests</h2>
            <div class="skills">
                <h3>Beginning Skills</h3>
                <ul>
                    <li>Learning Front-End Development (HTML, CSS, JavaScript)</li>
                    <li>Exploring Back-End Basics (Python, Django)</li>
                    <li>Understanding Version Control (Git, GitHub)</li>
                    <li>Grasping Responsive Web Design Concepts</li>
                </ul>
            </div>
            <div class="interests">
                <h3>Personal Interests</h3>
                <ul>
                    <li>Developing Coding Skills & Discovering New Technologies</li>
                    <li>Enjoying Outdoor Activities with Friends and Family</li>
                    <li>Engaging in Tech Communities</li>
                    <li>Traveling and Experiencing New Cultures</li>
                </ul>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
