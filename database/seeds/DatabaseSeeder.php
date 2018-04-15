<?php

use App\User;
use App\Employee;
use App\Otcategory;
use App\Designation;
use App\Sessioncategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
// $this->call(UsersTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');//this disable foreifh key check so we can truncate tables
    	//if we didnt do this thn foreifn key check errror popoup

//truncate will reset model(table)
        Designation::truncate();
        Otcategory::truncate();
        Sessioncategory::truncate();
        User::truncate();
        Employee::truncate();


//define seed quantity
        $userQuantity=50;
        $designationQuantity=20;
        $otcategoryQuantity=10;
        $sessioncategoryQuantity=10;
        $employeeQuantity=200;


//seed data
        factory(User::class,$userQuantity)->create();
        factory(Designation::class,$designationQuantity)->create();
        factory(Otcategory::class,$otcategoryQuantity)->create();
        factory(Sessioncategory::class,$sessioncategoryQuantity)->create();
        factory(Employee::class,$employeeQuantity)->create();


        // factory(Product::class,$productsQuantity)->create();//mehema dammama category_product poivot eka pirawenne naa

        // factory(Product::class,$productsQuantity)->create()->each(//mehema kalaama category_proiduct pivot eka pirenawea
        // 	function ($product)
        // 	{
        // 		$categories=Category::all()->random(mt_rand(1,5))->pluck('id');
        // 		$product->categories()->attach($categories);//meka thama category_product eka fill karana code eka attach nethod eka
        // 	}
        // ); 
        // factory(Transaction::class,$transactionsQuantity)->create();

    }
}
