<?php

namespace App\Catalog\Application\Command;

class DeleteLangauageByIdCommand
{
    public function __construct(public int $languageId
    ,public int $modifiedBy){}
}
