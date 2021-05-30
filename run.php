<pre>
<?php

$todos = [
    [
        "id" => 1,
        "title" => "Купить столовые приборы",
        "date" => "03.04.2020",
        "status" => "Выполнено"
    ],
    [
        "id" => 2,
        "title" => "Выбросить мусор",
        "date" => "05.04.2020",
        "status" => "Ожидается"
    ],
    [
        "id" => 3,
        "title" => "Помыть машину",
        "date" => "10.04.2020",
        "status" => "Ожидается"
    ]
];

for ($i = 0; $i < count($todos); $i++) {
    echo "id - " . $todos[$i]["id"] . "\n";
    echo "Заголовок - " . $todos[$i]["title"] . "\n";
    echo "Дата - " . $todos[$i]["date"] . "\n";
    echo "Статус - " . $todos[$i]["status"] . "\n\n";
}

$i = 0;

while ($i < count($todos)) {
    echo "id - " . $todos[$i]["id"] . "\n";
    echo "Заголовок - " . $todos[$i]["title"] . "\n";
    echo "Дата - " . $todos[$i]["date"] . "\n";
    echo "Статус - " . $todos[$i]["status"] . "\n\n";
    $i++;
}

foreach ($todos as $todo) {
    echo "id - " . $todo["id"] . "\n";
    echo "Заголовок - " . $todo["title"] . "\n";
    echo "Дата - " . $todo["date"] . "\n";
    echo "Статус - " . $todo["status"] . "\n\n";
}

?>
</pre>




