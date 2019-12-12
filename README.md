# [Sagestarter](https://github.com/MoshCat/sagestarter)
[![Packagist](https://img.shields.io/packagist/vpre/roots/sage.svg?style=flat-square)](https://packagist.org/packages/roots/sage)
[![devDependency Status](https://img.shields.io/david/dev/roots/sage.svg?style=flat-square)](https://david-dm.org/roots/sage#info=devDependencies)
[![Build Status](https://img.shields.io/travis/roots/sage.svg?style=flat-square)](https://travis-ci.org/roots/sage)

Sagestarter is a WordPress starter theme based on [Roots/Sage](https://roots.io/sage/).

## Features

* Navigation with multilevel dropdown, mobile, keyboard & touchscreen support.
* Cleanup dashboard with [Intervention](https://github.com/soberwp/intervention)
* Starter variables ([global/_variables.scss](https://github.com/MoshCat/sagestarter/blob/master/resources/assets/styles/common/_variables.scss))
* Uniform spacing with mixins ([global/_mixins.scss](https://github.com/MoshCat/sagestarter/blob/master/resources/assets/styles/common/_mixins.scss))
* Widget styling [components/_widgets.scss](https://github.com/MoshCat/sagestarter/blob/master/resources/assets/styles/components/_widgets.scss)
* Gallery styling [components/_galleries.scss](https://github.com/MoshCat/sagestarter/blob/master/resources/assets/styles/components/_galleries.scss))
* Customised TinyMCE toolbar ([app/tinymce.php](https://github.com/MoshCat/sagestarter/blob/master/app/tinymce.php))
* Custom searchform ([resources/searchform.php](https://github.com/MoshCat/sagestarter/blob/master/resources/searchform.php))
* CustomEvent polyfill ([Sage docs](https://roots.io/sage/docs/sage-compatibility/#known-issues-with-internet-explorer))
* Animated hamburger menu
* Disabled Gutenburg editor and frontend block-styles.
* Page & Archive styling
* Gravityforms support in submodules
* Webfontloader
* Dutch translation

## Theme installation

* Clone Sagestarter to your WordPress themes directory:
```shell
# @ app/themes/ or wp-content/themes/
$ git clone --depth=1 git@github.com:MoshCat/sagestarter.git your-theme-name
```

* Or clone with submodules to include [Gravityforms Bootstrap Styling](https://github.com/MoshCat/gravityforms-bootstrap-styling) and [Gravityforms Bootstrap hooks](https://github.com/MoshCat/gravityforms-bootstrap-hooks) ([see below](https://github.com/MoshCat/sagestarter#gravityforms)):
```shell
# @ app/themes/ or wp-content/themes/
$ git clone --recurse-submodules --depth=1 git@github.com:MoshCat/sagestarter.git your-theme-name
```

* Remove git history and create new git:
```shell
# @ app/themes/ or wp-content/themes/themefolder
$ rm -rf .git
$ git init
```
* Run `composer install` in the theme directory
* Update `style.css` in the `resources` folder with your theme name.
* Update `config.json` in the `resources/assets` folder:
  * `devUrl` should reflect your local development hostname
  * `publicPath` should reflect your WordPress folder structure.
* Run `yarn && yarn build` from the theme directory to install dependencies and build the theme assets

## Gravityforms

If you plan on using Gravityforms, clone this git with submodules as mentioned above.
If you have already cloned the project use: `git submodule update --init --recursive` to initialize, fetch and checkout all submodules.

Dont forget to inlude the files in `functions.php` (line 67) and `main.scss` (line 22) by uncommenting the lines.

## Build commands

* `yarn start` — Compile assets when file changes are made, start Browsersync session
* `yarn build` — Compile and optimize the files in your assets directory
* `yarn build:production` — Compile assets for production

## Documentation

* [Sage documentation](https://roots.io/sage/docs/)
* [Controller documentation](https://github.com/soberwp/controller#usage)
