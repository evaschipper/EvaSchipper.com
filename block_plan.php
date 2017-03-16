<?php include("header.php"); ?>

<main>
 <link rel="stylesheet" href="css/casestyle.css">
    <div id="hero">
        <div></div>
        <img src="images/block-screen-showcase.jpg">
        
    </div>
    
    <div id=titles>
    <h1>The Block Plan</h1>
    <p id="subtitle">Centralizing academic information for students at Quest University Canada</p>
    </div>
    
    <div id="content">
        <div class="contentcontainer">
            <h2>Problem</h2>
            <p>Academic information and announcements at Quest University Canada are delivered through several separate channels, which prevents students from having a comprehensive overview of their current academic status, their future plans, and changes that will affect their trajectory. The decentralized approach makes gathering information needlessly difficult and its structure hinders students’ ability to make informed decisions about their academics.</p>
        </div>
        
        <div class="contentcontainer">
            <h2>Goal</h2>
            <p>Design an app that streamlines the academic planning process for students by centralizing academic information and offering tools that help with the planning process.</p>
        </div>
        
        <div class="contenttable">
            <div class="contentcontainer">
                <h3>Responsible for</h3>
                <p>Ideation, user testing, UX, UI, prototyping</p>
            </div>
            <div class="contentcontainer">
                <h3>Tools</h3>
                <p>Adobe CS, paper prototypes, inVision, Flinto</p>
            </div>
        </div>

    <div class="divider"></div>
     
        
    <div class="contentcontainer">   
        <h2>Ideation and Research</h2>
    </div>
    
        
    <div class="contenttable">
        
        <div class="contentcontainer thirty">
            <h3>Identifying the Problem</h3>
            <p>The initial task was to design a solution for a problem specific to Quest. I drew on casual interviews and my own experience to discover pain points, wishes, and concerns of students living on campus. Through card sorting, I identified problems or systems that were suitable for the scope of this project (labeled with a red dot). I looked for relationships between  suitable ideas and discovered pain points around the task of selecting and registering for courses (blue boxes).
            </p>
        </div>
          <div class="contentcontainer sixty">
                <img src="images/cardsort-1.png">
            </div>
    </div>
        
    <div class="contentcontainer">
        <img class="fullwidth" src="images/cardsort-3.jpg">
    </div>
        
    <div class="contentcontainer">
        <img class="fullwidth" src="images/cardsort-2.jpg">
    </div>
        
    <div class="contentcontainer">
            <h3>Narrowing Scope &amp; Identifying User Needs</h3>
            <p>I used a combination of interviews and cardsorting to narrow the scope of my problem and identify the needs of Quest students in that area. I focused on features that centralize information and help with planning rather than integrating existing systems for registration, scheduling, and data collection - integration with existing software is beyond the scope of this project.</p>
    </div>
        <div class="contentcontainer">
            <h4>Needs:</h4>
            <ul>
                <li>Students need a better way to browse courses than the system Quest currently uses</li>
                <li>Students need to be able to keep track of their progress as they fulfill their degree requirements</li>
                <li>Students want to find and connect with teachers who have done research in their area of interest</li>
            </ul>
            
            <h4>Features:</h4>
            <ul>
                <li>Searchable course information database</li>
                <li>Degree requirement checklist</li>
                <li>Wishlist for interesting classes</li>
                <li>Searchable faculty database</li>
            </ul>
        </div>
        
            <div class="divider"></div>
        
        <div class="contentcontainer">
        <h2>Prototyping &amp; Testing</h2>
            <p>Because the content is information-heavy, I focused on ease of navigation and the use of familiar interactions to reduce cognitive load for users. Through paper prototypes and user testing, I discovered  a few key insights that informed the final design of the app.</p>
        </div>
        
    <div class="contenttable">
        <div class="contentcontainer sixty">
            <img class="fullwidth" src="images/crazy8.jpg">
        </div>
          <div class="contentcontainer thirty">
              <p>I used crazy 8’s to brainstorm possible layouts and interactions for the course and tutor lists. A grid or masonry layout is familiar but can be overwhelming when content is less visual and more information-heavy. I chose a simple vertical list with the a swipe-for-options pattern which is familiar to both Android and iPhone users.</p>
            </div>
    </div>
        
     <div class="contentcontainer">
        <img class="fullwidth" src="images/usertesting-1.JPG">
    </div> 
        
    <div class="contentcontainer">
        <h2>Outcome 1 : Simplifying Onboarding </h2>
    </div>
        
    <div class="contentcontainer">
        <h3>1st Iteration</h3>
        <p>The onboarding system takes users through all of the instructions, then all of the required onboarding tasks. Users have difficulty remembering instructions when they reach onboarding tasks but cannot return to instructions without visiting every screen between.</p>
        <div class="contentcontainer placeholder fullwidth"></div>
    </div>
        
    <div class="contentcontainer">
        <h3>2nd Iteration </h3>
        <p>Instructions are presented as card overlays, but users are still occasionally confused about what to do and do not know how to re-access the instructions. With an overlay, users are more likely to breeze through instructions without paying attention.</p>
        <div class="contentcontainer placeholder fullwidth"></div>
    </div>
        
    <div class="contentcontainer">
        <h3>3rd Iteration </h3>
        <p>By pairing instructional pages with their tasks and offering a back button to the relevant instructions, users give the instructions the attention they require, are less likely to forget instructions, and are able to re-access instructions if necessary.</p>
        <div class="contentcontainer placeholder fullwidth"></div>
    </div>
        
    <div class="divider"></div>
     <div class="contentcontainer">
        <h2>Outcome 2 : Home Page </h2>
        <p>After onboarding or logging in, users were directed to the ‘browse courses’ page which created an unintentional hierarchy of tools or features. In testing, users interpreted this as the most important or only tool available in the app because it was the first thing they were directed to. Users also reported that the lack of home page was unexpected. I went back through my notes and re-discovered the insight that students rarely check or read emails about courses on the school’s Webmail system, so I created a home page where the administration could post announcements, deadlines, and course information.</p>
    </div>
        
     <div class="contentcontainer">
        <h3>1st Iteration </h3>
        <div class="contentcontainer placeholder fullwidth"></div>
    </div>
        
    <div class="contentcontainer">
        <h3>2nd Iteration </h3>
        <div class="contentcontainer placeholder fullwidth"></div>
    </div>
        
    <div class="divider"></div>
        
    <div class="contentcontainer">
        <h2>Outcome 3 : Navigation </h2>
        <p>In the first iteration, the tab bar gave access to courses, teachers, the checklist, and information. There were two outcomes from testing: users did not find the information page useful, and users did not discover the wishlist because it was only accessible from the checklist tab. Adjusting the navigation made all tools equally available to the user from anywhere in the app.</p>
    </div>
    <div class="contentcontainer">
        <h3>1st Iteration </h3>
        <div class="contentcontainer placeholder fullwidth"></div>
    </div>
        
    <div class="contentcontainer">
        <h3>2nd Iteration </h3>
        <div class="contentcontainer placeholder fullwidth"></div>
    </div>
        
    <div class="divider"></div>

    <div class="contentcontainer">
        <h2>What I Learned </h2>
        <ol>
            <li>How you organize information is important, and users will make assumptions about the value of features
based on how accessible they are.</li>
            <li>Testing a prototype on a mobile device reveals user habits and interactions that aren’t available during
paper prototyping, like reactions to micro-interactions.</li>
            <li>Spending more time on paper prototyping and ideation helps speed the visual design process later on.</li> 
        <ol>
    </div>
        
        
        
        
        
        
        
    </div>
    
    
    </div>

</main>

</body>
</html>