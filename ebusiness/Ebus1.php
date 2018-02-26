<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>

    </head>
    
    <body>
        
            <h2 align="center">Select a Product</h2>
            
            
            <form method="POST" action="Ebus2.php">
              
              First Name:<br/>
              <input type="text" name="firstname">
              
              <br/>
              Surname:<br/>
              <input type="text" name="surname">
              
              <br/>
              Email Address:<br/>
              <input type="text" name="email" size="30">
              
              <br/>
              <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br/>
              
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
              </label>
              
              <br/>
              <br/>
              
              <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
              </label>
              
              <br/>
              <label for="VAT">
              VAT (10%):
                <input type="text" id="VAT" value="0.00" readonly/>
              </label>
              <br/>
              
              <label for="total">
                Total
                <input type="hidden" id="total" name="total" value="0.00" readonly/>
              </label>
    
              <br/>
              <br/>
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            <button onClick="calcSub()">Calculate Cost</button>
            <button onClick="calcDisVatTotal()">Calculate VAT</button>
            
            
            <a role="button" href="Ebus1.php">Clear Choice</a>
    
    </body>
</html>