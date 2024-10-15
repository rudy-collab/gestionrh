<x-app-layout>
    <x-slot name="header" >
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Gestion des performances') }}
            </h2>
            <div class="flex justify-end col-start-2 upe">
                <a href="{{ route('espaceemploye') }}"><button class='btn btn-dark' >Espace Employé</button></a>
            </div>
        </x-slot>
    
                         <div class="flex lg:justify-center lg:col-start-2">
                          
                        
    <h2 class="shadow p-3 mb-5 bg-body rounded animate__animated animate__headShake animate__infinite	infinite"> Soyez connecté avec vos collegues.</h2>
                      
                      </div>
    
                         <div class="flex lg:justify-center lg:col-start-2 up">
                          
                            <div>
                          <!--  <video id="localVideo"  ></video> -->
           <!-- <video id="remoteVideo" ></video>-->
           <!-- <button class='btn btn-dark' id="startCall">Démarrer l'appel</button>-->
                            </div>
                        
                        </div>
    
    
    </div>
    
    
    
    
       
        </x-app-layout>
    
        <style>

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