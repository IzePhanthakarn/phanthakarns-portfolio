<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phanthakarn's Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <link rel="icon" type="image/png" href="assets/iconMainS.png" />

</head>

<body>
    <div class="scroll-up-btn" onclick="window.location.href='#home'">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="" onclick="window.location.reload(true);">Ize<span>Phanthakarn</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn" data-after="Home">Home</a></li>
                <li><a href="#about" class="menu-btn" data-after="About">About</a></li>
                <li><a href="#experience" class="menu-btn" data-after="Experience">Experience</a></li>
                <li><a href="#skills" class="menu-btn" data-after="Skills">Skills</a></li>
                <li><a href="#projects" class="menu-btn" data-after="Projects">Projects</a></li>
                <li><a href="#contact" class="menu-btn" data-after="Contact">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <div class="hamburger">
                    <div class="burger"></div>
                </div>
            </div>
        </div>
    </nav>
    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Phanthakarn Khumphai</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
                <button onclick="window.location.href='#contact'">Hire me<span></span></button>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="assets/itsme01.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Phanthakarn and I'm a <span class="typing-2"></span></div>
                    <p>Hello! my name is Phanthakarn Khumphai, nickname is ize. I'm a student in the Department of
                        Electrical and Computer Systems Engineering at Silpakorn University.
                        I'm studying programming such as HTML, CSS, JavaScript, SQL, C, C++ and python. And this website
                        was created as a portfolio and a resume to showcase my skills.</p>
                    <button onclick="window.open ('assets/resume.pdf' );">Download CV</button>
                </div>
            </div>
        </div>
    </section>

    <section class="experience" id="experience">
        <div class="max-width">
            <h2 class="title">My Experience</h2>
            <div class="experience-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-graduation-cap"></i>
                        <h1>Education</h1>
                        <h2><span>★</span> Senior High School</h2>
                        <p><span>-</span> Samchukratanapokaram School</p>
                        <p class="location"><span>-</span> Department of Science and Mathematics</p>
                        <p class="location"><span>-</span> Samchuk Suphanburi 72130</p>
                        <p>( 2016 - 2018 )</p>
                        <p class="gpa"><span>GPA : 3.13</span></p>
                        <br>
                        <h2><span>★</span> Bachelor of Engineering</h2>
                        <p><span>-</span> Silpakorn Unioversity</p>
                        <p class="location"><span>-</span> Department of Electronics and Computer systems</p>
                        <p class="location"><span>-</span> Muang Nakhonpathom 73000</p>
                        <p>( 2019 - now )</p>
                        <p class="gpa"><span>GPA : 3.23</span></p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-briefcase work"></i>
                        <h1>Work</h1>
                        <br>
                        <h2><span>⊛</span> Null</h2>
                        <p class="textnull">Now I don't have any work experience. But I have skills that can be
                            developed.</p>
                        <br><br>
                        <button onclick="window.location.href='#skills'">
                            <span aria-hidden="true" class="circle">
                                <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">What I can do</span>
                        </button>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My Skills</h2>
            <div class="skills-content">

                <div class="card" onclick="this.classList.toggle('expanded')">
                    <i class="fas fa-globe"></i>
                    <h1>Website</h1>
                    <div class="text-background">
                        <div class="text-content">
                            <ul>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>JavaScript</li>
                                <li>Basic PHP</li>
                                <li>Basic Bootstrap</li>
                            </ul>
                        </div>
                    </div>
                    <div class="background-chevron">
                        <i class="chevron fas fa-chevron-up"></i>
                    </div>
                </div>

                <div class="card" onclick="this.classList.toggle('expanded')">
                    <i class="fas fa-laptop-code"></i>
                    <h1>Programming</h1>
                    <div class="text-background">
                        <div class="text-content">
                            <ul>
                                <li>Python</li>
                                <li>C/C++</li>
                                <li>R Language</li>
                                <li>SQL</li>
                            </ul>
                        </div>
                    </div>
                    <div class="background-chevron">
                        <i class="chevron fas fa-chevron-up"></i>
                    </div>
                </div>
                <div class="card" onclick="this.classList.toggle('expanded')">
                    <i class="fas fa-tools"></i>
                    <h1>Tools</h1>
                    <div class="text-background">
                        <div class="text-content">
                            <ul>
                                <li>VS Code</li>
                                <li>Github</li>
                                <li>Arduino UNO R3</li>
                                <li>LINE Notify</li>
                                <li>Adobe Photoshop</li>
                                <li>Microsoft Office</li>
                            </ul>
                        </div>
                    </div>
                    <div class="background-chevron">
                        <i class="chevron fas fa-chevron-up"></i>
                    </div>
                </div>
                <div class="card" onclick="this.classList.toggle('expanded')">
                    <i class="far fa-list-alt"></i>
                    <h1>Others</h1>
                    <div class="text-background">
                        <div class="text-content">
                            <ul>
                                <li>Blockchain</li>
                                <li>Internet of Things</li>
                                <li>Artificial Intelligence</li>
                                <li>Cyber Security</li>
                            </ul>
                        </div>
                    </div>
                    <div class="background-chevron">
                        <i class="chevron fas fa-chevron-up"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="projects" id="projects">
        <div class="max-width">
            <h2 class="title">My Projects</h2>
            <div class="projects-content">

                <div class="card">
                    <div class="top-prejects">
                        <div class="img">
                            <img class="web1" src="assets/portmain.png">
                        </div>
                        <h1>Portfolio Website</h1>
                        <h2>Html, CSS and JavaScript</h2>
                    </div>
                    <div class="text">
                        <p>This site is made for show what I can do, my work experience and my educational experience.
                            And this website is made with HTML, CSS and JavaScript.</p>
                            <button onclick=" window.open('https://github.com/izephanthakarn/phanthakarns-portfolio', '_blank')"><span></span><span></span><span></span><span></span> go to github</button>
                    </div>
                </div>

                <div class="card">
                    <div class="top-prejects">
                        <div class="img">
                            <img class="python1" src="assets/projectpython.jpg">
                        </div>

                        <h1>Cash Book.py</h1>
                        <h2>Record financial history.</h2>
                    </div>

                    <div class="text">
                        <p>This app is made for recording financial history. It can be saved as a .txt file and
                            can be used in conjunction with keyboard keys.</p>
                            <button onclick=" window.open('https://github.com/izephanthakarn/PythonProject', '_blank');"><span></span><span></span><span></span><span></span>go to github</button>
                    </div>
                </div>
                <!-- https://github.com/izephanthakarn/PythonProject -->
                <div class="card">
                    <img class="coming-soon" src="assets/coming-soon.png" alt="">
                    <h1>Coming Soon!</h1>
                    <!-- <h2>The next project is coming soon.</h2> -->
                    <h2>please wait and follow me</h2>
                    <div class="text">
                        <p>The next project is coming soon.</p>
                        <button
                            onclick="window.location.href='#contact'"><span></span><span></span><span></span><span></span>Follow
                            me</button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>You can contact me in many ways, e-mail, linkedin or facebook. If you want to contact me urgently
                        I recommend you to contact me via phone number.</p>
                    <div class="icons">
                        <div class="row">
                            <a class="fas fa-map-marked-alt icon-contact"
                                href="https://www.google.com/maps/place/%E0%B9%80%E0%B8%97%E0%B8%A8%E0%B8%9A%E0%B8%B2%E0%B8%A5%E0%B8%99%E0%B8%84%E0%B8%A3%E0%B8%99%E0%B8%84%E0%B8%A3%E0%B8%9B%E0%B8%90%E0%B8%A1+%E0%B8%AD%E0%B8%B3%E0%B9%80%E0%B8%A0%E0%B8%AD%E0%B9%80%E0%B8%A1%E0%B8%B7%E0%B8%AD%E0%B8%87%E0%B8%99%E0%B8%84%E0%B8%A3%E0%B8%9B%E0%B8%90%E0%B8%A1+%E0%B8%99%E0%B8%84%E0%B8%A3%E0%B8%9B%E0%B8%90%E0%B8%A1+73000/@13.7852851,99.9701029,12z/data=!3m1!4b1!4m5!3m4!1s0x30e2e5a46a696483:0x7ec29c5a30670cdc!8m2!3d13.8140293!4d100.0372929"
                                target="_blank"></a>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title"><a
                                        href="https://www.google.com/maps/place/%E0%B9%80%E0%B8%97%E0%B8%A8%E0%B8%9A%E0%B8%B2%E0%B8%A5%E0%B8%99%E0%B8%84%E0%B8%A3%E0%B8%99%E0%B8%84%E0%B8%A3%E0%B8%9B%E0%B8%90%E0%B8%A1+%E0%B8%AD%E0%B8%B3%E0%B9%80%E0%B8%A0%E0%B8%AD%E0%B9%80%E0%B8%A1%E0%B8%B7%E0%B8%AD%E0%B8%87%E0%B8%99%E0%B8%84%E0%B8%A3%E0%B8%9B%E0%B8%90%E0%B8%A1+%E0%B8%99%E0%B8%84%E0%B8%A3%E0%B8%9B%E0%B8%90%E0%B8%A1+73000/@13.7852851,99.9701029,12z/data=!3m1!4b1!4m5!3m4!1s0x30e2e5a46a696483:0x7ec29c5a30670cdc!8m2!3d13.8140293!4d100.0372929"
                                        target="_blank">Nakhonpathom
                                        73000</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <a class="fas fa-envelope icon-contact" href="mailto: izephanthakarn@hotmail.com"></a>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title"><a
                                        href="mailto: izephanthakarn@hotmail.com">izephanthakarn@hotmail.com</a></div>
                            </div>
                        </div>
                        <div class="row">
                            <a class="fas fa-phone icon-contact" href="tel:+66983405579"></a>
                            <div class="info">
                                <div class="head">Phone Number</div>
                                <div class="sub-title"><a href="tel:+66983405579">+66 98 340 5579</a></div>
                            </div>
                        </div>
                        <div class="row">
                            <a class="fab fa-linkedin-in icon-contact"
                                href="https://www.linkedin.com/in/phanthakarn-khumphai-686299200/" target="_blank"></a>
                            <div class="info">
                                <div class="head">LinkedIn</div>
                                <div class="sub-title"><a
                                        href="https://www.linkedin.com/in/phanthakarn-khumphai-686299200/"
                                        target="_blank">Phanthakarn
                                        Khumphai</a></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form id="contact-form" action="sendmail.php" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <label class="label-name">Name</label>
                                <input type="text" name="name" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <label class="label-email">Email</label>
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label-subject">Subject</label>
                            <input type="text" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <label class="label-message">Message</label>
                            <textarea cols="30" rows="10" name="message" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">
                                <div class="i-animation">
                                    <i class="fas fa-paper-plane"></i>
                                </div>
                                <span>Send</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- footer section start -->
    <footer>
        <div class="icon-follow">
            <a href="https://www.facebook.com/ize.phanthakarn.5/" target="_blank" class="fab fa-facebook-square"></a>
            <a href="https://www.instagram.com/jjaoizee/" target="_blank" class="fab fa-instagram-square"></a>
        </div>
        <p>Created By <span>IzePhanthakarn</span> | Copyright <i class="far fa-copyright"></i> 2021</p>
    </footer>
    <script src="script2.js"></script>
    <script type="text/javascript">
        let menuOpen = false;
        $(document).ready(function () {
            // typing text animation script
            var typed = new Typed(".typing", {
                strings: ["Student.", "Developer.", "Programmer.", "Trader.", "Gamer."],
                typeSpeed: 100,
                backSpeed: 60,
                loop: true,
            });

            var typed = new Typed(".typing-2", {
                strings: ["Student.", "Developer.", "Programmer.", "Trader.", "Gamer."],
                typeSpeed: 100,
                backSpeed: 60,
                loop: true,
            });
            $('#contact-form').on('submit', function (e) {
                $.ajax({
                    url: 'sendmail.php',
                    data: $(this).serialize(),
                    type: 'POST',
                    success: function (data) {
                        console.log(data);
                        Swal.fire(
                            'Success!',
                            'Email sent successfully!',
                            'success'
                        );
                    },
                    eror: function (data) {
                        Swal.fire(
                            'Error!',
                            'Error sending email!',
                            'error'
                        );
                    }
                });
                this.reset();
                e.preventDefault();
            });
            $(window).scroll(function () {
                // sticky navbar on scroll script
                if (this.scrollY > 20) {
                    $(".navbar").addClass("sticky");
                } else {
                    $(".navbar").removeClass("sticky");
                }

                // scroll-up button show/hide script
                if (this.scrollY > 500) {
                    $(".scroll-up-btn").addClass("show");
                } else {
                    $(".scroll-up-btn").removeClass("show");
                }
            });

           

            $(".navbar .menu li a").click(function () {
                // applying again smooth scroll on menu items click
                $("html").css("scrollBehavior", "smooth");
            });

            // toggle menu/navbar script
            $(".menu-btn").click(function () {
                $(".navbar .menu").toggleClass("active");
                $(".menu-btn").toggleClass("open");
            });

            $(".menu-btn").addEventListener("click", () => {
                if (!menuOpen) {
                    $(".menu-btn").classList.add("open");
                    menuOpen = true;
                } else {
                    $(".menu-btn").classList.remove("open");
                    menuOpen = false;
                }
            });
            // typing text animation script
            
        });
    </script>
</body>

</html>