

   

    <div class="shadow-sm flex justify-center lg:col-start-2 up">
        <div class=' cons'>
            <h2>Bonjour voici les informations relatives å l'offre d'emploi que vous devez publier :</h2>
           
            <p class='text-center'>Titre : {{ $data->titre }}</p></br>
            </br><hr/>
            <p>Description</p>
            <p class='text-center'> {{ $data->description }}</p><hr/>
            <p>Merci de postuler via ce <a href="{{ route('offresetformulaire', ['id' => $data->id]) }}">lien</a> </p>
           <p>Cordialement ...</p>
        </div>
        <div>
            <!--  <video id="localVideo"  ></video> -->
            <!-- <video id="remoteVideo" ></video>-->
            <!-- <button class='btn btn-dark' id="startCall">Démarrer l'appel</button>-->
        </div>

    </div>


    </div>







<style>
    .wid {
        margin-top: 100px
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
        top: 100px;

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
