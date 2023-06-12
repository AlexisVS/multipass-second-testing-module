<?php

namespace AlexisVS\MultipassSecondTestingModule;

use App\Domain\Module\Modules\BaseModuleClass;

class MultipassSecondTestingModule extends BaseModuleClass
{
    public string $name = 'multipass-second-testing-module';

    public string $description = 'Second module for testing module dependencies ';

    public string $author = 'AlexisVS';

    public string $version = '0.0.10';

    public string $namespace = 'AlexisVS\MultipassSecondTestingModule';

    public string $class_name = 'MultipassSecondTestingModule';

    public string $vendor_path = 'alexisvs'.'/'.'multipass-second-testing-module';

    //    Methods available:
    //      - installVueComponents() : Install Vue components
}
