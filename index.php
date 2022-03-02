<?php
    $insert=false;
    if(isset($_POST['first'])){
        $server="localhost";
        $username="root";
        $password="";
        $con=mysqli_connect($server, $username, $password);
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";
    
    $first = $_POST['first'];
    $last = $_POST['last'];
    $package = $_POST['package'];
    $phone = $_POST['phone'];
    $persons = $_POST['persons'];
    $sql = "INSERT INTO `project5`.`database` (`first`, `last`, `package`, `phone`, `persons`, `dt`) VALUES ('$first', '$last', '$package', '$phone', '$persons', current_timestamp());";
    if($con->query($sql) == true){
        // echo "Successfully inserted";
        $insert=true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&family=Montserrat&family=Sacramento&display=swap"
        rel="stylesheet" />
    <script src="https://kit.fontawesome.com/b699c21610.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha256-UK1EiopXIL+KVhfbFa8xrmAWPeBjMVdvYMYkTAEv/HI=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha256-4hqlsNP9KM6+2eA8VUT0kk4RsMRTeS7QGHIM+MZ5sLY=" crossorigin="anonymous" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="utilis.css">
    <title>Project</title>
</head>

<body>
    <header class="header">
        <div class="container-fluid">
            <nav class="nav">
                <a href="#home" class="logo">
                    <img src="img/logo.png" alt="logo" />
                </a>

                <div class="nav__button">
                    <span class="nav__icon"></span>
                </div>

                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#team" class="nav-link">Team</a>
                    </li>
                    <li class="nav-item">
                        <a href="#menu" class="nav-link">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a href="#reservation" class="nav-link">Booking</a>
                    </li>
                </ul>

                <ul class="icons">
                    <input class="search" type="text" placeholder="Search here">
                    <a href="search.html">
                        <li class="icon"><i class="fas fa-search"></i></li>
                    </a>
                    <a href="https://www.twitter.com/" target="_blank">
                        <li class="icon"><i class="fab fa-twitter"></i></li>
                    </a>
                    <a href="https://www.facebook.com/" target="_blank">
                        <li class="icon"><i class="fab fa-facebook-f"></i></li>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank">
                        <li class="icon"><i class="fab fa-instagram"></i></li>
                    </a>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="hero" id="home">
            <div class="container">
                <div class="premium-container">
                    <img class="premium" src="img/Premium.png" alt="Premium" />
                    <h3 class="quality">Quality</h3>
                </div>

                <div class="restaurant-title">
                    <h1 class="title">
                        Tours <br />
                        & Travels
                    </h1>
                </div>
            </div>

            <a class="go-top" href="#"><i class="fas fa-arrow-up"></i></a>
        </div>

        <section class="offers">
            <div class="container">
                <h2 class="section-title">What We Can Offer</h2>
                <h3 class="section-subtitle">from our hearts</h3>
                <div class="three-columns-grid">
                    <div class="grid-item" data-aos="fade-right" data-aos-offset="400" data-aos-duration="1000">
                        <img class="my-1"
                            src="https://images.unsplash.com/photo-1605274280779-a4732e176f4b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80"
                            alt="" width="200" />
                        <h3 class="subtitle">
                            <strong>Best</strong>&#8208; selling Destinations
                        </h3>
                        <p class="paragraph">
                            Grab Exciting Discounts for Your Upcoming Trips to Our Most-loved Destinations!
                        </p>
                    </div>
                    <div class="grid-item" data-aos="fade-up" data-aos-offset="400" data-aos-duration="1000">
                        <img class="my-1"
                            src="https://hldak.mmtcdn.com/prod-s3-hld-hpcmsadmin/holidays/images/cities/1328/Vivanta-By-Taj---Holiday-Village,-Goa-4.jpg?crop=192:285&downsize=192:285"
                            alt="" width="200" />
                        <h3 class="subtitle">
                            <strong>Affordable </strong> Luxury Holidays
                        </h3>
                        <p class="paragraph">
                            Top-selling Packages with 5-star stays, starting @ just Rs. 9,999*!
                        </p>
                    </div>
                    <div class="grid-item" data-aos="fade-left" data-aos-offset="400" data-aos-duration="1000">
                        <img class="my-1" src="https://res.cloudinary.com/swiggy/image/upload/f_auto,q_auto,fl_lossy/ae3qqfev6j7hzhxw6if3" alt="" width="200" />
                        <h3 class="subtitle">
                            <strong>Healthy </strong>food
                        </h3>
                        <p class="paragraph">
                            We are proud to offer excellent food quality with cheaper rates in our tours!
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="about" id="about">
            <div class="container-fluid">
                <div class="two-columns-grid">
                    <div class="top-tart" data-aos="fade-right" data-aos-offset="400" data-aos-duration="1000">
                        <img src="https://images.unsplash.com/photo-1552733407-5d5c46c3bb3b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8NXx8fGVufDB8fHx8&w=1000&q=80"
                            alt="Tart" class="tart my-2" />
                    </div>
                    <div class="about-us" data-aos="fade-left" data-aos-offset="400" data-aos-duration="1000">
                        <h2 class="section-title welcome">
                            Welcome to Javelin Tour
                        </h2>
                        <p class="about-paragraph">
                            “Travel is the main thing you purchase that makes you more extravagant”. We, at
                            ‘Javelin Tours & Travel’, swear by this and put stock in satisfying travel dreams that make you
                            perpetually rich constantly. We have been moving excellent encounters for a considerable
                            length of time through our cutting edge planned occasion bundles and other fundamental
                            travel administrations. We rouse our clients to carry on with a rich life, brimming with
                            extraordinary travel encounters.
                            The powerful inclination of Indian voyagers to travel more nowadays is something that keeps
                            us inspired to satisfy your vacation necessities. Our vision to give you a consistent
                            occasion encounter makes us one of the main visit administrators in the regularly extending
                            travel industry.
                            We offer best limits on our top rated visit bundles to clients who pick our viable
                            administrations over and over. How about we remind you indeed that we don’t expect to be
                            your visit and travel specialists; we endeavor to be your vacation accomplices until the end
                            of time.

                        </p>
                        <a href="#" class="btn">About Us</a>
                    </div>
                </div>

                <div class="two-columns-grid third-grid">
                    <div class="read-more" data-aos="fade-right" data-aos-offset="400" data-aos-duration="1000">
                    <h2 class="section-title welcome">
                            Why JEVELIN?
                        </h2>
                        <p class="about-paragraph">
                            Start by exploring or experiences . We will provide you excellent packages for different
                            places like London, Paris, UK, etc. The cost for any package you select is very affordable
                            and decent.
                            Once you've found what you're looking for, learn about your tour counsellor which will
                            provide you complete knowledge about the places you were going to travel and your finance
                            agent which will give you detailed knowledge about how much money will it cost to you while
                            travelling.
                            Now, you're all set! Connect with you tour guide and enjoy the travelling with this site for
                            local tips, questions or advice. You can also contact Jevelin email anytime for additional
                            support.
                        </p>
                        <a href="#" class="btn">Read More</a>
                    </div>
                    <div class="top-fruits" data-aos="fade-left" data-aos-offset="400" data-aos-duration="1000">
                        <img src="https://i0.wp.com/theluxurytravelexpert.com/wp-content/uploads/2014/04/anse-source-dargent-seychelles.jpg?ssl=1"
                            alt="Fruits" class="fruits my-2" />
                    </div>
                </div>
            </div>
        </section>

        <section class="team" id="team">
            <div class="container">
                <h2 class="section-title">Our Team</h2>
                <h3 class="section-subtitle">is the best</h3>
                <div class="four-columns-grid">
                    <div class="team-member" data-aos="fade-up" data-aos-offset="300" data-aos-duration="1000">
                        <img class="my-8 my-9" src="/img/Komal.jpg" alt="Team Member 1" />
                        <h2 class="name">Komal Singh</h2>
                        <h3 class="position">Travel Counsellor</h3>
                        <p class="description-paragraph">
                           One of the most professional Travel Counsellor at Javelin with a passion for introducing travelers to exciting destinations.
                        </p>
                    </div>
                    <div class="team-member" data-aos="fade-up" data-aos-offset="300" data-aos-duration="1000">
                        <img class="my-8" src="https://media-exp1.licdn.com/dms/image/C4E03AQF1MbdUldJGfw/profile-displayphoto-shrink_800_800/0/1610264733488?e=1631750400&v=beta&t=lwYbRDxDc42zYrTqY9WUk58u2ZfkvnSeLwaC64w6yVs" alt="Team Member 2" />
                        <h2 class="name">Om Prakash shah</h2>
                        <h3 class="position">Chief Operating Officer</h3>
                        <p class="description-paragraph">
                        Experienced in the travel & hospitality domain and familiar with the tour product booking
                            flow.
                        </p>
                    </div>
                    <div class="team-member" data-aos="fade-up" data-aos-offset="300" data-aos-duration="1000">
                        <img class="my-8" src="https://scontent.fknu1-1.fna.fbcdn.net/v/t1.6435-9/215901804_3047966248863692_7446776894060455101_n.jpg?_nc_cat=100&ccb=1-3&_nc_sid=730e14&_nc_ohc=cwKdUrzViCkAX9u6opl&_nc_ht=scontent.fknu1-1.fna&oh=64a8e04cbdd6fe4044243fcded9a4828&oe=60F1CC96" alt="Team Member 3" />
                        <h2 class="name">Sorabh Singh</h2>
                        <h3 class="position"> Finance Support Agent</h3>
                        <p class="description-paragraph">
                        Became a valued team member of Javelin since 1980s, the No.1 global and socially aware travel company.
                        </p>
                    </div>
                    <div class="team-member" data-aos="fade-up" data-aos-offset="300" data-aos-duration="1000">
                        <img class="my-8" src="https://media-exp1.licdn.com/dms/image/C4E03AQEuMRLfA4r2ew/profile-displayphoto-shrink_800_800/0/1620886397066?e=1631750400&v=beta&t=RK2mgl4lZ27QobNqAyVw9CVYHhoRr1Ls2LonXqzMako" alt="Team Member 4" />
                        <h2 class="name">Bhavishya Chauhan</h2>
                        <h3 class="position"> Sr. HR Executive</h3>
                        <p class="description-paragraph">
                            Support and advice on the implementation of the company’s Diversity strategy and related policies.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="menu" id="menu">
            <div class="menu-header"></div>
            <div class="menu-card" data-aos="fade-up" data-aos-offset="300" data-aos-duration="1000">
                <div class="menu-card-header">
                    <img class="fish" src="img/fish&steak.png" alt="Fish & Steak" />
                    <h2 class="section-title menu-title">
                        Enjoy The Best Packages
                    </h2>
                    <h3 class="section-subtitle">on this planet</h3>
                </div>

                <div class="two-columns-grid">
                    <div class="starters">
                        <h2>Starters</h2>
                        <div class="starter">
                            <div class="starter-header">
                                <h3>Wine and Dine in London and Paris!</h3>
                                <h4 class="price">$150.50</h4>
                            </div>
                            <p class="menu-paragraph">
                                A Holiday that would delight your culinary senses in every way possible | Bustronome
                                Dinner Experience.
                            </p>
                        </div>

                        <div class="starter">
                            <div class="starter-header">
                                <h3>UK with the Kids! - Theme Parks & Endless Fun </h3>
                                <h4 class="price">$200.80</h4>
                            </div>
                            <p class="menu-paragraph">
                                The best place to visit with Family | River Thames Evening Cruise | Stonehenge And Bath
                                Day Trip From London
                            </p>
                        </div>

                        <div class="starter">
                            <div class="starter-header">
                                <h3> Romantic Escape in Andaman- Soulmate Special</h3>
                                <h4 class="price">$127.50</h4>
                            </div>
                            <p class="menu-paragraph">
                                Delight your soulmate this romantic season with adventurous activities coming your way
                                in Andaman.
                            </p>
                        </div>
                    </div>
                    <div class="mains">
                        <h2>Mains</h2>
                        <div class="starter">
                            <div class="starter-header">
                                <h3> North East-Cherrapunjee Special</h3>
                                <h4 class="price">$170.50</h4>
                            </div>
                            <p class="menu-paragraph">
                                Be mesmerised by the crystal clear waters of Dawki Lake, visit the cleanest village of
                                Asia.
                            </p>
                        </div>

                        <div class="starter">
                            <div class="starter-header">
                                <h3>Dubai Parks & Resorts Special</h3>
                                <h4 class="price">$310.70</h4>
                            </div>
                            <p class="menu-paragraph">
                                Experience Dubai in Hampton by Hilton and visit the enthralling Burj Khalifa. Witness
                                the glittering skyline.
                            </p>
                        </div>

                        <div class="starter">
                            <div class="starter-header">
                                <h3>Kochi Holiday Packages</h3>
                                <h4 class="price">$180.41</h4>
                            </div>
                            <p class="menu-paragraph">
                                Kochi's appeal spans history, geography and commerce in equal measure. It is Keralaâs
                                genuine melting pot.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="customers">
            <div class="container">
                <h2 class="section-title">Customer</h2>
                <h3 class="section-subtitle">stories about us</h3>
                <div class="carousel">
                    <div>
                        <img src="img/carousel1.png" alt="" />
                        <p class="testimonial-paragraph">
                            Overall service was nice. The driver was well groomed & polite. Minor issues will always be there but that could be overlooked if overall service is considered. Thank You guys for arranging a great trip.
                        </p>
                        <h2 class="name">Katey Gallardo</h2>
                    </div>
                    <div>
                        <img src="img/carousel2.png" alt="" />
                        <p class="testimonial-paragraph">
                            The guidance to choose the proper package and the payment process are smooth and easy. Putting in touch with the chosen local agency to take care of planning details is good. Mr. Bhavi has provided good local support, provided good drivers.
                        </p>
                        <h2 class="name">Brandon Wolf</h2>
                    </div>
                </div>
            </div>
        </section>

        <form action="index.php" method="post">
        <section class="book" id="reservation">
            <div class="container-fluid">
                <div class="book-card">
                    <h2 class="section-title book-title">
                        Select a Date & Book Now
                    </h2>
                    <h3 class="section-subtitle">
                        We will confirm payment via E-mail or Phone
                    </h3>
                    <div class="two-columns-grid">
                        <div class="form-group">
                            <input type="text" id="first" name="first" class="input" placeholder="First Name*" />
                        </div>
                        <div class="form-group">
                            <input type="text" id="last" name="last" class="input" placeholder="Last Name*" />
                        </div>
                    </div>
                    <div class="two-columns-grid">
                        <div class="form-group">
                            <input type="text" id="package" name="package" class="input" placeholder="Name of Package you Selected*" />
                        </div>
                        <div class="form-group">
                            <input type="text" id="phone" class="input" name="phone" placeholder="Phone Number" />
                        </div>
                    </div>
                    
                    <div class="three-columns-grid">
                        <!-- <div class="form-group">
                            <input type="date" id="date" />
                        </div> -->
                        <!-- <div class="form-group">
                            <select name="time" id="time">
                                <option value="">9:00</option>
                                <option value="">9:30</option>
                                <option value="">10:00</option>
                                <option value="">10:30</option>
                                <option value="">11:00</option>
                                <option value="">11:30</option>
                                <option value="">12:00</option>
                                <option value="">12:30</option>
                                <option value="">13:00</option>
                                <option value="">13:30</option>
                                <option value="">14:00</option>
                                <option value="">14:30</option>
                                <option value="">15:00</option>
                                <option value="">15:30</option>
                                <option value="">16:00</option>
                                <option value="">16:30</option>
                                <option value="">17:00</option>
                                <option value="">17:30</option>
                                <option value="">18:00</option>
                                <option value="">18:30</option>
                                <option value="">19:00</option>
                                <option value="">19:30</option>
                                <option value="">20:00</option>
                                <option value="">20:30</option>
                            </select>
                        </div> -->
                        <div class="form-group ">
                            <!-- <select style="margin: 7px 548px 0 548px" class="my-7" name="persons" id="persons">
                                <option value="">Persons*</option>
                                <option value="">1 Person</option>
                                <option value="">2 Persons</option>
                                <option value="">3 Persons</option>
                                <option value="">4 Persons</option>
                                <option value="">5 Persons</option>
                                <option value="">6 Persons</option>
                                <option value="">7 Persons</option>
                                <option value="">8 Persons</option>
                                <option value="">9 Persons</option>
                                <option value="">10 Persons</option>
                            </select> -->
                            <div class="form-group persons-1">
                                <input type="text" name="persons" id="first" class="input" placeholder="Persons*" />
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="btn btn-book">Book Now</a> -->
                    <button class="btn my-10">Book Now</button>
                </div>
            </div>
        </section>
    </form>
            <?php
        if($insert == true){
        // echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
        }
        ?>
    </main>
    
    <footer class="footer">
        <p class="copyright">
            Copyright &copy; 2021 by OKBS. All rights reserved.
        </p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha256-NXRS8qVcmZ3dOv3LziwznUHPegFhPZ1F/4inU7uC8h0=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="app.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
<!-- INSERT INTO `project` (`sno`, `first`, `last`, `email`, `phone`, `date`, `time`, `persons`, `dt`) VALUES ('1', 'om', 'shah', 'this@this.com', '7896325417', '2021-07-07', '11:46:22.000000', '2 persons', current_timestamp()); -->