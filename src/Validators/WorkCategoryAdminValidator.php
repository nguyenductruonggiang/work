<?php
namespace Foostart\Work\Validators;

use Event;
use \LaravelAcl\Library\Validators\AbstractValidator;

use Illuminate\Support\MessageBag as MessageBag;

class WorkCategoryAdminValidator extends AbstractValidator
{
    protected static $rules = array(
        'work_category_name' => 'required',
    );

    protected static $messages = [];


    public function __construct()
    {
        Event::listen('validating', function($input)
        {
        });
        $this->messages();
    }

    public function validate($input) {

        $flag = parent::validate($input);

        $this->errors = $this->errors?$this->errors:new MessageBag();

        $flag = $this->isValidTitle($input)?$flag:FALSE;
        return $flag;
    }


    public function messages() {
        self::$messages = [
            'required' => ':attribute '.trans('work::work_admin.required')
        ];
    }

    public function isValidTitle($input) {

        $flag = TRUE;

        $min_lenght = config('work_admin_.name_min_lengh');
        $max_lenght = config('work_admin_.name_max_lengh');

        $work_category_name = @$input['work_category_name'];

        if ((strlen($work_category_name) <= $min_lenght)  || ((strlen($work_category_name) >= $max_lenght))) {
            $this->errors->add('name_unvalid_length', trans('name_unvalid_length', ['NAME_MIN_LENGTH' => $min_lenght, 'NAME_MAX_LENGTH' => $max_lenght]));
            $flag = TRUE;
        }

        return $flag;
    }
}