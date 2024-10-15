<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mission">
            {{ __('Proposition Contrat candidat : ') }} {{ $cand->name }}
        </h2>
        <a href="{{ route('reponsesondageparcandidat', ['id' => $cand->id]) }}"><button class='btn btn-dark'>
                <<</button></a>
    </x-slot>


    <div class="flex justify-center lg:col-start-2 up">
        <div class='shadow-lg rounded  cons px-4 py-4 haut'>

            <form  action="{{ route('sendcontratcandidat',['id'=>$cand->id]) }}" method="post">
                @csrf
                <label> <strong>Nom de la societe :</strong>
                    {{ $cand->offreemploi->user->societe }}</label><br>
                <label> <strong>Telephone :</strong> {{ $cand->offreemploi->user->telephone }}</label><br />
                <br>
                <hr>
                <br>
                <p><strong class='under'>Objet :</strong> Proposition de contrat de travail</p><br>
                <div class="flex justify-center lg:col-start-2 ">
                    <div>

                        <p>Monsieur/Madame {{ $cand->name }} ,</p>
                        <p>Suite à nos échanges et entretiens, nous avons le plaisir de vous proposer un contrat
                            de travail en qualité de <strong>{{ $cand->offreemploi->titre }}</strong> au sein
                            de notre société <strong>{{ $cand->offreemploi->user->societe }}</strong> .</p><br>
                            <p><em>Vos missions principales seront :</em></p>
                            @if ($mission1 == '')
                                <p></p>
                            @elseif ($mission1 !== 'non')
                                <li>{{ $mission1 }}</li>
                            @endif
                            @if ($mission2 == '')
                                <p></p>
                            @elseif ($mission2 !== 'non')
                                <li>{{ $mission2 }}</li>
                            @endif
                            @if ($mission3 == '')
                                <p></p>
                            @elseif ($mission3 !== 'non')
                                <li>{{ $mission3 }}</li>
                            @endif
                            @if ($mission4 == '')
                                <p></p>
                            @elseif ($mission4 !== 'non')
                                <li>{{ $mission4 }}</li>
                            @endif
                            @if ($mission5 == '')
                                <p></p>
                            @elseif ($mission5 !== 'non')
                                <li>{{ $mission5 }}</li>
                            @endif
                            @if ($mission6 == '')
                                <p></p>
                            @elseif ($mission6 !== 'non')
                                <li>{{ $mission6 }}</li>
                            @endif
                            @if ($mission7 == '')
                                <p></p>
                            @elseif ($mission7 !== 'non')
                                <li>{{ $mission7 }}</li>
                            @endif
                            @if ($mission8 == '')
                                <p></p>
                            @elseif ($mission8 !== 'non')
                                <li>{{ $mission8 }}</li>
                            @endif
                            @if ($mission9 == '')
                                <p></p>
                            @elseif ($mission9 !== 'non')
                                <li>{{ $mission9 }}</li>
                            @endif
                            @if ($mission10 == '')
                                <p></p>
                            @elseif ($mission10 !== 'non')
                                <li>{{ $mission10 }}</li>
                            @endif
    
                            @if ($montant == 0)
                                <p></p>
                            @elseif ($montant > 0)
                                <p data-bs-toggle="modal" href="#exampleModalToggle1" class='mission'> {{ $montant }}
                                    .</p>
                                    @endif
                           <br>

                           <p><strong>- Avantages :</strong></p>
                           <p><em> Vous bénéficierez également des avantages suivants :</em></p>
                           @if ($avantage1 == '')
                               <p></p>
                           @elseif ($avantage1 !== 'non')
                               <li>{{ $avantage1 }}</li>
                           @endif
                           @if ($avantage2 == '')
                               <p></p>
                           @elseif ($avantage2 !== 'non')
                               <li>{{ $avantage2 }}</li>
                           @endif
                           @if ($avantage3 == '')
                               <p></p>
                           @elseif ($avantage3 !== 'non')
                               <li>{{ $avantage3 }}</li>
                           @endif
                           @if ($avantage4 == '')
                               <p></p>
                           @elseif ($avantage4 !== 'non')
                               <li>{{ $avantage4 }}</li>
                           @endif
                           @if ($avantage5 == '')
                               <p></p>
                           @elseif ($avantage5 !== 'non')
                               <li>{{ $avantage5 }}</li>
                           @endif
                           @if ($avantage6 == '')
                               <p></p>
                           @elseif ($avantage6 !== 'non')
                               <li>{{ $avantage6 }}</li>
                           @endif
                           @if ($avantage7 == '')
                               <p></p>
                           @elseif ($avantage7 !== 'non')
                               <li>{{ $avantage7 }}</li>
                           @endif
                           @if ($avantage8 == '')
                               <p></p>
                           @elseif ($avantage8 !== 'non')
                               <li>{{ $avantage8 }}</li>
                           @endif
                           @if ($avantage9 == '')
                               <p></p>
                           @elseif ($avantage9 !== 'non')
                               <li>{{ $avantage9 }}</li>
                           @endif
                           @if ($avantage10 == '')
                               <p></p>
                           @elseif ($avantage10 !== 'non')
                               <li>{{ $avantage10 }}</li>
                           @endif
                           @if ($lavantage == 0)
                               <p></p>
                           @elseif ($lavantage > 0)
                               <p data-bs-toggle="modal" href="#exampleModalToggle2" class='mission'> {{ $lavantage }}
                                   .</p>
                           @endif
   
                           <br>

                        <p> <strong>- Postes et Missions :</strong></p>
                        <p>Vous serez rattaché(e) au service <input type='text' class='bord long'
                                placeholder="Nom service de rattachement" name='nomservice' required> sous la
                            responsabilité de <input type='text' class='bord long1'
                                placeholder="Nom du responsable de ce service" name='nomresponsable' required>.</p>
                       
                        <br>
                        <p><strong>- Lieu de travail :</strong></p>
                        <p>Votre lieu de travail sera situé au <input type='text' class='bord long1'
                                placeholder="Lieu de travail" name='lieutravail' required>.
                        </p>
                        <br>
                        <p><strong>Date de début :</strong>
                        <p> Votre contrat débutera le <input type="date" name='datedebut' class='bord' required>,
                            avec une période d'essai de <input type="number" name='nbrejours' class='bord' required>
                            mois.
                        </p>
                        <br>
                        <p><strong>- Rémunération :</strong></p>
                        <p> Votre rémunération annuelle brute sera de <input type="text" name='remuneration'
                                class='bord' required> FCFA, versée en <input type="number" name='nbremensualites'
                                class='bord ' required> mensualités.</p>
                        <br>
                       
                        <p><strong>- Durée du contrat : </strong></p>
                        <p> Il s'agit d'un contrat
                            <select id='mySelect' class="form-select" aria-label="Default select example" name='typescontrat'
                                required>

                                <option value="à Durée Indéterminée (CDI)" selected>à Durée Indéterminée (CDI) </option>
                                <option value="à Durée Déterminée (CDD)">à Durée Déterminée (CDD) </option>
                                <option value="de Travail Temporaire (CTT)">de Travail Temporaire (CTT) </option>
                                <option value="d'Apprentissage">d'Apprentissage </option>
                                <option value="de Professionnalisation">de Professionnalisation </option>
                                <option value="à Temps Partiel">à Temps Partiel </option>
                                <option value="à Durée Déterminée d'Usage (CDDU)">à Durée Déterminée d'Usage (CDDU)
                                </option>
                                <option value="à Objet Défini (CDOD)">à Objet Défini (CDOD) </option>
                                <option value="de Travail à Domicile">de Travail à Domicile </option>
                                <option value="de Travail en Portage Salarial">de Travail en Portage Salarial </option>
                            </select><br>
                            <div id='oui' style="display:none;">de <input type="number" name='dureescontrat' class='bord'> mois.</div>
                            <div id='non' style="display:none;"><p></p></div>
                        </p>
                        <br>
                        <p><strong>- Horaires de travail :</strong></p>
                        <p> Vos horaires de travail seront de <input type="number" name='nbreheuretravail'
                                class='bord' required> heures par semaine,
                        <p>du</p>
                        <select class="form-select" aria-label="Default select example" name='firstjoursemaine'
                            required>

                            <option value="Lundi" selected>Lundi</option>
                            <option value="Mardi">Mardi </option>
                            <option value="Mercredi">Mercredi </option>
                            <option value="Jeudi">Jeudi</option>
                            <option value="Vendredi">Vendredi </option>
                            <option value="Samedi">Samedi </option>
                            <option value="Dimanche">Dimanche </option>

                        </select>
                        <p>au</p>
                        <select class="form-select" aria-label="Default select example" name='laststjoursemaine'
                            required>

                            <option value="Lundi" selected>Lundi</option>
                            <option value="Mardi">Mardi </option>
                            <option value="Mercredi">Mercredi </option>
                            <option value="Jeudi">Jeudi</option>
                            <option value="Vendredi">Vendredi </option>
                            <option value="Samedi">Samedi </option>
                            <option value="Dimanche">Dimanche </option>

                        </select><br>
                        de <input type="time" name='debutheuretravail' required class='bord'>  à <input
                        type="time" name='finheuretravail' required class='bord'>.</p><br>
                        <p><strong>- Congés </strong></p>
                        <p> Vous bénéficierez de <input type="number" name='nbrejoursconges' required class='bord'>
                            jours de congés
                            payés par an.</p>
                      
                        <br><p><strong>- Obligations et engagements</strong></p>
                        <p> Vous vous engagez à respecter les règles et procédures de l'entreprise, ainsi qu'à accomplir
                            vos missions avec diligence et loyauté.</p><br>
                        <p><strong>- Résiliation du contrat</strong></p>
                        <p> Les modalités de résiliation du contrat sont celles prévues par la législation en vigueur.
                        </p><br>
                        <p>Nous vous prions de bien vouloir nous faire parvenir votre accord par retour de courrier
                            avant le <input type="date" name='datelimite' required class='bord'>, afin de finaliser
                            cette proposition. Nous restons à votre disposition pour toute information complémentaire.
                        </p>
                        <p>Dans l'attente de votre retour, nous vous prions d'agréer, Monsieur/Madame
                            {{ $cand->name }} , l'expression de nos salutations distinguées.</p>
                        <br><p> Cordialement <strong>{{ $cand->offreemploi->user->name }},</strong></p>
                        <p> <strong>{{ $cand->offreemploi->user->societe }}.</strong> </p>
                        <p><input type="hidden" value={{ $cand->email }} name='emailcandidat'></p>
                        <p><input type="hidden" value={{ $cand->name }} name='name'></p>
                        <p><input type="hidden" value={{ $cand->id }} name='ids'></p>
                        <p><input type="hidden"  value={{ $cand->offreemploi->titre }} name='offre'> </p>
                       

                       
                        <hr>
                        <br> <button class='btn btn-dark mt-2' type='submit'>Envoyer å {{ $cand->name }}</button>

                    </div>

                </div>

            </form>


        </div>


    </div>


    <!-- debut modal mission -->
    <form action="{{ route('countmissioncandidat', ['id' => $cand->id]) }}" method="post">
        @csrf
        <div class="modal fade" id="exampleModalToggle1" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel">Entrez une mission...</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" class='mission' name='mission' active required>
                    </div>
                    <div class="modal-footer">
                        <button type='submit' class="btn btn-dark">Soumettre</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- fin modal mission-->


    <form action="{{ route('countavantagescandidat', ['id' => $cand->id]) }}" method="post">
        @csrf
        <div class="modal fade" id="exampleModalToggle2" data-bs-backdrop="static" aria-hidden="true"
            aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel">Entrez un avantage...</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" class='mission' name='avantages' active required>
                    </div>
                    <div class="modal-footer">
                        <button type='submit' class="btn btn-dark">Soumettre</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

<script>
    document.getElementById('mySelect').addEventListener('change', function() {
        var value = this.value;
        document.getElementById('oui').style.display = 'none';
        document.getElementById('non').style.display = 'none';
    
        if (value !== 'à Durée Indéterminée (CDI)') {
            document.getElementById('oui').style.display = 'block';
        } else if (value === 'à Durée Indéterminée (CDI)') {
            document.getElementById('non').style.display = 'block';
        }
    });
</script>
</x-app-layout>

<style>
    .ov {
        height: 700px;
        overflow: hidden;
    }

    .mission {
        width: 100%;
    }

    .wid {
        width: 70%;

    }

    .mission {
        color: green;
        cursor: pointer;
    }

    .under {
        text-decoration: underline
    }

    .long {
        width: 240px;
    }

    .long1 {
        width: 275px;
    }

    .bord {
        border: 0.25px solid gray;
    }

    .haut {
        height: 700px;
        margin-top: 50px;
        overflow: hidden;
    }

    .sel {
        margin-top: 50px
    }

    #ims {
        width: 450px;
        height: 450px;
    }

    .cons {
        width: 70%;
        height: 750px;
        overflow: hidden scroll;

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
        margin-top: 10px;


    }

    .progress {
        width: 30%;
    }

    .lore {
        opacity: 0;
    }
</style>
