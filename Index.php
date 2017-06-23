<?php 

require_once __DIR__ . '/./vendor/autoload.php'; // Autoload files using Composer autoload

use Test\Person;
?>
<h1>Test Class</h1>
<p><?php echo 'Name: ' . Person::getName(); ?></p>
<p><?php echo 'Name: ' . Person::getName('VK'); ?></p>