@extends('dashboard.layouts.app')
@section('title', 'Categorias')
@section('content')



<div class="col-lg-12">
	@include('dashboard.notificaciones.notificaciones')
	<div class="ibox float-e-margins">                   
		<div class="ibox-title text-right">
            <h5>Categorias</h5>
            <div class="ibox-tools">
                <a style="color: #337ab7;" href="{{route('categorias.create')}}" class=""><b> <i class="fa fa-plus"></i> Agregar Categoria</b></a>
            </div>
        </div>
		<div class="ibox-content">		
			<table class="table datatable table-striped table-hover user_table">
				<thead>				
				<tr>
					<th>id</th>
                    <th>Categorias</th>                          
                    <th>Imagen</th>					
					<th>Acciones</th>
				</tr>
				</thead>
				<tbody>
				@foreach($categories as $category)
				<tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>     
                    <td ><img src="{{$category->img}}" class="img-responsive slider_img_list"></td>               
                    <td>    
                        <div class="btn-group">                    
                            <a href="{{route('categorias.edit',$category->id)}}" class="btn-white btn btn-sm">Editar</a>
                            <a id="{{route('categorias.destroy',$category->id)}}" class="btn-white btn btn-sm modal_delete" data-toggle="modal" data-target="#modal_delete">Eliminar</a>                
                        </div>
                    </td>

                            	
				</tr>
				@endforeach
				</tbody>
			</table>

		</div>
	</div>

</div>
               
@endsection

@section('css')
<link href="{{ asset('/segade/datatables/DataTables-1.10.16/css/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('js')
<script src="{{ asset('/segade/datatables/DataTables-1.10.16/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('/segade/datatables/DataTables-1.10.16/js/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.datatable').DataTable({
            "order":[[ 0, 'desc' ]],
            "language": {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });

        $(document).on('click', '.modal_delete ', function(event) {
            event.preventDefault();
            url=$(this).attr('id');
            $('.modal .modal-title').text('Borrar Categoria')
            $('.modal .modal-body').html(' Esta Seguro que desea Borra esta categoria y <b>todo los productos de esta categoria</b>')
            $('.modal .modal-footer .btn').text('Borrar Categoria y Productos')           
            $('.modal .modal-footer form')          
            .attr('action', url)           
        });
        
    });
</script>
@endsection
