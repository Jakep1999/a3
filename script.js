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







/* ----- JAKES CODE ---- */
var seat_prices = {
  "STA": 19.80,
  "STP": 17.50,
  "STC": 15.30,
  "FCA": 30.00,
  "FCP": 27.00,
  "FCC": 24.00
}

window.addEventListener("load",function() { // when page has loaded
  document.getElementById("container").addEventListener("change",function(e) {

    var tgt = e.target; // whatever was changed
    if (tgt.tagName==="SELECT") {
      var total = 0;
      Object.keys(seat_prices).forEach(function(key) { // get the keys from the object
        var val = document.getElementById("seats-"+key).value;
        total += val==="ticketNumber"?0: val*seat_prices[key]; // gets the amount
      })
      document.getElementById("total").value=total.toFixed(2); // shows result with two decimals
    }
  })
})

//Regex and validation for form fields

function validate(cust-name) {
    var regex = /^[a-zA-Z \-.']{1,100}$/;
    var ctrl =  document.getElemetnById(cust-name);

    if (regex.test(ctrl.value)) {
        return true;
    }
    else {
        return false;
    }
}

// Will update
        var phoneExpression = /^(\(04\)|04|\+614)( ?\d){8}$/;

        // Valid
        var phoneNumber1 = "0411234567";
        var phoneNumber2 = "04 11234567";
        var phoneNumber3 = "04 1123 4567";
        var phoneNumber4 = "041123 5678";
		var phoneNumber5 = "0400 123 456";

        // Invalid
        var phoneNumber6 = "3892 11";
        var phoneNumber7 = "daniel 0411 234 567";
        var phoneNumber8 = "jake";

        if (phoneNumber1.match(phoneExpression)) {
            console.log('Valid 10 digit mobile number with no spaces');
        }

        if (phoneNumber2.match(phoneExpression)) {
            console.log('Valid 10 digit mobile number with space after Aus code');
        }

        if (phoneNumber3.match(phoneExpression)) {
            console.log('Valid 10 digit mobile number with space after the Aus code');
        }

        if (phoneNumber4.match(phoneExpression)) {
            console.log('Valid 10 digit mobile number with a space for the last 4 digits');
        }

        if (!phoneNumber5.match(phoneExpression)) {
            console.log('Valid 10 digit code with correct spaces');
        }
		
		if (!phoneNumber6.match(phoneExpression)) {
            console.log('Invalid mobile number');
        }
		

        if (!phoneNumber7.match(phoneExpression)) {
            console.log('A name and space before a valid spaced 10 digit mobile number');
        }

        if (!phoneNumber8.match(phoneExpression)) {
            console.log('No valid number entered, a name appears to have been entered instead');
        }


