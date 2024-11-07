<?php

namespace App\Interfaces;

interface SectionPublicInterface
{
    public function getSectionsByPage(int $id);
    public function create(array $data);
}