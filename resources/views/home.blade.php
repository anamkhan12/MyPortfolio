<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Portfolio</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="site-main-wrapper">
        <button class="hamberger">
            <img src="./images/menu.png" alt="">
        </button>
        <div class="mobile-nav">
            <button type="button" class="close">  <img src="./images/close.png" alt=""></button>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#service">Service</a></li>
                <li><a href="#project">Projects</a></li>
                <li><a href="#blog">Blog</a></li>
                <li> <button class="btn btn-primary open-button"><a href="#contact">Contact</a></button></li>
            </ul>

        </div>
        <header>
            <div class="container">
                <nav id="main-nav" class="flex items-center justify-between">
                    <div class="left flex items-center">
                        <div class="branding">
                            <img src=".i/images/coderprofile.png" alt="">
                        </div>
                        <div class="heading-div">
                            <a href="#home">Home</a>
                            <a href="#about">About</a>
                            <a href="#service">Service</a>
                            <a href="#project">Projects</a>
                            <a href="#blog">Blog</a>
                        </div>
                    </div>
                    <div class="right">
                        <button class="btn btn-primary"><a href="#contact">Contact</a></button>
                    </div>
                </nav>
                <div class="firstpage flex items-center justify-between">
                    <div class="left  flex flex-1 justify-center">
                        <img class="home-img" src="/images/girlcode.svg" alt="">
                        <!-- <img src="/images/coderprofile.png" alt=""> -->
                    </div>
                    <div class="right">
                        <h4>Anam Khan</h4>
                        <h1>I'm a Software <span> Developer</span></h1>
                        <p>I design,develop and code beautifully simple things, and I love what I do.I am passionate about building excellent software that improves the lives of those around me.</p>
                        <div>
                        <!-- I want to make things that make a difference.  -->
                            <!--<button class="btn btn-secondary resumebtn" href="{{url('download/mycv')}}">Download Resume</button> -->
                            <a class="btn btn-secondary btn-a-tag" id="resumebtn" href="{{url('download/mycv')}}">Download Resume</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <section id="about" class="about">
            <div class="container flex items-center about-inner-wrap">
                <div class="flex-1">
                    <img class="about-me-img" src="images/proud_coder.png" alt="">
                </div>
                <div class="flex-1 txt-right">
                    <h1>About <span>Me</span></h1>
                    <h3>Hello World , I am Anam Khan</h3>
                    <p> I’m a Senior Frontend Developer currently working remotely out of Kolkata, WestBengal.! I've spent the last 8 years as a professional web developer where I specialize in transforming beautiful designs into
                        full-fledged interactive web applications for various clients all around the world.<br><br>My job involves doing what I love, developing new websites and  applications. </p>
                    <div class="social">
                        <a href="https://www.linkedin.com/in/anam-khan-a13588178/" target=_blank><img src="images/linkedin.png" alt=""></a>
                        <a href="http://in.youtube.com/" target=_blank><img src="images/youtube.png" alt=""></a>
                        <a href="#"><img src="images/instagram.png" alt=""></a>
                        <a href="#"><img src="images/twittersmall.png" alt=""></a>
                        <a href="#"><img src="images/facebook.png" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
        <section id="service" class="services">
            <div class="container">
                <h1 class="section-heading">My <span>Skillset</span></h1>
                <!-- <p>dhgefbjnkod8hf7gyvunijdhuhgftdwvgchbuhdgyfdhbjcbhjwdhucgydhbj wdugcyvu</p> -->
                <h2>Technical Skills:</h2>
                <div class="card-wrapper">
                    <div class="non-card" >
                        <img class="skill-img ah" src="images/html-logo.svg" alt="">
                    </div>
                    <div class="non-card">
                        <img class="skill-img" src="images/jquery-logo.svg" alt="">
                    </div>
                    <div class="non-card">
                        <img class="skill-img" src="images/aws-logo.svg" alt="">
                    </div>
                    <div class="non-card">
                        <img class="skill-img" src="images/javascript-logo.svg" alt="">
                    </div>
                    <div class="non-card">
                        <img class="skill-img" src="images/git-logo.svg" alt="">
                    </div>
                    <div class="non-card">
                        <img class="skill-img" src="images/php-logo.svg" alt="">
                    </div>
                    <div class="non-card">
                        <img class="skill-img" src="images/mysql-logo.svg" alt="">
                    </div>
                    <div class="non-card">
                        <img class="skill-img" src="images/django-logo.svg" alt="">
                    </div>
                    <div class="non-card">
                        <img class="skill-img" src="images/codeigniter-logo.svg" alt="">
                    </div>
                    <div class="non-card">
                        <img class="skill-img" src="images/restapi-logo.svg" alt="">
                    </div>
                    <div class="non-card">
                        <img class="skill-img" src="images/python-logo.svg" alt="">
                    </div>
                    <div class="non-card">
                        <img class="skill-img" src="images/sql-logo.svg" alt="">
                    </div>
                    <div class="non-card" >
                        <img class="skill-img" src="images/css-logo.svg" alt="">
                    </div>
                    <div class="non-card">
                        <img class="skill-img" src="images/vue-logo.svg" alt="">
                    </div>
                    <div class="non-card">
                        <img class="skill-img" src="images/laravel-logo.svg" alt="">
                    </div>
                </div>
                 <h2  class="soft-skills-p">Soft Skills:</h2><p >Critical Thinking, Effective Communication, Problem Solving</p>
                <!-- <div class="card-wrapper">
                    <div class="non-card">
                        <img src="images/youtube.png" alt="">
                        <h2>Graphic Design </h2>
                        <p>uwndwujvijfjeiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiifvjiej eufjhiejfijeij jecike</p>
                    </div>
                    <div class="card">
                        <img src="images/youtube.png" alt="">
                        <h2>Graphic Design </h2>
                        <p>uwndwujvijfjeiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiifvjiej eufjhiejfijeij jecike</p>
                    </div>
                    <div class="caurd">
                        <img src="images/youtube.png" alt="">
                        <h2>Graphic Design </h2>
                        <p>uwndwujvijfjeiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiifvjiej eufjhiejfijeij jecike</p>
                    </div>
                    <div class="cajrd">
                        <img src="images/youtube.png" alt="">
                        <h2>Graphic Design </h2>
                        <p>uwndwujvijfjeiii iiiiiiiiiiiiiiiiiiiiiiiiiiiifvjiej eufjhiejfijeij jecike</p>
                    </div>
                    <div class="cahud">
                        <img src="images/youtube.png" alt="">
                        <h2>Graphic Design </h2>
                        <p>uwndwujvijfjeiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiifvjiej eufjhiejfijeij jecike</p>
                    </div>
                    <div class="cajud">
                        <img src="images/youtube.png" alt="">
                        <h2>Graphic Design </h2>
                        <p>uwndwujvijfjeiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiifvjiej eufjhiejfijeij jecike</p>
                    </div>
                </div> -->
            </div>
        </section>
        <!-- <section id="service" class="services">
            <div class="container">
                <h1 class="section-heading">My <span>Skillset</span></h1>
                <p>dhgefbjnkod8hf7gyvunijdhuhgftdwvgchbuhdgyfdhbjcbhjwdhucgydhbj wdugcyvu</p>
                <div class="card-wrapper">
                    <div class="card" >
                        <img src="images/youtube.png" alt="">
                        <h2>Graphic Design </h2>
                        <p>uwndwujvijfjeiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiifvjiej eufjhiejfijeij jecike</p>
                    </div>
                    <div class="card">
                        <img src="images/youtube.png" alt="">
                        <h2>Graphic Design </h2>
                        <p>uwndwujvijfjeiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiifvjiej eufjhiejfijeij jecike</p>
                    </div>
                    <div class="card">
                        <img src="images/youtube.png" alt="">
                        <h2>Graphic Design </h2>
                        <p>uwndwujvijfjeiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiifvjiej eufjhiejfijeij jecike</p>
                    </div>
                    <div class="card">
                        <img src="images/youtube.png" alt="">
                        <h2>Graphic Design </h2>
                        <p>uwndwujvijfjeiii iiiiiiiiiiiiiiiiiiiiiiiiiiiifvjiej eufjhiejfijeij jecike</p>
                    </div>
                    <div class="card">
                        <img src="images/youtube.png" alt="">
                        <h2>Graphic Design </h2>
                        <p>uwndwujvijfjeiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiifvjiej eufjhiejfijeij jecike</p>
                    </div>
                    <div class="card">
                        <img src="images/youtube.png" alt="">
                        <h2>Graphic Design </h2>
                        <p>uwndwujvijfjeiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiifvjiej eufjhiejfijeij jecike</p>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="freelancer">
            <!-- <h1>I am Available for Freelancing</h1>
            <p>I can provide hight standard for business solution</p>
            <p><a href="#contact" >Let's make something special.</a></p> -->
            <h1>I occasionally take on freelance opportunities. </h1>
            <p>Have an exciting project where you need some help? Send me over a mail, <a href="#contact" >and let's chat..</a></p>
            <button class="btn btn-primary"> <a href="{{url('download/mycv')}}" class="btn-a-tag">Download Resume</a></button>
            <!-- <a class="btn btn-secondary btn-a-tag" id="resumebtn" href="{{url('download/mycv')}}">Download Resume</a> -->
        </section>
        <section class="reviews">
            <div class="container">
                <h1 class="section-heading">Our <span>Client</span></h1>
                <p>we jir irn nvf mfjef fcjefiieijeigfejf jfievikejife efcijejf iejfiedvjirjg kdpefkojv.</p>
                <div class="slider">
                    <div class="slide">
                        <img src="/images/lady.png" alt="">
                        <p>A paragraph is a series of related sentences developing a central idea, called the topic. Try to think about paragraphs in terms of thematic unity: a paragraph is a sentence or a group of sentences that supports one central.</p>
                        <span>Ewasrds ,ABC DS</span>
                    </div>
                    <div class="slide">
                        <img src="/images/lady.png" alt="">
                        <p>A paragraph is a series of related sentences developing a central idea, called the topic. Try to think about paragraphs in terms of thematic unity: a paragraph is a sentence or a group of sentences that supports one central.</p>
                        <span>Ewasrds ,ABC DS</span>
                    </div>
                    <div class="slide">
                        <img src="/images/lady.png" alt="">
                        <p>A paragraph is a series of related sentences developing a central idea, called the topic. Try to think about paragraphs in terms of thematic unity: a paragraph is a sentence or a group of sentences that supports one central.</p>
                        <span>Ewasrds ,ABC DS</span>
                    </div>
                    <div class="slide">
                        <img src="/images/lady.png" alt="">
                        <p>A paragraph is a series of related sentences developing a central idea, called the topic. Try to think about paragraphs in terms of thematic unity: a paragraph is a sentence or a group of sentences that supports one central.</p>
                        <span>-Ewasrds ,ABC DS</span>
                    </div>
                </div>
                <div class="slider-dots"></div>
            </div>
        </section>
        <section id="project" class="work">
            <div class="container">
                <h1 class="section-heading">Our <span>Work</span></h1>
                <p>Here are a few projects I've worked on recently.</p>
                <div class="card-wrapper">
                    <div class="card">
                        <div class="overlay">
                            <span>Category</span>
                            <a href="">Web Development</a>
                        </div>
                        <img src="/images/html-logo.svg" alt="">
                    </div>
                    <div class="card">
                        <div class="overlay">
                            <span>Category</span>
                            <a href="">Web Development</a>
                        </div>
                        <img src="/images/work.png" alt="">
                    </div>
                    <div class="card">
                        <div class="overlay">
                            <span>Category</span>
                            <a href="">Web Development</a>
                        </div>
                        <img src="/images/work.png" alt="">
                    </div>
                    <div class="card">
                        <div class="overlay">
                            <span>Category</span>
                            <a href="">Web Development</a>
                        </div>
                        <img src="/images/work.png" alt="">
                    </div>
                    <div class="card">
                        <div class="overlay">
                            <span>Category</span>
                            <a href="">Web Development</a>
                        </div>
                        <img src="/images/work.png" alt="">
                    </div>
                    <div class="card">
                        <div class="overlay">
                            <span>Category</span>
                            <a href="">Web Development</a>
                        </div>
                        <img src="/images/work.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- <section id="project" class="work">
            <div class="container">
                <h1 class="section-heading">Our <span>Work</span></h1>
                <p>A paragraph is a series of related sentences developing a central idea, called the topic.</p>
                <div class="card-wrapper">
                    <div class="card">
                        <div class="overlay">
                            <span>Category</span>
                            <a href="">Web Development</a>
                        </div>
                        <img src="/images/html-logo.svg" alt="">
                    </div>
                    <div class="card">
                        <div class="overlay">
                            <span>Category</span>
                            <a href="">Web Development</a>
                        </div>
                        <img src="/images/work.png" alt="">
                    </div>
                    <div class="card">
                        <div class="overlay">
                            <span>Category</span>
                            <a href="">Web Development</a>
                        </div>
                        <img src="/images/work.png" alt="">
                    </div>
                    <div class="card">
                        <div class="overlay">
                            <span>Category</span>
                            <a href="">Web Development</a>
                        </div>
                        <img src="/images/work.png" alt="">
                    </div>
                    <div class="card">
                        <div class="overlay">
                            <span>Category</span>
                            <a href="">Web Development</a>
                        </div>
                        <img src="/images/work.png" alt="">
                    </div>
                    <div class="card">
                        <div class="overlay">
                            <span>Category</span>
                            <a href="">Web Development</a>
                        </div>
                        <img src="/images/work.png" alt="">
                    </div>
                </div>
            </div>
        </section> -->
        <section id="blog" class="blog">
            <div class="container">
                <h1 class="section-heading">Our <span>Blog</span></h1>
                <p>we ujrjjjr nvirjfirjf nvikjfi jdwijdijw ijfijeiuhfgbvu jvoeojvorogrn njvriov.</p>
                <div class="card-wrapper">
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="/images/js.png" alt="">
                        </div>
                        <div class="card-content">
                            <a href="#">
                                <h1>GYHUTF ojeij hiveinhvn</h1>
                            </a>
                            <span>May 78 1997</span>
                            <p>A cat is a domestic animal but there are wild cats too. Cats are found in various colours. The eyes of the cat which are of gray colour shine at night.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="/images/instagram.png" alt="">
                        </div>
                        <div class="card-content">
                            <a href="#">
                                <h1>GYHUTF ojeij hiveinhvn</h1>
                            </a>
                            <span>May 78 1997</span>
                            <p>A cat is a domestic animal but there are wild cats too. Cats are found in various colours. The eyes of the cat which are of gray colour shine at night.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="/images/leetcode.png" alt="">
                        </div>
                        <div class="card-content">
                            <a href="#">
                                <h1>GYHUTF ojeij hiveinhvn</h1>
                            </a>
                            <span>May 78 1997</span>
                            <p>A cat is a domestic animal but there are wild cats too. Cats are found in various colours. The eyes of the cat which are of gray colour shine at night.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="contact">
            <div class="container">
                <h1 class="section-heading">Contact <span>Us</span></h1>
                <p>We provide high jehue dfji njfen fhuh buhrh njfdhvhu inirjirg jirjijgrv.</p>
                <div class="card-wrapper">
                    <div class="card">
                        <img src="./images/facebook.png" alt="">
                        <h1>Call On Us</h1>
                        <h6>+968 845 6455</h6>
                    </div>
                    <div class="card">
                        <img src="./images/youtube.png" alt="">
                        <h1>Visit Office</h1>
                        <h6>+968 845 6455</h6>
                    </div>
                    <div class="card">
                        <img src="./images/linkedin.png" alt="">
                        <h1>Email Us At</h1>
                        <h6>support@gmail.com</h6>
                    </div>
                </div>
                <span class="errormsg" id="error" style="display:none"></span> 
                <span class="successmsg" id="success" style="display:none"></span> 
                <form method="post" id="sendmail">
                    {{csrf_field()}}
                    <div class="input-wrap">
                        <input type="text" name="name" id="name" placeholder="Your Name" required>
                        <input type="email" name="email"  id="email" placeholder="Your Email" required>
                    </div>
                    <div class="input-wrap-2">
                        <input type="text" name="subject"  id="subject" placeholder="Your Subject" required>
                        <textarea name="message" cols="30" id="textmessage" rows="10" placeholder="Your message. . . " required></textarea>
                    </div>
                    <div class="btn-wrapper ">
                        <button class="btn btn-primary" type="submit" >Send Message</button>
                    </div>
                </form>
            </div>
        </section>
        <footer>
            <img class="footer-logo " src="/images/instagram.png " alt=" ">
            <div class="footer-socials ">
                <a href="# "></a><img src="/images/instagram.png " alt=" "></a>
                <a href="# "></a><img src="/images/instagram.png " alt=" "></a>
                <a href="# "></a><img src="/images/facebook.png " alt=" "></a>
                <a href="# " id="github "></a><img src="/images/linkedin.png " alt=" "></a>
            </div>
            <div class="copyright ">CopyRight Anam 2021 </div>
        </footer>

    </div>
    <script type="text/javascript " src="//code.jquery.com/jquery-1.11.0.min.js "></script>
    <script type="text/javascript " src="//code.jquery.com/jquery-migrate-1.2.1.min.js "></script>
    <!-- <script type="text/javascript " src="slick/slick.min.js "></script> -->
    <script type="text/javascript " src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js "></script>
    <script type="text/javascript " src="js/apps.js "></script>
</body>

</html>

<!-- <script>


resumebtn
</script> -->