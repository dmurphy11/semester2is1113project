/* global $ */

function calcSub(){
    
    // Declare Variable
    var argSubTotal;
    
    //if statement to show rate when corresponding radio button is cheched
    
    if(document.getElementById('salesforce').checked) {
      argSubTotal = 100;
    }
    else if (document.getElementById('cloud9').checked){
      argSubTotal = 200;
    }
     else if (document.getElementById('aws').checked){
      argSubTotal = 300;
     }
      else {
        argSubTotal = 400;
      }
    
      calcDisVatTotal(argSubTotal);
}

     //Declare function and variables
     
function calcDisVatTotal(parmSubTotal){
  var subTotal = parmSubTotal;
  var discountAmt;
  var vatAmt;
  var totalPrice;

    //calculate discount
  discountAmt = (parmSubTotal * 0.05);
  
  //Calculate VAT
  vatAmt = ((parmSubTotal - discountAmt) * 0.1);
  
  //Calculate total
  totalPrice = ((parmSubTotal + vatAmt) - discountAmt);
  
  //Show each  step in the textboxes
  display(subTotal, discountAmt, vatAmt, totalPrice);
}


  //declare function and assign values
function display(parm1, parm2, parm3, parm4){
  
  document.getElementById("subtotal").value = parm1;
  document.getElementById("discount").value = parm2;
  document.getElementById("VAT").value = parm3;
  document.getElementById("total").value = parm4;
  
    enablebtnProceed();
}


function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}