<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Climate+Crisis&family=Gloock&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <div class="container-fluid text-center">

        <header>
            <div id="fixedmenu" class="card">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills">
                        <li class="nav-item">
                            <a class="nav-link active" href="#desk">Deskripsi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#hobi_sosmed">Hobi & Sosmed</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#tambahan">Tambahan</a>
                        </li>
                    </ul>
                </div>
            </div>
            <h1>Hai, Saya Faniel Sianipar</h1>
        </header>

        <main>
            <div id="desk" class="card pt-2 px-2" style="max-width: 350px; margin: auto; margin-bottom: 20px">
                <img src="faniel.jpg" class="card-img" alt="...">
                <div class="card-body">
                    <h4 class="card-title">Deskripsi Diri</h4>
                    <p class="card-text">Nama saya Faniel Sianipar. Saya berasal dari Tarutung, Sumatera Utara dan saya sekarang sedang berkuliah di Universitas Lampung.</p>
                    <a href="cv.pdf" class="btn btn-primary" target="_blank">Curriculum Vitae</a>
                </div>
            </div>

            <div id="hobi_sosmed" class="row" style="min-width: auto; max-width: 45em; margin: auto; margin-bottom: 20px">
                <div class="card col mx-2 pt-2 px-2">
                    <img src="hobi.jpeg" class="card-img" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Hobi</h4>
                        <p class="card-text">Hobi saya adalah bermain Game, bermain Bulutangkis dan bermain Bola Voli.</p>
                    </div>
                </div>

                <div class="card col mx-2 pt-2 px-2">
                    <img src="sosmed.jpeg" class="card-img" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Sosial Media</h4>
                        <p class="card-text">Kalau ada yang mau ditanyakan bisa menghubungi sosial media saya.</p>
                        <div class="row">
                            <a href="https://www.instagram.com/fanielsianipar/" class="btn btn-primary col mx-2" target="_blank">Instagram</a>
                            <a href="https://wa.me/+6281390464943" class="btn btn-primary col mx-2" target="_blank">WhatsApp</a>
                        </div>
                    </div>
                </div>

            </div>
        </main>

        <footer>
            <div id="tambahan" class="card" style="max-width: 500px; margin: auto; margin-bottom: 20px">
                <h2>Tambahan</h2>
                <p>Bingung mau ngisi apa lagi. Bingung mau ngisi apa lagi. Bingung mau ngisi lagi.</p>
            </div>
        </footer>

    </div>

    <script>
        //<![CDATA[
        const nav = document.querySelector('#fixedmenu');
        const navTop = nav.offsetTop;

        function stickyNavigation() {
            console.log('navTop = ' + navTop);
            console.log('scrollY = ' + window.scrollY);

            if (window.scrollY >= navTop) {
                document.body.classList.add('fixed-nav');
            } else {
                document.body.classList.remove('fixed-nav');
            }
        }

        window.addEventListener('scroll', stickyNavigation);
        //]]>
    </script>

</body>

</html>