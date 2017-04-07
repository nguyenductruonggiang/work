<!-- SAMPLE NAME -->
<!DOCTYPE html>
<html>
    <head>
        <script src='//cloud.tinymce.com/stable/tinymce.min.js'></script>
        <script>
            tinymce.init({
                selector: 'textarea', // change this value according to your HTML
                plugin: 'a_tinymce_plugin',
                a_plugin_option: true,
                a_configuration_option: 400
            });

        </script>
    </head>

    <body>

    </body>
</html>

<div class="form-group">
    <?php $work_name = @$request->get('work_name') ? @$request->get('work_name') : @$work->work_name ?>
    
    {!! Form::label($name, trans('work::work_admin.name').':') !!}
    {!! Form::text($name, $work_name, ['class' => 'form-control', 'placeholder' => trans('work::work_admin.name').'']) !!}
</div>
<div class="form-group">
    <?php $work_situation = @$request->get('work_situation') ? @$request->get('work_situation') : @$work->work_situation ?>
    {!! Form::label($situation, trans('work::work_admin.situation').':') !!}
    {!! Form::text($situation, $work_situation, ['class' => 'form-control', 'placeholder' => trans('work::work_admin.name').'']) !!}
</div>
<div class="form-group">
    <?php $work_description = @$request->get('work_description') ? @$request->get('work_description') : @$work->work_description ?>
    {!! Form::label($description, trans('work::work_admin.description').':') !!}
    {!! Form::textarea($description, $work_description, ['class' => 'form-control', 'placeholder' => trans('work::work_admin.name').'']) !!}
</div>
<div class="form-group">
    <?php $work_address = @$request->get('work_address') ? @$request->get('work_address') : @$work->work_address ?>
    {!! Form::label($address, trans('work::work_admin.address').':') !!}
    {!! Form::text($address, $work_address, ['class' => 'form-control', 'placeholder' => trans('work::work_admin.name').'']) !!}
</div>
<div class="form-group">
    <?php $work_postday = @$request->get('work_postday') ? @$request->get('work_postday') : @$work->work_postday ?>
    {!! Form::label($postday, trans('work::work_admin.postday').':') !!}
    {!! Form::text($postday, $work_postday, ['class' => 'form-control', 'placeholder' => trans('work::work_admin.name').'']) !!}
</div>
<div class="form-group">
    <?php $work_expirationday = @$request->get('work_expirationday') ? @$request->get('work_expirationday') : @$work->work_expirationday ?>
    {!! Form::label($expirationday, trans('work::work_admin.expirationday').':') !!}
    {!! Form::text($expirationday, $work_expirationday, ['class' => 'form-control', 'placeholder' => trans('work::work_admin.name').'']) !!}
</div>
<!-- /SAMPLE NAME -->