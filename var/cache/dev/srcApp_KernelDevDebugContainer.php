<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZ052cOU\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZ052cOU/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZ052cOU.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZ052cOU\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerZ052cOU\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Z052cOU',
    'container.build_id' => '77dcf45a',
    'container.build_time' => 1626364431,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZ052cOU');
