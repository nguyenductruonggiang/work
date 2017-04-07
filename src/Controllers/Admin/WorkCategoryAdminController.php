<?php namespace Foostart\Work\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use URL;
use Route,
    Redirect;
use Foostart\Work\Models\WorksCategories;
/**
 * Validators
 */
use Foostart\Work\Validators\WorkCategoryAdminValidator;

class WorkCategoryAdminController extends Controller {

    public $data_view = array();

    private $obj_work_category = NULL;
    private $obj_validator = NULL;

    public function __construct() {
        $this->obj_work_category = new WorksCategories();
    }

    /**
     *
     * @return type
     */
    public function index(Request $request) {

         $params =  $request->all();

        $list_work_category = $this->obj_work_category->get_works_categories($params);

        $this->data_view = array_merge($this->data_view, array(
            'works_categories' => $list_work_category,
            'request' => $request,
            'params' => $params
        ));
        return view('work::work_category.admin.work_category_list', $this->data_view);
    }

    /**
     *
     * @return type
     */
    public function edit(Request $request) {

        $work = NULL;
        $work_id = (int) $request->get('id');
        

        if (!empty($work_id) && (is_int($work_id))) {
            $work = $this->obj_work_category->find($work_id);

        }

        $this->data_view = array_merge($this->data_view, array(
            'work' => $work,
            'request' => $request
        ));
        return view('work::work_category.admin.work_category_edit', $this->data_view);
    }

    /**
     *
     * @return type
     */
    public function post(Request $request) {

        $this->obj_validator = new WorkCategoryAdminValidator();

        $input = $request->all();

        $work_id = (int) $request->get('id');

        $work = NULL;

        $data = array();

        if (!$this->obj_validator->validate($input)) {

            $data['errors'] = $this->obj_validator->getErrors();

            if (!empty($work_id) && is_int($work_id)) {

                $work = $this->obj_work_category->find($work_id);
            }

        } else {
            if (!empty($work_id) && is_int($work_id)) {

                $work = $this->obj_work_category->find($work_id);

                if (!empty($work)) {

                    $input['work_category_id'] = $work_id;
                    $work = $this->obj_work_category->update_work($input);

                    //Message
                    \Session::flash('message', trans('work::work_admin.message_update_successfully'));
                    return Redirect::route("admin_work_category.edit", ["id" => $work->work_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('work::work_admin.message_update_unsuccessfully'));
                }
            } else {

                $work = $this->obj_work_category->add_work($input);

                if (!empty($work)) {

                    //Message
                    \Session::flash('message', trans('work::work_admin.message_add_successfully'));
                    return Redirect::route("admin_work_category.edit", ["id" => $work->work_id]);
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

        return view('work::work_category.admin.work_category_edit', $this->data_view);
    }

    /**
     *
     * @return type
     */
    public function delete(Request $request) {

        $work = NULL;
        $work_id = $request->get('id');

        if (!empty($work_id)) {
            $work = $this->obj_work_category->find($work_id);

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

        return Redirect::route("admin_work_category");
    }

}