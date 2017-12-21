<form action = "/Suggestion" method = "post">
    <div>
      <h1>{{$title}}</h1>
    </div>

    <div class="row">
      <div class="six columns">
        <label for="CompanyName">Company Name</label>
        <input class="u-full-width" type="text"  id="CompanyName" name="CompanyName" required>
      </div>

      <div class="six columns">
        <label for="BusinessName">Business Name</label>
        <input class="u-full-width" type="text"  id="BusinessName" name="BusinessName">
      </div>
    </div>

    <div class="row">
      <div class="twelve columns">
        <label for="Address">Address</label>
        <input class="u-full-width" type="text"  id="Address" name="Address">
      </div>
    </div>

    <div class="row">
      <div class="six columns">
        <label for="CompanyEmail">Email</label>
        <input class="u-full-width" placeholder="sdf@gmail.com" type="email" id="website" name = "email"required>
      </div>
      <div class="six columns">
        <label for="Celno">Contact Number</label>
        <input class="u-full-width" type="tel"  id="Celno" name="Celno"required>
      </div>
    </div>

    <div class="row">
      <div class="six columns">
        <label for="BusinessType">Type of Business</label>
        <select class="u-full-width" id="BusinessType" name="BusinessType">
          <option value="Venue">Venue</option>
          <option value="LogisticalEquipment">Logistical Equipment</option>
          <option value="PrintingShirts">Printing & Shirts</option>
          <option value="Tents">Tents</option>
          <option value="CateringServices">Catering Services</option>
          <option value="Transportation">Transportation</option>
          <option value="AVEquiptment">AV Equiptment</option>
          <option value="Other">Other</option>
        </select>
      </div>
      <div class="six columns">
        <label for="Contact Person">Contact Person</label>
        <input class="u-full-width" type="text"  id="Contact Person" name = "ContactPerson">
      </div>
    </div>

    <div class="row">
      <div class="six columns">
        <label for="Website">Website</label>
        <input class="u-full-width" type="text" id="website" name= "website">
      </div>

      <div class="six columns">
        <label for="Facebook">Facebook Page</label>
        <input class="u-full-width" type = "text" id="Facebook" name="Facebook">
      </div>
    </div>

    <div class="row">
      <div class="twelve columns">
        <label for="Notes">Notes for Administrator</label>
        <textarea class="u-full-width" id="Notes" name = "Notes"></textarea>
      </div>
    </div>
    <button class="button" type="clear">clear</button>
    <input class="button-primary u-pull-right" type="submit" value="Submit">
</form>