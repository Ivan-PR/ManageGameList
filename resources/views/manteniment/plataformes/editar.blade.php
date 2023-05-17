@extends('layouts.plantillaManteniment')

@section('title', 'Editando ' . $platform->platform)

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p><b>* Campo requerido</b></p>
                <form action="{{ route('mantenimentPlataformes.update', $platform) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="platform" class="form-label">Plataforma: *</label>
                        @error('platform')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input type="text" class="form-control" id="platform" name="platform"
                            value="{{ old('platform', $platform->platform) }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
