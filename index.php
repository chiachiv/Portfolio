<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Young+Serif&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Fixed Image Section -->
    <div class="fixed-sidebar">
        <img src="images/tumblr_4750adcd4cd1bb9a0de2393a86835042_5e4b861f_640.jpg" alt="Profile Image" class="profile-img">
        <h1 class="sidebar-heading">Chiara Venanzetti</h1>
        <p class="sidebar-subheading">Frontend Developer & UX/UI Designer</p>
        <a href="cv.pdf" download class="download-cv">Download CV</a>
    </div>

    <div class="main-content">
    <!-- About Me Section -->
    <section id="about-me">
        <div class="about-container-wrapper">
            <div class="about-container">
                <div class="about-text">
                    <h2>Hello there,</h2><p>a UX/UI Designer and Web Developer currently based in Rome, Italy.
                    <br>I hold an MSc in Computing and my passion lies in creating user-centered digital experiences that seamlessly blend functionality and aesthetic appeal. I also have experience as a VFX artist and video editor, which has enriched my approach to design and visual storytelling.
                    <br><br>When I’m not working on digital projects, I enjoy painting with watercolors and spending time with my cats. Creativity and a keen eye for detail are at the core of everything I do, both professionally and personally.
                    <br><br>Explore my portfolio to see the range of my work and how I bring ideas to life through design.</p>
                </div>
                <div class="about-image">
                    <img src="images/photo_2024-08-06_13-26-14.jpg" alt="Chiara" />
                </div>
            </div>
        </div>
    </section>

        <!-- Projects Section -->
        <section id="projects">
            <h2>Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <?php
                $projects = [
                    ['title' => 'Project 1', 'description' => 'Cacca pipì', 'link' => 'project1.php', 'image' => 'images/dissdef.jpg'],
                    ['title' => 'Project 2', 'description' => 'Description for project 2', 'link' => 'project2.php', 'image' => 'images/compostdef.jpg'],
                    ['title' => 'Project 3', 'description' => 'Description for project 3', 'link' => 'project3.php', 'image' => 'images/medcaredef.jpg'],
                    ['title' => 'Project 4', 'description' => 'Description for project 4', 'link' => 'project4.php', 'image' => 'images/trueintdef.jpg'],
                ];
                foreach ($projects as $project) {
                    echo '
                    <div class="project-card">
                        <img src="' . htmlspecialchars($project['image']) . '" alt="' . htmlspecialchars($project['title']) . '">
                        <div class="content">
                            <h3>' . htmlspecialchars($project['title']) . '</h3>
                            <p>' . htmlspecialchars($project['description']) . '</p>
                            <a href="' . htmlspecialchars($project['link']) . '">See case study</a>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact">
            <h2>Contact</h2>
            <div class="contact-info">
                <div>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:your-email@example.com">your-email@example.com</a>
                </div>
                <div>
                    <i class="fas fa-phone-alt"></i>
                    <a href="tel:+1234567890">+123 456 7890</a>
                </div>
                <div>
                    <i class="fab fa-linkedin"></i>
                    <a href="https://www.linkedin.com/in/your-profile" target="_blank">LinkedIn Profile</a>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
