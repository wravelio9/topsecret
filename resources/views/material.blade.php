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
        <h2 id="title">Materials</h2>

        <div style="margin: 50px 200px 0px;">
            <div class="materials" class="card">
                <h5 class="card-title"><b>Mathematics Olimpiad</b></h5>
                    <a href="https://drive.google.com/drive/folders/19E9EQWtIr6FC_uUBueupO625UFY0iYJU" target="_blank">Folder Matematika from Olimpiade Bersama (Sc: OBER)</a> <br>
                    <a href="https://drive.google.com/drive/folders/1ZiFzDDkGPYmtVcCkOfgaM-ycWPZX4XKn" target="_blank">Pelatihan OSN-P 2024 from Scuola Olimpiade</a> <br>
                    <a href="https://drive.google.com/drive/folders/1l9KkqIiTFUUDYUzuq08uCumVPR7yE1Jm" target="_blank">Pelatihan OSN-P by Mandiri OSN (Butuh Akses)</a> <br>
            </div> 

            <div class="materials" class="card">
                <h5 class="card-title"><b>Informatics Olyimpiad</b></h5>
                    <a href="https://drive.google.com/drive/folders/1niFTx8MXcKqIkZaSuDP655Wp21lHyYxX" target="_blank">Recorder Infor 1</a> <br>
                    <a href="https://drive.google.com/drive/folders/1c9vwRPHcnwRV5w_X3gNwDl3GShmlnpjQ" target="_blank">PPT/Notes Infor 1</a> <br>
                    <a href="https://drive.google.com/drive/folders/1f0FndF1YVhNvREipNCCeeZF0FasrM107?usp=drive_link" target="_blank">Rekaman dan Materi 2</a> <br>
                    <a href="https://drive.google.com/drive/folders/116ANc8ym-6ZAhaxey9OovLWed7SYEnBE" target="_blank">Pelatihan Akbar OSNK (General)</a> <br>
            </div> 

            <div class="materials" class="card">
                <h5 class="card-title"><b>UTBK SNBT</b></h5>
                    <a href="https://drive.google.com/drive/folders/17ivugW-zjJOzNUQpdmKRG_FxwlVsAq9t?usp=drive_link" target="_blank"> Pelatihan UTBK by MeduCourse (Butuh Akses) </a> <br>
                    <a href="https://drive.google.com/drive/folders/1raxwxxQtqXkZD4PQvbGE54RCT_iugFRn" target="_blank">Latsol SNBT dan Kedinasan (Butuh Akses)</a>
                </div> 

            <div class="materials" class="card">
                <h5 class="card-title"><b>BackEnd</b></h5>
                    <a href="https://docs.google.com/spreadsheets/d/1IGvskMxz4cvv7Sa8C2BMLZkNSOz83uhboPD5_ux7g_s/edit" target="_blank">ExpressJS - BNCC TPM Tracker</a> <br>
                    <a href="https://www.youtube.com/playlist?list=PLDnB0_9ACrRokq0E-x2F55eQcyI3rfJmS" target="_blank">Laravel - BNCC LnT</a> <br>
            </div> 

            <div class="materials" class="card">
                <h5 class="card-title"><b>Data Mining</b></h5>
                    <a href="https://colab.research.google.com/drive/10kXH2uaiASguZX0rPTgfJ6GvxpYuoaPf?usp=sharing" target="_blank">Introduction to NumPy, Pandas, and Matplotlib</a> <br>
                    <a href="https://colab.research.google.com/drive/1srGQhbXR5CwSUa5_HBcZwxcLgZuaFGBV?usp=sharing" target="_blank">Machine Learning for Mental Health</a> <br>
                    <a href="https://youtube.com/playlist?list=PLDnB0_9ACrRq2FRjTH1oFY_Hr2BhqcI3h&si=L8x8joJWNLertaoP" target="_blank">ET BNCC Data Mining Recorder</a> <br>
            </div> 

            <div class="materials" class="card">
                <h5 class="card-title"><b>Other</b></h5>
                    <a href="https://www.jschallenger.com/" target="_blank">JavaScript Exercise</a> <br>
                    <a href="https://excel-practice-online.com/" target="_blank">MS Excel Practice Online</a> <br>
            </div> 
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    @include('footer')
</body>
</html>