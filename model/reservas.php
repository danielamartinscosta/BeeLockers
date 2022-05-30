<?php

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$retorna = ['sit' => true, 'msg' => '<div class="alert alert-success" role="alert">
Reserva realizada com sucesso!
</div>
'];

header ('Content-Type: application/json');
echo json_encode ($retorna);
