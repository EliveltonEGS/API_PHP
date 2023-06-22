<?php

declare(strict_types=1);

namespace Source\Application\DTO;

use Slim\Http\Request;

class CategoryCreateDTO  
{
    public function __construct(
        public string $description
    )
    {
    }

    public static function makeFromRequest(Request $request): self
    {
        $params = (object) $request->getParams();

        return new self(
            $params->description
        );
    }
}
