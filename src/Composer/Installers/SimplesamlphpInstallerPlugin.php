<?php

namespace Composer\Installers;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

class SimplesamlphpInstallerPlugin extends LibraryInstaller {

  public function supports(string $packageType) {
    return 'simplesamlphp-theme' == $packageType;
  }

  public function getInstallPath(PackageInterface $package) {
    return 'vendor/simplesamlphp/simplesamlphp/modules' . $package->getPrettyName();
  }


}