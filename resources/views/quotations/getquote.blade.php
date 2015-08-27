@extends('layout.layout')


@section('content')
<div class="row" id="quotationqstns">

<div class="col offset-m3 m6  s12">

  <div class="card-panel" id="quotepanel">
  <div class="row">

       <div class="col m4">
         <div class="card">
            <div class="card-image">
              <img src="/images/gold.png" width="80%">
              
            </div>
           
          </div>

       </div>


         <div class="col m8">
         
         <p>Ksh 500,000</p>

         <p>Payable in 3 installments</p>

          <a class="btn waves-effect waves-light btn-large modal-trigger" href="#modal1" id="quotebtn" type="submit" name="action">Buy
            
          </a>

         </div>

    </div>
 </div>

</div>

<div class="col offset-m3 m6  s12">

  <div class="card-panel" id="quotepanel">
  <div class="row">

       <div class="col m4">
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

    </div>
 </div>

</div>






</div>

@endsection