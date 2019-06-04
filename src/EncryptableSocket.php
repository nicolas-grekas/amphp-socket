<?php

namespace Amp\Socket;

use Amp\CancellationToken;
use Amp\Promise;

interface EncryptableSocket extends Socket
{
    public const TLS_STATE_DISABLED = 0;
    public const TLS_STATE_SETUP_PENDING = 1;
    public const TLS_STATE_ENABLED = 2;
    public const TLS_STATE_SHUTDOWN_PENDING = 3;

    public function setupTls(?CancellationToken $cancellationToken = null): Promise;

    public function shutdownTls(?CancellationToken $cancellationToken = null): Promise;

    public function getTlsState(): int;
}
