<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.12/vue.min.js"></script>
<script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
<script src="https://unpkg.com/alpinejs" defer></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage SMS - Chats - Notifications.') }}
        </h2>
        <div class="flex justify-end col-start-2 ">
            <a href="{{ route('espaceemploye') }}"><button class='btn btn-dark' >Espace Employé</button></a>
        </div>
    </x-slot>

    <div class="flex justify-center lg:col-start-2 upe">


        <h2 class="shadow p-3 mb-5 bg-body rounded ">
            Gerer vos SMS ici...</h2>

    </div>
    <!-- component -->
    <!-- This is an example component -->
    <div class="flex justify-center lg:col-start-2 image">
       <!-- <a href=""><img src="sms.png" id="ims" class=""data-aos="zoom-out" data-aos-delay="200" /></a>-->
       <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="487.04605" height="437.41436" viewBox="0 0 687.04605 637.41436" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="56.203 611.806 69.281 615.24 88.753 566.427 69.45 561.359 56.203 611.806" fill="#a0616a"/><path d="M308.63626,756.621l40.21852,10.56123.13358-.50863a16.18578,16.18578,0,0,0-11.54276-19.76508l-.001-.00025-5.8826-7.50275-15.17066,1.9743-3.51081-.92193Z" transform="translate(-256.47698 -131.29282)" fill="#2f2e41"/><polygon points="123.249 621.59 136.771 621.589 143.204 569.432 123.246 569.433 123.249 621.59" fill="#a0616a"/><path d="M379.2497,766.98909l41.58208-.00157v-.52587a16.18579,16.18579,0,0,0-16.1849-16.18465h-.001l-7.5955-5.76234-14.17153,5.76322-3.62984.00012Z" transform="translate(-256.47698 -131.29282)" fill="#2f2e41"/><path d="M345.90538,503.29091c-3.26644,4.08306-1.63322,17.96547-1.63322,17.96547s-5.71628,44.91365-3.26645,48.99671-1.63322,7.34951-4.08306,13.0658-4.89967,19.59868-4.89967,19.59868c-13.8824,11.43257-13.06579,63.69574-13.06579,63.69574l-4.89967,46.54688c1.63322,4.89967,24.49836,5.71628,27.7648,4.89967S376.93664,602.101,376.93664,602.101s-1.63323,111.05923-1.63323,115.9589,22.04853,2.44983,26.9482,2.44983,35.93092-200.06995,35.93092-200.06995V509.00717l-4.08306-5.71628S349.17183,499.20785,345.90538,503.29091Z" transform="translate(-256.47698 -131.29282)" fill="#2f2e41"/><circle cx="125.35933" cy="197.24311" r="25.31497" fill="#a0616a"/><path d="M347.82519,521.35089l-.13808-.19368c-7.37428-10.32416,3.71666-35.13285,5.38943-38.7292v0a9.02883,9.02883,0,0,1-6.18013-9.64286l.7211-6.12973.75165-6.01246-5.38488-5.38489-.01514-.13429-3.09891-27.11547-4.50573-18.00983a39.53945,39.53945,0,0,1,11.22259-38.31838l10.41494-1.65378,12.65742-12.19558H390.071l6.99866,6.68666c13.75964,11.27881,17.02609,6.37914,32.54171,27.61105L418.5021,421.397l6.20955,43.16838.00379,7.81235,3.23418,3.59433a11.18479,11.18479,0,0,1,2.65317,9.675l-.42532,2.12651h0a11.18483,11.18483,0,0,1,6.53076,7.93681l1.13593,5.30052c.97182,1.28239,7.3864,9.83541,7.3864,12.17359,0,.351-.25913.69037-.81521,1.06681-4.37146,2.96008-28.53328,8.99486-39.227,4.7157-11.39092-4.55455-56.67165,2.278-57.12786,2.34764Z" transform="translate(-256.47698 -131.29282)" fill="#3f3d56"/><path d="M334.96442,418.66077l21.04882-4.12045c7.78431,11.62512,11.96338,43.41278,11.96338,43.41278l23.27174,48.26261a9.46969,9.46969,0,1,1-14.37414,7.61347l-30.35236-57.18237Z" transform="translate(-256.47698 -131.29282)" fill="#a0616a"/><path d="M334.84655,423.65475l-.59844-31.28464,9.90546-13.25175a17.41307,17.41307,0,0,1,17.14125-6.63434h0a17.372,17.372,0,0,1,13.89631,19.22126c-1.68127,13.2471-5.49836,29.825-14.13407,33.57568l-.08751.038,8.95018,31.30143-33.19132,4.63652Z" transform="translate(-256.47698 -131.29282)" fill="#3f3d56"/><path d="M459.8582,420.89039s-25.2602-19.74451-38.96027-22.58076l-12.12584,17.69181L441.566,436.09862l63.84763,18.46093a9.46983,9.46983,0,1,0,4.87015-15.55511Z" transform="translate(-256.47698 -131.29282)" fill="#a0616a"/><path d="M415.41682,424.85811,389.092,407.94394l-5.49692-15.60484a17.41311,17.41311,0,0,1,4.028-17.93356h0a17.372,17.372,0,0,1,23.70328-.84774c10.07021,8.76946,23.04782,11.70858,21.35776,20.9707l4.84825.708,24.79276,18.82914L447.70465,444.222Z" transform="translate(-256.47698 -131.29282)" fill="#3f3d56"/><path d="M353.12214,311.90229c2.84259-4.39766,8.17688-7.32857,13.34809-6.505A18.228,18.228,0,0,1,397.012,294.7654a5.66811,5.66811,0,0,1,5.543-.55474,11.68738,11.68738,0,0,1,4.50333,3.61475,26.23034,26.23034,0,0,1,3.67037,26.68473c.632-2.29752-1.67051-4.459-3.99694-4.97454-2.32622-.51557-4.76649-.02781-7.12561-.36355-3.02362-.43023-5.74161-2.18427-8.77-2.579a19.9652,19.9652,0,0,0-7.58655.97491,20.57069,20.57069,0,0,1-7.58357,1.01837c-2.54892-.30264-5.83212,9.35675-5.78806,16.16018.00838,1.28932-.25718,2.94467-1.51719,3.2182-1.55168.33694-2.45083-1.80468-3.92775-2.38823a2.73236,2.73236,0,0,0-3.35138,1.78216,4.45469,4.45469,0,0,0,.85051,3.98915,13.16338,13.16338,0,0,0,3.19148,2.76853l-.60827.5059c-1.01179,1.33666-3.11054,1.39458-4.56892.5676a9.8609,9.8609,0,0,1-3.2804-3.73517c-2.69805-4.48757-5.06475-9.269-6.01694-14.418S350.27975,316.3,353.12214,311.90229Z" transform="translate(-256.47698 -131.29282)" fill="#2f2e41"/><path d="M942.52981,167.8453H310.20645a1.01559,1.01559,0,0,1,0-2.03069H942.52981a1.01559,1.01559,0,0,1,0,2.03069Z" transform="translate(-256.47698 -131.29282)" fill="#cacaca"/><ellipse cx="76.08457" cy="11.16881" rx="10.92534" ry="11.16881" fill="#3f3d56"/><ellipse cx="113.82665" cy="11.16881" rx="10.92534" ry="11.16881" fill="#3f3d56"/><ellipse cx="151.56872" cy="11.16881" rx="10.92534" ry="11.16881" fill="#3f3d56"/><path d="M919.9128,134.06112h-26.81a2.0304,2.0304,0,0,0,0,4.06h26.81a2.0304,2.0304,0,0,0,0-4.06Z" transform="translate(-256.47698 -131.29282)" fill="#3f3d56"/><path d="M919.9128,141.68112h-26.81a2.0304,2.0304,0,0,0,0,4.06h26.81a2.0304,2.0304,0,0,0,0-4.06Z" transform="translate(-256.47698 -131.29282)" fill="#3f3d56"/><path d="M919.9128,149.2911h-26.81a2.0304,2.0304,0,0,0,0,4.06h26.81a2.0304,2.0304,0,0,0,0-4.06Z" transform="translate(-256.47698 -131.29282)" fill="#3f3d56"/><path d="M885.85346,208.18225H366.8828a10.85621,10.85621,0,0,0-10.84007,10.84v1.7481a10.85627,10.85627,0,0,0,10.84007,10.84008H885.85346a10.85627,10.85627,0,0,0,10.84008-10.84008v-1.7481A10.85622,10.85622,0,0,0,885.85346,208.18225Z" transform="translate(-256.47698 -131.29282)" fill="#f0f0f0"/><path d="M429.513,224.22174H380.11289a4.17154,4.17154,0,1,1,0-8.34308H429.513C434.89263,215.80357,434.94644,224.29751,429.513,224.22174Z" transform="translate(-256.47698 -131.29282)" fill="#fff"/><path d="M577.29084,224.22174H527.89077a4.17154,4.17154,0,0,1,0-8.34308h49.40007C582.67052,215.80357,582.72433,224.29751,577.29084,224.22174Z" transform="translate(-256.47698 -131.29282)" fill="#fff"/><path d="M725.06872,224.22174H675.66866a4.17154,4.17154,0,0,1,0-8.34308h49.40006C730.44841,215.80357,730.50221,224.29751,725.06872,224.22174Z" transform="translate(-256.47698 -131.29282)" fill="#fff"/><path d="M865.18739,224.67228H815.78733a4.17153,4.17153,0,1,1,0-8.34307h49.40006C870.56708,216.25411,870.62088,224.74805,865.18739,224.67228Z" transform="translate(-256.47698 -131.29282)" fill="#6c63ff"/><rect x="529.83369" y="76.88943" width="1.80217" height="23.4282" fill="#fff"/><path d="M527.204,436.21118c-.07368,0-.14735-.00145-.22175-.00435a5.3906,5.3906,0,0,1-4.33476-2.46534,60.89711,60.89711,0,0,0-12.8199-13.8869c-3.00864-2.40473-6.15264-4.6407-9.19285-6.80336-7.8435-5.577-15.23008-10.82964-19.33039-18.08738-8.9399-15.826,1.58815-37.86925,16.62842-47.75492,16.86977-11.08731,39.05927-12.82644,60.5251-13.05435q3.34634-.03539,6.69667-.03521h0A638.49371,638.49371,0,0,1,680.46515,344.663c12.6486,2.3336,25.88841,5.19235,36.52788,12.13,10.57631,6.89664,17.00477,17.75712,16.37764,27.66929-.91565,14.47012-16.255,25.28233-30.22281,28.10914-13.31348,2.69217-27.14413.87283-41.78628-1.05393-3.23256-.425-6.57472-.86485-9.87986-1.247-35.92-4.15185-103.398,8.64519-106.25273,9.19212l-2.83225.54221-10.98932,14.14167A5.27377,5.27377,0,0,1,527.204,436.21118Z" transform="translate(-256.47698 -131.29282)" fill="#6c63ff"/><path d="M687.1597,365.6209H535.3382a3.3033,3.3033,0,0,1,0-6.6066H687.1597a3.3033,3.3033,0,0,1,0,6.6066Z" transform="translate(-256.47698 -131.29282)" fill="#fff"/><path d="M687.1597,385.897H535.3382a3.3033,3.3033,0,1,1-.0069-6.6066H687.1597a3.3033,3.3033,0,0,1,0,6.6066Z" transform="translate(-256.47698 -131.29282)" fill="#fff"/><path d="M553.03074,406.17254H535.3382a3.3033,3.3033,0,0,1,0-6.6066h17.69254a3.3033,3.3033,0,0,1,0,6.6066Z" transform="translate(-256.47698 -131.29282)" fill="#fff"/><path d="M798.32293,541.79566l-8.75345-11.26442-2.256-.4319c-2.27393-.43564-56.023-10.629-84.6347-7.3219-2.63268.3044-5.29485.65477-7.86972.99329-11.66308,1.53474-22.67976,2.98392-33.2845.8395-11.126-2.25168-23.34436-10.86405-24.07372-22.3901-.49954-7.89545,4.621-16.54628,13.04547-22.03973,8.47478-5.52612,19.02083-7.80323,29.096-9.662a508.58557,508.58557,0,0,1,91.84964-8.39845h0q2.669,0,5.33417.028c17.09843.18154,34.77328,1.56683,48.21075,10.39833,11.9802,7.87435,20.36623,25.4327,13.24523,38.03877-3.26606,5.78109-9.14978,9.965-15.39745,14.40734-2.42166,1.72265-4.926,3.5037-7.32249,5.41916a48.5073,48.5073,0,0,0-10.21159,11.0615,4.29382,4.29382,0,0,1-3.45281,1.96374c-.05926.00231-.11795.00347-.17663.00347A4.20077,4.20077,0,0,1,798.32293,541.79566Z" transform="translate(-256.47698 -131.29282)" fill="#f2f2f2"/><path d="M674.25979,487.21218H795.1919a2.63122,2.63122,0,0,0,0-5.26243H674.25979a2.63122,2.63122,0,0,0,0,5.26243Z" transform="translate(-256.47698 -131.29282)" fill="#fff"/><path d="M674.25979,503.3629H795.1919a2.63122,2.63122,0,1,0,.0055-5.26243H674.25979a2.63122,2.63122,0,0,0,0,5.26243Z" transform="translate(-256.47698 -131.29282)" fill="#fff"/><path d="M781.09906,519.51324H795.1919a2.63122,2.63122,0,0,0,0-5.26244H781.09906a2.63122,2.63122,0,0,0,0,5.26244Z" transform="translate(-256.47698 -131.29282)" fill="#fff"/><circle cx="272.60197" cy="311.89108" r="16.05687" fill="#fff"/><path d="M529.079,459.43687a16.25289,16.25289,0,1,1,16.25288-16.253A16.27142,16.27142,0,0,1,529.079,459.43687Z" transform="translate(-256.47698 -131.29282)" fill="#3f3d56"/><path d="M527.87677,449.60115c-.03423,0-.06846-.00111-.10269-.00278a2.09979,2.09979,0,0,1-1.55654-.80874l-2.68338-3.44983a2.10061,2.10061,0,0,1,.36819-2.94832l.09657-.07514a2.10042,2.10042,0,0,1,2.94888.36847,1.53224,1.53224,0,0,0,2.32048.113l5.4483-5.75193a2.10377,2.10377,0,0,1,2.97031-.08071l.08934.08516a2.1004,2.1004,0,0,1,.08015,2.97l-8.45507,8.92457A2.09847,2.09847,0,0,1,527.87677,449.60115Z" transform="translate(-256.47698 -131.29282)" fill="#fff"/><circle cx="546.16774" cy="418.37728" r="16.05687" fill="#fff"/><path d="M802.64473,565.92307a16.25289,16.25289,0,1,1,16.25289-16.253A16.27142,16.27142,0,0,1,802.64473,565.92307Z" transform="translate(-256.47698 -131.29282)" fill="#e6e6e6"/><path d="M801.44255,556.08735c-.03423,0-.06846-.00111-.1027-.00278a2.09977,2.09977,0,0,1-1.55653-.80874l-2.68338-3.44982a2.10062,2.10062,0,0,1,.36819-2.94833l.09657-.07514a2.10042,2.10042,0,0,1,2.94888.36847,1.53223,1.53223,0,0,0,2.32047.113l5.44831-5.75193a2.10377,2.10377,0,0,1,2.97031-.08071l.08933.08516a2.10039,2.10039,0,0,1,.08015,2.97l-8.45507,8.92456A2.09846,2.09846,0,0,1,801.44255,556.08735Z" transform="translate(-256.47698 -131.29282)" fill="#fff"/><path d="M505.87634,751.22216l-7.71-12.39-1.54,7.08008c-.27,1.24-.54,2.5-.79,3.75-2.19-1.87012-4.52-3.6001-6.79981-5.26q-10.5-7.62012-20.99023-15.26l2.18994,12.7c1.3501,7.82007,2.76025,15.8,6.1001,22.94995.37011.81006.77,1.61011,1.20019,2.39014h32.54a10.48759,10.48759,0,0,0,.54-2.24012.77469.77469,0,0,0,.00976-.15C511.1366,759.94213,508.45642,755.37219,505.87634,751.22216Z" transform="translate(-256.47698 -131.29282)" fill="#f0f0f0"/><path d="M533.41766,768.39985l-275.75.30733a1.19069,1.19069,0,0,1,0-2.38137l275.75-.30733a1.19069,1.19069,0,1,1,0,2.38137Z" transform="translate(-256.47698 -131.29282)" fill="#cacaca"/></svg>
    </div>

    @if (Auth::user()->admin == 'Admin')
        <div class="flex justify-center lg:col-start-2 upe">
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
            <!-- Modal -->
            <div class="modal fade" data-bs-backdrop="static" id="exampleModalToggle" aria-hidden="true"
                aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Mes SMS</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row gy-4 flex lg:justify-center ">

                                @if (count($getCountSmsRead) > 0)
                                    <div class="shadow-lg p-3 mb-5 mx-4 bg-body col-xl-3 col-md-6 d-flex ups animate__animated animate__headShake animate__infinite	infinite "
                                        data-aos="fade-up" data-aos-delay="300">

                                        <div class="service-item position-relative">
                                            <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                                            <button type='button' class='btn btn-light'>
                                                <a href="{{ route('discussionadminresporecrutement') }}">
                                                    <h4 class="stretched-link" id="executeFonction">Responsable
                                                        Recrutement
                                                        <span class='colo'></span>
                                                    </h4>
                                                </a>
                                            </button>
                                            <p class='text-center reds'>{{ count($getCountSmsRead) }} message(s) non
                                                lu(s)</p>
                                        </div>

                                    </div><!-- End Service Item -->
                                @elseif (count($getCountSmsRead) === 0)
                                    <div class="shadow-lg p-3 mb-5 mx-4 bg-body col-xl-3 col-md-6 d-flex ups"
                                        data-aos="fade-up" data-aos-delay="300">
                                        <div class="service-item position-relative">
                                            <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                                            <button type='button' class='btn btn-light'>
                                                <a href="{{ route('discussionadminresporecrutement') }}">
                                                    <h4 class="stretched-link" id="executeFonction">Responsable
                                                        Recrutement
                                                        <span class='colo'></span>
                                                    </h4>
                                                </a>
                                            </button>

                                        </div>
                                    </div><!-- End Service Item -->
                                @endif

                                <!-- End Service Item -->
                          
                                    <div class="shadow-lg  mx-4 p-3 mb-5 bg-body rounded col-xl-3 col-md-6 d-flex upstwo"
                                        data-aos="fade-up" data-aos-delay="400">
                                        <div class="service-item position-relative">
                                            <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                                            <h4><a data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                                                    data-bs-dismiss="modal"
                                                    class="stretched-link  text-center">Responsable Gestion des
                                                    Performances</a></h4>

                                        </div>
                                    </div><!-- End Service Item -->
                             
                                <div class="shadow-lg  mx-4 p-3 mb-5 bg-body rounded col-xl-3 col-md-6 d-flex upstwo"
                                    data-aos="fade-up" data-aos-delay="400">
                                    <div class="service-item position-relative">
                                        <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                                        <h4><a data-bs-target="#exampleModalToggle6" data-bs-toggle="modal"
                                                data-bs-dismiss="modal" class="stretched-link  text-center">Responsable
                                                Gestion Conges et
                                                Absences</a></h4>

                                    </div>
                                </div><!-- End Service Item -->
                                <div class="shadow-lg  mx-4 p-3 mb-5 bg-body rounded col-xl-3 col-md-6 d-flex upstwo"
                                    data-aos="fade-up" data-aos-delay="400">
                                    <div class="service-item position-relative">
                                        <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                                        <h4><a data-bs-target="#exampleModalToggle7" data-bs-toggle="modal"
                                                data-bs-dismiss="modal" class="stretched-link  text-center">Responsable
                                                Paie</a></h4>

                                    </div>
                                </div><!-- End Service Item -->

                                <!-- End Service Item -->

                            </div>
                        </div>

                    </div>
                </div>
            </div>




        </div>


        <div class="modal fade" data-bs-backdrop="static" id="exampleModalToggle2" aria-hidden="true"
            aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel2">SMS Audit</h5>
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

        <!-- fin sms audit -->

        <!-- sms digitalisation -->
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

        <!-- fin sms digitalisation -->

        <!-- sms gestion projet -->
        <div class="modal fade" data-bs-backdrop="static" id="exampleModalToggle4" aria-hidden="true"
            aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel4">SMS Gestion projet</h5>
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




        <!--------- Utilisateur et permissions ------->



        <!--utilsateurs avec permission-->
    @elseif(Auth::user()->admin == 'Pas Admin' && Auth::user()->permission == 'Responsable Recrutement')
        @if (count($getCountSmsRead) > 0)
            <div class="flex justify-center lg:col-start-2 image">

                <button type="button" id="#executeFonction2"
                    class="btn btn-dark position-relative animate__animated animate__headShake animate__infinite	infinite"
                    data-bs-toggle="modal" href="#exampleModalone">
                    SMS - Notifications !
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        +
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </button>

            </div>
        @elseif (count($getCountSmsRead) == 0)
            <div class="flex justify-center lg:col-start-2 image">
                <button type="button" class="btn btn-dark mx-2" ">
                    <a href="{{ route('receptsmsadminbyresporecrutement') }}">SMS - Notifications !</a>

                </button>

            </div>
        @endif
<!-- Button trigger modal -->

@if (count($getCountSmsRead) > 0)
  <!-- Modal -->
  <div class="modal fade" id="exampleModalone" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
         
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <a href="{{ route('receptsmsadminbyresporecrutement') }}"><p class='text-center reds'>{{ count($getCountSmsRead) }} message(s) non
                lu(s)</p></a>
        </div>
       
      </div>
    </div>
  </div>
@endif



        <!-- sms  digitalisation -->
  


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
            $('#executeFonction2').click(function() {
                $.ajax({
                    url: '{{ route('updatesmssendbyadmin') }}',
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
        margin-top: 40px
    }

    .progress {
        width: 30%;
    }

    .lore {
        opacity: 0;
    }
</style>
