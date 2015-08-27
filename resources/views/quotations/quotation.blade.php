@extends('layout.layout')


@section('content')
<div class="row" id="quote1">

<div class="col offset-m4 m6 s12">
<div class="card-panel" id="mypanel">

<div class="row">
 <h5 align="center">Enter Registration Details</h5>


{!! Form::open(array('url' => '/q1','class'=>'form-horizontal')) !!}
 

<div class="input-field col offset-m1 m10 s12">
      <input  id="first_name2" type="text" class="validate">
      <label class="active" for="first_name2">Name</label>
</div>
<div class="input-field col offset-m1 m10 s12">
      <input  id="first_name2" type="text" class="validate">
      <label class="active" for="first_name2">Car Reg</label>
</div>
<div class="input-field col offset-m1 m10 s12">
      <select>
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Nairobi</option>
      <option value="2">Mombasa</option>
      <option value="3">Nakuru</option>
    </select>
    <label>Location</label>
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


@endsection