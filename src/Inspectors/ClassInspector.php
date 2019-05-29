<?php

namespace App\Inspectors;

use ReflectionMethod;

class ClassInspector {
    public static function inspect(string $className): void {
        $methods = get_class_methods($className); 

        foreach ($methods as $m) {
            $ref = new ReflectionMethod($className, $m);
            $methodName = $ref->class . '.' . $ref->name;
            echo "Return type of '$methodName' => " . $ref->getReturnType()->getName() . "\n";
            foreach ($ref->getParameters() as $param) {
                $paramName = $param->getName();
                $paramType = $param->getType()->getName();
                echo "Param: '$paramName' => $paramType\n";
            }
        }
    }
}
