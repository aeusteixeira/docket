<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Http\Requests\StoreContentRequest;
use App\Http\Requests\UpdateContentRequest;
use App\Models\CallToAction;
use App\Models\Type;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.contents.index', [
            'title' => 'Conteúdos',
            'contents' => Content::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.contents.create', [
            'title' => 'Novo Conteúdo',
            'types' => Type::all(),
            'call_to_actions' => CallToAction::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContentRequest $request)
    {
        $request = $request->all();
        $request['image'] = Storage::disk('public')->put('images', $request['image']);
        $content = Content::create($request);

        return redirect()->route('dashboard.contents.index')->with('message', 'Conteúdo criado com sucesso!')->with('type', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        return view('dashboard.contents.edit', [
            'title' => $content->name . ' - Editar',
            'content' => $content,
            'types' => Type::all(),
            'call_to_actions' => CallToAction::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContentRequest  $request
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContentRequest $request, Content $content)
    {
        $request = $request->all();
        if(key_exists('image', $request)) {
            $request['image'] = Storage::disk('public')->put('images', $request['image']);
            Storage::disk('public')->delete($content->image);
        }

        $content->update($request);

        return redirect()->route('dashboard.contents.index')->with('message', 'Conteúdo atualizado com sucesso!')->with('type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        Storage::disk('public')->delete($content->image);
        Content::destroy($content->id);

        return redirect()->route('dashboard.contents.index')
        ->with('message', 'Conteúdo excluido com sucesso!')
        ->with('type', 'success');
    }
}
