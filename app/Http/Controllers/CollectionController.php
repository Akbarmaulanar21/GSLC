<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    //cara pertama
    public function collectionOne()
    {
        $Arrsatu = [1, 2, 3, 6, 95, 31, 4];
        $collection = new \Illuminate\Support\Collection($Arrsatu);

        foreach ($collection as $value) {
            echo "$value";
        }
    }

    //cara kedua
    public function collectionTwo()
    {
        $collection = collect([1, 2, 3, 6, 95, 31, 4]);

        echo $collection[0];
        echo "<br>";
        echo $collection[2];
        echo "<br>";

        foreach ($collection as $value) {
            echo "$value";
        }
    }

    //cara mengakses collection
    public function collectionAccess()
    {
        $collection = collect([1, 2, 3, 6, 95, 31, 4]);

        echo $collection[0];
        echo "<br>";
        echo $collection[2];
        echo "<br>";
        echo $collection[3];
        echo "<br>";

        foreach ($collection as $value) {
            echo "$value";
        }
    }

    //cara ketiga
    public function collectionThree()
    {
        $collection = collect([1, 9, 3, 4, 5, 3, 5, 7]);

        //operasi matematika
        dump($collection->sum()); //37
        dump($collection->avg()); //4.625
        dump($collection->min()); //1
        dump($collection->max()); //9
        dump($collection->count()); //8
        dump($collection->median()); //4.5

        //method random
        dump($collection->random()); //random value

        //method cancat
        echo $collection->concat([1, 2, 3, 4, 5]);

        //method contains
        dump($collection->contains(3)); //true
        dump($collection->contains(6)); //false

        //method unique
        echo $collection->unique();

        //method all
        dump($collection->all());
    }
}
