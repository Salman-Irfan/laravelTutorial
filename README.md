

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

<h2>Primary and Foreign Key</h2>

| Table 1: Libraries            |              |
| ------------------------------| ------------ |
| **Field**                     | **Type**     |
| Id (Primary Key)              | Integer      |
| stu_id (Foreign Key)          | Integer      |
| Book                          | String       |
| due_date                      | Date         |
| status                        | String       |

| Table 2: Students            |              |
| ---------------------------- | ------------ |
| **Field**                    | **Type**     |
| Id (Primary Key)             | Integer      |
| Name                         | String       |
| Email                        | String       |

<h3>onUpdate & onDelete = 'cascade'</h3>
<p>To automatically update the foreign key by making changing in its associated primary key</p>

<pre>
    Schema::create('libraries', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('stu_id');
        $table->foreign('stu_id')
                ->references('id')
                ->on('students')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        $table->string('book');
        $table->date('due_date')->nullable();
        $table->boolean('status');
    });
</pre>

<h1>Day 4</h1>
<h2>Laravel Database Seeders</h2>
<p>Seeders and Factory</p>

<h3>Seeders - Real Data</h3>
<h4>Steps</h4>
<h5>1. Make Model</h5>
<p>#php artisan make:model Student</p>
<h5>2. Make Seeder File</h5>
<p>#php artisan make:seeder StudentSeeder</p>
<h5>3. Inside StudentSeeder File</h5>
<pre>
use App\Model\Student;
class StudentSeeder extends Seeder{
    public function run(): void {
        Student::create([
            'name' => 'Seeder Student',
            'email' => 'seeder.student@example.com',
        ]);
    }
}
</pre>

<h5>4. Run this seeder file</h5>
<p>/database/Seeders/DatabaseSeeder.php:</p>
<pre>
$this->call([
    StudentSeeder::class
]);
</pre>

<h5>5. Run seeder command</h5>
<pre>#php artisan db:seed</pre>
<h6>OR</h6>
<p>Ignore step 4 and run the below command directly</p>
<pre>#php artisan db:seed --class=StudentSeeder</pre>

<h3>Factory - Fake Data</h3>
<h4>Steps</h4>
<h5>1. Make Model</h5>
<pre>#php artisan make:model Student</pre>
<h5>2. Make Factory File</h5>
<pre>#php artisan make:factory StudentFactory</pre>
<h5>3. Inside this file</h5>
<pre>
class StudentFactory extends Factory {
    public function definition(): array {
        return [
            'name' => 'Fake Student',
            'email' => 'fake@example.com',
        ];
    }
}
</pre>

<h5>4. Seeders/DatabaseSeeder.php</h5>
<pre>
use App\Models\Student;
Student::factory()->count(5)->create();
</pre>

<h5>5. Run db:seed command</h5>
<pre>#php artisan db:seed</pre>


<h1>Laravel Query Builder</h1>
<h1>Api Controllers</h1>
<h2>Base Url</h2>
<h3>http://127.0.0.1:8000/api/</h3>
<h4>get all records</h4>
<pre>
endpoint: /getAllUsers
headers: none
body: none
Respponse:
[
  {
    "id": 1,
    "name": "seeder",
    "email": "seeder@gmail.com",
    "age": 36,
    "city": "seeder city",
    "created_at": "2023-10-10 06:29:54",
    "updated_at": "2023-10-10 06:29:54"
  },
]
</pre>

<h4>get specific user by id</h4>
<pre>
endpoint: /users/1
headers: none
body: none
Respponse:
[
  {
    "id": 1,
    "name": "seeder",
    "email": "seeder@gmail.com",
    "age": 36,
    "city": "seeder city",
    "created_at": "2023-10-10 06:29:54",
    "updated_at": "2023-10-10 06:29:54"
  },
]
</pre>

<h4>get all users by name</h4>
<pre>
endpoint: /users/user10
headers: none
body: none
Respponse:
[
  {
    "id": 10,
    "name": "user10",
    "email": "user10@gmail.com",
    "age": 20,
    "city": "user10 city",
    "created_at": "2023-10-10 06:37:40",
    "updated_at": "2023-10-10 06:37:40"
  },
  {
    "id": 13,
    "name": "user10",
    "email": "test1@gmail.com",
    "age": 20,
    "city": "user10 city",
    "created_at": "2023-10-10 08:09:44",
    "updated_at": "2023-10-10 08:09:44"
  },
]
</pre>

<h4>show specific details from all records</h4>
<pre>
endpoint: /specific-details
headers: none
body: none
Respponse:
[
  {
    "name": "seeder",
    "email": "seeder@gmail.com"
  },
]
</pre>

<h4>show details conditionally</h4>
<pre>
endpoint: /condition
headers: none
body: none
Respponse:
[
  {
    "id": 10,
    "name": "user10",
    "email": "user10@gmail.com",
    "age": 20,
    "city": "user10 city",
    "created_at": "2023-10-10 06:37:40",
    "updated_at": "2023-10-10 06:37:40"
  }
]
</pre>

<h4>Create - Post Request - Add User</h4>
<pre>
endpoint: /create-user
headers: none
</pre>

<table>
  <thead>
    <tr>
      <th>Request</th>
      <th>Response</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <pre>
{
  "name" : "postman9",
  "email" : "postman9@email.com",
  "age" : 25,
  "city" : "lhr"
}
        </pre>
      </td>
      <td>
        <pre>
{
  "message": "User created successfully",
  "user": {
    "id": 20,
    "name": "postman9",
    "email": "postman9@email.com",
    "age": 25,
    "city": "lhr",
    "created_at": "2023-10-11 02:54:47",
    "updated_at": "2023-10-11 02:54:47"
  }
}
        </pre>
      </td>
    </tr>
  </tbody>
</table>

<h4>Update - Put Request - Add User</h4>
<pre>
endpoint: update-user/20
headers: none
</pre>

<table>
  <thead>
    <tr>
      <th>Request</th>
      <th>Response</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <pre>
{
  "name" : "postman21",
  "email" : "postman21@email.com",
  "age" : 20,
  "city" : "lhr"
}
        </pre>
      </td>
      <td>
        <pre>
{
  "message": "User updated successfully",
  "user": {
    "id": 20,
    "name": "postman21",
    "email": "postman21@email.com",
    "age": 20,
    "city": "lhr",
    "created_at": "2023-10-11 04:39:46",
    "updated_at": "2023-10-11 04:41:57"
  }
}
        </pre>
      </td>
    </tr>
  </tbody>
</table>