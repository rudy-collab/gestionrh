<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Infos Profil Utilisateur') }}
        </h2>
    </x-slot>
   
   
    <form action="{{ route('completeinfosadmin',['id'=>Auth::user()->id]) }}" method='post' enctype="multipart/form-data">
        @csrf
    <div class="flex lg:justify-center lg:col-start-2 up ">


        <div class='shadow-lg cons'>
           
                <div class="modal-body">
                    <p class='gris'>Assigner des missions (10 Maximum...)</p>
             
                    <br>
                    <p><em>Vos missions principales seront :</em></p>
                    @if ($mission1 == '')
                        <p></p>
                    @elseif ($mission1 !== 'non')
                        <li>{{ $mission1 }}</li>
                    @endif
                    @if ($mission2 == '')
                        <p></p>
                    @elseif ($mission2 !== 'non')
                        <li>{{ $mission2 }}</li>
                    @endif
                    @if ($mission3 == '')
                        <p></p>
                    @elseif ($mission3 !== 'non')
                        <li>{{ $mission3 }}</li>
                    @endif
                    @if ($mission4 == '')
                        <p></p>
                    @elseif ($mission4 !== 'non')
                        <li>{{ $mission4 }}</li>
                    @endif
                    @if ($mission5 == '')
                        <p></p>
                    @elseif ($mission5 !== 'non')
                        <li>{{ $mission5 }}</li>
                    @endif
                    @if ($mission6 == '')
                        <p></p>
                    @elseif ($mission6 !== 'non')
                        <li>{{ $mission6 }}</li>
                    @endif
                    @if ($mission7 == '')
                        <p></p>
                    @elseif ($mission7 !== 'non')
                        <li>{{ $mission7 }}</li>
                    @endif
                    @if ($mission8 == '')
                        <p></p>
                    @elseif ($mission8 !== 'non')
                        <li>{{ $mission8 }}</li>
                    @endif
                    @if ($mission9 == '')
                        <p></p>
                    @elseif ($mission9 !== 'non')
                        <li>{{ $mission9 }}</li>
                    @endif
                    @if ($mission10 == '')
                        <p></p>
                    @elseif ($mission10 !== 'non')
                        <li>{{ $mission10 }}</li>
                    @endif
                    @if ($recup->status == 0)
                    <p></p>
                @elseif ($recup->status  > 0)
                    <p  data-bs-toggle="modal" data-bs-target="#staticBackdropmissions" class='mission'> {{ $montant }}
                        .</p>
                @endif
                  
                   <br> <hr><br>

                    <p class='gris' >Assigner des Avantages de Services (10 Maximum...)</p>
            
                 
                    <p><strong>- Avantages :</strong></p>
                  
                    @if ($avantage1 == '')
                        <p></p>
                    @elseif ($avantage1 !== 'non')
                        <li>{{ $avantage1 }}</li>
                    @endif
                    @if ($avantage2 == '')
                        <p></p>
                    @elseif ($avantage2 !== 'non')
                        <li>{{ $avantage2 }}</li>
                    @endif
                    @if ($avantage3 == '')
                        <p></p>
                    @elseif ($avantage3 !== 'non')
                        <li>{{ $avantage3 }}</li>
                    @endif
                    @if ($avantage4 == '')
                        <p></p>
                    @elseif ($avantage4 !== 'non')
                        <li>{{ $avantage4 }}</li>
                    @endif
                    @if ($avantage5 == '')
                        <p></p>
                    @elseif ($avantage5 !== 'non')
                        <li>{{ $avantage5 }}</li>
                    @endif
                    @if ($avantage6 == '')
                        <p></p>
                    @elseif ($avantage6 !== 'non')
                        <li>{{ $avantage6 }}</li>
                    @endif
                    @if ($avantage7 == '')
                        <p></p>
                    @elseif ($avantage7 !== 'non')
                        <li>{{ $avantage7 }}</li>
                    @endif
                    @if ($avantage8 == '')
                        <p></p>
                    @elseif ($avantage8 !== 'non')
                        <li>{{ $avantage8 }}</li>
                    @endif
                    @if ($avantage9 == '')
                        <p></p>
                    @elseif ($avantage9 !== 'non')
                        <li>{{ $avantage9 }}</li>
                    @endif
                    @if ($avantage10 == '')
                        <p></p>
                    @elseif ($avantage10 !== 'non')
                        <li>{{ $avantage10 }}</li>
                    @endif
                    @if ($recups->status  == 0)
                    <p></p>
                @elseif ($recups->status  > 0)
                    <p data-bs-toggle="modal" data-bs-target="#staticBackdropavantages" class='mission'> {{ $lavantage }}
                        .</p>
                @endif
                
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Remuneration Brute</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1"
                            name='remuneration'>
                    </div>
                   <br> <hr class='hrs'><br>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Type de Contrat</label>
                        <select id='mySelect' class="form-select" aria-label="Default select example"
                            name='typescontrat' required>

                            <option value="à Durée Indéterminée (CDI)" selected>à Durée Indéterminée (CDI)
                            </option>
                            <option value="à Durée Déterminée (CDD)">à Durée Déterminée (CDD) </option>
                            <option value="de Travail Temporaire (CTT)">de Travail Temporaire (CTT) </option>
                            <option value="d'Apprentissage">d'Apprentissage </option>
                            <option value="de Professionnalisation">de Professionnalisation </option>
                            <option value="à Temps Partiel">à Temps Partiel </option>
                            <option value="à Durée Déterminée d'Usage (CDDU)">à Durée Déterminée d'Usage (CDDU)
                            </option>
                            <option value="à Objet Défini (CDOD)">à Objet Défini (CDOD) </option>
                            <option value="de Travail à Domicile">de Travail à Domicile </option>
                            <option value="de Travail en Portage Salarial">de Travail en Portage Salarial
                            </option>
                        </select>
                    </div>
                    <label for="exampleFormControlInput1" style="display:none;" class="form-label mt-2"
                        id='non'>Duree Contrat</label>
                    <div id='oui' style="display:none;">de <input type="number" name='dureescontrat'
                            class='bord mt-2 mb-3' name='dureescontrat'> mois.</div>
                    <div id='non' style="display:none;">
                        <p></p>
                    </div>
                    <br>
                    <hr class='hrs'><br>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Periode Essai</label>
                        <input type="number" class="form-control" id="exampleFormControlInput4" value=''
                            name='nbrejours'> Mois.
                    </div>
                    <br>
                    <hr class='hrs'><br>

                    <div class="mb-3 mt-2">
                        <label for="exampleFormControlInput1" class="form-label mt-2">Horaire de travail</label>
                        <p> Vos horaires de travail seront de <input type="number" name='nbreheuretravail'
                                class='bord' required> heures par semaine,
                        <p>du</p>
                        <select class="form-select" aria-label="Default select example" name='firstjoursemaine'
                            required>

                            <option value="Lundi" selected>Lundi</option>
                            <option value="Mardi">Mardi </option>
                            <option value="Mercredi">Mercredi </option>
                            <option value="Jeudi">Jeudi</option>
                            <option value="Vendredi">Vendredi </option>
                            <option value="Samedi">Samedi </option>
                            <option value="Dimanche">Dimanche </option>

                        </select>
                        <p>au</p>
                        <select class="form-select" aria-label="Default select example" name='laststjoursemaine'
                            required>

                            <option value="Lundi" selected>Lundi</option>
                            <option value="Mardi">Mardi </option>
                            <option value="Mercredi">Mercredi </option>
                            <option value="Jeudi">Jeudi</option>
                            <option value="Vendredi">Vendredi </option>
                            <option value="Samedi">Samedi </option>
                            <option value="Dimanche">Dimanche </option>

                        </select><br>
                        <p>De</p>
                        <input type="time" name='debutheuretravail'>
                        <p>å</p>
                        <input type="time" name='finheuretravail'>
                        <br />
                    </div>
                   <br> <hr class='hrs'><br>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Lieu de Travail</label>
                        <input type="text" class="form-control" id="exampleFormControlInput4"
                            name='lieutravail'>
                    </div>
                    <br>
                    <hr class='hrs'><br>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Service Rattachement</label>
                        <input type="text" class="form-control" id="exampleFormControlInput4"
                            value='' name='nomservice'>
                    </div>
                    <br>
                    <hr class='hrs'><br> <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Responsable Service Rattachement</label>
                        <input type="text" class="form-control" id="exampleFormControlInput4"
                            value='' name='nomresponsable'>
                    </div>
                    <br>
                    <hr class='hrs'><br>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nombre Jours Conges</label>
                        <input type="number" class="form-control" id="exampleFormControlInput4"
                            value='' name='nbrejoursconges'>
                    </div>
                    <br>
                    <hr class='hrs'><br>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Date début Contrat</label>
                        <input type="date" class="form-control" id="exampleFormControlInput4"
                            value='' name='datedebut'>
                    </div>
                    <br>
                    <hr class='hrs'><br>
                    <div class="mb-3 filess">
                        <label for="formFileSm" class="form-label">Joindre votre CV...</label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file"
                            name='cv'>
                    </div>
                    <br><hr><br>

                  
                </div>
         
        </div>
    </div>


    <div class="flex lg:justify-center lg:col-start-2 up ">

        <div class="mb-3 bouts">
            <button class='btn btn-dark btnss' type='submit'>Soumettre</button>
        </div>

    </div>
</form>

    <!-- Button trigger modal -->


  <form action="{{ route('addmissionadmin', ['id' => Auth::user()->id]) }}" method="post">
        @csrf

    <div class="modal fade" id="staticBackdropmissions" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Assigner des missions...</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class='mission' name='mission' active required>
                </div>
                <div class="modal-footer">
                    <button type='submit' class="btn btn-dark">Soumettre</button>
                </div>

            </div>
        </div>
    </div>
</form>

<form action="{{ route('addavantageadmin', ['id' => Auth::user()->id]) }}" method="post">
    @csrf
    <div class="modal fade" id="staticBackdropavantages" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Assigner des Avantages...</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" class='mission' name='avantages' active required>
            </div>
            <div class="modal-footer">
                <button type='submit' class="btn btn-dark">Soumettre</button>
            </div>

        </div>
    </div>
</div>
</form>
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
      .mission {
        width: 100%;
        color: lightslategray;
        cursor: pointer;
    }
    .gris{
        color: gray;
       
    }
    label {
        color: gray
    }

  

    .cons {
        width: 70%;
        height: 700px;
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
        margin-top: 30px
    }

    .upe {
        margin-top: 40px
    }

    .progress {
        width: 30%;
    }

    .lore {
        opacity: 0;
    }
</style>
