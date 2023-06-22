<?php

declare(strict_types=1);

namespace Source\Application\DTO;

use Slim\Http\Request;

class CategoryUpdateDTO  
{
    public function __construct(
        public string $id,
        public string $description
    )
    {
    }

    /**
     * Update Category DTO
     *
     * @param integer $id
     * @param Request $request
     * @return self
     */
    public static function makeFromRequest(string $id, Request $request): self
    {
        $params = (object) $request->getParams();
        $params->id = $id;

        return new self(
            $params->id,
            $params->description
        );
    }
}
