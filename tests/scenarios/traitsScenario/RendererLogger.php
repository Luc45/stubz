<?php

namespace TraitsExample;

/**
 * This class uses multiple traits.
 */
class RendererLogger
{
    use LoggerTrait;
    use HtmlRendererTrait;

    public function doSomethingAndLog(): string
    {
        $this->logMessage("Rendering some text in bold...");
        return $this->renderBold("Hello World");
    }
}
