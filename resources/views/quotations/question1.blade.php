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
        
        
          <p>Date of Birth</p>
            <input type="date" class="datepicker">
    </div>
    <div class="input-field col offset-m1 m10 s12">
         <p>Gender?</p>
            <input name="group1" type="radio" id="test1" />
          <label for="test1">Male</label>
          <input name="group1" type="radio" id="test2" />
          <label for="test2">Female</label>
          <br>
          <br>
    </div>
    <div class="input-field col offset-m1 m10 s12">
          <p>Have you smoked in the last 12 months</p>
            <input name="group2" type="radio" id="test3" />
          <label for="test3">Yes</label>
          <input name="group2" type="radio" id="test4" />
          <label for="test4">No</label>
          <br>
          <br>
    </div>
      <div class="input-field col offset-m1 m10 s12">
           <input  id="first_name2" type="text" class="validate">
            <label class="active" for="first_name2">Annual Income</label>
           
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
    <p>Select cover type</p>
        <input name="group5" type="radio" id="test5" />
      <label for="test5">Fast Track (Apply for up to 1M)</label>
      <input name="group5" type="radio" id="test6" />
      <label for="test6">Comprehensive(Apply for up to 2M)</label>
      <br>
   
</div>
<div class="input-field col offset-m1 m10 s12">
     <input  id="first_name2" type="text" class="validate">
      <label class="active" for="first_name2">Weekly Budget</label>
     
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





<div id="q5" style="display:none">
<div class="progress">
      <div class="determinate" style="width: 100%"></div>
  </div>
<h3 align="center" id="blue">Your Life insurance Quote Details.</h3>
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
         
         <p>Ksh 3000/wk for 1 yr</p>

        

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
         
         <p>Ksh 10,000/wk for 1 yr</p>

        

          <a class="btn waves-effect waves-light btn-large modal-trigger" href="#modal1"  id="quotebtn" type="submit" name="action">Buy
            
          </a>

       

</div>

</div><!-- end of row -->

</div>

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

        $( "#q5" ).show( "fold", 1000 );


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

 
 
   


</script>

@endsection