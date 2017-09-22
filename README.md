# Akeneo PIM Fake Bundle

A fake Akeneo PIM extension to demonstrate the [extension installer POC][1].

#### Installation:

* Install a standard PIM, from the ***poc-extension-installer*** branch:
```
$ git clone git@github.com:mmetayer/pim-community-dev.git -b poc-extension-installer
$ cd pim-community-dev
$ composer install
```

* Install the [extension-installer][1] composer plugin:
```
$ composer config repositories.extensionInstaller '{"type": "vcs", "url": "git@github.com:mmetayer/extension-installer.git", "branch": "dev-master"}'
$ composer require "mmetayer/extension-installer" "dev-master"
```

* Finally, install this fake extension
```
$ composer config repositories.fakeBundle '{"type": "vcs", "url": "git@github.com:mmetayer/FakeBundle.git", "branch": "dev-master"}'
$ composer require "mmetayer/fake-bundle" "dev-master"
```
    
* And *voilà!*
    * the **Pim\Bundle\FakeBundle\PimFakeBundle** is registered in the Kernel
    * the **Pim\Bundle\FakeBundle\Controller\FakeController** is registered as a service
    * the **pim_fake_fake_index** route is registered


[1]: https://github.com/mmetayer/extension-installer