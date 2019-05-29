<?php

namespace App;

require __DIR__ . '/vendor/autoload.php';

use App\Contracts\MathContract as Math;
use App\Inspectors\ClassInspector as Inspector;

Inspector::inspect(Math::class);