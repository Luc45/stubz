<?php

namespace EnumExample;

enum UserStatus: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case BANNED = 'banned';

    public function label(): string
    {
        return match($this) {
            self::ACTIVE => 'Active User',
            self::INACTIVE => 'Inactive User',
            self::BANNED => 'Banned User'
        };
    }
}

class User
{
    public function __construct(
        public string $name,
        public UserStatus $status
    ) {}

    public function getStatusLabel(): string
    {
        return $this->status->label();
    }
}
