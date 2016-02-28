<?php
namespace Bellevue\src\presenters;

abstract class AbstractPresenter
{
    public function outputTemplate($templateFile, array $args)
    {
        $template = $this->mustache()->loadTemplate($templateFile);
		echo $template->render($args);
    }

    private function mustache()
    {
        return new \Mustache_Engine(array(
		    'loader' => new \Mustache_Loader_FilesystemLoader(__DIR__ . '/../templates'),
            'partials_loader' => new \Mustache_Loader_FilesystemLoader(__DIR__ . '/../templates/partials'),
		    'escape' => function($value) {
		        return htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
		    },
		    'charset' => 'UTF-8',
		    'strict_callables' => true,
		));
    }

    protected function paths()
    {
        return [
            'public-url' => public_url
        ];
    }
}
