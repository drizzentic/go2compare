@extends('layout.layout')


@section('content')

<div class="row" id="header">

    <div class="col m12 s12" id="overlay">
     <div class="headercontent">
     <div class="col m8 s12" >

      <div class="bigheader">

          <h1 id="intro">got2compare</h1>
           <h4>Insurance</h4>
          <div id="intro-message">
          <h5 id="message1">Get to compare insurance covers from 47+ insurance companies</h5>
         
          </div>
         
          <div id="headerbtn">
          <a href="/q4"class="waves-effect waves-light btn-large" id="quotebtn">Get 2 Compare</a>
          
          </div>
          <p><i class="fa fa-phone fa-3x fa-fw"></i><h5>Call us at +254700 234 564 </h5></p>

      </div>
      </div>
      <div class="col m4 s12">
       
          
          <div class="card-panel">
           <div class="row">
           <h3 align="center" id="blue">Compare insurance covers with just a click</h3>
            {!! Form::open(array('url' => '/q2','class'=>'form-horizontal')) !!}

                  <div class="input-field col offset-m1 m10 s12">
                 <input  id="first_name2" type="text" class="validate">
                 <label class="active" for="first_name2">Name</label>
           
                  </div>

                  <div class="input-field col offset-m1 m10 s12">
                 <input  id="first_name2" type="text" class="validate">
                 <label class="active" for="first_name2">Email</label>
           
                  </div>
                  <div class="input-field col offset-m1 m10 s12">
                <select>
                        <option value="" disabled selected>County</option>
                        <option value="1">Nairobi</option>
                        <option value="2">Mombasa</option>
                        <option value="3">Machakos</option>
                        <option value="3">Nakuru</option>
                        <option value="3">Kisumu</option>
     
               </select>
                <label>County? </label>
           
                  </div>
                   <div class="input-field col offset-m1 m10 s12">

                    <a class="btn waves-effect waves-light modal-trigger" href="#modal2" id="quotebtn"  name="action">Submit
                   <i class="fa fa-spinner fa-spin"></i>
                    </a>

                   </div>


            {!! Form::close() !!}
          </div>

        </div>
            
      </div>

      </div>

    </div>

</div>

<div class="row" id="covers">

<h4 align="center">Compare Covers from 47+ insurance Companies</h4>
<a href="/q1">
<div class="col m3 s12">
  <div class="card small">
    <img src="/images/life.jpg" width="100%">
    <div class="card-content">
     <h5>Life Insurance</h5>
    </div>
  </div>
</div></a>

<a href="/q1"><div class="col m3 s12">
  <div class="card small">
    <img src="/images/car5.jpg" width="100%">
    <div class="card-content">
     <h5>Accident Insurance</h5>
    </div>
  </div>
</div></a>

<a href="/q2"><div class="col m3 s12">
  <div class="card small">
    <img src="/images/health.jpg" width="100%">
    <div class="card-content">
     <h5>Health Insurance</h5>
    </div>
  </div>
</div></a>

<a href="/q4"><div class="col m3 s12">
  <div class="card small">
    <img src="/images/car6.jpg" width="100%">
    <div class="card-content">
     <h5>Car Insurance</h5>
    </div>
  </div>
</div></a>

</div>
<div class="row" id="abtus">
<div class="container">

  <div class="col m12 s12">
  <h2 align="center">Welcome</h2>

    <p>If you're looking for an insurance policy for the first time, you want to beat your renewal quote, you're searching for the right financial product, 
    or you're after a great travel or utility deal, we're here to help.</p>
    <p>Whether you're looking for comprehensive insurance, third party fire and theft, or third party only, and whether it's for one car or multiple vehicles, our service makes it easy to find the product that you want, with the latest information from independent financial research and software company Defaqto 
    available to ensure you know exactly what you're getting from your purchase.</p>

  </div>

  </div>

</div>

<div class="row" id="whyus">
<div class="container">
<h2 align="center">Why Us</h2>

   <div class="col m4 s12">
         <div class="card small" id="servicecard">
            <div class="card-image">
              <span class="fa fa-rocket fa-5x"></span>
             <div class="card-content">
             <p>Our services are rocket fast so that you can get to driving</p>

             </div>
              
            </div>
           
          </div>

       </div>

        <div class="col m4 s12">
         <div class="card small" id="servicecard">
            <div class="card-image">
              <span class="fa fa-smile-o  fa-5x"></span>
             <div class="card-content">
             <p>Excellent service that leaves our customers smiling</p>

             </div>
              
            </div>
           
          </div>

       </div>

        <div class="col m4 s12">
         <div class="card small" id="servicecard">
            <div class="card-image">
              <span class="fa fa-paperclip fa-5x"></span>
             <div class="card-content">
             <p>Minimum paperwork</p>

             </div>
              
            </div>
           
          </div>

       </div>

  </div>

</div>

<div class="row" id="quotes">

<div class="container">
<h2 align="center">What are others saying?</h2>

<div class="col m12">

    <blockquote>
      I would recommend go2compare to anyone that knows anything about cars-Mr George Nyanchoke
    </blockquote>

  </div>

</div>

 

</div>

<!--

<div class="row" id="brands">

<div class="container">
<h3 align="center">Our Partners</h3>

 <div class="col m4">
         <div class="card" id="partnercard">
            <div class="card-image">
             <img src="/images/barclays.jpg"  width="80%"/>
              
            </div>
           
          </div>

       </div>


        <div class="col m4 s12">
         <div class="card" id="partnercard">
            <div class="card-image">
             <img src="/images/britam.jpg"  width="80%"/>
              
            </div>
           
          </div>

       </div>

        <div class="col m4 s12">
         <div class="card" id="partnercard">
            <div class="card-image">
             <img src="/images/dtb.jpg"  width="80%"/>
           
              
            </div>
           
          </div>

       </div>

</div>

 

</div>

-->
<div class="row" id="socialmedia">
<div class="container">

<div class="col m12 s12">

<h3 align="center" id="blue">Find us Online</h3>

<div class="col m3 s12">

 <span class="fa fa-facebook fa-5x"></span>

</div>
<div class="col m3 s12">

 <span class="fa fa-twitter fa-5x"></span>

</div>

<div class="col m3 s12">

 <span class="fa fa-google-plus fa-5x"></span>

</div>
<div class="col m3 s12">

 <span class="fa fa-linkedin fa-5x"></span>

</div>

</div>
</div>


</div>

@endsection