@if (isset($socio->id))
    <form action={{ route('socios.update', ['socio' => $socio->id]) }} method="post">
        @method('PUT')
    @else
        <form action={{ route('socios.store') }} method="post">
@endif
@csrf
<div class="grid gap-4 sm:gap-6">
    <div>
        <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
        <x-text-input placeholder="Insira o nome" name="nome" id="nome" value="{{ $socio->nome ?? old('nome') }}"
            type="text" class="w-full" />
        <x-input-error :messages="$errors->get('nome')" class="mt-2" />
    </div>
    <div>
        <label for="matricula" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Matricula</label>
        <x-text-input placeholder="Insira a matricula" name="matricula" id="matricula"
            value="{{ $socio->matricula ?? old('matricula') }}" type="text" />
        <x-input-error :messages="$errors->get('matricula')" class="mt-2" />
    </div>
    <div>
        <label for="data_admissão" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data de
            Admissão</label>
        <x-text-input placeholder="Insira a Data de Admissão" name="data_admissão" id="data_admissão" type="date"
            value="{{ $socio->data_admissão ?? old('data_admissão') }}" />
        <x-input-error :messages="$errors->get('data_admissão')" class="mt-2" />
    </div>
    <div>
        <label for="data_nascimento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data de
            Nascimento</label>
        <x-text-input placeholder="Insira a Data de Nascimento" name="data_nascimento" id="data_nascimento"
            type="date" value="{{ $socio->data_nascimento ?? old('data_nascimento') }}" />
        <x-input-error :messages="$errors->get('data_nascimento')" class="mt-2" />
    </div>
    <div>
        <label for="natural" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Natural</label>
        <x-text-input placeholder="Insira a naturalidade" name="natural" id="natural"
            value="{{ $socio->natural ?? old('natural') }}" type="text" />
        <x-input-error :messages="$errors->get('natural')" class="mt-2" />
    </div>
    <div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Filiação</label>
        <label for="nome_mae" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mãe</label>
        <x-text-input placeholder="Insira o nome da mãe" name="nome_mae" id="nome_mae"
            value="{{ $socio->nome_mae ?? old('nome_mae') }}" type="text" class="w-full" />
        <x-input-error :messages="$errors->get('nome_mae')" class="mt-2" />

        <label for="nome_pai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pai</label>
        <x-text-input placeholder="Insira o nome do pai" name="nome_pai" id="nome_pai"
            value="{{ $socio->nome_pai ?? old('nome_pai') }}" type="text" class="w-full" />
        <x-input-error :messages="$errors->get('nome_pai')" class="mt-2" />
    </div>
    <div>
        <label for="estado_civil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            :required="true">Estado Civil</label>
        <select name="estado_civil" id="estado_civil" placeholder="Selecione o Estado Civil">
            <option value="">Selecione o Estado Civil</option>
            @foreach (\App\Enums\EstadoCivil::cases() as $estado_civil)
                <option value="{{ $estado_civil->name }}">{{ $estado_civil->value }}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('estado_civil')" class="mt-2" />
    </div>
    <div>
        <label for="eleitor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Eleitor</label>

        <div class="flex">
            <div class="flex items-center mr-4">
                <input id="eleitor" type="radio" value="{{ 1 }}" name="eleitor"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="eleitor" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sim</label>
            </div>
            <div class="flex items-center mr-4">
                <input id="eleitor-nao" type="radio" value="{{ 0 }}" name="eleitor"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="eleitor" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Não</label>
            </div>
        </div>
        <x-input-error :messages="$errors->get('eleitor')" class="mt-2" />
    </div>
    <div>
        <label for="grau_instrucao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Grau de
            Instrução</label>
        <x-text-input placeholder="Qual grau de instrução?" name="grau_instrucao" id="grau_instrucao"
            value="{{ $socio->grau_instrucao ?? old('grau_instrucao') }}" type="text" />
        <x-input-error :messages="$errors->get('grau_instrucao')" class="mt-2" />
    </div>
    <div>
        <label for="tipo_trabalho" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de
            Trabalho</label>
        <x-text-input placeholder="Qual tipo de trabalho?" name="tipo_trabalho" id="tipo_trabalho"
            value="{{ $socio->tipo_trabalho ?? old('tipo_trabalho') }}" type="text" />
        <x-input-error :messages="$errors->get('tipo_trabalho')" class="mt-2" />
    </div>
    <div>
        <label for="area_trabalha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Área que
            Trabalha</label>
        <x-text-input placeholder="Qual Área que Trabalha?" name="area_trabalha" id="area_trabalha"
            value="{{ $socio->area_trabalha ?? old('area_trabalha') }}" type="text" />
        <x-input-error :messages="$errors->get('area_trabalha')" class="mt-2" />
    </div>
    <div>
        <label for="tamanho_propriedade" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Se
            Pequena Propriedade, Tamanho</label>
        <x-text-input placeholder="Tamanho da Propriedade?" name="tamanho_propriedade" id="tamanho_propriedade"
            value="{{ $socio->tamanho_propriedade ?? old('tamanho_propriedade') }}" type="text" />
        <x-input-error :messages="$errors->get('tamanho_propriedade')" class="mt-2" />
    </div>
    <div>
        <label for="escritura_prop" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tem
            Escritura
            Prop.:</label>
        <div class="flex">
            <div class="flex items-center mr-4">
                <input id="escritura_prop" type="radio" value="{{ 1 }}" name="escritura_prop"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="escritura_prop"
                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sim</label>
            </div>
            <div class="flex items-center mr-4">
                <input id="escritura_prop-nao" type="radio" value="{{ 0 }}" name="escritura_prop"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="escritura_prop"
                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Não</label>
            </div>
        </div>
        <x-input-error :messages="$errors->get('escritura_prop')" class="mt-2" />
    </div>
    <div>
        <label for="cadastrado"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cadastrado:</label>
        <div class="flex">
            <div class="flex items-center mr-4">
                <input id="cadastrado" type="radio" value="{{ 1 }}" name="cadastrado"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="cadastrado" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sim</label>
            </div>
            <div class="flex items-center mr-4">
                <input id="cadastrado-nao" type="radio" value="{{ 0 }}" name="cadastrado"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="cadastrado" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Não</label>
            </div>
        </div>
        <x-input-error :messages="$errors->get('cadastrado')" class="mt-2" />
    </div>
    <div>
        <label for="assalariado"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Assalariado:</label>
        <div class="flex">
            <div class="flex items-center mr-4">
                <input id="assalariado" type="radio" value="{{ 1 }}" name="assalariado"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="assalariado" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sim</label>
            </div>
            <div class="flex items-center mr-4">
                <input id="assalariado-nao" type="radio" value="{{ 0 }}" name="assalariado"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="assalariado" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Não</label>
            </div>
        </div>
        <x-input-error :messages="$errors->get('assalariado')" class="mt-2" />
    </div>
    <div>
        <label for="carteira_assinada" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tem
            Carteira Assinada:</label>
        <div class="flex">
            <div class="flex items-center mr-4">
                <input id="carteira_assinada" type="radio" value="{{ 1 }}" name="carteira_assinada"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="carteira_assinada"
                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sim</label>
            </div>
            <div class="flex items-center mr-4">
                <input id="carteira_assinada-nao" type="radio" value="{{ 0 }}"
                    name="carteira_assinada"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="carteira_assinada"
                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Não</label>
            </div>
        </div>
        <x-input-error :messages="$errors->get('carteira_assinada')" class="mt-2" />
    </div>
    <div>
        <label for="salario" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Salário
            Quanto:</label>
        <x-text-input placeholder="Salário Quanto?" name="salario" id="salario"
            value="{{ $socio->salario ?? old('salario') }}" type="text" />
        <x-input-error :messages="$errors->get('salario')" class="mt-2" />
    </div>
    <div>
        <label for="tempo_trabalho" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempo de
            Trabalho:</label>
        <x-text-input placeholder="Insira o Tempo de Trabalho" name="tempo_trabalho" id="tempo_trabalho"
            value="{{ $socio->tempo_trabalho ?? old('tempo_trabalho') }}" type="text" />
        <x-input-error :messages="$errors->get('tempo_trabalho')" class="mt-2" />
    </div>
    <div>
        <label for="anos_municipio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantos
            Anos
            Mora no Município:</label>
        <x-text-input placeholder="Insira Quantos Anos Mora" name="anos_municipio" id="anos_municipio"
            value="{{ $socio->anos_municipio ?? old('anos_municipio') }}" type="text" />
        <x-input-error :messages="$errors->get('anos_municipio')" class="mt-2" />
    </div>
    <div>
        <label for="endereco" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Endereço:</label>
        <x-text-input placeholder="Insira o Endereço" name="endereco" id="endereco"
            value="{{ $socio->endereco ?? old('endereco') }}" type="text" class="w-full" />
        <x-input-error :messages="$errors->get('endereco')" class="mt-2" />
    </div>
    <div>
        <label for="propriedade_de" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Propriedade
            de:</label>
        <x-text-input placeholder="Insira o proprietario" name="propriedade_de" id="propriedade_de"
            value="{{ $socio->propriedade_de ?? old('propriedade_de') }}" type="text" class="w-full" />
        <x-input-error :messages="$errors->get('propriedade_de')" class="mt-2" />
    </div>
    <div>
        <label for="nome_esposa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome da
            Esposa
            do Sócio:</label>
        <x-text-input placeholder="Insira o Nome da Esposa" name="nome_esposa" id="nome_esposa"
            value="{{ $socio->nome_esposa ?? old('nome_esposa') }}" type="text" class="w-full" />
        <x-input-error :messages="$errors->get('nome_esposa')" class="mt-2" />
    </div>
    <div>
        <label for="data_emissao" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data da
            Emissão:</label>
        <x-text-input placeholder="Insira a Data da Emissão" name="data_emissao" id="data_emissao"
            value="{{ $socio->data_emissao ?? old('data_emissao') }}" type="text" />
        <x-input-error :messages="$errors->get('data_emissao')" class="mt-2" />
    </div>
    <div>
        <label for="rg" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">RG:</label>
        <x-text-input placeholder="Insira o RG" name="rg" id="rg" value="{{ $socio->rg ?? old('rg') }}"
            type="text" />
        <x-input-error :messages="$errors->get('rg')" class="mt-2" />
    </div>
    <div>
        <label for="cpf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CPF:</label>
        <x-text-input placeholder="Insira o CPF" name="cpf" id="cpf"
            value="{{ $socio->cpf ?? old('cpf') }}" type="text" />
        <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
    </div>


</div>
<br />
<br />

@if (isset($socio->id))
    <x-primary-button class="ml-4">
        {{ __('Atualizar') }}
    </x-primary-button>
@else
    <x-primary-button class="ml-4">
        {{ __('Cadastrar') }}
    </x-primary-button>
@endif



</form>
