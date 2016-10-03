<?php

/*
|--------------------------------------------------------------------------
| Detect Active Route
|--------------------------------------------------------------------------
|
| Compare given route with current route and return output if they match.
| Very useful for navigation, marking if the link is active.
|
*/
function isActiveRoute($route, $output = "active")
{
    if (Route::getCurrentRoute()->getPath() == $route) return $output;
}

/*
|--------------------------------------------------------------------------
| Detect Active Routes
|--------------------------------------------------------------------------
|
| Compare given routes with current route and return output if they match.
| Very useful for navigation, marking if the link is active.
|
*/
function areActiveRoutes(Array $routes, $output = "active")
{
    foreach ($routes as $route)
    {
        if (Route::currentRouteName() == $route) return $output;
    }

}


/*
|--------------------------------------------------------------------------
| One or more
|--------------------------------------------------------------------------
|
| Example: 1 available seat / 2 available seats
|
*/
function oneOrMore($number, $singular, $plural)
{
    if ($number <= 1) {
      return $singular;
    } else {
      return $plural;
    }
}

/*
|--------------------------------------------------------------------------
| availableSeats
|--------------------------------------------------------------------------
|
| check if there are anymore seats available
|
*/
function availableSeats($seats, $registrations, $free, $full)
{   
    $registrations =  count($registrations);
    $totalAvailable = "$seats" - "$registrations";
    if ("$totalAvailable" > 0) {
      return $free;
    } else {
      return $full;
    }
}

/*
|--------------------------------------------------------------------------
| totalFreeSeats
|--------------------------------------------------------------------------
|
| set total free seats
|
*/
function totalFreeSeats($seats, $registrations)
{    
    $registrations =  count($registrations);
    $totalAvailable = "$seats" - "$registrations";
    return $totalAvailable;
}

/*
|--------------------------------------------------------------------------
| translateType
|--------------------------------------------------------------------------
|
| Translate de 2 course types
|
*/
function translateType($type)
{   
    if($type == "car"){
        return "Auto";
    } elseif ($type == "motor") {
        return "Motor";
    }
}

/*
|--------------------------------------------------------------------------
| countDatesOnType
|--------------------------------------------------------------------------
|
| Count dates that has the current type
|
*/
function countDatesOnType($dates, $type)
{
    $i = 0;
    foreach ($dates as $date){
        if($date->type == $type){
            $i++;
        }
    }
    return $i;
}