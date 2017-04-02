@extends('admin.dashboard')

@section('admin_content')
	<div class="ui grid container">
	    <div class="eight wide centered column">
	        <h1 class="ui header centered horizontal divider">Add Borrower</h1>
	        <div class="ui form">
	            <div class="field">
	                <label>Name</label>
	                <input type="text" name="first-name" placeholder="Name">
	            </div>

				<div class="field">
	                <label>Email</label>
	                <input type="text" name="first-name" placeholder="Email">
	            </div>

	            <div class="field">
	                <label>Mobile</label>
	                <input type="text" name="first-name" placeholder="Mobile No">
	            </div>


	            <div class="field">
	                <label>Lend Date</label>
					<div class="ui calendar date">
	                    <div class="ui input left icon">
	                        <i class="calendar icon"></i>
	                        <input type="text" placeholder="Date">
	                    </div>
	                </div>
	            </div>

	            <div class="field">
	                <label>Return Date</label>
					<div class="ui calendar date">
	                    <div class="ui input left icon">
	                        <i class="calendar icon"></i>
	                        <input type="text" placeholder="Date">
	                    </div>
	                </div>
	            </div>


	             <div class="ui teal submit button">Submit</div>
	        </div>
	    </div>
	</div>
@endsection
