<?php

class DocumentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
    {
	}
    public function select()
    {
$doc = Input::get('doc');
        if($doc == 1){
            return Redirect::to('gov_doc');

        }
        if($doc == 2){
            return Redirect::to('bank_doc');
        }
        else{
            return Redirect::to('add_docs')
                ->with('error',"Exist");
        }
    }
    public function insert()
    {
      //  echo "here";

        $doc_type = Input::get('doc_type');
       if($doc_type == 1){
           /* $rules = array(
                'name'             => 'required',                        // just a normal required validation
                'name_on_doc'         => 'required',
                'num_on_doc'            => 'required|num_on_doc|unique:gov_doc',     // required and must be unique in the ducks table
                'password_confirm' => 'required|same:password'           // required and has to match the password field
            );

        // do the validation ----------------------------------
        // validate against the inputs from our form
        $validator = Validator::make(Input::all(), $rules);

        // check if the validator failed -----------------------
        if ($validator->fails()) {

            // get the error messages from the validator
            $messages = $validator->messages();

            // redirect our user back to the form with the errors from the validator
            return Redirect::to('gov_doc')
                ->withErrors($validator);

        } else{*/
           // echo "gov";
            $gov_doc = new GovtDoc;
            $gov_doc->doc_name = Input::get('name');
            $gov_doc->user_id = Sentry::getUser()->id;
            $gov_doc->name_on_doc = Input::get('name_on_doc');
            $gov_doc->num_on_doc = Input::get('num_on_doc');
            $gov_doc->save();

        }
        elseif($doc_type == 2){
        //echo "bank";
           // return Redirect::to('bank_doc');
            $bank_doc = new BankDoc;
            $bank_doc->bank_name = Input::get('bank_name');
            $bank_doc->user_id = Sentry::getUser()->id;
            $bank_doc->type = Input::get('type');
            $bank_doc->name_on_card = Input::get('name_on_card');
            $bank_doc->num_on_card = Input::get('num_on_card');
            $bank_doc->cvv = Input::get('cvv');
            $bank_doc->pin = Input::get('pin');
            $bank_doc->save();
            return Redirect::to('bank_doc')
                ->with('message',"done");
        }

    }
public function gov_id(){
    $Uid = Sentry::getUser()->id;
    return GovDocName::join('gov_doc','gov_doc.doc_name','=','gov_doc_name.id')
        ->where('gov_doc.user_id','=',$Uid)
        ->get(array('gov_doc_name.id','gov_doc.user_id','gov_doc_name.gov_doc_name','gov_doc.name_on_doc','gov_doc.num_on_doc'))->toJson();
}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
