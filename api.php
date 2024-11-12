<?php
// Configura o cabeçalho da resposta para JSON
header('Content-Type: application/json');

// Obtém o método HTTP usado na requisição (GET, POST, etc.)
$method = $_SERVER['REQUEST_METHOD'];

// Lista inicial de tarefas
$tarefas = ['Estudar PHP', 'Finalizar projeto', 'Revisar materiais'];

// Controla o comportamento da API com base no método HTTP
switch ($method) {
    case 'GET':
        // Retorna a lista de tarefas como JSON
        echo json_encode($tarefas);
        break;

    case 'POST':
        // Lê os dados enviados no corpo da requisição
        $data = json_decode(file_get_contents('php://input'), true);

        // Verifica se a nova tarefa foi enviada corretamente
        if (isset($data['tarefa'])) {
            $tarefas[] = $data['tarefa']; // Adiciona a nova tarefa à lista
            echo json_encode(['mensagem' => 'Tarefa adicionada com sucesso!', 'tarefas' => $tarefas]);
        } else {
            echo json_encode(['mensagem' => 'Erro: Nenhuma tarefa fornecida!']);
        }
        break;

    default:
        // Responde com erro para métodos não suportados
        echo json_encode(['mensagem' => 'Método não suportado!']);
        break;
}