<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: top;
            }

            .content {
                text-align: center; 
                display: inline-block;
            }

            .title {
                font-size: 25px;
                font-family: 'Lato';
            }
        </style>
    </head>
    <body>
        <div class="container">
        <div class="content">
                    {{ Form::open(['method' => 'POST', 'action' => 'AttendingController@store']) }}

                        <div class="title">
                            {{ Form::label('time', 'Time') }}
                            {{ Form::text('time', null, ['class' => 'form-control', 'placeholder' => 'Time']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::submit('Add', ['class' => 'btn btn-primary form-control']) }}
                        </div>
                    {{ Form::close() }}
    </div>  
    </div>
                  

    </body>
</html>