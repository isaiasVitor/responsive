<!DOCTYPE html>
<html>
    <head>
        
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />

    <script src="https://code.jquery.com/jquery-1.9.1.min.js" integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="http://code.responsivevoice.org/responsivevoice.js"></script>

    <script type="text/javascript">

        function falarInicio() {
            responsiveVoice.speak("Use a seta esquerda ou direita para ouvir as opções");
            responsiveVoice.speak("Precione enter para ouvir o que possui na opção selecionada");
            $("#inicio").focus();
        }

        window.onload = function() {
            responsiveVoice.setDefaultVoice("Brazilian Portuguese Female");

            responsiveVoice.speak("A página está carregada...");
            falarInicio();


            $("#imageLula").hide();
            $("#imageBolsonaro").hide();

            $("#imageMotoqueiro").hide();

            $("#inicio").keydown(function(e) {
                if (e.which == 37) { // Esquerda
                    $("#piada").focus();
                } else if (e.which == 39) { // Direita     
                    $("#dataAtual").focus();
                }
            });

            $("#dataAtual").keydown(function(e) {
                if (e.which == 37) { // Esquerda
                    $("#inicio").focus();
                } else if (e.which == 39) { // Direita     
                    $("#piada").focus();
                }
            });

            $("#piada").keydown(function(e) {
                if (e.which == 37) { // Esquerda
                    $("#dataAtual").focus();
                } else if (e.which == 39) { // Direita     
                    $("#inicio").focus();
                }
            });

        }

       
        function dataFormada() {
            var data = new Date(),
                dia = data.getDate(),
                mes = data.getMonth() + 1,
                ano = data.getFullYear();
            return [dia, mes, ano].join('/');
        }

        function horaFormada() {
            var data = new Date(),
                hora = data.getHours(),
                minuto = data.getMinutes(),
                segundo = data.getSeconds()
            return "Horário atual é, " + hora + "horas, e " + minuto + "minutos e " + segundo + "segundos";
        }

        function falarData() {

            //$("#imageBolsonaro").show();
            var data = dataFormada();
            var hora = horaFormada();
            responsiveVoice.speak(data);
            responsiveVoice.speak(hora);
        }

        function falarPiada() {
            responsiveVoice.speak("Nem toda mudança importante acontece de repente e faz barulho, algumas são silenciosas e vão se fazendo no dia a dia.");
            //responsiveVoice.speak("os motoqueiros ficam fazendo randandandandan, radandandandandan, randandan, pápapapá, randandan papápa... Babaca");
            //$("#imageMotoqueiro").show();
        }

        function falaTemperatura() {
            responsiveVoice.speak("Temperatura Atual: 19°celsius");
            responsiveVoice.speak("Precipitação de chuva: 60%, portanto ,não esqueça o guarda-chuva");
            //responsiveVoice.speak("O lula está preso... babaca");
            //$("#imageLula").show();
        }
    </script>

        <title>Responsive Voice - Malloc Corps</title>
        
    </head>
    <body>
        <header>
            <h1> Responsive Voice </h1>
        </header>    
    </body>
    <div class="container">
        @yield('content')
    </div>
</html>