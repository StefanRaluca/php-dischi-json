<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href='./assets/css/style.css' rel='stylesheet'>
    <title>PHP Dischi JSON</title>

</head>

<body>
    <div id='app'>
        <header>
            <h1>PHP Dischi JSON</h1>
        </header>
        <main>
            <div class="album" v-for="album in albums">
                <img :src="album.poster" alt="Poster">
                <div class="album_details">
                    <h2> {{album.title }} </h2>
                    <p> {{ album.author }} </p>
                    <p> {{ album.year }} </p>
                    <p> {{ album.genre }} </p>
                </div>
            </div>
        </main>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js'
        integrity='sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg=='
        crossorigin='anonymous' referrerpolicy='no-referrer'></script>
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <script src='./assets/js/app.js'></script>
</body>

</html>