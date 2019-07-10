<?php

/**
 * @file
 * This file is part of jacerider/flarum-drupal.
 */

namespace JaceRider\FlarumDrupal;

use Flarum\Extend;
use JaceRider\FlarumDrupal\Listeners;

return [
    (new Extend\Frontend('forum'))->content(Listeners\AddClientAssets::class)
];
