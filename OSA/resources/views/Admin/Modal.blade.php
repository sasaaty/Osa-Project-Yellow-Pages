<div id="modalWhole" class="modal-box">
  <div id="modalContent" class ="admin-block">
    <div class="container">
      <div class="company">
        <div>
          <p onclick="editToggle()" class="u-pull-right close-btn">&times;</p>
          <h1>Edit Supplier</h1>
        </div>

        <div class="tab">      
          <a class="current">Details</a>
          <a>Reviews</a>
        </div>
        <form>
            <div class="row">
              <div class="six columns">
                <label for="CompanyName">Company Name</label>
                <input class="u-full-width" type="text"  name="CompanyName" required>
              </div>

              <div class="six columns">
                <label for="BusinessName">Business Name</label>
                <input class="u-full-width" type="text"  name="BusinessName">
              </div>
            </div>

            <div class="row">
              <div class="twelve columns">
                <label for="Address">Address</label>
                <input class="u-full-width" type="text"  name="Address">
              </div>
            </div>

            <div class="row">
              <div class="six columns">
                <label for="Email">Email</label>
                <input class="u-full-width" placeholder="sdf@gmail.com" type="email" name="Email">
              </div>
              <div class="six columns">
                <label for="CelNo">Contact Number</label>
                <input class="u-full-width" type="tel"  name="CelNo" required>
              </div>
            </div>

            <div class="row">
              <div class="six columns">
                <label for="BusinessType">Type of Business</label>
                <select class="u-full-width" name="BusinessType">
                  @foreach($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="six columns">
                <label for="ContactPerson">Contact Person</label>
                <input class="u-full-width" type="text"  name="ContactPerson">
              </div>
            </div>

            <div class="row">
              <div class="six columns">
                <label for="Website">Website</label>
                <input class="u-full-width" type="text" name="Website">
              </div>

              <div class="six columns">
                <label for="Facebook">Facebook Page</label>
                <input class="u-full-width" type = "text" name="Facebook">
              </div>
            </div>

            <div class="row">
              <div class="twelve columns">
                <label for="Notes">Notes for Administrator</label>
                <textarea class="u-full-width" name="Notes"></textarea>
              </div>
            </div>
            
            <button class="button" type="clear">cancel</button>
            <input class="button-primary u-pull-right" type="submit" value="edit">
        </form>
      </div>
    </div>
  </div>
</div>
