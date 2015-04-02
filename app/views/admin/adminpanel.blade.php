 @extends('master.adminlayout')
<?php
/**
 * Created by PhpStorm.
 * User: issymac
 * Date: 3/31/15
 * Time: 2:50 AM
 */ ?>
 @section('contents')
<div class="col-lg-12">
@include('admin.notifications')
</div>
<div class="col-lg-3 pull-left">

 <div class="panel">
      <div class="panel-heading">
         <h4>Input a new type of pet </h4>
      </div>
      <div class="panel-body">
         <form role="form" action="{{ url('addtype') }}" method="post" id="pet_type_form">
         <div class="alert alert-success avatar_success" role="alert" style="display: none">
                <ul></ul>
         </div>
         <ul></ul>
            <div class="box-body">
                 <div class="form-group">
                   <label for="pet_name">Type Name</label>
                   <input type="text" class="form-control" name="pet_type_name" id="pet_type_name" placeholder="Enter Pet Type's name">
                 </div>
            </div><!-- /.box-body -->

               <div class="box-footer">
                 <button type="submit" class="btn btn-primary pull-right">Submit</button>
               </div>
             </form>
      </div>
  </div>

 <div class="panel">
      <div class="panel-heading">
         <h4>Input a new Category of pet </h4>
      </div>
      <div class="panel-body">
         <form role="form" action="{{ url('category') }}" method="post">
            <div class="box-body">

                 <div class="form-group">
                   <label for="pet_age">Type</label>
                   <?php
                    $type = Type::all();
                    $type -> toarray();
                    ?>
                   <select class="form-control" id="type_id" name="type_id">
                   @foreach($type as $pet_type)
                         <option value="{{ $pet_type->id }}"> {{ $pet_type->pet_type_name }} </option>
                   @endforeach
                   </select>
                 </div>

                 <div class="form-group">
                   <label for="pet_name">Category Name</label>
                   <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Enter Pet's category name">
                 </div>

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
       <form role="form" action="{{ url('add_new_tip') }}" method="post">
          <div class="box-body">

               <div class="form-group ">
                 <label for="pet_type">Type</label>
                 <?php
                 $type = Type::all();
                 $type -> toarray();
                 ?>
                 <select class="form-control selectCategory" id="pet_type" name="pet_type_id">
                 @foreach($type as $pet_type)
                      <option value="{{ $pet_type->id }}"> {{ $pet_type->pet_type_name }} </option>
                 @endforeach
                       <option value="0"> All </option>
                 </select>
               </div>

               <div class="form-group">
                 <label for="tip-category">Category</label>
                 <select class="form-control" id="tip_pet_category" name="pet_category_id">
                        <option value="0"> All </option>
                 </select>
               </div>

               <div class="form-group">
                  <label for="tip_category">Tip About</label>
                  <select class="form-control" id="tip_category" name="tip_about">
                         <option value="1"> Health </option>
                         <option value="2"> Food </option>
                         <option value="3"> Medicines </option>
                  </select>
               </div>

               <div class="form-group">
                 <label for="pet_name">Tip</label>
                 <textarea type="text" class="form-control" rows="5" id="tip_description" name="tip_description" placeholder="Enter the tip"></textarea>
               </div>

          </div><!-- /.box-body -->

             <div class="box-footer">
               <button type="submit" class="btn btn-primary pull-right">Submit</button>
             </div>
           </form>
    </div>
</div>


 <div class="panel col-lg-3 col-sm-offset-1 ">
     <div class="panel-heading">
        <h4>Input a new pet </h4>
     </div>
     <div class="panel-body">
        <form role="form" action="{{ url('add_new_pet') }}" method="post">
           <div class="box-body">

                <div class="form-group">
                  <label for="pet_age">Type</label>
                  <?php
                   $type = Type::all();
                   $type -> toarray();
                   ?>
                  <select class="form-control pet_select_category" id="type_id" name="type_id">
                  @foreach($type as $pet_type)
                    <option value="{{ $pet_type->id }}"> {{ $pet_type->pet_type_name }} </option>
                  @endforeach
                  </select>
                </div>

                 <div class="form-group">
                  <label for="pet_age">Category</label>
                  <select class="form-control" id="pet_category_id" name="category_id">

                  </select>
                </div>

                <div class="form-group">
                  <label for="pet_age">Appearence</label>
                  <select class="form-control" id="appearance_id" name="appearance_id">
                        <option value="1"> Black </option>
                        <option value="2"> White </option>
                        <option value="3"> Plain </option>
                        <option value="4"> Patterned </option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="pet_name">Pets Name</label>
                  <input type="text" class="form-control" id="pet_name" name="pet_name" placeholder="Enter Pet's name">
                </div>

                <div class="form-group">
                  <label for="pet_age">Age</label>
                  <input type="text" class="form-control" id="pet_age" name="pet_age" placeholder="Enter Pet's age">
                </div>

                <div class="form-group col-md-6">
                  <label for="pet_age">Price</label>
                  <input type="text" class="form-control" id="pet_price" name="pet_price" placeholder="Tsh">
                </div>

                 <div class="form-group col-md-6">
                  <label for="pet_age">Amount</label>
                  <input type="text" class="form-control" id="pet_amount" name="pet_amount" placeholder="Amount available">
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Pet Picture</label>
                  <input  type="file" id="pet_image_id" name="pet_image_id">
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

  <script src="{{ asset('js/jquery-1.9.1.min.js') }}"></script>
  <script src="{{ asset('js/admin-panel.js') }}"></script>

 @stop