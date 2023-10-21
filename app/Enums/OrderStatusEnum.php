<?php

namespace App\Enums;

enum OrderStatusEnum : string
{
    case PENDING = 'pending';
    case PROCESSING = 'processing';
    case COMPLETED = 'completed';
    case DECLINE = 'decline';
    case CANCELLED = 'cancelled';
    case REFUNDED = 'refunded';
    case FAILED = 'failed';
}
