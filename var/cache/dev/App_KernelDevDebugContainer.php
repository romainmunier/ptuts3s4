<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCDRqbNW\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCDRqbNW/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCDRqbNW.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCDRqbNW\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCDRqbNW\App_KernelDevDebugContainer([
    'container.build_hash' => 'CDRqbNW',
    'container.build_id' => 'e426f319',
    'container.build_time' => 1614586712,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCDRqbNW');
