<?php

interface Newsletter
{
    public function subscribe(string $email): void;
}

class CampaignMonitor implements Newsletter
{
    public function subscribe(string $email): void
    {
        var_dump("Subscribing with Campaign Monitor");
    }
}

class Drip implements Newsletter
{
    public function subscribe(string $email): void
    {
        var_dump("Subscribing with Drip");
    }
}

class NewsletterSubscriptionController
{
    public function store(Newsletter $newsletter): void
    {
        $email = "eacardenase@gmail.com";

        $newsletter->subscribe($email);
    }
}

$controller = new NewsletterSubscriptionController();
$controller->store(new Drip());