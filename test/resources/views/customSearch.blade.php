<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel 5.8 - Individual Column Search in Datatables</title>
  <link href="{{ asset('/css/form.css') }}" rel="stylesheet">
 </head>
 <body>
  <div class="panel-heading">
  </div>
  <!--https://codepen.io/colorlib/pen/KVoZyv-->

  <div class="container">
    <!-- <form id="contact" action="" method="post"> -->
      <form id="contact" role="form" method="POST" action="{{ url('/search') }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <h3>Search available properties</h3><br>
      <fieldset>
        <input placeholder="Location" type="text" tabindex="1" name='location'
        value="{{ old('location') }}" required/>
      </fieldset>
      <fieldset>
        Start Date
        <input placeholder="Start Date" type="date" name='startDate'
        value="{{ old('startDate') }}" tabindex="2" required/>
      </fieldset>
      <fieldset>
        End Date
        <input placeholder="End Date" type="date" name='endDate'
        value="{{ old('endDate') }}" tabindex="3" required/>
      </fieldset>
      <fieldset>
        <label for="beds">Number of beds:</label>
         <select id="beds" name="beds" value="{{ old('beds') }}" tabindex="4" required>
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
           <option value="6">6</option>
         </select>
       <!-- </fieldset>
       <fieldset> -->
         <label for="sleeps">Sleeps:</label>
          <select id="sleeps" name="sleeps" value="{{ old('sleeps') }}" tabindex="5" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
          </select>
      </fieldset>
      <fieldset>
        <label for="pets">Pets:</label>
          <input type="checkbox" name="pets" value="1" tabindex="6"/>
         <!-- <select id="pets" name="pets" value="{{ old('pets') }}" tabindex="6" required>
           <option value="0">0</option>
           <option value="1">1</option> -->
         </select>
      <!-- </fieldset>
      <fieldset> -->
        <label for="beach">Near Beach</label>
         <!-- <select id="beach" name="beach" value="{{ old('beach') }}" tabindex="7" required>
           <option value="0">0</option>
           <option value="1">1</option> -->
            <input type="checkbox" name="beach" value="1" tabindex="7"/>
         </select>
      </fieldset>

      <fieldset>
        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
      </fieldset>
    </form>
  </div>

</div>
</body>
</html>
