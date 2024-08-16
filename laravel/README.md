
#### Epitech Benin

## OAuth Project
Welcome and thank you for joining this project. This readme is a guide to help you test or participate in this project; it's about creating a site that allows onnectc with oAuth 2 while using the Laravel , laravel Socialiteframework, and the Vuejs and SQL framework. I then chose to use Tailwind CSS for styling. This repository is also configured to allow you to work on its various parts completely independently.
*
*
## Prerequisites
-   node and npm
-   VsCode and PHP server
-   MySQL
-   Vuejs
-   Laravel and composer intall
-   composer require laravel/socialite

## Considerations
As mentionned previously, the base project is configured to make integrations and team work easier. These differents part are the backend and the components. The folder 'backend' at the root of the project contains all files relating to the project's Laravel logic. Still at the root of the project, the component folder contains all the files needed to display components for the interface. 
Last but not least, all the work is always gathered on the test branch to check everything before to bring it to the default branch, "main". 

## Getting Started First of all, you need to have mysql installed on your computer.
Now you need to download, SOURCE and USE the yowl database 

1) After installing composer dependencies, add your database credentials in .env file and then run migrations.

``php artisan migrate``

2) Now, navigate to client app and install composer dependencies.

``cd server``
``composer install``;

3) n the server app, navigate to http://server.test/developers route. And here create new OAuth client. It will generate client ID and secret.

Next, in the provider app, add following configurations in the .env file and it is ready to use.

provider_SERVER_ID=<client-id>
provider_SERVER_SECRET=<client=secret>
provider_SERVER_REDIRECT_URI=http://client.test/oauth/callback
OAUTH_SERVER_URI=http://127.0.0.1:8001

1) we recommend to change the directory to the one you just cloned and then enter the command :
    
    npm install
    
to install the dependencies (Tailwind and Vuejs) of the project.

## Project Infos
### Time : 2 Days (14/08/2024 - 15/08/2024)
### Module : C-DEV-160

# OAuth 

This project should help get you started developing with Vue 3 in Vite.

## Project Setup

```sh
npm install```


### Compile and Hot-Reload for Development

```sh
npm run dev```
``php artisan serve``

### Compile and Minify for Production

```sh
npm run build```



### Run Unit Tests with [Vitest](https://vitest.dev/)

```sh
npm run test:unit 
```

### Lint with [ESLint](https://eslint.org/)

```sh
npm run lint
```

## Installation info

### Vue [Documentation](https://vuejs.org/guide/introduction.html)

### Documentation to install [Tailwind](https://v2.tailwindcss.com/docs/guides/vue-3-vite)

### Laravel [Documentation](https://laravel.com/docs/)


## Features

* User Crud
  * Add comment
  * delete comment
  * view coment
  * Update comment

# Authors

1. Holane Soglo
   
   * Github : [Holane Soglo](https://github.com/holanesoglo)
   * Email : holane.soglo@epitech.eu


# License

- This project is owned by me.
- The project is open source but can't be used for illegal purposes.


## [Vue](https://img.shields.io/badge/Vue%20js-35495E?style=for-the-badge&logo=vuedotjs&logoColor=4FC08D)

## ![Tailwind](  https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)

## ![Postman](https://img.shields.io/badge/Postman-FF6C37?style=for-the-badge&logo=Postman&logoColor=white)

## ![Mysql](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)

## ![VsCode](https://img.shields.io/badge/VSCode-0078D4?style=for-the-badge&logo=visual%20studio%20code&logoColor=white)

## ![laravel](https://laravel.com/docs/11.x/socialite)





## Ready to go
You can now see the page built by starting your server with this command:
   
   php -S localhost:8001
   
  if your port 8001 is free, change it to an available port on your computer.

You're know ready to test the project and even add you contribution if you want.
