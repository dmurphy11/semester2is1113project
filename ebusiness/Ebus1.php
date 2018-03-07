<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8"/>
      <style>
        a:link, a:visited {
    background-color: white;
    color: black;
    border: 2px solid yellow;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}
        a:hover, a:active {
    background-color: yellow;
    color: white;
}
      
      </style>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>

    </head>
    
    <body>
            <!-- Main Heading-->
            <h2>Select a Product</h2>
            
            
            <form method="POST" action="Ebus2.php">
              
              <!-- Personal details labels and textboxes-->
              First Name:<br/>
              <input type="text" name="firstname">
              
              <br/>
              Surname:<br/>
              <input type="text" name="surname">
              
              <br/>
              Email Address:<br/>
              <input type="text" name="email" size="30">
              
              <br/>
              
              <!-- Salesforce rate and radio button-->
              <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br/>
              
              <!-- Cloud9 rate and radio button-->
              <label for="cloud9">
                <input type="radio" id="cloud9" name="product" checked onClick="disablebtnProceed()"/>
                Cloud9 @ $200
              </label>
             
              
              <br/>
              
              <!-- AWS rate and radio button-->
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
              </label>
              
              <br/>
              
              <!-- Gmail rate and radio button-->
              <label for="gmail">
                <input type="radio" id="gmail" name="product" checked onClick="disablebtnProceed()"/>
                GMail @ $400
              </label>
              
              <br/>
              <br/>
              
              <!-- Subtotal label and textbox-->
              <label for="subtotal">
                Sub Total: &nbsp;&nbsp;
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
              </label>
              
              <br/>
              
              
              <!-- Discount label and textbox-->
               <label for="discount" >
              Discount @ 5% &nbsp;&nbsp; 
              <input type="text" id="discount" name="discount" value="0.00" readonly/>
              <br>
              (- Discount)
               </label>
            
            <br/>
              
              <!-- VAT label and textbox-->
              <label for="VAT">
              VAT (10%): &nbsp;&nbsp;
                <input type="text" id="VAT" name="VAT" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <!-- Total label and textbox-->
              <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
                <br>
              (- Discount + VAT)
              </label>
    
              <br/>
              
              <!-- Button to show next page-->
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            
            <!-- Take off discount and add VAT-->
            <button onClick="calcSub()">Calculate Cost</button>

            
            <!-- Clear page-->
            <a role="button" href="Ebus1.php">Clear Choice</a>
    
    </body>
</html>