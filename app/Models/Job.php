<?php

namespace App\Models;


class Job 
{
    static public function all(): array{
        return [
            ["title" => "Software Engineer","Salary" => "$1000"],
            ["title"=> "Web Developer","Salary"=> "$1200"],
            ["title"=> "Data Scientist","Salary"=> "$1500"],
            ["title"=> "UI/UX Designer","Salary"=> "$1000"],
        ] ;
    }
}
