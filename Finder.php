<?php


class Finder
{
    public static function find($email)
    {
        foreach (Workers::$workers as $worker) {
            if ($worker["Email"] == $email) {
                return $worker;
            }
        }
    }
}