<?php

use Illuminate\Http\RedirectResponse;

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

    public function homeIndex(){
        return View::make('home.index');
    }

    public function a_index(){
        return View::make('admin.admin');
    }

    public function admin_panel_index(){
        return View::make('admin.adminpanel');
    }

    public function add_type(){


        $rules = array(
            'pet_type_name'       => 'required'
        );

        $input = Input::all();
        $validation = Validator::make($input, $rules);

        if ($validation->passes())
        {
            Type::create($input);
            Session::flash('success', 'Successfully stored in database');
            return Redirect::route('panel');
            //return Redirect::to('admin_panel');
            //return View::make('admin.adminpanel');
        }
        else{
            Session::flash('error', 'There was an error with validation');
            return Redirect::to('admin_panel')->withErrors($validation)->withInput();
        }

    }

    public function add_category()
    {

        $rules = array(
            'type_id' => 'required',
            'category_name' => 'required'
        );

        $input = Input::all();
        $validator = Validator::make($input, $rules);

        if ($validator->passes()) {
            Category::create($input);
            Session::flash('success', 'Successfully inserted the category into the database');
            return Redirect::route('panel');
        } else {
            Session::flash('error', 'An error has occurred');
            return Redirect::to('admin_panel')->withErrors($validator)->withInput();
        }

    }

    public function select_category($id)
    {
        if (Request::ajax())
        {
            $category = DB::table('pet_category')->select('id','category_name')->where('type_id', '=', $id)->get();
            return Response::json( $category );
        }
    }

    public function add_tip(){

        $rules = array(
            'pet_type_id'       =>  'required',
            'pet_category_id'   =>  'required',
            'tip_about'         =>  'required',
            'tip_description'   =>  'required'
        );

        $input = Input::all();
        $validator = Validator::make($input, $rules);

        if($validator->passes()){
            Tip::create($input);
            Session::flash('success', 'Successfully inserted the tip into the database');
            return Redirect::route('panel');
        }else{
            Session::flash('error', 'An error has occurred');
            return Redirect::to('admin_panel')->withErrors($validator)->withInput();
        }

    }

    public function add_pet(){

        $rules = array(
            'type_id'       =>  'required',
            'category_id'   =>  'required',
            'appearance_id' =>  'required',
            'pet_name'      =>  'required',
            'pet_age'       =>  'required',
            'pet_price'     =>  'required'
        );

        $input = Input::all();
        $validator = Validator::make($input, $rules);

        if($validator->passes()){
            Pet::create($input);
            Session::flash('success', 'Successfully inserted the Pet into the database');
            return Redirect::route('panel');
        }else{
            Session::flash('error', 'An error has occured');
            return Redirect::to('admin_panel')->withErrors($validator)->withInput();
        }


    }


}
