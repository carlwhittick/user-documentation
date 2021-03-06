<?hh

namespace Hack\UserDocumentation\API\Examples\Vector\Set;

$v = Vector {'red', 'green', 'blue', 'yellow'};

// Set the first element to 'RED'
$v->set(0, 'RED');

var_dump($v);

// Set the second and third elements using chaining
$v->set(1, 'GREEN')
  ->set(2, 'BLUE');

var_dump($v);
