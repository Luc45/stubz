<?php

namespace TraitsExample;

trait HtmlRendererTrait
{
    public function renderBold(string $text): string
    {
        return "<b>{$text}</b>";
    }

    public function renderItalic(string $text): string
    {
        return "<i>{$text}</i>";
    }
}
