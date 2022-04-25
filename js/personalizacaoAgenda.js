document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        locale: 'pt-br',
        plugins: ['interaction', 'dayGrid'],
        //defaultDate: '2019-04-12',
        editable: true,
        eventLimit: true, // limitar a quantidade de eventos no dia - deixar como true
        eventos: 'listaEventos.php',
        extraParams: function() {
            return {
                cachebuster: new Date().valueOf()
            };
        },
        eventClick: function(info) {
            info.jsEvent.preventDefault();
            $('#visualizar #id_evento').text(info.event.id_evento);
            $('#visualizar #titulo').text(info.event.titulo);
            $('#visualizar #comeco').text(info.event.comeco.toLocaleString());
            $('#visualizar #fim').text(info.event.fim.toLocaleString());
            $('#visualizar').modal('show');


        }

    });

    calendar.render();
});