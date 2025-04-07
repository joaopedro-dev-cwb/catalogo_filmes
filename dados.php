<?php
$itens = [
    [
        'id' => 1,
        'titulo' => 'O Senhor dos Anéis',
        'imagem' => 'img/senhor_dos_aneis.jpg',
        'categoria' => 'Fantasia',
        'descricao' => 'Uma grande aventura na Terra Média.'
    ],
    [
        'id' => 2,
        'titulo' => 'Matrix',
        'imagem' => 'img/matrix.jpg',
        'categoria' => 'Ficção Científica',
        'descricao' => 'Um clássico da ficção científica.'
    ],
    [
        'id' => 3,
        'titulo' => 'Harry Potter e a Câmara Secreta',
        'imagem' => 'img/harrypotter.jpg',
        'categoria' => 'Fantasia',
        'descricao' => 'Harry e seus amigos descobrem os segredos de Hogwarts.'
    ]
];

// Cria usuário padrão para login
$usuario = [
    'login' => 'admin',
    'senha_hash' => password_hash('senha123', PASSWORD_DEFAULT)
];
?>