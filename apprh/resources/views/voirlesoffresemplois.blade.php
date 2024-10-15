<x-app-layout>
    <x-slot name="header">
        <h2 class="flex justify-between font-semibold text-xl text-gray-800 leading-tight">
          
            {{ __('Toutes les offres') }} <button  class='btn btn-danger' data-bs-toggle="modal" data-bs-target="#exampleModaldelete">Supprimer</button></a>
           
            
        </h2>
    </x-slot>

    <!--modal delete -->

    <!-- Button trigger modal -->

    <div class="flex justify-center col-start-2 upe">


        <a href="{{ route('recrutement') }}"><button class='btn btn-dark'>
                << Back</button></a>

    </div>

    @if(!$firstEntry && !$firstEmploi)
    <div class="flex justify-center col-start-2 upe">
    <p>Aucunes donnees...</p>
    </div>
    @elseif ($firstEntry && !$firstEmploi)
    <div class="flex justify-center col-start-2 upe">
        <p>Aucunes donnees...</p>
        </div>
@elseif ($firstEntry && $firstEmploi)

  <!-- Modal -->
  <div class="modal fade" id="exampleModaldelete" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" >
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Supprimer</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Voulez vous supprimer  les elements selectionnés ?
        </div>
        <form action="{{ route('deleteoffreemploi') }}" method='POST'>
            @csrf
        <div class="modal-footer">
            <button type ='submit' class="btn btn-dark">Oui</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Non</button>
          
        </div>
      </div>
    </div>
  </div>


    <!-- modal delete -->

   



    <div class="flex justify-center lg:col-start-2 up ">

        <div class='largeur'>
            @foreach ($offres as $offre)
                <h2 class="shadow-sm mb-3 p-4 flex justify-between" data-bs-toggle="collapse"
                    href="#collapseExample{{ $offre->id }}" role="button" aria-expanded="false"
                    aria-controls="collapseExample"><div>
                    <span>Reference :{{ $offre->reference }}</span>  - Titre : {{ $offre->titre }}
                   
                </div><div> <span class='mx-2 mb-2 sent'data-bs-toggle="modal"
                            data-bs-target="#exampleModal{{ $offre->id }}">Envoyer Template</span>
                        <div class="flex justify-between mt-4">
                            <span data-bs-toggle="modal" data-bs-target="#exampleModalupdate{{ $offre->id }}"
                                class='mx-2 update'>Update</span>
                            <span class='text-end mx-4'>
                             
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{ $offre->id }}" 
                                        id="flexCheckDefault{{ $offre->id }}" name='check[]'/><span><i class="fa-regular fa-trash-can delete-icon"></i></span>
                                </div>
                           
                            </span>

                        </div>
                    </div>
                </h2>



                <div class="collapse" id="collapseExample{{ $offre->id }}">
                    <div class="card card-body">
                        {{ $offre->description }}
                      
                    </div>
                   
                </div>
              
            @endforeach
        </form>
        </div>

    </div>
    <div class='d-flex justify-content-center my-4 linkss'>
        {{ $offres->links() }}
    </div>



    <!-- Button trigger modal -->

    <!-- Modal -->

    @foreach ($offres as $offre)
        <div class="modal fade" id="exampleModal{{ $offre->id }}" tabindex="-1" data-bs-backdrop="static" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog  modal-dialog-scrollable modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Template</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h2><strong>Titre de l'offre :</strong> {{ $offre->titre }}</h2></br>
                       
                        <hr /></br>
                        <p><strong>Reference : </strong>{{ $offre->reference }}</p><hr/><br/>
                        <form action="{{ route('sendtemplateoffres', ['id' => $offre->id]) }}" method='post'>
                            @csrf

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Vous enverrez ce template å
                                    :</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="name@example.com" name='email' required>
                            </div>
                            <div class="mb-3">

                                <input type="hidden" class="form-control" id="exampleFormControlInput1"
                                    placeholder="name@example.com" value="{{ $offre->titre }}" name='titre'>
                            </div>
                            <div class="mb-3">

                                <textarea class="form-control" id="exampleFormControlTextarea1" style="display: none;" rows="3"
                                    name='description'>{{ $offre->description }}</textarea>
                            </div>
                           
                            <button type='submit' class='btn btn-dark'>Soumettre</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    @endforeach


    @foreach ($offres as $offre)
        <!-- modal pour update -->

        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="exampleModalupdate{{ $offre->id }}" data-bs-backdrop="static" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('updateoffreemploi', ['id' => $offre->id]) }}" method='post'>
                            @csrf


                            <div class="mb-3">

                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                     value="{{ $offre->titre }}" name='titre'>
                            </div>
                            <div class="mb-3">

                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='description'>{{ $offre->description }}</textarea>
                            </div>
                            <button type='submit' class='btn btn-dark'>Modifier</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    @endforeach
    <!-- modal pour update -->

@endif
</x-app-layout>




<style>
    .lelien{
        margin-top: 30px
    }
    .lien{
        color: blue;
    }
     .delete-icon {
            color: gray;
            cursor: pointer;
            transition: color 0.3s ease;
        }
        .delete-icon.red {
            color: red;
        }
    .fa-trash-can {
        margin-top: 3px;
        color: grey;
    }

    .sent {
        color: lightslategray
    }


    .in {
        width: 60%;
    }

    .linkss {
        margin-top: 10px !important;
    }

    #basic-addon2 {
        background-color: greenyellow;
        color: black
    }

    #basic-addon3 {
        background-color: red;
        color: black
    }

    .bg {
        background-color: transparent !important
    }

    .update {
        color: green
    }

    .dels {
        color: red
    }

    .largeur {
        width: 80%;
    }

    .cons {
        width: 70%;
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
        top: 10px;

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
