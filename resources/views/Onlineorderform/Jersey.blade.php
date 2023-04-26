@extends('layouts.home')
@section('content')
	<body><br>
		<div class="container">
		<form method="post" id="submit_form" action="">
			<div class="card">
				<div class="card-header"><h2>Enter Jersey Details</h2></div>
				<div class="card-body"><div class="input-group mb-3">
      <span class="input-group-text" required>DATE DUE:</span>
      <input type="date" class="form-control" name="DateDue" required>
    </div><div class="input-group mb-3">
      <span class="input-group-text">TEAM:</span>
      <input type="Text" placeholder="ex. Los Angeles Lakers"class="form-control" name="TEAM" required>
    </div><div class="input-group mb-3">
      <span class="input-group-text">MANAGER:</span>
      <input type="Text" class="form-control" name="MANAGER" required></div>
      <div class="input-group mb-3">
      <span class="input-group-text">CONTACT PERSON:</span>
      <input type="text" class="form-control" name="CONTACTPERSON" required></div>
      <div class="input-group mb-3">
      <span class="input-group-text">CONTACT NUMBER</span>
      <input type="tel" class="form-control" name="CONTACTNUMBER" placeholder="ex. 09XXXXXXXXX" required></div>

						<div class="table-repsonsive">
							<span id="error"></span>
							<table class="table" id="item_table">
								<tr>
								<th>NO.</th>
        <th>NAME</th>
        <th>JERSEY NO.</th>
        <th>JERSEY SIZE</th>
        <th>SHORT SIZE</th>
        <th><button type="button" class="btn btn-success btn-sm add">Add Field</button></th>
								</tr>
							</table>
							<div class="input-group mb-3">
							<span class="input-group-text">LAYOUT/DESIGN:</span>
      <input type="file" class="form-control" name="LAYOUT/DESIGN" multiple></div>
	  <div class="input-group mb-3">
		<span class="input-group-text">MUSE:</span>
		<select class="form-control selectpicker" required><option value="">Nothing selected</option><option value="dress">DRESS</option><option value="sando">SANDO</option></select>
		<input type="number" class="form-control muse_number" name="muse_number[]" placeholder="Pick a number">
		<select class="form-control selectpicker" name="muse_top_sizes[]"><option value="">Select size</option><option value ="XS">Extra Small</option><option value ="S">Small</option><option value ="Medium">Medium</option><option value ="L">Large</option><option value = "XL">Extra Large</option><option value ="2XL">2XLarge</option><option value ="3XL">3XLarge</option><option value ="4XL">4XLarge</option><option value ="5XL">5XLarge</option></select></div>
		<div class="input-group mb-3">
			<span class="input-group-text">MANAGER:</span>
			<select class="form-control selectpicker" required><option value="">Nothing selected</option><option value="dress">Active shirt</option><option value="sando">SANDO</option></select>
			<input type="number" class="form-control manager_number" name="manager_number[]" placeholder="Pick a number">
			<select class="form-control selectpicker" name="manager_top_sizes[]" required><option value="">Select size</option><option value ="XS">Extra Small</option><option value ="S">Small</option><option value ="Medium">Medium</option><option value ="L">Large</option><option value = "XL">Extra Large</option><option value ="2XL">2XLarge</option><option value ="3XL">3XLarge</option><option value ="4XL">4XLarge</option><option value ="5XL">5XLarge</option></select></div>
	  <div class="input-group mb-3">
		<span class="input-group-text">OTHER DETAILS:</span>
		<input type="Text" class="form-control" name="OTHERDETAILS" placeholder="Add Customization" required></div>

							<div align="center">
								<input type="submit" name="submit" id="submit_button" class="btn btn-primary" value="Submit" />
							</div>
						</div>
                       
					</form>
					
				</div>
			</div>
		</div>
	</body>
<script>

$(document).ready(function(){

	var count = 0;
	var no = 1;
	function add_input_field(count)
	{

		var html = '';

		 html += '<tr>';
      html += '<td>'+no+'</td>';
      html += '<td><input type="text" class="form-control jersey_name" name="jersey_name[]"></td>';
      html += '<td><input type="number" class="form-control jersey_number" name="jersey_number[]"></td>';
      html += '<td><select class="form-control selectpicker" name="jersey_top_sizes[]" required><option value="">Select size</option><option value ="XS">Extra Small</option><option value ="S">Small</option><option value ="Medium">Medium</option><option value ="L">Large</option><option value = "XL">Extra Large</option><option value ="2XL">2XLarge</option><option value ="3XL">3XLarge</option><option value ="4XL">4XLarge</option><option value ="5XL">5XLarge</option></select></td>';
      html += '<td><select class="form-control selectpicker" name="jersey_short_sizes[]" required><option value="">Select size</option><option value ="XS">Extra Small</option><option value ="S">Small</option><option value ="Medium">Medium</option><option value ="L">Large</option><option value = "XL">Extra Large</option><option value ="2XL">2XLarge</option><option value ="3XL">3XLarge</option><option value ="4XL">4XLarge</option><option value ="5XL">5XLarge</option></select></td>';

		var remove_button = '';
		no++;
		if(count > 0)
		{
			remove_button = '<button type="button" name="remove" class="btn btn-danger btn-sm remove">Remove Field</button>';
		}

		html += '<td>'+remove_button+'</td></tr>';

		return html;

	}

	$('#item_table').append(add_input_field(0));

	$('.selectpicker').selectpicker('refresh');

	$(document).on('click', '.add', function(){

		count++;

		$('#item_table').append(add_input_field(count));

		$('.selectpicker').selectpicker('refresh');

	});

	$(document).on('click', '.remove', function(){

		$(this).closest('tr').remove();
		alert('The Data inserted will be deleted');
		no--;

	});

	
	});
	 
</script>
@endsection