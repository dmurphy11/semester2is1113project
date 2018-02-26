/* global $ */

function calcDisVatTotal(){
    
    var argVatTotal;
    
    if(document.getElementById('salesforce').checked) {
      argVatTotal = 10;
    }
    else {
      argVatTotal = 30;
    }
    
    displayvat(argVatTotal);
}
function displayvat(parmSubTotal){
  
  document.getElementById("VAT").value = parmSubTotal;
        
}