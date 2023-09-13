<h1 align="center" id="title">Seven Block</span></h1>

<p align="center"><img src="https://github.com/yousifheikal/Seven-Block/assets/96316936/ac774a27-9b84-4d77-974a-e4c8593646df" alt="project-image" width="400"></p>

<h2>Introduction:</h2>
<p id="description">The Seven-Block project built with Laravel & Mysql, site used to display general and customer
designs and to see the customer's latest updates projects by
using livewire. The site also includes two languages,
Arabic and English, multi vendor. It has many features, for example,
adding to the shopping cart, admiring the designs,
then referring to them at another time, booking
designs, and also commenting on public and private
designs. There is a Dashboard to control all site..</p>

<h2>Project Screenshots:</h2>

<img src="https://github.com/yousifheikal/Seven-Block/assets/96316936/7ac64bb6-f425-4bd2-bc9b-9391f46ef1fc" width="200" height="150/">
<img src="https://github.com/yousifheikal/Seven-Block/assets/96316936/2b976c04-39a4-44fa-a2a3-a98c63b85674" width="200" height="150/">
<img src="https://github.com/yousifheikal/Seven-Block/assets/96316936/739e5468-ea0b-42c2-a1bc-11d3cb6b0165" width="200" height="150/">
<img src="https://github.com/yousifheikal/Seven-Block/assets/96316936/73c7d455-c84a-4e19-ba8f-30b7bdd8aa7f" width="200" height="150/">

<img src="https://github.com/yousifheikal/Seven-Block/assets/96316936/92c603ed-1164-4d12-bbd1-7a62b29f034f" width="200" height="150/">
<img src="https://github.com/yousifheikal/Seven-Block/assets/96316936/ea7e3822-17af-42d8-85f5-a187827eef02" width="200" height="150/">
<img src="https://github.com/yousifheikal/Seven-Block/assets/96316936/680349b4-70ee-4e5a-afac-eecfd9569466" width="200" height="150/">
<img src="https://github.com/yousifheikal/Seven-Block/assets/96316936/47516970-91a7-4ba9-8ed9-e287ac80a6f2" width="200" height="150/">
<img src="https://github.com/yousifheikal/Seven-Block/assets/96316936/b2f4152f-bc72-4d31-8579-2af354367770" width="200" height="150/">
<img src="https://github.com/yousifheikal/Seven-Block/assets/96316936/a094bd58-c9e7-49f7-98fb-ee7eb811c16a" width="200" height="150/">
<img src="https://github.com/yousifheikal/Seven-Block/assets/96316936/b65b7172-ef41-4845-9b6b-2252e34fc0f0" width="200" height="150/">
<img src="https://github.com/yousifheikal/Seven-Block/assets/96316936/3a0ac8c8-c906-457c-b8a6-ac3851a49cc4" width="200" height="150/">


<h2>🧐 Features</h2>

* Authentication: Authentication feature enables users to create an account, login, and manage their credentials securely. It includes functionalities such as user registration, login,logout, password reset, and authentication token management, all functionalities i used via laravel jetstream Auth. Users can access protected resources and perform actions based on their authorization level.

* User Management: The user management feature allows administrators to manage user accounts, roles, and permissions. It includes functionalities such as creating user profiles, updating user information, enabling or disabling user accounts, and assigning appropriate roles and permissions.


<h2> Documentation</h2>
[Postman doucments link](https://sevenblock.net/)

<h2>💻 Built with</h2>

Technologies and tools used in the project:

*   Laravel 
*   Mysql
*   Laravel jetstream
*   Design Pattern(Repository Pattern)
*   Faker
*   Validation
*   Hash, bcrypt

<h2>🛠️ Installation Steps:</h2>

<p>1. Installation laravel project</p>

```
composer create-project laravel/laravel smart-shop-api
```

<p>2. jetstream Authentication </p>

```
composer require laravel/jetstream

```

<p>3. Connection Database</p>

```
php artisan migrate
```

<p>4. Create model,migration,controller,factory,seeder and validation</p>

```
php artisan make:model example -a
```

<p>5. create JsonResource</p>

```
php artisan make:resource ExampleResource
```

<p>6. connection and test with fake data</p>

```
php artisan mi:f --seed
```

<p>7. connection with local server</p>

```
php artisan ser
```
