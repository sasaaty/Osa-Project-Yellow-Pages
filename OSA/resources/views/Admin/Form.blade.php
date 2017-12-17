<form>
    <div>
      <p onclick="editToggle(this)" class="u-pull-right close-btn">&times;</p>
      <h1>Supplier Suggestion</h1>
    </div>

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
        <label for="CompanyEmail">Email</label>
        <input class="u-full-width" placeholder="sdf@gmail.com" type="email" id="website" required>
      </div>
      <div class="six columns">
        <label for="Celno">Contact Number</label>
        <input class="u-full-width" type="tel"  name="Celno" required>
      </div>
    </div>

    <div class="row">
      <div class="six columns">
        <label for="BusinessType">Type of Business</label>
        <select class="u-full-width" name="BusinessType">
          @foreach($categories as $category)
            @if ($category->id == $current)
              <option value="{{$category->id}}" selected>{{$category->name}}</option>
            @else
              <option value="{{$category->id}}">{{$category->name}}</option>
            @endif
          @endforeach
        </select>
      </div>
      <div class="six columns">
        <label for="Contact Person">Contact Person</label>
        <input class="u-full-width" type="text"  name="Contact Person">
      </div>
    </div>

    <div class="row">
      <div class="six columns">
        <label for="Website">Website</label>
        <input class="u-full-width" type="text" name="website">
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
    <button class="button" type="clear">clear</button>
    <input class="button-primary u-pull-right" type="submit" value="Submit">
</form>