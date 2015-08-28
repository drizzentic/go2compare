@extends('layout.layout')



@section('content')

<div class="row" id="questionrow">

<div class="col offset-m2  m8">

<div class="card-panel">

<div id="q1">
<div class="row">
 <h3 align="center">Health Insurance</h3>
<div class="progress">
      <div class="determinate" style="width:00%"></div>

  </div>
 <h3 align="center">Step 1</h3>
<div class="input-field col offset-m1 m10 s12">
     <p>Date of Birth </p>
        <input type="date" class="datepicker">
</div>
<div class="input-field col offset-m1 m10 s12">
      <input  id="first_name2" type="text" class="validate">
      <label class="active" for="first_name2">Family Members</label>
</div>
<div class="input-field col offset-m1 m10 s12">
      <select>
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Male</option>
      <option value="2">Female</option>
     
    </select>
    <label>Gender</label>
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
      <option value="" disabled selected>Business status</option>
      <option value="1">Employed</option>
      <option value="2">Self-Employed</option>
     
     
    </select>
    <label>Career status </label>
</div>
<div class="input-field col offset-m1 m10 s12">
     <input  id="first_name2" type="text" class="validate">
      <label class="active" for="first_name2">Address</label>
     
</div>
<div class="input-field col offset-m1 m10 s12">
      <p>Any known medical condition</p>
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
          <p>Have you smoked in the last 12 months</p>
            <input name="group7" type="radio" id="test7" />
          <label for="test7">Yes</label>
          <input name="group7" type="radio" id="test8" />
          <label for="test8">No</label>
          <br>
          <br>
    </div>
      <div class="input-field col offset-m1 m10 s12">
           <input  id="first_name2" type="text" class="validate">
            <label class="active" for="first_name2">Annual Income</label>
           
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
    
      <p>Have you had any surgeries over the last 3 yrs</p>
        <input name="group10" type="radio" id="test10" />
      <label for="test10">Yes</label>
      <input name="group10" type="radio" id="test11" />
      <label for="test11">No</label>
      <br>
</div>
<div class="input-field col offset-m1 m10 s12">
     <p>Estimated yearly premiums</p>
      <p class="range-field">
      <input type="range" id="test5" min="0" max="5000000" />
      </p>
     
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

         <p>AIP insurance</p>
         
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
         <p>Diamond Trust Cover</p>
         
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