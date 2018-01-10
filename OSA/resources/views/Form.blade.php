<form>
    <div>
      <h1>{{$title}}</h1>
    </div>

    <div class="row">
      <div class="six columns">
        <label for="CompanyName">Company Name</label>
        <input class="u-full-width" type="text"  id="CompanyName" required>
      </div>

      <div class="six columns">
        <label for="BusinessName">Business Name</label>
        <input class="u-full-width" type="text"  id="BusinessName">
      </div>
    </div>

    <div class="row">
      <div class="twelve columns">
        <label for="Address">Address</label>
        <input class="u-full-width" type="text"  id="Address">
      </div>
    </div>

    <div class="row">
      <div class="six columns">
        <label for="CompanyEmail">Email</label>
        <input class="u-full-width" placeholder="sdf@gmail.com" type="email" id="website" required>
      </div>
      <div class="six columns">
        <label for="Celno">Contact Number</label>
        <input class="u-full-width" type="tel"  id="Celno" required>
      </div>
    </div>

    <div class="row">
      <div class="six columns">
        <label for="BusinessType">Type of Business</label>
        <select class="u-full-width" id="BusinessType">
          @foreach($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="six columns">
        <label for="Contact Person">Contact Person</label>
        <input class="u-full-width" type="text"  id="Contact Person">
      </div>
    </div>

    <div class="row">
      <div class="six columns">
        <label for="Website">Website</label>
        <input class="u-full-width" type="text" id="website">
      </div>

      <div class="six columns">
        <label for="Facebook">Facebook Page</label>
        <input class="u-full-width" type = "text" id="Facebook">
      </div>
    </div>

    @if (!empty($view))
      <div class="row">
        <div class="twelve columns">
          <label for="Notes">Notes for Administrator</label>
          <textarea class="u-full-width" id="Notes"></textarea>
        </div>
      </div>
    @endif
    <div class="row">
      <button class="button" type="reset">clear</button>
      <input class="button-primary submit-float" type="submit" value="Submit">
    </div>
      
</form>