<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOjaVuzA\srcApp_KernelDevContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOjaVuzA/srcApp_KernelDevContainer.php') {
    touch(__DIR__.'/ContainerOjaVuzA.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevContainer::class, false)) {
    \class_alias(\ContainerOjaVuzA\srcApp_KernelDevContainer::class, srcApp_KernelDevContainer::class, false);
}

return new \ContainerOjaVuzA\srcApp_KernelDevContainer([
    'container.build_hash' => 'OjaVuzA',
    'container.build_id' => '1ffa5ec3',
    'container.build_time' => 1592554375,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOjaVuzA');