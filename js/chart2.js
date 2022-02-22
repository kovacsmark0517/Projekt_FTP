var ctx = document.getElementById('doughnut').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Sport', 'Alvás', 'Étkezés', 'Munka'],

        datasets: [{
            label: 'Beosztás',
            data: [25,25,25,25],
            backgroundColor: [
            'rgba(41, 155, 99, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(120, 46, 139,1)'

            ],
            borderColor: [
                'rgba(0, 255, 0,)',
                'rgba(0, 255, 0,)',
                'rgba(0, 255, 0,)',
                'rgba(0, 255, 0,)'

            ],
            borderWidth: 1
        }]

    },
    options: {
        responsive: true
    }
});