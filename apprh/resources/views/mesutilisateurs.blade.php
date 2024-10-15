<x-app-layout>
    <x-slot name="header" > 
    
    
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Mes Utilisateurs') }} 
            </h2>
    
            <span><button type='button' class="btn btn-danger btn-sm mx-4 mt-4" data-bs-toggle="modal" data-bs-target="#exampleModaldelete">Supprimer Utilisateurs</button></span>
        </x-slot>

    
        <div class="flex lg:justify-center lg:col-start-2 upe">
                          
                        
                          <span ><a href="{{route('dashboard')}}"><button class='btn btn-dark'><< Back</button></a></span> 
                                            
          </div>
          @if(!$firstEntry)
          <div class="flex lg:justify-center lg:col-start-2 upe">
            <p>Aucune donnees...</p>
          </div>
      @elseif($firstEntry)
    
          <!-- modal delete utilisateurs -->
          <form action="{{ route('deleteutilisateurs') }}" method='post'>
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
            <table class="shadow-lg table table-light table-striped cons">
        <thead>
          <tr>
          <th class='text-center'>Matricule</th>
            <th class='text-center'>Nom</th>
            <th class='text-center'>Permission</th>
            <th class='text-center'>Details</th>
            <th class='text-center'>Supprimer</th>
          </tr>
        </thead>
        <tbody>
           
        @foreach($utilisateur as $utilisateurs)
          <tr>
             <td class='text-center'><strong>{{$utilisateurs->matricule}}</strong></td>
             <td class='text-center'> {{$utilisateurs->name}}</td>
             <td class='text-center'> {{$utilisateurs->permission}}</td>
           
             @if (($utilisateurs->permission !== 'aucune') && ($utilisateurs->contratactive == 'oui') )
             <td class='text-center'><a href="{{ route('employepermissiondetails',['id'=>$utilisateurs->id]) }}"> Voir </a></td>
             @elseif (($utilisateurs->permission !== 'aucune') && ($utilisateurs->contratactive == 'non'))
             <td class='text-center comp '><a href="{{ route('modifierinfosnouvelemployepermission',['id'=>$utilisateurs->id]) }}">Completez votre profil</a></td>
       @endif
    
             <td class='text-center'> <div class="form-check">
                <input class="form-check-input" type="checkbox" value="{{ $utilisateurs->id }}" 
                    id="flexCheckDefault{{ $utilisateurs->id }}" name='check[]'/><span><i class="fa-regular fa-trash-can delete-icon"></i></span>
            </div></td>
        
          </tr>
        @endforeach
       
        </tbody>
      </table>
    </div>           
</form>
    
     @endif 
        </x-app-layout>
    
        <style>
            .coules{
                color:green !important;
            }
            .couless{
                color:red;
            }
              .enbas{
          width: 20px;
          height: 20px;
         }
            .cons{
                width: 70%;
                margin-top:50px;
            }
            .digit{
                font-weight: bold;
            }
            #imas{
                height: 300px;
                width: 300px;
            }
    
            .up{
                position: relative;
               top:100px;
             
            }
            .upp{
                position: relative;
               top:00px;
             
            }
            .upe{
                margin-top:40px
            }
            .progress{
                width: 30%;
            }
            .lore{
                opacity: 0;
            }
            .couls{
              color:gray;
            }
         </style>