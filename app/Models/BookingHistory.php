<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class BookingHistory extends Model
{
    use HasFactory;

    protected $table = 'booking_histories';

    protected $fillable = [
        'booking_type',
        'booking_code',
        'invoice_code',
        'booking_date',
        'booked_by',
        'booked_by_user_id',
        'paid_by',
        'paid_by_user_id',
        'payment_date',
        'amount',
        'status',
        'notes',
        'attachment_path',
    ];

    protected $casts = [
        'booking_date' => 'date',
        'payment_date' => 'date',
        'amount' => 'decimal:2',
    ];

    /**
     * Relationship to Booker user
     */
    public function bookerUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'booked_by_user_id');
    }

    /**
     * Relationship to Payer user
     */
    public function payerUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'paid_by_user_id');
    }

    /**
     * Relationship to Ticket Detail
     */
    public function ticketDetail(): HasOne
    {
        return $this->hasOne(TicketDetail::class, 'booking_history_id');
    }

    /**
     * Relationship to Hotel Detail
     */
    public function hotelDetail(): HasOne
    {
        return $this->hasOne(HotelDetail::class, 'booking_history_id');
    }

    /**
     * Relationship to Expense Detail
     */
    public function expenseDetail(): HasOne
    {
        return $this->hasOne(ExpenseDetail::class, 'booking_history_id');
    }

    /**
     * Relationship to status activity logs
     */
    public function statusLogs(): HasMany
    {
        return $this->hasMany(BookingStatusLog::class, 'booking_history_id')->orderBy('id', 'asc');
    }

    /**
     * Format amount in IDR (Rp 1.500.000)
     */
    public function getFormattedAmountAttribute(): string
    {
        return 'Rp ' . number_format($this->amount, 0, ',', '.');
    }

    /**
     * Get CSS classes for status badge
     */
    public function getStatusBadgeClassAttribute(): string
    {
        return static::getStatusBadgeClass($this->status);
    }

    public static function getStatusBadgeClass(?string $status): string
    {
        return match ($status) {
            'Lunas' => 'bg-emerald-100 text-emerald-900 border-emerald-300 font-bold',
            'Belum Bayar' => 'bg-rose-100 text-rose-900 border-rose-300 font-bold',
            'Dibatalkan' => 'bg-slate-200 text-slate-900 border-slate-300 font-bold',
            default => 'bg-slate-100 text-slate-900 border-slate-300 font-bold',
        };
    }

    /**
     * Scope for status filter
     */
    public function scopeFilterStatus($query, string|array|null $status)
    {
        if (empty($status)) {
            return $query;
        }

        if (is_array($status)) {
            $filtered = array_values(array_filter($status));
            return empty($filtered) ? $query : $query->whereIn('status', $filtered);
        }

        return $query->where('status', $status);
    }

    /**
     * Scope for amount filter
     */
    public function scopeFilterAmount($query, $min = null, $max = null, $eq = null)
    {
        if ($eq !== null && $eq !== '') {
            return $query->where('amount', '=', (float) $eq);
        }

        if ($min !== null && $min !== '') {
            $query->where('amount', '>=', (float) $min);
        }

        if ($max !== null && $max !== '') {
            $query->where('amount', '<=', (float) $max);
        }

        return $query;
    }
}
