<div id="modalWhole" class="modal-box">
  <div id="modalContent" class ="admin-block">
    <div id="adminContent" class="container">
      <div class="company">
        <div>
          <p onclick="editToggle()" class="u-pull-right close-btn">&times;</p>
          <h1>Edit Supplier</h1>
          <p class="subText" id="suggestor"></p>
        </div>

        <div class="tab">      
          <a class="current">Details</a>
          <a>Reviews</a>
        </div>
        <form>
            <div class="row">
              <div class="six columns">
                <label for="company_name">Company Name</label>
                <input class="u-full-width" type="text"  name="company_name" required>
                <input type="hidden">
              </div>

              <div class="six columns">
                <label for="business_name">Business Name</label>
                <input class="u-full-width" type="text"  name="business_name">
                <input type="hidden">
              </div>
            </div>

            <div class="row">
              <div class="twelve columns">
                <label for="address">address</label>
                <input class="u-full-width" type="text"  name="address">
                <input type="hidden">
              </div>
            </div>

            <div class="row">
              <div class="six columns">
                <label for="email">Email</label>
                <input class="u-full-width" placeholder="sdf@gmail.com" type="email" name="email">
                <input type="hidden">
              </div>
              <div class="six columns">
                <label for="contact_no">Contact Number</label>
                <input class="u-full-width" type="tel"  name="contact_no" required>
                <input type="hidden">
              </div>
            </div>

            <div class="row">
              <div class="six columns">
                <label for="category_id">Type of Business</label>
                <select class="u-full-width" name="category_id">
                  @foreach($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
                </select>
                <input type="hidden">
              </div>
              <div class="six columns">
                <label for="contact_person">Contact Person</label>
                <input class="u-full-width" type="text"  name="contact_person">
                <input type="hidden">
              </div>
            </div>

            <div class="row">
              <div class="six columns">
                <label for="website">Website</label>
                <input class="u-full-width" type="text" name="website">
                <input type="hidden">
              </div>

              <div class="six columns">
                <label for="fbpage">Facebook Page</label>
                <input class="u-full-width" type = "text" name="fbpage">
                <input type="hidden">
              </div>
            </div>

            <div id="notes" class="row">
              <div class="twelve columns">
                <label for="note_to_admin">Notes for Administrator</label>
                <textarea class="u-full-width" name="note_to_admin"></textarea readonly >
                <input type="hidden">
              </div>
            </div>
            
            <a class="button" id="undo">reset</a>
            <a class="button button-primary u-pull-right" id="edit">
              edit
              <input type="hidden" id="editID">
            </a>
        </form>
      </div>
    </div>
  </div>
</div>
