# Bitcoin Widget

Widget that displays a carousel with bitcoin prices for different curriencies

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. 

### Prerequisites

-Sass compiler: to be able to modify sass files and compile them to css. https://sass-lang.com/install
-Composer: dependency managment, used to install and update guzzle and bootstrap.


### Installing

Get a copy of this project with:

```
git clone https://github.com/renzopiccardo/BitcoinWidget.git
```

or if you don't have git installed go to the repository and click download zip, then extract it
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

### Compiling Sass

```
cd _project folder_
```

```
sass scss/styles.scss:css/styles.css
```

### Modify bitcoin_widget_save.php 

This php file is used by the widget to connect to your target database. 
It currently works with a MySQL database. You should modify your credentials or set $con to your database

### Future steps

