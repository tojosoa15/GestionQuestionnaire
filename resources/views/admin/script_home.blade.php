<script type="text/javascript" charset="UTF-8">
    (function($) {
        'use strict';
        // variable pour les clients les plus fidèles
        var doughnutPieOptions = {
            responsive: true,
            animation: {
                animateScale: true,
                animateRotate: true
            }
        };
        // var doughnutPieData = {
        // 	    datasets: [{
        // 	      data: [
        // 			  15, 30, 10, 25,
        // 			  ],
        // 	      backgroundColor: [
        // 	        'rgba(255, 99, 132, 0.5)',
        // 	        'rgba(54, 162, 235, 0.5)',
        // 	        'rgba(255, 206, 86, 0.5)',
        // 	        'rgba(75, 192, 192, 0.5)',
        // 	        'rgba(153, 102, 255, 0.5)',
        // 	        'rgba(255, 159, 64, 0.5)'
        // 	      ],
        // 	      borderColor: [
        // 	        'rgba(255,99,132,1)',
        // 	        'rgba(54, 162, 235, 1)',
        // 	        'rgba(255, 206, 86, 1)',
        // 	        'rgba(75, 192, 192, 1)',
        // 	        'rgba(153, 102, 255, 1)',
        // 	        'rgba(255, 159, 64, 1)'
        // 	      ],
        //     }],
        //     // These labels appear in the legend and in the tooltips when hovering different arcs
        //     labels: [
        //       'Lucie',
        //       'Jean',
        //       'Andromalala',
        //       'Raharison',
        //       'Albert',
        //     ]
        // };
        // Variables pour la somme marge par zone
        var doughnutPieOptions_2 = {
            responsive: true,
            animation: {
                animateScale: true,
                animateRotate: true
            }
        };
        var doughnutPieData_2 = {
            datasets: [{
                data: [15, 30, 10, 25,20],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(153, 102, 255, 0.5)',
                    'rgba(255, 159, 64, 0.5)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
            }],
            // These labels appear in the legend and in the tooltips when hovering different arcs
            labels: [
                'Madagascar',
                'Guadeloupe',
                'France',
                'Sénégal',
                'Maurice',
            ]
        };
        // Variables pour les 5 produits plus commandés
        var data = {
            labels: ["KIMIA", "BLACK OPAL", "TEST F"],
            datasets: [{
                label:'Produits',
                data: [100, 200, 150],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        };
        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 0
                }
            }

        };
        $(function() {

            // Les 5 produits plus commandé
            if ($("#dashboard-donut-chart_home").length) {
                $(function() {
                    var total = {{ $produit_total }};
                    var browsersChart = Morris.Donut({
                        element: 'dashboard-donut-chart_home',
                        data: [
                                @foreach($fiveProduit_moreOrder as $five_prod)
                            { label: "{{ $five_prod->nomproduit }}({{ $five_prod->nbproduit }})", value: "{{ $five_prod->nbproduit }}" },
                            @endforeach
                        ],
                        resize: true,
                        colors: ['#03a9f3', '#00c292', '#6610f2','#E91E63','#fb9678'],
                        formatter: function(value, data) {
                            var test = value / total * 100;
                            return parseFloat(test.toFixed(2)) + '%';
                        }
                    });

                    browsersChart.options.data.forEach(function(label, i) {
                        var legendItem = $('<span></span>').text(label['label']).prepend('<span>&nbsp;</span>');
                        legendItem.find('span')
                            .css('backgroundColor', browsersChart.options.colors[i]);
                        $('#legend').append(legendItem)
                    });
                });
            }

            // Les clients les plus fidèles
            if ($("#doughnutChart_home").length) {
                $(function() {
                    var browsersChart = Morris.Donut({
                        element: 'doughnutChart_home',
                        data: [
                                @foreach($loyal_customers as $loyal)
                            { label: "{{ $loyal->nom_personne }}"+' '+"{{ $loyal->prenom_personne }}", value: "{{ $loyal->nb }}" },
                            @endforeach
                        ],
                        resize: true,
                        colors: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)','rgba(75, 192, 192, 1)','rgba(153, 102, 255, 1)'],
                    });

                    browsersChart.options.data.forEach(function(label, i) {
                        var legendItem = $('<span></span>').text(label['label']).prepend('<span>&nbsp;</span>');
                        legendItem.find('span')
                            .css('backgroundColor', browsersChart.options.colors[i]);
                        $('#legend_clients').append(legendItem)
                    });
                });
            }

            // Somme marge par zone
            if ($("#doughnutChart_home_2").length) {
                var doughnutChartCanvas = $("#doughnutChart_home_2").get(0).getContext("2d");
                var doughnutChart = new Chart(doughnutChartCanvas, {
                    type: 'doughnut',
                    data: doughnutPieData_2,
                    options: doughnutPieOptions_2
                });
            }

            // Les 5 produits plus commandé par fournisseur
            if ($("#barChart_home").length) {
                var barChartCanvas = $("#barChart_home").get(0).getContext("2d");
                // This will get the first returned node in the jQuery collection.
                var barChart = new Chart(barChartCanvas, {
                    type: 'bar',
                    data: data,
                    options: options
                });
            }

        });
    })(jQuery);
</script>
