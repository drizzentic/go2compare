@extends('layout.layout')



@section('content')

<div class="row" id="questionrow">

<div class="col offset-m2  m8">

<div class="card-panel">

<div id="q1">
<div class="row">
<div class="progress">
      <div class="determinate" style="width:00%"></div>

  </div>
 <h3 align="center">Step 1</h3>
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
<div class="input-field col offset-m7  s12">

<button class="btn waves-effect waves-light" id="step2" type="submit" name="action">Next
    <i class="fa fa-send"></i>
  </button>
</div>

</div><!-- end of row -->
<div class="divider"></div>

</div>

<div id="q2" style="display:none">
<div class="row">
<div class="progress">
      <div class="determinate" style="width: 20%">1/5</div>
  </div>
 <h3 align="center">Step 2</h3>
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
<div class="input-field col offset-m7  s12">

 <button class="btn waves-effect waves-light" id="back2step1" type="submit" name="action">Back
    <i class="fa fa-send"></i>
  </button>

<button class="btn waves-effect waves-light" id="step3" type="submit" name="action">Next
    <i class="fa fa-send"></i>
  </button>
 
</div>

</div><!-- end of row -->
<div class="divider"></div>
</div>


<div id="q3" style="display:none">

<div class="row">
<div class="progress">
      <div class="determinate" style="width: 60%"></div>
  </div>
<h3 align="center">Step 3</h3>

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
        <input name="group11" type="radio" id="test11" />
      <label for="test11">Yes</label>
      <input name="group11" type="radio" id="test12" />
      <label for="test12">No</label>
      <br>
</div>
<div class="input-field col offset-m7  s12">

<button class="btn waves-effect waves-light" id="back2step2" type="submit" name="action">Back
    <i class="fa fa-send"></i>
  </button>

<button class="btn waves-effect waves-light" id="step4" type="submit" name="action">Next
    <i class="fa fa-send"></i>
  </button>
</div>



</div><!-- end of row -->
<div class="divider"></div>

</div>

<div id="q4" style="display:none">
 <div class="row">
 <div class="progress">
      <div class="determinate" style="width: 80%"></div>
  </div>
 <h3 align="center">Almost There</h3>

 <div class="input-field col offset-m1 m10 s12">
    
      <p>Has the car been modified, adapted and/or fitted with any optional extras such as changes to the bodywork,
       engine, wheels or audio system?</p>
        <input name="group13" type="radio" id="test13" />
      <label for="test13">Yes</label>
      <input name="group13" type="radio" id="test14" />
      <label for="test14">No</label>
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
<div class="input-field col offset-m7  s12">

<button class="btn waves-effect waves-light" id="back2step3" type="submit" name="action">Back
    <i class="fa fa-send"></i>
  </button>

<button class="btn waves-effect waves-light" id="step5" type="submit" name="action">Get Quote
    <i class="fa fa-send"></i>
  </button>
</div>


 </div><!-- end of row -->
 <div class="divider"></div>

</div>

<div id="q5" style="display:none">
<div class="progress">
      <div class="determinate" style="width: 100%"></div>
  </div>
<h3 align="center" id="blue">Quotations</h3>
<div class="row">

 <div class="row">

       <div class="col offset-m1 m4">
         <div class="card">
            <div class="card-image">
              <img src="/images/gold.png" width="80%">
              
            </div>
           
          </div>

       </div>


         <div class="col m7">
         
         <p>Ksh 500,000</p>

         <p>Payable in 3 installments</p>

          <a class="btn waves-effect waves-light btn-large modal-trigger" href="#modal1" id="quotebtn" type="submit" name="action">Buy
            
          </a>

         </div>

    </div>
 

<div class="row">



       <div class="col offset-m1 m4">
         <div class="card">
            <div class="card-image">
              <img src="/images/silver.png" width="80%">
              
            </div>
           
          </div>

       </div>


         <div class="col m7">
         
         <p>Ksh 500,000</p>

         <p>Payable in 6 installments</p>

          <a class="btn waves-effect waves-light btn-large modal-trigger" href="#modal1"  id="quotebtn" type="submit" name="action">Buy
            
          </a>

       

</div>

</div><!-- end of row -->

</div>

</div>
</div>
</div>
</div>

<script type="text/javascript">
	$('#step2').click(function(){
        $('#q1').hide( "drop", { direction: "down" }, "slow" );

        $( "#q2" ).show( "fold", 1000 );


	});

	$('#step3').click(function(){
        $('#q2').hide( "drop", { direction: "down" }, "slow" );

        $( "#q3" ).show( "fold", 1000 );


	});

	$('#step4').click(function(){
        $('#q3').hide( "drop", { direction: "down" }, "slow" );

        $( "#q4" ).show( "fold", 1000 );


	});

	$('#step5').click(function(){
        $('#q4').hide( "drop", { direction: "down" }, "slow" );

        $( "#q5" ).show( "fold", 1000 );


	});

	$('#back2step1').click(function(){
        $('#q2').hide( "drop", { direction: "down" }, "slow" );

        $( "#q1" ).show( "fold", 1000 );


	});

	$('#back2step2').click(function(){
        $('#q3').hide( "drop", { direction: "down" }, "slow" );

        $( "#q2" ).show( "fold", 1000 );


	});

	$('#back2step3').click(function(){
        $('#q4').hide( "drop", { direction: "down" }, "slow" );

        $( "#q3" ).show( "fold", 1000 );


	});
   


</script>

@endsection