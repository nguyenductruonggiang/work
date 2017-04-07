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
    <?php $work_category_name = $request->get('work_titlename') ? $request->get('work_name') : @$work->work_category_name ?>
    {!! Form::label($name, trans('work::work_admin.name').':') !!}
    {!! Form::textarea($name, $work_category_name, ['class' => 'form-control', 'placeholder' => trans('work::work_admin.name').'']) !!}
</div>
<div class="form-group">
    <?php $work_category_situation = $request->get('work_titlesituation') ? $request->get('work_situation') : @$work->work_category_situation ?>
    {!! Form::label($situation, trans('work::work_admin.situation').':') !!}
    {!! Form::textarea($situation, $work_category_situation, ['class' => 'form-control', 'placeholder' => trans('work::work_admin.name').'']) !!}
</div>
<!-- /SAMPLE NAME -->