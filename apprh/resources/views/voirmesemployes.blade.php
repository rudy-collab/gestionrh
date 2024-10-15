<x-app-layout>
    <x-slot name="header">


        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Voir mes Employes') }}
        </h2>

        <span><button type='button' class="btn btn-danger btn-sm mx-4 mt-4" data-bs-toggle="modal"
                data-bs-target="#exampleModaldelete">Supprimer Utilisateurs</button></span>
    </x-slot>


    <div class="flex justify-center lg:col-start-2 upe">


        <span><a href="{{ route('dashboard') }}"><button class='btn btn-dark'>
                    <<<Back</button></a></span>

    </div>
    <div class="flex justify-center lg:col-start-2 upe">
    <label for="inputPassword2">Rechercher un employe en particulier</label>
    </div>
    <div class="flex justify-center lg:col-start-2 mt-3">
        <form  action="{{ route('voirmesemployes') }}"  method="post"  class="row g-3">
            @csrf
            <div class="col-auto">
          
              <input type="text" class="form-control " id="inputPassword2" placeholder="Rechercher un employe en particulier" value="{{ $lavaleur }}" name="emp" required/>
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-dark mb-3">Rechercher</button>
            </div>
          </form>

    </div>

  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">...</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
        </div>
      
      </div>
    </div>
  </div>
    @if (!$firstEntry)
        <div class="flex justify-center lg:col-start-2 upe">
            <p>Aucune donnees...</p>
        </div>
    @elseif($firstEntry)

        <!-- modal delete utilisateurs -->
        <form action="{{ route('deleteemploye') }}" method='post'>
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
                        <form action="{{ route('deleteemploye') }}" method='POST'>
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
                <table class="shadow-lg table table-light table-striped cons">
            <thead>
              <tr>
                <tr>
                    <th class='text-center'>Matricule</th>
                    <th class='text-center'>Nom</th>
                    <th class='text-center'>Prenom</th>
                    <th class='text-center'>Email</th>
                    <th class='text-center'>Telephone</th>
                    <th class='text-center'>Fonction</th>
                   
                    <th class='text-center'>Details</th>
                    <th class='text-center sup'>Supprimer</th>
                </tr>
              </tr>
            </thead>
            <tbody>
               
                @foreach ($users as $employe)
                        
                <tr>
                    <td class='text-center'><strong>{{ $employe->matricule }}</strong></td>
                    <td class='text-center'> {{ $employe->name }}</td>
                    <td class='text-center'> {{ $employe->prenom }}</td>
                    <td class='text-center'> {{ $employe->email}}</td>
                    <td class='text-center'> {{ $employe->telephone}}</td>
                    @if($employe->candidat === 'non')
                    <td class='text-center'> {{ $employe->role}}</td>
                    @elseif ($employe->candidat === 'oui')
                    <td class='text-center'> {{ $employe->role}}</td>
                    @endif
                  @if($employe->candidat === 'non')
                    @if ($employe->contratactive == 'oui' && $employe->permission == 'aucune' && $employe->idadmin == 'Rien')
                    
                          <td class='text-center'><a href="{{ route('employedetails',['id'=>$employe->id]) }}" >Voir</td></a>
                          @elseif ($employe->contratactive == 'oui' && $employe->permission == 'aucune' && $employe->idadmin !== 'Rien')
                          <td class='text-center'><a href="{{ route('employepermissiondetails',['id'=>$employe->id]) }}" >Voir</td></a>
                          @elseif ($employe->contratactive == 'oui' && $employe->permission !== 'aucune')
                          <td class='text-center'><a href="{{ route('employepermissiondetails',['id'=>$employe->id]) }}" >Voir</td></a>
                          @elseif ($employe->contratactive == 'non' && $employe->permission == 'aucune' && $employe->idadmin == 'Rien' )
                          <td class='text-center comp '><a href="{{ route('completeinfosprofiluser',['id'=>Auth::user()->id]) }}">Completez votre profil</a></td>
                          @elseif ($employe->contratactive == 'non' && $employe->permission !== 'aucune')
                          <td class='text-center comp '><a href="{{ route('modifierinfosnouvelemployepermission',['id'=>$employe->id]) }}">Completez son profil</a></td>
                          @elseif ($employe->contratactive == 'non' && $employe->permission == 'aucune' && $employe->idadmin !== 'Rien')
                          <td class='text-center comp '><a href="{{ route('modifierinfosnouvelemployepermission',['id'=>$employe->id]) }}">Completez son profil</a></td>
                        
                    @endif

                    @elseif ($employe->candidat === 'oui')
                    <td class='text-center'><a href="{{ route('employedetailscandidat',['id'=>$employe->id]) }}" >Voir</td></a>
                  @endif
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
    <div class='d-flex justify-content-center my-4'>
        {{$users->links()}}
        </div>
</x-app-layout>

<style>
  
    .sup{
        color: red
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
