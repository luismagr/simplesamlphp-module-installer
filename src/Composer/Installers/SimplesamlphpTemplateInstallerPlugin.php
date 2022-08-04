<?php

namespace Composer\Installers;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class SimplesamlphpTemplateInstallerPlugin implements PluginInterface
{
  public function activate(Composer $composer, IOInterface $io)
  {
    $installer = new SimplesamlphpInstallerPlugin($io, $composer);
    $composer->getInstallationManager()->addInstaller($installer);
  }

  public function deactivate(Composer $composer, IOInterface $io) {
    // TODO: Implement deactivate() method.
  }

  public function uninstall(Composer $composer, IOInterface $io) {
    // TODO: Implement uninstall() method.
  }

}