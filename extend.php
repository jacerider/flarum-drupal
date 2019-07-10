<?php

/**
 * @file
 * This file is part of jacerider/flarum-drupal.
 */

namespace JaceRider\FlarumDrupal;

use Flarum\Extend\Frontend;
use JaceRider\FlarumDrupal\Listeners\AddClientAssets;

return [
    (new Frontend('forum'))->content(AddClientAssets::class),
];
