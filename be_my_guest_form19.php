<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Be My Guest Card Request Form</title>

 <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

<script>
$(function() {
$(".calendar" ).datepicker();


<?
              
              $bt = "";
              
              for ($i = 1; $i <= 9; $i++) {
              
              $bt .= '
			  var bt_flag'.$i.' = false;
			  
			  	$( "#button'.$i.'" ).click(function() {
					
					console.log ("clicked button - '.$i.'");
					if (!bt_flag'.$i.') {
						console.log ("flag was false - '.$i.'");
						
						$("#section'.$i.'").show();
						$("#button'.($i+1).'").show();
						$("#Expiration_Date'.$i.'").attr("required", true);
						$("#Good_at_PCs'.$i.'").attr("required", true);
						$("#Good_at_Addresses'.$i.'").attr("required", true);
						$("#Type_Of_Offer'.$i.'").attr("required", true);
						$("#Quantity'.$i.'").attr("required", true);
						
						bt_flag'.$i.' = true;
					}
					else {
						console.log ("flag was true - '.$i.'");
						$("#section'.$i.'").hide();
						$("#button'.($i+1).'").hide();
						$("#Expiration_Date'.$i.'").attr("required", false);
						$("#Good_at_PCs'.$i.'").attr("required", false);
						$("#Creative_Links_Extra_Notes'.$i.'").attr("required", false);
						$("#Type_Of_Offer'.$i.'").attr("required", false);
						$("#Quantity'.$i.'").attr("required", false);
						
						
						bt_flag'.$i.' = false;
					}
				});
				';
			  }
	echo $bt;		  
?>


});
</script>

<style>
body {
	font-family: Tahoma, Geniva, sans-serif;
	font-size: 11px;
	color: #000;
}
.bold {
	font-weight: bold;
}
td { text-align:left; }
h1 {
	color: #512c1d;
	font-size: 24px;
	font-weight: bold;
	text-align: center;
}
h3 {
	color: #512c1d;
	font-size: 14px;
	font-weight: bold;
}
label, input, select, textarea {
	margin: 8px;
}
#orangeBox {
	display: inline-block;
	border: 1px solid #EAD7AD;
	padding: 25px;
	border-radius: 5px;
	box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.1);
	background: #FFF2D4;
	background-image: -webkit-linear-gradient(top, #FFF2D4, #FFDF9B); /* For Chrome 25 and Safari 6, iOS 6.1, Android 4.3 */
  background-image:    -moz-linear-gradient(center top, #FFF2D4, #FFDF9B) repeat scroll 0% 0% transparent; /* For Firefox (3.6 to 15) */
  background-image:      -o-linear-gradient(top, #FFF2D4, #FFDF9B); /* For old Opera (11.1 to 12.0) */ 
  background-image:         linear-gradient(to bottom, #FFF2D4, #FFDF9B); /* Standard syntax; must be last */
	width: auto; 
	text-align: left;
}
#container {
	text-align: center;
	margin: 0px auto;
}
.grad { 
  background-color: #F07575; /* fallback color if gradients are not supported */
}
.nobr	{ white-space:nowrap; }
.asterisk {
	color: #f00;
}
.noPad {
	padding:0px;
	margin:0px;
	padding-right:3px;
}
.wide_field {
	width:100%;
}
.open_button {
	text-align:left;
	clear:both;
	background:#512c1d;
	color:#fff;
	padding: 3px;
	margin:10px 0px;
	cursor:pointer;
}
#button2,#button3,#button4,#button5,#button6,#button7,#button8,#button9 {
	display:none;
}
.form_section {
	display:none;
}
</style>
</head>

<body>
<form name="DDform" action="be_my_guest_submit_form.php" method="post" id="DDform">
<input name="Request_Title" type="hidden" id="Request_Title" value="Be_My_Guest_Card_Form" />
<div id="container">
  <div id="orangeBox">
    <div style="background:#fff; text-align:center;"><img src="art/lsm_logo_static.png" width="200" /></div>
      <h1>Be My Guest Card Request</h1>
    
    <div>
      <div>
        <div class="orangeBox">
          <div>
            <table border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><label>Your Name</label></td>
                <td><input name="Your_Name0" id="Your_Name0" type="text"></td>
              </tr>
              <tr>
                <td><label>LSMNow E-mail</label></td>
                <td><input name="LSMNow_email0" id="LSMNow_email0" type="text"></td>
              </tr>
              <tr>
                <td><label>Ship to Address (one line):</label></td>
                <td><input name="Ship_to0" id="Ship_to0" type="text" class="wide_field"></td>
              </tr>
              <tr>
                <td><label>Start Date</label></td>
                <td><input name="Start_Date0" id="Start_Date0" type="text" class="calendar"></td>
              </tr>
              <tr>
                <td><label><span class="asterisk">Expiration Date</span></label></td>
                <td><input name="Expiration_Date0" id="Expiration_Date0" type="text" class="calendar" required></td>
              </tr>
              <tr>
                <td><label><span class="asterisk">Good at PC #(s)*</span></label></td>
                <td><input name="Good_at_PCs0" type="text" id="Good_at_PCs0" class="wide_field" required/></td>
              </tr>
              <tr>
                <td><label><span class="asterisk">Good At Address(es)*</span></label></td>
                <td><textarea name="Good_at_Addresses0"  id="Good_at_Addresses0" rows="4" cols="40" required>
</textarea></td>
              </tr>
              <tr>
                <td><label><span class="asterisk">Type of Offer*</span></label></td>
                <td><select name="Type_Of_Offer0" id="Type_Of_Offer0" required>
                    <option value="Bakery Sandwiches">Bakery Sandwiches</option>
                    <option value="Box O' Joe®">Box O' Joe®</option>
                    <option value="Breakfast Sandwich with meat">Breakfast Sandwich with meat</option>
                    <option value="Coffee + 1">Coffee + 1</option>
                    <option value="Donut">Donut</option>
                    <option value="Dozen Donuts">Dozen Donuts</option>
                    <option value="Half Dozen Donuts">Half Dozen Donuts</option>
                    <option value="Large Hot Coffee">Large Hot Coffee</option>
                    <option value="Large Hot or Iced Coffee">Large Hot or Iced Coffee</option>
                    <option value="Large Iced Coffee">Large Iced Coffee</option>
                    <option value="Medium Hot Coffee">Medium Hot Coffee</option>
                    <option value="Medium Hot or Iced Coffee">Medium Hot or Iced Coffee</option>
                    <option value="Medium Hot or Iced Latte">Medium Hot or Iced Latte</option>
                    <option value="Medium Iced Tea">Medium Iced Tea</option>
                    <option value="Munchkins">Munchkins</option>
                    <option value="Small Iced Coffee">Small Iced Coffee</option>
                    <option value="Strawberry Banana Smoothie">Strawberry Banana Smoothie</option>
                    
                  </select></td>
              </tr>
               <tr>
                <td><label><span class="asterisk">Quantity*</span></label></td>
                <td><input name="Quantity0" id="Quantity0" type="text"></td>
              </tr>
              </table>
              
             <?
              
              $more_fields = "";
              
              for ($i = 1; $i <= 9; $i++) {
              
              $more_fields .= '
			  <div class="open_button" id="button'.$i.'">+ Add More</div>
              <table id="section'.$i.'" class="form_section">
			  <tr>
                <td><label>Start Date</label></td>
                <td><input name="Start_Date'.$i.'" id="Start_Date'.$i.'" type="text" class="calendar"></td>
              </tr>
              <tr>
                <td><label><span class="asterisk">Expiration Date*</span></label></td>
                <td><input name="Expiration_Date'.$i.'" id="Expiration_Date'.$i.'" type="text" class="calendar"></td>
              </tr>
              <tr>
                <td><label><span class="asterisk">Good at PC #(s)*</span></label></td>
                <td><input name="Good_at_PCs'.$i.'" type="text" id="Good_at_PCs'.$i.'" class="wide_field"/></td>
              </tr>
              <tr>
                <td><label><span class="asterisk">Good At Address(es)*</span></label></td>
                <td><textarea name="Good_at_Addresses'.$i.'"  id="Good_at_Addresses'.$i.'" rows="4" cols="40">
</textarea></td>
              </tr>
              <tr>
                <td><label><span class="asterisk">Type of Offer*</span></label></td>
                <td><select name="Type_Of_Offer'.$i.'" id="Type_Of_Offer'.$i.'" >
                    <option value="Bakery Sandwiches">Bakery Sandwiches</option>
                    <option value="Box O\' Joe®">Box O\' Joe®</option>
                    <option value="Breakfast Sandwich with meat">Breakfast Sandwich with meat</option>
                    <option value="Coffee + 1">Coffee + 1</option>
                    <option value="Donut">Donut</option>
                    <option value="Dozen Donuts">Dozen Donuts</option>
                    <option value="Half Dozen Donuts">Half Dozen Donuts</option>
                    <option value="Large Hot Coffee">Large Hot Coffee</option>
                    <option value="Large Hot or Iced Coffee">Large Hot or Iced Coffee</option>
                    <option value="Large Iced Coffee">Large Iced Coffee</option>
                    <option value="Medium Hot Coffee">Medium Hot Coffee</option>
                    <option value="Medium Hot or Iced Coffee">Medium Hot or Iced Coffee</option>
                    <option value="Medium Hot or Iced Latte">Medium Hot or Iced Latte</option>
                    <option value="Medium Iced Tea">Medium Iced Tea</option>
                    <option value="Munchkins">Munchkins</option>
                    <option value="Small Iced Coffee">Small Iced Coffee</option>
                    <option value="Strawberry Banana Smoothie">Strawberry Banana Smoothie</option>
                    
                  </select></td>
              </tr>
               <tr>
                <td><label><span class="asterisk">Quantity*</span></label></td>
                <td><input name="Quantity'.$i.'" id="Quantity'.$i.'" type="text" ></td>
              </tr>
			  </table>
              ';
              
              
              }
              
              echo $more_fields;
              
              ?>
              
             
              
             
            </table>
          </div>
        </div>
        <div>
          <input type="submit" name="submitButton" value="Create" onClick="" id="submitButton" title="Create" class="input_btn" style="" />
        </div>
      </div>
    </div>
  </div>
  </div>
</form>
</body>
</html>
