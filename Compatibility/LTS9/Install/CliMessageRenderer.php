<?php
namespace Helhum\Typo3Console\LTS9\Install;

/*
 * This file is part of the TYPO3 Console project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read
 * LICENSE file that was distributed with this source code.
 *
 */

use Helhum\Typo3Console\Mvc\Cli\ConsoleOutput;

class CliMessageRenderer
{
    /**
     * @var ConsoleOutput
     */
    private $output;

    public function __construct(ConsoleOutput $output)
    {
        $this->output = $output;
    }

    public function render(array $messages)
    {
        $this->output->outputLine();
        foreach ($messages as $statusMessage) {
            $this->renderSingle($statusMessage);
        }
    }

    private function renderSingle($statusMessage)
    {
        $subject = strtoupper($statusMessage['severity']) . ': ' . $statusMessage['title'];
        switch ($statusMessage['severity']) {
            case 'error':
            case 'warning':
                $subject = sprintf('<%1$s>' . $subject . '</%1$s>', $statusMessage['severity']);
            break;
            default:
        }
        $this->output->outputLine($subject);
        foreach (explode("\n", wordwrap($statusMessage['message'])) as $line) {
            $this->output->outputLine(sprintf('<%1$s>' . $line . '</%1$s>', $statusMessage['severity']));
        }
    }
}
