
<!-- property_name, properties.near_beach, properties.accepts_pets, properties.sleeps, properties.beds, locations.location_name, bookings.start_date, bookings.end_date -->

<!--handle width based on device-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel 5.8 - Join Multiple Table</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
   <br />
   <h3 align="center">Property availablility</h3>
   <br />
 <div class="table-responsive">
  <table class="table table-bordered table-striped">
<thead>
  <tr>
      <th>Property Name</th>
      <th>Near Beach</th>
      <th>Accepts pets</th>
      <th>Sleeps</th>
      <th>Beds</th>
      <th>Location</th>
      <th>Start date</th>
      <th>End date</th>
  </tr>
</thead>
<tbody>

   @foreach($data as $row)
      <tr>
          <td>{{ $row->property_name }}</td>
          <td>{{ $row->near_beach }}</td>
          <td>{{ $row->accepts_pets }}</td>
          <td>{{ $row->sleeps }}</td>
          <td>{{ $row->beds }}</td>
          <td>{{ $row->location_name }}</td>
          <td>{{ $row->start_date }}</td>
          <td>{{ $row->end_date }}</td>

      </tr>
    @endforeach
    <tbody>
</table>
</div>
</html>
