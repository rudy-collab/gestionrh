<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion du recrutement') }}
        </h2>
        <div class="flex justify-end col-start-2 ">
            <a href="{{ route('espaceemploye') }}"><button class='btn btn-dark' >Espace Employé</button></a>
        </div>
    </x-slot>

   
    <div class="flex justify-center  upe">
       <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="497.96287" height="431.46323" viewBox="0 0 697.96287 631.46323" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M556.0722,656.52032H264.84766a13.84469,13.84469,0,0,1-13.82909-13.8291V247.34171a13.84468,13.84468,0,0,1,13.82909-13.82909H556.0722a13.84468,13.84468,0,0,1,13.82909,13.82909V642.69122A13.84469,13.84469,0,0,1,556.0722,656.52032Z" transform="translate(-251.01857 -134.26838)" fill="#fff"/><path d="M397.33163,336.40339a54.10671,54.10671,0,0,1-37.34148,51.44415c-.32462.10327-.649.20652-.97865.30487-1.40626.43272-2.83221.80151-4.28289,1.11622a53.17173,53.17173,0,0,1-7.97083,1.10638q-1.7478.118-3.51578.118a53.99524,53.99524,0,0,1-17.88405-3.029c-.16711-.059-.33422-.118-.49653-.177a54.09488,54.09488,0,1,1,72.47021-50.88358Z" transform="translate(-251.01857 -134.26838)" fill="#fff"/><circle cx="90.92753" cy="211.65492" r="26.31665" fill="#6c63ff"/><path d="M343.48246,360.10265l.02737-.98345c-1.82956-.0509-3.44255-.16567-4.65457-1.05116a3.02308,3.02308,0,0,1-1.171-2.22668,1.72809,1.72809,0,0,1,.56687-1.42331,2.97858,2.97858,0,0,1,3.04278-.02689l.8137.37311L340.54724,343.361l-.97432.1335,1.32727,9.7a3.47153,3.47153,0,0,0-3.28384.47252,2.69019,2.69019,0,0,0-.91478,2.20891,3.999,3.999,0,0,0,1.57361,2.98636C339.83247,360.00036,341.85627,360.057,343.48246,360.10265Z" transform="translate(-251.01857 -134.26838)" fill="#2f2e41"/><rect x="78.4392" y="210.0626" width="5.2966" height="0.98345" fill="#2f2e41"/><rect x="95.15781" y="210.0626" width="5.2966" height="0.98345" fill="#2f2e41"/><path d="M349.42289,382.71394a4.81423,4.81423,0,0,0,.10828-.98345,4.67877,4.67877,0,0,0-4.67138-4.67137h-6.88413a4.67553,4.67553,0,0,0-4.67138,4.67137,4.54308,4.54308,0,0,0,.108.98837,26.42417,26.42417,0,0,0-7.28222,3.60435c-.4329.29994-.86052.62447-1.26869.96376.16231.059.32942.118.49653.177a53.99524,53.99524,0,0,0,17.88405,3.029q1.77014,0,3.51578-.118a53.17173,53.17173,0,0,0,7.97083-1.10638c1.45068-.31471,2.87663-.6835,4.28289-1.11622A26.65042,26.65042,0,0,0,349.42289,382.71394Z" transform="translate(-251.01857 -134.26838)" fill="#2f2e41"/><path d="M348.53788,389.75051a3.61831,3.61831,0,0,0-1.7801.6245,53.17173,53.17173,0,0,0,7.97083-1.10638Z" transform="translate(-251.01857 -134.26838)" fill="#2f2e41"/><path d="M365.81368,339.6717,320.0962,322.94689a1.96691,1.96691,0,0,1-1.17142-2.52292l.15466-.73121c3.57044-9.75984,15.40471-15.90222,25.16455-12.33178l14.06831,5.14661c9.75984,3.57044,14.00169,15.12739,10.43125,24.88723l-.407,1.10546A1.96689,1.96689,0,0,1,365.81368,339.6717Z" transform="translate(-251.01857 -134.26838)" fill="#2f2e41"/><path d="M368.27632,340.59973c-63.72122,2.35119-69.28913-5.65524-49.87372-18.24525l4.11891-7.579L369.727,331.98586Z" transform="translate(-251.01857 -134.26838)" fill="#2f2e41"/><ellipse cx="351.77908" cy="310.10415" rx="2.21276" ry="4.17965" transform="translate(-297.48335 423.45428) rotate(-73.26954)" fill="#2f2e41"/><path d="M343.242,391.96819a55.43048,55.43048,0,0,1-18.37181-3.11193l-.51322-.183a55.56481,55.56481,0,1,1,36.08925.5772c-.34947.11117-.6784.21561-1.01262.31549-1.39666.42978-2.87844.81586-4.39238,1.14408a54.76309,54.76309,0,0,1-8.1928,1.13711C345.66449,391.92737,344.44814,391.96819,343.242,391.96819Zm0-108.17925a52.62192,52.62192,0,0,0-17.87961,102.11049l.48716.17359a52.47405,52.47405,0,0,0,17.39245,2.94483c1.14012,0,2.28947-.03866,3.41626-.11477a51.87031,51.87031,0,0,0,7.75846-1.07637c1.432-.31045,2.83209-.6754,4.161-1.084.32906-.09844.64143-.19784.95392-.29724A52.62185,52.62185,0,0,0,343.242,283.78894Z" transform="translate(-251.01857 -134.26838)" fill="#ccc"/><path d="M269.60682,502.682" transform="translate(-251.01857 -134.26838)" fill="#f2f2f2"/><path d="M556.0722,656.52032H264.84766a13.84469,13.84469,0,0,1-13.82909-13.8291V247.34171a13.84468,13.84468,0,0,1,13.82909-13.82909H556.0722a13.84468,13.84468,0,0,1,13.82909,13.82909V642.69122A13.84469,13.84469,0,0,1,556.0722,656.52032ZM264.84766,235.13957a12.216,12.216,0,0,0-12.20214,12.20214V642.69122a12.216,12.216,0,0,0,12.20214,12.20215H556.0722a12.216,12.216,0,0,0,12.20214-12.20215V247.34171a12.216,12.216,0,0,0-12.20214-12.20214Z" transform="translate(-251.01857 -134.26838)" fill="#ccc"/><path d="M499.6946,336.19285H417.28808a6.5193,6.5193,0,0,1,0-13.03859H499.6946a6.5193,6.5193,0,1,1,0,13.03859Z" transform="translate(-251.01857 -134.26838)" fill="#e6e6e6"/><path d="M526.58668,358.19546H417.28808a6.5193,6.5193,0,0,1,0-13.03859h109.2986a6.5193,6.5193,0,0,1,0,13.03859Z" transform="translate(-251.01857 -134.26838)" fill="#e6e6e6"/><path d="M499.57463,442.5846H294.33318a6.5193,6.5193,0,1,1,0-13.03859H499.57463a6.5193,6.5193,0,0,1,0,13.03859Z" transform="translate(-251.01857 -134.26838)" fill="#e6e6e6"/><path d="M526.4667,464.58721H294.33318a6.5193,6.5193,0,1,1,0-13.03859H526.4667a6.5193,6.5193,0,1,1,0,13.03859Z" transform="translate(-251.01857 -134.26838)" fill="#e6e6e6"/><path d="M499.57463,515.15764H294.33318a6.51929,6.51929,0,1,1,0-13.03858H499.57463a6.51929,6.51929,0,0,1,0,13.03858Z" transform="translate(-251.01857 -134.26838)" fill="#e6e6e6"/><path d="M526.4667,537.16025H294.33318a6.51929,6.51929,0,1,1,0-13.03858H526.4667a6.51929,6.51929,0,1,1,0,13.03858Z" transform="translate(-251.01857 -134.26838)" fill="#e6e6e6"/><path d="M499.57463,587.73069H294.33318a6.51929,6.51929,0,1,1,0-13.03858H499.57463a6.51929,6.51929,0,0,1,0,13.03858Z" transform="translate(-251.01857 -134.26838)" fill="#e6e6e6"/><path d="M526.4667,609.7333H294.33318a6.51929,6.51929,0,1,1,0-13.03858H526.4667a6.51929,6.51929,0,1,1,0,13.03858Z" transform="translate(-251.01857 -134.26838)" fill="#e6e6e6"/><path d="M935.15235,557.27608l-291.22453.00024a13.84468,13.84468,0,0,1-13.82911-13.82908l-.00033-395.34951a13.84469,13.84469,0,0,1,13.82909-13.82911l291.22453-.00024a13.84469,13.84469,0,0,1,13.82911,13.82909l.00032,395.34951A13.84467,13.84467,0,0,1,935.15235,557.27608Z" transform="translate(-251.01857 -134.26838)" fill="#fff"/><path d="M935.15235,557.27608l-291.22453.00024a13.84468,13.84468,0,0,1-13.82911-13.82908l-.00033-395.34951a13.84469,13.84469,0,0,1,13.82909-13.82911l291.22453-.00024a13.84469,13.84469,0,0,1,13.82911,13.82909l.00032,395.34951A13.84467,13.84467,0,0,1,935.15235,557.27608ZM643.92747,135.89557a12.216,12.216,0,0,0-12.20214,12.20216l.00033,395.3495a12.216,12.216,0,0,0,12.20215,12.20214l291.22454-.00024A12.216,12.216,0,0,0,947.35448,543.447l-.00032-395.34951A12.216,12.216,0,0,0,935.152,135.89534Z" transform="translate(-251.01857 -134.26838)" fill="#ccc"/><path d="M776.5482,236.62033a54.08962,54.08962,0,1,1-54.08967-54.08959A54.10671,54.10671,0,0,1,776.5482,236.62033Z" transform="translate(-251.01857 -134.26838)" fill="#fff"/><path d="M747.45785,245.87561c-.59076,34.5932-52.04749,34.58783-52.63325-.00107C695.41532,211.28245,746.872,211.28783,747.45785,245.87561Z" transform="translate(-251.01857 -134.26838)" fill="#6c63ff"/><path d="M720.09657,256.61291l-.02737-.98345c6.77815.905,8.2379-7.49552,1.40218-4.35492l1.56039-11.40329.97433.13349-1.32726,9.7C729.87629,248.63339,727.214,257.59577,720.09657,256.61291Z" transform="translate(-251.01857 -134.26838)" fill="#2f2e41"/><rect x="477.80609" y="106.57286" width="5.2966" height="0.98345" fill="#2f2e41"/><rect x="461.08748" y="106.57287" width="5.2966" height="0.98345" fill="#2f2e41"/><path d="M729.67216,282.67032c1.03266-6.96775-7.125-5.5909-11.44243-5.65974a4.68023,4.68023,0,0,0-4.56309,5.65483,25.58847,25.58847,0,0,0-9.09208,5.01559,54.32367,54.32367,0,0,0,34.6322.38351A25.45685,25.45685,0,0,0,729.67216,282.67032Z" transform="translate(-251.01857 -134.26838)" fill="#2f2e41"/><path d="M708.7686,233.42855c4.87711-2.81868,10.79159-.65626,15.82946.526,9.55827,2.93829,22.962-.74109,24.12429-12.12714,1.20957-10.58923-13.27612-16.491-17.90609-5.95164l1.34812-.1762c-15.01567-22.31547-41.135-21.46913-40.96321,9.21072-.05567.94779,1.41969.94459,1.47487-.00057-.55282-18.07915,11.41221-30.43755,28.32579-18.8191a49.83115,49.83115,0,0,1,9.88878,10.3535c1.76146,1.974,2.14424-6.52733,10.57493-4.30063,9.27822,3.59448,6.25079,16.88013-2.04229,19.79671-10.24677,5.235-21.34437-4.915-31.39927.21394a.73844.73844,0,0,0,.74462,1.27441Z" transform="translate(-251.01857 -134.26838)" fill="#2f2e41"/><path d="M722.45862,292.18517a55.518,55.518,0,1,1,17.20421-2.7177A55.43053,55.43053,0,0,1,722.45862,292.18517Zm-.00009-108.17925A52.62192,52.62192,0,1,0,775.073,236.62033,52.674,52.674,0,0,0,722.45853,184.00592Z" transform="translate(-251.01857 -134.26838)" fill="#ccc"/><path d="M878.77449,236.94866l-82.40652.00007a6.51929,6.51929,0,0,1,0-13.03859l82.40652-.00006a6.51929,6.51929,0,1,1,0,13.03858Z" transform="translate(-251.01857 -134.26838)" fill="#e6e6e6"/><path d="M905.66659,258.95125l-109.2986.00009a6.5193,6.5193,0,1,1,0-13.03859l109.2986-.00009a6.51929,6.51929,0,0,1,0,13.03859Z" transform="translate(-251.01857 -134.26838)" fill="#e6e6e6"/><path d="M878.6546,343.34041l-205.24145.00017a6.5193,6.5193,0,0,1,0-13.03859l205.24145-.00016a6.51929,6.51929,0,1,1,0,13.03858Z" transform="translate(-251.01857 -134.26838)" fill="#e6e6e6"/><path d="M905.5467,365.343l-232.13353.00019a6.5193,6.5193,0,1,1,0-13.03859l232.13353-.00019a6.51929,6.51929,0,0,1,0,13.03859Z" transform="translate(-251.01857 -134.26838)" fill="#e6e6e6"/><path d="M878.65466,415.91346l-205.24145.00017a6.5193,6.5193,0,0,1,0-13.03859l205.24145-.00017a6.51929,6.51929,0,0,1,0,13.03859Z" transform="translate(-251.01857 -134.26838)" fill="#e6e6e6"/><path d="M905.54676,437.91605l-232.13353.00019a6.5193,6.5193,0,1,1,0-13.03859l232.13353-.00019a6.51929,6.51929,0,0,1,0,13.03859Z" transform="translate(-251.01857 -134.26838)" fill="#e6e6e6"/><path d="M878.65472,488.4865l-205.24145.00017a6.51929,6.51929,0,1,1,0-13.03858l205.24145-.00017a6.51929,6.51929,0,1,1,0,13.03858Z" transform="translate(-251.01857 -134.26838)" fill="#e6e6e6"/><path d="M905.54682,510.48909l-232.13353.00019a6.51929,6.51929,0,1,1,0-13.03858l232.13353-.00019a6.51929,6.51929,0,0,1,0,13.03858Z" transform="translate(-251.01857 -134.26838)" fill="#e6e6e6"/><path d="M759.44128,727.29276H468.21675a13.84469,13.84469,0,0,1-13.8291-13.8291V318.11416a13.84469,13.84469,0,0,1,13.8291-13.8291H759.44128a13.84469,13.84469,0,0,1,13.8291,13.8291v395.3495A13.84469,13.84469,0,0,1,759.44128,727.29276Z" transform="translate(-251.01857 -134.26838)" fill="#fff"/><path d="M492.50562,406.06388a53.92579,53.92579,0,0,0,15.90227,38.3102c.42306.418.85572.83593,1.29318,1.24407a54.01435,54.01435,0,0,0,8.58572,6.54484c.58992.36388,1.18009.713,1.7849,1.0523a53.78428,53.78428,0,0,0,9.77541,4.29274c.58512.19178,1.18009.37372,1.77506.54089a54.31267,54.31267,0,0,0,32.85714-.92442c.20649-.07377.413-.14754.61465-.22128a54.09429,54.09429,0,1,0-72.58833-50.83934Z" transform="translate(-251.01857 -134.26838)" fill="#fff"/><path d="M535.17257,432.57549a16.7613,16.7613,0,0,1-4.32915,11.347c-2.78119,3.05219-6.92159,5.07636-11.09981,4.23887-3.84733-.77116-6.97372-4.13377-6.58368-8.2017a6.07575,6.07575,0,0,1,7.507-5.45575c3.65482.94846,5.11106,6.21585,2.0655,8.68824-.73081.59327-1.78071-.44431-1.04311-1.0431a3.68416,3.68416,0,0,0-1.03874-6.1067,4.62957,4.62957,0,0,0-6.03027,4.09386c-.24123,3.42942,2.38594,6.01205,5.60772,6.6201,3.48529.65777,6.94084-1.12607,9.30247-3.5882a15.22129,15.22129,0,0,0,4.16685-10.59263.738.738,0,0,1,1.47517,0Z" transform="translate(-251.01857 -134.26838)" fill="#2f2e41"/><circle cx="298.55851" cy="281.36823" r="26.31665" fill="#6c63ff"/><path d="M548.23067,426.86561l-.02737-.98344c1.82956-.05091,3.44254-.16567,4.65457-1.05116a3.02308,3.02308,0,0,0,1.171-2.22668,1.72808,1.72808,0,0,0-.56687-1.42331,2.97856,2.97856,0,0,0-3.04278-.02689l-.8137.37311,1.56041-11.40329.97432.1335-1.32727,9.7a3.47153,3.47153,0,0,1,3.28384.47252,2.69019,2.69019,0,0,1,.91478,2.20891,3.999,3.999,0,0,1-1.57361,2.98636C551.88066,426.76333,549.85686,426.82,548.23067,426.86561Z" transform="translate(-251.01857 -134.26838)" fill="#2f2e41"/><rect x="305.9402" y="276.82557" width="5.2966" height="0.98345" fill="#2f2e41"/><rect x="289.22159" y="276.82557" width="5.2966" height="0.98345" fill="#2f2e41"/><path d="M531.62216,458.04892a54.31267,54.31267,0,0,0,32.85714-.92442c.20649-.07377.413-.14754.61465-.22128a26.19511,26.19511,0,0,0-8.33481-4.30751,4.19325,4.19325,0,0,0-.00985-2.3111,4.651,4.651,0,0,0-4.49922-3.26506H545.838a4.63483,4.63483,0,0,0-4.48938,3.26013,4.21082,4.21082,0,0,0-.00984,2.316,26.222,26.222,0,0,0-7.43493,3.64367q-.68609.47945-1.32751,1.00313C532.2517,457.50311,531.93213,457.77355,531.62216,458.04892Z" transform="translate(-251.01857 -134.26838)" fill="#2f2e41"/><path d="M570.19319,412.84474c0,4.43536,2.18322,8.11345,5.02048,8.75271a4.05816,4.05816,0,0,0,.8802.09832c3.25023,0,5.90069-3.96821,5.90069-8.851a10.86875,10.86875,0,0,0-2.27182-6.97264,5.69356,5.69356,0,0,0-1.73592-1.41124,4.11422,4.11422,0,0,0-1.89295-.46715,4.3143,4.3143,0,0,0-2.51288.84578C571.57976,406.25566,570.19319,409.30925,570.19319,412.84474Z" transform="translate(-251.01857 -134.26838)" fill="#3f3d56"/><path d="M517.57873,412.84474c0,3.81579,1.61275,7.071,3.87473,8.31507a4.19952,4.19952,0,0,0,2.026.536,3.80084,3.80084,0,0,0,.472-.0295c3.02885-.35895,5.42865-4.17473,5.42865-8.82153,0-3.72235-1.53928-6.91363-3.71266-8.21668a4.21673,4.21673,0,0,0-2.188-.63435,4.11441,4.11441,0,0,0-1.89318.46715,5.72571,5.72571,0,0,0-1.74073,1.41617A10.88982,10.88982,0,0,0,517.57873,412.84474Z" transform="translate(-251.01857 -134.26838)" fill="#3f3d56"/><path d="M521.82146,420.31133a.73822.73822,0,0,0,.699-.97361,28.76517,28.76517,0,1,1,55.411-3.23294.73762.73762,0,0,0,1.44348.30445,30.24147,30.24147,0,1,0-58.25236,3.40005A.738.738,0,0,0,521.82146,420.31133Z" transform="translate(-251.01857 -134.26838)" fill="#3f3d56"/><path d="M562.79721,398.58574a3.688,3.688,0,0,1-.56959,4.56579c-1.4287,1.59585-3.707,1.69653-5.68522,1.40034-2.21979-.33237-4.57431-1.37236-6.82165-.67151-1.91544.59735-3.28185,2.33468-5.27182,2.77105-1.76481.387-3.87518-.12528-4.49385-2.00631-.29729-.9039,1.12675-1.29132,1.42248-.39216.40024,1.21691,2.1285,1.19265,3.11824.85566,1.58674-.54024,2.80958-1.85431,4.36916-2.482a9.56045,9.56045,0,0,1,5.70559.01564c1.76446.39733,3.79511.98642,5.55287.24422,1.30069-.54921,2.33562-2.27912,1.4-3.5562-.56165-.76665.71784-1.50339,1.27376-.74455Z" transform="translate(-251.01857 -134.26838)" fill="#2f2e41"/><path d="M546.59524,461.62868a55.46229,55.46229,0,0,1-15.382-2.16258c-.58759-.16495-1.205-.35294-1.82518-.55607a55.4155,55.4155,0,0,1-10.04-4.40919c-.59881-.3359-1.1999-.69028-1.8355-1.08212a55.612,55.612,0,0,1-8.81874-6.72279c-.44676-.41681-.88951-.84467-1.32241-1.272a55.56016,55.56016,0,1,1,58.22678,12.86574c-.20294.07419-.41291.1491-.62293.224A55.4364,55.4364,0,0,1,546.59524,461.62868Zm0-108.17925a52.61688,52.61688,0,0,0-37.1458,89.88006c.40817.40313.83075.8113,1.258,1.2101a52.66784,52.66784,0,0,0,8.3521,6.367c.60217.3712,1.1688.70518,1.73382,1.02211a52.44556,52.44556,0,0,0,9.50938,4.17629c.58392.19136,1.16088.36711,1.71833.52366a52.8369,52.8369,0,0,0,31.97052-.8963l.596-.21464a52.62112,52.62112,0,0,0-17.99234-102.06824Z" transform="translate(-251.01857 -134.26838)" fill="#ccc"/><path d="M759.44128,727.29276H468.21675a13.84469,13.84469,0,0,1-13.8291-13.8291V318.11416a13.84469,13.84469,0,0,1,13.8291-13.8291H759.44128a13.84469,13.84469,0,0,1,13.8291,13.8291v395.3495A13.84469,13.84469,0,0,1,759.44128,727.29276ZM468.21675,305.912a12.216,12.216,0,0,0-12.20214,12.20215v395.3495a12.216,12.216,0,0,0,12.20214,12.20215H759.44128a12.216,12.216,0,0,0,12.20215-12.20215V318.11416A12.216,12.216,0,0,0,759.44128,305.912Z" transform="translate(-251.01857 -134.26838)" fill="#3f3d56"/><path d="M703.06369,406.96529H620.65717a6.51929,6.51929,0,1,1,0-13.03858h82.40652a6.51929,6.51929,0,1,1,0,13.03858Z" transform="translate(-251.01857 -134.26838)" fill="#6c63ff"/><path d="M729.95577,428.9679H620.65717a6.51929,6.51929,0,1,1,0-13.03858h109.2986a6.51929,6.51929,0,0,1,0,13.03858Z" transform="translate(-251.01857 -134.26838)" fill="#6c63ff"/><path d="M702.94371,513.357H497.70226a6.51929,6.51929,0,0,1,0-13.03858H702.94371a6.51929,6.51929,0,0,1,0,13.03858Z" transform="translate(-251.01857 -134.26838)" fill="#ccc"/><path d="M729.83579,535.35965H497.70226a6.51929,6.51929,0,0,1,0-13.03858H729.83579a6.51929,6.51929,0,0,1,0,13.03858Z" transform="translate(-251.01857 -134.26838)" fill="#ccc"/><path d="M702.94371,585.93009H497.70226a6.5193,6.5193,0,0,1,0-13.03859H702.94371a6.51929,6.51929,0,0,1,0,13.03859Z" transform="translate(-251.01857 -134.26838)" fill="#ccc"/><path d="M729.83579,607.9327H497.70226a6.5193,6.5193,0,0,1,0-13.03859H729.83579a6.51929,6.51929,0,0,1,0,13.03859Z" transform="translate(-251.01857 -134.26838)" fill="#ccc"/><path d="M702.94371,658.50313H497.70226a6.51929,6.51929,0,0,1,0-13.03858H702.94371a6.51929,6.51929,0,0,1,0,13.03858Z" transform="translate(-251.01857 -134.26838)" fill="#ccc"/><path d="M729.83579,680.50574H497.70226a6.51929,6.51929,0,0,1,0-13.03858H729.83579a6.51929,6.51929,0,1,1,0,13.03858Z" transform="translate(-251.01857 -134.26838)" fill="#ccc"/><path d="M756.06216,637.26838a64.2316,64.2316,0,1,0-.00044,128.46312h.00044a64.23166,64.23166,0,0,0,0-128.46312Z" transform="translate(-251.01857 -134.26838)" fill="#6c63ff"/><path id="ba2462e0-2d61-4715-874d-575d790dfdd0-6" data-name="f276b720-7c73-4755-84a7-b208d54eb1fc" d="M749.96756,728.17569a7.79562,7.79562,0,0,1-4.68966-1.55861l-.084-.06287-17.66375-13.5121a7.84966,7.84966,0,0,1,9.55173-12.45925l11.44118,8.77354,27.03609-35.27147A7.84631,7.84631,0,0,1,786.56,672.6317l.00015.00014.00223.00164-.1678.233.17226-.233a7.85576,7.85576,0,0,1,1.4513,11.003L756.21792,725.105a7.85071,7.85071,0,0,1-6.24352,3.0612Z" transform="translate(-251.01857 -134.26838)" fill="#fff"/></svg>
    </div>

    <div class="flex justify-center  up">
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="button" class="btn btn-dark mx-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Creer
                une Offre</button>

            <a href="{{ route('voirlesoffresemplois') }}"><button type="button" class="btn btn-outline-dark mx-2">Voir
                    toutes les Offres</button></a>


            <button type="button" class="btn btn-outline-dark mx-2" data-bs-toggle="modal" data-bs-target="#staticBackdropindices">Indices de Performances</button>


            @if ($exists==false  && $existsdeux === false)
                <button type="button" class="btn btn-dark mx-2" data-bs-toggle="modal"
                    href="#exampleModalToggleUn">Gestion Candidatures</button>
                    @elseif ($exists == false && $existsdeux === true ) 
                    <button type="button"
                    class="btn btn-dark position-relative animate__animated animate__headShake animate__infinite	infinite"
                    data-bs-toggle="modal" href="#exampleModalToggleUn">
                    Gestion Candidatures
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        + 
                    <span class="visually-hidden">unread messages</span>
                    </span>
                </button>
            @elseif ($exists == true && $existsdeux == true )
                <button type="button"
                    class="btn btn-dark position-relative animate__animated animate__headShake animate__infinite	infinite"
                    data-bs-toggle="modal" href="#exampleModalToggleUn">
                    Gestion Candidatures
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        + 
                    <span class="visually-hidden">unread messages</span>
                    </span>
                </button>
                @elseif ($exists == true && $existsdeux == false )
                <button type="button"
                class="btn btn-dark position-relative animate__animated animate__headShake animate__infinite	infinite"
                data-bs-toggle="modal" href="#exampleModalToggleUn">
                Gestion Candidatures
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    + 
                <span class="visually-hidden">unread messages</span>
                </span>
            </button>
            @endif
        </div>


    </div>

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" data-bs-backdrop="static" id="exampleModal" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Creer une offre...</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('recrutement') }}" method='post'>

                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Titre de l'Ofrre</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name='titre'>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Description de l'Offre</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='description'></textarea>
                        </div>
                        <button class='btn btn-dark' type='submit'>Soumettre</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- modal pour les candiatures et formulaire specifique -->

    <div class="modal fade" id="exampleModalToggleUn" data-bs-backdrop="static" aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">...</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class=" flex justify-center btn-group" role="group" aria-label="Basic mixed styles example">
                        @if ($existsdeux ==false )
                        <button type="button" class="btn btn-dark mx-2 px-3" data-bs-toggle="modal" data-bs-dismiss="modal"
                        href="#exampleModalToggle2">Sondage</button>
                        @elseif ($existsdeux ==  true )
                        <button type="button" class="btn btn-dark mx-2 px-3" data-bs-toggle="modal" data-bs-dismiss="modal"
                        href="#exampleModalToggle2">Sondage
                        <span
                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        +
                        <span class="visually-hidden">unread messages</span>
                    </span>
                    </button>
               
                        @endif
                        
                        @if ($exists ==false)
                            <a href="{{ route('voirtouteslescandidatures') }}"><button type="button" class="btn btn-dark mx-2" >Voir les Candidatures</button></a>
                        @elseif ($exists==true)
                        <a href="{{ route('voirtouteslescandidatures') }}"> <button type="button" class="btn btn-dark position-relative " >
                                Voir les candidatures
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    +
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </button></a>
                        @endif

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle2" data-bs-backdrop="static" aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">Sondage...</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   L'application <strong>GestoRH</strong>  vous prpopse des questions stratégiques et incontournables pour évaluer les compétences, la motivation, et l'adéquation du candidat avec le poste et l'entreprise.
                   <p>Ces questions permettent de dresser un portrait complet du candidat et de s'assurer qu'il est bien adapté au poste et à la culture de l'entreprise.</p>
                   <p>Lors d'un sondage de recrutement, il est important d'utiliser une combinaison de questions ouvertes, fermées, à choix unique et multiples pour obtenir une vue complète des compétences, de l'expérience et de la motivation du candidat.</p>
                   <p>Nous vous proposons ainsi 15 questions stratégiques et incontournables, concues par des experts en recrutement </p>
                   <p>qui vous permettront d'obtenir une vue d'ensemble complète du candidat, en couvrant ses compétences, motivations, expériences passées, et sa disponibilité.</p>
                   <p>Nous nous sommes assuré que chaque question apporte une valeur ajoutée au processus de sélection et que le sondage soit structuré de manière à obtenir les informations les plus pertinentes tout en respectant le temps des candidats.</p>
                   <p>Nous avons choisis de vous proposer des questions pré-définies pour vos sondages de recrutement pour plusieurs raisons pertinentes parmis lesquelles :</p>
                   <p><strong>1 : Standardisation :</strong> Les questions pré-définies assurent que tous les candidats sont évalués sur les mêmes critères, ce qui facilite la comparaison des réponses et la prise de décision.</p>
                   <p><strong>2 : Gain de Temps :</strong> Les recruteurs n'ont pas besoin de créer des questions, ce qui accélère le processus de création du sondage.</p>
                   <p><strong>3 : Cohérence :</strong> En utilisant des questions pré-définies, vous garantissez que les sondages sont cohérents et alignés avec les exigences du poste.</p>
                   <p><strong>4 : Qualité des Questions :</strong> Les questions sont conçues par des experts en recrutement pour s'assurer qu'elles sont pertinentes et efficaces pour évaluer les candidats.</p>
                </div>
                <div class="modal-footer ">
                    <span><button class='btn btn-outline-dark mx-4'data-bs-toggle="modal" data-bs-dismiss="modal"
                        href="#exampleModalToggle4">Voir les questions...</button></span>
                        @if ($existsdeux ==false )
                        <span><a href="{{ route('toutlessondagescandidats') }}"><button class='btn btn-dark mx-4'>Voir les reponses aux Sondages</button></a></span>
                        @elseif ($existsdeux ==true)
                        <span><a href="{{ route('toutlessondagescandidats') }}"><button class='btn btn-dark mx-4 animate__animated animate__headShake animate__infinite	infinite'>Voir Reponses aux Sondages
                            <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            +
                            <span class="visually-hidden">unread messages</span>
                        </span>
                        </button></a></span>
                        @endif
                        <button class="btn btn-dark mx-4" data-bs-target="#exampleModalToggleUn" data-bs-toggle="modal"
                        data-bs-dismiss="modal">
                        <<</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalToggle3" data-bs-backdrop="static" aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel3">...</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class=" modal-body">

                          <div class='flex justify-center lg:col-start-2 '>
                    <table class="shadow-sm table table-light table-striped cons">
                        <thead>
                            <tr>
                                <th class='text-center'>#</th>
                                <th class='text-center'>Nom</th>
                                <th class='text-center'>Prenom</th>
                                <th class='text-center'>Email</th>
                                <th class='text-center'>Telephone</th>
                                <th class='text-center'>Titre de l'Offre</th>
                                <th class='text-center'>Reference Offre</th>
                                <th class='text-center'>CV</th>
                                <th class='text-center'>Selectionner</th>
                                <th class='text-center'>Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($candidats as $candidat)
                                <tr>
                                    <td class='text-center'></td>
                                    <td class='text-center'> {{ $candidat->name }}</td>
                                    <td class='text-center'> {{ $candidat->prenom }}</td>
                                    <td class='text-center'> {{ $candidat->email }}</td>
                                    <td class='text-center'> {{ $candidat->telephone }}</td>
                                    <td class='text-center'> {{ $candidat->offreemploi->titre }}</td>
                                    <td class='text-center'> {{ $candidat->offreemploi->reference }}</td>

                                    <td class='text-center'> <a href="{{ asset('storage/' . $candidat->cv) }}"
                                            target="_blank">Télécharger le CV</a></td>
                                   
                                  
                                      @if ($candidat->selectionne === 'non')
                                      <td class='text-center'>
                                          
                                        <a href="{{ route('updatevucandidate', ['id' => $candidat->id]) }}"> <button   class='btn btn-dark'  >
                                           
                                           ? </button></a></td>
                                           @elseif ($candidat->selectionne === 'oui')
                                           <td class='text-center'>
                                          
                                            <i class="fa-regular fa-thumbs-up"></i></td>
                                      @endif
                                      
                                        </form>
                                  
                                    <td class='text-center'>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                value="{{ $candidat->id }}" id="flexCheckDefault{{ $candidat->id }}"
                                                name='checks[]' /><span><i
                                                    class="fa-regular fa-trash-can delete-icon"></i></span>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                  </div>
                    <div class='d-flex justify-content-center my-4 linkss'>
                      {{ $candidats->links() }}
                  </div>
                </div>


                <div class="modal-footer">
                   <button class="btn btn-dark mx-4"
                        data-bs-target="#exampleModalToggleUn" data-bs-toggle="modal" data-bs-dismiss="modal">
                        <<</button>
                </div>
            </div>
        </div>
    </div>
  

    <div class="modal fade" id="exampleModalToggle4" data-bs-backdrop="static" aria-hidden="true"
    aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel2">Formulaire...</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body mod">
<h2><strong>Sondage</strong></h2><br/>
<p> <em>Prise de contact :</em></p>

        <p><strong>Question 1 : </strong>Parlez nous de vous</p>
        <p><strong>Type : </strong> Question ouverte</p>
        <p><strong>But :</strong><em> obtenir une vue d'ensemble du candidat, de ses compétences et de son adéquation avec le poste et l'entreprise.</em>
            <p><em>  Elle sert également à établir un premier contact et à évaluer la capacité du candidat à se communiquer efficacement.</em></p>
      
<hr/><br/>
    <p> <em>Connaissance de l'entreprise :</em></p>

        <p><strong>Question 2 : </strong>Que savez-vous de notre entreprise et de ses valeurs ?</p>

        <p><strong>Type : </strong> Question ouverte</p>
        <p><strong>But :</strong><em> Evaluer l'intérêt, la préparation, et la compatibilité du candidat avec l'entreprise</em>
            <p><em> Elle offre également un aperçu de la manière dont le candidat perçoit l'entreprise et comment il envisage de s'intégrer et de contribuer à ses objectifs et sa culture.</em></p>
      
        <hr/><br/>
       <p><em>Motivation pour le poste :</em></p> 
      
<p><strong>Question 3 : </strong>Pourquoi souhaitez-vous travailler pour notre entreprise et dans ce poste spécifique ?</p>
 <p><strong>Type : </strong>Type : Question ouverte</p>
 <p><strong>But :</strong><em>Evaluer non seulement la compatibilité culturelle et professionnelle du candidat avec l'entreprise, mais aussi son engagement et sa motivation, des facteurs clés pour une intégration réussie et une performance à long terme.</em></p>
 <hr/><br/>
 <p><em>Connaissance sur le candidat</em></p>
 <p><strong>Question 4 : </strong>Quel est le principal facteur qui vous motive le plus dans votre travail ?</p>
<p><strong>Options :</strong></p>
<p>Opportunités de développement professionnel</p>
<p>Reconnaissance</p>
<p>Salaire</p>
<p>Équilibre vie professionnelle/vie personnelle</p>

<p><strong>Type : </strong>Question å choix unique</p>
<p><strong>But :</strong> <em>Comprendre ce qui motive le candidat pour évaluer l'adéquation avec les offres de l'entreprise.</em></p>
<hr/><br/>
<p><em>Connaissance sur le candidat</em></p>
<p><strong>Question 5 : </strong>Quelle est votre prétention salariale ?</p>
<p><strong>Type : </strong> Question ouverte</p>
    <p><strong>But :</strong> <em>    Aligner les attentes salariales avec les capacités financières de l'entreprise, à évaluer la valeur perçue du candidat et à préparer des offres qui sont à la fois attrayantes pour le candidat et réalistes pour l'entreprise.</em>
       
    <hr/><br/>
    <p><em>Connaissance sur le candidat</em></p>
<p><strong>Question 6 : </strong>Quels sont vos objectifs professionnels à court et à long terme ?</p>
<p><strong>Type : </strong>Question Ouverte</p>
<p><strong>But :</strong>  Évaluer les aspirations du candidat et leur alignement avec les opportunités offertes par l'entreprise.
    <hr/><br/>

    <p><em>Connaissance sur le candidat</em></p>
    <p><strong>Question 7 : </strong>Comment évaluez-vous votre niveau de compétence (compétences relatives au poste) ?</p>
    <p><strong>Options :</strong></p>
<p>Débutant</p>
<p>Intermédiaire</p>
<p>Avancé</p>
<p>Expert</p>
<p><strong>Type : </strong>Question å choix unique</p>
<p><strong>But :</strong> Obtenir une auto-évaluation du niveau de compétence du candidat dans une compétence clé pour le poste.</p>
<hr/><br/>
<p><em>Connaissance sur le candidat</em></p>

<p><strong>Question 8 : </strong>Pouvez-vous décrire une situation professionnelle difficile que vous avez rencontrée et comment vous l'avez résolue ?</p>
<p><strong>Type : </strong>Question Ouverte</p>
<p><strong>But :</strong>  Évaluer les compétences en résolution de problèmes et la capacité à gérer les situations difficiles.</p>
<hr/><br/>


<p><strong>Question 9 : </strong>Comment gérez-vous la pression et les délais serrés ? Donnez un exemple concret.</p>
<p><strong>Type : </strong>Question Ouverte</p>
<p><strong>But :</strong> Évaluer les compétences du candidat en gestion du stress et en respect des délais.</p>
<hr/><br/>
<p><em>Connaissance sur le candidat</em></p>

<p><strong>Question 10 : </strong>Avez-vous des restrictions géographiques concernant les déplacements pour le travail ?</p>
<p><strong>Options :</strong></p>
 <p>Oui</p> 
  <p>Non</p>
  <p><strong>Type : </strong>Question å choix unique</p>
<p><strong>But :</strong> Vérifier si le candidat est flexible en termes de mobilité, surtout si le poste nécessite des déplacements.</p>

<hr/><br/>
<p><em>Connaissance sur le candidat</em></p>

<p><strong>Question 11 : </strong>Parlez nous de vos précédents employeurs</p>
<p><strong>Type : </strong>Question Ouverte</p>
<hr/><br/>
<p><em>Connaissance sur le candidat</em></p>

<p><strong>Question 12 : </strong> Quels outils ou technologies spécifiques maîtrisez-vous qui seraient utiles pour ce poste ?</p>
<p><strong>Type : </strong>Question Ouverte</p>
<hr/><br/>
   
<p><em>Connaissance sur le candidat</em></p>

<p><strong>Question 13 : </strong> Quels types de formations ou de soutiens pensez-vous avoir besoin pour exceller dans ce rôle ?</p>
<p><strong>Type : </strong>Question Ouverte</p>
<hr/><br/>

<p><em>Connaissance sur le candidat</em></p>

<p><strong>Question 14 : </strong>Êtes-vous disponible pour commencer à travailler dans un délai d'une semaine ?</p>
<p><strong>Options :</strong></p>
<p> Oui </p>
<p> Non</p>
<p><strong>Type : </strong>Question å  choix unique</p>
<p><strong>But :</strong> Vérifier la disponibilité du candidat pour répondre aux besoins immédiats de l'entreprise.</p>
<hr/><br/>
<p><em>Connaissance sur le candidat</em></p>
<p><strong>Question 15 : </strong>Comment avez vous decouvert cette offre d'emploi ?</p>
<p><strong>Options :</strong></p>
<p> Sites d'emploi en ligne </p>
<p> Réseaux sociaux </p>
<p>Sites web d'entreprise</p>
<p>Agences de recrutement </p>
<p>Forums et groupes spécialisés</p>
<p>Journaux et magazines</p>
<p>Écoles et universités</p>
<p>Événements de recrutement</p>
<p>Bulletins internes</p>
<p><strong>Type : </strong>Question å  choix unique</p>
<p>Partenariats avec des associations professionnelles</p>
<p><strong>But :</strong>Identifier les canaux de recrutement (réseaux sociaux, agences de recrutement, sites d'emploi, etc.) les plus efficaces,
pour concentrer les efforts et les ressources sur elles.
    </p>



            </div>
            <div class="modal-footer ">
                <button class="btn btn-dark mx-4" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                    data-bs-dismiss="modal">
                    <<</button>
            </div>
        </div>
    </div>
</div>

   
<!-- debut modal indice de performance -->

<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdropindices" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Indices de performances...</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body flex justify-center lg:col-start-2 ">
            <div class="btn-group" role="group" aria-label="Basic outlined example">
                <a href="{{ route('coutparemploye') }}"><button type="button" class="btn btn-dark mx-2">Cout par embauche</button></a>
               
                <a href="{{ route('graphiquecanauxrecrutement') }}"><button type="button" class="btn btn-dark mx-2">Canaux de recrutement</button></a>
              </div>
        </div>
        
      </div>
    </div>
  </div>


<!-- fin modal indice de performance-->
    






    <!-- fin modal pour candidature -->




</x-app-layout>

<style>

    .svg{
height: 300px !important;
width: 300px !important;
    }
    .reds{
        color: red !important
    }
    .mod{
        height: 500px;
    }
  .fa-thumbs-up{
    color: green;
   font-size: 25px
  }
    .ins {
        margin-top: -2px;
       
    }

    .cons {
        width: 70%;
    }

    .digit {
        font-weight: bold;
    }

    #ims {
        height: 480px;
        width: 480px;
    }

    .up {
        position: relative;
        top: 60px;
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
