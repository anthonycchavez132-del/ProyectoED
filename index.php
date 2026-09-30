<?php
declare(strict_types=1);

require_once 'db.php';
require_once 'nodo.php';
require_once 'ListaDoblementeEnlazada.php';

$db = new Database();
$pdo = $db->getPdo();

$stmt = $pdo->query('SELECT ID, nombre, precio, stock FROM productos ORDER BY precio DESC');
$productos = $stmt->fetchAll();

$lista = new ListaDoblementeEnlazada();

foreach ($productos as $p) {

    $nodo = new Nodo(
        (int)($p['id'] ?? $p['ID']),
        (string)$p['nombre'],
        (float)$p['precio'],
        (int)$p['stock']
    );
    
    $lista->agregarAlFinal($nodo);
}

echo "Se insertaron los registros: " . implode(', ', $lista->obtenerId());
?>