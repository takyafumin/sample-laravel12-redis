<?php

namespace Packages\Todo\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Log\LogManager;
use Packages\Todo\UseCases\CreateTodoUseCase;

/**
 * CreateTodo Job
 */
class CreateTodoJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(
    ) {}

    /**
     * Execute the job.
     *
     * @param  LogManager  $logger  Logger
     * @param  CreateTodoUsecase  $useCase  UseCase
     */
    public function handle(
        LogManager $logger,
        CreateTodoUseCase $useCase
    ): void {
        $logger->info('CreateTodoJob::handle() start');

        // ユースケース呼び出し
        $useCase->invoke();

        $logger->info('CreateTodoJob::handle() end');
    }
}
