<?php

// .. Neat
((function() { 
if(class_exists('\Symfony\Component\Yaml\Yaml') && class_exists('\Zend\Config\Reader\Yaml')) {
  $symfonyReader = new \Zend\Config\Reader\Yaml([\Symfony\Component\Yaml\Yaml::class, 'parse']);
  \Zend\Config\Factory::registerReader('yml', $symfonyReader);
  \Zend\Config\Factory::registerReader('yaml', $symfonyReader);
}
})());
