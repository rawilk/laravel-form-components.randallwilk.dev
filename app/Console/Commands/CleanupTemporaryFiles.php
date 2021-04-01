<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Livewire\FileUploadConfiguration;

final class CleanupTemporaryFiles extends Command
{
    protected $signature = 'cleanup-temporary-files';

    protected $description = 'Cleanup old temporary uploaded files';

    public function handle(): void
    {
        $storage = FileUploadConfiguration::storage();

        foreach ($storage->allFiles(FileUploadConfiguration::path()) as $filePathname) {
            if (! $storage->exists($filePathname)) {
                continue;
            }

            $tenMinutesAgo = now()->subMinutes(10)->timestamp;
            if ($tenMinutesAgo > $storage->lastModified($filePathname)) {
                $storage->delete($filePathname);
            }
        }

        $this->info('Temporary files have been cleaned up!');
    }
}
