<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset='utf-8' />
    <link href='Documentall-FontEnd/css/calendar/core/calendario.css' rel='stylesheet' />
    <link href='Documentall-FontEnd/css/calendar/daygrid/main.css' rel='stylesheet' />
    <link href='Documentall-FontEnd/css/calendar/timegrid/main.css' rel='stylesheet' />
    <link href='Documentall-FontEnd/css/calendar/list/main.css' rel='stylesheet' />
    <link href='Documentall-FontEnd/css/calendar/css/personalizado' rel='stylesheet' />
    <script src='Documentall-FontEnd/css/calendar/core/main.js'></script>
    <script src='Documentall-FontEnd/css/calendar/core/locales/pt-br.js'></script>
    <script src='Documentall-FontEnd/css/calendar/interaction/main.js'></script>
    <script src='Documentall-FontEnd/css/calendar/daygrid/main.js'></script>
    <script src='Documentall-FontEnd/css/calendar/timegrid/main.js'></script>
    <script src='Documentall-FontEnd/css/calendar/list/main.js'></script>

<script>

    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var initialLocaleCode = 'pt-br';
        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'

            },

            defaultDate: '2019-06-12',
            locale: initialLocaleCode,
            buttonIcons: false, // show the prev/next text
            weekNumbers: true,
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: 'list_eventos.php'

        });

        calendar.render();
    });



</script>

</head>
<body>



  <div id='calendar'></div>

</body>
</html>
