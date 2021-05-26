<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;


/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
    public function renderDefault(): void
    {
        if (\Tracy\Debugger::$productionMode && file_exists($_SERVER['DOCUMENT_ROOT'] . '/assets/css/rev-manifest.json')) {
            $this->template->manifestCss = Nette\Utils\Json::decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/assets/css/rev-manifest.json'),1);
        }

        if (\Tracy\Debugger::$productionMode && file_exists($_SERVER['DOCUMENT_ROOT'] . '/assets/js/rev-manifest.json')) {
            $this->template->manifestJs = Nette\Utils\Json::decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/assets/js/rev-manifest.json'),1);
        }
    }
}
