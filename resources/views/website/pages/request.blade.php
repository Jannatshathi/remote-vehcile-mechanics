@extends('website.master')
@section('content')
<div class="row">

    <div class="col-md-2"></div>
    <div class="col-md-8">
<article class="form">

    <div class="form__wrapper center-content">
        <h1>Request Panel</h1>
        
        <form action="{{route('website.myrequest.store')}}" method='POST'>
            @csrf
            
        <div class="acf-fields acf-form-fields -top">
        
        <div class="acf-field acf-field-text acf-field-60783ed916570 is-required" data-name="name-first"
            data-type="text" data-key="field_60783ed916570" data-required="1">
            <div class="acf-label">
                <label for="acf-field_60783ed916570">Name</label></div>
            <div class="acf-input">
                <div class="acf-input-wrap"><input type="text" id="acf-field_60783ed916570"
                        name="name" required="required" /></div>
            </div>
        </div>
        <div class="acf-field acf-field-text acf-field-60783ee916571 is-required" data-name="name-last" data-type="text"
            data-key="field_60783ee916571" data-required="1">
            <div class="acf-label">
                <label for="acf-field_60783ee916571">Address</label></div>
            <div class="acf-input">
                <div class="acf-input-wrap"><input type="text" id="acf-field_60783ee916571"
                        name="address" required="required" /></div>
            </div>
        </div>
        <div class="acf-field acf-field-text acf-field-60783ef016572 is-required" data-name="business" data-type="text"
            data-key="field_60783ef016572" data-required="1">
            <div class="acf-label">
                <label for="acf-field_60783ef016572">Location</label></div>
            <div class="acf-input">
                <div class="acf-input-wrap"><input type="text" id="acf-field_60783ef016572"
                        name="location" required="required" /></div>
            </div>
        </div>


        <label for="category">Services</label><br>
        <select id="category" name="service_id">
          <option value="Service type">Service</option>
          <option value="1" placeholder="washing" >Car Washing</option>
          <option value="2" placeholder="repair" >Glass Repair</option>
          <option value="3" placeholder="tool fix">Tool fix</option>
          <option value="4"placeholder="parts change">Tyre puncture</option>
          <option value="Others Services">Others Services</option>
          
        </select><br> <br>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  
    </form>
    </div>
</article>    <div class="col-md-2"></div>

    </div>
</div>
@endsection
