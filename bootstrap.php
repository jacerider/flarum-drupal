<?php

/**
 * @file
 * This file is part of jacerider/flarum-drupal.
 */

namespace JaceRider\FlarumDrupal;

use Illuminate\Contracts\Events\Dispatcher;
use Listeners\AddClientAssets;

return function (Dispatcher $events) {
    $events->subscribe(AddClientAssets::class);
};
