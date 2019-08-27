<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <title>Assignment 2</title>

        <!-- Keep wireframe.css for debugging, add your css to style.css -->
        <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
        <link id='stylecss' type="text/css" rel="stylesheet" href="./style.css">
        <script src='../wireframe.js'></script>




    </head>

    <body>

        <header>
            <div>
                <img id="CompanyLogo" src="media/???" alt="PAGE BANNER">
            </div>
        </header>

        <nav>
            <div class="topnav">
                <a class="active" href="index.html">Home</a>
                <a href="#linktoAboutUs">About Us</a>
                <a href="#linktoPrices" onclick="">Prices</a>
                <a href="#linktoNowShowing">Now Showing</a>
                <a href="#linktoSynopsis">Synopsis</a>
                <a href="#linktoBooking">Booking</a>
                <a href="../index.html">Back to A1</a>
            </div>
        </nav>



        <main>
            <section>
                <article id ="linktoAboutUs">
                    <br>
                    <br>
                    <h1>About Us </h1>

                    <P>

                        The client wants to target not only their loyal customer from before, but also local cinema goers who would normally drive to modern cinemas in nearby larger towns.
                        <br>
                        This area should tell (ie with words) and show (ie with images) potential customers these things:
                        The cinema has reopened after extensive improvements and renovations.
                        There are new seats: standard seats and reclinable first class seats
                        The projection and sound systems are upgraded with 3D Dolby Vision projection and Dolby Atmos sound. See https://www.dolby.com/us/en/cinema for more information.
                        <br>
                        The client wants to show pictures of their new seats: standard seating and first class seating. Images for the seats can be found here:
                        Standard: http://www.profurn.com.au/portfolio-item/538/
                        First Class: http://www.profurn.com.au/portfolio-item/verona-single-zero-wall/




                    </P>
                </article>


                <article  id="linktoPrices">
                    <br>
                    <br>
                    <h1>Prices </h1>
             
                        <table>
                            <tr>
                                <th>Seat Type</th>
                                <th>Seat Code</th>
                                <th>All day Monday and Wednesday AND 12pm on Weekdays </th>
                                <th>All Other Times</th>
                            </tr>
                            <tr>
                                <td>Standard Adult</td>
                                <td>STA</td> 
                                <td>14.00</td>
                                <td>19.80</td>
                            </tr>
                            <tr>
                                <td>Standard Concession</td>
                                <td>STP</td> 
                                <td>12.50</td>
                                <td>17.50</td>
                            </tr>
                            <tr>
                                <td>Standard Child</td>
                                <td>STC</td> 
                                <td>11.00</td>
                                <td>15.30</td>
                            </tr>
                            <tr>
                                <td>First Class Adult</td>
                                <td>FCA</td> 
                                <td>24.00</td>
                                <td>30.00</td>
                            </tr>
                            <tr>
                                <td>First Class Concession</td>
                                <td>FCP</td> 
                                <td>22.50</td>
                                <td>27.00</td>
                            </tr>
                            <tr>
                                <td>First Class Child </td>
                                <td>FCC</td> 
                                <td>21.00</td>
                                <td>24.00</td>
                            </tr>
                        </table>

                </article>


                <article  id="linktoNowShowing">
                    <br>
                    <br>
                    <h1>Now Showing</h1>
                 


                        <div class="nowShowingCard">
                            <img src="../../media/poster_endgame.jpg" alt="Endgame poster" class="poster_jpg">
                            
                            //this should float to the side right of the poster
                            <div class="nowShowing_container">
                                <h2>Avengers: Endgame</h2>
                                <h3> SHOWING:</h3>
                                <p>
                                    Wed - Fri: 9pm (T21)<br>
                                    Sat - Sun: 6pm (T18)<br>
                                </p>
                            </div>
                        </div>

                        <div class="nowShowingCard">
                            <img src="../../media/poster_topendwedding.jpg" alt="Top End Wedding poster" class="poster_jpg">
                            
                            //this should float to the side right of the poster
                            <div class="nowShowing_container">
                                <h2>Top End Wedding</h2>
                                <h3> SHOWING:</h3>
                                <p>
                                    Mon - Tues: 6pm (T18)<br>
                                    Sat - Sun: 3pm (T15)<br>
                                </p>
                            </div>
                        </div>  


                        <div class="nowShowingCard">
                            <img src="../../media/poster_dumbo.jpg" alt="Dumbo poster" class="poster_jpg">
                            
                            //this should float to the side right of the poster
                            <div class="nowShowing_container">
                                <h2>Dumbo</h2>
                                <h3> SHOWING:</h3>
                                <p>
                                    Mon - Tues: 12pm (T12)<br>
                                    Wed - Fri: 6pm (T18)<br>
                                    Sat - Sun: 12pm (T12)<br>
                                </p>
                            </div>
                        </div>

                        <div class="nowShowingCard">
                            <img src="../../media/poster_thehappyprince.jpg" alt="The Happy Prince poster" class="poster_jpg">
                            
                            //this should float to the side right of the poster
                            <div class="nowShowing_container">
                                <h2>The Happy Prince</h2>
                                <h3> SHOWING:</h3>
                                <p>
                                    Wed - Fri: 12pm (T12)<br>
                                    Sat - Sun: 9pm (T21)<br>
                                </p>
                            </div>
                        </div>  




               
                </article>

                <article  id="linktoSynopsis">
                    <br>
                    <br>
                    <h1>Synopsis</h1>
                    
                    
                    <div class="synopsisPanel">
                        <div class="synopsis_container">
                            <h2>Dumbo - [G]</h2>
                            <h3> Plot Description:</h3>
                            <p>
                                Crazy kids movie about some elephant that does stuff
                            </p>
                        </div>
                        
                        //this should float to the right of the title/description
                        <div class="video_trailer">
                            <iframe src="https://www.youtube.com/embed/7NiYVoqBt-8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    
                    
                    
                    <div class="synopsisPanel">
                        <div class="synopsis_container">
                            <h2>Avengers: Endgame - [MA15+]</h2>
                            <h3> Plot Description:</h3>
                            <p>
                                The avengers are at it again, avenging all sorts of things when and wherever they please
                            </p>
                        </div>
                        
//this should float to the right of the title/description
                        <div class="video_trailer">
                           <iframe src="https://www.youtube.com/embed/TcMBFSGVi1c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    
                    <div class="synopsisPanel">
                        <div class="synopsis_container">
                            <h2>The Happy Prince - [PG13+]</h2>
                            <h3> Plot Description:</h3>
                            <p>
                                How could one prince possibly be so happy?? Find out in this period comedu
                            </p>
                        </div>
                        
                        
                        //this should float to the right of the title/description
                        <div class="video_trailer">
                            <iframe src="https://www.youtube.com/embed/4HmN9r1Fcr8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    
                    <div class="synopsisPanel">
                        <div class="synopsis_container">
                            <h2>Top End Wedding - [M]</h2>
                            <h3> Plot Description:</h3>
                            <p>
                                A celebration of love, family and belonging, set at a wedding for top ends.
                            </p>
                        </div>
                        
                        
                        //this should float to the right of the title/description
                        <div class="video_trailer">
                           <iframe src="https://www.youtube.com/embed/uoDBvGF9pPU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    
                    
                </article>

                <article  id="linktoBooking">
                    <br>
                    <br>
                    <h1>Booking</h1>
                    <P>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        ******UNDER CONSTRUCTION*****
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </P>
                </article>
            </section>
        </main>





        <footer>
            <div>&copy;<script>
                document.write(new Date().getFullYear());
                </script> Daniel Jungwirth, s3539595 &amp </div>
            <div id="DISCLAIMER">Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
        </footer>

    </body>
</html>
