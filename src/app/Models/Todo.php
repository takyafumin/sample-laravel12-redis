<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Todo Model
 *
 * @property int $id ID
 * @property string $title タイトル
 * @property string|null $description 説明
 * @property \Illuminate\Support\Carbon|null $completed_at 完了日時
 */
class Todo extends Model
{
    /** @use HasFactory<\Database\Factories\TodoFactory> */
    use HasFactory;
}
