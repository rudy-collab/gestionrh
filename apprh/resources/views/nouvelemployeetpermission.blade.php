<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Creer un nouvel employe et lui assigner une permission rh.') }}
        </h2>
        <div class='flex justify-between lg:col-start-2'>
            <a href="{{ route('dashboard') }}"> <button  class='btn btn-dark'>
                     << </button></a>
         </div>
    </x-slot>
   
           <!--debut modal cree admin -->
           <div class="flex justify-center lg:col-start-2 up ">
            <form  class='forms 'action="{{route('createpermissionsutilisateur')}}" method='post'>
                @csrf
                       <div class="mb-3 shadow-lg cons px-4 py-4">
                          
                               <label for="exampleFormControlInput1" class="form-label">Nom</label>
                               <input type="text" class="form-control" id="exampleFormControlInput1"
                                   placeholder="nom" name='name' required>
                                   <label for="exampleFormControlInput4" class="form-label">Prenom</label>
                                   <input type="text" class="form-control" id="exampleFormControlInput4"
                                       placeholder="prenom" name='prenom' required>

                                       <label for="exampleFormControlInput4" class="form-label">Sexe</label>
                                       <select class="form-select" aria-label="Default select example" name='sexe' required>
                                        <option selected></option>
                                        <option value="Masculin">Masculin</option>
                                        <option value="Feminin">Feminin</option>
                                      </select>


                               <label for="exampleFormControlInput2" class="form-label">Adresse Email
                                  </label>
                               <input type="email" class="form-control" id="exampleFormControlInput2"
                                   placeholder="name@gmail.com" name='email' required>


                                       <label for="exampleFormControlInput2" class="form-label">Adresse</label>
                                       <input type="text" class="form-control" id="exampleFormControlInput2"
                                           placeholder="Adresse" name='adress' required>

                               <label for="exampleFormControlInput4" class="form-label">Telephone</label>
                               <input type="text" class="form-control" id="exampleFormControlInput4"
                                   placeholder="+237......" name='telephone' required>

                            
                                   <input type="hidden" class="form-control" id="exampleFormControlInput4"
                                       placeholder="..." name='societe' value="{{ Auth::user()->societe }}" required>

                              <br />
                               <hr />
                               
                               <input type="hidden" class="form-control cols" id="exampleFormControlInput"
                                   placeholder="admin@gmail.com" name='emailadmin' value={{ Auth::user()->email }} required><br />
                             
                               <label>Assigner un role : </label><br />
                               <br />
                               <div class="form-check">
                                   <input class="form-check-input" type="radio" value="Responsable Recrutement" id="flexun"
                                       name="choice">
                                   <label class="form-check-label" for="flexun">
                                       Responsable Recrutement
                                   </label>
                               </div>
                               <div class="form-check">
                                   <input class="form-check-input" type="radio" value="Responsable Gestion des Performances" id="flexdeux"
                                       name="choice">
                                   <label class="form-check-label" for="flexdeux">
                                       Responsable Gestion des Performances
                                   </label>
                               </div>


                               <div class="form-check">
                                   <input class="form-check-input" type="radio" value="Responsable Gestion de la Paie" id="flexcinq"
                                       name="choice">
                                   <label class="form-check-label" for="flexcinq">
                                       Responsable Gestion de la Paie
                                   </label>
                               </div>
                               <div class="form-check">
                                   <input class="form-check-input" type="radio" value="Responsable Gestion des Conges et des Absences" id="flexsix"
                                       name="choice">
                                   <label class="form-check-label" for="flexsix">
                                       Responsable Gestion des Conges et des Absences
                                   </label>
                               </div>



                        
                       </div>
                       <button type="submit" class="btn btn-dark btn-sm mt-3">Soumettre</button>
                    </form>
                    </div>

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
      .mission {
        width: 100%;
        color: lightslategray;
        cursor: pointer;
    }
    .gris{
        color: gray;
       
    }
    label {
        color: gray
    }

  .forms{
    width: 70%;
  }

    .cons {
       
        height: 700px;
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
        margin-top: 30px
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
