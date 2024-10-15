<x-app-layout>
    <x-slot name="header">


        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employé') }} : {{ $employes->prenom }} {{ $employes->name }}
        </h2>

      
    </x-slot>


    <div class="flex lg:justify-center lg:col-start-2 upe">


        <span><a href="{{ route('voirmesemployes') }}"><button class='btn btn-dark'>
                    <<<Back</button></a></span>

    </div>
    @if (!$firstEntry)
        <div class="flex lg:justify-center lg:col-start-2 upe">
            <p>Aucune donnees...</p>
        </div>
    @elseif($firstEntry)
        <!-- modal delete utilisateurs -->
        <form action="" method='post'>
            <div class="modal fade" id="exampleModaldelete" data-bs-backdrop="static" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Supprimer</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Voulez vous supprimer les elements selectionnés ?
                        </div>
                        <form action="{{ route('deleteutilisateurs') }}" method='POST'>
                            @csrf
                            <div class="modal-footer">
                                <button type ='submit' class="btn btn-dark">Oui</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Non</button>

                            </div>
                    </div>
                </div>
            </div>


            <!-- modal delete utilisateurs -->





            <div class="flex lg:justify-center lg:col-start-2 ">
                <table class="shadow-lg table table-dark table-striped cons">
                    <thead>
                        <tr>
                            <th class='text-center'>Matricule</th>
                            <th class='text-center'>Nom</th>
                            <th class='text-center'>Prenom</th>
                            <th class='text-center'>Telephone</th>
                            <th class='text-center'>Email</th>
                            <th class='text-center'>Poste</th>
                            <th class='text-center'>Reference</th>
                          
                           

                        </tr>
                    </thead>
                    <tbody>

                      
                            <tr>
                                <td class='text-center'> {{ $employes->matricule }}</td>
                                <td class='text-center'> {{ $employes->name }}</td>
                                <td class='text-center'> {{ $employes->prenom }}</td>
                                <td class='text-center'> {{ $employes->telephone }}</td>
                                <td class='text-center'> {{ $employes->email }}</td>
                                @if ($firstEmploi)
                                <td class='text-center'> {{ $employes->role}}</td>
                                @elseif (!$firstEmploi)
                                <td class='text-center'>RAS</td>
                                @endif
                                @if ($firstEmploi)
                                <td class='text-center'> {{ $employes->voiremploye->candidat->offreemploi->reference}}</td>
                                @elseif (!$firstEmploi)
                                <td class='text-center'>RAS</td>
                                @endif
                               

                            </tr>
                      

                    </tbody>
                </table>
            </div><hr>
            <div class="flex lg:justify-center lg:col-start-2 ">
                <table class="shadow-lg table table-dark table-striped cons">
                    <thead>
                        <tr>
                            <th class='text-center'>CV</th>
                            <th class='text-center'>Societe</th>
                            <th class='text-center'>Contrat</th>
                            <th class='text-center'>N• CNPS</th>
                            <th class='text-center'>N• Assurance Sante</th>
                            <th class='text-center'>Salaire Brute Mensuel</th>
                          

                        </tr>
                    </thead>
                    <tbody>

                      
                            <tr>
                                <td class='text-center'> <a href="{{ asset('storage/' . $employes->voiremploye->candidat->cv) }}"
                                    target="_blank">Télécharger le CV</a></td>
                               
                                <td class='text-center'> {{ $employes->societe }}</td>
                                <td class='text-center'><a href="{{ route('voircontratcandidat',['id'=>$employes->id]) }}">Voir Contrat</a></td>
                                <td class='text-center'>{{ $employes->voiremploye->numerocnps }}</td>
                                <td class='text-center'> {{ $employes->voiremploye->numeroassurancesante}}</td>
                                <td class='text-center'> {{ round($employes->voiremploye->infoscontratcandidat->remunerationbrute/12)}} Fcfa </td>
                               


                            </tr>
                      

                    </tbody>
                </table>
            </div><hr>
            @if ($employes->voiremploye->infoscontratcandidat->dureecontrat == null)
            <div class="flex lg:justify-center lg:col-start-2 ">
                <table class="shadow-lg table table-dark table-striped cons">
                    <thead>
                        <tr>
                            <th class='text-center'>Service Rattachement</th>
                            <th class='text-center'>Date debut contrat</th>
                            <th class='text-center'>Type Contrat</th>
                            <th class='text-center'> Bulletin de Paie</th>
                          

                        </tr>
                    </thead>
                    <tbody>

                      
                            <tr>
                                <td class='text-center'>{{ $employes->voiremploye->infoscontratcandidat->servicerattachment }}</td>
                               
                                <td class='text-center'> {{ $employes->voiremploye->infoscontratcandidat->datedebutcontrat }}</td>
                                <td class='text-center'>{{ $employes->voiremploye->infoscontratcandidat->typecontrat }}</td>
                                <td class='text-center'> - </td>
                               


                            </tr>
                      

                    </tbody>
                </table>
            </div><hr>
            @elseif ($employes->voiremploye->infoscontratcandidat->dureecontrat !== null)
            <div class="flex lg:justify-center lg:col-start-2 ">
                <table class="shadow-lg table table-dark table-striped cons">
                    <thead>
                        <tr>
                            <th class='text-center'>Service Rattachement</th>
                            <th class='text-center'>Date debut contrat</th>
                            <th class='text-center'> Bulletin de Paie</th>
                            <th class='text-center'>Type Contrat</th>
                            <th class='text-center'>Duree Contrat</th>
                     
                          

                        </tr>
                    </thead>
                    <tbody>

                      
                            <tr>
                                <td class='text-center'>{{ $employes->voiremploye->infoscontratcandidat->servicerattachment }}</td>
                               
                                <td class='text-center'> {{ $employes->voiremploye->infoscontratcandidat->datedebutcontrat }}</td>
                               <td class='text-center'> - </td>
                                <td class='text-center'>{{ $employes->voiremploye->infoscontratcandidat->typecontrat }}</td>
                                <td class='text-center'> {{ $employes->voiremploye->infoscontratcandidat->dureecontrat }} Mois</td>
                               
                               


                            </tr>
                      

                    </tbody>
                </table>
            </div><hr>
            @endif
          
            <div class="flex lg:justify-center lg:col-start-2 ">
                <table class="shadow-lg table table-dark table-striped cons">
                    <thead>
                        <tr>
                            <th class='text-center'>Missions assignées</th>
                            <th class='text-center'>Avantages de l'employé</th>
                            <th class='text-center'>Horaire de Travail/Semaine</th>
                            <th class='text-center'>Nombre jours conges</th>
                            <th class='text-center'>Role / Permission</th>
                          

                        </tr>
                    </thead>
                    <tbody>

                      
                            <tr>
                                <td class='text-center cursor' data-bs-toggle="modal" data-bs-target="#staticBackdropmissions">Voir missions</td>
                               
                                <td class='text-center cursor' data-bs-toggle="modal" data-bs-target="#staticBackdropavantages">Voir avantages</td>
                                <td class='text-center'>{{ $employes->voiremploye->infoscontratcandidat->horairetravail}}</td>
                                <td class='text-center'>{{ $employes->voiremploye->infoscontratcandidat->nbrejoursconge }}</td>
                                <td class='text-center'> {{ $employes->permission}}</td>
                               


                            </tr>
                      

                    </tbody>
                </table>
            </div>
        </form>

    @endif



  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdropmissions" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Missions assignée(s) å {{ $employes->name }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @if ($lesmissions->mission1 =='non')
            <p></p>
                @elseif ($lesmissions->mission1 !=='non')
                <li>{{ $lesmissions->mission1 }}</li>
            @endif
            @if ($lesmissions->mission2 =='non')
            <p></p>
                @elseif ($lesmissions->mission2 !=='non')
                <li>{{ $lesmissions->mission2 }}</li>
            @endif
          <p></p>
        </div>
      
      </div>
    </div>
  </div>


  <div class="modal fade" id="staticBackdropavantages" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Avantages pour {{ $employes->name }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @if ($lesavantages->avantage1 =='non')
            <p></p>
                @elseif ($lesavantages->avantage1 !=='non')
                <li>{{ $lesavantages->avantage1 }}</li>
            @endif
            @if ($lesavantages->avantage2 =='non')
            <p></p>
                @elseif ($lesavantages->avantage2 !=='non')
                <li>{{ $lesavantages->avantage2 }}</li>
            @endif
          <p></p>
        </div>
      
      </div>
    </div>
  </div>
</x-app-layout>

<style>
    .cursor{
        cursor: pointer;
    }
    .coules {
        color: green !important;
    }

    .couless {
        color: red;
    }

    .enbas {
        width: 20px;
        height: 20px;
    }

    .cons {
    
    color: lightgreen !important;
        width: 70%;
        margin-top: 50px;
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
        top: 100px;

    }

    .upp {
        position: relative;
        top: 00px;

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

    .couls {
        color: gray;
    }
</style>
