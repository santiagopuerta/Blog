<?php
 
 
class BaseController extends Controller {
 
	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if (!is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}
 
	function buildBase() {
    return View::make('base')->with('data', array(
      /*array(
        'module' => 'services.user',
        'name' => 'admin',
        'value' => $admin,
      ),*/
    ));
	}
 
  function json($data) {
    $headers = array(
      'Cache-Control' => 'max-age=0,no-cache,no-store,post-check=0,pre-check=0',
      'Expires' => 'Mon, 26 Jul 1997 05:00:00 GMT',
      'Content-Type' => 'application/json; charset=utf-8',
    );
    $content = ")]}',\n" . json_encode($data);
    return Response::make($content, 200, $headers);
  }
 
}