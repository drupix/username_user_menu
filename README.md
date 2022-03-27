# Username user menu

[![drupal](https://img.shields.io/badge/drupal-^9-blue.svg?style=flat-square&logo=drupal)](https://drupal.org/)
[![LICENSE](https://img.shields.io/github/license/drupix/twbase_utils?style=flat-square)](https://raw.githubusercontent.com/drupix/twbase_utils/master/LICENSE.txt)

## Features

This is a simple module that add a menu item **"User name"** to the user account menu. At runtime, the menu item is replaced with the real "username" of the logged in user.

If the user entity has the following extra fields, they will be used instead of the username:

* field_firstname : First name / Text (plain)
* field_lastname : Last name / Text (plain)

### Example

**Default (without extra fields)**

* username
  * My account (logged in users only)
  * Log out ("Log in" for anonymous users)

**With extra fields**

First name: John\
Last name : Doe

* John Doe
  * My account (logged in users only)
  * Log out ("Log in" for anonymous users)

**Notes**: note that you have to manually edit the menu and rearrange items at <http://www.example.com/admin/structure/menu/manage/account>.

## Installation

* Install as you would normally install a contributed Drupal module. Visit:
  <https://www.drupal.org/node/1897420> for further information.

## Maintainers

Current maintainers:

* [drupix](https://www.drupal.org/u/drupix)

This project has been sponsored by myself!
