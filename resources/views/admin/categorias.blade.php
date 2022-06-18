@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Categorías</h1>
@stop

@section('content')
    @if(isset($message))
        <p>{{$message}}</p>
    @endif

    <div class="card-body">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Nueva categoría
        </button>
    </div>

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre de la categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
            <tr>
                <td>{{$categoria->id}}</td>
                <td id="nameCategoria{{$categoria->id}}" value="{{$categoria->name}}">{{$categoria->name}}</td>
                <td>
                    
                    <a href="#" data-target="#EditModal"  data-toggle="modal" onclick="recibir({{$categoria->id}});">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Nombre de la categoría</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>


<!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Agregar nueva categoría</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{route('setCategoria')}}">
                    @csrf
                    <div class="modal-body">
                    
                        <div class="form-group">
                        <label for="InputName">Nombre de la categoría</label>
                        <input type="text" class="form-control" id="InputName" name="InputName" aria-describedby="emailHelp" placeholder="Ingrese el nombre de la categoría">
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!--Js -->
<script type="text/javascript">
    function recibir(id)
    {
        var name = document.getElementById("nameCategoria"+id).innerHTML;

        document.getElementById("IDCategoria").value = id;
        document.getElementById("IDCategoriahidden").value = id;
        document.getElementById("InputNameEdit").value = name;
    } 
</script>
<!-- Modal Edit -->
    <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Editar categoría</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{route('upCategoria')}}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="IDCategoriahidden" name="IDCategoriahidden" aria-describedby="emailHelp" value="">
                            
                            <label for="IDCategoria">ID categoría</label>
                            <input type="text" class="form-control" id="IDCategoria" name="IDCategoria" aria-describedby="emailHelp" value="" disabled>
                        </div>
                        <div class="form-group">
                        <label for="InputNameEdit">Nombre de la categoría</label>
                        <input type="text" value="" class="form-control" id="InputNameEdit" name="InputNameEdit" aria-describedby="emailHelp" placeholder="Ingrese el nombre de la categoría">
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')


    <script> $(document).ready(function () {
        $('#example').DataTable();
    }); </script>
@stop