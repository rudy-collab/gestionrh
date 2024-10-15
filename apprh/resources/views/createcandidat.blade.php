<x-app-layout>
    <x-slot name="header" >
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Les Candidats') }}
            </h2>
        </x-slot>
    
                         <div class="flex justify-center lg:col-start-2 upe">
                          
                        
    <h2 class="shadow p-3 mb-5 bg-body rounded animate__animated animate__headShake animate__infinite	infinite"> Soyez connecté avec vos collegues.</h2>
                      
                      </div>
    
                         <div class="flex justify-center lg:col-start-2 up">
                          
                            <div>
         @foreach ($affichecandidat as $affichecandidats)

         <p>{{ $affichecandidats->name }}</p>
             
         @endforeach
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