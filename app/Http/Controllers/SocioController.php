<?php

namespace App\Http\Controllers;

use App\Enums\EstadoCivil;
use App\Http\Requests\SocioRequest;
use App\Models\Socio;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
use PhpOffice\PhpWord\Shared\ZipArchive;

class SocioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $socios = Socio::all();

        return view("socio.index", ['socios' => $socios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("socio.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SocioRequest $request)
    {

       Socio::create($request->all());

        return redirect()->route('socios.index');
    }

    /**
     * Processa e gera a ficha do socio em word seguindo o template modelo.
     */
    public function fichaWord(Socio $socio){

        //dd($socio);
        $templateFichaSocio = new TemplateProcessor('TemplateFichaSocio.docx');

        $templateFichaSocio->setValues(
            array("id" => $socio->id,
        "nome" => $socio->nome,
        "matricula" => $socio->matricula,
        "data_admissao" => $socio->data_admissao,
        "data_nascimento" => $socio->data_nascimento,
        "natural" => $socio->natural,
        "nome_mae" => $socio->nome_mae,
        "nome_pai" => $socio->nome_pai,
        "estado_civil" => $socio->estado_civil->value,
        "eleitor" => $socio->eleitor ? "SIM" : "NÃO",
        "grau_instrucao" => $socio->grau_instrucao,
        "tipo_trabalho" => $socio->tipo_trabalho,
        "area_trabalha" => $socio->area_trabalha,
        "tamanho_propriedade" => $socio->tamanho_propriedade,
        "escritura_prop" =>  $socio->escritura_prop ? "SIM" : "NÃO",
        "cadastrado" => $socio->cadastrado ? "SIM" : "NÃO",
        "assalariado" => $socio->assalariado ? "SIM" : "NÃO",
        "carteira_assinada" => $socio->carteira_assinada ? "SIM" : "NÃO",
        "salario" => $socio->salario,
        "tempo_trabalho" => $socio->tempo_trabalho,
        "anos_municipio" => $socio->anos_municipio,
        "endereco" => $socio->endereco,
        "propriedade_de" => $socio->propriedade_de,
        "nome_esposa" => $socio->nome_esposa,
        "data_emissao" => $socio->data_emissao,
        "rg" => $socio->rg,
        "cpf" => $socio->cpf,
        ));

        $fileName = "Ficha Socio - $socio->nome .docx";

        $outputPath = storage_path('app/public/' . $fileName);

        $templateFichaSocio->saveAs($outputPath);

        return response()->download($outputPath, $fileName, [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        ])->deleteFileAfterSend();
    }

    /**
     * Display the specified resource.
     */
    public function show(Socio $socio)
    {
        //
        //dd($socio);
        return view("socio.show", ['socio' => $socio]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Socio $socio)
    {
        //
        //dd($socio);
        return view("socio.edit", ['socio' => $socio]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SocioRequest $request, Socio $socio)
    {
        //
        $socio->update($request->all());

        return view("socio.show", ['socio' => $socio]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

       Socio::destroy($id);

       return redirect()->route('socios.index');
    }
}
