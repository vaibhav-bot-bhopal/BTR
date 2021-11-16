<?php

namespace App\Providers;

use App\Repository\Document\DocumentInterface;
use App\Repository\Document\DocumentRepository;
use App\Repository\News\NewsInterface;
use App\Repository\News\NewsRepository;
use App\Repository\Tender\TenderInterface;
use App\Repository\Tender\TenderRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(NewsInterface::class, NewsRepository::class);
        $this->app->bind(TenderInterface::class, TenderRepository::class);
        $this->app->bind(DocumentInterface::class, DocumentRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
