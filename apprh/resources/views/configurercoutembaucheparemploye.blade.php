<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mission">

        </h2>
        <a href="{{ route('coutparemployecalcul') }}"><button class='btn btn-dark'>
            << Back</button></a>
    </x-slot>
    <div class="flex justify-center lg:col-start-2 upe">
                          
                        
        <h2 class="shadow p-3 mb-5 bg-body rounded animate__animated animate__headShake animate__infinite	infinite"> Cout total embauche {{ $employes->name }} : {{ $coutembaucheparemploye }} XAF</h2>
                          
                          </div>

    <div class="flex justify-center lg:col-start-2 up">
        <div class='shadow-lg rounded  cons px-4 py-4 haut'>

            <form action="{{ route('addcoutembaucheemploye', ['id' => $employes->id]) }}" method="post">
                @csrf

                <div class="flex justify-center lg:col-start-2 ">
                    <div>


                        <p><em>Composants coût embauche employé : <strong>{{ $employes->name }}</strong></em></p>
                        <div class="flex justify-center lg:col-start-2 ">
                            <div class='mx-3'>

                                @if ($composanteun == '')
                                    <p></p>
                                @elseif ($composanteun !== 'non')
                                    <li class='weg'>{{ $composanteun }} : </li>
                                @endif
                                @if ($composantedeux == '')
                                    <p></p>
                                @elseif ($composantedeux !== 'non')
                                    <li class='weg'>{{ $composantedeux }} :</li>
                                @endif
                                @if ($composantetrois == '')
                                    <p></p>
                                @elseif ($composantetrois !== 'non')
                                    <li class='weg'>{{ $composantetrois }} : </li>
                                @endif
                                @if ($composantequatre == '')
                                    <p></p>
                                @elseif ($composantequatre !== 'non')
                                    <li class='weg'>{{ $composantequatre }} : </li>
                                @endif
                                @if ($composantecinq == '')
                                    <p></p>
                                @elseif ($composantecinq !== 'non')
                                    <li class='weg'>{{ $composantecinq }} : </li>
                                @endif
                                @if ($composantesix == '')
                                    <p></p>
                                @elseif ($composantesix !== 'non')
                                    <li class='weg'>{{ $composantesix }} : </li>
                                @endif
                                @if ($composantesept == '')
                                    <p></p>
                                @elseif ($composantesept !== 'non')
                                    <li class='weg'>{{ $composantesept }} : </li>
                                @endif
                                @if ($composantehuit == '')
                                    <p></p>
                                @elseif ($composantehuit !== 'non')
                                    <li class='weg'>{{ $composantehuit }} : </li>
                                @endif
                                @if ($composanteneuf == '')
                                    <p></p>
                                @elseif ($composanteneuf !== 'non')
                                    <li class='weg'>{{ $composanteneuf }} :</li>
                                @endif
                                @if ($composantedix == '')
                                    <p></p>
                                @elseif ($composantedix !== 'non')
                                    <li class='weg'>{{ $composantedix }} :</li>
                                @endif
                            </div>

                            <div class='mx-3'>
                                @if ($valeurun == '')
                                    <p></p>
                                @elseif ($valeurun !== '')
                                    <li class='lis'>{{ $valeurun }} XAF</li>
                                @endif
                                @if ($valeurdeux == '')
                                    <p></p>
                                @elseif ($valeurdeux !== '')
                                    <li class='lis'>{{ $valeurdeux }} XAF</li>
                                @endif
                                @if ($valeurtrois == '')
                                    <p></p>
                                @elseif ($valeurtrois !== '')
                                    <li class='lis'>{{ $valeurtrois }} XAF</li>
                                @endif
                                @if ($valeurquatre == '')
                                    <p></p>
                                @elseif ($valeurquatre !== '')
                                    <li class='lis'>{{ $valeurquatre }} XAF</li>
                                @endif
                                @if ($valeurcinq == '')
                                    <p></p>
                                @elseif ($valeurcinq !== '')
                                    <li class='lis'>{{ $valeurcinq }} XAF</li>
                                @endif
                                @if ($valeursix == '')
                                    <p></p>
                                @elseif ($valeursix !== '')
                                    <li class='lis'>{{ $valeursix }} XAF</li>
                                @endif
                                @if ($valeursept == '')
                                    <p></p>
                                @elseif ($valeursept !== '')
                                    <li class='lis'>{{ $valeursept }} XAF</li>
                                @endif
                                @if ($valeurhuit == '')
                                    <p></p>
                                @elseif ($valeurhuit !== '')
                                    <li class='lis'>{{ $valeurhuit }} XAF</li>
                                @endif
                                @if ($valeurneuf == '')
                                    <p></p>
                                @elseif ($valeurneuf !== '')
                                    <li class='lis'>{{ $valeurneuf }} XAF</li>
                                @endif
                                @if ($valeurdix == '')
                                    <p></p>
                                @elseif ($valeurdix !== '')
                                    <li class='lis'>{{ $valeurdix }} XAF</li>
                                @endif

                            </div>
                        </div>
                        @if ($montant == 0)
                            <p></p>
                        @elseif ($montant > 0)
                            <p data-bs-toggle="modal" href="#exampleModalToggle1" class='mission'> {{ $montant }}
                                .</p>
                        @endif
                        <hr>
                        <br>
                        <label for=""><em>Canal de Recrutement... : </em></label>
                        <br>
                        @if($montant1 == '' && $montantcanal1 =''){
                            <p></p>
                        }@elseif($montant1 !='' && $montantcanal1 !='')
                        <li> {{ $montantcanal1 }} : {{ $montant1 }} XAF</li>
                        @endif
                        @if($montant2 == '' && $montantcanal2 =''){
                            <p></p>
                        }@elseif($montant2 !='' && $montantcanal2 !='')
                        <li>  {{ $montantcanal2 }} :  {{ $montant2 }} XAF</li>
                        @endif
                        @if($montant3 == '' && $montantcanal3 =''){
                            <p></p>
                        }@elseif($montant3 !='' && $montantcanal3 !='')
                        <li>  {{ $montantcanal3 }} :  {{ $montant3 }} XAF</li>
                        @endif
                        @if($montant4 == '' && $montantcanal4 =''){
                            <p></p>
                        }@elseif($montant4 !='' && $montantcanal4 !='')
                        <li>  {{ $montantcanal4 }} :  {{ $montant4 }} XAF</li>
                        @endif
                        @if($montant5 == '' && $montantcanal5 =''){
                            <p></p>
                        }@elseif($montant5 !='' && $montantcanal5 !='')
                        <li>  {{ $montantcanal5 }} :  {{ $montant5 }} XAF</li>
                        @endif
                        @if($montant6 == '' && $montantcanal6 =''){
                            <p></p>
                        }@elseif($montant6 !='' && $montantcanal6 !='')
                        <li>  {{ $montantcanal6 }} :  {{ $montant6 }} XAF</li>
                        @endif
                        @if($montant7 == '' && $montantcanal7 =''){
                            <p></p>
                        }@elseif($montant7 !='' && $montantcanal7 !='')
                        <li>  {{ $montantcanal7 }} :  {{ $montant7 }} XAF</li>
                        @endif
                        @if($montant8 == '' && $montantcanal8 =''){
                            <p></p>
                        }@elseif($montant8 !='' && $montantcanal8 !='')
                        <li>  {{ $montantcanal8 }} :  {{ $montant8 }} XAF</li>
                        @endif
                        @if($montant9 == '' && $montantcanal9 =''){
                            <p></p>
                        }@elseif($montant9 !='' && $montantcanal9 !='')
                        <li>  {{ $montantcanal9 }} :  {{ $montant9 }}XAF </li>
                        @endif
                        @if($montant10 == '' && $montantcanal10 =''){
                            <p></p>
                        }@elseif($montant10 !='' && $montantcanal10 !='')
                        <li>  {{ $montantcanal10 }} :  {{ $montant10 }} XAF</li>
                        @endif
                        @if ($montants == 0)
                        <p></p>
                    @elseif ($montants > 0)
                        <p data-bs-toggle="modal" href="" class='mission'> {{ $montants }}
                            .</p>
                    @endif
                    <hr>

                        <br>
                       
                   
                        <div class="input-group mb-3 mt-3">
                            <span class="input-group-text" id="basic-addon1">
                                <select class="form-select" aria-label="Default select example" name='canal'>
                                    <option selected></option>
                                    <option value="Sites d'emploi en ligne">Sites d'emploi en ligne</option>
                                    <option value="Réseaux sociaux">Réseaux sociaux</option>
                                    <option value="Sites web d'entreprise">Sites web d'entreprise</option>
                                    <option value="Agences de recrutement">Agences de recrutement</option>
                                    <option value="Forums et groupes spécialisés">Forums et groupes spécialisés</option>
                                    <option value="Journaux et magazines">Journaux et magazines</option>
                                    <option value="Écoles et universités">Écoles et universités</option>
                                    <option value="Événements de recrutement">Événements de recrutement</option>
                                    <option value="Bulletins internes">Bulletins internes</option>
                                    <option value="Recrutement Dirercte">Recrutement Dirercte</option>
                                </select>
                            </span>
                            <input type="number" class="form-control inp" placeholder="" aria-label="Username"
                                aria-describedby="basic-addon1" name='composante'>
                        </div>

                        <br> <button class='btn btn-dark mt-2' type='submit'>Configurer</button>

                    </div>

                </div>

            </form>


        </div>


    </div>


    <!-- debut modal mission -->
    <form action="{{ route('addcoutembaucheemployes', ['id' => $employes]) }}" method="post">
        @csrf
        <div class="modal fade" id="exampleModalToggle1" data-bs-backdrop="static" aria-hidden="true"
            aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel">Entrez une composante...</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <input type="text" class='mission' name='origine' active required>
                            </span>
                            <span class="input-group-text" id="basic-addon1">
                                <input type="number" class="" placeholder="" aria-label="" name='cout'>
                            </span>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type='submit' class="btn btn-dark">Soumettre</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- fin modal mission-->


    <script>
        document.getElementById('mySelect').addEventListener('change', function() {
            var value = this.value;
            document.getElementById('oui').style.display = 'none';
            document.getElementById('non').style.display = 'none';

            if (value !== 'à Durée Indéterminée (CDI)') {
                document.getElementById('oui').style.display = 'block';
            } else if (value === 'à Durée Indéterminée (CDI)') {
                document.getElementById('non').style.display = 'block';
            }
        });
    </script>
</x-app-layout>

<style>
    .weg {
        font-weight: bolder
    }

    .lis {
        list-style-type: none;
    }

    .inp {
        border: none
    }

    .ov {
        height: 700px;
        overflow: hidden;
    }

    .mission {
        width: 100%;
    }

    .wid {
        width: 70%;

    }

    .mission {
        color: green;
        cursor: pointer;
    }

    .under {
        text-decoration: underline
    }

    .long {
        width: 240px;
    }

    .long1 {
        width: 275px;
    }

    .bord {
        border: 0.25px solid gray;
    }

    .haut {
        height: 700px;
        margin-top: 10px;
        overflow: hidden;
    }

    .sel {
        margin-top: 50px
    }

    #ims {
        width: 450px;
        height: 450px;
    }

    .cons {
        margin-top: 100px;
        width: 70%;
        height: 600px;
        overflow: hidden scroll;

    }

    .digit {
        font-weight: bold;
    }

    #imas {
        height: 300px;
        width: 300px;
    }

    .up {
        position: relative;
        top: -100px;
    }

    .upe {
        margin-top: 10px;


    }

    .progress {
        width: 30%;
    }

    .lore {
        opacity: 0;
    }
</style>
