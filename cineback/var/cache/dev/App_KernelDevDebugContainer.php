<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerY84DW3Z\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerY84DW3Z/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerY84DW3Z.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerY84DW3Z\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerY84DW3Z\App_KernelDevDebugContainer([
    'container.build_hash' => 'Y84DW3Z',
    'container.build_id' => '8e73bd45',
    'container.build_time' => 1612822527,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerY84DW3Z');
