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
    <a href="index.php">
        <img src="images/tumblr_4750adcd4cd1bb9a0de2393a86835042_5e4b861f_640.jpg" alt="Profile Image" class="profile-img">
    </a>
        <h1 class="sidebar-heading">Chiara Venanzetti</h1>
        <p class="sidebar-subheading">Frontend Developer & UX/UI Designer</p>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Fixed Header Section -->
        <div class="fixed-header">
            <div class="header-content">
                <a href="index.php" class="back-arrow">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <h2 class="project-title">TrueIntern</h2>
            </div>
        </div>
        
        <!-- Project Details Section -->
      <!-- Project Details Section -->
      <section id="project-details">
        <div class="project-container-wrapper">

         <!-- Immagine centrale -->
    <div class="image-container">
        <img src="images/trueintern.png" alt="Immagine Centrale">
    </div>

    <!-- Titoli e paragrafi alternati -->  
    
    <section class="research">
            <p><strong>Overview:</strong> The idea for this project was a mobile application that can be used by students all over the world to apply for internship. Using ML and AI the system will match profiles of students to an internship, and it will show them to employers as well.<br><br>
            <strong>Role:</strong> UX Researcher, UX/UI Designer, Frontend Developer<br><br>
            <strong>Tools:</strong> Figma, Figjam, HTML, CSS, JavaScript, XML</p><br>
            <h2 class="proj-title">UX Research</h2>
            <p>It was challenging to apply machine learning (<strong>ML</strong>) and artificial intelligence (<strong>AI</strong>) to match student profiles with the most suitable internships and present them to employers. Therefore, in-depth research was needed. I used a <strong>human-centered</strong> design method. This kind of approach allows to have a deep understanding of the target audience. Also, a <strong>scenario-based</strong> design can be very helpful to understand all the single steps taken by possible users while interacting with the product.</p>
            <h3 class="proj-sub">Competitive Analysis</h3>
            <div class="grid">
            <div class="grid-item">
                <h3 class="p-title">LinkedIn</h3>
                <ul>
                    <li><p class="p-persona">Algorithm recommends job positions.</p></li>
                    <li><p class="p-persona">Mutual interest-based matching strategy.</p></li>
                    <li><p class="p-persona">Utilizes Gradient Boosted Decision Trees (GBDT).</p></li>
                    <li><p class="p-persona">Pointwise and pairwise ranking optimization.</p></li>
                    <li><p class="p-persona">Social network enhances data collection.</p></li>
                </ul>
            </div>
            <div class="grid-item">
                <h3 class="p-title">Prospects</h3>
                <ul>
                    <li><p class="p-persona">UK-based job search and career advice site.</p></li>
                    <li><p class="p-persona">Matches opportunities through a quiz.</p></li>
                    <li><p class="p-persona">Focuses on user guidance and information.</p></li>
                    <li><p class="p-persona">Does not use ML models for matching.</p></li>
                    <li><p class="p-persona">Allows user and recruiter registration.</p></li>
                </ul>
            </div>
            <div class="grid-item">
                <h3 class="p-title">Milkround</h3>
                <ul>
                    <li><p class="p-persona">No ML model for matching users to jobs.</p></li>
                    <li><p class="p-persona">Shares user data with 10 partner platforms.</p></li>
                    <li><p class="p-persona">Partners suggest jobs based on user searches.</p></li>
                    <li><p class="p-persona">Data is public and shared with third parties.</p></li>
                    <li><p class="p-persona">Potential for ML integration for smarter filtering.</p></li>
                </ul>
            </div>
        </div>
         <h3 class="proj-sub">Personas</h3>
         <section class="personas">
            <div class="persona">
                <img src="images/delia.png" alt="Delia" class="persona-image">
                <div class="persona-info">
                    <h3 class="p-title">Dalia Hernandez</h3>
                    <p class="p-persona">25 years old. Postgraduate student at Napier University from Barcelona. She is enrolled in the MSc Computing Programme Course, and she is doing her last trimester before her dissertation. She has computing skills, baby-sitting skills and she would like to find a job as a full stack web developer.<br><br>She worked part-time as a baby sitter during her studies but she also did a lot of side jobs as a web developer to improve her skills while studying and to prepare her portfolio.<br><br>She is from Barcelona, Spain and now she is living in Edinburgh in a shared house with other students. She likes technology, she enjoys outdoors activities, animals and she is very active politically.<br>She doesn’t like to feel bored or to stay at home for a whole day. Dalia likes to keep herself busy with a lot of activities and she would like to find a good internship for when she will graduate. She would like to work for a company that is very dynamic because as a web developer she would like to implement new ideas, work for different projects, and hopefully expand her horizons.</p>
                </div>
            </div>
        <h2 class="proj-title">UX Design</h2>
        <h3 class="proj-sub">Scenarios</h3>
        <section class="scenarios">
            <div class="scenario">
                <h3 class="p-title">Conceptual Model</h3>
                <p class="p-persona">Dalia is finishing her studies; she is currently finishing her last trimester before her master’s degree dissertation. In the meantime, she would like to start to find a good <strong>internship</strong> that could be a good opportunity for her dissertation.</p><p class="p-persona">She interested in <strong>full stack web development</strong> so Dalia would like to find an internship that can offer this job experience. Dalia talks to a friend about this, and her friend suggests her to try a mobile app called <strong>TrueIntern</strong>.</p><p class="p-persona">Dalia decides to give it a try, so she installs the app on her phone. Dalia just needs to <strong>sign up</strong> with an account, the process is very intuitive since it is very similar to register for a social network. She just needs to put in the app her basic info, and to help the <strong>research</strong> for the internship better some key points on what she would like to find and her CV.</p><p class="p-persona">Once everything is uploaded, she starts to receive some <strong>offers</strong> but at the same time Dalia is able to view some positions that could interests her. After she receive an offer that she is very interested in and after <strong>chatting</strong> with the recruiter she is ready to arrange an interview.</p>
</div>
</section>
<h3 class="proj-sub">Customer journey</h3>
        <img src="images/customerjourney.png" alt="customerjourney" class="centered-image">
<h3 class="proj-sub">Wireframes</h3>
        <img src="images/wireframes1.png" alt="wireframes" class="centered-image">
<h2 class="proj-title">UI Design</h2>
<img src="images/uitrueintern.png" alt="uitrueintern">
<h3 class="proj-sub">High-fidelity prototype</h3>
<img src="images/highfidtrueint.png" alt="highfidelitytrue">
        <h2 class="proj-sub">Frontend</h2>
        <p>For the frontend development of the mobile application, I used <strong>HTML</strong>, <strong>CSS</strong>, and <strong>JavaScript</strong> to create a responsive and intuitive user interface.</p>
<p>I focused on crafting a seamless experience that allows students to easily navigate the app and apply for internships. Using JavaScript, I developed interactive elements and ensured smooth, dynamic interactions throughout the app.</p>
<p>Additionally, <strong>XML</strong> was used to handle data exchange, particularly for integrating machine learning and AI functionalities that match students with relevant internships and showcase their profiles to employers effectively.</p>
<h3 class="proj-sub">Testing</h3>
    <div class="findings-con">
<p>For this part we tested the application by conducting a testing with two possible users.</p>
<p>The participants were asked to perform <strong>3 different tasks</strong> with the prototype.</p>
           <h2 class="fin-title">Objectives:</h2>
        <ul>
            <li><p><strong>Login</strong></p></li>
            <li><p><strong>Go to profile page and add something in the “Education” section</strong></p></li>
            <li><p><strong>Go to chat</strong></p></li>
        </ul>
<p>Both the participants <strong>finished all the tasks</strong>.</p>
<p>The first task was performed in less than 3 minutes for both participants, the second task was performed in 2 minutes by one participant and less than 2 minutes by the other. The third one was performed by both of users in less than a minute.</p>
<p>After the verification with possible users the team managed to fix some bugs that were found in the chat page. Testing the app helped the team to verify and to confirm the usability of the application.</p> 
    </div>
        <h3 class="proj-sub">Conclusion</h3>
            <p>For this project, our team created a mobile application designed to help students find the perfect <strong>internship</strong>, making the transition from study to career smoother.</p>
            <p>I focused on the <strong>UX/UI design</strong> and <strong>frontend development</strong>, using HTML, CSS, and JavaScript to build a clean, intuitive interface that prioritized ease of use for students.</p>
            <p>We aimed to deliver a <strong>user-friendly</strong> experience while integrating <strong>machine learning</strong> to match students with suitable internships.</p>
            <p>Although we faced some <strong>challenges</strong> and made changes to our initial plan, the final product effectively met our goals, providing a valuable tool for students navigating their career paths.</p>
            </div>
 </section>
 <footer>
        <p>&copy; 2024 Chiara Venanzetti - UX/UI Designer and Frontend developer</p>
    </footer>
</div>
</section>
</body>
</html>
