@extends('layouts.plantillaManteniment')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-12">
            {{-- if hay objeto 
            <h1 class="text-center">Editar</h1>
            else no lo hay
            <h1 class="text-center">Crear nuevo</h1>
            --}}
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="" method="POST" {{-- enctype="multipart/form-data" --}}>
                {{-- @csrf
                    @method('PUT') --}}
                <div class="mb-3">
                    <label for="imageFileMultiple" class="form-label">Subida de imagenes:</label>
                    <input class="form-control" type="file" id="imageFileMultiple" multiple>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Titulo:</label>
                    <input type="text" class="form-control" id="title" name="title" value="">
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Pais:</label>
                    <input type="text" class="form-control" id="location" name="location" value="">
                </div>
                <div class="mb-3">
                    <label for="publisher" class="form-label">Desarrolladora:</label>
                    <input type="text" class="form-control" id="publisher" name="publisher" value="">
                </div>
                <div class="mb-3">
                    <label for="source_rom" class="form-label">Source rom:</label>
                    <input type="text" class="form-control" id="source_rom" name="source_rom" value="">
                </div>
                <div class="mb-3">
                    <label for="save_type" class="form-label">Save type:</label>
                    <input type="text" class="form-control" id="save_type" name="save_type" value="">
                </div>
                <div class="mb-3">
                    <label for="rom_size" class="form-label">Tamaño:</label>
                    <input type="text" class="form-control" id="rom_size" name="rom_size" value="">
                </div>
                <div class="mb-3">
                    <label for="language" class="form-label">Idioma:</label>
                    <input type="text" class="form-control" id="language" name="language" value="">
                </div>
                <div class="mb-3">
                    <label for="platform" class="form-label">Plataforma:</label>
                    <input type="text" class="form-control" id="platform" name="platform" value="">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection