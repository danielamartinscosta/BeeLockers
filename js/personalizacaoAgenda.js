document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: ['interaction', 'dayGrid'],
        //defaultDate: '2022-04-12',
        locale: 'pt-br', // determina o idioma utilizado
        headerToolbar: {
            start: 'dayGridMonth, timeGridWeek, timeGridDay',
            center: 'title',
            end: 'today,prev,next'
        },
        editable: true,
        eventLimit: true, // limitar a quantidade de eventos no dia - deixar como true
        buttonText: {
            today: 'hoje',
            month: 'mês',
            week: 'semana',
            day: 'dia',
            list: 'lista',
        },
        slotDuration: '01:00',
        slotLabelFormat: {
            hour: 'numeric',
            minute: '2-digit',
            omitZeroMinute: false,
            meridiem: 'short'
        },
        businessHours: {
            // determina os dias da semana disponíveis
            daysOfWeek: [0, 1, 2, 3, 4, 5, 6],

            startTime: '05:00', // determina a hora inicial para agendamento
            endTime: '19:00', // determina a hora final para agendamento
        },
        events: 'listaReservas.php',
        /*events: [
            {
                title: 'The Title',
                start: '2022-06-12T10:00:00',
                end: '2022-06-12T16:00:00',

            }
        ],*/
        extraParams: function () {
            return {
                cachebuster: new Date().valueOf()
            };
        },
        eventClick: function (info) {
            info.jsEvent.preventDefault(); // don't let the browser navigate
            console.log(info.event);
            $('#visualizar #id_reserva').text(info.event.id_reserva);
            $('#visualizar #id_reserva').val(info.event.id_reserva);
            $('#visualizar #nome_responsavel').text(info.event.nome_responsavel);
            $('#visualizar #nome_responsavel').val(info.event.nome_responsavel);
            $('#visualizar #praia').text(info.event.praia);
            $('#visualizar #praia').val(info.event.praia);
            $('#visualizar #start').text(info.event.star.toLocaleString());
            $('#visualizar #start').val(info.event.start.toLocaleString());
            $('#visualizar #end').text(info.event.end.toLocaleString());
            $('#visualizar #end').val(info.event.end.toLocaleString());
            $('#visualizar').modal('show');
        },
        selectable: true,
        select: function (info) {
            //alert('Início do evento: ' + info.start.toLocaleString());
            $('#cadastrar #start').val(info.start.toLocaleString());
            $('#cadastrar #end').val(info.end.toLocaleString());
            $('#cadastrar').modal('show');
        }

    });

    calendar.render();
});

//Mascara para o campo data e hora
function DataHora(event, objeto) {
    var keypress = (window.event) ? event.keyCode : event.which;
    campo = eval(objeto);
    if (campo.value == '00/00/0000 00:00') {
        campo.value = "";
    }

    caracteres = '0123456789';
    separacao1 = '/';
    separacao2 = ' ';
    separacao3 = ':';
    conjunto1 = 2;
    conjunto2 = 5;
    conjunto3 = 10;
    conjunto4 = 13;
    conjunto5 = 16;
    if ((caracteres.search(String.fromCharCode(keypress)) != -1) && campo.value.length < (19)) {
        if (campo.value.length == conjunto1)
            campo.value = campo.value + separacao1;
        else if (campo.value.length == conjunto2)
            campo.value = campo.value + separacao1;
        else if (campo.value.length == conjunto3)
            campo.value = campo.value + separacao2;
        else if (campo.value.length == conjunto4)
            campo.value = campo.value + separacao3;
        else if (campo.value.length == conjunto5)
            campo.value = campo.value + separacao3;
    } else {
        event.returnValue = false; //verificar se é para deixar como event ou como reservas
    }
}

$(document).ready(function () {
    $("#addevent").on("submit", function (event) {
        event.preventDefault(); //não fecha a janela modal sem autorização
        $.ajax({
            method: "POST",
            url: "reservas.php",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (retorna) {
                if (retorna['sit']) {
                    //$("#msg-reservas").html(retorna['msg']);
                    location.reload();
                } else {
                    $("#msg-reservas").html(retorna['msg']);
                }
            }
        })
    });

    $('.btn-canc-vis').on("click", function () {
        $('.visevent').slideToggle();
        $('.formedit').slideToggle();
    });

    $('.btn-canc-edit').on("click", function () {
        $('.formedit').slideToggle();
        $('.visevent').slideToggle();
    });

    $("#editevent").on("submit", function (event) {
        event.preventDefault();
        $.ajax({
            method: "POST",
            url: "editarReserva.php",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (retorna) {
                if (retorna['sit']) {
                    //$("#msg-cad").html(retorna['msg']);
                    location.reload();
                } else {
                    $("#msg-edit").html(retorna['msg']);
                }
            }
        })
    });
});