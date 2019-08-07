<?php

namespace App\Http\Controllers;

use App\Propriedade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImoveisController extends Controller
{

    public function index()
    {
        $propriedades = Propriedade::all();

        return view('index')->with('propriedades', $propriedades);
    }


    public function show($url)
    {
        $propriedade = Propriedade::where('url', $url)->get();

        if(!empty($propriedade)){
            return view('exibir')->with('propriedade', $propriedade);
        } else {
            return redirect()->action('ImoveisController@index');
        }
    }

    public function create()
    {
        return view('criar');
    }

    public function store(Request $request)
    {

        $propriedadeSlug = $this->setUrl($request->titulo);

        $propriedade = [
            'titulo' => $request->titulo,
            'url' => $propriedadeSlug,
            'descricao' => $request->descricao,
            'preco_aluguel' => $request->preco_aluguel,
            'preco_compra' => $request->preco_compra
        ];

        Propriedade::create($propriedade);

        return redirect()->action('ImoveisController@index');
    }


    public function edit($url)
    {
        $propriedade = Propriedade::where('url', $url)->get();

        if(!empty($propriedade)){
            return view('editar')->with('propriedade', $propriedade);
        } else {
            return redirect()->action('ImoveisController@index');
        }
    }
    public function update(Request $request, $id)
    {
        $propriedadeSlug = $this->setUrl($request->titulo);

        $propriedade = Propriedade::find($id);

        $propriedade->titulo = $request->titulo;
        $propriedade->url = $propriedadeSlug;
        $propriedade->descricao = $request->descricao;
        $propriedade->preco_aluguel = $request->preco_aluguel;
        $propriedade->preco_compra = $request->preco_compra;

        $propriedade->save();

        return redirect()->action('ImoveisController@index');

    }

    public function destroy($url)
    {
        $propriedade = Propriedade::where('url', $url)->get();

        if(!empty($propriedade)){
            DB::delete("DELETE FROM propriedades WHERE url = ?", [$url]);
        }

        return redirect()->action('ImoveisController@index');
    }

    private function setUrl($titulo){

        $propriedadeSlug = str_slug($titulo);

        $propriedades = Propriedade::all();

        $t = 0;
        foreach ($propriedades as $propriedade){
            if(str_slug($propriedade->titulo) === $propriedadeSlug){
                $t++;
            }
        }

        if($t > 0){
            $propriedadeSlug = $propriedadeSlug . '-' . $t;
        }

        return $propriedadeSlug;

    }
}
