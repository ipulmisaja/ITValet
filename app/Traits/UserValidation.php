<?php

namespace App\Traits;

trait UserValidation
{
    public function validateInput(string $stage, $input): void
    {
        if ($stage === "add") {
            $input->validate([
                "name" => 'required|string|regex:/^[a-zA-Z \.\,]*$/|min:2|max:50',
                "email" => "required|email:rfc|unique:users,email",
                "bpsId" => "required|numeric",
            ]);
        } else {
            $input->validate([
                "name" => 'required|string|regex:/^[a-zA-Z \.\,]*$/|min:2|max:50',
                "email" => "required|email:rfc",
                "bpsId" => "required|numeric",
                "password" => "nullable|min:8",
            ]);
        }
    }
}
