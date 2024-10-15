<x-app-layout>
    <x-slot name="header" >
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('...') }}
            </h2>
            <a href="{{ route('chat') }}"><tbutton class='btn btn-dark'>
                << </button></a>
        </x-slot>
    
                         <div class="flex lg:justify-center lg:col-start-2 upe">
                          
                        
    <h2 class="shadow p-3 mb-5 bg-body rounded "> Soyez connecté avec vos collegues.</h2>
                      
                      </div>
    
                      <div class="flex justify-center lg:col-start-2 upe">
                        @if (count($getCountSmsRead) > 0)
                        <div class="flex justify-center lg:col-start-2 image">
            
                            <button type="button" id="#executeFonction2"
                                class="btn btn-dark position-relative animate__animated animate__headShake animate__infinite	infinite"
                                data-bs-toggle="modal" href="#exampleModalToggle8">
                                SMS !
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    +
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </button>
            
                        </div>
                    @elseif (count($getCountSmsRead) == 0)
                        <div class="flex justify-center lg:col-start-2 image">
                            <button type="button" class="btn btn-dark mx-2" data-bs-toggle="modal" href="#exampleModalToggle8">
                                SMS !
            
                            </button>
            
                        </div>
                    @endif
                        <!-- Modal -->
                       
            
            
            
            
                    </div>
    
                    <div class="modal fade" data-bs-backdrop="static" id="exampleModalToggle" aria-hidden="true"
                    aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalToggleLabel3">SMS Digitalisation</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
        
                                <form action="{{ route('envoimessageaAdmin') }}" method='post'>
        
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Titre</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Titre" name='titre'>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='message'></textarea>
                                    </div>
                                    <button type='submit' class='btn btn-dark'>Soumettre</button>
                                </form>
                            </div>
                            <div class="modal-footer flex lg:justify-between">
                                <button class="btn btn-outline-dark" data-bs-target="#exampleModalToggle8"
                                    data-bs-toggle="modal" data-bs-dismiss="modal">
                                    <<< /button>
                                        <button class="btn btn-dark" data-bs-target="#exampleModalToggle8"
                                            data-bs-toggle="modal" data-bs-dismiss="modal">Voir discussion !</button>
                            </div>
                        </div>
                    </div>
                </div>
        
                <!--sms envoye par admin å digitalisation -->
                <div class="modal fade" data-bs-backdrop="static" id="exampleModalToggle8" aria-hidden="true"
                    aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalToggleLabel8">Messages Recus... </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body tailles">
                                @foreach ($message as $messages)
                                    <div class=' mb-2'>
                                        <div class='{{ $messages->couleur }} taille rounded shadow-lg mb-2'>
                                            <p class='mess '><strong>Titre :</strong>{{ $messages->titre }}</p><br />
                                            <hr />
                                            <p><strong>Contenu :</strong></p>
                                            <p class='mess'>{{ $messages->message }}</p>
                                            <p class='petit'>{{ $messages->created_at }} <span class='petit'>Envoyé par
                                                    Admin.</span></p>
                                        </div><br />
        
                                    </div>
                                @endforeach
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-outline-dark" data-bs-target="#exampleModalToggle"
                                    data-bs-toggle="modal" data-bs-dismiss="modal">
                                    <<< /button>
                                        <button class="btn btn-outline-dark" data-bs-target="#exampleModalToggle9"
                                            data-bs-toggle="modal" data-bs-dismiss="modal">Messages Envoyes</button>
                                        <button class="btn btn-dark" data-bs-target="#exampleModalToggle"
                                            data-bs-toggle="modal" data-bs-dismiss="modal">Ecrire</button>
                            </div>
                        </div>
                    </div>
                </div>
        
                <!--sms recus par digitalisation de la part de admin-->
                <div class="modal fade" data-bs-backdrop="static" id="exampleModalToggle9" aria-hidden="true"
                    aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalToggleLabel8">Messages envoyés... </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body tailles">
                                @foreach ($messageUtilisateur as $messageUtilisateurs)
                                    <div class=' mb-2'>
                                        <div class='{{ $messageUtilisateurs->couleur }} taille rounded shadow-lg mb-2'>
                                            <p class='mess '><strong>Titre :</strong>{{ $messageUtilisateurs->titre }}</p>
                                            <br />
                                            <hr />
                                            <p><strong>Contenu :</strong></p>
                                            <p class='mess'>{{ $messageUtilisateurs->message }}</p>
                                            <p class='petit'>{{ $messageUtilisateurs->created_at }} <span
                                                    class='petit'></span></p>
                                        </div><br />
        
                                    </div>
                                @endforeach
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-outline-dark" data-bs-target="#exampleModalToggle8"
                                    data-bs-toggle="modal" data-bs-dismiss="modal">
                                    <<< /button>
                                        <button class="btn btn-dark" data-bs-target="#exampleModalToggle"
                                            data-bs-toggle="modal" data-bs-dismiss="modal">Ecrire</button>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    
    
    
    
       
        </x-app-layout>
    
        <style>
             .reds {
        color: red;
        font-size: 13px;
        text-align: center !important
    }

    .bord {
        border: solid red 0.5px;
    }

    .tailles {
        height: 400px;
    }

    .mb {
        margin-top: 40px !important;
    }

    .petit {
        font-size: 12px
    }

    .taille {
        width: 70%;
        padding: 10px;
    }

    .mess {
        color: white;
    }

    .colo {
        color: teal;
    }

    .cons {
        width: 70%;
    }

    .digit {
        font-weight: bold;
    }
            .cons{
                width: 70%;
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
               top:-40px;
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
         </style>