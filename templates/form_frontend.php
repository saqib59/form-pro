<center><h1>Prescription Drug Plan Worksheet</h1>
<h3>Get in Touch With A-1 Insurance Group, Inc.</h3></center>  
  <form id="form_pro_front">
  <div class="row">
    <div class="col span_6">
      <label>Do you take a medication?<span>*</span></label>
      <select name="medication" class="required">
        <option value="No" selected="">No</option>
        <option value="Yes">Yes</option>
      </select>
    </div>
  </div>
  <div class="row show_on_yes">
    <div class="col span_5">
      <!-- <div class="col span_12"> -->
      <label>Medication Name<span>*</span></label><br>
      <select class="search_select" class="required" name="do_you_medi[]">
       
      </select>
    </div>
    <div class="col span_5">
      <label>Quantity<span>*</span></label>
      <input type="text" name="quantity" class="required">
    </div>
    <div class="col span_5">
      <label>Per<span>*</span></label>
      <select name="per" class="required">
        <option name="daily">Daily</option>
        <option name="daily">Weekly</option>
        <option name="daily">Monthly</option>
        <option name="daily">Every three months</option>
        <option name="daily">Every six months</option>
        <option name="daily">Once a year</option>
      </select>
    </div>
    <div class="col span_5">
      <label>Type<span>*</span></label>
      <select name="type" class="required">
        <option value="Tablets">Tablets</option>
        <option value="Capsules">Capsules</option>
        <option value="Cannister">Cannister</option>
        <option value="Tubes">Tubes</option>
        <option value="Bottles">Bottles</option>
        <option value="Vials">Vials</option>
        <option value="patches">patches</option>
      </select>
    </div>
    <div class="col span_5">
      <label>Dosage Type<span>*</span></label>
      <select name="dosage_type" class="required">
        <option value="MG">MG</option>
        <option value="MCG">MCG</option>
        <option value="Units Per Day">Units Per Day</option>
        <option value="% SOLUTION">% SOLUTION</option>
      </select>
    </div>
    <div class="col span_5">
      <label>Dosage Amount<span>*</span></label>
      <input type="text" name="dosage_amount" class="required">
    </div>
    <div class="col span_5">
      <label>Add another medication<span>*</span></label>
      <select name="another_medication" class="required">
        <option value="Yes">Yes</option>
        <option selected="" value="No">No</option>
      </select>
    </div>
  </div>
  <div class="row show_on_yes_another">
    <div class="col span_5">
      <!-- <div class="col span_12"> -->
      <label>Medication Name<span>*</span></label>
      <select class="search_select" class="required" name="do_you_medi[]">
       
      </select>
    </div>
    <div class="col span_5">
      <label>Quantity<span>*</span></label>
      <input type="text" name="quantity[]" class="required">
    </div>
    <div class="col span_5">
      <label>Per<span>*</span></label>
      <select name="per[]" class="required">
        <option name="daily">Daily</option>
        <option name="daily">Weekly</option>
        <option name="daily">Monthly</option>
        <option name="daily">Every three months</option>
        <option name="daily">Every six months</option>
        <option name="daily">Once a year</option>
      </select>
    </div>
    <div class="col span_5">
      <label>Type<span>*</span></label>
      <select name="type[]" class="required">
        <option value="Tablets">Tablets</option>
        <option value="Capsules">Capsules</option>
        <option value="Cannister">Cannister</option>
        <option value="Tubes">Tubes</option>
        <option value="Bottles">Bottles</option>
        <option value="Vials">Vials</option>
        <option value="patches">patches</option>
      </select>
    </div>
    <div class="col span_5">
      <label>Dosage Type<span>*</span></label>
      <select name="dosage_type[]" class="required">
        <option value="MG">MG</option>
        <option value="MCG">MCG</option>
        <option value="Units Per Day">Units Per Day</option>
        <option value="% SOLUTION">% SOLUTION</option>
      </select>
    </div>
    <div class="col span_5">
      <label>Dosage Amount<span>*</span></label>
      <input type="text" name="dosage_amount[]" class="required">
    </div>
  </div>
  <div class="row">
    <div class="col span_5">
      <label>Name of your preferred pharmacy<span>*</span></label>
      <input type="text" class="required" name="preferred_pharmacy">
    </div>
    <div class="col span_5">
      <label>Pharmacy local pick up or mail order<span>*</span></label>
      <input type="text" class="required" name="mail_order">
    </div>
    <div class="col span_5">
      <label>Medicare Number</label>
      <input type="text" name="medicare_no">
    </div>
    <div class="col span_5">
      <label>Part A effective date</label>
      <input type="date" name="medicare_no">
    </div>
    <div class="col span_5">
      <label>Part B effective date</label>
      <input type="date" name="medicare_no">
    </div>
    <div class="col span_5">
      <label>Name</label>
      <input type="text" name="first_name" placeholder="First">
    </div>
    <div class="col span_5">
      <input type="text" name="first_name" placeholder="Last">
    </div>
    <div class="col span_5">
      <label>Email<span>*</span></label>
      <input type="email" name="email" class="required">
    </div>
    <div class="col span_5">
      <label>Phone<span>*</span></label>
      <input type="text" name="phone_no" class="required">
    </div>
    <div class="col span_5">
      <label>DOB<span>*</span></label>
      <input type="date" name="dob" class="required">
    </div>
    <div class="col span_5">
      <label>Address<span>*</span></label>
      <input type="text" name="address" class="required">
    </div>
    <div class="col span_5">
      <label>ZipCode<span>*</span></label>
      <select class="search_zipcode required" name="zipcode">
       
      </select>
    </div>
    <div class="col span_5">
      <label>Country<span>*</span></label>
      <input type="text" name="country" class="required">
      <input type="hidden" name="action" value="form_pro_submit">
    </div>
    <div class="col span_5">
      <label>Upload your files<span>*</span></label>
      <input type="file" name="user_file" class="required">
    </div>
    <div class="col span_10">
      <label>Comments or questions<span>*</span></label>
      <textarea name="comments"></textarea>
    </div>
  </div>
  <button type="submit" id="submit_btn">Submit</button>
</form>