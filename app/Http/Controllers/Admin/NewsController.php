<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    public function welcome()
    {
        $news = News::all();
        return view('welcome', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        News::create($request->all());

        return redirect()->route('noticias.index')->with('success', 'Noticia creada con éxito');
    }

    public function edit(News $noticia)
    {
        return view('admin.news.edit', compact('noticia'));
    }

    public function update(Request $request, News $noticia)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $noticia->update($request->all());

        return redirect()->route('noticias.index')->with('success', 'Noticia actualizada con éxito');
    }

    public function destroy(News $noticia)
    {
        $noticia->delete();

        return redirect()->route('noticias.index')->with('success', 'Noticia eliminada con éxito');
    }
}
