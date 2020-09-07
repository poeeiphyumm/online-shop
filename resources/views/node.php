//Main Functions
	-Item manage
		-Brand/ Category/ Subcategory

	-Sell / Shopping

	-Order Management
		-items / customer
		-orders / order_details

	-customer Management
		-reports


	-brands
	->1 | b1 | photo
	->2 | b2 | photo


	-categories
	->1 | fashion | photo
	->1 | electronic | photo


	-subcategories
	->1 | baby_wear | 1
.................................................................................

Model Relationship
...................
-one to one
	-hasOne(parent)
	-belongsTo (child)

-one to many
	-hasMany (p)
	-belongsTo (c)

-many to many
	-belongsToMany
	-pivot table


.....................................................................

Homework(using backend template)
.............
-create route for dashboard page(get)
-create master blade (view/backendtemplate.blade.php)
-create child blade (view/backdend/dashboard.blade.php)
-create controller BackendController
	-create method dashboardfun()
	-call view (backend.dashboard)
........................................................................


Item(CRUD)
...........
	create - show form,show data

	retrive - display data (all, row)

	update - show form with old value , update data

	delete - delete data
........................................


Authentication
...............

-installtion
	-nodejs(call npm in terminal)
-Docs
	-Security / Authentication
-Commands
	-composer require laravel/ui
	-php artisan ui bootstrap --auth
	-npm install
	-npm run dev
-Routes
	-localhost:8000/login
	-localhost:8000/register





GIT(upload project into your repo)
......

-git init(will crete .git folder)
-git add .

-git config -global user.name "mama"
-git config -global user.emal "mama@gmail.com"

-git commit -m "message"
-git remote add origin https://github.com
-git push -u origin master
.............................................

<!-- ၇ေးပီး  git ပေါ်ထပ်တင်တာ -->
-git status
-git add .
-git commit -m "added something"
-git push -u origin master
..................................

GIT(clone)
....
-git clone url
-cd folder
-cp .env.example .env(-)
-composer install
-php artisan key:generate
(.env - database config)
-php artisan migrate
-php artisan db:seed
-npm install
-npm run dev
......................................

GIT(team)
.....
-git pull



USER NAME => poeeiphyumm
PASSWORD => poeeiphyumm1234


Spatie 
........

	-composer require (3)
	-public (5)
	-php artisan migrate
	-create new seeder class (RoleTableSeeder)
	-seed this class 
	-User model -> use HasRoles
	-app/Http/Controller/Auth/RegisterController
		-create method -> assignRole
	-Register middleware (app/Http/kernel.php routeMiddleware)
	-routes/web.php
		-role:Admin