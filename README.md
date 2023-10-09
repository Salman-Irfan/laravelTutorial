

## About Laravel Progress
<h2>Laravel Routing</h2>
Learnt the laravel web routing, icluding   routing parameters constraints, and 
- routes,
- routing parameters,
- multiple routing parameters, and 
- grouped routing including 
- handling page not found.


## Day 2
<h2>Laravel Blade Template</h2>
- arithmetic calculations,

- string representation,

- Writing Html & JS 

- php variables

- Working with Arrays and for each loop
## for each loop variables

## Day 3
<h2>DB Migrations</h2>
1. Create Database

2. Create Database Migration

3. Create tables in database

4. Seeding (Insert inital data in database)

5. Create Model

<h3>1. Create Databse</h3>

<p>By using Xamp and .env file</p>

<h3>Database Migration</h3>

<p>Migration artisan command</p>
<p>#php artisan make:migration create_students_table</p>
<p>/database/migrations/<timeStamp_students_table></p>

<p>With boiler class code</p>

<h4>Migration commands</h4>
<p>#php artisan migrate</p>
<p>#php artisan migrate --force</p>
<p>php artisan migrate:status => tells the ran and pending migration files</p>

<h4>To Undo Migration</h4>
<p>php artisan migrate:rollback</p>
<p>php artisan migrate:rollback --step=3 => Rollback the last 3 migration commands</p>
<p>php artisan migrate:rollback --batch=3 => Rollback the last 3rd migration commands</p>
<p>php artisan migrate:reset => Reset the all migration commands</p>
<p>php artisan migrate:refresh => First rollback then migrate</p>
<p>php artisan migrate:fresh => First reset then migrate => (Refresh and fresh are almost similar)</p>

<h4>Make model and migration file side by side</h4>
<p>#php artisan make:model Task -m</p>

<h4>Laravel Migration modifiers & constraints</h4>

<h5>Modifications with migration tables</h5>
<p>1. Column modifications</p>
<p>2. Table modifications</p>

<h5>Column Modifications</h5>
<p>1. Add new column</p>
<p>2. Rename column</p>
<p>3. Delete column</p>
<p>4. Change column order</p>
<p>4. Change datatype or column size</p>

<h5>Table Modifications</h5>
<p>Rename table</p>
<p>Delete table</p>

<h5>Column Modifications Commands</h5>
<p>#php artisan make:migration update_students_table --table=students</p>
<p>$table->renameColumn('from', 'to')</p>
<p>$table->dropColumn('city')</p>
<p>$table->dropColumn(['city', 'name'])</p>
<p>To change the size of existing column</p>
<p>$table->string('name', 50)->change()</p>
<p>To apply multiple changes in an existing column</p>
<p>$table->integer('votes')->unsidned()->default(1)->comment('any comment')->change()</p>
<p>Change Column Order</p>
<p>$table->after('password', function(Blueprint $table){
    $table->string(address);
})</p>

<h5>Modify Table with Migration</h5>
<p>#php artisan make:migration table-migration</p>
<p>Schema::rename('from', 'to')</p>
<p>Schema::dropIfExists('users')</p>

<h3>Constraints with Migration</h3>
<p>$table->integer('student_id')</p>
<p>$table->string('email')->unique()->nullable()</p>
<p>$table->string('city')->default('Lhr')</p>
<p>$table->primary('student_id')</p>

