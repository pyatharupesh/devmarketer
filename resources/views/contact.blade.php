@extends('main')
@section('content')
  <div class="row">
    <div class="col-md-12">
     <h1>Contact Me
     </h1>
     <hr>
     <form action="">
     <div class="form-group">
		<label for="email">Email:</label>
		<input type="email" name='email' class="form-control">
     </div>

      <div class="form-group">
		<label for="email">Subject:</label>
		<input type="text" name='subject' class="form-control">
     </div>

      <div class="form-group">
		<label for="email">Body:</label>
	<textarea name="body" id="" cols="5" rows="8" class='form-control'>Type your message here...</textarea>
     </div>

     <input type="submit" name='submit' value="Send Message" class='btn btn-success'>
     </form>
    </div>
  </div>
@stop



