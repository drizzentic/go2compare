@extends('layout.layout')


@section('content')
<div class="row" id="quote1">

<div class="col offset-m4 m6 s12">
<div class="card-panel" id="mypanel">

<div class="row">
  <h4 align="center" id="blue">Questions</h4>
{!! Form::open(array('url' => '/getquote','class'=>'form-horizontal')) !!}
 
  
    
<div class="input-field col offset-m1 m10 s12">
    
      <p>Has the car been modified, adapted and/or fitted with any optional extras such as changes to the bodywork,
       engine, wheels or audio system?</p>
        <input name="group1" type="radio" id="test1" />
      <label for="test1">Yes</label>
      <input name="group1" type="radio" id="test2" />
      <label for="test2">Yellow</label>
      <br>
</div>
<div class="input-field col offset-m1 m10 s12">
     <p>Estimated Value of car in Ksh</p>
      <p class="range-field">
      <input type="range" id="test5" min="0" max="5000000" />
      </p>
     
</div>
<div class="input-field col offset-m1 m10 s12">
      <input  id="first_name2" type="text" class="validate">
      <label class="active" for="first_name2">How many times has it been repaired?</label>
</div>

<div class="input-field col offset-m6 s12">

 <button class="btn waves-effect waves-light" id="quotebtn" type="submit" name="action">Get Quote
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