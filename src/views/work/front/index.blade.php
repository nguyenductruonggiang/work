<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <link href="{{asset('foostart/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>    
        <link href="{{asset('foostart/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>   
        <link href="{{asset('foostart/css/nivo-slider.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('foostart/css/type-10.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('foostart/css/front.css')}}" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('foostart/libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('foostart/less/type-10.less', 'foostart/css/type-15.css');
        ?>
        <script src="{{asset('//cloud.tinymce.com/stable/tinymce.min.js')}}"></script>
        <script src="{{asset('foostart/js/jquery-1.11.0.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('foostart/js/jquery-migrate.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('foostart/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
        <script src="{{asset('foostart/js/front.js')}}" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-10">
            <div class="row">
                <div class="heading">
                    <!--TITLE-->
                    <div class="p-title">
                        <h2>Thức ăn gia súc gia cầm</h2>
                        <h2>Tuyển Dụng</h2>
                    </div>
                    <!--END TITLE-->
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="row"> 
                        <div class="the-content">
                            <div class="table-hiring">
                                <table>
                                    <thead>
                                        <!--TITLE TABLE-->
                                        <tr>
                                            
                                            <th></th>
                                            <th>STT</th>
                                            <th>Name</th>
                                            <th>Vị trí</th>
                                            <th style="width: 20%;">Mô tả</th>
                                            <th>Địa điểm</th>
                                            <th>Ngày đăng</th>
                                            <th>Ngày hết hạn</th>
                                            <th style="width:150px;"></th>
                                        </tr>
                                        <!--END TITLE TABLE-->
                                    </thead>
                                    <?php                        
//                                    $nav = $work -> toArray();
//                                    $counter = ($nav['current_page'] - 1) * $nav['per_page'] + 1;
//                                    ?>
                                   <?php foreach($work as $work): ?>
                                    <tbody>
                                        <tr>
                                            <td>
                                                
                                            </td>
                                            <!--CONTENT TABLE-->
<!--                                            <td>{!! $work->work_id !!}</td>
                                            <td>{!! $work->work_name !!}</td>
                                            <td class="name">{!! $work->work_situation !!}</td>
                                            <td>{!! $work->work_description !!}</td>
                                            <td>{!! $work->work_address !!}</td>
                                            <td>{!! $work->work_postday !!}</td>
                                            <td>{!! $work->work_expirationday !!}</td>-->
                                            
                                            <td><?php echo $work->work_id ?></td>
                                            <td><?php echo $work->work_name ?></td>
                                            <td><?php echo $work->work_situation ?></td>
                                            <td><?php echo $work->work_description ?></td>
                                            <td><?php echo $work->work_address ?></td>
                                            <td><?php echo $work->work_postday ?></td>
                                            <td><?php echo $work->work_expirationday ?></td>
                                            <td>
                                                <a href="{!! URL::route('work.delete',['id' => $work->work_id, '_token' => csrf_token()]) !!}"
                                                   class="btn btn-danger pull-right margin-left-5 delete " style="margin:2px;">
                                                    Delete </a>
                                                <a href="{!! URL::route('work.edit',['id' => $work->work_id, '_token' => csrf_token()]) !!}"
                                                   class="btn btn-info pull-right " style="margin:2px;">
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>  
                                        <!--END CONTENT TABLE-->
                                    </tbody>
                                   <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!DOCTYPE html>

    <!-- Trigger/Open The Modal -->
    <button id="myBtn" class="btn" style="margin-left: 45%;">Open Form</button>
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p style="text-align: center;">HAVE YOU THINK BEFORE YOU DO ?</p>
            {!! Form::open([ 'method' => 'post',
            'route' => 'worker',
            'id' => @$work->work_id,
            'files'=>true])!!}
            <!-- SAMPLE NAME TEXT-->
            @include('work::work.elements.text', ['name' => 'work_name',
            'description' => 'work_description',
            'address' => 'work_address', 
            'situation' => 'work_situation',
            'postday' => 'work_postday',
            'expirationday' => 'work_expirationday' ])
            <!-- /END SAMPLE NAME TEXT -->
            {!! Form::hidden('id',@$work->work_id) !!}
            <!-- SAVE BUTTON -->
            {!! Form::submit('Save', array("class"=>"btn btn-info pull-right ")) !!}
            <!-- /SAVE BUTTON -->
            {!! Form::close()!!}
        </div>
    </div>
    <script src="{{asset('foostart/js/tinymce.js')}}" type="text/javascript"></script>
</body>
</html>