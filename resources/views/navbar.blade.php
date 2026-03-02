<center>
<div id="navbar">
    <div id="navbar-content">
        <!-- <img src="" alt="Muka gw disini" > -->
        <h1>Gui's Notes</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit et similique nisi dolor facilis ut quod vero sed esse unde.</p>
    </div>

    <div>
        <button class="button" onclick="window.location.href='{{ url("/") }}'">
            <a>Home</a>
        </button>
    
        <button class="button" onclick="window.location.href='{{ url("/material") }}'   ">
            <a>Material</a>
        </button>

        <button class="button" type="button" onclick="window.location.href='{{ url("/banksoal") }}'">
            <a>Bank Soal</a>
        </button>
        
        <button class="button" type="button" onclick="window.location.href='{{ url("/about") }}'">
            <a>About</a>
        </button>
    </div>
</div>
</center>