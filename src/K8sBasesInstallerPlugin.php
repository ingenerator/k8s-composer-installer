<?php
/**
 * @author    Craig Gosman <craig@ingenerator.com>
 * @licence   proprietary
 */

namespace Ingenerator\K8s\ComposerPlugin;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class K8sBasesInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new K8sBasesInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }

    public function deactivate(Composer $composer, IOInterface $io)
    {
    }

    public function uninstall(Composer $composer, IOInterface $io)
    {
    }
}
