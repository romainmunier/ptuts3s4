<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container57u41e6\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container57u41e6/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container57u41e6.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container57u41e6\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container57u41e6\App_KernelDevDebugContainer([
    'container.build_hash' => '57u41e6',
    'container.build_id' => 'b61d5852',
    'container.build_time' => 1602784569,
], __DIR__.\DIRECTORY_SEPARATOR.'Container57u41e6');
