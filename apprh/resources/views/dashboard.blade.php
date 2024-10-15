<x-app-layout>
    <x-slot name="header">


        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Managez les roles et permissions utilisateurs ici') }}
        </h2>
        <div class="btn-group mt-3" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-dark mx-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Creer Employe</button>
           
            <a href="{{ route('voirmesemployes') }}"><button type="button" class="btn btn-outline-dark mx-1">Voir mes Employés</button></a>
          </div>
         

          <!-- creer employe -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Creer employé</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <form  class='forms 'action="{{ route('creationemploye') }}" method='post'>
          @csrf
                
                    
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

                             <label for="exampleFormControlInput4" class="form-label">Fonction</label>
                             <input type="text" class="form-control" id="exampleFormControlInput4"
                                 placeholder="......" name='role' required>

                             <input type="hidden" class="form-control" id="exampleFormControlInput4"
                                 placeholder="..." name='societe' value="{{ Auth::user()->societe }}" required>

                        <br />
                         <hr />
                         
                         <input type="hidden" class="form-control cols" id="exampleFormControlInput"
                             placeholder="admin@gmail.com" name='emailadmin' value={{ Auth::user()->email }} required><br />

                
                 <button type="submit" class="btn btn-dark btn-sm mt-3">Soumettre</button>
              </form>
      </div>
     
    </div>
  </div>
</div>

          <!-- fin creation employe -->
      


    </x-slot>
@if (Auth::user()->contratactive == 'non')
<div class="flex justify-center lg:col-start-2 upe">


    <h2 class="shadow p-3 mb-5 bg-body rounded animate__animated animate__headShake animate__infinite	infinite comp">
       <a href="{{ route('completeinfosprofiluser',['id'=>Auth::user()->id]) }}" >Completez les informations relatives å votre profil...</a></h2>

</div>
@elseif (Auth::user()->contratactive == 'oui')
<p class='tops'></p>
@endif
  

    <div class="flex justify-center lg:col-start-2 up">

        <div>
            <a href=""><img src="managerole.png" id="imas" class=""data-aos="zoom-out"
                    data-aos-delay="200" /></a>
        </div>



    </div>
    @if((Auth::user()->admin === 'Pas Admin') && $exists === false && $existsdeux == false )
    <div class="flex justify-center lg:col-start-2 up">
      <a href="{{ route('profile.edit') }}"> <div class="alert alert-primary alert-dismissible text-center " role="alert">
        Vous devez etre Admin pour pouvoir creer des roles ou des permissions...
       
      </div></a>
    </div>
    @elseif ((Auth::user()->admin === 'Pas Admin') && $exists === true && $existsdeux == false )
    <div class="flex justify-center lg:col-start-2 up">
        <div>
      
        <a href="{{ route('profile.edit') }}"> <div class="alert alert-primary alert-dismissible text-center " role="alert">
            Vous devez etre Admin pour pouvoir creer des roles ou des permissions...
           
          </div></a>
          <a href="{{ route('recrutement') }}"> <div class="alert alert-danger alert-dismissible fade show animate__animated animate__bounceInLeft text-center " role="alert">
            Vous avez de nouvelles candidatures de recrutement å gerer...
           
          </div></a>
    </div>
      </div>
    @elseif ((Auth::user()->admin === 'Admin') && $exists === false && $existsdeux == false)

    <div class="flex justify-center lg:col-start-2 up">
        <div>
            <div class="btn-group" role="group" aria-label="Basic outlined example">

                <a class="btn btn-dark mx-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Creer
                    Responsable</a><a class="btn btn-outline-dark mx-2" href="{{route('mesutilisateurs')}}">Voir les Responsables</a>
                     

            </div>
        </div>
    </div>
        @elseif ((Auth::user()->admin === 'Admin') && $exists === true && $existsdeux == false)
        <div class='flex justify-center lg:col-start-2'>
            <div>
            <div class="btn-group mb-4 flex justify-center lg:col-start-2">
                 <div>
                <a class="btn btn-dark mx-2 " data-bs-toggle="modal" data-bs-target="#staticBackdrop">Creer
                    Responsable</a><a class="btn btn-outline-dark mx-2" href="{{route('mesutilisateurs')}}">Voir les Responsables</a>
                    </div>

            </div>
            <a href="{{ route('recrutement') }}"> <div class="alert alert-danger alert-dismissible fade show animate__animated animate__bounceInLeft text-center " role="alert">
                Vous avez de nouvelles candidatures de recrutement å gerer...
               
              </div></a>
            </div>
        </div>

        @elseif((Auth::user()->admin === 'Pas Admin') && $exists === false && $existsdeux == true )
        <div class="flex justify-center lg:col-start-2 up">
            <div>
          
            <a href="{{ route('profile.edit') }}"> <div class="alert alert-primary alert-dismissible text-center " role="alert">
                Vous devez etre Admin pour pouvoir creer des roles ou des permissions...
               
              </div></a>
              <a href="{{ route('recrutement') }}"> <div class="alert alert-warning alert-dismissible fade show animate__animated animate__bounceInLeft text-center " role="alert">
                Certains candidats ont repondus å votre sondage, veuillez consulter...
               
              </div></a>
        </div>
          </div>
          @elseif((Auth::user()->admin === 'Pas Admin') && $exists === true && $existsdeux == true )
          <div class="flex justify-center lg:col-start-2 up">
              <div>
            
              <a href="{{ route('profile.edit') }}"> <div class="alert alert-primary alert-dismissible text-center " role="alert">
                  Vous devez etre Admin pour pouvoir creer des roles ou des permissions...
                 
                </div></a>
                <a href="{{ route('recrutement') }}"> <div class="alert alert-danger alert-dismissible fade show animate__animated animate__bounceInLeft text-center " role="alert">
                    Vous avez de nouvelles candidatures de recrutement å gerer...
                   
                  </div></a>
                <a href="{{ route('recrutement') }}"> <div class="alert alert-warning alert-dismissible fade show animate__animated animate__bounceInLeft text-center " role="alert">
                  Certains candidats ont repondus å votre sondage, veuillez consulter...
                 
                </div></a>
          </div>
            </div>
            @elseif((Auth::user()->admin === 'Admin') && $exists === false && $existsdeux == true )
          <div class="flex justify-center lg:col-start-2 up">
              <div>
                <div class="btn-group mb-4 flex justify-center lg:col-start-2">
                    <div>
                   <a class="btn btn-dark mx-2 " data-bs-toggle="modal" data-bs-target="#staticBackdrop">Creer
                       Responsable</a><a class="btn btn-outline-dark mx-2" href="{{route('mesutilisateurs')}}">Voir les Responsables</a>
                       </div>
   
               </div>
           
                <a href="{{ route('recrutement') }}"> <div class="alert alert-warning alert-dismissible fade show animate__animated animate__bounceInLeft text-center " role="alert">
                  Certains candidats ont repondus å votre sondage, veuillez consulter...
                 
                </div></a>
          </div>
            </div>
            @elseif((Auth::user()->admin === 'Admin') && $exists === true && $existsdeux == true )
            <div class="flex justify-center lg:col-start-2 up">
                <div>
                    <div class="btn-group mb-4 flex justify-center lg:col-start-2">
                        <div>
                       <a class="btn btn-dark mx-2 " data-bs-toggle="modal" data-bs-target="#staticBackdrop">Creer
                           Responsable</a><a class="btn btn-outline-dark mx-2" href="{{route('mesutilisateurs')}}">Voir les Responsables</a>
                           </div>
       
                   </div>
                    <a href="{{ route('recrutement') }}"> <div class="alert alert-danger alert-dismissible fade show animate__animated animate__bounceInLeft text-center " role="alert">
                        Vous avez de nouvelles candidatures de recrutement å gerer...
                       
                      </div></a>
             
                  <a href="{{ route('recrutement') }}"> <div class="alert alert-warning alert-dismissible fade show animate__animated animate__bounceInLeft text-center " role="alert">
                    Certains candidats ont repondus å votre sondage, veuillez consulter...
                   
                  </div></a>
            </div>
              </div>
@endif








  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body flex justify-center lg:col-start-2 ">
            <div>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-dark mx-2"><a href="{{ route('nouvelemployeetpermission') }}">Nouvel Employé ?</a></button>
                  
                    <button type="button" class="btn btn-outline-dark mx-2"><a href="{{ route('choixemployepourpermission') }}">Ancien Employé ?</a></button>
                  </div>
            </div>
        
        </div>
      
      </div>
    </div>
  </div>


        <!-- fin modal cree admin -->
</x-app-layout>

<style>
.titr{
  font-size: 40px;
  font-weight: bolder;
}
    .tops{
        margin-top: 100px
    }
.comp{
    color: lightseagreen
}
    .cons {
        width: 70%;
    }

    .digit {
        font-weight: bold;
    }

    #imas {
        height: 450px;
        width: 650px;
    }

    .up {
        position: relative;
        top: -40px;
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
