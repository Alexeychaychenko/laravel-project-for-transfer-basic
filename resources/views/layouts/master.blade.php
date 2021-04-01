<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="0qgPiIdlI1sgxdJuk9izFuBTdx8aXAp9S93SOWcY"/>
    <title>Laxani - Shipping</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- Bootstrap -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets/css/style.css?'.time())}}" rel="stylesheet">
    <link href="{{asset('assets/css/pace-bonus.css')}}" rel="stylesheet">


    <style>
        .carousel-item{
            text-align: center;
            min-height: 400px; /* Prevent carousel from being distorted if for some reason image doesn't load */
        }
        .slide{
            width: 100%;
        }
        .text-sm{
            margin-left: 1em;
        }
    </style>
</head>
<body class="login">


@yield('content')

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="http://www.laxanicargo.com/js/jquery.autocomplete.min.js"></script>
<script src="http://www.laxanicargo.com/js/mavigator.min.js"></script>
<script src="http://www.laxanicargo.com/js/DYMO.Label.Framework.3.0.js"></script>
<script src="http://www.laxanicargo.com/js/jquery.json.min.js"></script>
<script src="http://www.laxanicargo.com/js/jquery.cookie.js"></script>
<script data-pace-options='{ "ajax": true }' src="http://www.laxanicargo.com/js/pace.js"></script>
<script src="http://www.laxanicargo.com/js/laxani.js"></script>
<script type="text/javascript">
    $(document).ajaxStart(function () {
        Pace.restart();
    });

    var date = new Date();
    var offset = date.getTime() - {{time()}}* 1000;
    var monthNames = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun",
        "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
    ];
    var dayNames = ["Zondag", "Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag"];
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    new Mavigator('.navbar-nav', {classToParent: true});
    updateTimer();
    setInterval('updateTimer()', 1000);

    function updateTimer() {
        date = new Date();
        date.setTime(date.getTime() - offset);
        var hours = date.getHours() < 10 ? '0' + date.getHours() : date.getHours();
        var minutes = date.getMinutes() < 10 ? '0' + date.getMinutes() : date.getMinutes();
        var seconds = date.getSeconds() < 10 ? '0' + date.getSeconds() : date.getSeconds();
        $('.current-time').html(dayNames[date.getDay()] + ' ' + date.getDate() + ' ' + monthNames[date.getMonth()] + ' ' +
            hours + ':' + minutes + ':' + seconds);

        /*$.post("http://www.laxanicargo.com/est-date", function(response){
            date = new Date();
            date.setTime(date.getTime() - offset);
              var hours = date.getHours() < 10 ? '0'+date.getHours() : date.getHours();
              var minutes = date.getMinutes() < 10 ? '0'+date.getMinutes() : date.getMinutes();
              var seconds = date.getSeconds() < 10 ? '0'+date.getSeconds() : date.getSeconds();

              $('.current-time').html(dayNames[date.getDay()]+' '+date.getDate()+' '+monthNames[date.getMonth()]+' '+
              response);
          });*/

    }

</script>

    <script>
        Laxani.init();
    </script>
    <script>
        
    </script>

</body>
</html>