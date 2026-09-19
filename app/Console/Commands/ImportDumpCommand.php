<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class ImportDumpCommand extends Command
{
    protected $signature = 'db:import-dump
                            {path=database/dumps/local.sql : Path to the SQL dump, relative to the project root}
                            {--fresh : Drop and recreate the database before import}
                            {--force : Skip the confirmation prompt}';

    protected $description = 'Import a MySQL dump. Does not run migrations.';

    public function handle(): int
    {
        $relative = $this->argument('path');
        $fullPath = base_path($relative);

        if (! is_file($fullPath)) {
            $this->error("Dump not found: {$relative}");
            $this->line('Place your dump at database/dumps/local.sql. See database/dumps/README.md.');

            return self::FAILURE;
        }

        $this->warn('This loads SQL as-is. Do not run artisan migrate afterward if the dump already has catalog tables.');

        if (! $this->option('force') && ! $this->confirm('Import now?', true)) {
            return self::FAILURE;
        }

        $script = base_path('database/dumps/import.sh');
        $args = ['bash', $script, $relative];
        if ($this->option('fresh')) {
            $args[] = '--fresh';
        }

        $process = new Process($args, base_path());
        $process->setTimeout(600);
        $process->run(function (string $type, string $buffer): void {
            $this->output->write($buffer);
        });

        return $process->isSuccessful() ? self::SUCCESS : self::FAILURE;
    }
}
