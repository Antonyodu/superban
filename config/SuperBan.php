<?php
return [
    'cache_driver' => env('SuperBan_CACHE_DRIVER', 'file'),
    'apply_to_all_routes' => env('SuperBan_APPLY_TO_ALL_ROUTES', true),
    'specific_routes' => explode(',', env('SuperBan_SPECIFIC_ROUTES', '')),

];
