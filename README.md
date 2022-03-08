# Username user menu

[![drupal](https://img.shields.io/badge/drupal-^9-blue.svg?style=flat-square&logo=drupal)](https://drupal.org/)
[![LICENSE](https://img.shields.io/github/license/drupix/twbase_utils?style=flat-square)](https://raw.githubusercontent.com/drupix/twbase_utils/master/LICENSE.txt)

## Features

The additional features provided by this module are:

* a `prose` (`tw-prose`) wrapper class is added to the editor `body` that allows tailwindcss-typography to works correctly while editing a node in the admin section
* **extra styles** provied by [TWBase Theme](https://github.com/drupix/twbase) are added to CKEditor for a better match with tailwindcss-typography and easily applying custom styles like:
  * `p.lead`
  * `code`
  * custom colors (`text-primary`, `text-secondary`, `text-success`, `text-danger`, `text-warning`)
  * `dropcap` for a Dropcap (big letter at the beginning of a sentence/word)
  * `button` (i.e. display a link like a button), and colored buttons `button--primary`, `button--secondary`, `button--success`, `button--danger`, `button--warning`
* an admin interface is provided to edit the showcase content
* and last but not least: it allows you to define showcase options per content type 🥳

**To have extra styles working you must add the "Styles" button to your CKEditor configuration at `/admin/config/content/formats/manage/full_html`**

## Installation

* Install as you would normally install a contributed Drupal module. Visit:
  <https://www.drupal.org/node/1897420> for further information.

## Maintainers

Current maintainers:

* [drupix](https://www.drupal.org/u/drupix)

This project has been sponsored by myself!
