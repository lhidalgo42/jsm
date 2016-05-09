  <?php

class AskController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /ask
	 *
	 * @return Response
	 */
	public function newGroup()
	{
		$types = FaqType::all();
		return View::make('ask.group.new')->with(compact('types'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /ask/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$faqs = Faq::all();
		return View::make('ask.new')->with(compact('faqs'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /ask
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /ask/{id}
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
	 * GET /ask/{id}/edit
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
	 * PUT /ask/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function newGroupSave()
	{
		$group = new FaqType();
		$group->name = Input::get('name');
		$group->save();
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /ask/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$faq = FaqType::find($id);
		$faq->delete();
	}

}