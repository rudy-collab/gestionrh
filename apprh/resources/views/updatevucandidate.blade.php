<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Candidat') }}
        </h2>
        <a href="{{ route('voirtouteslescandidatures') }}"><button  class='btn btn-dark'>
            <<</button></a>
    </x-slot>



    <div class="flex justify-center lg:col-start-2 up">
        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="500.07696" height="400.61397" viewBox="0 0 731.07696 629.61397" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M538.56708,682.17352l7.98486-26.00457A87.77018,87.77018,0,0,0,511.468,632.66343c13.12443,21.74329.40684,50.10772,5.70644,74.94591a52.79386,52.79386,0,0,0,28.27717,35.97783l12.11706,15.0135a88.46588,88.46588,0,0,0,6.50218-73.78667,85.453,85.453,0,0,0-9.89442-19.0176C546.976,674.26143,538.56708,682.17352,538.56708,682.17352Z" transform="translate(-234.46152 -135.19301)" fill="#f2f2f2"/><path d="M494.66175,685.49609,490.211,658.6598a87.77019,87.77019,0,0,0-41.8846-5.39169c21.444,13.60792,22.71122,44.6671,38.53195,64.53481A52.79389,52.79389,0,0,0,528.213,737.39353l17.541,8.03374a88.4659,88.4659,0,0,0-27.08772-68.942,85.45282,85.45282,0,0,0-17.33741-12.60883C498.65942,674.66423,494.66175,685.49609,494.66175,685.49609Z" transform="translate(-234.46152 -135.19301)" fill="#f2f2f2"/><polygon points="521.537 616.734 509.237 616.733 503.386 569.293 521.539 569.294 521.537 616.734" fill="#ffb6b6"/><path d="M759.13479,763.849l-39.658-.00147v-.50161a15.43684,15.43684,0,0,1,15.436-15.43578h.001l7.24407-5.49573,13.51581,5.49657,3.46191.00014Z" transform="translate(-234.46152 -135.19301)" fill="#2f2e41"/><polygon points="720.217 571.872 711.831 580.869 673.137 552.804 685.514 539.526 720.217 571.872" fill="#ffb6b6"/><path d="M965.53848,712.899l-27.04,29.01035-.36695-.342a15.43684,15.43684,0,0,1-.76756-21.81615l.00067-.00072.91868-9.0463,13.236-6.13976,2.36044-2.53242Z" transform="translate(-234.46152 -135.19301)" fill="#2f2e41"/><path d="M936.47936,680.40333l-13,27.18935L843.6502,654.73756l-11.61334-15.82321-38.07879-51.88248-15.47871,24.56081-10.7705,25.675,0,0a28.302,28.302,0,0,0-12.67456,20.65424l-.4928,4.54552,6.80579,61.1824-25.86792,7.94283-14.85649-82.19011,4.85649-17.80989,5-25,25.17374-79h67.36433l38.6375,82.24219,2.82443,16.75781,10.95506,12.57265Z" transform="translate(-234.46152 -135.19301)" fill="#2f2e41"/><path d="M796.48335,398.341l11.34,8.635,13.676,4.20263s5.65378,79.52834,10.74814,84.62269.49987,5.23128,1.52352,11.84916,3.51167,20.18377,3.51167,20.18377c-34.38706,18.20258-64.03232,18.69086-87.845-2.60925a5.93118,5.93118,0,0,1,3.23609-6.69462c4.43194-2.35163-4.08556-13.32756-.46361-15.16273s-1.4724-17.755-1.4724-17.755l3.34187-33.21557-2.64024-5.30956,6.44317-32.48859,11.18013-4.083,4.466-10.76026Z" transform="translate(-234.46152 -135.19301)" fill="#3f3d56"/><path d="M803.58728,539.68971a9.83035,9.83035,0,0,1,11.20736-10.08023l15.98166-31.06366,8.90389,15.81982L823.1387,541.4389a9.88361,9.88361,0,0,1-19.55136-1.74918Z" transform="translate(-234.46152 -135.19301)" fill="#ffb6b6"/><path d="M830.50168,532.09076l34.27838-53.12742-.11314-.24445c-.12943-.28006-7.89169-17.04459-15.413-32.39983-1.15826-2.36467-2.3108-4.69592-3.42888-6.92839q-.72381-1.44525-1.42606-2.83006c-3.159-6.22784-5.919-11.37528-7.56648-13.82041a29.01529,29.01529,0,0,0-15.37527-11.66364l-.15859-.04079-.15142.06313a14.72433,14.72433,0,0,0-8.76284,16.19752,104.29613,104.29613,0,0,0,19.35291,43.755l5.55705,7.32474-19.31154,41.98521Z" transform="translate(-234.46152 -135.19301)" fill="#3f3d56"/><path d="M712.62832,328.445a9.83033,9.83033,0,0,1-2.35881,14.888l7.14559,34.1951-16.87862-6.68267-4.19794-31.44773A9.88361,9.88361,0,0,1,712.62826,328.445Z" transform="translate(-234.46152 -135.19301)" fill="#ffb6b6"/><path d="M696.50521,351.29613l6.82551,62.85653.24182.11864c.19929.09793,8.84664,4.33935,19.46132,9.39061,1.79066.85212,1.534,4.54332,3.40548,5.42554,1.28913.60768,4.69342-1.59731,5.996-.98817,11.6023,5.42574,23.33421,10.70159,28.0098,12.13115a29.0153,29.0153,0,0,0,19.2887-.621l.14888-.06818.07788-.14439a14.72433,14.72433,0,0,0-3.39225-18.10082A104.29612,104.29612,0,0,0,733.98177,399.492l-8.92931-2.19087-11.4361-44.77621Z" transform="translate(-234.46152 -135.19301)" fill="#3f3d56"/><circle cx="549.93117" cy="237.15579" r="22.43078" fill="#ffb6b6"/><path d="M762.12254,357.31823c1.84464-5.36654,11.02745-9.08881,25.91417-9.60638S806.699,364.73761,806.699,364.73761c9.938,8.06173-10.61182,29.645-11.606,28.86767l.447-4.05508c.74029-6.71673,3.8855-11.95752-.1145-18.95752l-3.841.0441q-7.441,1.43086-14.882,2.8617l5.87292-5.17092-.16561-.25624a22.72645,22.72645,0,0,1-8.01666,2.43412c-3.15652.18554-6.60741-1.0707-8.11933-3.84781a6.46564,6.46564,0,0,1-.7254-2.46008c-4.25655,1.70064-6.203,6.94811-6.203,6.94811S760.2779,362.68477,762.12254,357.31823Z" transform="translate(-234.46152 -135.19301)" fill="#2f2e41"/><path d="M324.835,358.66391a12.01539,12.01539,0,0,0-.98135-1.09867c.08535-.11731.1707-.2453.25605-.36261Z" transform="translate(-234.46152 -135.19301)" fill="#2f2e41"/><path d="M329.19746,448.8796c-3.66922,6.51717-10.997,10.15436-18.26074,11.93562a45.62848,45.62848,0,0,1-24.82054-.47994c-1.02393-.33065-2.04792-.71469-3.03988-1.1413a26.19137,26.19137,0,0,0,1.13063-3.89323,26.70185,26.70185,0,0,0,.55467-5.45048,17.20675,17.20675,0,0,1-3.10394,4.27721,15.69464,15.69464,0,0,1-3.25321,2.61319,31.94711,31.94711,0,0,1-9.43967-8.76768c.15995-.39465.32-.7893.46932-1.18395a42.55225,42.55225,0,0,0,1.83457-6.33579,43.3241,43.3241,0,0,0,.90668-8.86371,27.85116,27.85116,0,0,1-5.05589,6.95439,22.66926,22.66926,0,0,1-1.94121,1.84532,25.52261,25.52261,0,0,1,1.53589-19.63673c4.22388-7.80776,12.41561-12.44758,19.7114-17.49273,7.3064-5.04521,14.61287-11.87162,15.23147-20.73533.416-5.98379-2.35721-11.97832-1.24794-17.86609a13.804,13.804,0,0,1,23.44455-7.09313c-4.13853,5.86648-8.25572,11.93562-9.93034,18.91137-1.70658,7.10381-.3093,15.4342,5.29052,20.138,1.91992,1.6213,4.2772,2.77328,5.75984,4.79984,1.97324,2.68794,1.98392,6.2718,2.3039,9.5784.63995,6.43176,2.74125,12.61821,3.87187,18.986C332.29072,436.33606,332.35471,443.23714,329.19746,448.8796Z" transform="translate(-234.46152 -135.19301)" fill="#2f2e41"/><polygon points="19.519 578.195 29.254 585.716 62.898 551.747 48.53 540.646 19.519 578.195" fill="#a0616a"/><path d="M254.39467,706.03868l16.098,10.972-5.09439,6.593,6.8227,21.40865a5.20442,5.20442,0,0,1-8.14088,5.699l-18.32032-14.156,1.88135-8.9615-6.27209,5.56879-6.90749-5.3374Z" transform="translate(-234.46152 -135.19301)" fill="#2f2e41"/><path d="M303.36907,377.61406a23.23609,23.23609,0,1,0,39.96608-16.11663l-.11153-.11142c-.1859-.19526-.3718-.39041-.567-.57636a.0091.0091,0,0,1-.00925-.00931c-.24166-.22305-.48333-.44611-.7343-.65987-4.08951-3.58763-9.83738-7.48171-15.70217-7.48171C313.37529,352.65876,303.36907,364.77839,303.36907,377.61406Z" transform="translate(-234.46152 -135.19301)" fill="#2f2e41"/><path d="M435.81127,365.68143a8.51137,8.51137,0,0,1-9.217,9.24l-57.53844,51.95118-9.90168-15.63847,59.67194-46.14888a8.55747,8.55747,0,0,1,16.9852.59613Z" transform="translate(-234.46152 -135.19301)" fill="#a0616a"/><path d="M344.46482,442.55352s2.14082,3.954,9.45367-2.15133c5.85449-4.88778,33.90287-26.1074,39.94545-34.80272a6.68639,6.68639,0,0,0,7.8722-2.28582L385.17992,388.814c-4.95365.57025-4.84748,3.898-4.3316,5.78732l-12.48864,5.65825-32.24957,20.60975,6.75648,18.85359Z" transform="translate(-234.46152 -135.19301)" fill="#6c63ff"/><polygon points="78.761 343.789 77.555 349.532 76.531 370.716 121.615 373.194 120.215 340.612 115.845 333.432 78.761 343.789" fill="#a0616a"/><circle cx="97.86833" cy="247.79721" r="19.48446" fill="#a0616a"/><path d="M297.7375,454.85772l-.11981-16.19628a25.77616,25.77616,0,0,1,19.96171-25.124l.07352-.01725,3.85281-5.19124,15.65329,1.56586,2.86907,5.86367,11.34257,6.7539,4.36706,14.03864a16.6021,16.6021,0,0,1,7.17414,11.11883c1.48266,9.47052-5.14824,18.94649-5.937,20.033l-2.03225,11.44559-44.21015,7.80056-.359.04538Z" transform="translate(-234.46152 -135.19301)" fill="#6c63ff"/><path d="M356.17263,379.51655a66.42811,66.42811,0,0,1-7.06117,3.89317,40.63183,40.63183,0,0,1-7.70105,2.784,26.61691,26.61691,0,0,0-2.77322-4.72517,17.1841,17.1841,0,0,1,.02129,5.27977,27.50736,27.50736,0,0,1-13.13024-1.07724l-3.66921-6.15449-.27734,6.86911c-3.03987.55467-6.06914,1.07731-9.109,1.62131-.18131.02128-.36262.064-.53332.096-1.888-8.51171.7893-17.88745,6.74112-23.56187a21.445,21.445,0,0,1,22.52727-4.37323c.48.192.9706.40532,1.43992.62934a.01046.01046,0,0,0,.01068.01068c.27734.1386.512.46925.82133.43729C356.79123,359.7625,357.21791,370.08749,356.17263,379.51655Z" transform="translate(-234.46152 -135.19301)" fill="#2f2e41"/><polygon points="89.297 553.071 99.047 560.572 132.623 526.535 118.233 515.464 89.297 553.071" fill="#a0616a"/><path d="M325.0419,681.59354,341.162,692.533l-5.08106,6.60328,6.86592,21.39482a5.20442,5.20442,0,0,1-8.12936,5.71539l-18.34887-14.119,1.86325-8.96528-6.26083,5.58145-6.91826-5.32344Z" transform="translate(-234.46152 -135.19301)" fill="#2f2e41"/><path d="M292.1202,646.72233l-.00046-.12707,4.6209-7.9629-4.71847-10.36547-.14158-26.63073.76488-3.99777a33.63171,33.63171,0,0,0-.872-16.15848l0,0-.08618-16.21005c-.16577-4.06077,6.125-7.63227,4.658-11.01763-13.86622-31.999,14.15957-56.40982,14.34888-56.60574l.57273-.59543,3.10738,2.35356,2.95761.00363,39.9118,7.27258.28818.53734c1.5698,2.94445,4.59938,13.09349,4.7791,17.68625,1.98913,2.30273,24.647,28.52139,26.66114,30.34306,13.61081,12.31513,21.40353,32.69845,24.8372,43.75283a17.55469,17.55469,0,0,1-3.00617,16.14273L359.2765,671.58175l-13.86622-12.79958,27.88057-50.80511-2.01047-5.1546a15.843,15.843,0,0,1-9.2368-5.36609l-5.64564-6.70125a12.52908,12.52908,0,0,1-2.85958-6.517l-3.4237-.41208L337.85082,570.95l-8.5084,77.05214-2.31318,6.08677-40.28372,47.35855L269.6794,690.78113Z" transform="translate(-234.46152 -135.19301)" fill="#2f2e41"/><path d="M285.9682,315.86955a8.51136,8.51136,0,0,0,2.6234,12.78474l-12.80937,37.922,10.45957,40.18733,16.86612-7.62493-10.40771-30.31217,7.78662-44.12171a8.55747,8.55747,0,0,0-14.51863-8.83527Z" transform="translate(-234.46152 -135.19301)" fill="#a0616a"/><path d="M301.40665,439.87572s-3.96136,2.12717-6.71636-6.99219c-2.20557-7.30074-17.21552-46.94027-17.486-57.52555a6.68641,6.68641,0,0,1-5.32114-6.23555l21.80019-3.01683c3.82541,3.19846,1.90812,5.92043.43893,7.21547l7.425,12.5769,15.51936,33.95343L304.2974,438.38894Z" transform="translate(-234.46152 -135.19301)" fill="#6c63ff"/><path d="M312.46831,388.00518A39.63376,39.63376,0,0,1,342.982,361.48812c.02785-.00919.12083-.0464.24166-.10211.07432-.04652.16729-.093.26022-.13944-.27883-.158-.54834-.29737-.82722-.43692a.0091.0091,0,0,1-.00925-.00931c-.24166-.22305-.48333-.44611-.7343-.65987l-.70638.02792S316.38129,356.23686,312.46831,388.00518Z" transform="translate(-234.46152 -135.19301)" fill="#fd6584"/><ellipse cx="624.31846" cy="599.48269" rx="8.8567" ry="10.19466" transform="translate(-455.07569 652.01793) rotate(-56.36398)" fill="#f2f2f2"/><ellipse cx="569.31846" cy="447.48269" rx="8.8567" ry="10.19466" transform="translate(-353.05924 538.42151) rotate(-56.36398)" fill="#f2f2f2"/><ellipse cx="799.31846" cy="681.48269" rx="8.8567" ry="10.19466" transform="translate(-445.28183 834.29719) rotate(-56.36398)" fill="#f2f2f2"/><ellipse cx="334.31846" cy="192.48269" rx="8.8567" ry="10.19466" transform="translate(-245.58303 229.01517) rotate(-56.36398)" fill="#f2f2f2"/><ellipse cx="551.31846" cy="144.48269" rx="8.8567" ry="10.19466" transform="translate(-108.8191 388.27147) rotate(-56.36398)" fill="#f2f2f2"/><ellipse cx="448.61817" cy="547.19724" rx="8.8567" ry="10.19466" transform="translate(-489.92146 482.41084) rotate(-56.36398)" fill="#e6e6e6"/><path d="M904.72873,764.807h-650.294a1.19069,1.19069,0,0,1,0-2.38137h650.294a1.19068,1.19068,0,0,1,0,2.38137Z" transform="translate(-234.46152 -135.19301)" fill="#ccc"/><path d="M375.47008,369.35489a22.24025,22.24025,0,0,1-22.04492-19.83057L340.72985,231.61758a22.23015,22.23015,0,0,1,19.70068-24.45508l376.9541-40.58789a22.23025,22.23025,0,0,1,24.45606,19.7002L774.536,304.18106a22.231,22.231,0,0,1-19.70117,24.45605l-.05372-.49707.05372.49707L377.88072,369.225A22.49378,22.49378,0,0,1,375.47008,369.35489Z" transform="translate(-234.46152 -135.19301)" fill="#e6e6e6"/><path d="M733.23277,172.04825a19.85228,19.85228,0,0,0-2.12011.11425L367.74938,211.287a19.4592,19.4592,0,0,0-17.26416,21.43066l6.41894,59.61475a73.81135,73.81135,0,0,0,81.28955,65.48632L693.6986,330.30752A73.58749,73.58749,0,0,0,758.9857,249.265l-6.44287-59.83838a19.4634,19.4634,0,0,0-19.31006-17.37841Z" transform="translate(-234.46152 -135.19301)" fill="#fff"/><path d="M656.71383,234.09012l-203.08846,21.8673a4.4443,4.4443,0,1,1-.95157-8.83751l203.08846-21.8673a4.4443,4.4443,0,1,1,.95157,8.83751Z" transform="translate(-234.46152 -135.19301)" fill="#6c63ff"/><path d="M659.63425,261.213l-203.08846,21.8673a4.4443,4.4443,0,0,1-.95157-8.83752l203.08846-21.8673a4.4443,4.4443,0,0,1,.95157,8.83752Z" transform="translate(-234.46152 -135.19301)" fill="#6c63ff"/><path d="M483.13313,307.65418l-23.667,2.54832a4.4443,4.4443,0,0,1-.95157-8.83752l23.667-2.54831a4.4443,4.4443,0,1,1,.95157,8.83751Z" transform="translate(-234.46152 -135.19301)" fill="#6c63ff"/><circle cx="133.01784" cy="93.39967" r="8" fill="#3f3d56"/><circle cx="491.01784" cy="53.39967" r="8" fill="#3f3d56"/><path d="M617.3226,360.82948a6.58718,6.58718,0,0,1-2.23618-5.19571,87.65934,87.65934,0,0,0-5.62982-34.07665,6.58717,6.58717,0,0,1,.44621-5.63887,6.43872,6.43872,0,0,1,4.44875-3.1298c9.29859-5.61123,18.83092-7.18656,28.33811-4.68125a6.51458,6.51458,0,0,1,7.1633,4.49107,144.983,144.983,0,0,1,6.36475,38.52514,6.51419,6.51419,0,0,1-5.44589,6.57523l-28.13329,4.64791A6.43755,6.43755,0,0,1,617.3226,360.82948Z" transform="translate(-234.46152 -135.19301)" fill="#6c63ff"/><path d="M619.82141,326.97378l23.679-3.912a1.5,1.5,0,1,0-.489-2.95987l-23.679,3.912a1.5,1.5,0,0,0,.489,2.95987Z" transform="translate(-234.46152 -135.19301)" fill="#fff"/><path d="M621.77741,338.81329l23.679-3.912a1.5,1.5,0,0,0-.489-2.95988l-23.679,3.912a1.5,1.5,0,1,0,.489,2.95987Z" transform="translate(-234.46152 -135.19301)" fill="#fff"/><path d="M623.73342,350.65281l23.679-3.912a1.5,1.5,0,0,0-.489-2.95988l-23.679,3.912a1.5,1.5,0,1,0,.489,2.95988Z" transform="translate(-234.46152 -135.19301)" fill="#fff"/></svg>
        <div>
            <!--  <video id="localVideo"  ></video> -->
            <!-- <video id="remoteVideo" ></video>-->
            <!-- <button class='btn btn-dark' id="startCall">Démarrer l'appel</button>-->
        </div>

    </div>

    <div class="flex justify-center lg:col-start-2 upe ">

        <table class=" table table-light table-striped shadow cons">
            <thead>
                <tr>
                    <th class='text-center'>#</th>
                    <th class='text-center'>Nom</th>
                    <th class='text-center'>Prenom</th>
                    <th class='text-center'>Email</th>
                    <th class='text-center'>Telephone</th>
                    <th class='text-center'>Titre de l'Offre</th>
                    <th class='text-center'>Reference Offre</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class='text-center'></td>
                    <td class='text-center'> {{ $cand->name }}</td>
                    <td class='text-center'> {{ $cand->prenom }}</td>
                    <td class='text-center'> {{ $cand->email }}</td>
                    <td class='text-center'> {{ $cand->telephone }}</td>
                    <td class='text-center'> {{ $cand->offreemploi->titre }}</td>
                    <td class='text-center'> {{ $cand->offreemploi->reference }}</td>




                </tr>


            </tbody>
        </table>


    </div>
    @if (($cand->selectionne === 'non') && ($cand->sondage === 'non envoye'))
        <div class="flex justify-center lg:col-start-2 sel">

            <button class='btn btn-dark' data-bs-toggle="modal" data-bs-target="#staticBackdrop">Selectionner ce
                candidat ?</button>


        </div>
        @elseif (($cand->selectionne === 'oui') && ($cand->sondage === 'non envoye') )
        <div class="flex justify-center lg:col-start-2 sel">

          <button class='btn btn-success  animate__animated animate__headShake animate__infinite	infinite' data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Envoyer Sondage</button>


      </div>
      @elseif (($cand->selectionne === 'oui') && ($cand->sondage === 'envoye') )
      <div class="flex justify-center lg:col-start-2 sel">

        <button class='btn btn-warning' data-bs-toggle="modal" data-bs-target="#staticBackdrop3" disabled>Sondage Envoyé</button>


    </div>
    @endif





    </div>
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body flex justify-center lg:col-start-2 ">
                    <form class="{{ route('updatevucandidate', ['id' => $cand->id]) }}" method='post'>
                        @csrf
                        <div class="mb-3">

                            <input type="hidden" class="form-control" id="exampleFormControlInput1"name='name'
                                value={{ $cand->name }}>
                        </div>
                        <div class="mb-3">

                            <input type="hidden" class="form-control" id="exampleFormControlInput1"name='prenom'
                                value={{ $cand->prenom }}>
                        </div>
                        <div class="mb-3">

                            <input type="hidden" class="form-control" id="exampleFormControlInput1"name='email'
                                value={{ $cand->email }}>
                        </div>
                        <div class="mb-3">

                            <input type="hidden" class="form-control" id="exampleFormControlInput1"name='telephone'
                                value={{ $cand->telephone }}>
                        </div>
                        <div class="mb-3">

                            <input type="hidden" class="form-control" id="exampleFormControlInput1"name='cv'
                                value={{ $cand->cv }}>
                        </div>
                        <div class="mb-3">

                            <input type="hidden" class="form-control" id="exampleFormControlInput1"name='selectionne'
                                value={{ $cand->selectionne }}>
                        </div>
                        <div class="mb-3">

                            <input type="hidden" class="form-control" id="exampleFormControlInput1"name='offre_id'
                                value={{ $cand->offre_id }}>
                        </div>
                        <div class="mb-3">

                            <input type="hidden" class="form-control" id="exampleFormControlInput1"name='user_id'
                                value={{ $cand->user_id }}>
                        </div>

                        <div class="modal-footer">
                            <button  type="submit"
                                class="btn btn-success mx-2 px-4">Oui</button>
                            <button type="button" class="btn btn-danger mx-2" data-bs-dismiss="modal">Annuler</button>

                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>



    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header ">
                <div class='flex justify-center lg:col-start-2'>
                <p class="modal-title text-center" id="staticBackdropLabel2">Envoyer un sondage å {{ $cand->name  }} ?</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
                <div class="modal-body flex justify-center lg:col-start-2 ">
                    <form action="{{ route('sendemailsondage', ['id' => $cand->id]) }}" method='post'>
                        @csrf
                       
                        
                        <div class="mb-3">

                          <input type="hidden" class="form-control" id="exampleFormControlInput2" name='offre'
                              value={{ $cand->offreemploi->titre }}>
                      </div>
                      <div class="mb-3">

                        <input type="hidden" class="form-control" id="exampleFormControlInput2" name='ids'
                            value={{ $cand->id }}>
                    </div>
                       
                      <div class="mb-3">

                        <input type="hidden" class="form-control" id="exampleFormControlInput1"name='name'
                            value={{ $cand->name }}>
                    </div>
                    <div class="mb-3">

                        <input type="hidden" class="form-control" id="exampleFormControlInput1"name='prenom'
                            value={{ $cand->prenom }}>
                    </div>
                    <div class="mb-3">

                        <input type="hidden" class="form-control" id="exampleFormControlInput1"name='email'
                            value={{ $cand->email }}>
                    </div>
                    <div class="mb-3">

                        <input type="hidden" class="form-control" id="exampleFormControlInput1"name='telephone'
                            value={{ $cand->telephone }}>
                    </div>
                    <div class="mb-3">

                        <input type="hidden" class="form-control" id="exampleFormControlInput1"name='cv'
                            value={{ $cand->cv }}>
                    </div>
                    <div class="mb-3">

                        <input type="hidden" class="form-control" id="exampleFormControlInput1"name='selectionne'
                            value={{ $cand->selectionne }}>
                    </div>
                    <div class="mb-3">

                        <input type="hidden" class="form-control" id="exampleFormControlInput1"name='offre_id'
                            value={{ $cand->offre_id }}>
                    </div>
                    <div class="mb-3">

                        <input type="hidden" class="form-control" id="exampleFormControlInput1"name='user_id'
                            value={{ $cand->user_id }}>
                    </div>
                    <div class="mb-3">

                      <input type="hidden" class="form-control" id="exampleFormControlInput1"name='sondage'
                          value={{ $cand->sondage }}>
                  </div>
                        
            

                        <div class="modal-footer">
                            <button  type="submit"
                                class="btn btn-success mx-2 px-4">Oui</button>
                            <button type="button" class="btn btn-danger mx-2" data-bs-dismiss="modal">Annuler</button>

                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>




</x-app-layout>

<style>
    .sel {
        margin-top: 50px
    }

    #ims {
        width: 300px;
        height: 300px;
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
        margin-top: 40px;


    }

    .progress {
        width: 30%;
    }

    .lore {
        opacity: 0;
    }
</style>
