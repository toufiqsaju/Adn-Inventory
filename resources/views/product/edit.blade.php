@extends('master.app')

@section('cssScript')

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('admin/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('admin/dist/css/skins/_all-skins.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Product</h3>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <br/>
                    @endif
                <!-- /.box-header -->
                    <!-- form start -->
                    {!! Form::open(['action' => ['ProductController@update', $result->id ], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                    <div class="box-body">
                        <div class="form-group">
                            {{Form::label('product_name', 'Product Name')}}
                            {{Form::text('product_name', $result->product_name, ['class' => 'form-control', 'placeholder' => 'Product Name'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('supplier_id', 'Supplier ID')}}
                            {{Form::text('supplier_id', $result->supplier_id, ['class' => 'form-control', 'placeholder' => 'Supplier ID'])}}
                        </div>
                       <div class="form-group">
                            {{Form::label('cat_id', 'Cat ID')}}
                            {{Form::text('cat_id', $result->cat_id, ['class' => 'form-control', 'placeholder' => 'Cat ID'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('status', 'Status')}}
                            {{Form::select('status',
                            [
                            'active'=>'Active',
                            'deactive'=>'De-Active',
                           ],
                             $result->status,
                             ['class' => 'form-control', 'placeholder' => 'Select Status'])}}
                        </div>
                     <div class="form-group">
                         {{Form::label('user_id', 'User ID')}}
                         {{Form::text('user_id', $result->user_id, ['class' => 'form-control', 'placeholder' => 'User ID'])}}
                     </div>

                      <div class="form-group">
                          {{Form::label('picture', 'Picture')}}
                          {{Form::file('picture', ['class' => 'form-control', 'placeholder' => 'Picture'])}}
                      </div>
                        <div class="form-group">
                             {{Form::label('alert_quantity', 'Alert Quantity')}}
                             {{Form::text('alert_quantity', $result->alert_quantity, ['class' => 'form-control', 'placeholder' => 'Alert Quantity'])}}
                         </div>
                         <div class="form-group">
                             {{Form::label('sale_price', 'Sale Price')}}
                             {{Form::text('sale_price', $result->sale_price, ['class' => 'form-control', 'placeholder' => 'Sale price'])}}
                         </div>
                         <div class="form-group">
                             {{Form::label('purches_price', 'Purches Price')}}
                             {{Form::text('purches_price', $result->purches_price, ['class' => 'form-control', 'placeholder' => 'Purches price'])}}
                         </div>

                         <div class="form-group">
                             {{Form::label('profit', 'Profit')}}
                             {{Form::text('profit', $result->profit, ['class' => 'form-control', 'placeholder' => 'Profit'])}}
                         </div>
                     </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        {{Form::hidden('_method', 'PUT')}}
                        {{Form::submit('Submit', ['class' => 'btn btn-primary form-control'])}}
                    </div>
                    {!! Form::close() !!}
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

@section('jsScript')


    <!-- jQuery 3 -->
    <script src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('admin/dist/js/demo.js')}}"></script>
    <!-- page script -->
@endsection