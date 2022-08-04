<?php

namespace Composer\Installers;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

class SimplesamlphpInstallerPlugin extends LibraryInstaller {

  public function supports(string $packageType) {
    print($packageType);
    return 'simplesamlphp-module' === $packageType;
  }

  public function getInstallPath(PackageInterface $package) {
    print('vendor/simplesamlphp/simplesamlphp/modules' . $package->getPrettyName());
    return 'vendor/simplesamlphp/simplesamlphp/modules' . $package->getPrettyName();
  }


}