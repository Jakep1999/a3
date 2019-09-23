/* Insert your javascript here */

//Variables
var StandardAdultQty = document.getElementById('seats-STA');
var StandardConcessionQty = document.getElementById('seats-STP');
var StandardChildQty = document.getElementById('seats-STC');
var FirstClassAdultQty = document.getElementById('seats-FCA');
var FirstClassConcessionQty = document.getElementById('seats-FCP');
var FirstClassChildQty = document.getElementById('seats-FCC');
var BookBtn = document.getElementById('bookbtn');
var output = document.getElementById('total');

//Calculation
function calcTotal(qty, price){
	return qty * price;
	
}
//Message on how many tickets booked
function getMessage(qty, total) {
	return output.innerHTML = 'You Booked " + qty + 'ticket(s) and your total price is $' + total + '<br><br>' + '<button>Proceed To Checkout</button>';
}

submitBtn.addEventListener('click', function() { 

//Normal Prices
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

      getMessage(totalTix, total);
    }
});