<?php
/**
 * @author    Craig Gosman <craig@ingenerator.com>
 * @licence   proprietary
 */

namespace Ingenerator\K8s\ComposerPlugin;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class K8sBasesInstaller extends LibraryInstaller
{
    /**
     * @inheritDoc
     */
    public function getInstallPath(PackageInterface $package)
    {
        return 'k8s/vendor';
    }

    /**
     * @inheritDoc
     */
    public function supports($packageType)
    {
        return 'ingenerator-k8s-base' === $packageType;
    }
}
