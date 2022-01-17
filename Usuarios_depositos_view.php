<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
        Usuarios - depósitos
      <small>&nbsp;</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=base_url()?>Principal"><i class="fa fa-home"></i>Inicio</a></li>
        <li class="active">Usuarios - depósitos</li>
    </ol>
    </section>

<!-- Main content -->
    <section class="content">
        <section class="content">

            <!-- Inicio Fila  -->
            <div class="row">
                <div class="box box-primary">
				
                    <div class="box-header">
                        <!-- <h3 class="box-title">Guías</h3> -->

                        <!-- Test -->
                        <div class="panel panel-default">
                            <div class="panel-body">

                                <form class="form-inline"  method="post" >

                                    <div class="form-group">
                                        <label class="control-label">Depósito: </label>
                                        <div class="input-group">
                                            <td>
                                                <select name="id_deposito_filtro" class="form-control" id="lstDepositos">
                                                    <!-- <option value="">Seleccione Chofer</option> -->
                                                </select>
                                            </td>
                                            <!-- <span class="help-block"></span> -->
                                        </div>
                                    </div>   

                                    <div class="pull-right box-tools">
                                        <button class="btn btn-default btn-sm" onclick="reload_table()" id="obtener"><i class="glyphicon glyphicon-refresh"></i>Obtener</button>
                                        
                                        <button  type="button"  onclick="add_usuario()" class="btn btn-primary btn-sm" id="btnNuevoUsuario" data-toggle="tooltip" title="Agregar nuevo usuario" data-original-title="Agregar nuevo usuario">
                                          <i class="fa fa-user-plus fa-lg" aria-hidden="true"></i> Agregar</button>
                                    </div>
                                </form> 

                            </div>
                        </div>

                    </div>  <!-- Fin del Header -->

                    <div class="box-body">
                        <div class="col-lg-12 col-xs-12">

                            <div class="table-responsive">
                              <!-- <table cellspacing="0" cellpadding="0" id="tbInventario" class="table table-striped table-bordered table-hover table-condensed"> -->
                                <table id="table" class="table table-striped table-bordered dt-responsive nowrap table-hover table-condensed" cellspacing="0" width="100%" style="background: white!important">
                                    <thead>
                                        <tr>

                                            <th class="bg-primary max-width-160"><span>Acciones</span></th>
                                            <th class="bg-primary"><span></span></th>
                                            <th class="bg-primary"><span></span></th>
                                            <th class="bg-primary"><span>Nombre</span></th>
                                            <th class="bg-primary"><span>Perfil</span></th>
                                            <th class="bg-primary"><span>Username</span></th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            </div>  <!-- Fin Fila -->

            <!-- Your Page Content Here -->
        </section>
    </section>      
      <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<script language="javascript">
    var base_url = '<?php echo base_url(); ?>';
</script>

<!-- JS SECTION-->
<script src="<?= base_url(); ?>js/jquery-2.1.4.min.js"></script>
<script src="<?= base_url(); ?>js/jquery-ui.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>js/bootstrap-switch.js"></script>
<script src="<?= base_url(); ?>js/jquery.formatCurrency-1.4.0.min.js"></script>
<script src="<?= base_url(); ?>js/jquery.uitablefilter.js"></script>
<script src="<?= base_url(); ?>js/modals.js"></script>
<script src="<?= base_url(); ?>js/jquery.numeric.min.js"></script>

<!-- DataTable -->
<script src="<?= base_url()?>js/datatables.min.js"></script>
<script src="<?= base_url()?>js/datatables.bootstrap.min.js"></script>
<script src="<?= base_url()?>js/buttons.bootstrap.min.js"></script>
<script src="<?= base_url()?>js/buttons.colVis.min.js"></script>

<!-- AdminLTE -->
<script src="<?= base_url()?>js/AdminLTE.min.js"></script>
<!-- formato de numeros -->
<script src="<?= base_url()?>js/formatNumber.js"></script>
<!-- Fecha -->
<script src="<?= base_url()?>js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url()?>js/bootstrap-datepicker.es.js"></script>

<!-- LO NUEVO -->
<script src="<?= base_url()?>js/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>js/dataTables.buttons.min.js"></script>
<script src="<?= base_url()?>js/buttons.flash.min.js"></script>
<script src="<?= base_url()?>js/jszip.min.js"></script>
<!--  <script src="<?= base_url()?>js/pdfmake.min.js"></script>  -->
<script src="<?= base_url()?>js/vfs_fonts.js"></script>
<script src="<?= base_url()?>js/buttons.html5.min.js"></script>
<script src="<?= base_url()?>js/buttons.print.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url()?>js/jquery.slimscroll.min.js"></script>
<!-- Carga lista de Clientes  -->
<script src="<?= base_url()?>js/easygas/usuarios_depositos.js"></script>


<script type="text/javascript">

var table,fecha_hoy;
fecha_hoy = new Date();

$(document).ready(function() {    

    // Inicializo valores de búsqueda
    document.getElementById("lstDepositos").value = '1';
    //document.getElementById("lstClientes").value = '0';

    //datatables
    table = $('#table').DataTable({ 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
        "searching": false,
        // "bPaginate": true,
        "ordering": true,
        // "info": false,        
        "ajax": {
            "url": "<?php echo site_url('Usuarios_depositos/ajax_list')?>",
            "type": "POST",
            "data":function(data) {
                data.id_deposito_filtro = document.getElementById("lstDepositos").value;
                data.<?php echo $this->security->get_csrf_token_name(); ?> = "<?php echo $this->security->get_csrf_hash(); ?>";     
                //data.id_deposito_filtro = $('#id_deposito_filtro').val();           
                // data.id_chofer = document.getElementById("lstClientes").value 
                // data.fc_desde  = $('#fc_desde_filtro').val();
                // data.fc_hasta  = $('#fc_hasta_filtro').val();
            },           
        },

        "columnDefs": [
           {  "targets": [ 0 ], "orderable": false },
           { "targets": [1], visible: false },
           { "targets": [2], visible: false }
        ],   
      

        language: {
            processing:      "<i class='fa fa-spinner fa-5x fa-spin fa-fw' aria-hidden='true'></i>",
            search:          "<i class='fa fa-search' aria-hidden='true'></i>",
            //search:          "Buscar:",
            lengthMenu:      "Mostrando _MENU_ usuarios",
            info:            "Mostrando del _START_ al _END_ de _TOTAL_ usuarios",
            infoEmpty:       "Mostrando 0 al 0 de 0 coincidencias",
            infoFiltered:    "(filtrado de un total de _MAX_ elementos)",
            infoPostFix:     "",
            //loadingRecords:  "<i class='fa fa-spinner fa-5x fa-spin fa-fw' aria-hidden='true'></i>",
            loadingRecords:  "Cargando registros",
            zeroRecords:     "No se encontraron coincidencias",
            emptyTable:      "No hay datos para mostrar",
            paginate: {
            //    first: "<i class='fa fa-fast-backward fa-lg' aria-hidden='true'></i>",
            //     first: "<<",
                 previous: "<i class='fa fa-backward fa-lg' aria-hidden='true'></i>",
            //     previous: "<",
                 next: "<i class='fa fa-forward fa-lg' aria-hidden='true'></i>",
            //     next: ">",
            //     last: "<i class='fa fa-fast-forward fa-lg' aria-hidden='true'></i>"
            //     last: ">>"
            }
          //,
          //aria: {
          //    sortAscending: ": activate to sort column ascending",
          //    sortDescending: ": activate to sort column descending"
          //}
        },      

        lengthMenu: [
          [ 7,10, 25, 50, -1 ],
          [ '7','10', '25', '50', 'Todo' ]
        ],

        // dom: 'Bfrtip',
        // buttons: [
        //     'copy', 'csv', 'excel', 'pdf', 'print'
            // 'copy', 'csv', 'excel', 'pdf', 'print'
        //]

    });    
    // Fin #table

    //set input/textarea/select event when change value, remove class error and remove text help block 
    $("input").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("textarea").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("select").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });

     // $('.datepicker').datepicker().on('changeDate', function(ev){
     //     // Hacer algo
     //     //alert( $('.lafecha').val() );
     // });


    $('#obtener').on( 'click change', function (event) {
        event.preventDefault();

        // if($('#fc_desde_filtro').val()=="")
        // {
        //     $('#fc_desde_filtro').focus();
        // }
        // else if($('#fc_hasta_filtro').val()=="")
        // {
        //     $('#fc_hasta_filtro').focus();
        // }
        // else
        // {
            reload_table();
            table.draw();
        // }

    } );

     $(document).on('shown.bs.modal', function (e) {
        $('[autofocus]', e.target).focus();
      });  

    $('#lstDepositos').change(function() {
         //id_chofer = document.getElementById("lstchofer").value;
          reload_table();
     } );

     $('#table tbody').on('dblclick', 'tr', function () {
    var data = table.row( this ).data();
    edit_usuario( data[1],data[2] );
    // alert( 'You clicked on '+data[1]+'\'s row' );
    } );

    //document.getElementById("lstchofer").value = '0';
    //$('#lstchofer').val(0);

});  // Fin Ready

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}


function add_usuario()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('[name="id_deposito"]').val( document.getElementById("lstDepositos").value );
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Agregar Usuario'); // Set Title to Bootstrap modal title
}

function edit_usuario(id_deposito,id_usuario)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('Usuarios_depositos/ajax_edit/')?>/"+ id_deposito + "/"+ id_usuario,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {   $('[name="id_deposito"]').val(data.id_deposito);
            $('[name="id_usuario"]').val(data.id_usuario);
            $('[name="nm_usuario"]').val(data.nm_usuario);
            $('[name="cod_perfil"]').val(data.cod_perfil);
            $('[name="username"]').val(data.username);          

            //$("#idInputEnElDom").prop('disabled', true);
            // if( data.id_usuario == '1'){
            //    $('[name="cod_perfil"]').prop('disabled', true);
            // } else {
            //    $('[name="cod_perfil"]').prop('disabled', false);
            // } 

            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Editar Usuario'); // Set title to Bootstrap modal title
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error al obtener datos para edición.');
        }
    });
} // Fin edit_producto

function del_usuario(id_deposito,id_usuario)
{
    save_method = 'delete';
    $('#form-delete')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('Usuarios_depositos/ajax_edit/')?>/" + + id_deposito + "/"+ id_usuario,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {   $('[name="id_deposito"]').val(data.id_deposito);
            $('[name="id_usuario"]').val(data.id_usuario);
            $('[name="nm_usuario"]').val(data.nm_usuario);
            $('#modal_form_delete').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title-delete').text('Eliminar usuario'); // Set title to Bootstrap modal title
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error al obtener datos para eliminar.');
        }
    });
}




// function reload_table()
// {
   // alert( 'Año: ' + $('#ano_filtro').val() );
   // alert( 'Mes: ' + $('#mes_filtro').val() );
   // alert( 'Proveedor: ' + document.getElementById("proveedor_filtro").value );
   // alert( 'Cliente: ' + document.getElementById("lstClientes").value );   

//     table.ajax.reload(null,false); //reload datatable ajax 
// }

function save()
{
    $('#btnSave').text('Grabando...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;

    if(save_method == 'add') {
        url = "<?php echo site_url('Usuarios_depositos/ajax_add')?>";
    } else {
        url = "<?php echo site_url('Usuarios_depositos/ajax_update')?>";
    }

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {
            if(data.status) //if success close modal and reload ajax table
            {
                $('#modal_form').modal('hide');
                reload_table();
            }
            else
            {
                $('#modal_informacion').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title-informacion').text('Atención'); // Set title to Bootstrap modal title
                $('.modal-texto-informacion').text(data.error_string[0]); // Set title to Bootstrap modal title

            }
            $('#btnSave').text('Guardar'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            //alert('Error agregando / actualizando usuario');
            $('#modal_informacion').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title-informacion').text('Atención'); // Set title to Bootstrap modal title
            $('.modal-texto-informacion').text(errorThrown); // Set title to Bootstrap modal title

            $('#btnSave').text('Guardar'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 
        }
    });
}   

function del()
{
    $('#btnDel').text('Eliminando...'); //change button text
    $('#btnDel').attr('disabled',true); //set button disable 
    var url;

    url = "<?php echo site_url('Usuarios_depositos/ajax_delete')?>";

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form-delete').serialize(),
        dataType: "JSON",
        success: function(data)
        {

            $('#modal_form_delete').modal('hide');
            if(data.status) //if success close modal and reload ajax table
            {
                reload_table();
            }
            else
            {
                $('#modal_informacion').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title-informacion').text('Atención'); // Set title to Bootstrap modal title
                $('.modal-texto-informacion').text(data.error_string[0]); // Set title to Bootstrap modal title

            }
            $('#btnDel').text('Eliminar'); //change button text
            $('#btnDel').attr('disabled',false); //set button enable 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {  
            //alert('Error desconocido al eliminar cliente.');
            alert(errorThrown);
            
            $('#btnDel').text('Eliminar'); //change button text
            $('#btnDel').attr('disabled',false); //set button enable 

        }
    });
}


function aceptar_informacion()
{
    $('#modal_informacion').modal('hide');
    reload_table();   
}


</script>


<!-- Bootstrap modal -->
<div class="modal" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="color: white;background-color: #3B5998">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Usuario</h4>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <!-- ID invisible del producto que se edita o crea -->
                    <input  type="hidden" value="" name="id_deposito"/> 
                    <input  type="hidden" value="" name="id_usuario"/> 

                    <div class="form-body">

                        <div class="form-group">
                            <label class="control-label col-md-3">Nombre</label>
                            <div class="col-md-9">
                                <input name="nm_usuario" placeholder="Nombre del usuario" class="form-control" type="text">
                                <!-- <span class="help-block"></span> -->
                            </div>
                        </div>  

                        <div class="form-group">
                            <label class="control-label col-md-3" >Perfil</label>
                           <div class="col-md-9">
                                <select name="cod_perfil" class="form-control" >
                                    <option value="">--Seleccione --</option>
                                    <option value="A">Administrador</option>
                                    <option value="O">Oficina</option>
                                    <option value="D">Depósito</option>
                                </select>
                                <!-- <span class="help-block"></span> -->
                            </div>
                        </div>                                               

                        <div class="form-group">
                            <label class="control-label col-md-3" id="username">Username</label>
                            <div class="col-md-9">
                                <input name="username" placeholder="Nombre de usuario" class="form-control" type="text">
                                <!-- <span class="help-block"></span> -->
                            </div>
                        </div>

                        <div class="form-group  text-center">
                            <label class="control-label" id="">Si no cambiará password, dejar en blanco</label>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3" id="password">Password</label>
                            <div class="col-md-9">
                                <input name="pass" placeholder="Ingrese palabra clave" class="form-control"type="password" value="">
                                <!-- <span class="help-block"></span> -->
                            </div>
                        </div>                        

                        <div class="form-group">
                            <label class="control-label col-md-3" id="razon_social">Repita Password</label>
                            <div class="col-md-9">
                                <input name="pass2" placeholder="Repita palabra clave" class="form-control"type="password" value="">
                                <!-- <span class="help-block"></span> -->
                            </div>
                        </div>             
  
                        
                    </div>  <!-- form-body -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Guardar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->


<!-- Modal información -->
<div class="modal" tabindex="-1" role="dialog" id="modal_informacion">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"  style="color: black;background-color: #FFFF80">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title-informacion">Título de la información</h4>
      </div>
      <div class="modal-body">
        <p class="modal-texto-informacion">Mi texto informativo</p>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button> -->
        <button type="button" class="btn btn-primary" onclick="aceptar_informacion()">Aceptar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- Modal confirmación DELETE -->
<div class="modal" id="modal_form_delete" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="color: white;background-color: #3B5998">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title-delete">Eliminar ?</h4>
            </div>
            <div class="modal-body form">
                <form action="#" id="form-delete" class="form-horizontal">
                    <input  type="hidden" value="" name="id_deposito"/> 
                    <input  type="hidden" value="" name="id_usuario"/> 

                    <div class="form-body">

                        <div class="form-group">
                            <label class="control-label col-md-3">Nombre Usuario</label>
                            <div class="col-md-9">
                                <input disabled name="nm_usuario" class="form-control" type="text">
                                <!-- <span class="help-block"></span> -->
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnDel" onclick="del()" class="btn btn-primary">Eliminar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
