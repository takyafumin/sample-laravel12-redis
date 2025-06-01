<?php

namespace Packages\Todo\UseCases;

use Illuminate\Log\Logger;

/**
 * CreateTodo UseCase
 */
readonly class CreateTodoUseCase
{
    public function __construct(
        private Logger $logger
    ) {
    }

    /**
     * Invoke.
     */
    public function invoke(): void
    {
        $this->logger->info('CreateTodoUseCase::invoke() start');

        // TODO Todoデータ作成処理の実装

        $this->logger->info('CreateTodoUseCase::invoke() end');
    }
}
