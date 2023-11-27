<h1 align="center" id="title">Seven Blocks</span></h1>
<p align="center" id="title">https://sevenblock.net</p>
<p align="center"><img src="https://github.com/yousifheikal/Seven-Block/assets/96316936/85e6cde3-541f-462d-b172-c2ac501086c9" alt="project-image" width="400"></p>


<h2>Introduction:</h2>
<p id="description">The Seven-Block project built with Laravel & Mysql (Backend), HTML CSS JS (Frontend), site used to display general and customer
designs and to see the customer's latest updates projects by
using livewire. The site also includes two languages,
Arabic and English, multi vendor. It has many features, for example,
adding to the shopping cart, admiring the designs,
then referring to them at another time, booking
designs, and also commenting on public and private
designs. There is a Dashboard to control all site..</p>

<h2>Project Screenshots:</h2>

<img src="https://github.com/yousifheikal/Seven-Block/assets/96316936/abc70a46-023e-451a-a49b-a6da65ae3d7b" width="200" height="150/">
<img src="https://github.com/yousifheikal/Seven-Block/assets/96316936/dacc973a-db1b-49e3-9591-fd44485a7ce7" width="200" height="150/">
<img src="https://github.com/yousifheikal/Seven-Block/assets/96316936/d300704d-133d-4b58-915f-28b32ab16ffe" width="200" height="150/">
<img src="https://github.com/yousifheikal/Seven-Block/assets/96316936/9cb75a94-89c9-4664-ae0f-2894ed626725" width="200" height="150/">

<img src="https://github.com/yousifheikal/Seven-Block/assets/96316936/1aefa3f4-b4a8-448a-a38d-706d564183a6" width="200" height="150/">
<img src="https://github.com/yousifheikal/Seven-Block/assets/96316936/462cceec-20ed-4be6-a32f-a4abe49501ce" width="200" height="150/">
<img src="https://github.com/yousifheikal/Seven-Block/assets/96316936/48bc387e-c211-4036-8931-3181c75b43ec" width="200" height="150/">
<img src="https://github.com/yousifheikal/Seven-Block/assets/96316936/a8b753b7-4d79-4045-8ae4-e85e43258c95" width="200" height="150/">
<img src="https://github.com/yousifheikal/Seven-Block/assets/96316936/7923b444-2697-4f48-a6c9-13bfbf93b908" width="200" height="150/">
<img src="https://github.com/yousifheikal/Seven-Block/assets/96316936/62d16559-c8e9-4a7f-9aa6-b6a38b59c24d" width="200" height="150/">
<img src="https://github.com/yousifheikal/Seven-Block/assets/96316936/d4820e74-bc05-4117-a14e-be1878d2a98b" width="200" height="150/">
<img src="https://github.com/yousifheikal/Seven-Block/assets/96316936/db0e8a9a-b7aa-48be-a532-94c118902395" width="200" height="150/">
<img src="https://github.com/yousifheikal/Seven-Block/assets/96316936/6584cd8f-1fb9-4423-9561-cbbe0b7b3c32" width="200" height="150/">
<img src="https://github.com/yousifheikal/Seven-Block/assets/96316936/cec17320-e2ce-4767-9e8a-280007101998" width="200" height="150/">


<h2>🧐 Features</h2>

* Authentication: Authentication feature enables users to create an account, login, and manage their credentials securely. It includes functionalities such as user registration, login,logout, password reset, and authentication token management, all functionalities i used via laravel jetstream Auth. Users can access protected resources and perform actions based on their authorization level.

* User Management: The user management feature allows administrators to manage user accounts, roles, and permissions. It includes functionalities such as creating user profiles, updating user information, enabling or disabling user accounts, and assigning appropriate roles and permissions.

* Dashboard : use to manage website 
ex-
1: CRUD => User
2: CRUD => Categories
3: CRUD => Designs
4: CRUD =>  special client & normal client designs
5: Show all orders
6: Show all contact-us
7: Time Sheet, use to management Employee

* Chat: The chat feature allows employees to communicate with each other and admins to communicate with employee

* Categories : Category feature organizes products. It allows creating, retrieving, updating and deleting categories. Products can be associated with one or multiple categories, allowing users to browse and filter products based on their category preferences

* Design: Designs management feature enables administrators to manage the design available in the seven blocks platform. It includes functionalities such as adding new design, updating design, associating design with categories ,enabling delete design,retrieve similar designs and popular designs, and sorting designs price for desire user from lowest to highest vice versa.

* Reviews Management: The review management feature allows users to leave reviews and ratings for designs they have purchased or used, but you must login in website before rating any product.

* Cart Management: The cart management feature allows users to add designs to their shopping cart, update quantities, remove items, and calculate the total price. It provides functionality to persist the cart data across sessions, allowing users to resume their shopping experience at a later time.

* Wishlist Management: The wishlist management feature allows users to add designs to their wishlist, display all design in wishlist, remove designs, save this wislist each user, allowing users to resume their shopping experience at a later time.

* Order Management: The order management feature, as described in the previous response, allows users to place orders, manage their orders, and track the status of their purchases. It includes functionalities such as order placement, order history, order status tracking, order confirmation, and communication.

* Contact Us: The Contact Us management feature allows you to know any problems you have and let us know about them


<h2> Documentation</h2>
[Website link](https://sevenblock.net)

<h2>💻 Built with</h2>

Technologies and tools used in the project:

*   Laravel 
*   Mysql
*   Laravel jetstream
*   Livewire
*   Design Pattern(Repository Pattern)
*   Pagination
*   Sessions
*   Faker
*   Validation
*   Hash, bcrypt
*   Pusher

<h2>🛠️ Installation Steps:</h2>

<p>1. Installation laravel project</p>

```
composer create-project laravel/laravel seven-blocks
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
