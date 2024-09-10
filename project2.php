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
                <h2 class="project-title">YourMedCare</h2>
            </div>
        </div>
        
        <!-- Project Details Section -->
        <section id="project-details">
        <div class="project-container-wrapper">

         <!-- Immagine centrale -->
    <div class="image-container">
        <img src="images/yourmedcare.png" alt="Immagine Centrale">
    </div>

    <!-- Titoli e paragrafi alternati -->  
    
    <section class="research">
            <p><strong>Overview:</strong> The design concept for this project was to create a simple and accessible medical mobile application for self-diagnosis. The app starts with an AI-driven questionnaire to help users understand their symptoms and connects them to a live chat with an expert to avoid dangerous self-diagnosis. Additionally, the app assists users in finding nearby clinics for immediate care and allows them to keep track of their health in a "health journal."<br><br>
            <strong>Role:</strong> UX Researcher, UX/UI Designer<br><br>
            <strong>Tools:</strong> Figma, Figjam, Axure RP</p><br>
            <h2 class="proj-title">UX Research</h2>
            <p>It is a service that helps people to understand better their symptoms and that can help them to take the right action, it also can help to avoid <strong>dangerous self-diagnosis</strong>. In fact, people usually relay on Google when it comes to find a quick solution to their problems. This could be very dangerous because usually typing symptoms as a research on the internet does not give the user an accurate and safe solution.</p>
            <p>The plan was made to reflect the <strong>design thinking five stage process</strong>.</p><br>
            <img src="images/5steps.png" alt="fivesteps"><br>
            <h3 class="proj-sub">Competitive Analysis</h3>

<div class="competitor-analysis-grid">
    <div class="grid-header"><p class="p-persona">Competitor</p></div>
    <div class="grid-header"><p class="p-persona">Functional Requirements</p></div>
    <div class="grid-header"><p class="p-persona">Non-functional Requirements</p></div>
    <div class="grid-header"><p class="p-persona">Other (Design, Special Features, etc.)</p></div>
    <div class="grid-header"><p class="p-persona">Indication for Your Project</p></div>

    <div class="grid-item-competitor"><p class="p-persona"><strong>Symptomate</strong></p></div>
    <div class="grid-item-competitor"><p class="p-persona">An initial check-up with questions about symptoms. It uses an AI.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">Available as an app and a website. The AI interview is quite simple, maybe too basic for a real diagnosis.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">Neat design, easy navigation, features like a human figure for symptoms and a world map for recent locations.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">Adding interactive features like a human figure can improve navigation.</p></div>

    <div class="grid-item-competitor"><p class="p-persona"><strong>Ada</strong></p></div>
    <div class="grid-item-competitor"><p class="p-persona">AI powered by experts to help users find a diagnosis.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">App-only. High-quality AI, maintained by experts, with data collection for research.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">Easy to navigate, includes an extensive, updated medical library.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">Keeping the AI up to date with expert input is crucial.</p></div>

    <div class="grid-item-competitor"><p class="p-persona"><strong>Your.MD</strong></p></div>
    <div class="grid-item-competitor"><p class="p-persona">Uses AI to provide personalized health info via chatbot.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">App and website. Website lacks chatbot, focuses on medical library.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">Smart app design, but unclear separation between website and app.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">Ensure clear separation of functionalities if expanding to a website.</p></div>
</div>
         <h3 class="proj-sub">Personas</h3>
         <section class="personas">
            <div class="persona">
                <div class="persona-info">
                    <h3 class="p-title">Maria Scott</h3>
                    <p class="p-persona">Maria Scott, Retail Assistant, and mom.</p>
                    <p class="p-persona">Maria is a 45-year-old woman that lives in Edinburgh. She is married with two kids. She is always very busy because she needs to manage her job which is very stressful, but it is something that she really enjoys, and her family with two kids that are still going to school.</p>
                    <p class="p-persona">She is always struggling to manage everything, and she is also an individual that suffer of anxiety. She is especially anxious when it comes to health problems. She owns a smartphone and her kids helped her to understand some features and how it works.</p>
                </div>
                <img src="images/maria.png" alt="Maria Scott" class="persona-image">
            </div>
        </section>
        <h3 class="proj-sub">Scenario & Goal</h3>
        <section class="scenarios">
            <div class="scenario">
                <h3 class="p-title">Scenario</h3>
                <p class="p-persona">Maria one morning started to suffer of a <strong>bad headache</strong> but after dropping her kids at school she still decided to go to work. During the whole day she was still feeling bad and because of her anxiety she started to panic.</p>
                <p class="p-persona">She reached her phone to type in <strong>her symptoms</strong> on Google, but all the research could not address properly her problems. This made her anxiety even worse because she started reading about <strong>disastrous diagnoses</strong>. At that point she would call her GP and schedule an appointment for another day <strong>without knowing</strong> exactly what the problem is. So, she would end her day even more anxious waiting for the doctor appointment.</p>
            </div>
            <div class="scenario">
                <h3 class="p-title">Goal</h3>
                <p class="p-persona">Because Maria is very busy with her job and her family sometimes even making an appointment can be very troublesome. She would like to manage her health problems in a way that is not disruptive for her routine, especially because she is very anxious.</p>
                <p class="p-persona">She would also like to <strong>keep track</strong> of her health journey in one single place so an app can be very helpful. Being an individual that suffers of terrible anxiety, having <strong>a service that can support the whole process</strong> of knowing what your symptoms are, making an appointment, etc. can be extremely helpful for Maria. She also would like to stop feeding her anxiety by doing <strong>incorrect self-diagnosis</strong>, so having an expert support by just opening an app on her phone could be very helpful.</p>
            </div>
        </section>
        <h3 class="proj-sub">Customer journey</h3>
            <img src="images/customerjourneymed.png" alt="customerjourney">
    <h3 class="proj-sub">Interviews</h3>
    <div class="findings-con">
        <h2 class="fin-title">Method:</h2>
        <p>10 open-ended questions were asked to 8 respondents, aged between 20 and 57.</p>
        <h2 class="fin-title">Findings:</h2>
<p>All respondents found the idea useful and said they would use it. However, most noted that <strong>older users</strong> might struggle with the app. They suggested a clean, simple design to aid usability. 80% believed that <strong>chatting with a real expert</strong> could prevent dangerous self-diagnosis. Additionally, 30% recommended a <strong>"health journal"</strong> feature to track visits and bills, which was incorporated into the final product and iterated upon during development.</p>
</div>        
<h3 class="proj-sub">Blueprint</h3>
            <img src="images/blueprint.png" alt="blueprint">
        <h3 class="proj-sub">App Flow</h3>
            <img src="images/appflow1.png" alt="appflow">
        <h3 class="proj-sub">User Flow</h3>
            <img src="images/userflows.png" alt="userflowcheck">
            <h2 class="proj-title">UI Design</h2>
            <img src="images/uimed.png" alt="Uimed">
        <h3 class="proj-sub">Paper prototype</h3>
            <img src="images/paperproto.png" alt="paper">
        <h3 class="proj-sub">High-fidelity prototype</h3>
            <img src="images/highfidmed.png" alt="highfidmed">
        <h2 class="proj-title">Testing</h2>
        <h3 class="proj-sub">User walkthrough</h3>
        <div class="findings-con">
        <h2 class="fin-title">Method:</h2>
        <p>A possible user was asked to perform a walkthrough. They were asked to complete three tasks while interacting with the High-Fidelity prototype.</p>
        <ul>
            <li><p>Try to use the app to find a diagnosis for a headache.</p></li>
            <li><p>Try to use the app to find a diagnosis for a headache, chat with an expert and find a clinic.</p></li>
            <li><p>Try to use the app to write in your “health journal”.</p></li>
        </ul>
</div>
        <h3 class="proj-sub">Cooperative evaluation</h3>
        <div class="findings-con">
        <h2 class="fin-title">Method:</h2>
        <p>To test the usability of the application, I have asked a possible user to do a cooperative evaluation. They have been asked to use the High-Fidelity prototype and then I started a conversation with them.</p>
        <h2 class="fin-title">Implementation:</h2>
        <p>the possible user first used the application in the previous walkthrough. Then they were asked to use the mobile app and after that I asked them to start a conversation for a cooperative evaluation. The conversation was not led by any questions or a clear structure to avoid bias and the focus of this evaluation was about the experience that user had while interacting with the possible product.</p>
</div>
        <h3 class="proj-sub">Conclusion</h3>
            <p>Reflecting on this project, using the five steps of <strong>design thinking</strong> was crucial in creating a mobile app that truly meets user needs.</p>
            <p>Starting with <strong>empathy</strong> it allowed to understand the real challenges people face when trying to self-diagnose.</p>
            <p>By <strong>defining</strong> the core problems, I could focus on solutions that prioritize user safety and accessibility.</p>
            <p><strong>Ideation</strong> helped in find innovative features, like the AI-driven questionnaire and live expert chat, which are essential in guiding users toward accurate information.</p>
            <p><strong>Prototyping and testing</strong> allowed to refine these ideas, ensuring that the final product is both intuitive and effective.</p>
            <p>Overall, this process highlighted the importance of staying <strong>user-focused and iterative in design</strong>, leading to an app that supports better health outcomes.</p>
            </div>
 </section>
 <footer>
        <p>&copy; 2024 Chiara Venanzetti - UX/UI Designer and Frontend developer</p>
    </footer>
</div>
</section>
</body>
</html>
