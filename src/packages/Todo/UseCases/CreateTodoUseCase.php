<?php

namespace Packages\Todo\UseCases;

use Illuminate\Log\Logger;
use Illuminate\Log\LogManager;

/**
 * CreateTodo UseCase
 */
readonly class CreateTodoUseCase
{
    /**
     * @param  LogManager  $logger  Logger
     */
    public function __construct(
        private LogManager $logger
    ) {}

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
