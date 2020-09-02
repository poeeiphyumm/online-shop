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





GIT
......

-git init
-git add
-git commit -m "message"
-git remote add origin url
-git push -u origin master

-git pull


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