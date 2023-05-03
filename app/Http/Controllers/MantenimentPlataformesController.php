<?php

namespace App\Http\Controllers;

use App\Models\Platform;
use App\Http\Requests\StorePlatform;
use App\Http\Requests\UpdatePlatform;

class MantenimentPlataformesController extends Controller {
    public function index() {
        $platforms = Platform::orderBy('id', 'desc')->paginate(5);
        return view('manteniment.plataformes.home', compact('platforms'));
    }
    public function crear() {
        return view('manteniment.plataformes.crear');
    }

    public function store(StorePlatform $request) {
        Platform::create($request->all());

        return redirect()->route('mantenimentPlataformes.index');
    }

    public function edit(Platform $platform) {
        return view('manteniment.plataformes.editar', compact('platform'));
    }

    public function update(UpdatePlatform $request, Platform $platform) {
        $platform->update($request->all());
        return redirect()->route('mantenimentPlataformes.index');
    }
    public function delete(Platform $platform) {
        $platform->delete();

        return redirect()->route('mantenimentPlataformes.index');
    }
}