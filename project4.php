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
                <h2 class="project-title">Comparative Study of Design Thinking and HCD in Web Development</h2>
            </div>
        </div>
        <!-- Project Details Section -->
        <section id="project-details">
        <div class="project-container-wrapper">

            <!-- Immagine centrale -->
    <div class="image-container">
        <img src="images/mockupdiss.png" alt="Immagine Centrale">
    </div>

    <!-- Titoli e paragrafi alternati -->  
    
    <section class="research">
            <p><strong>Overview:</strong> This project, completed as part of my MSc Computing dissertation, involves developing two websites—an e-commerce site and an informative site—while comparing two UX design methods: Design Thinking and Human-Centered Design. While often seen as complementary or similar, research shows key differences between the two. This comparison highlights those distinctions and addresses a gap in the literature by focusing on the evaluation process, leading to new website evaluation guidelines.<br><br>
            <strong>Role:</strong> UX Researcher, UX/UI Designer, Frontend Developer<br><br>
            <strong>Tools:</strong> Figma, Figjam, HTML, CSS, JavaScript, PHP</p>
        <br>
        <h2 class="proj-title">Research Process</h2>
        <div class="square">
        Two websites were developed for this project: an <strong>e-commerce</strong> site and an <strong>informative</strong> site for reading articles. Comparing these types of sites helps highlight different user needs and guides the <strong>development of evaluation methods</strong>. Both sites were created using <strong>Design Thinking</strong> and <strong>Human-Centered Design</strong> to compare the two approaches.
    </div>
        <div class="research-item">
            <h3 class="proj-sub">Design Thinking methodology</h3>
            <div class="color-box">
                <p>The Design Thinking process involves the following phases: <strong>Empathise</strong>, <strong>Define</strong>, <strong>Ideate</strong>, <strong>Prototype</strong>, and <strong>Test</strong>.</p>
            </div>
            <h3 class="proj-sub">Empathise</h3>
            <p>In this step a preliminary research was made based on the possible needs of users. This research include the development of <strong>personas</strong>, <strong>scenarios</strong>, <strong>customer journeys</strong> and <strong>competitive analysis</strong>.</p>
            <h3 h3 class="proj-sub">Personas</h3>
            <img src="images/dtpecom.png" alt="Personaecommerce">
            <p>Design Thinking persona for e-commerce</p><br><br>
            <img src="images/dtpinfo.png" alt="Personainfo">
            <p>Design Thinking persona for informative</p>
            <h3 class="proj-sub">Scenarios</h3>
        <section class="scenarios">
            <div class="scenario">
                <h3 class="p-title">E-commerce scenario</h3>
                <p class="p-persona">Valentina needs to buy gym clothes from an <strong>online shopping website</strong>. She is searching online for a website. When she finds it, she starts to navigate it. First she will <strong>explore her options</strong> [1], she finds the gym clothes that she likes. She <strong>selects the clothes</strong> [2], <strong>choose size and colour</strong> [3], she is <strong>ready to pay</strong> [4].</p>
                <p class="p-persona"><strong>Notes:</strong> [1] In the landing page of the website it is important to show new arrivals and to let the user explore with it. The Menu needs to show Categories for a more smart search.<br>
[2] Options to add clothes to the cart.<br>
[3] Showing a product page before putting it in the cart.<br>
[4] Showing pages for cart, checkout and payment.</p>
            </div>
            <div class="scenario">
                <h3 class="p-title">Informative scenario</h3>
                <p class="p-persona">Flavia is searching for a new informative website were to read articles. She starts <strong>doing a research</strong> [1] online, comparing websites. When she choose a website that she thinks could be fine for her readings, <strong>she starts to navigate it</strong> [2]. She explores the website, <strong>scrolling through the articles</strong> [3], and she reads the section <strong>“about us”</strong> [4]. Then, she choose an article from the categories and she starts to <strong>read it</strong> [5].</p>
            <p class="p-persona"><strong>Notes:</strong> [1] Using online searching tools to search for the website. It is important that the website appears on the searches.<br>
            [2] Landing page needs to be captivating and easy to understand.<br>
            [3] Categories well explained and displayed on the Menu.<br>
            [4] About us page, with important information on the website.<br>
            [5] A good interface to read articles.</p>
            </div>
            <h3 class="proj-sub">Customer journeys</h3>
            <img src="images/customjournecom.png" alt="customjourneyecom">
            <p>Design Thinking customer journey for e-commerce</p><br><br>
            <img src="images/customjourinfo.png" alt="customjourneyinfo">
            <p>Design Thinking customer journey for informative</p>
            <h3 class="proj-sub">Competitive analysis</h3>
            <div class="competitor-analysis-grid">
    <div class="grid-header"><p class="p-persona">E-commerce</p></div>
    <div class="grid-header"><p class="p-persona">UNIF</p></div>
    <div class="grid-header"><p class="p-persona">Urban Outfitters</p></div>
    <div class="grid-header"><p class="p-persona">ASOS</p></div>
    <div class="grid-header"><p class="p-persona">Shein</p></div>

    <div class="grid-item-competitor"><p class="p-persona"><strong>Brand positioning and overview</strong></p></div>
    <div class="grid-item-competitor"><p class="p-persona">Online fashion brand with very unique aesthetics that takes inspiration from the '90s and early 2000.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">A brand for young people that taps into rebellious aesthetics.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">ASOS it is a brand that sells only online and covers men’s wear, women’s wear, accessories, footwear, jewellery and beauty products. It sells over 850 brands.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">Online shop that offers products that are similar to fashion clothes but at a low price.</p></div>

    <div class="grid-item-competitor"><p class="p-persona"><strong>Target audience</strong></p></div>
    <div class="grid-item-competitor"><p class="p-persona">Teenagers and people in their early twenties.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">18 years old up until late twenties.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">Young adults.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">It strives to include everyone with its pricing.</p></div>

    <div class="grid-item-competitor"><p class="p-persona"><strong>Strenghts</strong></p></div>
    <div class="grid-item-competitor"><p class="p-persona">Very unique aesthetics. The brand is very recognisable and it offers the latest trends in fashion and it is exclusive.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">It is a very famous brand and it is very well recognised. It has a lot of loyal customers. They also have physical stores.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">It is one of the most famous ecommerce site to buy clothes from. It sells over 850 brands and it has its own brand as well. It is very active and recognizable on the internet and has a strong presence online. It has free shipping.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">Very affordable prices, worldwide shipping, it has a very huge variety of products.</p></div>

    <div class="grid-item-competitor"><p class="p-persona"><strong>Weaknesses</strong></p></div>
    <div class="grid-item-competitor"><p class="p-persona">Their products are available usually just for a season, and when they are out of stock usually they are not replaced. It is very pricey for the target audience they have in mind.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">Sometimes it is too pricey for young people and had some negative publicity on cultural and social issues.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">It is quite pricey and since they sell other brand products they don’t always have control on the quality of all the products.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">The delivery usually is very slow, the products quality it is not always as good as it seems from the websites.</p></div>

    <div class="grid-item-competitor"><p class="p-persona"><strong>Opportunities</strong></p></div>
    <div class="grid-item-competitor"><p class="p-persona">It is based in America so the shipping in other countries it is difficult and very slow. So they can think to expand their brand in other places.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">They are constantly improving even after the issues they had in the past. They improved the customer service. Listening to people needs to improve the brand.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">The fashion industry is growing so ASOS can have a lot of opportunities to connect to retailers and grow their business.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">It is a good brand for people that cannot afford fashion and it is already a very famous brand in the industry that is always growing.</p></div>

    <div class="grid-item-competitor"><p class="p-persona"><strong>Threats</strong></p></div>
    <div class="grid-item-competitor"><p class="p-persona">This brand is very unique in his own way, but has a lot of competition from more affordable ecommerce sites.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">The high prices of the products, the controversies.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">A lot of brands have physical and online presence and people may want to buy from them directly than relying on ASOS.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">Shein had some data breaches in the past. Also, the quality of the products sometimes it is not the best and the website does not seems to offer a realistic view of the product before buying it. And the controversies.</p></div>
</div>
</section>
<hr>
<section class="research">
<div class="competitor-analysis-grid">
    <div class="grid-header"><p class="p-persona">Informative</p></div>
    <div class="grid-header"><p class="p-persona">Pocket</p></div>
    <div class="grid-header"><p class="p-persona">Medium</p></div>
    <div class="grid-header"><p class="p-persona">Scopus</p></div>
    <div class="grid-header"><p class="p-persona">Popular Science</p></div>

    <div class="grid-item-competitor"><p class="p-persona"><strong>Brand positioning and overview</strong></p></div>
    <div class="grid-item-competitor"><p class="p-persona">Pocket is a site that allows you to save articles and stories for later and it also offers curated stories. You can pay for a Premium service that allows users to have more feature.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">Blogging platform that allows users to read and to publish articles. You can pay a membership that allows you to have unlimited access and to support the writers.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">Database of peerreviewed journals and articles.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">It is a digital magazine on popular science.</p></div>

    <div class="grid-item-competitor"><p class="p-persona"><strong>Target audience</strong></p></div>
    <div class="grid-item-competitor"><p class="p-persona">It involves all possible users, from all ages.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">All people from all ages that have different interests.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">All ages, especially students and people in the academic world.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">All ages.</p></div>

    <div class="grid-item-competitor"><p class="p-persona"><strong>Strenghts</strong></p></div>
    <div class="grid-item-competitor"><p class="p-persona">The idea to save articles and stories around the web to read later it is amazing, it helps people to save time and to stop to send themselves links. Pocket will also recommend stories and articles based on your readings.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">It helps bloggers to have more visibility. For example isolated blog published on Wordpress sometimes can’t have the same amount of views. So Medium helps writer to have more visibility.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">One of the biggest database of peerreviewed journals and articles. It is very reliable, the sources are credible.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">The sources are reliable and credible. The magazine is very popular and well known.</p></div>

    <div class="grid-item-competitor"><p class="p-persona"><strong>Weaknesses</strong></p></div>
    <div class="grid-item-competitor"><p class="p-persona">It just saves the articles, it does not help with other features like organising bookmarks etc. Sometimes the original article formatting is a little wobbly. The sources are not clear since it helps you to save the articles.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">For the readers it is less convenient. In fact, you need to pay to have full access on all the articles. It is not a journalistic enterprise, the articles are just unverified opinions of the authors but it is very clear.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">They only offer to view the abstract for free. You need to pay to see the full article.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">Their focus it is not based on the latest news or discoveries.</p></div>

    <div class="grid-item-competitor"><p class="p-persona"><strong>Opportunities</strong></p></div>
    <div class="grid-item-competitor"><p class="p-persona">It saves a lot of time, the recommendations are very important as a feature, and it represent something new for an article gathering website.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">It gives opportunities to writers to have a chance to do achieve their dream job.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">Scopus cover a very huge part of research in the world, so it is easy to find a lot of papers and journals that you can miss on other databases.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">It is for people of all ages and it is directed to a general audience so the language it is very approachable even if they are offering science articles.</p></div>

    <div class="grid-item-competitor"><p class="p-persona"><strong>Threats</strong></p></div>
    <div class="grid-item-competitor"><p class="p-persona">The users can select the articles they want from other sources, so it is a little complicated to figure out if a source is reliable or not, and Pocket does not include this feature. It just helps you save articles to read later and suggests you new stories and articles based on your preferences.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">It is an amazing website for writers but has less opportunity for readers. So websites that are more focused on readers may be more intriguing for people and Medium can just attract writers and for this reason it creates just a community of writers.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">It is one of the oldest and largest databases of peerreviewed journals so it is hard for competitors to match the reliability of the sources and the amount of it as well.</p></div>
    <div class="grid-item-competitor"><p class="p-persona">Since it is for the general audience it can attract a lot of viewers and readers that may find other sites too difficult to consult.</p></div>
</div>
<h3 class="proj-sub">Define</h3>
<p>After empathising with users, it’s important to <strong>define the key problems</strong> identified in the first step. For <strong>e-commerce websites</strong>, issues often occur <strong>during payment or the initial product search</strong>, with pain points arising in the consideration and acquisition stages. Similarly, for <strong>informative websites</strong>, difficulties are found when users <strong>search for the right site or navigate a new interface</strong>.</p>
<p>Understanding these challenges will guide the development process and address <strong>real user needs</strong> in the next design phase.</p>
<h3 h3 class="proj-sub">Ideate</h3>
<p>For this step, <strong>flow charts</strong> and the <strong>UI design</strong> were developed.</p>
<h3 class="proj-sub">User flow</h3>
<img src="images/dtuserflowecom.png" alt="userflowecom">
            <p>Design Thinking user flow for e-commerce</p><br><br>
<img src="images/dtuserflowinfo.png" alt="userflowinfo">
            <p>Design Thinking user flow for informative</p>
            <h3 h3 class="proj-sub">UI Design</h3>
            <img src="images/uidiss.png" alt="uidesigndiss">
            <h3 h3 class="proj-sub">Prototype</h3>
            <p>In the fourth step, <strong>two high-fidelity prototypes</strong> were developed using Figma. One for the <strong>E-commerce</strong> and the other for the <strong>Informative</strong> website, regarding the Design Thinking method.</p>
            <p>Prototypes will be used in the fifth and final step when users will interact with them during the evaluation.</p>
<h3 class="proj-sub">Human-centred design methodology</h3>
<div class="color-box">
                <p>Human-Centered Design focuses on <strong>Inspiration</strong>, <strong>Ideation</strong>, and <strong>Implementation</strong>.</p>
            </div>
            <h3 h3 class="proj-sub">Inspiration</h3>
            <p>Since both methods are very similar and they both use the same techniques, for this project, it was underlined the difference between a method that is <strong>more focused on designers</strong>, like <strong>Design Thinking</strong>, and another that is focused <strong>completely on the users’ needs</strong>. For this reason, to start to empathise with users, for the first step of the Human centred methodology, <strong>participants were asked to share their stories</strong>. Personas, scenarios and customer journeys were drawn after collecting users’ stories.</p>
            <br><img src="images/hcdcustomjourecom.png" alt="customerjourneyhcdecom">
            <p>HCD customer journey for e-commerce</p><br><br>
<img src="images/hcdcustomjourinfo.png" alt="customerjourneyhcdinfo">
            <p>HCD customer journey for informative</p>
            <h3 h3 class="proj-sub">Ideation</h3>
            <p>First, <strong>user flow charts</strong> were developed. Flow charts are very useful to help designers to envision the technology of the product better.</p>
            <p>After that, a design language was developed for both websites.</p>
<p>In fact, after empathising with users through personas, scenarios and customer journeys, and after, defining the problems, the flow charts can help to understand all the steps necessary to achieve the desired goal from a technical perspective.</p>
<h3 h3 class="proj-sub">User flow</h3>
<br><img src="images/hcdflowecom.png" alt="flowchartecom">
            <p>HCD user flow for e-commerce</p><br><br>
<img src="images/hcdflowinfo.png" alt="flowchartinfo">
            <p>HCD user flow for informative</p>
            <h3 h3 class="proj-sub">UI Design</h3>
            <img src="images/uidiss2.png" alt="uidesigndiss2">
            <h3 h3 class="proj-sub">Implementation</h3>
<p>In this part, like in the Design Thinking method, <strong>interactive prototypes were developed</strong>. One for the E-commerce, and another one for the informative.</p>

        </div>
    </section>

    <section id="evaluation">
        <h2 class="proj-title">Evaluation</h2>
        <div class="findings-con">
        <h2 class="fin-title">For the Design Thinking method it was considered:</h2>
        <ul>
            <li><p>A cognitive walk-through with the expert.</p></li>
            <li><p>A cooperative evaluation, in form of interviews with participants.</p></li>
            <li><p>A design evaluation with the expert.</p></li>
        </ul>

        <h2 class="fin-title">For the HCD method it was considered:</h2>
        <ul>
            <li><p>A cognitive walk-through with the expert.</p></li>
            <li><p>A cooperative evaluation, in form of interviews with participants.</p></li>
            <li><p>A design evaluation with the users.</p></li>
        </ul>
    </div>
    <div class="square">
            The key difference was <strong>submitting the design to users in HCD</strong>, rather than experts as in Design Thinking. This reflects the distinct nature of the sites being developed. <strong>Design Thinking focuses on creating user-friendly, stylish designs</strong>, regardless of site type, <strong>while HCD prioritizes deeply understanding the specific target audience’s needs</strong>. The goal shifted from developing new guidelines to understanding the core aims of these user-centered methods.
        </div>
        <p>The interactive prototypes used for the evaluation:</p>
        <img src="images/ecommerce.png" alt="ecommerce"><br><br>
        <img src="images/informative.png" alt="informative">
    </section>

    <section id="findings">
        <h2 class="proj-title">Findings</h2>
        <div class="color-box"><p>The findings show that <strong>Design Thinking focuses more on the designer's perspective</strong>, helping create user-friendly, stylish websites by analyzing market trends and competitors. <strong>HCD, on the other hand, prioritizes users</strong>, building designs based on specific audience needs through interviews and user feedback.</p>
        <p>The research concluded that <strong>HCD is more effective for e-commerce websites</strong>, as it better meets user needs. <strong>For informative websites, a blend of both methods works best</strong>, combining HCD’s reliability with Design Thinking’s aesthetic clarity.</p>
</div>
</section>
    
<section id="development">
        <h2 class="proj-title">Development</h2>
        <p>For the development of both of the websites, the tools used were, <strong>Visual Studio Code</strong> as the editor, and it was build only the front-end part, using <strong>HTML</strong>, <strong>CSS</strong>, <strong>PHP</strong> and <strong>Bootstrap</strong>, with hard-coded data to mimic links to the pages.</p>
        <p>An example of the code, using <strong>php</strong> to include pages, and to create links:</p>
        <img src="images/womanphp.png" alt="womanphp">
</section>

    <section id="conclusion">
        <h2 class="proj-title">Conclusion</h2>
        <p>Through the comparison of the two methodologies, it became clear that while <strong>both are complementary</strong>, their application in different contexts highlights distinct advantages.</p>
    </section>
    </div>
 </section>
 <footer>
        <p>&copy; 2024 Chiara Venanzetti - UX/UI Designer and Frontend developer</p>
    </footer>
</div>
</section>
</body>
</html>


