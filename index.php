<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Sunny Lenz Portfolio</title>
</head>

<body>
    <div class="container navbar">
        <header>
            <div class="lgo">
                <h1>Sunny Lenz</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#about">about me</a></li>
                    <li><a href="#skills">skills</a></li>
                    <li><a href="#work">my work</a></li>
                </ul>
            </nav>
        </header>
    </div>

    <div class="container main-info-section">
        <div class="text">
            <h1>
                <span>H</span>
                <span class="m-left">i</span>
                <span class="m-left">,</span>
                <br>
                <span>I</span>
                <span class="m-left">'</span>
                <span class="m-left">m</span>
                <span class="name">S</span>
                <span class="m-left name">u</span>
                <span class="m-left name">n</span>
                <span class="m-left name">n</span>
                <span class="m-left name">y</span>
                <span class="m-left name">L</span>
                <span class="m-left name">e</span>
                <span class="m-left name">n</span>
                <span class="m-left name">z</span>
                <span class="m-left name">,</span>
                <br>
                <span>W</span>
                <span class="m-left">e</span>
                <span class="m-left">b</span>
                <span>D</span>
                <span class="m-left">e</span>
                <span class="m-left">v</span>
                <span class="m-left">e</span>
                <span class="m-left">l</span>
                <span class="m-left">o</span>
                <span class="m-left">p</span>
                <span class="m-left">e</span>
                <span class="m-left">r</span>
                <span class="m-left">.</span>
                
            </h1>
            <p>CSS / JavaScript / Flutter</p>
            <a href="#contact">contact me</a>
        </div>
        <div class="profile-image">
            <img src="img/sunnylenz6.JPG." alt="SunnyLenz">
        </div>
    </div>


    <div class="container about" id="about">
        <h1>About</h1>
        <div class="about-me-info">
            <p>
                I am Sunny Lenz, Chaplains SSA, Chapels Camera-man, Mums and Siblings favorite, Tech lover, 
                Music lover, Web developer, Flutter developer and Beauty addict. I am currently an undergraduate at Imo State 
                University Owerri, department of computer Science to be precise.
            </p>
            <p>
                As a kid, i hated being poor and everything about my life has revolved around eliminating poverty. i believe that people are people 
                through people and that the renoun that beauty confers is fleeting and frail, mental excellence is a lasting possession.
                guide me therefore oh thou great Jehovah as i pilgrim through this barren land...May i find peace, love and joy...
            </p>
        </div>
        <img src="img/Screenshot (6).png" alt="">
    </div>

    <div class="container skills" id="skills">
        <h1>Skills</h1>
        <p class="skills-info">an intangible impulse of thought can be transmitted into its physical equivalence or counterpart
            i believe that people are people 
                through people and that the renoun that beauty confers is fleeting and frail, mental excellence is a lasting possession.
                guide me therefore oh thou great Jehovah as i pilgrim through this barren land...May i find peace, love and joy...
        </p>

        <div class="html">
            <div class="tag-html">
                <p>HTML</p>
            </div>
            <div class="progressbar">
                <div class="bar-html"></div>
            </div>
        </div>

        <div class="html">
            <div class="tag-html">
                <p>CSS</p>
            </div>
            <div class="progressbar">
                <div class="bar-html"></div>
            </div>
        </div>

        <div class="html">
            <div class="tag-css">
                <p>JavaScript</p>
            </div>
            <div class="progressbar">
                <div class="bar-css"></div>
            </div>
        </div>

        <div class="html">
            <div class="tag-javascript">
                <p>Flutter</p>
            </div>
            <div class="progressbar">
                <div class="bar-javascript"></div>
            </div>
        </div>

        <div class="html">
            <div class="tag-flutter">
                <p>Java</p>
            </div>
            <div class="progressbar">
                <div class="bar-flutter"></div>
            </div>
        </div>


    </div>


    <div class="container work" id="work">
        <h1>Work</h1>
        <div class="work-category">
            <button id="designing" class="active">Web Designing</button>
            <button id="animation">Web Animation</button>
            <button id="project">Flutter Projects</button>
        </div>
        <div class="category-designing showCategory">
            <a href=""><img src="img/Screenshot (1).png"></a>
            <a href=""><img src="img/Screenshot (7).png"></a>
            <a href=""><img src="img/Screenshot (8).png"></a>
            <a href=""><img src="img/Screenshot (6).png"></a>
            <a href=""><img src="img/Screenshot (9).png"></a>
        </div>

        <div class="category-designing hideCategory">
            <a href=""><img src="img/Screenshot (1).png"></a>
            <a href=""><img src="img/Screenshot (7).png"></a>
            <a href=""><img src="img/Screenshot (8).png"></a>
        </div>

        <div class="category-designing hideCategory">
            <a href=""><img src="img/Screenshot (1).png"></a>
            <a href=""><img src="img/Screenshot (7).png"></a>
            <a href=""><img src="img/Screenshot (8).png"></a>
            <a href=""><img src="img/Screenshot (6).png"></a>
        </div>


    </div>


    <div class="container contact" id="contact">
        <h1>Contact</h1>
        <form action="">
            <input type="text" name ="name" placeholder="Full Name">
            <input type="email" placeholder="Email">
            <input type="email" placeholder="PortfolioPersonaemail@example.com" disabled>
            <textarea name="message" cols="30" rows="10" placeholder="message"></textarea>
            <input type="submit">
        </form>
    </div>

    <footer>
        <hr>
        <p>2019 Copyright. All Rights Reserved</p>
    </footer>

</body>

</html>