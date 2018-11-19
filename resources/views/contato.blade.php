@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="d-block mw-100 py-5 mx-auto">
                <span class="title text-uppercase text-secondary font-weight-normal h1 line-height-short">
                    <span class="d-inline font-weight-bold" style="color:rgb(108, 205, 222);">/</span>Nosso time <span class="d-block">é o seu time</span>
                </span>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row w-75 mb-4 mx-auto">
            <div class="col">
                <p class="text-center">
                    Estamos a postos para fortalecer sua marca com soluções de comunicação inspiradas nas melhores ideias. 
                </p>
            </div>
        </div>
    </div>

    <div class="bg-lighter-gray w-100">
        <div class="container">
            {{-- <div class="row">
                <div class="col d-flex text-center">

                </div>
            </div> --}}
            <div class="row">
                <form id="form-contato" class="align-items-center d-flex justify-content-center w-100" action="" method="get">
                    <div class="col text-center">
                        <a href="#" class="btn bg-purple text-white py-3 px-4 btn-lg mw-100 text-uppercase contato-start">
                            Como a 6p pode me ajudar? <img src="{{ asset('img/icon-hand.svg') }}" style="width: 35px" class="d-inline ml-3">
                        </a>
                    </div>
                    <div class="col my-5 w-100 tab mx-auto">
                        <p>Para te entender melhor, vamos fazer algumas perguntas, e logo entraremos em contato, tudo bem?</p>
                        <p>Qual tipo de serviço você precisa?</p>
                        <button class="choice btn btn-secondary text-center mb-3 form-control" data-name="tipo_servico" data-value="branding" data-tab="1" type="button">Branding</button>
                        <button class="choice btn btn-secondary text-center mb-3 form-control" data-name="tipo_servico" data-value="digital" data-tab="5" type="button">Digital (Facebook, Instagram etc.)</button>
                        <button class="choice btn btn-secondary text-center mb-3 form-control" data-name="tipo_servico" data-value="tomar um café" data-tab="6" type="button">Só quero tomar um café e bater um papo.</button>
                    </div>
                    {{-- dados da empresa 1 --}}
                    <div class="col my-5 w-100 tab mx-auto">
                        <p>Certo, a gestão da sua marca é algo vital, e nós temos várias soluções a oferecer!</p>                    
                        <p>Nos conte mais sobre a sua empresa</p>  
                        <div class="form-group">
                            <select class="form-control" name="cargo" required>
                                <option disabled selected>Selecione seu cargo</option>
                                <option value="Sócio / CEO / Proprietário">Sócio / CEO / Proprietário</option>
                                <option value="Outros Cargos">Outros Cargos</option>
                                <option value="Diretor">Diretor</option>
                                <option value="Gerente de Marketing">Gerente de Marketing</option>
                                <option value="Gerente de Vendas">Gerente de Vendas</option>
                                <option value="Coordenador/Supervisor de Marketing">Coordenador/Supervisor de Marketing</option>
                                <option value="Coordenador/Supervisor de Vendas">Coordenador/Supervisor de Vendas</option>
                                <option value="Analista/Assistente de Marketing">Analista/Assistente de Marketing</option>
                                <option value="Analista/Assistente de Vendas">Analista/Assistente de Vendas</option>
                                <option value="Vendedor / Executivo de Contas">Vendedor / Executivo de Contas</option>
                                <option value="Estudante">Estudante</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="atuacao_empresa" required>
                                <option disabled selected>Selecione a Área de atuação da empresa</option>
                                <option value="Agência de Marketing e Publicidade">Agência de Marketing e Publicidade</option>
                                <option value="Consultorias e Treinamentos">Consultorias e Treinamentos</option>
                                <option value="Ecommerce">Ecommerce</option>
                                <option value="Educação e Ensino">Educação e Ensino</option>
                                <option value="Engenharia e Indústria Geral">Engenharia e Indústria Geral</option>
                                <option value="Eventos">Eventos</option>
                                <option value="Financeiro/Jurídico ou Serviços Relacionados">Financeiro/Jurídico ou Serviços Relacionados</option>
                                <option value="Governo e Órgãos Públicos">Governo e Órgãos Públicos</option>
                                <option value="Hardware e Eletrônicos">Hardware e Eletrônicos</option>
                                <option value="Imobiliárias">Imobiliárias</option>
                                <option value="Mídia e Comunicação">Mídia e Comunicação</option>
                                <option value="ONGs">ONGs</option>
                                <option value="Saúde e Estética">Saúde e Estética</option>
                                <option value="Serviços em Geral">Serviços em Geral</option>
                                <option value="Serviços em RH e Coaching">Serviços em RH e Coaching</option>
                                <option value="Software e Cloud">Software e Cloud</option>
                                <option value="Telecomunicações">Telecomunicações</option>
                                <option value="Turismo e Lazer">Turismo e Lazer</option>
                                <option value="Varejo">Varejo</option>
                            </select>
                        </div>
    
                        <div class="form-group">
                            <select class="form-control" name="numero_funcionarios" required>
                                <option disabled="disabled" selected="selected" value="">Selecione o Número de Funcionários</option>
                                <option value="1">1</option>
                                <option value="2-3">2-3</option>
                                <option value="4-10">4-10</option>
                                <option value="11-50">11-50</option>
                                <option value="51-200">51-200</option>
                                <option value="Mais de 200">Mais de 200</option>
                            </select>
                        </div>

                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary text-center mb-3 form-control" onclick="back()">Voltar</button>
                            <button class="btn btn-secondary text-center mb-3 form-control" data-tab="2" type="button" aria-label="">Avançar</button>
                        </div>

                    </div>
                    {{-- ja possui um site? 2 --}}
                    <div class="col my-5 w-100 tab mx-auto">
                        <p>Você ja possui um site?</p>                    
                        <button class="btn btn-secondary text-center mb-3 form-control" data-tab="3" data-value="sim" data-name="possui_site" type="button" aria-label="">Sim</button>
                        <button class="btn btn-secondary text-center mb-3 form-control" data-tab="5" data-value="não" data-name="possui_site" type="button" aria-label="">Não</button>
                        <button class="btn btn-secondary text-center mb-3 form-control" onclick="back()" type="button" aria-label="">Voltar</button>
                    </div>
                    {{-- endereco do site 3 --}}
                    <div class="col my-5 w-100 tab mx-auto">
                        <p>Qual o endereco do site?</p>
                        <p class="small text-muted">Ex.: www.exemplo.com</p>
                        <div class="form-group">
                            <input type="text" name="site" class="form-control">
                        </div>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary text-center mb-3 form-control" onclick="back()">Voltar</button>
                            <button class="btn btn-secondary text-center mb-3 form-control" data-tab="5" type="button" aria-label="">Avançar</button>
                        </div>
                    </div>
                    {{-- ja possui redes sociais? 4 --}}
                    <div class="col my-5 w-100 tab mx-auto">
                        <p>Voce já possui conta em todas as redes sociais?</p>
                        <p class="small text-muted">Twitter, LinkedIn, Facebook e Instagram</p>
                        <button class="btn btn-secondary text-center mb-3 form-control" data-tab="7" data-value="sim" data-name="possui_redes" type="button" aria-label="">Sim</button>
                        <button class="btn btn-secondary text-center mb-3 form-control" data-tab="7" data-value="nao" data-name="possui_redes" type="button" aria-label="">Ainda não</button>
                        <button class="btn btn-secondary text-center mb-3 form-control" onclick="back()" type="button" aria-label="">Voltar</button>
                    </div>          
                    {{-- como posso te chamar? 5 --}}
                    <div class="col my-5 w-100 tab mx-auto">
                        <p>Como posso te chamar?</p>
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome">
                        </div>
                        <div class="form-group">
                            <label for="nome">Sobrenome</label>
                            <input type="text" class="form-control" name="sobrenome">
                        </div>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary text-center mb-3 form-control" onclick="back()">Voltar</button>
                            <button class="btn btn-secondary text-center mb-3 form-control" data-tab="4" type="button" aria-label="">Avançar</button>
                        </div>
                    </div>
                    {{-- correndo pra comprar café 6 --}}
                    <div class="col my-5 w-100 tab mx-auto">
                        <p>Sem problemas!</p>
                        <p>Estamos saindo para comprar café agora, enquanto isso, deixe suas informações de contato para marcarmos a melhor hora.</p>
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome">
                        </div>
                        <div class="form-group">
                            <label for="nome">Sobrenome</label>
                            <input type="text" class="form-control" name="sobrenome">
                        </div>
                        <div class="form-group">
                            <label for="nome">E-mail</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="nome">Telefone</label>
                            <input type="phone" class="form-control" name="telefone">
                        </div>
                        <div class="form-group">
                            <label for="nome">Conte-nos um pouco sobre voce! (se quiser, claro)</label>
                            <textarea class="form-control" name="sobre" id="sobre" cols="30" rows="8"></textarea>
                        </div>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary text-center mb-3 form-control" onclick="back()">Voltar</button>
                            <button class="btn btn-secondary text-center mb-3 form-control" type="submit" aria-label="">Enviar</button>
                        </div>
                    </div>
                    {{-- mais informações 7 --}}
                    <div class="col my-5 w-100 tab mx-auto">
                        <p>Ok, já gravei seu nome!</p>
                        <p>Agora preciso de mais informações para mantermos contato e marcar um cafézinho.</p>
                        <div class="form-group">
                            <label for="nome">E-mail</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="nome">Telefone</label>
                            <input type="phone" class="form-control" name="telefone">
                        </div>
                        <div class="form-group">
                            <label for="nome">Conte-nos um pouco sobre voce! (se quiser, claro)</label>
                            <textarea class="form-control" name="sobre" id="sobre" cols="30" rows="8"></textarea>
                        </div>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary text-center mb-3 form-control" onclick="back()">Voltar</button>
                            <button class="btn btn-secondary text-center mb-3 form-control" type="submit" aria-label="">Enviar</button>
                        </div>
                    </div>
                
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row w-75 mx-auto">
            <div class="col">
                <hr class="mt-5">
            </div>
        </div>
        <div class="row">
            <div class="d-block py-5 mx-auto text-center">
                <span class="title text-uppercase text-secondary font-weight-normal h1 line-height-short">
                    <span class="d-inline font-weight-bold" style="color:rgb(29, 138, 153);">/</span>Onde nos encontrar
                </span>
            </div>
        </div>
    </div>

    <div class="d-block w-100" id="map-contato"></div>

@endsection

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
@endsection

@section('script')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAy8QGIU9igHhxRr0G8uhFPJ_ls3lBRdCY&libraries=places&callback=initMap" async defer></script>
    <script src="{{ asset('js/map.js') }}"></script>
    <script src="{{ asset('js/contato.js') }}"></script>    
@endsection