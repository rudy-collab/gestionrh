<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contrat') }} {{ $cand->name }}
        </h2>
    </x-slot>
    <div class="flex lg:justify-center lg:col-start-2 upe">
        @if ($precedUrl == 'employedetailscandidat'.$cand->id)

        <span><a href="{{ route('employedetailscandidat', ['id' => $cand->id]) }}"><button class='btn btn-dark'>
                    <<<Back</button></a></span>
                  
@endif
    </div>




    <div class="flex justify-center lg:col-start-2 ">
        <div class='shadow-lg rounded  cons px-4 py-4 haut' id='apdf'>

            <h2 > <strong>CONTRAT DE TRAVAIL</strong> </h2><hr><br>
            <h4 ><em>Entre les soussignés:,</em></h4><br>
            <p> <strong>* L'employeur</strong>: </p>

            <ul>
                <li><strong>Nom de la societe :</strong> {{ $cand->societe }}</li>
                <li><strong>Adresse :</strong>{{ $employeurs->adresse }}</li>
                <li><strong>Representé par : </strong> {{ $employeurs->name }}</li>
                <li><strong>Telephone : </strong></strong> {{ $employeurs->telephone }}</li>
                <li><strong>Fonction : {{ $employeurs->role}}</strong></li>
            </ul>
            <br>
            <p><strong>* L'employé :</strong></p>
            <ul>
                <li><strong>Nom : </strong> {{ $cand->name }}</li>
                <li><strong>Adresse :</strong>{{ $cand->adresse }}</li>
                <li><strong>Date de naissance : </strong></li>
                <li><strong>Telephone : </strong></strong> {{ $cand->telephone }}</li>
            </ul><br>

            <h3><strong>Objet du contrat :</strong></h3>
            <p>Le présent contrat a pour objet de fixer les conditions d'emploi de M/Mme
                <strong>{{ $cand->name }}</strong> en qualité de
              
               
                <strong>{{ $cand->role }}</strong> au sein de
               
                <strong>{{ $cand->societe }}</strong>
            </p><br>
            <h3><strong>Type de Contrat : </strong></h3>
            <ul>
                <li>Nature du contrat : <strong>{{ $cand->voiremploye->infoscontratcandidat->typecontrat }}</strong></li>
                <li>Date d'entrée en fonction :<strong>{{ $cand->voiremploye->infoscontratcandidat->datedebutcontrat }}</strong></li>
            </ul><br>

            <h3><strong>Lieu de travail :</strong></h3>
            <p>Le lieu de travail principal est situé å <strong>{{ $cand->voiremploye->infoscontratcandidat->lieutravail }}.</strong>.</p><br>
            <h3><strong>Durée du travail :</strong></h3>
            <p>La durée hebdomadaire de travail est fixée à <strong>{{ $cand->voiremploye->infoscontratcandidat->horairetravail }} heures</strong>, réparties selon les horaires suivants :</p>
            <ul>
                <li>Du <strong>{{ $cand->voiremploye->infoscontratcandidat->jourdebut }}</strong> au <strong>{{ $cand->voiremploye->infoscontratcandidat->jourfin }}</strong> de <strong>{{ $cand->voiremploye->infoscontratcandidat->heuredebut }}</strong> å <strong>{{ $cand->voiremploye->infoscontratcandidat->heurefin }}</strong></li>
            </ul>
            <br>
            <h3><strong>Remuneration : </strong></h3>
            <p>L'employée percevra une rémunération brute de  <strong>{{ round($cand->voiremploye->infoscontratcandidat->remunerationbrute / 12) }} Fcfa</strong> par mois.</p>
           
            </ul><br>
            <h3><strong>Congés : </strong></h3>
            <p>L'employée a droit à <strong>{{ $cand->voiremploye->infoscontratcandidat->nbrejoursconge }} </strong> jours de congés payés par an, en plus des jours fériés légaux.</p><br>
            <h3><strong>Période d'essai :</strong></h3>
            <p>Une période d'essai de <strong>{{ $cand->voiremploye->infoscontratcandidat->nbremoisperiodeessai }} mois</strong>  est prévue, renouvelable une fois pour la même durée.</p><br>
            <h3><strong>Confidentialité :</strong></h3>
            <p>L'employée s'engage à ne pas divulguer les informations confidentielles de l'entreprise, pendant et après la durée du contrat.</p><br>
            <h3><strong>Rupture du Contrat : </strong></h3>
            <p>Le présent contrat peut être résilié par l'une des parties avec un préavis de 2 mois, conformément aux dispositions légales en vigueur.</p><br>
            <p>Fait å ... le ...</p>



                </div>

            </div>
            <div  class="">
               
                    
            </div>
      
              <div class="flex justify-center lg:col-start-2 upe">

                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button type='button' class='btn btn-dark mt-3'><a
                        href="{{ route('telechargercontratemployespermission', ['id' => $cand->id, 'download' => true]) }}">Telecharger</a></button>
        
                       <button type="button" class="btn btn-outline-dark  mx-3" ><a href ="{{ route('modifpermissionemploye',['id' => $cand->id]) }}">Modifier Contrat</a></button>
                </div>
            </div>
          
          



        </div>


    </div>




    </div>





</x-app-layout>

<style>
    .haut {
        height: 600px;
        margin-top: 50px;
        overflow: hidden scroll;
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
        margin-top: 20px
    }

    .progress {
        width: 30%;
    }

    .lore {
        opacity: 0;
    }
</style>
