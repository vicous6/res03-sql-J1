<?php $db = new PDO(
    'mysql:host=db.3wa.io;port=3306;dbname=victoroustiakine_exo1',
    'victoroustiakine',
    'c6aaac523840dc2129f6449e52582bf0'
);

$query = $db->prepare('SELECT id,name, price
FROM products WHERE price > 1000

');
$query->execute();
$movies = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump($movies)
?>