@extends('layout.layout')


@section('content')
<div class="row" id="quote1">

<div class="col offset-m4 m6 s12">
<div class="card-panel" id="mypanel">

<div class="row">
 <h4 align="center" id="blue">Questions</h4>
{!! Form::open(array('url' => '/q2','class'=>'form-horizontal')) !!}
 
  
    
<div class="input-field col offset-m1 m10 s12">
    
      <select>
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Toyota</option>
      <option value="2">Mercedes</option>
      <option value="3">Nissan</option>
      <option value="3">BMW</option>
      <option value="3">Audi</option>
     
    </select>
    <label>What is the Make of the Car? </label>
</div>
<div class="input-field col offset-m1 m10 s12">
     <input  id="first_name2" type="text" class="validate">
      <label class="active" for="first_name2">Model</label>
     
</div>
<div class="input-field col offset-m1 m10 s12">
      <p>Are you its first owner?</p>
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