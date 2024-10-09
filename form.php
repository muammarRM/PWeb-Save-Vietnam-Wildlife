
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="logowwfgreen.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS PEMPROGRAMAN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header-bar">
            <a href=""><img src="logowwfgreen.png" alt=""></a>
            <div>
                <h1>Save Vietnam's Wildlife</h1>
            </div>
        </div>
    </header>
    <main>
        <nav>
            <div>
                <ul>
                    <li><a href="">Home</a></li>
                    
                    <li><a href="">About</a></li>
                    
                    <li><a href="">Program</a></li>
                    
                    <li><a href="">Training</a></li>
                    
                    <li><a href="">Contact</a></li>
                
                </ul>
            </nav>
        </div>
        <section>
            <article>
                <div class="sec1">
                    <div >
                        <div>
                            <h4>SAVE VIETNAM'S WILDLIFE (SVW)</h4>
                            <p> 
                                is a non-profit organisation in Vietnam that was founded on the critical need for more effective solutions to secure a future for Vietnam's wildlife.
                            </p>
                        </div>
                        <div>      
                            <iframe width="500" height="280" src="https://www.youtube.com/embed/Sic2WpSQqyQ" title="Save Vietnam&#39;s Wildlife profile (2014-2021) - What have we achieved so far ..." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="sec2">
                    <div>
                        <div>

                            <h4>LEGAL STATUS</h4>
                            <p>
                                SVW - Save Vietnam's Wildlife was officially established as a national Non-Profit Organisation per Decision no 482/QĐ-LHHVN issued on 22nd July 2014 by the Vietnam Union of Science and Technology Associations (VUSTA).
                                <br>
                                SVW has been granted an activity license for science and technology no A-1200 dated August 1st 2014 by the Ministry of Science and Technology.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="sec3">
                    <div>
                        <div>
                            <div>
                                <h6>DONATE</h6>
                                <p>
                                    We are funded solely through our generous donors. Support us!
                                </p>
                            </div>
                            <div>
                                <h6>ADOPT</h6>
                                <p>
                                    Make a long term commitment to our threatened wildlife
                                </p>
                            </div>
                            <div>
                                <h6>JOBS</h6>
                                <p>
                                    Join us in our mission to save Vietnam's wildlife
                                </p>
                            </div>
                            <div>
                                <h6>VOLUNTEER</h6>
                                <p>
                                    Come and work with us in one of the most beautiful regions of Vietnam
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </article>
            <aside>
                <ul>

                    <li><a href="">Donate</a></li>
                    
                    <li><a href="">Adopt</a></li>
                    
                    <li><a href="">Wishlist</a></li>
                    

                    <li><a href="">Partner</a></li>
                    <div class="form">
                        <li>
                        <form action="form.php" method="post"> 
                            <div>
                                <h3>Newsletter Signup!</h3>
                                <p>Enter your email to subscibe us!</p>
                            </div>
                            <div>
                                <h6>Email</h6>
                                <?php echo $_POST["email"]?>
                            </div>
                            <div>
                                <h6>Name</h6>
                                <?php echo $_POST["nama"]?>
                            </div>
                        </form>        
                    </li>
                </div>
            </ul>
        </aside>
        
        </section>
    </main>
    <footer>
        <div class="footer-div">
            <div class="footer-div-div">
                <div>
                    <img src="logowwfwhite.png" alt="">
                </div>
                <div>
                    <h5>Alamat:</h5>
                    <p>Cuc Phuong, Nho Quan, Ninh Binh</p>
                </div>
                
                <div>
                    <h5>Email:</h5>
                    <p>info@svw.vn </p>
                    <br>
                    <h5>Tel:</h5>             
                    <p>+84 229 3848 053 </p>
                    <br>
                    <h5>Hotline:</h5>
                    <p>0978 331 441</p>
                    
                </div>
                <div>
                    <h5>#SaveVietnamWildlife</h5>
                </div>
            </div>
        </div>
        <div class="copyright">
            &copy;2023 MUAMMAR RAMADHANI MAULIZIDAN
        </div>
    </footer>
</body>
</html>