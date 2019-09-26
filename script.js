/* Insert your javascript here */


/* var StandardAdultQty = document.getElementById('seats-STA');
var StandardConcessionQty = document.getElementById('seats-STP');
var StandardChildQty = document.getElementById('seats-STC');
var FirstClassAdultQty = document.getElementById('seats-FCA');
var FirstClassConcessionQty = document.getElementById('seats-FCP');
var FirstClassChildQty = document.getElementById('seats-FCC');
var BookBtn = document.getElementById('bookbtn');
var output = document.getElementById('total');


function calcTotal(qty, price){
	return qty * price;

}




function getTotal() {
    if(StandardAdultQty.value === '0' && StandardConcessionQty.value === '0'  && StandardChildQty.value === '0' && FirstClassAdultQty.value === '0' FirstClassConcessionQty.value === '0' FirstClassChildQty.value === '0'){
      alert('Please purchase at least 1 ticket');
    } else {
      var totalStandardAdult = calcTotal(StandardAdultQty.value, 19.80);
      var totalStandardConcession = calcTotal(StandardConcessionQty.value, 17.50);
      var totalStandardChild = calcTotal(StandardChildQty.value, 15.30);
	   var totalFirstClassAdult = calcTotal(FirstClassAdultQty.value, 30.00);
	    var totalFirstClassConcession = calcTotal(FirstClassConcessionQty.value, 27.00);
		 var totalFirstClassChild = calcTotal(FirstClassChildQty.value, 24.00);

      var total = totalStandardAdult + totalStandardConcession + totalStandardChild + totalFirstClassAdult + totalFirstClassConcession + totalFirstClassChild;
      var totalTix = parseInt(StandardAdultQty.value) + parseInt(StandardConcessionQty.value) + parseInt(StandardChildQty.value) + parseInt(FirstClassAdultQty.value) + parseInt(FirstClassConcessionQty.value) + parseInt(FirstClassChildQty.value);

      document.getElementById('total').innerHTML = "Total Price for Tickets $" +total;
    }
 */




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


let mainNavLinks = document.querySelectorAll("nav ul li a");
let mainSections = document.querySelectorAll("main section");

let lastId;
let cur = [];

// This should probably be throttled.
// Especially because it triggers during smooth scrolling.
// https://lodash.com/docs/4.17.10#throttle
// You could do like...
// window.addEventListener("scroll", () => {
//    _.throttle(doThatStuff, 100);
// });
// Only not doing it here to keep this Pen dependency-free.

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





var seat_prices = new Array();
seat_prices["None"]=0;
seat_prices["seats-STA"]=19.80;
seat_prices["seats-STP"]=17.50;
seat_prices["seats-STC"]=15.30;
seat_prices["seats-FCA"]=30.00;
seat_prices["seats-FCP"]=27.00;
seat_prices["seats-FCC"]=24.00;

//Calculation
function calculateTotal(qty, price){
    return qty * seat_prices;
}
    function getSeatPrice() {
        var seatPrice=0;
        var form =document.forms["seatform"];
        var seatSTA = form.elements["seats-STA"];
        var seatSTP = form.elements["seats-STP"];
        var seatSTC = form.elements["seats-STC"];
        var seatFCA = form.elements["seats-FCA"];
        var seatFCP = form.elements["seats-FCP"];
        var seatFCC = form.elements["seats-FCC"];

        seatPrice = seat_prices[seatSTA.value,seatSTP.value,seatSTC.value,seatFCA.value,seatFCP.value,seatFCC.value];

        return seatPrice;

    }
    function getTotal() {


        var total = seatSTA + seatSTP + seatSTC + seatFCA + seatFCP + seatFCC;


        document.getElementById('total').innerHTML = "Total Price for Tickets $" +total;
    }
    
    

