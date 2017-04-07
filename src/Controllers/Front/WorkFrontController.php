<?php

namespace Foostart\Work\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use URL,
    Route,
    Redirect;
use Foostart\Work\Models\Works;
use Foostart\Work\Validators\WorkAdminValidator;

class WorkFrontController extends Controller {

    public $data_view = array();
    private $obj_work = NULL;
    private $obj_validator = NULL;

    public function __construct() {
        $this->obj_work = new Works();
    }

    /**
     *
     * @return type
     */
    public function index(Request $request) {


        $obj_work = new Works();
        $works = $obj_work->get_works();
        $this->data_view = array(
            'request' => $request,
            'work' => $works
        );
        //return view('testimonial::testimonial.front.index', array('testimonials' => $testimonials));
        return view('work::work.front.index', $this->data_view);
    }

    public function abc(Request $request) {

//        $work = null;
        $input = $request->all();
        $work = new Works();
        $work = $work->get();
        $work_id = $this->obj_work->add_work($input);
        $this->data_view = array(
            'work' => $work,
            'request' => $request
        );
        //Message
        //return Redirect::route("testimonial::testimonial.admin.testimonial_edit", ["id" => $testimonial->testimonial_id],$this->data_view);
//        return view('work::work.front.index', $this->data_view);
//        \Session::flash('work', trans('work::work_admin.message_add_successfully'));
        return Redirect::route("work");
    }

    public function delete(Request $request) {

        $work = NULL;
        $work_id = $request->get('id');

        if (!empty($work_id)) {
            $work = $this->obj_work->find($work_id);

            if (!empty($work)) {
                //Message
                \Session::flash('message', trans('work::work_admin.message_delete_successfully'));

                $work->delete();
            }
        } else {
            
        }

        $this->data_view = array_merge($this->data_view, array(
            'work' => $work,
        ));

        return Redirect::route("work");
    }

    public function edit(Request $request) {

        $work = NULL;
        $work_id = (int) $request->get('id');


        if (!empty($work_id) && (is_int($work_id))) {
            $work = $this->obj_work->find($work_id);
        }

        $this->data_view = array_merge($this->data_view, array(
            'work' => $work,
            'request' => $request
        ));
        return view('work::work.front.edit', $this->data_view);
    }

     public function post(Request $request) {

        $this->obj_validator = new WorkAdminValidator();

        $input = $request->all();

        $work_id = (int) $request->get('id');
        $work = NULL;

        $data = array();

        if (!$this->obj_validator->validate($input)) {

            $data['errors'] = $this->obj_validator->getErrors();

            if (!empty($work_id) && is_int($work_id)) {

                $work = $this->obj_work->find($work_id);
            }
        } else {
            if (!empty($work_id) && is_int($work_id)) {

                $work = $this->obj_work->find($work_id);

                if (!empty($work)) {

                    $input['work_id'] = $work_id;
                    $work = $this->obj_work->update_work($input);

                    //Message
                    \Session::flash('message', trans('work::work_admin.message_update_successfully'));
                    return Redirect::route("work", ["id" => $work->work_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('work::work_admin.message_update_unsuccessfully'));
                }
            } else {

                $work = $this->obj_work->add_work($input);

                if (!empty($work)) {

                    //Message
                    \Session::flash('message', trans('work::work_admin.message_add_successfully'));
                    return Redirect::route("work", ["id" => $work->work_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('work::work_admin.message_add_unsuccessfully'));
                }
            }
        }

        $this->data_view = array_merge($this->data_view, array(
            'work' => $work,
            'request' => $request,
                ), $data);

        return view('work::work.work_edit', $this->data_view);
    }
}
