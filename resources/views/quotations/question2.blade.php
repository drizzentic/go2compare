@extends('layout.layout')


@section('content')
<div class="row" id="quote1">

<div class="col offset-m4 m6 s12">
<div class="card-panel" id="mypanel">

<div class="row">
  <h4 align="center" id="blue">Questions</h4>
{!! Form::open(array('url' => '/q3','class'=>'form-horizontal')) !!}
 
  
    
<div class="input-field col offset-m1 m10 s12">
    
      <p>When did you Purchase the car?</p>
        <input type="date" class="datepicker">
</div>
<div class="input-field col offset-m1 m10 s12">
      <select>
      <option value="" disabled selected>Choose your option</option>
      <option value="1">0-1000</option>
      <option value="2">1001-5000</option>
      <option value="3">5001-10001</option>
      <option value="3">10000+</option>
    </select>
    <label>What is the total annual mileage of this car?</label>
</div>
<div class="input-field col offset-m1 m10 s12">
      <p>Are you the owner of the car?</p>
        <input name="group1" type="radio" id="test1" />
      <label for="test1">Yes</label>
      <input name="group1" type="radio" id="test2" />
      <label for="test2">No</label>
      <br>
</div>

<div class="input-field col offset-m6 s12">

 <button class="btn waves-effect waves-light" id="quotebtn" type="submit" name="action">Submit
    <i class="fa fa-send"></i>
  </button>
</div>
</form>
</div>




</div>

</div>

</div>
</div>

@endsection