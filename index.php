<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/moment/moment.js"></script>
    <script type="text/javascript" src="js/moment/locale/es.js"></script>
    <script type="text/javascript" src="js/knockout-3.2.0.js"></script>
    <script type="text/javascript" src="https://getbootstrap.com/docs/3.3/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <title>Fully featured textual message</title>
</head>
<body>
<div class="container">

    <p class="lead">Env&iacute;o de SMS</p>

    <form  enctype="multipart/form-data"  id="send_sms" class="form-horizontal">
        <div class="panel panel-default">
            <div class="panel-heading"><h4>Datos del mensaje</h4></div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="in_from" class="col-sm-2 control-label">Quien envia:</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="in_from" placeholder="este dato puede ser alfanumerico"
                               name="fromInput">
                    </div>
                </div>
                <div class="form-group">
                    <label for="in_to" class="col-sm-2 control-label">Destinatarios</label>

                    <div class="col-sm-10">
                        <input type="file" class="input-file"  name="archivo">
                    </div>
                </div>
                <div class="form-group" id="divMsg">
                    <label for="in_text" class="col-sm-2 control-label">texto del mensaje</label>

                    <div class="col-sm-10">
                <textarea class="form-control has-feedback" id="in_text" placeholder="texto del mensaje (m&aacute;ximo 150 caracteres)" name="textInput"
                          rows="4" ></textarea>
                        <span class="glyphicon form-control-feedback" id="iconmsg"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="datetimepicker" class="col-sm-2 control-label">Planificar SMS</label>
                    <div class='col-sm-10 input-group date' id='datetimepicker'>
                        <input type='text' class="form-control" name="fecha" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <input class="btn btn-default btn-lg" type="submit" value="Enviar">
    </form>
    <hr>
</div>
</body>
</html>