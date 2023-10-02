<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\PasseioTuristico;
use App\Models\PivotImagenPasseio;
use App\Models\PivotPasseioTuristico;
use App\Models\PivotPraiasPasseio;

class PasseioTuristicoController extends Controller
{
    public function index()
    {
        $passeios = PasseioTuristico::all();
        return view('welcome', compact('passeios'));
    }
    public function index1(Request $request)
    {
        $id = $request->input('id'); // Obtém o valor do parâmetro 'id' da URL
        $passeio = PasseioTuristico::find($id);

        // Procura na tabela pivot pelo campo 'id_opcional'
        $pivotpasseio = PivotPasseioTuristico::where('id_opcional', $id)->get();
        $pivotimagen = PivotImagenPasseio::where('id_imagen', $id)->get();
        $pivot_praias = PivotPraiasPasseio::where('id_praia', $id)->get();

        if (!$passeio || !$pivotpasseio || !$pivotimagen || !$pivot_praias) {
            abort(404); // Trata o caso em que o passeio ou o pivotpasseio não é encontrado
        }
        return view('passeios', compact('passeio', 'pivotpasseio', 'pivotimagen', 'pivot_praias'));
    }

    public function create()
    {
        return view('passeios.create');
    }

    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric',
        ]);

        // Cria um novo passeio turístico no banco de dados
        PasseioTuristico::create($validatedData);

        return redirect()->route('passeios.index')->with('success', 'Passeio turístico criado com sucesso!');
    }

    public function edit(PasseioTuristico $passeio)
    {
        return view('passeios.edit', compact('passeio'));
    }

    public function update(Request $request, PasseioTuristico $passeio)
    {
        // Validação dos dados do formulário
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric',
        ]);

        // Atualiza os dados do passeio turístico
        $passeio->update($validatedData);

        return redirect()->route('passeios.index')->with('success', 'Passeio turístico atualizado com sucesso!');
    }

    public function destroy(PasseioTuristico $passeio)
    {
        // Exclui o passeio turístico
        $passeio->delete();

        return redirect()->route('passeios.index')->with('success', 'Passeio turístico excluído com sucesso!');
    }
}
