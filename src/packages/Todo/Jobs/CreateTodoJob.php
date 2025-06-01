<?php

namespace Packages\Todo\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Log\Logger;
use Packages\Todo\UseCases\CreateTodoUseCase;

/**
 * CreateTodo Job
 */
class CreateTodoJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     *
     * @param Logger $logger Logger
     * @param CreateTodoUsecase $useCase UseCase
     */
    public function __construct(
        private readonly Logger $logger,
        private readonly CreateTodoUseCase $useCase
    ) {
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $this->logger->info('CreateTodoJob::handle() start');

        // ユースケース呼び出し
        $this->useCase->invoke();

        $this->logger->info('CreateTodoJob::handle() end');
    }
}
