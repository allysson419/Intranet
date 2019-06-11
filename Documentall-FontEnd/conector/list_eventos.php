<?php

        include 'conexao.php';

     $query_events =   'SELECET id, title, color, start, end FROM events';
     $resultado_events =  $conn->prepare($query_events);
        $resultado_events->execute();

        $eventos = [];

            while ($row_events = $resultado_events->fatch(PDO::FETCH_ASSOC)){
                    $id = $row_events['id'];
                    $title = $row_events['title'];
                    $start = $row_events['start'];
                    $end = $row_events['end'];

                    $eventos[] = [
                        'id'    => $id,
                        'title' => $title,
                        'color' => $color,
                        'start' => $start,
                        'end'   => $end,
                    ];
}

                    echo jason_encode($eventos);