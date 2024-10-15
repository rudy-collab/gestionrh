<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Canaux de Recrutement') }}
        </h2>
        <div class='flex justify-between lg:col-start-2'>
            <a href="{{ route('recrutement') }}"><button class='btn btn-dark'>
                    << </button></a>
        </div>
    
    </x-slot>

    <div class=" flex lg:justify-center lg:col-start-2 upe">


        <div class='shadow-lg upes px-4 py-4'>
            <canvas id="myChart"></canvas>
        </div>

    </div>

    <div class="flex lg:justify-center lg:col-start-2 up">

        <div>
            <!--  <video id="localVideo"  ></video> -->
            <!-- <video id="remoteVideo" ></video>-->
            <!-- <button class='btn btn-dark' id="startCall">Démarrer l'appel</button>-->
        </div>

    </div>


    </div>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const percentages = {!! json_encode(array_values($percentages)) !!};
        const maxPercentage = Math.max(...percentages);

        const ctx = document.getElementById('myChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Sites d\'emploi en ligne', 'Réseaux sociaux', 'Sites web d\'entreprise', 'Agences de recrutement ','Forums et groupes spécialisés', 'Journaux et magazines', 'Écoles et universités','Événements de recrutement','Partenariats avec des associations professionnelles'],
                datasets: [{
                    label: 'Pourcentage',
                    data: percentages,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 80, 122, 0.2)',
                        'rgba(50, 160, 235, 0.2)',
                        'rgba(255, 209, 56, 0.2)',
                        'rgba(70, 190, 190, 0.2)',
                        'rgba(50, 180, 180, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 80, 122, 0.2)',
                        'rgba(50, 160, 235, 0.2)',
                        'rgba(255, 209, 56, 0.2)',
                        'rgba(70, 190, 190, 0.2)',
                        'rgba(50, 180, 180, 0.2)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100
                    }
                }
            }
        });
    });
</script>

</x-app-layout>

<style>

    .upes{
        width: 70%;
    }
    #myChart{
        height: 500px;

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
