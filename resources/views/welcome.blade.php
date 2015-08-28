@extends('layout.layout')


@section('content')

<div class="row" id="header">

    <div class="col m12 s12">
     <div class="headercontent">

      <div class="bigheader">

          <h1 id="intro">got2compare</h1>
           <h4>Car insurance</h4>
          <div id="intro-message">
          <h5 id="message1" style="display:none">The only insurance company that goes out of its way to get you what you 
          deserve</h5>
          <h5 id="message2" style="display:none">The Most trusted company in Africa
          deserve</h5>
          </div>
         
          <div id="headerbtn">
          <a href="/q4"class="waves-effect waves-light btn-large" id="quotebtn">Get 2 Compare</a>
         
          </div>

      </div>

      </div>

    </div>

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

        <div class="col m4">
         <div class="card small" id="servicecard">
            <div class="card-image">
              <span class="fa fa-smile-o  fa-5x"></span>
             <div class="card-content">
             <p>Excellent service that leaves our customers smiling</p>

             </div>
              
            </div>
           
          </div>

       </div>

        <div class="col m4">
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

@endsection