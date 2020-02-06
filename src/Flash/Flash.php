<?php

declare(strict_types=1);

namespace Jasny\Session\Flash;

/**
 * Flash message.
 */
class Flash
{
    /** @var string  */
    public $type;
    /** @var string  */
    public $message;
    /** @var string  */
    public $contentType;

    /**
     * Flash constructor.
     */
    public function __construct(string $type, string $message, string $contentType)
    {
        $this->type = $type;
        $this->message = $message;
        $this->contentType = $contentType;
    }

    /**
     * Cast to associative array.
     *
     * @return array{type:string,message:string,contentType:string}
     */
    public function toAssoc(): array
    {
        return [
            'type' => $this->type,
            'message' => $this->message,
            'contentType' => $this->contentType,
        ];
    }
}
