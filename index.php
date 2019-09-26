<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <title>Assignment 2</title>

        <!-- Keep wireframe.css for debugging, add your css to style.css -->
        <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>

        <!-- my two web fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Hepta+Slab|Montserrat&display=swap" rel="stylesheet"> 


        <link id='stylecss' type="text/css" rel="stylesheet" href="./style.css">
        <script src='../wireframe.js'></script>




    </head>

    <body>

        <header>
            <div>
                <img id="CompanyLogo" src="../../media/Lunardo Logo.png" alt="PAGE BANNER">
            </div>
        </header>

        <nav>
            <div id="topnav">
                <ul>
                    <li><a href="#linktoAboutUs">About Us</a></li>
                    <li><a href="#linktoPrices">Prices</a></li>
                    <li><a href="#linktoNowShowing">Now Showing</a></li>

                    <li><a href="../index.html">Back to A1</a></li>
                </ul>
            </div>
        </nav>



        <main>
            <section id ="linktoAboutUs">
                <div class="individualSection">

                    <h1>About Us </h1>

                    <p>
                        Welcome to Lunardo Cinemas, your first choice and only choice for cinema in the Antarctic region
                        <br>
                        <br>
                        After the recent fires, which tragically took our beloved complex away from us, we are proud to announce we will be <b>REOPENING</b>, but this time <b>BIGGER</b> and <b>BETTER</b>, and with <b>LESS</b> polar bears!

                        <br><br>
                        Our upgrades include brand new premium seating for all facilities:
                        <br><br>

                        New leather recliners for standard sessions: <br>
                        <img class="seatingImage" src="../../media/standardseat_trans.png" alt="Standard Seats"> 
                        <br><br>


                        World class seating for our First Class sessions:<br>
                        <img class="seatingImage" src="../../media/Verona-Twin.png" alt="Premium Seats">  
                        <br><br>

                        <br><br>



                        We are also very excited to announce our theatre now features 3D Dolby Vision with Dolby Atmos audio!
                        <br>

                        <img id="dolbylogo" src="../../media/dolby-vision-dolby-atmos_TRANS.png" alt="dolby vision & atmos">




                        <br>



                    </p>
                </div>
            </section>





            <section id="linktoPrices">
                <div class="individualSection">
                    <h1>Prices </h1>

                    <table>
                        <tr>
                            <th>Seat Type</th>
                            <th>All day Monday and Wednesday AND 12pm on Weekdays </th>
                            <th>All Other Times</th>
                        </tr>
                        <tr>
                            <td>Standard Adult</td>
                            <td>14.00</td>
                            <td>19.80</td>
                        </tr>
                        <tr>
                            <td>Standard Concession</td>
                            <td>12.50</td>
                            <td>17.50</td>
                        </tr>
                        <tr>
                            <td>Standard Child</td>
                            <td>11.00</td>
                            <td>15.30</td>
                        </tr>
                        <tr>
                            <td>First Class Adult</td>
                            <td>24.00</td>
                            <td>30.00</td>
                        </tr>
                        <tr>
                            <td>First Class Concession</td>
                            <td>22.50</td>
                            <td>27.00</td>
                        </tr>
                        <tr>
                            <td>First Class Child </td>
                            <td>21.00</td>
                            <td>24.00</td>
                        </tr>
                    </table>
                </div>
            </section>







            <section  id="linktoNowShowing">

                <h1>Now Showing</h1>

                <div class="NowShowing">



                    <div class="row">
                        <div class="column">

                            <div class="nowShowing_Card" id="moviePanelACT" onclick=showACT()>

                                <img src="../../media/poster_endgame.jpg" alt="Endgame poster" class="nowShowing_Image">

                                <div class="nowShowing_Content">
                                    <h2>Avengers: Endgame</h2>
                                    <h3> SHOWING:</h3>                                
                                    <p>
                                        Wed:  9pm (T21)<br>
                                        Thur: 9pm (T21)<br>
                                        Fri:  9pm (T21)<br>
                                        Sat:  6pm (T18)<br>
                                        Sun:  6pm (T18)<br>
                                    </p>
                                </div>


                            </div>
                        </div>



                        <div class="column">
                            <div class="nowShowing_Card" id = "moviePanelANM" onclick=showANM()>
                                <div>
                                    <img src="../../media/poster_dumbo.jpg" alt="Dumbo poster" class="nowShowing_Image">
                                </div>
                                <div class="nowShowing_Content">
                                    <h2>Dumbo</h2>
                                    <h3> SHOWING:</h3>
                                    <p>
                                        Mon:  12pm (T12)<br>
                                        Tues: 12pm (T12)<br>
                                        Wed:  6pm (T18)<br>
                                        Thur: 6pm (T18)<br>
                                        Fri:  6pm (T18)<br>
                                        Sat:  6pm (T18)<br>
                                        Sun:  12pm (T12)<br>
                                    </p>

                                </div>

                            </div>
                        </div>



                        <div class="column">
                            <div class="nowShowing_Card" id="moviePanelRMC" onclick=showRMC()>
                                <div>
                                    <img src="../../media/poster_topendwedding.jpg" alt="Top End Wedding poster" class="nowShowing_Image">
                                </div>
                                <div class="nowShowing_Content">
                                    <h2>Top End Wedding</h2>
                                    <h3> SHOWING:</h3>
                                    <p>
                                        Tues: 6pm (T18)<br>
                                        Sat:  3pm (T15)<br>
                                        Sun:  3pm (T15)<br>
                                    </p>


                                </div>
                            </div>
                        </div>



                        <div class="column">
                            <div class="nowShowing_Card" id="moviePanelAHF"onclick=showAHF()>
                                <div>
                                    <img src="../../media/poster_thehappyprince.jpg" alt="The Happy Prince poster" class="nowShowing_Image">
                                </div>

                                <div class="nowShowing_Content">
                                    <h2>The Happy Prince</h2>
                                    <h3> SHOWING:</h3>
                                    <p>
                                        Wed:  12pm (T12)<br>
                                        Thur: 12pm (T12)<br>
                                        Fri:  12pm (T12)<br>
                                        Sat:  9pm (T21)<br>
                                        Sun:  9pm (T21)<br>
                                    </p>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>






                <section  id="linktoSynopsis">


                    <div id="synopsis_Card">

                        <div id="synopsisACT">
                            <h2>Avengers: Endgame - [MA15+]</h2>
                            <h3> Plot Description:</h3>
                            <p>
                                The avengers are at it again, avenging all sorts of things when and wherever they please
                            </p>
                            <button onclick= book(0,2,3)>Book Wednesday!</button>
                            <button onclick= book(0,3,3)>Book Thursday!</button>
                            <button onclick= book(0,4,3)>Book Friday!</button>
                            <button onclick= book(0,5,2)>Book Saturday!</button>
                            <button onclick= book(0,6,2)>Book Sunday!</button>
                            <br>
                            <br>

                            <div class="synopsis_Trailer">
                                <iframe src="https://www.youtube.com/embed/TcMBFSGVi1c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>    


                        <div id="synopsisANM">
                            <h2>DUMBO</h2>
                            <h3> Plot Description:</h3>
                            <p>
                                He is an elephant who was born with an obviously low IQ, which his mother thought appropriate to use as naming inspiration
                            </p>
                            <button onclick= book(1,0,0)>Book Monday!</button>
                            <button onclick= book(1,1,0)>Book Tuesday!</button>
                            <button onclick= book(1,2,2)>Book Wednesday!</button>
                            <button onclick= book(1,3,2)>Book Thursday!</button>
                            <button onclick= book(1,4,2)>Book Friday!</button>
                            <button onclick= book(1,5,2)>Book Saturday!</button>
                            <button onclick= book(1,6,0)>Book Sunday!</button>
                            <br>
                            <br>

                            <div class="synopsis_Trailer">
                                <iframe src="https://www.youtube.com/embed/-QPdRfqTnt4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>  



                        <div id="synopsisRMC">
                            <h2>TOP END WEDDING</h2>
                            <h3> Plot Description:</h3>
                            <p>
                                There is yet ANOTHER wedding in/at the TOP END. whatever that is
                            </p>
                            <button  onclick= book(2,1,2)>Book Tuesday!</button>
                            <button  onclick= book(2,5,1)>Book Saturday!</button>
                            <button  onclick= book(2,6,1)>Book Sunday!</button>
                            <br>
                            <br>
                            <div class="synopsis_Trailer">
                                <iframe src="https://www.youtube.com/embed/uoDBvGF9pPU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>

                        </div>  





                        <div id="synopsisAHF">
                            <h2>THE HAPPY PRINCE</h2>
                            <h3> Plot Description:</h3>
                            <p>
                                Princes should always be happy, the title implies that the prince either wasnt happy in the past or he wont be in the future. 
                            </p>
                            <button onclick= book(3,2,0)>Book Wednesday!</button>
                            <button onclick= book(3,3,0)>Book Thursday!</button>
                            <button onclick= book(3,4,0)>Book Friday!</button>
                            <button onclick= book(3,5,3)>Book Saturday!</button>
                            <button onclick= book(3,6,3)>Book Sunday!</button>
                            <br>
                            <br>
                            <div class="synopsis_Trailer">
                                <iframe src="https://www.youtube.com/embed/tXANCJQkUIE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>  

                    </div>



                    <section id="bookingsCard">

                        <form action="https://titan.csit.rmit.edu.au/~e54061/wp/lunardo-formtest.php" method="post" id="seatform" onsubmit="return false;">

                            <div class="container">
                                <h1>Book a Movie</h1>
                                <p>You can view and book the movie you have selected, please choose a time and fill in the required fields to proceed.</p>
                                <hr>

                                <br>
                                <label for="Movie ID"><b>Movie ID: </b></label>
                                <input type="hidden"  name="movie[id]" id='movie-id' value="">
                                <p id="movieID"> </p>
                                <br>
                                <label for="Movie Day"><b>Movie Day: </b></label>
                                <input type="hidden"  name="movie[day]" id='movie-day' value="">
                                <p id="movieDAY"> </p>
                                <br>
                                <label for="Movie Hour"><b>Movie Hour: </b></label>
                                <input type="hidden" name="movie[hour]" id='movie-hour' value="">
                                <p id="movieHOUR"></p>
                                <br>
                                <br>
                                <!-- Standard Section -->
                                <div class="Standard">
                                    <label for="Standard Adult"><b>Standard Adult</b></label>
                                    <select type="select" name="seats[STA]" id='seats-STA' onchange="calculateTotal()">
                                        <option value="ticketNumber">Select number of tickets...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>



                                    <label for="Standard Concession"><b>Standard Concession</b></label>
                                    <select type="select" name="seats[STP]" id='seats-STP' onchange="calculateTotal()">
                                        <option value="ticketNumber">Select number of tickets...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>

                                    <label for="Standard Child"><b>Standard Child</b></label>
                                    <select type="select" name="seats[STC]" id='seats-STC' onchange="calculateTotal()">
                                        <option value="ticketNumber">Select number of tickets...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>

                                </div>
                                <!-- First Class Section -->
                                <div class="FirstClass">
                                    <label for="First Class Adult"><b>First Class Adult</b></label>
                                    <select type="select" name="seats[FCA]" id='seats-FCA' onchange="calculateTotal()">
                                        <option value="ticketNumber">Select number of tickets...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>

                                    <label for="First Class Concession"><b>First Class Concession</b></label>
                                    <select type="select" name="seats[FCP]" id='seats-FCP' onchange="calculateTotal()">
                                        <option value="ticketNumber">Select number of tickets...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>

                                    <label for="First Class Child"><b>First Class Child</b></label>
                                    <select type="select" name="seats[FCC]" id='seats-FCC' onchange="calculateTotal()">
                                        <option value="ticketNumber">Select number of tickets...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>

                                </div>

                                <!-- Customer Details -->
                                <div class="CustomerDetails">
                                    <label for="Name"><b>Name</b></label>
                                    <input type="text" name="cust[name]" id='cust-name' required>

                                    <label for="Email"><b>Email</b></label>
                                    <input type="email" name="cust[email]" id='cust-email' required>

                                    <label for="Mobile"><b>Mobile</b></label>
                                    <input type="tel" name="cust[mobile]" id='cust-mobile' required>

                                    <label for="Credit Card"><b>Credit Card</b></label>
                                    <input type="text" name="cust[card]" id='cust-card' required>

                                    <label for="Expiry"><b>Expiry</b></label>
                                    <input type="month" name="cust[expiry]" id='cust-expiry' required>

                                </div>


                                <hr>

                                <p id="total"></p>
                                <br><br>

                                <button type="submit" class="bookbtn" name="order" id='bookbtn' >Book Now!</button>
                            </div>


                        </form>







                    </section>
                </section>
            </section>
        </main>





        <footer>
            <section>
                <div>&copy;<script>
                    document.write(new Date().getFullYear());
                    </script> Daniel Jungwirth, s3539595 &amp Jake Pandos</div>
                <div id="DISCLAIMER">Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
            </section>
        </footer>
        <script src="script.js"></script>
    </body>
</html>
