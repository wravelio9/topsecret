<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Wilson</title>
</head>
<body>
    @include('navbar');

    <div id="main">
        <h2 id="title">Bank Soal</h2>

        <div style="margin: 50px 200px 0px;">
            <div class="materials" class="card">
                <h5 class="card-title"><b>Mathematics</b></h5>
                    <a href="https://drive.google.com/drive/folders/12SNhKfIZZE9dck5NO0DI1in8qAxhqm3V" target="_blank">Bank Soal OSN-K 2002 s/d 2023</a> <br>
                    <a href="https://drive.google.com/drive/folders/1ZiFzDDkGPYmtVcCkOfgaM-ycWPZX4XKn" target="_blank">Bank Soal Grinding OSN </a> <br>
                    <a href="https://drive.google.com/drive/folders/1l9KkqIiTFUUDYUzuq08uCumVPR7yE1Jm" target="_blank">Bank Soal PSN from IPB University</a> br

            </div> 
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    @include('footer')
</body>
</html>