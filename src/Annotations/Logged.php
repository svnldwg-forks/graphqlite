<?php

declare(strict_types=1);

namespace TheCodingMachine\GraphQLite\Annotations;

use Attribute;

/**
 * @Annotation
 * @Target({"METHOD", "ANNOTATION"})
 */
#[Attribute(Attribute::TARGET_METHOD)]
class Logged implements MiddlewareAnnotationInterface
{
}
