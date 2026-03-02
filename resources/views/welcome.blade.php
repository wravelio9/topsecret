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
    @include('navbar')

    <div id="main">
        <h2 id="title">Welcome to Gui's Notes</h2>

        <div style="margin: 20px; text-align: justify;">
            <p>
                Welcome to my personal website! This is a space where I share my thoughts, projects, and experiences. Feel free to explore the different sections and get to know more about me. Whether you're interested in my work, hobbies, or just want to say hi, I'm glad you're here. Enjoy your stay!
            </p>
        </div>

        <div style="margin: 20px; text-align: justify; background-color: red;">
            <p style="color: black; text-align: center;">
                <br>
                DO NOT SHARE TO ANYONE WITHOUT MY PERMISSION. <br>
                This website contains personal notes and materials that are meant for my own use. Sharing these materials without my consent is strictly prohibited. If you find any content that you think would be beneficial to others, please reach out to me directly, and we can discuss the possibility of sharing it in a way that respects my privacy and intellectual property rights. Thank you for understanding!
                <br>
            </p>
        </div>

    
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    @include('footer')
</body>
</html>