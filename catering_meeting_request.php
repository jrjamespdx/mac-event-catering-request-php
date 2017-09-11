<?php
  $page = array(
    ‘title’ => ‘Catering Meeting Request’,
    ‘css’ => array(
      ‘css/blitzer/jquery-ui-1.10.0.custom.min.css’
    ),
    ‘js’ => array(
      ‘js/jquery-ui-1.10.0.custom.min.js’
    ),
    ‘active’ => ‘meeting_request’
  );
  require(‘include/header.php’);
?>

      
      <div class=“row-fluid”>
        <?php require(‘include/nav.php’); ?>
        <div class=“span9”>
          <div class=“row”><h3>Catering Meeting Request</h3></div>
          <form action=“” class=“form-horizontal” id=“form1”>
            <input type=“hidden” name=“request_type” value=“meeting_request” />
            <div class=“row”>
              <div class=“alert alert-info” style=“display:none;” id=“alert”>
                <button type=“button” class=“close” data-dismiss=“alert”>&times;</button>
                <p id=“alertBody”>

                </p>
              </div>
              <div class=“alert alert-error” style=“display:none;” id=“error”>
                <button type=“button” class=“close” data-dismiss=“alert”>&times;</button>
                <p id=“errorBody”>

                </p>
              </div>
            </div>
            <div class=“row”>
              <button class=“btn btn-inverse” type=“reset”>Clear Form</button>
              <button class=“btn btn-inverse” onclick=“if(checkForm()) {window.print();}”>Print and send form</button>
            </div>
            <div class=“row”>
              <h5>Setup Information (MANDATORY)</h5>
              <h5>One week advance scheduling required</h5>
            </div>
            <div class=“row”>
              <div class=“well span6”>
                <div class=“control-group”>
                  <label for=“email” class=“control-label”>Email:</label>
                  <div class=“controls”><input type=“text” name=“email” id=“email” required class=“required email”/></div>
                </div>
                <div class=“control-group”>
                  <label class=“control-label” for=“event_name”>Meeting or Event Name:</label>
                  <div class=“controls”>
                    <input type=“text” id=“event_name” name=“event_name” placeholder=“” required class=“required”/>
                  </div>
                </div>
                <div class=“control-group”>
                  <label class=“control-label” for=“event_date”>Date(s) of Event:</label>
                  <div class=“controls”>
                    <input type=“text” id=“event_date” name=“event_date” placeholder=“” required class=“required”/>
                  </div>
                </div>
                <div class=“control-group”>
                  <label class=“control-label” for=“attendees”>Approximate # of Attendees:</label>
                  <div class=“controls”>
                    <input type=“text” id=“attendees” name=“attendees” placeholder=“” required class=“required numeric input-mini”/>
                  </div>
                </div>
                <div class=“control-group”>
                  <label class=“control-label” for=“start_time”>Start Time:</label>
                  <div class=“controls”>
                    <input type=“text” id=“start_time” name=“start_time” placeholder=“” required class=“required”/>
                    <span class=“help-block”>Enter start time.</span>
                  </div>
                </div>
                <div class=“control-group”>
                  <label class=“control-label” for=“end_time”>End Time:</label>
                  <div class=“controls”>
                    <input type=“text” id=“end_time” name=“end_time” placeholder=“” required class=“required”/>
                    <span class=“help-block”>Enter end time.</span>
                  </div>
                </div>
              </div>
              <div class=“well span6”>
                <div class=“control-group”>
                  <label class=“control-label” for=“event_type”>Type of Event:</label>
                  <div class=“controls”>
                    <input type=“text” id=“event_type” name=“event_type” placeholder=“” required class=“required”/>
                  </div>
                </div>
                <div class=“control-group”>
                  <label class=“control-label” for=“department”>Department Name:</label>
                  <div class=“controls”>
                    <input type=“text” id=“department” name=“department” placeholder=“” required class=“required”/>
                  </div>
                </div>
                <div class=“control-group”>
                  <label class=“control-label” for=“account_number”>Account Number:</label>
                  <div class=“controls”>
                    <input type=“text” id=“account_number” name=“account_number” placeholder=“8-digit C number” required class=“required” maxlength=“20“ />
                  </div>
                </div>
                <div class=“control-group”>
                  <label class=“control-label” for=“committee”>Sponsoring Committee:</label>
                  <div class=“controls”>
                    <input type=“text” id=“committee” name=“committee” placeholder=“” required class=“required”/>
                  </div>
                </div>
                <div class=“control-group”>
                  <label class=“control-label” for=“liaison”>Liaison or Admin Assistant:</label>
                  <div class=“controls”>
                    <input type=“text” id=“liaison” name=“liaison” placeholder=“” required class=“required”>
                  </div>
                </div>
                <div class=“control-group”>
                  <label class=“control-label” for=“phone”>Phone Number or Extension:</label>
                  <div class=“controls”>
                    <input type=“text” id=“phone” name=“phone” placeholder=“” required class=“required phone”>
                  </div>
                </div>
              </div>
            </div>
            <div class=“row”>
              <div class=“well span7” id=“food”> 
                <h5>Food and Beverage Order (REQUIRED):</h5>                
                <input type=“checkbox” name=“food[0]” value=“Ice Water”/> Ice Water <input name=“ct[0]” class=“input-mini” /> Per Person <br/>
                <input type=“checkbox” name=“food[1]” value=“Coffee, Tea, Decaf” /> Coffee, Tea, Decaf <input name=“ct[1]” class=“input-mini” /> Per Person <br/>
                <input type=“checkbox” name=“food[2]” value=“Lemonade” /> Lemonade <input name=“ct[2]” class=“input-mini”/> Airpot(s) Per Gallon <br/>
                <input type=“checkbox” name=“food[3]” value=“Strawberry Lemonade” /> Strawberry Lemonade <input name=“ct[3]” class=“input-mini”/> Per Gallon<br/>
                <input type=“checkbox” name=“food[4]” value=“Iced Tea” /> Iced Tea <input name=“ct[4]” class=“input-mini”/> Per Gallon <br/>
                <input type=“checkbox” name=“food[5]” value=“Assorted Sodas and Mineral Waters” /> Assorted Sodas and Mineral Waters <input name=“ct[5]” class=“input-mini”/> Per Person <br/>
                <input type=“checkbox” name=“food[6]” value=“Gatorade (5 Gallons)” /> Gatorade (5 Gallons) <input name=“ct[6]” class=“input-mini”/> Per 5 Gallons <br/>

                <input type=“checkbox” name=“food[7]” value=“6 inch Sub Sandwich Platter“ /> 6 inch Sub Sandwich Platter <input name=“ct[7]” class=“input-mini”/> Per Person <br/>
                <input type=“checkbox” name=“food[8]” value=“Individual Bags of Chips, Pretzels, and Tortilla Chips“ /> Individual Bags of Chips, Pretzels, and Tortilla Chips <input name=“ct[6]” class=“input-mini”/> Per Person <br/>
                <input type=“checkbox” name=“food[9]” value=“Pretzels” /> Pretzels <input name=“ct[9]” class=“input-mini”/> Per Bowl <br/>
                <input type=“checkbox” name=“food[10]” value=“Snack Mix” /> Snack Mix <input name=“ct[10]” class=“input-mini”/> Per Bowl <br/>
                <input type=“checkbox” name=“food[11]” value=“Mixed Nuts” /> Mixed Nuts <input name=“ct[11]” class=“input-mini”/> Per Bowl <br/>
                <input type=“checkbox” name=“food[12]” value=“Assorted Candy Bars” /> Assorted Candy Bars <input name=“ct[12]” class=“input-mini”/> Per Person <br/>
                <input type=“checkbox” name=“food[13]” value=“Whole Fresh Fruit“ /> Whole Fresh Fruit <input name=“ct[13]” class=“input-mini” /> Per Person <br/>
                <input type=“checkbox” name=“food[14]” value=”Sliced Fresh Fruit“ /> Sliced Fresh Fruit <input name=“ct[14]” class=“input-mini” /> Per Person <br/>
                <input type=“checkbox” name=“food[15]” value=“Domestic Cheese Board“ /> Domestic Cheese Board <input name=“ct[15]” class=“input-mini” /> Per Person <br/>
                <input type=“checkbox” name=“food[16]” value=“Mediterranean Antipasto“ /> Mediterranean Antipasto <input name=“ct[16]” class=“input-mini” /> Per Person <br/>
                <input type=“checkbox” name=“food[17]” value=“Vegatable Crudite“ /> Vegetable Crudite <input name=“ct[17]” class=“input-mini” /> Per Person <br/>
                <input type=“checkbox” name=“food[18]” value=“Tortilla Chips with Guacamole“ /> Tortilla Chips with Guacamole <input name=“ct[18]" class="input-mini" /> Per Person <br/>
                <input type="checkbox" name="food[19]" value="Tortilla Chips with Salsa" /> Tortilla Chips with Salsa <input name="ct[19]" class="input-mini" /> Per Person <br/>
                <input type="checkbox" name="food[20]" value="Pita Chips and Hummus" /> Pita Chips and Hummus <input name="ct[20]" class="input-mini" /> Per Person <br/>
                <input type="checkbox" name="food[21]" value="Granola Bars“ /> Granola Bars <input name="ct[21]" class="input-mini" /> Per Person <br/>
                <input type="checkbox" name="food[22]" value="Cookies“ /> Cookies <input name="ct[22]" class="input-mini" /> Per Dozen <br/>
                <input type="checkbox" name="food[23]" value="Chocolate Fudge Brownies“ /> Chocolate Fudge Brownies <input name="ct[23]" class="input-mini" /> Per Dozen <br/>
                <input type="checkbox" name="food[24]" value="Lemon Bars“ /> Lemon Bars <input name="ct[24]" class="input-mini" /> Per Dozen <br/>
				<h5>Notes: For requesting food items on the menu that are not on this form</h5>
                <textarea rows="4" style="width:296px" id="food_notes“ name="food_notes“></textarea>

              </div> 
              <div class="well span5" style="line-height:13px;">
                <h5>AV Resources (available for in-house meetings) REQUIRED</h5>
                <input type="checkbox" name="av[0]" value="Screen"/> Screen<br/>
                <input type="checkbox" name="av[1]" value="Projector"/> Projector<br/>
                <input type="checkbox" name="av[2]" value="Wired microphone"/> Wired microphone<br/>
                <input type="checkbox" name="av[3]" value="Wired Microphone" />Wireless Microphone<br/>
				<input type="checkbox" name="av[4]" value="Apple TV" />Apple TV<br/>
				<input type="checkbox" name="av[5]" value="DVD/TV" />DVD/TV<br/>
                <input type="checkbox" name="av[6]" value="Committee Package" />Committee Package<br/>
                <input type="checkbox" name="av[7]" value="NO AV"/> NO AV<br/>
                <p> *Committee Package:  55" monitor, DVD/Blu-Ray Player, Apple TV, VGA & HDMI, and Power Combo</p>
                <h5>Setup Request (REQUIRED)</h5>


                <input type="radio" name="sr" id="" value="Whiteboard and Pens" /> Whiteboard and Pens<br/>
                <input type="radio" name="sr" id="" value="Rounds of 6 no backs to front" onclick="linNo()" /> Rounds of 6 no backs to front<br/>

                <input type="radio" name="sr" id="" value="Conference" onclick="linCheck();" /> Conference<br/>
                <input type="radio" name="sr" id="" value="Round tables" onclick="linCheck();" /> Round tables<br/>
                <input type="radio" name="sr" id="" value="U-Shape" onclick="linCheck();" /> U-Shape<br/>
                <input type="radio" name="sr" id="" value="Hollow Square" onclick="linCheck();" /> Hollow Square<br/>
                <input type="radio" name="sr" id="" value="Custom" /> Custom<br/>
                <input type="radio" name="sr" id="" value="As Is" /> As Is<br/>
                <label class="checkbox" style="display:none;" id="linen">
                  <input type="checkbox" name="linen" value="Linen is Required" /> Linen is Required
                </label>
                <input type="radio" name="sr" onclick="linNo();" value="Theater"/> Theater<br/>
                <input type="radio" name="sr" onclick="linNo();" value="Room empty"/> Room empty<br/>
                <input type="radio" name="sr" onclick="linNo();" value="Classroom"/> Classroom<br/>
                <h5>Notes: for AV/Setup notes only</h5>
                <textarea rows="4" style="width:296px" id="comments" name="comments"></textarea>
              </div>
            </div>
          </form>

          
        </div><!--/span-->
      </div><!--/row-->
<script type="text/javascript">
      function disableForm(tf){
        
        if(tf === true) {
          // $('label#mbrchk input:checkbox').attr('disabled', true);
          // $('input#netacc input:checkbox').attr('disabled', true);
          // $('textarea#comments').attr('disabled', true);
          // $('#food input').attr('disabled', true);
          // $('#setup_request input').attr('disabled', true);
          //$('button#submitForm').addClass('disabled').attr('disabled', true);
        } else {
          // $('label#mbrchk input:checkbox').removeAttr('disabled');
          // $('input#netacc input:checkbox').removeAttr('disabled');
          // $('textarea#comments').removeAttr('disabled');
          // $('#food input').removeAttr('disabled');
          // $('#setup_request input').removeAttr('disabled');
          //$('button#submitForm').removeAttr('disabled').removeClass('disabled');
        }
      }
      function linCheck(){
        $('#linen').show();
      }
      function linNo(){
        $('#linen').hide();
        $('#linen input:checkbox').removeAttr('checked');        
      }
      
      function disableLowerForm(tf){
        
      }
      
      function disableFields(tf){
        if(tf){
          
        }else {
          
        }
      }

      
      function submitForm(){
        var formData = $('#form1').serializeArray();
        $.ajax('submit_request.php', {
          success:function(data){
            if(data == -1) {
              setError('Something went wrong. Your request was not sent');
              
            }
          },
          data: formData,
          type: 'POST'
        });        
      }
      
      function checkForm(){
        var valid = true;
        if($('input[name*="food"]:checked').length < 1) {
          valid = false;
          setAlert('Please select an item from the food/beverage list');
        }
        if($('input[name*="av"]:checked').length < 1) {
          valid = false;
          setAlert('Please select an item from the AV Resources list');
        }
        if($('input[name=sr]:checked').length < 1) {
          valid = false;
          setAlert('Please select an item from the Setup Request list');
        }
       
        
        return valid;
      }
      
      $(document).ready(function(){
        if(!validateForm()) disableForm(true);
        $('input#event_date').multiDatesPicker({
          minDate: +7
        });
        $('input.required').blur(function(){
          if(!validateForm()) disableForm(true);
        });
        
        $('input#phone').blur(function(){
          var rx = new RegExp(/^[\d\(\)\-\s]{3,12}$/);
          var val = $(this).val();
          if(rx.test(val)) {
            $(this).parents('.control-group').removeClass('error');        
            if(!validateForm()) disableForm(true);
          } else {
            $(this).parents('.control-group').addClass('error');
            disableForm(true);
          }
          
        });
        
        $('#form1').submit(function(){
          if(confirm("Is everything correct? Do want to send this Form?")){
            if(checkForm()) {
              submitForm();
              setAlert("Catering Meeting Request Form has been sent.");
            } else {
              return false;              
            }
          } else {
            //setAlert('Canceled');
          }
          return false;
        });
        
      });
    </script>
      <?php require('include/footer.php'); ?>
