<?php

namespace Foostart\Work\Models;

use Illuminate\Database\Eloquent\Model;

class Works extends Model {

    protected $table = 'works';
    public $timestamps = false;
    protected $fillable = [
        'work_name', 
        'work_situation' ,
        'work_description' ,
        'work_address',
        'work_postday',
        'work_expirationday'
    ];
    protected $primaryKey = 'work_id';

    /**
     *
     * @param type $params
     * @return type
     */
    public function get_works($params = array()) {
        $eloquent = self::orderBy('work_id');

        //work_name
        if (!empty($params['work_name'])) {
            $eloquent->where('work_name', 'like', '%'. $params['work_name'].'%');
        }

        $works = $eloquent->paginate(10);//TODO: change number of item per page to configs

        return $works;
    }



    /**
     *
     * @param type $input
     * @param type $work_id
     * @return type
     */
    public function update_work($input, $work_id = NULL) {

        if (empty($work_id)) {
            $work_id = $input['work_id'];
        }

        $work = self::find($work_id);

        if (!empty($work)) {

            $work->work_name = $input['work_name'];
            $work->work_situation = $input['work_situation'];
            $work->work_description = $input['work_description'];
            $work->work_address = $input['work_address'];
            $work->work_postday = $input['work_postday'];
            $work->work_expirationday = $input['work_expirationday'];
            $work->save();

            return $work;
        } else {
            return NULL;
        }
    }

    /**
     *
     * @param type $input
     * @return type
     */
    public function add_work($input) {

        $work = self::create([
                    'work_name' => $input['work_name'],
                    'work_situation' => $input['work_situation'],
                    'work_description' => $input['work_description'],
                    'work_address' => $input['work_address'],
                    'work_postday' => $input['work_postday'],
                    'work_expirationday' => $input['work_expirationday'],
        ]);
        return $work;
    }
}
