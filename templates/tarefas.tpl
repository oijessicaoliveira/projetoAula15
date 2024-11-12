<!DOCTYPE html>
<html>
<head>
    <title>Lista de Tarefas</title>
</head>
<body>
    <h1>Minhas Tarefas</h1>
    <ul>
        {foreach $tarefas as $tarefa}
            <li>{$tarefa}</li>
        {/foreach}
    </ul>
</body>
</html>
