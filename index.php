<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TESTOWE</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function() {
  $("html").on("submit","#contact_form",function(e){
    e.preventDefault();
    $("#send_form_status").html('').hide();
    var data=$("#contact_form").serialize();
    $.post("/send_form.php",data,function(res){
      $("#send_form_status").html(res.msg).show();
      if(res.status==1){ 
        $("#contact_form")[0].reset();
      } 
    });
  });
});
</script>

</head>

<body>
    <header>
        <div class="container-fluid bg-dark py-2 alice">
            <div class="container">
                <h2>Konrad Nater <span class="badge badge-light" id="yo"> </span></h2>
                <div class="dropdown-divider col-6"></div>
                <h6 class="">Uczeń technikum TEB Edukacja oraz praktykant w firmie Setapp</h6>
            </div>
        </div>
    </header>
    <main>

        <section>
            <div class="container">
                <div class="row ">
                    <div class="col-md-8  bg-white place1 mt-3">
                        <div class="gray whitefont">
                            <h3 class="mt-3 flower ml-3"> O mnie</h3>
                        </div>
                        <img class="float-left rounded mr-2" src="img/setapp.png" alt="Setapp" width="90" height="90">
                        <p class="flower1"> Nazywam się Konrad Nater i jestem uczniem Technikum o kierunku informatycznym. Aktualnie odbywam praktyki w firmie <mark>Setapp.</mark>
                            </span> W przyszłości chciałbym zostać programistą. Nie jest to łatwa sprawa lecz wydaje się bardzo ciekawa oraz na pewno jest to również przyszłościowy zawód. Mam nadzieję, że moja przygoda z kodowaniem potrwa dużo dłużej
                            niż podczas tych praktyk.</p>
                        <p class="flower1"> Jak to mówią :)</p>
                        <blockquote class="blockquote">
                            <p> No pain no gain - Someone</p>
                        </blockquote>
                        <p class="lead"> Teraz pora opowiedzieć o swoich zainteresowaniach </p>
                        <div class="dropdown-divider"></div>
                        <div class="gray whitefont">
                            <h3 class=" flower ml-3"> Zainteresowania</h3>
                        </div>
                        <p class="flower1">Więc tak, zacznę od tego, że krąg moich zainteresowań do dużych nie należy aczkolwiek coś trzeba o sobie napisać wiec
                            <mark>here we go.</mark> </p>
                        <img src="img/usa.jpg" class="float-left rounded mr-2" alt="USA" width="100" height="100">
                        <p class="flower1">Jednym z moich zainteresowań w dodatku tym najważniejszym są Stany Zjednoczone. Uwielbiam patrzeć na infrastrukture tamtejszych
                            <mark> miast </mark>, na <mark>nature</mark> która tam się znajduje począwszy od<mark> słonecznej Kalifornii</mark> przez <mark>Teksas</mark> kończąc na wspaniałych drogach w<mark> Georgi.</mark></p>
                        </p>
                        <p class="flower1">Kolejnym moim zainteresowaniem są wszelkiego rodzaju alkohole leżakowane tj. <u>whisky</u>, <u>rum</u>, <u>brandy </u> czy też <u>wina</u> ( wykluczając te słodkie bo to jak kompot ;P). </p>
                        <img src="img/stonks.png" class="float-right rounded ml-2" alt="Stonks" width="100" height="100">

                        <p class="flower1">Ostatnio także zaczałem obserwować niektore akcje jak np. Tesla, Amazon czy też kryptowaluty bądź <mark>złoto</mark>, uważam że czym prędzej zacznie się obserwować rynek tym łatwiej w przyszłości będzie się w tym połapać. Wydaje
                            mi się, że to tyle o moich zainteresowaniach. </p>
                        <p class="lead"> Czas na ukończone szkoły, nie jest ich wiele z racji wieku ale dobrze, że są ;)</p>
                        <div class=" dropdown-divider "></div>
                        <div class="gray whitefont ">
                            <h3 class=" flower1  ml-3"> Wykształcenie / Ukończone szkoły</h3>
                        </div>
                        <ul>
                            <li class="flower1 ">Sportowa Szkoła podstawowa nr.29 w Poznaniu </li>
                            <li class="flower1 ">Gimnazjum nr.5 w Poznaniu</li>
                            <li class="flower1 ">Technikum TEB Edukacja</li>
                        </ul>


                    </div>

                    <div class="col-md-4 float-right mt-3 gray ">
                        <div class="text-center ">
                            <img src="img/ryj.jpg " class="img-fluid img-thumbnail mt-3  animated pulse" alt="Twarz " width="300 " height="300 ">
                        </div>
                        <div class="dropdown-divider "></div>

                        <div class="col-xs-4 card bg-dark whitefont">
                            <div class="card-body">
                                <h4 class="card-title "><u>Kontakt</u></h4>

                                <br>
                                <h6 class="card-subtitle mb-2"><u>Email</u></h6>
                                <p class="card-text whitefont">ZbigniewWodecki@wp.pl</p>
                                <br>
                                <h6 class="card-subtitle mb-2"><u>Nr.Tel</u></h6>
                                <p class="card-text whitefont">+48 123-456-789</p>
                                <br>
                                <div>
                                    <div class="mb-3">
                                        <div id="send_form_status">
                                            <form id="contact-form" method="post" action="/s.php">
                                                <p>Adres Email</p>
                                                <div class="dropdown-divider col-6"></div>
                                                <input type="text" name="email" class="form-control" id="email" placeholder="twoj_mail@gmail.com">
                                        </div>
                                        <div class="mb-3">
                                            <p>Napisz do mnie !</p>
                                            <div class="dropdown-divider col-6 "></div>
                                            <textarea class="form-control" name="message" id="message" rows="4" placeholder="Wpisz wiadomość"></textarea>
                                            <div class="text-center">
                                                <button class="btn bg-info mt-3" id="sendBtn">Wyślij mi wiadomośc no</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <img class="smile-face" src="img/smile.png" alt="SmileFace" width="100" height="100">
                        </div>
                    </div>

                </div>



            </div>
            </div>
        </section>



    </main>

    <script src="js/wiek.js"></script>
    <script type="text/javascript " src="js/jquery.min.js "></script>
    <script type="text/javascript " src="js/popper.min.js "></script>
    <script type="text/javascript " src="js/bootstrap.min.js "></script>
    <script type="text/javascript " src="js/mdb.min.js "></script>
    <script type="text/javascript "></script>

</body>

</html>