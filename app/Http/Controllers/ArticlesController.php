<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ArticlesController extends Controller
{
    public function articles(){

        $articles = Article::with('categories')->get();

        return view('articles',[
            'articles'=>$articles,
        ]);
    }

    public function index(){

        $articles = Article::with('categories')->get();

        return view('admin.articles.index',[
            'articles'=>$articles,
        ]);
    }

    public function show($id){

        $article = Article::findOrFail($id) ;

        return view ('admin.articles.show',[
            'article' => $article,
        ]);
    }

    public function create(){
        return view('admin.articles.create',[
            'categories'=> Category::all(),
        ]);
    }

    public function store(Request $request){

        $request->validate([
            'title' => 'required',
            'summary' => 'required',
            'content' => 'required',

        ], [
            'title.required' => 'Debe agregar el titulo',
            'summary.required' => 'Debe agregar el resumen',
            'content.required' => 'Debe agregar el contenido de la noticia',
        ]);

        $data = $request->only(['title', 'cover', 'summary', 'content', 'description', 'category_id']);

        if($request->hasFile('cover')){
            $data['cover'] = $request->file('cover')->store('covers');
        }

        $article = Article::create($data);

        $article->categories()->attach($request->input('categories', []));

        return to_route('articles.index')->with('feedback.message', '<b>'. e($data['title']) . '</b> se publico con exito.');;
    }

    public function edit(int $id){
        return view('admin.articles.edit',[
            'article' => Article::findOrFail($id),
            'categories' => Category::all(),
        ]);
    }

    public function update(Request $request, int $id){
        $request->validate([
            'title' => 'required',
            'summary' => 'required',
            'content' => 'required',
        ], [
            'title.required' => 'Debe agregar el titulo',
            'summary.required' => 'Debe agregar el resumen',
            'content.required' => 'Debe agregar el contenido de la noticia',
        ]);

        $data = $request->only(['title', 'cover', 'summary', 'content', 'description', 'category_id']);

        $article = Article::findOrFail($id);

        $oldCover = null;

        if($request->hasFile('cover')){
            $data['cover']= $request->file('cover')->store('covers');
            $oldCover = $article->cover;
        }

        $article->update($data);

        $article->categories()->sync($request->input('categories', []));

        if($oldCover !== null && Storage::exists($oldCover)){
            Storage::delete($oldCover);
        }

        return to_route('articles.index')->with('feedback.message', 'La noticia "<b>'. e($data['title']) . '</b>" se actualizo con exito.');
    }

    public function delete(int $id){

        return view('admin.articles.delete', [
            'article' => Article::findOrFail($id),
        ]);

    }

    public function destroy(int $id){

        $article = Article::findOrFail($id);

        $article->categories()->detach();

        $article->delete();

        if($article->cover !== null && Storage::exists($article->cover)){
            Storage::delete($article->cover);
        }

        return to_route('articles.index')->with('feedback', '<b>' . e($article['title']) . '</b> fue eliminado con exito.');
    }
}
