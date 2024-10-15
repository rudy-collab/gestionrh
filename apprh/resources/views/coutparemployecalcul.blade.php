<x-app-layout>
    <x-slot name="header">


        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Choisir employé pour modification de fonction...') }}
        </h2>

        <span><button type='button' class="btn btn-danger btn-sm mx-4 mt-4" data-bs-toggle="modal"
                data-bs-target="#exampleModaldelete">Supprimer Utilisateurs</button></span>
    </x-slot>


    <div class="flex justify-center lg:col-start-2 upe">


        <span><a href="{{ route('coutparemploye') }}"><button class='btn btn-dark'>
                    <<<Back</button></a></span>

    </div>
    @if (!$firstEntry)
        <div class="flex justify-center lg:col-start-2 upe">
            <p>Aucune donnees...</p>
        </div>
    @elseif($firstEntry)
        <!-- modal delete utilisateurs -->
        <form action="{{ route('deleteutilisateurs') }}" method='post'>
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
            <div class="flex justify-center lg:col-start-2 ">
                <table class="shadow-lg table table-light table-striped cons">
            <thead>
              <tr>
                <tr>
                    <th class='text-center'>Matricule</th>
                    <th class='text-center'>Nom</th>
                    <th class='text-center'>Prenom</th>

                    <th class='text-center sup'>Supprimer</th>
                   


                </tr>
              </tr>
            </thead>
            <tbody>
               
                @foreach ($users as $employe)
                        
                <tr data-bs-toggle="modal" href="#exampleModal{{ $employe->id }}" role="button">
                    <td  class='text-center'><strong>{{ $employe->matricule }}</strong></td>
                    <td class='text-center'> {{ $employe->name }}</td>
                    <td class='text-center'> {{ $employe->prenom }}</td>

                    <td class='text-center'>
                        <div class="form-check flex justify-center  ">
                            <input class="form-check-input mx-2" type="checkbox" value="{{ $employe->id }}"
                                id="flexCheckDefault{{ $employe->id }}" name='checks[]' /><span><i
                                    class="fa-regular fa-trash-can delete-icon mx-1"></i></span>
                        </div>
                    </td>
                </tr>
            @endforeach
           
            </tbody>
          </table>
        </div> 



        </form>

    @endif


    @foreach ($users as $employe)
        <div class="modal fade" id="exampleModal{{ $employe->id }}" tabindex="-1" data-bs-backdrop="static" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog  modal-dialog-scrollable modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cout embauche {{ $employe->name }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h2><strong>Nom :</strong> {{ $employe->name }}</h2></br>
                        <h2><strong>Prenom :</strong> {{ $employe->prenom }}</h2></br>
                        
                   
                        <hr /></br>
                        <div class="btn-group flex justify-center lg:col-start-2 " role="group" aria-label="Basic example">
                            <a href="{{ route('configurercoutembaucheparemploye',['id'=>$employe->id]) }}"><button type="button" class="btn btn-dark mx-2 "><i class="fa-solid fa-gear"></i> coût embauche {{$employe->name  }}</button></a>
                            
                            <button type="button" class="btn btn-danger mx-2"data-bs-dismiss="modal">Annuler</button>
                          </div>
                      

                    </div>

                </div>
            </div>
        </div>


    @endforeach
</x-app-layout>

<style>
     .sup{
        color: red
    }
    .ads{
        color: gray;
    }
    .comp{
        color: red
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
      
        width: 90% !important;
        margin-top: 50px;
    }
    .conss {
       
        width: 90% !important;
     
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
