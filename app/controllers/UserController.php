<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('users.register');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        echo "hello";
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
    {
        $rules = array(
            'name' => 'required',                        // just a normal required validation
            'username' => 'required',                     // required and must be unique in the ducks table
            'password' => 'required',
            'confirm_password' => 'required|same:password'           // required and has to match the password field
        );

        $validator = Validator::make(Input::all(), $rules);

        // check if the validator failed -----------------------
        if ($validator->fails()) {

            // get the error messages from the validator
            $messages = $validator->messages();

            // redirect our user back to the form with the errors from the validator
            return Redirect::to('register')
                ->withErrors($validator);

        } else {
            try {
                $user = Sentry::getUserProvider()->create([
                    'name' => Input::get('name'),
                    'username' => Input::get('username'),
                    'password' => Input::get('password'),
                    'activated' => true,


                ]);

                return Redirect::to('register')
                    ->with('message',"Successfully Registered");
                // return Redirect::to('registration');
            } catch (Cartalyst\Sentry\users\ UserExistsException $e) {
                return Redirect::to('register')
                    ->with('error',"Exist");
            }
        }
    }

    public function getLogin(){
        {
            return View::make('users.login');
        }

    }

    public function postLogin()
    {
        try
        {
            // Login credentials
            $credentials = array(
                'username'    => Input::get('username'),
                'password' => Input::get('password'),
            );

            // Authenticate the user
            $user = Sentry::authenticate($credentials, false);
            if($user){
                //echo "logged in successfully";
                //return  Redirect::route('login.login');
                return Redirect::to('/desktop');
            }
        }

        catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
        {
            return Redirect::to('login')
                ->with('required',"require");
        }
        catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
        {
            return Redirect::to('login')
                ->with('wrong',"Wrong pass");
        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            return Redirect::to('login')
                ->with('wrongUser',"doesntExist");

        }

    }

    public function logout()
    {
        Sentry::logout();
        return Redirect::route('login');
        // return "sentry logged out";
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
