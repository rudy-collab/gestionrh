<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.12/vue.min.js"></script>
<script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
<script src="https://unpkg.com/alpinejs" defer></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('SMS / Admin & Responsable Recrutement.') }} {{ $utilisateurun->name }}
        </h2>
        <a href="{{ route('chat') }}"><tbutton class='btn btn-dark'>
            << </button></a>
    </x-slot>

    <div class="flex justify-center lg:col-start-2 upe">


        <h2 class="shadow p-3 mb-5 bg-body rounded ">
        <strong>Admin - {{ $utilisateurun->name  }}</strong> (Responsable Recrutement)</h2>

    </div>
    <!-- component -->
    <!-- This is an example component -->
  

    @if (Auth::user()->admin == 'Admin')
        <div class="flex justify-center lg:col-start-2 upe">
            @if (count($getCountSmsRead) > 0)
                <div class="flex justify-center lg:col-start-2 image">

                    <button type="button"
                        class="btn btn-dark position-relative animate__animated animate__headShake animate__infinite	infinite"
                        data-bs-toggle="modal" href="#exampleModalToggle10">
                        SMS 
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            +
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </button>

                </div>
            @elseif (count($getCountSmsRead) === 0)
                <div class="flex justify-center lg:col-start-2 image">
                    <button type="button" class="btn btn-dark mx-2" data-bs-toggle="modal" href="#exampleModalToggle10">
                        SMS 

                    </button>

                </div>
            @endif
            <!-- Modal -->
           




        </div>


        <!-- fin sms audit -->

        <!-- sms digitalisation -->
 

        <!-- fin sms digitalisation -->

        <!-- sms gestion projet -->
   

        <!-- fin sms gestion projet -->

        <!-- sms gestion rh -->
        <div class="modal fade" data-bs-backdrop="static" id="exampleModalToggle5" aria-hidden="true"
            aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel5">SMS Gestion RH</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Hide this modal and show the first with the button below.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-dark" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"
                            data-bs-dismiss="modal">Retour Accueil</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- fin sms gestion rh -->

        <!-- sms gestion crm -->
        <div class="modal fade" data-bs-backdrop="static" id="exampleModalToggle6" aria-hidden="true"
            aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel6">SMS Gestion CRM</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Hide this modal and show the first with the button below.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-dark" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"
                            data-bs-dismiss="modal">Retour Accueil</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- fin sms gestion crm -->


        <!-- sms gestion document -->
        <div class="modal fade" data-bs-backdrop="static" id="exampleModalToggle7" aria-hidden="true"
            aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel7">SMS Gestion Documents</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Hide this modal and show the first with the button below.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-dark" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"
                            data-bs-dismiss="modal">Retour Accueil</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- fin sms gestion document -->





        <!-- section voir les discussions -->

        <!-- debut discussion avec digitalisation et admin -->
        <div class="modal fade" data-bs-backdrop="static" id="exampleModalToggle8" aria-hidden="true"
            aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel8">Message envoyé par
                            <strong>{{ $cherche->name }}</strong>
                            <em>Administrateur</em>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <form action="{{ route('deletesmsbyadmin') }}" method='post'>
                        @csrf
                        <div class="modal-body tailles">
                            @if (count($message) === 0)
                                <p class="text-center">Aucun(s) message(s)...</p>
                            @elseif (count($message) > 0)
                                @foreach ($message as $messages)
                                    <div class=' mb-2'>
                                        <div class='{{ $messages->couleur }} taille rounded shadow-lg mb-2'>
                                            <p class='mess '><strong>Titre :</strong>{{ $messages->titre }}</p><br />
                                            <hr />
                                            <p><strong>Contenu :</strong></p>
                                            <p class='mess'>{{ $messages->message }}</p>
                                            <p class='petit'>{{ $messages->created_at }} <span class='petit'>Envoyé
                                                    par
                                                    <strong> {{ $cherche->name }}</strong> <em>Administrateur.</em></p>
                                            <input type='checkbox' class='mx-4 mb-16 float-end'
                                                value='{{ $messages->id }}' name='check[]' />
                                        </div>

                                    </div>
                                @endforeach
                            @endif
                        </div>


                        <div class="modal-footer ">
                            <button type='submit' class='btn btn-danger float-start'>Supprimer</button>
                        </div>

                    </form>
                    <div class="modal-footer ">

                        <button class="btn btn-outline-dark" data-bs-target="#exampleModalToggle"
                            data-bs-toggle="modal" data-bs-dismiss="modal">
                            <<< /button>
                                <button class="btn btn-dark" data-bs-target="#exampleModalToggle10"
                                    data-bs-toggle="modal" data-bs-dismiss="modal">SMS recus</button>
                                <button class="btn btn-dark" data-bs-target="#exampleModalToggle3"
                                    data-bs-toggle="modal" data-bs-dismiss="modal">Ecrire</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal fade" data-bs-backdrop="static" id="exampleModalToggle10" aria-hidden="true"
            aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel8">Messages envoyé par <em>Responsable
                                Recrutement</em>
                            <strong> {{ $utilisateurun->name }}</strong>
                        </h5>
                        <button id="#closeModalButton" type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <form action="{{ route('deletesmsbyadmindeux') }}" method='post'>
                        @csrf
                        <div class="modal-body tailles">
                            @if (count($messageUtilisateur) === 0)
                                <p class='text-center'>Auncun(s) Message(s)...</p>
                            @elseif (count($messageUtilisateur) > 0)
                                @foreach ($messageUtilisateur as $messages)
                                    <div class=' mb-2'>
                                        <div class='{{ $messages->couleur }} taille rounded shadow-lg mb-2'>
                                            <p class='mess '><strong>Titre :</strong>{{ $messages->titre }}</p>
                                            <span><br />
                                                <hr />
                                                <p><strong>Contenu :</strong></p>
                                                <p class='mess'>{{ $messages->message }}</p>
                                                <p class='petit'>{{ $messages->created_at }} <span
                                                        class='petit'>Envoyé par
                                                        {{ $utilisateurun->name }} .</p>
                                                <input type='checkbox' class='mx-4 mb-16 float-end'
                                                    value='{{ $messages->id }}' name='check[]' />
                                        </div><span></span><br />

                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="modal-footer">
                            <button type='submit' class='btn btn-danger float-start'>Supprimer</button>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button class="btn btn-outline-dark" data-bs-target="#exampleModalToggle"
                            data-bs-toggle="modal" data-bs-dismiss="modal">
                            <<< /button>
                                <button class="btn btn-dark" data-bs-target="#exampleModalToggle8"
                                    data-bs-toggle="modal" data-bs-dismiss="modal">SMS Envoyé(s)</button>
                                <button class="btn btn-dark" data-bs-target="#exampleModalToggle3"
                                    data-bs-toggle="modal" data-bs-dismiss="modal">Ecrire</button>
                    </div>
                </div>
            </div>
        </div>
        <!--fin discussion admin et digit --->
        <div class="modal fade" data-bs-backdrop="static" id="exampleModalToggle3" aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel3">SMS å Digitalisation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('envoimessagesauxutilisateurs') }}" method='post'>

                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Titre</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Titre" name='titre' required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='message' required></textarea>
                        </div>
                        <button type='submit' class='btn btn-dark'>Soumettre</button>
                    </form>
                </div>
                <div class="modal-footer flex lg:justify-between">
                    <button class="btn btn-outline-dark" data-bs-target="#exampleModalToggle"
                        data-bs-toggle="modal" data-bs-dismiss="modal">
                        <<< /button>
                            <button class="btn btn-dark" data-bs-target="#exampleModalToggle10"
                                data-bs-toggle="modal" data-bs-dismiss="modal">Voir discussion !</button>
                </div>
            </div>
        </div>
    </div>






        <!--------- Utilisateur et permissions ------->



        <!--utilsateurs avec permission-->
    @elseif(Auth::user()->admin == 'Pas Admin' && Auth::user()->permission == 'Responsable Recrutement')
    @if (count($getCountSmsRead) > 0)
    <div class="flex justify-center lg:col-start-2 image">

        <button type="button"
            class="btn btn-dark position-relative animate__animated animate__headShake animate__infinite	infinite"
            data-bs-toggle="modal" href="#exampleModalToggle">
            SMS - Notifications !
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                +
                <span class="visually-hidden">unread messages</span>
            </span>
        </button>

    </div>
@elseif (count($getCountSmsRead) === 0)
    <div class="flex justify-center lg:col-start-2 image">
        <button type="button" class="btn btn-dark mx-2" data-bs-toggle="modal" href="#exampleModalToggle">
            SMS - Notifications !

        </button>

    </div>
@endif





        <!-- sms  digitalisation -->
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


        <!-- fin discussion entre admin et sms digitalisation -->

       





        <!-- debut user n'est ni admin ni affecté å une tache -->
    @elseif(Auth::user()->admin == 'Pas Admin' && Auth::user()->permission == 'nothing')
        <div class="flex lg:justify-center lg:col-start-2 image">

            <button type="button" class="btn btn-outline-dark mx-2">
                Mail !
            </button>

        </div>


    @endif

    <!--fin user n'est ni admin ni affecté å une tache -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#executeFonction').click(function() {
                $.ajax({
                    url: '{{ route('updatesmsreceivebyadmin') }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}' // Laravel CSRF token
                    },

                    error: function(xhr, status, error) {
                        console.log(xhr.responseText); // Gérer les erreurs ici
                    }
                });
            });
        });


        $(document).ready(function() {
            // Lorsque le bouton "Close" est cliqué
            $('#closeModalButton').click(function() {
                // Fermer le modal
                $('#exampleModalToggle10').modal('hide');

                // Rafraîchir la page
                location.reload();
            });
        });
    </script>

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

    #imas {
        height: 300px;
        width: 300px;
    }

    .up {
        position: relative;
        top: -40px;
    }

    .upe {
        margin-top: 100px
    }

    .progress {
        width: 30%;
    }

    .lore {
        opacity: 0;
    }
</style>
