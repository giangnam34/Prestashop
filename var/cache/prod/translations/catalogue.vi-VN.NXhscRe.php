<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('vi-VN', array (
));

$catalogueVi = new MessageCatalogue('vi', array (
));
$catalogue->addFallbackCatalogue($catalogueVi);

return $catalogue;
