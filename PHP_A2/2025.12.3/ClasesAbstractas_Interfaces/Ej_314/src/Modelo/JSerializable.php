<?php
namespace App\Modelo\JSerializable314;

interface JSerializable
{
    public function toJSON(): string;
    public function toSerialize(): string;
}

?>