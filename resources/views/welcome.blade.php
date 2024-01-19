<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Charts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://assets.codepen.io/1214815/internal/avatars/users/default.png?fit=crop&format=auto&height=512&version=100000&width=512"
                    alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                Charts-JS
            </a>
        </div>
    </nav>
    <div style="width: 60%; margin: auto;">
        <canvas id="barChart"></canvas>
    </div>
    <script>
        var ctx = document.getElementById('barChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json($data['labels']),
                datasets: [{
                    label: 'Data',
                    data: @json($data['data']),
                    backgroundColor: '#e6a95e',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <h3 style="text-align: center">From Db</h3>
    <div style="display: flex; justify-content: space-around;">
        <div style="width: 40%;">
            <canvas id="bar"></canvas>
        </div>
        <div style="width: 30%;">
            <canvas id="pie"></canvas>
        </div>
    </div>

    <script>
        var ctx = document.getElementById('bar').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Name', 'Email', 'Password', 'Remember_token'],
                datasets: [{
                    label: 'Data',
                    data: [
                        {{ $userCounts->name_count }},
                        {{ $userCounts->email_count }},
                        {{ $userCounts->password_count }},
                        {{ $userCounts->remember_token_count }},
                    ],
                    backgroundColor: '#FAEF5D',
                    borderColor: 'rgba(75, 192, 192, 1)',
                      borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <script>
        var ctx = document.getElementById('pie').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Name', 'Email', 'Password', 'Remember_token'],
                datasets: [{
                    label: 'Data',
                    data: [
                        {{ $userCounts->name_count }},
                        {{ $userCounts->email_count }},
                        {{ $userCounts->password_count }},
                        {{ $userCounts->remember_token_count }},
                    ],
                    backgroundColor: '#D24545',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.com/libraries/Chart.js"></script>
</body>

</html>
