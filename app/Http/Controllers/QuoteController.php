<?php

namespace App\Http\Controllers;

use App\Managers\QuoteManager;
use Illuminate\Support\Facades\Cache;

class QuoteController extends Controller
{
    protected $quoteManager;
    const QUOTES = 5;

    public function __construct(QuoteManager $quoteManager)
    {
        $this->quoteManager = $quoteManager;
    }

    public function getQuotes()
    {
        return Cache::remember('kanye_quotes', 60, function () {
            return $this->quoteManager->getQuotes(self::QUOTES);
        });
    }
}
