<?php

declare(strict_types=1);

namespace NunoMaduro\PhpInsights\Application\Console;

use NunoMaduro\PhpInsights\Domain\Dependencies;
use NunoMaduro\PhpInsights\Domain\LinesOfCode;
use NunoMaduro\PhpInsights\Domain\Structure;

/**
 * @internal
 */
final class TableStructure
{
    /**
     * Returns the table structure.
     *
     * @return array
     */
    public static function make(): array
    {
        return [
            '<title>✍️  Lines Of Code</title>',
            '',
            LinesOfCode\Total::class,
            LinesOfCode\Comments::class,
            LinesOfCode\NonComments::class,
            LinesOfCode\SourceCode::class,
            LinesOfCode\SourceCodeClasses::class,
            LinesOfCode\SourceCodeMethods::class,
            LinesOfCode\SourceCodeFunctions::class,
            LinesOfCode\SourceCodeGlobal::class,
            '',
            '<title>👔  Cyclomatic Complexity</title>',
            '',
            LinesOfCode\CyclomaticComplexity::class,
            LinesOfCode\CyclomaticComplexityClasses::class,
            LinesOfCode\CyclomaticComplexityMethods::class,
            '',
            '<title>🔗  Dependencies</title>',
            '',
            Dependencies\GlobalAccesses::class,
            Dependencies\GlobalAccessesConstants::class,
            Dependencies\GlobalAccessesVariables::class,
            Dependencies\GlobalAccessesSuperVariables::class,
            Dependencies\AttributeAccesses::class,
            Dependencies\AttributeAccessesStatic::class,
            Dependencies\AttributeAccessesNonStatic::class,
            Dependencies\MethodCalls::class,
            Dependencies\MethodCallsStatic::class,
            Dependencies\MethodCallsNonStatic::class,
            '',
            '<title>🧱  Structure</title>',
            '',
            Structure\Namespaces::class,
            Structure\Interfaces::class,
            Structure\Traits::class,
            Structure\Classes::class,
            Structure\ClassesAbstract::class,
            Structure\ClassesConcrete::class,
            Structure\Methods::class,
            Structure\MethodsStatic::class,
            Structure\MethodsNonStatic::class,
            Structure\MethodsPublic::class,
            Structure\MethodsNonPublic::class,
            Structure\Functions::class,
            Structure\FunctionsNamed::class,
            Structure\FunctionsAnonymous::class,
            Structure\Constants::class,
            Structure\ConstantsGlobal::class,
            Structure\ConstantsClass::class,
        ];
    }
}