<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo e(route('home')); ?>">Home</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Notificaciones de correo</a></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <br>
    <hr>
<h2 align="center">NOTIFICACIONES</h2>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div align="center" class="panel-heading">Enviar notificacion de correo a personal</div>

                
                <div class="panel-body">
                    <div class="container">
                        <form action=<?php echo e(route('contact')); ?> method="POST">
                         <?php echo e(csrf_field()); ?>


                        <div class="form-group">
                        <label class="col-sm-1 control-label" for="name" >Correo electronico</label>
                        <div class="input-group col-sm-3">
                            <span class="input-group-addon">@</span>
                            <input name="name" class="form-control" type="text" id="formGroup">
                        </div>
                        </div>
                        
                        <div class="form-group">
                        <label class="col-sm-1 control-label" for="asunto" >Asunto</label>
                        <div class="input-group col-sm-3">
                                
                            <input name="asunto" class="form-control" type="text" id="formGroup">
                        </div>
                        </div>
                        
                        

                        <div class="form-group">
                        <label class="col-sm-1 control-label" for="name">Mensaje</label>
                        <div class="col-sm-4">
                            <textarea name="msg" type="text" class="form-control" rows="4"></textarea>
                        </div>
                        </div>
                        <br><br><br><br><br><br>
                        <div class="form-group">
                            
                            <button type="submit" id='btn-contact' class="btn btn-sucess btn-lg">Enviar</button>
                        </div>



                    </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
 
 
<?php echo $__env->make('layouts.blade', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>