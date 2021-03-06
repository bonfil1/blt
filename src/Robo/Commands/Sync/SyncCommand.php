<?php

namespace Acquia\Blt\Robo\Commands\Sync;

use Acquia\Blt\Robo\BltTasks;

/**
 * Defines commands in the "setup:sync*" namespace.
 */
class SyncCommand extends BltTasks {

  /**
   * Synchronize local env from remote (remote --> local).
   *
   * @command sync
   * @executeInDrupalVm
   */
  public function sync($options = [
    'sync-files' => FALSE,
  ]) {

    $commands = [
      'sync:db',
    ];

    // @todo Read sync.files config.
    if ($options['sync-files']) {
      $commands[] = 'sync:files';
    }

    $this->invokeCommands($commands);

  }

}
