<script>
document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('reservar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: ['interaction', 'dayGrid'],
        //defaultDate: '2022-04-12',
        locale: 'pt-br', // determina o idioma utilizado
        editable: true,
        eventLimit: true, // limitar a quantidade de eventos no dia - deixar como true mantém o layout
        //events: '../model/listaReservas.php',
        events: [

        ],
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
            $('#visualizar #id_usuario').text(info.event.id_usuario);
            $('#visualizar #id_usuario').val(info.event.id_usuario);
            $('#visualizar #id_praia').text(info.event.id_praia);
            $('#visualizar #id_praia').val(info.event.id_praia);
            $('#visualizar #start').text(info.event.start.toLocaleString());
            $('#visualizar #start').val(info.event.start.toLocaleString());
            $('#visualizar #end').text(info.event.end.toLocaleString());
            $('#visualizar #end').val(info.event.end.toLocaleString());
            $('#visualizar').modal('show');
        },
        selectable: true,
        select: function (info) {
            //const myModal = new bootstrap.Modal(document.getElementById('cadastrar'))
            //alert('Início do evento: ' + info.start.toLocaleString());
            $('#reservar #start').val(info.start.toLocaleString());
            $('#reservar #end').val(info.end.toLocaleString());
            $('#reservar').modal('show');
        } 

    });

    calendar.render();
});

//Mascara para o campo data e hora
function DataHora(event, objeto) {
    var keypress = (window.event) ? event.keyCode : event.which;
    campo = eval(objeto);
    if (campo.value == '00/00/0000 00:00:00') {
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
    if ((caracteres.search(String.fromCharCode(keypress)) != -1) && campo.value.length <script (19)) {
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
            method: "post",
            url: "../model/reservas.php",
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
            url: "../model/editarReserva.php",
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

</script>

