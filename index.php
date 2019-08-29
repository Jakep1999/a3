<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <title>Assignment 2</title>

        <!-- Keep wireframe.css for debugging, add your css to style.css -->
        <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
        <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
        <script src='../wireframe.js'></script>
		
		
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>




    </head>

    <body>

        <header>
            
			
        <nav>
		 <img id="CompanyLogo" src="../../media/Lunardo Logo.png" alt="PAGE BANNER">
            <div class="menu">
			<ul>
			
               <li> <a class="active" href="index.php">Home</a> </li>
                 <li><a href="#linktoAboutUs">About Us</a> </li>
                 <li><a href="#linktoPrices">Prices</a> <li>
                 <li><a href="#linktoNowShowing">Now Showing</a> </li>
                 <li><a href="#linktoSynopsis">Synopsis</a> </li>
                 <li><a href="#linktoBooking">Booking</a> </li>
                 <li><a href="../index.html">Back to A1</a> </li>
            </div>
        </nav>
		
		<h1> Lunardo </h1>
		
		<div class="Slogan">
		<h2>All your Entertainment in one place</h2>
		
		</div>
		
		
</header>

<script type="text/javascript">
		
		$(window).on("scroll", function()) {
			if($(window).scrollTop()) {
				$('nav').addClass('black');
			}
			else {
				$('nav').removeClass('black');
			}
		})
		
		</script>
        <main>
            <section id ="linktoAboutUs">
                <article>
				
				<div class="content">
        
                <h1>About <span>Us</span></h1>
                <p class="p1">The client wants to target not only their loyal customer from before, but also local cinema goers who would normally drive to modern cinemas in nearby larger towns.</p>
				<p class="p2"> The client wants to target not only their loyal customer from before, but also local cinema goers who would normally drive to modern cinemas in nearby larger towns.
                        <br>
                        This area should tell (ie with words) and show (ie with images) potential customers these things:
                        The cinema has reopened after extensive improvements and renovations.
                        There are new seats: standard seats and reclinable first class seats
                        The projection and sound systems are upgraded with 3D Dolby Vision projection and Dolby Atmos sound. See https://www.dolby.com/us/en/cinema for more information.
                        <br>
                        The client wants to show pictures of their new seats: standard seating and first class seating. Images for the seats can be found here:
                        Standard: http://www.profurn.com.au/portfolio-item/538/
                        First Class: http://www.profurn.com.au/portfolio-item/verona-single-zero-wall/
						</p>
                
              </div>

                   

                   
                </article>
            </section>





            <section id="linktoPrices">
                <article>
				<div id="Prices">
                    <h1>Prices </h1>

                    <table>
                        <tr>
                            <th>Seat Type</th>
                            <th>Seat Code</th>
                            <th>All day Monday and Wednesday AND 12pm on Weekdays </th>
                            <th>All Other Times</th>
                        </tr>
                        <tr id="Standard Adult">
                            <td>Standard Adult</td>
                            <td>STA</td> 
                            <td>14.00</td>
                            <td>19.80</td>
                        </tr>
                        <tr id="Standard Concession">
                            <td>Standard Concession</td>
                            <td>STP</td> 
                            <td>12.50</td>
                            <td>17.50</td>
                        </tr>
                        <tr id="Standard Child">
                            <td>Standard Child</td>
                            <td>STC</td> 
                            <td>11.00</td>
                            <td>15.30</td>
                        </tr>
                        <tr id="First Class Adult">
                            <td>First Class Adult</td>
                            <td>FCA</td> 
                            <td>24.00</td>
                            <td>30.00</td>
                        </tr>
                        <tr id="FIrst Class Concession">
                            <td>First Class Concession</td>
                            <td>FCP</td> 
                            <td>22.50</td>
                            <td>27.00</td>
                        </tr>
                        <tr id="First Class Child">
                            <td>First Class Child </td>
                            <td>FCC</td> 
                            <td>21.00</td>
                            <td>24.00</td>
                        </tr>
                    </table>
					</div>
                </article>

            </section>







            <section  id="linktoNowShowing">

                <h1>Now Showing</h1>

                <article class="nowShowing_Card">

                    <span class="nowShowing_Card">
					<img src="../../media/poster_endgame.jpg" alt="Endgame poster" class="poster_jpg">
                    </span>

                    <!-this should float to the side right of the poster->                            <span class="nowShowing_container">
                    <h2>Avengers: Endgame</h2>
                    <h3> SHOWING:</h3>
                    <p>
                        Wed - Fri: 9pm (T21)<br>
                        Sat - Sun: 6pm (T18)<br>
                    </p>
                    </span>

  
                    <span class="nowShowing_Card">
                        <img src="../../media/poster_topendwedding.jpg" alt="Top End Wedding poster" class="poster_jpg">

                    </span>
               
			   <span class="nowShowing_container">
                    <h2>Top End Wedding</h2>
                    <h3> SHOWING:</h3>
                    <p>
                        Mon - Tues: 6pm (T18)<br>
                        Sat - Sun: 3pm (T15)<br>
                    </p>


                    </span>
              
                    <span class="nowShowing_Card">
                        <img src="../../media/poster_dumbo.jpg" alt="Dumbo poster" class="poster_jpg">
                    </span>
                    <!-this should float to the side right of the poster->

                    <span class="nowShowing_container">
                        <h2>Dumbo</h2>
                        <h3> SHOWING:</h3>
                        <p>
                            Mon - Tues: 12pm (T12)<br>
                            Wed - Fri: 6pm (T18)<br>
                            Sat - Sun: 12pm (T12)<br>
                        </p>

                    </span>
               

                    <span class="nowShowing_Card">
                        <img src="../../media/poster_thehappyprince.jpg" alt="The Happy Prince poster" class="poster_jpg" class="poster_jpg">
                    </span>
                    <!-this should float to the side right of the poster->

                    <span class="nowShowing_container">
                        <h2>The Happy Prince</h2>
                        <h3> SHOWING:</h3>
                        <p>
                            Wed - Fri: 12pm (T12)<br>
                            Sat - Sun: 9pm (T21)<br>
                        </p>
                    </span>
                </article>

            </section>








            <section  id="linktoSynopsis">

                <h1>Synopsis</h1>



                <article class="synopsisCard">
                    <div class="synopsis_container">
                        <h2>Dumbo - [G]</h2>
                        <h3> Plot Description:</h3>
                        <p>
                            Struggling circus owner Max Medici enlists a former star and his two children to care for Dumbo, a baby elephant born with oversized ears. When the family discovers that the animal can fly, it soon becomes the main attraction -- bringing in huge audiences and revitalizing the run-down circus. The elephant's magical ability also draws the attention of V.A. Vandevere, an entrepreneur who wants to showcase Dumbo in his latest, larger-than-life entertainment venture.
                        </p>
                    </div>

                    <!–this should float to the right of the title/description->                        
                    <div class="video_trailer">
                        <iframe src="https://www.youtube.com/embed/7NiYVoqBt-8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </article>


                <article class="synopsisCard">

                    <h2>Avengers: Endgame - [MA15+]</h2>
                    <h3> Plot Description:</h3>
                    <p>
                        Adrift in space with no food or water, Tony Stark sends a message to Pepper Potts as his oxygen supply starts to dwindle. Meanwhile, the remaining Avengers -- Thor, Black Widow, Captain America and Bruce Banner -- must figure out a way to bring back their vanquished allies for an epic showdown with Thanos -- the evil demigod who decimated the planet and the universe.

                    </p>

                    <!–this should float to the right of the title/description->                        
                    <div class="video_trailer">
                        <iframe src="https://www.youtube.com/embed/TcMBFSGVi1c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                </article>


                <article class="synopsisCard">
                    <h2>The Happy Prince - [PG13+]</h2>
                    <h3> Plot Description:</h3>
                    <p>
                        His body ailing, Oscar Wilde lives out his last days in exile, observing the difficulties and failures surrounding him with ironic detachment, humour, and the wit that defined his life.
                    </p>


                    <!–this should float to the right of the title/description->                        
                    <div class="video_trailer">
                        <iframe src="https://www.youtube.com/embed/4HmN9r1Fcr8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>


                </article>


                <article class="synopsisCard">
                    <h2>Top End Wedding - [M]</h2>
                    <h3> Plot Description:</h3>
                    <p>
                        Lauren and Ned have 10 days to find Lauren's mother who has gone AWOL in the remote far north of Australia so that they can reunite her parents and pull off their dream wedding.
                    </p>


                    <!-this should float to the right of the title/description->
                    <div class="video_trailer">
                        <iframe src="https://www.youtube.com/embed/uoDBvGF9pPU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                </article>
            </section>












            <section  id="linktoBooking">
                <article>
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
                </script> Daniel Jungwirth, s3539595 & Jake Pandos, s3719022 &amp </div>
            <div id="DISCLAIMER">Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
        </footer>

		
    </body>
</html>
