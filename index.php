<html>
    <head>
        <title>Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>       
    </head>
    <body>
            <div id="offcanvas-nav" uk-offcanvas="overlay: true">
            <div class="uk-offcanvas-bar">

                <ul class="uk-nav uk-nav-default">
                    <li class="uk-active"><a href="#">Active</a></li>
                    <li class="uk-parent">
                        <a href="#">Parent</a>
                        <ul class="uk-nav-sub">
                            <li><a href="#"></a>Item</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
            
                <nav class="uk-navbar-container uk-padding" uk-navbar>

            <div class="uk-navbar-left">

                <ul class="uk-navbar-nav">
                    <li class="uk-active"><a href="#">LOGO</a></li>
                    <li>
                    

            </div>

            <div id="scroll-home" class="uk-navbar-right">
            <a class="uk-navbar-toggle uk-hidden@m" uk-toggle="target: #offcanvas-nav"uk-navbar-toggle-icon href=""></a>
                <ul class="uk-navbar-nav uk-visible@m"> 
                    <li class="uk-active"><a href="#scroll-home" uk-scroll="offset : 50">Home</a></li>
                    <li>
                        <a href="#scroll-profile" uk-scrcoll="offset : 120">Profile</a>                                             
                     
                    </li>
                    <li><a href="#scroll-skill" uk-scroll="offset : 50">Skill</a></li>
                </ul>

            </div>

            </nav>
            <div  id="" class="uk-height-large " uk-grid>
            <div class="uk-width-1-1 uk-backgroud-cover uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="./pexels1.jpeg" uk-img>
                <h1 style="color : black; font-size : 50px;"> Hello Im DewaDe</h1>
            </div>
            </div>
                    <div id="scroll-profile" class="uk-child-width-expand@s uk-padding"  uk-grid>
            <div class="uk-grid-item-match ">
                <div class="uk-card uk-card-default uk-card-body">
                   <img src="./483376.jpg" alt="">
                </div>
            </div>
                <h3>Profil</h3>
                <p>
                Saya adalah orang yang memiliki keinginan untuk menjadi Web Designer yang memiliki kemampuan yang tidak sempurna hanya cukup. Saya adalah atlet Panahan, Semoga Dengan filosofi panahan yang di berikan oleh para senior- senior saya yaitu fokus, rajin , doa, dan usaha yang keras akan mencapai hasil yang maksimal, semoga dengan filosofi ini saya yakin akan sangat berguna nantinya untuk pekerjaan saya dan tentunya untuk masa depan saya. Karena orang tua saya pernah bilang sama saya bahwa usaha dan kerja kerasmu tidak akan pernah menghianati hasilmu.
                </p>
            <p uk-margin>
            <button class="uk-button uk-button-default uk-padding">View</button>
            <button class="uk-button uk-button-primary uk-padding">Contac</button>
            </p>
            </div>
        </div>
        <br><br>
        <div id="scroll-skill">
        <h1 style=" text-align : center;">My Skill</h1>
        <br><br>
            <div class="uk-child-width-expand@s" uk-grid>
        <div class="uk-grid-item-match uk-padding">
            <div class="uk-card uk-card-default uk-card-body">
            <h5 class="uk-margin-remove-top">HTML <span class="uk-text-bold">70/100</span></h5>
            <progress id="js-progressbar1" class="uk-progress" value="10" max="100"></progress>

        <script>

            UIkit.util.ready(function () {

                var bar = document.getElementById('js-progressbar1');

                var animate = setInterval(function () {

                    bar.value += 10;

                    if (bar.value >= 70) {
                        clearInterval(animate);
                    }

                }, 1000);

            });

        </script>
        <h5 class="uk-margin-remove-top">css <span class="uk-text-bold">60/100</span></h5>
            <progress id="js-progressbar2" class="uk-progress" value="10" max="100"></progress>

        <script>

            UIkit.util.ready(function () {

                var bar = document.getElementById('js-progressbar2');

                var animate = setInterval(function () {

                    bar.value += 10;

                    if (bar.value >= 60 ) {
                        clearInterval(animate);
                    }

                }, 1000);

            });

        </script>
        <h5 class="uk-margin-remove-top">php <span class="uk-text-bold">50/100</span></h5>
            <progress id="js-progressbar3" class="uk-progress" value="10" max="100"></progress>

        <script>

            UIkit.util.ready(function () {

                var bar = document.getElementById('js-progressbar3');

                var animate = setInterval(function () {

                    bar.value += 10;

                    if (bar.value >= 50) {
                        clearInterval(animate);
                    }

                }, 1000);

            });

        </script>
            </div>
        </div>
        
        <div id="#scroll-skill">
            <h3>Hobby</h3>
            
            <div class="uk-inline uk-padding">
                <button class="uk-button uk-button-default" type="button">Panahan</button>
                <div uk-dropdown="mode:click">Archery is an activity using a bow to shoot an arrow. Evidence shows that the history of archery began 5,000 years ago which was used for hunting and later developed as a weapon in battle and later as a sport of accuracy.</div>

            </div>

            <div class="uk-inline uk-padding">
                <button class="uk-button uk-button-default" type="button">Olahraga Ringan</button>
                <div uk-dropdown="mode: click">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
            </div>
            <h3>Prestasi</h3>
            <div class="uk-inline uk-padding">
                <button class="uk-button uk-button-default" type="button">Prestasi Non Akademik</button>
                <div uk-dropdown="mode:click">Prestasi
                <ul>Juara 1 putra porprov gianyar (3 emas 1 perak) </ul>
                <ul>Juara 1 porjar provinsi</ul>
                <ul>Juara 2 surabaya open</ul>
                <ul>Juara 1 beregu putra surabaya open</ul>             
                </div>                       
                    </div>                    
                </div>
        </div>
        </div>
        <br><br>
        <footer>
            <div class="uk-container uk-padding">
                <p class="uk-text-center">&copy; 2019. By DewaDe.</p>
            </div>
        </footer>
            <br><br>
    </body>
</html>