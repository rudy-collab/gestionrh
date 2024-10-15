<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('...') }}
        </h2>
    </x-slot>

   

    <div class=" flex justify-center lg:col-start-2 up">
        <div class=' cons'>
            <p class='text-center'>{{ $data->titre }}</p></br>
            </br>
            <p class='text-center'>{{ $data->description }}</p>
            <div class="btn-group flex justify-center mt-4 p-4 mx-4 wid" role="group" aria-label="Basic mixed styles example">
                <a href="{{ route('generatepdftrue',['id'=>$data->id])}}}}"><button type="button" class="btn btn-danger mx-4 px-4">Convertir en Pdf</button></a>
                
                <button type="button" class="btn btn-success mx-4 px-4">Envoyer-></button>
              </div>
        </div>
        <div>
            <!--  <video id="localVideo"  ></video> -->
            <!-- <video id="remoteVideo" ></video>-->
            <!-- <button class='btn btn-dark' id="startCall">Démarrer l'appel</button>-->
        </div>

    </div>


    </div>





</x-app-layout>

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
