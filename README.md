<p align="center"><a href="#" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


## About Project

This application will be used to generate coin combinations.
### Technology used:
- PHP (Laravel:9)
- Mysql (8.0)
- VueJs 3
- Tailwind css 3
- Bootstrap

### Install process
Install just like a normal laravel 9 project.

- clone the project
- Go inside the project / cd into the project
- copy the .env.example file and rename it .env
- make a mysql database
- copy .env.example to .env & fillup necessary info.
- Give bootstrap and storage directory writable permission
- Open the terminal from project
- Run ```composer install```
- Generate artisan key ```php artisan key:generate```
- To generate mysql database tables run migrate & seed db ```php artisan migrate --seed```
- Next have to install front-end
- To install node_modules Run ```yarn install```
- To build Run ```yarn run dev or yarn run watch```
- Run ```php artisan serve``` to run the project in local computer

### Contribution Guide
1. After cloning create a branch from the develop branch with following format ```yourname/feature```. example: ```git checkout -b fintinkdev/two-factor-auth develop```
2. Commit pattern ```git commit -am 'refact:/fix:/feat: registration password rule added```
3. In commit first flag ```refact``` or ```fix``` will indicate what types of work it is.
4. Write all the codes into your own branch & push updates to that branch every day.
5. Remember don't merge branches except you are on your own branch.****
