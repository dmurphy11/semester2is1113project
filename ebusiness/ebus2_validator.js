/* global $ */

function validateDetails(){
    
    var pin;
    
    pin = document.getElementById("user_pin").value;
    
    
    // Error handling regarding pin entry
    if (pin == ""){
        alert("Please enter your PIN");
    }
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
    }
    else{
        enablebtnPurchase();
    }
    
}

          //Once pin is validated enable Purchase button
     function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
}

     function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}
