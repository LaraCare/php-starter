<?php

namespace App\Services;

class MailService
{
    public function sendWelcomeEmail($to, $name)
    {
        $subject = "Welcome to PHP Starter, $name!";
        $message = "Hi $name,\n\nThanks for joining our platform.";
        $headers = "From: no-reply@phpstarter.test";

        return mail($to, $subject, $message, $headers);
    }
}
