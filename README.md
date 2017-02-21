# Animal Shelter

#### Epicodus PHP Week 3 lab, 2/21/2017

#### By Sarah Leahy, Koji Nakagawa

## Description

Inventory app

## Setup/Installation Requirements
* See https://secure.php.net/ for details on installing _PHP_.  Note: PHP is typically already installed on Macs.
* See https://getcomposer.org for details on installing _composer_.
* Clone repository
* From project root, run > composer install --prefer-source --no-interaction
* From web folder in project, Start PHP > php -S localhost:8000
* In web browser open localhost:8000

## Known Bugs
* No known bugs

## Specifications
* Phase 1 - Dependencies and .gitignore.
* Phase 2 - Type, and Animal classes: exceptions property and empty constructor, getter, setter and  methods.
* Phase 3 - Build Test cases and implement methods

| Behavior - Our Program should Handle?| Input         | Output |             
|----------------------------------------------------------|----------|
|  accept one type of animal                        | Dog         | Dog   |
|  save input to database via save button   | Dog  |  in db- 1.Dog|
|  accept multiple types and save them      | Cat, bunny    |  in db- 1.cat, 2.bunny|
|  accept animal input in type               | animal = bulldog, fluffy, male, 2/21/17 type = dog|
|  accept multiple animals in type             | animal = spot, animal = bob type = dog|
|  Get complete inventory by type             | get All  dogs     |fluffy, spot, bob  |
|  Delete complete inventory                 | delete all |  "nothing in inventory"|

* Phase 4 - Initial Silex framework with "Hello" on home page
* Phase 5 - Create twig framework with a form to enter word, and string to be searched.
* Phase 6 - Create twig template for output page.


## Support and contact details
no support

## Technologies Used
* PHP
* Composer
* Silex
* Twig
* HTML
* CSS
* Bootstrap
* Git

## Copyright (c)
* 2017 Sarah Leahy, Koji Nakagawa

## License
* MIT
