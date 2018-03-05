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
              <label for="cloud9">
                <input type="radio" id="cloud9" name="product" checked onClick="disablebtnProceed()"/>
                Cloud9 @ $200
              </label>
             
              
              <br/>
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
              </label>
              
              <br/>
              <label for="gmail">
                <input type="radio" id="gmail" name="product" checked onClick="disablebtnProceed()"/>
                GMail @ $400
              </label>
              
              <br/>
              <br/>
              
              <label for="subtotal">
                Sub Total: &nbsp;&nbsp;
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
              </label>
              
              <br/>
              
               <label for="discount" class="label6">
              Discount @ 5% &nbsp;&nbsp; 
              <input type="text" id="discount" name="discount" value="0.00" readonly/>
              <br>
              (- Discount)
               </label>
            
            <br/>
              
              <label for="VAT">
              VAT (10%): &nbsp;&nbsp;
                <input type="text" id="VAT" name="VAT" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
                <br>
              (- Discount + VAT)
              </label>
    
              <br/>
              
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            <button onClick="calcSub()">Calculate Cost</button>

            
            
            <a role="button" href="Ebus1.php">Clear Choice</a>
    
    </body>
</html>