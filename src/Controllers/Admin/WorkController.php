<?php namespace Foostart\Work\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use URL;
use Route,
    Redirect;
/**
 * Validators
 */

class WorkController extends Controller {

    public $data_view = array();

    private $obj_validator = NULL;

    public function __construct() {
    }

    public function addFlashMessage($message_key, $message_value) {
        \Session::flash('message', trans('work::work.message_add_successfully'));
    }

}