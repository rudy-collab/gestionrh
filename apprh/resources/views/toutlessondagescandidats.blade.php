<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Candidat(s) ayant repondu(s) au sondage...') }}
        </h2>
        <div class='flex justify-between lg:col-start-2'>
           <a href="{{ route('recrutement') }}"> <button  class='btn btn-dark'>
                    << </button></a><button class='btn btn-danger' data-bs-toggle="modal"
                data-bs-target="#exampleModaldelete">Supprimer</button>
        </div>
    </x-slot>


@if(!$firstEntry)

<div class='flex justify-center lg:col-start-2 '>
    <p>Aucunes entrees...</p>
</div>
@elseif($firstEntry)
    <div class="modal fade" id="exampleModaldelete" data-bs-backdrop="static" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Supprimer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Voulez vous supprimer les elements selectionnés ?
                </div>
                <form action="{{ route('deletecandidatsondes') }}" method='POST'>
                    @csrf
                    <div class="modal-footer">
                        <button type ='submit' class="btn btn-dark">Oui</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Non</button>

                    </div>
            </div>
        </div>
    </div>

    <div class='flex justify-center lg:col-start-2 recru'>
        <table class="shadow-lg table table-light table-striped cons">
            <thead>
                <tr>
                    <th class='text-center'>#</th>
                    <th class='text-center'>Nom Candidat</th>
                    <th class='text-center'>Email</th>
                    <th class='text-center'>Telephone</th>
                    <th class='text-center'>Titre de l'Offre</th>
                    <th class='text-center'>Reference Offre</th>
                    <th class='text-center'>Reponse Sondage</th>
                    <th class='text-center'>Supprimer</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($candidats as $candidat)
                @if ($candidat->reponsesondage === 'oui')
                    <tr class='animate__animated animate__headShake animate__infinite	infinite'>
                        <td class='text-center'></td>
                        <td class='text-center'> {{ $candidat->name }}</td>
                        <td class='text-center'> {{ $candidat->email }}</td>
                        <td class='text-center'> {{ $candidat->telephone }}</td>
                        <td class='text-center'> {{ $candidat->offreemploi->titre }}</td>
                        <td class='text-center'> {{ $candidat->offreemploi->reference }}</td>
                        
                       <td class='text-center reds'><a href="{{ route('reponsesondageparcandidat',['id'=>$candidat->id]) }}"> Voir</a></td>
                       
                       
                       
                       
                        <td class='text-center'>
                            <div class="form-check">
                                <input class="form-check-input t" type="checkbox" value="{{ $candidat->id }}"
                                    id="flexCheckDefault{{ $candidat->id }}" name='checks[]' /><span><i
                                        class="fa-regular fa-trash-can delete-icon"></i></span>
                            </div>
                        </td>

                    </tr>

                    @elseif ($candidat->reponsesondage === 'non')
                    <tr >
                        <td class='text-center'></td>
                        <td class='text-center'> {{ $candidat->name }}</td>
                        <td class='text-center'> {{ $candidat->email }}</td>
                        <td class='text-center'> {{ $candidat->telephone }}</td>
                        <td class='text-center'> {{ $candidat->offreemploi->titre }}</td>
                        <td class='text-center'> {{ $candidat->offreemploi->reference }}</td>
                        
                      
                       
                        <td class='text-center green'><a href="{{ route('reponsesondageparcandidat',['id'=>$candidat->id]) }}"> Voir</a></td>
                       
                       
                        <td class='text-center'>
                            <div class="form-check">
                                <input class="form-check-input t" type="checkbox" value="{{ $candidat->id }}"
                                    id="flexCheckDefault{{ $candidat->id }}" name='checks[]' /><span><i
                                        class="fa-regular fa-trash-can delete-icon"></i></span>
                            </div>
                        </td>

                    </tr>
                    @endif
                @endforeach

            </tbody>
        </table>
    </div>
    </form>
    <div class='d-flex justify-content-center my-4 linkss'>
        {{ $candidats->links() }}
    </div>





    </div>
    <!-- Button trigger modal -->


    <!-- Modal -->



@endif
</x-app-layout>

<style>
    .bords{
        border: 1px solid red;
    }
    .reds{
        color:red;
    }
    .quest {
        color: red;
        font-size: 20px
    }

    .fa-check {
        color: green
    }

    .green {
        color: green;
        cursor: pointer;
    }

    .gray {
        color: gray
    }

    .recru {
        margin-top: 100px
    }

    .fa-thumbs-up {
        color: green;
        font-size: 25px
    }

    .sel {
        margin-top: 50px
    }

    #ims {
        width: 300px;
        height: 300px;
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
        top: -40px;
    }

    .upe {
        margin-top: 40px;


    }

    .progress {
        width: 30%;
    }

    .lore {
        opacity: 0;
    }
</style>
