@extends('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <h1>Posts</h1>
@stop

@section('content')

    <div class="card-body">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Nuevo post
        </button>
    </div>

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Descripción</th>
                <th>Imagen</th>
                <th>Estado</th>
                <th>Categoria</th>
                <th>Publicado por</th>
                <th>Fecha de creación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <input type="hidden" id="contentEdit{{$post->id}}" name="contentEdit{{$post->id}}" value="{!!$post->content!!}">
                <td>{{$post->id}}</td>
                <td id="namePost{{$post->id}}" value="{{$post->name}}">{{$post->title}}</td>
                <td id="desPost{{$post->id}}" value="{{$post->brief}}">{{$post->brief}}</td>
                <td id="imagePost{{$post->id}}"> 
                    <center> 
                        <img src="{{asset('public/img/'.$post->image)}}" class="img-thumbnail" width="150px"> 
                    </center> 
                </td>
                <td id="statusPost{{$post->id}}" value="{{$post->status}}">
                    @if($post->status == 1)
                        Publicado
                    @else
                        No publicado
                    @endif
                </td>
                <td id="catePost{{$post->id}}" value="{{$post->category_id}}">{{$post->nombreCategoria}}</td>
                <td id="userPost{{$post->id}}" value="{{$post->user_id}}">{{$post->name}}</td>
                <td id="fechaPost{{$post->id}}" value="{{$post->created_at}}">{{$post->created_at}}</td>
                <td>
                    <a href="#" data-target="#EditModal"  data-toggle="modal" onclick="recibir({{$post->id}});">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Descripción</th>
                <th>Imagen</th>
                <th>Estado</th>
                <th>Categoria</th>
                <th>Publicado por</th>
                <th>Fecha de creación</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Crear nuevo post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{route('setPost')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                    
                        <div class="form-group">
                            <label for="InputName">Titulo del post *</label>
                            <input type="text" class="form-control" id="InputName" name="InputName" aria-describedby="emailHelp" placeholder="Ingrese el nombre del post" required>
                        </div>

                        <div class="form-group">
                            <label for="InputDes">Breve descripción *</label>
                            <input type="text" class="form-control" id="InputDes" name="InputDes" aria-describedby="emailHelp" placeholder="Ingrese una breve descripción" required>
                        </div>

                        <div class="form-group">
                            <label for="InputImage">Imagen*</label>
                            <input type="file" class="form-control" id="InputImage" name="InputImage" required>
                        </div>

                        <div class="form-group">
                            <label for="InputContent">Contenido*</label>
                            <textarea class="form-control" name="InputContent" id="editor" rows="11" required>

                            </textarea>
                        </div>

                        <div class="form-group">
                            <label for="InputEstado">Estado*</label>
                            <select class="form-control" name="InputEstado" id="InputEstado">
                                <option value="1">Publicado</option>
                                <option value="0">No publicado</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="InputCategoria">Categoría*</label>

                            <select class="form-control" name="InputCategoria" id="InputCategoria">
                                @foreach($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" value="{{ auth()->user()->id }}" name="idUser">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Modal Edit -->
    <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Editar categoría</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{route('putPost')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="IDPosthidden" name="IDPosthidden" aria-describedby="emailHelp" value="">
                            
                            <label for="IDPost">ID post</label>
                            <input type="text" class="form-control" id="IDPost" name="IDPost" aria-describedby="emailHelp" value="" disabled>
                        </div>
                        <div class="form-group">
                            <label for="InputNameEdit">Titulo del post *</label>
                            <input type="text" value="" class="form-control" id="InputNameEdit" name="InputNameEdit" aria-describedby="emailHelp" placeholder="Ingrese el nombre de la categoría">
                        </div>

                        <div class="form-group">
                            <label for="InputDesEdit">Breve descripción *</label>
                            <input type="text" class="form-control" id="InputDesEdit" name="InputDesEdit" aria-describedby="emailHelp" placeholder="Ingrese una breve descripción" required value="">
                        </div>

                        <div class="form-group">
                            <label for="InputImage">Imagen*</label>
                            <input type="file" class="form-control" id="InputImage" name="InputImage" >
                        </div>

                        <div class="form-group">
                            <label for="InputContentEdit">Contenido*</label>
                            <textarea class="form-control" name="InputContentEdit" id="editorEdit" rows="11" value="" required >
                                
                            </textarea>
                        </div>

                        <div class="form-group">
                            <label for="InputEstado">Estado*</label>
                            <select class="form-control" name="InputEstado" id="InputEstado">
                                <option value="1">Publicado</option>
                                <option value="0">No publicado</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="InputCategoria">Categoría*</label>

                            <select class="form-control" name="InputCategoria" id="InputCategoria">
                                @foreach($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" value="{{ auth()->user()->id }}" name="idUser">
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
<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
        .create( document.querySelector( '#editor' ))
        .catch( error => {
            console.error( error );
        } );
    </script>

    <script>
        let YourEditor;
        ClassicEditor
        .create( document.querySelector( '#editorEdit' ))
        .then(editor => {
            window.editor = editor;
            YourEditor = editor;
        })
        .catch( error => {
            console.error( error );
        } );
    </script>

    <!--Js -->
   
    <script type="text/javascript">
        function recibir(id)
        {
            //Obtención de los datos
            var name = document.getElementById("namePost"+id).innerHTML;
            var des = document.getElementById("desPost"+id).innerHTML;
            var content = document.getElementById("contentEdit"+id).value;
            
            //Asignación de los valores al formulario edit
            document.getElementById("IDPosthidden").value = id;
            document.getElementById("IDPost").value = id;
            document.getElementById("InputNameEdit").value = name;
            document.getElementById("InputDesEdit").value = des;

            //Metodos del editor
            YourEditor.setData(content);
        } 
    </script>

    <script> $(document).ready(function () {
        $('#example').DataTable();
    }); </>
@stop