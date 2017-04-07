{!! Form::open(['route'=>['work.edit', 'id' => @$work->work_id],  'files'=>true, 'method' => 'post'])  !!}
<!--END POST ID  -->
<!-- SAMPLE NAME TEXT-->
@include('work::work.elements.text', ['name' => 'work_name',
'description' => 'work_description',
'address' => 'work_address', 
'situation' => 'work_situation',
'postday' => 'work_postday',
'expirationday' => 'work_expirationday' ])
<!-- /END SAMPLE NAME TEXT -->
{!! Form::hidden('id',@$work->work_id) !!}

<!-- DELETE BUTTON -->

<!-- DELETE BUTTON -->

<!-- SAVE BUTTON -->
{!! Form::submit('Save', array("class"=>"btn btn-info pull-right ")) !!}
<!-- /SAVE BUTTON -->

{!! Form::close() !!}
