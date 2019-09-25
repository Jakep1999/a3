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
	





