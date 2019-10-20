# Bitcoin Widget

Widget that displays a carousel with bitcoin prices for different currencies

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. 

### Prerequisites

-Sass compiler: to be able to modify Sass files and compile them to css. https://sass-lang.com/install

-Composer: dependency management, used to install and update guzzle and bootstrap. https://getcomposer.org/download/


### Installing

Get a copy of this project with:

```
git clone https://github.com/renzopiccardo/BitcoinWidget.git
```

or if you don't have git installed:

-Go to the repository 

-Click download zip

-Extract it
```
https://github.com/renzopiccardo/BitcoinWidget
```

After installing composer run:

```
cd _project folder_
```

```
composer install
```

You have now installed all the dependencies required

### Compiling Sass

```
cd _project folder_
```

```
sass scss/styles.scss:css/styles.css
```

### Modify bitcoin_widget_save.php 

This PHP file is used by the widget to connect to your target database. 

It currently works with a MySQL database. You should modify your credentials or set $con to your database

### Future steps

#### Modify the way data is retrieved from the carousel and sent it by JQuery and AJAX

```
<div class="carousel-item">
  <span class="code" style="display:none">USD</span>
  <span class="symbol" style="display:none">$</span>'
  ...
</div>
```

Currently the info is obtained by looking at the innerHTML of spans in each carousel item. 

```
var code = $( ".carousel-item.active" ).find("span.code")[0].innerHTML;
```

It's possible to change the HTML code and send another value instead of the one obtained with the API.

Perhaps a better and safer way to do it could be:

-Get the currency code of the active carousel item

-Send it by ajax to bitcoin_widget_save.php

-Make a new request to the api

-Get fresh data for the currency selected

-Espape characters

-Insert into the database

#### Better custom css

Fix the need to use !important

#### Modify save button style and position
