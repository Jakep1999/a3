/* Insert your javascript here */


function showACT() {
    
    /*show the synopsis card */
    document.getElementById("linktoSynopsis").style.visibility = 'visible';

    
    /* this will display this specific syponsis and hide all others */
    document.getElementById("synopsisACT").style.display = 'block';
    document.getElementById("synopsisANM").style.display = 'none';
    document.getElementById("synopsisRMC").style.display = 'none';
    document.getElementById("synopsisAHF").style.display = 'none';
    
    
    /* THESE ARE FOR WHEN YOU SELECT A DIFFERENT PANEL, WIPE BOOKING */
    /* wipe output for booking HTML*/
    document.getElementById("movieID").innerHTML = '';
    document.getElementById("movieDAY").innerHTML = '';
    document.getElementById("movieHOUR").innerHTML = '';
    
    /* wipe the values in the form */
    document.getElementById("movie-id").value = '';
    document.getElementById("movie-day").value = '';
    document.getElementById("movie-hour").value = '';
    
    return;
}


function showANM() {
    
    document.getElementById("linktoSynopsis").style.visibility = 'visible';
    
    document.getElementById("synopsisACT").style.display = 'none';
    document.getElementById("synopsisANM").style.display = 'block';
    document.getElementById("synopsisRMC").style.display = 'none';
    document.getElementById("synopsisAHF").style.display = 'none';
    
    /* THESE ARE FOR WHEN YOU SELECT A DIFFERENT PANEL, WIPE BOOKING */
    /* wipe output for booking HTML*/
    document.getElementById("movieID").innerHTML = '';
    document.getElementById("movieDAY").innerHTML = '';
    document.getElementById("movieHOUR").innerHTML = '';
    
    /* wipe the values in the form */
    document.getElementById("movie-id").value = '';
    document.getElementById("movie-day").value = '';
    document.getElementById("movie-hour").value = '';
}

function showRMC() {
    
    document.getElementById("linktoSynopsis").style.visibility = 'visible';

    document.getElementById("synopsisACT").style.display = 'none';
    document.getElementById("synopsisANM").style.display = 'none';
    document.getElementById("synopsisRMC").style.display = 'block';
    document.getElementById("synopsisAHF").style.display = 'none';
    
    /* THESE ARE FOR WHEN YOU SELECT A DIFFERENT PANEL, WIPE BOOKING */
    /* wipe output for booking HTML*/
    document.getElementById("movieID").innerHTML = '';
    document.getElementById("movieDAY").innerHTML = '';
    document.getElementById("movieHOUR").innerHTML = '';
    
    /* wipe the values in the form */
    document.getElementById("movie-id").value = '';
    document.getElementById("movie-day").value = '';
    document.getElementById("movie-hour").value = '';
}

function showAHF() {
    
    document.getElementById("linktoSynopsis").style.visibility = 'visible';

    document.getElementById("synopsisACT").style.display = 'none';
    document.getElementById("synopsisANM").style.display = 'none';
    document.getElementById("synopsisRMC").style.display = 'none';
    document.getElementById("synopsisAHF").style.display = 'block';
    
     /* THESE ARE FOR WHEN YOU SELECT A DIFFERENT PANEL, WIPE BOOKING */
    /* wipe output for booking HTML*/
    document.getElementById("movieID").innerHTML = '';
    document.getElementById("movieDAY").innerHTML = '';
    document.getElementById("movieHOUR").innerHTML = '';
    
    /* wipe the values in the form */
    document.getElementById("movie-id").value = '';
    document.getElementById("movie-day").value = '';
    document.getElementById("movie-hour").value = '';
}

function book(id, day, time) {
    
    var movieIDs= ["ACT", "ANM", "RMC", "AHF"];
    var movieDAYs = ["MON", "TUE", "WED", "THU", "FRI", "SAT", "SUN"];
    var movieHOURs = ["T12", "T15", "T18", "T21"];
    
    document.getElementById("bookingsCard").style.display = 'block';
    
    
    document.getElementById("movieID").innerHTML = movieIDs[id];
    document.getElementById("movie-id").value = movieIDs[id];
    
    document.getElementById("movieDAY").innerHTML = movieDAYs[day];
    document.getElementById("movie-day").value = movieDAYs[day];
    
    document.getElementById("movieHOUR").innerHTML = movieHOURs[time];
    document.getElementById("movie-hour").value = movieHOURs[time];
    
}



/* scroll changes active links */
let mainNavLinks = document.querySelectorAll("nav ul li a");
let mainSections = document.querySelectorAll("main section");
let lastId;
let cur = [];

window.addEventListener("scroll", event => {
  let fromTop = window.scrollY;

  mainNavLinks.forEach(link => {
    let section = document.querySelector(link.hash);

    if (
      section.offsetTop <= fromTop &&
      section.offsetTop + section.offsetHeight > fromTop
    ) {
      link.classList.add("active");
    } else {
      link.classList.remove("active");
    }
  });
});





var seat_prices = {
  "STA": 19.80,
  "STP": 17.50,
  "STC": 15.30,
  "FCA": 30.00,
  "FCP": 27.00,
  "FCC": 24.00
}

var discountseat_prices = {
  "STA": 14.00,
  "STP": 12.50,
  "STC": 11.00,
  "FCA": 24.00,
  "FCP": 22.50,
  "FCC": 21.00
}
	
	
	/* function discount() {
if (date.getDay()>0 && date.getDay() <6 && hour === "[T12]") give discount */


window.addEventListener("load",function() { // when page has loaded
  document.getElementById("container").addEventListener("change",function(e) {

    var tgt = e.target; // whatever was changed
  if (tgt.tagName==="SELECT") {
      var total = 0;
      Object.keys(seat_prices).forEach(function(key) { // get the keys from the object
        var val = document.getElementById("seats-"+key).value;
        total += val==="ticketNumber"?0: val*seat_prices[key]; // gets the amount
		
	  /* else if ((movieDAYs == "MON", "TUE", "WED", "THU", "FRI"  && movieHOURs == ["T12"])) {
		Object.keys(discountseat_prices).forEach(function(key) { // get the keys from the object
        var val = document.getElementById("seats-"+key).value;
        total += val==="ticketNumber"?0: val*discountseat_prices[key]; // gets the amount */
			
      })
      document.getElementById("total").value=total.toFixed(2); // shows result with two decimals
    }
  })
<<<<<<< HEAD
})
=======
})
  




//validation for form fields
function validateForm() {
    
    if (areTicketsBeingBought() == false){
        console.log("not buying any tickets!")
        return false;
    }
    
    
    if (validateCardDate() ==false){
        console.log('EXP DATE NO GOOD');
        return false
    }
    
     if(validateCardNumber() == false){
        console.log("CARD NUMBER NO GOOD")
         return false;
    }
    
    if (validateName() ==false){
        console.log('NAME NO GOOD');
        return false
    }
    
    if (validatePhone() ==false){
        console.log('MOBILE NUMBER NO GOOD');
        return false
    }
   
    
    else{
        console.log('validateForm is TRUE');
        return true;
    }

	
}
	

function areTicketsBeingBought(){
    
    var StnAdl = document.getElementById('seats-STA').value;
    var StnChi = document.getElementById('seats-STC').value;
    var StnPen = document.getElementById('seats-STP').value; 
    var FCAdl = document.getElementById('seats-FCA').value;  
    var FCChi = document.getElementById('seats-FCC').value; 
    var FCPen = document.getElementById('seats-FCP').value; 
    
    var totalTickets = StnAdl + StnChi + StnPen + FCAdl + FCChi + FCPen;
    
    if (totalTickets == 0){
        alert("please buy at least one ticket");
        return false;
    }
        
    
    
}
	
	//Regex for Name   ---   WORKS!
function validateName() {
   
    // word of 2 to 30 chars, one space, word of 2 to 30 chars
    var regex = /^(\w{2,30}\s{1}\w{2,30})$/;
    var name =  document.getElementById('cust-name').value;

    if(regex.test(name)){
        return true;  
    }
    else{
        alert("First and Last Name ONLY ---Western Name");
        document.getElementById('cust-name').focus();
        return false;
    }
}



function validateCardNumber(){
    var validExp1 = /^(\d){16}$/;
    var validExp2 = /^(\d){4}\s{1}(\d){4}\s{1}(\d){4}\s{1}(\d){4}$/;
    var validExp3 = /^(\d){4}\-{1}(\d){4}\-{1}(\d){4}\-{1}(\d){4}$/;
    
    var userCard =  document.getElementById('cust-card').value;
    if (validExp1.test(userCard))
        return true;
    else if (validExp2.test(userCard))
        return true;
    else if(validExp3.test(userCard))
        return true;
    else{
        alert("Card must be 16 digits, spaces and dashes allowed between 4ths");
        document.getElementById('cust-card').focus();
        return false;
    }
    
}


//Regex for Credit Card Expiry 
function validateCardDate()
{

    var date = new Date();
    var currMonth = date.getMonth() +1;
    var currYear = date.getFullYear();
    
    var inputExpiry = document.getElementById('cust-expiry').value;
    
    
    var inputSplit = inputExpiry.split("-");
    
    
    if (inputSplit[0] > currYear)
    {
        return true;
    }
    
        if (inputSplit[0] == currYear) 
            {
                
                    if (inputSplit[1] > currMonth)
                    {

                        return true;
                    }
                    else
                        {
                            alert("Card EXP must be beyond current month");
                            document.getElementById('cust-expiry').focus();
                            return false;
                        } 
                }
    alert("Card EXP not valid");
    return false;
}

//Regex for Mobile Number 
function validatePhone() {
        var phoneExpression = /^(\(04\)|04|\+614)( ?\d){8}$/;
        var userPhone = document.getElementById('cust-mobile').value;

        if (phoneExpression.test(userPhone)) {
            return true;
       
        }
    else
        {
            alert("Not valid Mobile Number");
            document.getElementById('cust-mobile').focus();
            return false;
        }

}







