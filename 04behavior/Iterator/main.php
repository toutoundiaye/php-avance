<?php 
namespace behavior\Iterator;

require __DIR__.'/../../vendor/autoload.php';

$fruits = new Collection(['apple','banane','strawberry']);
$iterator = new CollectionIterator($fruits);
foreach($iterator as $fruit) {
    echo $fruit ."\n";
}
//autre méthode avecv un while
$iterator->rewind();

while($iterator->valid()){
    echo $iterator->current()."\n";
    $iterator->next();
}