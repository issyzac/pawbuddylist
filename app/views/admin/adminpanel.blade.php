 @extends('master.adminlayout')
<?php
/**
 * Created by PhpStorm.
 * User: issymac
 * Date: 3/31/15
 * Time: 2:50 AM
 */ ?>
 @section('contents')

<div class="col-lg-3 pull-left">

 <div class="panel">
      <div class="panel-heading">
         <h4>Input a new type of pet </h4>
      </div>
      <div class="panel-body">
         <form role="form">
            <div class="box-body">

                 {{--<div class="form-group">--}}
                   {{--<label for="pet_age">Type Name</label>--}}
                   {{--<select class="form-control" id="type_name">--}}
                         {{--<option> Dog </option>--}}
                         {{--<option> Cat </option>--}}
                   {{--</select>--}}
                 {{--</div>--}}

                  {{--<div class="form-group">--}}
                   {{--<label for="pet_age">Category</label>--}}
                   {{--<select class="form-control" id="pet_category">--}}
                         {{--<option> German Sherphered </option>--}}
                         {{--<option> Cheetoh </option>--}}
                         {{--<option> Dalmatian </option>--}}
                         {{--<option> Aeegan </option>--}}
                   {{--</select>--}}
                 {{--</div>--}}

                 {{--<div class="form-group">--}}
                   {{--<label for="pet_age">Appearence</label>--}}
                   {{--<select class="form-control" id="pet_appearence">--}}
                         {{--<option> Black </option>--}}
                         {{--<option> White </option>--}}
                         {{--<option> Plain </option>--}}
                         {{--<option> Patterned </option>--}}
                   {{--</select>--}}
                 {{--</div>--}}

                 <div class="form-group">
                   <label for="pet_name">Type Name</label>
                   <input type="email" class="form-control" id="pet_name" placeholder="Enter Pet Type's name">
                 </div>

                 {{--<div class="form-group">--}}
                   {{--<label for="pet_age">Age</label>--}}
                   {{--<input type="password" class="form-control" id="pet_age" placeholder="Enter Pet's age">--}}
                 {{--</div>--}}

                 {{--<div class="form-group">--}}
                   {{--<label for="exampleInputFile">Pet Picture</label>--}}
                   {{--<input  type="file" id="pet_picture">--}}
                 {{--</div>--}}
            </div><!-- /.box-body -->

               <div class="box-footer">
                 <button type="submit" class="btn btn-primary pull-right">Submit</button>
               </div>
             </form>
      </div>
  </div>

 <div class="panel ">
      <div class="panel-heading">
         <h4>Input a new Category of pet </h4>
      </div>
      <div class="panel-body">
         <form role="form">
            <div class="box-body">

                 <div class="form-group">
                   <label for="pet_age">Type</label>
                   <select class="form-control" id="pet_type">
                         <option> Dog </option>
                         <option> Cat </option>
                   </select>
                 </div>

                  {{--<div class="form-group">--}}
                   {{--<label for="pet_age">Category</label>--}}
                   {{--<select class="form-control" id="pet_category">--}}
                         {{--<option> German Sherphered </option>--}}
                         {{--<option> Cheetoh </option>--}}
                         {{--<option> Dalmatian </option>--}}
                         {{--<option> Aeegan </option>--}}
                   {{--</select>--}}
                 {{--</div>--}}

                 {{--<div class="form-group">--}}
                   {{--<label for="pet_age">Appearence</label>--}}
                   {{--<select class="form-control" id="pet_appearence">--}}
                         {{--<option> Black </option>--}}
                         {{--<option> White </option>--}}
                         {{--<option> Plain </option>--}}
                         {{--<option> Patterned </option>--}}
                   {{--</select>--}}
                 {{--</div>--}}

                 <div class="form-group">
                   <label for="pet_name">Category Name</label>
                   <input type="email" class="form-control" id="pet_name" placeholder="Enter Pet's category name">
                 </div>

                 {{--<div class="form-group">--}}
                   {{--<label for="pet_age">Age</label>--}}
                   {{--<input type="password" class="form-control" id="pet_age" placeholder="Enter Pet's age">--}}
                 {{--</div>--}}

                 {{--<div class="form-group">--}}
                   {{--<label for="exampleInputFile">Pet Picture</label>--}}
                   {{--<input  type="file" id="pet_picture">--}}
                 {{--</div>--}}
            </div><!-- /.box-body -->

               <div class="box-footer">
                 <button type="submit" class="btn btn-primary pull-right">Submit</button>
               </div>
             </form>
      </div>
  </div>

 </div>

  <div class="panel col-lg-3 col-sm-offset-1 ">
    <div class="panel-heading">
       <h4>New Tip </h4>
    </div>
    <div class="panel-body">
       <form role="form">
          <div class="box-body">

               <div class="form-group">
                 <label for="pet_age">Tip About</label>
                 <select class="form-control" id="tip_about">
                       <option> Dog </option>
                       <option> Cat </option>
                       <option> All </option>
                 </select>
               </div>

               <div class="form-group">
                  <label for="pet_age">Category</label>
                  <select class="form-control" id="tip_category">
                         <option> Health </option>
                         <option> Food </option>
                         <option> Medicines </option>
                  </select>
               </div>

               <div class="form-group">
                 <label for="pet_name">Tip</label>
                 <textarea type="email" class="form-control" rows="5" id="pet_name" placeholder="Enter the tip"></textarea>
               </div>

          </div><!-- /.box-body -->

             <div class="box-footer">
               <button type="submit" class="btn btn-primary pull-right">Submit</button>
             </div>
           </form>
    </div>
</div>


 <div class="panel col-lg-4 col-sm-offset-1 ">
     <div class="panel-heading">
        <h4>Input a new type of pet </h4>
     </div>
     <div class="panel-body">
        <form role="form">
           <div class="box-body">

                <div class="form-group">
                  <label for="pet_age">Type</label>
                  <select class="form-control" id="pet_type">
                        <option> Dog </option>
                        <option> Cat </option>
                  </select>
                </div>

                 <div class="form-group">
                  <label for="pet_age">Category</label>
                  <select class="form-control" id="pet_category">
                        <option> German Sherphered </option>
                        <option> Cheetoh </option>
                        <option> Dalmatian </option>
                        <option> Aeegan </option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="pet_age">Appearence</label>
                  <select class="form-control" id="pet_appearence">
                        <option> Black </option>
                        <option> White </option>
                        <option> Plain </option>
                        <option> Patterned </option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="pet_name">Pets Name</label>
                  <input type="email" class="form-control" id="pet_name" placeholder="Enter Pet's name">
                </div>

                <div class="form-group">
                  <label for="pet_age">Age</label>
                  <input type="password" class="form-control" id="pet_age" placeholder="Enter Pet's age">
                </div>

                <div class="form-group col-md-6">
                  <label for="pet_age">Price</label>
                  <input type="text" class="form-control" id="pet_price" placeholder="Tsh">
                </div>

                 <div class="form-group col-md-6">
                  <label for="pet_age">Amount</label>
                  <input type="text" class="form-control" id="pet_amount" placeholder="Amount available">
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Pet Picture</label>
                  <input  type="file" id="pet_picture">
                </div>
           </div><!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
              </div>
            </form>
     </div>
 </div>
{{--<div class="box box-primary">--}}
    {{--<div class="box-header">--}}
      {{--<h3 class="box-title">Quick Example</h3>--}}
    {{--</div><!-- /.box-header -->--}}

    {{--<!-- form start -->--}}
    {{--<form role="form">--}}
      {{--<div class="box-body">--}}
        {{--<div class="form-group">--}}
          {{--<label for="exampleInputEmail1">Email address</label>--}}
          {{--<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
          {{--<label for="exampleInputPassword1">Password</label>--}}
          {{--<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
          {{--<label for="exampleInputFile">File input</label>--}}
          {{--<input type="file" id="exampleInputFile">--}}
          {{--<p class="help-block">Example block-level help text here.</p>--}}
        {{--</div>--}}
        {{--<div class="checkbox">--}}
          {{--<label>--}}
            {{--<input type="checkbox"> Check me out--}}
          {{--</label>--}}
        {{--</div>--}}
      {{--</div><!-- /.box-body -->--}}

      {{--<div class="box-footer">--}}
        {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
      {{--</div>--}}
    {{--</form>--}}
  {{--</div><!-- /.box -->--}}
 @stop